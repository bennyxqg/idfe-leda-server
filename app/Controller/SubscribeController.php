<?php
App::uses('Controller', 'Controller');

class SubscribeController extends Controller{

    public $components = array("Redis");
    public $uses = array('Subscribe','BlogUsers');
    private $params;
    private $site_id;
    private $micro_config;
   
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
        $config = Configure::read('MICRO_CONFIG');
        $this->micro_config = $config[$this->site_id];
    }

    protected function echoJson($msg, $code = 0, $data = array()){
        $return_data['msg']         = $msg;
        $return_data['error_code']  = $code;
        $return_data['data']        = $data;
        
        $ret = json_encode($return_data);
        echo $ret;
        exit();
    }

     /**
     * 时间戳 - 精确到毫秒
     * @return float
     */
    public static function getMillisecond() {
        list($t1, $t2) = explode(' ', microtime());
        return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
    }

    /**
     * 随机字符串
     */
    public static function createNonceStr($iength = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $iength; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    /**
     * 发送数据
     * @param String $url     请求的地址
     * @param Array  $header  自定义的header数据
     * @param Array  $content POST的数据
     * @return String
     */
    public static function tocurl($url, $header, $content = null){
        $ch = curl_init();
        // if(substr($url,0,5)=='https'){
        //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
        //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);  // 从证书中检查SSL加密算法是否存在
        // }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        if($content != null){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        }
        $response = curl_exec($ch);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $response;
    }

    public function get_code(){
        try{
            $phone=isset($this->params["phone"])?$this->params["phone"]:"";
            if(empty($phone)){
                $this->echoJson('phone参数不能为空', -1);
            }
            $phoneType=isset($this->params["platform"])?$this->params["platform"]:"android";
            if(empty($phoneType)){
                $this->echoJson('platform参数不能为空', -1);
            }
            $UserAgent  = "platform:CP;channel:CP;appVersion:1.0.0;package:com.cp.sdk;sdkVersion:1.0.0;sdkName:MSSDK;networkType:WiFi;deviceBrand:common;deviceId:00000000;localTime:2019-01-01 00:00:00";

            if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                $this->echoJson('请填写正确的手机号！', -2);
            }
            //验证该手机号是否已经预约
            // $conditions['conditions'] = array('phone' => $phone, 'site_id' => $this->site_id);
            // $result = $this->Subscribe->find('first', $conditions);
            // if(!empty($result)){
            //     $this->echoJson('该手机号已经预约', -3);
            // }

            if($phoneType == "android"){
                $AppKey    = $this->micro_config['android']['AppKey'];
                $AppSecret = $this->micro_config['android']['AppSecret'];
            }
            if($phoneType == "ios"){
                $AppKey    = $this->micro_config['ios']['AppKey'];
                $AppSecret = $this->micro_config['ios']['AppSecret'];
            }

            $url        = "https://pub-gw.uu.cc/public-gateway/ms-usercenter/sdk_/messageSend/verifyCode?phone=".trim($phone);
            $Nonce      = self::createNonceStr(4);
            $Timestamp  = self::getMillisecond();
            $phone      = trim($phone);
            $SignatureArr = array(
                'AppKey' => $AppKey,
                'Nonce' => $Nonce,
                'Timestamp' => $Timestamp,
            );
            $SignatureArr['phone'] = $phone;
            ksort($SignatureArr);
            $Signature = urlencode(md5($AppSecret.'&'.http_build_query($SignatureArr).'&'.$AppSecret));
            $header     = array('Content-Type:application/json','User-Agent:'.$UserAgent,'Accept-Language:zh_CN','AppKey:'.$AppKey,'Nonce:'.$Nonce,'Timestamp:'.$Timestamp,'Signature:'.$Signature,'companyEntity:'.$this->micro_config['companyEntity']);
            //return json($str);
            $result   = self::tocurl($url,$header);
            if ($result ) {
                $ret = json_decode($result,1);
                if($ret['code'] != 0){
                    $this->echoJson($ret['desc'], $ret['code']);
                }else{
                    $this->echoJson('验证码已发送成功', 0);
                }  
            } else {
                $this->echoJson('验证码发送失败，请重新尝试！', 0);
            }
            
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

    public function subscribe(){
        try{
            $phone=isset($this->params["phone"])?$this->params["phone"]:"";
            if(empty($phone)){
                $this->echoJson('phone参数不能为空', -1);
            }
            if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                $this->echoJson('请填写正确的手机号！', -2);
            }
            $platform=isset($this->params["platform"])?$this->params["platform"]:"android";
            if(empty($platform)){
                $this->echoJson('platform参数不能为空', -3);
            }
            $code=isset($this->params["code"])?$this->params["code"]:"";
            if(empty($code)){
                $this->echoJson('code参数不能为空', -4);
            }
            $email=isset($this->params["email"])?$this->params["email"]:"";
            // if(empty($email)){
            //     $this->echoJson('email参数不能为空', -5);
            // }
            //给创梦发送请求验证手机验证码
            $checkCode = $this->reserve_sms($phone,$code,$platform);
            $last = json_decode($checkCode,true);
            if($last['code'] != 0){
                $this->echoJson($last['desc'], -7);
            }
            //验证该手机号是否已经预约
            $conditions['conditions'] = array('phone' => $phone, 'site_id' => $this->site_id);
            $result = $this->Subscribe->find('first', $conditions);
            if(!empty($result)){
                $this->echoJson('该手机号已经预约', -998);
            }
            $data = array(
                'site_id'=>$this->site_id,
                'phone'=>$phone,
                'platform'=>$platform,
                'email'=>$email,
                'open_id'=>isset($last['result']['data']['openId'])?$last['result']['data']['openId']:'',
            );
            $ret = $this->Subscribe->save($data);
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }

     /*
     * 调用w微服务接口验证短信验证码
     * */
    protected function reserve_sms($phone,$phoneCode,$phoneType){
        $UserAgent  = "platform:CP;channel:CP;appVersion:1.0.0;package:com.cp.sdk;sdkVersion:1.0.0;sdkName:MSSDK;networkType:WiFi;deviceBrand:common;deviceId:00000000;localTime:2019-01-01 00:00:00";
        if($phoneType == "android"){
            $AppKey    = $this->micro_config['android']['AppKey'];
            $AppSecret = $this->micro_config['android']['AppSecret'];
        }
        if($phoneType == "ios"){
            $AppKey    = $this->micro_config['ios']['AppKey'];
            $AppSecret = $this->micro_config['ios']['AppSecret'];
        }

        $url        = "https://pub-gw.uu.cc/public-gateway/ms-player/sdk_/player/pre/reservationRegister";
        $Nonce      = self::createNonceStr(4);
        $Timestamp  = self::getMillisecond();
        $phone      = trim($phone);
        $data = json_encode(array(
            'phone'=>$phone,
            'phoneCode'=>$phoneCode,
        ));
        $str = "{$AppSecret}&AppKey={$AppKey}&Nonce={$Nonce}&Timestamp={$Timestamp}&requestBody={$data}&{$AppSecret}";
        $Signature = urlencode(md5($str));
        $header    = array('Content-Type:application/json','User-Agent:'.$UserAgent,'Accept-Language:zh_CN','AppKey:'.$AppKey,'Nonce:'.$Nonce,'Timestamp:'.$Timestamp,'Signature:'.$Signature);
        $result   = self::tocurl($url,$header,$data);
        return $result;
    }

    public function save_info(){
        try{
            $phone=isset($this->params["phone"])?$this->params["phone"]:"";
            if(empty($phone)){
                $this->echoJson('phone参数不能为空', -1);
            }
            $extend_1=isset($this->params["extend_1"])?$this->params["extend_1"]:"";
            $extend_2=isset($this->params["extend_2"])?$this->params["extend_2"]:"";
            //验证该手机号是否已经预约
            $conditions['conditions'] = array('phone' => $phone, 'site_id' => $this->site_id);
            $result = $this->Subscribe->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('请先预约', -2);
            }
            $db = $this->Subscribe->getDataSource();
            $data = array();
            if(!empty($extend_1)){
                $data['extend_1'] = $db->value($extend_1, 'string');
                $ret = $this->Subscribe->updateAll($data,array('id'=>$result['Subscribe']['id']));
            }
            if(!empty($extend_2)){
                $data['extend_2'] = $db->value($extend_2, 'string');
                if(!$this->checkText($extend_2)){
                    $this->echoJson('昵称不合法，请重新填写', -4);
                }
                $conditions['conditions'] = array('extend_2' => $extend_2, 'site_id' => $this->site_id);
                $result2 = $this->Subscribe->find('first', $conditions);
                if(!empty($result2)){
                    $this->echoJson('昵称重复', -5);
                }
                $ret =  $this->Subscribe->updateAll($data,array('id'=>$result['Subscribe']['id']));
            }
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $dataSource->rollback();
            $this->echoJson('server error',-1000);
        }   
    }

    public function get_info(){
        try{
            $phone=isset($this->params["phone"])?$this->params["phone"]:"";
            if(empty($phone)){
                $this->echoJson('phone参数不能为空', -1);
            }
            //验证该手机号是否已经预约
            $conditions['conditions'] = array('phone' => $phone, 'site_id' => $this->site_id);
            $conditions['fields'] = array('id','phone','site_id','platform','open_id','email','extend_1','extend_2');
            $result = $this->Subscribe->find('first', $conditions);
            if(empty($result)){
                $this->echoJson('请先预约', -2);
            }
            $this->echoJson('success', 0, $result['Subscribe']);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
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
}

