<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php echo $full_base_url ?>/wap/css/index.css?v=0704" rel="stylesheet" type="text/css" />
<link href="<?php echo $full_base_url ?>/wap/css/swiper.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
  <section class="part1">
  
  	<header class="top">
    	<a class="top_logo" href="//cqb.uu.cc/home/"><img src="<?php BLOCK('game_icon') ?>" alt="《苍穹变》官网" /></a>
    	<h2>苍穹变</h2><h3>3D超人气小说PK手游</h3>
        <a class="go_home download" href="javascript:;">立即下载</a>
    </header>
  
    <!-- <header class="header">
       <a class="download" href="javascript:;"></a>
       <div class="donwnload_fc">
         <span>IOS版本敬请期待！</span>
         <a href="javascript:void(0);" class="close" ><img src="<?php echo $full_base_url ?>/wap/images/close.png" /></a>
       </div>-->
       
     </header>
     <div class="down_load">
	       <a href="//lnk8.cn/Y1Qdks" class="xz_down" ></a>
	       <a href="javascript:;" class="vip_yy" data-type=""></a>
	    </div>
  </section>
 
  <section class="part2">
  	<!--
    <div class="down_load">
      <a href="javascript:;" class="app xz_down"><img src="//cqb.uu.cc/cqb.uu.cc/wap/images/dn_load.jpg" width="284" height="73"></a>
      <a href="#" class="az vip_yy"><img src="//cqb.uu.cc/cqb.uu.cc/wap/images/dn_yy.jpg" width="284" height="73"></a>
    </div>
    -->
   
    
  </section>
  <section class="part3">
     <h1></h1>
     <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" alt="" /></div>','m-d',8,100,1,array());
        ?>
        </div>
        <div class="swiper-pagination swiper-pagination1"></div>
    </div>
     <ul class="xinwen">
     <?php
     	SHOW_NEWS('<li><strong>新闻</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',6,1,array());
     ?>              
     <a class="more" style="color:red" href="<?php CATEGORY_URL('新闻') ?>"><img src="<?php echo $full_base_url ?>/wap/images/more.png" width="190" height="52"></a>
     </ul>
  </section>
  <!--
  <section class="part4">

   <div class="tab">
   <?php
   		SHOW_DATAS('<a href="javascript:;@@FIRST_CONTENT1@@">@@LABEL@@</a>','m-d',2,5,1,array('FirstContent1'=>' style="background:rgb(180, 189, 222);color:#000"','OrderBy'=>'`int1` asc'));
   ?>
   </div>
   <div class="bar">
     <ul>
     <?php
     	SHOW_DATAS('<li@@FIRST_CONTENT1@@><img src="@@STR3@@" width="640" height="290"></li>','m-d',2,5,1,array('FirstContent1'=>' style="background:rgb(180, 189, 222);color:#000"','OrderBy'=>'`int1` asc','FirstContent1'=>' style="display:block;"'));
     ?>
     </ul>
   </div>
  </section>
  -->
  <section class="part5">
     <h2></h2>

    <div class="sp_liet">
      <ul>
        <li class="td_sp">
          <a href="#" title="//dl.uu.cc/download/1.mp4"></a>
        </li>
        <!--<li class="nz_sp"><a href="#" title="//dl.uu.cc/download/2.mp4"></a></li>-->
        <li class="sy_sp"><a href="#" title="//dl.uu.cc/download/3.mp4"></a></li>
      </ul>
    </div>
    <!--
    <div class="test">
    	<a href="//cqb.uu.cc/activity/cqb_douqi/"><img src="<?php echo $full_base_url ?>/wap/images/test.jpg"></a>
    </div>
    -->
    <p>
      <!--
      <span>苍穹变官方QQ群：247494456</span>
      <span>乐逗游戏客服电话：4008400188</span>
      <span>公会合作：806909909</span>
      -->
      <span class="tb_"><a href="<?php BLOCK('weibo_url') ?>"></a><a href="<?php BLOCK('baidu_tieba_url') ?>"></a><a href="<?php BLOCK('forum_url') ?>"></a><a href="<?php BLOCK('jiuyou_forum_url') ?>"></a></span>
      <span><img src="<?php echo $full_base_url ?>/wap/images/q_w.jpg"></span>
    </p>
    <!--
    	作者：466700341@qq.com
    	时间：2016-05-03
    	描述：
    
    <p><a href="#"><img src="<?php echo $full_base_url ?>/wap/images/logo.jpg" /></a><a href="#"><img style="margin-left:20px;" src="<?php echo $full_base_url ?>/wap/images/tshd.jpg" /></a></p>
    -->
  </section>
  <!--
   <div class="tc_td">
      <a href="//cqb.uu.cc/news/176.html#link" class="ceshi"></a>
      <a href="//cqb.uu.cc/activity/cqb_douqi/" class="ceshi_dq"></a>
   </div>
  -->
  <footer class="footer">
    	<div class="logos"><a href="//www.idreamsky.com" target="_blank"><img src="<?php echo $full_base_url ?>/wap/images/foot_logo_ledou.jpg" alt="乐逗游戏" /></a><img src="<?php echo $full_base_url ?>/wap/images/foot_logo_tianshen.jpg" alt="天神互动" /></div>
         <ul>
           <li><a href="//www.idreamsky.com/homes/contact">联系我们</a>|<a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
           <li class="second">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</li>
           <!--
           <li>地址：深圳市南山区科苑北路科兴科学园A3单元16层</li>
           <li>客服: 4008400188 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;媒体合作: 0755-86110235</li>
           -->
           <li>粤网文〔2016〕6871-1632号 新广出审[2015]186号 </li>
           <li>出版物号：ISBN 978-7-89390-007-5 文网游备字〔2016〕Ｍ-SLG 0504 号</li>
           <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
           <li>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
         </ul>
 </footer>
