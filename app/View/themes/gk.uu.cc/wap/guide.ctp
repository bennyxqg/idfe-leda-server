<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>/css/swiper.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/home.css?var=3">
<link rel="shortcut icon" href="//gk.uu.cc/gk.uu.cc/yuyue/favicon.ico">
<script type="text/javascript">

(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            if (clientWidth >= 640) {
                docEl.style.fontSize = '100px';
            } else {
                docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';

            }
        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
    </script>
</head>

<body class="page">
<?php require_once '_top.ctp';?>

<ul class="pageNav">
    <li><a id="navVideo" <?php if ($category_id == 1) echo 'class="active active1"';?> href="//gk.uu.cc/guide/1.html">视频</a></li>
    <li><a id="navImg" <?php if ($category_id == 2) echo 'class="active active2"';?> href="//gk.uu.cc/guide/2.html">原画</a></li>
    <li><a id="navJietu" <?php if ($category_id == 3) echo 'class="active active3"';?> href="//gk.uu.cc/guide/3.html">游戏截图</a></li>
    <li><a id="navStory" <?php if ($category_id == 4) echo 'class="active active4"';?> href="//gk.uu.cc/guide/4.html">英雄故事</a></li>
</ul>
<div class="pItem">
    <?php if ($category_id == 1){?>
    <img src="<?php BASE_URL() ?>images/w_title1.png">
    <?php }elseif($category_id == 2){?>
    <img src="<?php BASE_URL() ?>images/w_title2.png">
    <?php }elseif($category_id == 3){?>
    <img src="<?php BASE_URL() ?>images/w_title3.png">
    <?php }elseif($category_id == 4){?>
    <img src="<?php BASE_URL() ?>images/w_title4.png">
    <?php } ?>    
</div>
<div class="videoList <?php if($category_id !=1) echo 'imgList'?>" <?php if($category_id == 2 || $category_id == 3 ) echo 'id="showpic"'?> >
    <ul>
        <!-- 视频 -->
        <?php if ($category_id == 1){
            $data = SHOW_ALL_DATAS(4);
            if(!empty($data)){
                $str = "";
                $top = "";
                foreach ($data as $v) {
                    $title = $v["label"]?:$v["label"];
                    $video = $v["str3"]?$v["str3"]:"http://gimg.gamdream.com/market/mv/gk_index.mp4";
                    $style = "";
                    if(isset($v["int1"]) && $v["int1"] == 1){
                        $pic = $v["str2"]?$v["str2"]: "/gk.uu.cc/wap/images/img5.jpg";
                        $top .= '<li class="big"><a class="video_btn_link" href="javascript:;" name="'.$video.'"><img src="'.$pic.'" /><p>'.$title.'</p></a></li>';
                    }else{
                        $pic = $v["str1"]?$v["str1"]: "/gk.uu.cc/wap/images/img5.jpg";
                        $str .= '<li><a class="video_btn_link" href="javascript:;" name="'.$video.'"><img src="'.$pic.'" /><p>'.$title.'</p></a></li>';
                    }
                }
                echo $top.$str;
            }
        ?>
        <!-- 原画 -->
        <?php }elseif($category_id == 2){
            $data = SHOW_ALL_DATAS(5);
            if(!empty($data)){
                foreach ($data as $v) {
                    $s = $v["str1"]?$v["str1"]: "/gk.uu.cc/wap/images/img5.jpg";
                    $b = $v["str2"]?$v["str2"]: "/gk.uu.cc/wap/images/img5.jpg";
        ?>
        <li><a href="javascript:;"><img src="<?php echo $s;?>" name="<?php echo $b;?>" /><p class="tit"><?php echo $v["label"];?></p></a></li>
        <?php
                }
            }
        ?>
        <!-- 游戏截图 -->
        <?php }elseif($category_id == 3){
            $data = SHOW_ALL_DATAS(6);
            if(!empty($data)){
                foreach ($data as $v) {
                    $s = $v["str1"]?$v["str1"]: "/gk.uu.cc/wap/images/img5.jpg";
                    $b = $v["str2"]?$v["str2"]: "/gk.uu.cc/wap/images/img5.jpg";
        ?>
        <li><a href="javascript:;"><img src="<?php echo $s;?>" name="<?php echo $b;?>" /><p class="tit"><?php echo $v["label"];?></p></a></li>
        <?php
                }
            }
        ?>
        <!-- 英雄故事 -->
        <?php }elseif($category_id == 4){
            SHOW_NEWS('<li><a href="@@URL@@"><img src="@@SMALL_IMAGE@@" /><p>@@TITLE@@</p></a></li>','Y/m/d','英雄故事',100,1);
        } ?>
    </ul>
</div>


<?php require_once '_footer.ctp';?>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<!--图片浏览弹窗-->
<div id="show-wrap">
    <div id="show-pic" class="swiper-container">
        <div class="swiper-wrapper"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <a class="sclose"></a>
</div>

<script type="text/javascript" src="http://game-resource.uu.cc/gk.uu.cc/wap/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://game-resource.uu.cc/gk.uu.cc/wap/js/swiper.jquery.min.js"></script>
<script type="text/javascript">

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
        $('.copy-year').html(d.getFullYear());

        //图片弹窗展示
        $("#showpic").find("img").each(function(){
            var src = $(this).attr("name");
            if(src){
                $("#show-wrap").find(".swiper-wrapper").append('<div class="swiper-slide"><img src="'+src+'"/></div>');
            }
        });

        var showPic = $("#show-pic");

        $("#showpic li").on('click',function(){

            var index = $(this).index();
            $("#show-wrap,.sclose").show();

            var showSwiper = new Swiper('#show-pic', {
                loop : true,
                initialSlide :index,
                paginationClickable :true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                onSlideChangeEnd: function(swiper){
                }
            });
        });
        $("#show-wrap,.sclose").click(function(){
            $(this).hide();
            showPic.removeClass('active');
        });
        showPic.click(function(e){
            e.stopPropagation();
        });
        //页面视频
        $('.video_btn_link').click(function(){
            var vedioSrc = this.name;
            $('.s_p_k video').attr('src',vedioSrc);
            $('.zhezao,.s_p_k').show();
            var myVideo = document.getElementsByTagName('video')[0];
            myVideo.play();
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
