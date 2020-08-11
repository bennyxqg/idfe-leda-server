<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css" />
</head>

<body class="page">
<div class="pr nav">
    <a href="//ddx.uu.cc/" target="_blank" class="pa logo"><img src="<?php BLOCK('game_icon') ?>" /></a>
    <h2><b>快乐点点消</b><span>国民级点击消除闯关手游</span></h2>
    <div class="pa nav_menu">
        <a id="n1" class="on" href="//ddx.uu.cc/">首页</a>
        <a id="n2" href="<?php CATEGORY_URL('活动') ?>">活动</a>
        <a id="n3" href="<?php CATEGORY_URL('新闻') ?>">新闻</a>
        <a id="n4" href="<?php CATEGORY_URL('攻略') ?>">攻略</a>
        <a id="n5" href="<?php BLOCK('forum_url') ?>">论坛</a>
    </div>
    <div class="pa wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></span></div>
    <div class="pa wxin_qq_pop wxin_pop"><img src="<?php BLOCK('weixin_qrcode') ?>" /><h3>微信公众号</h3><span>扫描二维码关注<br><?php BLOCK('weixin_account') ?></span></div>
    <div class="pa wxin_qq_pop qq_pop"><img src="<?php BLOCK('qq_qrcode') ?>" /><span>加入QQ群</span><h3><?php BLOCK('qq_group') ?></h3></div>
</div>
<div class="page_content">
	<div class="pr page_wrap">
    	<div class="pa wx_code">
        	<img src="<?php BLOCK('game_download_qrcode') ?>" />
            <span>扫一扫下载游戏</span>
            <a class="ios_down" href="<?php BLOCK('pc_ios_download_url') ?>" target="_blank" title="App Store下载"></a>
            <a class="android_down" href="<?php BLOCK('pc_android_download_url') ?>" target="_blank" title="安卓下载"></a>
        </div>
        <div class="content">
        	<h2 class="page_tit">视频中心<i>VIDEOS</i></h2>
            <div class="vedio_tab">
                <ul>
                    <li <?php if ($type == 0) echo 'class="on"';?>><a href="//ddx.uu.cc/vediocenter/0.html" target="_self">官方视频</a><span></span></li>
                    <li <?php if ($type == 5) echo 'class="on"';?>><a href="//ddx.uu.cc/vediocenter/5_1.html" target="_self">通关视频</a><span></span></li>
                </ul>
            </div>
            <ul class="vedio_list clearfix">
            <?php
				SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@" href="javascript:;"><img src="@@STR1@@" /><span></span><p>@@STR3@@</p></a></li>','m-d',$type,4,0,array('OrderBy' => 'created desc'));
		    ?>
            </ul>
            <div class="pages">
            	<?php
            	SHOW_DATAS_PAGINATION($type,9,array('CurrentPageClass' => 'on'),$page,'vediocenter');
            	?>
            </div>
        </div>
    </div>
</div>
<?php require_once("_footer.ctp"); ?>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function(){ 
	//微信
	var wxin_dl = $(".wxin");
	var wxin_pd = $(".wxin_pop");
	var qqun_dl = $(".qqun");
	var qqun_pd = $(".qq_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	qqun_dl.hover(function() {
		qqun_pd.addClass("wxin_pop_show");
	}, function() {
		qqun_pd.removeClass("wxin_pop_show");
	});
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.pic_slide').hide();
		$('.zhezao').hide();
	})
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
