<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/yuyue/wap/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/index.css" />
<link rel="prefetch" href="" />
<link rel="prefetch" href="" />
<style type="text/css">
*{margin:0;padding:0;}
img{border:none;}
ul{list-style:none;}
#container{width:750px;height:auto;overflow:hidden;}
header{background-color:#51768d;width:100%;height:130px;position:relative;z-index:3;}
header span{float:left;}
header a{float:right;}
header span.icon{margin:20px 0 0 15px;}
header span.icon_wz{margin:30px 0 0 15px;}
header .yuyue{margin:25px 15px;}

.go-home{display:block; position:absolute; top:20px;right:20px; width:245px; height:80px; background-color:#32bcc0;-moz-border-radius:40px;border-radius:40px; font-weight:bold; text-align:center; line-height:80px; font-size:30px; font-family:'Microsoft Yahei'; color:#fff; text-decoration:none;}
.bander{background-image:url(<?php echo $base_path; ?>images/bander.jpg);height:1088px;position:relative;}
.bander h1,.bander .s_p,.bander .time,.bander .s_p_s{position:absolute;left:50%;}
.bander h1{bottom:120px;width:483px;height:247px;margin-left:-241px;-webkit-animation:scale 0.5s 0s ease-in-out both;}
.bander .s_p{bottom:170px;left:530px;width:84px;height:78px;-webkit-animation:rotate 1s infinite linear both;}
.bander .s_p_s{bottom:190px;left:565px;width:23px;height:36px;}
.bander .time{bottom:90px; background:url(<?php echo $base_path; ?>images/time.png) 50% 0 no-repeat; background-size:auto 44px; width:661px;height:44px;margin-left:-330px; line-height:44px; text-align:center; font-size:30px; color:#fff; font-weight:bold;}
.bander .y_y{position:absolute;width:200px;height:200px;left:50%;margin-left:-100px;bottom:320px;}

.gbxq{background-image:url(<?php echo $base_path; ?>images/p2.jpg);height:464px;padding-top:0;}
.gbxq ul{width:444px;height:416px;margin:0 auto;position:relative;background-image:url(<?php echo $base_path; ?>images/gbxq.png);overflow:hidden;}
.gbxq ul a{position:absolute;width:200px;height:187px;}
.gbxq ul a:nth-child(1){left:0;top:0;}
.gbxq ul a:nth-child(2){right:0;top:0;}
.gbxq ul a:nth-child(3){left:0;bottom:0;}
.gbxq ul a:nth-child(4){right:0;bottom:0;}

.ewm{position:relative;background-image:url(<?php echo $base_path; ?>images/p3.jpg);height:729px;text-align:center;}
.ewm img{margin-top:-195px;}

.mask{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.7);z-index:6;}
.yy_tk{display:none;position:absolute;z-index:7;background:#05a8ae;width:90%;height:400px;left:50%;top:0;margin:40% 0 0 -45%;}
.yy_tk .close{position:absolute;top:-43px;right:0;width:43px;height:43px;}
.yy_tk #shuru{position:absolute;width:60%;height:70px;line-height:70px;font-size:30px;background:#b5dbdc;border:none;text-align:center;left:50%;margin-left:-30%;top:27%;}
.yy_tk .submit{position:absolute;bottom:50px;width:302px;height:105px;left:50%;margin-left:-151px;}
.yy_tk h3{width:100%;height:30px;line-height:30px;text-align:center;color:#fff;    font-size: 30px;
    margin-top: 50px;}

@-webkit-keyframes rotate{
100%{-webkit-transform:rotate(360deg)}	
}

@-webkit-keyframes fadeIn{
0%{opacity:0;}
100%{opacity:1;}	
}

@-webkit-keyframes scale{
0%{opacity:0;-webkit-transform:scale(3)}
100%{opacity:1;-webkit-transform:scale(1)}	
}

.video_ {display: none;position: fixed;width: 600px;height: 400px;left: 50%;margin-left: -300px;top: 25%;z-index: 999;}
</style>
</head>
<body>

<div id="container"  style="-webkit-animation:fadeIn 1s 0s linear both;opacity:0;">
      
     <header>
        <span class="icon"><img src="<?php echo $base_path; ?>images/icon.png" width="130" height="130" /></span>
        <span class="icon_wz"><img src="<?php echo $base_path; ?>images/icon_wz.png" width="192" height="68" /></span>
        <a href="" class="yuyue"><img src="<?php echo $base_path; ?>images/yuyue.png" width="245" height="90" /></a>
     </header>
     
     <section class="bander">
       <a class="go-home" href="//fr.uu.cc/home">前往官网</a>
       <a href="javascript:;" class="y_y "></a>
       <h1><img src="<?php echo $base_path; ?>images/title.png" width="483" height="247" /></h1>
       <a href="javascript:;" class="s_p"><img src="<?php echo $base_path; ?>images/sp_q.png" width="84" height="78" /></a>
       <a href="javascript:;" class="s_p_s"><img src="<?php echo $base_path; ?>images/sp_s.png" width="23" height="36" /></a>
       <span class="time">1月5日 筑基首测</span>
     </section>
     
     <section class="gbxq">
        <ul>
            <a href="<?php echo $config_data['other']['baidu_tieba_url ']; ?>" class="lunt"></a>
            <a href="<?php echo $config_data['other']['forum_url ']; ?>" class="tieb"></a>
            <a href="<?php echo $config_data['other']['weibo_url ']; ?>" class="weib"></a>
            <a href="<?php echo $config_data['other']['qq_group ']; ?>" class="qq"></a>
        </ul>
     </section>
     
     
     <section class="ewm">
        <img src="<?php echo $base_path; ?>images/ewm.png"  />
     </section>
     
     <div class="mask"></div>
     <div class="yy_tk">
        <h3 style="font-size:34px;">领188元豪华礼包</h3>
        <a href="javascript:;" class="close"><img src="<?php echo $base_path; ?>images/close.png" width="43" height="43" /></a>
        <form>
          <input type="text" id="shuru"  value="请输入手机号码" />
          <a href="javascript:;" data-type="" class="submit"><img src="<?php echo $base_path; ?>images/yy.png" width="302" height="105" /></a>
        </form>
     </div>
     
     <div class="video_"></div>
</div>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-1.8.0.min.js"></script>
<script>
$(function(){
	$('.s_p, .s_p_s').on('click',function(){
		 $('.mask').show();
		 $('.video_').show().append('<video id="video" src="<?php echo $config_data['other']['index_video_url']; ?>" controls="" width="600" height="400"></video>');
		 var myVideo = document.getElementById('video');
		 myVideo.play();
	})
	
	
    var ua = navigator.userAgent.toLowerCase();	
	if (/iphone|ipad|ipod/.test(ua)) {		
			$('.submit').attr('data-type','1');
	} else if (/android/.test(ua)) {
		    $('.submit').attr('data-type','2');
	} 
    
	$('.yuyue, .y_y').on('touchstart',function(){
		$('.mask').show();
		$('.yy_tk').show();
	})
	
	$('.close').on('touchstart',function(){
		$('.mask').hide();
		$('.yy_tk').hide();
	})
	
	$('.mask').on('touchstart',function(){
		$('.mask').hide();
		$('.yy_tk').hide();
		$('.video_').hide();
	})
	
    var type;
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		$(this).attr('value','');
	})
    $('.submit').click(function(){
		var phone = $('#shuru').val();
		type = $('.submit').attr('data-type');
		if(phone == '请输入手机号码' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:68},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 alert("您已预约成功");
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