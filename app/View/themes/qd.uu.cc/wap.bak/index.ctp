<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
<link rel="shortcut icon" href="//dl-resource.uu.cc/qd.uu.cc/favicon.ico">
<link rel="bookmark" href="//dl-resource.uu.cc/qd.uu.cc/favicon.ico">
</head>

<body>
<div id="content" class="pr">
	<div class="qq1"></div>
    <div class="qq2"></div>
    <div class="qq3"></div>
	<h2 class="main-tit"></h2>
    <div class="zy"></div>
    
    <a class="down-ios" href="<?php BLOCK('ios_download_url') ?>"></a>
    <!--
    <a class="down-az" href="<?php BLOCK('android_download_url') ?>"></a>
    -->
</div>


</body>
</html>
