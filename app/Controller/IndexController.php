<?php
App::uses('Controller', 'Controller');

class IndexController extends Controller{

    public $components = array("Redis");
    public $uses = array('Website','WebsiteConfig');
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
        $this->server_info = $this->Website->get_website_info_by_name(str_replace('https','http',FULL_BASE_URL));
        if(!$this->server_info){
            $redirect_url = FULL_BASE_URL."/404.html";
            $this->redirect($redirect_url);
        }
        $this->directory_name = $this->server_info['directory_name'];
        $this->site_id = $this->server_info['id'];
    }

    protected function echoJson($msg, $code = 0, $data = array()){
        $return_data['msg']         = $msg;
        $return_data['error_code']  = $code;
        $return_data['data']        = $data;
      

        $ret = json_encode($return_data);
        echo $ret;
        exit();
    }

    public function index(){
        $conditions2['conditions'] = array('site_id' => $this->site_id, 'type'=>3);
        $result2 = $this->WebsiteConfig->find('first', $conditions2);
        if(!empty($result2) && $this->isWap()){
            $this->redirect('/wap');
        }
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $conditions['conditions'] = array('site_id' => $this->site_id,'identifer'=>'index');
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function news_detail(){
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $conditions['conditions'] = array('site_id' => $this->site_id,'identifer'=>'news_detail');
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function download(){
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $conditions['conditions'] = array('id' => substr(base64_decode($this->params['id']),3));
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function preview(){
        $file_name = '/themes/'.$this->directory_name.'.pre/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $urlParams = explode('/', $this->params['url']);
        $conditions['conditions'] = array('site_id' => $this->site_id,'identifer'=>$urlParams[2]);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json_pre'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function routes(){
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $urlParams = explode('/', $this->params['url']);
        $conditions['conditions'] = array('site_id' => $this->site_id,'identifer'=>$urlParams[1]);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json_pre'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function wap_index(){
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $conditions['conditions'] = array('site_id' => $this->site_id, 'type'=>3);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function wap_preview(){
        $file_name = '/themes/'.$this->directory_name.'.pre/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $urlParams = explode('/', $this->params['url']);
        $conditions['conditions'] = array('site_id' => $this->site_id,'identifer'=>$urlParams[3], 'type'=>3);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json_pre'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    public function wap_routes(){
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $urlParams = explode('/', $this->params['url']);
        $conditions['conditions'] = array('site_id' => $this->site_id,'identifer'=>$urlParams[2], 'type'=>3);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json_pre'],1));
        $this->set('type', $result['WebsiteConfig']['type']);
        $this->set('website_config', $result['WebsiteConfig']);
        $this->render($file_name);
    }

    // private function isWap(){
    //     if(stripos($_SERVER['HTTP_USER_AGENT'],"android")!=flase||stripos($_SERVER['HTTP_USER_AGENT'],"ios")!=flase||stripos($_SERVER['HTTP_USER_AGENT'],"wp")!=flase){
    //         return true;
    //     }
    //     return false;
    // }

    private function isWap() {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备

        if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {

            return true;

        }
        //此条摘自TPM智能切换模板引擎，适合TPM开发

        if (isset($_SERVER['HTTP_CLIENT']) && 'PhoneClient' == $_SERVER['HTTP_CLIENT']) {

            return true;

        }

        //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息

        if (isset($_SERVER['HTTP_VIA']))

        //找不到为flase,否则为true

        {

            return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;

        }

        //判断手机发送的客户端标志,兼容性有待提高

        if (isset($_SERVER['HTTP_USER_AGENT'])) {

            $clientkeywords = array(

                'nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile',

            );

            //从HTTP_USER_AGENT中查找手机浏览器的关键字

            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {

                return true;

            }

        }

        //协议法，因为有可能不准确，放到最后判断

        if (isset($_SERVER['HTTP_ACCEPT'])) {

            // 如果只支持wml并且不支持html那一定是移动设备

            // 如果支持wml和html但是wml在html之前则是移动设备

            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {

                return true;

            }

        }
        return false;
    } 

}   

