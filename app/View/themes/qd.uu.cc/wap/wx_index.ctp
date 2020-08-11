<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>圈地大作战——预约有礼</title>
<meta name="keywords" content=""/>
<meta name="description" content="萌物出击，圈地为王，圈地互怼，组队开黑，呼朋唤友一起来玩！"/>
<link rel="stylesheet" type="text/css" media="all" href="http://qd.uu.cc/qd.uu.cc/qd_new/wap/css/style.css?v=2"  />

</head>

<body>

<div style="display:none"><img src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/images/wap_logo2.jpg" /></div>

<div id="content">
	<div class="top">
    	<img src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/images/wap_logo.png" />
        <h2>圈地大作战</h2>
        <div class="top_detail">全民Q萌策略轻竞技手游</div>
        <a class="download yuyue-btn" href="javascript:;"></a>
    </div>
	
    <div class="main1"></div>
    
    <div class="main2">
    	<a id="yuyue-btn" class="yuyue-btn" href="javascript:;"></a>
    </div>
    
    <div id="totalBox" class="main3">
    	<div class="allNum">已经有<em class="total_users">1234567</em>人预约</div>
		<span class="done2"></span>
    </div>
    
    <div class="main4">
    	<span class="taskNot task1"></span>
        <span class="taskNot task2"></span>
        <span class="taskNot task3"></span>
    	<a class="yaoqing-btn" href="javascript:;"></a>
    </div>
    
    <div class="main5">
    	<img class="codeWeixin" src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/images/code_weixin.jpg" />
        <img class="codeWeibo" src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/images/code_weibo.jpg" />
    </div>
    
    
    <div class="footer">
    	<a href="http://www.idreamsky.com/"><img src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/images/footer_logo.png" /></a>
        <div class="links"><a href="http://www.idreamsky.com/homes/about">关于我们</a> | <a href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="#">进入论坛</a></div>
    	<div class="copyright">Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技有限公司 版权所有</div>
		粤网文〔2016〕6871-1632号  批准文号：文网游进字〔2017〕0133 号<br>
			新广出审[2017]6718号  出版号：ISBN 978-7-7979-9980-9<br>
        <div class="game-tips">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


<div class="mask"></div>

<div class="pop yuyue-pop">
	<a class="close" href="javascript:;"></a>
    
    <h2 id="yuyueTitle">输入手机号，即可预约成功</h2>
    <ul>
    	<li class="sys-choose"><label><i>*</i>手机系统：</label><a class="ios-choose on" href="javascript:;"><span></span>iOS</a><a class="az-choose" href="javascript:;"><span></span>安卓</a></li>
        <li><label><i>*</i>手机号码：</label><input id="phoneNum" class="yuyue_ipt" name="phone" type="tel" /></li>
        <li><label><i>*</i>验 &nbsp;证 &nbsp;码：</label><input id="checkCode" class="yuyue_ipt yuyue_code" name="code" type="tel" /><button id="sendCode">点击发送验证码</button></li>
        <li><label>邀 &nbsp;请 &nbsp;码：</label><input id="invite_code" class="yuyue_ipt" name="yaoqing_code" /></li>
    </ul>
    <a class="yuyue-go" href="javascript:;"></a>
    <img class="pop_gift" src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/images/pop_gift.jpg" />    
</div>

<div class="pop yaoqing-pop">
	<a class="close" href="javascript:;"></a>
    
    <h2>这是您的邀请码：</h2>
    <p>邀请好友预约可以获得更多奖励</p>
    <div class="yaoqingTips">将您的邀请码告诉好友<br>好友预约时填写即可</div>
    <div class="yaoqingCodes">邀请码：<span id="copyTxt">qNkIAj</span></div>
    <button class="copyBtn" data-clipboard-action="copy" data-clipboard-target="#copyTxt"></button>
    <div class="copyTips">长按复制邀请码</div>
</div>

