<?php
App::uses('AppController', 'Controller');

/**
 * NewsCategories Controller
 *
 * @property NewsCategory $NewsCategory
 */
class NewsCategoriesController extends AppController
{

	var $uses = array('NewsCategory');
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
        $conditions["NewsCategory"]['limit'] = 20;
        if(isset($_GET['site_id']) && $_GET['site_id']){
        	$conditions["NewsCategory"]['conditions'] = array('site_id' => $_GET['site_id']);
        	$this->set('site_id',$_GET['site_id']);
        }
        //if ($this->site_list != "all") {
        else{
            $conditions["NewsCategory"]['conditions'] = array('site_id' => $this->site_list);
        }
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate('NewsCategory');
        $this->set('newsCategories', $result);

    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
    	$site_id = isset($_REQUEST['site_id']) ? $_REQUEST['site_id'] : '';
    	if($site_id){
    		$result = $this->NewsCategory->getCategoryList($site_id);
    		$str = '';
    		foreach ($result as $key=>$v){
    			$str .= "<option value='{$key}'>{$v}</option>";
    		}
    		echo json_encode(array('data'=>$str));
    		exit;
    	}
        if ($this->request->is('post')) {
            $this->NewsCategory->create();
            if ($this->NewsCategory->save($this->request->data)) {
                $this->redirect_js('添加成功', "/admin/NewsCategories/index");
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
        if (!$this->NewsCategory->exists($id)) {
            throw new NotFoundException(__('Invalid news category'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->NewsCategory->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/NewsCategories/index");
            } else {
                $this->Session->setFlash(__('保存失敗'));
            }
        } else {
            $options = array('conditions' => array('NewsCategory.' . $this->NewsCategory->primaryKey => $id));
            $this->request->data = $this->NewsCategory->find('first', $options);
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
        $this->NewsCategory->id = $id;
        if (!$this->NewsCategory->exists()) {
            throw new NotFoundException(__('Invalid news category'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->NewsCategory->delete()) {
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
        $site_category_list = $this->NewsCategory->getCategoryList($site_id);
        $this->export(array('ret' => 0, "data" => $site_category_list));

    }


}
