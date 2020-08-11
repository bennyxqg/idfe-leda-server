<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>我的酷跑世界</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" media="all" href="css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css"  />
</head>

<body>

<div id="content">
	<div class="top">
    	<img src="images/wap_logo.png" />
        <h2>我的酷跑世界</h2>
        <div class="top_detail">首款超萌轻松对战手游</div>
        <a class="download" href="#">立即下载</a>
    </div>
    <div class="main">
    	<a class="video_btn video_btn_link" name="http://avatar.dl.toyblast.gxpan.cn/yyb/data/video_01.mp4" title="播放精彩视频" href="javascript:;"></a>
    </div>
    <div class="menu"><a class="public-pop-btn" href="javascript:;"></a><a href="#link"></a></div>
    <div class="jietu_box">
    	<h2>精美截图</h2>
        <div class="swiper-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="#link"><img src="images/pic1.jpg" /></a></div>
                <div class="swiper-slide"><a href="#link"><img src="images/pic1.jpg" /></a></div>
                <div class="swiper-slide"><a href="#link"><img src="images/pic1.jpg" /></a></div>
                <div class="swiper-slide"><a href="#link"><img src="images/pic1.jpg" /></a></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        	<div class="swiper-button-prev"></div>
        </div>
    </div>
    
    <h2 class="item-tit item-news"></h2>
    <div class="news-list">
    	<ul>
        	<li><a href="#link"><i class="news">新闻</i><div>圈地大作战怎么圈地圈地大作战怎么圈地圈地大作战怎么圈地圈地大作战怎么圈地</div><span>1/12</span></a></li>
            <li><a href="#link"><i class="act">活动</i><div>圈地大作战怎么圈地</div><span>1/12</span></a></li>
            <li><a href="#link"><i class="anm">公告</i><div>圈地大作战怎么圈地</div><span>1/12</span></a></li>
            <li><a href="#link"><i class="anm">公告</i><div>圈地大作战怎么圈地</div><span>1/12</span></a></li>
            <li><a href="#link"><i class="anm">公告</i><div>圈地大作战怎么圈地</div><span>1/12</span></a></li>
        </ul>
        <a class="more" href="#link">查看更多&gt;</a>
    </div>
    
    <h2 class="item-tit item-video"></h2>
    <div class="video-box"><video width="100%" style="background:#000;" onClick="playPause()" height="400" poster="images/pic2.jpg" controls src="http://dl.uu.cc/download/fr-ldy01.mp4" /></div>
    
    <div class="footer">
    	<a href="http://www.idreamsky.com/"><img src="images/wap_logo_ld.jpg" /></a>
        <div class="links"><a href="http://www.idreamsky.com/homes/about">关于我们</a> | <a href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="#">进入论坛</a></div>
    	<div class="copyright">Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技有限公司 版权所有</div>
        <div class="game-tips">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


<!--关注公众号 弹窗-->
<div class="public-pop">
	<img src="images/20161102_165825_389137.jpg" /> <!--公众号二维码-->
    <span>gongzhonghao</span>
</div>
<div class="mask"></div>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/swiper.jquery.min.js"></script>
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
