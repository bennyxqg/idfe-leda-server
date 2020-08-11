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
    <!--<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">-->
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css">
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/idangerous.swiper.css">
    <script src="<?php BASE_URL() ?>js/jquery-1.9.1.js"></script>
    <script src="<?php BASE_URL() ?>js/idangerous.swiper.min.js"></script>
    <script src="<?php BASE_URL() ?>js/index.js"></script>
</head>
<body>
    <!--content    start-->
    <div id="index">
        <div class="header">
            <a href="javascript:;" class="logo"></a>
        </div>
        <div class="content">
            <div class="title">

            </div>
            <div class="reg">
                <div class="left">

                </div>
                <div class="midden">
                    <a href="<?php echo GET_BLOCK('ios_download_url');?>" class="ios">
                        <span></span>
                        <p cl>App Store</p>
                        <p>下载</p>
                    </a>
                    <a href="<?php echo GET_BLOCK('android_download_url');?>" class="android">
                        <span></span>
                        <p>安卓下载</p>
                    </a>
                </div>
                <div class="right" data-mp4="<?php echo GET_BLOCK('vedio_url');?>">
                    <div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!--轮播图   start-->
        <div class="banner">
            <div class="swper swiper-container">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide"><a href="javascript:;"><img src="<?php BASE_URL() ?>images/banner1.png" alt=""></a></li>
                    <li class="swiper-slide"><a href="javascript:;"><img src="<?php BASE_URL() ?>images/banner2.png" alt=""></a></li>
                    <li class="swiper-slide"><a href="javascript:;"><img src="<?php BASE_URL() ?>images/banner3.png" alt=""></a></li>
                    <li class="swiper-slide"><a href="javascript:;"><img src="<?php BASE_URL() ?>images/banner4.png" alt=""></a></li>
                </ul>
            </div>
            <!-- 按钮 -->
            <a class="arrow-left" href="javascript:;"></a> 
            <a class="arrow-right" href="javascript:;"></a>
            <div class="pagination">
            </div>
        </div>
        <!-- 轮播图   end-->
        <div class="footer">
            <div></div>
        </div>
    </div>
    <!--content    end-->
    <!--弹窗部分-->
    <div class="layer">
        
    </div>
    <div class="video">
        <span class="close"></span>
        <video width="700" height="400" autoplay poster controls src>
        您的浏览器不支持 video 标签。</video>
    </div>
</body>
</html>