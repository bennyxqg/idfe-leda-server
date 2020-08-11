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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" />
<link rel="shortcut icon" href="//jlb.uu.cc/jlb.uu.cc/favicon.ico">
</head>

<body>

<div class="index1">
	<a class="home-btn" href=""></a>
</div>

<div class="index2">
	<div class="down-box">
    	<img class="code-img" src="<?php BLOCK('game_download_qrcode') ?>" />
        <div class="down-links">
        	<a href="<?php BLOCK('android_download_url') ?>" target="_blank"></a>
            <a href="<?php BLOCK('ios_download_url') ?>" target="_blank"></a>
        </div>
        <a class="yuyue-btn" href="javascript:;"></a>
    </div>
</div>

<div class="index3">
	<p>《加勒比海盗：启航》是迪士尼正版授权的一款Q萌风RPG手游。游戏完美重现《加勒比海盗》系列电影故事与场景，将电影经典人物杰克船长，巴波萨船长、伊丽莎白、威尔•特纳、戴维琼斯等一系列海盗角色加入游戏的养成系统，让玩家享受收集与养成的双重乐趣。同时加入了惊险刺激的特色船战玩法和PVP玩法，让爱冒险的玩家能体验到如同真实在海上对战的快感。<br>
快来下载，成为一名合格的海盗，一起扬帆起航！</p>
</div>

<div id="foot">
    <div class="footer">
        <span class="logo"><a href="http://www.idreamsky.com/" target="_blank"><img src="<?php BASE_URL() ?>images/foot_logo3.png"></a></span>
        <div class="cr">
            <p class="link"><a target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2017  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        </div>
        <div class="g_rule"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


<div class="pop-right">
	<img src="<?php BLOCK('weixin_qrcode') ?>" />
    <ul>
    	<li><a href="<?php BLOCK('weibo_url') ?>" target="_blank"></a></li>
        <li><a href="<?php BLOCK('qq_weibo_url') ?>" target="_blank"></a></li>
        <li><a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"></a></li>
        <li><a href="<?php BLOCK('forum_url') ?>" target="_blank"></a></li>
    </ul>
    <p><?php BLOCK('qq_group') ?></p>
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
<script>
$(document).ready(function(){
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
