<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>微信运动</title>
<link href="<?php echo GET('BASE_URL') ?>css/index.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo GET('BASE_URL') ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo GET('BASE_URL') ?>js/main.js"></script>
</head>
<!--
获取用户头像地址代码
<?php echo GET('PLAYER_PORTRAIT_URL') ?>
获取用户昵称代码
<?php echo GET('PLAYER_NICKNAME') ?>
获取页面地址代码
<?php echo GET('SHARE_URL') ?>
获取资源文件前缀地址,//tp2.uu.cc/activity/tp2/wxyd/
<?php echo GET('BASE_URL') ?>

-->
<body>
<script type="text/javascript">
var tx = "<?php echo GET('PLAYER_PORTRAIT_URL') ?>";
$(function(){
	init();
	
})

</script>
<script>
function init(){
　　if (window.DeviceMotionEvent) {
　　　　// 移动浏览器支持运动传感事件
　　　　window.addEventListener('devicemotion', deviceMotionHandler, false);
　　　　
　　} else{
　　　　// 移动浏览器不支持运动传感事件
　　　　$("#yaoyiyaono").show();
　　} 
}

var SHAKE_THRESHOLD = 3000;
var last_update = 0;

var x;
var y;
var z;
var last_x;
var last_y;
var last_z;

var count = 100;
var flag = "true";
var f2 = 1;
var f3 = 1;
var f4 = 1;
var f5 = 1;
var f6 = 1;
var f7 = 1;
var f8 = 1;
var bb;
function deviceMotionHandler(eventData) {
　　var acceleration = eventData.accelerationIncludingGravity; 

　　var curTime = new Date().getTime(); 
　　var diffTime = curTime -last_update;
   　　if (diffTime > 100) {
　　　　last_update = curTime; 
　　　　x = acceleration.x; 
　　　　y = acceleration.y; 
　　　　z = acceleration.z; 
　　　　var speed = Math.abs(x + y + z - last_x - last_y - last_z) / diffTime * 10000; 

     
　　　　if (speed > SHAKE_THRESHOLD) { 
          $('#yaoyiyaoyes').hide();
　　　　　　count+=500;
          $('.m_ret').html(5873+count);
		  $('.num8').html(5873+count);
		  var m_ret = $('.m_ret').html();
		  if(flag == "true"){
			$('.zhezao').show();
			flag="false";	  
		  }
		  
		  setTimeout(function(){
				$('.zhezao').hide();
		  },5000)
		  
			//摇一摇后分享	
		    wx.onMenuShareTimeline({
			title: '我今天走了'+$('.m_ret').html()+'步，超越了邓超、鹿晗、angelababy等好友', // 分享标题
			link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx4a2aae42860a4add&redirect_uri=http%3A%2F%2Fld.uu.cc%2Fmanage%2Findex.php%3Fr%3Dact2&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect', // 分享链接
			imgUrl: tx, // 分享图标
			success: function () { 
				// 用户确认分享后执行的回调函数
				alert('分享成功');
				//alert($('#imgurl').html());
			},
			cancel: function () { 
				// 用户取消分享后执行的回调函数
				
				alert('亲，真的不分享么');
				
			}
			
			});
			
			wx.onMenuShareAppMessage({
			title: '我今天走了'+$('.m_ret').html()+'步，超越了邓超、鹿晗、angelababy等好友', // 分享标题
			desc: '', // 分享描述
			link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx4a2aae42860a4add&redirect_uri=http%3A%2F%2Fld.uu.cc%2Fmanage%2Findex.php%3Fr%3Dact2&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect', // 分享链接
			imgUrl: tx, // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
				// 用户确认分享后执行的回调函数
				//alert(_severId);
				alert('分享成功');
			},
			cancel: function () { 
				// 用户取消分享后执行的回调函数
				alert('亲，真的不分享么');
			}
			});
		  
		  
		  
		  	
		  //排名上升	
		  if(f2 == 1 && m_ret > 6457 && m_ret < 7549){	
			$('.alone').insertBefore($('#myList li').eq(6));
			$('.m_let em').text("第七名");
			f2=2;
			//$('#zzdh').show();
			//$('#zzdh').show().addClass('act_zz');
			//alert($('#zzdh').attr('class'));
		  }	
		  if(f3 == 1 && m_ret > 7549 && m_ret < 8693){	
			$('.alone').insertBefore($('#myList li').eq(5));
			$('.m_let em').text("第六名");
			f3=2;
		  }
		  if(f4 == 1 && m_ret > 8693 && m_ret < 9467){	
			$('.alone').insertBefore($('#myList li').eq(4));
			$('.m_let em').text("第五名");
			f4=2;
		  }
		  if(f5 == 1 && m_ret > 9467 && m_ret < 10396){	
			$('.alone').insertBefore($('#myList li').eq(3));
			$('.m_let em').text("第四名");
			f5=2;
		  }
          if(f6 == 1 && m_ret > 10396 && m_ret < 11394){	
			$('.alone').insertBefore($('#myList li').eq(2));
			$('.m_let em').text("第三名");
			f6=2;
		  }
		  if(f7 == 1 && m_ret > 11394 && m_ret < 12380){	
			$('.alone').insertBefore($('#myList li').eq(1));
			$('.m_let em').text("第二名");
			f7=2;
		  }
		  if(f8 == 1 && m_ret > 12380){	
			$('.alone').insertBefore($('#myList li').eq(0));
			$('.m_let em').text("第一名");
			f8=2;
			    
				var ret = parseInt($('.m_ret').text());
				var a=[];
				var s=0;
				var b=[];
                
				function e(num){					
				for(var i=0;i<num.length;i++){	
				var n=num.charAt(i);
				a.push(n);
				}
				m();
				 
				}
				function m(){
				var k=ret;
				$('.m_ret').empty();
				var span=document.createElement('span');
				$('.m_ret').append(span);
				var p=window.setInterval(function(){
				$("#demo").text(k);
				if(k==a[s]){
				window.clearInterval(p);
				s+=10;
				if(a[s]){
				m();
				}
				}
				k+=9+9+9+9;
				},10)
			
				}
					
					e('9999');
					setTimeout(function(){	
					   //$('#zzdh').show();
					   
					   bb = $('.m_ret').text();
					    $('.part4').animate({'opacity':'1'},500);
					   $('.part2').addClass('fadeOut').hide(1000);
					   //setTimeout(function(){
					  
					   //alert(bb);
					   //},2000)
					   
					   
					   //alert('aa');
					   setTimeout(function(){
						   $('.part2').hide();
						   //$('.zzdh').hide();
						   
						   //摇一摇后分享	
							wx.onMenuShareTimeline({
							title: '我今天走了'+bb+'步，超越了邓超、鹿晗、angelababy等好友', // 分享标题
							link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx4a2aae42860a4add&redirect_uri=http%3A%2F%2Fld.uu.cc%2Fmanage%2Findex.php%3Fr%3Dact2&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect', // 分享链接
							imgUrl: tx, // 分享图标
							success: function () { 
								// 用户确认分享后执行的回调函数
								alert('分享成功');
								//alert($('#imgurl').html());
							},
							cancel: function () { 
								// 用户取消分享后执行的回调函数
								
								alert('亲，真的不分享么');
								
							}
							
							});
							
							wx.onMenuShareAppMessage({
							title: '我今天走了'+bb+'步，超越了邓超、鹿晗、angelababy等好友', // 分享标题
							desc: '', // 分享描述
							link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx4a2aae42860a4add&redirect_uri=http%3A%2F%2Fld.uu.cc%2Fmanage%2Findex.php%3Fr%3Dact2&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect', // 分享链接
							imgUrl: tx, // 分享图标
							type: '', // 分享类型,music、video或link，不填默认为link
							dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
							success: function () { 
								// 用户确认分享后执行的回调函数
								//alert(_severId);
								alert('分享成功');
							},
							cancel: function () { 
								// 用户取消分享后执行的回调函数
								alert('亲，真的不分享么');
							}
							});
						   
						   
						   
						   },1000);
					  
					   return false;
						},3000);
                   
		  }
       


　　　　}

　　　　last_x = x; 
　　　　last_y = y; 
　　　　last_z = z; 
　　} 
} 
</script>


