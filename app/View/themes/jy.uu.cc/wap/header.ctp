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
    <link rel="stylesheet" type="text/css" href="//mhhy.dl.gxpan.cn/tmp/hy/service/swiper.min.css" />
    <script type=text/javascript>
        (function(doc, win) {
            console.log('sss')
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
<!--    <script type="text/javascript" src="//mhhy.dl.gxpan.cn/tmp/hy/vconsole.min.js"></script>
    <script type="text/javascript" src="//mhhy.dl.gxpan.cn/tmp/hy/vconsole-sources.min.js"></script>-->

    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
<link href="//dl.gamdream.com/activity/storm/jy/1.css" rel="stylesheet"></head>
<body>
<div id="loading"></div>
<div class="shadow"></div>
<!-- 弹窗S -->
<!--<div class="shadow-gift">

</div>-->
<div class="head">
    <img class="logo" src="//dl.gamdream.com/activity/storm/jy/images/icon@2x.png">
    <div>
        <a class="head-btn down" href="/download">下载游戏</a>
        <div class="head-btn contact-kefu">联系客服</div>
    </div>
</div>
<div id="dialog-kefu" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <div class="kefu-des kefu-tel">客服电话： 4008400188</div>
    <div class="kefu-des kefu-qq">客服 Q Q： 2191439445</div>
</div>