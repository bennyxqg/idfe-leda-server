<?php
App::uses('Controller', 'Controller');

class BlogController extends Controller{

    public $components = array("Redis");
    public $uses = array('News','NewsCategory','NewsComment','BlogUsers','BlogMessage','BlogUsersMessage','NewsCommentPraise','NewsCommentHate','Subscribe');
    private $params;
    private $loginFilter = array('get_code','login','news_list','news_detail','blog_message_list','blog_message_detail');
    private $session;
    private $token;
    private $tokenInfo;
    private $site_id;
    private $user_avatar = array(
        'https://dl.gamdream.com//website/klbq/blog_rolehead_Aimali.png',
        'https://dl.gamdream.com//website/klbq/blog_rolehead_Linqiong.png',
        'https://dl.gamdream.com//website/klbq/blog_rolehead_Luolaita.png',
        'https://dl.gamdream.com//website/klbq/blog_rolehead_Mixieer.png'
    );
    public function beforefilter(){
        // 允许所有跨域请求
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers:X-Requested-With");
        header('Access-Control-Allow-Headers:x-requested-with,content-type');  
        header("Access-Control-Allow-Methods:PUT,POST,GET,DELETE,OPTIONS"); //请求方式
        //参数
        $this->params = array_merge((array)$this->request->query, (array)$this->request->data);

        if(!isset($this->params['site_id'])){
            $this->echoJson('请填写site_id！', -999);        
        }
        $this->site_id = $this->params['site_id'];
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
        }else{
            $this->token = $this->params['token'];
            $userInfo = $this->Redis->get($this->token);
            if(!empty($userInfo)){
                 $this->tokenInfo = json_decode($userInfo,1);
            }   
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

    public static function sendSms($phone,$code){
        $content = "您的验证码是：{$code},有效时间5分钟,请妥善保管,勿泄露给别人,如果不是本人操作请忽略";
        $url = "http://test.sms.uu.cc:8081/SMS/sa/sms/send";
        //$url = "http://sagent2.uu.cc/SMS/sa/sms/send";
        $data = "mobile={$phone}&content={$content}&code=default";
        $result = self::http_request($url,$data);
        $list = json_decode($result,true);
        if($list['ret'] == 0 && $list['error_code'] == 0){
            return true;
        }else{
            return false;
        }
    }

    //HTTP请求（支持HTTP/HTTPS，支持GET/POST）
    public static function http_request($url, $data = null){
        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //设置post方式提交
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //显示获得的数据
        return $data;
    }

    public function get_code(){
        try{
            $phone=isset($this->params["phone"])?$this->params["phone"]:"";
            if(empty($phone)){
                $this->echoJson('phone参数不能为空', -1);
            }

            if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                $this->echoJson('请填写正确的手机号！', -2);
            }
            $code = rand(100000, 999999);
            $codeKey = 'blog:login:code:'.$phone;
            $this->Redis->set($codeKey,$code,300);
            $result   = self::sendSms($phone, $code);
            if ($result) {
                $this->echoJson('验证码已发送成功', 0);
            } else {
                $this->echoJson('验证码发送失败，请重新尝试！', 0);
            }
            
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function login(){
        try{
            $phone=isset($this->params["phone"])?$this->params["phone"]:"";
            if(empty($phone)){
                $this->echoJson('phone参数不能为空', -1);
            }
            $code=isset($this->params["code"])?$this->params["code"]:"";
            if(empty($code)){
                $this->echoJson('code参数不能为空', -2);
            }
            $codeKey = 'blog:login:code:'.$phone;
            $codeTrue = $this->Redis->get($codeKey);
            if($codeTrue != $code){
                $this->echoJson('验证码不正确', -3);
            }
            $conditions['conditions'] = array('phone' => $phone, 'site_id' => $this->site_id);
            $result = $this->BlogUsers->find('first', $conditions);
            if(empty($result)){
                $data = array('site_id'=>$this->site_id,'phone'=>$phone,'nick_name'=>'clby'.rand(100000, 999999),'avatar'=>'https://dl.gamdream.com//website/klbq/blog_rolehead_Aimali.png');
                $ret = $this->BlogUsers->save($data);
                $tokenInfo = $ret['BlogUsers'];
            }else{
                $tokenInfo = $result['BlogUsers'];
            }
            $token = 'blog_'.uniqid();
            $this->Redis->set($token,json_encode($tokenInfo),3600*24);
            $ret = array('token'=>$token);
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function user_info(){
        try{
            $conditions['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'status'=>0);
            $count = $this->BlogUsersMessage->find('count', $conditions);
            $ret = array();
            $ret['user_info'] = $this->tokenInfo;
            $ret['user_info']['sys_avatar'] = $this->user_avatar;
            $ret['unread_msg'] = $count;
            $conditions['conditions'] = array('phone'=>$this->tokenInfo['phone'],'site_id'=>$this->tokenInfo['site_id']);
            $result = $this->Subscribe->find('first', $conditions);
            if(empty($this->tokenInfo['extend_1'])){             
                if(!empty($result)){
                    $ret['user_info']['extend_1'] = $result['Subscribe']['id'];
                    $db = $this->BlogUsers->getDataSource();
                    $data['extend_1'] = $db->value($result['Subscribe']['id'], 'string');
                    $this->BlogUsers->updateAll($data,array('id'=>$this->tokenInfo['id']));
                    $conditions['conditions'] = array('id'=>$this->tokenInfo['id']);
                    $result2 = $this->BlogUsers->find('first', $conditions);
                    $this->Redis->set($this->token,json_encode($result2['BlogUsers']),3600*24);
                }     
            }
            if(empty($this->tokenInfo['extend_2'])){             
                if(!empty($result)){
                    $ret['user_info']['extend_2'] = $result['Subscribe']['extend_1'];
                    $db = $this->BlogUsers->getDataSource();
                    $data['extend_2'] = $db->value($result['Subscribe']['extend_1'], 'string');
                    $this->BlogUsers->updateAll($data,array('id'=>$this->tokenInfo['id']));
                    $conditions['conditions'] = array('id'=>$this->tokenInfo['id']);
                    $result2 = $this->BlogUsers->find('first', $conditions);
                    $this->Redis->set($this->token,json_encode($result2['BlogUsers']),3600*24);
                }     
            }          
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function update_user_info(){
        try{
            $db = $this->BlogUsers->getDataSource();
            $type=isset($this->params["type"])?$this->params["type"]:"";
            if(empty($type)){
                $this->echoJson('type参数不能为空', -1);
            }
            if($type == 1){
                $nick_name=isset($this->params["nick_name"])?$this->params["nick_name"]:"";
                if(empty($nick_name)){
                    $this->echoJson('nick_name参数不能为空', -2);
                }
                if(!$this->checkText($nick_name)){
                    $this->echoJson('昵称不合法，请重新填写', -4);
                }
                if(mb_strlen($nick_name) >8){
                    $this->echoJson('昵称不得超过8个字符', -5);
                }
                $data['nick_name'] = $db->value($nick_name, 'string');
            }
            if($type == 2){
                $avatar=isset($this->params["avatar"])?$this->params["avatar"]:"";
                if(empty($avatar)){
                    $this->echoJson('avatar参数不能为空', -3);
                }
                $data['avatar'] = $db->value($avatar, 'string');
            }
            $ret = $this->BlogUsers->updateAll($data,array('id'=>$this->tokenInfo['id']));
            $conditions['conditions'] = array('id'=>$this->tokenInfo['id']);
            $result = $this->BlogUsers->find('first', $conditions);
            $this->Redis->set($this->token,json_encode($result['BlogUsers']),3600*24);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function user_message(){
        try{
            $type=isset($this->params["type"])?$this->params["type"]:"";
            if(empty($type)){
                $this->echoJson('type参数不能为空', -1);
            }
            $ret = array();
            $ret['list'] = array();
            $conditions1['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>1,'status'=>0);
            $unReadcount1 = $this->BlogUsersMessage->find('count', $conditions1);//未读的消息
            $ret['unReadcount_1'] = $unReadcount1;
            $conditions2['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>2,'status'=>0);
            $unReadcount2 = $this->BlogUsersMessage->find('count', $conditions2);//未读的消息
            $ret['unReadcount_2'] = $unReadcount2;
            $conditions3['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>array(3,4,5),'status'=>0);
            $unReadcount3 = $this->BlogUsersMessage->find('count', $conditions3);//未读的消息
            $ret['unReadcount_3'] = $unReadcount3;
            if($type == 1){//收到的赞
                $conditions2['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>1);
                $count = $this->BlogUsersMessage->find('count', $conditions2);
                $page=isset($this->params["page"])?$this->params["page"]:"1";
                $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
                $offset = ($page-1)*$limit;
                $ret['total_page'] = ceil($count/$limit);
                $ret['per_page'] = $limit;
                $ret['page'] = $page;
                $conditions2['offset'] = $offset;
                $conditions2['limit'] = $limit;
                $conditions2['fields'] = array('news_id','comment_id','comment_message','praise_user_name','praise_user_avatar','created');
                $conditions2['order'] = array('created desc');
                $result2 = $this->BlogUsersMessage->find('all', $conditions2);
                if(!empty($result2)){
                    foreach ($result2 as $value) {
                        if(!empty($value['BlogUsersMessage']['praise_user_name'])){
                            $value['BlogUsersMessage']['praise_user_name'] = $this->array_reverse(json_decode($value['BlogUsersMessage']['praise_user_name'],1));
                        }
                        $value['BlogUsersMessage']['comment_message'] = htmlspecialchars_decode($value['BlogUsersMessage']['comment_message']);
                        $value['BlogUsersMessage']['reply_message'] = htmlspecialchars_decode($value['BlogUsersMessage']['reply_message']);
                        $ret['list'][] = $value['BlogUsersMessage'];
                    }
                }
            }elseif ($type == 2) {
                $conditions2['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>2);
                $count = $this->BlogUsersMessage->find('count', $conditions2);
                $page=isset($this->params["page"])?$this->params["page"]:"1";
                $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
                $offset = ($page-1)*$limit;
                $ret['total_page'] = ceil($count/$limit);
                $ret['per_page'] = $limit;
                $ret['page'] = $page;
                $conditions2['offset'] = $offset;
                $conditions2['limit'] = $limit;
                $conditions2['fields'] = array('id','news_id','comment_id','comment_message','reply_user_id','reply_user_name','reply_user_avatar','reply_message','created','reply_id');
                $conditions2['order'] = array('created desc');
                $result2 = $this->BlogUsersMessage->find('all', $conditions2);
                //var_dump($result2);exit;
                if(!empty($result2)){
                    foreach ($result2 as $value) {
                        if(!empty($value['BlogUsersMessage']['praise_user_name'])){
                            $value['BlogUsersMessage']['praise_user_name'] = json_decode($value['BlogUsersMessage']['praise_user_name'],1);
                        }
                        $ret['list'][] = $value['BlogUsersMessage'];
                    }
                }
            }elseif ($type == 3) {
                $conditions2['conditions'] = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>array(3,4,5));
                $count = $this->BlogUsersMessage->find('count', $conditions2);
                $page=isset($this->params["page"])?$this->params["page"]:"1";
                $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
                $offset = ($page-1)*$limit;
                $ret['total_page'] = ceil($count/$limit);
                $ret['per_page'] = $limit;
                $ret['page'] = $page;
                $conditions2['offset'] = $offset;
                $conditions2['limit'] = $limit;
                $conditions2['fields'] = array('type','message','created','news_id','comment_message');
                $conditions2['order'] = array('created desc');
                $result2 = $this->BlogUsersMessage->find('all', $conditions2);
                if(!empty($result2)){
                    foreach ($result2 as $value) {
                        $ret['list'][] = $value['BlogUsersMessage'];
                    }
                }
            }
            //标记消息为已读
            $updateData = array('status'=>1);
            if($type == 3){
                $type = array(3,4,5);
            }
            $updateWhere = array('user_id' => $this->tokenInfo['id'], 'site_id' => $this->site_id, 'type'=>$type);
            $this->BlogUsersMessage->updateAll($updateData, $updateWhere);//未读的消息
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }


    public function news_list(){
        try{
            $conditions2 = array();
            $conditions2['conditions'] = array('site_id'=>$this->site_id);
            $conditions2['fields'] = array('id','title');
            $count = $this->News->find('count', $conditions2);
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $offset = ($page-1)*$limit;
            $ret['total_page'] = ceil($count/$limit);
            $ret['per_page'] = $limit;
            $ret['page'] = $page;
            $ret['list'] = array();
            $conditions3['conditions'] = array('site_id'=>$this->site_id);
            $conditions3['offset'] = $offset;
            $conditions3['limit'] = $limit;
            $conditions3['fields'] = array('id','title','decription','updated','small_url','big_url','isTop','content');
            $conditions3['order'] = array('isTop desc,updated desc');
            $result2 = $this->News->find('all', $conditions3);
            if(!empty($result2)){
                foreach ($result2 as $value) {
                    $val  = $value['News'];
                    $val['comments_count'] = $this->getNewsCommentsCount($value['News']['id']);
                    if(empty($val['decription'])){
                        $val['decription'] = mb_substr($val['content'],0,300);
                    }
                    $ret['list'][] = $val;
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }   
    }

    protected function getNewsCommentsCount($newsId){
        $count = 0;
        $conditions['conditions'] = array('news_id'=>$newsId,'parent_id'=>0,'status'=>array(1,2));
        $conditions['fields'] = array('id','third_user_id','third_user_name','third_user_avatar','comment','created','parent_id');
        $info = $this->NewsComment->find('all', $conditions);
        $count += $this->NewsComment->find('count', $conditions);
        if(!empty($info)){
            foreach ($info as $value) {
                $conditions2['conditions'] = array('parent_id'=>$value['NewsComment']['id'],'status'=>array(1,2));
                $conditions2['fields'] = array('third_user_id','third_user_avatar','third_user_name','comment','created','id','parent_id');
                $info2 = $this->NewsComment->find('all', $conditions2);
                $count += $this->NewsComment->find('count', $conditions2);
                if(!empty($info2)){
                    foreach ($info2 as $value2) {
                        $conditions3['conditions'] = array('parent_id'=>$value2['NewsComment']['id'],'status'=>array(1,2));
                        $conditions3['fields'] = array('third_user_id','third_user_avatar','third_user_name','comment','created','id','parent_id');
                        $count += $this->NewsComment->find('count', $conditions3);
                    }
                }
            }
        }
        return $count;
    }

    public function news_detail(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $type=isset($this->params["type"])?$this->params["type"]:"";
            if(empty($type)){
                $this->echoJson('type参数不能为空', -2);
            }
            $conditions['conditions'] = array('id'=>$id);
            $conditions['fields'] = array('id','title','decription','content','news_categories_id','clicks','created','updated','small_url','big_url','site_id','isTop');
            $result = $this->News->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('页面对应的内容已经被删除', -4);
            }
            if($type == 1){
                $order = array('status desc,hot desc,created desc');
            }elseif($type == 2){
                $order = array('status desc,created desc');
            }
            $ret = array();
            $ret['news_info'] = $result['News'];
            //评论信息
            $conditions2['conditions'] = array('news_id'=>$id,'parent_id'=>0,'status'=>array(1,2));
            $conditions2['fields'] = array('id','third_user_id','third_user_name','third_user_avatar','extend_1','comment','created','parent_id','hot');
            $conditions2['order'] = $order; 
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $conditions3 = $conditions2;
            $offset = ($page-1)*$limit;
            $conditions2['offset'] = $offset;
            $conditions2['limit'] = $limit;
            $info = $this->NewsComment->find('all', $conditions2);
            $count = $this->NewsComment->find('count', $conditions3);
            $commentInfo = array();
            $ret['comment_info']['total_page'] = ceil($count/$limit);
            $ret['comment_info']['per_page'] = $limit;
            $ret['comment_info']['page'] = $page;
            if(!empty($this->tokenInfo['id'])){
                $userId = $this->tokenInfo['id'];
            }
            if(!empty($info)){
                foreach ($info as $comment) {
                    $comment['NewsComment']['is_self'] = 0;
                    $userInfo = $this->getUserInfo($comment['NewsComment']['third_user_id']);
                    $comment['NewsComment']['third_user_name'] = $userInfo['nick_name'];
                    $comment['NewsComment']['third_user_avatar'] = $userInfo['avatar'];
                    //$comment['NewsComment']['comment'] = htmlspecialchars_decode($comment['NewsComment']['comment']);
                     //查询被评论人的信息
                    $conditions3['conditions'] = array('parent_id'=>$comment['NewsComment']['id'],'status'=>1);
                    $conditions3['fields'] = array('third_user_id','third_user_avatar','third_user_name','extend_1','comment','created','id','parent_id','to_id','hot');
                    $info3 = $this->NewsComment->find('all', $conditions3);
                    if($comment['NewsComment']['third_user_id'] == $userId){
                        $comment['NewsComment']['is_self'] = 1;
                    }
                    if(!empty($this->tokenInfo['id'])){
                        $praiseKey = $this->getPraiseKey($comment['NewsComment']['id'],$userId);
                        $hateKey = $this->getHateKey($comment['NewsComment']['id'],$userId);
                        $is_praise = $this->Redis->get($praiseKey) == 1 ? 1: 0;
                        $is_hate = $this->Redis->get($hateKey) == 1 ? 1: 0;
                        $comment['NewsComment']['is_praise'] = $is_praise;
                        $comment['NewsComment']['is_hate'] = $is_hate;
                    }
                    if(!empty($info3)){
                        foreach ($info3 as $res3) {
                            if($res3['NewsComment']['third_user_id'] == $userId){
                                $res3['NewsComment']['is_self'] = 1;
                            }else{
                                $res3['NewsComment']['is_self'] = 0;
                            }
                            $userInfo2 = $this->getUserInfo($res3['NewsComment']['third_user_id']);
                            $res3['NewsComment']['third_user_name'] = $userInfo2['nick_name'];
                            $res3['NewsComment']['third_user_avatar'] = $userInfo2['avatar'];

                            if(!empty($this->tokenInfo['id'])){
                                $praiseKey = $this->getPraiseKey($res3['NewsComment']['id'],$userId);
                                $hateKey = $this->getHateKey($res3['NewsComment']['id'],$userId);
                                $is_praise = $this->Redis->get($praiseKey) == 1 ? 1: 0;
                                $is_hate = $this->Redis->get($hateKey) == 1 ? 1: 0;
                                $res3['NewsComment']['is_praise'] = $is_praise;
                                $res3['NewsComment']['is_hate'] = $is_hate;
                            }
                            $praiseCount = $this->getCommentsPraiseCount($res3['NewsComment']['id']);
                            $res3['NewsComment']['praiseCount'] = $praiseCount;
                            if($res3['NewsComment']['to_id'] > 0){
                                $conditions4['conditions'] = array('id'=>$res3['NewsComment']['to_id']);
                                $conditions4['fields'] = array('third_user_id','third_user_avatar','third_user_name','extend_1','comment','created','id','parent_id','to_id');
                                $info3 = $this->NewsComment->find('first', $conditions4);
                                $userInfo3 = $this->getUserInfo($info3['NewsComment']['third_user_id']);
                                // if($res3['NewsComment']['to_id'] == 766){
                                //     var_dump($res3['NewsComment']['to_id'],$userInfo3);exit;
                                // }
                                $res3['NewsComment']['comment_at'] = $userInfo3['nick_name']; 
                            }
                            
                            // $conditions4['conditions'] = array('parent_id'=>$res3['NewsComment']['id'],'status'=>1);
                            // $conditions4['fields'] = array('third_user_id','third_user_avatar','third_user_name','extend_1','comment','created','id','parent_id');
                            // $info4 = $this->NewsComment->find('all', $conditions4);
                            // foreach ($info4 as $res4) {
                            //     if($res4['NewsComment']['third_user_id'] == $userId){
                            //         $res4['NewsComment']['is_self'] = 1;
                            //     }else{
                            //         $res4['NewsComment']['is_self'] = 0;
                            //     }
                            //     $userInfo3 = $this->getUserInfo($res4['NewsComment']['third_user_id']);
                            //     $res4['NewsComment']['third_user_name'] = $userInfo3['nick_name'];
                            //     $res4['NewsComment']['third_user_avatar'] = $userInfo3['avatar'];
                            //     if(!empty($this->tokenInfo['id'])){
                            //         $praiseKey = $this->getPraiseKey($res4['NewsComment']['id'],$userId);
                            //         $hateKey = $this->getHateKey($res4['NewsComment']['id'],$userId);
                            //         $is_praise = $this->Redis->get($praiseKey) == 1 ? 1: 0;
                            //         $is_hate = $this->Redis->get($hateKey) == 1 ? 1: 0;
                            //         $res4['NewsComment']['is_praise'] = $is_praise;
                            //         $res4['NewsComment']['is_hate'] = $is_hate;
                            //     }
                            //     $praiseCount = $this->getCommentsPraiseCount($res4['NewsComment']['id']);
                            //     $res4['NewsComment']['praiseCount'] = $praiseCount;
                            //     $res4['NewsComment']['comment_at'] = $res3['NewsComment']['third_user_name']; 
                            //     $comment['NewsComment']['child_info'][] = $res4['NewsComment']; 
                            // }
                            $comment['NewsComment']['child_info'][] = $res3['NewsComment']; 
                        }
                    }
                    if(!empty($comment['NewsComment']['child_info'])){
                        array_multisort(array_column($comment['NewsComment']['child_info'], 'created'), SORT_ASC, $comment['NewsComment']['child_info']);
                    }
                    $praiseCount = $this->getCommentsPraiseCount($comment['NewsComment']['id']);
                    $comment['NewsComment']['praiseCount'] = $praiseCount;
                    $commentInfo[] = $comment['NewsComment'];
                }
            }
            $ret['comment_info']['list'] = $commentInfo;
            $count = $this->getNewsCommentsCount($id);
            $ret['news_info']['comment_count'] = $count;
            $this->News->updateAll(array('clicks'=>"clicks+1"), array('id'=>$id));
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-10001);
        }   
    }

    protected function getCommentsPraiseCount($id){
        $conditions3['conditions'] = array('comment_id'=>$id);
        $praiseCount = $this->NewsCommentPraise->find('count', $conditions3);
        return $praiseCount;
    }

    public function news_comment_send(){
       try{
            $news_id=isset($this->params["news_id"])?$this->params["news_id"]:"";
            if(empty($news_id)){
                $this->echoJson('news_id参数不能为空', -1);
            }
            $comment=isset($this->params["comment"])?$this->params["comment"]:"";
            if(empty($comment)){
                $this->echoJson('comment参数不能为空', -2);
            }
            $comment=htmlspecialchars($comment,ENT_QUOTES);
            if($this->mb_strlen_extend($comment) >1000){
                $this->echoJson('评论字数不得超过1000个字符', -5);
            }
            if(strpos($comment,'emoji')){
                $comment = htmlspecialchars_decode($comment);
            }
            $conditions['conditions'] = array('id'=>$news_id);
            $conditions['fields'] = array('id','title','decription','content','news_categories_id','clicks','created','updated','small_url','big_url','site_id','isTop');
            $result = $this->News->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('id参数错误', -3);
            }
            if($this->params["parent_id"] > 0){
                if($this->params["to_id"] > 0){//3级以上评论
                    $conditions3['conditions'] = array('id'=>$this->params["to_id"],'status'=>array(1,2));
                    $result3 = $this->NewsComment->find('first', $conditions3);
                    if(empty($result3)){
                        $this->echoJson('评论已不存在', -6);
                    }
                }
                $conditions2['conditions'] = array('id'=>$this->params["parent_id"],'status'=>array(1,2));
                $result2 = $this->NewsComment->find('first', $conditions2);
                if(!isset($this->params["to_id"]) && empty($result2)){//二级评论                   
                    $this->echoJson('评论已不存在', -4);
                }elseif(($this->params["to_id"]  > 0) && empty($result2)){
                    $conditions4['conditions'] = array('id'=>$this->params["parent_id"],'status'=>-1);
                    $result4 = $this->NewsComment->find('first', $conditions4);
                    if(!empty($result4)){
                        //被删除的二级评论
                        $this->params["parent_id"] = $result4['NewsComment']['parent_id'];
                    }
                }
                if($result2['NewsComment']['parent_id'] > 0){
                    $this->params["parent_id"] = $result2['NewsComment']['parent_id'];
                }      
            }
            $data = array(
                'news_id'=>$news_id,
                'third_user_id'=>$this->tokenInfo['id'],
                'third_user_name'=>$this->tokenInfo['nick_name'],
                'third_user_avatar'=>$this->tokenInfo['avatar'],
                'extend_1'=>isset($this->tokenInfo['extend_1'])?$this->tokenInfo['extend_1']:'',
                'comment'=>$comment,
                'parent_id'=>isset($this->params["parent_id"])?$this->params["parent_id"]:0,
                'to_id'=>isset($this->params["to_id"])?$this->params["to_id"]:0
            );
            $ret = $this->NewsComment->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function news_comment_deal(){
       try{
            $comment_id=isset($this->params["comment_id"])?$this->params["comment_id"]:"";
            if(empty($comment_id)){
                $this->echoJson('comment_id参数不能为空', -1);
            }
            $type=isset($this->params["type"])?$this->params["type"]:"";
            if(empty($type)){
                $this->echoJson('type参数不能为空', -2);
            }
            $conditions['conditions'] = array('id'=>$comment_id);
            $info = $this->NewsComment->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('comment_id数据错误', -3);
            }
            $data = array('comment_id'=>$comment_id,'third_user_id'=>$this->tokenInfo['id'],'third_user_name'=>$this->tokenInfo['nick_name'],'third_user_avatar'=>$this->tokenInfo['avatar']);
            if($type == 1){
                $conditions2['conditions'] = array('comment_id'=>$comment_id,'third_user_id'=>$this->tokenInfo['id']);
                $info2 = $this->NewsCommentPraise->find('first', $conditions2);
                if(!empty($info2)){
                    $this->echoJson('已经点赞过了', -4);
                }
                $this->NewsCommentPraise->save($data);
                // $conditions3['conditions'] = array('comment_id'=>$comment_id,'third_user_id'=>$this->tokenInfo['id']);
                // $info3 = $this->NewsCommentHate->find('first', $conditions3);
                // if(!empty($info3)){
                //     $this->NewsCommentHate->deleteAll(array('id'=>$info3['NewsCommentHate']['id']));
                // }
                //点赞通知
                $conditions4['conditions'] = array('user_id'=>$info['NewsComment']['third_user_id'],'site_id'=>$this->site_id,'comment_id'=>$comment_id,'type'=>1);
                $info4 = $this->BlogUsersMessage->find('first', $conditions4);
                if(empty($info4)){
                    $nameArr = array($this->tokenInfo['nick_name']);
                    $praiseData = array(
                        'user_id'=>$info['NewsComment']['third_user_id'],
                        'site_id'=>$this->site_id,
                        'type'=>1,
                        'news_id'=>$info['NewsComment']['news_id'],
                        'comment_message'=>$info['NewsComment']['comment'],
                        'comment_id'=>$comment_id,
                        'praise_user_name'=>json_encode($nameArr),
                        'praise_user_avatar'=>$this->tokenInfo['avatar']
                    );
                    $this->BlogUsersMessage->save($praiseData);
                }else{
                    $nameArr = json_decode($info4['BlogUsersMessage']['praise_user_name'],1);
                    $nameArr[] = $this->tokenInfo['nick_name'];
                    $db = $this->BlogUsersMessage->getDataSource();
                    $data5['praise_user_name'] = $db->value(json_encode($nameArr), 'string');
                    $data5['praise_user_avatar'] = $db->value($this->tokenInfo['avatar'], 'string');
                    $this->BlogUsersMessage->updateAll($data5,array('id'=>$info4['BlogUsersMessage']['id']));                   
                }
                //给评论增加热度
                if($info['NewsComment']['parent_id'] > 0){
                    $this->NewsComment->updateAll(array('hot'=>"hot+1"),array('id'=>$info['NewsComment']['parent_id'])); 
                }else{
                    $this->NewsComment->updateAll(array('hot'=>"hot+1"),array('id'=>$comment_id)); 
                }
                //记录用户点赞的记录
                $praiseKey = $this->getPraiseKey($comment_id,$this->tokenInfo['id']);
                $this->Redis->set($praiseKey,1,3600*24*180);
                $hateKey = $this->getHateKey($comment_id,$this->tokenInfo['id']);
                $this->Redis->delete($hateKey);
            }
            if($type == 2){
                $conditions3['conditions'] = array('comment_id'=>$comment_id,'third_user_id'=>$this->tokenInfo['id']);
                $info3 = $this->NewsCommentHate->find('first', $conditions3);
                if(!empty($info3)){
                    $this->echoJson('已经踩过了', -4);
                }
                $conditions2['conditions'] = array('comment_id'=>$comment_id,'third_user_id'=>$this->tokenInfo['id']);
                $info2 = $this->NewsCommentPraise->find('first', $conditions2);
                if(!empty($info2)){
                    $this->NewsCommentPraise->deleteAll(array('id'=>$info2['NewsCommentPraise']['id']));
                }
                $this->NewsCommentHate->save($data);
                // //给评论增加热度
                // if($info['NewsComment']['parent_id'] > 0){
                //     $this->NewsComment->updateAll(array('hot'=>"hot-1"),array('id'=>$info['NewsComment']['parent_id'],'hot >='=>1));
                // }else{
                //     $this->NewsComment->updateAll(array('hot'=>"hot-1"),array('id'=>$comment_id,'hot >='=>1));
                // }
                //记录用户点赞的记录
                $hateKey = $this->getHateKey($comment_id,$this->tokenInfo['id']);
                $this->Redis->set($hateKey,1,3600*24*180);
                // $praiseKey = $this->getPraiseKey($comment_id,$this->tokenInfo['id']);
                // $this->Redis->delete($praiseKey); 
            }
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }   
    }

    protected function getPraiseKey($comment_id,$user_id){
        return "praise:".$comment_id.":".$user_id;
    }

    protected function getHateKey($comment_id,$user_id){
        return "hate:".$comment_id.":".$user_id;
    }

    public function blog_message_list(){
       try{
            $ret = array();
            $ret['list'] = array();
            $conditions['conditions'] = array('status'=>array(1,2));
            $conditions['fields'] = array('id','user_name','user_avatar','message','reply_info','created','extend_1','extend_2','user_id');
            $page=isset($this->params["page"])?$this->params["page"]:"1";
            $limit=isset($this->params["limit"])?$this->params["limit"]:"10";
            $count = $this->BlogMessage->find('count', $conditions);
            if($count > 0){
                $ret['total_page'] = ceil($count/$limit);
            }else{
                $ret['total_page'] = 0;
            }
            $ret['per_page'] = $limit;
            $ret['page'] = $page;
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
                        array_multisort(array_column($value['BlogMessage']['reply_info'], 'answer_time'), SORT_DESC, $value['BlogMessage']['reply_info']);
                    }
                    $userInfo = $this->getUserInfo($value['BlogMessage']['user_id']);
                    $value['BlogMessage']['user_name'] = $userInfo['nick_name'];
                    $value['BlogMessage']['user_avatar'] = $userInfo['avatar'];
                    //$value['BlogMessage']['user_name'] = $this->getUserName($value['BlogMessage']['user_id']);
                    $ret['list'][] = $value['BlogMessage'];
                }
            }
            $this->echoJson('success', 0, $ret);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }
    public function blog_message_detail(){
       try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id);
            $conditions['fields'] = array('id','user_name','user_avatar','message','reply_info','created','extend_1','extend_2','user_id');
            $result = $this->BlogMessage->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('id参数错误', -2);
            }
            if(!empty($result['BlogMessage']['reply_info'])){
                $result['BlogMessage']['reply_info'] = json_decode($result['BlogMessage']['reply_info'],1);
                array_multisort(array_column($result['BlogMessage']['reply_info'], 'answer_time'), SORT_DESC, $result['BlogMessage']['reply_info']);
            }
            $this->echoJson('success', 0, $result['BlogMessage']);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }
    }     

    public function blog_message_send(){
       try{
            $message=isset($this->params["message"])?$this->params["message"]:"";
            if(empty($message)){
                $this->echoJson('message参数不能为空', -1);
            }
            $message=htmlspecialchars($message,ENT_QUOTES);
            if($this->mb_strlen_extend($message) >225){
                $this->echoJson('留言字数不得超过225个字符', -2);
            }
            if(strpos($message,'emoji')){
                $message = htmlspecialchars_decode($message);
            }
            $data = array(
                'site_id'=>$this->site_id,
                'user_id'=>$this->tokenInfo['id'],
                'user_name'=>$this->tokenInfo['nick_name'],
                'user_avatar'=>$this->tokenInfo['avatar'],
                'message'=>$message,
                'extend_1'=>$this->tokenInfo['extend_1'],
                'extend_2'=>$this->tokenInfo['extend_2']
            );
            $this->BlogMessage->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            var_dump($e->getMessage());
            $this->echoJson('server error',-1000);
        }
    }

    public function user_message_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id,'user_id'=>$this->tokenInfo['id'],'type'=>2);
            $info = $this->BlogUsersMessage->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            $ret = $this->BlogUsersMessage->deleteAll(array('id'=>$id));
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function user_comment_del(){
        try{
            $id=isset($this->params["id"])?$this->params["id"]:"";
            if(empty($id)){
                $this->echoJson('id参数不能为空', -1);
            }
            $conditions['conditions'] = array('id'=>$id,'third_user_id'=>$this->tokenInfo['id']);
            $info = $this->NewsComment->find('first', $conditions);
            if(empty($info)){
                $this->echoJson('id数据错误', -2);
            }
            if($info['NewsComment']['parent_id'] > 0){
                $this->NewsComment->updateAll(array('status'=>-1),array('id'=>$id));
                $this->NewsComment->updateAll(array('hot'=>"hot-3"),array('id'=>$info['NewsComment']['parent_id'],'hot >='=>1));
                //扣除评论赞的分数
                $praiseCount = $this->getCommentsPraiseCount($id);
                $this->NewsComment->updateAll(array('hot'=>"hot-$praiseCount"),array('id'=>$info['NewsComment']['parent_id'],'hot >='=>1));
            }else{
                //一级评论
                //查询被评论人的信息
                $conditions3['conditions'] = array('parent_id'=>$id);
                $conditions3['fields'] = array('third_user_id','third_user_avatar','third_user_name','comment','created','id','parent_id');
                $info3 = $this->NewsComment->find('all', $conditions3);
                if(!empty($info3)){
                    foreach ($info3 as $value3) {
                        // $conditions4['conditions'] = array('parent_id'=>$value3['NewsComment']['id']);
                        // $conditions4['fields'] = array('third_user_id','third_user_avatar','third_user_name','comment','created','id','parent_id');
                        // $info4 = $this->NewsComment->find('all', $conditions4);
                        // if(!empty($info4)){
                        //     foreach ($info4 as $value4) {
                        //         $conditions5['conditions'] = array('parent_id'=>$value4['NewsComment']['id']);
                        //         $conditions5['fields'] = array('third_user_id','third_user_avatar','third_user_name','comment','created','id','parent_id');
                        //         $info5 = $this->NewsComment->find('all', $conditions5);
                        //         if(!empty($info5)){
                        //                 foreach ($info5 as $value5) {
                        //                     $this->NewsComment->deleteAll(array('id'=>$value5['NewsComment']['id']));//删除三级评论
                        //                     $this->NewsComment->updateAll(array('hot'=>"hot-1"),array('id'=>$info['NewsComment']['id'],'hot >='=>1));
                        //                 }
                        //         }
                        //         $this->NewsComment->deleteAll(array('id'=>$value3['NewsComment']['id']));//删除二级评论
                        //         $this->NewsComment->updateAll(array('hot'=>"hot-1"),array('id'=>$info['NewsComment']['id'],'hot >='=>1));
                        //     }
                        // }
                        $praiseCount = $this->getCommentsPraiseCount($value3['NewsComment']['id']);
                        $this->NewsComment->updateAll(array('status'=>-1),array('id'=>$value3['NewsComment']['id']));//删除一级评论
                        $this->NewsComment->updateAll(array('hot'=>"hot-$praiseCount"),array('id'=>$info['NewsComment']['parent_id'],'hot >='=>1));
                        $this->NewsComment->updateAll(array('hot'=>"hot-3"),array('id'=>$info['NewsComment']['parent_id'],'hot >='=>1));
                    }
                }
                $this->NewsComment->updateAll(array('status'=>-1),array('id'=>$id));//删除一级评论
            }
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    // private function getUserName($id){
    //     $conditions['conditions'] = array('id'=>$id);
    //     $info = $this->BlogUsers->find('first', $conditions);
    //     return $info['BlogUsers']['nick_name'];
    // }

    private function getUserInfo($id){
        $conditions['conditions'] = array('id'=>$id);
        $info = $this->BlogUsers->find('first', $conditions);
        return $info['BlogUsers'];
    }

    protected function checkText($text) {
        $params = array(
            "accessKey" => "5a2VHw5BBAyM0oJGNLzT",
            "type" => "GAME",
            "appId" => "default",
            "data"=> array(
                  "text" => "",
                  "tokenId" => "123456",
                  "ip" => '',
                  "channel" =>  "COVER"
            )
        );
        $params['data']['text'] = $text;
        $params['data']['ip'] = $this->getRealIp();
        $ret = $this->curlData(json_encode($params));
        $result = json_decode($ret,1);
        //file_put_contents('/tmp/1.log',json_encode($result)."\r\n",FILE_APPEND);
        //如果请求超时
        if(empty($ret)){
            return false;
        }
        if($result['code'] == 1100 && $result['riskLevel'] == 'REJECT'){
            return false;
        }
        if($result['code'] == 1901){
            return false;
        }
        return true;
    }

    protected function getRealIp() {
        $ip=FALSE;
        //客户端IP 或 NONE
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        //多重代理服务器下的客户端真实IP地址（可能伪造）,如果没有使用代理，此字段为空
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!preg_match("/^(10│172.16│192.168)./", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        //客户端IP 或 (最后一个)代理服务器 IP
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

    protected function curlData($curlPost,$url = 'http://goonie-img.uu.cc/v2/saas/anti_fraud/text') {
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
      //       curl_setopt($ch, CURLOPT_NOSIGNAL, true);    //注意，毫秒超时一定要设置这个  
            // curl_setopt($ch, CURLOPT_TIMEOUT_MS, 20); //超时时间200毫秒 
            curl_setopt($ch, CURLOPT_TIMEOUT, 3);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
            $res = curl_exec($ch);
            //$httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
            return $res;
        }catch(Exception $e){
            return false;
        }
    }

    protected function mb_strlen_extend($data){
        $pattern_src = '/<img[\s\S]*?src\s*=\s*[\"|\'](.*?)[\"|\'][\s\S]*?>/';
        $data=htmlspecialchars_decode($data);
        $num1 = preg_match_all($pattern_src, $data, $match_src1);
        $arr_src1 = $match_src1[0];
        if(!empty($arr_src1)){
            foreach($arr_src1 as $img){
                $data = str_replace($img,'图',$data);
            }
        }
        return mb_strlen($data);
    }


    protected function array_reverse($arr){
        $left = 0;
        $right = count($arr) -1;
        $temp = array();
        while ($left <= $right){
            $temp[$left] = $arr[$right];
            $temp[$right]  = $arr[$left];
            $left++;
            $right--;
        }
        ksort($temp);
        return $temp;
    }
}

