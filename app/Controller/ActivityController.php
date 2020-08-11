<?php
APP::uses('FrontController', 'Controller');

class ActivityController extends FrontController
{
	var $name = 'Activity';
	//每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
	var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
	public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint','Stat');
	public $is_mobile;
	
	public $prefix='/themes/activity/';
	
	function beforeFilter()
	{
		parent::beforeFilter();
		
		
		$this->prefix=$this->prefix.$this->directory_name;
		
		//手机页面路由到相应的wap 模板
		if ($this -> RequestHandler -> isMobile()) {
			$this->is_mobile=true;
			$this->prefix=$this->prefix.DS.'wap';
		}else{
			$this->is_mobile=false;
		}

		$this->layout = '';
	}
	
	function one_level()
	{
		$viewfile=$this->prefix.DS.$this->request->params['dir1'].DS.'index';
		$this->render($viewfile);
	}
	
	function two_level()
	{
		$viewfile=$this->prefix.DS.$this->request->params['dir1'].DS.$this->request->params['dir2'].DS.'index';
		$this->render($viewfile);
	}
	
	function three_level()
	{
		$viewfile=$this->prefix.DS.$this->request->params['dir1'].DS.$this->request->params['dir2'].DS.$this->request->params['dir3'].DS.'index';
		$this->render($viewfile);
	}
	
	function four_level()
	{
		$viewfile=$this->prefix.DS.$this->request->params['dir1'].DS.$this->request->params['dir2'].DS.$this->request->params['dir3'].DS.$this->request->params['dir4'].DS.'index';
		$this->render($viewfile);
	}
}
