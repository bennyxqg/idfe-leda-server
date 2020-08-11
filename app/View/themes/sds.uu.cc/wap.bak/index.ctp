<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css" />

</head>

<body>
<div id="container">

  <section class="bander">
 
     <header class="top">
           <div class="left"><img src="<?php BASE_URL() ?>images/icon.png" width="103" height="103" /><img src="<?php BASE_URL() ?>images/icon_logo.png" width="193" height="56" /></div>
           <a href="//sds.uu.cc/home" class="right right_new">
             进入官网
           </a>
      </header>
    
  </section>
  
  <section class="main">
      <p class="yy_xz">
         
         <a href="//sds.uu.cc/download" class="down_load"><img src="<?php BASE_URL() ?>images/az.png" width="263" height="77" /></a>
         <a href="javascript:;" class="yuyue"><img src="<?php BASE_URL() ?>images/az_1.png" width="263" height="77" /></a>
         <!--
         <span class="yuyue_info">已有 <strong><?php echo intval(GET_BLOCK('player_order_count'))+GET_COLLECT_PHONE_COUNT() ?></strong> 位玩家预约,100%得礼包</span>
         -->
      </p>
      <!--
      <p class="about_ios">本次测试<em>ios暂未开放</em>，参与手机号预约，100%得公测礼包</p>
      
      <a href="//sds.uu.cc/activity/sds_test/?from=groupmessage&isappinstalled=0" class="go"></a>
      -->
      <!--
      <a href="javascript:alert('敬请期待！')" class="go"></a>
      -->
      <p class="message">
         Copyright©2004-2013 Freejoy Technology Co. Ltd.<br />
         All rights reserved. 乐逍遥 版权所有<br />
         ©Masami Kurumada/SHUEISHA<br />
         ©SEGA
      </p>
    
  </section>
  
  <footer class="footer" >
      <p class="qq">
         <strong>官方QQ交流群</strong>
         <a><span class="left">官方1群：<em><?php BLOCK('qq_group1') ?></em></span><span class="right">官方2群：<em><?php BLOCK('qq_group2') ?></em></span></a>
      </p>
      
      <ul>
         <li>
            <a href="<?php BLOCK('weibo_url') ?>" target="_blank"><span>官方微博</span></a>
         </li>
         <li>
            <a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"><span>百度贴吧</span></a>
         </li>
         <li>
            <a href="<?php BLOCK('forum_url') ?>" target="_blank"><span>官方论坛</span></a>
         </li>
         <li> 
            <a href="<?php BLOCK('jiuyou_url') ?>" target="_blank"><span>九游论坛</span></a>
         </li>
      </ul>
      

      <div class="weixin" >
         <p class="left" ><img src="<?php BASE_URL() ?>images/ewm.png" width="154" height="400" /></p>
         <div class="wx_n right">
            <p>关注官方微信<br />请搜索公众号</p>
            <p><?php BLOCK('weixin_account') ?></p>
            <p>在微信中<br />长按左侧二维码可识别公众号</p>
         </div>
      </div>
      
      <p class="bq">
         Copyright©2009-2016  深圳市创梦天地科技有限公司  版权所有<br />
         粤ICP备11018438号<br />
         <img src="<?php BASE_URL() ?>images/dzbq.png" width="30px" />
      </p>
      
  </footer>

</div>

<div class="tel_pop">
    <h3>领取礼包</h3>
	<a class="close" href="javascript:;">关闭</a>
    <input class="yuyue_ipt" type="tel" value="请输入手机号" />
    <a class="yuyue_btn2" href="javascript:;">确认领取</a>
</div>
<div class="mask"></div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
	
	$(".yuyue").click(function(){
		$(".tel_pop,.mask").show();
	});
	$(".mask,.close").click(function(){
		$(".tel_pop,.mask").hide();
	});
	
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
	$('.yuyue_ipt').click(function(){
		$(this).attr('value','');
	})
	
    $('.yuyue_btn2').click(function(){
		phone = $('.yuyue_ipt').val();
		
		if(phone == '输入手机号码' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				 var type = $('.yuyue').attr('data-type');
				 if(type == 1){
					 code_id = 89;
				 }else{
					 code_id = 88;
				 }
				 $.ajax({
					type:"POST",
					url:"/send_phone_code",
					data:{phone:phone,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 8){
							alert("您已经领取过礼包，去游戏里兑换吧！");
						}else if(res.ret == 0){
							 alert("礼包兑换码已经通过手机短信下发给您，请注意查收，祝您游戏愉快~");
						}else{
						   alert("礼包领取失败！");
						}
						$('.gift_pop').hide();
						$('.zhezao').hide();
					}
				});

			}	
		}
		
		
		/*
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,collect_name:95},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
							$(".tel_pop,.mask").hide();
							$(".fenx").show();
						}else if(res.ret == 0){
							alert("您已预约成功！");
							$(".tel_pop,.mask").hide();
							$(".fenx").show();
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
		*/
	})
	
})

</script>
</body>