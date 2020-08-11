<?php
  $this->Website->init();
  $siteId = $GLOBALS['site_id'];
  $android = GET_BLOCK('android_download_url');
  $ios = GET_BLOCK('ios_download_url');
?>
<!DOCTYPE html>
<html >
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="telephone=no" name="format-detection">
	<link rel="shortcut icon" href="//dl.gamdream.com/activity/storm/mob100/wap/images/top-bar-logo.png">
	<title>《路人超能100》手游下载</title>
	<script type="text/javascript">
		var devieWidth = Math.min(640, document.documentElement.clientWidth);
		document.documentElement.style.fontSize = devieWidth / 6.4 + 'px';
	</script>
	    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
	<style type="text/css">
		body {
			width: 6.4rem;
			margin: 0 auto;
			overflow-x: hidden;
			font-size: .24rem;
		}
		html,
		body {
			height: 100%;
		}
		.background {
			position: relative;
			margin: 0 auto;
			width: 100%;
			overflow-x: auto;
			background: url(//dl.gamdream.com/activity/galan/luren/images/download-guide.jpg) no-repeat center;
			background-size: 100% auto;
			height: 10.37rem;

			/*background: red;*/
		}

	</style>

	<script type="text/javascript">
		// 下载判断
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		var isWxin = ua.match(/MicroMessenger/i)=="micromessenger";

		function is_weixn(){
			if(isWxin){
				return false;
			}else {
				var dl_url = "<?php echo $android;?>";

				if(!dl_url){
					alert("敬请期待！");
				}else{
					location.href = dl_url;
				}
			}
		}

		// 是否为苹果客户端打开appstore
		if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
			var dl_url = "<?php echo $ios;?>";
			location.href = dl_url;
		}else {
			is_weixn();
		}

	</script>
</head>
<body>

	<div class="background">

	</div>

</body>

</html>