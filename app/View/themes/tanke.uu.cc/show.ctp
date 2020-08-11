<?php 
require_once "include.php";
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
echo '<title>'.GET_CURRENT_NEWS_INFO('title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_CURRENT_NEWS_INFO('description').'"/>'."\n";
?>  
<meta name="keywords" content="<?= $keywords; ?>"/>
<meta name="description" content="<?= $description; ?>"/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link rel="stylesheet" href="<?php BASE_URL() ?>/new_index/css/style.css" />

</head>

<body>
	<div class="section_page">
    	<div class="top_nav">
        	<div class="wrap">
                <a class="home_logo" href="#link" target="_self"></a>
                <div class="pa nav">
                    <ul>
                        <li><a href="//tanke.uu.cc" target="_self">官网首页</a></li>
                        <li><a href="//tanke.uu.cc/news/98.html" target="_self">新闻公告</a></li>
                        <li><a href="//tanke.uu.cc/game_data/327.html" target="_self">游戏资料</a></li>
                        <li><a href="//tanke.uu.cc/vedio/1.html" target="_self">影音中心</a></li>
                        <li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378" target="_self">官方论坛</a></li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="top_banner">
        	<div class="wrap">
            	
            </div>
        </div>
    </div>
    <div class="page_main">
    	<div class="wrap">
        	<div class="pr news_top">
        	<?php
        	//print_r($GLOBALS['current_news']['News']);
        	?>
            	
                <h2 class="content_tit"><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="news_time">时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
                
                <div class="pa site_nav">当前位置：<a href="//tanke.uu.cc" target="_self">首页</a> &gt; 新闻中心</div>
            </div>
            
            <div class="news_content">
                <?php
					echo GET_CURRENT_NEWS_INFO('content');
				?>
            </div>
            
        </div>
    </div>


<div class="pop_down">
	<a class="close" href="javascript:;" title="关闭"></a>
    <img src="<?php echo $topData['other']['game_download_qrcode'];?>" />
    <a class="down" href="<?php echo $topData['other']['android_download_url'];?>"></a>
    <a class="down2" href="<?php echo $topData['other']['ios_download_url'];?>" target="_self"></a>
</div>
<?php require_once 'footer.ctp';?>

<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//微信
	var dl = $("#nav_fuli");
	var pd = $(".pop_wx");
	dl.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
	pd.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
	
	$('.pop_down .close').click(function(){
		$('.pop_down').hide()
	});
});	
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
