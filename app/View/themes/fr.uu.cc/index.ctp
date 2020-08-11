<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/yuyue/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link rel="stylesheet" href="<?php echo $base_path; ?>css/style.css?v=20170718" />
<link rel="shortcut icon" href="//fr.uu.cc/fr.uu.cc/favicon.ico">
</head>

<body>

<div class="index1">
	<div class="wrap">
    	<a  class="video_btn_link" name="<?php echo $config_data['other']['index_video_url']; ?>" title="播放精彩视频" href="javascript:;"></a>
    </div>
</div>
<div class="index2">
	<div class="wrap">
        
        <div class="index-btns">
        	<div><a href="http://fr.uu.cc/home" target="_self"></a><a class="yuyue-btn" href="javascript:;"></a></div>
            <img width="110" src="<?php echo $config_data['other']['game_download_qrcode']; ?>">
        	<div><a href="<?php echo stripslashes($config_data['other']['ios_download_url']); ?>"></a><a href="<?php echo stripslashes($config_data['other']['android_download_url']); ?>"></a></div>
        </div>
    </div>
</div>

<?php require_once 'footer.ctp';?>

<div id="f_right">
    
    <div class="f_r_main">
       <a href="<?php echo $config_data['other']['weibo_url']; ?>" class="weibo"></a>
       <a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>" class="tieba"></a>
       <a href="<?php echo $config_data['other']['forum_url']; ?>" class="luntan"></a>
       <a href="javascript:alert('敬请期待！')" target="_blank" class="pcGame"></a>
       <a href="#" class="back_top" id="back_top"></a>
    </div>
    <a href="javascript:;" class="f_r_click"><img src="http://fr.uu.cc/fr.uu.cc/images/float_right_click.jpg" width="22" height="62" /></a>
</div>

<!--<div class="pop-left">
	<a class="go-home" href="//fr.uu.cc/home/" target="_self">进入官网</a>
	<img class="code" src="<?php echo $config_data['other']['weixin_qrcode']; ?>" />
    <a class="video_btn_link" name="<?php echo $config_data['other']['index_video_url']; ?>" title="播放精彩视频" href="javascript:;"><img src="<?php echo $base_path; ?>images/video_btn.gif"></a>
</div>

<div class="pop-right">
	<a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>" target="_blank" title="打开QQ客服"></a>
    <a href="<?php echo $config_data['other']['forum_url']; ?>" target="_blank" title="前往论坛"></a>
    <a href="<?php echo $config_data['other']['weibo_url']; ?>" target="_blank" title="前往微博"></a>
    <a class="qqun" href="<?php echo $config_data['other']['qq_group']; ?>" target="_blank" title="加入QQ群"></a>
    <div class="qqun-pop"><span class="arrow"></span><a href="<?php echo $config_data['other']['qq_qun_android']; ?>" target="_blank" title="加入安卓Q群"></a><a href="<?php echo $config_data['other']['qq_qun_ios']; ?>" target="_blank" title="加入苹果Q群"></a></div>
    <a class="weixin" href="javascript:;" title="关注微信"></a>
    <div class="weixin-pop"><span class="arrow"></span><img src="<?php echo $config_data['other']['weixin_qrcode']; ?>" /></div>
</div>
-->
<div class="mask"></div>
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">
        <h3>领188元豪华礼包</h3>
    	<a class="ios-choose" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose on" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码" />
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close" href="javascript:;"></a></div>

<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
$(document).ready(function(){ 

	
	var speed=10;
	var tab=document.getElementById("demo");
	var tab1=document.getElementById("demo1");
	var tab2=document.getElementById("demo2");
	tab2.innerHTML=tab1.innerHTML;
	function Marquee(){
	if(tab2.offsetWidth-tab.scrollLeft<=0)
	tab.scrollLeft-=tab1.offsetWidth
	else{
	tab.scrollLeft++;
	}
	}
	var MyMar=setInterval(Marquee,speed);
	tab.onmouseover=function() {clearInterval(MyMar)};
	tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};


//	//微信
//	var wxin_dl = $(".weixin");
//	var wxin_pd = $(".weixin-pop");
//	wxin_dl.hover(function() {
//		wxin_pd.addClass("weixin-pop-show");
//	}, function() {
//		wxin_pd.removeClass("weixin-pop-show");
//	});
//	
//	//Q群
//	var qqun_dl = $(".qqun,.qqun-pop");
//	var qqun_pd = $(".qqun-pop");
//	qqun_dl.hover(function() {
//		qqun_pd.addClass("qqun-pop-show");
//	}, function() {
//		qqun_pd.removeClass("qqun-pop-show");
//	});
	
	//预约
	$('.yuyue-btn').click(function(){
		$('.mask,.pop-yuyue').show();
	})

	//预约事件
	$('.sys-choose a').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	

	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if($('.ios-choose').is('.on')){
			code_id = 2;
		}else{
			code_id = 1;
		}
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,collect_name:104,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("恭喜您预约成功并获得豪华礼包，奖励将在游戏上线后通过短信发放！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})
	
	//页面头部视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.mask,.s_p_k').show();
	})
	
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.mask,.pop-yuyue,.s_p_k').hide();
	})
	
	var expanded = true;
	$('.f_r_click').click(function(){
		if (expanded) {
			$('#f_right').animate({right:'-142px'},500);
			$(this).find('img').css('transform','rotate(180deg)')
	
		}else {
			$('#f_right').animate({right:'0'},500);
			$(this).find('img').css('transform','rotate(0deg)')
		}
		expanded = !expanded;
	});
	
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
