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
<link rel="stylesheet" href="<?php BASE_URL() ?>v2/css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico"/>
<link rel="bookmark" href="<?php BASE_URL() ?>favicon.ico"/>
<?php require_once('top.ctp'); ?>
</head>

<body class="page">

<div class="top_nav">
	<div class="wrap">
    	<h2 class="pa logo"><img alt="" src="<?php BLOCK('game_icon') ?>"></h2>
        <ul class="pa nav">
        	<li id="n1"><a href="//ld.uu.cc/home">官网首页</a></li>
            <li id="n2"><a href="<?php CATEGORY_URL('综合') ?>">新闻公告</a></li>
            <li id="n3"><a href="<?php CATEGORY_URL('聚怪','roles') ?>">英雄介绍</a></li>
            <li id="n4" class="on"><a href="<?php CATEGORY_URL('公会','gonglue') ?>">游戏攻略</a></li>
            <li id="n5"><a href="<?php BLOCK('forum_url') ?>" target="_blank">官方论坛</a></li>
        </ul>
        <a class="pa wx" href="javascript:;"></a>
        <div class="pa wx_pop"><img alt="" src="<?php BLOCK('weixin_qrcode') ?>"><p>扫码关注官方微信<br>微信号：<?php BLOCK('weixin_account') ?></p></div>
    </div>
</div>

<div class="page_banner">
	<div class="wrap">
    	<a class="home_link" href="//ld.uu.cc" target="_blank" title="前往官网首页"></a>
    </div>
</div>
<div class="main clearfix">
	<div class="wrap">
    	<div class="fl page_left">
        	<div class="pr page_down_code"><img alt="" src="<?php BLOCK('game_download_qrcode') ?>">扫一扫下载游戏</div>
            <div class="page_down">
            	<a class="ios_down" href="<?php BLOCK('ios_download_url') ?>"></a>
                <a class="az_down" href="<?php BLOCK('android_download_url') ?>"></a>
            </div>
            <div class="page_contact">
            	<h2>官方信息</h2>
                <div class="pr page_wx"><img alt="" src="<?php BLOCK('weixin_qrcode') ?>">扫一扫关注微信</div>
                <div class="page_wx_txt">微信号：<em><?php BLOCK('weixin_account') ?></em></div>
                <div class="page_qq">
                	<h3>官方QQ交流群</h3>
                    <ul>
                    	<?php
                    		$qqs=explode(',',GET_BLOCK('qq_group'));
                    		$len=count($qqs);
                    		for($i=0;$i<$len;$i++)
                    			echo '<li>'.$qqs[$i].'</li>';
            				
            			?>
                    </ul>
                </div>
                <div class="page_wb_tb">
                	<a href="<?php BLOCK('weibo_url') ?>" target="_blank"></a>
                    <a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"></a>
                </div>
            </div>
        </div>
        <div class="fr page_right">
        	<div class="pr page_top"><h2 class="tit">游戏攻略<i>GAME DATA</i></h2><div class="pa site_nav"><a href="//ld.uu.cc/home">首页</a> &gt; <a>游戏攻略</a></div></div>
            <div class="page_list_box">
            	<div class="page_tab_hd">
                	<ul class="gonglue_tab_hd">
                    	<li id="p1"<?php SHOW_IF_CATEGORY_ID_EQUAL(GET_CATEGORY_ID('公会'),' class="on"') ?>><a href="<?php CATEGORY_URL('公会','gonglue') ?>" target="_self">公会</a></li>
                        <li id="p2"<?php SHOW_IF_CATEGORY_ID_EQUAL(GET_CATEGORY_ID('冒险'),' class="on"') ?>><a href="<?php CATEGORY_URL('冒险','gonglue') ?>" target="_self">冒险</a></li>
                        <li id="p3"<?php SHOW_IF_CATEGORY_ID_EQUAL(GET_CATEGORY_ID('竞技场'),' class="on"') ?>><a href="<?php CATEGORY_URL('竞技场','gonglue') ?>" target="_self">竞技场</a></li>
                        <li id="p4"<?php SHOW_IF_CATEGORY_ID_EQUAL(GET_CATEGORY_ID('副本'),' class="on"') ?>><a href="<?php CATEGORY_URL('副本','gonglue') ?>" target="_self">副本</a></li>
                        <li id="p5"<?php SHOW_IF_CATEGORY_ID_EQUAL(GET_CATEGORY_ID('其他'),' class="on"') ?>><a href="<?php CATEGORY_URL('其他','gonglue') ?>" target="_self">其他</a></li>
                    </ul>
                </div>
                <div class="data_item clearfix">
                	<ul>
                    	<?php 
                    		SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><em>|</em></li>','',GET_CATEGORY_NAME($category_id).'-关键字',50,0,array('OrderBy'=>'`sort` asc'));
                    	?>
                    </ul>
                </div>
                <div class="page_news_list">
                	<ul>
                		<?php
                			SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d',GET_CATEGORY_NAME($category_id),10,$page,array('OrderBy'=>'`sort` asc'));
						?>
                    </ul>
                </div>
            </div>
            <div class="page_pages">
            <?php SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array('CurrentPageClass'=>'on'),$page) ?>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery-1.8.2.min.js"></script>
<script>
//微信
var dl = $(".wx");
var pd = $(".wx_pop");
dl.hover(function() {
	pd.addClass("wxin_pop_show");
}, function() {
	pd.removeClass("wxin_pop_show");
});
</script>
</body>
</html>
