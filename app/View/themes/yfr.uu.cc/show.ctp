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
<link href="<?php FILE_PATH() ?>/css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>
<?php require_once '_top.ctp';?>
<div class="pageBanner">

</div>
<div class="nc_head">
    <div class="title"><img src="<?php FILE_PATH() ?>/images/bg11_title.png" alt=""></div>
    <div class="text">
        <p><span>您的位置：</span><a href="/">官网首页</a> > 新闻资讯</p>
        <div class="list">
            <a href="//jy.uu.cc/news/2.html">新闻</a>
            <a href="//jy.uu.cc/news/3.html">活动</a>
            <a href="/vediocenter/4.html">公告</a>
            <!--<a href="/vediocenter/1.html">影音</a>-->
        </div>
    </div>
    <i class="left_btn"></i>
</div>
<div class="pageMain clearfix news">
    <div class="subHead">
        <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
        
    </div>
    <div class="text_box">
          <?php SHOW_CURRENT_NEWS_INFO('content') ?>
    </div>
</div>
<?php require_once 'footer.ctp';?>
<script src="<?php FILE_PATH() ?>/js/jquery-1.9.1.js" type="text/jscript"></script>
<script type="text/javascript">

</script>
</body>
</html>
