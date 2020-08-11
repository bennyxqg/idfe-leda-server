<?php
$this->Website->init();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title><?php BLOCK('title_chn') ?></title>
<meta content="<?php BLOCK('keywords_chn') ?>" name="keywords">
<meta content="<?php BLOCK('description_chn') ?>" name="description">
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<style>
*{margin:0;padding:0;}
#container{width:640px;height:auto;overflow:hidden;margin:0 auto;position:relative;}
.top{background:url(<?php BASE_URL() ?>images/bander.jpg) no-repeat center top;width:640px;height:773px;position:relative;}
.top a{position:absolute;width:95px;top:0;height:40px;right:50px;}
.top a.zh{right:140px;}
.main{background:url(<?php BASE_URL() ?>images/bj.jpg) no-repeat center top;height:922px;}
.main a.az{width:381px;height:131px;display:block;margin:0 auto;}
.main p{background:url(<?php BASE_URL() ?>images/lt.png) no-repeat center top;width:600px;height:72px;margin:10px auto;}
.main p a{width:195px;float:right;height:72px;}
.video{width:500px;margin-left:60px;margin-top:50px;height:300px;}
.footer{background:url(<?php BASE_URL() ?>images/foot1.jpg) no-repeat center top;height:172px;margin-top:70px;}
</style>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>

<body>
<div id="container">
  <div class="top"><a href="//mv.uu.cc/" class="zh"></a><a href="//mv.uu.cc/?lan=cht" class="en"></a></div>
  <div class="main">
     <a href="<?php BLOCK('android_download_url') ?>" class="az"><img src="<?php BASE_URL() ?>images/az.png" width="381" height="131" /></a>
     <p class="p1"><a href="<?php BLOCK('forum_url_chn') ?>" class="lunt"></a></p>
     <div class="video">
       <video src="//dl.ldzw.gxpan.cn/site/video/ldzwPV.mp4" width="500" height="300" controls="controls"></video>
     </div>
  </div>
  <div class="yx_jt"> 
     <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php
        	SHOW_IMAGE_LIST('<div class="swiper-slide"><img src="@@BIG_IMAGE@@" width="628" height="345" /></div>','wap_loop_img_chn',array());
        ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    
    <!-- Swiper JS -->
    <script src="<?php BASE_URL() ?>js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    </script>
  </div>
  <div class="footer"></div>
</div>





</body>