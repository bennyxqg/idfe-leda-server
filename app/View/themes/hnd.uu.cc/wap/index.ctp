<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//hnd.uu.cc/hnd.uu.cc/v2/wap/css/index.css" rel="stylesheet">
<link href="//hnd.uu.cc/hnd.uu.cc/v2/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/jquery-1.8.0.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f7b46d5b26c91c9c86bc641ab6fd4fa5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="container">
    <div class="inner bander_hm">
       <header id="header" class="home_hd">
         <span class="logo">
         <?php
         echo '<img src="'.GET_BLOCK('game_icon').'" width="113" height="113" />';
         ?>
         </span>
         <span class="by"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/by.png" width="220" height="64" /></span>
         <?php
         echo '<a href="'.GET_BLOCK('android_download_url').'" class="d_load" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'"></a>';
         ?>
       </header>
       <div class="hm_sp">
           <a href="#" class="h_sp"></a>
       </div> 
       <div class="bander_wz"></div>
       <div class="down_lb">
       <?php
         echo '<a href="'.GET_BLOCK('android_download_url').'" class="xiaz" data-type="" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/down.png" width="281" height="107" /></a>';
       ?>
         <a href="#" class="libao"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/libao.png" width="281" height="107" /></a>
       </div>
    </div>
    <section class="scene four">
    <?php
    	SHOW_DATAS('<a href="@@STR2@@"><img src="@@STR1@@" width="575"  /></a>','m-d',6,1,1,array());
    ?>
         
         <!--
          <div class="map">
            <ul class="quan">
              <li class="on"></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <div class="m_dt"><span class="chuan"></span></div>
          </div>
          <a href="#" class="zhuli"></a>
          -->
     </section>
    
    <div class="zhiye">
       <ul class="nav">
         <a href="javascript:;" class="on2"></a>
         <a href="javascript:;"></a>
         <a href="javascript:;"></a>
       </ul>
       <ul class="box">
          <p><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/zy1.jpg" width="640" height="348" /></p>
          <p><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/zy2.jpg" width="640" height="348" /></p>
          <p><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/zy3.jpg" width="640" height="348" /></p>
       </ul>
    </div>
    
    <div class="inner list_hm">
       <h1><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/xinwen.jpg" width="640" height="80" /></h1>
       <div class="swiper-container swiper1">
        <div class="swiper-wrapper" style="border:solid 2px #2a2e41;">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@" target="_blank"><img src="@@STR2@@" width="640" height="401" /></a></div>','m-d',3,100,0,array());
        ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
    </div>
    </div>
    <div class="hm_xw">
      <ul id="lanmu" class="x_g">
        <a class="on3" href="javascript:;">最新</a>
        <a href="javascript:;">新闻</a>
        <a href="javascript:;">公告</a>
        <a href="javascript:;">活动</a>
      </ul>
      <div class="xw_gg">
        <ul id="z_h" style="display:block;">
          <?php
			SHOW_NEWS('<li><strong>[综合]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),4,$page,array())
		  ?>
        </ul>
        <ul id="x_w">
          <?php
			SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',4,$page,array())
		  ?>
        </ul>
        <ul id="g_g">
          <?php
			SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公告',4,$page,array())
		  ?>
        </ul>
        <ul id="h_d">
          <?php
			SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','活动',4,$page,array())
		  ?>
        </ul>
      </div>
      <?php
      	echo '<p class="more"><a href="'.GET_CATEGORY_URL('新闻').'">查看更多</a></p>';
      ?>
      
    </div>
     
    <div class="yx_js">
       <h1><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/yxtj.jpg" width="640" height="79" /></h1>
       <ul>
       	  <?php
			SHOW_NEWS('<a href="@@URL@@"><img src="@@SMALL_IMAGE@@" width="125" height="125" /></a>','m-d',array('陷阱图鉴','怪物图鉴'),8,$page,array())
		  ?>
       </ul>
       <?php
       echo '<p class="more"><a href="'.GET_CATEGORY_URL('陷阱图鉴','yxtj').'">查看更多</a></p>';
       ?>
    </div>
    <div class="qq_wb">
      <ul>
      <?php
      	echo '<a href="'.GET_BLOCK('weibo_url').'"><span></span>官方微博</a>';
      	echo '<a href="'.GET_BLOCK('baidu_tieba_url').'"><span></span>百度贴吧</a>';
        echo '<a href="'.GET_BLOCK('forum_url').'"><span></span>官方论坛</a>'
      ?>
      </ul>
      <p class="p_let">
      <?php
          echo '<img src="'.GET_BLOCK('weixin_qrcode').'" width="136" height="136" />';
          echo '<span>微信号：'.GET_BLOCK('weixin_account').'<br />关注官方微信获取最新资讯</span>';
      ?>
      </p>
      <p class="p_ret">
          <img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/qq.png" width="120" height="120" />
          <span><strong>官方QQ交流群</strong></span>
          <a>
          <?php
          $qqs=explode(',',GET_BLOCK('qq_group'));
          $len=count($qqs);
          for($i=0;$i<$len;$i++)
          	echo '<em><font>官方'.($i+1).'群：'.$qqs[$i].'</font><br></em>';
          ?>
          </a>
      </p>
    </div>
    <?php require_once("_footer.ctp");?>
    
</div>
<div class="zhezao"></div>
<div class="video_"></div>
<!--
<div class="yu_yue">
  <a class="close" href="#" ></a>
  <p class="choice"><span class="ios on" data-type="1"></span><span class="az" data-type="2"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>
-->
<div class="biaodan">
    <span class="cha"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/cha.png" /></span>
    <input type="text" id="shuru" value="输入手机号预约礼包" />
    <input type="text" id="yz_m" /><img src="" id="yz_img" width='99' height='50'/>
    <a class="yuyue" href="#"></a> 
</div>
<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/swiper.min.js"></script>
<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/jbase64.js"></script>
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
<script type="text/javascript">
$(function(){
   $(".d_load, .xiaz").each(function(){
		if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)){
			$(this).attr('href',$(this).attr('href_ios'));
			$('.xiaz').attr('data-type','1');
			
		}else if (/(Android)/i.test(navigator.userAgent)){
			$(this).attr('href',$(this).attr('href_android'));
			$('.xiaz').attr('data-type','2');
		}
	});	
	
	/*
	zl_();
   $('.zhuli').on('click',function(){
      zl_();
   })
   
   function  zl_(){
	   $.ajax({
		type:"POST",
		url:"/click_like",
		data:{label:'官网助力',opt:1},
      	dataType:"json",
      	success:function(res){
      		if(res.ret == 0){
      			$('.cs').text(res.praise);
				$('.cishu').text(res.praise-1);
				var leftW = 0.1*(res.praise)+5;
				$('.chuan').css('left',leftW);
				
				if(leftW >= 118){
					$('.quan li').eq(1).addClass('on');
					    $('.reach').text('韩国');
					    $('.march').text('日本');
					}
				if(leftW >= 236){
					$('.quan li').eq(2).addClass('on');
					    $('.reach').text('日本');
					    $('.march').text('新加坡');
					}
				if(leftW >= 354){
					$('.quan li').eq(3).addClass('on');
					    $('.reach').text('新加坡');
					    $('.march').text('澳大利亚');
					}
				if(leftW >= 472){
					$('.quan li').eq(4).addClass('on');
					$('.reach').text('澳大利亚');
					$('.march').text('巴西');
					}
				if(leftW >= 590){
				    $('.quan li').eq(5).addClass('on');
				    $('.reach').text('巴西');
					$('.march').text('法国');
				    }
				if(leftW >= 708){
				    $('.quan li').eq(6).addClass('on');
				    $('.reach').text('法国');
					$('.march').text('英国');
				    }
				if(leftW >= 826){
				    $('.quan li').eq(7).addClass('on');
				    $('.reach').text('英国');
					$('.march').text('加拿大');
				    }
				if(leftW >= 944){
				    $('.quan li').eq(8).addClass('on');
					$('.reach').text('加拿大');
					$('.march').text('美国');
				    }
				if(leftW >= 1062){
				    $('.quan li').eq(9).addClass('on');
				    }
				if(leftW >= 1180){
					$('.chuan').css('left','1067px');
				    return false;
					
				    }
				
				
            }else {
            	alert("助力失败");
            }
        }
       });
  }
  
  */

	$(".nav a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on2').siblings().removeClass('on2');  
		$('.box p').eq(i).show().siblings().hide();
		})	
	})
	
	$("#lanmu a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on3').siblings().removeClass('on3');  
		$('.xw_gg ul').eq(i).show().siblings().hide();
		})	
	})
	
	$('.h_sp').on('click',function(){
		 $('.zhezao').show();
		 $('.video_').show().append('<video id="video" src="<?php BLOCK('index_video_url') ?>" controls="" width="600" height="400"></video>');
		 })
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	
	
	$('.libao').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
		$.ajax({
			type:"POST",
			url:"/get_verify_code",
			data:{charnum:4,mode:'img',width:99,height:50},
			dataType:"json",
			success:function(res){
				if(res.ret == 0){
					var imgUrl = BASE64.decoder(res.url);
					//alert(imgUrl);
					$("#yz_img").attr('src',imgUrl);
				}else {
					alert("获取失败");
				}
		  }
		  });
		
		})
	//刷新验证码
   $('#yz_img').click(function(){
	$.ajax({
		type:"POST",
		url:"/get_verify_code",
		data:{charnum:4,mode:'img',width:99,height:50},
      	dataType:"json",
      	success:function(res){
      		if(res.ret == 0){
				//alert('aa');
				var imgUrl = BASE64.decoder(res.url);
                //alert(imgUrl);
				$("#yz_img").attr('src',imgUrl);
            }else {
            	alert("获取失败");
            }
      }
      });
	})			
		
		
	$('.cha').click(function(){
		$('.biaodan').hide();
		$('.zhezao').hide();
		$('#shuru').attr('value','输入手机号预约礼包');
		$('#yz_m').val('');
		})
    $('.zhezao').click(function(){
		$('.zhezao').hide();
		$('.video_').empty().hide();
		$('.biaodan').hide();
		$('#shuru').attr('value','输入手机号预约礼包');
		$('#yz_m').val('');
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
				var type = $('.xiaz').attr('data-type');
				//alert(type);
				var code_id;
				if(type == 1){
					    code_id = 75;
					}else{
						code_id = 74;
				    }
				var verify = $('#yz_m').val();
				//alert(type + "---" + code_id+"----"+phone+"---"+verify);
				 $.ajax({
						type:"POST",
						url:"/send_code_by_sm",
						data:{phone:phone,code_id:code_id,verify:verify,type:type,mode:'img'},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("亲爱的英雄，您的手机号已提交，请查看短信");
							}else if(res.ret == 8){
								alert("亲爱的英雄，您的手机已登记，请勿重复领取");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else if(res.ret == 4){
								alert("亲爱的英雄，目前兑换码存量不足，请联系官方人员进行领取");
							}else{
								alert("领取失败，请稍后再试");
							}
					  }
				});

			}	
		}
	    })
	
	/*
	$('.x_lb').click(function(){
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
	*/
	
	



	
	
	
})
</script>
</body>
</html>