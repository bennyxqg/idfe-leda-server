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
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
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
                	<img style=" width:100%; height:100%" src="<?php BASE_URL() ?>images/qrCode.png" />
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
        <div id="foot">
            <div class="newFooter">
                <div class="messages">
                    <div class="logo">
                        <img class="img_logo" src="<?php BASE_URL() ?>images/w_foot_logo.png" alt="">
                        <!--<img src="<?php BASE_URL() ?>images/w_foot_icon.png" alt="">-->
                    </div>
                    <div class="foot_text">
                        <p class="link"> <a class="first_o" target="_blank" href="http://www.idreamsky.com/homes/about">关于我们 </a>&nbsp;&nbsp; | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                        <p> <span>Copyright©2009-<em class="copy-year">2018</em>  IDREAMSKY. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创梦天地科技有限公司  版权所有<br>  粤ICP备11018438号&nbsp;&nbsp;&nbsp;&nbsp; 粤网文〔2016〕6871-1632号  &nbsp;&nbsp;&nbsp;   批准文号：文网游备字〔2017〕Ｍ-CSG 3143 号  新广出审[2017]9246号 <br> 出版号：ISBN  978-7-498-021593-8</span> 
                        <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
                        <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
                        <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
                        <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a>
                        <a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/2c94c08b60024fa7016006e79f7f1847"><img src="<?php BASE_URL() ?>images/w_foot2_icon2.png" alt="电子标签" width="16"></a> </p>

                    </div>
                </div>
                <div class="zg"><strong>健 康 游 戏 忠 告 ：</strong>抵制不良游戏，拒绝盗版游戏。 注意自我保护，谨防上当受骗。 适度游戏益脑，沉迷游戏伤身。 合理安排时间，享受健康生活。</div>

            </div>
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