<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset=utf-8>
    <title>官网首页</title>
<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
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
<div id="dialog-qq" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <img class="dialog-qq-logo" src="//dl.gamdream.com/activity/storm/jy/images/qc@2x.png">
    <div class="qqqun-des">官方1群： 724777813</div>
</div>
<div id="dialog-sina" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <img class="dialog-qrcode" src="//dl.gamdream.com/activity/storm/jy/images/jy-weibo-qrcode.png">
    <div class="dialog-contact-info">扫码关注官方微博</div>
</div>
<div id="dialog-wechat" class="dialog-contact hide">
    <div class="dialog-close"></div>
    <img class="dialog-qrcode" src="//dl.gamdream.com/activity/storm/jy/images/wcode@2x.png">
    <div class="dialog-contact-info">扫码关注微信公众号</div>
</div>

 <div class="content index">
        <div class="menu">
    <a class="menu-item menu-first" href="/"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-infx" href="/news/1.html"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-giftx" href="/welfare"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-stratage" href="/news/2.html"></a>
</div>
        <div class="video-btn" data-src=""></div>
        <div class="gift-btn"></div>
        <!-- 新闻咨询S -->
        <div class="news-content">
            <div class="swiper-container-bg">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
<!--                         <div class="swiper-slide"><img class="slide-wn-img" src="//dl.gamdream.com/activity/storm/jy/images/demo-slide@2x.png"/></div>
                        <div class="swiper-slide"><img class="slide-wn-img" src="//dl.gamdream.com/activity/storm/jy/images/demo-slide@2x.png"/></div>
                        <div class="swiper-slide"><img class="slide-wn-img" src="//dl.gamdream.com/activity/storm/jy/images/demo-slide@2x.png"/></div> -->
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="JavaScript:void(0);"><img class="slide-wn-img" src="@@STR2@@" alt="@@STR1@@"></a></div>',
                        'Y-m-d',0);
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="news-menu-wrap">
                <div class="news-menu-item news-menu1 act" data-index="0"></div>
                <div class="slash-bar"></div>
                <div class="news-menu-item news-menu2" data-index="1"></div>
                <div class="slash-bar"></div>
                <div class="news-menu-item news-menu3" data-index="2"></div>
                <div class="slash-bar"></div>
                <a href="/news/1.html" class="news-menu-more"></a>
            </div>
            <div class="menu-line"></div>
            <div class="news-list">
