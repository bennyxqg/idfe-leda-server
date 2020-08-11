<?php
App::uses('AppController', 'Controller');

/**
 * News Controller
 *
 * @property News $News
 */
class NewsController extends AppController
{

    var $uses = array('News', 'NewsCategory', 'Website');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '新闻信息管理';
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
        //if ($this->site_list != "all") {
        else{
            $conditions[$this->modelClass]['conditions'] = array('site_id' => $this->site_list);
        }

        if ($this->request->is('POST')) {
            $category_id = isset($this->data['category_id']) ? $this->request->datap["category_id"] : "";
            $title = $this->request->data['title'];
            if (!empty($category_id)) {
                $conditions[$this->modelClass]['conditions']['news_categories_id'] = $category_id;
            }
            if (!empty($title)) {
                $conditions[$this->modelClass]['conditions']['title like'] = "%{$title}%";
            }
            $this->set('title', $title);
            $this->set('category_id', $category_id);
        }
        
        if(isset($_GET['order']))
        {
        	if('desc' == $this->Session->read('order'))
        	{
        		$this->Session->write('order','asc');
        		$conditions[$this->modelClass]['order']=$_GET['order'].' asc';
        	}
        	else 
        	{
        		$this->Session->write('order','desc');
        		$conditions[$this->modelClass]['order']=$_GET['order'].' desc';
        	}
        }
        
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate($this->modelClass);
        $this->set('news', $result);

    }


    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $target = $this->server_info['directory_name'];
            $this->Image->upload('News', 'small_url', $target, $this->_upload_limit);
            $this->Image->upload('News', 'big_url', $target, $this->_upload_limit);
            $this->News->create();

            if ($this->News->save($this->request->data)) {
                $this->redirect_js('添加成功', "/admin/News/index");
            } else {
                $this->redirect_js('添加失败', "/admin/News/index");
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
    public function admin_edit($id = null, $page = null)
    {
        if (!$this->News->exists($id)) {
            throw new NotFoundException(__('Invalid news'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $target = $this->server_info['directory_name'];
            $this->Image->upload('News', 'small_url', $target, $this->_upload_limit);
            $this->Image->upload('News', 'big_url', $target, $this->_upload_limit);
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash(__('保存成功'));
                if (!empty($page)) {
                    $page = (int)$page;
                }
                $this->redirect_js('保存成功', "/admin/News/index/page:" . $page);
            } else {
                $this->Session->setFlash(__('保存失败, 请重试.'));
            }
        } else {
            $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
            $this->request->data = $this->News->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null, $page = null)
    {
        $this->News->id = $id;
        if (!$this->News->exists()) {
            throw new NotFoundException(__('Invalid news'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->News->delete()) {
            if (!empty($page)) {
                $page = (int)$page;
            }
            $this->redirect_js('删除成功', "/admin/News/index/page:" . $page);
        }
        $this->Session->setFlash(__('删除失败'));
        $this->redirect(array('action' => 'index'));
    }
    
    //获取配置数据
    public function getDatas() {
    	$type = $this->request->params['type'];
    	$page = $this->request->params['page'];
    	 
    	if ($page < 1) {
    		$page = 1;
    	}
    	$num = 8;
    	$start = ($page - 1) * $num;
    	$sql = "select str1,str2,label from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
    	$total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
    	$total = $this->News->query($total_sql);
    	$total = $total[0][0]['cnt'];
    	$list = $this->News->query($sql);
    	print_r($list);
    }
    
}
