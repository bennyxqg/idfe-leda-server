<?php

class FrontController extends Controller
{

    public $name = 'Front';
    public $uses = array('Website', 'Block', 'WebsiteImage', 'News','Stat','PcTemplateConfig');
    public $server_info = null;
    public $directory_name = null;
    public $site_id = null;
    public $components = array('Paginator',"RequestHandler","Image","Session","Redis");

    public  $htmlvars=array();

    protected  $access_token = null;
    protected  $app_id = null;
    protected  $app_secret = null;
    protected  $id=null;
    protected  $jsapi_ticket = null;
    protected  $android_stat_key='';
    protected  $ios_stat_key='';


    // 约定的客户端类型
    const DEVICE_TYPE_PC = 'pc';
    const DEVICE_TYPE_MOBILE = 'mobile';
    const DEVICE_TYPE_WX = 'wechat';
    // 约定的客户端操作系统
    const DEVICE_OS_IOS = 'ios';
    const DEVICE_OS_ANDIRID = 'android';
    const DEVICE_OS_WINDOWS = 'windows';
    const DEVICE_OS_MAC = 'mac';
    const DEVICE_OS_LINUX = 'linux';
    const DEVICE_OS_UNKONW = 'unkonw';
    // 上报彩虹系统队列 redis key
    const REDIS_KEY_DATA_POST = 'dgc_comm:list:stat:edata';
    // 事件类型 1、访问；2、下载点击；3、预约点击；4、扫码下载
    const EDATA_EVENT_TYPE_VISIT = 1;
    const EDATA_EVENT_TYPE_DOWNLOAD = 2;
    const EDATA_EVENT_TYPE_BOOK = 3;
    const EDATA_EVENT_TYPE_QRCODE = 4;

