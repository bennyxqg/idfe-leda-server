<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<meta name="keywords" content="<?php echo $keywords;?>"/>
<meta name="description" content="<?php echo $description;?>"/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<meta name="baidu-site-verification" content="wkFtx4mgS4" />
<style type="text/css">
body, h1, h2, h3, h4, h5, h6, hr, p, blockquote, dl, dt, dd, ul, ol, li, pre, form, fieldset, legend, button, input, textarea, th, td {margin:0; padding:0 }
body, button, input, select, textarea {font:12px/1.5em "\5FAE\8F6F\96C5\9ED1";}
h1, h2, h3, h4, h5, h6{font-size:100%; }
em,i{font-style:normal; }
ul, ol,li{ list-style:none;}
a{ text-decoration:none; color:#595757;}
fieldset, img{border:0;}
button, input, select, textarea{font-size:100% }
.clearfix:after{content:"."; display:block; height:0; font-size:0; clear:both; visibility:hidden; overflow:hidden}
html[xmlns] .clearafter,iframe{ display:block; }
.htxt,.tips strong{ display:none;}
.fHide{ text-indent:-9999px; overflow:hidden;}
body{background-color:#dcdfea; color:#595757; min-width:1100px}
.pr{ position:relative;}
.pa{position:absolute}
.font_st{font-family:"宋体"}
.fl{ float:left;}
.fr{ float:right;}

.wrap{position:relative; width:1100px; margin:0 auto;z-index:9;}
.main1,.main1 .wrap{ background:url(<?php echo $full_base_url ?>/v2/images/main_01.jpg) no-repeat 50% 0; height:353px;}
.main2,.main2 .wrap{ background:url(<?php echo $full_base_url ?>/v2/images/main_02.jpg) no-repeat 50% 0; height:450px;}
.main3,.main3 .wrap{ background:url(<?php echo $full_base_url ?>/v2/images/main_03.jpg) no-repeat 50% 0; height:494px;}

.home_logo{ top:39px; left:50px; width:144px; height:99px;}
.main2 a{ width:223px; height:65px; top:140px;}
.main2 a.down_link{ left:50px;}
.main2 a.home_link{left:285px;}
.main2 a.data_link{left:520px;}
.main2 a.vedio_link{ top:40px; width:86px; height:86px; left:500px;}

.role_list{ left:50px; top:48px; width:1006px; height:288px;}
.role_list li{ position:absolute;}
.role_list li a{
-webkit-transition: .9s ease-out;
   -moz-transition: .9s ease-out;
	-ms-transition: .9s ease-out;
	 -o-transition: .9s ease-out;
		transition: .9s ease-out;
}
.role_list li:hover a{
-webkit-transform-style: preserve-3d;
   -moz-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	 -o-transform-style: preserve-3d;
		transform-style: preserve-3d;
-webkit-transform: rotateY(360deg);
   -moz-transform: rotateY(360deg);
	-ms-transform: rotateY(360deg);
	 -o-transform: rotateY(360deg);
		transform: rotateY(360deg);
}
.role_list li a img{ display:block;}
.role_list li.role_01{ top:9px; left:0; width:165px; height:278px;}
.role_list li.role_01 a{ display:block; width:165px; height:278px; background:url(<?php echo $full_base_url ?>/v2/images/role_01.png) no-repeat;}
.role_list li.role_01 a:hover{background:url(<?php echo $full_base_url ?>/v2/images/role_01_01.png) no-repeat;}
.role_list li.role_02{ top:1px; left:505px; width:173px; height:280px;}
.role_list li.role_02 a{ display:block; width:173px; height:280px; background:url(<?php echo $full_base_url ?>/v2/images/role_02.png) no-repeat;}
.role_list li.role_02 a:hover{background:url(<?php echo $full_base_url ?>/v2/images/role_02_01.png) no-repeat;}
.role_list li.role_03{ top:12px; left:336px; width:173px; height:276px;}
.role_list li.role_03 a{ display:block; width:173px; height:276px; background:url(<?php echo $full_base_url ?>/v2/images/role_03.png) no-repeat;}
.role_list li.role_03 a:hover{background:url(<?php echo $full_base_url ?>/v2/images/role_03_01.png) no-repeat;}
.role_list li.role_04{ top:0px; left:160px; width:181px; height:279px;}
.role_list li.role_04 a{ display:block; width:181px; height:279px; background:url(<?php echo $full_base_url ?>/v2/images/role_04.png) no-repeat;}
.role_list li.role_04 a:hover{background:url(<?php echo $full_base_url ?>/v2/images/role_04_01.png) no-repeat;}
.role_list li.role_05{ top:12px; left:675px; width:173px; height:276px;}
.role_list li.role_05 a{ display:block; width:173px; height:276px; background:url(<?php echo $full_base_url ?>/v2/images/role_05.png) no-repeat;}
.role_list li.role_05 a:hover{background:url(<?php echo $full_base_url ?>/v2/images/role_05_01.png) no-repeat;}
.role_list li.role_06{ top:8px; left:845px; width:166px; height:280px; background:url(<?php echo $full_base_url ?>/v2/images/role_06.png) no-repeat;}

/* -----底部样式开始------ */
.bottom{background:#fff;max-width:1920px;height:auto;overflow:hidden;margin:0 auto;}
.footer{color:#ccc;width:1000px;margin:0 auto;font-size:12px;position:relative;padding:20px 0 10px;font-family:Helvetica,Arial,sans-serif; background:#fff;}
.footer img{vertical-align:middle;}
.footer .logo{float:left;margin-top:8px;padding:0 20px 0 50px;width:290px;height:60px;}
.footer .logo-dev{padding-top:10px;margin-left:10px;}
.footer p{padding-bottom:10px;}
.footer a{color:#898989;}
.footer a:hover{text-decoration:none;}
.footer .cr{padding-top:18px; padding-bottom:10px;color:#898989;padding-left:0px; line-height:21px;}
.footer .cr span{margin:0 20px 0 8px;}
.footer .cr .link a{margin:0 8px;}
.footer .zg{clear:both;height:24px;line-height:24px;padding:15px 0 20px;color:#898989;text-align:center;border-top:1px solid #ececec; width:890px; margin:0 auto;}
.footer .zg strong{color:#898989; font-weight:bold;}
.footer .wj{float:right;margin:-26px 78px 0 0;}

.vedio_box,.down_box{display:none;position:fixed;_position:absolute;width:700px;height:488px;left:50%;margin-left:-350px;top:20%;z-index:99999; border:3px solid #0fbbe9;}
.down_box{ width:599px; height:396px; background:url(<?php echo $full_base_url ?>/v2/images/down_bg.jpg) no-repeat; margin-left:-300px;}
.down_box img{ position:absolute; width:210px; height:210px; right:76px; top:35px;}
a.ios_down,a.android_down{ width:223px; height:53px; bottom:34px; left:59px;}
a.android_down{ left:304px;}
.close{ position:absolute; right:-40px; top:-3px; width:36px; height:36px; background:url(<?php echo $full_base_url ?>/v2/images/close.png) no-repeat;}
.mask{position:fixed;z-index:9999;background:rgba(0,0,0,0.8);opacity:0.8;filter:alpha(opacity=80);top:0;left:0;right:0;bottom:0;display:none;}
</style>
</head>

<body>
<div class="main1">
	<div class="wrap">
    	<a class="pa fHide home_logo" href="#link" target="_self" title="《悠悠世界树》官网">悠悠世界树</a>
    </div>
</div>
<div class="main2">
	<div class="wrap">
    	<a class="pa fHide down_link" href="#link" target="_self" title="游戏下载">游戏下载</a>
        <a class="pa fHide home_link" href="//yy.uu.cc/home/" target="_self" title="进入官网">进入官网</a>
        <a class="pa fHide data_link" href="//yy.uu.cc/zlz/" target="_blank" title="官方资料站">官方资料站</a>
        <a class="pa fHide vedio_link vedio_go" href="javascript:;" title="精彩视频" name="//share.acg.tv/flash.swf?aid=2446959&page=1">精彩视频</a>
    </div>
</div>
<div class="main3">
	<div class="wrap">
    	<ul class="pa role_list">
        	<li class="role role_01"><a class="fHide vedio_go" href="javascript:;" name="//share.acg.tv/flash.swf?aid=2507601&page=5">抽卡店看板娘玛丽，泽城美雪</a></li>
            <li class="role role_02"><a class="fHide vedio_go" href="javascript:;" name="//share.acg.tv/flash.swf?aid=2507601&page=3">工房管理人米莉，日笠阳子</a></li>
            <li class="role role_03"><a class="fHide vedio_go" href="javascript:;" name="//share.acg.tv/flash.swf?aid=2507601&page=4">商店店员梅琳，桑岛法子</a></li>
            <li class="role role_04"><a class="fHide vedio_go" href="javascript:;" name="//share.acg.tv/flash.swf?aid=2422666&page=1">角色教官莫莉，钉宫理惠</a></li>
            <li class="role role_05"><a class="fHide vedio_go" href="javascript:;" name="//share.acg.tv/flash.swf?aid=2507601&page=2">超级偶像梅露露，平野绫</a></li>
            <li class="role role_06"><a class="fHide" href="javascript:alert('精彩视频即将上线，敬请期待！')" name="//static.hdslb.com/miniloader.swf?aid=2151764&page=1"></a></li>
        </ul>
    </div>
</div>
<div class="bottom">
    <div class="footer">
        <span class="logo"><img src="<?php echo $full_base_url ?>/v2/images/ledou_logo.png"><img src="<?php echo $full_base_url ?>/v2/images/bili_logo.png" style="margin-left:25px;"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/v2/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/v2/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/v2/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/v2/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<div class="vedio_box"><a class="close" href="javascript:void(0)"></a><div id="vedio_con"></div></div>
<div class="down_box"><a class="close" href="javascript:void(0)"></a><img src="<?php echo $full_base_url ?>/v2/images/code.png" /><a class="pa fHide ios_down" href="https://itunes.apple.com/cn/app/wo-jia-gong-zhu-zui-ke-ai/id984454081?l=zh&ls=1&mt=8" target="_blank" title="苹果下载">苹果下载</a><a class="pa fHide android_down" href="//sj.qq.com/myapp/detail.htm?apkName=com.tencent.tmgp.yurudora" target="_blank" title="安卓下载">安卓下载</a></div>
<div class="mask"></div>

<script type="text/javascript" src="<?php echo $full_base_url ?>/v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var voiceNum = Math.floor(Math.random()*5);; 
	if($.browser.msie){   
	//IE下用embed  
	$('#newMessageDIV').html('<embed src="<?php echo $full_base_url ?>/v2/images/voice/role'+ voiceNum +'.wav"/>');   
	}else{
	//Firefox,Chrome等下<audio/>   
	$('#newMessageDIV').html('<audio autoplay="autoplay"><source src="<?php echo $full_base_url ?>/v2/images/voice/role'+ voiceNum +'.wav"' + 'type="audio/wav"/></audio>');   
	}
	$('.down_link').click(function(){
		$('.down_box').show();
		$('.mask').show();
	})
	$('.vedio_go').click(function(){
		vedio_show(this.name);
	})
	$('.close').click(function(){
		 $(this).parent().hide();
		 $('.mask').hide();
	})
	function vedio_show(vedioUrl){
		$('#vedio_con').html('<embed type="application/x-shockwave-flash" src="' + vedioUrl + '" id="movie_player" name="movie_player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true" flashvars="isShowRelatedVideo=false&showAd=0&show_pre=1&show_next=1&isAutoPlay=true&isDebug=false&UserID=&winType=interior&playMovie=true&MMControl=false&MMout=false&RecordCode=1001,1002,1003,1004,1005,1006,2001,3001,3002,3003,3004,3005,3007,3008,9999" pluginspage="//www.macromedia.com/go/getflashplayer" width="700" height="488">')
		$('.vedio_box').show();
		$('.mask').show();
	}
})
//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?3b479605fe000c07848264c46f72453c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<div id="newMessageDIV" style="display:none"></div>
</body>

</html>
