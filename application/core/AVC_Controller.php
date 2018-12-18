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

/**
 * Class AVC_BaseController
 */
class AVC_BaseController extends Avoca\Libraries\Controllers\AvocaBaseController {}

/**
 * Class AVC_Controller
 */
class AVC_Controller extends Avoca\Libraries\Controllers\AvocaController {}

/**
 * Class AVC_ManageController
 */
class AVC_ManageController extends AVC_Controller
{
    protected $model = '';
    protected $viewdefs = null;

    public function init()
    {
        parent::init();
        $this->addGlobal('profile_name', 'Jacky');
    }

    protected function authenticate()
    {
        if (!$this->isLogin()) {
            return false;
        }

        return true;
    }

    protected function authenticateError()
    {
        $this->setError('You must login to access this page');
        return $this->redirect('/manage/login?r=' . current_url());
    }

    protected function getModel($modelName = '')
    {
        if (empty($modelName)) {
            $modelName = $this->model;
        }

        return parent::getModel($modelName);
    }

    protected function fetch_display($template = null)
    {
        $this->autoGlobals();

        if (!$this->view_path) {

            $root_path = 'templates' . DIRECTORY_SEPARATOR;
            $view = $this->router->directory . strtolower($this->controller_name) . DIRECTORY_SEPARATOR . strtolower($this->action_name);

            if (!file_exists($this->getViewPath() . $root_path . $view . '.twig')) {
                $view = 'manage_templates' . DIRECTORY_SEPARATOR . strtolower($this->action_name);
                if (!file_exists($this->getViewPath() . $root_path . $view . '.twig')) {
                    show_error('ERROR template: ' . $this->getViewPath() . $root_path . $view . '.twig');
                }
            }

            $this->view_path = $view;
        } else {
            $root_path = 'templates' . DIRECTORY_SEPARATOR;
            $view = $this->router->directory . $this->view_path;

            if (!file_exists($this->getViewPath() . $root_path . $view . '.twig')) {
                $view = 'manage_templates' . DIRECTORY_SEPARATOR . $this->view_path;
                if (!file_exists($this->getViewPath() . $root_path . $view . '.twig')) {
                    show_error('ERROR template: ' . $this->getViewPath() . $root_path . $view . '.twig');
                }
            }

            $this->view_path = $view;
        }

        return parent::fetch_display($template);
    }

    protected function getViewDefs($model = '')
    {
        if (!$model) {
            if ($this->viewdefs) {
                return $this->viewdefs;
            }
        }

        $model = $model ? $model : $this->model;
        $uri_viewdef = 'config/models/' . $model . '.php';

        $layout_path = $this->getFilePath($uri_viewdef);
        if (file_exists($layout_path)) {
            $viewdefs = include $layout_path;

            if (!$model) {
                $this->viewdefs = $viewdefs;
            }

            return $viewdefs;
        }

        return [];
    }

    /*==================ACTIONS====================*/

    public function index()
    {
        $this->records();
    }

    // ACTION list
    public function records()
    {
        $this->view_path = 'records';
        $this->data['title'] = ucfirst($this->controller_name);

        if (!$this->page_title) {
            $this->setTitle(ucfirst($this->controller_name), true);
        }

        // get layout
        $viewdefs = $this->getViewDefs();
        if (!empty($viewdefs)) {
            $this->data['viewdefs'] = $viewdefs;
        }

        if (!empty($viewdefs['list'])) {
            $this->data['listdefs'] = $viewdefs['list'];
        }

        // get records
        $model = $this->getModel();
        $list = $model->getAll();

        $this->data['list'] = $list['records'];
        $this->data['model_name'] = $this->model;

        $this->data['records'] = [];
        if ($list && !empty($list['records'])) {
            $this->data['records'] = $list['records'];
        }
    }

    // ACTION create/edit
    public function edit($id = null)
    {
        $this->view_path = 'edit';
        $page_title = $this->lang->line('Create new') . ' ' . $this->lang->line(ucfirst($this->controller_name));

        // viewdefs
        $viewdefs = $this->getViewDefs();
        $this->data['viewdefs'] = $viewdefs;

        if (!empty($viewdefs['record'])) {
            $this->data['recorddefs'] = $viewdefs['record'];
        }

        $this->data['record'] = [];
        if ($id) {
            $record = $this->getModel()->get($id);
            $this->data['record'] = $record;
            if (!$this->page_title) {
                $key_title = (!empty($viewdefs['title'])) ? $viewdefs['title'] : 'id';
                $page_title = $this->lang->line('Edit') . ': ' . $record->$key_title;
            }
        }

        $this->data['title'] = $page_title;
        $this->setTitle($page_title);
    }

    // ACTION save
    public function save($ajax = null)
    {
        $this->disableView();

        if ($this->isPost()) {
            $post = $this->getPost();

            $model_name = $this->model;
            if (!empty($post['model'])) {
                $model_name = $post['model'];
            }

            $model = $this->getModel($model_name);
            $id = $model->save($post);

            // AJAX
            if ($ajax == 1) {
                if ($id) {
                    return $this->jsonData([
                        'error' => 0,
                        'message' => $this->lang->line('Save record success'),
                        'id' => $id
                    ]);
                }

                return $this->jsonData([
                    'error' => 1,
                    'message' => $model->getErrors(),
                ]);
            }

            // VIEW
            if ($id) {
                $this->setSuccess('Save record success!');
                $return_url = $this->controller_name;
            } else {
                $this->setError($model->getErrors());

                if (!empty($post['id'])) {
                    $return_url = $this->controller_name . '/edit/' . $post['id'];
                } else {
                    $return_url = $this->controller_name . '/edit';
                }
            }

            return $this->redirect($return_url);
        }

        return $this->redirect($this->controller_name);
    }

    // ACTION delete
    public function delete($id = null)
    {
        $this->disableView();
        if ($this->isPost()) {
            $ids = $this->getPost('ids');

            $model = $this->getModel();
            $model->delete($ids);
            $errors = $model->getErrors();
            if (empty($errors)) {
                $this->setSuccess('Deleted records successful');
            } else {
                $this->setError($errors);
            }

            return $this->redirect('/' . $this->controller_name);
        }

        if ($id) {
            $model = $this->getModel();
            $model->delete($id);
            $errors = $model->getErrors();
            if (empty($errors)) {
                $this->setSuccess('Deleted record successful');
            } else {
                $this->setError($errors);
            }
        }

        return $this->redirect('/' . $this->controller_name);
    }
}
