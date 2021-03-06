<?php
/**
 * Created by AVOCA.IO
 * Website: http://avoca.io
 * User: Jacky
 * Email: hungtran@up5.vn | jacky@youaddon.com
 * Person: tdhungit@gmail.com
 * Skype: tdhungit
 * Git: https://github.com/tdhungit
 */

class Home extends AVC_Controller
{
    public function index()
    {
        /** @var Setting $sysModel */
        $sysModel = $this->getModel('setting');
        $this->data['sys_settings'] = $sysModel->getSystems();

        /** @var Profile $profileModel */
        $profileModel = $this->getModel('profile');
        $this->data['profile'] = $profileModel->getProfile();

        $skillModel = $this->getModel('skill');
        $skills = $skillModel->getAll();
        $this->data['skills'] = $skills['records'];

        $portfolioCatModel = $this->getModel('portfoliocat');
        $portfolio_cats = $portfolioCatModel->getAll();
        $this->data['portfolio_cats']  = $portfolio_cats['records'];

        $portfolioModel = $this->getModel('portfolio');
        $portfolios = $portfolioModel->getAll();
        $this->data['portfolios'] = $portfolios['records'];

        $expModel = $this->getModel('experience');
        $experiences = $expModel->getAll('', '(case when "date_end" is null then 0 else 1 end), date_end desc, date_start desc');
        $this->data['experiences'] = $experiences['records'];

        $blogModel = $this->getModel('blog');
        $blogModel->setLimit(3);
        $blogs = $blogModel->get_where('', false);
        $this->data['blogs'] = $blogs['records'];
    }

    public function page($id)
    {

    }

    public function blog()
    {
        /** @var Blogcat $catModel */
        $catModel = $this->getModel('blogcats');

        /** @var Blog $blogModel */
        $blogModel = $this->getModel('blog');

        $this->data['categories'] = $catModel->getAll();
    }

    public function blog_view($id)
    {

    }

    public function send_message()
    {
        $this->disableView();
        if ($this->isPost()) {

        }
    }
}