</div>
<div class="zhezao"></div>
<div id="sp_vv"></div>
<!--
<div class="biaodan">
    <span class="cha"><img src="<?php echo $full_base_url ?>/wap/images/cha.jpg" /></span>
     <input type="text" id="shuru" value="输入手机号预约礼包" />
     <input type="text" id="yz_m" /><img src="" id="yz_img" width='99' height='50'/>
     <a class="yuyue" href="#"></a> 
</div>
-->
<div class="biaodan">
	<!--
    <span class="cha"><img src="<?php echo $full_base_url ?>/wap/images/cha.jpg" /></span>
    
    <input type="radio" name="banben"  value="1" class="radio radio1" checked="checked"><label for="a" class="radio lab1"><img src="<?php echo $full_base_url ?>/wap/images/p4_2.png" /></label><br>
    <input type="radio" name="banben"  value="2" class="radio radio2"><label for="b" class="radio lab2" ><img src="<?php echo $full_base_url ?>/wap/images/p4_1.png" /></label>
    -->
    <h5>领取礼包</h5>
    <input type="text" id="shuru" value="请输入手机号码领取" />
    <!--
    <input type="text" id="yz_m" /><img src="" id="yz_img" width='99' height='50'/>
    -->
    <p>
    <a class="yuyue" href="javascript:;">确认领取</a> 
    <a href="javascript:;" class="cha">关闭</a>
    </p>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/swiper.min.js"></script>
<script type="text/javascript">
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 30,
    });
</script>
</script>

