<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php BASE_URL() ?>css/index.css?v=161216" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>
<body>

<div class="container">
       <header id="header" style="overflow:hidden;">
         <span class="logo"><img src="<?php BLOCK('game_icon') ?>" width="80"  /></span>
         <span class="logo_wz"><img src="<?php BASE_URL() ?>images/logo_wz.png" width="221" height="62" /></span>
         <!--
         <a href="<?php BLOCK('android_download_url') ?>" href_ios="<?php BLOCK('ios_download_url') ?>" href_android="<?php BLOCK('android_download_url') ?>" class="download"><img src="<?php BASE_URL() ?>images/download.png" width="198" height="63" /></a>
         -->
         <a href="//ddx.uu.cc/download" class="download"><img src="<?php BASE_URL() ?>images/download.png" width="198" height="63" /></a>
       </header>
     <div class="xw_list">
        <div class="lanmu">
        <a href="<?php CATEGORY_URL('XXX') ?>" <?php if($category_id == 0) echo 'class="on"'; ?>>全部</a>
        <a href="<?php CATEGORY_URL('新闻') ?>" <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="on"'; ?>>新闻</a>
        <a href="<?php CATEGORY_URL('活动') ?>" <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="on"'; ?>>活动</a>
        <a href="<?php CATEGORY_URL('攻略') ?>" <?php if($category_id == GET_CATEGORY_ID('攻略')) echo 'class="on"'; ?>>攻略</a>
        </div>
        <div class="xw_qb">
        <ul style="display:block;">
        <?php
        	if($category_id == 0)
        		$cates=array('新闻','活动','攻略');
        	else
        		$cates=GET_CATEGORY_NAME($category_id);
        	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$cates,5,$page,array());
        ?>
        </ul>

        </div>
     </div>
     <div class="page">
     <?php
     	SHOW_PAGINATION($cates,5,array(),$page);
     ?>
     <!--
     	<a href="#">首页</a>
        <a class="cur" href="#">1</a>
        <a href="#">2</a>
        <a href="#">下一页</a>
        <a href="#">末页</a>
        -->     
     </div>
     <?php require_once("_footer.ctp"); ?>
</div>

<script type="text/javascript">
$(function(){
/*
	$(".lanmu a").each(function(i){
	   $(this).on("click",function(){
		   $(this).addClass('on').siblings().removeClass('on');
		   $(".xw_qb > ul").eq(i).show().siblings().hide();
		})
	})
	*/
})
</script>


</body>
</html>