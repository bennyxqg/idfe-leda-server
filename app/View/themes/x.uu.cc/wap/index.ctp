<!DOCTYPE html>
<html lang="zh-CN">
<?php
$this->Website->init();
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="Tencent-CP">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="Description" content="">
<meta name="Keywords" content="">
<meta name="author" content="idreamsky">
<title>AION、天刀、上古5将推手游？乐逗游戏即将发布2016头号顶级IP大作</title>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css?v=1111" media="all">
</head>
<body id="wp" class="stage">
<p style="display:none"><img src="<?php BASE_URL() ?>images/icon.jpg" alt="圣斗士星矢" /></p>
<div class="loading center"><div id="square"></div><p class="loading-txt">LOADING…<span class="loading-num"></span>%</p></div>
<div class="wrapper">
	<section class="page page1 ploaded" id="page1">
    	<div id="tear"><span></span></div>
        <div class="page_bottom">
	</section>

	<section class="page page2" id="page2">
    	<div class="timer">
        	<span class="day">00</span><em>天</em>
            <span class="hour">00</span><em>时</em>
            <span class="minute">00</span><em>分</em>
            <span class="second">00</span><em>秒</em>
        </div>
        <a class="yuyue_btn" href="javascript:;"></a>
	</section>
</div>


<!--<div class="mask center" style="display:none;">为了更好的体验，请将手机/平板竖过来</div>-->


<div class="ico_arrow"></div>

<div class="tel_pop">
	<a class="close" href="javascript:;"></a>
    <input class="yuyue_ipt" type="tel" placeholder="请输入手机号" />
    <a class="yuyue_btn2" href="javascript:;"></a>
</div>
<div class="mask2"></div>

<div class="fenx" ontouchstart="document.querySelector('.fenx').style.display='none';"></div>

<audio id="musicfx" preload="auto">
    <source src="<?php BASE_URL() ?>images/5512.mp3" type="audio/mpeg">
</audio>

<audio id="musicfx2" preload="auto" loop="loop">
    <source src="<?php BASE_URL() ?>images/rexue.mp3" type="audio/mpeg">
</audio>

<script type="text/javascript" src="<?php BASE_URL() ?>js/zepto-1.1.3.min.js"></script> 
<script type="text/javascript" src="<?php BASE_URL() ?>js/pic.js"></script> 
<script>

//横竖屏判断
//window.addEventListener('load', function() {
//	checkDirect();
//});
//var checkDirect = function() {
//    if (document.body.clientWidth > document.body.clientHeight) {
//        document.querySelector('.mask').style.display = 'block';
//    } else {
//       document.querySelector('.mask').style.display = 'none';
//    }
//}
//var evt = "onorientationchanged" in window ? "orientationchanged" : "resize";
//window.addEventListener(evt, checkDirect, false);

//图片预加载
var rateNum = document.querySelector('.loading-num'),
	imgPath = "<?php BASE_URL() ?>images/";
for (var i = 0; i < sourceArr.length; i++) {
	sourceArr[i] = imgPath + sourceArr[i] ;
};
var loadImage = function(path, callback) {
	var img = new Image();
	img.onload = function() {
		img.onload = null;
		callback(path);
	}
	img.src = path;
}
var imgLoader = function(imgs, callback) {
	var len = imgs.length,
		i = 0;
	while (imgs.length) {
		loadImage(imgs.shift(), function(path) {
			callback(path, ++i, len);
		});
	}
}
imgLoader(sourceArr, function(path, curNum, total) {
	var percent = curNum / total
	rateNum.innerHTML = Math.floor(percent * 100);
//	$(".bar em").attr('style','width:'+Math.floor(percent * 100)+"%");
	if (percent == 1) {
		setTimeout(showPage, 500);
	}
});

var showPage = function() {
	document.querySelector(".loading").parentNode.removeChild(document.querySelector(".loading"));
	document.addEventListener('DOMContentLoaded', function(){
    	document.documentElement.style.height = window.innerHeight + 'px';
	});
	
	
	$("#wp").attr("class","stage"+0);
	var yStart, yEnd, isAnimate = false, isModal = false, index = 0;
	
	document.body.addEventListener('touchstart', function (e){
		var touch = e.changedTouches[0];
		yStart = touch.pageY;
	});
	
	document.body.addEventListener('touchmove', function (e){
		event.preventDefault();	
		var touch = e.changedTouches[0];
		yEnd = touch.pageY;
		xEnd = touch.pageX;
		if(isAnimate || isModal) return false;
		if (yEnd - 100> yStart & yEnd > yStart){ //down
			if(index == 0 || index > 2) return false;
			setPage(1,--index);
			$(".ico_arrow").show();
		} else if (yEnd + 100 < yStart & yEnd < yStart & $("#tear").attr("class") == "tear_out"){ //up
			if(index >= 1) return false;
			setPage(0,++index);
			$(".ico_arrow").hide();
		}
	});
	
	function setPage(dir,page){
		$("#wp").attr("class","stage"+page);
		isAnimate = true;
		if(dir == 1){
			$("#page"+(page+1)).removeClass("pagev");
			$("#page"+(page+1)).addClass("ploaded");
			$("#page"+(page+2)).removeClass("ploaded");
		}else{
			$("#page"+page).addClass("pagev");
			$("#page"+page).removeClass("ploaded");
			$("#page"+(page+1)).addClass("ploaded");
		}
		setTimeout(function(){
			if(isAnimate) isAnimate = false;
		},750);
	}
	
	$("#pbtnB").bind("click", function(){ setPage(0,++index) } );
	
//	$("#tear").bind("click", function(){
//		$(this).attr("class","tear_out");
//	});
	
	$('#tear').on('touchstart', function(e){
		$('#musicfx').get(0).play();
		$(this).attr("class","tear_out");
		$(".ico_arrow").show();
		$('#musicfx').get(0).onended = function() {
			$('#musicfx').attr('src','');
			$('#musicfx2').get(0).play();
		};
	});

}
$(function(){
	$(".yuyue_btn").click(function(){
		$(".tel_pop,.mask2").show();
	});
	$(".mask2,.close").click(function(){
		$(".tel_pop,.mask2").hide();
	});
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue_btn2').click(function(){
		phone = $('.yuyue_ipt').val();
		
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,collect_name:95},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
							$(".fenx").show();
						}else if(res.ret == 0){
							alert("您已预约成功！");
							$(".fenx").show();
						}else{
							alert("预约失败！");
							$(".fenx").show();
						}
				  }
			});
			}	
		}
	})
	
	//倒计时初始化
	countDown("2016/3/23 10:00:00",".timer"); 
})

//倒计时
function countDown(time,id){ 
 var day_elem=$(id).find('.day'); 
 var hour_elem=$(id).find('.hour'); 
 var minute_elem=$(id).find('.minute'); 
 var second_elem=$(id).find('.second'); 
 var end_time = new Date(time).getTime();
 var sys_second = (end_time-new Date().getTime())/1000; 
 var timer = setInterval(function(){ 
  if(sys_second>1) { 
   sys_second-=1; 
   var day=Math.floor((sys_second/3600)/24); 
   var hour=Math.floor((sys_second/3600)%24); 
   var minute=Math.floor((sys_second/60)%60); 
   var second=Math.floor(sys_second%60); 
   $(day_elem).text(day);
   $(hour_elem).text(hour<10?"0"+hour:hour);
   $(minute_elem).text(minute<10?"0"+minute:minute); 
   $(second_elem).text(second<10?"0"+second:second);
  } 
  else { 
   clearInterval(timer); 
  } 
 }, 1000); 
} 
</script>
</body></html>