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
<meta name="viewport" content="width=640,user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection" />
<link rel="shortcut icon" href="/cats.uu.cc/favicon.ico" />
<style type="text/css">
    *{margin:0;padding:0;}
    .bg{width:640px;margin:0 auto;position:absolute;top:0;left:0;bottom:0;right:0;background:#000 url(<?php BASE_URL(); ?>images/download_bg.jpg) no-repeat}
    .bg a{width:297px;height:91px;position:absolute;left:50%;margin-left:-149px;bottom:59px;}
    .wx_tip{ position:fixed; left:0; top:0; width:100%; height:100%; background:url(<?php BASE_URL(); ?>images/wxpop.png) rgba(0,0,0,0.6) top right no-repeat; display:none;}
</style>
</head>

<body>
<?php
    $data = SHOW_ALL_DATAS(0);
    $channel = $_GET["channel"];
    $channel = trim($channel);
    $path = "javascript:;";
    if(!empty($channel)){
        foreach ($data as $v) {
            if($v["str1"] == $channel){
                $path = $v["str2"];
            }
        }
    }
?>
<div class="bg" style="display:none;">
   <a id="dl" href="<?php echo $path;?>"><img src="<?php BASE_URL(); ?>images/download.jpg"></a>
   <div id="wx_tip" class="wx_tip"></div>
</div>
<script type="text/javascript" src="/js/zepto.js"></script>
<script type="text/javascript" src="/js/edata.js"></script>
<script>
function isWeiXin() {
    var ua = window.navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == 'micromessenger') {
        return true;
    } else {
        return false;
    }
}
$(function(){
    var u = navigator.userAgent;
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        $("#dl").attr("href","https://itunes.apple.com/app/id1208561922");
    }
    var channel = "<?php echo $channel;?>";
    if(channel == "NT0S0N00000"){
        sToEdata("download","",channel);
        window.location.href = "http://a.app.qq.com/o/simple.jsp?pkgname=com.tencent.tmgp.cats&fromcase=20000&ckey=CK1385669651900&g_f=1003648";
    }else{
        $(".bg").show();
        $("#dl").click(function(){
            if(isWeiXin()){
                $("#wx_tip").show();
                return false;
            }
            sToEdata("download","",channel);
        });
    }
})

</script>
</body>
</html>