<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta content="" name="keywords">
<meta content="" name="description">
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
   <h1><img src="<?php BLOCK('game_icon') ?>" width="220" height="50" /></h1>
   <div class="w_main">
      <a href="#" class="libao"><img src="<?php BASE_URL() ?>images/yuyue.png" width="282" height="243" /></a>
      <span>关注公众号 享专属福利</br>hollow point</span>
      <p>
          <a href="<?php BLOCK('wap_qq_agent_url') ?>"><img src="<?php BASE_URL() ?>images/qq.jpg" width="329" height="68" /></a>
          <a href="<?php CATEGORY_URL('新闻') ?>"><img src="<?php BASE_URL() ?>images/xw.jpg" width="329" height="68" /></a>
          <a href="<?php BLOCK('forum_url') ?>"><img src="<?php BASE_URL() ?>images/luntan.jpg" width="329" height="68" /></a>
      </p>
   </div>
</div>

<div class="zhezao"></div>
<div class="biaodan">
    <span class="cha"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/cha.png" /></span>
    <input type="text" id="shuru" value="输入手机号预约礼包" />
    <!--
    <input type="text" id="yz_m" /><img src="" id="yz_img" width='99' height='50'/>
    -->
    <a class="yuyue" href="#"></a> 
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jbase64.js"></script>
<script type="text/javascript">
$(function(){
	$('.libao').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
		/*
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
		*/
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
				//alert('aa');
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
    $('.zhezao').click(function(){
		$('.zhezao').hide();
		$('.video_').empty().hide();
		$('.biaodan').hide();
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
				var type = $('.xiaz').attr('data-type');
				//alert(type);
				var code_id;
				if(type == 1){
					    code_id = 77;
					}else{
						code_id = 78;
				    }
				//var verify = $('#yz_m').val();
				//alert(type + "---" + code_id+"----"+phone+"---"+verify);
				$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:91},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("您已预约成功，我们会在首测前1天以短信形式向您发送预约礼包");
						}else{
							alert("预约失败！");
						}
				  }
		    	});
				
				/*
				 $.ajax({
						type:"POST",
						url:"/send_code_by_sm",
						data:{phone:phone,code_id:code_id,verify:verify,type:type,mode:'img'},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("亲爱的英雄，您的手机号已提交，请查看短信");
							}else if(res.ret == 8){
								alert("亲爱的英雄，您的手机已登记，请勿重复领取");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else if(res.ret == 4){
								alert("亲爱的英雄，目前兑换码存量不足，请联系官方人员进行领取");
							}else{
								alert("领取失败，请稍后再试");
							}
					  }
				});
				*/

			}	
		}
	    })
	
})
</script>
</body>