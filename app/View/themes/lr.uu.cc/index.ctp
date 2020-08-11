<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php BASE_URL() ?>css/index.css?v=161219" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/list2_l.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/list2_r.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/part3_bj2.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/list3_l.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/list3_r.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/part3_bj3.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/list4_l.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/list4_r.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>images/part3_bj4.jpg" />
</head>

<body>
<div id="container">
   <div id="header">
      <h1>
        <img src="<?php BASE_URL() ?>images/icon.png" width="96" height="96" />
        <img class="logo" src="<?php BASE_URL() ?>images/icon_logo.png" width="145" height="36" />
      </h1>
      <div class="nav">
         <a href="/" class="sy nav_bar"><em></em>官网首页</a>
         <a href="//lr.uu.cc/news/340.html" class="hd nav_bar"><em></em>最新活动</a>
         <a href="//lr.uu.cc/news/338.html" class="gg nav_bar"><em></em>新闻公告</a>
         <a href="javascript:;"  class="ts nav_bar" id="tese"><em></em>游戏特色</a>
         <a href="<?php BLOCK('forum_url') ?>" target="_blank" class="lt nav_bar"><em></em>官方论坛</a>
         <p class="w_q">
            <a href="#" class="weixin"><em></em>关注微信</a>
            <a href="#" class="qq"><em></em>加入Q群</a>
         </p>
      </div>
      <div class="w_q_float w_q_float1">
          <span class="w_q_ewm"><img src="<?php BLOCK('weixin_qrcode') ?>" width="106" /></span>
          <p>官方微信公众号</p>
          <span class="w_q_name"><?php BLOCK('weixin_account') ?></span>
      </div>
      <div class="w_q_float2 w_q_float">
          <span class="w_q_ewm"><img src="<?php BLOCK('qq_qun_qrcode') ?>" width="106" /></span>
          <p>手游官方群</p>
          <span class="w_q_name"><?php BLOCK('qq_qun') ?></span>
      </div>
   </div>
   <div class="bander">
     <div class="bander_1"></div>
     <div class="bander_2">
        <div class="down_load">
            <span class="down_left">
              <p>扫描下载游戏</p>
              <img src="<?php BLOCK('game_download_qrcode') ?>" width="119" height="118" />
            </span>
            <span class="down_right">
              <a href="<?php BLOCK('ios_download_url') ?>" class="ios"></a>
              <a href="<?php BLOCK('android_download_url') ?>" class="az"></a> 
            </span>
        </div>
     </div>
   </div>
   <div class="part2">
       <div class="jt_news">
            <div class="lunbo2">
               <ul id="list2">
               
               <?php
            	SHOW_DATAS('<li><img width="600" height="390" src="@@STR1@@" /></li>','m/d',0,100,array());
            ?>
               
               </ul>
               <ul id="bar">
                 <span style="background:#00b4ff;"></span>
                 <span></span>
                 <span></span>
                 <span></span>
               </ul>
            </div>
            
            <div class="news">
                <div class="tab">
                   <ul>
                       <li class="dq"><span href="javascript:;">综合</span></li>
                       <li><span href="javascript:;">最新活动</span></li>
                       <li><span href="javascript:;">新闻公告</span></li>
                   </ul>
                   <a href="<?php CATEGORY_URL() ?>" class="more"></a>
                   <a style="display:none" href="<?php CATEGORY_URL('活动') ?>" class="more"></a>
                   <a style="display:none" href="<?php CATEGORY_URL('新闻') ?>" class="more"></a>
                </div>
                <div class="tab_content">
                   <ul style="display:block">
                       <?php
	            	   		SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><strong>【@@CATEGORY_NAME@@】</strong>@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',array('新闻','活动'),6,0,array('LimitFrom'=>1));
	            	   ?>
                   </ul>
                   <ul>
                        <?php
	            	   		SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><strong>【@@CATEGORY_NAME@@】</strong>@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',array('活动'),6,0,array());
	            	   ?>
                   </ul>
                   <ul>
                        <?php
	            	   		SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><strong>【@@CATEGORY_NAME@@】</strong>@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',array('新闻'),6,0,array());
	            	   ?> 
                   </ul>
                </div>
            </div> 
            
       </div>
   </div>
   <div class="part3" id="here">
      <h2></h2> 
      <div class="content">
       
       <div class="lunbo">
           <ul id="list">
             <li style="display:block;opacity:1;" class="one" >
                   <img  src="<?php BASE_URL() ?>images/list1_l.png" class="img_left" />
                   <img  src="<?php BASE_URL() ?>images/list1_r.png" class="img_right" />
             </li>
             <li class="two">
                   <img  src="<?php BASE_URL() ?>images/list2_l.png" class="img_left" />
                   <img  src="<?php BASE_URL() ?>images/list2_r.png" class="img_right" />
             </li>
             <li class="three">
                   <img  src="<?php BASE_URL() ?>images/list3_l.png" class="img_left" />
                   <img  src="<?php BASE_URL() ?>images/list3_r.png" class="img_right" />
             </li>
             <li class="four">
                   <img  src="<?php BASE_URL() ?>images/list4_l.png" class="img_left" />
                   <img  src="<?php BASE_URL() ?>images/list4_r.png" class="img_right" />
             </li>
           </ul>
           
               <a href="javascript:;" class="pre"><img src="<?php BASE_URL() ?>images/pre.png" width="43"  height="68"/></a>
               <a href="javascript:;" class="next"><img src="<?php BASE_URL() ?>images/next.png" width="43"  height="68"/></a>
           
        </div>
       </div> 
   </div>
 <div class="part4">
       <div class="hz">
         <img src="<?php BASE_URL() ?>images/hz.png" width="1083" height="271" usemap="#planetmap"  />
         <!--
         <map name="planetmap" id="planetmap">
             <area shape="rect" coords="24,2,176,82" href ="#"  />
             <area shape="rect" coords="194,2,346,82" href ="#"  />
             <area shape="rect" coords="374,2,526,82" href ="#"  />
             <area shape="rect" coords="555,1,707,81" href ="#"  />
             <area shape="rect" coords="735,1,887,81" href ="#"  />
             <area shape="rect" coords="915,1,1067,81" href ="#"  />
             <area shape="rect" coords="23,102,175,182" href ="#"  />
             <area shape="rect" coords="194,101,346,181" href ="#"  />
             <area shape="rect" coords="376,103,528,183" href ="#"  />
             <area shape="rect" coords="554,104,706,184" href ="#"  />
             <area shape="rect" coords="735,105,887,185" href ="#"  />
             <area shape="rect" coords="914,104,1066,184" href ="#"  />
             <area shape="rect" coords="23,193,175,273" href ="#"  />
             <area shape="rect" coords="194,194,346,274" href ="#"  />
             <area shape="rect" coords="377,195,529,275" href ="#"  />
             <area shape="rect" coords="555,193,707,273" href ="#"  />
             <area shape="rect" coords="736,195,888,275" href ="#"  />
             <area shape="rect" coords="914,195,1066,275" href ="#"  />
         </map>
         -->
    </div>
 </div>
 
 <div class="float_right">
    <div class="fl_right">
       <img src="<?php BLOCK('game_download_qrcode') ?>" width="135"  />
       <a href="<?php BLOCK('ios_download_url') ?>" class="ios"></a>
       <a href="<?php BLOCK('android_download_url') ?>" class="az"></a>
    </div>
    
 </div>