<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jbase64.js"></script>
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.xz_down').attr('href','//cqb.uu.cc/activity/cqb/weixingw.html');
return true; 
}else{ 
var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }

                var img_url_xz = $('.xz_down img').attr('src');
			    var img_url_yy = $('.vip_yy img').attr('src');
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					var bdUrl = window.location.href;
					  //if(bdUrl == "//cqb.uu.cc/home/"){
						  //$('.xz_down, .download').attr('href','');	
						//}else{
						   $('.xz_down, .download').attr('href','<?php BLOCK("ios_download_url") ?>');	
						   //$('.go_home').attr('href','//cqb.uu.cc/home?lin=bd');
						//}		
					
					
								
					$('.xz_down').attr('data-type',1);
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					$('.xz_down').attr('data-type',2);
					var bdUrl = window.location.href;
					if(bdUrl == "//cqb.uu.cc/home/"){
						   $('.xz_down, .download').attr('href','<?php BLOCK('nbd_ios_download') ?>');	
						}else{
						   $('.xz_down, .download').attr('href','<?php BLOCK('bd_wap_ios_download') ?>"');	
						   //$('.go_home').attr('href','//cqb.uu.cc/home?lin=bd');
						}	
					
					//$('.xz_down, .download').attr("href","//m.pt.cn/down/game/20012221110");
				}



return false; 
} 
} 
</script> 
<script type="text/javascript">
$(function(){
	//新闻切换
	$('.tab a').each(function(i){
	  $(this).hover(function(){
		 $(this).css({'background':'#b4110c','color':'#fff'}).siblings().css({'background':'none','color':'#eee'});
		 $('.bar ul >li').eq(i).show().siblings().hide();  
	  })	
		
	})
	
	//点击弹出视频
	$('.zhezao').bind('touchstart',function(){
		$('#sp_vv').empty();
		$('#sp_vv').hide();
		$('.zhezao').hide();
		$('.biaodan').hide();
	}) 
	
	$('.sp_liet ul li').each(function(i){
	    $(this).bind('click',function(){
		   var title = $(this).find('a').attr('title');
		   $('.zhezao').show();
	       $('#sp_vv').show().append('<video id="video1" controls=""  src="'+title +'"width="600" height="300" autoplay="autoplay"></video>');
		   //alert(title);
		})	
	 	
	})

	 //遮罩层
	
	$('.vip_yy').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
		//获取验证码		
	$.ajax({
		type:"POST",
		url:"/get_verify_code",
		data:{charnum:4,mode:'img',width:99,height:50},
      	dataType:"json",
      	success:function(res){
      		if(res.ret == 0){
				var imgUrl = BASE64.decoder(res.url);
                //alert(imgUrl);
				$("#yz_img").attr('src',imgUrl);
            }else {
            	alert("获取失败");
            }
      }
      });

	})

	//刷新验证码
	/*
	$('#yz_img').click(function(){
		$.ajax({
			type:"POST",
			url:"/get_verify_code",
			data:{charnum:4,mode:'img',width:99,height:50},
			dataType:"json",
			success:function(res){
				if(res.ret == 0){
					var imgUrl = BASE64.decoder(res.url);
					//alert(imgUrl);
					$("#yz_img").attr('src',imgUrl);
				}else {
					alert("获取失败");
				}
		  }
		  });
	})		
	*/
	$('.cha').click(function(){
		$('.biaodan').hide();
		$('.zhezao').hide();
		$('#shuru').attr('value','输入手机号预约礼包');
		$('#yz_m').val('');
		})

	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').click(function(){
		$(this).attr('value','');
		})

    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		
		if(phone == '输入手机号预约礼包' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				var type = $('input:radio[name="banben"]:checked').val();
				var code_id;
				if(type == 1){
					    code_id = 65;
					}else{
						code_id = 67;
				    }
				//var verify = $('#yz_m').val();
				//alert(type + "---" + phone);
				 $.ajax({
						type:"POST",
						url:"/send_phone_code",
						data:{phone:phone,code_id:code_id,type:type,site_id:70},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("发送成功");
							}else if(res.ret == 8){
								alert("您已经领取过哦！");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else{
								alert("发送失败");
							}
					  }
				});

			}	
		}
	    })
	
})
</script>
</body>
</html>
