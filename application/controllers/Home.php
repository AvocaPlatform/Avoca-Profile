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
        //$this->disableView();
        /** @var Setting $sysModel */
        $sysModel = $this->getModel('setting');
        $this->data['sys_settings'] = $sysModel->getSystems();

        /** @var Profile $profileModel */
        $profileModel = $this->getModel('profile');
        $this->data['profile'] = $profileModel->getProfile();

        $skillModel = $this->getModel('skill');
        $skills = $skillModel->getAll();
        $this->data['skills'] = $skills['records'];

        $portfolioModel = $this->getModel('portfolio');
        $portfolios = $portfolioModel->getAll();
        $this->data['portfolios'] = $portfolios['records'];

        $this->data['portfolioCategories'] = getAppListStrings('portfolioCategory');

        $expModel = $this->getModel('experience');
        $experiences = $expModel->getAll('', '(case when "date_end" is null then 0 else 1 end), date_end desc, date_start desc');
        $this->data['experiences'] = $experiences['records'];

        $blogModel = $this->getModel('blog');
        $blogModel->setLimit(3);
        $blogs = $blogModel->get_where('', false);
        $this->data['blogs'] = $blogs['records'];
    }
}