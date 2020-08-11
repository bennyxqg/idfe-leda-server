<?php
require_once "include.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php

$base_path = 'http://'.$_SERVER['HTTP_HOST'].'/wxt.uu.cc/home/';

$config_data = $this->Wxt->getConfigData();
$tuijian = $this->Wxt->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/style.css" />
<link rel="shortcut icon" href="//wxt.uu.cc/wxt.uu.cc/favicon.ico">
</head>

<body class="page">
<div class="top-nav">
	<div class="wrap">
    	<a class="home-logo fl" href="/home"><img src="<?php echo $base_path; ?>images/logo.jpg" /></a>
        <ul class="nav-list fl">
        	<li><a href="/home" target="_self">官网首页</a></li>
            <li class="on"><a href="//5.uu.cc/news/98.html" target="_self">新闻资讯</a></li>
            <li><a href="//5.uu.cc/game_data/351.html" target="_self">游戏资料</a></li>
            <li><a href="//5.uu.cc/vedios/14/1.html" target="_self">游戏视频</a></li>
            <li><a href="<?php echo GET_BLOCK('forum_url'); ?>" target="_blank">官方论坛</a></li>
        </ul>
        <ul class="nav-item fr">
        	<li><a href="<?php echo GET_BLOCK('kefu_url'); ?>" target="_blank">客服</a></li>
            <li><a class="tieba" href="<?php echo GET_BLOCK('baidu_tieba_url'); ?>" target="_blank">贴吧</a></li>
            <li><a class="weixin" href="javascript:;" target="_blank">微信</a></li>
            <li><a class="weibo" href="<?php echo GET_BLOCK('weibo_url'); ?>" target="_blank">微博</a></li>
        </ul>
    </div>
</div>

<div class="page-banner"></div>

<div class="c_main">
	<div class="f_left">
    	<h2>下载游戏</h2>
        <span class="d_ewm"><img src="<?php echo GET_BLOCK('pc_download_qrcord'); ?>"><p>扫一扫下载游戏</p></span>
        <p class="down_n">
            <a href="<?php echo GET_BLOCK('android_download_url'); ?>" class="d_n_az"><img src="<?php echo $base_path; ?>images/page_downaz.png" width="167" height="57"></a>
            <a href="<?php echo GET_BLOCK('ios_download_url'); ?>" class="d_n_ios"><img src="<?php echo $base_path; ?>images/page_downios.png" width="167" height="57"></a>
        </p>
        <h2>社交媒体</h2>
        <div class="d_ewm d_ewm">
        	<img src="<?php echo GET_BLOCK('weixin_qrcode'); ?>">
			<p>扫一扫关注公众号</p>
        </div>
	</div>
        
    <div id="xjtj" class="xjtj_n">
        <div class="xj_container" id="xj_container">
            <div class="pr news_top">
                <h2 class="content_tit"><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="news_time"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
                <div class="pa site_nav">当前位置：<a href="//5.uu.cc" target="_self">首页</a> &gt; 新闻中心</div>
            </div>
            <div class="fenxiang-box"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","douban"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","douban"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
            <div class="news_content">
            	<?php
					echo GET_CURRENT_NEWS_INFO('content');
				?>
            </div>
        </div>
	</div>
</div>

<?php require_once 'footer.ctp';?>


<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery.SuperSlide.2.1.1.js"></script>

<script>
$(document).ready(function(){

	jQuery(".demo").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20});
	
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
	
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
