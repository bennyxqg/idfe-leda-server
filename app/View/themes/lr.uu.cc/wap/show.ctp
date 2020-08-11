<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css?v=12121121">

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>

<body>
<div id="container">
    <div id="header">
        <span class="icon"><img src="<?php BASE_URL() ?>images/icon.png" width="90" height="90" ;></span>
        <a class="sy" href="/">首页</a>
        <a class="xw" href="//lr.uu.cc/news/338.html">新闻</a>
        <a class="hd" href="//lr.uu.cc/news/340.html">活动</a>
        <a class="lt" href="<?php BLOCK('forum_url') ?>">论坛</a>
    </div>

   <div class="article">
       <h1><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
       <span class="date"><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></span>
       <div class="article_n">
       <p><?php SHOW_CURRENT_NEWS_INFO('content') ?></p>
       </div>
   </div>    
    
    
    <?php require_once("_footer.ctp"); ?>
     
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript">
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
		loop: true
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 30,
		loop: true
    });

</script>
<script type="text/javascript">

$(function(){
$('.tab ul li').each(function(t){
		$(this).on('click',function(){
			 $(this).addClass('dq').siblings().removeClass('dq');
			 	
		})
	})
})
</script>

</body>