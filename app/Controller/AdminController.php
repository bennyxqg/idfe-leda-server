<?php
App::uses('Controller', 'Controller');

class AdminController extends Controller{

    public $components = array("Redis");
    public $uses = array('Users','Block','News','NewsCategory','NewsComment','BlogMessage','BlogUsersMessage');
    private $params;
    private $loginFilter = array('login');
    private $session;
    private $token;
    private $tokenInfo;
    private $site_id;
   
    public function beforefilter(){
        // 允许所有跨域请求
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers:X-Requested-With");
        header('Access-Control-Allow-Headers:x-requested-with,content-type');  
        header("Access-Control-Allow-Methods:PUT,POST,GET,DELETE,OPTIONS"); //请求方式
        //参数
        $this->params = array_merge((array)$this->request->query, (array)$this->request->data);
        $urlArr = explode('/',$this->params['url']);
        if(!in_array($urlArr[1],$this->loginFilter)){
            //判断是否登录
            $this->token = $this->params['token'];
            if(!isset($this->token)){
                $this->echoJson('token参数缺失', 400);
            }
            $userInfo = $this->Redis->get($this->token);
            if(empty($userInfo)){
                $this->echoJson('未登录，请先登录', 401);
            }
            $this->tokenInfo = json_decode($userInfo,1);
            $this->site_id = $this->tokenInfo['Users']['site_id'];
        }
    }

    protected function echoJson($msg, $code = 0, $data = array()){
        $return_data['msg']         = $msg;
        $return_data['error_code']  = $code;
        $return_data['data']        = $data;
        
        $ret = json_encode($return_data);
        echo $ret;
        exit();
    }

