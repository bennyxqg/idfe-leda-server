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