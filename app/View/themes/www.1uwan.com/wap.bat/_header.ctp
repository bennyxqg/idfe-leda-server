<?php 
$webHelper = $this->Gbsg;
$webHelper->init(array('site_id' => $site_id)); // 设置网站id
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta content="<?= $keywords; ?>" name="keywords" />
    <meta content="<?= $description; ?>" name="description" />
    <meta name="baidu-site-verification" content="NbQUszXI2B" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?c82a03c24d23780ec98dc884dfec88bb";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
</head>
<body>