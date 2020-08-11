<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<!-- <meta name="viewport" content="width=640,target-densitydpi=device-dpi,user-scalable=no,initial-scale=1"> -->

<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/jnh.css?t=1"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?t=20191218"  />

    <?php echo GET_BLOCK('ydy_style');?>

<script>
  function resetRender() {
    var baseWidth = 640;
    var currWidth = document.getElementsByTagName('html')[0].offsetWidth;
    var _body = document.getElementsByTagName('body')[0];
    _body.style.zoom = currWidth / baseWidth;
  }
  resetRender()

</script>
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
                <li><a href="//hy.uu.cc/jnh">嘉年华</a></li>
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
   

</div>

<div class = "home-page">
    <div class = "main-kv">
        <div class = "action-bar">
            <a href= "/jnh_rule">
              <img class = "top-action-button report-button" src = "<?php BASE_URL() ?>/images/jnh-report-button.png">
           </a>
<!--            <a href="<?php echo GET_BLOCK('live_url') ?>">
               <img class = "top-action-button live-button" src = "<?php BASE_URL() ?>/images/jnh-live-button.png">
           </a> -->
        </div>
    </div>

    <div class = "jnh-gift-div" id = "page-1">
        <img class = "title-icon" src = "<?php BASE_URL() ?>/images/jnh-gift-title.png">
        <!-- 礼品列表 -->

            <div class = "gift-page">
                <div class = "gift-detail active" id = "gift-detail-1">
                    <img class = "gift-list" src = "<?php BASE_URL() ?>/images/new-gift-list-1.png">
                    <a class = "zhoubian-button" datasrc = "<?php BASE_URL() ?>/images/zhoubian-pop-1.png">
                    </a>
                </div>
                 <div class = "gift-detail" id = "gift-detail-2" >
                    <img class = "gift-list" src = "<?php BASE_URL() ?>/images/new-gift-list-2.png">
                    <a class = "zhoubian-button" datasrc = "<?php BASE_URL() ?>/images/zhoubian-pop-1.png">
                    </a>
                </div>
                 <div class = "gift-detail" id = "gift-detail-3">
                    <img class = "gift-list" src = "<?php BASE_URL() ?>/images/new-gift-list-3.png">
                   <a class = "zhoubian-button" datasrc = "<?php BASE_URL() ?>/images/zhoubian-pop-1.png">
                    </a>
                </div>
                <div class = "gift-detail" id = "gift-detail-4">
                    <img class = "gift-list" src = "<?php BASE_URL() ?>/images/new-gift-list-4.png">
                     <a class = "zhoubian-button" datasrc = "<?php BASE_URL() ?>/images/zhoubian-pop-1.png">
                    </a>
                </div>
                 <div class = "gift-detail" id = "gift-detail-8">
                    <img class = "gift-list" src = "<?php BASE_URL() ?>/images/new-gift-list-8.png">
                    <a class = "zhoubian-button" datasrc = "<?php BASE_URL() ?>/images/zhoubian-pop-2.png">
                    </a>
                </div>
                <div class = "gift-detail" id = "gift-detail-16">
                    <img class = "gift-list" src = "<?php BASE_URL() ?>/images/gift-list-new1-16.png">
                    <a class = "zhoubian-button" datasrc = "<?php BASE_URL() ?>/images/zhoubian-pop-3.png">
                    </a>
                </div>
                <div class = "gift-detail" id = "gift-detail-0">

                        <img class = "gift-list-haixuan" src = "<?php BASE_URL() ?>/images/gift-list-0.png"  datasrc = "<?php BASE_URL() ?>/images/haixuan-gift-detail.png">

                </div>
            </div>


            <div class = "rank-list-select">
                <div class = "rank-list-swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class = "rank-item" d-num = "1" src = "<?php BASE_URL() ?>/images/jnh-rank-1-active.png">
                        </div>
                        <div class="swiper-slide">
                            <img class = "rank-item" d-num = "2" src = "<?php BASE_URL() ?>/images/jnh-rank-2.png">
                        </div>
                        <div class="swiper-slide">
                            <img class = "rank-item" d-num = "3" src = "<?php BASE_URL() ?>/images/jnh-rank-3.png">
                        </div>
                        <div class="swiper-slide">
                            <img class = "rank-item" d-num = "4" src = "<?php BASE_URL() ?>/images/jnh-rank-4.png">
                        </div>
                         <div class="swiper-slide">
                            <img class = "rank-item" d-num = "8" src = "<?php BASE_URL() ?>/images/jnh-rank-8.png">
                        </div>
                         <div class="swiper-slide">
                            <img class = "rank-item" d-num = "16" src = "<?php BASE_URL() ?>/images/jnh-rank-16.png">
                        </div>
                        <div class="swiper-slide">
                            <img class = "rank-item" d-num = "0" src = "<?php BASE_URL() ?>/images/jnh-rank-0.png">
                        </div>
                    </div>
                </div>

                       <!-- 如果需要导航按钮 -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
           </div>

           <img  class = "gift-decription" src = "<?php BASE_URL() ?>/images/jnh-gift-description.png" >
    </div>
    <div class = "jnh-gift-news">
         <img class = "title-icon" src = "<?php BASE_URL() ?>/images/jnh-news-title.png">
           <div class = "news-video-ul">
                 <?php
                  SHOW_DATAS('<div class = "video-item" datasrc = "@@STR1@@">
                      <img class = "video-cover" src = "@@STR2@@">
                      <div class = "video-title">@@STR3@@</div>
                      <img class = "video-play-button" src = "//hy.uu.cc/hy.uu.cc/images/jnh-news-play.png">
                  </div>',
                  'Y-m-d',8,4);
                  ?>
                <!-- <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4">

                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>
              
                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>

                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4" >
                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                    <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div>

                 <div class = "video-item" datasrc = "http://dl.gamdream.com/website/mgc/mgc.mp4">

                    <img class = "video-cover" src = "">
                    <div class = "video-title">视频标题</div>
                     <img class = "video-play-button" src = "<?php BASE_URL() ?>/images/jnh-news-play.png">
                </div> -->
      

           </div>
           <a href="/jnh_news/1.html" >
            <img class = "video-more-button" src = "<?php BASE_URL() ?>/images/jnh-news-more-button.png">
             </a>
    </div>

    <div class = "bottom-bar">
        <a href = "">
          <img class = "bottom-bar-item" src= "<?php BASE_URL() ?>/images/bottom-bar-1.png">
        </a>
         <a href="#page-1">
             <img class = "bottom-bar-item" src= "<?php BASE_URL() ?>/images/bottom-bar-new-2.png">
         </a>
        <a href="/jnh_rule" >
              <img class = "bottom-bar-item" src= "<?php BASE_URL() ?>/images/bottom-bar-new-3.png">
         </a>
        <a href="/jnh_news/1.html" >
             <img class = "bottom-bar-item" src= "<?php BASE_URL() ?>/images/bottom-bar-4.png">
         </a>
    </div>
