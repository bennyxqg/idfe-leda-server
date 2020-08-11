<!doctype html>
<html>
<head>
<meta charset="utf-8">

<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>


<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css?v=201601211" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div class="index1">
	<div class="wrap">
    	<a class="home_link" href="//op.uu.cc/home" target="_blank" title="前往官网首页"></a>
        <div class="down_bj"><img src="<?php BASE_URL() ?>images/op_down.jpg" width="114">
           <a href="https://itunes.apple.com/cn/app/chong-ba-hang-hai-wang/id1144418586?mt=8" class="ios"></a>
           <a href="http://dl.uu.cc/idreamsky/OP_0907_IDS_05.apk" class="az"></a>
        </div>
    </div>
</div>
<div class="index2">
	<div class="wrap">
    </div>
</div>
<div class="index3">
	<div class="wrap">
<!--    	<div class="yuyue"></div>-->
    </div>
</div>

<?php require_once("_footer.ctp");?>

<div class="mask"></div>
<div id="yuyue-pop1" class="yuyue-pop">
	<a class="close" href="javascript:;"></a>
	<input class="yuyue_ipt" placeholder="请输入手机号" type="tel" /><a class="yuyue_btn" href="javascript:;"></a>
</div>

<div id="yuyue-pop2" class="yuyue-pop">
	<a class="close" href="javascript:;"></a>
	<div class="code-box"></div>
</div>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){ 

	$('.yuyue').click(function(){
		
		$('#yuyue-pop1,.mask').show();
	
	})

	$('.close').click(function(){
		
		$('.yuyue-pop,.mask').hide();
	
	})
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue_btn').click(function(){
		phone = $('.yuyue_ipt').val();
		
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/send_phone_code",
					data:{phone:phone,code_id:92,site_id:92},
					dataType:"json",
					success:function(res){
						if(res.ret == 8){
							alert("您已经领取过兑换码！");
						}else if(res.ret == 0){
							$('.code-box').html(res.code)
							$('#yuyue-pop1').hide();
							$('#yuyue-pop2').show();
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
