<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div id="content">
    <div class="top">
    <div class="wrap-menu">
        <a class="top-logo" href="/"></a>
        <div class="top-menu">
            <a class="menu-item menu1 act" href="/">官网首页</a>
            <a class="menu-item menu2" href="/news/1.html">游戏资讯</a>
            <a class="menu-item menu3" href="/welfare">福利中心</a>
            <a class="menu-item menu4" href="/news/2.html">游戏攻略</a>
            <a class="menu-item menu5" href="/media_appreciate/1.html">影音鉴赏</a>
        </div>
    </div>

</div>
    <div class="panel-rank">
    <div class="panel-rank-wrap">
        <div class="panel-rank-item color-first">
            <div class="panel-rank-index">1</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_1');?></div>
        </div>
        <div class="panel-rank-item color-second">
            <div class="panel-rank-index">2</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_2');?></div>
        </div>
        <div class="panel-rank-item color-third">
            <div class="panel-rank-index">3</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_3');?></div>
        </div>
        <div class="panel-rank-item color-other">
            <div class="panel-rank-index">4</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_4');?></div>
        </div>
        <div class="panel-rank-item color-other">
            <div class="panel-rank-index">5</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_5');?></div>
        </div>
        <div class="panel-rank-item color-other">
            <div class="panel-rank-index">6</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_6');?></div>
        </div>
        <div class="panel-rank-item color-other">
            <div class="panel-rank-index">7</div>
            <div class="panel-rank-name"><?php echo GET_BLOCK('rank_7');?></div>
        </div>
    </div>

</div>
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
    <div class="codeborder">
    <img id="scan-down" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt=""/>
    <a href="<?php echo GET_BLOCK('android_download_url');?>"><img id="scan-down-android" src="//dl.gamdream.com/website/jy/images/android@2x.png" alt=""/></a>
    <a href="<?php echo GET_BLOCK('ios_download_url');?>"><img id="scan-down-appstroe" src="//dl.gamdream.com/website/jy/images/appstore-download@2x.png" alt=""/></a>
</div>
    <div class="main-content">
        <!-- 游戏资讯S -->
        <div>
            <div class="game-news-title"></div>
<div class="game-news-box">
    <div class="news-banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                    SHOW_DATAS('<div class="swiper-slide"><a href="JavaScript:void(0);"><img class="" width="100%" src="@@STR2@@" alt="@@STR1@@"></a></div>',
                    'Y-m-d',0);
                    ?>
            </div>  
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="news-list">
        <div class="news-type">
            <div class="nes-type-tab active">最新</div>
            <div class="nes-type-tab">资讯</div>
            <div class="nes-type-tab">攻略</div>
        </div>
        <!-- 新闻资讯tab对应的boxS -->
        <div class="news-tab news-list-box">
            <?php
                SHOW_NEWS('<div class="news-item-wrap"><a href="@@URL@@" class="news-item overflow-ellipsis">【@@CATEGORY_NAME@@】 @@TITLE@@</a><div class="news-date">@@DATE@@</div></div>','m/d',array('资讯','攻略'),6,0,array('LimitFrom'=>0));
            ?>
            
        </div>

        <div class="news-tab news-list-box hide">
            <?php
                SHOW_NEWS('<div class="news-item-wrap"><a href="@@URL@@" class="news-item overflow-ellipsis">【@@CATEGORY_NAME@@】 @@TITLE@@</a><div class="news-date">@@DATE@@</div></div>','m/d',array('资讯'),6,0,array('LimitFrom'=>0));
            ?>
            
        </div>

        <div class="news-tab news-list-box hide">
            <?php
                SHOW_NEWS('<div class="news-item-wrap"><a href="@@URL@@" class="news-item overflow-ellipsis">【@@CATEGORY_NAME@@】 @@TITLE@@</a><div class="news-date">@@DATE@@</div></div>','m/d',array('攻略'),6,0,array('LimitFrom'=>0));
            ?>
            
        </div>
    </div>
</div>
            <div class="opacity-block"></div>
             <!-- 福利中心S -->
            <div class="welfare-center">
    <a class="control-video control-video-pre" href="/welfare">
        <img width="100%" src="//dl.gamdream.com/website/jy/images/welfare-center@2x.png"/>
    </a>
    <div>
        <a class="goto-welfare" href="/welfare">
            <img width="100%" src="//dl.gamdream.com/website/jy/images/welpic@2x.png"/>
        </a>
        <div class="slide-block-shade"></div>
        <div class="slide-block"></div>
        <a class="goto-media" href="/media_appreciate/1.html">
            <img width="100%" src="//dl.gamdream.com/website/jy/images/audiopic@2x.png"/>
        </a>
    </div>
    <a class="control-video control-video-next" href="/media_appreciate/1.html">
        <img width="100%" src="//dl.gamdream.com/website/jy/images/audiovisual@2x.png"/>
    </a>