<!--                 <div class="news-list-item">
                    <div class="news-type tc news-type1">最新</div>
                    <div class="news-title overflow-ellipsis">是最新的最新，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type2">新闻</div>
                    <div class="news-title overflow-ellipsis">是最新的最新，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type3">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的最新，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type4">活动</div>
                    <div class="news-title overflow-ellipsis">是最新的最新，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type1">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的最新，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div> -->
                <?php
                    SHOW_NEWS('<div class="news-list-item"><div class="news-type tc news-type1">@@CATEGORY_NAME@@</div><a href="@@URL@@"><div class="news-title overflow-ellipsis">@@TITLE@@</div></a><div class="news-date">@@DATE@@</div></div>','m/d',array('资讯','攻略'),5,0,array('LimitFrom'=>0));
                ?>
            </div>
            <div class="news-list hide">
                <!-- <div class="news-list-item">
                    <div class="news-type tc news-type1">新闻</div>
                    <div class="news-title overflow-ellipsis">是最新的新闻，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type2">新闻</div>
                    <div class="news-title overflow-ellipsis">是最新的新闻，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type3">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type4">活动</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type1">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div> -->
                <?php
                    SHOW_NEWS('<div class="news-list-item"><div class="news-type tc news-type2">@@CATEGORY_NAME@@</div><a href="@@URL@@"><div class="news-title overflow-ellipsis">@@TITLE@@</div></a><div class="news-date">@@DATE@@</div></div>','m/d',array('资讯'),5,0,array('LimitFrom'=>0));
                ?>
            </div>
            <div class="news-list hide">
                <!-- <div class="news-list-item">
                    <div class="news-type tc news-type1">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type2">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type3">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type4">活动</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div>
                <div class="news-list-item">
                    <div class="news-type tc news-type1">公告</div>
                    <div class="news-title overflow-ellipsis">是最新的公告，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公告告</div>
                    <div class="news-date">12/07</div>
                </div> -->
                <?php
                    SHOW_NEWS('<div class="news-list-item"><div class="news-type tc news-type3">@@CATEGORY_NAME@@</div><a href="@@URL@@"><div class="news-title overflow-ellipsis">@@TITLE@@</div></a><div class="news-date">@@DATE@@</div></div>','m/d',array('攻略'),5,0,array('LimitFrom'=>0));
                ?>
            </div>
        </div>
        <!-- 人物图鉴S -->
        <div class="players">
            <div class="character-title1 tc">人物图鉴</div>
            <div class="character-title2 tc">Character profile</div>
            <!--人物图鉴 切换-->
            <div id="character-chborder">
                <div class = "role-info" roleId="1">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/1-Austin-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            奥斯汀
                        </div>
                        <div class="role-description">
                            家园男主角，职业管家，毕业自现代管家学院，兴趣唠嗑。
                        </div>
                    </div>
                </div>
                <div class = "role-info" roleId="2">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/3-Olivia-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            奥利维亚
                        </div>
                        <div class="role-description">
                            家庭主妇，奥斯汀的妈妈，擅长烹饪，拿手菜是苹果派。
                        </div>
                    </div>
                </div>
                <div class = "role-info" roleId="3">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/5-lisa-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            丽莎
                        </div>
                        <div class="role-description">
                            小镇邮差，爱猫人士，热衷于满小镇乱跑，闲下来会死星人。
                        </div>
                    </div>
                </div>
                <div class = "role-info" roleId="4">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/7-Mrsbroom-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            斯蒂芬妮
                        </div>
                        <div class="role-description">
                            凯瑟琳的妈妈，据说样样都精通。
                        </div>
                    </div>
                </div>
                <div class = "role-info" roleId="5">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/9-Ralphray-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            拉尔夫·雷
                        </div>
                        <div class="role-description">
                            主厨、知名电视节目主持人，喜欢做饭，养了一条叫做“松饼”的吉娃娃。
                        </div>
                    </div>
                </div>
                <div class = "role-info" roleId="6">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/2-William-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            威廉
                        </div>
                        <div class="role-description">
                            退休管家，奥斯汀的爸爸，喜欢坐在扶手椅上边喝茶边看书。
                        </div>
                    </div>
                </div>
                 <div class = "role-info" roleId="7">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/4-Catherine-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            凯瑟琳
                        </div>
                        <div class="role-description">
                            花匠，奥斯汀的青梅竹马，喜爱大自然。
                        </div>
                    </div>
                </div>
                <div class = "role-info" roleId="8">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/6-Andy-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            安迪
                        </div>
                        <div class="role-description">
                            艺术家，坚信“创造力从苦难中来，但苦难能升华灵魂”
                        </div>
                    </div>
                </div>
                 <div class = "role-info" roleId="9">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/8-Liao-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            廖叔
                        </div>
                        <div class="role-description">
                            古文物研究者，开着自己的古董交易小店，业余爱好：打麻将。
                        </div>
                    </div>
                </div>
                 <div class = "role-info" roleId="10">
                    <img class="role-icon"  src="//dl.gamdream.com/activity/storm/jy/images/10-Jerry-icon.png">
                    <div class="role-text">
                        <div class="role-name">
                            杰里
                        </div>
                        <div class="role-description">
                            小镇各类比赛主办方，除了办比赛外，还喜欢打游戏和旅游。
                        </div>
                    </div>
                </div>
            </div>
            <div id="character-wrap">
                <div class="character-prev"></div>
                <div class="character-swiper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-character-bg active" roleId = "1">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/austin.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "2">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/olivia.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "3">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/lisa.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "4">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/stifen.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "5">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/ralphray.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "6">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/William.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "7">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/catherine.png"/>
                                    </div>
                                </div>
                            </div>
                             <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "8">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/andy.png"/>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "9">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/liao.png"/>
                                    </div>
                                </div>
                            </div>
                             <div class="swiper-slide">
                                <div class="slide-character-bg" roleId = "10">
                                    <div class="character-bg-mask">
                                        <img class="slide-character-img" src="//dl.gamdream.com/activity/storm/jy/images/jerry.png"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="character-next"></div>
            </div>
        </div>
        <!-- 家园漫步S -->
        <div class="home-walk">
            <div class="home-walk-title1 tc">家园漫步</div>
            <div class="home-walk-title2 tc">Home Walk</div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/1. Austin's room-n.png"/>
                        <div class = "slide-walk-title">奥斯汀的房间</div>
                        <div class="slide-walk-shade">回到久违的家，一切还是那么温暖。</div>
                    </div>
                    <div class="swiper-slide">
                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/2.Hall-n.png"/>
                        <div class = "slide-walk-title">门厅</div>
                        <div class="slide-walk-shade">爸爸读书看报，妈妈闲躺看电视，这就是生活呀。</div>
                    </div>
                    <div class="swiper-slide">
                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/3. Kitchen-n.png"/>
                        <div class = "slide-walk-title">厨房</div>
                        <div class="slide-walk-shade">妈妈的厨房装修好了，可以吃好吃的苹果派了！ </div>
                    </div>
                     <div class="swiper-slide">
                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/4. Garden-n.png"/>
                        <div class = "slide-walk-title">花园</div>
                        <div class="slide-walk-shade">悠闲的下午，适合在花园慵懒地喝茶，和心爱的人。</div>
                    </div>
                    <div class="swiper-slide">
                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/5.Garage-n.png"/>
                        <div class = "slide-walk-title">车库</div>
                        <div class="slide-walk-shade">有房有车，温柔体贴，奥斯汀这么好，嫁了吧！</div>
                    </div>
                    <div class="swiper-slide">
                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/6.Party room-n.png"/>
                        <div class = "slide-walk-title">派对屋</div>
                        <div class="slide-walk-shade">灯光摇曳、劲歌热舞，和小伙伴们一起嗨皮吧！</div>
                    </div>
                    <div class="swiper-slide">
                        <img class="slide-walk-img" src="//dl.gamdream.com/activity/storm/jy/images/7.Relaxroom-n.png"/>
                        <div class = "slide-walk-title">休息室</div>
                        <div class="slide-walk-shade">累了，就和小伙伴一起在休息室放松，岂不快哉！</div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="game-feature">
            <div class="home-walk-title1 tc">游戏特色</div>
            <div class="home-walk-title2 tc">Game Features</div>
            <div class="container">
                <div id="slide" class="slide index-slide" alt="star">
