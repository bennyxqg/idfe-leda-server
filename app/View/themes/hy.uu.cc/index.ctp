<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="baidu-site-verification" content="w8PW4Csvlk" />
    <?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php FILE_PATH() ?>/css/newStyle.css" rel="stylesheet" type="text/css">
    <link href="<?php FILE_PATH() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
    <style>
        /*.popRight {position: fixed;width: 209px;height: 610px; right: 75px; top: 200px;background: url('<?php FILE_PATH() ?>/img/fuKuang1.png?v=1') no-repeat;z-index: 999;}
    .popRight img.snx { display: block;width: 88px;height: 88px;margin: 28px auto 38px;padding: 3px;background: #fff; }
    .popRight span.snx_span { top: 460px; }
    #content{     background: url(http://game-resource.uu.cc/hy.uu.cc/wap/images/cy_bg.jpg?var=1) #9c2423 center 100px no-repeat;
    background-sizF: 100% auto; }
    .popRight .downLink {width: 147px;margin: 50px auto 0;}*/
        <?php echo GET_BLOCK('pc_style');?>
        .popRight{height:438px;overflow-y: hidden;}
        .popRight .text_0124,.popRight .snx_span,.popRight .snx{display:none;}
        .place-btn-wrap{width:799px;position:absolute;bottom:45px;left:0;right:0;margin:0 auto}
        .palace-btn-home,.palace-btn-music{width:387px;height:103px;display:block;z-index:9999;-webkit-animation:heartbeat 1s infinite;animation:heartbeat 1s infinite}
        @-webkit-keyframes heartbeat{0%{-webkit-transform:scale(0.9);transform:scale(0.9)}50%{-webkit-transform:scale(1,1);transform:scale(1,1)}100%{-webkit-transform:scale(0.9);transform:scale(0.9)}}@keyframes heartbeat{0%{-webkit-transform:scale(0.9);transform:scale(0.9)}50%{-webkit-transform:scale(1,1);transform:scale(1,1)}100%{-webkit-transform:scale(0.9);transform:scale(0.9)}}
        .fl{float: left;}
        .fr{float: right;}
        .palace-btn-home{margin: 0 auto;}
    </style>
</head>
<body>

<?php require_once '_top.ctp';?>
<div class="banner">
    <!--<div class="wrap">
    </div>-->
    <!-- <div class='banner_video'
    style="background-image:url('//dl.gamdream.com/website/hy/banner-bg.jpg');height:100%;background-size:cover;"
     ></div> -->
    <!-- 5-05替换回来 -->
    <!--<video class="banner_video" width="100%" src="http://gimg.gamdream.com/market/hy.uu.cc/video.mp4" height="" muted="muted" loop="loop" autoplay="" poster="" src=""></video>-->

    <!-- 故宫主题官网S -->
    <div class="banner_video" style="background-image:url('//mhhy.dl.gxpan.cn/tmp/hy/start-bg-pc@1x.png');height:100%;background-size:cover;">
        <!-- 上线前S -->
        <!--        <div class="place-btn-wrap">-->
        <!--            <a class="palace-btn-home" href="//mhhy.dl.gxpan.cn/tmp/hy/mhhyPc-webpack/pages/index.html" target="_blank" style="background:url('//mhhy.dl.gxpan.cn/tmp/hy/btn01-btn@2x.png') no-repeat;background-size: 100% auto;"></a>-->
        <!--        </div>-->
        <!-- 上线后S -->
        <div class="place-btn-wrap">
            <a class="palace-btn-home fl" href="//mhhy.dl.gxpan.cn/tmp/hy/mhhyPc-webpack/pages/indexOnline.html" target="_blank" style="background:url('//mhhy.dl.gxpan.cn/tmp/hy/btn01-btn@2x.png') no-repeat;background-size: 100% auto;"></a>
            <a class="palace-btn-music fr" href="//mhhy.dl.gxpan.cn/tmp/hy/mhhyPc-webpack/pages/music.html" target="_blank" style="background:url('//mhhy.dl.gxpan.cn/tmp/hy/btn02-btn@2x.png') no-repeat;background-size: 100% auto;"></a>
        </div>
    </div>
</div>

