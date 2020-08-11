<?php
    $this->Website->init();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>FAB首页</title>
        <meta http-equiv=x-dns-prefetch-control content=on>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=renderer content=webkit>
    <meta name=apple-touch-fullscreen content=yes>
    <meta name=apple-mobile-web-app-capable content=yes>
    <meta name=apple-mobile-web-app-status-bar-style content=black>
    <meta name=format-detection content="telephone=no, email=no, address=no">
    <meta name=msapplication-tap-highlight content=no>
    <meta name=x5-fullscreen content=true>
    <meta name=full-screen content=true>
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
    <script type=text/javascript>
        (function(doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    var clientHeight = docEl.clientHeight;
                    if(!clientWidth) return;
                    clientWidth = clientWidth >= 667 ? 667 : clientWidth;
                    var rem = clientWidth / 10;
                    docEl.style.fontSize = rem + 'px';
                    var dpr = parseInt(window.devicePixelRatio);
                    docEl.setAttribute('dpr', dpr);
                };
            if(!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);

            // 解决个别浏览器不支持meta标签设置, 阻止手势和快速点击缩放的功能
            doc.addEventListener('touchstart', function(e) {
                if(e.touches.length > 1){
                    e.preventDefault();
                }
            });
            var lastTouchEnd = 0;
            doc.addEventListener('touchend', function(e) {
                var now = +(new Date());
                if(now - lastTouchEnd <= 300) {
                    e.preventDefault();
                }
                lastTouchEnd = now;
            }, false);
        }) (document, window);
    </script>
    <script type="text/javascript" src="//mhhy.dl.gxpan.cn/tmp/hy/service/jquery.min.js"></script>
    <script type="text/javascript" src="//mhhy.dl.gxpan.cn/tmp/hy/service/clipboard.min.js"></script>
    <script type="text/javascript" src="//mhhy.dl.gxpan.cn/tmp/hy/service/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//mhhy.dl.gxpan.cn/tmp/hy/service/swiper.min.css" />
<link href="//dl.gamdream.com/activity/storm/jy/1.css" rel="stylesheet"></head>
<script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
<body>
<div id="loading"></div>
<div class="shadow"></div>
<!-- 弹窗S -->
<!--<div class="shadow-gift">

</div>-->
<div class="dialog hide" id="start-get">
    <div class="dialog-close"></div>
    <input class="tel-input block" value="" id="tel" placeholder="请输入手机号码"/>
    <div class="verify-wrap margin-center">
        <input class="verify-code-input inline-block" value="" id="verifyCode" placeholder="请输入验证码"/>
        <div class="get-verfy-code inline-block">获取验证码</div>
    </div>
    <div class="get-now-btn"></div>
</div>
<!-- 预约成功S -->
<div class="dialog hide" id="succ-get">
    <div class="dialog-close"></div>
    <div class="get-result-title tc">预约成功！</div>
    <img class="dialog-get-succ" src="//dl.gamdream.com/activity/storm/jy/images/dialog-title@2x.png">
    <div class="exchange-code-wrap margin-center">
        <div class="result-code inline-block tc" id="exchangeCode">4HATYCN14</div>
        <div class="copy-btn inline-block" data-clipboard-text="4HATYCN14" data-clipboard-action="copy">复制兑换码</div>
    </div>
    <div class="rule-box">
        <div class="exchange-rule-title"></div>
        <div class="rule-des">1.复制兑换码到游戏内可以兑换礼包</div>
        <div class="rule-des">2.在游戏内-【设置】-【兑换码】中输入兑换码</div>
        <div class="rule-des">3.该兑换码仅限安卓用户使用</div>
    </div>
</div>
<div id="dialog-kefu" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <div class="kefu-des kefu-tel">客服电话： 4008400188</div>
    <div class="kefu-des kefu-qq">客服 Q Q： 123456789</div>
</div>
<div id="dialog-qq" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <img class="dialog-qq-logo" src="//dl.gamdream.com/activity/storm/jy/images/qc@2x.png">
    <div class="qqqun-des">官方1群： 123456789</div>
    <div class="qqqun-des">官方2群： 123456789</div>
</div>
<div id="dialog-sina" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <img class="dialog-qrcode" src="//dl.gamdream.com/activity/storm/jy/images/wcode@2x.png">
    <div class="dialog-contact-info">扫码关注官方微博</div>
</div>
<div id="dialog-wechat" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <img class="dialog-qrcode" src="//dl.gamdream.com/activity/storm/jy/images/wcode@2x.png">
    <div class="dialog-contact-info">扫码关注微信公众号</div>
</div>
<div class="head">
    <img class="logo" src="//dl.gamdream.com/activity/storm/jy/images/icon@2x.png">
    <div>
        <a class="head-btn down" href="/download">下载游戏</a>
        <a class="head-btn goto" href="/">进入官网</a>
    </div>
