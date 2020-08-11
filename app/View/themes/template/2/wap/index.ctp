<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="description" content>

    <link rel="shortcut icon" id="head-game-icon" href="">
    <title id="head-game-title"></title>
    <meta id="head-game-keywords" name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/storm/gamemode/css/v1.2/index.css?20200422">
    <!-- <link rel="stylesheet" type="text/css" href="./index.css"> -->
    <link rel="stylesheet" type="text/css"
        href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.3.1.min.css">
    <script type="text/javascript">
        var devieWidth = Math.min(750, document.documentElement.clientWidth);
        document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';
        var server_info = '//<?php echo $_SERVER['HTTP_HOST'];?>/';
    </script>
</head>

<body>

    <div class="pcreserve" id="index_page">
        <div class="top-bar">
            <!--        <img class="logo" >-->
            <!--          <div class="title-div">-->
            <!--            <div class="title">我是游戏名称</div>-->
            <!--            <div class="sub-title">我是一句话描述</div>-->
            <!--          </div>-->
            <div class="top-bar-button action-button"></div>
        </div>
        <div class="content-div">
            <div class="wrap wrap01">
                <img class="download-button action-button">
            </div>
            <div class="wrap wrap06">
                <!-- 空白展示页 -->
            </div>
            <!-- 新闻 -->
            <div class="wrap wrap07">

                <div class="news-swiper">
                    <div class="swiper-wrapper">
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="news-swiper-pagination"></div>
                </div>

                <div class="news-content">
                    <ul class="news-tab">
                        <li class="tab-item active" d-num="0"><a class="tab-item-title">最新</a>
                            <div class="line lineactive"></div>
                        </li>
                        <li class="tab-item" d-num="1"><a class="tab-item-title">新闻</a>
                            <div class="line"></div>
                        </li>
                        <li class="tab-item" d-num="2"><a class="tab-item-title">公告</a>
                            <div class="line"></div>
                        </li>
                        <li class="tab-item" d-num="3"><a class="tab-item-title">活动</a>
                            <div class="line"></div>
                        </li>
                        <li class="more-action"></li>
                    </ul>
                    <div class="news-list-box active">
                    </div>
                    <div class="news-list-box ">
                    </div>
                    <div class="news-list-box ">
                    </div>
                    <div class="news-list-box ">
                    </div>

                    <!--                 <div class="more-action">查看更多></div> -->
                </div>

            </div>
            <!-- 轮播 -->
            <div class="wrap wrap02">
                <div class="feature-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                    </div>
                    <!-- 如果需要分页器 -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <div class="wrap wrap03">
            <ul class="video-list">
            </ul>
            <a class='linkTo-videos_center'></a>
        </div>
        <div class="wrap wrap04">
            <a class="share-link">
            </a>
            <a class="share-link">
            </a>
            <a class="share-link">
            </a>
            <a class="share-link">
            </a>
        </div>
        <div class="wrap footer">
            <img class="footer-image">
        </div>
        <div class="weixin-pop pop">
            <img class="img-tip">
            <!--        <div class="qrcode-white-bg">-->
            <!--            <img class="qrcode">-->

            <!--        </div>-->
            <!--             <div class="tips">长按识别二维码</div>-->

            <!--           <div class="tips-title"><a>关注公众号      </a><a class="weixin-code">weixin</a></div>-->
            <!--        </div>-->
        </div>
        <!--提示浏览器下载-->
        <div class="browser-tips-pop pop">
            <img class="img-tip"
                src="//dl.gamdream.com/activity/storm/gamemode/image/yx_png_openinbrowser_floatingwindow.png">
        </div>
        <!--预约结果-->
        <div class="yuyue-result-pop pop">
            <img class="img-tip">
            <img class="yuyue-white-close"
                src="//dl.gamdream.com/activity/storm/gamemode/image/yx_ic_gamereservation_shutdown.png">
        </div>
        <!--视频-->
        <div class="video-pop pop">
            <div id="video-player-box" class="hide">
                <video id="video-player" controls="controls">
                    <source id="video-player-play" src type="video/mp4">
                </video>
            </div>
        </div>
        <!--预约弹窗-->
        <div class="yuyue-pop">
            <div class="yuyue-white-bg">
                <div class="phone-select">
                    <div class="andriod-select phone-select-item active"><a class="tab-item-title">Android</a>
                        <div class="line lineactive"></div>
                    </div>
                    <div class="ios-select phone-select-item"><a class="tab-item-title">iOS</a>
                        <div class="line"></div>
                    </div>


                </div>
                <div class="phone-input">
                    <input class="input-text" placeholder="请输入手机号码" autocomplete="off" name="phone" id="phone"
                        oninput="this.value = this.value.slice(0, 11)">
                </div>
                <div class="code-input">
                    <input class="input-text" placeholder="请输入验证码" autocomplete="off" name="code" id="code">
                    <div class="get-code-button">获取验证码</div>
                </div>
                <img class="yuyue-button">
            </div>
            <img class="yuyue-white-close"
                src="//dl.gamdream.com/activity/storm/gamemode/image/yx_ic_gamereservation_shutdown.png">

        </div>

    </div>

    <script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
    <script src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.4.2.min.js"></script>
    <script charset="utf-8" type="text/javascript" src="//dl.gamdream.com/activity/storm/gamemode/js/common.js">
    </script>
    <script src="//dl.gamdream.com/activity/storm/gamemode/js/v1.2/index.js?20200421"></script>
    <!-- <script src="./index.js"></script> -->

</body>

</html>