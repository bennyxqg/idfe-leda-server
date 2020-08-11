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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path ?>css/style.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo $base_path ?>css/lightbox.css" />
</head>

<body>
	<div id="#page-content">
        <div class="top">
            <div class="logo">
                <img src="<?php echo $base_path ?>images/logo.jpg" />
                <h2>凡人修仙传</h2>
                <p>3D飞仙空战手游</p>
            </div>
            <a class="down downlink" href="//fr.uu.cc/download"></a>
            <a class="nav" href="javascript:;"></a>
        </div>
		<div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>
		
		<?php
		
		if ($page == 6):
			echo '仙界图鉴';
		elseif ($page == 10):
			echo '仙界壁纸';
		else:
			echo '仙界视频';
		endif;
		?>
		
		</div>
        <div class="page-main">
            <div class="wrap">
                <div class="pic-tabs">
                	<a <?php if ($page == 6) echo 'class="active"';?> href="//fr.uu.cc/pic/6.html">截图</a>
                    <a <?php if ($page == 10) echo 'class="active"';?> href="//fr.uu.cc/pic/10.html">壁纸</a>
                    <a <?php if ($page == 5) echo 'class="active"';?> href="//fr.uu.cc/pic/5.html">视频</a>
                </div>
                <div id="pic-tabs-container">
                    <ul>
                    <?php if ($data['list']):?>
	            	<?php foreach ($data['list'] as $k => $v):?>
	            	
	            	<?php if($page == 6 || $page == 10):?>
                    <li><a href="<?php echo $v['datas']['str1'];?>" data-lightbox="img-group1"><img src="<?php echo $v['datas']['str1'];?>" /><span><?php echo $v['datas']['str2'];?></span></a></li>
                    
                    <?php else: ?>
                    <li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['datas']['str2'];?>"><img src="<?php echo $v['datas']['str1'];?>" /><span><?php echo $v['datas']['label'];?></span></a></li>
                    <?php endif;?>
	            	
	            	
	            	<?php endforeach;?>
	            	<?php endif;?>
                    </ul>
            	</div>
            </div>
        </div>
	</div>  
    <?php require_once 'footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<!--预约-->
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

<script type="text/javascript" src="<?php echo $base_path ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path ?>js/lightbox-2.6.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('.nav').click(function(){
		$('.nav-list').show();
		$('.zhezao').show();
	})

	
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao,.s_p_k').show();
	})
	$(".close,.zhezao").on("click", function(e){
		$('.s_p_k video').attr('src','');
		$('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
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
