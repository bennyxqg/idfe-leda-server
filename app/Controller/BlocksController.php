<?php
App::uses('AppController', 'Controller');

/**
 * Blocks Controller
 *
 * @property Block $Block
 */
class BlocksController extends AppController
{

    var $uses = array('Block', 'Website');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '区块信息管理';
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
        
        if(isset($_GET['site_id']) && $_GET['site_id']){
        	$conditions[$this->modelClass]['conditions'] = array('site_id' => $_GET['site_id']);
        	$this->set('site_id',$_GET['site_id']);
        }
        else {
            $conditions[$this->modelClass]['conditions'] = array('site_id' => $this->site_list);
        }
        
        if ($this->request->is('POST')) {
        	$title = $this->request->data['title'];
        	if (!empty($title)) {
        		$conditions[$this->modelClass]['conditions']['title like'] = "%{$title}%";
        	}
        	$this->set('title', $title);
        }
        
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate($this->modelClass);

        $this->set('blocks', $result);

    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null)
    {
        if (!$this->Block->exists($id)) {
            throw new NotFoundException(__('Invalid block'));
        }
        $options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
        $this->set('block', $this->Block->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->Block->create();
            if ($this->Block->save($this->request->data)) {
                $this->redirect_js('增加成功', "/admin/Blocks/index");
            } else {
                $this->redirect_js('添加失败', "/admin/Blocks/index");
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
        if (!$this->Block->exists($id)) {
            throw new NotFoundException(__('Invalid block'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Block->save($this->request->data)) {
                $this->redirect_js('编辑成功', "/admin/Blocks/index");
            } else {
                $this->redirect_js('编辑成功', "/admin/Blocks/index");
            }
        } else {
            $options = array('conditions' => array('Block.' . $this->Block->primaryKey => $id));
            $this->request->data = $this->Block->find('first', $options);
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
        $this->Block->id = $id;
        if (!$this->Block->exists()) {
            throw new NotFoundException(__('Invalid block'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Block->delete()) {
            $this->redirect_js('删除成功', "/admin/Blocks/index");
        }
        $this->redirect_js('删除失败', "/admin/Blocks/index");
    }


}
