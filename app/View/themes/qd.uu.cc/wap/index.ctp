<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css?v=223"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?v=2232"  />
<link rel="shortcut icon" href="//dl-resource.uu.cc/qd.uu.cc/favicon.ico">
</head>

<body>

<div id="content">
	<div class="top">
    	<img src="<?php BLOCK('game_icon') ?>" />
        <h2>圈地大作战</h2>
        <div class="top_detail">首款超萌轻松对战手游</div>
        <a class="download" href="//qd.uu.cc/download">下载游戏</a>
    </div>
    <div class="main">
    	<a class="vedio-btn" href="javascript:;" name="<?php BLOCK('vedio_url') ?>"><span></span></a>
        <a class="main-dwnbtn" href="//qd.uu.cc/download"></a>
    </div>
    <div class="menu"><a class="public-pop-btn" href="javascript:;"></a><a href="<?php BLOCK('forum_url') ?>"></a></div>
    <div class="jietu_box">
    	<h2>新闻公告</h2>
        <div class="swiper-banner">
            <div class="swiper-wrapper">
            <?php
            	SHOW_DATAS('<div class="swiper-slide"><a href="#link"><img src="@@STR1@@" /></a></div>','m/d',0,100,array());
            ?>
            </div>
            <div class="swiper-pagination swiper-pagination1"></div>
<!--            <div class="swiper-button-next"></div>
        	<div class="swiper-button-prev"></div>-->
        </div>
    </div>
    
    <!--<h2 class="item-tit item-news"></h2>-->
    <div class="news-list">
    	<ul>
    	<?php
	         SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><i>@@CATEGORY_NAME@@</i><div>@@TITLE@@</div><span>@@DATE@@</span></a></li>','m/d',array('新闻','活动','公告'),6,0,array('LimitFrom'=>1));
	    ?>
        </ul>
        <a class="more" href="//qd.uu.cc/news/0">所有新闻</a>
    </div>
    
    <!--<h2 class="item-tit item-video"></h2>-->
<!--    <div class="video-box"><video width="100%" style="background:#000;" onClick="playPause()" height="400" poster="<?php BLOCK('wap_inde_vedio_img') ?>" controls src="<?php BLOCK('vedio_url') ?>" /></div>
--> 
	
	<div class="tese_box">
    	<h2>游戏特色</h2>
        <div class="swiper-tese">
            <div class="swiper-wrapper">
            <?php
            	SHOW_DATAS('<div class="swiper-slide"><a href="#link"><img src="@@STR1@@" /></a></div>','m/d',0,100,array());
            ?>
            </div>
            <div class="swiper-pagination swiper-pagination2"></div>
<!--            <div class="swiper-button-next"></div>
        	<div class="swiper-button-prev"></div>-->
        </div>
    </div>
    <div class="code-box">
    	<img src="<?php BLOCK('weixin_qrcode') ?>" />
    	<span>微信公众号二维码</span>
    </div>
    <div class="footer" style="height:300px;">
    	<a href="http://www.idreamsky.com/"><img src="<?php BASE_URL() ?>images/wap_logo_ld.jpg" /></a>
        <div class="links"><a href="http://www.idreamsky.com/homes/about">关于我们</a> | <a href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="#">进入论坛</a></div>
    	<div class="copyright">Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技有限公司 版权所有</div>
			粤网文〔2016〕6871-1632号  批准文号：文网游进字〔2017〕0133 号<br>
			新广出审[2017]6718号  出版号：ISBN 978-7-7979-9980-9<br>
        <div class="game-tips">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


<!--关注公众号 弹窗-->
<div class="public-pop">
	<img src="<?php BLOCK('weixin_qrcode') ?>" />
    <span><?php BLOCK('weixin_account') ?></span>
</div>
<div class="mask"></div>


<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js?v=123"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js?v=123"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	var swiper = new Swiper('.swiper-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
//		nextButton: '.swiper-button-next',
//        prevButton: '.swiper-button-prev',
		loop: true
    });
	
	var swiper = new Swiper('.swiper-tese', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
//		nextButton: '.swiper-button-next',
//        prevButton: '.swiper-button-prev',
		loop: true
    });
	

	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	
	$('.public-pop-btn').click(function(){
		$('.mask,.public-pop').show();
	})
	$(".mask").on("click", function(e){
		$('.mask,.public-pop').hide();
		e.stopPropagation();
	});
	
	//页面视频	   
	$('.vedio-btn').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao,.s_p_k').show();
	})
	$(".close,.zhezao").on("click", function(e){
		$('.s_p_k video').attr('src','');
		$('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
		e.stopPropagation();
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
