<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'-'.GET_CURRENT_NEWS_INFO('title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
?>
<link rel="stylesheet" href="//hnd.uu.cc/hnd.uu.cc/v2/css/style.css" />

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f7b46d5b26c91c9c86bc641ab6fd4fa5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<link rel="shortcut icon" href="//hnd.uu.cc/hnd.uu.cc/favicon.ico">
</head>

<body class="page">
<div class="page_banner" style="background:url(//hnd.uu.cc/hnd.uu.cc/v2/images/page_banner2.jpg) no-repeat 50% 0;">
<?php
$cid=GET_CURRENT_NEWS_INFO('news_categories_id');
if($cid == GET_CATEGORY_ID('新闻') || $cid == GET_CATEGORY_ID('公告') || $cid == GET_CATEGORY_ID('活动'))
{
	$navid='n2';
    $cname='新闻中心';
    $cnameen='NEWS';
}
else if($cid == GET_CATEGORY_ID('官方视频') || $cid == GET_CATEGORY_ID('玩家录制') || $cid == GET_CATEGORY_ID('游戏机截图') || $cid == GET_CATEGORY_ID('角色手稿'))
{
	$navid='n4';
	$cname='视听中心';
	$cnameen='AUDIO VISUAL';
}
else
{
	$navid='n3';
	$cname='游戏资料';
	$cnameen='DATA';
}

require_once 'nav.ctp';
//require_once GET_BASE_DIR().'nav.ctp';
?>
</div>
<div class="main clearfix">
	<div class="wrap">
    	<?php
    	require_once GET_BASE_DIR().'left.ctp';
    	?>
        <div class="fr page_right">
        	<?php
        	echo '<div class="pr page_top"><h2 class="tit">'.$cname.'<i>'.$cnameen.'</i></h2><div class="pa site_nav"><a href="/">首页</a> &gt; <a>'.$cname.'</a></div></div>';
        	?>
            <div class="page_list_box">
            <?php
                echo '<h2 class="news_tit">'.GET_CURRENT_NEWS_INFO('title').'</h2>';
            ?>
                <div class="news_share"><div class="bdsharebuttonbox">
            <?php
                echo '<span class="fl">时间：'.date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')).' 分享：</span>';
            ?>
                <a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到腾讯朋友" href="#" class="bds_tqf" data-cmd="tqf"></a></div></div>
                <script>
                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","tqf"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","tqf"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                </script>
                <div class="new_content">  
            <?php
                SHOW_CURRENT_NEWS_INFO('content');
            ?>
 
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<script>
//微信
var dl = $(".wx");
var pd = $(".wx_pop");
dl.hover(function() {
	pd.addClass("wxin_pop_show");
}, function() {
	pd.removeClass("wxin_pop_show");
});
//导航
var navL = $(".nav_hover");
var itemB = $(".nav_item");
navL.hover(function() {
	itemB.addClass("nav_item_show");
}, function() {
	itemB.removeClass("nav_item_show");
});
itemB.hover(function() {
	itemB.addClass("nav_item_show");
}, function() {
	itemB.removeClass("nav_item_show");
});
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
