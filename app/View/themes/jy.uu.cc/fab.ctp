<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div id="content" class="fab">
    <div class="top-bg"></div>
    <a class="logo" href="/fab" title="梦幻家园"></a>
    <a class="goto" href="/" title="进入官网"></a>
    <!-- 右侧收缩面板S -->
    <!-- 右侧收缩面板S -->
<div class="panel-box">
<!--    <a href="###" class="panel-btn tribune" title="官网论坛"></a>-->
   <a href="###" class="panel-btn back-top" title="官网论坛"></a>
    <div class="download-panel">
        <div class="panel-arrow right"></div>
        <img class="panel-qr" src="<?php echo GET_BLOCK('weixin_qrcode');?>"/>
        <a class="panel-android" href="<?php echo GET_BLOCK('android_download_url');?>" title="Android下载"></a>
        <a class="panel-appstore" href="<?php echo GET_BLOCK('ios_download_url');?>" title="App Store下载" target="_blank"></a>
        <a class="panel-tel" href="###" title="电话"></a>
    </div>
</div>
    <!-- 视频播放S -->
    <img class="video-btn" src="//dl.gamdream.com/website/jy/images/video@2x.png">
    <!-- 领取礼包S -->
    <div id="ani-gift-wrap">
	        <div class="proplist-title-bg">下载梦幻家园，享温馨大礼包，家园陪你过暑假</div>
        <div class="gift-bg">
            <?php
                SHOW_DATAS('<div class="gift-item-wrap"><div class="gift-item-bg"><img class="props v-middle" src="@@STR1@@" /></div><div class="prop-des">@@STR2@@</div></div>',
                    'Y-m-d',9);
            ?>
        </div>
        <div class="welfare-box">
            <img class="welfare" src="//dl.gamdream.com/website/jy/images/welfare@2x.png" alt="福利">
            <img class="get-gift" src="//dl.gamdream.com/website/jy/images/get-gift@2x.png">
        </div>
    </div>
    <!-- 梦幻 改造 家S -->
    <div class="book-box">
        <img class="book-title" src="//dl.gamdream.com/website/jy/images/title1@2x.png" alt="梦幻改造家">
        <div class="book-bg">
            <a class="book-left" href="/fab_wn?tab=gz"></a>
            <a class="book-right" href="/fab_wn?tab=wn"></a>
        </div>
        <img class="cat" src="//dl.gamdream.com/website/jy/images/cat@2x.png">
        <img class="sugar" src="//dl.gamdream.com/website/jy/images/sugar@2x.png">
    </div>

    <!-- 新版本一览S -->
    <div class="newversion-box">
        <img class="newversion-title" src="//dl.gamdream.com/website/jy/images/title2@2x.png" alt="新版本一览">
        <div class="newversion-bg">
            <div class="newversion-tab-box">
                <div class="newversion-tab active">
                    <span class="newversion-icon"></span>
                </div>
                <div class="newversion-tab">
                    <span class="newversion-icon"></span>
                </div>
            </div>
            <div class="newversion-left right-focus">
                <div class="newversion-item even">
                    <img class="newversion-pic" src="//dl.gamdream.com/website/jy/images/1.jpg">
                    <div class="newversion-content">
                        <div class="newversion-title1 overflow-ellipsis">家族系统</div>
                        <div class="newversion-title2">
                            <div>家族系统全面启动啦，加入家族，开始家族之旅吧。</div>
                            <div>（1）家族宝箱：和团队一起闯关赢得王冠，累计王冠开启宝箱吧。</div>
                            <div>（2）家族比赛：活动期间，每次闯过一关主线关卡或宝箱关卡，则立即为家族贡献积分，活动结束后，将根据积分为大家发放奖励哦。</div>
                            <div>（3）互赠体力：加入家族后，家族成员之间能够相互赠送体力，再也不用担心体力不够啦。</div>
                            <div>（4）成员互访：家族成员互访功能，拜访好友家园也许还能在不经意之间收获彩蛋哦！</div>
                        </div>
                    </div>
                </div>
                <div class="newversion-item odd">
                    <img class="newversion-pic" src="//dl.gamdream.com/website/jy/images/2.png">
                    <div class="newversion-content">
                        <div class="newversion-title1 overflow-ellipsis">周赛（探险大赛）</div>
                        <div class="newversion-title2">家园推出全新周赛-探险大赛，快来参加比赛提升段位，赢取稀有头像奖励吧！</div>
                    </div>
                </div>
                <div class="newversion-item even">
                    <img class="newversion-pic" src="//dl.gamdream.com/website/jy/images/3.png">
                    <div class="newversion-content">
                        <div class="newversion-title1 overflow-ellipsis">飞行乐园</div>
                        <div class="newversion-title2">为了帮家人们顺利通关，飞行乐园横空出世！快来闯关，利用爆炸充能产出更多纸飞机助阵通关吧。</div>
                    </div>
                </div>
            </div>
            <div class="newversion-right right-focus hide">
                <div class="newversion-item even">
                    <img class="newversion-pic" src="//dl.gamdream.com/website/jy/images/4.png">
                    <div class="newversion-content">
                        <div class="newversion-title1 overflow-ellipsis">周年庆活动-限定皮肤</div>
                        <div class="newversion-title2">
                            <div>家园1周岁啦！是时候加入周年庆典，赢取周年限定皮肤啦~~</div>
                        </div>
                    </div>
                </div>
                <div class="newversion-item odd">
                    <img class="newversion-pic" src="//dl.gamdream.com/website/jy/images/5.jpg">
                    <div class="newversion-content">
                        <div class="newversion-title1 overflow-ellipsis">迎新签到限定皮肤</div>
                        <div class="newversion-title2">
                            <div>家园全新月签到活动开启，签满整月即可获赠限定签到皮肤！</div>
                            <div>家园迎新会为新家人们也同样准备了迎新限定皮肤，不可错过哦！</div>
                        </div>
                    </div>
                </div>
                <div class="newversion-item even">
                    <img class="newversion-pic" src="//dl.gamdream.com/website/jy/images/6.jpg">
                    <div class="newversion-content">
                        <div class="newversion-title1 overflow-ellipsis">七夕活动</div>
                        <div class="newversion-title2">七夕限定内容，闯关赠星星！通关七夕主题活动卡的任务后，即可获得对应丰厚礼包，同时解锁七夕限定小剧场！同时还有超值七夕折扣礼包等你来选购哟。</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 游戏特色S -->
    <div class="feature-box">
    <img class="feature-title" src="//dl.gamdream.com/website/jy/images/title3@2x.png" alt="游戏特色">
    <div class="feature-bg">
        <img class="chahu" src="//dl.gamdream.com/website/jy/images/chahu.png">
        <div id="certify">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                   <?php
                        SHOW_DATAS('<div class="swiper-slide"><img width="100%" src="@@STR1@@"></div>',
                        'Y-m-d',6,12);
                    ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
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
</div>

<?php
    require_once 'footer.ctp';
?>