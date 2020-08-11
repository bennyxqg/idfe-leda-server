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
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?var=afa"  />
<style type="text/css">
    <?php echo GET_BLOCK('ydy_style');?>
</style>
</head>

<body class="index1">
<div id="content">

    <?php require_once 'top.ctp';?>
    <div class="pr main1">
        <a class="downBtn copy" href="http://hy.uu.cc/download"></a>
    </div>
    <div class="main2">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/teseTit1.png"></div>
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
                <a class="more" href="//hy.uu.cc/news/98.html">查看更多+</a>
            </div>
        </div>
    </div>
    <div class="main3">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/teseTit2.png"></div>

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
    <div class="video_box">
        <img src="<?php BASE_URL() ?>/images/video.png">
        <a href="javascript:;" class="video_btn_link" name="<?php echo GET_BLOCK('share_video');?>"></a>
    </div>
</div>

<span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>
<!--底部-->
<p class="logo_2"><img src="<?php BASE_URL() ?>images/ledou2.png" width="166" height=""><img class="pla" src="<?php BASE_URL() ?>images/peak.png?v=0" width="156" height=""></p>
<footer id="footer" class="foot">
   <!--<a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a><br>-->
   Copyright©2009-2014  深圳市创梦天地科技股份有限公司 版权所有<br>
   粤网文〔2016〕6871-1632号  批准文号：文网游进字〔2017〕0133 号<br>
   新广出审[2017]6718号  出版号：ISBN 978-7-7979-9980-9<br>
   抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>
   湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
</footer>
<script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<?php echo GET_BLOCK('m_bootpage');?>

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
