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
<link rel="stylesheet" href="<?php BASE_URL() ?>home/css/style.css?v=20170725" />
<link rel="shortcut icon" href="//sds.uu.cc/sds.uu.cc/favicon.ico">
</head>

<body class="page">


<div class="menu_top">
    <div class="wrap">
        <a href="/home" target="_self">官网首页<em>HOME</em><span></span></a>
        <a href="<?php CATEGORY_URL('新闻') ?>" target="_self">新闻公告<em>NEWS</em><span></span></a>
        <a class="home_logo" href="/home" target="_self"><span></span></a>
        <a href="http://bbs.uu.cc/forum-345-1.html" target="_blank">游戏攻略<em>DATA</em><span></span></a>
        <a href="<?php BLOCK('forum_url') ?>" target="_self">官方论坛<em>BBS</em></a>
    </div>
</div>

<div class="page_banner"></div>

<div class="page_main">
	<div class="wrap">
    	<div class="pr page_nav"><h2>视频中心<em>VIDEO</em></h2><div class="pa nav_link"><a href="/home">首页</a>&gt;视频中心</div></div>
        <div class="page_con">
        	<div class="page_con_top"></div>
            <div class="content">
            	<ul class="pic_list">
            	<?php
            	SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@" href="javascript:;"><img src="@@STR1@@" /><span>@@LABEL@@</span><em></em></a></li>','m-d',5,100,1,array('OrderBy'=>'`int1` asc'));
            	?>
                </ul>
            </div>
            <!--<div class="pages"><a href="#link">首页</a><a class="on" href="#link">1</a><a href="#link">2</a><a href="#link">3</a><a href="#link">末页</a></div>-->
            <div class="page_con_bottom"></div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="div_pop">
	<a class="go_top" href="javascript:;"></a>
	<img class="wx_code" src="<?php BLOCK('weixin_qrcode') ?>" />
    <p class="qqun">①群：<?php BLOCK('qq_group1') ?><br>②群：<?php BLOCK('qq_group2') ?></p>
</div>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>

$(document).ready(function(){
	
	//视频	   
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
	
	$(".go_top").click(function() {
		$("body,html").animate({scrollTop:0},500);
	});
	
})


</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?de64d2f7cefe742c2e593b9bfac2caab";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
