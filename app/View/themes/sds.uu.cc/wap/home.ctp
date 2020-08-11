<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css" />
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css?v=1609" />
</head>

<body>
<div id="container">

      <header class="top">
           <div class="left"><img src="<?php BLOCK('game_icon') ?>" width="103" height="103" /><img src="<?php BASE_URL() ?>images/icon_logo.png" width="193" height="56" /></div>
           <div class="right right_nav">
               <ul>
               	<a href="/home"><li>首页</li></a>
                   <a href="<?php CATEGORY_URL('视频','video') ?>"><li>视频</li></a>
                   <a href="<?php CATEGORY_URL('新闻') ?>"><li>新闻</li></a>
                   <a href="<?php CATEGORY_URL('图片','picture') ?>"><li>图片</li></a>
                   
               </ul>
           </div>
      </header>
     
      <section class="part1">
           <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                <?php
                	SHOW_DATAS('<div class="swiper-slide"><a href="@@STR2@@"><img src="@@STR1@@" alt="" /></a></div>','m-d',0,16,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination1"></div>
            </div>
      </section>
      
      <section class="content">
      
          <section class="part2 part">
              <p class="yy_xz" style="width:100%;padding-top: 120px;">
                <!--
                <a href="<?php BLOCK('android_download_url') ?>"><img src="<?php BASE_URL() ?>images/az.png" width="287" height="97" /></a>
                <a href="<?php BLOCK('ios_download_url') ?>"><img src="<?php BASE_URL() ?>images/ios.png" width="291" height="97" /></a>
                -->
                <a href="//sds.uu.cc/download" class="down_load"><img src="<?php BASE_URL() ?>images/az.png" width="263" height="77" /></a>
                <a href="javascript:;" class="yuyue"><img src="<?php BASE_URL() ?>images/az_1.png" width="263" height="77" /></a>
              </p>
              <p class="wxh">关注微信领大礼：<?php BLOCK('weixin_account') ?></p>
          </section>
          
          <section class="part3 part">
              <h1><span class="left"></span><a href="<?php CATEGORY_URL('综合') ?>" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
              <ul id="lanmu" class="x_g">
                <a class="on" href="javascript:;">综合</a>
                <a href="javascript:;">新闻</a>
                <a href="javascript:;">公告</a>
                <a href="javascript:;">活动</a>
                <a href="javascript:;">攻略</a>
              </ul>
              <div class="xw_gg">
                <ul id="z_h" style="display:block;">
                <?php
				$GLOBALS['site_id']= 95;
                	SHOW_NEWS('<li><strong>[综合]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),4,1,array());
                ?>
                </ul>
                <ul id="x_w">
                <?php
                	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',4,1,array());
                ?>
                </ul>
                <ul id="g_g">
                <?php
                	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公告',4,1,array());
                ?>
                </ul>
                <ul id="h_d">
                <?php
                	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','活动',4,1,array());
                ?>
                </ul>
              </div>
              
          </section>
          
          <section class="part4 part">
               <h1><span class="left"></span><a href="<?php CATEGORY_URL('综合') ?>" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <a href="#"><img src="<?php BASE_URL() ?>images/zl.jpg" width="588" height="232" /></a>
          </section>
          
          <section class="part5 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <ul>
               <?php
               	SHOW_DATAS('<a href="@@STR2@@">@@LABEL@@</a>','m-d',3,100,1,array('OrderBy'=>'`int1` asc'));
               ?>
               </ul>
          </section>
          
          <section class="part6 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <div class="swiper-container swiper2" style="margin:20px 0;">
                    <div class="swiper-wrapper">
                    <?php
                    	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" alt="" width="100%" /></div>','m-d',4,100,1,array('OrderBy'=>'`int1` asc'));
                    ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination2"></div>
               </div>
          </section>
          
          <section class="part7 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               
               <div class="myvideo">
                    <iframe class="video_iframe"  src="//v.qq.com/iframe/player.html?vid=s0302w6s5pp&amp;width=580&amp;height=380&amp;auto=0" allowfullscreen="" frameborder="0" width="580" height="380"></iframe>
               </div>
               
          </section>
          
          <section class="part8 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <div class="swiper-container swiper3">
                <div class="swiper-wrapper">
                <?php
                SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" alt="" width="100%" /></div>','m-d',6,100,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </div>
                <!-- Add Pagination -->

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
          </section>
          
          <section class="part9 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <ul>
                  <li>
                  <a class="on_">系统</a>
                  <?php
	                SHOW_DATAS('<a href="@@STR2@@" class="@@STR3@@">@@LABEL@@</a>','m-d',7,100,1,array('OrderBy'=>'`int1` asc','Condition'=>'`int2`=0'));
	              ?>
                  <br />
                  </li>
                  <li>
                  <a class="on_">活动</a>
                  <?php
	                SHOW_DATAS('<a href="@@STR2@@" class="@@STR3@@">@@LABEL@@</a>','m-d',7,100,1,array('OrderBy'=>'`int1` asc','Condition'=>'`int2`=1'));
	              ?>
                  </li>
               </ul>
          </section>

      </section>
      
      <?php require_once("_footer.ctp"); ?>
  
</div>
<div class="tel_pop">
    <h3>领取礼包</h3>
	<a class="close" href="javascript:;">关闭</a>
    <input class="yuyue_ipt" type="tel" value="请输入手机号" />
    <a class="yuyue_btn2" href="javascript:;">确认领取</a>
</div>
<div class="mask"></div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript">
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
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
<script type="text/javascript">
$(function(){
	
	$('.right_nav ul li').first().toggle(function(){
		$('.right_nav').css('height','225px');
	},function(){
		$('.right_nav').css('height','55px');
	})
	
	
	$("#lanmu a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on').siblings().removeClass('on');  
		$('.xw_gg ul').eq(i).show().siblings().hide();
		})	
	})
	
	
	$(".yuyue").click(function(){
		$(".tel_pop,.mask").show();
	});
	$(".mask,.close").click(function(){
		$(".tel_pop,.mask").hide();
	});
	
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
	$('.yuyue_ipt').click(function(){
		$(this).attr('value','');
	})
	
    $('.yuyue_btn2').click(function(){
		phone = $('.yuyue_ipt').val();
		
		if(phone == '输入手机号码' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				 var type = os();
				 if(type == 1){
					 code_id = 111;
				 }else{
					 code_id = 112;
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
function os() {
	if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
		return 1;
	} else if (/(Android)/i.test(navigator.userAgent)) {
		return 2;
	} else {
	   return 2;
	};
}
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?de64d2f7cefe742c2e593b9bfac2caab";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>