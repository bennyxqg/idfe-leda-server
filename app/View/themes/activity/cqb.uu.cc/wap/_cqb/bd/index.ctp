<?php require_once('../View/themes/activity/cqb.uu.cc/wap/_cqb/bd/_prepare.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>a《苍穹变》手游官网-第一人气小说PK手游</title>
<meta content="苍穹变手游 苍穹变 斗破苍穹 苍穹 苍穹变官网 苍穹变官方下载 苍穹变下载 苍穹变礼包 苍穹变安卓版 苍穹变ios版 苍穹变ios越狱" name="keywords">
<meta content="第一人气小说PK手游《苍穹变》。基于斗气世界的游戏舞台，玩家将在游戏中体验到斗气进阶、斗气化翼、炼药成丹、天地异火、宗派纷争等精彩内容，为众人展现一个真正完整的玄幻世界。" name="description">
<link rel="stylesheet" href="<?php GET_BASE_URL() ?>css/swiper.min.css">
<style>
*{margin:0;padding:0;}
#container{width:640px;height:auto;overflow:hidden;margin:0 auto;position:relative;}
.top{background:url(<?php GET_BASE_URL() ?>images/bander.jpg) no-repeat center top;height:826px;}
.enter{float:right;margin-top:30px;margin-right:20px;}
.down_load{background:url(<?php GET_BASE_URL() ?>images/down_load.jpg) no-repeat center top;padding:10px 25px 0;height:84px;}
.down_load a.xz_down{margin-right:15px;}
.down_load a{display:block;width:284px;height:73px;float:left;}
.yx_jt{height:auto;background:url(<?php GET_BASE_URL() ?>images/bj.jpg) repeat;overflow:hidden;height:679px;}
.yx_jt h1{background:url(<?php GET_BASE_URL() ?>images/yx_jt.jpg) no-repeat center top;height:102px;}
body {background: #eee;font-family: Helvetica Neue, Helvetica, Arial, sans-serif;font-size: 14px;color:#000;margin: 0;padding: 0;}
.swiper-container {width: 100%;height: 397px;margin-left: auto;margin-right: auto;}
.swiper-slide {text-align: center;font-size: 18px;display: -webkit-box;display: -ms-flexbox;display: -webkit-flex;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;-webkit-justify-content: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;-webkit-align-items: center;align-items: center;}
.logo{background:url(<?php GET_BASE_URL() ?>images/logo.png) no-repeat center top;position:absolute;bottom:10px;height:70px;width:640px;}

/*   预约样式   */
.zhezao{position:fixed;z-index:7;background:rgba(0,0,0,0.8);opacity:0.8;filter:alpha(opacity=80);top:0;left:0;right:0;bottom:0;display:none;}
.biaodan{width:591px;height:346px;position:fixed;left:50%;margin-left:-295px;top:50%;margin-top:-173px;background:url(<?php GET_BASE_URL() ?>images/yy_bj.png) no-repeat center top;z-index:9;padding-top:90px;display:none;}
.biaodan .cha{position:absolute;right:0px;top:0;;margin-top:-35px;cursor:pointer;}

label.radio img{
   width:60px;
}
input[type='radio'].radio1{left:170px;}
input[type='radio'].radio2{right:170px;top:90px;}
input[type='radio'].radio {opacity:0; display:inline-block; height:50px; position:absolute;z-index:8;width:100px;cursor:pointer;}
label.radio {background:url(<?php GET_BASE_URL() ?>images/radio_checked1.png); height:30px; padding-left:30px;display:block;background-size:18px;background-repeat:no-repeat;position:absolute;}
input[type='radio'].radio:checked + .radio {background:url(<?php GET_BASE_URL() ?>images/radio_checked.png);background-size:18px;background-repeat:no-repeat;}
.lab1{left:170px;top:90px;}
.lab2{right:170px;top:90px;}
#shuru{
	width:310px;
	height:50px;
	background:url(<?php GET_BASE_URL() ?>images/p4_3.png);
	background-size:100%;
	background-repeat:no-repeat;
	text-align:left;
	line-height:50px;
	left:50%;
	position:relative;
	margin-left:-155px;
	color:#ccc;
	border:none;
	font-size:18px;
	padding-left:10px;
	margin-top:45px;
}
.yuyue{
    display:block;
    width:240px;
	height:70px;
	background:url(<?php GET_BASE_URL() ?>images/p4_4.png);
	background-size:100%;
	background-repeat:no-repeat;
	margin:30px auto 0;
}
</style>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?145929d32596d329ee661e3c6663e368";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="<?php GET_BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.xz_down').attr('href','//cqb.uu.cc/activity/cqb/weixinbd.html');
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
					//document.write(document.referrer);
					var ref = document.referrer;
					//var refer = ref.substr(0,19);
					if(/\.baidu\.com/.test(ref)){
						$('.xz_down').attr('href','<?php GET_BLOCK('pz_bd_ios_download') ?>');	
						$(".enter").attr("href","//cqb.uu.cc?link=bd");
						}else{
							$('.xz_down').attr('href','<?php GET_BLOCK('ios_download_url') ?>');	
							}
					
					
					//$('.xz_down').attr('href','//lnk8.cn/UVZtso');				
					$('.xz_down').attr('data-type',1);
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					$('.xz_down').attr('data-type',2);
					$('.xz_down').click(function(){
						alert('安卓版本7月上线，VIP精英礼包预约中！');
						})
				}



