<?php
require_once "include.php";
if($category_id==98){
	$category_id='all';
}

$datas =  $this->Frxxz->newsInitData($page,$category_id);
$consulting = $datas['consulting'];
$page = $datas['page'];

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

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path; ?>css/style.css"  />
</head>

<body>
	<div id="#page-content">
        <div class="top">
            <div class="logo">
                <img src="<?php echo $base_path; ?>images/logo.jpg" />
                <h2>凡人修仙传</h2>
                <p>3D飞仙空战手游</p>
            </div>
            <a class="down downlink" href="javascript:;"></a>
            <a class="nav" href="javascript:;"></a>
        </div>
		<div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>新闻中心</div>
        <div class="page-main">
            <div class="wrap">
                
                <div class="news-tabs">
                	<a <?php if ($category_id == 'all') echo 'class="active"';?> href="//fr.uu.cc/news/98.html">最新</a>
                    <a <?php if ($category_id == 331) echo 'class="active"';?> href="//fr.uu.cc/news/331.html">新闻</a>
                    <a <?php if ($category_id == 330) echo 'class="active"';?> href="//fr.uu.cc/news/330.html">公告</a>
                    <a <?php if ($category_id == 332) echo 'class="active"';?> href="//fr.uu.cc/news/332.html">活动</a>
                    <a <?php if ($category_id == 333) echo 'class="active"';?> href="//fr.uu.cc/news/333.html">攻略</a>
                </div>
                <div id="news-tabs-container">
                    <ul>
                    <?php foreach($consulting as $k=>$v):?>
                    <li><a href="//fr.uu.cc/show/<?php echo $v['id'];?>.html"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['created']) ?></span></li>
                    <?php endforeach; ?>
                        
                    </ul>
                </div>
                <div class="pages"><?php echo $page;?></div>
            </div>
        </div>
	</div>  
    <div class="footer">Copyright©2009-<em class="copy-year">news/98</em> 深圳市创梦天地科技有限公司 <br>版权所有 粤ICP备11018438号</div>

	<div class="nav-list">
    	<ul>
        	<li><a href="//fr.uu.cc">官网首页</a></li>
            <li><a href="//fr.uu.cc/news/98.html">新闻资讯</a></li>
            <li><a href="//fr.uu.cc/pic/6.html">游戏特色</a></li>
            <li><a href="//fr.uu.cc/pic/6.html">仙界图鉴</a></li>
            <li><a href="//fr.uu.cc/game_data/6.html">游戏资料</a></li>
            <li><a href="<?php echo $config_data['other']['forum_url']; ?>">官方论坛</a></li>
        </ul>
    </div>
	<div class="zhezao"></div>

<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
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
</body>
</html>
