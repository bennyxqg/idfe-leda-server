<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title>富士康专属城战版-我们的城邦</title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">

    <link media="screen" href="<?php echo $full_base_url ?>/zt_fsk/css/mobile.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
</head>

<body>
<div class="wrap">
    <div class="header">
        <h1>富士康专属城战版-我们的城邦</h1>
        <h2>今日公测·你将加冕为王</h2>
    </div>
    <div class="content">
        <div class="box">
            <h2 class="ico_01">获得员工专属礼包<em></em></h2>
            <div class="cdkey" id="cdkey">&nbsp;</div>
            <p class="tip"><a href="<?php echo $this->Base->getBlock(26,"android_download");?>">下载游戏</a>兑换员工专属礼包</p>
        </div>
        <div class="box">
            <h2 class="ico_02">抽取iphone5s，变身高富帅，白富美</h2>
            <div class="draw">
                <ul class="praise clearfix">
                    <li class="jp_1" id="card1">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_01.png" alt="">
                        <h4>谢谢参与</h4>
                    </li>
                    <li class="jp_2" id="card2">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_02.png" alt="">
                        <h4>50元话费卡</h4>
                    </li>
                    <li class="jp_3" id="card3">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_03.png" alt="">
                        <h4>iPad mini2</h4>
                    </li>
                    <li class="jp_4" id="card4">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_04.png" alt="">
                        <h4>乐逗移动电源</h4>
                    </li>
                    <li class="jp_5" id="card5">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_05.png" alt="">
                        <h4>iPhone5s</h4>
                    </li>
                    <li class="jp_6" id="card12">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_06.png" alt="">
                        <h4>100元话费卡</h4>
                    </li>
                    <li class="jp_2 marL" id="card6">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_02.png" alt="">
                        <h4>50元话费卡</h4>
                    </li>
                    <li class="jp_5" id="card11">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_05.png" alt="">
                        <h4>iPhone5s</h4>
                    </li>
                    <li class="jp_3" id="card10">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_03.png" alt="">
                        <h4>iPad mini2</h4>
                    </li>
                    <li class="jp_4" id="card9">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_04.png" alt="">
                        <h4>乐逗移动电源</h4>
                    </li>
                    <li class="jp_6" id="card8">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_06.png" alt="">
                        <h4>100元话费卡</h4>
                    </li>
                    <li class="jp_1" id="card7">
                        <img src="<?php echo $full_base_url ?>/zt_fsk/images/jp_01.png" alt="">
                        <h4>谢谢参与</h4>
                    </li>
                </ul>
                <button id="btn_draw">秒变高富帅</button>
            </div>
        </div>
        <div class="box">
            <h2 class="ico_03">玩游戏，赢取iphone6</h2>
            <div class="download"><a href="//dl.uu.cc/download/lieyanzhetian_v0.0.4.0_LD0S0N00009.apk">游戏下载</a></div>
            <p>小提示：如果你使用微信打开页面，请点击右上角菜单 ，选择<img src="<?php echo $full_base_url ?>/zt_fsk/images/tub.jpg" alt="">，再进行下载。</p>
            <div class="btn clearfix">
                <a href="//l.uu.cc" class="fl">进入官网</a>
                <a href="#" id="share" class="fr">召集兄弟</a>
            </div>
        </div>
    </div>
</div>
<!--分享指引-->
<div class="popup">
    <div class="mask"></div>
    <div class="pbox"></div>
</div>
<!--中奖弹窗-->
<div class="pop2" id="win">
    <div class="mask"></div>
    <div class="pbox">
        <h3>恭喜你获得了<span id="jp"></span></h3>
        <div class="form clearfix">
            <input class="ipt fl" type="text" />
            <input class="submit fr" type="submit" value="&nbsp;" id="phone" />
        </div>
        <p>输入手机号，凭借短信前往银狐网吧领奖</p>
        <div class="close"></div>
    </div>
</div>
<div class="pop2" id="lose">
    <div class="mask"></div>
    <div class="pbox wz_box"></div>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/zt_fsk/js/cookie.js"></script>
<script src="<?php echo $full_base_url ?>/zt_fsk/js/js.js?v=20141104"></script>
</body>
</html>
