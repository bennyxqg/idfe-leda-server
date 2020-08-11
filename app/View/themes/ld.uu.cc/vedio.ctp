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
        	<div class="pr page_top"><h2 class="tit">影音中心<i>VIDEO GALLERY</i></h2><div class="pa site_nav"><a href="//ld.uu.cc/home">首页</a> &gt; <a>影音中心</a></div></div>
            <div class="page_list_box tab">
            	<div class="page_tab_hd">
                	<ul class="news_tab_hd vedio_tab_hd tab_hd">
                    	<li id="p1" class="on"><a href="#link" target="_self">游戏视频</a></li>
                        <li id="p2"><a href="#link" target="_self">精彩截图</a></li>
                    </ul>
                </div>
                <div class="vedio_list vedio_list_con tab_con clearfix">
                	<ul>
                	<?php
                		SHOW_DATAS('<li><a name="@@STR2@@" href="javascript:;" title="@@LABEL@@"><img src="@@STR1@@" /><span>@@LABEL@@</span></a></li>','m-d',2,100,0,array('OrderBy'=>'`int1` asc'));
                	?>
                    </ul>
                </div>
                <div class="vedio_list tab_con clearfix">
                	<ul>
                	<?php
                		SHOW_DATAS('<li><a href="@@STR2@@" target="_blank" title="@@LABEL@@"><img src="@@STR1@@" /><span>@@LABEL@@</span></a></li>','m-d',3,100,0,array('OrderBy'=>'`int1` asc'));
                	?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay="autoplay" poster="//ld.uu.cc/ld.uu.cc/images/video.jpg" controls="controls">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/html5media.min.js"></script>
<script>
//微信
var dl = $(".wx");
var pd = $(".wx_pop");
dl.hover(function() {
	pd.addClass("wxin_pop_show");
}, function() {
	pd.removeClass("wxin_pop_show");
});
/*tab 选项卡*/
$('.tab').each(function(){
	var _this = $(this);
	_this.find('.tab_hd').eq(0).find('li').each(function(i){
		if(i==0){
			$(this).addClass('on');
			_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
		}
		$(this).click(function(){
			$(this).siblings('li').removeClass('on');
			$(this).addClass('on');
			_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
		})
	})
})
//页面头部视频	   
$('.vedio_list_con a').click(function(){
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
</body>
</html>
