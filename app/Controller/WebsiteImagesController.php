<?php
App::uses('AppController', 'Controller');

/**
 * WebsiteImages Controller
 *
 * @property WebsiteImage $WebsiteImage
 */
class WebsiteImagesController extends AppController
{

    var $name = 'WebsiteImages';
    public $uses = array("WebsiteImage", "ListType");

    /**
     *
     * (non-PHPdoc)
     * @see Controller::beforeFilter()
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '网站图片管理';
        //$img_type=Configure::read("img_type");
        $img_type = $this->ListType->getListByType($this->site_list, 1);
        $this->set('img_type', $img_type);
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
        if (isset($_POST['site_id']) && $_POST['site_id']) {
            $this->set('site_id', $_POST['site_id']);
            $conditions[$this->modelClass]['conditions'] = array('site_id' => $_POST['site_id']);
        } else{
            $conditions[$this->modelClass]['conditions'] = array('site_id' => $this->site_list);
        }
        $this->Paginator->settings = $conditions;
        $result = $this->Paginator->paginate($this->modelClass);
        $this->set('websiteImages', $result);

    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->WebsiteImage->create();
            $target = "game";
            $this->Image->upload('WebsiteImage', 'small_url', $target, $this->_upload_limit);
            $this->Image->upload('WebsiteImage', 'big_url', $target, $this->_upload_limit);
            if ($this->WebsiteImage->save($this->request->data)) {
                $this->redirect_js("保存成功！", "/admin/WebsiteImages/index");
            } else {
                $this->redirect_js("保存失败！", "/admin/WebsiteImages/index");
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
        if (!$this->WebsiteImage->exists($id)) {
            throw new NotFoundException(__('Invalid website image'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $target = "game";
            $this->Image->upload('WebsiteImage', 'small_url', $target, $this->_upload_limit);
            $this->Image->upload('WebsiteImage', 'big_url', $target, $this->_upload_limit);
            if ($this->WebsiteImage->save($this->request->data)) {
                $this->redirect_js("保存成功！", "/admin/WebsiteImages/index");
            } else {
                $this->redirect_js("保存失败！", "/admin/WebsiteImages/index");
            }
        } else {
            $options = array('conditions' => array('WebsiteImage.' . $this->WebsiteImage->primaryKey => $id));
            $this->request->data = $this->WebsiteImage->find('first', $options);
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
        $this->WebsiteImage->id = $id;
        if (!$this->WebsiteImage->exists()) {
            throw new NotFoundException(__('Invalid website image'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->WebsiteImage->delete()) {
            $this->redirect_js("删除成功！", "/admin/WebsiteImages/index");
        }
        $this->redirect_js("删除失败！", "/admin/WebsiteImages/index");
    }


}
