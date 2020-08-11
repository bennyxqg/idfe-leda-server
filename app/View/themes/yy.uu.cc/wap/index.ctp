<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<title><?= $title; ?></title>
<meta content="<?= $keywords; ?>" name="keywords" />
<meta content="<?= $description; ?>" name="description" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<style type="text/css">
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}
body{color:#9d9d9d;word-wrap:break-word;word-break:break-all;}
table{border-collapse:collapse;border-spacing:0;}
address,caption,cite,code,dfn,em,strong,th,var,i,b{font-style:normal;font-weight:normal;}
pre,code,kbd,samp,tt{font-family:"courier new",courier,monospace;line-height:100%;}
ol,ul,li{list-style:none;}
caption,th{text-align:left;}
h1,h2,h3,h4,h5,h6{font-weight:normal;}
blockquote:before,blockquote:after,q:before,q:after{content:"";}
fieldset,img{border:0;}
button,input,select,textarea{}
a{text-decoration:none;color:#9a9a9a;outline:none;}
a:hover{text-decoration:none;color:#236dc9;}
a:active{color:Red;outline:none;}
img{vertical-align:middle;}
.clearfix:after{content:".";height:0;visibility:hidden;display:block;clear:both;font-size:0;line-height:0;}
.clearfix{*zoom:1;}
.fl{float:left;}
.fr{float:right;}

body { width:100%;height:100%;font-family:"微软雅黑";font-size:26px;background:url(<?php echo $full_base_url ?>/v2/images/wap_bg.jpg) no-repeat,url(<?php echo $full_base_url ?>/v2/images/wap_bg2.png);}
.page{position:relative;z-index:1;width:640px;height:100%;margin:0 auto;}
.page a{ display:block; position:absolute; width:337px; height:79px; left:50%; margin-left:-168px; top:564px; text-indent:-9999px; overflow:hidden;}
.page a.vedio_link{top:696px;}
.page a.home_link{top:823px;}

.vedio_box{display:none;position:fixed;_position:absolute;width:640px;height:488px;left:50%;margin-left:-350px;top:20%;z-index:99999;}
.mask{position:fixed;z-index:9999;background:rgba(0,0,0,0.8);opacity:0.8;filter:alpha(opacity=80);top:0;left:0;right:0;bottom:0;display:none;}
</style>
</head>
<body>
<p style="display:none"><img src="<?php echo $full_base_url ?>/v2/images/fenxiang.jpg" alt="《悠悠世界树》" /></p>
<div class="page">
	<a class="link down_link" href="javascript:;" target="_blank">游戏下载</a>
    <a class="link vedio_link" href="javascript:;" target="_blank">精彩视频</a>
    <a class="link home_link" href="/home" target="_blank">进入官网</a>
</div>
<div class="vedio_box">
<video width="670" height="440" controls="controls">
<source src="//app.uu.cc/games/yoyo/yoyo.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<!--
<embed type="application/x-shockwave-flash" src="//static.hdslb.com/miniloader.swf?aid=2151764&amp;page=1" id="movie_player" name="movie_player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true" flashvars="isShowRelatedVideo=false&amp;showAd=0&amp;show_pre=1&amp;show_next=1&amp;isAutoPlay=true&amp;isDebug=false&amp;UserID=&amp;winType=interior&amp;playMovie=true&amp;MMControl=false&amp;MMout=false&amp;RecordCode=1001,1002,1003,1004,1005,1006,2001,3001,3002,3003,3004,3005,3007,3008,9999" pluginspage="//www.macromedia.com/go/getflashplayer" width="700" height="488">--></div>
<div class="mask" ontouchstart="document.querySelector('.vedio_box').style.display='none';document.querySelector('.mask').style.display='none';"></div>

<script src="<?php echo $full_base_url ?>/v2/js/zepto.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('.vedio_link').click(function(){
	$('.vedio_box').show();
	$('.mask').show();
})

$('.down_link').click(function(){ //下载
	is_weixn();
});

function is_weixn(){
	var u = navigator.userAgent;
	var ua = u.toLowerCase();
	
	if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
		location.href="https://itunes.apple.com/cn/app/wo-jia-gong-zhu-zui-ke-ai/id984454081?l=zh&ls=1&mt=8";
	}else{
		location.href="//sj.qq.com/myapp/detail.htm?apkName=com.tencent.tmgp.yurudora"
	}
}
//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?3b479605fe000c07848264c46f72453c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>