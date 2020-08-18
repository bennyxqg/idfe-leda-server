<?php
App::uses('Controller', 'Controller');

class ApiController extends Controller{

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

    public function websiteConfigSave(){
        try{
            $config_json=isset($this->params["config_json"])?$this->params["config_json"]:"";
            if(empty($config_json)){
                $this->echoJson('config_json参数不能为空', -1);
            }
            //检查是否有配置
            $conditions['conditions'] = array('site_id' => $this->site_id);
            $result = $this->WebsiteConfig->find('first', $conditions);
            $data = array('config_json'=>$config_json);
            if(!empty($result)){
                $this->WebsiteConfig->updateAll($data, array('id' => $result['WebsiteConfig']['id']));
            }else{
                $data['site_id'] = $this->site_id;
                $this->WebsiteConfig->save($data);
            }
            $this->echoJson('success', 0);
        }catch(Exception $e){
            $this->echoJson('server error',-1000);
        }   
    }
    
}

