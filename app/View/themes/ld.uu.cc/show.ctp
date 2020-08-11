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
            <li id="n2" class="on"><a href="<?php CATEGORY_URL('综合') ?>">新闻公告</a></li>
            <li id="n3"><a href="<?php CATEGORY_URL('聚怪','roles') ?>">英雄介绍</a></li>
            <li id="n4"><a href="<?php CATEGORY_URL('公会','gonglue') ?>">游戏攻略</a></li>
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
        	<div class="pr page_top"> 
        	
        	<?php
        		$cid=GET_CURRENT_NEWS_INFO('news_categories_id');
        		
        		if($cid == GET_CATEGORY_ID('活动') || $cid == GET_CATEGORY_ID('新闻') || $cid == GET_CATEGORY_ID('公告'))
        		{
        			$nav="<h2 class=\"tit\">新闻中心<i>NEWS</i></h2><div class=\"pa site_nav\"><a href=\"//ld.uu.cc/home\">首页</a> &gt;<a href=\"".GET_CATEGORY_URL('综合')."\">新闻中心</a> &gt; 新闻详情";
        		}
        		else if($cid == GET_CATEGORY_ID('公会') || $cid == GET_CATEGORY_ID('冒险') || $cid == GET_CATEGORY_ID('竞技场') || $cid == GET_CATEGORY_ID('副本') || $cid == GET_CATEGORY_ID('其他') || $cid == GET_CATEGORY_ID('公会-关键字') || $cid == GET_CATEGORY_ID('冒险-关键字') || $cid == GET_CATEGORY_ID('竞技场-关键字') || $cid == GET_CATEGORY_ID('副本-关键字') || $cid == GET_CATEGORY_ID('其他-关键字'))
       			{
       				$nav="<h2 class=\"tit\">游戏攻略<i>GAME DATA</i></h2><div class=\"pa site_nav\"><a href=\"//ld.uu.cc/home\">首页</a> &gt;<a href=\"".GET_CATEGORY_URL('公会','gonglue')."\">游戏攻略</a> &gt; 攻略详情";
       			}
       			else if($cid == GET_CATEGORY_ID('聚怪') || $cid == GET_CATEGORY_ID('输出') || $cid == GET_CATEGORY_ID('破招'))
       			{
       				$nav="<h2 class=\"tit\">英雄介绍<i>HERO</i></h2><div class=\"pa site_nav\"><a href=\"//ld.uu.cc/home\">首页</a> &gt;<a href=\"".GET_CATEGORY_URL('聚怪','roles')."\">英雄介绍</a> &gt; 英雄详情";
       			}
       			echo $nav;
        	?>
        	</div></div>
            <div class="page_list_box">
                <h2 class="news_tit"><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
                <div class="news_share"><div class="bdsharebuttonbox"><span class="fl">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?> 分享：</span><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到腾讯朋友" href="#" class="bds_tqf" data-cmd="tqf"></a></div></div>
                <script>
                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","tqf"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","tqf"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                </script>
                <div class="new_content">  
                	<?php SHOW_CURRENT_NEWS_INFO('content') ?> 
                </div>
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
