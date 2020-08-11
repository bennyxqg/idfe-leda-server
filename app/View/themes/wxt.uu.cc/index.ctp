<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="//wxt.uu.cc/wxt.uu.cc/yuyue20171017/css/style.css" />
<link rel="shortcut icon" href="//wxt.uu.cc/wxt.uu.cc/favicon.ico">
</head>

<body>
<a class="webGame" href="//wxt.uu.cc/activity/wxt/web_game.html" target="_blank"></a>
<div class="top1">
	<div class="wrap">
		<a class="video_btn_link" name="<?php echo GET_BLOCK('yuyue_vedio_url'); ?>" href="javascript:;"></a>
	</div>
</div>

<div class="top2">
	<div class="wrap">
		<a class="goHome" href="http://wxt.uu.cc/home/" target="_self"></a>
		<img class="downCode" src="<?php echo GET_BLOCK('pc_download_qrcord'); ?>">
		<a class="downAz" href="<?php echo GET_BLOCK('android_download_url'); ?>"></a>
		<a class="downIos" href="<?php echo GET_BLOCK('ios_download_url'); ?>" target="_blank"></a>
	</div>
</div>

<div class="main1">
	<div class="wrap">
		<div class="getItem">
			<ul>
				<li><a href="http://wxt.uu.cc/home/" target="_blank"><img src="<?php BASE_URL() ?>yuyue20171017/images/01.jpg"><h2>灵玉系统</h2><p>全新技能系统，灵玉附带超强技<br>能挑战“灵玉幻境”获得灵玉</p><span>查看详情</span></a></li>
				<li class="mgLr"><a href="http://wxt.uu.cc/home/" target="_blank"><img src="<?php BASE_URL() ?>yuyue20171017/images/02.jpg"><h2>装备系统</h2><p>通过击败怪物掉落各种装备<br>更有几率获得极品装备</p><span>查看详情</span></a></li>
				<li><a href="http://wxt.uu.cc/home/" target="_blank"><img src="<?php BASE_URL() ?>yuyue20171017/images/03.jpg"><h2>装备副本</h2><p>通关装备副本<br>获取稀有装备玉</p><span>查看详情</span></a></li>
				<li><a href="http://wxt.uu.cc/home/" target="_blank"><img src="<?php BASE_URL() ?>yuyue20171017/images/04.jpg"><h2>全新场景</h2><p>叹息之壁、戍卫之所、沙虫溶洞<br>三个全新场景开放</p><span>查看详情</span></a></li>
				<li class="mgLr"><a href="http://wxt.uu.cc/home/" target="_blank"><img src="<?php BASE_URL() ?>yuyue20171017/images/05.jpg"><h2>拍卖行</h2><p>装备宝石材料均可<br>在拍卖行自由交易变现</p><span>查看详情</span></a></li>
				<li><a href="http://wxt.uu.cc/home/" target="_blank"><img src="<?php BASE_URL() ?>yuyue20171017/images/06.jpg"><h2>经验药水</h2><p>使用经验药水后<br>在指定时间内打怪经验加成</p><span>查看详情</span></a></li>
			</ul>
		</div>
	</div>
</div>

<div class="main2">
	<div class="wrap">
		<div id="posterTvGrid86804"></div>
	</div>
</div>

<?php require_once 'footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video>
<a class="close"></a></div>
<div class="zhezao"></div>


<!--右侧浮窗-->
<div class="message">
    <div class="qr">
    	<img src="<?php echo GET_BLOCK('weixin_qrcode'); ?>"> 
    </div>
    <div class="notice">
        关注公众号<br>
        获取福利和资讯
    </div>
    <div class="qq">
        官方qq群
        <ul><li>①群:<?php echo GET_BLOCK('yuyue_qq_1'); ?></li><li>②群:<?php echo GET_BLOCK('yuyue_qq_2'); ?></li></ul>
    </div>
</div>


<script type="text/javascript" src="//wxt.uu.cc/wxt.uu.cc/yuyue20171017/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="//wxt.uu.cc/wxt.uu.cc/yuyue20171017/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="//wxt.uu.cc/wxt.uu.cc/yuyue20171017/js/posterTvGrid.js"></script>
<script>
$(document).ready(function(){
	
	var posterTvGrid86804 = new posterTvGrid('posterTvGrid86804',{className: "posterTvGrid"},[
		<?php 
             SHOW_DATAS('{"img":"@@STR1@@","title":"","url":"@@STR2@@"},',
             'Y-m-d',24,5);
              ?>
	]

);
	
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close,.zhezao').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.zhezao').hide();
	})
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
	
	
	jQuery(".demo").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20});

})
</script>

</body>
</html>
