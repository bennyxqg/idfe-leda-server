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
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
</head>

<body>

<div id="content">
	<div class="top">
    	<img src="<?php BASE_URL() ?>images/wap_logo.png?v=2017" />
        <h2>我的酷跑世界</h2>
        <div class="top_detail">首款超萌轻松对战手游</div>
        <a class="download" href="http://kp.uu.cc/download">立即下载</a>
    </div>
    <div class="main">
    	<a class="video_btn video_btn_link" name="<?php BLOCK('vedio_url') ?>" title="播放精彩视频" href="javascript:;"></a>
    </div>
    <div class="menu"><a class="public-pop-btn" href="javascript:;"></a><a href="<?php BLOCK('forum_url') ?>"></a></div>
    <div class="jietu_box">
    	<h2>精美截图</h2>
        <div class="swiper-banner">
            <div class="swiper-wrapper">
            	<?php
            	SHOW_DATAS('<div class="swiper-slide"><a href="#link"><img src="@@STR2@@" /></a></div>','m/d',1,100,array());
            	?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        	<div class="swiper-button-prev"></div>
        </div>
    </div>
    
    <h2 class="item-tit item-news"></h2>
    <div class="news-list">
    	<ul>
    	<?php
            $class = 'new';
            		SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><i class="@@CLASS@@">@@CATEGORY_NAME@@</i>@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻','活动','公告'),5,0,array('class' => array(354=>'news',355=>'act',356=>'anm')));
            	?>
        </ul>
        <a class="more" href="http://kp.uu.cc/news/98.html">查看更多&gt;</a>
    </div>
    
    <h2 class="item-tit item-video"></h2>
    <div class="video-box"><video width="100%" style="background:#000;" onClick="playPause()" height="400" poster="<?php BLOCK('wap_vedio_bg') ?>" controls src="<?php BLOCK('vedio_url') ?>" /></div>
    
    <div class="footer">
    	<a href="http://www.idreamsky.com/"><img src="images/wap_logo_ld.jpg" /></a>
        <div class="links"><a href="http://www.idreamsky.com/homes/about">关于我们</a> | <a href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="<?php BLOCK('forum_url') ?>">进入论坛</a></div>
    	<div class="copyright">Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技有限公司 版权所有</div>
        <div class="game-tips">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


<!--关注公众号 弹窗-->
<div class="public-pop">
	<img src="<?php BLOCK('weixin_qrcode') ?>" /> <!--公众号二维码-->
    <span><?php BLOCK('weixin_account') ?></span>
</div>
<div class="mask"></div>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	var swiper = new Swiper('.swiper-banner', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		loop: true
    });

	//页面视频	   
	$('.video_btn').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao,.s_p_k').show();
	})
	$(".close,.zhezao").on("click", function(e){
		$('.s_p_k video').attr('src','');
		$('.s_p_k,.zhezao').hide();
		e.stopPropagation();
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
