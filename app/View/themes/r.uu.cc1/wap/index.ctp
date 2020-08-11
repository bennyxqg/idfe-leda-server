<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
	<title><?php echo $title; ?></title>
    <meta  content="<?php echo $keywords; ?>" name="keywords" />
    <meta content="<?php echo $description; ?>" name="description" />    
    <link type="text/css" rel="stylesheet" href="<?php echo $full_base_url ?>/wap/css/index.css" />	
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
</head>
<body>
<?php 
$this->R->init(array('site_id' => $site_id));
$blocks = $this->R->getAllBlock();
$downloadIcon = $blocks['download_icon']; // 下载
?>
    <div class="loading_bg" id="loading">
    	<div class="loading_wrp">
            <h4 id="loading_text">请稍后，加载中…<b>0%</b></h4>
        </div>
    	<span class="bar">
    		<img src="<?php echo $full_base_url ?>/wap/images/bar.png" />            	
    	</span>
    	<span class="loadbar" id="loadw"></span>
    </div>
    <div class="lock_wrp" id="lock">
        <div class="lock">
            <i></i><br />
            为了更好的体验，请使用竖屏浏览
        </div>
    </div>
	<div class="wrapper">
        <section class="sec0"></section>
    	<section class="sec1"><div class="h_wrp">
            <h2>第一屏</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/wap/images/start.png" alt=""></div>
        </div></section>
        <section class="sec2"><div class="h_wrp">
            <h2>第二屏</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/wap/images/start.png" alt=""></div>
        </div></section>
        <section class="sec3"><div class="h_wrp">
            <h2>第三屏</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/wap/images/start.png" alt=""></div>
        </div></section>
        <section class="sec4"><div class="h_wrp">
            <h2>第四屏</h2>
            <div class="start"><img src="<?php echo $full_base_url ?>/wap/images/start.png" alt=""></div>
        </div></section>
        <section class="sec5"><div class="h_wrp">
            <h2>第五屏</h2>
        </div></section>
    </div>
    <div class="dibu clearfix">
        <a href="//r.uu.cc/shengdian"><img id="link" src="<?php echo $full_base_url ?>/wap/images/btn.jpg" alt=""></a>
        <div class="words"><img src="<?php echo $full_base_url ?>/wap/images/words.png" alt=""></div>
        <a href="<?php echo $downloadIcon;?>"><img id="download" src="<?php echo $full_base_url ?>/wap/images/download.png" alt=""></a>
    </div>
    <div class="share" id="fx">
        <div class="box"><img src="<?php echo $full_base_url ?>/wap/images/tc.png" alt=""></div>
    </div>
</body>
<script>
var site_js_url = "<?php echo $full_base_url ?>";

</script>
<script src="<?php echo $full_base_url ?>/wap/js/zepto.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/wap/js/parallax.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/wap/js/index.js" type="text/javascript"></script>
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
    $('.share').height($(document).height());
    if(isWeiXin()){
        $('#download').on("touchend",function(e){
            $('#fx').show();
        });
    }
    $('.share').on("touchend",function(){
        $(this).hide();
    });
});
var title = "奔跑吧兄弟：跑男来了"; //分享给好友会显示
var link = "//r.uu.cc";
var imgUrl = "<?php echo $full_base_url ?>/wap/images/fx_ico.png";
var shareDesc = "《奔跑吧兄弟》同名跑酷手游今日公测。超哥，宝宝，baby，曾老师都在这里！";
var onBridgeReady = function () {
    var appId = '';
    // 发送给好友;
    WeixinJSBridge.on('menu:share:appmessage', function(argv){
        WeixinJSBridge.invoke('sendAppMessage',{
            'img_url' : imgUrl,
            'img_width' : '640',
            'img_height' : '640',
            'link' : link,
            'desc' : shareDesc,
            'title' : title
            }, function(res) {
        });
    });
    // 分享到朋友圈;
    WeixinJSBridge.on('menu:share:timeline', function(argv){
        WeixinJSBridge.invoke('shareTimeline',{
        'img_url' : imgUrl,
        'img_width' : '640',
        'img_height' : '640',
        'link' : link,
        'desc' : shareDesc,
        'title' : title
        }, function(res) {
        });
    });
};
if(document.addEventListener){
    document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
} else if(document.attachEvent){
    document.attachEvent('WeixinJSBridgeReady' , onBridgeReady);
    document.attachEvent('onWeixinJSBridgeReady' , onBridgeReady);
}
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=40283245" charset="UTF-8"></script>
</html>