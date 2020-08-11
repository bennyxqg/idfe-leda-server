<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    <link type="text/css" rel="stylesheet" href="<?php echo $full_base_url ?>/css/m.css" />
</head>
<body>
    <div class="lock_wrp" id="lock">
        <div class="lock">
            <i></i><br />
            为了更好的体验，请使用竖屏浏览
        </div>
    </div>
    <div class="wrapper">
        <section class="sec0"><div class="h_wrp">
            <h2>空白过渡页</h2>
        </div></section>
        <section class="sec1"><div class="h_wrp">
            <h2>恢弘场景</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
        <section class="sec2"><div class="h_wrp">
            <h2>爽快打击</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
        <section class="sec3"><div class="h_wrp">
            <h2>即时战斗</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
        <section class="sec4"><div class="h_wrp">
            <h2>有钱任性</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
        <section class="sec5"><div class="h_wrp">
            <h2>邀请伙伴</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
        <section class="sec6"><div class="h_wrp">
            <h2>创梦首测</h2>
            <div class="btn">
                <a href="<?php BLOCK('ios_download_url') ?>"><img src="<?php echo $full_base_url ?>/images/btn.png" alt=""></a>
                <p style="font-size:16px;color:#fff;font-weight:700;text-align:center;">仅限IOS越狱用户</p>
            </div>
            <p style="font-size:16px;color:#fff;font-weight:700;text-align:left;position:absolute;left:0;padding:0 20px;bottom:10%;">(如使用微信打开，则请点击右上角菜单，选择“在浏览器中打开”下载)</p>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
    </div>
</body>
<script src="<?php echo $full_base_url;?>/js/zepto.min.js"></script>
<script src="<?php echo $full_base_url;?>/js/parallax.js"></script>
<script src="<?php echo $full_base_url;?>/js/index.js"></script>
</html>