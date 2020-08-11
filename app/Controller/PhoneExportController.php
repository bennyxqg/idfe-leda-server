<?php
App::uses('AppController', 'Controller');

App::import('Vendor', 'PHPExcel');

class PhoneExportController extends AppController
{
	
	public $uses = array("CollectPhone","Website");
	
	function beforeFilter()
	{
		parent::beforeFilter();
		$this->layout = 'admin_default';
		$title_for_layout = '预约码导出';
		$this->set('title_for_layout', $title_for_layout);
	}
	
	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index()
	{
		$site_id=intval($_GET['site_id']);
		if($site_id > 0)
			$this->site_list=$site_id;

		$rows=$this->Website->find('all',array('fields'=>array('id','name')));
		$len=count($rows);
		$all_site_map=array();
		for($i=0;$i<$len;$i++)
		{
			$all_site_map[$rows[$i]['Website']['id']]=$rows[$i]['Website']['name'];	
		}

		$conditions = array();
		if (!is_array($this->site_list)) {
			$conditions["CollectPhone"]["conditions"]["collect_name"] = $this->site_list;
		}
		$this->Paginator->settings = $conditions;
		$result = $this->Paginator->paginate('CollectPhone');
		$result = Set::classicExtract($result, "{n}.CollectPhone");
		$this->set("result", $result);
		$this->set("all_site_map",$all_site_map);
	}
	
	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_export()
	{
		$site_id=intval($_GET['site_id']);
		if($site_id > 0)
			$this->site_list=$site_id;
		
		if (!is_array($this->site_list)) {
			$rows=$this->CollectPhone->find('all',array('conditions'=>array('collect_name'=>$this->site_list)));
			$tmprow=$this->Website->find('first',array('fields'=>array('name'),'conditions'=>array('id'=>$this->site_list)));
			$title=$tmprow['Website']['name'].'预约手机';
		}
		else {
			$title="所有预约手机";
			$rows=$this->CollectPhone->find('all');
		}
		$len=count($rows);
		
		// 创建一个处理对象实例
		$excelWrite = new PHPExcel();
		
		$excelWrite->setActiveSheetIndex(0)
		->setCellValue('A1','id')
		->setCellValue('B1','phone')
		->setCellValue('C1','time')
		->setCellValue('D1','type')
		->setCellValue('E1','collect_name');
		
		for($i=0;$i<$len;$i++)
		{
			$excelWrite->setActiveSheetIndex(0)
			->setCellValue('A'.(2+$i),$rows[$i]['CollectPhone']['id'])
			->setCellValue('B'.(2+$i),$rows[$i]['CollectPhone']['phone'])
			->setCellValue('C'.(2+$i),$rows[$i]['CollectPhone']['update_time'])
			->setCellValue('D'.(2+$i),$rows[$i]['CollectPhone']['type'])
			->setCellValue('E'.(2+$i),$rows[$i]['CollectPhone']['collect_name']);
		}

		$excelWrite->getActiveSheet()->setTitle($title);
		header('Content-Type: application/vnd.ms-excel;charset=utf-8');
		
		
		header('Content-Disposition: attachment;filename="'.$title.'.xls"');
		header('Cache-Control: max-age=0');
		$excelWrite = PHPExcel_IOFactory::createWriter($excelWrite, 'Excel5');
		$excelWrite->save('php://output');
		
		$this->redirect_js("导出成功", "/admin/PhoneExport/index");

	}
	
	
}
