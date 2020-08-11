<?php
require_once "include.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php

$base_path = "//fr.uu.cc/fr.uu.cc/wap/";

//$type = $_GET['type'];
//echo $page;
$config_data = $this->Frxxz->getConfigData();
$data=$this->Frxxz->getAudio($page,1);
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path ?>css/style.css"  />
</head>

<body>
	<div id="#page-content">
        <div class="top">
            <div class="logo">
                <img src="<?php echo $base_path ?>images/logo.jpg" />
                <h2>凡人修仙传</h2>
                <p>3D飞仙空战手游</p>
            </div>
            <a class="down downlink" href="javascript:;"></a>
            <a class="nav" href="javascript:;"></a>
        </div>
		<div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>游戏资料</div>
        <div class="page-main">
            <div class="wrap">
                <div class="data-item">
                	<h2>新手入门</h2>
                    <ul>
                    	<li><a href="//fr.uu.cc/show/3332.html">新手解答</a></li>
                        <li><a href="//fr.uu.cc/show/3333.html">剧情介绍</a></li>
                        <li><a href="//fr.uu.cc/show/3334.html">场景地图</a></li>
                        <li><a href="//fr.uu.cc/show/3335.html">四大职业</a></li>
                    </ul>
                    <h2>高手进阶</h2>
                    <ul>
                    	<li><a href="//fr.uu.cc/show/3336.html">新手解答</a></li>
                        <li><a href="//fr.uu.cc/show/3337.html">剧情介绍</a></li>
                        <li><a href="//fr.uu.cc/show/3338.html">场景地图</a></li>
                        <li><a href="//fr.uu.cc/show/3339.html">四大职业</a></li>
                        <li><a href="//fr.uu.cc/show/3340.html">四大职业</a></li>
                    </ul>
                    <h2>特色系统</h2>
                    <ul>
                    	<li><a href="//fr.uu.cc/show/3341.html">新手解答</a></li>
                        <li><a href="//fr.uu.cc/show/3342.html">剧情介绍</a></li>
                        <li><a href="//fr.uu.cc/show/3343.html">场景地图</a></li>
                        <li><a href="//fr.uu.cc/show/3344.html">四大职业</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</div>  
    <?php require_once 'footer.ctp';?>

	<div class="nav-list">
    	<ul>
        	<li><a href="//fr.uu.cc">官网首页</a></li>
            <li><a href="//fr.uu.cc/new/98.html">新闻资讯</a></li>
            <li><a href="//fr.uu.cc/pic/6.html">游戏特色</a></li>
            <li><a href="//fr.uu.cc/pic/6.html">仙界图鉴</a></li>
            <li><a href="//fr.uu.cc/game_data/6.html">游戏资料</a></li>
            <li><a href="<?php echo $config_data['other']['forum_url']; ?>">官方论坛</a></li>
        </ul>
    </div>
	<div class="zhezao"></div>

<script type="text/javascript" src="<?php echo $base_path ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('.nav').click(function(){
		$('.nav-list').show();
		$('.zhezao').show();
	})

	
	$(".zhezao").on("click", function(e){
		$('.nav-list,.zhezao').hide();
		e.stopPropagation();
	});
	
	
	
	//微信下提示 浏览器打开，判断安卓 IOS
	$(".downlink").click(function(){
		is_weixn();
	});
	function is_weixn(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
				var url = "<?php echo stripslashes($config_data['other']['android_download_url']); ?>";
				if (url.indexOf("alert") > 0) {
					var text = url.split("'");
					alert(text[1]);	
				} else {
					window.location.href=url;
				}
			}else{
				var url = "<?php echo stripslashes($config_data['other']['ios_download_url']); ?>";
				if (url.indexOf("alert") > 0) {
					var text = url.split("'");
					alert(text[1]);	
				} else {
					window.location.href=url;
				}
			}
	}
	
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
