<!DOCTYPE html><html lang="zh-cn"><head>
<?php /*BLOCK*/
$this->Website->init();
/*BLOCK*/ ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>水果忍者</title><meta content="水果 忍者 新版 经典 四周年" name="keywords"><meta content="《水果忍者》（Fruit Ninja）是一款经典之作，刺激好玩、容易上手却教人难以离手的休闲益智类游戏。玩家将会在游戏中扮演一个讨厌水果的忍者，用锋利的刀切开各种水果。只需将手指扫过屏幕，就能像忍者战士般痛快地切开溅出美味果汁的水果。但注意不要触碰混杂其中的炸弹，一旦引发爆炸，你的刺激冒险便会瞬间终结！" name="description">    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="//fruit.uu.cc/fruit.uu.cc/favicon.ico">
    <meta name="baidu-site-verification" content="wkFtx4mgS4">
    <link rel="stylesheet" href="//fruit.uu.cc/fruit.uu.cc/css/style.css" type="text/css">
    <link rel="stylesheet" href="//fruit.uu.cc/fruit.uu.cc/css/minimalist.css" type="text/css">
    
    <script src="//hm.baidu.com/hm.js?bd1059138318d7c7f0b88858b83c5421"></script>
    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->

<link href="//act.uu.cc/gamesnav/gamesNav.css?ran=0.5023057588841766" rel="stylesheet" type="text/css"></head>
<body class="">

<div class="header">
    <div class="banBox">
        <div class="nybanner">
            <img id="inner_banner_edit" class="CUSTOM_EDIT IMG_EDIT" alt="" src="//fruit.uu.cc/manage/upload/image/fruit.uu.cc/2016-05-25/20160525_151923_766775.jpg" style="width: 1920px; height: 266px;" width="" height="">
        </div>
        <div class="top_db ny_bg">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> &gt;&gt;
                <span>
                <?php /*BLOCK*/ CATEGORY_NAME($category_id) /*BLOCK*/ ?> 
                </span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
        	<li id="cate86" class="cur"><a class="xw" href="//fruit.uu.cc/news/86.html">新闻</a><em></em></li>
            <li id="cate88"><a class="gl" href="//fruit.uu.cc/news/88.html">活动</a><em></em></li>
            <li id="cate90"><a class="hd" href="//fruit.uu.cc/news/90.html">攻略</a><em></em></li>
        </ul>
        <ul class="newslist">
	        <?php /*BLOCK*/
	        SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@]@@TITLE@@</a></li>','m/d',GET_CATEGORY_NAME($category_id),10,$page,array());
	        /*BLOCK*/ ?>
        </ul>
        <div class="pagination">
        	<?php /*BLOCK*/
            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array(),$page);
            /*BLOCK*/ ?>
        </div>
    </div>
</div>
<?php echo require_once("footer.ctp"); ?>

<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/jcarousellite.js"></script>
<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/switch.js"></script>
<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/common.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>

<?php /*BLOCK*/
echo <<<_HTML
<script type="text/javascript">
$(function () {
	$("#cate86,#cate88,#cate90").removeClass("cur");

	$("#cate{$category_id}").addClass("cur");
});
</script>
_HTML;
/*BLOCK*/ ?>
</body>
</html>


																																					<div class="gamesNav_box" id="gamesNav_box" style="position: absolute; top: -500px;"><ul class="gamesNav_inner gamesNav_lsn"><li class="gamesNav_logo gamesNav_fl"><a href="//www.idreamsky.com" class="gamesNav_blnk gamesNav_hdn" title="乐逗游戏" target="_blank">乐逗游戏</a></li><li id="gamesNav_g" class="gamesNav_ad gamesNav_fl"><div id="gamesNav_go" style="display: block;"><span></span><img class="gamesNav_nb" src="//act.uu.cc/gamesnav/images/topimgthumb.jpg" alt=""></div></li><li class="gamesNav_fr gamesNav_links"><a href="javascript:alert('商城建设中，敬请期待！')" target="_blank">乐逗游戏商城</a></li><li class="gamesNav_total gamesNav_ml10 gamesNav_fr"><h3 class="gamesNav_title" id="gamesNav_t">乐逗游戏排行榜<i class="gamesNav_icon_arrow"></i></h3><div class="gamesNav_pop" id="gamesNav_p"></div></li></ul><div id="gamesNav_d" class="gamesNav_big" style="display: none;"><a href="//cqb.uu.cc/" target="_blank"><img class="gamesNav_nb" src="//act.uu.cc/gamesnav/images/topadimgbig.jpg" alt=""></a></div></div>    					    																																																																																														    					    													</body></html>