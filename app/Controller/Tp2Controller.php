<?php
App::uses('AppController', 'Controller');

App::import('Vendor', 'PHPExcel');

class Tp2Controller extends AppController
{
	
	public $uses = array("CollectPhone","Website");
	
	function beforeFilter()
	{
		parent::beforeFilter();
		$this->layout = 'admin_default';
		$title_for_layout = '积分排行榜管理';
		$this->set('title_for_layout', $title_for_layout);
	}
	
	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index()
	{
		$the_actname=$_GET['actname'];
		
		$actnames=$this->Website->query("select distinct act_name from user_score");
		$this->set("actnames", $actnames);
		
		if(is_array($this->site_list))
		{
			$data=array();
		}
		else
		{
			$where=" where site_id=".$this->site_list;
			if(strlen($the_actname) > 0)
				$where.=" and act_name='".$the_actname."' ";
			$data=$this->Website->query("select rank,nickname,score,location,act_name from user_score $where order by id asc");
		}
		$this->set("data", $data);
		$this->set("actname_select", $the_actname);
		

	}
	
	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_import()
	{
		$this->layout="";
		$this->autoRender=false;
		
		
		if ($_FILES["file"]["error"] > 0)
		{
			$this->redirect_js($_FILES["file"]["error"], "/admin/Tp2/index");
		}
		/*
		else
		{
		echo “文件名: ” . $_FILES["file"]["name"] . “<br />”;
		echo “类型: ” . $_FILES["file"]["type"] . “<br />”;
		echo “大小: ” . ($_FILES["file"]["size"] / 1024) . ” Kb<br />”;
			}*/
		//if (file_exists("upload/" . $_FILES["file"]["name"]))
		//{
		//		echo $_FILES["file"]["name"] . ” 文件已经存在. “;
		//}
		$this->CollectPhone->query("delete from user_score where site_id=".$this->site_list);
		$handler=fopen($_FILES["file"]["tmp_name"],"r");
		while(($line=fgets($handler)))
		{
			$parts=explode(',',$line);
			if(count($parts) == 5)
			{
				$this->CollectPhone->query("insert into user_score values(NULL,".$this->site_list.",'".$parts[0]."','".$parts[1]."','".$parts[2]."','".trim($parts[3])."','".trim($parts[4])."')");
			}
			//echo $line."<br/>";
		}
		fclose($handler);
		$this->redirect_js('导入成功', "/admin/Tp2/index");
	}
	
	
}
