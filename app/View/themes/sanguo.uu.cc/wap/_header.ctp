<?php
/*
 * 这里主要对网站中公共的变量进行初始化
*/
$webHelper = $this->Mf; // 不同网站的helper由一个变量控制
$webHelper->init(array('site_id' => $site_id, 'limit' => 5)); // 设置网站id和分页数
$allCategorires = $webHelper->getNewsCategory(); // 所有新闻分类；此网站分类显示没有需要特殊显示的分类，所以可以直接从数据库中读取
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta content="<?= $keywords; ?>" name="keywords" />
    <meta content="<?= $description; ?>" name="description" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=no" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/layout.css" rel="stylesheet" type="text/css" />
</head>