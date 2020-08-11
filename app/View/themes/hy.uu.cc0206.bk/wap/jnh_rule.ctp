<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
 <link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/jnh.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?20190221"  />
<style type="text/css">
    <?php echo GET_BLOCK('ydy_style');?>
</style>

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
         <div class = "rule-back-bar">
     
             <img class = "back-button" src = "<?php BASE_URL()?>/images/role-back.png">

        </div>
     <div class = "jnh-rule">
        <div class = "rule-content">
             <img class = "rule-title" src = "<?php BASE_URL()?>/images/rule-title.png">
             <img class = "rule-description" src = "<?php BASE_URL() ?>/images/rule-description-1.png">
             <ul class = "rule-tab-ul">
                <li class = "rule-tab-item" dnum = "1">
                     <img class = "rule-tab-item-normal" style = "display:none" src = "<?php BASE_URL() ?>/images/rule-report.png">
                     <img class = "rule-tab-item-active" style = "display:block" src = "<?php BASE_URL() ?>/images/rule-report-active.png">
                </li>
                <li class = "rule-tab-item" dnum = "2">
                    <img class = "rule-tab-item-normal" src = "<?php BASE_URL() ?>/images/rule-online.png">
                    <img class = "rule-tab-item-active" src = "<?php BASE_URL() ?>/images/rule-online-active.png">

                </li>
                <li class = "rule-tab-item" dnum = "3">
                    <img class = "rule-tab-item-normal" src = "<?php BASE_URL() ?>/images/rule-offline.png">
                    <img class = "rule-tab-item-active" src = "<?php BASE_URL() ?>/images/rule-offline-active.png">
                </li>
             </ul>

             <img class = "rule-tab-item-content rule-1 active" src = "<?php BASE_URL() ?>/images/report-content-1.png">
             <img class = "rule-tab-item-content rule-2" src = "<?php BASE_URL() ?>/images/report-online-content-1.png">
             <img class = "rule-tab-item-content rule-3" src = "<?php BASE_URL() ?>/images/report-offline-content-1.png">
             <a href = "http://hy.uu.cc/download">
                 <img class = "rule-download-button" src = "<?php BASE_URL() ?>/images/report-download-button.png">
             </a>
         </div>


    </div>

      <div class = "bottom-bar">
        <a href = "/jnh">
          <img class = "bottom-bar-item" src= "<?php BASE_URL() ?>/images/bottom-bar-1.png">
        </a>
         <a href="/jnh#page-1" target="_self">
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
   

    <?php echo GET_BLOCK('yd_js');?>


     $(".rule-tab-item").click(function(){

        var num =  $(this).attr("dnum");

        $(".rule-tab-item-normal").css("display","block");
        $(".rule-tab-item-active").css("display","none");

        $(this).children(".rule-tab-item-normal").eq(0).css("display","none");
        $(this).children(".rule-tab-item-active").eq(0).css("display","block");


        $(".rule-tab-item-content").removeClass("active");

        var key = ".rule-"+num;
        $(key).addClass("active");

     })

      $(".back-button").click(function(){
            // 返回上一页
            location.href= "/jnh";

       })
    
    // if(!sessionStorage.getItem("key")){
    //     sessionStorage.setItem("key", "dream");
    // }else{
    //     $('.bootPage').hide();
    // }
    // var clienHeight = window.screen.height;
    // if(clienHeight > 600){
    //     $('.bootPage').css("backgroundSize","100% 100%");
    // }else{
    //     $('.bootPage').css("backgroundSize","none");
    // };
    // $('#content').css('position','fixed');
    // $('.goText').on('click',function(){
    //     $('#content').css('position','fixed');
    // });
    // 添加二维码  （废弃）
    // $('.myd_text').on('click',function(){
    //     $('<div class="js_box" style=""><div style="width:100%;text-align:center;"><img src="https://dl.gamdream.com/wxshare/vote/snx/images/qrcode.png" alt=""  ><p style="color:antiquewhite;font-size: 24px;">截屏保存，使用微信扫一扫参与活动</p></div></div>').appendTo($('body'));
    //     $('.js_box').on('click',function(){
    //         $('.js_box').hide();
    //     });
    // });
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
