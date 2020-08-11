<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="author" content="乱斗之王">
<link rel="stylesheet" href="<?php echo $full_base_url ?>/mobile/css/bulid.css" />  
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9ce983a1ee9572198ea8bf47c150fc98";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</head>

<body>

<div id="container">
	<!--
	<div class="loading_bg" id="loading">
    	<div class="loading_wrp">
            <div class="loading">
                <div class="loading_bar"></div>
            </div>
            <b id="loading_text">0%</b>
        </div>
    </div>
    <section id="lock">
    	<p>请使用竖屏浏览获取最佳体验</p>
    </section>
    -->
	<section id="main" role="main">
        <section class="scene one active">
          <span class="logo"></span>
          <span class="slogn"></span>
          <span class="wz1"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
    	<section class="scene two">
          <span class="logo"></span>
          <span class="slogn"></span>
          <a href="#" class="video_y" style="width:100px;height:100px;"></a>
          <span class="wz2"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
        <section class="scene three ">
          <span class="let_y"></span>
          <span class="ret_y"></span>
          <span class="wz3"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
        <section class="scene four">
          <span class="wz4"></span>
          <span class="da_pao"></span>
          <span class="mao"></span>
          <span class="qw"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
        <section class="scene five">
          <span class="one_w"></span>
          <span class="two_w"></span>
          <span class="three_w"></span>
          <span class="wz5"></span>
        </section>
    </section>
<div class="zhezao"><a href="#"></a></div>   
<div class="sp_video">
  <video controls='controls' src="//dl.ldzw.gxpan.cn/site/video/lzzs.mp4" width="100%" height="100%">
</div>
<nav id="nav" style="background-image: url(<?php echo $full_base_url ?>/mobile/images/ts.png);">
     <?php require_once '_dh.ctp';?>
</nav>
<!-- Container end-->
</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F5dc2698c23ff7223d9352389f9f340f7' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="<?php echo $full_base_url ?>/mobile/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo $full_base_url ?>/mobile/js/touchswipe.js"></script>
<script type="text/javascript">
 $(function(){
	 $('.video_y').click(function(){
		 $('.zhezao').show();
		 $('.sp_video').show();
		 })
	 $('.zhezao').click(function(){
		 $('.sp_video').hide();
		 $('.zhezao').hide();
		 })
	 })
</script>
<script src="<?php echo $full_base_url ?>/mobile/js/main.js"></script>
</body>
</html>
  
  
  
  
  