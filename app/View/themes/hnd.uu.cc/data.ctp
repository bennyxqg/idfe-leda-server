<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
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
$navid='n3';
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
        	<div class="pr page_top"><h2 class="tit">游戏资料<i>DATA</i></h2><div class="pa site_nav"><a href="/">首页</a> &gt; <a>游戏资料</a></div></div>
            <div class="page_list_box">
            	<div class="page_tab_hd">
                	<ul class="news_tab_hd">
                	<?php
                	if(GET_CATEGORY_ID('新手指南') == $category_id) $c='class="on"'; else $c='';
                	echo '<li id="p1" '.$c.'><a href="'.GET_CATEGORY_URL('新手指南','data').'" target="_self">新手指南</a></li>';
                	
                	if(GET_CATEGORY_ID('系统介绍') == $category_id) $c='class="on"'; else $c='';
                	echo '<li id="p1" '.$c.'><a href="'.GET_CATEGORY_URL('系统介绍','data').'" target="_self">系统介绍</a></li>';
                	
                	if(GET_CATEGORY_ID('通关秘籍') == $category_id) $c='class="on"'; else $c='';
                	echo '<li id="p1" '.$c.'><a href="'.GET_CATEGORY_URL('通关秘籍','data').'" target="_self">通关秘籍</a></li>';
                	
                	if(GET_CATEGORY_ID('攻略专区') == $category_id) $c='class="on"'; else $c='';
                	echo '<li id="p1" '.$c.'><a href="'.GET_CATEGORY_URL('攻略专区','data').'" target="_self">攻略专区</a></li>';

                	?>
                    </ul>
                </div>
                <div class="page_news_list">
                	<ul>
                	<?php
                		$cates=GET_CATEGORY_NAME($category_id);
                		SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d',$cates,10,$page,array());
                	?>
                    </ul>
                </div>
            </div>
            <div class="page_pages">
            <?php
            SHOW_PAGINATION($cates,10,array('Template'=>'data'),$page);
            ?>
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