<div class="main1">
    <div class="wrap">
        <div class="newsBox">
            <div class="box">
                <?php
                SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('新闻','公告','活动'),6,0,array('LimitFrom'=>0));
                ?>
            </div>
            <div class="box active">
                <?php
                SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('新闻'),6,0,array('LimitFrom'=>0));
                ?>
            </div>
            <div class="box">
                <?php
                SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('公告'),6,0,array('LimitFrom'=>0));
                ?>
            </div>
            <div class="box">
                <?php
                SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('活动'),6,0,array('LimitFrom'=>0));
                ?>
            </div>
            <ul class="newsTab">
                <li class="active"><a href="javascript:;">最新</a></li>
                <li><a href="javascript:;">新闻</a></li>
                <li><a href="javascript:;">公告</a></li>
                <li><a href="javascript:;">活动</a></li>
                <li class="_bottom"><a href="//hy.uu.cc/news/1.html">+</a></li>
            </ul>
        </div>
        <div class="box_bg2"></div>
        <div class="title_bg2"></div>
        <div class="banner_bg2">
            <div class="swiper-container swiper-no-swiping">
                <div class="swiper-wrapper">
                    <?php
                    SHOW_DATAS('<div class="swiper-slide"><a href="@@STR2@@"><img width="415" height="526" src="@@STR3@@"></a></div>',
                        'Y-m-d',0,12);
                    ?>
                </div>
            </div>
            <div class="bottom_bg2">
                <div class="banner_text">
                    <?php SHOW_DATAS('<h3>@@STR1@@</h3>','Y-m-d',0,12); ?>

                </div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<div class="main2">
    <div class="wrap">
        <div class="sliderBox">
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <?php
                    SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;"> <img src="@@STR2@@" width="828" height="465"></a></div>',
                        'Y-m-d',6,12);
                    ?>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination2"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev2"></div>
            <div class="swiper-button-next2"></div>
        </div>
        <div class="box_bg3"></div>
        <div class="title_bg3"></div>
    </div>
</div>

<div class="main3">
    <div class="wrap">
        <div class="newsBox3">
            <div class="box">
                <?php
                SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('攻略'),6,0);
                ?>
            </div>
            <a href="//hy.uu.cc/news/5.html" class="add">+</a>
            <div class="main3_img"><img src="<?php FILE_PATH() ?>/img/main3-1.png"></div>
        </div>
        <div class="title_bg4"></div>
        <div class="box_bg4"></div>
    </div>
</div>

<div class="main4">
    <div class="wrap">
        <div class="newsBox4">
            <ul>
                <?php
                SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="372" height="284" /><div></div></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                    'Y-m-d',1,3);
                ?>
            </ul>
            <a href="/video" class="add">+</a>
        </div>
        <div class="title_bg5"></div>
        <div class="box_bg5"></div>
    </div>
</div>

<?php require_once '_footer.ctp';?>

<div class="popRight">
    <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
    <span></span>
    <div class="downLink">
        <a href="<?php echo GET_BLOCK('ios_download_url');?>" target="_self"></a>
        <a href="<?php echo GET_BLOCK('android_download_url');?>" target="_self"></a>
        <a href="<?php echo GET_BLOCK('kefu_phone');?>" target="_self"></a>
    </div>
    <img class="snx" src="<?php echo GET_BLOCK('game_snx');?>" />
    <span class="snx_span"></span>
    <div class="text_0124"><?php echo GET_BLOCK('qrcode_text');?></div>
</div>
<div class="mask"></div>

<div class="pic_slide">
    <a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="<?php FILE_PATH() ?>/images/loading.gif" width="32" height="32"></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
    <ul class="slide_content">
    </ul>
    <div class="bottom">
        共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<?php echo GET_BLOCK('bootPage');?>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php FILE_PATH() ?>/js/jquery-1.11.3.min.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/pic-slide.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/swiper.jquery.min.js" type="text/jscript"></script>
