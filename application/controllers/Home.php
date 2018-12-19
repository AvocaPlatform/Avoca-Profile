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
        /** @var Profile $profileModel */
        $profileModel = $this->getModel('profile');
        $this->data['profile'] = $profileModel->getProfile();

        $skillModel = $this->getModel('skill');
        $skills = $skillModel->getAll();
        $this->data['skills'] = $skills['records'];
    }
}