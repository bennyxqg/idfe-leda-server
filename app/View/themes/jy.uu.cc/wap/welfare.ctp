<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>福利中心</title>
<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<div class="welfare-page">
        <div class="menu">
    <a class="menu-item menu-first" href="/"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-infx" href="/news/1.html"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-giftx" href="/welfare"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-stratage" href="/news/2.html"></a>
</div>
<script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
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



        <img class="banner" src="//dl.gamdream.com/activity/storm/jy/images/banner-welfare@2x.png" />
        <div class="welfare-list">

            <div class="welfare-item act">
                <div class="welfare-item-wrap">
                    <img class="welfare-item-bg" src='//dl.gamdream.com/activity/storm/jy/images/welfare0.png'>
                    <div class="get-detail">点击了解详情</div>
                </div>
                <div class="home-welfare-open">
                    <div class="welfare-des">全新版本，梦幻升级！在官网下载安装最新版本的家人们，即可获得我们为你准备的额外礼包，游戏中输入兑换码即可领取，快来加入吧！</div>
                    <div class="welfare-box">
                        <!-- <div class="welfare-coin">
                            <img class = "gift-icon" src = "//dl.gamdream.com/activity/storm/jy/images/wx-coin-icon.png">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <img class = "gift-icon" src = "//dl.gamdream.com/activity/storm/jy/images/wx-coin-icon.png">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <img class = "gift-icon" src = "//dl.gamdream.com/activity/storm/jy/images/wx-coin-icon.png">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div> -->
                        <?php
                            SHOW_DATAS('<div class="welfare-coin">
                            <img class = "gift-icon" src = "@@STR1@@">
                            <div class="welfare-coin-des">@@STR2@@</div>
                        </div>',
                                'Y-m-d',9);
                        ?>
                    </div>
                    <div class="welfare-get-now"></div>
                </div>
            </div>
            <div class="welfare-item">
                <div class="welfare-item-wrap">
                    <img class="welfare-item-bg" src='//dl.gamdream.com/activity/storm/jy/images/welfare1.png'>
                    <div class="get-detail">点击了解详情</div>
                </div>
                <div class="welfare-open">
                    <div class="welfare-des">每周都可在官网领取的礼包，游戏中输入兑换码即可领取.
                        <br>本周兑换码：暑期快乐</div>
<!--                     <div class="welfare-box">
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                    </div>
                    <div class="welfare-get-now"></div> -->
                </div>
            </div>
            <div class="welfare-item">
                <div class="welfare-item-wrap">
                    <img class="welfare-item-bg" src='//dl.gamdream.com/activity/storm/jy/images/welfare2.png'>
                    <div class="get-detail">点击了解详情</div>
                </div>
                <div class="welfare-open">
                    <div class="welfare-des">扫码关注公众号，进入公众号领取，每日一次</div>
<!--                     <div class="welfare-box">
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                    </div>
                    <div class="welfare-get-now"></div> -->
                </div>
            </div>
            <div class="welfare-item">
                <div class="welfare-item-wrap">
                    <img class="welfare-item-bg" src='//dl.gamdream.com/activity/storm/jy/images/welfare3.png'>
                    <div class="get-detail">点击了解详情</div>
                </div>
                <div class="welfare-open">
                    <div class="welfare-des">游戏内登陆签到，即可领取随机道具，包括体力、纸飞机等诸多福利</div>
<!--                     <div class="welfare-box">
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                    </div>
                    <div class="welfare-get-now"></div> -->
                </div>
            </div>
            <div class="welfare-item">
                <div class="welfare-item-wrap">
                    <img class="welfare-item-bg" src='//dl.gamdream.com/activity/storm/jy/images/welfare4.png'>
                    <div class="get-detail">点击了解详情</div>
                </div>
                <div class="welfare-open">
                    <div class="welfare-des">分享游戏，即可获得随机道具，更多惊喜等待你的发现</div>
<!--                     <div class="welfare-box">
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                    </div>
                    <div class="welfare-get-now"></div> -->
                </div>
            </div>
            <div class="welfare-item">
                <div class="welfare-item-wrap">
                    <img class="welfare-item-bg" src='//dl.gamdream.com/activity/storm/jy/images/welfare5.png'>
                    <div class="get-detail">点击了解详情</div>
                </div>
                <div class="welfare-open">
                    <div class="welfare-des">萌新七天签到，每日签到均可获得随机道具，签满七天可领取限定皮肤</div>
<!--                     <div class="welfare-box">
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                        <div class="welfare-coin">
                            <div class="welfare-coin-des">无限体力x1</div>
                        </div>
                    </div>
                    <div class="welfare-get-now"></div> -->
                </div>
            </div>
        </div>
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