<?php
//引入WebsiteHelper
$this->Website->init();

$time = time();
$siteId = $GLOBALS['site_id'];

$defaultNum = 0; //预约数累加
//start_time=1508922410##minute_num=0##default_num=20000
//累加逻辑
$numInc = explode('##', GET_BLOCK('yuyue_num_inc'));
$startTime = explode('=', $numInc[0]);
$endTime = explode('=', $numInc[1]);
$minuteIncNum = explode('=', $numInc[2]);
$defaultIncNum = explode('=', $numInc[3]);
//按start_time计算时间间隔，然后按每分钟的规则递增预约数
if ($startTime[1] > 0 && $minuteIncNum[1] > 0) {
    if ($endTime[1] <= 0 || $endTime >= $time) {
        $minuteCount = ($time - $startTime[1]) / 60;
        $defaultNum += intval($minuteIncNum[1] * $minuteCount);
    }
}
//额外增加
$defaultNum += intval($defaultIncNum[1]);
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=GET_BLOCK('web_title');?></title>
    <meta name="description" content="<?=GET_BLOCK('web_description');?>" />
    <meta name="keywords" content="<?=GET_BLOCK('web_keywords');?>"/>
    <link href="<?php BASE_URL() ?>css/reset.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico?var=1">
</head>

<body>
   <!-- Swiper -->
<div id="index" class="swiper-container swiper-no-swiping">
    <div class="swiper-wrapper t05s">
        <div class="swiper-slide p1" id="scene">
            <img src="<?php BASE_URL() ?>images/p1.jpg" alt="p1">
            <img class="posImg p1_1 t08s" src="<?php BASE_URL() ?>images/p1_1.png" alt="">
            <img class="posImg p1_2 t08s" src="<?php BASE_URL() ?>images/p1_2.png" alt="">
            <img class="posImg p1_3 t08s" src="<?php BASE_URL() ?>images/p1_3.png" alt="">
            <a href="javascript:void(0);" name="<?php echo GET_BLOCK('mobile_index_video');?>" title="播放精彩视频" class="posImg p1_4 t08s video_btn_link"><img src="<?php BASE_URL() ?>images/video_bg2.png" alt=""></a>
        </div>
        <div class="swiper-slide">
            <img src="<?php BASE_URL() ?>images/p2.jpg" alt="p2">
            <img class="posImg p2_bg t08s" src="<?php BASE_URL() ?>images/p2_bg.png" alt="">
            <img class="posImg2 p2_1 t08s" src="<?php BASE_URL() ?>images/p2_1.png" alt="">
            <img class="posImg p2_2 t08s" src="<?php BASE_URL() ?>images/p2_news.png" alt="">
            <div class="news">
                <div id="banner1" class="swiper-container banner">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="javascript:void(0);"><img width="669" height="289" src="<?php BASE_URL() ?>images/banner1.jpg" alt="banner"></a></div>-->
                        <?php
                            SHOW_DATAS('<div class="swiper-slide"><a href="javascript:void(0);"><img width="669" height="289" src="@@STR2@@" alt="banner"></a></div>',
                            'Y-m-d',0);
                         ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
                <div class="newsBox">
                    <div class="newsMenu">
                        <div class="on">综合</div>
                        <div>新闻</div>
                        <div>公告</div>
                        <div>活动</div>
                        <div>攻略</div>
                        <a target="_blank" href="//jdzj.uu.cc/news/1.html"></a>
                    </div>
                    <div class="count off">
                        <ul>
                            <!--<li><a href="javascript:void(0);" ><span>新闻</span><p>1攻略攻略攻略攻略攻略</p><i>2018-05-12</i></a></li>-->
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>@@CATEGORY_NAME@@</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('新闻','公告','活动','攻略'),5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>@@CATEGORY_NAME@@</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','新闻',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>@@CATEGORY_NAME@@</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','公告',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>@@CATEGORY_NAME@@</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','活动',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>@@CATEGORY_NAME@@</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','攻略',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="<?php BASE_URL() ?>images/p3.jpg" alt="p3">
            <img class="posImg p3_bg t08s" src="<?php BASE_URL() ?>images/p3_bg.png" alt="">
            <img class="posImg2 p3_1 t08s" src="<?php BASE_URL() ?>images/p3_1.png" alt="">
            <div class="fighter">
                <img src="<?php BASE_URL() ?>images/p3_2.png" alt="" usemap="#area">
                <map id="area" name="area">
                    <area shape="poly" coords="1,334, 41,263, 123,263, 164,334, 123,405, 41,405, 1,334" href="javascript:alert('敬请期待！');" alt="战机">
                    <area shape="poly" coords="712,334, 753,263, 835,263, 876,334, 835,405, 753,405, 712,334" href="javascript:alert('敬请期待！');" alt="查看更多">

                    <area shape="poly" coords="120,222, 182,115, 307,115, 369,222, 307,330, 182,330, 120,222" href="javascript:alert('敬请期待！');" alt="">
                    <area shape="poly" coords="510,222, 572,115, 697,115, 759,222, 697,330, 572,330, 510,222" href="javascript:alert('敬请期待！');" alt="">

                    <area shape="poly" coords="120,447, 182,340, 307,340, 369,447, 307,555, 182,555, 120,447" href="javascript:alert('敬请期待！');" alt="">
                    <area shape="poly" coords="510,447, 572,340, 697,340, 759,447, 697,555, 572,555, 510,447" href="javascript:alert('敬请期待！');" alt="">
                    
                    <area shape="poly" coords="313,109, 376,2, 500,2, 563,109, 500,217, 376,217, 313,109" href="javascript:alert('敬请期待！');" alt="">
                    <area shape="poly" coords="313,335, 376,228, 500,228, 563,335, 500,443, 376,443, 313,335" href="javascript:alert('敬请期待！');" alt="">
                    <area shape="poly" coords="313,561, 376,454, 500,454, 563,561, 500,669, 376,669, 313,561" href="javascript:alert('敬请期待！');" alt="">
                </map>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="<?php BASE_URL() ?>images/p4.jpg" alt="p4">
            <img class="posImg p4_bg t08s" src="<?php BASE_URL() ?>images/p4_bg.png" alt="">
            <img class="posImg2 p4_1 t08s" src="<?php BASE_URL() ?>images/p4_1.png" alt="">
            <img class="posImg2 p4_2 t08s" src="<?php BASE_URL() ?>images/p4_video.png" alt="">
            <div class="videoCenter">
                <div class="title">
                    <span class="active">宣传片 <i></i></span>
                    <span>游戏攻略<i></i></span>
                    <span>游戏直播<i></i>  </span>
                    <a target="_blank" href="//jdzj.uu.cc/vediocenter/2_1.html" >更多</a>
                </div>
                <div class="videoBox off">
                    <?php
                        // SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',3,4,3,array('OrderBy' => 'created desc'));
                        SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img width="357" height="214" src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',2,4);
                    ?>
                </div>
                <div class="videoBox">
                    <?php
                        SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img width="357" height="214" src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',3,4);
                    ?>
                </div>
                <div class="videoBox">
                    <?php
                        SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img width="357" height="214" src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',4,4);
                    ?>
                </div>
            </div>
        </div>
        <!--<img src="<?php BASE_URL() ?>images/all_bg.jpg" alt="大背景" class="all_bg">-->
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>
    <div class="swiper-nav">
        <h1 class="logo"><img src="<?php BASE_URL() ?>images/logo.png" alt="logo"></h1>
        <div class="tabList">
            <a href="javascript:void(0);" class="active">官网首页</a>
            <a href="javascript:void(0);">新闻中心</a>
            <a href="javascript:void(0);">飞 机 场</a>
            <a href="javascript:void(0);">视频中心</a>
        </div>
        <div class="download">
            <div class="qrCode">
                <div><img width="125" height="125" src="<?php echo GET_BLOCK('game_download_qrcode');?>" alt=""></div>
            </div>
            <p>[ 扫码下载游戏 ]</p>
            <a href="<?php echo GET_BLOCK('ios_download_url');?>"><img src="<?php BASE_URL() ?>images/appStore.png" alt="ios"></a>
            <a href="<?php echo GET_BLOCK('android_download_url');?>"><img src="<?php BASE_URL() ?>images/an.png" alt="安卓"></a>
        </div>
    </div>