return false; 
} 
} 
</script> 
</head>

<body>
<div id="container">
  <div class="top" id="top">
    <a href="//cqb.uu.cc/" class="enter"><img src="<?php GET_BASE_URL() ?>images/enter.jpg" width="185" height="54"></a>
  </div>
  <div class="down_load">
    <a href="javascript:;" class="xz_down" ><img src="<?php GET_BASE_URL() ?>images/dn_load.jpg" width="284" height="73"></a>
    <a href="javascript:;" class="vip_yy" data-type=""><img src="<?php GET_BASE_URL() ?>images/dn_yy.jpg" width="284" height="73"></a>
  </div>
  <div class="yx_jt">
     <h1></h1>
     <div class="swiper-container">
        <div class="swiper-wrapper">
        	<?php
        	if($pzimagelistlen > 0)
        	{
        		for($i=0;$i<$pzimagelistlen;$i++)
						{
							echo <<<_HTMLSTR
							<div class="swiper-slide"><img src="{$pzimagelist[$i]['big_url']}" width="547" height="307" /></div>
_HTMLSTR;
						}
					}else{
					?>
        	
        	
            <div class="swiper-slide"><img src="<?php GET_BASE_URL() ?>images/list1.jpg" width="547" height="307" /></div>
            <div class="swiper-slide"><img src="<?php GET_BASE_URL() ?>images/list2.jpg" width="547" height="307" /></div>
            <div class="swiper-slide"><img src="<?php GET_BASE_URL() ?>images/list3.jpg" width="547" height="307" /></div>
            <div class="swiper-slide"><img src="<?php GET_BASE_URL() ?>images/list4.jpg" width="547" height="307" /></div>
            <div class="swiper-slide"><img src="<?php GET_BASE_URL() ?>images/list5.jpg" width="547" height="307" /></div>
          <?php } ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="<?php GET_BASE_URL() ?>js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    </script>
  </div>
  <div class="logo"></div>
</div>

<div class="zhezao"></div>
<div class="biaodan">
    <span class="cha"><img src="<?php GET_BASE_URL() ?>images/cha.jpg" /></span>
    <!--
    <input type="radio" name="banben"  value="1" class="radio radio1" checked="checked"><label for="a" class="radio lab1"><img src="<?php echo $full_base_url ?>/wap/images/p4_2.png" /></label><br>
    <input type="radio" name="banben"  value="2" class="radio radio2"><label for="b" class="radio lab2" ><img src="<?php echo $full_base_url ?>/wap/images/p4_1.png" /></label>
    -->
    <input type="text" id="shuru" value="输入手机号预约礼包" />
    <a class="yuyue" href="#"></a> 
</div>
<script type="text/javascript">

$(function(){
	 /*
  $('.down_load > a').each(function(){
	  $(this).bind('touchstart',function(event){
		  alert('敬请期待！');
		 
		  var name = $(this).attr('id');
		  $.ajax({
				type:"POST",
				url:"/click_like",
				data:{label:name,opt:1},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						alert('yes');
					}else {
						alert("下载失败，请重新尝试！");
					}
			  }
		});
		

	  })
	  
  })
  */
})
</script>
<script type="text/javascript">
$('.vip_yy').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
		})
	$('.cha, .zhezao').click(function(){
		$('.biaodan').hide();
		$('.zhezao').hide();
		$('#shuru').attr('value','输入手机号预约礼包');
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
				var type = $('.xz_down').attr('data-type');
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:1,collect_name:70},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 alert("您已预约成功,上线当天我们将会通过短信发放礼包!");
						}else{
						   alert("预约失败！");
						}
					}
				});

			}	
		}
	    })
</script>
</body>