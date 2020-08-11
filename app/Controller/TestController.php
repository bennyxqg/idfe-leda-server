<?php
APP::uses('FrontController', 'Controller');
APP::uses('OnlineController', 'Controller');

class TestController extends OnlineController
{
	var $name = 'Test';
	public $components = array('Paginator',"RequestHandler","Image","Session","Redis");
	//public $components = array('Redis');
    //每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
    //var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
    //public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint');

    /**
     * 发送短信内容
     */
    public function test()
    {
    	//$this->Redis->set("name","test");
    	//print_r($this->Redis->keys('*'));
    	//print_r($this->Redis->get("name"));
    	//$res=$this->CodeDetail->query("select count(*) as c from code_detail where site_id=46 and status=0");
    	//echo $res[0][0]['c'];
    	
    	//$conditions=array("conditions"=>array("phone"=>'18588455800',"site_id"=>'46',"status"=>0));
    	//$count=$this->CodeCheck->find("count",$conditions);
    	//print_r($count);
    	//if($count > 5){
    	//	$this->json_format(array("ret"=>9));
    	//}
    	
    	exit();
    }

   
   
    
}
