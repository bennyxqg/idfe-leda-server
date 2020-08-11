<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="viewport" content="width=480, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <script type="text/javascript">
        if(navigator.userAgent.indexOf('Android') > -1){
            var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
            var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
            document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
        }
    </script>
    <script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap">

    <div class="mdown">
        <p id="ios">
            <a href="<?php  echo $this->Base->getBlock(18,"ios_download_2");?>"><img src="<?php echo $full_base_url ?>/images/wrap/m_d_01.jpg" alt=""></a>
            <a href="<?php  echo $this->Base->getBlock(18,"ios_download");?>"><img src="<?php echo $full_base_url ?>/images/wrap/m_d_02.jpg" alt=""></a>
        </p>

        <p id="android">
            <a href="<?php  echo $this->Base->getBlock(18,"android_download");?>"><img src="<?php echo $full_base_url ?>/images/wrap/m_d_03.jpg" alt=""></a>
        </p>

    </div>
    <div class="tip" id="tip_ios">
        <p>温馨提示：如若您使用微信客户端打开页面，请点击右上角<img src="<?php echo $full_base_url ?>/images/wrap/m_icon_04.png" alt="">再选择<img src="<?php echo $full_base_url ?>/images/wrap/m_icon_03.png" alt="">在浏览器中打开后进行下载。</p>
    </div>
    <div class="tip" id="tip_android">
        <p>温馨提示：如若您使用微信客户端打开页面，请点击右上角<img src="<?php echo $full_base_url ?>/images/wrap/m_icon_01.png" alt="">再选择<img src="<?php echo $full_base_url ?>/images/wrap/m_icon_02.png" alt="">在浏览器中打开后进行下载。</p>
    </div>


    <div class="footer">
        <div class="logo">
            <a href="//www.idreamsky.com"><img src="<?php echo $full_base_url ?>/images/wrap/ld_logo.png" alt=""></a>
        </div>

        <div class="link">
            <a href="#">客服中心</a>
            <span>|</span>
            <a href="#">进入论坛</a>
        </div>
        <p class="copyright">copyright  © 2009-2014 深圳市创梦天地科技有限公司 版权所有</p>
        <p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</p>
        <p>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
    </div>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script>
    $(function(){
        var u = navigator.userAgent;
        if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
            $("#ios").show();
            $("#android").hide();
            $("#tip_android").hide();
            $("#tip_ios").show();
        }else{
            $("#android").show();
            $("#ios").hide();
            $("#tip_ios").hide();
            $("#tip_android").show();
        }
    })
    //userAgent.indexOf("Android") > -1
</script>

</body>
</html>