</div>
<?php require_once 'footer.ctp';?>
<ul class="topRight">
    <li class="weixin">
        <a href="javascript:void(0);"><img src="<?php BASE_URL() ?>images/weixin.png" alt="公众号"></a>公众号
        <div class="qrCode">
            <img width="125" height="125" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="">
            扫码关注公众号
        </div>
    </li>
    <li><a target="_blank" href="http://bbs.uu.cc/forum-696-1.html"><img src="<?php BASE_URL() ?>images/luntan.png" alt="论坛"></a>论坛</li>
    <li><a target="_blank" href="https://weibo.com/u/6530201935?refer_flag=1001030103_"><img src="<?php BASE_URL() ?>images/weibo.png" alt="微博"></a>微博</li>
    <li><a target="_blank" href="<?php echo GET_BLOCK('qq_link');?>"><img src="<?php BASE_URL() ?>images/qq.png" alt="QQ群"></a>QQ群</li>
</ul>
<!-- Swiper JS -->
<div class="mask"></div>
<div class="s_p_k"><video width="443" style="background:#000;" height="720" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script src="<?php BASE_URL() ?>js/jquery-1.9.1.min.js"></script>
<script src="<?php BASE_URL() ?>js/jquery.mousewheel.js"></script>
<script>
$(document).ready(function(){
    var swiper = new Swiper('#index', {
        slidesPerView: 'auto',
        freeMode: true,
        freeModeMomentumRatio : 1,
        // observer:true,
        // observeParents:true, 
    });
    // 最新资讯 banner
    var mySwiper =  new Swiper('#banner1',  {
        autoplay:3000,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:1000,//滚动速度
        pagination: '.swiper-pagination1',
    });
    // console.log($(window).width(), $(window).height(), 1920);
    $('#index').css('transform', 'scale(' + (($(window).width()) / 1920) + ')');
    $(window).on('resize', function() {
        $('#index').css('transform', 'scale(' + (($(window).width()) / 1920) + ')');
        // var number = swiper.wrapper.css("transform").replace(/[^0-9\-,]/g,'').split(',')[4];
        swiper.wrapper.css({
                transform:'translate3d(-'+(number)+'px, 0px, 0px)',
            });
    });
    // 新聞切換
    var aA = $('.news .newsMenu div')
    aA.on('click',function(){
        aA.removeClass('on');
        $(this).addClass('on');
        $('.news .newsBox .count').removeClass('off');
        $('.news .newsBox .count').eq($(this).index()).addClass('off');
    })
    // 视频切换
    var aSpan = $('.videoCenter .title span')
    aSpan.on('click',function(){
        aSpan.removeClass('active');
        $(this).addClass('active');
        $('.videoCenter .videoBox').removeClass('off');
        $('.videoCenter .videoBox').eq($(this).index()).addClass('off');
    })
    /* 图层的滚动范围  这个是重中之重... */
    function parallaxScroll(number,mun2){ 
        // var scrolled = $('#box').scrollTop();
        var initVal = 324;
        if(number<mun2){
            $('.swiper-slide .p1_1').css('left',((number*.66)+initVal)+'px');
            $('.swiper-slide .p1_2').css('left',((number*.4)+initVal)+'px');
            $('.swiper-slide .p1_3').css('left',((number*.7)+initVal)+'px');
            $('.swiper-slide .p1_4').css('left',((number*.2)+initVal)+'px');
        }
        if(number<1920*2){
            initVal = 224;
            $('.swiper-slide .p2_bg').css('left',((number*.1)+50)+'px');
            $('.swiper-slide .p2_1').css('left',((number*.2))+'px');
        }
        if(number>1920 && number<1920*3){
            $('.swiper-slide .p3_bg').css('left',(((number-1920)*.05)-20)+'px');
            $('.swiper-slide .p3_1').css('left',(((number-1990)*.3)+420)+'px');
        }
        // console.log(number)
        if(number>3840 && number<1920*3){
            $('.swiper-slide .p4_bg').css('left',(((number-1920*2)*.08)+400)+'px');
            $('.swiper-slide .p4_1').css('left',(((number-1920*2)*.12))+'px');
        };
    };

    var number = 0;
    $('#index').mousewheel(function(event, delta) {
        // var number = swiper.wrapper.css("transform").replace(/[^0-9\-,]/g,'').split(',')[4];
        if(number < 0 )number=0;
        if(number > 5760 )number=5760;
        // console.log(number)
        var dir = delta > 0 ? 'Up' : 'Down';
        if(number>=0 && number<=5760){
            if (dir == 'Up') {
                number =number- 100;
                if(number < 0 )number=0;
                // console.log(number,'向左滚动')
                // swiper.wrapper.css({
                $('.t05s').css({
                    transition: 'all 0.5s ease-out',
                    transform:'translate3d(-'+(number)+'px, 0px, 0px)',
                });
                parallaxScroll(number,1600);
            } else {
                number =number + 100;
                if(number > 5760 )number=5760;
                // console.log(number,'向右滚动');
                $('.t05s').css({
                    transition: 'all 0.5s ease-out',
                    transform:'translate3d(-'+(number)+'px, 0px, 0px)',
                });
                parallaxScroll(number,1600);
            }
        }
        // 
        $('.tabList a').removeClass('active');
        $('.tabList a').eq(Math.floor(number/1920)).addClass('active');
        return false;

    });

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        if(vedioSrc){
            $('.s_p_k video').attr('src',vedioSrc);
            $('.mask,.s_p_k').show();
        }else{
            alert('敬请期待！')
        }
    });
    $(".close,.mask").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.mask').hide();
        e.stopPropagation();
    });
    // 微信二维码显示隐藏
    var wxin = $('.topRight .weixin');
    var oQrCode = $('.topRight .qrCode');
    wxin.hover(function() {
        oQrCode.addClass("on");
    }, function() {
        oQrCode.removeClass("on");
    });
    
    $('.tabList a').on('click', function() {
        $('.tabList a').removeClass('active');
        $(this).addClass('active');
        number = 1920*$(this).index();
        $('.t05s').css({
            transition: 'all 0.5s ease-in',
            transform:'translate3d(-'+number+'px, 0px, 0px)',
        });
        parallaxScroll(number,1600);
    });
})
</script>

</body>
</html>