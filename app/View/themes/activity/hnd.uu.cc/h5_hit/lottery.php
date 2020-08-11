<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
<title>打死12306，烧死这批验证码！</title>
<link rel="stylesheet" href="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/css/style.css" />  
</head>

<body>
<div class="main">
	<div class="prize_list">
    	<ul>
        	<?php echo GET('PRIZE_HISTORY') ?>
        </ul>
    </div>
    <div class="score">
    	您现在的积分为：<span id="score"></span> ；<br>
        一天最多可抽奖3次，您今天还可抽奖 <span id="lottery_today"></span> ；<br>
        <a class="share_link" href="javascript:;">分享</a> 可以得到更多积分哦！
    </div>
    <div id="lottery">
        <ul>
            <li class="lottery-unit lottery-unit-0 active"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_01.png" /></li>
            <li class="lottery-unit lottery-unit-1"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_02.png" /></li>
            <li class="lottery-unit lottery-unit-2"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_03.png" /></li>
            <li class="lottery-unit lottery-unit-3"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_04.png" /></li>
            <li class="lottery-unit lottery-unit-4"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_05.png" /></li>
            <li class="lottery-unit lottery-unit-5"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_06.png" /></li>
            <li class="lottery-unit lottery-unit-6"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_07.png" /></li>
            <li class="lottery-unit lottery-unit-7"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_08.png" /></li>
            <li class="lottery-unit lottery-unit-8"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/prize_09.png" /></li>
        </ul>
        <button class="lottery_link" title="抽奖"></button>
    </div>
    <div class="contact"><img src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/images/contact.jpg" /></div>
</div>
<div class="rule_box">
	<ul>
		<li><span>1</span>获得积分可抽奖，20个积分可以抽奖一次，您今天还可以抽奖<i id="lottery_today2"></i>次；</li>
		<li><span>2</span>点击转盘即可抽奖，分享一次，或下载游戏可获得15积分，提交手机号码可获得10积分，欢迎行动获得更多积分来抽奖哦；</li>
        <li><span>3</span>一天最多可抽奖三次；</li>
        <li><span>4</span>活动最终解释权归乐逗游戏所有。</li>
	</ul>
</div>

<div class="result">
	<div class="close"></div>
	<div class="result_con">
    	<h1>恭喜您获得了</h1>
        <h2>99元LOL皮肤任选</h2>
        <div class="tel_tips">奖品兑换码将逢周五短信发送给您，请输入电话号码</div>
        <div class="tel_con"><input class="tel_input" placeholder="输入电话号码（10分）" type="tel" /><button id="tel_btn" class="tel_btn" title="提交"></button></div>
    </div>
    <div class="result_btns"><a class="share_btn" href="javascript:;">分享(15分)</a><a class="down_link" href="javascript:;">下载(15分)</a></div>
</div>
<div class="mask"></div>
<div class="share_tip" ontouchstart="document.querySelector('.share_tip').style.display='none';"></div>
<script src="//ld.uu.cc/activity/hnd.uu.cc/h5_hit/lottery/js/jquery-1.11.0.min.js"></script>
<script>
//抽奖
var lottery = {
	index: 0, //当前转动到哪个位置，起点位置
	count: 0, //总共有多少个位置
	timer: 0, //setTimeout的ID，用clearTimeout清除
	speed: 20, //初始转动速度
	times: 0, //转动次数
	cycle: 50, //转动基本次数：即至少需要转动多少次再进入抽奖环节
	prize: 0, //中奖位置
	init: function(id) {
		if ($("#" + id).find(".lottery-unit").length > 0) {
			$lottery = $("#" + id);
			$units = $lottery.find(".lottery-unit");
			this.obj = $lottery;
			this.count = $units.length;
			$lottery.find(".lottery-unit-" + this.index).addClass("active");
		}
	},
	roll: function() {
		var index = this.index;
		var count = this.count;
		var lottery = this.obj;
		$(lottery).find(".lottery-unit-" + index).removeClass("active");
		index += 1;
		if (index > count - 1) {
			index = 0;
		}
		$(lottery).find(".lottery-unit-" + index).addClass("active");
		this.index = index;
		return false;
	},
	stop: function(index) {
		this.prize = index;
		return false;
	}
};

