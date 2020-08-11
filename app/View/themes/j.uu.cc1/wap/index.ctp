<!DOCTYPE html>
<html lang="zh-CN">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="Tencent-CP">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="Description" content="">
<meta name="Keywords" content="">
<meta name="author" content="idreamsky">
<title>动作手游，到此为止！乐逗游戏发布ARPG+MOBA超S级大作《J Game》</title>
<link rel="stylesheet" href="//j.uu.cc/j.uu.cc/wap/css/style.css" media="all">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?32a4b0740ac6ecb87235a855e39e11ac";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body id="wp" class="stage">
<p style="display:none"><img src="//j.uu.cc/j.uu.cc/wap/images/icon.jpg" alt="JGAME" /></p>
<div class="loading center"><p class="loading-txt"><img src="//j.uu.cc/j.uu.cc/wap/images/loading.gif" /></p></div>
<div class="wrapper">
	<section class="page page1 ploaded" id="page1">
		<div class="wrap">
    	<h2 class="p1_bg1 fHide ani bounceInDown a1 delay03">战斗从未如此恐惧</h2>
        <h2 class="p1_bg2 fHide ani bounceInLeft a1 delay1">The fiercest fight ever !</h2>
        <div class="p1_bg3 fHide ani bounceInLeft a1 delay2">战斗不是过家家，战斗就要定生死！</div>
        <div class="p1_bg4 fHide ani bounceInRight a1 delay2">死亡模式， 非勇勿入，一次战败， 永久删号。</div>
		</div>
	</section>

	<section class="page page2" id="page2">
		<div class="wrap">
    	<h2 class="p2_bg1 fHide ani bounceInLeft a1 delay03">战斗，从未如此未知。</h2>
        <div class="p2_bg2 fHide ani bounceInRight a1 delay03">战斗不是滚键盘，战斗就要充满未知!</div>
        <div class="p2_bg3 fHide ani bounceInDown a1 delay1">动态副本，随机地图，一次闯荡，万种可能。</div>
        <div class="p2_bg4 fHide ani bounceInUp a1 delay1"></div>
		</div>
	</section>

	<section class="page page3" id="page3">
		<div class="wrap">
    	<h2 class="p3_bg1 fHide ani fadeIn a6 delay06">战斗，从未如此自由！战斗不是滚键盘，战斗就要自由无限!武器决定命运，一秒自由转职</h2>
		</div>
	</section>
	
	<section class="page page4" id="page4">
		<div class="wrap">
    	<h2 class="p4_bg1 fHide ani boomIn a5 delay06">动作手游，到此为止！</h2>
        <h2 class="p4_bg2 fHide ani fadeIn a1 delay1">没有个性的人请不要预约！</h2>
        <div class="p4_bg3 ani bounceInUp a1 delay1_5"></div>
        <div class="p4_bg4 ani bounceInDown a1 delay1_5"></div>
		<div class="p4_bg5 ani fadeIn a1 delay2_5"></div>
		</div>
	</section>
</div>
<i class="pbtn pbtn_b" id="pbtnB"><img src="//j.uu.cc/j.uu.cc/wap/images/arrb.png" alt=""></i>
<div class="mask center" style="display:none;">为了更好的体验，请将手机/平板竖过来</div>

<span id="musicControl" style="display:none;">
	<a id="mc_play" class="on" onclick="play_music();">
		<audio id="musicfx" loop="loop">
			<source src="//j.uu.cc/j.uu.cc/wap/images/sinisterforces.mp3" type="audio/mpeg">
		</audio>
	</a>
 </span>

<div class="yuyue">
	<a class="close" href="javascript:;"></a>
    <input id="tel" type="tel" placeholder="请输入11位手机号" />
    <span class="yuyue_btn"></span>
</div>

<script type="text/javascript" src="//j.uu.cc/j.uu.cc/wap/js/zepto-1.1.3.min.js"></script> 
<script type="text/javascript" src="//j.uu.cc/j.uu.cc/wap/js/pic.js"></script> 
<script>

var autoScale = function() {
		setTimeout(function() {
			s=window.innerHeight/667;
			ss=250*(1-s);
			$('.wrap').css('-webkit-transform','scale('+s+','+s+') translate(0px,-'+ss+'px)');
		}, 300);
	};
	autoScale();
	window.addEventListener("onorientationchange" in window ? "orientationchange" : "resize", autoScale, false);

//图片预加载
var imgPath = "//j.uu.cc/j.uu.cc/wap/images/";
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
	if (percent == 1) {
		$("#musicControl").show();
		just_play();
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
			if(index == 0 || index > 3) return false;
			setPage(1,--index)
		} else if (yEnd + 100 < yStart & yEnd < yStart){ //up
			if(index >= 3) return false;
			setPage(0,++index);
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
}


$('.p4_bg3').click(function(){
	$(".yuyue").show();
	})
$('.close').click(function(){
	$(".yuyue").hide();
	})
$('.yuyue_btn').click(function(){
	var myreg = /^1[34578]\d{9}$/;
	var phone = $('#tel').val();
	if(phone == ''){
		alert('请输入手机号哦！');
		}else{
		if(!myreg.exec(phone)){
			alert('您输入的手机号码不对哦！');
			}else{
			 $.ajax({
				type:"POST",
				url:"/collect_phone",
				data:{phone:phone,type:1,collect_name:77},
				dataType:"json",
				success:function(res){
					if(res.ret == 2){
						alert("您好，您已成功预约，无需重复操作。");
					}else if(res.ret == 0){
						 alert("恭喜，您已成功预约《J Game》超前体验。");
					}else{
					   alert("您好，您本次预约未成功，请重新尝试。");
					}
				}
			});
	
		}	
	}
})

function play_music(){
	if ($('#mc_play').hasClass('on')){
		$('#mc_play audio').get(0).pause();
		$('#mc_play').attr('class','stop');
	}else{
		$('#mc_play audio').get(0).play();
		$('#mc_play').attr('class','on');
	}
	event.stopPropagation(); //阻止冒泡 
}
function just_play(id){
	$('#mc_play audio').get(0).play();
	$('#mc_play').attr('class','on');
	event.stopPropagation(); //阻止冒泡 
} 
</script>
</body></html>