<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
</head>
<body>


<script type="text/javascript"> 
window.onload = function(){ 
/*
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.xz_down').attr('href','//cqb.uu.cc/activity/cqb/weixinbd.html');
return true; 
}else{ 
*/
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
/*} */
} 
</script> 
<div class="container">
    <div class="inner bander">
       <div class="bander2"><img src="<?php BASE_URL() ?>images/bander.jpg" width="100%"></div>
       <header id="header">
         <span class="logo"><img src="<?php BLOCK('game_icon') ?>" width="136" height="136" /></span>
         <span class="logo_wz"><img src="<?php BASE_URL() ?>images/logo_wz.png" width="221" height="62" /></span>
         <!--
         <a href="<?php BLOCK('android_download_url') ?>" href_ios="<?php BLOCK('ios_download_url') ?>" href_android="<?php BLOCK('android_download_url') ?>" class="download"><img src="<?php BASE_URL() ?>images/download.png" width="198" height="63" /></a>
         -->
         <a href="<?php BLOCK('download_url_index20161212') ?>" class="download"><img src="<?php BASE_URL() ?>images/download.png" width="198" height="63" /></a>
       </header>
       
       <p href="#" class="canyu">
          <input type="text" value="请输入手机号" id="shuru" />
          <a href="#" class="yuyue" data-type=""></a>
       </p>
       
       <div class="ewm">
     
          <span><img src="<?php BLOCK('weixin_qrcode') ?>" width="245" /></span>
          <!--
          <span><img src="<?php BLOCK('weixin_qrcode') ?>" width="245" /></span>
          -->
          <p><em>微信公众号</em>扫描二维码关注<br />kuaileddx</p>
       </div>
    </div>
    <div class="pr lb_gz">
       <a href="javascript:;" class="lb"><img src="<?php BASE_URL() ?>images/guanzhu.png" width="280" height="80" /></a>
       <a href="<?php BLOCK('forum_url') ?>" class="gz"><img src="<?php BASE_URL() ?>images/luntan.png" width="280" height="80" /></a>
       <!-- <div class="ewm">
               
               <span><img src="<?php BLOCK('weixin_qrcode') ?>" width="100%" /></span>
               
               <span><img src="<?php BASE_URL() ?>images/ewm.png" width="100%" /></span>
               <p><em>微信公众号</em>扫描二维码关注<br />kuaileddx</p>
        </div>
        -->
    </div>
    
    
    
    <div class="big_p">
      
      <div class="swiper-container swiper3" style="width:640px;">
        <div class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><a href="@@STR2@@"><img src="@@STR1@@" width="640" height="427" /></a></div>','m-d',3,100,0,array());
        ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination3"></div>
        </div> 
    </div>
    <div class="wx_gg">
       <h2><img src="<?php BASE_URL() ?>images/xinwen.png" width="203" height="48" /></h2>
       <ul>
       <?php
       	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',array('新闻','活动','攻略'),5,$page,array());
       ?>
       </ul>
       <p>
      <a href="<?php CATEGORY_URL('XXX') ?>" class="more">
       <img src="<?php BASE_URL() ?>images/more.png" width="186" height="48" /></a></p>
    </div>

    <div class="inner list1">
       <div class="swiper-container swiper1" style="height:437px;"> 
        <div class="swiper-wrapper" >
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><a href="@@STR2@@"><img src="@@STR1@@" width="640" height="377" /></a></div>','m-d',2,100,0,array());
        ?>
        </div>
        <div class="swiper-pagination swiper-pagination1"></div>
       </div>
    </div>
    
    <div class="sp_zq">
      <h2><img src="<?php BASE_URL() ?>images/ship.png" width="204" height="58" /></h2>
      <a href="#" class="sp"><img src="<?php BLOCK('index_video_img 20161212') ?>" width="640" height="400" /></a>
    </div>
    <div class="link_wb">
      
      <a href="<?php BLOCK('baidu_tieba_url') ?>"></a>
      
      <a href="javascript:;" class="qq"></a>
      <a href="<?php BLOCK('forum_url') ?>"></a>
      <span class="qq_"><strong>玩家QQ群</strong><em><?php BLOCK('custom_service_qq') ?></em></span>
    </div>
    <span class="ke_f">客服电话：<em><?php BLOCK('custom_service_phone') ?></em></span>
    <p class="logo_2">
      <img src="<?php BASE_URL() ?>images/ledou.png" width="164" height="66" /><img src="<?php BASE_URL() ?>images/peak.png" width="131" height="69" />
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
    <div class="video_"></div>
    
     
      
</div>
<script type="text/javascript">
$(function(){
	
	$('.lb').on('click',function(){
		$('.ewm').toggle();
	})
    
	$('.qq').on('touchstart',function(){
		$('.qq_').toggle();
	})
	

	$('.sp').on('click',function(){
		 $('.zhezao').show();
		 $('.video_').show().append('<video id="video" src="<?php BLOCK('index_video_url') ?>" controls="" width="600" height="400"></video>');
		 })
	
	$('.zhezao').on('click',function(){
		$('.video_').hide();
		$('.zhezao').hide();
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
				 if(type == 1){
					 code_id = 99;
				 }else{
					 code_id = 98;
				 }
				 $.ajax({
					type:"POST",
					url:"/send_phone_code",
					data:{phone:phone,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 8){
							alert("您已经领取过礼包，去游戏里兑换吧！");
						}else if(res.ret == 0){
							 alert("礼包兑换码已经通过手机短信下发给您，请注意查收，祝您游戏愉快~");
						}else{
						   alert("礼包领取失败！");
						}
						$('.gift_pop').hide();
						$('.zhezao').hide();
					}
				});

			}	
		}
	})
	

})
</script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
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