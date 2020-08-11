<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
    <meta name="description" content="跑男" />
	<title>王宝强致奔跑吧兄弟观众的一封信</title>    
    <link type="text/css" rel="stylesheet" href="<?php echo $full_base_url ?>/css/h5.css" />
</head>
<body>
    <div class="loading_bg" id="loading">
        <h4 id="loading_text"><b>0</b></h4>
    	<div class="bar_bg">
            <div class="loadbar" id="loadw"></div>   
        </div>
    </div>
    <div class="lock_wrp" id="lock">
        <div class="lock">
            <i></i><br />
            为了更好的体验，请使用竖屏浏览
        </div>
    </div>
    <div id="audio_btn" class="video_exist play_yinfu" style="display: block;">
        <div id="yinfu" class="rotate"></div>
        <audio loop="loop" src="<?php echo $full_base_url ?>/music.mp3" id="media" autoplay="true" preload=""></audio>
    </div>
	<div class="wrapper">
        <section class="sec0"></section>
    	<section class="sec1"><div class="h_wrp">
            <h2>第一屏</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start2.png" alt=""></div>
        </div></section>
        <section class="sec2"><div class="h_wrp">
            <h2>第二屏</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start2.png" alt=""></div>
        </div></section>
        <section class="sec3"><div class="h_wrp">
            <h2>第三屏</h2>
        </div></section>
        <section class="sec4"><div class="h_wrp">
            <h2>第四屏</h2>
        </div></section>
        <section class="sec5"><div class="h_wrp">
            <h2>第五屏</h2>
        </div></section>
        <section class="sec6"><div class="h_wrp">
            <h2>第六屏</h2>
        </div></section>
        <section class="sec7"><div class="h_wrp">
            <h2>第七屏</h2>
        </div></section>
        <section class="sec8"><div class="h_wrp">
            <h2>第八屏</h2>
        </div></section>
        <section class="sec9"><div class="h_wrp">
            <h2>第九屏</h2>
        </div></section>
        <section class="sec10"><div class="h_wrp">
            <h2>第十屏</h2>
        </div></section>
        <section class="sec11"><div class="h_wrp">
            <h2>第十一屏</h2>
        </div></section>
        <section class="sec12"><div class="h_wrp">
            <h2>第十二屏</h2>
            <a id="btn" href="//dl.uu.cc/idreamsky/Runningman-Free-1002_v1.0.2_s2.4.1.0-dlog_p3.2.0.10_LE0S0N00000.apk"><img src="<?php echo $full_base_url ?>/images/dbtn.png" alt="立即下載"></a>
        </div></section>
    </div>
    <div class="pop">
        <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
    </div>
    <script src="<?php echo $full_base_url ?>/js/zepto.min.js" type="text/javascript"></script>
    <script src="<?php echo $full_base_url ?>/js/parallax.js" type="text/javascript"></script>
    <script src="<?php echo $full_base_url ?>/js/index2.js" type="text/javascript"></script>
    <script type="text/javascript">
    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }
    $(function(){
        $("#audio_btn").on("touchend",function(){
            var audio = $('#media')[0];
            if(!audio.paused){
                audio.pause();
                $(this).removeClass('play_yinfu').addClass('off');
                $('#yinfu').removeClass('rotate');
            }else{
                audio.play();
                $(this).removeClass('off').addClass('play_yinfu');
                $('#yinfu').addClass('rotate');
            }
        });

        if(isWeiXin()){
            $('#btn').on("touchend",function(e){
                $(".pop").show();
            });
        }
        $(".pop").on("touchend",function(){
            $(this).hide();
        });
    })
    </script>
</body>
</html>
