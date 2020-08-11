<?php
/*
 * 这里主要对网站中公共的变量进行初始化
*/
$webHelper = $this->IronForce; // 不同网站的helper由一个变量控制
$webHelper->init(array('site_id' => $site_id, 'limit' => 6)); // 设置网站id和分页数
$allCategorires = $webHelper->getNewsCategory(); // 所有新闻分类；此网站分类显示没有需要特殊显示的分类，所以可以直接从数据库中读取
$hd_id = '170';
$n_id= '168';
$gl_id = '172';