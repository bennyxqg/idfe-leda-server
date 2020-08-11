<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimun-scale=1.0,maximun=1.0" user-scalable="no"> -->
    <?php
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <link rel="icon" href="//dl.gamdream.com/activity/gavin/jzmf_img_test/icon.png"/>
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerby_talk/resource/reset.css">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerby_talk/resource/index.css?jv=201905131133">
    <script data-fixed="true">
        !function () {
            function params(u, p) {
                var m = new RegExp("(?:&|/?)" + p + "=([^&$]+)").exec(u);
                return m ? m[1] : '';
            }
            function is_iPad(){
                var ua = navigator.userAgent.toLowerCase();
                if(ua.match(/iPad/i)=="ipad") {
                    return true;
                } else {
                    return false;
                }
            }

            if (/iphone|ios|android|ipod/i.test(navigator.userAgent.toLowerCase()) == true || is_iPad()) {
                location.href = 'm/index.html';
            }
        }();
    </script>
</head>
<style type="text/css">

</style>
<body>
<script type="text/javascript">
    function share(){
        // 微博分享
        var title = '<?php echo GET_BLOCK('wb_title_xts');?>';
        var picurl = '<?php echo GET_BLOCK('wb_share_img_xts');?>';
        var sharesinastring='https://service.weibo.com/share/share.php?title='+title+'&url='+window.location.href+'&content=utf-8&sourceUrl='+window.location.href+'&pic='+picurl;
        window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
    }
</script>
<div id="container">
    <div class="content">
        <div class="banner">
            <video class="banner_video" width="100%" src="//dl.gamdream.com/activity/gavin/passerby_talk/images/bg.mp4" height="" muted="muted" loop="loop" autoplay="" poster=""></video>
        </div>
        <div class="header">

            <div class="logo"><img src="//dl.gamdream.com/activity/gavin/passerby_talk/images/logo.png"></div>
            <div class="title"><img src="//dl.gamdream.com/activity/gavin/passerby_talk/images/slogin.png"></div>
            <div class="music"></div>
            <audio id="musicfx" loop autoplay="autoplay">
                <source src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/bg.mp3" type="audio/mpeg">
            </audio>
            <div class="btn_area">
                <div class="menu">
                        <span class="share">
                            <div class="pcShare">
                              <a href="javascript:;" class="pc_share"></a>
                              <a href="javascript:;" onclick="share()" class="wb"></a>
                            </div>
                        </span>
                    <a class="news_link" href="//mob100.uu.cc"></a>
                </div>
            </div>
        </div>
        <div class="countdown">距离相谈所开业还有<div class="time"><?php if ($xtsDayPrefix > 0) {?><div class="hundreds_digit hundreds_digit_<?=$xtsDayPrefix?>"></div><?php }?><div class="single_digit single_digit_<?=$xtsDay?>"></div></div>天</div>
    </div>
    <div class="footer">
          <span class="logo">
            <img src="//dl.gamdream.com/activity/galan/luren/images/ft_logo1.png" width="100">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo2_foot.png"><br>
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo3_foot.png">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo4_foot.png">
          </span>
        <div class="cr">
            <p class="link">
                <a target="_blank" href="//www.idreamsky.com/home/about">关于我们</a> |
                <a target="_blank" href="//idreamsky.zhiye.com/home">诚聘英才</a> |
                <a target="_blank" href="//www.idreamsky.com/home/about?type=contact">联系我们</a> |
                <a target="_blank" href="//www.idreamsky.com/home/about?type=growth">公司大事记</a> |
                <a target="_blank" href="//www.idreamsky.com/home/service">客服中心</a> |
                <a target="_blank" href="//www.idreamsky.com/home/cooperate">网站合作</a> |
                <a target="_blank" href="//www.idreamsky.com/home/service?type=agreement">用户协议</a> |
                <a target="_blank" href="//www.idreamsky.com/home/service?type=agreement">家长控制</a></p>
            <p>
                <span>Copyright©2009-2019 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号 京新广文 [2018] 535号</span><br>
                <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp">
                    <img src="//dl.gamdream.com/activity/galan/luren/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台">
                </a>
                <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp">
                    <img src="//dl.gamdream.com/activity/galan/luren/images/anwang.jpg" alt="公共信息安全网络监察" width="16">
                </a>
                <a target="_blank" href="//net.china.com.cn/index.htm">
                    <img src="//dl.gamdream.com/activity/galan/luren/images/jubao.jpg" alt="经营性网站备案信息" width="16">
                </a>
                <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action">
                    <img src="//dl.gamdream.com/activity/galan/luren/images/beian.jpg" alt="不良信息举报中心" width="16">
                </a>
            </p>
        </div>
        <div class="zg">
            <strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
        </div>
    </div>
</div>
<div class="fade"></div>
<div class="dialog-share pop pop-share">
    <div class="el-dialog" style="margin-top: 25vh; width: 739px;">
        <div class="el-dialog__header">
            <span class="el-dialog__title">扫一扫分享给好友</span>
            <button type="button" aria-label="Close" class="el-dialog__close"></button>
        </div>
        <div class="el-dialog__body">
            <div class="focus_box">
                <img src="<?php echo GET_BLOCK('qrCode_share_xts');?>" alt="" class="qrcode">
                <div class="detail">
                    <p style="margin-top: 20px;">用微信“扫一扫”左侧二维码，即可把网站分享给您的好友们哦。</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="//dl.gamdream.com/activity/resource/jweixin-1.0.0.js"></script>
<script src="//dl.gamdream.com/activity/gavin/passerby_talk/resource/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerby_talk/resource/index.js"></script>
</html>