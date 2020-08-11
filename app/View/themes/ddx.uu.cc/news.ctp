<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?38a7fc3f3b77fa5a0fcb4438c4144c3b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body class="page">
<div class="pr nav">
    <a href="#link" target="_blank" class="pa logo"><img src="<?php BLOCK('game_icon') ?>" /></a>
    <h2><b>快乐点点消</b><span>国民级点击消除闯关手游</span></h2>
    <div class="pa nav_menu">
        <a id="n1" href="//ddx.uu.cc/">首页</a>
        <a id="n2" class="<?php if($category_id == GET_CATEGORY_ID('活动')) echo 'on'; ?>" href="<?php CATEGORY_URL('活动') ?>">活动</a>
        <a id="n3" class="<?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'on'; ?>" href="<?php CATEGORY_URL('新闻') ?>">新闻</a>
        <a id="n4" class="<?php if($category_id == GET_CATEGORY_ID('攻略')) echo 'on'; ?>" href="<?php CATEGORY_URL('攻略') ?>">攻略</a>
        <a id="n5" href="<?php BLOCK('forum_url') ?>">论坛</a>
    </div>
    <div class="pa wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></span></div>
    <div class="pa wxin_qq_pop wxin_pop"><img src="<?php BLOCK('weixin_qrcode') ?>" /><h3>微信公众号</h3><span>扫描二维码关注<br><?php BLOCK('weixin_account') ?></span></div>
    <div class="pa wxin_qq_pop qq_pop"><img src="<?php BLOCK('qq_qrcode') ?>" /><span>加入QQ群</span><h3><?php BLOCK('qq_group') ?></h3></div>
</div>
<div class="page_content">
	<div class="pr page_wrap">
    	<div class="pa wx_code">
        	<img src="<?php BLOCK('game_download_qrcode') ?>" />
            <span>扫一扫下载游戏</span>
            <a class="ios_down" href="<?php BLOCK('pc_ios_download_url') ?>" target="_blank" title="App Store下载"></a>
            <a class="android_down" href="<?php BLOCK('pc_android_download_url') ?>" target="_blank" title="安卓下载"></a>
        </div>
        <div class="content">
        	<?php
        	if($category_id == GET_CATEGORY_ID('活动'))
        		$catename='最新活动<i>LATEST ACTIVITY</i>';
        	else if($category_id == GET_CATEGORY_ID('新闻'))
        		$catename='新闻公告<i>NEWS</i>';
        	else if($category_id == GET_CATEGORY_ID('攻略'))
        		$catename='游戏攻略<i>WALKTHROUGH</i>';
        	else
        		$catename='游戏攻略<i>WALKTHROUGH</i>';
        	?>
        	<h2 class="page_tit"><?php echo $catename ?></h2>
            <ul class="news_list">
            <?php
            	SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',GET_CATEGORY_NAME($category_id),10,$page,array());
            ?>
            </ul>
            <div class="pages">
            <?php
            	SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array(),$page);
            ?>
            </div>
        </div>
    </div>
</div>
<?php require_once("_footer.ctp"); ?>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function(){ 
	//微信
	var wxin_dl = $(".wxin");
	var wxin_pd = $(".wxin_pop");
	var qqun_dl = $(".qqun");
	var qqun_pd = $(".qq_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	qqun_dl.hover(function() {
		qqun_pd.addClass("wxin_pop_show");
	}, function() {
		qqun_pd.removeClass("wxin_pop_show");
	});
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
