<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>《圣斗士星矢-集结》手游</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="saas-sdk.css">
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/jquery-1.12.4.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/jquery-ui.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/flowplayer/flowplayer.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/countly.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/swfobject.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/web_socket.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/jQuery.XDomainRequest.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/rollup_aes.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/mode-ecb.js"></script>
<script type="text/javascript" src="http://sds.uu.cc/sds.uu.cc/yungames/demo/saas-sdk.js"></script>
<style>
*{ margin:0; padding:0;}
body{ background:url(http://sds.uu.cc/sds.uu.cc/yungames/demo/img/main_bg.jpg) 50% 0 no-repeat;}
.wrap{ width:1200px; margin:100px auto 0; height:700px;}
.right-pop{ position:fixed; left:50%; top:246px; margin-left:690px; width:201px; height:453px; background:url(img/right_pop.png) no-repeat;}
.right-pop img{ display:block; margin:38px auto 59px; width:92px; height:93px;}
.right-pop a{ display:block; width:162px; height:47px; margin:0 auto 13px;}
</style>  
</head>
<body>
<div class="wrap"><div class="gamedescription" style=" position:absolute; left:0; right:0; margin:auto; max-width:1200px;"></div></div>
<!--<div style="position: fixed; bottom: 0px; right: 0px;z-index: 5;">
	<input type="button" class="start_btn" value="start" />
	<input type="button" class="stop_btn" value="stop" />
</div>-->

<div class="right-pop">
	<img src="http://sds.uu.cc/manage/upload/image/sds.uu.cc/2016-07-26/20160726_093440_110120.png">
	<a id="ios-down" href="https://itunes.apple.com/cn/app/id1090813843" target="_blank"></a>
    <a id="az-down" href="http://dl.sds.gxpan.cn/Client_pkgs/sdsxs-660_v1.6.660_s2.1.0_gh_LE0S0N30000.apk"></a>
    <a id="addcollect" href="javascript:;"></a>
</div>

<script type="text/javascript">


WEB_SOCKET_SWF_LOCATION = "WebSocketMain.swf";
var pkg_name = "com.freejoy.seiya.idreamsky";

$(function() {
	
	
	
	Cloudplay.initSDK({
		//accessKeyID: '0ce9fabd44f7c819001f17f1b788f6bd',
		accessKeyID: '2F0633DDFE0',
		channelId: 100000,
		
		MessageHandler: function(message) {
		
		},
		onSceneChanged: function(sceneId, extraInfo) {

		},
		pkg_name: pkg_name,
	});

	var game_options = {
		appid: 451736,
		screenType: 1,//屏幕分辨率： 1 低分辨率 2 标清 3 高清
		userinfo: {
			uId: 'cpd301548',
			utoken: 'd2d23cc6522a50760fa027d1f91e5ded',
			uLevel: 1,
			portalUid: 123
		},
		priority: 0,
		extraId: 'NDY0NDI5ZWZlOTYxNDQ1ODkwZGQ2Y2JmOGM1NTQ2MWVfNDUwOTc1',
		playingtime: 72000000,
		configinfo: 'info',
		c_token: 'abcd',
		rotate: false, //是否竖屏（旋转90度）
		backgroundUrl:'http://sds.uu.cc/sds.uu.cc/yungames/demo/img/bg.jpg'
	};

	game_options.pkg_name = pkg_name;
	
	
	Cloudplay.startSDK('.gamedescription', game_options);
	
	
//	$('.start_btn').click(function() {
//		Cloudplay.startSDK('.gamedescription', game_options);
//	});
//
//	$('.stop_btn').click(function() {
//		Cloudplay.stopSDK();
//	});

	$("#ios-down").click(function() {
		$.ajax({
		  type:'GET',
		  url: 'http://sds.uu.cc/stat/009520170407140844673425',
		  dataType: 'json'
		});
	});
	
	$("#az-down").click(function() {
		$.ajax({
			type:'GET',
			url: 'http://sds.uu.cc/stat/009520170407140854167677',
			dataType: 'json'
		});
	});
	
	$("#addcollect").click(function() {
		var ctrl = (navigator.userAgent.toLowerCase()).indexOf('mac') != -1 ? 'Command/Cmd':'CTRL';
		if (document.all) {
			window.external.addFavorite('http://sds.uu.cc/webgame', '《圣斗士星矢-集结》手游')
		} else if (window.sidebar) {
			window.sidebar.addPanel('《圣斗士星矢-集结》手游', 'http://sds.uu.cc/webgame', "")
		} else {
		  alert("请使用Ctrl+D将本页加入收藏夹！")
		}
	})


});

</script>
</body>
</html>
