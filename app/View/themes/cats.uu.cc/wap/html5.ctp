<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="width=750,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection" />
<link rel="shortcut icon" href="/cats.uu.cc/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php BASE_URL(); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL(); ?>css/common.css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL(); ?>css/index.css?2">
<script type="text/javascript">
    document.addEventListener("WeixinJSBridgeReady", function () {
        audioAutoPlay();//给个全局函数
    }, false);
    document.addEventListener('YixinJSBridgeReady', function() {
        audioAutoPlay();//给个全局函数
    }, false);
</script>
</head>

<body>
    <div class="loading_bg" id="loading">
        <div class="turn">
            <div class="ju"> <img src="<?php BASE_URL(); ?>images/ju.png" alt="wheel"></div>
            <div class="wheel">
                <div class="left">
                    <img src="<?php BASE_URL(); ?>images/lun2-2.png" alt="wheel">
                </div>
                <div class="right">
                    <img src="<?php BASE_URL(); ?>images/lun1-1.png" alt="wheel">
                </div>
            </div>
        </div>
        <div class="loading_wrp">
            <div id="loading_text">
                <div id="loadw"></div>
            </div>
            <h3></h3>
        </div>
    </div>
    <div id="index" class="hide">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="page1">
                        <p class="t1"><img src="<?php BASE_URL(); ?>images/p1_t1.png" /></p>
                        <p class="t2"><img src="<?php BASE_URL(); ?>images/p1_t2.png" /></p>
                        <p class="t3">
                            <img src="<?php BASE_URL(); ?>images/p1_t3.png" />
                            <img class="tt1" src="<?php BASE_URL(); ?>images/p1_tt1.png" />
                        </p>
                        <p class="t4">
                            <img src="<?php BASE_URL(); ?>images/p1_t4.png" />
                            <img class="tt2" src="<?php BASE_URL(); ?>images/p1_tt2.png" />
                        </p>
                        <p class="t5"><img src="<?php BASE_URL(); ?>images/p1_t5.png" /></p>
                        <ul class="p1_pic">
                            <li class="pic1"><img src="<?php BASE_URL(); ?>images/p1_pic1.png" /></li>
                            <li class="pic2"><img src="<?php BASE_URL(); ?>images/p1_pic2.png" /></li>
                            <li class="pic3"><img src="<?php BASE_URL(); ?>images/p1_pic3.png" /></li>
                        </ul>
                        <div class="p1_bear">
                            <span class="eye"><img src="<?php BASE_URL(); ?>images/bear_eye.png" /></span>
                        </div>
                        <span class="p1_bar"><img src="<?php BASE_URL(); ?>images/p1_bar.png" /></span>
                        <div class="jt"><img src="<?php BASE_URL(); ?>images/jt.png" alt="wheel"></div>
                    </div>
                </div>
                <div class="p2 swiper-slide">
                    <div class="page2">
                        <div class="role">
                            <p class="">
                                <a href="javascript:void(0);"></a>
                                <a href="javascript:void(0);"></a>
                                <a href="javascript:void(0);"></a>
                                <a href="javascript:void(0);"></a>
                            </p>
                        </div>
                        <div class="p3_cat"><img src="<?php BASE_URL(); ?>images/p3_cat.png" /></div>
                        <div class="p3_ll"><img src="<?php BASE_URL(); ?>images/p3_l.png" /></div>
                        <div class="p3_lb"><img src="<?php BASE_URL(); ?>images/p3_lb.png" /></div>
                        <div class="p3_rb"><img src="<?php BASE_URL(); ?>images/p3_rb.png" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bigBattle" class="hide">
        <div class="init hide box">
            <div class="jump">
                <p>
                    <a href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                    <a href="javascript:void(0);"></a>
                </p>
            </div>
            <div class="p4_car"><img src="<?php BASE_URL(); ?>images/p4_car.png" /></div>
            <div class="p4_l"><img src="<?php BASE_URL(); ?>images/p4_l.png" /></div>
            <div class="p4_cat">
                <span class="jy"><img src="<?php BASE_URL(); ?>images/jinya.png" /></span>
            </div>
        </div>
        <div class="contest hide box">
            <div class="bj">
                <div class="huohua"><img src="<?php BASE_URL(); ?>images/huohua.png"></div>
                <div class="count">
                    <div class="left random">
                        <div class="number">
                            <p>1234</p>
                            <p>2542</p>
                        </div>
                        <div class="cur">
                            <img src="<?php BASE_URL(); ?>images/zuo-5.png" alt="">
                        </div>
                    </div>
                    <div class="right random">
                        <div class="number">
                            <p>1234</p>
                            <p>2542</p>
                        </div>
                        <div class="cur">
                            <img src="<?php BASE_URL(); ?>images/you-5.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="transport hide box">
            <div class="caidai"><img src="<?php BASE_URL(); ?>images/caidai.png" /></div>
            <div class="bj">
                <div class="win_box">
                    <span class="gaizi"><img src="<?php BASE_URL(); ?>images/box_c.png" /></span>
                    <span class="boxcat"><img src="<?php BASE_URL(); ?>images/box_cat.png" /></span>
                </div>
                <a href="javascript:void(0)" class="btn gift"><img src="<?php BASE_URL(); ?>images/over_btn.jpg" /></a>
            </div>
        </div>
        <div class="win hide box">
            <div class="bj">
                <div class="tear"><img src="<?php BASE_URL(); ?>images/tear.png" /></div>
                <div class="win_box">
                    <span class="gaizi"><img src="<?php BASE_URL(); ?>images/box_c.png" /></span>
                    <span class="boxcat"><img src="<?php BASE_URL(); ?>images/box_cat_b.png" /></span>
                </div>
                <a href="javascript:void(0)" class="btn gift"><img src="<?php BASE_URL(); ?>images/over_btn.jpg" /></a>
            </div>
        </div>
        <div class="prize hide box">
            <div class="star"><img src="<?php BASE_URL(); ?>images/star.png" /></div>
            <div class="bj">
                <div class="submit">
                    <input type="text" value="" placeholder="请填写手机号" id="phone">
                    <a href="javascript:void(0)" class="btn" id="submit"><img src="<?php BASE_URL(); ?>images/sp_btn.jpg" /></a>
                </div>
            </div>
        </div>
        <div class="Invitation hide box">
            <div class="bj">
                <div class="qrcode"><img src="<?php BASE_URL(); ?>images/qrcode.png" /></div>
                <a href="javascript:void(0)" class="btn layer"></a>
            </div>
        </div>
    </div>
    <div id="layer" class="hide"></div>
    <div class="zhezao"></div>
    <div class="videobox">
        <video id="mainvideo" src="<?php BASE_URL(); ?>mp4/1.mp4" webkit-playsinline="" playsinline="" x5-playsinline="" x-webkit-airplay="allow" width="100%" height="100%" src="" preload="true"></video>
    </div>
    <audio src="<?php BASE_URL(); ?>images/bgm.mp3" loop="loop" id="au1" autoplay="autoplay"></audio>
    <a class="music muClose"></a>
    <script src="<?php BASE_URL(); ?>js/zepto.js"></script>
    <script src="<?php BASE_URL(); ?>js/swiper-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/wxjssdk.js"></script>
    <script src="<?php BASE_URL(); ?>js/index.js?23"></script>

