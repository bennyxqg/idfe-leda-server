<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/home.css"  />
<script src="<?php FILE_PATH(); ?>/wap/js/jweixin-1.0.0.js"></script>
<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/favicon.ico">
</head>

<body>
<div id="index">
    <?php require_once '_top.ctp';?>
    <div class="main1">
        <div class="slogan">
            <img src="<?php FILE_PATH(); ?>/wap/images/slogan.png?20190312" alt="slogan">
            <a href="javascript:;" class="video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>"></a>
        </div>
        <!--<p class="text">多人生存沙盒手游</p>-->
        <a href="/download" class="downLoads" style="display:block!important;"><img src="<?php FILE_PATH(); ?>/wap/images/m_downLoad.png" alt="downLoad"></a>
    </div>
    <div class="main2">
        <div class="banner_box">
            <h3><span class="icon"></span>最新资讯</h3>
            <div class="banner">
                <div id="banner1" class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@" target="_blank"><img width="704" height="350" src="@@STR3@@" alt="banner"></a></div>',
                        'Y-m-d',0);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news_title">
                <a href="javascript:void(0);" class="active">综合</a>
                <a href="javascript:void(0);">新闻</a>
                <a href="javascript:void(0);">公告</a>
                <a href="javascript:void(0);">攻略</a>
                <a href="javascript:void(0);">活动</a>
                <!--<a href="javascript:void(0);">媒体</a>-->
            </div>
            <div class="count off">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('新闻','公告','攻略','活动','媒体'),5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
                <a class="subFooter" href="/news/1.html">查看更多 &nbsp;&nbsp;<span></span></a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','新闻',5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
                <a class="subFooter" href="/news/1.html">查看更多 &nbsp;&nbsp;<span></span></a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','公告',5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
                <a class="subFooter" href="/news/2.html">查看更多 &nbsp;&nbsp;<span></span></a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','攻略',5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
                <a class="subFooter" href="/news/3.html">查看更多 &nbsp;&nbsp;<span></span></a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','活动',5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
                <a class="subFooter" href="/news/4.html">查看更多 &nbsp;&nbsp;<span></span></a>
            </div>
            <!--<div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','媒体',5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
                <a class="subFooter" href="/news/5.html">查看更多 &nbsp;&nbsp;<span></span></a>
            </div>-->
        </div>
        <div class="banner_box2">
            <h3 class="video_prop"><span class="icon"></span>废土资料 <span class="right"><a href="javascript:;">主角</a> | <a href="javascript:;">建造</a></span></h3>
            <div class="banner prop_swiper">
                <div id="banner2" class="swiper-container swiper-container2 on">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><img width="704" height="396" src="@@str5@@" ><div class="text"><h3>@@STR2@@</h3><span></span><p>@@STR3@@</p></div></div>',
                        'Y-m-d',7,5);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination2"></div>
                </div>
                <div id="banner2_1" class="swiper-container swiper-container2">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><div class="text"><h3>@@LABEL@@</h3><span></span><p>@@STR2@@</p></div><div class="img"><img src="@@STR3@@" alt=""></div><a class="more2_1" href="/game_list" target="_blank">查看更多+</a></div>',
                        'Y-m-d',5,1);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination2"></div>
                </div>
            </div>
            <h3 class="video_img"><span class="icon"></span>废土映像 <span class="right"><a href="javascript:;">视频</a> | <a href="javascript:;">截图</a></span></h3>
            <div class="banner video_swiper">
                <div id="banner3" class="swiper-container swiper-container2 on">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;" name="@@STR2@@" class="video_btn_link"><img width="704" height="396" src="@@STR3@@" alt=""><div></div></a></div>',
                        'Y-m-d',2,5);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination3"></div>
                </div>
                <div id="banner3_1" class="swiper-container swiper-container2 ">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><img width="704" height="396" src="@@STR3@@" alt="banner"></div>',
                        'Y-m-d',3,5);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination3"></div>
                </div>
            </div>
            <h3><span class="icon"></span>废土特色</h3>
            <div class="banner">
                <div id="banner4" class="swiper-container swiper-container2">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><img width="704" height="396" src="@@STR2@@" alt="banner"></div>',
                        'Y-m-d',1);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination4"></div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once '_footer.ctp';?>
</div>
 <!--ftwx.uu.cc-->
<!--<div class="guide">
    <img src="<?php FILE_PATH(); ?>/wap/images/layer_text.png" alt="guide">
    <img class="bottom" src="<?php FILE_PATH(); ?>/wap/images/layer_text2.png" alt="guide">
</div>-->

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/swiper.jquery.min.js"></script>
<script>
$(document).ready(function(){
    // 最新资讯 banner
    var mySwiper =  $('#banner1').swiper( {
        autoplay:6000,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:1000,//滚动速度
        pagination: '.swiper-pagination1',
    });
    // 主角
    var Swiper =  $('#banner2').swiper( {
        // autoplay:3000,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:1000,//滚动速度
        pagination: '.swiper-pagination2',
    });
    // 印象
    var Swiper3 =  $('#banner3').swiper( {
        autoplay:3000,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:1000,//滚动速度
        pagination: '.swiper-pagination3',
    });
    // 特色
    var Swiper4 =  $('#banner4').swiper( {
        autoplay:3000,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:1000,//滚动速度
        pagination: '.swiper-pagination4',
    });
    $('.video_img .right a').on('click',function(){
        $('.video_swiper .swiper-container').hide();
        $('.video_swiper .swiper-container').eq($(this).index()).show();
        
        var Swiper3_1 =  $('#banner3_1').swiper( {
            autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            speed:1000,//滚动速度
            pagination: '.swiper-pagination3',
        });
    });
    $('.video_prop .right a').on('click',function(){
        $('.prop_swiper .swiper-container').hide();
        $('.prop_swiper .swiper-container').eq($(this).index()).show();
        
        var Swiper2_1 =  $('#banner2_1').swiper( {
            // autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            // loop:true,//循环
            // speed:1000,//滚动速度
            // pagination: '.swiper-pagination2',
        });
    });
    var u = navigator.userAgent;
    var ua = u.toLowerCase();
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        var dl_url = "<?php echo GET_BLOCK('ios_downLoad_url');?>";
    }else{
        var dl_url = "<?php echo GET_BLOCK('android_downLoad_url');?>";
    }
    if(dl_url){
        $('.main1 .downLoads').attr('href','/downLoad');
        $('header .downLoads').attr('href','/downLoad');
    }

    // 新闻选择
    $(".news_title a").on('click',function(e){
        e.preventDefault()
        $(".news_title .active").removeClass('active')
        $(this).addClass('active')
        $('.news .count').removeClass('off')
        $('.news .count').eq($(this).index()).addClass('off')
    })

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        if(vedioSrc){
            $('.s_p_k video').attr('src',vedioSrc);
            $('.zhezao,.s_p_k').show();
        }else{
            alert("敬请期待！");
        }
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });
    
});
</script>
</body>
</html>