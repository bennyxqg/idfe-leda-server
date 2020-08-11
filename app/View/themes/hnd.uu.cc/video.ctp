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
                <?php
                if(strcmp(GET_CATEGORY_NAME($category_id),'官方视频') == 0) $c='class="on"'; else $c='';
                echo '<li '.$c.'><a href="'.GET_CATEGORY_URL('官方视频','video').'" target="_self">官方视频</a></li>';
                
                echo '<li><a href="'.GET_CATEGORY_URL('精彩原画','pic').'" target="_self">精彩原画</a></li>';
                echo '<li><a href="'.GET_CATEGORY_URL('游戏截图','pic').'" target="_self">游戏截图</a></li>';
                
                if(strcmp(GET_CATEGORY_NAME($category_id),'玩家作品') == 0) $c='class="on"'; else $c='';
                echo '<li '.$c.'><a href="'.GET_CATEGORY_URL('玩家作品','video').'" target="_self">玩家作品</a></li>';
                
                ?>
                </ul>
            </div>
            <div class="main_page_con">
                <div class="page_vision page_vedio clearfix">
                    <ul>
                    <?php
                	SHOW_NEWS('<li><a class="video_btn_link" name="@@CONTENT@@" href="javascript:;"><img src="@@BIG_IMAGE@@"><span></span><p>@@TITLE@@</p></a></li>','m-d',GET_CATEGORY_NAME($category_id),10,$page,array())
                	?>
                    </ul>
                </div>
                <div class="page_pages">
	            <?php
	            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array('Template'=>'video'),$page);
	            ?>
	            </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<!--视频播放-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="<?php BLOCK('pc_video_img') ?>" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

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

//页面头部视频	   
$('.video_btn_link').click(function(){
	var vedioSrc = this.name;
	$('.s_p_k video').attr('src',vedioSrc);
	$('.zhezao').show();
	$('.s_p_k').show();
})
$('.close').click(function(){
	$('.s_p_k video').attr('src','');
	$('.s_p_k').hide();
	$('.zhezao').hide();
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
