<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
<link rel="shortcut icon" href="favicon.ico" />
<link media="screen" href="<?php BASE_URL() ?>css/m.css" rel="stylesheet" type="text/css" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?60a512c3b978fcde922f4640a4616d14";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>
<div class="topbar">
    <a class="back" href="javascript:history.back();"></a>
    <a class="topbar_back_home" href="/">返回首页</a>
</div>
<article>
	<div class="news_tit">
        <h3><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
        <p>时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></p>
    </div>
    <div class="news_con">
        <p>
		<?php SHOW_CURRENT_NEWS_INFO('content') ?>
        </p>
	</div>
</article>
<div class="footer">
    <a href="//www.idreamsky.com"><img src="<?php BASE_URL() ?>images/logo.png" alt=""></a>
    <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
</div>

<a class="download" href="">下载游戏</a>
<div class="tip">
    <img src="<?php BASE_URL() ?>images/tip.png" alt="">
</div>
<script src="<?php BASE_URL() ?>js/zepto.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	function isWx(){
	   var ua = navigator.userAgent.toLowerCase();
	   if(ua.match(/MicroMessenger/i) == "micromessenger"){
			 return true;
	   }else{
		   return false;
	   }
	};
	
    //判断android 和 ios
    var u = navigator.userAgent;
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        $(".download").attr("href","<?php BLOCK('ios_download_url') ?>");
    }else{
        $(".download").attr("href","<?php BLOCK('android_download_url') ?>");
    }

    //提示
    $(".download").click(function(){
        if(isWx()){
            $(".tip").show();
            return false;
        }
    });
    $(".tip").height($(document).height());
    $(".tip").click(function(){
        $(".tip").hide();
    });
});
</script>
</body>
</html>
