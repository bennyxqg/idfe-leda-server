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
        <a class="download" href="//hssw.uu.cc/download"><img src="<?php BASE_URL() ?>images/downBtn.png"></a>
    </div>

    <div class="newsContent">
        <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
        <div class="date"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
        <div class="content">
            <?php
                    echo GET_CURRENT_NEWS_INFO('content');
                ?>
        </div>
    </div>

   <a class="backHome" href="">返回首页</a>
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
