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
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $conditions['conditions'] = array('site_id' => $this->site_id);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json'],1));
        $this->render($file_name);
    }

    public function index_pre(){
        $file_name = '/themes/'.$this->directory_name.'/index';
        $this->layout = false;
        $this->set('site_id',$this->site_id);
        $conditions['conditions'] = array('site_id' => $this->site_id);
        $result = $this->WebsiteConfig->find('first', $conditions);
        $this->set('config_json', json_decode($result['WebsiteConfig']['config_json_pre'],1));
        $this->render($file_name);
    }
}

