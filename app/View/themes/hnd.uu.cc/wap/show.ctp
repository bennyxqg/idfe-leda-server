<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//hnd.uu.cc/hnd.uu.cc/v2/wap/css/index.css" rel="stylesheet">
<link href="//hnd.uu.cc/hnd.uu.cc/v2/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/jquery-1.8.0.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f7b46d5b26c91c9c86bc641ab6fd4fa5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="container">
   <div class="top">
      <span class="logo_small">
      <?php
         echo '<img src="'.GET_BLOCK('game_icon').'" width="90" />';
      ?>
      </span>
      <span class="by by_small"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/by.png" width="150"  /></span>
      <?php
         echo '<a class="d_onload" href="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'" href_android="'.GET_BLOCK('android_download_url').'"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/ljxz.png" width="176" height="67" /></a>';
      ?>
   </div>
   <?php
   echo '<h1 class="title_h1">'.GET_CURRENT_NEWS_INFO('title').'</h1>';
   echo '<span class="timer">时间：'.date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')).'</span>';
   ?>
   
   
   <article>
      <?php SHOW_CURRENT_NEWS_INFO('content') ?>
   </article>
   <a class="gotop"></a>
</div>

<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/commen.js"></script>
<script type="text/javascript">
$(function(){
	$('.gotop').click(function(){$('html,body').animate({scrollTop: '0px'}, 1000);return false;});
	
	$(".d_load").each(function(){
		if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_ios'));
		else if (/(Android)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_android'));
	});	
})
</script>
</body>
</html>