<script type="text/javascript">
    $('.goHome').on('click',function(){
        $('.bootPage').hide();
    })
    //焦点图
    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});

    jQuery(".slideNewsBox").slide();

    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'vertical',
        loop: true,
        autoplay : 2000,
        autoplayDisableOnInteraction : false,
        // 如果需要分页器
        pagination: '.swiper-pagination',

        // 如果需要前进后退按钮
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        onSlideChangeStart: function(swiper){
            $('.banner_bg2 .banner_text h3').removeClass('active');
            $('.banner_bg2 .banner_text h3').eq(swiper.activeIndex-($('.banner_bg2 .banner_text h3').length+1)).addClass('active');

        }
    })  ;

    var swiper = new Swiper('.swiper-tese', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        pagination: '.swiper-pagination2',
        loop : true,
        nextButton: '.swiper-button-next2',
        prevButton: '.swiper-button-prev2',
        coverflow: {
            rotate: 25,
            stretch: 150,
            depth: 150,
            modifier: 1,
            slideShadows : true
        },
    });
    $('.newsTab li').on('click',function(){
        if($(this).index() < $('.newsTab li').length-1){
            $('.newsTab li').removeClass('active');
            $('.newsTab li').eq($(this).index()).addClass('active');
            $('.newsBox .box').removeClass('active');
            $('.newsBox .box').eq($(this).index()).addClass('active');
        }
    })
    window.onscroll=window.onresize = function() {
        var seeHeight = document.documentElement.clientHeight;
        var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        if (Math.floor($('.main1').offset().top+180) < (Math.floor(seeHeight) + Math.floor(scrollTop))) {
            // alert(2)
            $('.title_bg2').animate({'top':'112px',opacity:1},600,function(){
                $('.banner_bg2').animate({"top":"216px",opacity:1},1600);
                $('.newsBox').animate({"top":"266px",opacity:1},700,function(){
                    $('.newsBox .newsTab').animate({"bottom":"-69px",opacity:1},1000);
                    $('.box_bg2').animate({"top":"228px",opacity:1},1000);
                });
            });
        }
        if(Math.floor($('.main2').offset().top+180) < (Math.floor(seeHeight) + Math.floor(scrollTop))){
            $('.title_bg3').animate({'top':'136px',opacity:1},600,function(){
                $('.box_bg3').animate({'top':'269px',opacity:1},600,function(){

                });
                setTimeout(function() {
                    $('.sliderBox').animate({"bottom":"180px",opacity:1},1000);
                }, 300);
            });
        }
        if(Math.floor($('.main3').offset().top+180) < (Math.floor(seeHeight) + Math.floor(scrollTop))){
            $('.title_bg4').animate({'top':'136px',opacity:1},600,function(){
                $('.box_bg4').animate({'top':'530px',opacity:1},600,function(){

                });
                setTimeout(function() {
                    $('.newsBox3').animate({"top":"326px",opacity:1},1000,function(){
                        $('.newsBox3 .add').animate({"top":"-69px",opacity:1},1000);
                        $('.newsBox3 .main3_img').animate({opacity:1},1600);
                    });
                }, 300);
            });
        }
        if(Math.floor($('.main4').offset().top+180) < (Math.floor(seeHeight) + Math.floor(scrollTop))){
            $('.title_bg5').animate({'top':'180px',opacity:1},600,function(){
                $('.box_bg5').animate({'top':'304px',opacity:1},600,function(){

                });
                setTimeout(function() {
                    $('.newsBox4').animate({"bottom":"156px",opacity:1},1000,function(){
                        $('.newsBox4 .add').animate({"bottom":"-69px",opacity:1},1000);
                    });
                }, 300);
            });
        }
    };
    /*五屏切换*/
    $(".slide").find("li").click(function(){
        if($(this).hasClass("cur")){return false;}
        var li = $(this);
        sibling = li.siblings();
        li.find("p").fadeOut(200,function(){
            li.animate({"width":"614px"},500,function(){
                li.addClass("cur");
            });
            sibling.animate({"width":"195px"},500,function(){
                sibling.removeClass("cur");
                sibling.find("p").fadeIn(200);
            });
        });
    });

    //微信
    var wxin_dl = $(".wxin");
    var wxin_pd = $(".wxin_pop");
    var qqun_dl = $(".qqun");
    var qqun_pd = $(".qq_pop");
    wxin_dl.hover(function() {
        wxin_pd.addClass("wxin_pop_show");
    }, function() {
        wxin_pd.removeClass("wxin_pop_show");
    });
    qqun_dl.hover(function() {
        qqun_pd.addClass("wxin_pop_show");
    }, function() {
        qqun_pd.removeClass("wxin_pop_show");
    });

    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.mask').show();
        $('.s_p_k').show();
    })

    $('.close').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.gift_pop').hide();
        $('.pic_slide').hide();
        $('.mask').hide();
    })
</script>
</body>
</html>
