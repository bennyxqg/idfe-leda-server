<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?v=3"  />

</head>

<body>
<div id="content">
    <div class="top">
        <div class="logo">
            <img src="<?php BASE_URL() ?>images/game_logo.png" />
            <h2>女神之泪手游</h2>
            <p>MMORPG魔幻大作</p>
        </div>
        <a class="weixin" href="javascript:;"></a>
    </div>
    <div class="pr main1">
    	<div class="swiper-news-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="#link"><img src="<?php BASE_URL() ?>images/banner01.jpg" /></a></div>
                <div class="swiper-slide"><a href="#link"><img src="<?php BASE_URL() ?>images/banner02.jpg" /></a></div>

            </div>
            <div class="swiper-pagination swiper-pagination1"></div>
        </div>
    	<a class="date-btn" href="javascript:;"></a>
    </div>
    
    <div class="main2">
    	<div class="down-arrow"></div>
        <div class="date-num">83602</div>
    </div>
    
	<div class="main3">
    	
    </div>
    
    <div class="main4">
    	<div class="wrap">
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_01.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_02.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_03.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_04.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_05.png)"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-tese"></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
    	</div>
    </div>
   
</div>
<div class="footer">
	<img src="<?php BASE_URL() ?>images/footer.jpg" />
	<p>粤网文〔2016〕6871-1632号 <br>   批准文号：文网游备字〔2017〕Ｍ-RPG 0799 号  新广出审[2017]5027号 <br> 出版号：ISBN  978-7-7979-8336-5</p>
</div>

<div class="zhezao"></div>
<div class="pop-yuyue pop-box">
	<a class="close" href="javascript:;"></a>
    <div class="ipt-label">输入手机号：</div>
    <input class="yuyue_ipt" name="phone" type="tel" >
    <p class="yuyue-tips">礼包将在游戏公测时通过短信形式发送至您的手机</p>
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<div class="pop-succ pop-box">
	<a class="close" href="javascript:;"></a>
    <h2>预约成功！</h2>
    <div class="codeTips">您的测试福利码为：</div>
    <div id="yqCode"></div>
    <p class="succ-tips">可在删档测试期间兑换，预约人数达<br />成后还能领取公测回馈大礼</p>
    <div class="weixin"><img src="<?php BASE_URL() ?>images/weixin.jpg" /><p>关注游戏微信公众号<br>nszlsy<br>更多资讯福利等着您</p></div>

</div>


<div class="pop-weixin pop-box">
	<a class="close" href="javascript:;"></a>
    
    <img src="<?php BASE_URL() ?>images/weixin.jpg" />
    <p class="weixin-tips">长按二维码识别，获取预约好礼</p>
    <p class="weixin-info">关注游戏微信公众号：<?php BLOCK('weixin_account') ?></p>
	<p class="weixin-more">更多资讯福利等着您</p>
</div>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script>

$(document).ready(function(){
	
	$.ajax({
		type:"POST",
		url:"http://nszl.uu.cc/collect_phone_num?code_id=101,102",
		dataType:"json",
		success:function(res){
			if(res.ret == 0){
				$('.date-num').text(res.total)
				if(res.total > 500000){
					$('.main3').append('<span class="done done1"></span><span class="done done2"></span><span class="done done3"></span><span class="done done4"></span>');
				}else if(res.total > 250000){
					$('.main3').append('<span class="done done1"></span><span class="done done2"></span><span class="done done3"></span>');
				}else if(res.total > 100000){
					$('.main3').append('<span class="done done1"></span><span class="done done2"></span>');
				}else if(res.total > 50000){
					$('.main3').append('<span class="done done1"></span>');
				}
			}

		}
	});
	
	var swiper = new Swiper('.swiper-news-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
		effect: 'fade',
		autoplay: 2500,
		loop: true
    });
	
	//游戏特色
	var swiper = new Swiper('.swiper-tese', {
        pagination: '.swiper-pagination-tese',
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
		loop : true,
        coverflow: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows : true
        }
    });
	


	$(".close,.zhezao").on("click", function(e){
		$('.pop-box,.zhezao').hide();
		e.stopPropagation();
	});
	
	
	$('.weixin').click(function(){
		$('.zhezao,.pop-weixin').show();
	})
	

	//预约
	$('.date-btn').click(function(){
		$('.zhezao,.pop-yuyue').show();
	})
	
	var code_id,u = navigator.userAgent;
	if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
		code_id = 102;
	}else{
		code_id = 101;
	}
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone_return_code",
					data:{phone:phone,collect_name:116,code_id:code_id},
					dataType:"json",
					success:function(res){
						
						if(res.ret == 8){
							$('.pop-succ h2').text('您已参加过预约！')
							$('.pop-yuyue').hide();
							$('#yqCode').text(res.code);
							$('.pop-succ').show();
						}else if(res.ret == 0){
							$('.pop-yuyue').hide();
							$('.pop-succ h2').text('预约成功！')
							$('#yqCode').text(res.code);
							$('.pop-succ').show();
						}else if(res.ret == 4 || res.ret == 7){
							$('.pop-yuyue').hide();
							$('.pop-succ h2').text('预约成功！')
							$('#yqCode').text('Ios测试暂未开放');
							$('.pop-succ').show();
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