function roll() {
	lottery.times += 1;
	lottery.roll();
	var prize_site = $("#lottery").attr("prize_site");
	if (lottery.times > lottery.cycle + 10 && lottery.index == prize_site) {
		var prize_id = $("#lottery").attr("prize_id");
		var prize_name = $("#lottery").attr("prize_name");
		$(".lottery_link").attr("disabled", false); 
		if(prize_name == "谢谢参与"){
			$('.result_con h1').html("您离中奖~")
			$('.result_con h2').html("还差一点点~")
			$('.tel_tips').html("奖品兑换码将逢周五短信发送给您，请输入电话号码")
			}else{
			$('.result_con h2').html(prize_name)
		}
		$('.result,.mask').show();
		clearTimeout(lottery.timer);
		lottery.prize = -1;
		lottery.times = 0;
		click = false;

	} else {
		if (lottery.times < lottery.cycle) {
			lottery.speed -= 10;
		} else if (lottery.times == lottery.cycle) {
			var index = Math.random() * (lottery.count) | 0;
			lottery.prize = index;
		} else {
			if (lottery.times > lottery.cycle + 10 && ((lottery.prize == 0 && lottery.index == 7) || lottery.prize == lottery.index + 1)) {
				lottery.speed += 110;
			} else {
				lottery.speed += 20;
			}
		}
		if (lottery.speed < 40) {
			lottery.speed = 40;
		}
		lottery.timer = setTimeout(roll, lottery.speed);
	}
	return false;
}
var click = false;

//获取基本信息
$.ajax({
	type:"POST",
	url:"//ld.uu.cc/manage/index.php",
	data:{r:'act1',action:'info',openid:'<?php echo GET('OPENID') ?>'},
	dataType:"json",
	success:function(res){
		var prize_count = 0;
		$('#score').html(res.score);
		if(res.today_prize_count > 0 && res.prize_count >0){
			(res.today_prize_count > res.prize_count) ? prize_count = res.prize_count : prize_count = res.today_prize_count;
		}else{
			prize_count = 0;
		}
		$('#lottery_today,#lottery_today2').html(prize_count);
	}
});

