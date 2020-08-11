<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link rel="stylesheet" href="<?php echo $base_path; ?>css/style.css" />
<link rel="shortcut icon" href="//fr.uu.cc/fr.uu.cc/favicon.ico">
</head>

<body>

<div class="index1">
	<div class="wrap">
    	
    </div>
</div>
<div class="index2">
	<div class="wrap">
    	<span class="btu-state"></span>
        <a class="yuyue-btn" href="javascript:;"></a>
        <div class="yuyue-num"><span>预约得尊贵礼包，已有<i>123456</i>名道友预约</span></div>
    </div>
</div>

<div id="foot">
    <div class="footer">
        <span class="logo"><a href="//www.idreamsky.com" target="_blank"><img src="<?php echo $base_path; ?>images/footer_logo1.png"></a><img style="margin:0 30px;" src="<?php echo $base_path; ?>images/footer_logo2.png"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2016  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        	<p>健康游戏忠告：抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活</p>
        </div>
    </div>
</div>

<div class="pop-left">
	<img class="code" src="<?php echo $base_path; ?>images/code_test.jpg" />
    <a class="video_btn_link" name="<?php echo $config_data['other']['index_video_url']; ?>" title="播放精彩视频" href="javascript:;"><img src="<?php echo $base_path; ?>images/video_btn.gif"></a>
</div>

<div class="pop-right">
	<a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>" target="_blank" title="前往贴吧"></a>
    <a href="<?php echo $config_data['other']['forum_url']; ?>" target="_blank" title="前往论坛"></a>
    <a href="<?php echo $config_data['other']['weibo_url']; ?>" target="_blank" title="前往微博"></a>
    <a class="qqun" href="<?php echo $config_data['other']['qq_group']; ?>" target="_blank" title="加入QQ群"></a>
    <div class="qqun-pop"><span class="arrow"></span><a href="<?php echo $config_data['other']['qq_qun_android']; ?>" target="_blank" title="加入安卓Q群"></a><a href="<?php echo $config_data['other']['qq_qun_ios']; ?>" target="_blank" title="加入苹果Q群"></a></div>
    <a class="weixin" href="javascript:;" title="关注微信"></a>
    <div class="weixin-pop"><span class="arrow"></span><img src="<?php echo $base_path; ?>images/code_test.jpg" /></div>
</div>

<div class="mask"></div>
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">
    	<a class="ios-choose on" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码" />
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close" href="javascript:;"></a></div>

<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
$(document).ready(function(){ 

	//微信
	var wxin_dl = $(".weixin");
	var wxin_pd = $(".weixin-pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("weixin-pop-show");
	}, function() {
		wxin_pd.removeClass("weixin-pop-show");
	});
	
	//Q群
	var qqun_dl = $(".qqun,.qqun-pop");
	var qqun_pd = $(".qqun-pop");
	qqun_dl.hover(function() {
		qqun_pd.addClass("qqun-pop-show");
	}, function() {
		qqun_pd.removeClass("qqun-pop-show");
	});
	
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
							alert("您已预约成功！");
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
})
</script>
</body>
</html>
