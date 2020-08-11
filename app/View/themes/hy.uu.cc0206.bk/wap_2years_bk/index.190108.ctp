<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--<meta name="baidu-site-verification" content="w8PW4Csvlk" />-->
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?var=asadsfafa"  />
<style type="text/css">
    <?php echo GET_BLOCK('ydy_style');?>
</style>

</head>

<body>
<div id="content" style="<?php echo GET_BLOCK('m_banner_bg');?>">
    <div class="top">
        <div class="logo">
            <img src="<?php echo GET_BLOCK('game_icon');?>" />
            <?php echo GET_BLOCK('mobile_top_title');?>
        </div>
        <a href="http://hy.uu.cc/download" class="top_download"></a>
        <div class="menu-bg"></div>
        <div class="menu">
            <ul>
                <li><a href="//hy.uu.cc">官网首页</a></li>
                <li><a href="//hy.uu.cc/news/98.html">新闻中心</a></li>
                <li><a href="#main3">游戏特色</a></li>
                <li><a href="//hy.uu.cc/images/1/1.html">游戏视频</a></li>
                <li><a href="https://tieba.baidu.com/f?kw=%E6%A2%A6%E5%B9%BB%E8%8A%B1%E5%9B%AD&fr=home">百度贴吧</a></li>
                <li><a href="#main6">截图&壁纸</a></li>
            </ul>
        </div>
        <div class="burger">
            <div class="x"></div>
            <div class="y"></div>
            <div class="z"></div>
        </div>
    </div>
    <div class="pr main1">
        <!--<a href="javascript:void(0);" class="myd_text"></a>-->
        <?php echo GET_BLOCK('phone_btn');?>
    </div>
    <!--<div class="main1_">
        <div class="box"></div>
    </div>-->
    <div class="main2">
        <div class="wrap">
            <!--<div class="item-tit"><img src="<?php BASE_URL() ?>images/itemTit1.png"></div>-->
            <div class="th_box">
                <div class="swiper-news-banner">
                    <div class="swiper-wrapper">
                    <?php
                        SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href="@@STR1@@"><img src="@@STR2@@" /></a></div>',
                        // SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href="@@STR1@@"><img src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" /></a></div>',
                        'Y-m-d',3,4);
                        ?>
                    </ul>
                    </div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
            </div>

            <div class="th_box2">
                <div class="news-tabs">
                    <a class="active" href="javascript:;">最新</a>
                    <a href="javascript:;">新闻</a>
                    <a href="javascript:;">攻略</a>
                </div>
                <div id="news-tabs-container" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul>
                            <?php
                            SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',array('新闻','活动','论坛','攻略'),5,0,array('LimitFrom'=>0));
                        ?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                            <?php
                            SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d','新闻',5,0,array('LimitFrom'=>0));
                        ?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                            <?php
                            SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d','攻略',5,0,array('LimitFrom'=>0));
                        ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <a name="main3" id="main3"></a>
                <a class="more" href="//hy.uu.cc/news/98.html">查看更多</a>
            </div>
        </div>
    </div>

    <div class="main3">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/tit1.png"></div>

            <div class="swiper-tese">
                <div class="swiper-wrapper">
                <?php
                    SHOW_DATAS('<div class="swiper-slide" style="background-image:url(@@STR2@@)"></div>',
                    // SHOW_DATAS('<div class="swiper-slide" style="background-image:url(http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg)"></div>',
                    'Y-m-d',4,4);
                     ?>
                </div>

            </div>
        </div>
    </div>

    <div class="main5">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/tit2.png"></div>
            <div class="video-list clearfix">
                <ul>
                <?php
                    SHOW_DATAS('<li class="big"><a class="video_btn_link" href="javascript:;" name="@@STR1@@"></a></li>',
                    'Y-m-d',1,1,1);
                     ?>
                     <!--<?php
                    SHOW_DATAS('<li><a class="video_btn_link" href="javascript:;" name="@@STR1@@"><div><img src="@@STR2@@" /></div><span>@@STR3@@</span></a></li>',
                    'Y-m-d',1,1,2);
                     ?>
                     <?php
                    SHOW_DATAS('<li><a class="video_btn_link" href="javascript:;" name="@@STR1@@"><div><img src="@@STR2@@" /></div><span>@@STR3@@</span></a></li>',
                    'Y-m-d',1,1,3);
                     ?>-->

                </ul>
                </div>
                <a class="more clearfix" href="//hy.uu.cc/images/1/1.html">查看更多</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <a name="main6" id="main6"></a>
    <div class="main6">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/tit3.png?v=0"></div>
            <div class="th_box3">
                <div class="swiper-pic-banner">
                    <div class="swiper-wrapper">
                    <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;" name="@@STR1@@"><img src="@@STR2@@" /></a></div>',
                        // SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;" name="@@STR1@@"><img width="100%" src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" /></a></div>',
                        'Y-m-d',7,4);
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>

<?php require_once 'footer.ctp';?>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<?php echo GET_BLOCK('m_bootpage');?>
<!-- <div class="layer">
    <div class="text_box">
        <a href="javascript:void(0);" class="close"></a>
        <div class="box" >
            <img src="">
        </div>
    </div>
