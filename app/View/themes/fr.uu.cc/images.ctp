<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Frxxz->getPic($type,$page);
$topData=$this->Frxxz->topData();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php echo $base_path; ?>css/index.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_path; ?>css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_path; ?>js/jquery-1.8.0.min.js" type="text/javascript"></script>
</head>

<body style="background:none;">
<div id="container1">
  <div class="pg-header">
   <div id="header">
       <a href="/" class="logo"><img src="<?php echo $base_path; ?>images/logo.png" width="230" height="93" /></a>
       <ul class="nav">
           <a class="on" href="//fr.uu.cc/home"><em>HOME</em>首 页</a><span>/</span>
           <a href="//fr.uu.cc/news/98.html"><em>NEWS</em>新闻资讯</a><span>/</span>
           <a href="//fr.uu.cc/game_data/334.html"><em>GAME DATA</em>游戏资料</a><span>/</span>
           <a href="<?php echo $config_data['other']['forum_url']; ?>"><em>BBS</em>官方论坛</a>
       </ul>
   </div>
 </div> 
   <div class="c_main">
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
   
   <div id="xjtj" class="xjtj_n" style="width:920px;">
      
      <div class="xj_container" id="xj_container">
          <ul class="xj_bar"  id="xj_bar">
             <a href="//fr.uu.cc/images/6/1.html"<?php if ($type == 6) echo ' class="on"'; ?>>游戏截图</a>
             <a href="//fr.uu.cc/vedio/1.html">精彩视频</a>
             <a href="//fr.uu.cc/images/10/1.html"<?php if ($type == 10) echo ' class="on"'; ?>>玩家美照</a>
             <a href="//fr.uu.cc/images/11/1.html"<?php if ($type == 11) echo ' class="on"'; ?>>壁纸</a>
             <div class="pa site_nav">当前位置：首页 &gt; 游戏资料</div>
          </ul>
          <div class="bar_x bar_x_n">
            
             
             
             <ul id="bizhi" style="display:block">
             <?php if ($data['list']):?>
            	
            	<?php foreach ($data['list'] as $k => $v):?>
            	<li data-img="<?php echo $v['datas']['str1'];?>"><a id="scale" href="javascript:;"><img src="<?php echo $v['datas']['str1'];?>" width="265" ></a><span><?php echo $v['datas']['label'];?></span><strong></strong></li>
            	<?php endforeach;?>
            	
            	<?php endif;?>
               
             </ul>
             <div class="pages"><?php echo $data['page'];?></div>

          </div>
      </div>
   </div>
   </div>
   <?php require_once 'footer.ctp';?>
   
   
</div>

<div id="lightbox">
   <a href="javascript:;" class="close_sp"><img src="<?php echo $base_path; ?>images/close_sp.png" width="43" height="43" /></a>
   <div id="list">
       <div class="box_tp" id="box_tp1">
          <img src="" />
          <a href="javascript:;" class="pre pre1"></a>
          <a href="javascript:;" class="next next1"></a>
       </div>
       <div class="box_tp" id="box_tp2">
          <img src="" />
          <a href="javascript:;" class="pre pre2"></a>
          <a href="javascript:;" class="next next2"></a>
       </div>
       <div class="box_tp" id="box_tp3">
          <img src="" />
          <a href="javascript:;" class="pre pre3"></a>
          <a href="javascript:;" class="next next3"></a>
       </div>
   </div>
</div>


<div class="zhezao"></div>
<div class="video_tk">
  <a href="javascript:;" class="close"><img src="<?php echo $base_path; ?>images/close.png" width="54" height="54" /></a>
  <video id="video_sp" width="700" style="background:#000;" height="400"  poster="" controls="" src="http://dl.cqb.gxpan.cn/upgrade/CG/fanren.mp4">您的浏览器不支持 video 标签。</video>
</div>




</body>

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

