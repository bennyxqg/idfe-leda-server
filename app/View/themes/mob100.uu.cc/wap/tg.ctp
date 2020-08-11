 <?php
    $this->Website->init();
    $siteId = $GLOBALS['site_id'];
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="telephone=no" name="format-detection">
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta name="description" content="《路人超能100》">

	<title>路人超能100</title>

	<script type="text/javascript">
		var devieWidth = Math.min(750, document.documentElement.clientWidth);
		document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';

		var iOSAppStoreUrl = "<?php echo GET_BLOCK('ios_download_url');?>";
		var andriodDownloadUrl = "<?php echo GET_BLOCK('tg_android_url');?>";

		var iosURLScheme  = "<?php echo GET_BLOCK('iosURLScheme');?>";
		var andriodURLScheme = "<?php echo GET_BLOCK('andriodURLScheme');?>";

	</script>
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
    <style type="text/css">
        body,h1,h2,h3,h4,h5,h6,hr,p,blockquote,dl,dt,dd,ul,ol,li,pre,
        form,fieldset,legend,button,input,textarea,th,td,section,p,span,font,div{margin:0;padding:0;}
        .pcreserve {
            position: absolute;
            width: 100%;
            height: 100%;
            background: black;
            padding:0rem;
        }
        .pcreserve .launch-view {
            position: relative;
            width: 5.6rem;
            height: 5.6rem;
            margin: 0 auto;
            top: 50%;
            transform: translateY(-50%);
            background: url("//dl.gamdream.com/activity/storm/mob100/wap/images/download-button.png") no-repeat center;
            background-size: 100% auto;
        }
        .pcreserve .launch-view .launch-app {
            position: relative;
            width: 3.90rem;
            height: 1.31rem;
            margin: 0 auto;
            top: 2rem;
        }
        .pcreserve .launch-view .download-app {
            position: relative;
            width: 3.90rem;
            height: 1.31rem;
            margin: 2.3rem auto;
        }
    </style>

</head>
<body>

<!-- 内容-->
<div class="pcreserve">

	<div class="launch-view">
		<div class="launch-app"></div>
		<div class="download-app"></div>
	</div>

</div>

<script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
<script src="//dl.gamdream.com/activity/storm/mob100/wap/js/message-index.js"></script>

</body>

</html>