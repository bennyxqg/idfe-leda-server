<?php
$this->Website->init(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php TITLE() ?></title>
<meta content="<?php KEYWORDS() ?>" name="keywords">
<meta name="description" content="<?php DESCRIPTION() ?>">
<link rel="stylesheet" href="<?php BASE_URL() ?>v2/css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
<link rel="bookmark" href="<?php BASE_URL() ?>favicon.ico">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?1d91b91b38581f32a53374a36294677a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<style type="text/css">
.top,.top .wrap{ background:url(<?php BASE_URL() ?>v2/images/index_top_bg_cht.jpg) 50% 0 no-repeat;}
.contrat_box{background:url(<?php BASE_URL() ?>v2/images/contra_chr.png) no-repeat; width:228px; height:416px; top:35px;}
.contrat_box a{ display:block; width:228px; height:72px; text-indent:-999px; overflow:hidden;}
</style>
</head>

<body class="index">

<div class="top">
	
	<div class="star1"></div>
    <div class="star2"></div>
    <div class="star3"></div>
    <div class="wrap">
    	<div class="pa lg_tab"><a href="//mv.uu.cc/" target="_self">简体中文</a> | <a href="//mv.uu.cc/?lan=cht" target="_self">繁体中文</a></div>
    	<div class="windmill"><img src="<?php BASE_URL() ?>v2/images/windmill.jpg"></div>
    	<!--<div class="windmill"><video width="540px" src="<?php BASE_URL() ?>v2/images/windmaill.mp4" autoplay="autoplay" loop="loop" class="device-video active"></video></div>
    	<div class="pa code_img"><?php BLOCK('android_download_qrcode') ?></div>-->
        <a class="pa android_down" href="<?php BLOCK('android_download_url_cht') ?>"></a>
        <!--<div class="pa plats"></div>-->
    </div>
</div>

<div class="main">
	<div class="wrap">
    	<div class="video_box">
        	<div class="video"><video src="<?php BLOCK('index_vedio_url') ?>" width="636" style="background:#000;" height="396" poster="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','index_vedio_cover',array(),1) ?>" controls=""></video></div>
        	<div class="pa contrat_box"><a href="<?php BLOCK('facebook_url') ?>" target="_blank">facebook</a></div>
        </div>
    	<!--<h2 class="main_tit"></h2>-->
        <div class="foucebox">
          <div class="bd">
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover1',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover2',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover3',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover4',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover5',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover6',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover7',array(),1) ?>"><span></span></a></div>
            <div class="showDiv"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover8',array(),1) ?>"><span></span></a></div>
          </div>
          <div class="hd">
            <ul id="hd-thumbs">
              <li class="n1"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover1',array(),1) ?>"><div><?php BLOCK('chapter_title1') ?></div></a></li>
              <li class="n2"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover2',array(),1) ?>"><div><?php BLOCK('chapter_title2') ?></div></a></li>
              <li class="n3"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover3',array(),1) ?>"><div><?php BLOCK('chapter_title3') ?></div></a></li>
              <li class="n4"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover4',array(),1) ?>"><div><?php BLOCK('chapter_title4') ?></div></a></li>
              <li class="n5"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover5',array(),1) ?>"><div><?php BLOCK('chapter_title5') ?></div></a></li>
              <li class="n6"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover6',array(),1) ?>"><div><?php BLOCK('chapter_title6') ?></div></a></li>
              <li class="n7"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover7',array(),1) ?>"><div><?php BLOCK('chapter_title7') ?></div></a></li>
              <li class="n8"><a href="javascript:;"><img src="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','chapter_cover8',array(),1) ?>"><div><?php BLOCK('chapter_title8') ?></div></a></li>
            </ul>
          </div>
        </div>
    </div>
    <?php require_once('foot_cht.ctp') ?>
</div>



<!--<div class="main_nav">
	<ul>
    	<li><a href="#" target="_blank">介绍</a></li>
    	<?php foreach($categories as $cateid => $catename) { ?>
    	<li><a href="#" target="_blank"><?php echo $catename ?></a></li>
    	<?php } ?>
        <li><a id="vedio_btn" href="javascript:;">视频</a></li>
    </ul>
</div>-->

<div class="jietu_slide" style="display:none">
	<a class="close" href="javascript:;"></a>
    <div class="slide_box">
    </div>
</div>
<div class="vedio_box" style="display:none">
	<a class="close" href="javascript:;"></a>
</div>
<div class="mask"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery.hoverdir.js"></script> 
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/modernizr.custom.97074.js"></script>	
<script type="text/javascript">

$(function() {
	
	$(".foucebox").slide({ effect:"fold", autoPlay:true, delayTime:300});

	$("#hd-thumbs > li").each( function() { $(this).hoverdir(); } );
	
	$(".bd .showDiv,#hd-thumbs li").click(function(){

		var index = $(this).index();
		if(index == 0){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_1',array()) ?></ul>");
			}else if(index == 1){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_2',array()) ?></ul>");
			}else if(index == 2){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_3',array()) ?></ul>");
			}else if(index == 3){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_4',array()) ?></ul>");
			}else if(index == 4){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_5',array()) ?></ul>");
			}else if(index == 5){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_6',array()) ?></ul>");
			}else if(index == 6){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_7',array()) ?></ul>");
			}else if(index == 7){
				$(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"//mv.uu.cc/mv.uu.cc/v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_8',array()) ?></ul>");
			}
		$(".jietu_slide").show();
		$(".mask").show();
		
		$(".jietu_slide").slide({ mainCell:".slide",switchLoad:"_src",effect:"leftLoop",autoPlay:true });

	});
	
	$("#vedio_btn").click(function(){
		$(".vedio_box").show();
		$('.mask').show();
	});
	$(".close,.mask").unbind('click').bind("click",function(){
		$(".jietu_slide").hide();
		$(".vedio_box").hide();
		$(".mask").hide();
	})
});
		
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
