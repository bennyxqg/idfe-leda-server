<?php require_once '_head.ctp';?>
<div class="cdkey_bg">
    <div class="cdkey">
    	<div class="phone_box"><input type="text" name="code" placeholder="请输入验证码" /><img style="vertical-align:middle; margin-left:40px;" src="" id="yz_img" width='99' height='50'/></div>
        <div class="verify_code_box"><input type="tel" name="phone" placeholder="请输入11位手机号" /><a class="btn" id="code2">提交</a></div>
        <div class="txt">兑换码会通过短信形式发送到您的手机<br />复制后进入游戏激活使用</div>
    </div>
    <!--<div class="goIndex">
        <a class="go_home" href="/">进入官网</a>
    </div>-->
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/cookie.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/jbase64.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	
    $(".cdkey_bg").height($(window).height());

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

	//刷新验证码
	$('#yz_img').click(function(){
		$.ajax({
			type:"POST",
			url:"/get_verify_code",
			data:{charnum:4,mode:'img',width:99,height:50},
			dataType:"json",
			success:function(res){
				if(res.ret == 0){
					var imgUrl = BASE64.decoder(res.url);
					$("#yz_img").attr('src',imgUrl);
				}else {
					alert("验证码获取失败，请刷新页面重试。");
				}
			}
		});
	})

//	$("#code1").click(function(){
//		var myreg =  /^0?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
//        var phone = $("input[name=phone]").val();
//        if(!phone.match(myreg)){
//			alert('请输入正确的手机号！');
//			return false;
//		}else{
//            $.ajax({
//                type:"POST",
//                url:"/get_verify_code",
//                data:{phone:phone,mode:'sm'},
//                dataType:"json",
//                success:function(res){
//                    //开始发送短信
//                    var t = 59;
//                    var ele = $("#code1");
//                    ele.attr("disabled","disabled");
//                    ele.html("60");
//                    tid = setInterval(function(){
//                        if(t == 0){
//                            clearInterval(tid);
//                            ele.removeAttr("disabled");
//                            ele.html("重新获取");
//                        }else{
//                            ele.html(t);
//                            t--;
//                        }
//                    },1000);
//                }
//            });
//        }
//    })
    /*发送短信*/
    $("#code2").click(function(){
		var myreg =  /^0?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
        var phone = $("input[name=phone]").val();
        var verify =  $("input[name=code]").val();
        if(!verify){
             alert("请输入验证码！");
            return false;
        }else if(!phone.match(myreg)){
            alert("请输入正确的手机号！");
            return false;
        }else{
			$.ajax({
                type:"POST",
                url:"/send_code_by_sm",
                data:{phone:phone,code_id:69,verify:verify,type:1,mode:'img'},
                dataType:"json",
                success:function(res){
                    if(res.ret == 0){
						alert("兑换码发送成功！");
					}else if(res.ret == 8){
						alert("一个手机号只能领取一次！");
					}else if(res.ret == 5){
						alert("发送短信失败！");
					}else if(res.ret == 4){
						alert("兑换码已领完，正在补码中…");
					}else if(res.ret == 10){
						alert("验证码错误！");
					}else {
						alert("兑换码发送失败！");
					}
                }
            });	
		}
    })
});
</script>
