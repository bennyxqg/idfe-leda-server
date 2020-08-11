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
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css?v=08021" />
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/jquery.fullpage.min.css" />
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/swiper.min.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
<style>
.gamesNav_box{transition: all 0.5s;}
.fp-viewing-secondPage .gamesNav_box,.fp-viewing-3rdPage .gamesNav_box,.fp-viewing-4thpage .gamesNav_box,.fp-viewing-5thpage .gamesNav_box{ top:-55px!important;}
.nb-video { position:absolute; z-index:0; left:50%; top: 0; width:1920px; margin-left:-960px; }
</style>

</head>

<body style="padding-top:0;">

<div id="fullpage">
	<div class="section " id="section0">
    	<video class="nb-video" id="nb-video" autoplay loop>
            <source src="<?php BASE_URL() ?>images/bg.webm" type="video/webm">
            <source src="<?php BASE_URL() ?>images/bg.mp4" type="video/mp4">
        </video>
    
    	<!--<div class="flash" id="flash">
            <object data="<?php BASE_URL() ?>images/1111.swf" type="application/x-shockwave-flash" id="flash_998722596" width="100%" height="100%">
                <param name="allowScriptAccess" value="always">
                <param name="wmode" value="transparent">
                <param name="bgcolor" value="transparent">
                <param name="movie" value="<?php BASE_URL() ?>images/1111.swf">
            </object>
           
        </div>-->

        <a class="date-btn" href="javascript:;"></a>
		<div class="down-arrow"></div>
    </div>
	<div class="section" id="section1">
    	<h2 class="mtit tit-news">83602</h2>
        <div class="tit-about"></div>
        <div class="act-item item1"></div>
        <div class="act-item item2"></div>
        <div class="act-item item3"></div>
        <div class="act-item item4"></div>
    </div>
	<div class="section" id="section2">
    	<h2 class="mtit tit-features"></h2>
        <div class="swiper-tese">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_img1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_img2.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_img3.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_img4.png)"></div>
                    <div class="swiper-slide" style="background-image:url(<?php BASE_URL() ?>images/slider_img5.png)"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-tese"></div>
                
            </div>
            <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>
        <div class="footer_bottom">
            <div class="footer">
                <span class="logo"><img src="<?php BASE_URL() ?>images/logo_ledou.png"><img src="<?php BASE_URL() ?>images/logo_skyfun.png" style="margin-left:20px;"></span>
                <div class="cr">
                    <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                    <p> <span>Copyright©2009-2016  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号 <br>  粤网文〔2016〕6871-1632号  &nbsp;&nbsp;&nbsp;   批准文号：文网游备字〔2017〕Ｍ-RPG 0799 号  新广出审[2017]5027号 <br> 出版号：ISBN  978-7-7979-8336-5</span> 
					<a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php BASE_URL() ?>images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
					<a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php BASE_URL() ?>images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
					<a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php BASE_URL() ?>images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
					<a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php BASE_URL() ?>images/beian.jpg" alt="不良信息举报中心" width="16"> </a>
					<a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08b5cf2c594015cf313e68005a5"> <img src="<?php BASE_URL() ?>images/w_foot2_icon2.png" alt="电子标签" width="16"> </a></p>
                </div>
                <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
            </div>
        </div>

	</div>

</div>

<div class="right-pop">
	<img src="<?php BASE_URL() ?>images/weixin_code.jpg" />	
    <a style="position:absolute;top:280px;display:block;width:100px;height:50px;left:18px;" href="<?php BLOCK('forum_url') ?>" target="_blank"></a>
    <span class="txt3"><?php BLOCK('qq_group') ?></span>
    <a id="toTop" class="go-top" href="#firstPage"></a>
</div>



<!--预约弹窗-->
<div class="mask"></div>
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">

    	<a class="ios-choose on" href="javascript:;"><span></span>苹果iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓Android</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
    <p>礼包将在游戏公测时通过短信形式发送至您的手机</p>
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<div class="pop-yuyue2">
	<a class="close" href="javascript:;"></a>
    <em id="yqCode"></em>
    <a class="close close2" href="javascript:;"></a>
</div>

<div class="pop-yuyue3">
	<a class="close" href="javascript:;"></a>
    <a class="close close2" href="javascript:;"></a>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.fullpage.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	$.ajax({
		type:"POST",
		url:"http://nszl.uu.cc/collect_phone_num?code_id=101,102",
		dataType:"json",
		success:function(res){
			if(res.ret == 0){
				$('.tit-news').text(res.total)
				if(res.total > 500000){
					$('.item1').append('<span class="done-icon"></span>');
					$('.item2').append('<span class="done-icon"></span>');
					$('.item3').append('<span class="done-icon"></span>');
					$('.item4').append('<span class="done-icon"></span>');
				}else if(res.total > 250000){
					$('.item1').append('<span class="done-icon"></span>>');
					$('.item2').append('<span class="done-icon"></span>');
					$('.item3').append('<span class="done-icon"></span>');
				}else if(res.total > 100000){
					$('.item1').append('<span class="done-icon"></span>');
					$('.item2').append('<span class="done-icon"></span>');
				}else if(res.total > 50000){
					$('.item1').append('<span class="done-icon"></span>');
				}
			}

		}
	});
	
	
	$('#fullpage').fullpage({
		verticalCentered: false,
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		css3: false,
/*		afterLoad: function(anchorLink, index){
			if(index == 1){
				$('#nb-video2').trigger('play');
			}
		},
		onLeave: function(index, direction){
			if(index == '1'){
				$('#nb-video2').trigger('pause');
			}
		}*/
	});
	
	$(window).resize(function(){
        autoScrolling();
    });

    function autoScrolling(){
        var $ww = $(window).width();
        if($ww < 1920){
            $.fn.fullpage.setAutoScrolling(false);
        } else {
            $.fn.fullpage.setAutoScrolling(true);
        }
    }

	/*焦点图*/
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
		loop : true,
        coverflow: {
            rotate: 0,
            stretch:-110,
            depth: 280,
            modifier: 1,
            slideShadows : true
        }
    });

	//GOTOP
	$("#toTop").click(function() {
	   $("body,html").animate({scrollTop:0},800);
	});

	//预约
	$('.date-btn').click(function(){
		$('.mask,.pop-yuyue').show();
	})

	//预约事件
	$('.sys-choose a').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	

	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if($('.ios-choose').is('.on')){
			code_id = 102;
		}else{
			code_id = 101;
		}
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
							alert("该号码已成功参与预约，感谢您的支持！！");
						}else if(res.ret == 0){
							$('.pop-yuyue').hide();
							$('#yqCode').text(res.code)
							$('.pop-yuyue2').show();
						}else if(res.ret == 4 || res.ret == 7){
							$('.pop-yuyue').hide();
							$('.pop-yuyue3').show();
						}else{
							
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})

	
	$('.close').click(function(){
		$('.mask,.pop-yuyue,.pop-yuyue2,.pop-yuyue3').hide();
	})

})

	

</script>

</body>
</html>
