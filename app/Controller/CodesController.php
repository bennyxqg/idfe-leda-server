<?php
App::uses('AppController', 'Controller');

/**
 * Codes Controller
 *
 * @property Code $Code
 */
class CodesController extends AppController
{

    var $uses = array("Code", "ServiceConfig");

    function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'admin_default';
        $title_for_layout = '发号基本信息管理';
        $this->set('title_for_layout', $title_for_layout);
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $this->Code->recursive = 0;
        $conditions = array();
        if ($this->site_list != "all") {
            $conditions["Code"]["conditions"]["site_id"] = $this->site_list;
        }
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate('Code');
        $result = Set::classicExtract($result, "{n}.Code");
        $this->set("result", $result);
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            if ($this->Code->save($this->request->data)) {
                $this->redirect_js("保存成功", "/admin/Codes/index");
            } else {
                $this->redirect_js("保存失败", "/admin/Codes/index");
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
        if (!$this->Code->exists($id)) {
            throw new NotFoundException(__('Invalid code'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Code->save($this->request->data)) {
                $this->redirect_js("保存成功", "/admin/Codes/index");
            } else {
                $this->redirect_js("保存失败", "/admin/Codes/index");
            }
        } else {
            $options = array('conditions' => array('Code.' . $this->Code->primaryKey => $id));
            $this->request->data = $this->Code->find('first', $options);
        }
        $this->set("id", $id);
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
        $this->Code->id = $id;
        if (!$this->Code->exists()) {
            throw new NotFoundException(__('Invalid code'));
        }
        if ($this->Code->delete()) {
            //要删除暂时不处理
            $this->redirect_js("删除成功", "/admin/Codes/index");
        }
        $this->redirect_js("删除失败", "/admin/Codes/index");

    }
}
