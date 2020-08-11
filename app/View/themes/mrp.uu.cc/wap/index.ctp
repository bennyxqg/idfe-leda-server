<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('title_chn').'</title>';
echo '<meta content="'.GET_BLOCK('keywords_chn').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('description_chn').'" name="description">';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<style>
*{margin:0;padding:0;}
#container{width:640px;height:auto;overflow:hidden;margin:0 auto;position:relative;}
.down_load{background:url(<?php BASE_URL() ?>images/bj01.jpg) no-repeat center top;height:695px;position:relative;}
.down_load a.ios,.down_load a.az{position:absolute;right:70px;}
.down_load a.ios{top:250px;}
.down_load a.az{top:330px;}
.link{position:absolute;width:300px;height:40px;bottom:0;right:30px;}
.link a{float:left;width:98px;height:40px;}

.wz{background:url(<?php BASE_URL() ?>images/bander1.jpg) no-repeat center top;height:494px;}
.yx_jt{padding:6px;border-left:solid 1px #ccc;border-right:solid 1px #ccc;}
.ewm{background:url(<?php BASE_URL() ?>images/ew1.jpg) no-repeat center top;height:465px;position:relative;}
.ewm img{position:absolute;width:100%;top:50px;left:60px;}

.footer{background:url(<?php BASE_URL() ?>images/foot1.jpg) no-repeat center top;height:221px;}
.weixin_tip{ display:none; position:fixed; width:100%; height:100%; top:0; left:0; background:url(<?php BASE_URL() ?>images/weixin_tip.png) rgba(0,0,0,0.4) top center no-repeat; background-size:90% auto; z-index:9999;}
</style>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9ab4fffd95004e06f24a7a94d1a48c4c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>

<body>
<div id="container">
  <div class="down_load">
    <a href="javascript:;" class="ios" ><img src="<?php BASE_URL() ?>images/w_ios.png" width="220" height="70"></a>
    <a href="<?php BLOCK('android_download_url_chn') ?>" class="az" data-type=""><img src="<?php BASE_URL() ?>images/w_az.png" width="220" height="70"></a>
    <div class="link">
      <a href="//mrp.uu.cc/?lan=en"></a><a href="//mrp.uu.cc/?lan=cht"></a><a href="//mrp.uu.cc/"></a>
    </div>
  </div>
  <div class="wz"></div>
  <div class="yx_jt"> 
     <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" width="628" height="345" /></div>','m-d',0,100,1,array('OrderBy'=>'`int1` asc'));
		?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    
    <!-- Swiper JS -->
    <script src="<?php BASE_URL() ?>js/swiper.min.js"></script>

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
  <div class="ewm"><img src="<?php BLOCK('weixin_qrcode') ?>" width='600' height='363' /></div>
  <div style="background:#e2d4ad;">
    <p style="max-width:1000px;margin:0 auto;text-align:center;line-height:32px;font-size:18px;padding: 0 10px;"
    >感谢您支持《南瓜先生大冒险》，自五月三十一日起《南瓜先生大冒险》将转由胖布丁运营。如您已拥有此版本《南瓜先生大冒险》仍可以继续游玩。建议尽快转至胖布丁账号下下载。</p> 
  </div>
  <div class="footer"></div>
</div>

<div class="weixin_tip"></div>
<script>
$(function(){	
	//微信下提示 浏览器打开，判断安卓 IOS
//	$(".az").click(function(){
//		is_weixn();
//	});
//	function is_weixn(){
//		var u = navigator.userAgent;
//		var ua = u.toLowerCase();
//		
//		if(ua.match(/MicroMessenger/i)=="micromessenger"){
//			$(".weixin_tip").show();
//			return false;
//		} else {
//			location.href="<?php BLOCK('android_download_url_chn') ?>";
//		}
//	}
	
	$(".ios").click(function(){
		is_weixn2();
	});
	function is_weixn2(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(ua.match(/MicroMessenger/i)=="micromessenger"){
			$(".weixin_tip").show();
			return false;
		} else {
			location.href="<?php BLOCK('ios_download_url_chn') ?>";
		}
	}
	$(".weixin_tip").click(function(){
		$(this).hide();
	});
});
</script>
</body>