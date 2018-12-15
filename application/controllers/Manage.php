<?php
/**
 * Created by Jacky.
 * Developer
 * Email: jacky@youaddon.com / hungtran@up5.vn
 * Phone: +84 972014011
 * Skype: tdhungit
 * Site: https://youaddon.com / https://up5.vn
 * Github: https://github.com/teamcarodev / https://github.com/youaddon
 * Facebook: https://www.facebook.com/jackytran0101
 */


class Manage extends AVC_Controller
{
    protected $require_auth = true;

    protected function init()
    {
        parent::init();
        $this->addGlobal('profile_name', 'Jacky');
    }

    protected function authenticate()
    {
        if ($this->isLogin()) {
            return true;
        }

        return false;
    }

    protected function authenticateError()
    {
        $this->redirect('/manage/logout');
    }

    public function index()
    {

    }

    public function login()
    {
        $return = $this->getQuery('r') ?: '/manage';

        if ($this->isLogin()) {
            return $this->redirect_return($this->getRequest('r'));
        }

        $this->data['title'] = __('Login');
        $this->data['return_url'] = $return;
        $this->setTitle($this->data['title']);

        if ($this->isPost()) {
            $this->disableView();
            /** @var User $userModel */
            $userModel = $this->getModel('user');
            $username = $this->getPost('username');
            $password = $this->getPost('password');
            if ($username && $password) {
                $user = $userModel->userLogin($username, $password);
                if ($user) {
                    $this->setSession([
                        'user_id' => $user['id'],
                        'user_username' => $user['username'],
                        'user_isadmin' => $user['is_admin'],
                    ]);

                    $this->setSuccess('Login successful');
                    return $this->redirect_return($this->getPost('return_url'));
                }

                $this->setError('Login error');
                return $this->redirect('/manage/login?r=' . $this->getPost('return_url'));
            }

            $this->setError(\Avoca\Libraries\AvocaRequestStatus::$InvalidParams);
            return $this->redirect('/manage/login?r=' . $this->getPost('return_url'));
        }
    }

    public function logout()
    {
        $this->disableView();
    }
}