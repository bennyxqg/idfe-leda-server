<?php require_once '_include.ctp';?>
<script src="<?php echo $full_base_url ?>/mobile/js/jquery-1.8.0.min.js"></script>
<link rel="stylesheet" href="<?php echo $full_base_url ?>/mobile/css/bulid.css" />  
</head>
<body>
<img src="<?php echo $_hmtPixel; ?>" width="0" height="0" />
<p style="display:none"><img src="//act.uu.cc/subwayData/images/icon2.jpg" alt="乱斗之王"></p>
	<div class="loading_bg" id="loading">
    	<div class="loading_wrp">
            <div class="loading">
                <div class="loading_bar"></div>
            </div>
            <b id="loading_text">0%</b>
        </div>
    </div>
<section id="main" role="main" style="display:none;">
        <section class="scene one active">
          <span class="logo1"></span>
          <span class="slogn1"></span>
          <span class="wz1"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
    	<section class="scene two">
          <span class="logo"></span>
          <span class="slogn"></span>
          <a href="#" class="video_y" style="width:100px;height:100px;"></a>
          <span class="wz2"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
        <section class="scene three ">
          <span class="let_y"></span>
          <span class="ret_y"></span>
          <span class="wz3"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
        <section class="scene four">
          <span class="wz4"></span>
          <span class="da_pao"></span>
          <span class="mao"></span>
          <span class="qw"></span>
          <div class="ico_arrow"><a></a></div>
        </section>
        <section class="scene five">
          <span class="one_w"></span>
          <span class="two_w"></span>
          <span class="three_w"></span>
          <span class="wz5"></span>
        </section>
     <div class="fd_c"><a href="#" class="yy"></a><a href="#" class="enter_gw"></a></div>   
</section>



<section id="container" style="display:none;">
  <span class="logo"></span>
  <p class="slogan"></p>
  <a href="#" class="download"></a>
  <a href="#" class="video_sp"></a>
  <nav id="nav">
     <?php require_once '_dh.ctp';?>
  </nav>
</section>

<div class="zhezao"><a href="#"></a></div>
<div class="yu_yue">
  <a class="close" href="#" ></a>
  <p class="choice"><span class="ios on" data-type="1"><a href="#"></a></span><span class="az" data-type="2"><a href="#"></a></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>
<div class="ship" id="ship1">
    <video id="video" src="//dl.ldzw.gxpan.cn/site/video/world.mp4" controls width="600" height="400"></video>
</div>

<div class="ship" id="ship2">
    <video id="video" src="//dl.ldzw.gxpan.cn/site/video/lzzs.mp4" controls width="600" height="400"></video>
</div>
<script type="text/javascript">
 $(function(){
	 $('.video_y').click(function(){
		 $('.zhezao').show();
		 $('#ship2').show();
		 })
	 $('.zhezao').click(function(){
		 $('#ship2').hide();
		 $('.zhezao').hide();
		 })
	 })
</script>
<script type="text/javascript">
$(function(){
	$('.enter_gw').click(function(){
		$('#main').fadeOut();
		$('#container').fadeIn();
		
	})
	
	
	$('.video_sp').click(function(){
		//alert('aa');
		$('.zhezao').show();
		$('#ship1').show();
	})
	$('.zhezao').click(function(){
		$('#ship1').hide();
		$('.zhezao').hide();
		$('.yu_yue').hide();
	})
	
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	
	$('.yy').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.download').click(function(){
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
<script src="<?php echo $full_base_url ?>/mobile/js/touchswipe.js"></script>
<script src="<?php echo $full_base_url ?>/mobile/js/main2.js"></script>
</body>
</html>
  