<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
$this->Website->init();
?>
<title><?php BLOCK('web_title') ?></title>
<meta name="description" content="<?php BLOCK('web_description') ?>">
<meta name="keywords" content="<?php BLOCK('web_keywords') ?>">
<link href="<?php BASE_URL() ?>css/mobile.css" rel="stylesheet">
</head>
<body>
<div class="container">
<header id="show_h">
  <a href="<?php CATEGORY_URL(GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id'))) ?>" class="pre_"><img src="<?php BASE_URL() ?>images/pre.png" width="41" height="71" /></a>
  <a href="//tk.uu.cc/download" class="down_load2">游戏下载</a>
</header>
<article>
<h1><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
<span class="timer">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></span>
<p><?php SHOW_CURRENT_NEWS_INFO('content') ?></p>

</article>
<div class="page">
<?php
$prev=GET_PREV_NEWS_URL();
$next=GET_NEXT_NEWS_URL();
?>
<a href="<?php echo $prev ?>" class="pre"><上一页</a>
<a href="<?php echo $next ?>" class="next">下一页></a>
</div>
</div>
</body>