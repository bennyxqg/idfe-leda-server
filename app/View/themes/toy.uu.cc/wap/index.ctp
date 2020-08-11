<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
/*BLOCK*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//ddx.uu.cc/toy.uu.cc/wap/css/index.css" rel="stylesheet">
<link href="//ddx.uu.cc/toy.uu.cc/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>


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

				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {			
					$('.yuyue').attr('data-type',1);
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					$('.yuyue').attr('data-type',2);

				}



return false; 
} 
} 
</script> 
<div class="container">
    <div class="inner bander">
       <header id="header">
         <span class="logo"></span>
       </header>
       <?php /*BLOCK*/
       echo '<a href="'.GET_BLOCK('wap_this_week_topic').'" class="canyu">';
       /*BLOCK*/ ?>
       <img src="//ddx.uu.cc/toy.uu.cc/wap/images/link.png" width="404" height="124" /></a>
    </div>
    <div class="pr lb_gz">
       <a href="javascript:;" class="lb"><img src="//ddx.uu.cc/toy.uu.cc/wap/images/yuyue.png" width="280" height="80" /></a>
       <a href="javascript:;" class="gz"><img src="//ddx.uu.cc/toy.uu.cc/wap/images/guanzhu.png" width="280" height="80" /></a>
       <?php /*BLOCK*/
       echo '<div class="pa wxin_pop"><span>微信号：'.GET_BLOCK('weixin_account').'</span><img src="'.GET_BLOCK('weixin_qrcode').'"></div>';
       /*BLOCK*/ ?>
    </div>
    <div class="inner list1">
       <div class="swiper-container swiper1">
        <div id="loop_img_edit" class="swiper-wrapper CUSTOM_EDIT LIST_DIV_A_IMG_EDIT" >
        	<div class="swiper-slide"><a href="#"><img src="//ddx.uu.cc/uploads/game/20150828104130_5b82e.png" width="640" height="377" /></a></div>
        	<div class="swiper-slide"><a href="#"><img src="//ddx.uu.cc/uploads/game/20150828104130_5b82e.png" width="640" height="377" /></a></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
       </div>
    </div>
    <div class="wx_gg">
       <h2><img src="//ddx.uu.cc/toy.uu.cc/wap/images/xinwen.png" width="203" height="48" /></h2>
       <ul>
       <?php /*BLOCK*/
       	SHOW_NEWS('<li><strong>[新闻]</strong><a href="//ddx.uu.cc/show/2306.html">资讯6</a><span class="date">08/28</span></li>','m/d','资讯',5,$page,0,array());
       /*BLOCK*/ ?>
       </ul>
       <p>
       <?php /*BLOCK*/
       echo '<a href="'.GET_CATEGORY_URL('资讯').'" class="more">';
       /*BLOCK*/ ?>
       <img src="//ddx.uu.cc/toy.uu.cc/wap/images/more.png" width="186" height="48" /></a></p>
    </div>
    <div class="yx_gl">
       <h2><img src="//ddx.uu.cc/toy.uu.cc/wap/images/gonglue.png" width="203" height="48" /></h2>
       <ul>
       <?php /*BLOCK*/
       SHOW_NEWS('<li><strong><img src="@@SMALL_IMAGE@@" width="69" height="67" /></strong><a href="@@TITLE@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d','攻略',4,$page,array());
       echo '<p><a href="'.GET_CATEGORY_URL('攻略').'" class="more"><img src="//ddx.uu.cc/toy.uu.cc/wap/images/more.png" width="186" height="48" /></a></p>';
	   /*BLOCK*/ ?>
       </ul>
    </div>
    <div class="sp_zq">
      <h2><img src="//ddx.uu.cc/toy.uu.cc/wap/images/ship.png" width="204" height="58" /></h2>
      <a href="#"><img src="//ddx.uu.cc/toy.uu.cc/wap/images/poster.jpg" width="640" height="400" /></a>
    </div>
    <div class="link_wb">
    <?php /*BLOCK*/
      echo '<a href="'.GET_BLOCK('baidu_tieba_url').'"></a>';
    /*BLOCK*/ ?>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    </div>
    <p class="logo_2">
      <img src="//ddx.uu.cc/toy.uu.cc/wap/images/ledou.png" width="164" height="66" /><img src="//ddx.uu.cc/toy.uu.cc/wap/images/peak.png" width="131" height="69" />
    </p>
    <footer id="footer">
       <ul>
          <li><a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
          <li>Copyright©2009-2014 &nbsp;&nbsp;深圳市创梦天地科技有限公司 版权所有</li>
          <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
          <li>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
       </ul>
    </footer>
    <div class="zhezao"></div>   
    <div class="tk">
       <input type="text" id="shuru" value="输入手机号码" />
       <a href="#" class="yuyue" data-type=""></a>
    </div>
    <div class="tk2">
      <img src="//ddx.uu.cc/toy.uu.cc/wap/images/lb_tk.png" width="423" height="510" />
    </div>
</div>
<script type="text/javascript">
$(function(){
    $('.lb').click(function(){
		$('.zhezao').show();
		$('.tk').show();
		})
	$('.zhezao').click(function(){
		$('.tk').hide();
		$('.tk2').hide();
		$('.zhezao').hide();
		$('#shuru').attr('value','输入手机号码');
		})

	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').click(function(){
		$(this).attr('value','');
		})

    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		
		if(phone == '输入手机号码' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				var type = $('.yuyue').attr('data-type');
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:79},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 //alert("您已预约成功,上线当天我们将会通过短信发放礼包!");
							 $('.tk2').show();
						}else{
						   alert("预约失败！");
						}
					}
				});

			}	
		}
	})
	
	//微信
	var dl = $(".gz");
	var pd = $(".wxin_pop");
	dl.click(function() {
		if(pd.hasClass("wxin_pop_show")){
			pd.removeClass("wxin_pop_show");
		}else{
			pd.addClass("wxin_pop_show");
		}
	});
})
</script>
<script type="text/javascript" src="//ddx.uu.cc/toy.uu.cc/wap/js/swiper.min.js"></script>
<script>
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper3 = new Swiper('.swiper3', {
        pagination: '.swiper-pagination3',
       // paginationClickable: true,
         paginationClickable: '.swiper-pagination3',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
</script>
</body>
</html>