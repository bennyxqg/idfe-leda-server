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
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div id="content">
    <div class="top">
        <img class="game-logo" src="<?php BASE_URL() ?>images/icon.png" />
        <a class="download" href="#"><img src="<?php BASE_URL() ?>images/downBtn.png"></a>
    </div>

    <div class="banner">
        <img src="<?php BASE_URL() ?>images/pageBanner.jpg">
    </div>

    <div class="newslist">
        <div class="newsitem">
            <a <?php if ($category_id == 373) echo 'class="on"';?> href="//hssw.uu.cc/news/373.html">新闻</a>
            <a <?php if ($category_id == 377) echo 'class="on"';?> href="//hssw.uu.cc/news/377.html">活动</a>
            <a <?php if ($category_id == 374) echo 'class="on"';?> href="//hssw.uu.cc/news/374.html">公告</a>
            <a <?php if ($category_id == 378) echo 'class="on"';?> href="//hssw.uu.cc/news/378.html">攻略</a>
        </div>
        <ul>
        <?php
                $config = array(98 => array('新闻','论坛','活动','攻略'),
                373 => array('新闻'),
                374 => array('公告'),
                377 => array('活动'),
                378 => array('攻略'));
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@<span>@@DATE@@</a></span></li>','y/m/d',$config[$category_id],12,1);
                ?>
                <!--
            <li><a href="#link">新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻</a><span>17/9/18</span></li>
            <li><a href="#link">新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻</a><span>17/9/18</span></li>
            <li><a href="#link">新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻</a><span>17/9/18</span></li>
            <li><a href="#link">新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻</a><span>17/9/18</span></li>
            <li><a href="#link">新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻</a><span>17/9/18</span></li>
            <li><a href="#link">新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻新闻</a><span>17/9/18</span></li>
            -->
        </ul>
        <div class="pages">
        <?php
                SHOW_PAGINATION2($config[$category_id],12,array('HasCurrentPage' => false));
                 ?>
                 <!--
        <a href="">上一页</a><a href="">上一页</a>
        -->
        </div>
    </div>

    <a class="backHome" href="/">返回首页</a>
   <div class="contact">
        <span class="tel"><?php echo GET_BLOCK('kefu_phone');?></span>
        <span class="qq"><?php echo GET_BLOCK('kefu_qq');?></span>
    </div>
    <?php require_once 'footer.ctp';?>
</div>



<script src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>

<script>
$(function(){


})

function playPause() {
    var myVideo = document.getElementsByTagName('video')[0];
    if (myVideo.paused){
       myVideo.play();
    }else{
       myVideo.pause();
    }
}
</script>
</body>
</html>
