<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimun-scale=1.0,maximun=1.0" user-scalable="no">
    <meta name="higame-image" content="//dl.gamdream.com/activity/gavin/jzmf_img_test/icon.png?jv=1.0.20160301" />
    <!-- 分享链接时的展示文本 -->
    <?php
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link rel="icon" href="//dl.gamdream.com/activity/gavin/passerby_talk/images/icon.png"/>
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerby_talk/resource/reset.css">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerby_talk/resource/common.css?jv=201905131133">
    <script type="text/javascript">
        var devieWidth=Math.min(750,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';

        !function () {
            if (/iphone|ios|android|ipod|ipad/i.test(navigator.userAgent.toLowerCase()) == false) {
                location.href = '../index.html';
            }
        }();
    </script>
</head>
<body>
<script type="text/javascript">
    function share(){
        // 微博分享
        var title = '<?php echo GET_BLOCK('wb_title_xts');?>';
        var picurl = '<?php echo GET_BLOCK('wb_share_img_xts');?>';
        var sharesinastring='https://service.weibo.com/share/share.php?title='+title+'&url='+window.location.href+'&content=utf-8&sourceUrl='+window.location.href+'&pic='+picurl;
        window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
    }
</script>
<div class="mreserve">
    <div class="top">
        <img class="icon" src="//dl.gamdream.com/activity/gavin/passerby_talk/images/icon.png" alt="">
        <div class="text">
            <h2>路人超能100</h2><p>官方正版授权手游</p>
        </div>
        <a class="reserve show-reserve" href="//mob100.uu.cc"></a>
        <div class="burger"></div>
        <div class="menu">
            <ul>
                <li><a href="javascript:void(0)" onclick="share()"></a></li>
                <li><a class="new_state1" href="javascript:void(0)" data-clipboard-text=""></a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="title"><img src="//dl.gamdream.com/activity/gavin/passerby_talk/images/title.png"></div>
        <div class="music"></div>
        <audio id="musicfx" loop autoplay="autoplay">
            <source src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/bg.mp3" type="audio/mpeg">
        </audio>
        <div class="countdown">距离相谈所开业还有<div class="time"><?php if ($xtsDayPrefix > 0) {?><div class="hundreds_digit hundreds_digit_<?=$xtsDayPrefix?>"></div><?php }?><div class="single_digit single_digit_<?=$xtsDay?>"></div></div>天</div>
        <!--<div class="lightarea">-->
            <!--<div class="light"><img src="//dl.gamdream.com/activity/gavin/passerby_talk/images/box.gif"></div>-->
        <!--</div>-->
    </div>
    <footer class="footer">
        <div class="pic">
            <img src="//dl.gamdream.com/activity/galan/luren/images/ft_logo1.png">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo2_foot.png">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo3_foot.png">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo4_foot.png">
        </div>
        <!--<div class="link">-->
            <!--<a href="">客服中心</a>-->
            <!--|-->
            <!--<a href="">服务器列表</a>-->
            <!--|-->
            <!--<a href="">进入论坛</a>-->
        <!--</div>-->
        <p class="info">Copyright©2009-2019 深圳市创梦天地科技有限公司 版权所有</p>
        <p class="text">
            抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>
            适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
        </p>
    </footer>
</div>
<div class="lock_wrp" id="lock" style="display: none;">
    <div class="lock">
        <i></i><br>
        为了更好的体验，请使用竖屏浏览
    </div>
</div>
</body>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerby_talk/resource/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/shenmiao/js/clipboard.min.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/market/resource/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerby_talk/resource/common.js"></script>
</html>