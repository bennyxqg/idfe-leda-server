
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
    <link href="<?php FILE_PATH() ?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php FILE_PATH() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php FILE_PATH() ?>/200.png">
</head>

<body>
    
    <div class="banner_box">
        <div class="wrap">
            <a class="logo" href="javascript:;"></a>
            <div class="banner_title">
                <div class="box">
                    <div class="img rotate">
                        <img src="<?php BLOCK('game_download_qrcode') ?>" width="150" height="150" alt="">
                        <p>扫码下载游戏</p>
                    </div>
                    <a class="btn rotate" href="<?php BLOCK('android_download_url') ?>"></a>
                    <a class="btn rotate" href="<?php BLOCK('ios_download_url') ?>"></a>
                </div>
            </div>
            <a class="video_btn vedio_box" href="javascript:;" name="<?php echo GET_BLOCK('banner_video');?>"></a>
        </div> 
    </div>
    <div id="main1" class="main1">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>/images/m1_title.png" alt=""></div>
            <div class="news">
                <div id="banner1" class="swiper-container banner">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="JavaScript:void(0);"><img width="555" height="321" src="<?php BASE_URL() ?>images/gBanner1.jpg" alt="banner"></a></div>-->
                        <?php
                            SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href="@@STR1@@"><img width="584" height="314" src="@@STR2@@" alt="banner"></a></div>',
                            'Y-m-d',0);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination1">
                        <?php
                            SHOW_DATAS('<span class="swiper-pagination-bullet">1</span>',
                            'Y-m-d',0);
                         ?>
                    </div>
                </div>
                <div class="newsList">
                    <div class="newsMenu">
                        <div class="on">最新</div>
                        <div>公告</div>
                        <div>资讯</div>
                        <div>攻略</div>
                        <a href="//bs.uu.cc/news/1.html"></a>
                    </div>
                    <div class="count off">
                        <ul>
                            <!--<li><a href="javascript:void(0);" ><span>【新闻】</span><p>1攻略攻略攻略攻略攻略</p><i>05/12</i></a></li>-->
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','Y/m/d',array('公告','资讯','攻略'),6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','公告',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','资讯',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','攻略',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div> 

    <!--<div id="main2" class="main2">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>/images/m2_title.png" alt=""></div>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>/images/role1.png" alt=""></div>

    <div class="main2">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>/images/m2_title.png" alt=""></div>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>/images/role1.png" alt=""></div>-->

     <div class="main2" id="main3">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>/images/m2_title.png" alt=""></div>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                <?php
                    SHOW_DATAS('<div class="swiper-slide"><img src="@@STR2@@" alt=""></div>','Y-m-d',1);
                ?>
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>

            <div class=" gallery-thumbs">
            <?php
                SHOW_DATAS('<div class="slide active"><img src="@@STR3@@" width="100%" alt=""></div>','Y-m-d',1);
            ?>
            </div>
        </div>
    </div>
    
    <div id="main2" class="main3">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>/images/m3_title.png" alt=""></div>
            <div class="video_box">
                <div class="left">
                    <?php
                        $html = '<a class="vedio_box video1" href="javascript:;" name="@@str2@@">
                             <img width="406" height="266" src="@@str3@@" alt="">
                             <span class="video_btn"></span></a><h3>@@str1@@</h3>';
                        SHOW_DATAS($html,'Y-m-d',3, 1);
                    ?>
                </div>
                <div class="right">
                   <?php
                        $html = '<a class="vedio_box video2" href="javascript:;" name="@@str2@@">
                                    <img width="340" height="160" src="@@str3@@" alt="">
                                    <span class="video_btn"></span>
                                    <div class="layer"></div>
                                    <h3>@@str1@@</h3>
                                    </a> ';
                        SHOW_DATAS($html,'Y-m-d',2);
                   ?>

                </div>
            </div>
            <div id="main4" class="foot">
                <div class="box" style="margin-left:17px;">
                    <img src="<?php BLOCK('weixin_qrcode') ?>" width="138" height="138" alt="">
                </div>
                <div class="box">
                    <a href="<?php BLOCK('weibo_url') ?>"><img src="<?php BLOCK('weibo_qrcode') ?>" width="138" height="138" alt=""></a>
                </div>
                <div class="box" style="margin-left:106px;">
                    <p><?php BLOCK('qq_jump') ?></p>
                </div>
                <div class="box">
                    <p><?php BLOCK('kefu_qq') ?></p>
                </div>
            </div>
        </div> 
    </div>     
    <?php require_once '_footer.ctp';?>
    <div class="pop">
        <a class="on" href="#main1"> <p>游戏资讯</p> </a>
        <a class="scale" href="#main2"> <p class="scale">角色图鉴</p>  </a>
        <a class="" href="#main3"> <p>游戏视频</p>  </a>
        <a class="scale" href="#main4"> <p class="scale">联系我们</p>  </a>
    </div>
    <div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<script type="text/javascript" src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>/js/swiper.jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // 最新资讯 banner
        var mySwiper =  new Swiper('#banner1',  {
            autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            speed:1000,//滚动速度
            pagination: '.swiper-pagination1',
        });

        var galleryTop = new Swiper('.gallery-top', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 10,
            // loop:true,//循环
            onSlideChangeEnd: function(swiper){
                // alert(swiper.activeIndex) //切换结束时，告诉我现在是第几个slide
                $('.gallery-thumbs .slide').removeClass('active');console.log(swiper.activeIndex,$('.gallery-thumbs .slide').length)
                $('.gallery-thumbs .slide').eq((swiper.activeIndex)%(swiper.activeIndex,$('.gallery-thumbs .slide').length)).addClass('active');
            }
        });
        // 导航tab
        var aPop = $('.pop a');
        aPop.on('click',function(){
            aPop.removeClass('on');
            $(this).addClass('on');
        });
        $('.gallery-thumbs .slide').removeClass('active');
        $('.gallery-thumbs .slide').eq(0).addClass('active');
        $('.gallery-thumbs .slide').on('click',function(){
            galleryTop.slideTo($(this).index()); 
            $('.gallery-thumbs .slide').removeClass('active');
            $('.gallery-thumbs .slide').eq($(this).index()).addClass('active');
        });
        //页面视频
        $('.vedio_box').click(function(){
            var vedioSrc = this.name;
            $('.s_p_k video').attr('src',vedioSrc);
            $('.zhezao').show();
            $('.s_p_k').show();
        })
        $('.close,.zhezao').click(function(){
            $('.s_p_k video').attr('src','');
            $('.s_p_k').hide();
            $('.pop-yuyue').hide();
            $('.zhezao').hide();
        });
        // 新闻tab
        var aA = $('.news .newsMenu div');
        aA.on('click',function(){
            aA.removeClass('on');
            $(this).addClass('on');
            $('.news .newsList .count').removeClass('off');
            $('.news .newsList .count').eq($(this).index()).addClass('off');
        });
    });

</script>  
</body>
</html>

