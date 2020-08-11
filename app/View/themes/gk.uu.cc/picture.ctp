<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/lightbox.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<?php require_once '_top.ctp';?>

<div class="page">
    <div class="wrap">
        <div class="wdBanners">
            <div class="bannerLeft">
                <?php SHOW_NEWS('<a href="@@URL@@?type=4"><img src="@@BIG_IMAGE@@"><div class="tit"><!--<em>动画</em>--><p>@@TITLE@@</p></div></a>','Y/m/d','英雄故事',1,0,array('LimitFrom'=>0));?>
            </div>
            <div class="bannerRight">
                <?php SHOW_NEWS('<a href="@@URL@@"><img src="@@BIG_IMAGE@@"><p>@@TITLE@@</p></a>','Y/m/d','英雄故事',2,0,array('LimitFrom'=>1));?>
            </div>
        </div>

        <ul class="filter wdFilter">
            <li class="active"><a href="">显示全部</a></li>
            <!--
            <li><a href="">短篇小说</a></li>
            <li><a href="">动画CG</a></li>
            <li><a href="">漫画</a></li>
            <li><a href="">声音</a></li>
            -->
        </ul>
        <ul class="wdList clearfix">
            <?php SHOW_NEWS('<li><a href="@@URL@@"><img src="@@BIG_IMAGE@@"><div class="tit"><!--<em>动画</em>--><p>@@TITLE@@</p></div></a></li>','Y/m/d','英雄故事',100,0,array('LimitFrom'=>3));?>
        </ul>
    </div>
</div>
<?php require_once '_footer2.ctp';?>
</body>
</html>