<script type="text/javascript" src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/js/clipboard.min.js"></script>
<script type="text/javascript" src="http://qd.uu.cc/qd.uu.cc/qd_new/wap/js/store.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	//初始化
	function iniCheck(){
		var phoneNum;
		if(store.get('phone')){
			phoneNum = store.get('phone');
		}
		$.ajax({
			type:"POST",
			url:"http://qd.uu.cc/qd_init",
			data:{phone:phoneNum},
			dataType:"json",
			success:function(res){
				if(res.ret == 0){
					$('.total_users').text(res.data.total_users);
					if(res.data.total_users > 1000000){
						$('#totalBox').append('<span class="done5"></span><span class="done4"></span><span class="done3"></span><span class="done2"></span><span class="done1"></span>');
					}else if(res.data.total_users > 800000){
						$('#totalBox').append('<span class="done4"></span><span class="done3"></span><span class="done2"></span><span class="done1"></span>');
					}else if(res.data.total_users > 500000){
						$('#totalBox').append('<span class="done3"></span><span class="done2"></span><span class="done1"></span>');
					}else if(res.data.total_users > 300000){
						$('#totalBox').append('<span class="done2"></span><span class="done1"></span>');
					}else if(res.data.total_users > 100000){
						$('#totalBox').append('<span class="done1"></span>');
					}
					$('#copyTxt').text(res.data.invite_code)
					if(res.data.invite_status.invite_3 > 0){
						$('.task1').removeClass('taskNot').addClass('taskDone');
						if(res.data.invite_status.invite_5 > 0){
							$('.task2').removeClass('taskNot').addClass('taskDone');
							if(res.data.invite_status.invite_10 > 0){
								$('.task3').removeClass('taskNot').addClass('taskDone');
							}
						}
					}
					return true;
				}else{
					return false;
				}
			}
		});
	}
	iniCheck()
	
	//预约
	$('.yuyue-btn').click(function(){
		$('#yuyueTitle').text('输入手机号，即可预约成功')
		$('.mask,.yuyue-pop').show();
	})
	
	//邀请码
	$('.yaoqing-btn').click(function(){
		if(store.get('phone')){
			$('.mask,.yaoqing-pop').show();
		}else{
			$('#yuyueTitle').text('请您先预约，再邀请好友')
			$('.mask,.yuyue-pop').show();
		}
	})
	
	//预约事件
	$('.sys-choose a').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
		
	$('.close').click(function(){
		$('.mask,.pop').hide();
	})
	
	//功能： 手机号码验证
	function checkPhoneNum(phoneNum) {
		return /^(13|14|15|17|18)\d{9}$/.test(phoneNum) ? !0 : !1
	}
	
	//发送注册验证
	$('#sendCode').click(function(){
		var wait = 60;
		var obj = $(this);
		var phone = $("#phoneNum").val();
		if (phone == "" || phone == undefined) {
			alert("请输入手机号码！");
		} else if (!checkPhoneNum(phone)) {
			alert("请输入正确的手机号码！");
		}else{
			sendCodes();
			$.ajax({
				type:"POST",
				url:"http://qd.uu.cc/qd_send_check_code",
				data:{phone:phone,site_id:106},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						alert("验证码已发送至您的手机！");
					}else{
						alert("发送失败！");
					}
				}
			});
			function sendCodes(){
				if (wait == 0) {
					obj.html("获取验证码");
					wait = 10;
					obj.removeClass("codeClick");
					$('#sendCode').removeAttr("disabled"); //移除disabled属性
				}else{
					
					
					$('#sendCode').attr('disabled',"true"); //添加disabled属性
					obj.addClass("codeClick");
					obj.html("重新发送"+wait+"s");
					wait--;
					setTimeout(function(){
						sendCodes();
					},1000);
				}
			}
		}
	})
	
	function checkValidCode(phoneNum,checkCode){
		
		var codeState;
	
		$.ajax({
			type:"POST",
			url:"http://qd.uu.cc/qd_valid_check_code",
			data:{phone:phoneNum,site_id:106,"code":checkCode},
			dataType:"json",
			async:false,
			success:function(res){
				if(res.ret == 0){
					codeState = true;
					return true;
				}else{
					
					codeState = false;
					return false;
				}
			}
		});
		
		return codeState;
	}
	
	/*预约请求*/
	$(".yuyue-go").on("click",function () {
		var phone = $("#phoneNum").val();
		var code = $("#checkCode").val();
		var invite_code = $("#invite_code").val();
		if($('.ios-choose').is('.on')){
			code_id = 1;
		}else{
			code_id = 2;
		}
		if (phone == "" || phone == undefined) {
			alert("请输入手机号码！");
		} else if (!checkPhoneNum(phone)) {
			alert("请输入正确的手机号码！");
		} else if (code == "" || code == undefined) {
			alert("请输入验证码！");
		} else if(!checkValidCode(phone,code)){
			alert("验证码错误！");
			
		}else{
		
			$.ajax({
				type:"POST",
				url:"http://qd.uu.cc/qd_yuyue",
				data:{phone:phone,"type":code_id,site_id:106,"invite_code":invite_code},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						store.set('phone', phone);
						iniCheck();
						alert("恭喜您，预约成功！");
						$('.mask,.pop').hide();
					}else if(res.ret == 2){
						store.set('phone', phone);
						iniCheck();
						alert("您已经预约过了哦，立即去邀请好友吧！");
						$('.mask,.pop').hide();
					}else{
						alert(res.msg);
					}
				}
			});
		}
	});
	
	var clipboard = new Clipboard('.copyBtn');
	
	clipboard.on('success', function(e) {
		alert("复制成功")
		console.log(e);
	});
	
	clipboard.on('error', function(e) {
		console.log(e);
	});
})


</script>
</body>
</html>
