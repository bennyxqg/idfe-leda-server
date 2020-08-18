<?php
App::uses('Controller', 'Controller');

class IndexController extends Controller{

    public $components = array("Redis");
    public $uses = array('WebsiteConfig');
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
        $file_name = '/template/index';
        $this->render($file_name);

    }
}