    public function login(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $password=isset($this->params["password"])?$this->params["password"]:"";
            if(empty($name)){
                $this->echoJson('password参数不能为空', -2);
            }
            $conditions['conditions'] = array('name' => $name, 'password' => md5($password));
            $result = $this->Users->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('用户名或密码不匹配', -3);
            }
            $token = uniqid();
            $this->Redis->set($token,json_encode($result),3600);
            $ret = array('token'=>$token, 'name'=>$name);
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function login_out(){
        try{
            $res = $this->Redis->delete($this->token);
            $this->echoJson('success', 0, $res);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function basic_config_list(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id);
            $conditions['fields'] = array('id','title','Abbr','content');
            $result = $this->Block->find('all', $conditions);
            $ret = array();
            if(!empty($result)){
                foreach($result as $val){
                    $ret[] = $val['Block'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $dataSource->rollback();
            $this->echoJson('server error',-1000);
        }   
    }

    public function basic_config_add(){
        try{
            $title=isset($this->params["title"])?$this->params["title"]:"";
            if(empty($title)){
                $this->echoJson('title参数不能为空', -1);
            }
            $Abbr=isset($this->params["Abbr"])?$this->params["Abbr"]:"";
            if(empty($Abbr)){
                $this->echoJson('Abbr参数不能为空', -2);
            }
            $content=isset($this->params["content"])?$this->params["content"]:"";
            if(empty($content)){
                $this->echoJson('content参数不能为空', -3);
            }
			$data = array(
			                'title' => $title,
			                'Abbr' => $Abbr,
			                'content' => $content,
			                'site_id' => $this->site_id
			            );
            $conditions['conditions'] = array('Abbr'=>$Abbr);
            $result = $this->Block->find('first', $conditions);
            if(!empty($result)){
                $this->echoJson('字段重复', -4);
            }
            $ret = $this->Block->save($data);
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function basic_config_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $title=isset($this->params["title"])?$this->params["title"]:"";
            if(empty($title)){
                $this->echoJson('title参数不能为空', -1);
            }
            $Abbr=isset($this->params["Abbr"])?$this->params["Abbr"]:"";
            if(empty($Abbr)){
                $this->echoJson('Abbr参数不能为空', -2);
            }
            $content=isset($this->params["content"])?$this->params["content"]:"";
            if(empty($content)){
                $this->echoJson('content参数不能为空', -3);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->Block->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->Block->getDataSource();
            $data = array(
                'title' => $db->value($title, 'string'),
                'Abbr' => $db->value($Abbr, 'string'),
                'content' => $db->value($content, 'string'),
                'site_id' => $this->site_id
            );
            $ret = $this->Block->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }   
    }

    public function basic_config_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->Block->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->Block->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_category_list(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id);
            $result = $this->NewsCategory->find('all', $conditions);
            $name = array();
            if(!empty($result)){
                foreach($result as $category){
                    $name[$category['NewsCategory']['id']] = $category['NewsCategory']['name'];
                }
            }
            $this->echoJson('success', 0, $name);
        }catch(Exception $e){
            $dataSource->rollback();
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_category_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $data = array(
                'name' => $name,
                'site_id' => $this->site_id
            );
            $ret = $this->NewsCategory->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_category_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->NewsCategory->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->NewsCategory->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
            );
            $ret = $this->NewsCategory->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_category_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->NewsCategory->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->NewsCategory->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_list_all(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id);
            $conditions['fields'] = array('id','title');
            $result = $this->News->find('all', $conditions);
            $ret = array();
            if(!empty($result)){
                foreach ($result as $value) {
                    $val  = $value['News'];
                    $ret[] = $val;
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }   
    }

    public function news_list(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id);
            $result = $this->NewsCategory->find('all', $conditions);
            $ret = array();
            if(!empty($result)){
                foreach($result as $category){
                    $name[$category['NewsCategory']['id']] = $category['NewsCategory']['name'];
                }
                $conditions2['conditions'] = array('site_id'=>$this->site_id);
                $conditions2['fields'] = array('id','title');
                $count = $this->News->find('count', $conditions2);
                $page=isset($this->params["page"])?$this->params["page"]:"1";
                $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
                $offset = ($page-1)*$limit;
                $ret['total_page'] = ceil($count/$limit);
                $ret['per_page'] = $limit;
                $ret['page'] = $page;
                $conditions3['conditions'] = array('site_id'=>$this->site_id);
                $conditions3['offset'] = $offset;
                $conditions3['limit'] = $limit;
                $conditions3['fields'] = array('id','title','decription','content','news_categories_id','clicks','created','updated','small_url','big_url','site_id','isTop');
                $conditions3['order'] = array('created desc');
                $result2 = $this->News->find('all', $conditions3);
                if(!empty($result2)){
                    foreach ($result2 as $value) {
                        $val  = $value['News'];
                        $val['category_name'] = $name[$val['news_categories_id']];
                        $ret['list'][] = $val;
                    }
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }   
    }

    public function news_detail(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $conditions['fields'] = array('id','title','decription','content','news_categories_id','clicks','created','updated','small_url','big_url','site_id','isTop');
            $result = $this->News->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('id参数错误', -2);
            }
            $conditions2['conditions'] = array('site_id'=>$this->site_id);
            $result2 = $this->NewsCategory->find('all', $conditions2);
            $ret = array();
            foreach($result2 as $category){
                $name[$category['NewsCategory']['id']] = $category['NewsCategory']['name'];
            }
            $result['News']['category_name'] = $name[$result['News']['news_categories_id']];     
            $this->echoJson('success', 0, $result['News']);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }   
    }

    public function news_add(){
        try{
            $title=isset($this->params["title"])?$this->params["title"]:"";
            if(empty($title)){
                $this->echoJson('title参数不能为空', -1);
            }
            $decription=isset($this->params["decription"])?$this->params["decription"]:"";
            // if(empty($decription)){
            //     $this->echoJson('decription参数不能为空', -2);
            // }
            $content=isset($this->params["content"])?$this->params["content"]:"";
            if(empty($content)){
                $this->echoJson('content参数不能为空', -3);
            }
            $news_categories_id=isset($this->params["news_categories_id"])?$this->params["news_categories_id"]:"";
            if(empty($news_categories_id)){
                $this->echoJson('news_categories_id参数不能为空', -4);
            }
            $small_url=isset($this->params["small_url"])?$this->params["small_url"]:"";
            if(empty($small_url)){
                $this->echoJson('small_url参数不能为空', -5);
            }
            $big_url=isset($this->params["big_url"])?$this->params["big_url"]:"";
            if(empty($big_url)){
                $this->echoJson('big_url参数不能为空', -6);
            }
            $data = array(
                'title' => $title,
                'decription' => $decription,
                'content' => $content,
                'news_categories_id' => $news_categories_id,
                'small_url' => $small_url,
                'big_url' => $big_url,
                'site_id' => $this->site_id
            );
            $ret = $this->News->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $title=isset($this->params["title"])?$this->params["title"]:"";
            if(empty($title)){
                $this->echoJson('title参数不能为空', -1);
            }
            $decription=isset($this->params["decription"])?$this->params["decription"]:"";
            // if(empty($decription)){
            //     $this->echoJson('decription参数不能为空', -2);
            // }
            $content=isset($this->params["content"])?$this->params["content"]:"";
            if(empty($content)){
                $this->echoJson('content参数不能为空', -3);
            }
            $news_categories_id=isset($this->params["news_categories_id"])?$this->params["news_categories_id"]:"";
            if(empty($news_categories_id)){
                $this->echoJson('news_categories_id参数不能为空', -4);
            }
            $small_url=isset($this->params["small_url"])?$this->params["small_url"]:"";
            if(empty($small_url)){
                $this->echoJson('small_url参数不能为空', -5);
            }
            $big_url=isset($this->params["big_url"])?$this->params["big_url"]:"";
            if(empty($big_url)){
                $this->echoJson('big_url参数不能为空', -6);
            }
            $conditions['conditions'] = array('id'=>$id);
            $newsInfo = $this->News->find('first', $conditions);
            if(empty($newsInfo)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->News->getDataSource();
            $data = array(
                'title' => $db->value($title, 'string'),
                'decription' => $db->value($decription, 'string'),
                'content' => $db->value($content, 'string'),
                'news_categories_id' => $news_categories_id,
                'small_url' => $db->value($small_url, 'string'),
                'big_url' => $db->value($big_url, 'string'),
                'site_id' => $this->site_id
            );
            $ret = $this->News->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $newsInfo = $this->News->find('first', $conditions);
            if(empty($newsInfo)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->News->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_top(){
       try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $type = $this->params["type"];
            if(!isset($this->params["type"])){
                $this->echoJson('type参数不能为空', -2);
            }
            $conditions['conditions'] = array('id'=>$id);
            $newsInfo = $this->News->find('first', $conditions);
            if(empty($newsInfo)){
                $this->echoJson('id数据错误', -3);
            }
            if($type == 1 && ($newsInfo['News']['isTop'] == 1)){
                $this->echoJson('已经置顶过', -4);
            }
            if($type == 0 && ($newsInfo['News']['isTop'] == 0)){
                $this->echoJson('已经没有置顶了', -4);
            }
            $data = array('isTop'=>$type,'updated'=>time());
            $ret = $this->News->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_comment_list(){
       try{
            $ret = array();
            $conditions['conditions'] = array();
            if(isset($this->params['start_time']) && isset($this->params['end_time'])){
                $conditions['conditions']['created >= '] = $this->params['start_time'];
                $conditions['conditions']['created <= '] = $this->params['end_time'];
            }
            if(isset($this->params['update_start_time']) && isset($this->params['update_end_time'])){
                $conditions['conditions']['updated >= '] = $this->params['update_start_time'];
                $conditions['conditions']['updated <= '] = $this->params['update_end_time'];
            }
            if(isset($this->params['comment'])){
                $conditions['conditions']['comment like '] = "%".$this->params['comment']."%";
            }
            if(isset($this->params['third_user_name'])){
                $conditions['conditions']['third_user_name like '] = "%".$this->params['third_user_name']."%";
            }
            if(isset($this->params['news_id'])){
                $conditions['conditions']['news_id'] = $this->params['news_id'];
            }
            if(isset($this->params['is_deal']) && ($this->params['is_deal'] == 1)){
                $conditions['conditions']['status <>'] = 0;
            }else{
                $conditions['conditions']['status'] = 0;
            }
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $count = $this->NewsComment->find('count', $conditions);
            if($count > 0){
                $ret['total_page'] = ceil($count/$limit);
                $ret['per_page'] = $limit;
                $ret['page'] = $page;
            }
            $offset = ($page-1)*$limit;
            $conditions2 = $conditions;
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $conditions2['order'] = array('created desc');
            $info = $this->NewsComment->find('all', $conditions2);
            if(!empty($info)){
                foreach ($info as $value) {
                    if($value['NewsComment']['parent_id'] > 0){
                        //查询被评论人的信息
                        $conditions3['conditions'] = array('id'=>$value['NewsComment']['parent_id']);
                        $conditions3['fields'] = array('third_user_name','comment','third_user_avatar');
                        $info3 = $this->NewsComment->find('first', $conditions3);
                        $value['NewsComment']['be_commented_user_name'] = $info3['NewsComment']['third_user_name'];
                        $value['NewsComment']['be_commented_content'] =  $info3['NewsComment']['comment'];
                        //$value['NewsComment']['be_commented_comment'] = htmlspecialchars_decode($info3['NewsComment']['comment']);
                    }
                    if($value['NewsComment']['to_id'] > 0){
                        //查询被评论人的信息
                        $conditions4['conditions'] = array('id'=>$value['NewsComment']['to_id']);
                        $conditions4['fields'] = array('third_user_name','comment','third_user_avatar');
                        $info4 = $this->NewsComment->find('first', $conditions4);
                        $value['NewsComment']['be_commented_user_name'] = $info4['NewsComment']['third_user_name'];
                        $value['NewsComment']['be_commented_content'] =  $info4['NewsComment']['comment'];
                        //$value['NewsComment']['be_commented_comment'] = htmlspecialchars_decode($info3['NewsComment']['comment']);
                    }
                    //$value['NewsComment']['comment'] = htmlspecialchars_decode($value['NewsComment']['comment']);
                    $ret['list'][] = $value['NewsComment'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

     public function news_comment_deal(){
       try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $status=$this->params["status"];
            if(!isset($status)){
                $this->echoJson('status参数不能为空', -2);
            }
            $data = array('status'=>$status);
            if($status == -1){
                $delete_reason=isset($this->params["delete_reason"])?$this->params["delete_reason"]:"";
                if(empty($delete_reason)){
                    $this->echoJson('delete_reason参数不能为空', -3);
                }
                $db = $this->NewsComment->getDataSource();
                $data['delete_reason'] = $db->value($delete_reason, 'string');
                $message = $delete_reason;
                $type = 3;
            }
            if($status == 1){
                $type = 4;
                $message = '您的评论已审核通过';
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->NewsComment->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            if($status == 2){
                //置顶操作
                $conditions2['conditions'] = array('news_id'=> $info['NewsComment']['news_id'],'status'=>2);
                $info2 = $this->NewsComment->find('first', $conditions2);
                if(!empty($info2)){
                    $this->echoJson('已经有评论置顶过,只能置顶一个评论', -2);
                }
            }
            $data['updated'] = time();
            $ret = $this->NewsComment->updateAll($data,array('id'=>$id));
            //通知用户
            if(in_array($status,array(1,-1))){
                $commentData = array(
                    'user_id'=>$info['NewsComment']['third_user_id'],
                    'site_id'=>$this->site_id,
                    'type'=>$type,
                    'news_id'=>$info['NewsComment']['news_id'],
                    'message'=>$message,
                    'comment_id'=>$id,
                    'comment_message'=>$info['NewsComment']['comment']
                );
                $ret1 = $this->BlogUsersMessage->save($commentData);
                //var_dump($ret1,$commentData);
            }
            //审核评论通过时
            if($info["NewsComment"]["parent_id"] > 0 && $status == 1){
                //给被评论人发消息
                if($info["NewsComment"]["to_id"] > 0){
                    $conditions2['conditions'] = array('id'=>$info["NewsComment"]["to_id"]);
                }else{
                    $conditions2['conditions'] = array('id'=>$info["NewsComment"]["parent_id"]);
                }
                $result2 = $this->NewsComment->find('first', $conditions2);
                // if($result2['NewsComment']['parent_id'] > 0){
                //     $comment_id = $result2['NewsComment']['parent_id'];
                // }else{
                //     $comment_id = $result2['NewsComment']['id'];
                // }
                $commentData2 = array(
                    'user_id'=>$result2['NewsComment']['third_user_id'],
                    'site_id'=>$this->site_id,
                    'type'=>2,
                    'message'=>'',
                    'news_id'=>$result2['NewsComment']['news_id'],
                    'parent_id'=>$result2['NewsComment']['parent_id'],
                    'comment_id'=>$result2['NewsComment']['id'],
                    'comment_message'=>$result2['NewsComment']['comment'],
                    'reply_message'=>$info["NewsComment"]["comment"],
                    'reply_user_id'=>$info["NewsComment"]['third_user_id'],
                    'reply_user_name'=>$info["NewsComment"]['third_user_name'],
                    'reply_user_avatar'=>$info["NewsComment"]['third_user_avatar'],
                    'reply_id'=>$info['NewsComment']['id']
                );
                $this->BlogUsersMessage->create();
                $commentData2['created'] = time();
                $ret2 = $this->BlogUsersMessage->save($commentData2);
                //给评论增加热度
                $this->NewsComment->updateAll(array('hot'=>"hot+3"),array('id'=>$info["NewsComment"]["parent_id"]));   
            }        
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }   
    }

    public function blog_message_list(){
       try{
            $ret = array();
            $conditions['conditions'] = array();
            if(isset($this->params['start_time']) && isset($this->params['end_time'])){
                $conditions['conditions']['created >= '] = $this->params['start_time'];
                $conditions['conditions']['created <= '] = $this->params['end_time'];
            }
            if(isset($this->params['message'])){
                $conditions['conditions']['message like '] = "%".$this->params['message']."%";
            }
            if(isset($this->params['user_name'])){
                $conditions['conditions']['user_name like '] = "%".$this->params['user_name']."%";
            }
            if(isset($this->params['is_deal']) && ($this->params['is_deal'] == 1)){
                $conditions['conditions']['status'] = array(-1,1);
            }elseif(isset($this->params['is_deal']) && ($this->params['is_deal'] == 0)){
                $conditions['conditions']['status'] = 0;
            }elseif(isset($this->params['is_deal']) && ($this->params['is_deal'] == 2)){
                $conditions['conditions']['status'] = 2;
            }
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $count = $this->BlogMessage->find('count', $conditions);
            if($count > 0){
                $ret['total_page'] = ceil($count/$limit);
                $ret['per_page'] = $limit;
                $ret['page'] = $page;
            }
            $offset = ($page-1)*$limit;
            $conditions2 = $conditions;
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $conditions2['order'] = array('created desc');
            $info = $this->BlogMessage->find('all', $conditions2);
            if(!empty($info)){
                foreach ($info as $value) {
                    if(!empty($value['BlogMessage']['reply_info'])){
                        $value['BlogMessage']['reply_info'] = json_decode($value['BlogMessage']['reply_info'],1);
                    }
                    $ret['list'][] = $value['BlogMessage'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

     public function blog_message_deal(){
       try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $status=$this->params["status"];
            if(!isset($status)){
                $this->echoJson('status参数不能为空', -2);
            }
            $data = array('status'=>$status);
            if($status == -1){
                $delete_reason=isset($this->params["delete_reason"])?$this->params["delete_reason"]:"";
                if(empty($delete_reason)){
                    $this->echoJson('delete_reason参数不能为空', -3);
                }
                $db = $this->BlogMessage->getDataSource();
                $data['delete_reason'] = $db->value($delete_reason, 'string');
            }
            if($status == 2){
                $reply_info=$this->params["reply_info"];
                if(!isset($reply_info)){
                    $this->echoJson('reply_info参数不能为空', -4);
                }
                $db = $this->BlogMessage->getDataSource();
                $data['reply_info'] = $db->value($reply_info, 'string');
            }
            if($status == 1){
                $reply_info=$this->params["reply_info"];
                if(isset($reply_info)){
                    $db = $this->BlogMessage->getDataSource();
                    $data['reply_info'] = $db->value($reply_info, 'string');
                }   
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->BlogMessage->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->BlogMessage->updateAll($data,array('id'=>$id));
            if($status == 1){
                //通知用户
                $commentData = array(
                    'user_id'=>$info['BlogMessage']['user_id'],
                    'site_id'=>$this->site_id,
                    'type'=>5,
                    'message'=>$info['BlogMessage']['message']
                );
            }
            
            $this->BlogUsersMessage->save($commentData);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function uploadImg(){
        if(empty($_FILES['img'])){
            $this->echoJson('未上传图片',500);
        }
        $file = uniqid().'.png';
        // step 2. 上传文件到cdn
        App::uses('FtpApi', 'Vendor');
        $ftpApi = new FtpApi();
        $url = $ftpApi->upload($_FILES["img"]["tmp_name"],'',$file);
        if(!$url){
            $this->echoJson('上传到CDN发生错误',503);
        }
        //unlink($file);
        $this->echoJson('success',0, array('url'=>$url));
    }    
}

