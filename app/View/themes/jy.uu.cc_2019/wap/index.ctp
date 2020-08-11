<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="baidu-site-verification" content="w8PW4Csvlk" />
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
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?var=0115"  />

</head>

<body>
<div id="content">
    <?php require_once 'top.ctp';?>
    <div class="pr main1">
        <a class="downlaod" href="http://jy.uu.cc/download"></a>
    </div>
    <div class="main2">
        <div class="wrap">
            <div class="news-tabs">
                <a class="active" href="javascript:;">最新</a>
                <a href="javascript:;">资讯</a>
                <a href="javascript:;">攻略</a>
            </div>
            <div id="news-tabs-container" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',array('资讯','攻略'),5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d','资讯',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d','攻略',5,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
            <a name="main3" id="main3"></a>
            <a class="more" href="/news/1.html">查看更多 ></a>
        </div>
    </div>

    <div class="main3" id="main3">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/title1.png"></div>

            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <!--<div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/home.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/home.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/home.png)"></div>-->
                    <?php
                        SHOW_DATAS('<div class="swiper-slide" style="background-image:url(@@STR2@@)"></div>',
                        'Y-m-d',3,4);
                     ?>
                </div>

            </div>
        </div>
    </div>

    <div class="main4">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/title2.png"></div>
            <div class="video-list clearfix">
                <ul>
                    <?php
                    SHOW_DATAS('<li class="big"><a class="video_btn_link" href="javascript:;" name="@@STR1@@"><img src="@@STR2@@" /></a></li>',
                    'Y-m-d',1,1,1);
                     ?>
                     <?php
                    SHOW_DATAS('<li><a class="video_btn" href="javascript:;"><div><img src="@@STR2@@" /></div><span>@@STR3@@</span></a></li>',
                    'Y-m-d',2,1,1);
                     ?>
                     <?php
                    SHOW_DATAS('<li><a class="video_btn" href="javascript:;"><div><img src="@@STR2@@" /></div><span>@@STR3@@</span></a></li>',
                    'Y-m-d',2,1,2);
                     ?>
                </ul>
                </div>
                <a class="more clearfix" href="/vediocenter/1.html">查看更多 ></a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <a name="main6" id="main6"></a>
</div>

<span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>

<p class="logo_2"><img src="<?php BASE_URL() ?>images/ledou.png" width="166" height=""><img class="pla" src="<?php BASE_URL() ?>images/peak.png?v=0" width="156"></p>

<footer id="footer">
   <ul>
      <li><a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="https://www.idreamsky.com/wap/service/#2">用户协议</a>|<a href="https://www.idreamsky.com/wap/service/#3">隐私政策</a></li>
      <li>Copyright©2009-<span class="copy-year"></span> &nbsp;&nbsp;深圳市创梦天地科技有限公司 版权所有</li>
      <li>粤网文〔2016〕6871-1632号</li>
      <li>批准文号：国新初审[2019]1536号</li>
      <li>出版号：ISBN 978-7-498-06508-7</li>
      <li>游戏著作权人：PLR Worldwide Sales Limited</li>
      <li>出版单位：江苏凤凰电子音像出版社有限公司</li>
      <li><br>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
      <li>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
   </ul>
</footer>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

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
            depth: 150,
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
    $(".news-tabs a").on('touchstart mousedown',function(e){
        e.preventDefault()
        $(".news-tabs .active").removeClass('active')
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
</body>
</html>