    /**
     * 获取域名信息
     * (non-PHPdoc)
     * @see Controller::beforeFilter()
     */
    function beforeFilter()
    {
        //如果需要设置允许所有域名发起的跨域请求，可以使用通配符 *
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers:X-Requested-With");  
        header("Access-Control-Allow-Methods:PUT,POST,GET,DELETE,OPTIONS"); //请求方式
        parent::beforeFilter();
        //print_r($this);
        $full_base_url = FULL_BASE_URL;
        if (FULL_BASE_URL == "http://5.uu.cc" || FULL_BASE_URL == "https://5.uu.cc") {
            $full_base_url = "http://wxt.uu.cc";
        }
        $this->server_info = $this->Website->get_website_info_by_name(str_replace('https','http',$full_base_url));
        
//         if ($this->server_info['id'] == 104) {
//         	$redirect_url = FULL_BASE_URL."/404mike.html";
//         	$this->redirect($redirect_url);
//         }
//         if(isset($_GET['fl'])) {
//         	var_dump(FULL_BASE_URL,12,$this->server_info);
//         	exit;
//         }
        if(!$this->server_info){
            $this->info(FULL_BASE_URL.' can not access, please check the status of the site');
            $redirect_url = FULL_BASE_URL."/404.html";
            $this->redirect($redirect_url);
        }


        $this->directory_name = $this->server_info['directory_name'];
        $this->site_id = $this->server_info['id'];
        $this->set("site_id", $this->site_id);
        $GLOBALS['site_id']=$this->site_id;
        if ($GLOBALS['site_id'] == 34) {
            $GLOBALS['site_id'] = 95;
        }
         //模板化网站
        if($this->server_info['is_template_site'] == 1){
            $this->directory_name = 'template/1';
            //查询模板id
            $conditions['conditions']['site_id'] = $this->site_id;
            $conditions['conditions']['status'] = 1;
            $templateConfigArr = $this->PcTemplateConfig->find("first",  $conditions);
            if(empty($templateConfigArr)){
                $conditions2['conditions']['site_id'] = $this->site_id;
                $conditions2['conditions']['status'] = 2;
                $templateConfigArr2 = $this->PcTemplateConfig->find("first",  $conditions2);
                $this->directory_name = 'template/'.$templateConfigArr2['PcTemplateConfig']['template_center_id'];
            }else{
                $this->directory_name = 'template/'.$templateConfigArr['PcTemplateConfig']['template_center_id'];
            }
        }
        $this->set('directory_name', $this->directory_name);
        $this->set('name', $this->server_info['name']);
        $this->set('title', $this->server_info['title']);
        $this->set('keywords', $this->server_info['keywords']);



        $this->set('description', $this->server_info['description']);
        //新增网站描述，关键字，名称
        $this->set('website_name', $this->server_info['website_name']);
        $this->set('website_seo', $this->server_info['website_seo']);
        $this->set('website_desc', $this->server_info['website_desc']);
        $this->set("full_base_url","//game-resource.uu.cc/".$this->directory_name);//FULL_BASE_URL."/".$this->directory_name
     //   $this->initData($this->site_id);
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['server_info'] = $this->server_info;

        $key='stat:'.$this->site_id.':total';
        $ret=$this->Redis->increase($key,1);

        $key='stat:'.$this->site_id.':'.date('Y-m-d');
        $ret=$this->Redis->increase($key,1);
        if($ret == 1)
            $this->Redis->getInstance()->setTimeout($key,31*24*3600);

        $this->Stat->save(array('site_id'=>$this->site_id,'label'=>'visit','source'=>$_SERVER['HTTP_REFERER'],'destination'=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],'agent'=>$_SERVER['HTTP_USER_AGENT'].' SID='.session_id()));
    }

    /**
     * 站点id 写死了  执行模板数据 模板中就可以直接用数据了
     * @param $site_id
     *
     */
    function initData($site_id){
        switch($site_id){
            case 10:
                $action=$this->request->params["action"];
                App::uses('TemRunHelper', "View/Helper");
                App::uses("View","View");
                $view=new View();
                $TemRunHelper=new TemRunHelper($view);
                $name=$action."InitData";
                $TemRunHelper->$name();
                break;
        }
    }

    function requestData($api,$method='get',$data){
        App::uses('HttpSocket', 'Network/Http');
        $HttpSocket = new HttpSocket();
        if($method == 'get'){
            $result=$HttpSocket->get($api);
        }elseif($method == 'fget'){
            $result=file_get_contents($api);
        }else{
            try{
               $result = $HttpSocket->post($api,$data);
            }catch(Exception $e){
                //var_dump($e->getMessage());
            }
        }
        return $result;
    }

    function export($data)
    {
        header("content-type:text/html");
        die(json_encode($data));
    }


    /**
     * 获取access_token
     * @return {string} access_token
     */


    public function get_access_token($appid,$app_secret)
    {


            if(!$this->Redis)
            {
                if(empty($this->access_token))
                {
                    $cgi = sprintf("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s", $appid, $app_secret);
                    $rs = $this->api_request($cgi);
                    $data = json_decode($rs, true);
                    $this->access_token = $data['access_token'];
                }
            }
            else
            {
                if (is_null($this->access_token)) {
                    if(($this->access_token=$this->Redis->get('access_token_'.$appid)) == false)
                    {
                        $cgi = sprintf("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s", $appid, $app_secret);
                        $rs = $this->api_request($cgi);
                        $data = json_decode($rs, true);
                        $this->access_token = $data['access_token'];
                        $this->Redis->set('access_token_'.$app_id,$this->access_token,7000);
                    }
                }
            }


        return $this->access_token;
    }

    /*
    public function get_access_token($appid,$app_secret)
    {
        $this->access_token = $_COOKIE["access_token_".$appid];
        if ($this->access_token == false) {
            $this->access_token = null;
        }
        if (is_null($this->access_token)) {
            $cgi = sprintf("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s", $appid, $app_secret);
            $rs = $this->api_request($cgi);
            $data = json_decode($rs, true);
            $this->info('cgi='.$cgi.',get_access_token='.print_r($data,true));
            $this->access_token = $data['access_token'];
            setcookie("access_token_".$appid, $this->access_token, time()+7000);
        }
        return $this->access_token;
    }
    */
    /**
     * 获取jsapi_ticket
     * @return mixed
     */
    public function get_jsapi_ticket($appid,$app_secret)
    {
        $this->jsapi_ticket = $_COOKIE["jsapi_ticket_".$appid];
        if ($this->jsapi_ticket == false) {
            $this->jsapi_ticket = null;
        }
        if (is_null($this->jsapi_ticket)) {
            $cgi = sprintf("https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=jsapi", $this->get_access_token($appid,$app_secret));
            $rs = $this->api_request($cgi);
            $data = json_decode($rs, true);
            //$this->info('get_jsapi_ticket='.print_r($data,true));
            $this->jsapi_ticket = $data['ticket'];
            setcookie("jsapi_ticket_".$appid, $this->jsapi_ticket, time()+7000);
        }
        return $this->jsapi_ticket;
    }

    protected  function api_request($url, $method = 'GET', $post_data = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        }
        $output = curl_exec($ch);
        //@todo 增加错误处理
        curl_close($ch);
        return $output;
    }

    /**
     * 生成share所需的签名
     * @param string $noncestr
     * @param string $url
     * @return string
     */
    public function get_signature($noncestr,$timestamp,$appid,$app_secret,$url)
    {
        $jsapi_ticket = $this->get_jsapi_ticket($appid,$app_secret);
        $url = $url;//当前url
        $str = "jsapi_ticket={$jsapi_ticket}&noncestr={$noncestr}&timestamp={$timestamp}&url={$url}";
        return sha1($str);
    }

    /**
     * 获取appinfo信息
     * @param string $name 公众号原始ID（公众号设置里面）
     */
    public function get_app_info($name)
    {
        $appinfo = array(
                'gh_dd1784538b1e'=>array('appid'=>'wx0ee33df3355115ac','appsecret'=>'443ac72faa50e708c258a07588eeabe8'),//乐逗游戏公众号
                'gh_41bfdc2f3a2f'=>array('appid'=>'wx9c780a1a1866007a','appsecret'=>'a525cae2d36495780f0b20f15ef3c8a5'),//机战王公众号
                'gh_9cb8986990a8'=>array('appid'=>'wx4a2aae42860a4add','appsecret'=>'661a857e1e58918ba7d81256bd7db970'),//乐逗游戏活动公众号
                'gh_84f0446e160a'=>array('appid'=>'wx3b298515fd925e06','appsecret'=>'b5033db19d1200d9a87c80865b27ce53'),//赛尔号
                'gh_f13fb498526b'=>array('appid'=>'wxa5e35dbb81bb0cc1','appsecret'=>'7f396af54161006ba7c0107ad9a97600'),
                'gh_da6392ac9984'=>array('appid'=>'wx11e72d5836f33f83','appsecret'=>'f0e391455544907f5c1e3db7994a74eb'),
                );
        return $appinfo[$name]; //f37bca57aca4679a0100750ea85572aa
    }

    /**
     * 生成随机字符串
     * @param unknown_type $length
     * @return Ambigous <NULL, string>
     */
    public function getRandChar($length)
    {
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol)-1;
        for($i=0;$i<$length;$i++){
            $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;

    }

    /**
     * 获取完成的url，去掉#后面的
     */
    public function get_complete_rul()
    {
        $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url_list = explode('#', $url);
        return $url_list[0];
    }

        function getClientIp($type = 0) {
        $type       =  $type ? 1 : 0;
        static $ip  =   NULL;
        if ($ip !== NULL) return $ip[$type];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $pos    =   array_search('unknown',$arr);
            if(false !== $pos) unset($arr[$pos]);
            $ip     =   trim($arr[0]);
        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ip     =   $_SERVER['REMOTE_ADDR'];
        }
        // IP地址合法验证
        $long = sprintf("%u",ip2long($ip));
        $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
        return $ip[$type];
    }

    public function info($msg)
    {
        $logkey="debug_log";

        $this->Redis->lpush($logkey,date("Y-m-d H:i:s # ").$msg);
        $this->Redis->getInstance()->lTrim($logkey,0,500);
    }

    protected function do_stat($key)
    {
        $pre_redis_key='stat:'.$key.':';
        $status=$this->Redis->get($pre_redis_key.'status');
        if($status != 1)
            return;

        $k=$pre_redis_key.'total';
        $ret=$this->Redis->increase($k,1);

        $k=$pre_redis_key.date('Y-m-d');
        $ret=$this->Redis->increase($k,1);
        if($ret == 1)
            $this->Redis->getInstance()->setTimeout($k,31*24*3600);
    }

    /**
     * 判断客户端类型
     * @param $userAgent
     *
     * @return string
     */
    protected function getDeviceType($userAgent){
        $userAgent = strtolower($userAgent);
        // 判断是否是微信浏览器
        if (strpos($userAgent, 'micromessenger') !== false) {
            return self::DEVICE_TYPE_WX;
        } elseif ( $this -> RequestHandler -> isMobile() ){
            return self::DEVICE_TYPE_MOBILE;
        } else {
            return self::DEVICE_TYPE_PC;
        }
    }


    /**
     * 判断客户端操作系统类型
     * ipod ipad 当 ios 处理
     * @param $userAgent
     *
     * @return string
     */
    protected function getDeviceOs($userAgent){
        $userAgent = strtolower($userAgent);

        if ( strpos( $userAgent, 'windows nt')) {
            $platform = self::DEVICE_OS_WINDOWS;
        } elseif(strpos($userAgent, 'macintosh')) {
            $platform = self::DEVICE_OS_MAC;
        } elseif( strpos( $userAgent, 'ipod' ) ){
            $platform = self::DEVICE_OS_IOS;
        } elseif(strpos($userAgent, 'ipad')) {
            $platform =  self::DEVICE_OS_IOS;
        } elseif( strpos( $userAgent, 'iphone' ) ){
            $platform =  self::DEVICE_OS_IOS;
        } elseif (strpos($userAgent, 'android')) {
            $platform =  self::DEVICE_OS_ANDIRID;
        } elseif(strpos($userAgent, 'linux')) {
            $platform =  self::DEVICE_OS_LINUX;
        } else {
            $platform = self::DEVICE_OS_UNKONW;
        }

        return $platform;
    }

    /**
     * 上报彩虹数据中心
     * 此方法只把数据存入 redis 队列，由脚本上报信息
     * @param array $data
     * 2017-11-19 第一版接口
     *  1	gsd_gamewebsite	string	固定值，用于区分日志来源
        2	game_id	string	官网所属游戏标示 （使用网站域名做标识，字段 domain）
        3	event_time	datetime	事件触发时间，如 2017-11-09 10:00:00
        4	event_type	int	事件触发类型(填数字编号 1、访问；2、下载点击；3、预约点击；4、扫码下载)
        5	userid	string	用户唯一标识（用以统计用户数）
        6	device_type	string	设备类型
        7	device_os	string	设备操作系统类型
        8	request_ip	string	用户访问的IP
     * array(
     *      domain     => '', // 域名
            eventTime  => '', // 事件事件
            eventType  => '', // 事件类型
            userId     => '', // 用户标识
            deviceType => '', // 设备类型
            deviceOs   => '', // 设备操作系统
            clientIp   => '', // 客户端ip
     * )
     * 2017-11-27 第二版接口
     *  1	gsd_gamewebsite_m	string	固定值，用于区分日志来源
        2	game_id	string	官网所属游戏标示 （使用网站域名做标识，字段 domain）
        3	event_time	datetime	事件触发时间，如 2017-11-09 10:00:00
        4	event_type	int	事件触发类型(填数字编号 1、访问；2、下载点击；3、预约点击；4、扫码下载)
        5	event_id	string	自定义事件Id
        6	event_param1	string	事件参数1
        7	event_param2	string	事件参数2
        8	extstr1	string	扩展参数
        9	userid	string	用户唯一标识（用以统计用户数）
        10	device_type	string	设备类型
        11	device_os	string	设备操作系统类型
        12	request_ip	string	用户访问的IP
     *
     * 2017-11-28 第三版接口
     *  1	gsd_gamewebsite_m	string	固定值，用于区分日志来源
        2	game_id	string	官网所属游戏标示 （使用网站域名做标识，字段 domain）
        3	event_time	datetime	事件触发时间，如 2017-11-09 10:00:00
        4	page_id	string	页面Id
        5	event_id	string	自定义事件Id
        6	event_param1	string	事件参数1
        7	event_param2	string	事件参数2
        8	extstr1	string	扩展参数
        9	url	string	页面Url
        10	userid	string	用户唯一标识（用以统计用户数）
        11	device_type	string	设备类型
        12	device_os	string	设备操作系统类型
        13	request_ip	string	用户访问
     * @return bool
     */
    protected function postEdata($data){
        $domain = isset($data['domain']) ? $data['domain'] : 0;
        $eventTime = isset($data['eventTime']) ? $data['eventTime'] : 0;
        $pageId = isset($data['page_id']) ? $data['page_id'] : '';
        $eventId = isset($data['event_id']) ? $data['event_id'] : '';
        $eventParam1 = isset($data['event_param1']) ? $data['event_param1'] : '';
        $eventParam2 = isset($data['event_param2']) ? $data['event_param2'] : '';
        $extstr1 = isset($data['extstr1']) ? $data['extstr1'] : '';
        $url = isset($data['url']) ? $data['url'] : '';
        $userId = isset($data['userId']) ? $data['userId'] : 0;
        $deviceType = isset($data['deviceType']) ? $data['deviceType'] : 0;
        $deviceOs = isset($data['deviceOs']) ? $data['deviceOs'] : 0;
        $clientIp = isset($data['clientIp']) ? $data['clientIp'] : 0;

        $postData = "gsd_gamewebsite_m|{$domain}|{$eventTime}|{$pageId}|{$eventId}|{$eventParam1}|{$eventParam2}|{$extstr1}|{$url}|{$userId}|{$deviceType}|{$deviceOs}|{$clientIp}";

        // 存入 redis
        $this->Redis->lpush(self::REDIS_KEY_DATA_POST, $postData);
        if (Configure::read('edata_post_debug')){
            App::uses('FileLog', 'Log/Engine');
            $path = LOGS . 'post_data' . DS;
            $message = "\nurl: {$_SERVER['SERVER_NAME']}{$_SERVER["REQUEST_URI"]}\nuser agent: {$_SERVER['HTTP_USER_AGENT']}\npost data: {$postData}";
            $log = new FileLog(array(
                'path' => $path,
            ));
            $log->write('debug', $message);
        }
        return TRUE;
    }

    protected function isHttps(){
        return ($_SERVER['SERVER_PORT'] == 443 || $_SERVER['HTTPS'] && strtolower($_SERVER['HTTPS']) != 'off') ? true : false;
    }
}


?>