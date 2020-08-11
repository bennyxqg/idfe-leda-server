<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">

<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>
<body>

<div class="container">
       <header id="header" style="overflow:hidden;">
         <span class="logo"><img src="<?php BASE_URL() ?>images/logo.png"  /></span>
         
       </header>
     <div class="xw_list">
        <div class="lanmu">
        <a href="<?php CATEGORY_URL('XXXX') ?>" <?php if($category_id == 0) echo 'class="on"';?>>全部</a>
        <a href="<?php CATEGORY_URL('公告') ?>" <?php if($category_id == GET_CATEGORY_ID('公告')) echo 'class="on"';?>>公告</a>
        <a href="<?php CATEGORY_URL('新闻') ?>" <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="on"';?>>新闻</a>
        <a href="<?php CATEGORY_URL('活动') ?>" <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="on"';?>>活动</a>
        </div>
        <div class="xw_qb">
        <ul style="display:block;">
        <?php
        if($category_id == 0)
	     	$catename=array('公告','新闻','活动');
	    else
	     	$catename=GET_CATEGORY_NAME($category_id);
     	?>
        <?php
        SHOW_NEWS('<li><strong>[全部]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$catename,5,$page,array());
        ?>
        </ul>
        <ul>
        <?php
        SHOW_NEWS('<li><strong>[全部]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$catename,5,$page,array());
        ?>

        </ul>
        <ul>
        <?php
        SHOW_NEWS('<li><strong>[全部]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$catename,5,$page,array());
        ?>
        </ul>
        <ul>
        <?php
        SHOW_NEWS('<li><strong>[全部]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$catename,5,$page,array());
        ?>
        </ul>
        
        </div>
     </div>
     <div class="page">
     <?php
     
     	
     SHOW_PAGINATION($catename,5,array(),$page);
     ?>   
     </div>
     <?php require_once("_footer.ctp"); ?>
</div>

<script type="text/javascript">
$(function(){
	$(".lanmu a").each(function(i){
	   $(this).on("click",function(){
		   $(this).addClass('on').siblings().removeClass('on');
		   $(".xw_qb > ul").eq(i).show().siblings().hide();
		})
	})
})
</script>


</body>
</html>