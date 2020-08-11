<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta name="keywords" content="烈焰遮天 乐逗游戏 ios版 苹果 越狱版 游戏下载 预约礼包 热血PK 官方网站 官方微信 热门活动 游戏攻略  游戏资料 职业介绍 新闻" />
<meta name="description" content="乐逗游戏《烈焰遮天》官方网站，2014最热血PK手游，带给你记忆中的战斗快感，热血燃烧，只为PK！" />
<meta name="viewport" content="width=480, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<title>《烈焰遮天》官方网站</title>
<link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
<script type="text/javascript">
if(navigator.userAgent.indexOf('Android') > -1){
    var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
    var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
    document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
}
</script>
</head>

<body>
<div class="wrap">
    <div class="header">
        <h1>烈焰遮天</h1>
        <a class="gohome" href="/">进入官网</a>
    </div>
    <div class="content">
        <div id="android"><a href="<?php echo $this->Base->getBlock(26,"android_download");?>"><img src="<?php echo $full_base_url ?>/images/anroid.png" alt="安卓版下载"></a></div>

        <div id="ios"><a href="<?php echo $this->Base->getBlock(26,"ios_download");?>"><img src="<?php echo $full_base_url ?>/images/ios.png" alt="IOS越狱版下载"></a><a href="https://itunes.apple.com/cn/app/lie-yan-zhe-tian-song-tu-long/id898135782?l=zh&ls=1&mt=8"><img src="<?php echo $full_base_url ?>/images/ios2.png" alt="IOS正版下载"></a></div>

        <div class="tip"><img src="<?php echo $full_base_url ?>/images/tip.png" alt=""></div>
    </div>
    <?php  require_once  "_footer.ctp";?>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/switch.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    //判断android 和 ios
    var u = navigator.userAgent;
        if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
            $("#ios").show();
            $("#android").hide();
        }else{
            $("#android").show();
            $("#ios").hide();
        }
});
</script>
</body>
</html>
