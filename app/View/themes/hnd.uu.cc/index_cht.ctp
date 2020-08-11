<?php $this->Website->init(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php BLOCK('title_cht') ?></title>
<meta name="keywords" content="HND英雄永不滅，HND英雄永不滅官網，HND下載，HND英雄永不滅下載，HND,英雄永不滅, HND英雄永不滅活動， HND官網，英雄永不滅官網,HND活動，HND禮包，HND英雄永不滅禮包，hnd, heroes never die,atd,英雄永不滅下載，獸人必須死,怪獸必須死,英雄永不滅活動，英雄永不滅禮包，怪獸必須死官網，怪獸必須死下載,動作塔防">
<meta name="description" content="全新塔防，我來定義！全球首款ATD手遊，將ARPG與塔防糅合在壹起，給玩家“壹站式”的全新體驗！">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="<?php BASE_URL(false) ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php BASE_URL(false) ?>css/swiper.min.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="<?php BASE_URL(false) ?>js/html5.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php BASE_URL(false) ?>favicon.ico"/>
<link rel="bookmark" href="<?php BASE_URL(false) ?>favicon.ico"/>
 <style type="text/css">
.scroll{margin:0 auto; width:678px; height:532px;  position:relative; overflow:hidden;}
.scroll ul{list-style-type:none; padding:0; margin:0; position:absolute; top:0;left:0; width:99999px; height:532px; }
.scroll li{float:left; width:678px;height:532px;}
.prev{position:absolute; left:-20px; top:284px; }
.next{position:absolute; right:-20px; top:284px;}
</style>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f7b46d5b26c91c9c86bc641ab6fd4fa5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body class="cnt">
<section class="banner">
    <div class="logo"><img src="<?php BASE_URL(false) ?>images/logo.png" /></div>
    <div class="txt"><img src="<?php BASE_URL(false) ?>images/tit_cnt.png" /></div>
    <!--<a class="tiyan_btn" href="javascript:;"><img src="<?php BASE_URL(false) ?>images/tiyan_btn_cnt.png" /></a>-->
</section>

<section class="go_div clearfix">
	<div class="pr wrap">
    	<div class="pa m_none down_tit">遊戲下載：</div>
        <div class="left down_box<?php if(HAS_BLOCK('ios_download_url_cht') && HAS_BLOCK('android_download_url_cht')) echo ' link_both'; ?>">
        	<?php if(HAS_BLOCK('ios_download_url_cht')) { ?>
        		<a class="ios_down" href="<?php BLOCK('ios_download_url_cht') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/down.png" /></a>
        	<?php } ?>
        	<?php if(HAS_BLOCK('android_download_url_cht')) { ?>
        		<a class="android_down" href="<?php BLOCK('android_download_url_cht') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/down_android.png" /></a>
        	<?php } ?>
        </div>
        <div class="left m_none line"></div>
        <div class="share_box">
        	<ul>
            	<li><a href="<?php BLOCK('facebook_url') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_fb.png" /></a></li>
                <li><a href="<?php BLOCK('twitter_url') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_t.png" /></a></li>
                <li><a href="<?php BLOCK('youtube_url') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_ytb.png" /></a></li>
                <!--<li><a href="#link" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_more_en.png" /></a></li>-->
                <li><a href="<?php BLOCK('google_url') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_gl.png" /></a></li>
                <li><a href="mailto:<?php BLOCK('mail_address') ?>?body=感謝您對HND的支持，如果您在遊戲中遇到任何問題，請在這裡告訴我們:)" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_mail_en.png" /></a></li>
                <!--<li><a href="#link" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_more_en.png" /></a></li>-->
            </ul>
        </div>
    </div>
</section>

<section class="video_box" style="position:relative;">
  
	<div class="video" style="display:none"><video src="<?php BLOCK('vedio_url') ?>" width="777" height="480" style="background:#000;"  poster="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','vedio_img_cht',array(),1); ?>" controls ></video></div>
    
    <div id="pc_video" style="width: 777px; height: 480px; margin:0 auto;overflow:hidden;position:absolute;margin-left:-388px;top:50px;left:50%;">
		<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/player/sewise.player.min.js?server=vod&type=mp4&videourl=<?php BLOCK('vedio_url') ?>&autostart=false&starttime=0&lang=zh_CN&logo=//onvod.sewise.com/libs/swfplayer/skin/images/logo.jpg&title=Vod Video&buffer=5&poster=<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','vedio_img_cht',array(),1); ?>&skin=vodWhite&fallbackurls=%7B%0A%09%22ogg%22%3A%20%22http%3A%2F%2Fjackzhang1204.github.io%2Fmaterials%2Fmov_bbb.ogg%22%2C%0A%09%22webm%22%3A%20%22http%3A%2F%2Fjackzhang1204.github.io%2Fmaterials%2Fmov_bbb.webm%22%0A%7D"></script>
	</div>
</section>

<section class="feature">
	<div class="wrap">
    	<div class="title m_none"></div>
		
		<div class="item_list">
			<div class="item">
				<h2>開啟全球塔防手遊新紀元</h2>
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />獨特的塔防玩法，前所未有的遊戲體驗，開啟塔防新紀元！ </p>
			</div>            
			<div class="item">
				<h2>三種英雄職業，多種酷炫技能</h2>
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />三種英雄職業搭配多種炫酷技能，酣暢淋漓的戰鬥快感等你體驗！</p>
			</div>
			<div class="item">
				<h2>塔配陷阱，百種組合，千種策略</h2>
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />防禦塔搭配陷阱，百種組合，千種策略，殺怪爽翻天！</p>
			</div>
			<div class="item">                
				<h2>多種遊戲模式，全球排名，挑戰極限</h2>                
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />無盡挑戰，BOSS擊殺，全球玩家，試比高下！ </p>            
			</div>            
			<div class="item">                
				<h2>蘋果iOS9新特性添加</h2>                
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />加入iCloud雲端存檔功能，不再擔心存檔丟失</p>                
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />針對蘋果全新Metal技術設計神秘關卡，等你來探索！</p>                
				<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />新增ReplayKit錄製視頻功能新特性，與好友分享您的成就和喜悅！</p>            
			</div>        
		</div>
	
    </div>
</section>
<section class="slider_box">
	<div class="wrap">
    	<div class="slider_con">
          
            <div class="wap_lb" style="display:none;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                	<?php SHOW_IMAGE_LIST('<div class="swiper-slide"><img src="@@BIG_IMAGE@@" /></div>','game_loop_img_cht',array()); ?>
                </div>
               
                <div class="swiper-pagination"></div>
                
            </div>  
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>
            
            <div class="pc_lb">
            <div class="scroll">
              <ul>
                <?php SHOW_IMAGE_LIST('<li><img src="@@BIG_IMAGE@@" /></li>','game_loop_img_cht',array()); ?>
              </ul>
              
            </div>
            <a class="prev swiper-button-prev" href="javascript:;"></a> 
            <a class="next swiper-button-next" href="javascript:;"></a>
            </div>
        </div>
    </div>	
</section>

<section class="flag_box">
	<div class="wrap">
    	<h2>全球發行</h2>
        <div class="flag_line"><img src="<?php BASE_URL(false) ?>images/line1.png" /></div>
        <div class="flag"><img src="<?php BASE_URL(false) ?>images/flag_icons.png" /></div>
        <div class="flag_line"><img src="<?php BASE_URL(false) ?>images/line2.png" /></div>
        <div class="sites"><a href="//hnd.uu.cc" target="_self">简体中文</a>丨<a href="//hnd.uu.cc?lan=cht" target="_self">繁體中文</a>丨<a href="//hnd.uu.cc?lan=en" target="_self">English</a></div>
    </div>
</section>

<div class="footer">
	<div class="wrap">
        <span class="logo"><a href="//www.idreamsky.com/" target="_blank"><img src="<?php BASE_URL(false) ?>images/foot_logo.png" /></a></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//tp2.uu.cc/tp2.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//tp2.uu.cc/tp2.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//tp2.uu.cc/tp2.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//tp2.uu.cc/tp2.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
        <!--<div class="foot_server none"><a href="#link" target="_blank">联系客服</a>  |  <a href="#link" target="_blank">服务器列表</a>  |  <a href="#link" target="_blank">进入论坛</a></div>-->
    </div>
</div>

<div class="yuyue cnt_yuyue">
	<a class="close" href="javascript:;"></a>
    <input class="phone" type="email" placeholder="請輸入Email" />
    <a class="yuyue_btn" href="javascript:;"></a>
</div>
<div class="yuyue cnt_yuyue_succ">
	<a class="close" href="javascript:;"></a>
</div>
<div class="yuyue cnt_yuyue_fault">
	<a class="close" href="javascript:;"></a>
</div>
<div class="mask"></div>

<script src="<?php BASE_URL(false) ?>js/jquery-1.11.3.min.js"></script>
<div style="display:none">
<script src="<?php BASE_URL(false) ?>js/swiper.jquery.min.js"></script> 
<script>
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
	lazyLoading: true,
	autoplay: false,
    autoplayDisableOnInteraction: false,
	loop: true
});
</script>
</div>
<script>
$(function(){
	var Wth = $(window).width();
	if(Wth < 641){
		$('.video').show();
		$('#pc_video').hide();
		$('.wap_lb').show();
		$('.pc_lb').hide();
		}else{
		$('.video').hide();
		$('#pc_video').show();
		$('.wap_lb').hide();
		$('.pc_lb').show();
	}
	
	$("video").trigger("pause");//for auto play
	
	$('.tiyan_btn').click(function(){
		$('.cnt_yuyue').show();
		$('.mask').show();
			
	})
	$('.close').click(function(){
		$('.yuyue').hide();
		$('.mask').hide();
			
	})
	
	var mailReg = /(\S)+[@]{1}(\S)+[.]{1}(\w)+/; 
	$('.yuyue_btn').click(function(){
		var phone = $('.phone').val();
		if(phone == ''){
			alert('請輸入郵箱地址!');
			}else{
			if(!mailReg.exec(phone)){
				alert('郵箱格式錯誤！');
				}else{
				 $.ajax({
					type:"POST",
					url:"/collect_email",
					data:{email:phone},
					dataType:"json",
					success:function(res){
						if(res.ret == 8){
							 alert("您已經參加過預約！");
						}else if(res.ret == 0){
						   alert("恭喜您，預約成功！");
						}else{
						   alert("預約失敗！");
							}
					}
				});

			}	
		}
	})
	
})
</script>
<script type="text/javascript">

