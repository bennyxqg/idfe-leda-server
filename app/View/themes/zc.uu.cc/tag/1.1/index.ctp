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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css?v=0" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div class="main1"></div>

<div class="main2">
	<div class="wrap">
		<a class="videoBtn video_btn_link" name="<?php echo GET_BLOCK('vedio_url');?>" href="javascript:;"><span></span></a>
		<img class="codeImg" src="<?php echo GET_BLOCK('game_download_qrcode');?>">
		<div class="downBtns">
			<a class="downIos" href="//zc.uu.cc/download" target="_blank"></a>
			<a class="qqun" href="" target="_blank">加入QQ群<br><?php echo GET_BLOCK('qq_group');?></a>
		</div>
	</div>
</div>

<div class="main3">
	<div class="wrap">
		<div class="picSlider">
			<div class="bd">
				<ul>
					<li><img src="<?php BASE_URL() ?>images/picSlider1.jpg"></li>
					<li><img src="<?php BASE_URL() ?>images/picSlider2.jpg"></li>
					<li><img src="<?php BASE_URL() ?>images/picSlider3.jpg"></li>
					<li><img src="<?php BASE_URL() ?>images/picSlider4.jpg"></li>
				</ul>
			</div>
			<div class="hd">
				<ul>
					<li><img src="<?php BASE_URL() ?>images/picSlider1.jpg"></li>
					<li><img src="<?php BASE_URL() ?>images/picSlider2.jpg"></li>
					<li><img src="<?php BASE_URL() ?>images/picSlider3.jpg"></li>
					<li><img src="<?php BASE_URL() ?>images/picSlider4.jpg"></li>
				</ul>
			</div>
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
		</div>
		
	</div>
</div>

<div class="footer">
    <div class="wrap">
    	<a class="f_logo" href="http://www.idreamsky.com" target="_blank"><img src="<?php BASE_URL() ?>images/f_logo.png"></a>
    	<div class="copyTxt">
    		<a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a><br>
			Copyright &copy; 2009-2017 深圳市创梦天地科技股份有限公司 版权所有 粤ICP备11018438号<br>
   			健康游戏忠告：抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活
    	</div>
    </div>
</div>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.SuperSlide.2.1.1.js"></script>
<script>
$(document).ready(function(){
	
	jQuery(".picSlider").slide({ mainCell:".bd ul", effect:"fold", delayTime:300, autoPlay:true });
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
	
	$('.close').click(function(){
		$('.mask,.pop-yuyue').hide();
	})
	
	//页面头部视频	   
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
})
</script>
</body>
</html>
