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
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
<link rel="shortcut icon" href="//gk.uu.cc/gk.uu.cc/yuyue/favicon.ico">
</head>

<body>
<div id="page-content">
    <?php require_once '_top.ctp';?>
    <div class="pr yymain1">
        <a class="video_btn_link" href="javascript:;" name="http://gimg.gamdream.com/market/mv/gk_index.mp4"></a>
    </div>

    <div class="yymain2">
        <a class="moreGo" href="//gk.uu.cc/guide/4.html"></a>
    </div>


    <div class="yymain3">
        <a class="moreGo" href="/game_list"></a>
    </div>

    <div class="yymain4">
        <img class="imgShow" src="<?=GET_BLOCK('more_page_p1'); ?>">
    </div>


    <div class="yymain5">
        <img class="imgShow" src="<?=GET_BLOCK('more_page_p2'); ?>">
    </div>

    <div class="yymain6">
        <img class="imgShow" src="<?=GET_BLOCK('more_page_p3'); ?>">
    </div>

    <?php require_once '_footer.ctp';?>

    <div class="clearfix"></div>

</div>



<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>



<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>

<script>

$(document).ready(function(){



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

    //微信弹窗
    $(".weixin").click(function(){
      $(".wxPop").toggle();
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
        $('.s_p_k,.nav-list,.zhezao').hide();
        e.stopPropagation();
    });

})
</script>
</body>
</html>
