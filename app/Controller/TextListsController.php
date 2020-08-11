<?php
App::uses('AppController', 'Controller');

/**
 * TextLists Controller
 *
 * @property TextList $TextList
 */
class TextListsController extends AppController
{

    public $uses = array("TextList", "ListType");

    public function beforeFilter()
    {
        parent::beforeFilter();
//        $text_type=Configure::read("text_type");
        $text_type = $img_type = $this->ListType->getListByType($this->site_list, 0);
        $title_for_layout = '文本列表管理';
        $this->set('title_for_layout', $title_for_layout);
        $this->set("text_type", $text_type);
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
        }
        else 
        {
       		$conditions[$this->modelClass]['conditions'] = array('site_id' => $this->site_list);
        }
        if ($this->request->is("post")) {
            if (isset($this->request->data["title"]) && !empty($this->request->data["title"])) {
                $title = $this->request->data['title'];
                $conditions[$this->modelClass]['conditions']["title like"] = "%$title%";
            }
        }
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate($this->modelClass);
        $result = Set::classicExtract($result, "{n}.$this->modelClass");
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
            $this->TextList->create();
            if ($this->TextList->save($this->request->data)) {
                $this->redirect_js('添加成功', "/admin/TextLists/index");
            } else {
                $this->redirect_js('添加失败', "/admin/TextLists/index");
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
        if (!$this->TextList->exists($id)) {
            throw new NotFoundException(__('Invalid text list'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TextList->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/TextLists/index");
            } else {
                $this->redirect_js('保存失败', "/admin/TextLists/index");
            }
        } else {
            $options = array('conditions' => array('TextList.' . $this->TextList->primaryKey => $id));
            $this->request->data = $this->TextList->find('first', $options);
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
        $this->TextList->id = $id;
        if (!$this->TextList->exists()) {
            throw new NotFoundException(__('Invalid text list'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->TextList->delete()) {
            $this->redirect_js('删除成功', "/admin/TextLists/index");
        }
        $this->redirect_js('删除失败', "/admin/TextLists/index");
    }
}
