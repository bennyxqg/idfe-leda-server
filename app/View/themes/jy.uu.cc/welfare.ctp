<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div class="welfare-page">
    <div class="top">
    <div class="wrap-menu">
        <a class="top-logo" href="home.html"></a>
        <div class="top-menu">
            <a class="menu-item menu1" href="/">官网首页</a>
            <a class="menu-item menu2" href="/news/1.html">游戏资讯</a>
            <a class="menu-item menu3 act" href="/welfare">福利中心</a>
            <a class="menu-item menu4" href="/news/2.html">游戏攻略</a>
             <a class="menu-item menu5" href="/media_appreciate/1.html">影音鉴赏</a>
        </div>
    </div>

</div>
    <!-- 领取礼包弹窗S -->
<div class="dialog exchange-dialog hide" id="start-get">
    <div class="close"></div>
    <input class="tel" id="tel" placeholder="输入手机号" value=""/>
    <input class="tel-code" id="tel-code" placeholder="输入验证码" value=""/>
    <div class="get-tel-code" id="get-tel-code">获取验证码</div>
    <img class="exchange-now" src="//dl.gamdream.com/website/jy/images/award-now@2x.png" alt="立即领取">
</div>
<!-- 获取兑换码成功S -->
<div class="dialog exchange-success hide">
    <div class="close"></div>
    <div class="exchange-code" id="exchangeCode"></div>
    <div class="copycode" data-clipboard-text=""></div>
</div>
<!-- 兑换码已经领取过S -->
<div class="dialog exchange-got hide" id="exchange-got">
    <div class="close"></div>
    <div class="exchange-code" id="exchange-got-code"></div>
    <div class="copycode" data-clipboard-text=""></div>
</div>

<div class="download-dialog hide">
    <div class="close"></div>
    <img class="android-qr" src="//dl.gamdream.com/website/jy/images/android-qr@2x.png">
    <img class="appstore-qr" src="//dl.gamdream.com/website/jy/images/appstore-qr@2x.png">
</div>
    <div class="welfare-wrap">
        <img class="welfare-title" src="//dl.gamdream.com/website/jy/images/welfare-title@2x.png" />
        <div class="welfare-content">
            <div class="welfare-tab">
                <div class="welfare-menu welfare-menu0 act">
                    <div class="menu-line"></div>
                </div>
                <div class="welfare-menu welfare-menu1">
                    <div class="menu-line"></div>
                </div>
                <div class="welfare-menu welfare-menu2">
                    <div class="menu-line"></div>
                </div>
            </div>
            <img class="welfare-parrot" src="//dl.gamdream.com/website/jy/images/welfare-parrot@2x.png" />
            <img class="welfare-act" src="//dl.gamdream.com/website/jy/images/welfare-cat@2x.png" />
            <div class="welfare-detail-wrap wrap0">
                <div class="welfare-detail-inner">
                    <div class="detail-text">
                        全新版本，梦幻升级！在官网下载安装最新版本的家人们，即可获得我们为你准备的额外礼包，游戏中输入兑换码即可领取，快来加入吧！
                    </div>
                    <div class="prop-wrap">
                        <!-- <div class="prop-box-wrap">
                            <div class="prop-box">
                                <img class="prop-item" src="//dl.gamdream.com/website/jy/images/heart@2x.png" />
                            </div>
                            <div class="prop-describe">无限体力 30分钟</div>
                        </div>
                        <div class="prop-box-wrap">
                            <div class="prop-box">
                                <img class="prop-item" src="//dl.gamdream.com/website/jy/images/rainbow@2x.png" />
                            </div>
                            <div class="prop-describe">无限体力 30分钟</div>
                        </div>
                        <div class="prop-box-wrap">
                            <div class="prop-box">
                                <img class="prop-item" src="//dl.gamdream.com/website/jy/images/airplane@2x.png" />
                            </div>
                            <div class="prop-describe">无限体力 30分钟</div>
                        </div> -->
                        <?php
                            SHOW_DATAS('<div class="prop-box-wrap"><div class="prop-box"><img class="prop-item" src="@@STR1@@" /></div><div class="prop-describe">@@STR2@@</div></div>',
                                'Y-m-d',9);
                        ?>
                    </div>
                    <img class="getnow-btn" src="//dl.gamdream.com/website/jy/images/getnow-btn@2x.png">
                </div>
            </div>
            <div class="welfare-detail-wrap wrap1 hide">
                <div class="game-welfare-inner">
                    <div class="game-welfare">
                        <div class="game-welfare-title">每日签到</div>
                        <div class="game-welfare-detail">游戏内登陆签到，即可领取随机道具，包括体力、纸飞机等诸多福利</div>
                        <div class="game-welfare-mask">
                            <img class="game-welfare-pic" src="//dl.gamdream.com/website/jy/images/demo-gamepic@2x.png" />
                        </div>
                    </div>
                    <div class="game-welfare">
                        <div class="game-welfare-title">惊喜分享</div>
                        <div class="game-welfare-detail">分享游戏，即可获得随机道具，更多惊喜等待你的发现</div>
                        <div class="game-welfare-mask">
                            <img class="game-welfare-pic" width="100%" src="//dl.gamdream.com/website/jy/images/welfare-share.jpg" />
                        </div>
                    </div>
                    <div class="game-welfare">
                        <div class="game-welfare-title">迎新会</div>
                        <div class="game-welfare-detail">萌新七天签到，每日签到均可获得随机道具，签满七天可领取限定皮肤</div>
                        <div class="game-welfare-mask">
                            <img class="game-welfare-pic" src="//dl.gamdream.com/website/jy/images/welfare-yx.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="welfare-detail-wrap wrap2 hide">
                <div class="daily-welfare-inner">
                    <div class="daily-welfare">
                        <div class="daily-welfare-title">今天加油鸭</div>
                        <div class="daily-welfare-detail">扫码关注公众号，进入公众号领取，每日一次。</div>
                        <img class="daily-welfare-pic" src="//dl.gamdream.com/website/jy/images/daily-qrcode@2x.png" />
                        <div class="daily-welfare-bottom">关注梦幻家园官方微信</div>
                    </div>

                    <div class="daily-welfare mr-zeropx">
                        <div class="daily-welfare-title">每周礼包</div>
                        <div class="daily-welfare-detail">每周都可在官网领取的礼包，游戏中输入兑换码即可领取。</div>
                        <div class="daily-exchange">兑换码</div>
                        <div class="daily-watchword"><?php echo GET_BLOCK('week_gift_code');?></div>
                        <div class="prop-box">
                            <img class="prop-item" src="<?php echo GET_BLOCK('week_gift_image');?>" />
                        </div>
                        <div class="prop-label"><?php echo GET_BLOCK('week_gift_name');?></div>
                        <div class="daily-welfare-bottom week-welfare">请到游戏中兑换哦</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once 'footer.ctp';
?>