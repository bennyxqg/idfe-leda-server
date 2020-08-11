<!DOCTYPE html>
<html>
<head>
<?php require_once "header.ctp" ?>
</head>
<body>
<div class="page">
    <div class="header">
        <h1>水果忍者五周年，经典继续、五心依旧</h1>
        <div class="dl">
            <a href="/download">返回首页</a>
        </div>
        <a class="home" href="/">返回首页</a>
    </div>
    <div class="layout">
        <div class="dl-core dl-core2"><i class="fruit-ic"><img src="<?php echo $full_base_url ?>/images/fruit_ic.png" alt=""></i>
            <div class="box" style="margin-top:58px;">
                <h5>通过选择操作系统下载</h5>
                <div class="dl">
                    <a href="https://itunes.apple.com/cn/app/fruit-ninja/id362949845" target="_blank"><img src="<?php echo $full_base_url ?>/images/ios.png" /></a>
                    <a href="//dl.uu.cc/idreamsky/FN-Full-3001_v3.0.1_s2.4.7.10_chuangmeng_LE0S0N00000.apk"><img src="<?php echo $full_base_url ?>/images/android.png" /></a>
                </div>
            </div>
            <!--
            <div class="box"style="margin-top:94px;">
                <h5>过扫描二维码下载</h5>
                <div class="td-code clearfix">
                    <div class="fl">
                        <img src="<?php echo $full_base_url ?>/images/code-ios.jpg" width="150" />
                        <p>IOS 二维码扫一扫下载</p>
                    </div>
                    <div class="fl" style="margin-right:30px;">
                        <img src="<?php echo $full_base_url ?>/images/code-android.jpg"  width="150" />
                        <p>Andriod 二维码扫一扫下载</p>
                    </div>
                    <p class="fl" style="margin:0;width:182px;line-height:40px;">用手机上的二维码扫描软件拍摄左侧二维码，即可便捷完成下载。</p>
                </div>
            </div>
            -->
        </div>
        <!--
        <div class="sub">
            <div class="core">
                <a href="javascript:;" id="video" style="margin-left:5px;"><img src="<?php echo $full_base_url ?>/images/video.jpg" /></a>
                <div class="weibo">
                    <div class="clearfix"><h3 class="fl"><img src="<?php echo $full_base_url ?>/images/weibo.png" /></h3><a class="fr" target="_blank" href="//weibo.com/NinjaFruit"><img src="<?php echo $full_base_url ?>/images/jia.jpg" /></a></div>
                    <div><iframe frameborder="0" scrolling="no" src="//widget.weibo.com/livestream/listlive.php?language=zh_cn&width=0&height=363&uid=3911390812&skin=1&refer=1&appkey=&pic=0&titlebar=1&border=1&publish=1&atalk=1&recomm=0&at=0&atopic=%E6%B0%B4%E6%9E%9C%E5%BF%8D%E8%80%853%E5%91%A8%E5%B9%B4&ptopic=%E6%B0%B4%E6%9E%9C%E5%BF%8D%E8%80%853%E5%91%A8%E5%B9%B4&dpc=1" width="250" height="363"></iframe></div>
                    <div><iframe width="250" height="363"  frameborder="0" scrolling="no" src="//widget.weibo.com/livestream/listlive.php?language=zh_cn&width=250&height=363&uid=2403445820&skin=1&refer=1&appkey=&pic=0&titlebar=1&border=1&publish=1&atalk=1&recomm=0&at=0&atopic=%E6%B0%B4%E6%9E%9C%E5%BF%8D%E8%80%85&ptopic=%E6%B0%B4%E6%9E%9C%E5%BF%8D%E8%80%85&dpc=1"></iframe></div>
                    <div class="sns">
                        <a href="//weibo.com/NinjaFruit" target="_blank"><img src="<?php echo $full_base_url ?>/images/sina.png" />新浪微博</a>
                        <a href="//1.t.qq.com/FruitNinja" target="_blank"><img src="<?php echo $full_base_url ?>/images/qq.png" />腾讯微博</a>
                        <a href="javascript:;" id="weixin"><img src="<?php echo $full_base_url ?>/images/weixin.png" />官方微信</a>
                    </div>
                </div>
            </div>
            <div class="code"><img src="<?php echo $full_base_url ?>/images/code.jpg" width="100" /></div>
            <span class="yezi"></span>
        </div>
        -->
    </div>
</div>
<?php echo require_once("footer.ctp"); ?>
<div class="mask"><iframe style="position:absolute;width:100%;height:100%;filter:alpha(opacity=0);opacity=0;border-style:none;"></iframe></div>
<div class="videoBox"><a href="javascript:;" class="close">X</a></div>
<script src="js/switch.js" type="text/javascript"></script>
<script>
$(function(){
    $(".switch").Switch({
        width:624,
        height:343,
        moveInterval:500,
        interval:3000,
        direction:"alpha"
    });
    $("#weixin").hover(function(){
        $(".code").show();
    },function(){
        $(".code").hide();
    });
    $(".mask").height($(document).height());
    $("#video").click(function(){
        $(".mask").show();
        $(".videoBox").show().append('<embed src="//player.youku.com/player.php/sid/XODM1NDk4OTUy/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>');
    });
    $(".close").click(function(){
        $("#flash").remove();
        $(".mask").hide();
        $(".videoBox").hide();
    });
});
</script>
</body>
</html>