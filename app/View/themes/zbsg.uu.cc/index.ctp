<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<?php
	$this->Website->init();
	echo '<title>'.GET_BLOCK('web_title').'</title>';
	echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
	echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
	?>
    <!--<link rel="shortcut icon" href="//sds.uu.cc/sds.uu.cc/favicon.ico">-->
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/gallery.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/index.css?ver=201710124" media="all">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>ico.ico">
    <script data-fixed="true">
        !function () {
            function params(u, p) {
                var m = new RegExp("(?:&|/?)" + p + "=([^&$]+)").exec(u);
                return m ? m[1] : '';
            }
            if (/iphone|ios|android|ipod/i.test(navigator.userAgent.toLowerCase()) == true && params(location.search, "from") != "mobile") {
                //location.href = '//act.uu.cc/sds/jp/mobile/';
            }
        }();
    </script>
</head>
<body>
<div class="main">
    <div class="topBar">
        <img src="<?php BASE_URL() ?>img/logo.png" class="logo">
        <div class="nav-box clearfix">
            <a class="btn1 scan">
                <div class="scanCode">
                    <img src="<?php echo GET_BLOCK('weixin_qrcode');?>">
                </div>
            </a>
            <a class="btn2" href="<?php echo GET_BLOCK('forum_url');?>" target="_blank"></a>
            <a class="out_btn xl" href="<?php echo GET_BLOCK('weibo_url');?>" target="_blank"></a>
            <a class="out_btn qq" href="<?php echo GET_BLOCK('qq_qun_link');?>" target="_blank"></a>
            <a class="out_btn bd" href="<?php echo GET_BLOCK('baidu_tieba_url');?>" target="_blank"></a>
        </div>
    </div>
    <div class="bg1">
        <div class="content">
            <div class="slogan"></div>
            <a class="btn_yyue topYuyue"></a>
            <a class="index-video" href="javascript:void(0);"
               data-v4="<?php echo GET_BLOCK('vedio_url');?>">
            </a>
        </div>
    </div>
    <div class="bg2">
        <div class="content">
            <div class="tp tp1"></div>
            <div class="view">
                <div class="dash"></div>
                <div class="title"></div>
                <div class="secTitle">当预约用户量达到相应量后，相应礼包将在<br>游戏开测后发送给全体游戏玩家！</div>
                <div class="awward">
                    <div class="awward_bg" style="margin-left: 0;">
                        <img src="<?php BASE_URL() ?>img/bg2_aw1.png">
                        <p>粮食x800<br>木材x800</p>
                    </div>
                    <div class="awward_bg">
                        <img src="<?php BASE_URL() ?>img/bg2_aw2.png">
                        <p>银币x1000<br>粮食x1000</p>
                    </div>
                    <div class="awward_bg">
                        <img src="<?php BASE_URL() ?>img/bg2_aw3.png">
                        <p>粮食x2000<br>突飞令x1 加速令x1</p>
                    </div>
                    <div class="awward_bg">
                        <img src="<?php BASE_URL() ?>img/bg2_aw4.png">
                        <p>突飞令x2<br>加速令x2</p>
                    </div>
                </div>
                <div class="awward_line">
                    <div class="full"></div>
                    <div class="pointLine">
                        <div class="point p1"></div>
                        <div class="point p2"></div>
                        <div class="point p3"></div>
                        <div class="point p4"></div>
                    </div>
                    <div class="fontCon">
                        <div class="font f1">
                            预约用户<br>
                            达到<span class="yellow">40万</span>
                        </div>
                        <div class="font f2">
                            预约用户<br>
                            达到<span class="yellow">80万</span>
                        </div>
                        <div class="font f3">
                            预约用户<br>
                            达到<span class="yellow">100万</span>
                        </div>
                        <div class="font f4">
                            预约用户<br>
                            达到<span class="yellow">200万</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg3">
        <div class="content">
            <div class="tp tp2"></div>
            <div class="view">
                <div class="dash"></div>
                <div class="title"></div>
                <div class="secTitle">当游戏上线后将会以短信形式发放<br>礼包码到相应预约手机号</div>
                <div class="awward">
                    <div class="awward_bg" style="margin-left: 0;">
                        <div class="num n1"></div>
                        <img src="<?php BASE_URL() ?>img/bg3_aw1.png" class="aw1">
                        <p>粮食x1500</p>
                    </div>
                    <div class="awward_bg">
                        <div class="num n2"></div>
                        <img src="<?php BASE_URL() ?>img/bg3_aw2.png" class="aw2">
                        <p>木材x2000</p>
                    </div>
                    <div class="awward_bg">
                        <div class="num n3"></div>
                        <img src="<?php BASE_URL() ?>img/bg3_aw3.png" class="aw3">
                        <p>银币x500</p>
                    </div>
                    <div class="awward_bg">
                        <div class="num n4"></div>
                        <img src="<?php BASE_URL() ?>img/bg3_aw4.png" class="aw4">
                        <p>突飞令x3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg4">
        <div class="content">
            <div class="tp tp3"></div>
            <div class="view">
                <div class="dash"></div>
                <div class="title"></div>
                <div class="outer_wrap">
                    <div class="gallery_container">
                        <a href="javascript:void(0);" class="gallery_item">
                            <i></i>
                            <img src="<?php BASE_URL() ?>img/banner1.jpg">
                        </a>
                        <a href="javascript:void(0);" class="gallery_item">
                            <i></i>
                            <img src="<?php BASE_URL() ?>img/banner2.jpg">
                        </a>
                        <a href="javascript:void(0);" class="gallery_item">
                            <i></i>
                            <img src="<?php BASE_URL() ?>img/banner3.jpg">
                        </a>
                        <a href="javascript:void(0);" class="gallery_item">
                            <i></i>
                            <img src="<?php BASE_URL() ?>img/banner4.jpg">
                        </a>
                    </div>
                    <a href="javascript:void(0);" class="gallery_prev"></a>
                    <a href="javascript:void(0);" class="gallery_next"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg5">
        <div class="content">
            <div class="view">
                <div class="dash"></div>
                <div class="title"></div>
                <div class="focusBg">关注官方社群，获取最新资讯</div>
                <div class="footerMes">
                    <div class="qr" style="margin-left: 0;">
                        <img src="<?php echo GET_BLOCK('weixin_qrcode');?>">
                        <p>官方微信</p>
                    </div>
                    <div class="qr">
                        <img src="<?php echo GET_BLOCK('weibo_qrcode');?>">
                        <p>官方微博</p>
                    </div>
                    <div class="metalMes">
                        <a class="btn_yyue"></a>
                        <ul>
                            <li>
                                官方QQ1群：<?php echo GET_BLOCK('qq_qun_1');?>
                                <a href="<?php echo GET_BLOCK('qq_qun_link1');?>" target="_blank">加入</a>
                            </li>
                            <li>
                                官方QQ2群：<?php echo GET_BLOCK('qq_qun_2');?>
                                <a href="<?php echo GET_BLOCK('qq_qun_link2');?>" target="_blank">加入</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--弹窗内容-->