<script>
$(function(){
	var k = 0;
	var length_jt = $('#jietu li').length;
	var length_mz = $('#meizhao li').length;
	var length_bz = $('#bizhi li').length;
	
	xjtj_tab('#jietu li',length_jt,'#box_tp1');
	xjtj_tab('#meizhao li',length_mz,'#box_tp2');
	xjtj_tab('#bizhi li',length_bz,'#box_tp3');
	$('.next1').on('click',function(){
		next('#jietu li',length_jt);
	})
	$('.pre1').on('click',function(){
		pre('#jietu li',length_jt);
	})
	$('.next2').on('click',function(){
		next('#meizhao li',length_mz);
	})
	$('.pre2').on('click',function(){
		pre('#meizhao li',length_mz);
	})
	$('.next3').on('click',function(){
		next('#bizhi li',length_bz);
	})
	$('.pre3').on('click',function(){
		pre('#bizhi li',length_bz);
	})
	
	function xjtj_tab(tab_title,length,id_dq){
		$(tab_title).each(function(e){
			$(this).on('click',function(){
			   var data_img = $(this).attr('data-img');	
			   $('.box_tp img').attr('src',data_img);
			   $('.zhezao').show();	
			   $('#lightbox').show();
			   $(id_dq).show();	
			   dq_p();
			   k = e;
			   k_dq(length);
			})
			
	    })
	}

	function dq_p(){
		   var img = new Image();
		   img.src = $('.box_tp img').attr('src');
		   var img_width = img.width;
		   if(img_width > 700){
			   img_width = 700;
			   $('.close_sp').css('right','-5px'); 
		   }else{
			   $('.close_sp').css('right',(695-img_width)/2); 
		   }
		   $('.box_tp').css('width',img_width);	
	}
    
	function next(id,length){
		if(k<length-1){
			var tt = $(id).eq(k+1).attr('data-img');
			$('.box_tp img').attr('src',tt);
			k++;
			dq_p();
			k_dq(length);
		}
    } 
    function pre(id,length){
		if(k>0){
			var tt = $(id).eq(k-1).attr('data-img');
			$('.box_tp img').attr('src',tt);
			k--;
			dq_p();
			k_dq(length);
		}
	}
	
	function k_dq(length){
		if(k == 0){
			  $('.pre').css('opacity','0'); 
			  $('.next').css('opacity','1');
		   }else if(k == length-1){
			  $('.next').css('opacity','0');
			  $('.pre').css('opacity','1'); 
		   }else{
			  $('.pre').css('opacity','1');
			  $('.next').css('opacity','1');
		}
	}
	
	$('.close_sp').on('click',function(){
		$('.zhezao').hide();
		$('#lightbox').hide();
		$('#list div').hide();
		k = 0;
	})
	
    //视频弹框
	video('.video_click');
	video('#video_list li');
	function video(videoName){
		var myVideo=document.getElementById("video_sp");
		$(videoName).on('click',function(){
			var data_src = $(this).attr('data-src');
			$('.zhezao').show();
			$('.video_tk').show();
			$('#video_sp').attr('src',data_src);
			myVideo.currentTime = 0;
			myVideo.play();
	    })		
	}

	$('.close').on('click',function(){
		$('.zhezao').hide();
		$('.video_tk').hide();
		myVideo.pause();
		
	})
	
	$('.close2').on('click',function(){
	    $('.zhezao').hide();
		$('.fuli').hide();	
	})
	
	
	
	
	//新闻切换
	

	tab('.xj_bar a','.bar_x > ul');
	function tab(name,keyname){
		$(name).each(function(i) {
        $(this).click(function(){
			$(this).addClass('on').siblings().removeClass('on');
			$(keyname).eq(i).show().siblings().hide();
			})
        });
	}
	
	
	
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
	
	
	$('.tab_sj li').each(function(i){
		$(this).on('click',function(){
		   $(this).addClass('on_click').siblings().removeClass('on_click');	
		   $('.bar_sj li').eq(i).show().siblings().hide();
		})
	})
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</html>

