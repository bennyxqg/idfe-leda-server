<?php 
$topData=$this->Ld->indexInitData();
// var_dump($topData);
$top_ma = $topData['top_ma'];
$footer_ma = $topData['footer_ma'];
$total = $topData['total'];
$downleft_qrcode = $topData['downleft_qrcode'];
/* if($topData['site_block']){
	foreach ($topData['site_block'] as $k=>$v){
		if($v['Abbr'] == 'index_1'){
			$top_ma = $v;
		}
		if($v['Abbr'] == 'index_2'){
			$footer_ma = $v;
		}
	}
} */
/* $site_block = $topData['site_block'];
$topData['consulting'] = isset($topData['consulting']) ? $topData['consulting'] : array();
$topData['gonggao'] = isset($topData['gonggao']) ? $topData['gonggao'] : array();
$topData['huodong'] = isset($topData['huodong']) ? $topData['huodong'] : array();
// var_dump($topData['zong_list']);
$news_list = array_merge($topData['consulting'],$topData['gonggao'],$topData['huodong']);
$_news = $this->Cpb->getMenuNews(); */
?>