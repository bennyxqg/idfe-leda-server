<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
    <?php
	$this->Website->init();
	echo '<title>'.GET_BLOCK('web_title').'</title>';
	echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
	echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
	?>
    <link href="<?php BASE_URL() ?>css/swiper-3.4.2.min.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/main.css" rel="stylesheet" type="text/css">
    <script>
        var devieWidth=Math.min(768,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
</head>
<body>
    <div class="page page_news">
        <!--start 头部icon,logo,下载-->
        <div class="header">
            <img src="<?php BASE_URL() ?>images/icon.png" class="icon"/>
            <img src="<?php BASE_URL() ?>images/logo.png" class="logo" alt="我的少年时代"/>
            <a href="//tf.uu.cc/download" class="download">立即下载</a>
        </div>
        <!--end 头部icon,logo,下载-->
        <div class="banner-top">
            <img src="<?php BASE_URL() ?>images/news_top.jpg" alt=""/>
        </div>

         <!--start 新闻资讯-->
        <div class="news">
            <div class="title_2">
                <a href="javascript:window.history.back();" class="return"><img src="<?php BASE_URL() ?>images/return_2.png"/></a>
                <div class="dtitle"><img src="<?php BASE_URL() ?>images/news_title.png?v=0"/></div>
            </div>
            <div class="news_nav">
                <ul class="clearfix">
                    <a href="//tf.uu.cc/news/98.html"><li class="zx <?php if ($category_id == 98) echo 'cur';?>">最新</li></a>
                    <a href="//tf.uu.cc/news/363.html"><li class="gg <?php if ($category_id == 363) echo 'cur';?>">公告</li></a>
                    <a href="//tf.uu.cc/news/364.html"><li class="hd <?php if ($category_id == 364) echo 'cur';?>">活动</li></a>
                    <a href="//tf.uu.cc/news/365.html"><li class="rl <?php if ($category_id == 365) echo 'cur';?>">热聊</li></a>
                </ul>
            </div>
            <div class="news_cont">
                <ul style="display:block;">
                <?php
                $config = array(98 => array('公告','活动','热聊'),
                363 => array('公告'),
                364 => array('活动'),
                365 => array('热聊'));
                SHOW_NEWS('<li><a href="@@URL@@"><p>@@TITLE@@</p><div class="date">@@DATE@@</div></a></li>','Y/m/d',$config[$category_id],12,1);
                ?>
                </ul>
            </div>
            <div class="button">
            	<?php
                	SHOW_PAGINATION3($config[$category_id],12,array('news_field' => 'news','default_class' => 'pageNum','prev_class' => 'button-prev','next_class' => 'button-next','CurrentPageClass' => 'on'),$page);
                	?>
                <!--
                <div class="button-prev"></div>
                <div class="button-next"></div>
                -->
            </div>
        </div>
        <!--end 新闻资讯-->
       
         <!--start 二维码-->
        <div class="erweima">
            <div class="erweima_wx clearfix">
                <p>关注微信，获得第一手咨询</p>
                <div class="erweima_pic"><img src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="微信二维码"/></div>
            </div>
            <div class="erweima_qq clearfix">
                <p>加入官方粉丝群，偶像应援</p>
                <div class="erweima_pic"><img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>" alt="qq二维码"/></div>
            </div>
        </div>
        <!--end 二维码-->
        <div class="return-top">
            <a href="javascript:void(0)" class="return_top"><i><img src="<?php BASE_URL() ?>images/return_top.png" alt="返回顶部"/></i>返回顶部</a>
        </div>
    </div> 
<script src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper-3.4.2.min.js"></script>
<script>
    $(function(){
        $(".return_top").on("click", function() {  
            $("body").stop().animate({scrollTop:0});  
        }) 
    })
</script>
</body>
</html>
