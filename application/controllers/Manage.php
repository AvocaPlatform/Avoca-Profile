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

/**
 * Class Manage
 * @property CI_Upload $upload
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
        if (in_array($this->action_name, array('login'))) {
            return true;
        }

        if ($this->isLogin()) {
            return true;
        }

        return false;
    }

    protected function authenticateError()
    {
        $this->redirect('/manage/login');
    }

    /*====================ACTIONS=========================*/

    public function index()
    {
        $this->addCss([
            'https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css',
        ]);

        $this->addJs([
            'https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js',
            'https://cdn.jsdelivr.net/npm/vue',
            '/js/profile.js',
        ]);

        $profile = $this->getModel('profile');
        $this->data['profile'] = $profile->get(1);
    }

    public function login()
    {
        if ($this->isLogin()) {
            return $this->redirect_return($this->getRequest('r'), '/manage');
        }

        $this->data['title'] = __('Login');
        $this->data['return_url'] = $this->getQuery('r');
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
                    return $this->redirect_return($this->getPost('return_url'), '/manage');
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
        $this->session->sess_destroy();
        return $this->redirect_return('/');
    }

    public function save_profile()
    {
        $this->disableView();

        if (!$this->isPost()) {
            return $this->redirect('/manage');
        }

        $errors = [];
        $post = $this->getPost();

        $config['upload_path'] = APPPATH . '../public/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 6000;
        $config['max_height'] = 6000;

        $this->load->library('upload', $config);

        if ($_FILES && $_FILES['avatar']['name']) {
            if (!$this->upload->do_upload('avatar')) {
                $errors[] = $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $post['avatar'] = $data['file_name'];
            }
        }

        if ($_FILES && $_FILES['cover']['name']) {
            if (!$this->upload->do_upload('cover')) {
                $errors[] = $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $post['cover'] = $data['cover'];
            }
        }

        $profile = $this->getModel('profile');
        $post['id'] = 1;
        $profile->save($post);

        $saveError = $profile->getErrors();
        if ($saveError) {
            $allErrors = array_merge($errors, $saveError);
            $this->setError(implode(', ', $allErrors));
        } else {
            $this->setSuccess('Updated profile');
        }

        return $this->redirect('/manage');
    }

    public function settings()
    {

    }
}