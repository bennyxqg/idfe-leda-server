<!DOCTYPE html><html lang="zh-cn"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
    
    <link rel="shortcut icon" href="//fruit.uu.cc/fruit.uu.cc/favicon.ico">
    <meta name="baidu-site-verification" content="wkFtx4mgS4">
    <link rel="stylesheet" href="//fruit.uu.cc/fruit.uu.cc/css/style.css" type="text/css">
    <link rel="stylesheet" href="//fruit.uu.cc/fruit.uu.cc/css/minimalist.css" type="text/css">
    
    <script src="//hm.baidu.com/hm.js?bd1059138318d7c7f0b88858b83c5421"></script>
    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->
	
<script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=402297"></script>
<link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css">
<link href="//act.uu.cc/gamesnav/gamesNav.css?ran=0.2199499006383121" rel="stylesheet" type="text/css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=403857"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=8105b07e.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=403857"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=403857"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=403979"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=8105b07e.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=403999"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=8105b07e.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=406064"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=406064"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=406066"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"><script src="//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=406713"></script><link rel="stylesheet" href="//bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=6aba13f0.css"></head>
<body class="" style="padding-right: 34px;">

<div class="header">
    <div class="banBox">
        <div class="nybanner">
        	<img id="inner_banner_edit" class="CUSTOM_EDIT IMG_EDIT" alt="" src="//fruit.uu.cc/manage/upload/image/fruit.uu.cc/2016-05-25/20160525_182012_194467.jpg" style="width: 1920px; height: 266px;" width="" height="">
        </div>
        <div class="top_db ny_bg">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> &gt;&gt;
                <a href="#">新闻中心</a> &gt;&gt;
                <span>正文</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('title') /*BLOCK*/ ?></h2>
            <p>时间：<?php /*BLOCK*/ echo date("Y-m-d h:i:s",GET_CURRENT_NEWS_INFO('created')); /*BLOCK*/ ?></p>
        </div>
        <div class="news_con"><?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('content') /*BLOCK*/ ?></div>
        <div class="share clearfix">
            <div class="bdsharebuttonbox fr bdshare-button-style0-16" data-bd-bind="1464172114904">
                <a href="#" class="bds_more" data-cmd="more">分享到：</a>
                <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a>
                <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a>
                <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a>
                <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a>
            </div>
            <script>
            window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};
            with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
            </script>
        </div>
    </div>
    <div class="wxbox">
    <?php /*BLOCK*/
        echo '<img alt="" src="'.GET_BLOCK('game_download_qrcode').'" style="width: 112px; height: 112px;">';
    /*BLOCK*/ ?>
        <p class="android">下载游戏</p>
    <?php /*BLOCK*/
        echo '<img src="'.GET_BLOCK('weixin_qrcode').'" alt="">';
    /*BLOCK*/ ?>
        <p>扫描关注微信公众号</p>
    </div>
</div>
<?php echo require_once("footer.ctp"); ?>

<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/jcarousellite.js"></script>
<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/switch.js"></script>
<script type="text/javascript" src="//fruit.uu.cc/fruit.uu.cc/js/common.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
																																					<div class="gamesNav_box" id="gamesNav_box" style="position: absolute; top: -500px;"><ul class="gamesNav_inner gamesNav_lsn"><li class="gamesNav_logo gamesNav_fl"><a href="//www.idreamsky.com" class="gamesNav_blnk gamesNav_hdn" title="乐逗游戏" target="_blank">乐逗游戏</a></li><li id="gamesNav_g" class="gamesNav_ad gamesNav_fl"><div id="gamesNav_go"><span></span><img class="gamesNav_nb" src="//act.uu.cc/gamesnav/images/topimgthumb.jpg" alt=""></div></li><li class="gamesNav_fr gamesNav_links"><a href="javascript:alert('商城建设中，敬请期待！')" target="_blank">乐逗游戏商城</a></li><li class="gamesNav_total gamesNav_ml10 gamesNav_fr"><h3 class="gamesNav_title" id="gamesNav_t">乐逗游戏排行榜<i class="gamesNav_icon_arrow"></i></h3><div class="gamesNav_pop" id="gamesNav_p"></div></li></ul><div id="gamesNav_d" class="gamesNav_big"></div></div>    					    																																																																		<div id="qq-sendUrl-btn"></div>    					    																																																																		<div id="qq-sendUrl-btn"></div>    					    																																																									<div id="qq-sendUrl-btn"></div>    					    																																																																																																					    					    																																																																		    					    																																																																																																																																																										    					    																						</body></html>