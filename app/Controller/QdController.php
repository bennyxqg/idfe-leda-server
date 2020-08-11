<?php
APP::uses('FrontController', 'Controller');

/**
 * @property mixed CodeCheck
 */
class QdController extends FrontController
{
    var $name = 'Qd';
    //每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
    var $helper = array("BaseHelper", "WebsiteHelper");
    public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","QdInviteCode","PacketSendRecord","QdInviteUserRecord","CollectPhone","CollectPhoneUser","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint','Stat');
    public $is_mobile;
    var $_upload_limit = array(
            'extension' => array('jpg', 'gif', 'png')
    );

    /**
     * 兑换码错误参数
     * @var array
     *
     */
    public $code_message=array(
        0=>"成功",
        1=>"参数不全",
        2=>"手机号码不能为空",
        3=>"手机号码格式错误",
        4=>"兑换码已不足",
        5=>"发送短信失败",
        6=>"发送兑换码失败",
        7=>"兑换码领取失败",
        8=>"已经领取过兑换码",
        9=>"发送次数超过限制",
        10=>"验证码不正确",
        11=>"失败",
        12=>"操作太频繁,稍后再试",

    );

    function beforeFilter()
    {
        parent::beforeFilter();

        header("Access-Control-Allow-Origin: https://act.uu.cc"); // 允许a.com发起的跨域请求
        //如果需要设置允许所有域名发起的跨域请求，可以使用通配符 *
        header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求
        header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With');


        //手机页面路由到相应的wap 模板
        if ($this -> RequestHandler -> isMobile()) {
            $this->is_mobile=true;
            $GLOBALS['isMobile']=true;
            //手机端存在 访问手机端 否则访问web端
            $file_path=APP."View/themes/".$this->directory_name.DS."wap".DS.$this->request->action.".ctp";
            if(file_exists($file_path)){
                $this->directory_name=$this->directory_name.DS."wap";
            }
        }else{
            $GLOBALS['isMobile']=false;
            //web 不存在访问手机端
            $file_path=APP."View/themes/".$this->directory_name.DS.$this->request->action.".ctp";
            if(!file_exists($file_path)){
                $this->directory_name=$this->directory_name.DS."wap";
            }
            $this->is_mobile=false;
        }

        $this->layout = '';

    }

    function special()
    {
        $this->redirect('/activity/'.$this->request->params['router'].'/index.html');
    }


