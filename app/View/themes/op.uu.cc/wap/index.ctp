<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">

<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link href="<?php BASE_URL() ?>css/index.css?v=160906" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
</head>
<body>
<div class="container">
    <div class="content">
       
       <!--<p class="canyu">
         <a href="javascript:;" class="yy_an"></a>
       </p>-->
       
       <a href="/home" id="enter"><img src="<?php BASE_URL() ?>images/enter.png" width="270" height="83" /></a>
       <a href="//op.uu.cc/download" id="download"><img src="<?php BASE_URL() ?>images/az.png" width="270" height="83" /></a>
       <span class="bq">
         ©EIICHIRO ODA/SHUEISHA, TOEI ANIMATION </br>
         Game©BANDAI NAMCO Entertainment Inc.
       </span>
    </div>
</div>
<div class="mask"></div>
<div class="yy_tk">
<p><input type="text" id="shuru2" value="输入手机号" /><a href="javascript:;" data-type="" class="submit"></a></p>
</div>
<div class="yy_sucess">
  <a href="javascript" class="close"></a>
  <p class="dhm"></p>
</div>
<script type="text/javascript">
$(function(){
	if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)){
		  $('.submit').attr('data-type','1');
		}		
	else if (/(Android)/i.test(navigator.userAgent)){
		  $('.submit').attr('data-type','2');
		}
   
   $('.yy_an').on('touchstart',function(){
	   $('.mask').show();
	   $('.yy_tk').show();
   })
   
   $('.mask, .close').on('touchstart',function(){
	   $('.yy_tk').hide();  
	   $('.mask').hide();
	   $('.yy_sucess').hide(); 
   })	
   
   	
   var myreg = /^1[34578]\d{9}$/;
	$('#shuru2').click(function(){
		$(this).attr('value','');
		})

    $('.submit').click(function(){
		var phone = $('#shuru2').val();	
		if(phone == '输入手机号码' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				var type = $('.yuyue').attr('data-type');
				if(type==1){
					code_id = 92;
				}else{
					code_id = 92;
				}
				 $.ajax({
					type:"POST",
					url:"/send_phone_code",
					data:{phone:phone,site_id:92,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert(res.msg);
						}else if(res.ret == 0){
							 //alert("成功领取");
							 $('.mask').show();
							 $('.yy_tk').hide();
							 $('.yy_sucess').show();
							 //alert(res.code);
							 $('.dhm').text(res.code);
						}else if(res.ret == 8){
							 alert('您已经领取过了');
						}else{
						   alert("领取失败！");
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