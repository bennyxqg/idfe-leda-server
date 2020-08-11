<?php
App::uses('AppController', 'Controller');

/**
 * Websites Controller
 *
 * @property Website $Website
 */
class WebsitesController extends AppController
{

    var $name = 'Websites';
    var $paginate = array('Website' => array('limit' => 10, 'order' => 'id desc'));

    function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '网站发布管理';
        $this->set('title_for_layout', $title_for_layout);
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
    	$user_info = $this->getUserInfo();
        $conditions[$this->modelClass]['limit'] = 20;
        $this->Paginator->settings = $conditions;
        $user_info['User']['site_id'] != 'all' ? $result = $this->Paginator->paginate($this->modelClass,array('id'=>$user_info['User']['site_id'])) : 
        $result = $this->Paginator->paginate($this->modelClass);
        $this->set('websites', $result);

    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->super_admin == false) {
            $this->redirect_js('没有权限', "/admin/Websites/index");
        }
        if ($this->request->is('post')) {
            $this->Website->create();
            if ($this->Website->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/Websites/index");
            } else {
                $this->redirect_js('保存失败', "/admin/Websites/index");
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null)
    {
    	$user_info = $this->getUserInfo();
    	
        if ($this->super_admin == false && $user_info['User']['site_id']!=$id) {
            $this->redirect_js('没有权限', "/admin/Websites/index");
        }
        if (!$this->Website->exists($id)) {
            throw new NotFoundException(__('Invalid website'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Website->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/Websites/index");
            } else {
                $this->redirect_js('保存失败', "/admin/Websites/index");
            }
        } else {
            $options = array('conditions' => array('Website.' . $this->Website->primaryKey => $id));
            $this->request->data = $this->Website->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null)
    {
        $this->Website->id = $id;
        if (!$this->Website->exists()) {
            throw new NotFoundException(__('Invalid website'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Website->delete()) {
            $this->redirect_js('删除成功', "/admin/Websites/index");
        }

    }

    /**
     * 循环复制 某个目录
     * @param $src
     * @param $dst
     *
     */
    function recurse_copy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    $this->recurse_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }


}
