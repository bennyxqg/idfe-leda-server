<?php 
require_once "include.php";
$data6=$this->Tanke->getAudio(6,$page);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?>
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" />

</head>

<body>
    <div class="header">
    	<div class="wrap">
            <a class="fl logo" href="//xhzc.uu.cc/" target="_self"></a>
            <div class="fl menu">
                <ul>
                    <li><a href="//xhzc.uu.cc/" target="_self">官网首页</a></li>
                    <li><a href="//xhzc.uu.cc/news/98" target="_blank">新闻资讯</a></li>
                    <li><a href="javascript:alert('敬请期待！')" target="_self">游戏特色</a></li>
                    <li><a href="<?php echo $topData['other']['forum_url'];?>" target="_self">官方论坛</a></li>
                </ul>
            </div>
            <a class="fr qq_btn" href="javascript:;"></a>
            <a class="fr weixin_btn" href="javascript:;"></a>
            <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo $topData['other']['weixin_qrcode'];?>"><h3>扫一扫领礼包</h3></div>
            <div class="pa wxin_qq_pop qq_pop"><span>加入VIP先遣队</span>
            	<?php $qqqun = explode(',',$topData['other']['qq_group']);
		    	foreach ($qqqun as $v):
					echo "<h3>$v</h3>";
				endforeach;
		    ?>
            </div>
    	</div>
    </div>
    <div class="banner">
    	<div class="wrap"></div>
    </div>
    <div class="page_main">
    	<div class="wrap">
        	<div class="pr news_top">
            	
                <h2 class="content_tit"><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="news_time"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
                
                <div class="pa site_nav">当前位置：<<a href="//xhzc.uu.cc" target="_self">首页</a> &gt; 新闻资讯</div>
            </div>
            
            <div class="news_content">
            	<?php
					echo GET_CURRENT_NEWS_INFO('content');
				?>
            </div>
            
        </div>
    </div>

<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//微信
	var wxin_dl = $(".weixin_btn");
	var wxin_pd = $(".wxin_pop");
	var qqun_dl = $(".qq_btn");
	var qqun_pd = $(".qq_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	$(".qq_btn,.qq_pop").hover(function() {
		qqun_pd.addClass("wxin_pop_show");
	}, function() {
		qqun_pd.removeClass("wxin_pop_show");
	});
});	
</script>
</body>
</html>
