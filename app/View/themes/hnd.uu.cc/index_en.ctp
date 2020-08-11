<?php $this->Website->init(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php BLOCK('title_en') ?></title>
<meta name="keywords" content="Heroes Never Die, hnd, heroes never die, Heroes Never Die download, HND download, td, atd, ATD, Tower Defense, HND official website">
<meta name="description" content="Heroes Never Die, the first ATD mobile game all over the world!">
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

<body class="cnt en">
<section class="banner">
    <div class="logo"><img src="<?php BASE_URL(false) ?>images/logo.png" /></div>
    <!--<a class="tiyan_btn" href="javascript:;"><img src="<?php BASE_URL(false) ?>images/tiyan_btn_en.png" /></a>-->
</section>

<section class="go_div clearfix">
	<div class="pr wrap">
    	<div class="pa m_none down_tit">INSTALL ON YOUR MOBILE</div>
        <div class="left down_box<?php if(HAS_BLOCK('ios_download_url_en') && HAS_BLOCK('android_download_url_en')) echo ' link_both'; ?>">
        	<?php if(HAS_BLOCK('ios_download_url_en')) { ?>
        		<a class="ios_down" href="<?php BLOCK('ios_download_url_en') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/down.png" /></a>
        	<? } ?>
        	<?php if(HAS_BLOCK('android_download_url_en')) { ?>
            <a class="android_down" href="<?php BLOCK('android_download_url_en') ?>" target="_blank"><img src="<?php BASE_URL(false) ?>images/down_android.png" /></a>
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
                <li><a href="mailto:<?php BLOCK('mail_address') ?>?body=Thanks for supporting HND. If you have any questions about the game, please reply here.
" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_mail_en.png" /></a></li>
                <!--<li><a href="#link" target="_blank"><img src="<?php BASE_URL(false) ?>images/icon_more_en.png" /></a></li>-->
            </ul>
        </div>
    </div>
</section>

<section class="video_box" style="position:relative;">
  
	<div class="video" style="display:none"><video src="<?php BLOCK('vedio_url') ?>" width="777" height="480" style="background:#000;"  poster="<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','vedio_img_en',array(),1); ?>" controls ></video></div>
    
    <div id="pc_video" style="width: 777px; height: 480px; margin:0 auto;overflow:hidden;position:absolute;margin-left:-388px;top:50px;left:50%;">
		<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/player/sewise.player.min.js?server=vod&type=mp4&videourl=<?php BLOCK('vedio_url') ?>&autostart=false&starttime=0&lang=zh_CN&logo=//onvod.sewise.com/libs/swfplayer/skin/images/logo.jpg&title=Vod Video&buffer=5&poster=<?php SHOW_IMAGE_LIST('@@BIG_IMAGE@@','vedio_img_en',array(),1); ?>&skin=vodWhite&fallbackurls=%7B%0A%09%22ogg%22%3A%20%22http%3A%2F%2Fjackzhang1204.github.io%2Fmaterials%2Fmov_bbb.ogg%22%2C%0A%09%22webm%22%3A%20%22http%3A%2F%2Fjackzhang1204.github.io%2Fmaterials%2Fmov_bbb.webm%22%0A%7D"></script>
	</div>
</section>

<section class="feature">
	<div class="wrap">
    	<div class="title_en"><img src="<?php BASE_URL(false) ?>images/feature_tit_en.png" /></div>
    	
    	
    	<div class="item_list">	
    		<div class="item">		
    			<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />Added action elements to traditional tower defense game</p>	
    		</div>
    		<div class="item">		
    			<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />Added ground trap that will work with defense towers</p>
    		</div>
    		<div class="item">		
    			<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />Currently includes 3 heroes, each with unique skills and talents</p>	
    		</div>	
    		<div class="item">		
    			<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />Grow heroes by collecting and upgrading weapons and armors</p>	
    		</div>	
    		<div class="item">		
    			<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />We have used Metal to design mysterious levels that are waiting for you to explore</p>	
    		</div>	
    		<div class="item">		
    			<p><img src="//hnd.uu.cc/hnd.uu.cc/images/feature_icon.png" />The game is also equipped with ReplayKit in iOS9 so that you can record videos and share them with your friends</p>	
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
                	<?php SHOW_IMAGE_LIST('<div class="swiper-slide"><img src="@@BIG_IMAGE@@" /></div>','game_loop_img_en',array()); ?>
                </div>
               
                <div class="swiper-pagination"></div>
                
            </div>  
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            </div>
            
            <div class="pc_lb">
            <div class="scroll">
              <ul>
                <?php SHOW_IMAGE_LIST('<li><img src="@@BIG_IMAGE@@" /></li>','game_loop_img_en',array()); ?>
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
    	<h2>Global Launch</h2>
        <div class="flag_line"><img src="<?php BASE_URL(false) ?>images/line1.png" /></div>
        <div class="flag"><img src="<?php BASE_URL(false) ?>images/flag_icons.png" /></div>
        <div class="flag_line"><img src="<?php BASE_URL(false) ?>images/line2.png" /></div>
        <div class="sites"><a href="//hnd.uu.cc" target="_self">简体中文</a>丨<a href="//hnd.uu.cc?lan=cht" target="_self">繁體中文</a>丨<a href="//hnd.uu.cc?lan=en" target="_self">English</a></div>
    </div>
</section>

<div class="en_footer">
	<a href="//www.idreamsky.com" target="_blank"><img src="<?php BASE_URL(false) ?>images/foot_logo_en.png" /></a>
    <p>2015 iDreamsky. All right reserved</p>
</div>

<div class="yuyue en_yuyue">
	<a class="close" href="javascript:;"></a>
    <input class="phone" type="email" />
    <a class="yuyue_btn" href="javascript:;"></a>
</div>
<div class="yuyue en_yuyue_succ">
	<a class="close" href="javascript:;"></a>
</div>
<div class="yuyue en_yuyue_fault">
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
		$('.en_yuyue').show();
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
			alert('Please enter the email address!');
			}else{
			if(!mailReg.exec(phone)){
				alert('EMAIL ERROR！');
				}else{
				 $.ajax({
					type:"POST",
					url:"/collect_email",
					data:{email:phone},
					dataType:"json",
					success:function(res){
						if(res.ret == 0){
							 alert("Congratulations on your success！");
						}else if(res.ret == 8){
							alert('You have participated in an appointment!');
						}else{
						   alert("Reservation failure！");
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
