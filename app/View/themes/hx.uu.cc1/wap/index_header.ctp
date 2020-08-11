<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="viewport" content="width=320,maximum-scale=1.3,user-scalable=no,minimal-ui">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>">
    <meta name="description" content="<?= $description; ?>">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico">
    <link href="<?php echo $full_base_url ?>/mobile/css/fantasy.css?ioi" rel="stylesheet" type="text/css">
    <style>
        .hide {display: none !important}
        .swipeslide{position: relative;width: 100%;}
        .swipe {width:300px;margin:5px auto;border:2px solid #440D93;overflow: hidden;visibility: hidden;position: relative;}
        .arrow{display: block;width: 17px;height: 33px;position: absolute;top:50%;margin-top: -16.5px;left: 10px;background: url(//ossweb-img.qq.com/images/chanpin/ylyx/public/a20141204gc/prev.png) no-repeat;text-indent: -9999px;}
        .next{left:auto;right: 5px;background: url(//ossweb-img.qq.com/images/chanpin/ylyx/public/a20141204gc/next.png) no-repeat;}
        .swipe-wrap {overflow: hidden;position: relative;}
        .swipe-wrap > div {float:left;width:100%;position: relative;}
        /*.swipe-wrap img {height: 100%; width: 100%;}*/
        .slider1 .swipe {
            width:300px; height: 173px; margin:5px auto;border:2px solid #ffd8a5;
            border-radius: 3px;
        }
        .slider2 .swipe {
            width:258px; height: 152px; margin:5px auto;border:2px solid #8c7052;
            border-radius: 3px;
        }
    </style>
    <script>
		var sys;
		if(navigator.userAgent.indexOf('Android') > -1){
			sys = 1;//安卓
		}else{
			sys = 2;//ios
		}

		function down_hx(){
			var down_url;
			if(sys == 1){//an zhuo
				down_url = "<?=$android_list['content']?>";
			}else{
				down_url = "<?=$ios_list['content']?>";
			}
			window.location.href=down_url; 
		}
    </script>
</head>