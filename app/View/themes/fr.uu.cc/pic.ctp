<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Tanke->getPic(6,$page);
$topData=$this->Tanke->topData();
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
       <a href="/" class="logo"><img src="images/logo.png" width="230" height="93" /></a>
       <ul class="nav">
           <a class="on" href="#"><em>HOME</em>首 页</a><span>/</span>
           <a href="#"><em>NEWS</em>新闻资讯</a><span>/</span>
           <a href="#"><em>GAME DATA</em>游戏资料</a><span>/</span>
           <a href="#"><em>BBS</em>官方论坛</a>
       </ul>
   </div>
 </div> 
   <div class="c_main">
      <div class="f_left">
            <span  class="d_ewm"><img src="<?php echo $base_path; ?>images/down_ewm.jpg" width="151" height="151" /></span>
            <p class="down_n">
                <a href="javascript:;" class="d_n_az"><img src="<?php echo $base_path; ?>images/down_az_n.png" width="167" height="57" /></a>
                <a href="javascript:;" class="d_n_ios"><img src="<?php echo $base_path; ?>images/down_ios_n.png" width="167" height="57" /></a>
            </p>
            <div class="sjmt">
                 <ul class="tab_sj">
                    <li class="wx_n on_click">微信</li>
                    <li class="wb_n">微博</li>
                 </ul>
                 <ul class="bar_sj">
                    <li>
                       <img src="http://fr.uu.cc/manage/upload/image/fr.uu.cc/2016-11-02/20161102_165825_389137.jpg" width="150" height="150" />
                       <span>扫一扫关注微信</span>
                    </li>
                    <li style="display:none">
                       <img src="http://fr.uu.cc/manage/upload/image/fr.uu.cc/2016-11-02/20161102_165825_389137.jpg" width="150" height="150" />
                       <span>扫一扫关注微博</span>
                    </li>
                 </ul>
            </div>
            <a href="#" class="active_tp1"><img src="<?php echo $base_path; ?>images/down_ios_n.png" width="210" height="80" /></a>
            <a href="#" class="active_tp2"><img src="<?php echo $base_path; ?>images/down_ios_n.png" width="210" height="80" /></a>
      </div>
   
   <div id="xjtj" class="xjtj_n" style="width:920px;">
      
      <div class="xj_container" id="xj_container">
          <ul class="xj_bar"  id="xj_bar">
             <a href="yxjt.html" >游戏截图</a>
             <a href="jcsp.html">精彩视频</a>
             <a href="wjmz.html">玩家美照</a>
             <a href="bizhi.html" class="on">壁纸</a>
             <div class="pa site_nav">当前位置：首页 &gt; 新闻中心</div>
          </ul>
          <div class="bar_x bar_x_n">
            
             
             
             <ul id="bizhi" style="display:block">
             <?php if ($data['list']):?>
            	
            	<?php foreach ($data['list'] as $k => $v):?>
            	<li data-img="<?php echo $v['datas']['str1'];?>"><a id="scale" href="javascript:;"><img src="<?php echo $v['datas']['str1'];?>" width="265" height="170"></a><span><?php echo $v['datas']['label'];?></span><strong></strong></li>
            	<li>
            		<a href="javascript:;"><img src="<?php echo $v['datas']['str1'];?>"/></a>
                	
                </li>
            	<?php endforeach;?>
            	
            	<?php endif;?>
               
             </ul>
             <div class="pages"><?php echo $data['page'];?></div>

          </div>
      </div>
   </div>
   </div>
   <div id="foot">
    	<div class="footer">
            <div class="cr">
               <span class="logo"><img src="images/f_logo.png"><img style="margin-left:20px;" src="images/tshd.png"></span>

                 <div id="demo">
                    <div id="indemo">
                    <div id="demo1">
                    <a href="#"><img src="images/hz_logo1.png" width="85" height="24"  /></a>
                    <a href="#"><img src="images/hz_logo2.png" width="85" height="24" /></a>
                    <a href="#"><img src="images/hz_logo3.png" width="85" height="24" /></a>
                    <a href="#"><img src="images/hz_logo4.png" width="85" height="24" /></a>
                    <a href="#"><img src="images/hz_logo5.png" width="85" height="24" /></a>
                    <a href="#"><img src="images/hz_logo6.png" width="85" height="24" /></a>
                    </div>
                    <div id="demo2"></div>
                    </div>
                 </div>
                 <div class="hezuo">
                      <a href="javascript:;" class="hz_hover"><img src="images/hezuo.jpg" width="285" height="35" /></a>
                      <ul class="bar_hz">
                         <li><a href="#">我是名字</a></li>
                         <li><a href="#">我是名字</a></li>
                         <li><a href="#">我是名字</a></li>
                         <li><a href="#">我是名字</a></li>
                         <li><a href="#">我是名字</a></li>
                         <li><a href="#">我是名字</a></li>
                         <li><a href="#">我是名字</a></li>
                      </ul>
                 </div>
            </div>
            <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
            <div class="messages">
                <p class="link"> <a class="first_o" target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                <p> <span>Copyright©2009-2017 TENCENT. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创梦天地科技有限公司  版权所有<br />  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
            </div>
        </div>
   </div>
   
   
</div>

<div id="lightbox">
   <a href="javascript:;" class="close_sp"><img src="images/close_sp.png" width="43" height="43" /></a>
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
  <a href="javascript:;" class="close"><img src="images/close.png" width="54" height="54" /></a>
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
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</html>

