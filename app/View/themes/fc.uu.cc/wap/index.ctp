<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link rel="shortcut icon" href="//fc.uu.cc/fc.uu.cc/favicon.ico">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?> 

<style>
*{margin:0;padding:0;}
#container{position:relative;width:750px;height:1334px;background:url(<?php BASE_URL() ?>images/bj.jpg) no-repeat center top;}
#container a{position:absolute;}
.video{width:125px;height:125px;left:50%;margin-left:-63px;top:450px;}
.down{position:absolute;width:669px;height:96px;background:url(<?php BASE_URL() ?>images/down.png) no-repeat center top;left:40px;top:1000px;}
.down a{width:320px;height:100%;}
.down a.ios{left:0;}
.down a.az{right:0;}
.zhezao{display:none;background:#000;opacity:0.8;position:fixed;top:0;left:0;right:0;bottom:0;z-index:2;}
.video_tk{display:none;width:700px;height:400px;background:#000;position:absolute;left:50%;margin-left:-350px;top:20%;z-index:3;}



.footer{width:100%;position:absolute;bottom:30px;height:139px;text-align:center;}
</style>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
</head>

<body>
<div id="container">
   <a href="javascript:;" class="video"><img src="<?php BASE_URL() ?>images/video.png" width="125" height="125" /></a>
   <p class="down">
       <a href="<?php BLOCK('ios_download_url') ?>" class="ios"></a>
       <a href="<?php BLOCK('android_download_url') ?>" class="az"></a>
   </p>
   <div class="footer"><img src="<?php BASE_URL() ?>images/footer.jpg" width="627" height="139" /></div>
</div>  
<div class="zhezao"></div>
<div class="video_tk">
 
  <video id="video_sp" width="700" height="400" src="//dl.uu.cc/download/jffc.mp4" controls="controls" preload="auto">
     您的浏览器不支持 video 标签。
  </video>
</div>
<script>
$(function(){
	var video_src = "//dl.uu.cc/download/jffc.mp4";
    var myVideo=document.getElementById("video_sp");
	$('.video').on('click',function(){
		$('.zhezao').show();
		$('.video_tk').show();
		//$('#video_sp').attr('src',video_src);
		myVideo.currentTime = 0;
		myVideo.play();
		
	})	
	
	$('.zhezao, .close').on('click',function(){
		
		$('.zhezao').hide();
		$('.video_tk').hide();
		//$('#video_sp').attr('src',video_src);
		myVideo.pause();
		
	})
})
</script>
</body>