</div>

    <div class="content">
    <div class="video-btn" data-src=""></div>
    <div class="down-btn-wrap">
        <a class="download2-btn" href="/download"></a>
        <div class="gift-btn"></div>
    </div>
    <img class="title-gz" src="//dl.gamdream.com/activity/storm/jy/images/title@2x.png">
    <div class="book-bg">
        <div class="book-title book-title-gz"></div>
        <div class="book-title book-title-wn"></div>
        <div class="book-top-left">
            <img class="divider" src="//dl.gamdream.com/activity/storm/jy/images/divider@2x.png">
            <a class="book-btn book-btn-click1" title="梦幻改造" href="/fab_gz"></a>
        </div>
        <div class="right-border">
            <img class="right-pic" src="//dl.gamdream.com/activity/storm/jy/images/right-pic@2x.png">
            <a class="book-btn book-btn-click2" title="家的温暖" href="/fab_wn"></a>
        </div>
    </div>
    <img class="book-cat" src="//dl.gamdream.com/activity/storm/jy/images/cat@2x.png">
    <img class="title-intr" src="//dl.gamdream.com/activity/storm/jy/images/title-intr@2x.png">
    <div id="tab-wrap">
        <div class="tab-switch">
            <div class="tab act">版本介绍</div>
            <div class="tab">活动内容</div>
        </div>
        <div class="tab-content">
            <div class="tab-content-item">
                <img class="tab-content-img" src="//dl.gamdream.com/activity/storm/jy/images/cat-pic_1@2x.png">
                <div class="content-wrap">
                    <div class="content-title overflow-ellipsis">家族系统</div>
                    <div class="content-des">家族系统全面启动啦，加入家族，开始家族之旅吧。</div>
                </div>
            </div>
            <div class="fenge"></div>
            <div class="tab-content-item">
                <img class="tab-content-img" src="//dl.gamdream.com/activity/storm/jy/images/cat-pic_2@2x.png">
                <div class="content-wrap">
                    <div class="content-title">周赛（探险大赛）</div>
                    <div class="content-des">家园推出全新周赛-探险大赛，快来参加比赛提升段位，赢取稀有头像奖励吧！</div>
                </div>
            </div>
            <div class="fenge"></div>
            <div class="tab-content-item">
                <img class="tab-content-img" src="//dl.gamdream.com/activity/storm/jy/images/cat-pic_3@2x.png">
                <div class="content-wrap">
                    <div class="content-title">飞行乐园</div>
                    <div class="content-des">为了帮家人们顺利通关，飞行乐园横空出世！快来闯关，利用爆炸充能产出更多纸飞机助阵通关吧。</div>
                </div>
            </div>
        </div>
        <div class="tab-content hide">
            <div class="tab-content-item">
                <img class="tab-content-img" src="//dl.gamdream.com/activity/storm/jy/images/cat-pic_4@2x.png">
                <div class="content-wrap">
                    <div class="content-title overflow-ellipsis">周年庆活动-限定皮肤</div>
                    <div class="content-des">家园1周岁啦！是时候加入周年庆典，赢取周年限定皮肤啦~</div>
                </div>
            </div>
            <div class="fenge"></div>
            <div class="tab-content-item">
                <img class="tab-content-img" src="//dl.gamdream.com/activity/storm/jy/images/cat-pic_5@2x.png">
                <div class="content-wrap">
                    <div class="content-title">迎新签到限定皮肤</div>
                    <div class="content-des">家园全新月签到活动开启，签满整月即可获赠限定签到皮肤！</div>
                </div>
            </div>
            <div class="fenge"></div>
            <div class="tab-content-item">
                <img class="tab-content-img" src="//dl.gamdream.com/activity/storm/jy/images/cat-pic_6@2x.png">
                <div class="content-wrap">
                    <div class="content-title">七夕活动</div>
                    <div class="content-des">七夕限定内容，闯关赠星星！通关七夕主题活动卡的任务后，即可获得对应丰厚礼包，同时解锁七夕限定小剧场！</div>
                </div>
            </div>
        </div>
    </div>


    <!--轮播图S-->
    <div class="container home-page">
        <div class="titlechr"></div>
        <div id="slide" class="slide index-slide">
            <!-- <div class="img"><img src="http://mhhy.dl.gxpan.cn/tmp/hy/love/images/banner1.png"/></div>
            <div class="img"><img src="http://mhhy.dl.gxpan.cn/tmp/hy/love/images/banner2.png"/></div>
            <div class="img"><img src="http://mhhy.dl.gxpan.cn/tmp/hy/love/images/banner3.png"/></div>
            <div class="img"><img src="http://mhhy.dl.gxpan.cn/tmp/hy/love/images/banner4.png"/></div>
            <div class="img"><img src="http://mhhy.dl.gxpan.cn/tmp/hy/love/images/banner5.png"/></div> -->
            <?php
                    SHOW_DATAS('<div class="img"><img src="@@STR2@@"></div>',
                    'Y-m-d',3,12);
                ?>
        </div>
    </div>

     <!--页脚-->
     <img class="foot" src="//dl.gamdream.com/activity/storm/jy/images/foot@2x.png">
</div>
<div id="video-player-box" class="hide">
    <video id="video-player" controls="controls">
        <source id="video-player-play" src="" type="video/mp4">
    </video>
    <div class="close"></div>
</div>
<div class="toast-shdow"></div>
<div class="toast"></div>
<script type="text/javascript" src="//dl.gamdream.com/activity/storm/jy/styles.js"></script><script type="text/javascript" src="//dl.gamdream.com/activity/storm/jy/main.js"></script></body>
</html>