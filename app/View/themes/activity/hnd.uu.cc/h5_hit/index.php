<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="Cache-Control" content="no-transform">
<title>打死12306，烧死这批验证码！</title>
<style type="text/css">
* 
{
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
@-ms-viewport {
    width: device-width;
    user-zoom: fixed;
    max-zoom: 1;
    min-zoom: 1;
}
@-moz-viewport {
    width: device-width;
    user-zoom: fixed;
    max-zoom: 1;
    min-zoom: 1;
}

@viewport {
    width: device-width;
    user-zoom: fixed;
    max-zoom: 1;
    min-zoom: 1;
}

body { -ms-touch-action:none; }

</style>
<script type="text/javascript">
var openid='<?php echo GET('OPENID') ?>';
var jumpurl='https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx4a2aae42860a4add&redirect_uri=http%3A%2F%2Fld.uu.cc%2Fmanage%2Findex.php%3Fr%3Dact1lottery&response_type=code&scope=snsapi_base&state=1#wechat_redirect';
</script>
<script type="text/javascript" src="//pub.vip.uu.cc/assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>


<script type="text/javascript" src="//hnd.uu.cc/activity/hnd.uu.cc/h5_hit/cantk/js/cantk.js"></script>
<script type="text/javascript" src="//hnd.uu.cc/activity/hnd.uu.cc/h5_hit/myapp.js"></script>
<script type="text/javascript" src="//hnd.uu.cc/activity/hnd.uu.cc/h5_hit/cantk/js/webapp_init.js"></script>
<!--user scripts -->

<!-- START WEIXIN SCRIPT -->
<script>
wx.config({
	debug: false,
	appId: '<?php echo GET('APP_ID'); ?>',
	timestamp: <?php echo GET('JS_TIMESTAMP'); ?>,
	nonceStr: '<?php echo GET('JS_NOICESTR'); ?>',
	signature: '<?php echo GET('JS_SIGNATURE'); ?>',
	jsApiList: [
	  'onMenuShareAppMessage',
	  'onMenuShareTimeline'
	]
});

var share = {
		title : "打死12306，烧死这批验证码！", //分享给好友会显示
		sTitle : "玩游戏，LOL皮肤、回乡机票、京东卡等你来拿！HND带你装逼带你飞！",//分享显示的title
		timeLineTitle : "打死12306，LOL皮肤、回乡机票带你装逼带你飞！",//分享显示的title
		picUrl : "//hnd.uu.cc/activity/hnd.uu.cc/h5_hit/assets/jay/hnd_hit/share_logo.jpg", //图片url
		url : '<?php echo GET('SHARE_URL'); ?>' //分享的url链接
	}

wx.ready(function () {

	wx.onMenuShareTimeline({
		
	    title: share.title, // 分享标题
	    link: share.url, // 分享链接
	    imgUrl: share.picUrl, // 分享图标
	    success: function () { 
	        // 用户确认分享后执行的回调函数
			alert('分享成功');
			//alert($('#imgurl').html());
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
			
			alert('亲，真的不分享么');
			
	    }
	
    });
	

	wx.onMenuShareAppMessage({
		title: share.title, // 分享标题
		desc: share.sTitle, // 分享描述
		link: share.url, // 分享链接
		imgUrl: share.picUrl, // 分享图标
		success: function () { 

		},
		cancel: function () { 
			alert("亲，真的不分享么")
		}
		
	});

});


</script>
<!-- END WEIXIN SCRIPT -->

</head>
<body>
</body>
</html>

