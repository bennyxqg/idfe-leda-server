<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>快乐点点消</title>
<style>
*{margin:0;padding:0;}
img{border:none;}
#container{width:640px;height:auto;overflow:hidden;margin:0 auto;position:relative;}
.part2{position:relative;}
.part2 a{position:absolute;background:url(<?php BASE_URL() ?>images/bdpz/down.jpg) no-repeat center top;width:253px;height:56px;top:20px;left:50%;margin-left:-126px;}
footer{position:fixed;bottom:0;width:100%;background:rgba(255,255,255,0.8);padding:10px 0 20px;text-align:center;}
.swiper-container{position:absolute;bottom:30px;left:10px;width:615px;overflow-x:scroll;}
.swiper-container .swiper-slide{float:left;margin:0 7px;width:183px;height:323px;}
.swiper-container .swiper-wrapper{width:800px;}
#ts{width:100%;}
</style>
<script type="text/javascript" src="//ld.uu.cc/ld.uu.cc/v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
  $('#ts').show();
  $('#container').hide();
  return true; 
}else{ 
  $('#ts').hide();
  $('#container').show();
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

           //console.log(browser);
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					//$('.down_load').attr('href','//v1.53.vc/zI9Pb1g');
                    window.location.href="//ddx.uu.cc/bdpzdownload?platform=ios";
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					window.location.href="//ddx.uu.cc/bdpzdownload?platform=android";
					
					//$('.down_load').attr('href','//dl.uu.cc/idreamsky/ToyBlast-20_v1.3.0.0_s2.4.9.8_p3.2.2.12_AllPay_360sec_LD0S0N50005.apk');
				}

return false; 
} 
} 
</script> 
</head>
<body>
<h1 id="ts" style="display:none;"><img src="//ld.uu.cc/ld.uu.cc/v2/images/tip.png" width="100%" /></h1> 
<div id="container" style="display:none;">
    <section class="part1"><img src="<?php BASE_URL() ?>images/bdpz/p1.jpg" width="640" height="790" /></section> 
    <section class="part2"><img src="<?php BASE_URL() ?>images/bdpz/p2.jpg" width="640" height="678" /><a href="https://appsto.re/cn/s49a9.i" class="down down_load"></a>
      <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/bdpz/list1.jpg"  width="183" height="323" /></div>
            <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/bdpz/list2.jpg"  width="183" height="323" /></div>
            <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/bdpz/list3.jpg"  width="183" height="323" /></div>
            <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/bdpz/list4.jpg"  width="183" height="323" /></div>
        </div>

     </div>
    </section> 
    <section class="part3"><img src="<?php BASE_URL() ?>images/bdpz/p3.jpg" width="640" height="629" /></section> 
    <footer>
       <img src="<?php BASE_URL() ?>images/bdpz/logo.png" width="287" height="59" /><br /><br />
       <a class="down_load" style="border:solid 1px red;display:block;" href="https://appsto.re/cn/s49a9.i"><img src="<?php BASE_URL() ?>images/bdpz/down_load.png" width="307" height="53" /></a>
    </footer>
</div>
</body>

</html>