<?php
/*
 * 这里主要对网站中公共的变量进行初始化
*/
$webHelper = $this->Hoda; // 不同网站的helper由一个变量控制
$webHelper->init(array('site_id' => $site_id, 'limit' => 15)); // 设置网站id

$allCategorires = $webHelper->getNewsCategory(); // 所有新闻分类；此网站分类显示没有需要特殊显示的分类，所以可以直接从数据库中读取
/* 新闻列表 */
$categories = $allCategorires; // 需要显示的新闻分类