<div class="loading_bg" id="loading">
    	<div class="loading_wrp">
            <div class="loading">
                <div class="loading_bar"></div>
            </div>
            <b id="loading_text">0%</b>
        </div>
</div>
<section id="lock">
            <p>请使用竖屏浏览获取最佳体验</p>
</section>
<div id="container" style="display:none">

  <section class="part1" style="display:block;">
     <article class="main">
        <div class="b1">
           <ul>
              <span class="b_let">
                 <strong>1</strong>
                 <em>名次</em>
              </span>
              <span class="b_ret">
                 <strong>12546</strong>
                 <em>步数</em>
              </span>
           </ul>
           <p><img src="<?php echo GET('BASE_URL') ?>images/ab.png" /><span>夺得01月19日排行榜冠军</span></p>
        </div>
        <p  class="date"><span>昨天 22:50</span></p>
        <div class="b2 b1">
           <ul>
              <span class="b_let">
                 <strong>1</strong>
                 <em>名次</em>
              </span>
              <span class="b_ret">
                 <strong>11176</strong>
                 <em>步数</em>
              </span>
           </ul>
           <p><img src="<?php echo GET('BASE_URL') ?>images/dc.png" /><span>夺得01月19日排行榜冠军</span></p>
        </div>
        <p  class="date"><span>昨天 22:50</span></p>
        <div class="b3 b1">
           <ul>
              <span class="b_let">
                 <strong>1</strong>
                 <em>名次</em>
              </span>
              <span class="b_ret">
                 <strong>13206</strong>
                 <em>步数</em>
              </span>
           </ul>
           <p><img src="<?php echo GET('BASE_URL') ?>images/lh.png" /><span>夺得01月19日排行榜冠军</span></p>
        </div>
        <p  class="date"><span>昨天 22:50</span></p>
        <div class="b4 b1">
           <ul>
              <span class="b_let">
                 <strong>8</strong>
                 <em>名次</em>
              </span>
              <span class="b_ret">
                 <strong>5873</strong>
                 <em>步数</em>
              </span>
           </ul>
           <p><img src="<?php echo GET('PLAYER_PORTRAIT_URL') ?>" /><span><a href="#" class="rank">查看01月21日排行榜</a></span></p>
        </div>
     </article>
     <nav class="bottom">
        <div class="hander">
           <span class="q1 qq"></span>
           <span class="q2 qq"></span>
           <span class="q3 qq"></span>
           <em class="hand  hand_dh"></em>
        </div>
        <a href="javascript:;" class="rank"></a>
     </nav>
  </section>
  
  <section class="part2" style="display:none;">
      <div id="yaoyiyaoyes" style="display:none">