</div> -->
<!-- <div class="bootPage" style="background: url(//dl.gamdream.com/market/mhhy/ydy/index_1.jpg) #fff center no-repeat;">
    <span class="yd_logo"></span>
    <div class="btns">
        <span class="goText" style="left:94px;top:760px;background:url(//dl.gamdream.com/market/mhhy/ydy/goText.png) no-repeat;">活动详情</span>
        <span class="goHome" style="left:324px;top:760px;background:url(//dl.gamdream.com/market/mhhy/ydy/goHome.png) no-repeat;">进入官网</span>
    </div>
    <span class="yd_text"></span>
</div> -->


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/js/edata.js"></script>
<script>

$(document).ready(function(){

    var swiper = new Swiper('.swiper-news-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        loop: true
    });
    sToEdata();

    <?php echo GET_BLOCK('yd_js');?>

    $('.myd_text').on('click',function(){
        window.location.href = 'https://wxshare.uu.cc/snx';
    });

    var oImg = '<?php echo GET_BLOCK('m_bootpage_img');?>';
    // 进入官网
    $('.goHome').on('click',function(){
        $('.bootPage').css('opacity',0);
        $('#content').css('position','relative');
        setTimeout(function(){
            $('.bootPage').css('opacity',1);
            $('.bootPage').hide();
            // shwoTop();
        },800);
    });
    // 活动详情
    $('.goText , .myd_text').on('click',function(){
        $('.layer').show();
        $('.layer .box img').attr('src',oImg);
    });
    // 关闭
    $('.close').on('click',function(){
        $('.layer').hide();
        $('#content').css('position','relative');
    });
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
            stretch: 118,
            depth: 200,
            modifier: 1,
            slideShadows : true
        }
    });

    //新闻列表
    var tabsSwiper = new Swiper('#news-tabs-container',{
        speed:500,
        effect:'left',
        onSlideChangeStart:function(){
          $(".news-tabs .active").removeClass('active');
          console.log(tabsSwiper.activeIndex);
          
          $(".news-tabs a").eq(tabsSwiper.activeIndex).addClass('active')
        }
    });

    $(".news-tabs a").on('touchstart mousedown',function(e){
            e.preventDefault()
            $('.th_box2').css({
                background: 'url("<?php BASE_URL() ?>/images/new'+($(this).index()+1)+'.png") no-repeat',
                backgroundSize: '100%'
            });
            $(".news-tabs .active").removeClass('active');
            $(this).addClass('active')
            tabsSwiper.slideTo( $(this).index() )
        })
    $(".news-tabs a").click(function(e){
        
        e.preventDefault()
    })

    var swiper = new Swiper('.swiper-pic-banner', {
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true
    });

    //顶部导航
    $('.burger').click(function(){
        if (!$(this).hasClass('open')) {
            openMenu();
        } else {

            closeMenu();
        }
    })

    $('.menu ul li a').click(function(e){
        //e.preventDefault();
        closeMenu();
    });
    function openMenu() {
        $('div.burger').addClass('open');
        $('div.x, div.z').addClass('collapse');
        $('.menu,div.menu-bg').fadeIn();
        setTimeout(function () {
            $('div.y').hide();
            $('div.x').addClass('rotate30');
            $('div.z').addClass('rotate150');
        }, 70);
        setTimeout(function () {
            $('div.x').addClass('rotate45');
            $('div.z').addClass('rotate135');
        }, 120);
    }
    function closeMenu() {
        $('.menu,div.menu-bg').fadeOut();
        setTimeout(function() {
            $('div.burger').removeClass('open');
            $('div.x').removeClass('rotate45').addClass('rotate30');
            $('div.z').removeClass('rotate135').addClass('rotate150');
            setTimeout(function() {
                $('div.x').removeClass('rotate30');
                $('div.z').removeClass('rotate150');
            }, 50);
            setTimeout(function () {
                $('div.y').show();
                $('div.x, div.z').removeClass('collapse');
            }, 70);
        }, 100);
    }

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
<script>
$(function(){
    wx.config({
        debug: false,
        appId: '<?php echo $wxSignPackage["appId"];?>',
        timestamp: '<?php echo $wxSignPackage["timestamp"];?>',
        nonceStr: '<?php echo $wxSignPackage["nonceStr"];?>',
        signature: '<?php echo $wxSignPackage["signature"];?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
        ]
    });
    wx.ready(function () {
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
            link:'<?php echo $wxSignPackage["url"];?>',
            imgUrl: "<?php echo GET_BLOCK('share_img');?>", // 分享图标
            success: function () {
               // alert('success');
            },
            cancel: function () {
                //alert('cancel');
            }
        });
        wx.onMenuShareAppMessage({
             title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
             desc: "<?php echo GET_BLOCK('share_desc');?>",
             link:'<?php echo $wxSignPackage["url"];?>',
             imgUrl: "<?php echo GET_BLOCK('share_img');?>", // 分享图标
             trigger: function (res) {

             },
             success: function (res) {
                 //alert('分享成功！');
             },
             cancel: function (res) {
                 //alert('已取消！');
             },
             fail: function (res) {
                 alert(JSON.stringify(res));
             }
         });
         wx.onMenuShareQQ({
             title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
             desc: "<?php echo GET_BLOCK('share_desc');?>", // 分享描述
             link: '<?php echo $wxSignPackage["url"];?>', // 分享链接
             imgUrl: '<?php echo GET_BLOCK('share_img');?>', // 分享图标
             success: function () {
             // 用户确认分享后执行的回调函数
             },
             cancel: function () {
             // 用户取消分享后执行的回调函数
             }
         });
     });
});
</script>
</body>
</html>
