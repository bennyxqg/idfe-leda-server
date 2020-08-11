<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
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
$navid='n4';
require_once 'nav.ctp';
//require_once GET_BASE_DIR().'nav.ctp';
?>
</div>
<div class="main main_page clearfix">
	<div class="wrap">
    	<div class="pr page_top"><h2 class="tit">视听中心<i>AUDIO-VISUAL CENTER</i></h2><div class="pa site_nav"><a href="/">首页</a> &gt; <a>视听中心</a></div></div>
        <div class="page_list_box">
            <div class="page_tab_hd">
                <ul class="news_tab_hd">
                    <li><a href="<?php CATEGORY_URL('官方视频','video') ?>" target="_self">官方视频</a></li>
                    
                    <li <?php if($category_id == GET_CATEGORY_ID('精彩原画')) echo 'class="on"'; ?>><a href="<?php CATEGORY_URL('精彩原画','pic') ?>" target="_self">精彩原画</a></li>
                    <li <?php if($category_id == GET_CATEGORY_ID('游戏截图')) echo 'class="on"'; ?>><a href="<?php CATEGORY_URL('游戏截图','pic') ?>" target="_self">游戏截图</a></li>
                    
                    <li><a href="<?php CATEGORY_URL('玩家作品','video') ?>" target="_self">玩家作品</a></li>
                </ul>
            </div>
            <div class="main_page_con">
                <div class="page_vision page_pic clearfix">
                    <ul class="pic_view">
                    <?php
                	SHOW_NEWS('<li><a href="javascript:;"><img src="@@BIG_IMAGE@@" /></a></li>','m-d',GET_CATEGORY_NAME($category_id),10,$page,array())
                	?>
                    </ul>
                    
                </div>
                <div class="page_pages">
		            <?php
		            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array('Template'=>'pic'),$page);
		            ?>
		        </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<!--图片浏览-->
<div class="pic_slide">
	<a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="//hnd.uu.cc/hnd.uu.cc/v2/images/loading.gif" width="32" height="32" /></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
	<ul class="slide_content">
    	
        <!--<?php /*BLOCK*/
        SHOW_NEWS('<li style="background:url(@@BIG_IMAGE@@); width:816px; height:459px;"></li>','m-d',GET_CATEGORY_NAME($category_id),10,$page,array())
        /*BLOCK*/ ?>-->
    </ul>
    <div class="bottom">
    	共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<div class="zhezao"></div>

<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/js/pic-slide.js"></script>
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
var pageTabw = $(".page_tab_hd").width(),
	pageTabx = $(".page_tab_hd li").length;
$(".page_tab_hd li").css("width",pageTabw/pageTabx);


$('.close').click(function(){
	$('.pic_slide').hide();
	$('.zhezao').hide();
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