</div>
            <!-- 家园图鉴S -->
            <div class="homescapes-center">
                <div class="homescapes-title"></div>
                <div class="homescapes-wrap">
                    <div class="austinborder">
                        <img id="austin" src="//dl.gamdream.com/website/jy/images/1-Austin.png" alt=""/>
                    </div>
                    <div class="role-des-wrap">
                        <div id="nick-zh">奥斯汀</div>
                        <div id="nick-en">Austin</div>
                    </div>
                    <div class="role-line"></div>
                    <div id="role-detail">家园男主角，职业管家，毕业自现代管家学院，兴趣唠嗑。</div>
                    <div id="role-slide-box">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide act" data-nick="奥斯汀" data-ennick="Austin" data-detail="家园男主角，职业管家，毕业自现代管家学院，兴趣唠嗑。" data-src="//dl.gamdream.com/website/jy/images/1-Austin.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon"  src="//dl.gamdream.com/website/jy/images/1-Austin-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="威廉" data-ennick="William" data-detail="退休管家，奥斯汀的爸爸，喜欢坐在扶手椅上边喝茶边看书。" data-src="//dl.gamdream.com/website/jy/images/2-William.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/2-William-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="奥利维亚" data-ennick="Olivia" data-detail="家庭主妇，奥斯汀的妈妈，擅长烹饪，拿手菜是苹果派。" data-src="//dl.gamdream.com/website/jy/images/3-Olivia.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/3-Olivia-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="凯瑟琳" data-ennick="Catherine" data-detail="花匠，奥斯汀的青梅竹马，喜爱大自然。" data-src="//dl.gamdream.com/website/jy/images/4-Catherine.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/4-Catherine-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="丽莎" data-ennick="lisa" data-detail="小镇邮差，爱猫人士，热衷于满小镇乱跑，闲下来会死星人。" data-src="//dl.gamdream.com/website/jy/images/5-lisa.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/5-lisa-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="安迪" data-ennick="Andy" data-detail="艺术家，坚信“创造力从苦难中来，但苦难能升华灵魂”" data-src="//dl.gamdream.com/website/jy/images/6-Andy.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/6-Andy-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="斯蒂芬妮" data-ennick="Mrsbroom" data-detail="凯瑟琳的妈妈，据说样样都精通。" data-src="//dl.gamdream.com/website/jy/images/7-Mrsbroom.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/7-Mrsbroom-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="廖叔" data-ennick="Liao" data-detail="古文物研究者，开着自己的古董交易小店，业余爱好：打麻将。" data-src="//dl.gamdream.com/website/jy/images/8-Liao.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/8-Liao-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="拉尔夫·雷" data-ennick="Ralphray" data-detail="主厨、知名电视节目主持人，喜欢做饭，养了一条叫做“松饼”的吉娃娃。" data-src="//dl.gamdream.com/website/jy/images/9-Ralphray.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/9-Ralphray-thumb.png" alt=""/>
                                </div>
                                <div class="swiper-slide" data-nick="杰里" data-ennick="Jerry" data-detail="小镇各类比赛主办方，除了办比赛外，还喜欢打游戏和旅游。" data-src="//dl.gamdream.com/website/jy/images/10-Jerry.png">
                                    <div class="role-shadow"></div>
                                    <img class="role-icon" src="//dl.gamdream.com/website/jy/images/10-Jerry-thumb.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="role-button-prev"></div>
                    <div class="role-button-next"></div>-->
                    <a class="back-home" href="javascript:history.go(-1)"></a>

                </div>
            </div>
            <div class="feature-box">
    <img class="feature-title" src="//dl.gamdream.com/website/jy/images/game-title-02.png" alt="游戏特色">
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
            <div class="social">
    <div class="social-item">
        <img class="social-erweima" src="//dl.gamdream.com/website/jy/images/erweima-wechat.jpg" alt="">
        <div class="social-icon wechat"></div>
        <div class="social-title">微信公众号</div>
    </div>
    <div class="social-item">
        <img class="social-erweima" src="//dl.gamdream.com/website/jy/images/erweima-qq.png" alt="">
        <div class="social-icon qq"></div>
        <div class="social-title">家园QQ群</div>
    </div>
    <div class="social-item">
        <img class="social-erweima" src="//dl.gamdream.com/website/jy/images/erweima-weibo.png" alt="">
        <div class="social-icon weibo"></div>
        <div class="social-title">官方微博</div>
    </div>
    <div class="social-item social-tiktok">
        <img class="social-erweima" src="//dl.gamdream.com/website/jy/images/tiktok.jpg" alt="">
        <div class="social-icon tiktok"></div>
        <div class="social-title">官方抖音号</div>
    </div>
</div>
        </div>
    </div>
</div>
<?php
    require_once 'footer.ctp';
?>