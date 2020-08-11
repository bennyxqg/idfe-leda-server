
<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Wxt->getVedio($type,$page);
$topData=$this->Wxt->topData();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

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
            <li><a href="//5.uu.cc/news/98.html" target="_self">新闻资讯</a></li>
            <li><a href="//5.uu.cc/game_data/351.html" target="_self">游戏资料</a></li>
            <li class="on"><a href="//5.uu.cc/vedios/14/1.html" target="_self">游戏视频</a></li>
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
        <ul class="xj_bar" id="xj_bar">
         <a href="//5.uu.cc/vedios/14/1.html"<?php if ($type == 14) echo ' class="on"'; ?>>宣传片</a>
         <a href="//5.uu.cc/vedios/15/1.html"<?php if ($type == 15) echo ' class="on"'; ?>>游戏攻略</a>
         <a href="//5.uu.cc/vedios/16/1.html"<?php if ($type == 16) echo ' class="on"'; ?>>游戏直播</a>
         <a href="//5.uu.cc/vedios/17/1.html"<?php if ($type == 17) echo ' class="on"'; ?>>玩家创作</a>
         <div class="pa site_nav">当前位置：首页 &gt; 游戏截图</div>
        </ul>
            <div class="bar_x bar_x_n">
            <ul id="video_list" style="display:block">
            	<?php foreach ($data['list'] as $k => $v):?>
            	<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['datas']['str2'];?>" title="播放视频"><img src="<?php echo $v['datas']['str1'];?>" /><strong class="sp"></strong></a><span><?php echo $v['datas']['str3'];?></span></li>
            	<?php endforeach;?>
            </ul>
             <div class="pages"><?php echo $data['page'];?></div>
            </div>
        </div>
	</div>
</div>
<?php require_once 'footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>



<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery.SuperSlide.2.1.1.js"></script>

<script>
$(document).ready(function(){

	jQuery(".demo").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20});
	
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close,.zhezao').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.pop-yuyue').hide();
		$('.zhezao').hide();
	})
	
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