</div>



<span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>

<?php require_once 'footer.ctp';?>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<div class="gift-pop">
    <img class = "gift-image">
</div>

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
    var swiper = new Swiper('.rank-list-swiper', {
        // pagination: '.swiper-pagination',
        slidesPerView: 4,
        spaceBetween: 0,
        freeMode: false,
        // slideToClickedSlide:true,
        // preventClicks : false,//默认true
            // 如果需要前进后退按钮
          nextButton: '.rank-list-select .swiper-button-next',
          prevButton: '.rank-list-select .swiper-button-prev',
    });
    sToEdata();


    $('.gift-list-haixuan').on('click',function(){
          var url = $(this).attr("datasrc");
        $('.gift-pop').fadeIn();

        $(".gift-image").attr("src",url);
    });

    $('.zhoubian-button').on('click',function(){

        var url = $(this).attr("datasrc");
        $('.gift-pop').fadeIn();

        $(".gift-image").attr("src",url);

     });

    $('.gift-pop').on('click',function(){
        $(this).fadeOut();
     });

    
     

        // 关闭
    $('.rank-item').on('click',function(){
        // var rankItem = $(".rank-item'");

        $(".rank-item").each(function(){
             var num = $(this).attr("d-num");

            var imageUrlNormal = "<?php BASE_URL() ?>/images/jnh-rank-"+num+".png"
             $(this).attr("src",imageUrlNormal);
         });
        var itemnum = $(this).attr("d-num");

        var imageUrlActive = "<?php BASE_URL() ?>/images/jnh-rank-"+itemnum+"-active.png"

        $(this).attr("src",imageUrlActive);

        // 对应的礼品图层显示
        $(".gift-detail").removeClass("active");
        var idKey = "#gift-detail-"+itemnum;
        $(idKey).addClass("active");


    });

     $(".video-item").click(function(){

        var videoSrc = $(this).attr("datasrc");

        $('.s_p_k video').attr('src',videoSrc);
        $('.zhezao').show();
        $('.s_p_k').show();

     })

   
    // 关闭
    $('.close').on('click',function(){
        $('.layer').hide();
        $('#content').css('position','relative');
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
