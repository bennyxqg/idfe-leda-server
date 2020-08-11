
<?php
require_once "include.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php

$base_path = "//fr.uu.cc/fr.uu.cc/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" href="<?php echo $base_path; ?>css/index.css" />
<link rel="stylesheet" href="<?php echo $base_path; ?>css/style.css" />
<link rel="shortcut icon" href="//fr.uu.cc/fr.uu.cc/favicon.ico">
</head>

<body style="background:none;">
    <div class="pg-header">
       <div id="header">
        <a class="logo" href="/" title="凡人修仙传"><img src="<?php echo $base_path; ?>images/logo.png" width="230" height="93" /></a>
        <div class="nav">
            <ul>
                <li><a href="//fr.uu.cc/home" target="_self"><em>HOME</em>首 页</a><span>/</span></li>
                <li><a href="//fr.uu.cc/news/98.html" target="_self"><em>NEWS</em>新闻资讯</a><span>/</span></li>
                <li><a class="on" href="//fr.uu.cc/game_data/334.html" target="_self"><em>GAME DATA</em>游戏资料</a><span>/</span></li>
                <li><a href="<?php echo $config_data['other']['forum_url']; ?>" target="_self"><em>BBS</em>官方论坛</a></li>
                
            </ul>
        </div>
        </div>
    </div>
    <div class="page_main page_main_n">
        <div class="f_left">
            <span  class="d_ewm"><img src="<?php echo $config_data['other']['game_download_qrcode']; ?>" width="151" height="151" /></span>
            <p class="down_n">
                <a href="<?php echo stripslashes($config_data['other']['android_download_url']); ?>" class="d_n_az"><img src="<?php echo $base_path; ?>images/down_az_n.png" width="167" height="57" /></a>
                <a href="<?php echo stripslashes($config_data['other']['ios_download_url']); ?>" class="d_n_ios"><img src="<?php echo $base_path; ?>images/down_ios_n.png" width="167" height="57" /></a>
            </p>
            <div class="sjmt">
                 <ul class="tab_sj">
                    <li class="wx_n on_click">微信</li>
                    <li class="wb_n">微博</li>
                 </ul>
                 <ul class="bar_sj">
                    <li>
                       <img src="<?php echo $config_data['other']['weixin_qrcode']; ?>" width="150" height="150" />
                       <span>扫一扫关注微信</span>
                    </li>
                    <li style="display:none">
                       <img src="<?php echo $config_data['other']['weibo_qrcode']; ?>" width="150" height="150" />
                       <span>扫一扫关注微博</span>
                    </li>
                 </ul>
            </div>
            <?php foreach($topData["data_activity"] as $k => $v): ?>
            <a href="<?php echo $v["str2"]; ?>" class="active_tp1"><img src="<?php echo $v["str1"]; ?>" width="210" height="80" /></a>
            <?php endforeach; ?>
        </div>
    
    	<div class="wrap" >
        	<div class="pr news_top">
            	
                <h2 class="content_tit"><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="news_time"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
                
                <div class="pa site_nav">当前位置：<a href="//fr.uu.cc" target="_self">首页</a> &gt; 新闻中心</div>
            </div>
            
            <div class="news_content">
            	<?php
					echo GET_CURRENT_NEWS_INFO('content');
				?>
            </div>
            
        </div>
    </div>

<!--
<div class="footer page-footer">
    <div class="ft-wrap">
        <div class="ft-logo"><a href="//www.idreamsky.com" target="_blank"><img src="<?php echo $base_path; ?>images/ft_logo1.jpg" /></a><img src="<?php echo $base_path; ?>images/foot_logo2.jpg" /></div>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-<em class="copy-year">2016</em>  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//dl.resource.uu.cc/cqb.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> <a href="//sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08c5829652f01585178205f00c5" target="_blank"><img src="//fr.uu.cc/fr.uu.cc/images/youxidzbq.png" width="16" /></a></p>
            <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
        </div>
    </div>
</div>
-->
<?php require_once 'footer.ctp';?>


<a class="right-pop" href="javascript:;"></a>
<div class="right-pop-active">
	<a class="pop-close" href="javascript:;">收起</a>
    <img class="down-code" src="<?php echo $base_path; ?>images/code.jpg" />
    <div class="down-links">
    	<a href="#link" target="_blank">安卓下载</a>
        <a href="#link" target="_blank">iOS下载</a>
    </div>
    <div class="mt-box tab">
    	<div class="tab_hd"><a href="javascript:;">微信</a><a href="javascript:;">微博</a></div>
        <div class="tab_con"><img src="<?php echo $config_data['other']['weixin_qrcode']; ?>" />扫一扫关注微信</div>
        <div class="tab_con"><img src="<?php echo $config_data['other']['weibo_qrcode']; ?>" />扫一扫关注微博</div>
    </div>
</div>


<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.tab_sj li').each(function(i){
		$(this).on('click',function(){
		   $(this).addClass('on_click').siblings().removeClass('on_click');	
		   $('.bar_sj li').eq(i).show().siblings().hide();
		})
	})
	
	$(".right-pop").click(function(){
		$(this).animate({right:'-53px'},"fast",function(){
			 $(".right-pop-active").animate({right:'0px'});
		 });
	});
	$(".pop-close").click(function(){
		$('.right-pop-active').animate({right:'-212px'},function(){
			 $(".right-pop").animate({right:'0px'});
		 });
	});
	
	/*tab 选项卡*/
	$('.tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('a').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).click(function(){
				$(this).siblings('a').removeClass('on');
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
	})
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
});	
</script>
<script>
var speed=20; //数字越大速度越慢
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
</script>
</body>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</html>
