<?php
App::uses('Controller', 'Controller');

class AdminController extends Controller{

    public $components = array("Redis");
    public $uses = array('Users','Website','Block','News','NewsCategory','NewsComment','BlogMessage','BlogUsersMessage','PicGroup','PicInfo','VideoInfo','WebsiteConfig');
    private $params;
    private $loginFilter = array('login','test');
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
            if(isset($this->params['site_id'])){
                $this->site_id = $this->params['site_id'];
            }
            $this->server_info = $this->Website->get_website_info($this->site_id);
            if(!$this->server_info){
                $this->echoJson('站点不存在', -9999);
            }
            $this->directory_name = $this->server_info[0]['directory_name'];
            $this->domain_name = $this->server_info[0]['domain_name'];
            $this->template_dir = THEMES_DIR.DS.$this->directory_name;
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

    public function user_info(){
        $userInfo = $this->tokenInfo['Users'];
        unset($userInfo['password']);
        //$ret = array('info'=>$userInfo);
        $this->echoJson('success', 0, $userInfo);
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
            $conditions['conditions'] = array('Abbr'=>$Abbr);
            $result = $this->Block->find('first', $conditions);
            if(!empty($result)){
                $this->echoJson('字段重复', -4);
            }
            $this->echoJson('success', 0);
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
            if(isset($this->params['site_id'])){
                $conditions['conditions']['site_id'] = $this->params['site_id'];
            }
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
            if(isset($this->params['site_id'])){
                $conditions['conditions']['site_id'] = $this->params['site_id'];
            }
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

    public function site_info(){
        try{
            $conditions['conditions'] = array('id'=>$this->site_id);
            $conditions['fields'] = array('id','title','keywords','description','status','icon');
            $result = $this->Website->find('first', $conditions);
            $this->echoJson('success', 0, $result['Website']);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function site_info_edit(){
        try{
            $title=isset($this->params["title"])?$this->params["title"]:"";
            $keywords=isset($this->params["keywords"])?$this->params["keywords"]:"";
            $description=isset($this->params["description"])?$this->params["description"]:"";
            $icon=isset($this->params["icon"])?$this->params["icon"]:"";
            $status=isset($this->params["status"])?$this->params["status"]:"0";
            $db = $this->Website->getDataSource();
            $data = array(
                'title' => $db->value($title, 'string'),
                'keywords' => $db->value($keywords, 'string'),
                'description' => $db->value($description, 'string'),
                'icon' => $db->value($icon, 'icon'),
                'status' => $db->value($status, 'status')
            );
            $ret = $this->Website->updateAll($data,array('id'=>$this->site_id));
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_group_list(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id,'status'=>1);
            $conditions['fields'] = array('id','name','identifer','status');
            $result = $this->PicGroup->find('all', $conditions);
            $ret = array();
            if(!empty($result)){
                foreach($result as $val){
                    if(strpos($val['PicGroup']['id'],',')){
                        $groupId = explode(',',$val['PicGroup']['id']);
                    }else{
                        $groupId = $val['PicGroup']['id'];
                    }
                    $conditions2['conditions'] = array('site_id'=>$this->site_id,'group_id'=>$groupId,'status'=>1);
                    $conditions2['fields'] = array('id');
                    $count = $this->PicInfo->find('count', $conditions2);
                    $val['PicGroup']['count'] = $count;
                    $ret[] = $val['PicGroup'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_group_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $identifer=isset($this->params["identifer"])?$this->params["identifer"]:"";
            if(empty($identifer)){
                $this->echoJson('identifer参数不能为空', -2);
            }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $conditions['conditions'] = array('site_id'=>$this->site_id, 'identifer'=>$identifer);
            $result = $this->PicGroup->find('first', $conditions);
            if(!empty($result)){
                $this->echoJson('identifer字段重复', -3);
            }
            $conditions2['conditions'] = array('site_id'=>$this->site_id, 'name'=>$name);
            $result2 = $this->PicGroup->find('first', $conditions2);
            if(!empty($result2)){
                $this->echoJson('name字段重复', -4);
            }
            $data = array(
                'name'=>$name,
                'identifer'=>$identifer,
                'status'=>$status,
                'site_id'=>$this->site_id
            );
            $ret = $this->PicGroup->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_group_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $identifer=isset($this->params["identifer"])?$this->params["identifer"]:"";
            if(empty($identifer)){
                $this->echoJson('identifer参数不能为空', -2);
            }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $conditions['conditions'] = array('id'=>$id);
            $info = $this->PicGroup->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $conditions2['conditions'] = array('name'=>$name);
            $info2 = $this->PicGroup->find('first', $conditions2);
            if($info2['PicGroup']['id'] != $id){
                $this->echoJson('name已重复', -8);
            }
            $conditions3['conditions'] = array('identifer'=>$identifer);
            $info3 = $this->PicGroup->find('first', $conditions3);
            if($info3['PicGroup']['id'] != $id){
                $this->echoJson('identifer已重复', -8);
            }
            $db = $this->PicGroup->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'identifer' => $db->value($identifer, 'string'),
                'status' => $status
            );
            $ret = $this->PicGroup->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_group_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->PicGroup->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->PicGroup->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_info_list(){
        try{
            $ret = array();
            $conditions['conditions'] = array('site_id'=>$this->site_id,'status'=>1);
            $conditions['fields'] = array('id','name','group_id','jump_url','url','status','desc');
            $count = $this->PicInfo->find('count', $conditions);
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $offset = ($page-1)*$limit;
            $ret['total_page'] = ceil($count/$limit);
            $ret['per_page'] = $limit;
            $ret['page'] = $page;
            $conditions2['conditions'] = array('site_id'=>$this->site_id,'status'=>1);
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $conditions2['fields'] = array('id','name','group_id','jump_url','url','status','desc');
            $conditions2['order'] = array('created desc');
            $result = $this->PicInfo->find('all', $conditions2);
            if(!empty($result)){
                foreach($result as $val){
                    $ret['list'][] = $val['PicInfo'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }
    }

    public function pic_info_add(){
        try{
            $group_id=isset($this->params["group_id"])?$this->params["group_id"]:"";
            if(empty($group_id)){
                $this->echoJson('group_id参数不能为空', -2);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $jump_url=isset($this->params["jump_url"])?$this->params["jump_url"]:"";
            if(empty($jump_url)){
                $this->echoJson('jump_url参数不能为空', -1);
            }
            $url=isset($this->params["url"])?$this->params["url"]:"";
            if(empty($url)){
                $this->echoJson('url参数不能为空', -1);
            }
            $desc=isset($this->params["desc"])?$this->params["desc"]:"";
            // if(empty($desc)){
            //     $this->echoJson('desc参数不能为空', -1);
            // }
            // $status=isset($this->params["status"])?$this->params["status"]:"0";

            $data = array(
                'site_id'=>$this->site_id,
                'name'=>$name,
                'group_id'=>$group_id,
                'jump_url'=>$jump_url,
                'url'=>$url,
                'desc'=>$desc
            );
            $ret = $this->PicInfo->save($data);
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_info_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $group_id=isset($this->params["group_id"])?$this->params["group_id"]:"";
            if(empty($group_id)){
                $this->echoJson('group_id参数不能为空', -2);
            }
            $jump_url=isset($this->params["jump_url"])?$this->params["jump_url"]:"";
            if(empty($jump_url)){
                $this->echoJson('jump_url参数不能为空', -3);
            }
            $url=isset($this->params["url"])?$this->params["url"]:"";
            if(empty($url)){
                $this->echoJson('url参数不能为空', -4);
            }
            $desc=isset($this->params["desc"])?$this->params["desc"]:"";
            // if(empty($desc)){
            //     $this->echoJson('desc参数不能为空', -4);
            // }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $conditions['conditions'] = array('id'=>$id);
            $info = $this->PicInfo->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->PicInfo->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'group_id' => $db->value($group_id, 'string'),
                'jump_url' => $db->value($jump_url, 'string'),
                'url' => $db->value($url, 'string'),
                'desc' => $db->value($desc, 'string')
                // 'status' => $status
            );
            $ret = $this->PicInfo->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function pic_info_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->PicInfo->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->PicInfo->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function video_info_list(){
        try{
            $ret = array();
            $conditions['conditions'] = array('site_id'=>$this->site_id,'status'=>1);
            $conditions['fields'] = array('id','name','url','status','cover','desc');
            $count = $this->VideoInfo->find('count', $conditions);
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $offset = ($page-1)*$limit;
            $ret['total_page'] = ceil($count/$limit);
            $ret['per_page'] = $limit;
            $ret['page'] = $page;
            $conditions2['conditions'] = array('site_id'=>$this->site_id,'status'=>1);
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $conditions2['fields'] = array('id','name','url','status','cover','desc');
            $conditions2['order'] = array('created desc');
            $result = $this->VideoInfo->find('all', $conditions2);
            if(!empty($result)){
                foreach($result as $val){
                    $ret['list'][] = $val['VideoInfo'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }
    }

    public function video_info_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $url=isset($this->params["url"])?$this->params["url"]:"";
            if(empty($url)){
                $this->echoJson('url参数不能为空', -2);
            }
            $cover=isset($this->params["cover"])?$this->params["cover"]:"";
            if(empty($cover)){
                $this->echoJson('cover参数不能为空', -3);
            }
            $desc=isset($this->params["desc"])?$this->params["desc"]:"";
            if(empty($desc)){
                $this->echoJson('desc参数不能为空', -4);
            }
            // $status=isset($this->params["status"])?$this->params["status"]:"1";

            $data = array(
                'name'=>$name,
                'cover'=>$cover,
                'desc'=>$desc,
                'url'=>$url,
                // 'status'=>$status,
                'site_id'=>$this->site_id
            );
            $ret = $this->VideoInfo->save($data);
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function video_info_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $cover=isset($this->params["cover"])?$this->params["cover"]:"";
            if(empty($cover)){
                $this->echoJson('cover参数不能为空', -2);
            }
            $desc=isset($this->params["desc"])?$this->params["desc"]:"";
            if(empty($desc)){
                $this->echoJson('desc参数不能为空', -3);
            }
            // $status=isset($this->params["status"])?$this->params["status"]:"0";

            $conditions['conditions'] = array('id'=>$id);
            $info = $this->VideoInfo->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->VideoInfo->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'cover' => $db->value($cover, 'string'),
                'desc' => $db->value($desc, 'string'),
                // 'status' => $status,
            );
            $ret = $this->VideoInfo->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function video_info_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->VideoInfo->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->VideoInfo->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function website_list(){
        try{
            $ret = array();
            $conditions['conditions'] = array('status'=>array(0,1));
            $conditions['fields'] = array('id','name','domain_name','directory_name','status');
            $count = $this->Website->find('count', $conditions);
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $offset = ($page-1)*$limit;
            $ret['total_page'] = ceil($count/$limit);
            $ret['per_page'] = $limit;
            $ret['page'] = $page;
            $conditions2['conditions'] = array('status'=>array(0,1));
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $conditions2['fields'] = array('id','name','domain_name','directory_name','status');
            $conditions2['order'] = array('created desc');
            $result = $this->Website->find('all', $conditions2);
            if(!empty($result)){
                foreach($result as $val){
                    $ret['list'][] = $val['Website'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }
    }

    public function website_list_all(){
        try{
            $ret = array();
            $conditions['conditions'] = array('status'=>1);
            $conditions['fields'] = array('id','name','domain_name','directory_name','status');
            $conditions['order'] = array('created desc');
            $result = $this->Website->find('all', $conditions);
            if(!empty($result)){
                foreach($result as $val){
                    $ret['list'][] = $val['Website'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }
    }

    public function website_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $domain_name=isset($this->params["domain_name"])?$this->params["domain_name"]:"";
            if(empty($domain_name)){
                $this->echoJson('domain_name参数不能为空', -2);
            }
            $directory_name=isset($this->params["directory_name"])?$this->params["directory_name"]:"";
            if(empty($directory_name)){
                $this->echoJson('directory_name参数不能为空', -3);
            }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $data = array(
                'name'=>$name,
                'domain_name'=>$domain_name,
                'directory_name'=>$directory_name,
                'status'=>$status
            );
            $ret = $this->Website->save($data);
            $site_id = $ret['Website']['id'];
            //增加模板官网默认数据
            $webConfig = array(
                array('site_id'=>$site_id,'type'=>0,'identifer'=>'index','name'=>'首页','desc'=>'首页','created'=>time()),
                array('site_id'=>$site_id,'type'=>0,'identifer'=>'news_detail','name'=>'新闻详情页','desc'=>'新闻详情页','created'=>time()),
                array('site_id'=>$site_id,'type'=>1,'identifer'=>'yuyue','name'=>'预约弹窗','desc'=>'预约弹窗','created'=>time()),
                array('site_id'=>$site_id,'type'=>1,'identifer'=>'application','name'=>'申请弹窗','desc'=>'申请弹窗','created'=>time()),
            );
            foreach ($webConfig as $config){
                $this->WebsiteConfig->saveAll($config);
            }
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getTraceAsString());
            $this->echoJson('server error',-1000);
        }
    }

    public function website_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $domain_name=isset($this->params["domain_name"])?$this->params["domain_name"]:"";
            if(empty($domain_name)){
                $this->echoJson('domain_name参数不能为空', -2);
            }
            $directory_name=isset($this->params["directory_name"])?$this->params["directory_name"]:"";
            if(empty($directory_name)){
                $this->echoJson('directory_name参数不能为空', -3);
            }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $conditions['conditions'] = array('id'=>$id);
            $info = $this->Website->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->Website->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'domain_name' => $db->value($domain_name, 'string'),
                'directory_name' => $db->value($directory_name, 'string'),
                'status' => $status
            );
            $ret = $this->Website->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function website_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->Website->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->Website->updateAll(array('status'=>-1),array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function user_list(){
        try{
            $ret = array();
            $conditions['conditions'] =  array('status'=>1);
            $conditions['fields'] = array('id','name','site_id','status');
            $count = $this->Users->find('count', $conditions);
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $offset = ($page-1)*$limit;
            $ret['total_page'] = ceil($count/$limit);
            $ret['per_page'] = $limit;
            $ret['page'] = $page;
            $conditions2['conditions'] = array('status'=>1);
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $conditions2['fields'] = array('id','name','site_id','status');
            $result = $this->Users->find('all', $conditions2);
            if(!empty($result)){
                foreach($result as $val){
                    $ret['list'][] = $val['Users'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-10001);
        }
    }

    public function user_add(){
        try{
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $password=isset($this->params["password"])?$this->params["password"]:"";
            if(empty($password)){
                $this->echoJson('password参数不能为空', -2);
            }
            $site_id=isset($this->params["website_id"])?$this->params["website_id"]:"";
            if(empty($site_id)){
                $this->echoJson('site_id参数不能为空', -3);
            }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $data = array(
                'name'=>$name,
                'password'=>md5($password),
                'site_id'=>$site_id,
                'status'=>$status
            );
            $ret = $this->Users->save($data);
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function user_edit(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -7);
            }
            $name=isset($this->params["name"])?$this->params["name"]:"";
            if(empty($name)){
                $this->echoJson('name参数不能为空', -1);
            }
            $password=isset($this->params["password"])?$this->params["password"]:"";
            $site_id=isset($this->params["website_id"])?$this->params["website_id"]:"";
            if(empty($site_id)){
                $this->echoJson('site_id参数不能为空', -3);
            }
            $status=isset($this->params["status"])?$this->params["status"]:"0";

            $conditions['conditions'] = array('id'=>$id);
            $info = $this->Users->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -8);
            }
            $db = $this->Users->getDataSource();
            $data = array(
                'name' => $db->value($name, 'string'),
                'site_id' => $db->value($site_id, 'string'),
                'status' => $status
            );
            if(!empty($password)){
                $data['password'] = $db->value(md5($password), 'string');
            }
            $ret = $this->Users->updateAll($data,array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }
    }

    public function user_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $info = $this->Users->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->Users->updateAll(array('status'=>-1),array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function website_config_save(){
        try{
            $config_json_pre=isset($this->params["config_json_pre"])?$this->params["config_json_pre"]:"";
            if(empty($config_json_pre)){
                $this->echoJson('config_json_pre参数不能为空', -1);
            }
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -2);
            }
            //检查是否有配置
            $conditions['conditions'] = array('id' => $id);
            $result = $this->WebsiteConfig->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('数据不存在', -3);
            }
            $db = $this->WebsiteConfig->getDataSource();
            $data['config_json_pre'] = $db->value($config_json_pre, 'string');
            $this->WebsiteConfig->updateAll($data, array('id' => $id));
            //生成动态模板
            $this->copydir(TEMPLATE_DIR,$this->template_dir.'.pre');
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }
    }

    public function website_config_get(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $result = $this->WebsiteConfig->find('first', $conditions);
            $this->echoJson('success', 0, $result['WebsiteConfig']);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }
    }

    public function website_config_publish(){
        try{
            $config_json=isset($this->params["config_json"])?$this->params["config_json"]:"";
            if(empty($config_json)){
                $this->echoJson('config_json参数不能为空', -1);
            }
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -2);
            }
            //检查是否有配置
            $conditions['conditions'] = array('id' => $id);
            $result = $this->WebsiteConfig->find('first', $conditions);
            //保存配置
            $db = $this->WebsiteConfig->getDataSource();
            $data['config_json'] = $db->value($config_json, 'string');
            $this->WebsiteConfig->updateAll($data, array('id' => $result['WebsiteConfig']['id']));
            //生成动态模板
            $this->copydir(TEMPLATE_DIR,$this->template_dir);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }
    }

    protected function copydir($srcdir,$dstdir)
    {
        if (!file_exists($dstdir)) {
            mkdir($dstdir);
        }
        $files = scandir($srcdir);

        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $srcf = $srcdir . '/' . $file;
                $dstf = $dstdir . '/' . $file;
                if (is_dir($srcf)) {
                    $this->copydir($srcf, $dstf);
                } else {
                    copy($srcf, $dstf);
                }
            }
        }
    }

//    protected function genTemplate($config_json){
//        if(!is_dir($this->template_dir)){
//            $flag = mkdir($this->template_dir,0777,true);
//        }
//        $content = file_get_contents(TEMPLATE_DIR.DS.DS.'index.ctp');
//        file_put_contents($this->template_dir.DS.'index.ctp', $content);
//
//        $config = json_decode($config_json,1);
//        $moduleList = $config['moduleList'];
//        foreach ($moduleList as $value) {
//            $this->genModule($value['type']);
//        }
//    }
//
//    protected function genModule($name){
//        $content = file_get_contents(TEMPLATE_DIR.DS.DS.$name.'.ctp');
//        if(file_exists($this->template_dir.DS.$name.'.ctp')){
//            unlink($this->template_dir.DS.$name.'.ctp');
//        }
//        $res = file_put_contents($this->template_dir.DS.$name.'.ctp', $content);
//    }
//
//    protected function genTemplatePre($config_json){
//        $template_dir_pre = $this->template_dir.'.pre';
//        if(!is_dir($template_dir_pre)){
//            $flag = mkdir($template_dir_pre,0777,true);
//        }
//        $content = file_get_contents(TEMPLATE_DIR.DS.DS.'index.ctp');
//        file_put_contents($template_dir_pre.DS.'index.ctp', $content);
//
//        $config = json_decode($config_json,1);
//        $moduleList = $config['moduleList'];
//        foreach ($moduleList as $value) {
//            $this->genModulePre($value['type']);
//        }
//    }
//
//    protected function genModulePre($name){
//        $content = file_get_contents(TEMPLATE_DIR.DS.DS.$name.'.ctp');
//        $template_dir_pre = $this->template_dir.'.pre';
//        if(file_exists($template_dir_pre.DS.$name.'.ctp')){
//            unlink($template_dir_pre.DS.$name.'.ctp');
//            unlink($template_dir_pre.DS.$name.'.ctp');
//        }
//        $res = file_put_contents($template_dir_pre.DS.$name.'.ctp', $content);
//    }

    public function website_address(){
        try{
            $data = array(
                'index'=> $this->domain_name,
                'index_pre'=> $this->domain_name.'/index_pre'
            );
            $this->echoJson('success', 0, $data);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }
    }

    public function website_page_list(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id, 'type'=>0);
            $result = $this->WebsiteConfig->find('all', $conditions);
            $ret = array();
            if(!empty($result)){
                foreach($result as $val){
                    $ret[] = $val['WebsiteConfig'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

    public function website_popup_list(){
        try{
            $conditions['conditions'] = array('site_id'=>$this->site_id, 'type'=>1);
            $result = $this->WebsiteConfig->find('all', $conditions);
            $ret = array();
            if(!empty($result)){
                foreach($result as $val){
                    $ret[] = $val['WebsiteConfig'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }

}

