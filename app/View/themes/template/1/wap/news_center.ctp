<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="description" content>

    <link rel="shortcut icon" id="head-game-icon" href="">
    <title id = "head-game-title"></title>
    <meta id = "head-game-keywords" name="keywords" content="">
    <meta id = "head-game-description" name="description" content="">

    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/storm/gamemode/css/v1.1.1/index.css">
    <script type="text/javascript">
        var devieWidth = Math.min(750, document.documentElement.clientWidth);
        document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';
    </script>
    <script>
        var server_info = '//<?php echo $_SERVER['HTTP_HOST'];?>/';
    </script>
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>

<body>

<div class="pcreserve">
    <div class="top-bar">
        <img class="top-bar-button action-button">
    </div>
    <div class="news-page-content" id="news-page">

        <div class="news-content">
            <ul class="news-tab">
                <li class="back-item"><img class="back-image" src="//dl.gamdream.com/activity/storm/gamemode/image/yx_ic_news_back.png"></li>
                <li class="tab-item active" d-num="0"><a class="tab-item-title">最新</a><div class="line lineactive"></div></li>
                <li class="tab-item" d-num="1"><a class="tab-item-title">新闻</a><div class="line"></div></li>
                <li class="tab-item" d-num="2"><a class="tab-item-title">公告</a><div class="line"></div></li>
                <li class="tab-item" d-num="3"><a class="tab-item-title">活动</a><div class="line"></div></li>
            </ul>
            <div class="news-list-box active">
                <div class="content"></div>
                <div class="more-item">查看更多</div>
            </div>
            <div class="news-list-box">
                <div class="content"></div>
                <div class="more-item">查看更多</div>
            </div>
            <div class="news-list-box">
                <div class="content"></div>
                <div class="more-item">查看更多</div>
            </div>
            <div class="news-list-box">
                <div class="content"></div>
                <div class="more-item">查看更多</div>
            </div>

        </div>
    </div>
    <div class="warp warp05">
              <img class="share weixin">
             <a class="sina-link"><img class="share sina"></a>
        </div>
        <div class="warp footer">
            <img class="footer-image" src="//dl.gamdream.com/activity/storm/jy/images/foot@2x.png">
        </div>
    <div class="weixin-pop pop">
        <img class="img-tip">
    </div>

    <!--预约弹窗-->
    <div class="yuyue-pop">
        <div class="yuyue-white-bg">
            <div class="phone-select">
                <div class="andriod-select phone-select-item active">Android</div>
                <div class="ios-select phone-select-item">iOS</div>
            </div>
            <div class="phone-input">
                <input class="input-text" placeholder="请输入手机号码" autocomplete="off" name="phone" id="phone" oninput="this.value = this.value.slice(0, 11)">
            </div>
            <div class="code-input">
                <input class="input-text" placeholder="请输入验证码" autocomplete="off" name="code" id="code">
                <div class="get-code-button">获取验证码</div>
            </div>
            <img class="yuyue-button">
        </div>
        <img class="yuyue-white-close" src="//dl.gamdream.com/activity/storm/gamemode/image/pop-close-button.png">

    </div>

    <!--预约结果-->
    <div class="yuyue-result-pop pop">
        <img class="img-tip">
    </div>

    <!--提示浏览器下载-->
    <div class="browser-tips-pop pop">
        <img class="img-tip">
    </div>

</div>

<script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
<script charset="utf-8" type="text/javascript" src="//dl.gamdream.com/activity/storm/gamemode/js/common.js"></script>
<script src="//dl.gamdream.com/activity/storm/gamemode/js/v1.1.1/index.js"></script>

</body>

</html>

