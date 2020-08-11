<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>
<body>


<div class="container">
    <div class="inner" >
       <header id="header">
         <span class="logo"><img src="<?php BLOCK('game_icon') ?>" width="90"  /></span>
         <span class="logo_wz"><img src="<?php BASE_URL() ?>images/logo_wz.png" width="221" height="62" /></span>
         <!--
         <a href="<?php BLOCK('android_download_url') ?>" href_ios="<?php BLOCK('ios_download_url') ?>" href_android="<?php BLOCK('android_download_url') ?>" class="download"><img src="<?php BASE_URL() ?>images/download.png" width="198" height="63" /></a>
         -->
         <a href="//ddx.uu.cc/download" class="download"><img src="<?php BASE_URL() ?>images/download.png" width="198" height="63" /></a>
       </header>
    </div>
    <article>
    <h1><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
    <span class="timer">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></span>
    <p><?php SHOW_CURRENT_NEWS_INFO('content') ?></p>
    </article>
    <div class="link_wb">
      <a href="<?php BLOCK('baidu_tieba_url') ?>"></a>
      <a href="javascript:;" class="qq"></a>
      <a href="<?php BLOCK('forum_url') ?>"></a>
      <span class="qq_"><strong>客服QQ</strong><em><?php BLOCK('custom_service_qq') ?></em></span>
    </div>
    <span class="ke_f">客服电话：<em><?php BLOCK('custom_service_phone') ?></em></span>
    <p class="logo_2">
      <img src="<?php BASE_URL() ?>images/ledou.png" width="164" height="66" /><img src="<?php BASE_URL() ?>images/peak.png" width="131" height="69" />
    </p>
     <?php require_once("_footer.ctp"); ?>
</div>

<script type="text/javascript">
$(function(){

    $('.qq').on('touchstart',function(){
		$('.qq_').toggle();
	})

})
</script>

</body>
</html>