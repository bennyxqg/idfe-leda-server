<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Palwo">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=320,minimum-scale=1,maximum-scale=5,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="Description" content="乐逗游戏是国内领先的正版手机游戏发行商,旗下拥有神庙逃亡、水果忍者、小鸟爆破、三重镇等多款全球热门手机游戏。乐逗致力于向中国用户提供高品质的手机游戏" />
    <meta name="Keywords" content="乐逗游戏,乐逗,安卓游戏,android 游戏,手机游戏,免费手机游戏,水果忍者,疯狂喷气机,愤怒的小鸟,神庙逃亡,三重镇,birzzle,时空猎人,龙印,风云天下,切水果,中文版,免费游戏,手机网游" />
    <title>乐逗手游节</title>
    
</head>
<body>
<?php 
print_r(GET('tmp_user_info'));
echo GET('SHARE_URL');
?>

<script type="text/javascript" src="//pub.vip.uu.cc/assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script>
wx.config({
	debug: true,
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
		title : "第一届乐逗游戏手游节，携旗下14款游戏开启最大回馈！每天送十部iphone6 s，道具低至一折！", //分享给好友会显示
		sTitle : "14款火爆游戏，海量珍稀道具、绝版物品1折起，千万福利回馈玩家，每天白拿iPhone6s 京东卡，超级手游趴，新春嘉年华。",//分享显示的title
		timeLineTitle : "第一界乐逗游戏手游节-新春嘉年华",//分享显示的title
		picUrl : "//pub.vip.uu.cc/activity/shouyoujie/shouyoujie_share.jpg", //图片url
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

</body>
</html>