$(function(){
	
	$(".result .close").click(function(){
		$(".result,.mask").hide();
	});
	
	$(".share_btn,.share_link").click(function(){
		$(".share_tip").show();
	});
	
	lottery.init('lottery');
	
	//抽奖
	$(".lottery_link").click(function(){
		var lottery_score = $('#score').html();
		var lottery_times = $('#lottery_today').html();
		
		if(lottery_times == 0){
			alert("您的抽奖次数不够！")	
		}else{
			$('#score').html(lottery_score - 20)
			$('#lottery_today').html(lottery_times - 1)
			$.ajax({
				type:"POST",
				url:"//ld.uu.cc/manage/index.php",
				data:{r:'act1',action:'prize',openid:'<?php echo GET('OPENID') ?>'},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
	//						alert("成功");
	//						alert(res.prize.id+','+res.prize.desc);
						var obj = {0:6,1:7,2:8,3:0,4:1,5:2,6:3,7:4,8:5}
						var obj2 = {0:"iPhone6s",1:"春节回家机票",2:"50元京东卡",3:"50钻石",4:"5000金币",5:"谢谢参与",6:"40体力",7:"10000金币",8:"99元LOL皮肤任选"}
						for(var name in obj){
							if(obj[name] == res.prizeid){
								var p_site =name;
								var p_name =obj2[name];
							}
						}
						if (click) {
							return false;
						} else {
							$(".lottery_link").attr("disabled", true); 
							lottery.speed = 100;
							$("#lottery").attr("prize_site", p_site);
							$("#lottery").attr("prize_id", res.prizeid);
							$("#lottery").attr("prize_name", p_name);
							roll();
							click = true;
							return false;
						}
					}else{
						alert("抽奖失败！");
					}
				}
			});
		}
	})
	
	$(".tel_btn").click(function(){
		var telNum = $('.tel_input').val(); //获取手机号
		var telReg = !!telNum.match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
		//如果手机号码不能通过验证
		if(telReg == false){
			alert("请输入正确的手机号！")
		}else{
			//提交手机号信息
			$.ajax({
				type:"POST",
				url:"//ld.uu.cc/manage/index.php",
				data:{r:'act1',action:'report',type:4,value:telNum,openid:'<?php echo GET('OPENID') ?>'},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						$('#tel_btn').attr("class","tel_btn_on")
					}else{
						alert("手机号提交错误！")	
					}
				}
			});
		}
		
	})

	$(".down_link").click(function(){
		$.ajax({
			type:"POST",
			url:"//ld.uu.cc/manage/index.php",
			data:{r:'act1',action:'report',type:3,openid:'<?php echo GET('OPENID') ?>'},
			dataType:"json",
			success:function(res){
				location.href='//ledou.uu.cc/Game/down/hnd';	
			}
		});
	});
	
	//获奖名单滚动
	var _wrap=$('.prize_list ul');
	var _interval=2000;
	var _moving;
	_wrap.hover(function(){
		clearInterval(_moving);
	},function(){
		_moving=setInterval(function(){
		var _field=_wrap.find('li:first');
		var _h=_field.height();
		_field.animate({marginTop:-_h+'px'},600,function(){
		_field.css('marginTop',0).appendTo(_wrap);
		})
		},_interval)
	}).trigger('mouseleave');
});
</script>
<script type="text/javascript" src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<!-- START WEIXIN SCRIPT -->
<script>
wx.config({
	debug: false,
	appId: '<?php echo GET('APP_ID'); ?>',
	timestamp: <?php echo GET('JS_TIMESTAMP'); ?>,
	nonceStr: '<?php echo GET('JS_NOICESTR'); ?>',
	signature: '<?php echo GET('JS_SIGNATURE'); ?>',
	jsApiList: [
	  'onMenuShareAppMessage',
	  'onMenuShareTimeline'
	]
});

var share = {
		title : "打死12306，烧死这批验证码！", //分享给好友会显示
		sTitle : "玩游戏，LOL皮肤、回乡机票、京东卡等你来拿！HND带你装逼带你飞！",//分享显示的title
		timeLineTitle : "打死12306，LOL皮肤、回乡机票带你装逼带你飞！",//分享显示的title
		picUrl : "//hnd.uu.cc/activity/hnd.uu.cc/h5_hit/assets/jay/hnd_hit/share_logo.jpg", //图片url
		url : '<?php echo GET('SHARE_URL'); ?>' //分享的url链接
	}

wx.ready(function () {

	wx.onMenuShareTimeline({
		
	    title: share.title, // 分享标题
	    link: share.url, // 分享链接
	    imgUrl: share.picUrl, // 分享图标
	    success: function () { 
	        $.ajax({
				type:"POST",
				url:"//ld.uu.cc/manage/index.php",
				data:{r:'act1',action:'report',type:2,openid:'<?php echo GET('OPENID') ?>'},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						alert("分享成功，您获得15积分！")
					}else{
						alert("分享失败！")	
					}
				}
			});
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
			
			alert('亲，真的不分享么');
			
	    }
	
    });

	wx.onMenuShareAppMessage({
		title: share.title, // 分享标题
		desc: share.sTitle, // 分享描述
		link: share.url, // 分享链接
		imgUrl: share.picUrl, // 分享图标
		success: function () { 
			$.ajax({
				type:"POST",
				url:"//ld.uu.cc/manage/index.php",
				data:{r:'act1',action:'report',type:2,openid:'<?php echo GET('OPENID') ?>'},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						alert("分享成功，您获得15积分！")
					}else{
						alert("分享失败！")	
					}
				}
			});
		},
		cancel: function () { 
			alert("亲，真的不分享么")
		}
		
	});

});


</script>
<!-- END WEIXIN SCRIPT -->
</body>
</html>