    /**
     *当 引导页 占据首页的时候 当作网站主页
     */
    function home(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'home';
        $this->render($file_name);
    }
    /**
     * 首页控制器 只负责路由 取数据的逻辑放到模板组件里面去
     * Enter description here ...
     *
     */
    function index()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'qd_index';
        $this->render($file_name);
    }

    /**
     * 微信页面1
     *
     */
    function wx_index1()
    {
        $this->is_mobile=true;
        $GLOBALS['isMobile']=true;
        $file_name = '/themes' . DS . 'qd.uu.cc' . DS .'wap'.DS. 'wx_index';
        $this->render($file_name);
    }
    /**
     * 微信页面2
     *
     */
    function wx_index2()
    {
        $this->is_mobile=true;
        $GLOBALS['isMobile']=true;
        $file_name = '/themes' . DS . 'qd.uu.cc' . DS .'wap'.DS. 'wx_index';
        $this->render($file_name);
    }
    /**
     * 微信页面3
     *
     */
    function wx_index3()
    {
        $this->is_mobile=true;
        $GLOBALS['isMobile']=true;
        $file_name = '/themes' . DS . 'qd.uu.cc' . DS .'wap'.DS. 'wx_index';
        $this->render($file_name);
    }



    /**
     *
     *发送兑换码 并且需要收集收集手机号的 接口  发送到手机里面 直接发送没有校验
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id
     *
     */
    function collect_phone_return_code(){
        $this->layout="";
        $this->autoRender=false;
        try{
            //             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
            $phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
            if(empty($phone)){
                $this->json_format(array("ret"=>2));
            }
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $code_id=intval($code_id);
            //如果发送过 直接发送给用户
            $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
            if($result){
                $code=$result["Phone"]["code"];
                $this->json_format(array("ret"=>8,"code"=>$code));
            }
            //根据传入的site_id 与code_id 发送兑换码
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"];

            $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
            $this->Phone->saveData($data);
            $this->json_format(array("ret"=>0,"code"=>$code));

            //执行发送操作
            //$send_result=$this->send_message($site_id,$code_id,$phone,$code);
//     		if($send_result){
//     			$data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
//     			$this->Phone->saveData($data);
//     			$this->json_format(array("ret"=>0,"code"=>$code));
//     		}else{
//     			$this->json_format(array("ret"=>5));
//     		}
        }catch (Exception $e){
            $this->log("log_error",$e->getMessage());
            $this->json_format(array("ret"=>7));
        }

    }

    /**
     *
     *发送兑换码 并且需要收集收集手机号的 接口  发送到手机里面 直接发送没有校验
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id
     *
     */
    function send_phone_code(){
        $this->layout="";
        $this->autoRender=false;
        try{
            //             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
            $phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
            if(empty($phone)){
                $this->json_format(array("ret"=>2));
            }
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $code_id=intval($code_id);
            //如果发送过 直接发送给用户
            $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
            if($result){
                $code=$result["Phone"]["code"];
                $this->json_format(array("ret"=>8,"code"=>$code));
            }
            //根据传入的site_id 与code_id 发送兑换码
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"];
            //执行发送操作
            $send_result=$this->send_message($site_id,$code_id,$phone,$code);
            if($send_result){
                $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
                $this->Phone->saveData($data);
                $this->json_format(array("ret"=>0,"code"=>$code));
            }else{
                $this->json_format(array("ret"=>5));
            }
        }catch (Exception $e){
            $this->log("log_error",$e->getMessage());
            $this->json_format(array("ret"=>7));
        }

    }

    /**
     *
     *发送信息 到手机里面 直接发送没有校验 只发送信息（不含验证码）
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id 默认为100000
     *
     */
    function send_msg(){
        $this->layout="";
        $this->autoRender=false;
        try{
            $site_id=$this->request->data["site_id"];
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
            $phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
            if(empty($phone)){
                $this->json_format(array("ret"=>2));
            }
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $code_id=intval($code_id);
            //如果发送过 直接发送给用户
            $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
            $content = $this->message_format($site_id,$code_id,$phone);
            if($result){ //echo 111;
//     			$code=$result["Phone"]["code"];
                $content = $this->message_format($site_id,$code_id,$phone);
                $this->json_format(array("ret"=>8,"code"=>$content));
            }
            /* //根据传入的site_id 与code_id 发送兑换码
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"]; */
            //执行发送操作
            $send_result=$this->send_message($site_id,$code_id,$phone,'');
            if($send_result){
                $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>'');
                $this->Phone->saveData($data);
                $this->json_format(array("ret"=>0));
            }else{
                $this->json_format(array("ret"=>5));
            }
        }catch (Exception $e){
            $this->log("log_error",$e->getMessage());
            $this->json_format(array("ret"=>7));
        }
    }

    /**
     *
     * 只是单纯的发送 兑换码的接口 提供json 或者 jsonp 数据 发送到页面
     */
    function send_code(){
        $this->layout="";
        $this->autoRender=false;
        try{
//             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id = isset($this->request->data["code_id"])?$this->request->data["code_id"]:"";

            if(empty($site_id) || empty($code_id)){
                $this->json_format(array("ret"=>1));
            }
            if ($code_id == 94 || $code_id == 95) {
                $site_id = 103;
            }
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"];
            $this->json_format(array("ret"=>0,"code"=>$code));
        }catch (Exception $e){
            $this->json_format(array("ret"=>7));
        }
    }

    function check_code(){

        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["site_id"]) || empty($this->request->data["phone"]) || empty($this->request->data["code"])){
                $this->json_format(array("ret"=>1));
            }
            $site_id=$this->request->data["site_id"];
            $phone=$this->request->data["phone"];
            $code=$this->request->data["code"];
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"code"=>$code,"status"=>0));
            $result=$this->CodeCheck->find("first",$conditions);
            if(empty($result)){
                $this->json_format(array("ret"=>10));
            }
            $id=$result["CodeCheck"]["id"];
            $this->CodeCheck->id=$id;
            if($this->CodeCheck->saveField("status",1)){
                $this->json_format(array("ret"=>0));
            }else{
                $this->json_format(array("ret"=>11));
            }
            //return $this->send_code();
        }
    }



    /**
     * 发送 短信信息
     * @param $site_id
     * @param $code_id
     * @param $phone
     * @param $code
     * @return bool
     *
     */
    function send_message($site_id,$code_id,$phone,$code){
        $content=$this->message_format($site_id,$code_id,$phone);
        if(!$content){
            return false;
        }
        $content=str_replace("\r\n","",$content);
        $content=sprintf($content,$code);

        return $this->send_phone($content,$phone);
    }

    function send_phone($content,$phone){
        //开发环境不用读取不同配置
        if(isset($_SERVER["PHP_ENV_MODE"]) && !empty($_SERVER["PHP_ENV_MODE"])){
            $ENV_MODE = $_SERVER["PHP_ENV_MODE"];
        }
        if(isset($ENV_MODE) && $ENV_MODE == "comm_dev"){
            //开发环境
            $api="http://test.sms.uu.cc:8081/SMS/sa/sms/send";
            $data=array(
                "content"=>$content,
                "mobile"=>$phone,
            );
        }else{
            $api="http://sagent3.uu.cc/SMS/sa/sms/send";
            $code="ids_site_support";
            $data=array(
                "content"=>$content,
                "mobile"=>$phone,
                'code'=>$code,
                'tid'=>$this->site_id
                //"sign"=>md5(($content.$phone.$p_key) )
            );
        }
        $result=$this->requestData($api,'post',$data);
        $result=json_decode($result,true);
        if($result["ret"] == 0 && $result["error_code"] == 0 ){
            return true;
        }else{
            return false;
        }
    }

   /*  function test(){
        $content ="teste这个是";
        $phone = '18614907129';
        $this->send_phone($content, $phone);
    } */

    private function create_code(){
        return rand(10000,99999);
    }
    /**
     * 返回短信文案内容
     * @param $site_id
     * @param $code_id 大于 100000 表示的发送验证码 code
     * @return mixed
     *
     */
    function message_format($site_id,$code_id,$phone){
        $message_format=array(
            '106'=>array(
            "1"=>"您的兑换码是：%s。复制后进入游戏激活使用。",
                "3"=>"您已成功邀请3人，您的兑换码是：%s。复制后进入游戏激活使用。",
                "5"=>"您已成功邀请5人，您的兑换码是：%s。复制后进入游戏激活使用。",
                "10"=>"您已成功邀请10人，您的兑换码是：%s。复制后进入游戏激活使用。",
            )
        );
        if(!empty($site_id) && !empty($code_id)){
            return $message_format[$site_id][$code_id];
        }
        return false;
    }

    public function gen_invite_code(){
        $code = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $rand = $code[rand(0,25)]
            .strtoupper(dechex(date('m')))
            .date('d').substr(time(),-5)
            .substr(microtime(),2,5)
            .sprintf('%02d',rand(0,99));
        for(
            $a = md5( $rand, true ),
            $s = '0123456789ABCDEFGHIJKLMNOPQRSTUV',
            $d = '',
            $f = 0;
            $f < 4;
            $g = ord( $a[ $f ] ),
            $d .= $s[ ( $g ^ ord( $a[ $f + 4 ] ) ) - $g & 0x1F ],
            $f++
        );
        return $d;
    }
    #新增邀请记录方法
    public function add_invite_record($recordData){
        if($recordData['user_phone'] && $recordData['from_phone']) {
            $inviteRecord = $this->QdInviteUserRecord->find("first", array("conditions" => array("user_phone" => $recordData['phone'], 'from_phone' => $recordData['from_phone'])));
            $inviteCounts = $this->QdInviteUserRecord->find("count", array("conditions" => array("from_phone" => $recordData['from_phone'])));
        if (!$inviteRecord) {
                $recordData['add_time'] = date("Y-m-d H:i:s");
                $res = $this->QdInviteUserRecord->save($recordData);
                if ($res) {
                    $inviteCounts = $inviteCounts + 1;
            if($inviteCounts == 3){
                $this->send_packet($recordData['from_phone'],$recordData['plat_type'], 3);
            }
            if($inviteCounts == 5){
                $this->send_packet($recordData['from_phone'],$recordData['plat_type'], 5);
            }
            if($inviteCounts == 10){
                $this->send_packet($recordData['from_phone'],$recordData['plat_type'], 10);
            }

                }
            }
        }


    }
    #根据邀请记录方法对应的礼包兑换码,$type=0为默认预约礼包，3,5,10分为邀请礼包,$plat_type平台类型1ios2android
    public function send_packet($phone,$plat_type=1,$type=0){
        $inviteCode = $this->QdInviteCode->find("first",array("conditions"=>array("status"=>0,'type'=>$type,'plat_type'=>$plat_type)));
    if($inviteCode['QdInviteCode']) {
            if ($phone) {
                $sendRecord = array(
                    'phone' => $phone,
                    'type' => $type,
                    'add_time' => date("Y-m-d H:i:s"),
                    'code' =>$inviteCode['QdInviteCode']['code']
                );
                $res = $this->PacketSendRecord->save($sendRecord);
                if($res){
                    $this->QdInviteCode->id=$inviteCode['QdInviteCode']['id'];
                    $this->QdInviteCode->saveField('user_phone',$phone);
                    $this->QdInviteCode->saveField('update_time',date("Y-m-d H:i:s"));
                    $this->QdInviteCode->saveField('status',1);
            if($type == 0){
                $type = 1;
            }
                    $this->send_message(106,$type,$phone,$inviteCode['QdInviteCode']['code']);
                }
            }
        }
    }

    /**
     * 新增圈地预约
     */
    public function qd_yuyue(){
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post")){
            $this->autoRender=false;
            if(empty($this->request->data["phone"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $phone = $this->request->data["phone"];
            $collect_phone=$this->CollectPhoneUser->find("first",array("conditions"=>array("phone"=>$phone)));
            if($collect_phone){
                $this->export(array("ret"=>2,"msg"=>"你已经预约过了哦"));
            }
            $invite_code = trim($this->request->data["invite_code"]);
            if(!empty($invite_code)){
                $userByInviteCode=$this->CollectPhoneUser->find("first",array("conditions"=>array("my_invite_code"=>strtoupper($invite_code))));
                if(!$userByInviteCode){
                    $this->export(array("ret"=>4,"msg"=>"您输入的邀请码有误哦"));
                }
            }
            if(!isset($this->request->data['type']) || strlen($this->request->data['type']) == 0) {
                $this->request->data['type'] = 1;
            }
            $data=array(
                "phone"=>$phone,
                "type"=>$this->request->data['type'],
                'update_time'=>time(),
                "invite_code"=>trim($this->request->data["invite_code"]),
                "my_invite_code"=>$this->gen_invite_code()
            );
            if($this->CollectPhoneUser->save($data)){
            $this->send_packet($phone,$this->request->data['type']);
                if(!empty($invite_code)){
                    #添加邀请记录
                    if($userByInviteCode) {
                        $recordData = array(
                            'user_phone' => $phone,
                            'from_phone' => $userByInviteCode['CollectPhoneUser']['phone'],
                            'plat_type'=>$userByInviteCode['CollectPhoneUser']['type']
                        );
                        $this->add_invite_record($recordData);
                    }
                }
                $this->export(array("ret"=>0,"msg"=>"恭喜你预约成功"));
            }else{
                $this->export(array("ret"=>3,"msg"=>"系统繁忙请重试"));
            }
        }
    }
    /**
     * 新增圈发送短信验证码
     */
    public function qd_send_check_code(){
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["site_id"]) || empty($this->request->data["phone"])){
                $this->export(array("ret"=>1,"缺少参数"));
            }
            $site_id=$this->request->data["site_id"];
            $phone=$this->request->data["phone"];
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->export(array("ret"=>3,"手机号不合法"));
            }
            //路人从sdk获取验证码
            if ($this->site_id == 138) {
                $api = "https://ul.uu.cc/sns/getcode";
                $data = array(
                    'type'   => 'login',
                    'mobile' => $phone,
                );
                $result = json_decode($this->requestData($api, 'post', $data), true);
                if (isset($result['code']) && $result['code'] == 0) {
                    $this->export(array("ret" => 0, "发送成功"));
                } else {
                    $this->export(array("ret" => $result['code'], $result['desc']));
                }
                return;
            }

            //每人发送限制
            $conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"status"=>0));
            $count=$this->CodeCheck->find("count",$conditions);
            if($count > 10){
                $this->export(array("ret"=>9,"发送过于频繁"));
            }
            $code = rand(1000, 9999);
            $content="你的校验码是:{$code}";
            $result=$this->send_phone($content,$phone);
            if($result){
                $data=array("site_id"=>$site_id,"phone"=>$phone,"code"=>$code);
                $this->CodeCheck->save($data);
                $this->export(array("ret"=>0,"发送成功"));
            }else{
                $this->export(array("ret"=>5,"系统繁忙请重试"));
            }
        }
    }
    /*
     * 验证验证码是否正确
     */
    public function qd_valid_check_code(){
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["site_id"]) || empty($this->request->data["phone"]) || empty($this->request->data["code"])){
                $this->export(array("ret"=>1,"缺少参数"));
            }
            $site_id=$this->request->data["site_id"];
            $phone=$this->request->data["phone"];
            $code=$this->request->data["code"];
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->export(array("ret"=>3,"手机号不合法"));
            }
            $conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"code"=>$code,"status"=>0));
            $result=$this->CodeCheck->find("first",$conditions);
            if(empty($result)){
                $this->export(array("ret"=>10,"验证码不合法"));
            }
            $id=$result["CodeCheck"]["id"];
            $this->CodeCheck->id=$id;
            if($this->CodeCheck->saveField("status",1)){
                $this->export(array("ret"=>0,"正确"));
            }else{
                $this->export(array("ret"=>11,"系统繁忙请重试"));
            }
        }
    }


    /**
     * 新增路人发送短信验证码
     */
    public function qd_send_check_code_luren(){
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["site_id"]) || empty($this->request->data["phone"])){
                $this->export(array("ret"=>1,"msg"=>"缺少参数"));
            }
            $site_id=$this->request->data["site_id"];
            $phone=$this->request->data["phone"];
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
            }

            $collect_phone=$this->CollectPhone->find("first",array("conditions"=>array("phone" => $phone, 'collect_name' => $site_id)));
            if($collect_phone){
                $this->export(array("ret"=>2,"msg"=>"已经预约过了"));
            }

            //路人从sdk获取验证码
            if ($this->site_id == 138) {
                $api = "https://ul.uu.cc/sns/getcode";
                $data = array(
                    'type'   => 'login',
                    'mobile' => $phone,
                    'client_ip' => $this->getRealIp(),
                );
                $result = json_decode($this->requestData($api, 'post', $data), true);
                if (isset($result['code']) && $result['code'] == 0) {
                    $this->export(array("ret" => 0, "msg"=>"发送成功"));
                } else {
                    $this->export(array("ret" => $result['code'], "msg"=>$result['desc']));
                }
                return;
            }

            //每人发送限制
            $conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"status"=>0));
            $count=$this->CodeCheck->find("count",$conditions);
            if($count > 10){
                $this->export(array("ret"=>9, "msg"=>"发送过于频繁"));
            }
            $code = rand(1000, 9999);
            $content="你的校验码是:{$code}";
            $result=$this->send_phone($content,$phone);
            if($result){
                $data=array("site_id"=>$site_id,"phone"=>$phone,"code"=>$code);
                $this->CodeCheck->save($data);
                $this->export(array("ret"=>0, "msg"=>"发送成功"));
            }else{
                $this->export(array("ret"=>5, "msg"=>"系统繁忙请重试"));
            }
        }
    }
    
    public function init_users(){
    $init_number = 79602;
    $date = array(
        '2017-07-27'=>156881,
        '2017-07-28'=>309182,
        '2017-07-29'=>609340,
        '2017-07-30'=>1200895
    );
    $timesIncr = array(
        '0'=>1,
        '1'=>1,
        '2'=>1,
        '3'=>1,
        '4'=>2,
        '5'=>2,
        '6'=>2,
        '7'=>2,
        '8'=>2,
        '9'=>3,
        '10'=>3,
        '11'=>3,
        '12'=>5,
        '13'=>4,
        '14'=>3,
        '15'=>3,
        '16'=>3,
        '17'=>3,
        '18'=>4,
        '19'=>5,
        '20'=>5,
        '21'=>5,
        '22'=>3,
        '23'=>3
    );
    $today = date("Y-m-d");
    if($today < '2017-07-27'){
        return $init_number;
    }
    if($today > '2017-07-30'){
        $today = '2017-07-30';
    }
    #$time = date("H",strtotime("2017-07-26 11:11:20"));
    $time  = date("H");
    if(!substr($time, 0,1)){
        $time = (int) substr($time, 1,1);
    }
    $time = (int)$time;
    $curBaseNumber = $date[$today];
    $curBaseTime   = $timesIncr[$time];
    foreach ($timesIncr as $key => $value) {
        # code...
        if($key <= $time){
            $curBaseNumber = $curBaseNumber * (1+$value*0.01);
        }
    }
    $curBaseNumber = (int)round($curBaseNumber,0);
    if($curBaseNumber >= 1000000){
        return 1000000;
    }
    return $curBaseNumber;
}

    /**
     * 新增圈地页面初始化接口
     */
    public function qd_init()
    {
        $init_members = $this->init_users();
        $this->layout = "";
        $this->autoRender = false;
        if ($this->request->is("post")) {
            $retData = array(
                'total_users'=>0,
                'invite_code'=>'',
                'invite_status'=>array(
                    'invite_3'=>0,
                    'invite_5'=>0,
                    'invite_10'=>0
                )
            );
            $all_users = $this->CollectPhoneUser->find("count");
            $retData['total_users'] = $init_members + (int)$all_users;

            $phone=$this->request->data["phone"];
            if($phone){
                $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
                if($tel_result == 0){
                    $this->export(array("ret"=>3,"手机号不合法"));
                }
                $userByPhone=$this->CollectPhoneUser->find("first",array("conditions"=>array("phone"=>$phone)));
                if($userByPhone['CollectPhoneUser']){
                    $retData['invite_code'] = $userByPhone['CollectPhoneUser']['my_invite_code'];
                }
                $all_send_data = $this->PacketSendRecord->find('all',array("conditions"=>array("phone"=>$phone)));
                if($all_send_data){
                    foreach ($all_send_data as $key=>$val){
                        if($val['PacketSendRecord']['type'] == 3){
                            $retData['invite_status']['invite_3'] = 1;
                        }
                        if($val['PacketSendRecord']['type'] == 5){
                            $retData['invite_status']['invite_5'] = 1;
                        }
                        if($val['PacketSendRecord']['type'] == 10){
                            $retData['invite_status']['invite_10'] = 1;
                        }
                    }
                }
            }
            $this->export(array("ret"=>0,"data"=>$retData,"success"));

        }
    }

    /**
    *
    *
    */

    public function send_telephone(){
        $this->autoRender=false;
        if(!($this->request->data["phone"]) && $this->request->data['site_id'] && $this->request->data['code_id'] && $this->request->data['imgid']){
               echo json_encode(array('code'=>'-1','msg'=>'参数错误，不能为空手机号'));die;
        }
        $phone=$this->request->data["phone"];
        if($phone){
            $this->loadModel('Gift');
            $imgid=$this->request->data['imgid'];
            $result=$this->Gift->save($this->request->data);//var_dump($result);die;
            if($imgid){
                switch($imgid){

                    case 4:
                        $str='50元话费卡X1';
                    break;

                    case 2:
                        $str='100元话费卡X1';
                    break;

                    case 8:
                        $str='移动电源X1';
                    break;

                }
            }
        }

        $content="感谢您将和我们一起玩《烈焰遮天》，您抽中了{$str}，请携带工牌前往厂区银狐网吧领取奖品，需要出示本条短信，谢谢，第一PK手游《烈焰遮天》下载地址：sf.uu.cc，玩游戏送iPhone6！";
        $res=$this->send_phone($content,$phone);
         if($result && $res){
            echo json_encode(array('code'=>0,'msg'=>'发送成功'));die;
        }
    }

    public  function getRealIp()
    {
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
    }



}


?>