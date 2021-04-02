<?php
App::uses('Controller', 'Controller');

class FanbookController extends Controller{

    public $components = array("Redis");
    public $uses = array('DocDir','DocMenu');
    private $params;

    public function beforefilter(){
        // 允许所有跨域请求
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers:X-Requested-With");
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        header("Access-Control-Allow-Methods:PUT,POST,GET,DELETE,OPTIONS"); //请求方式
        $this->params = array_merge((array)$this->request->query, (array)$this->request->data);
    }

    protected function echoJson($msg, $code = 0, $data = array()){
        $return_data['msg']         = $msg;
        $return_data['status']  = $code;
        $return_data['data']        = $data;

        $ret = json_encode($return_data);
        echo $ret;
        exit();
    }

    public function dir_list(){
        try{
            $conditions['conditions'] = array();
            $result = $this->DocDir->find('all', $conditions);
            $res = array();
            if(!empty($result)){
                foreach($result as $v){
                    $res[$v['DocDir']['id']] = $v['DocDir'];
                   
                }
            }
            $ret = array();
            foreach ($res as $item) {
                if (isset($res[$item['parent_id']])) {
                    $res[$item['parent_id']]['children'][] = &$res[$item['id']];
                } else {
                    $ret[] = &$res[$item['id']];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function dir_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $parent_id=isset($this->params["parent_id"])?$this->params["parent_id"]:0;
            $sort=isset($this->params["sort"])?$this->params["sort"]:0;
            $data = array(
                'name' => $name,
                'parent_id' => $parent_id,
                'sort' => $sort
            );
            $ret = $this->DocDir->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function dir_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $parent_id=isset($this->params["parent_id"])?$this->params["parent_id"]:0;
            $sort=isset($this->params["sort"])?$this->params["sort"]:0;
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->DocDir->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->DocDir->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'parent_id' => $parent_id,
                'sort' => $sort
            );
            $ret = $this->DocDir->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function dir_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->DocDir->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $conditions2['conditions'] = array('dir_id'=>$id);
            $info2 = $this->DocMenu->find('all', $conditions2);
            if(!empty($info2)){
                $this->echoJson('目录有文档不能删除', -3);
            }
            $ret = $this->DocDir->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function menu_list(){
        try{
            $conditions['conditions'] = array();
            $result = $this->DocMenu->find('all', $conditions);
            $res = array();
            if(!empty($result)){
                foreach($result as $v){
                    $conditions2['conditions'] = array('id' => $v['DocMenu']['dir_id']);
                    $info = $this->DocDir->find('first', $conditions2);
                    $v['DocMenu']['dir_name'] = $info['DocDir']['name']; 
                    $res[] = $v['DocMenu'];
                }
            }
            $this->echoJson('success', 0, $res);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function menu_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $author=isset($this->params["author"])?$this->params["author"]:"";
            if(empty($author)){
                $this->echoJson('author参数不能为空', -2);
            }
            $dir_id=isset($this->params["dir_id"])?$this->params["dir_id"]:"";
            if(empty($dir_id)){
                $this->echoJson('dir_id参数不能为空', -3);
            }
            $content=isset($_FILES["content"]['tmp_name'])?$_FILES["content"]['tmp_name']:"";
            if(empty($content)){
                $this->echoJson('文件不能为空', -4);
            }
            $sort=isset($this->params["sort"])?$this->params["sort"]:0;
            $data = array(
                'name' => $name,
                'author' => $author,
                'dir_id' => $dir_id,
                'content' => file_get_contents($content),
                'sort' => $sort,
            );
            $ret = $this->DocMenu->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function menu_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $author=isset($this->params["author"])?$this->params["author"]:"";
            if(empty($author)){
                $this->echoJson('author参数不能为空', -2);
            }
            $dir_id=isset($this->params["dir_id"])?$this->params["dir_id"]:"";
            if(empty($dir_id)){
                $this->echoJson('dir_id参数不能为空', -3);
            }
            $sort=isset($this->params["sort"])?$this->params["sort"]:0;
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->DocMenu->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->DocMenu->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'author' => $db->value($author, 'string'),
                'dir_id' => $dir_id,
                'sort' => $sort
            );
            if(!empty($_FILES["content"]['tmp_name'])){
                $data['content'] = $db->value(file_get_contents($_FILES["content"]['tmp_name']));
            }
            $ret = $this->DocMenu->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function menu_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->DocMenu->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->DocMenu->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function dir_doc_list(){
        try{
            $conditions['conditions'] = array();
            $result = $this->DocDir->find('all', $conditions);
            $res = array();
            if(!empty($result)){
                foreach($result as $v){
                    $res[$v['DocDir']['id']] = $v['DocDir'];
                   
                }
            }
            $ret = array();
            foreach ($res as $item) {
                $conditions['conditions'] = array('dir_id'=>$item['id']);
                $conditions['fields'] = array('id','name');
                $menuList = $this->DocMenu->find('all', $conditions);
                $menuInfo = array_column($menuList, 'DocMenu');
                $res[$item['id']]['menu_info'] = $menuInfo;
                if (isset($res[$item['parent_id']])) {
                    $res[$item['parent_id']]['children'][] = &$res[$item['id']];
                } else {
                    $ret[] = &$res[$item['id']];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function menu_info(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->DocMenu->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $conditions2['conditions'] = array('id' => $info['DocMenu']['dir_id']);
            $info2 = $this->DocDir->find('first', $conditions2);
            $info['DocMenu']['dir_info'] = $info2['DocDir']; 
            $this->echoJson('success', 0, $info['DocMenu']);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }
}

