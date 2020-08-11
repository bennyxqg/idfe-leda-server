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
$navid='n2';
require_once GET_BASE_DIR().'nav.ctp';
?>
</div>
<div class="main clearfix">
	<div class="wrap">
    	<?php
    	require_once GET_BASE_DIR().'left.ctp';
    	?>
        <div class="fr page_right">
        	<div class="pr page_top"><h2 class="tit">新闻中心<i>NEWS</i></h2><div class="pa site_nav"><a href="/">首页</a> &gt; <a>新闻中心</a></div></div>
            <div class="page_list_box">
            	<div class="page_tab_hd">
                	<ul class="news_tab_hd">
                	<?php
                	if($category_id == 0) $c='class="on"'; else $c='';
                	echo '<li id="p1" '.$c.'><a href="'.GET_CATEGORY_URL('XXX').'" target="_self">综合</a></li>';
                	
                	if(strcmp(GET_CATEGORY_NAME($category_id),'新闻') == 0) $c='class="on"'; else $c='';
                	echo '<li id="p2" '.$c.'><a href="'.GET_CATEGORY_URL('新闻').'" target="_self">新闻</a></li>';
                	
                	if(strcmp(GET_CATEGORY_NAME($category_id),'活动') == 0) $c='class="on"'; else $c='';
                	echo '<li id="p3" '.$c.'><a href="'.GET_CATEGORY_URL('活动').'" target="_self">活动</a></li>';
                	
                	if(strcmp(GET_CATEGORY_NAME($category_id),'公告') == 0) $c='class="on"'; else $c='';
                	echo '<li id="p4" '.$c.'><a href="'.GET_CATEGORY_URL('公告').'" target="_self">公告</a></li>';
                	?>
                    </ul>
                </div>
                <div class="page_news_list">
                	<ul>
                	<?php
	                	if($category_id == 0)
	                		$cates=array('新闻','活动','公告');
	                	else if(strcmp(GET_CATEGORY_NAME($category_id),'新闻') == 0)
	                		$cates='新闻';
	                	else if(strcmp(GET_CATEGORY_NAME($category_id),'活动') == 0)	
	                		$cates='活动';
	                	else if(strcmp(GET_CATEGORY_NAME($category_id),'公告') == 0)	
	                		$cates='公告';
	                	else
	                		$cates='新闻';
                		SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d',$cates,10,$page,array());
                	?>
                    	
                    </ul>
                </div>
            </div>
            <div class="page_pages">
            <?php
            SHOW_PAGINATION($cates,10,array(),$page);
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
