<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="viewport" content="width=480, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <script type="text/javascript">
        if(navigator.userAgent.indexOf('Android') > -1){
            var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
            var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
            document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
        }
    </script>
    <link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap">
    <ul class="download clearfix">
        <?php require "_download.ctp";?>
    </ul>
    <div class="ny_news package">
        <h3>领188元豪华礼包</h3>
        <div class="txt">
            <h4>手机号</h4>
            <input type="text" name="phone" value="请输入11位手机号码" />
            <p><span>(礼包兑换码将通过手机短信发送)</span></p>
            <div class="btn" id="lqlb">立即领取</div>
            <p><a href="//mrj.uu.cc/show/220.html">兑换方法>></a></p>
        </div>
        <div class="goIndex"><a href="/">返回首页</a></div>
        <!-- <div class="goTop"><a href="#goTop">goTop</a></div> -->
    </div>
    <div class="clearfix">
        <div class="wxin fl">
            <h3>官方微信</h3>
            <button>关注有礼</button>
            <div><img src="<?php echo $full_base_url ?>/images/wrap/wxin.png" alt=""></div>
            <p>公众号：meirenjisy</p>
        </div>
        <div class="wbo fr">
            <h3>官方微博</h3>
            <button>关注有礼</button>
            <div class="share">
                <a title="分享到新浪微博" href="//weibo.com/meirenjisy" class="sina fl">新浪微博</a>
                <a title="分享到腾讯微博" href="//t.qq.com/meirenjisy/follower" class="tx fr">腾讯微博</a>
            </div>
        </div>
    </div>
    <?php require "_footer.ctp"; ?>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/post_cdk.js"></script>
<script type="text/javascript">
window.onload = function(){
    gotoTop();
}
function gotoTop(min_height){
    var gotoTop_html = '<div id="gotoTop">&nbsp;</div>';
    $("body").append(gotoTop_html);
    $("#gotoTop").click(function(){
        $('html,body').animate({scrollTop:0},300);
    }).hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");
    });
    min_height ? min_height = min_height : min_height = 600;
    $(window).scroll(function(){
        var s = $(window).scrollTop();
        if( s > min_height){
            $("#gotoTop").fadeIn(100);
        }else{
        $("#gotoTop").fadeOut(200);
        };
    });
};
wk = function (e) {
    var _keyCode = e.keyCode;
    if (e.shiftKey) { return false; } //禁用shift键，防止输入其他字符
    if ((_keyCode > 47 && _keyCode < 58) || (_keyCode > 95 && _keyCode < 106) || (_keyCode > 36 && _keyCode < 41) || (_keyCode == 46) || (_keyCode == 8) || (_keyCode == 9)) {
        return true;
    }
    return false;
};
//处理图片缩放问题
$(function(){
    $('.txt img').each(function () {
        var firstwidth = $(".txt");
        var ratio = 0;  // 放大比例
        var width = $(".txt img").width();
        var height = $(".txt img").height();
        ratio = firstwidth / width;
        width = width * ratio;
        height = height * ratio;
        $(".txt img").css("width", width);
        $(".txt img").css("height", height);
    });
});
$(function(){
    // 发送电话号码
    $("input[name=phone]").keydown(function(e){
        return wk(e);
    });
    $("#lqlb").click(function(){
        var phone = $("input[name=phone]").val();
        post_cdk(phone);
    })
})
</script>
</body>
</html>
