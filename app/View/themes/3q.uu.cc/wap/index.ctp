<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $title; ?></title>
<meta name="keywords" content="<?= $keywords; ?>" >
<meta name="description" content="<?= $description; ?>">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no," />
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" href="<?php echo $full_base_url ?>/wap/css/style.css" type="text/css"/>
</head>

<body>
<div class="main_visual">
<div class="child1" > <a href="javascript:userBrowser()"><img src="<?php echo $full_base_url ?>/wap/images/button-1.png" /></a> </div>
	<div class="child2" > <a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/wap/images/button-2.png" /></a> </div>
<div class="flicking_con">
	
	<div class="flicking_inner"> <a href="##">1</a> <a href="##">2</a> <a href="##">3</a> <a href="##">4</a> <a href="##">5</a> </div>
</div>
<div class="main_image">
	<ul>
		<li><img src="<?php echo $full_base_url ?>/wap/images/banner1.jpg"></li>
		<li><img src="<?php echo $full_base_url ?>/wap/images/banner2.jpg"></li>
		<li><img src="<?php echo $full_base_url ?>/wap/images/banner3.jpg"></li>
		<li><img src="<?php echo $full_base_url ?>/wap/images/banner4.jpg"></li>
		<li><img src="<?php echo $full_base_url ?>/wap/images/banner5.jpg"></li>
	</ul>
	<a href="###" id="btn_prev"></a><a href="###" id="btn_next"></a>
</div>
</div>
<div class="footer">
	<div class="page"> 
		<div class="logo-bottom"><div class="logo"><img src="<?php echo $full_base_url ?>/wap/images/logo.png"></div></div>
		<div class="cr">
			<p class="link"><a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//bbs.uu.cc/forum-248-1.html">服务器列表</a> | <a target="_blank" href="//bbs.uu.cc/forum-248-1.html">进入论坛</a></p>
			<p class="cop">Copyright&copy;2009-2014 深圳市创梦天地科技有限公司</p>
			<p class="cop">粤网文〔2016〕6871-1632号 新广出审[2014]1549号</p>
            <p class="cop">出版物号：ISBN 978-7-900298-47-8 文网游备字[2014] M-CSG 108 号</p>
		</div>
		<div class="zg">抵制不良游戏  拒绝盗版游戏  注意自我保护  谨防上当受骗  <br>
适度游戏益脑  沉迷游戏伤身  合理安排时间  享受健康生活 </div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery.event.drag-1.5.min.js"></script> 
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery.touchSlider.js"></script> 
<script type="text/javascript">
		function userBrowser() {
var u = navigator.userAgent;
if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1) {//安卓手机
 parent.window.location.href="//dl.uu.cc/download/SGQB_android.apk";
} else if (u.indexOf('iPhone') > -1) {//苹果手机
parent.window.location.href="//dl.uu.cc/download/SGQB_ios.ipa";
} else if (u.indexOf('Windows Phone') > -1) {//winphone手机
parent.window.location.href="//dl.uu.cc/download/SGQB_android.apk";
}
}
	$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});

</script>
</body>
</html>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=35514528" charset="UTF-8"></script>