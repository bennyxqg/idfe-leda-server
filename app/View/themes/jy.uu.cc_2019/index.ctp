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
<link href="<?php FILE_PATH() ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php FILE_PATH() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>/css/lightbox.css" />
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>

<?php require_once '_top.ctp';?>
<div id="index" >
    <div class="banner">
        <div class="wrap">
            <!--<div class="time_tit" style="background: url(<?php echo GET_BLOCK('title_img');?>/images/title.png) no-repeat center;"></div>-->
            <div class="time_tit" style="background: url(<?php FILE_PATH() ?>/images/title_g.png) no-repeat center;"></div>
            <a href="<?=GET_BLOCK('android_download_url');?>" class="down_btn"></a>
        </div>
    </div>

    <div class="main1">
        <div class="wrap">
            <div class="title"><img src="<?php FILE_PATH() ?>/images/bg1_title.png" alt=""></div>
            <div class="news">
                <div id="banner1" class="swiper-container banner1">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="JavaScript:void(0);"><img width="555" height="321" src="<?php BASE_URL() ?>images/gBanner1.jpg" alt="banner"></a></div>-->
                        <?php
                            SHOW_DATAS('<div class="swiper-slide"><a href="JavaScript:void(0);"><img width="580" height="322" src="@@STR2@@" alt="@@STR1@@"></a></div>',
                            'Y-m-d',0);
                            ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
                <div class="newsList">
                    <div class="newsMenu">
                        <div class="on">最新</div>
                        <div>资讯</div>
                        <div>攻略</div>
                        <a href="//jy.uu.cc/news/1.html"><img src="<?php FILE_PATH() ?>/images/more.png" alt=""></a>
                    </div>
                    <div class="count off">
                        <ul>
                            <!--<li><a href="javascript:void(0);" ><span>【新闻】</span><p>1攻略攻略攻略攻略攻略</p><i>05/12</i></a></li>-->
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('资讯','攻略'),6,0,array('LimitFrom'=>0));
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

    <div class="main2">
        <div class="wrap">
            <img class="parrot translate_5" src="<?php FILE_PATH() ?>/images/parrot.png" alt="">
            <div class="title"><img src="<?php FILE_PATH() ?>/images/bg2_title.png" alt=""></div>
            <div class="sliderBox">
                <div class="swiper-tese">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="javascript:;"><img src="<?php FILE_PATH() ?>/images/banner_bg.png" width="610" height="340"><h3>adgjsagj</h3></a></div>-->
                        <?php
                            SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;"><img src="@@STR2@@" width="610" height="340"></a></div>',
                            'Y-m-d',6,12);
                        ?>
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination2"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev2 zoom"></div>
                <div class="swiper-button-next2 zoom"></div>
            </div>
            <div class="box_bg3"></div>
            <div class="title_bg3"></div>
        </div>
    </div>

    <div class="main3">
        <div class="wrap">
            <div class="title"><img src="<?php FILE_PATH() ?>/images/bg3_title.png" alt=""></div>
            <div class="newsBox3">
                <div class="box">
                    <?php
                        SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('攻略'),6,0);
                    ?>
                </div>
                <a href="//jy.uu.cc/news/1.html" class="add">+</a>
                <div class="main3_img"><img width="316" height="483" src="<?php echo GET_BLOCK('Strategy_img');?>"></div>
            </div>
            <div class="title_bg4"></div>
            <div class="box_bg4"></div>
        </div>
    </div>

    <div class="main4">
        <div class="wrap">
            <img class="duck translate_5" src="<?php FILE_PATH() ?>/images/duck.png" alt="">
            <div class="title"><img src="<?php FILE_PATH() ?>/images/bg4_title.png" alt=""></div>
            <a href="/vediocenter/1.html" class="more"><img src="<?php FILE_PATH() ?>/images/more.png" alt=""></a>
            <div class="newsBox4">
                <div class="btn_list">
                    <div class="on">影音</div>
                    <div>图片</div>
                    
                </div>
                <ul class="on">
                <?php
                        SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /><div></div></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                        'Y-m-d',1,3);
                    ?>
                </ul>
                <ul>
                    <!--<li><a href="<?php FILE_PATH() ?>/images/banner_bg.png" data-lightbox="img-group1">
                        <img src="<?php FILE_PATH() ?>/images/banner_bg.png" width="329" height="212" /><p>ASDFASDF</p></a></li>-->
                    <?php
                        // SHOW_DATAS('<li><a href="@@STR2@@" data-lightbox="img-group1"><img src="@@STR1@@" /><p>@@LABEL@@</p></a></li>','Y-m-d',5,100);
                        // SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                        SHOW_DATAS('<li><a href="@@STR4@@" data-lightbox="img-group1"><img src="@@STR2@@" width="329" height="212" /><p>@@STR3@@</p></a></li>',
                        'Y-m-d',2,3);
                    ?>
                </ul>
            </div>
            <div class="box_bg5"></div>
        </div>
    </div>
</div>
<?php require_once 'footer.ctp';?>
<?php require_once 'left.ctp';?>

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

<div class="mask"></div>
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<!--<script src="<?php FILE_PATH() ?>/js/jquery-1.9.1.js" type="text/jscript"></script>-->
<script src="<?php BASE_URL() ?>/js/lightbox-2.6.min.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/swiper.jquery.min.js" type="text/jscript"></script>
<script type="text/javascript">
    // 最新资讯 banner
    var mySwiper =  new Swiper('.swiper-container',  {
        autoplay:3000,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:1000,//滚动速度
        pagination: '.swiper-pagination1',
    });

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
            rotate: 0,
            stretch: 150,
            depth: 200,
            modifier: 1,
            slideShadows : true
        },
    });
    // 新闻切换
    var aA = $('.news .newsMenu div')
    aA.on('click',function(){
        aA.removeClass('on');
        $(this).addClass('on');
        $('.news .newsList .count').removeClass('off');
        $('.news .newsList .count').eq($(this).index()).addClass('off');
    });
    // 视频图片切换
    var aBtn = $('.btn_list div')
    aBtn.on('click',function(){
        aBtn.removeClass('on');
        $(this).addClass('on');
        $('.newsBox4 ul').removeClass('on');
        $('.newsBox4 ul').eq($(this).index()).addClass('on');
    });

    $('.newsTab li').on('click',function(){
        if($(this).index() < $('.newsTab li').length-1){
            $('.newsTab li').removeClass('active');
            $('.newsTab li').eq($(this).index()).addClass('active');
            $('.newsBox .box').removeClass('active');
            $('.newsBox .box').eq($(this).index()).addClass('active');
        }
    });
    

    
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

    


    

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.mask').show();
        $('.s_p_k').show();
    });

    $('.close').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.gift_pop').hide();
        $('.pic_slide').hide();
        $('.mask').hide();
    });
</script>
</body>
</html>