<script>

$(function(){
    //  显示邀请层
    $('#submit').on('click', function() {
        // 这里需要交互
        var phone = $('#phone').val();
        if(phone == "") {
            alert("请输入手机号码！");
            return false;
         }else if(!/^(13|14|15|17|18)\d{9}$/.test(phone)) {
            alert("请输入正确的手机号码！");
            return false;
         }
         $.ajax({
            type: "POST",
            url: "/collect_phone",
            data: {phone: phone,collect_name: <?php echo $GLOBALS['site_id'];?>,type:"yy"},
            dataType: "json",
            success: function (res) {
                if (res.ret == 0) {
                    $('#bigBattle .box').hide();
                    $('.Invitation').show(); //  邀请
                } else if (res.ret == 2) {
                    alert("您已经预约过了哦！");
                    $('#bigBattle .box').hide();
                    $('#bigBattle .Invitation').show(); //  礼包
                } else {
                    alert("预约失败！");
                }
            }
        });

    });
    // http://svn.ids111.com/game_server/expendables/market_website_bj2017/dgc_idreamsky/program/branchs/20180301/distribution
    // http://svn.ids111.com/game_server/expendables/market_website_bj2017/dgc_idreamsky/program/branchs/20180301/distribution
    wx.config({
        debug: false,
        appId: '<?php echo $wxSignPackage["appId"];?>',
        timestamp: '<?php echo $wxSignPackage["timestamp"];?>',
        nonceStr: '<?php echo $wxSignPackage["nonceStr"];?>',
        signature: '<?php echo $wxSignPackage["signature"];?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
        ]
    });
    wx.ready(function () {
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: '这是你走上人生巅峰的机会', // 分享标题
            link:'<?php echo $wxSignPackage["url"];?>',
            imgUrl: "http://dl.uu.cc/static/webroot/cats/logo.png", // 分享图标
            success: function () {
               // alert('success');
            },
            cancel: function () {
                //alert('cancel');
            }
        });
        wx.onMenuShareAppMessage({
             title: '这是你走上人生巅峰的机会', // 分享标题
             desc: '豪车、辣妹、奖金池！喵星人的地下世界正在进行激烈的战车比赛！',
             link:'<?php echo $wxSignPackage["url"];?>',
             imgUrl: "http://dl.uu.cc/static/webroot/cats/logo.png", // 分享图标
             trigger: function (res) {

             },
             success: function (res) {
                 //alert('分享成功！');
             },
             cancel: function (res) {
                 //alert('已取消！');
             },
             fail: function (res) {
                 alert(JSON.stringify(res));
             }
         });
     });
});
</script>
</body>

</html>