<div class="dialog" id="dgAppoint">
    <a class="dialog-close"></a>
    <div class="con">
        <div class="btnLine">
            <a class="btn curr" pid="1">ios首发预约</a>
            <a class="btn" pid="2">安卓预约</a>
        </div>
        <div class="text_font">
            回归经典的三国策略对战手游《造兵三国》重磅来袭！历史名将逐一登场，运筹帷幄指点沙场！
            城池建筑自由排列，主公天赋搭配建筑建造，偏战斗或偏发展随你心意，弓、骑、步三大体系，
            12类兵种，38位历史名将，阵型排列相生相克。探索世界地图、资源点随机生成，快来体验吧！
        </div>
        <input type="text" placeholder="请填写真实手机号" id="phoneNum">
        <a id="btn_appo">立即预约</a>
    </div>
</div>
<!--视频播放-->
<div class="dialog" id="dgVideo">
    <video width="700" height="400" autoplay poster controls src="">您的浏览器不支持 video 标签。</video>
    <a class="dialog-close" href="javascript:;"></a>
</div>
<div id="fade"></div>

<script charset="utf-8" src="<?php BASE_URL() ?>js/lib/jquery-1.9.1.js"></script>
<script charset="utf-8" src="<?php BASE_URL() ?>js/lib/gallery.js"></script>
<script charset="utf-8" src="<?php BASE_URL() ?>js/common/common.js?ver=20171012"></script>
</body>
</html>