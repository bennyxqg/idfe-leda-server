<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="//fc.uu.cc/fc.uu.cc/favicon.ico">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<style type="text/css">
*{margin:0;padding:0;}
ul{list-style:none;}
a{text-decoration:none;}
#container{width:100%;height:849px;background:url(<?php BASE_URL() ?>images/bj.jpg) no-repeat center top;}
.down{width:515px;height:138px;position:absolute;left:50%;margin-left:-258px;top:350px;background:url(<?php BASE_URL() ?>images/down.png) no-repeat center top;}
.down a{position:absolute;}
.down a.ios,.down a.az{width:200px;height:60px;left: 175px;}
.down a.ios{top:0;}
.down a.az{bottom:5px;}
.down a.video{width:125px;height:125px;right:0;top:0;}
.zhezao{display:none;background:#000;opacity:0.8;filter:alpha(opacity=80);position:fixed;top:0;left:0;right:0;bottom:0;z-index:2;}
.video_tk{display:none;width:960px;height:600px;background:#000;position:absolute;left:50%;margin-left:-480px;top:20%;z-index:3;}
.close{width:54px;height:54px;position:absolute;right:0;top:-54px;}

/*   底部样式   */
#foot{ position:relative; width:100%; height:173px; background:#222327; overflow:hidden; }
.footer{color:#898989;width:870px;margin:0 auto;font-size:12px;position:relative;padding:20px 0 0;font-family:Helvetica,Arial,sans-serif; }
.footer img{vertical-align:middle;}
.footer .logo{float:left;margin-top:8px;padding-right: 35px;height: 60px;}
.footer .logo-dev{padding-top:10px;margin-left:10px;}
.footer p{padding-bottom:5px; height:20px; line-height:20px;}
.footer a{color:#898989; text-decoration:none}
.footer a:hover{text-decoration: none;}
.footer .cr{padding-top:18px; padding-bottom:10px;color:#898989;padding-left:0px; line-height:21px;border-bottom:solid 1px #000;}
.footer .cr span{margin-right:20px;}
.footer .cr .link a{margin:0 5px;}
.footer .zg{clear:both;height:24px;line-height:24px;padding:10px 0; border-top:1px solid #4b4c50;color:#898989;text-align:center;}
.footer .zg strong{color:#7c929e; font-weight:bold;}
.footer .wj{float:right;margin:-26px 78px 0 0;}
</style>
</head>

<body>
<div id="container">
    <div class="down">
       <a href="<?php BLOCK('ios_download_url') ?>" class="ios"></a>
       <a href="<?php BLOCK('android_download_url') ?>" class="az"></a>
       <a href="#" class="video"></a>
    </div>
</div>

<div id="foot">
    	<div class="footer">
            <span class="logo"><img src="<?php BASE_URL() ?>images/logo.png"><img style="margin-left:20px;" src="<?php BASE_URL() ?>images/qt_logo.png"></span>
            <div class="cr">
                <p class="link"> <a target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
            </div>
            <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
        </div>
</div>
<div class="zhezao"></div>
<div class="video_tk">
  <a href="javascript:;" class="close"><img src="<?php BASE_URL() ?>images/close_c3520cc.png" width="54" height="54" /></a>
  <video id="video_sp" width="960" height="600" src="//dl.uu.cc/download/jffc.mp4" controls="controls" preload="auto">
     您的浏览器不支持 video 标签。
  </video>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js" ></script> 
<script>
$(function(){
	var video_src = "//dl.uu.cc/download/jffc.mp4";
    var myVideo=document.getElementById("video_sp");
	$('.video').on('click',function(){
		$('.zhezao').show();
		$('.video_tk').show();
		//$('#video_sp').attr('src',video_src);
		myVideo.currentTime = 0;
		myVideo.play();
		
	})	
	
	$('.zhezao, .close').on('click',function(){
		
		$('.zhezao').hide();
		$('.video_tk').hide();
		//$('#video_sp').attr('src',video_src);
		myVideo.pause();
		
	})
})
</script>
</body>
</html>
