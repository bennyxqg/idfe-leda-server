<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
    <meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=yes">
    <link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
</head>
<body class="bg1">
<div class="page">
    <div class="header">
        <h1>乐舞·中国好歌曲</h1>
    </div>
    <div class="content">
        <div class="word"><img src="<?php echo $full_base_url ?>/images/word.png" alt=""></div>
        <div class="download">
            <a href="//dl.uu.cc/idreamsky/lewu-9_v0.4.6_s2.1.13_LE0S0N30000.apk" id="d_and"><img src="<?php echo $full_base_url ?>/images/download.png" alt=""></a>
            <a href="javascript:alert('敬请期待！');" id="d_ios"><img src="<?php echo $full_base_url ?>/images/download.png" alt=""></a>
        </div>
        <div class="icon"><img src="<?php echo $full_base_url ?>/images/m_tub.png" alt=""></div>
    </div>
</div>
<div class="pop">
    <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}

$(function(){
    //判断android 和 ios
    var u = navigator.userAgent;
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        $("#d_ios").show();
        $("#d_and").hide();
    }else{
        $("#d_and").show();
        $("#d_ios").hide();
    }

    //提示微信不可下载
    $('.pop').height($(document).height());
    if(isWeiXin()){
        $('#d_ios,#d_and').click(function(e){
            $('.pop').show();
            e.stopPropagation();
            return false;
        });
    }
    $('.pop').click(function(){
        $(this).hide();
    });
})

//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?87109a8ac60e1afbaa24d8b17f309c3e";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
