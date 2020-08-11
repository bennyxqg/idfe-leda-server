<?php
/*
 * 这里主要对网站中公共的变量进行初始化
*/
$webHelper = $this->Bl; // 不同网站的helper由一个变量控制
$webHelper->init(array('site_id' => $site_id)); // 设置网站id
$noticeCategoryId =  $webHelper->specialCategoryId; // 特殊显示的分类ID
$allCategories = $webHelper->getNewsCategory(); // 所有新闻分类
$categories = $allCategories;
unset($categories[$webHelper->specialCategoryId]);