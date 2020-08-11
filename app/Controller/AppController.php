<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller

{
    var $uses = array('NewsCategory', 'Website');
    var $site_list; //登陆用户所拥有的站点id
    public $this_site_id;
    var $_upload_limit = array(
        'extension' => array('jpg', 'gif', 'png')
    );
    public $helper = array("BaseHelper");
    public $components = array('Session',
        'Auth' => array(
            'loginAction' => array('admin' => true, 'controller' => 'Users', 'action' => 'login'),
            'loginRedirect' => array('controller' => 'Users', 'action' => 'login', 'admin' => true)
        ),
        'Image',
        "Paginator",
        "JsAlert",
        "Redis"
    );
    public $super_admin=false;
    public $server_info;

    function _setErrorLayout() {

        if ($this->name == 'CakeError') {
            $this->layout="";
            $redirect_url = FULL_BASE_URL."/404.html";
            $this->redirect($redirect_url);
        }

    }
    function beforeRender() {
        $this->_setErrorLayout ();
    }
    /**
     *
     * (non-PHPdoc)
     * @see Controller::beforeFilter()
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'admin_default';
        $user_info = $this->getUserInfo();
        if (!empty($user_info)) {
            $this->set('user_info', $user_info);
        }
        if (!empty($user_info['User']['site_id'])) {
            if ($user_info['User']['site_id'] == 'all') {
                $this->site_list = $this->get_website_list();
                $this->super_admin=true;
            } else {
                if (false !== strpos(",", $user_info['User']['site_id'])) {
                    $this->site_list = explode(',', $user_info['User']['site_id']);
                } else {
                    $this->site_list = $user_info['User']['site_id'];
                }
            }
        }
        $session_site_id=intval($this->Session->read('site_id'));
        if($session_site_id > 0)
            $category_list = $this->NewsCategory->getCategoryList($session_site_id);
        else
            $category_list = $this->NewsCategory->getCategoryList($this->site_list);
        //$category_list = $this->NewsCategory->getCategoryList($this->site_list);
        $this->server_info = $this->Website->get_website_info($this->site_list);

        $website_list = $this->Website->get_website_list($this->site_list);
        $website_list = Set::combine($website_list, '{n}.id', '{n}.name');
        //在所有站点中 获取拥有权

        $this->set('site_list', $this->site_list);
        $this->set('server_info', $this->server_info);
        $this->set('website_list', $website_list);
        $this->set('category_list', $category_list);

                //在不同页面切换保留当前的site_id
        if(isset($_POST['site_id']))
            $_GET['site_id']=$_POST['site_id'];
        if(!isset($_GET['site_id']))
        {
            $pre_site_id=intval($this->Session->read('site_id'));
            if($pre_site_id > 0)
            {
                $_POST['site_id']=$_GET['site_id']=$pre_site_id;
            }
        }
        else
        {
            $this->Session->write('site_id',$_GET['site_id']);
        }
        $this->set('site_id',$_GET['site_id']);
        $this->this_site_id=$_GET['site_id'];
    }

    function get_website_list(){
        $this->Website->displayField="id";
        $result=$this->Website->find("list",array("conditions"=>array("status"=>1)));
        return $result;
    }

    function export($data)
    {
        header("content-type:text/html");
        die(json_encode($data));
    }

    public function redirect_js($msg, $url)
    {
        $msg = $this->JsAlert->alert($msg);
        $this->Session->setFlash($msg);
        $this->redirect($url);
    }

    /**
     *
     * 检查登陆
     * Enter description here ...
     */
    function checkLogin()
    {
        if ($this->Auth->user()) {
            $this->redirect('/admin/News/index');
        }
    }

    /**
     * 获取登陆用户信息
     *
     * Enter description here ...
     */
    function getUserInfo()
    {
        $data = $this->Auth->user();
        if (!empty($data)) {
            return $data;
        }
        return null;
    }

    /**
     * 上传文件 废弃
     * @return string
     */
    protected function upload_file($file, $ttl = 0, $file_id = '', $is_cdn = false, $callback = '', $ext_name = '', $mime = '')
    {
        App::import('Vendor', 'DFSApi');
        $obj = new DFSApi();
        $tmp = $obj->upload_file($file, $ttl, $file_id, '', $is_cdn, $callback, $ext_name, $mime);
        if (isset($tmp['data']['url'])) {
            return $tmp['data']['url'];
        } else {
            $this->log(__CLASS__ . '=>' . __LINE__ . ':' . var_export($tmp, 1));
            return '';
        }
    }

    /**
     * 删除文件 废弃
     * @param string $file_id
     *
     */
    protected function delete_file($file_id = '')
    {
        App::import('Vendor', 'DFSApi');
        $obj = new DFSApi();
        $tmp = $obj->delete_file($file_id);
        return $tmp;
    }

    /**
     * 做文件验证 已经编辑的时候的旧文件的删除 新文件的上传 废弃
     * @param $newfile  array
     * @param $oldfile   string
     * @param $isedit   bool
     * return string
     */
    protected function before_upload($new_file, $old_file, $is_edit = true)
    {
        if (!is_array($new_file) && $old_file == '') {
            return false;
        }
        if ($is_edit) {
            if (!empty($new_file['name'])) {
                //文件改变 先删除原来的文件
                $file_id = $old_file;
                if (!empty($file_id)) {
                    $tmp = $this->delete_file($file_id);
                    //$this->log($tmp,'tmp');
                    if ($tmp['ret'] != 0) {
                        $this->log($tmp, 'delete_file_error');
                    }
                }
                $tmp_name = $new_file['tmp_name'];
                $type = explode('/', $new_file['type']);
                $file_type = $type[1];
                $file_name = $this->upload_file($tmp_name, 0, '', false, '', $file_type);
                return $file_name;
            } else {
                //文件没有更新 还是用原来的文件
                return $old_file;
            }
        }
    }


}
