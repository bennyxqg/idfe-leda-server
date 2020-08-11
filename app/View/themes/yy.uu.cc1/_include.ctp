<?php 
$topData=$this->YY->indexInitData();
// var_dump($topData);
$yyjj = array();
$yyxz = array();
if($topData['site_block']){
	foreach ($topData['site_block'] as $k=>$v){
		if($v['Abbr'] == 'index_5'){
			$yyjj = $v;
		}
		if($v['Abbr'] == 'index_6'){
			$yyxz = $v;
		}
	}
}
/* $site_block = $topData['site_block'];
$topData['consulting'] = isset($topData['consulting']) ? $topData['consulting'] : array();
$topData['gonggao'] = isset($topData['gonggao']) ? $topData['gonggao'] : array();
$topData['huodong'] = isset($topData['huodong']) ? $topData['huodong'] : array();
// var_dump($topData['zong_list']);
$news_list = array_merge($topData['consulting'],$topData['gonggao'],$topData['huodong']);
$_news = $this->Cpb->getMenuNews(); */
?>