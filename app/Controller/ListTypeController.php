<?php
App::uses('AppController', 'Controller');

/**
 * NewsCategories Controller
 *
 * @property ListType $ListType
 */
class ListTypeController extends AppController
{


    public function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '分类信息管理';
        $this->set('title_for_layout', $title_for_layout);
    }
    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $conditions[$this->modelClass]['limit'] = 20;
        $conditions[$this->modelClass]['conditions'] = array('site_id' => $this->site_list);
        
        if (isset($_POST['site_id']) && $_POST['site_id']) {
            $this->set('site_id', $_POST['site_id']);
            $conditions[$this->modelClass]['conditions'] = array('site_id' => $_POST['site_id']);
        } else{
            $conditions[$this->modelClass]['conditions'] = array('site_id' => $this->site_list);
        }
        
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate($this->modelClass);
        $result = Set::classicExtract($result, "{n}.ListType");
        $this->set('result', $result);

    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->ListType->create();
            if ($this->ListType->save($this->request->data)) {
                $this->redirect_js('添加成功', "/admin/ListType/index");
            } else {
                $this->Session->setFlash(__('添加失敗'));
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
        if (!$this->ListType->exists($id)) {
            throw new NotFoundException(__('Invalid news category'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ListType->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/ListType/index");
            } else {
                $this->Session->setFlash(__('保存失敗'));
            }
        } else {
            $options = array('conditions' => array('ListType.' . $this->ListType->primaryKey => $id));
            $this->request->data = $this->ListType->find('first', $options);
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
        $this->ListType->id = $id;
        if (!$this->ListType->exists()) {
            throw new NotFoundException(__('Invalid news category'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->ListType->delete()) {
            $this->Session->setFlash(__('刪除成功'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('刪除失敗'));
        $this->redirect(array('action' => 'index'));
    }


    public function admin_get_list_by_id()
    {
        $site_id = $this->request->data["site_id"];
        if (empty($site_id)) {
            $this->export(array("ret" => 1, "msg" => "参数错误"));
        }
        $site_category_list = $this->ListType->getCategoryList($site_id);
        $this->export(array('ret' => 0, "data" => $site_category_list));

    }


}