</div>

<?php require_once("_footer.ctp"); ?>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
$(function(){
	$('#tese').on('click',function(){
		$('html,body').animate({scrollTop:$('#here').offset().top}, 800);
	});
	//轮播事件
	show(0);
	var k = 0;
	var len = $('#list2 li').length;
	function show(k){
		$('#bar span').eq(k).css('background','#ff0000').siblings().css('background','#fff');
		$('#list2 li').eq(k).fadeIn(1000).siblings().fadeOut(1000);
		k++;
		 mytime = setTimeout(function(){
				show(k);
				if(k == len){
					k = 0;show(k);
					}
				},5000)
		}
		
    $('#bar span').each(function(k){
		$(this).hover(function(){
			$(this).css('background','#ff0000').siblings().css('background','#fff');
			$('#list2 li').eq(k).fadeIn(1000).siblings().fadeOut(1000);
			if(mytime){
				clearTimeout(mytime);
				}
			},function(){
				show(k);
				})
	})
	
	$('.tab ul li').each(function(t){
		$(this).on('click',function(){
			 
			 $(this).addClass('dq').siblings().removeClass('dq');
			 $('.tab a').eq(t).show().siblings().hide();
			 $('.tab_content ul').eq(t).show().siblings().hide();	
			 $('.tab ul').show();
		})
	})
	
	$('.weixin, .w_q_float1').hover(function(){
		$('.w_q_float1').css('right','80px').show();
	},function(){
		$('.w_q_float1').hide();
	})
	
	$('.qq, .w_q_float2').hover(function(){
		$('.w_q_float2').css('right','-20px').show();
	},function(){
		$('.w_q_float2').hide();
	})
	//轮播
	var i = 0;
	var len = $('#list li').length;


	$('.pre').on('click',function(){
		i--;
		if(i < 0){
		  i = 3;
		  	
		}
		$('#list li').eq(i).fadeIn(1000).addClass('active').siblings().removeClass('active').fadeOut(1000);
	    $('.content').css('background','url(<?php BASE_URL() ?>images/part3_bj'+(i+1)+'.jpg)');
	})
	
	$('.next').on('click',function(){
		i++;
		if(i > 3){
		   i = 0;	
		   
		}
		$('#list li').eq(i).fadeIn(1000).addClass('active').siblings().removeClass('active').fadeOut(1000);
		$('.content').css('background','url(<?php BASE_URL() ?>images/part3_bj'+(i+1)+'.jpg)');
	})

   
})
</script>

</body>
</html>