//兼容各种浏览器
  $(function(){
	 var w=678;
	  var l=0;
	  var timer=null;
	  var len=$(".scroll ul li").length*2; 
	 $(".scroll ul").append($(".scroll ul").html()).css({'width':len*w, 'left': -len*w/2});
	 
	//自动每8秒切换一次 
    timer=setInterval(init,3000);	
	function init(){
		 $(".scroll .next").trigger('click'); 
	}
	
	$(".scroll ul li").hover(function(){
		 clearInterval(timer);
		},function(){
			timer=setInterval(init,3000);
	   });
	
	  $(".prev").click(function(){
		  l=parseInt($(".scroll ul").css("left"))+w;  //这里要转成整数，因为后面带了px单位
			 showCurrent(l); 
		  });
		  $(".next").click(function(){
		     l=parseInt($(".scroll ul").css("left"))-w;  //这里要转成整数，因为后面带了px单位
			showCurrent(l);
	  });
	   function showCurrent(l){     //把图片的左右切换封装成一个函数
	   if($(".scroll ul").is(':animated')){ //当ul正在执行动画的过程中，阻止执行其它动作。关键之处，不然图片切换显示不完全，到最后图片空白不显示。
	      return;
	   }
		  $(".scroll ul").animate({"left":l},500,function(){
				if(l==0){ //当图片位置到第一份图片第二张时，马上把图片定位到第二份的第一张。注意这里的设置的css一定到写在animate动画完成时的执行  //函数里。否则图片只是一瞬间回到第一张，但是没有向右的动画效果。 我在做的时候，用的不是css,而是用animate()定位到第二个第一张，结果切换时，是反方向的运动，一直觉得无论怎样，图片方向都会发生变化 ，弄得花了一天时间才找到原因，所以一定 要用css。
			   $(".scroll ul").css("left",-len*w/2);   
			   
			 }else if(l==(1-len)*w){ //图片位置到最后一张时（第二份最后一张）时，就把图片定位到第一份最后一张。从而显示的是第一份最后一张。
				 $(".scroll ul").css('left',(1-len/2)*w); 
				}
		    }); 	  
		 }
	  
	  });	
</script>
</body>
</html>
