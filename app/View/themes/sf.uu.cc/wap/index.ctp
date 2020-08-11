<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=480,user-scalable=no" />
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link media="screen" href="<?php echo $full_base_url ?>/css/reset.css" rel="stylesheet" type="text/css">
<link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css">
<link media="screen" href="<?php echo $full_base_url ?>/css/minimalist.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
if(navigator.userAgent.indexOf('Android') > -1)
{
  var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
  var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
  document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
}
</script>
</head>
<body>
<div class="page">
    <div class="page">
    <div class="header">
        <h1>天降官网</h1>
    </div>
    <div class="content">
        <div class="download clearfix">
            <div class="clearfix">
                <a class="dd d1" href="javascript:alert('IOS正版敬请期待');">IOS正版</a>
                <a class="dd d2" href="/home">官网首页</a>
                <a class="dd d3" href="//dl.uu.cc/download/skyfall_android.apk">安卓版</a>
            </div>
            <p>IOS越狱版的玩家请点击<a href="//dl.uu.cc/download/skyfall_ios.ipa">这里</a>下载游戏</p>
        </div>
        <div class="vedio">
            <ul class="tab-hd clearfix">
                <li><span class="sp1">宣传视频</span></li>
                <li><span class="sp2">游戏实录</span></li>
                <li class="last"><span class="sp3">世界观</span></li>
            </ul>
            <div class="tab-con">
                <img class="vd1" src="<?php echo $full_base_url ?>/images/m_fm.jpg" alt="">
            </div>
        </div>
        <div class="rightbox clearfix">
            <div class="banner fl"><a href="//sf.uu.cc/show/386.html"><img src="<?php echo $full_base_url ?>/images/m_banner.jpg" alt=""></a></div>
            <div class="fr">
                <div class="fayan">
                    <a href="//bbs.uu.cc/forum-240-1.html"></a>
                </div>
                <div class="wxlb">
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="swith">
            <div class="clearfix" id="switch">
                <ul class="runContent">
                    <li><img src="<?php echo $full_base_url ?>/images/m_ban_01.jpg" width="445" height="246" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/m_ban_01.jpg" width="445" height="246" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/m_ban_01.jpg" width="445" height="246" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/m_ban_01.jpg" width="445" height="246" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/m_ban_01.jpg" width="445" height="246" /></li>
                </ul>
            </div>
            <div class="mm">
                <ul class="triggers">
                    <li class="cur"></li>
                    <li class=""></li>
                    <li class=""></li>
                    <li class=""></li>
                    <li class=""></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="box">
        <p><a href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="//bbs.uu.cc/forum-240-1.html">进入论坛</a></p>
        <p>Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</p>
        <div class="tip">
            抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br />适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
        </div>
    </div>
</div>
<!--视频弹出层-->
<div class="popup">
    <video id="video" controls="controls"></video>
    <div class="mask"></div>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/switch.js" type="text/javascript"></script>
<script>
$(function(){
    //图片轮播
    $("#switch").Switch({
        width:253,
        height:241,
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

    //视频播放
    $(".mask").height($(document).height());
    $(".tab-hd").find("li").click(function(){
        $("#video").removeAttr("src");
        var i = $(this).index() + 1;
        var sp = "//dl.uu.cc/ars/sf0814-" + i + ".mp4";
        $("#video").attr("src",sp);
        $(".popup").show();
    });
    $(".vd1").click(function(){
        $("#video").attr("src","//dl.uu.cc/ars/sf0814-1.mp4");
        $(".popup").show();
    });
});

</script>
</body>
</html>