　            <span class="yyy yyy_dh"><img src="<?php echo GET('BASE_URL') ?>images/yyy.png" width="203" height="204" /></span>  　
      </div>
      <div class="content"> 
         <p class="my">
            <span class="m_let"><img src="<?php echo GET('PLAYER_PORTRAIT_URL') ?>" /><strong><?php echo GET('PLAYER_NICKNAME') ?><em>第8名</em></strong></span>
            <span class="xin"><i>3</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span>
            
            <span class="m_ret" id="demo">5873</span> 
         </p>
         <ul id="myList">
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/ab.png" /></span><span class="name">BABY</span></a><strong><span class="xin"><i>7</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num1 num">12380</span></strong></li>
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/ch.png" /></span><span class="name">陈赫</span></a><strong><span class="xin"><i>3</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num2 num">11394</span></strong></li>
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/dc.png" /></span><span class="name">邓超</span></a><strong><span class="xin"><i>2</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num3 num">10396</span></strong></li>
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/lc.png" /></span><span class="name">李晨</span></a><strong><span class="xin"><i>5</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num4 num">9467</span></strong></li>
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/lh.png" /></span><span class="name">鹿晗</span></a><strong><span class="xin"><i>3</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num5 num">8693</span></strong></li>
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/zk.png" /></span><span class="name">郑凯</span></a><strong><span class="xin"><i>1</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num6 num">7549</span></strong></li>
            <li><a href="javascript:;"><span><img src="<?php echo GET('BASE_URL') ?>images/zl.png" /></span><span class="name">王祖蓝</span></a><strong><span class="xin"><i>6</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num7 num">6457</span></strong></li>
            <li class="alone"><a href="javascript:;"><span><img src="<?php echo GET('PLAYER_PORTRAIT_URL') ?>" /></span><span class="name"><?php echo GET('PLAYER_NICKNAME') ?></span></a><strong><span class="xin"><i>3</i><img src="<?php echo GET('BASE_URL') ?>images/xin.png"  /></span><span class="num8 num">5873</span></strong></li>
         </ul>
      </div>
  </section>
  
  <section class="part4">
     <p class="an">
      <a href="#" class="share"><img src="<?php echo GET('BASE_URL') ?>images/share.png" width="282" height="109" /></a>
      <a href="//r.uu.cc/download" class="down"><img src="<?php echo GET('BASE_URL') ?>images/down.png" width="282" height="109" /></a>
     </p>
  </section>
  
  <section class="part5">
     <div class="message">
        <span class="tx"><img src="<?php echo GET('PLAYER_PORTRAIT_URL') ?>" width="181" height="181" /></span>
        <span class="bs">今日步数</span>
        <span class="bs_">123456</span>
     </div>
     <p class="wz">
        <strong>你今天走了<span class="bs2">123456</span>步</strong>
        <span>超越了邓超、Angelababy等用户<br />快去晒晒你的步数吧！</span>
     </p>
  </section>
  
  <div class="zhezao"></div> 
  <div class="zzdh act_zz" id="zzdh" style="display:none;"></div>
</div>


<script type="text/javascript">
$(function(){
    $(".rank, .hander").on('click',function(){
		$('.part2').show();
		$('.part1').hide();
		$("#yaoyiyaoyes").show();
		//$('.alone').insertBefore($('#myList li').eq(3));
	})
	
	$('.share').on('click',function(){
		$('.part5').show();
		$('.bs_').html(bb);
		$('.bs2').html(bb);
	})
			
})
</script>
<script type="text/javascript">

$(function(){
	
	wx.config({
		  debug: false,
		  appId: '<?php echo GET("APP_ID") ?>',
		  timestamp: '<?php echo GET("JS_TIMESTAMP") ?>',
		  nonceStr: '<?php echo GET("JS_NOICESTR") ?>',
		  signature: '<?php echo GET("JS_SIGNATURE") ?>',
			  
		  jsApiList: [
			'checkJsApi',
			'onMenuShareTimeline',
			'onMenuShareAppMessage',
			'chooseImage',
			'previewImage',
			'uploadImage',
			'downloadImage'
		  ]
		  
		});

  
})
</script>
<script type="text/javascript" src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="<?php echo GET('BASE_URL') ?>js/demo.js"></script>
</body>
</html>
