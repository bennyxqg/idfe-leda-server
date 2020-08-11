<?php
App::uses('AppController', 'Controller');

/**
 * Blocks Controller
 *
 * @property Block $Block
 */
class ClickLikeController extends AppController
{

    var $uses = array('LikePoint', 'ClickLike', 'Website');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '点赞管理';
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
        	$label = $this->request->data['label'];
        	if (!empty($label)) {
        		$conditions[$this->modelClass]['conditions']['label like'] = "%{$label}%";
        	}
        	$this->set('label', $label);
        }
        
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate($this->modelClass);
        
        $this->set('LikePoint', $result);

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
        if (!$this->LikePoint->exists($id)) {
            throw new NotFoundException(__('Invalid LikePoint'));
        }
        $options = array('conditions' => array('LikePoint.' . $this->LikePoint->primaryKey => $id));
        $this->set('LikePoint', $this->LikePoint->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->LikePoint->create();
            if ($this->LikePoint->save($this->request->data)) {
                $this->redirect_js('增加成功', "/admin/ClickLike/index");
            } else {
                $this->redirect_js('添加失败', "/admin/ClickLike/index");
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
        if (!$this->LikePoint->exists($id)) {
            throw new NotFoundException(__('Invalid LikePoint'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->LikePoint->save($this->request->data)) {
                $this->redirect_js('编辑成功', "/admin/ClickLike/index");
            } else {
                $this->redirect_js('编辑成功', "/admin/ClickLike/index");
            }
        } else {
            $options = array('conditions' => array('LikePoint.' . $this->LikePoint->primaryKey => $id));
            $this->request->data = $this->LikePoint->find('first', $options);
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
        $this->LikePoint->id = $id;
        if (!$this->LikePoint->exists()) {
            throw new NotFoundException(__('Invalid LikePoint'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->LikePoint->delete()) {
            $this->redirect_js('删除成功', "/admin/ClickLike/index");
        }
        $this->redirect_js('删除失败', "/admin/ClickLike/index");
    }


}
