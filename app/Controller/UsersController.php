<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController
{
    var $name = 'Users';


    public function beforeFilter()
    {
        parent::beforeFilter();
        $title_for_layout = '用户权限管理';
        $this->set('title_for_layout', $title_for_layout);

    }
    public function admin_login()
    {
   
    	if($_SERVER['HTTP_HOST'] == 'jzw.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'fruit.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'ddx.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'seh.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'tp2.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'tjzs.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'mrj.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'ld.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'cqb.uu.cc' 
    			|| $_SERVER['HTTP_HOST'] == 'mrp.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'hnd.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'tntgd.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'op.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'hjdt.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'tk.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'sds.uu.cc'
    			|| $_SERVER['HTTP_HOST'] == 'pao.uu.cc')
    		$this->redirect('/manage');
    		
        $this->layout = '';
        $this->checkLogin();
        if ($this->request->is('post')) {
        	
        	/*
        	$key='admin_login:'.$_SERVER["REMOTE_ADDR"];
        	if($this->Redis->exists($key))
        	{
        		exit("Please try later");
        	}
        	*/
        	
            if (empty($this->request->data["name"]) || empty($this->request->data["password"])) {
                $this->redirect_js("用户名或者密码不能为空！", "/admin/Users/login");
            }
            $name = $this->request->data['name'];
            $password = $this->request->data['password'];
            $result = $this->User->auth($name, $password);
            if ($result != false) {
                $this->Auth->login($result);
                $this->redirect_js("登陆成功！", "/admin/News/index");
            } else {
            	$this->Redis->set($key, 1, 300);
                $this->redirect_js("用户名！或者密码错误！", "/admin/Users/login");
            }
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        $this->redirect('/admin/Users/login');
    }


    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }


    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->super_admin == false) {
            $this->redirect_js('没有权限', "/admin/Users/index");
        }
        if ($this->request->is('post')) {
            $this->User->create();
            $this->request->data [$this->modelClass] ['site_id'] = !empty ($this->request->data [$this->modelClass] ['site_id']) ? implode(',', $this->request->data [$this->modelClass] ['site_id']) : '';
            $this->request->data [$this->modelClass] ['password']=md5($this->request->data [$this->modelClass] ['password']);
            if ($this->User->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/Users/index");
            } else {
                $this->redirect_js('保存失败', "/admin/Users/index");
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
        if ($this->super_admin == false) {
            $this->redirect_js('没有权限', "/admin/Users/index");
        }
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data [$this->modelClass] ['site_id'] = !empty ($this->request->data [$this->modelClass] ['site_id']) ? implode(',', $this->request->data [$this->modelClass] ['site_id']) : '';
            $this->request->data [$this->modelClass] ['password']=md5($this->request->data [$this->modelClass] ['password']);
            if ($this->User->save($this->request->data)) {
                $this->redirect_js('保存成功', "/admin/Users/index");
            } else {
                $this->redirect_js('保存失败', "/admin/Users/index");
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
            $this->request->data [$this->modelClass] ['site_id'] = !empty ($this->request->data [$this->modelClass] ['site_id']) ? explode(',', $this->request->data [$this->modelClass] ['site_id']) : '';
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
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('删除成功'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('删除失败'));
        $this->redirect(array('action' => 'index'));
    }

}
