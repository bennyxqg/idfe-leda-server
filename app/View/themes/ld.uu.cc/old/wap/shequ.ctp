<?php require_once '_include.ctp';?>
</head>

<body style="background:#e4e4e4;">
<section id="shequ">
  <div class="header"><a class="down_load" href="#"></a></div>
  <p class="w_t_l">
    <a href="//weibo.com/u/5547344215?topnav=1&wvr=6&topsug=1"><img src="<?php echo $full_base_url ?>/mobile/images/p3_3.jpg" width="185" height="184" /></a>
    <a href="//tieba.baidu.com/f?ie=utf-8&fr=bks0000&kw=乱斗之王"><img src="<?php echo $full_base_url ?>/mobile/images/p3_2.jpg" width="185" height="184" /></a>
    <a href="//ldzw.vxinyou.com/bbs/forum.php"><img src="<?php echo $full_base_url ?>/mobile/images/p3_4.jpg" width="185" height="184" /></a>
  </p>
  
  <p class="w_q">
    <img src="<?php echo $full_base_url ?>/mobile/images/p3_5.jpg" width="580" height="237" />
  </p>
  
  <p class="tb" style="position:absolute;top:700px;">
    <span><img src="<?php echo $full_base_url ?>/mobile/images/ld_logo.png" width="161" height="65" /><img src="<?php echo $full_base_url ?>/mobile/images/xy_logo.png" width="168" height="40" /></span>
    <!--<span>Copyright©2009-2015 IDREAMSKY . ALL RIGHTS RESERVED </span>
    <span>深圳市创梦天地科技有限公司 版权所有</span>
    -->
  </p>
  <nav id="nav" style="background:#000 url(<?php echo $full_base_url ?>/mobile/images/sq.png) no-repeat center center">
     <?php require_once '_dh.ctp';?>
  </nav>
</section>
<div class="zhezao"></div>
<div class="yu_yue">
  <a class="close" href="#" ></a>
  <p class="choice"><span class="ios on" data-type="1"></span><span class="az" data-type="2"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>

<script type="text/javascript" src="<?php echo $full_base_url ?>/mobile/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	$('.down_load').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
		
	})
	$('.close').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
	})
	
	
	var type;
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		$(this).attr('value','');
		$('#nav').css('position','ralative');
		})
	$('#shuru').blur(function(){
		$('#nav').css('position','fixed ');
		})
    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		if(phone == '请输入手机号' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				//var type = $('input:radio[name="banben"]:checked').val();
				if($('.az').is('.on')){
					type = 2;
					}else{
					type = 1;
				}
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:68},
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

			}	
		}
	    })
	
	
	
	
	
	
})
</script>
</body>
</html>
  