<!DOCTYPE html>
<html>
<head>
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<link href="//jzw.uu.cc/jzw.uu.cc/wap/css/mobile.css" rel="stylesheet">

<script type="text/javascript" src="//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c"></script>

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>
<div class="container">
<header id="show_h">新闻详情</header>
<article>
<h1><?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('title') /*BLOCK*/ ?></h1>
<span class="timer">时间：<?php /*BLOCK*/ echo date('Y-m-d H:i:s',GET_CURRENT_NEWS_INFO('created')); /*BLOCK*/ ?></span>
<p>
<?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('content') /*BLOCK*/ ?>
</p>

</article>
<div class="page">
<?php /*BLOCK*/
$prev=GET_PREV_NEWS_URL();
$next=GET_NEXT_NEWS_URL();
if(strcmp($prev,'#') != 0)
	echo '<a href="'.$prev.'" class="pre"><上一页</a>';
if(strcmp($next,'#') != 0)
	echo '<a href="'.$next.'" class="next">下一页></a>';
/*BLOCK*/ ?>
</div>
</div>
</body>