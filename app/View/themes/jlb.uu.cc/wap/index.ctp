<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
</head>

<body>

<div id="content">
	<div class="top">
    	<img src="<?php BASE_URL() ?>images/logo.png" />
        <h2>加勒比海盗：启航</h2>
        <div class="top_detail">迪士尼正版授权Q萌RPG手游</div>
        <a class="download" href="javascript:alert('即将上线，敬请期待！')"></a>
    </div>
    <div class="index1"><img src="<?php BASE_URL() ?>images/index01.jpg" /></div>
    
    <div class="index2">
    	<a class="yuyue-btn" href="javascript:;"></a>
        <a class="down-btn" href="//jlb.uu.cc/download"></a>
    </div>
    
    <div class="index3">
    	《加勒比海盗：启航》是迪士尼正版授权的一款Q萌风RPG手游。游戏完美重现《加勒比海盗》系列电影故事与场景，将电影经典人物杰克船长，巴波萨船长、伊丽莎白、威尔•特纳、戴维琼斯等一系列海盗角色加入游戏的养成系统，让玩家享受收集与养成的双重乐趣。同时加入了惊险刺激的特色船战玩法和PVP玩法，让爱冒险的玩家能体验到如同真实在海上对战的快感。
    </div>
    
    <div class="index4">
    	<img src="<?php BLOCK('weixin_qrcode') ?>" />
        <ul>
        	<li><a href="<?php BLOCK('weibo_url') ?>" target="_blank"></a></li>
            <li><a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"></a></li>
            <li><a href="<?php BLOCK('qq_weibo_url') ?>" target="_blank"></a></li>
            <li><a href="<?php BLOCK('forum_url') ?>" target="_blank"></a></li>
        </ul>
        <span><?php BLOCK('qq_group') ?></span>
    </div>
    
    <div class="footer">
        Copyright©2009-2017 深圳市创梦天地科技有限公司 版权所有<br>
粤ICP备11018438号<br>
健康游戏忠告：抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。
    </div>
</div>



<div class="mask"></div>
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">
    	<a class="ios-choose on" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
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
					data:{phone:phone,collect_name:113,code_id:code_id},
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
})

</script>
</body>
</html>
