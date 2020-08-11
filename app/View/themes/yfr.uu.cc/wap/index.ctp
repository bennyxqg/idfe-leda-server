<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="baidu-site-verification" content="w8PW4Csvlk" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?v=1"  />

</head>

<body>
<div id="content">
    <?php require_once 'top.ctp';?>
    <div class="pr main1">
        <a class="downlaod" href="/download"></a>
    </div>
    <div class="main2">
        <div class="wrap">
            <div class="swiper-news-banner">
                <div class="swiper-wrapper">
                <?php
                    SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href="@@STR1@@"><img src="@@STR2@@" /></a></div>',
                    // SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href="@@STR1@@"><img src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" /></a></div>',
                    'Y-m-d',3,6);
                    ?>
                </ul>
                </div>
                <div class="swiper-pagination swiper-pagination1"></div>
            </div>
            <div class="title"><img src="<?php BASE_URL() ?>images/title1.png" alt=""></div>
            <div class="news-tabs">
                <a class="active" href="javascript:;">最新资讯</a>
                <a href="javascript:;">新闻</a>
                <a href="javascript:;">活动</a>
                <a href="javascript:;">公告</a>

                <span href="/news/1.html" class="more">MORE+</span>
            </div>
            <div id="news-tabs-container" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d',array('新闻','活动','公告'),5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','新闻',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','活动',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','公告',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
            <!--<a name="main3" id="main3"></a>
            <a class="more" href="/news/1.html">查看更多 ></a>-->
        </div>
    </div>

    <div class="main3" id="main3">
        <div class="wrap">
            <!--<div class="item-tit"><img src="<?php BASE_URL() ?>images/title1.png"></div>-->
            <div class="title"><img src="<?php BASE_URL() ?>images/title3.png" alt=""></div>
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <!--<div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/home.png)"></div>-->
                    <?php
                        // SHOW_DATAS('<div class="swiper-slide" style="background-image:url(http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg)"></div>',
                        SHOW_DATAS('<div class="swiper-slide" style="background-image:url(@@STR2@@)"></div>',
                        'Y-m-d',4,4);
                     ?>
                </div>
            </div>
        </div>
    </div>

    <div class="main4">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>images/title4.png" alt=""></div>
            <a href="/vediocenter/1.html" class="more">MORE+</a>
            <ul class="link_box">
                <?php
                    // SHOW_DATAS('<li><a class="video_btn" name="@@STR1@@"><img src="@@STR2@@" width="196" height="196" /></a><p>@@STR3@@</p></li>',
                    SHOW_DATAS('<li><img src="@@STR2@@" alt=""><p>@@STR3@@</p></li>',
                    // SHOW_DATAS('<li><img src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" alt=""><p>@@STR3@@</p></li>',
                    'Y-m-d',2,6,$page);
                ?>
                <!--<li><img src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" alt=""><p>合理安排时间</p></li>-->
            </ul>
            <!--<div class="video-list clearfix">
                <ul>
                    <?php
                    // SHOW_DATAS('<li class="big"><a class="video_btn_link" href="javascript:;" name="@@STR1@@"><img src="@@STR2@@" /></a></li>',
                    SHOW_DATAS('<li class="big"><a class="video_btn_link" href="javascript:;" name="@@STR1@@"><img src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" /></a></li>',
                    'Y-m-d',1,1,1);
                    ?>
                </ul>
            </div>-->
        </div>
    </div>

    <div class="main5">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>images/title5.png" alt=""></div>
            <a href="javascript:;" class="video_box video_btn_link" name="<?=GET_BLOCK('video_link');?>">
                <img src="<?=GET_BLOCK('video_bg');?>" alt=""><div class="layer"></div>
            </a>
        </div>
    </div>
</div>

<?php require_once 'footer.ctp';?>
<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script>

$(document).ready(function(){
    
    //游戏特色
    var swiper = new Swiper('.swiper-tese', {
        pagination: '.swiper-pagination-tese',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop : true,
        coverflow: {
            rotate: 0,
            stretch: 0,
            depth: 326,
            modifier: 1,
            slideShadows : true
        }
    });
    //新闻列表
    var tabsSwiper = new Swiper('#news-tabs-container',{
        speed:500,
        effect:'left',
        onSlideChangeStart:function(){
          $(".news-tabs .active").removeClass('active')
          $(".news-tabs a").eq(tabsSwiper.activeIndex).addClass('active')
        }
    });
    var swiper = new Swiper('.swiper-news-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        loop: true
    });
    $(".news-tabs a").on('touchstart mousedown',function(e){
        e.preventDefault()
        $(".news-tabs .active").removeClass('active')
        $(this).addClass('active')
        tabsSwiper.slideTo( $(this).index() )
        })
        $(".news-tabs a").click(function(e){
        e.preventDefault()
    });

    //GOTOP
    $("#toTop").click(function() {
       $("body,html").animate({scrollTop:0},800);
    });

    //版权自动年份
    var d = new Date()
    $('.copy-year').html(d.getFullYear())
    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao,.s_p_k').show();
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });

})
</script>
</body>
</html>
