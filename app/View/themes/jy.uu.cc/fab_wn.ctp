<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div class="fabwn">
    <div class="header"></div>
    <a class="logo" href="/" title="梦幻家园"></a>
    <a class="goto" href="/" title="进入官网"></a>

    <div class="wennuan-wrap">
        <img class="wennuan" src="//dl.gamdream.com/website/jy/images/title@2x.png">
        <img class="wennuan hide" src="//dl.gamdream.com/website/jy/images/title2.png">
        <p class="wennuan-title-text"></p>
        <div class="slide-wrapper">
            <div class="slide-little" id="slide-title-left">
                <div class="mask">
                    <div id="slide-prev"></div>
                    <img class="slide-little-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png"/>
                </div>
            </div>
            <div class="slide1">
                <?php
                SHOW_DATAS('<div class="slide-v-bar"></div><div class="slide-item-box"><div><div class="slide-bg-opacity"><div class="slide-videobtn-wrap"></div><div class="fab-slide-mask"><img class="slide-video-btn" src="//jy.uu.cc/jy.uu.cc/images/video-button.png" data-src="@@STR1@@"/>
                            <img class="slide-img" src="@@STR2@@"/>
                        </div></div>
                        <div class="slide-text">@@STR3@@</div>
                    </div>
                </div>',
                'Y-m-d',7,3,0,array('LimitFrom'=>0));
                // SHOW_DATAS('<div class="slide-v-bar"></div><div class="slide-item-box"><div><div class="slide-bg-opacity"><div class="slide-videobtn-wrap"></div><img class="slide-video-btn" src="FILE_PATH()/images/video-button.png" data-src="@@STR1@@"/>
                //             <img class="slide-img" src="@@STR2@@"/>
                //         </div>
                //         <div class="slide-text">@@STR3@@</div>
                //     </div>
                // </div>',
                // 'Y-m-d',7,2,0,array('LimitFrom'=>1));
                ?>
               <!--  <div class="slide-item-box">
                    <div>
                        <div class="slide-bg-opacity">
                            <div class="slide-videobtn-wrap"></div>
                            <img class="slide-video-btn" src="//dl.gamdream.com/website/jy/images/video-button.png" data-src="http://www.w3school.com.cn/i/movie.mp4"/>
                            <img class="slide-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png" alt="梦幻家园banner图"/>
                        </div>
                        <div class="slide-text">一句话介绍一句话介绍一句话介绍一句话介绍slide1</div>
                    </div>
                </div> -->

                <!-- <div class="slide-v-bar"></div>
                <div class="slide-item-box">
                    <div>
                        <div class="slide-bg-opacity">
                            <div class="slide-videobtn-wrap"></div>
                            <img class="slide-video-btn" src="//dl.gamdream.com/website/jy/images/video-button.png" data-src="http://www.w3school.com.cn/i/movie.mp4"/>
                            <img class="slide-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png" alt="梦幻家园banner图"/>
                        </div>
                        <div class="slide-text">一句话介绍一句话介绍一句话介绍一句话介绍slide1</div>
                    </div>
                </div>
                <div class="slide-v-bar" style="left: 690px"></div>
                <div class="slide-item-box" style="left: 694px">
                    <div>
                        <div class="slide-bg-opacity">
                            <div class="slide-videobtn-wrap"></div>
                            <img class="slide-video-btn" src="//dl.gamdream.com/website/jy/images/video-button.png" data-src="http://www.w3school.com.cn/i/movie.mp4"/>
                            <img class="slide-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png" alt="梦幻家园banner图"/>
                        </div>
                        <div class="slide-text">一句话介绍一句话介绍一句话介绍一句话介绍slide1</div>
                    </div>
                </div> -->
            </div>
            <div class="slide2">
                <!-- <div class="slide-item-box" style="left: 0">
                    <div>
                        <div class="slide-bg-opacity">
                            <img class="slide-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png" alt="梦幻家园banner图"/>"/>
                        </div>
                        <div class="slide-text">一句话介绍一句话介绍一句话介绍一句话介绍slide2</div>
                    </div>
                </div>
                <div class="slide-v-bar" style="left: 342px"></div>
                <div class="slide-item-box" style="left: 347px">
                    <div>
                        <div class="slide-bg-opacity">
                        <img class="slide-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png" alt="梦幻家园banner图"/>
                        </div>
                        <div class="slide-text">一句话介绍一句话介绍一句话介绍一句话介绍slide2</div>
                    </div>
                </div>
                <div class="slide-v-bar" style="left: 690px"></div>
                <div class="slide-item-box" style="left: 694px">
                    <div>
                        <div class="slide-bg-opacity">
                        <img class="slide-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png" alt="梦幻家园banner图"/>
                        </div>
                        <div class="slide-text">一句话介绍一句话介绍一句话介绍一句话介绍slide2</div>
                    </div>
                </div> -->
                <?php
				SHOW_DATAS('<div class="slide-v-bar"></div><div class="slide-item-box">
				<div>
					<div class="slide-bg-opacity">
						<div class="fab-slide-mask">
							<img class="slide-img" src="@@STR2@@"/>
						</div>
					</div>
					<div class="slide-text">@@STR3@@</div>
				</div>
				</div>',
                'Y-m-d',8,3,0,array('LimitFrom'=>0));?>
            </div>
            <div class="slide-little" id="slide-title-right">
                <div class="mask">
                    <div id="slide-next"></div>
                    <img class="slide-little-img" src="//dl.gamdream.com/website/jy/images/slide-wennuan.png"/>
                </div>
            </div>

        </div>
        <button class="join"></button>
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