<!--                     <div class="img"><img src="http://mhhy.dl.gxpan.cn/tmp/hy/love/images/banner1.png"/></div>
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
            <div class="game-feature-pre"></div>
            <div class="game-feature-next"></div>
            <div class="game-navigation">
                <div class="game-navigation-btn"></div>
                <div class="game-navigation-btn"></div>
                <div class="game-navigation-btn"></div>
                <div class="game-navigation-btn"></div>
                <div class="game-navigation-btn"></div>
            </div>
        </div>
        <div class="contact-us">
            <div class="contact-item" data-contacttype='wechat'>
                <div class="wechat contact-icon"></div>
                <div class="contact-text">微信</div>
            </div>
            <div class="contact-item" data-contacttype='sina'>
                <div class="sina contact-icon"></div>
                <div class="contact-text">新浪微博</div>
            </div>
            <div class="contact-item" data-contacttype='qqqun'>
                <div class="qq contact-icon"></div>
                <div class="contact-text">QQ</div>
            </div>
        </div>
        <img class="foot" src="//dl.gamdream.com/activity/storm/jy/images/foot@2x.png">
    </div>
    <script>
        $(function () {
            var mySwiper = new Swiper ('.news-content .swiper-container', {
                autoplay:false,
                loop: true,
                pagination: {
                    el: '.news-content .swiper-pagination',
                },
            })
            var swiper = new Swiper('.home-walk .swiper-container', {
                slidesPerView: 2.01,
                spaceBetween:15,
                initialSlide:1,
                centeredSlides: true,
                pagination: {
                    el: '.home-walk .swiper-pagination',
                    clickable: true,
                },
            });
            var swiper = new Swiper('.character-swiper .swiper-container', {
                slidesPerView: 5,
                spaceBetween: 10,
                slidesPerGroup: 5,
                loop: false,
                loopFillGroupWithBlank: true,
                navigation: {
                    nextEl: '.character-next',
                    prevEl: '.character-prev',
                },

            });

        })
    </script>
<?php
    require_once 'footer.ctp';
?>