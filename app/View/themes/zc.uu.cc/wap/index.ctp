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
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
</head>

<body>

<div id="content">
	<div class="top">
    	<img class="game-logo" src="<?php BASE_URL() ?>images/icon.png" />
       <h2>超级战车</h2>
        <a class="download" href="//zc.uu.cc/download"><img src="<?php BASE_URL() ?>images/downBtn.png"></a>
    </div>
    
    <div class="main">
    	<p class="qq">官方QQ群：<?php echo GET_BLOCK('qq_group');?></p>
    </div>
    
    <div class="btns">
    	<a href="//zc.uu.cc/download"></a>
    	<a href="<?php echo GET_BLOCK('forum_url');?>"></a>
    </div>
    
    <img class="itemTit" src="<?php BASE_URL() ?>images/itemTit1.png" >
    
    <div class="vedio-box"><video width="100%" style="background:#000;" onClick="playPause()" height="263" poster="<?php BASE_URL() ?>images/video_bg.jpg" controls src="<?php echo GET_BLOCK('vedio_url');?>" /></div>
    
    <img class="itemTit" src="<?php BASE_URL() ?>images/itemTit2.png" >
    
    <div class="sliderBox">
    	<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="<?php BASE_URL() ?>images/sider01.jpg"></div>
				<div class="swiper-slide"><img src="<?php BASE_URL() ?>images/sider02.jpg"></div>
				<div class="swiper-slide"><img src="<?php BASE_URL() ?>images/sider03.jpg"></div>
				<div class="swiper-slide"><img src="<?php BASE_URL() ?>images/sider04.jpg"></div>
				<div class="swiper-slide"><img src="<?php BASE_URL() ?>images/sider05.jpg"></div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
		<div class="swiper-button-next"></div>
   		<div class="swiper-button-prev"></div>
    </div>
    
    <a class="goTop" href="javascript:;">返回顶部</a>
    <div class="footer">
    	Copyright©2009-2017 深圳市创梦天地科技股份有限公司<br>版权所有 粤ICP备11018438号
		粤网文〔2016〕6871-1632号<br>
        批准文号：文网游备字〔2017〕Ｍ-CSG 2647 号<br>  新广出审[2017]8759号
        出版号：ISBN 978-7-498-01703-1
    </div>
</div>



<script src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>

<script>
$(function(){
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
	
	//GOTOP
	$(".goTop").click(function() {
	   $("body,html").animate({scrollTop:0},800);
	});

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
