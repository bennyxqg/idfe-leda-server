<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
<link rel="shortcut icon" href="favicon.ico" />
<link media="screen" href="<?php BASE_URL() ?>css/m.css" rel="stylesheet" type="text/css" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?60a512c3b978fcde922f4640a4616d14";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>
<div class="header">
	<div class="wap_banner"><img alt="" src="//tntgd.uu.cc/uploads/editor_upload/images/201509101623038051.jpg" style="width: 640px; height: 420px;"></div>
	<div class="pa game_info">
		<img src="<?php BLOCK('game_icon') ?>">
        <h2>头脑特工队：泡泡乐</h2>
<!--        <p>消除<em>|</em>51M</p>-->
    </div>
</div>
<h2 class="main_tit">内容摘要</h2>
<section class="section1">
	<div class="slider">
		<div class="swiper-wrapper">
		<?php
			SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" /></div>','m-d',4,100,1,array('`int1` asc'));
		?>
        </div>
    </div>
    <div class="game_about zd">
    	<div class="txt"><?php BLOCK('game_description_detail') ?></div>
    	<a class="detail_more" href="javascript:;">详细介绍</a>
    </div>
</section>
<h2 class="main_tit">在线热度</h2>
<div class="hot_item">
	<ul>
    	<li>
        	<h2>游戏热度高</h2>
            <p>68万人刚加入</p>
        </li>
        <li>
        	<h2>大家都爱玩</h2>
            <p>超过2百万人热玩</p>
        </li>
        <li>
        	<h2>礼包发不停</h2>
            <p>16万人参加活动</p>
        </li>
    </ul>
</div>
<h2 class="main_tit">游戏攻略</h2>
<div class="news_item">
	<ul>
	<?php
		SHOW_NEWS('<li><a href="@@URL@@" target="_self"><h2><span>攻略</span>@@TITLE@@</h2><p>@@DESCRIPTION@@</p><img src="@@SMALL_IMAGE@@" /></a></li>','m-d','攻略',2,1,array());
	?>
    </ul>
</div>
<a class="go_all" href="<?php CATEGORY_URL('攻略') ?>">查看全部攻略</a>
<h2 class="main_tit">热门活动</h2>
<div class="news_item">
	<ul>
	<?php
		SHOW_NEWS('<li><a href="@@URL@@" target="_self"><h2><span>活动</span>@@TITLE@@</h2><p>@@DESCRIPTION@@</p><img src="@@SMALL_IMAGE@@" /></a></li>','m-d','活动',2,1,array());
	?>
    </ul>
</div>
<a class="go_all" href="<?php CATEGORY_URL('活动') ?>">查看全部活动</a>
<div class="footer">
    <a href="//www.idreamsky.com"><img src="<?php BASE_URL() ?>images/logo.png" alt=""></a>
    <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
</div>

<a class="download" href="">下载游戏</a>
<div class="tip">
    <img src="<?php BASE_URL() ?>images/tip.png" alt="">
</div>
<script src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?php BASE_URL() ?>js/swiper.jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css" />
<script type="text/javascript">
$(function(){
	function isWx(){
	   var ua = navigator.userAgent.toLowerCase();
	   if(ua.match(/MicroMessenger/i) == "micromessenger"){
			 return true;
	   }else{
		   return false;
	   }
	};
	
	var swiper = new Swiper('.slider', {
		slidesPerView: 2.5,
		paginationClickable: true,
		spaceBetween: 20
	});
	
    //判断android 和 ios
    var u = navigator.userAgent;
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        $(".download").attr("href","<?php BLOCK('ios_download_url') ?>");
    }else{
        $(".download").attr("href","<?php BLOCK('android_download_url') ?>");
    }

    //提示
    $(".download").click(function(){
        if(isWx()){
            $(".tip").show();
            return false;
        }
    });
    $(".tip").height($(document).height());
    $(".tip").click(function(){
        $(".tip").hide();
    });
	

	$(".detail_more").click(function(){
		if ($(".game_about").attr('class') == "game_about zd"){
			$(".game_about").attr('class',"game_about zk");
			$(this).text("收起详情");
		} else{
			$(".game_about").attr('class',"game_about zd");
			$(this).text("展开详情");
		}
    });
});
</script>
</body>
</html>
