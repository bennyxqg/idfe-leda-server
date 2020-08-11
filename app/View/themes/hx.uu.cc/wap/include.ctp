<?php
$topData=$this->Hx->indexInitData();
// var_dump($topData);exit;
$consulting = $topData['consulting'];//公告
$news = $topData['news'];//新闻
$activity = $topData['activity'];//活动
$total = $topData['total'];//所有
$site_block = $topData['site_block'];//区块
$ios_list = array();//ios下载
$android_list = array();//安卓下载
$hezuo_list = array();//合作媒体
$xlwo_list = array();//新浪微博
$txwb_list = array();//腾讯微博
$yxlt_list = array();//游戏论坛
if(!empty($site_block)){
	foreach ($site_block as $key=>$v){
		if($v['Abbr'] == "ios_download"){
			$ios_list = $v;
			continue;
		}
		if($v['Abbr'] == "download"){
			$android_list = $v;
			continue;
		}
		if($v['Abbr'] == "hx_xlwo"){
			$xlwo_list = $v;
			continue;
		}
		if($v['Abbr'] == "hx_txwb"){
			$txwb_list = $v;
			continue;
		}
		if($v['Abbr'] == "hx_yxlt"){
			$yxlt_list = $v;
			continue;
		}
	}
}
$HxzxUrl = "//hx.uu.cc/uploads/";
// var_dump($ios_list);exit;