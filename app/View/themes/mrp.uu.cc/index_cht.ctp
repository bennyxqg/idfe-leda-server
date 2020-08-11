<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('title_cht').'</title>';
echo '<meta content="'.GET_BLOCK('keywords_cht').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('description_cht').'" name="description">';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="<?php BASE_URL() ?>/favicon.ico" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9ab4fffd95004e06f24a7a94d1a48c4c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<style type="text/css">
*{margin:0;padding:0;}
img{border:0;}
#head{position:relative;background:url(<?php BASE_URL() ?>/images/bander3.jpg) no-repeat center top;height:662px;}
.content{height:663px;width:950px;margin:0 auto;position:relative;z-index:8;}
.content a{position:absolute;z-index:9;}
.az,.ios{width:231px;height:70px;top:330px;}
.az{left:200px;}
.ios{right:230px;}
.en,.zh,.ft{top:0;height:35px;width:70px;}
.zh{right:0px;}
.ft{right:72px;}
.en{right:142px;}
.facebook{bottom: 60px;height: 180px;right: 270px;width: 170px;}

#main{background:url(<?php BASE_URL() ?>/images/bj23.jpg) no-repeat center top;height:1025px;padding-top:20px;}
.icon{width:950px;height:460px;margin:460px auto 0;position:relative;}
.lunbo{width:825px;height:460px;padding:5px;border:solid 1px #ccc;background:#fff;margin:0 auto;}
.scroll{margin:0 auto; width:825px; height:460px;  position:relative; overflow:hidden;}
.scroll ul{list-style-type:none; padding:0; margin:0; position:absolute; top:0;left:0; width:99999px; height:460px; }
.scroll li{float:left; width:825px;height:460px;}
.prev{position:absolute; left:-2px; top:200px; }
.next{position:absolute; right:-2px; top:200px;}
/*   底部样式   */

#foot{ position:relative; width:100%; height:173px;  overflow:hidden; background:#e5e5e5;}
.footer{color:#898989;width:780px;margin:0 auto;font-size:12px;position:relative;padding:20px 0 0;font-family:Helvetica,Arial,sans-serif; }
.footer img{vertical-align:middle;}
.footer .logo{float:left;margin-top:8px;padding-right: 65px;height: 60px;}
.footer .logo-dev{padding-top:10px;margin-left:10px;}
.footer p{padding-bottom:5px; height:20px; line-height:20px;}
.footer a{color:#898989; text-decoration:none}
.footer a:hover{text-decoration: none;}
.footer .cr{padding-top:18px; padding-bottom:10px;color:#898989;padding-left:0px; line-height:21px;}
.footer .cr span{margin-right:20px;}
.footer .cr .link a{margin:0 5px;}
.footer .zg{clear:both;height:24px;line-height:24px;padding:10px 0; color:#898989;text-align:center;}
.footer .zg strong{color:#7c929e; font-weight:bold;}
.footer .wj{float:right;margin:-26px 78px 0 0;}

#flash{position:absolute;z-index:5;top:0;width:100%;height:700px;display:none;}
</style>
</head>
<body>
<div id="head">
    <div id="flash"><embed width="1910px" height="662" align="right" quality="high" wmode="transparent" type="application/x-shockwave-flash" src="<?php BASE_URL() ?>images/03.swf"   style="left:50%;margin-left:-960px; POSITION: absolute; TOP: 0px;  "></embed></div>
	<div class="content">
        <a class="en" href="//mrp.uu.cc/?lan=en"></a>
        <a class="zh" href="//mrp.uu.cc/"></a>
        <a class="ft" href="//mrp.uu.cc/?lan=cht"></a>
		<a class="az" href="<?php BLOCK('ios_download_url_cht') ?>"><img src="<?php BASE_URL() ?>images/az3.png" width="231" height="70"></a>
		<a class="ios" href="<?php BLOCK('android_download_url_cht') ?>"><img src="<?php BASE_URL() ?>images/ios3.png" width="231" height="70"></a>
        <a class="facebook" href="<?php echo htmlspecialchars_decode(GET_BLOCK('facebook_url')) ?>"></a>
	</div>
</div>
<div id="main">
  <div class="icon">
   <div class="lunbo">
	<div class="scroll">
	  <ul style="width: 12600px; left: -10710px;">
	  <?php
	  	SHOW_DATAS('<li><img src="@@STR1@@" width="825" height="460"></li>','m-d',1,100,1,array('OrderBy'=>'`int1` asc'));
	  ?>
	  </ul>
	  
	</div>
	
   </div>
   <a class="prev" href="javascript:;"><img border="0" src="<?php BASE_URL() ?>images/pre.png"></a> 
	  <a class="next" href="javascript:;"><img border="0" src="<?php BASE_URL() ?>images/next.png"></a>
  </div>
  
</div>
<div style="background:#e5e5e5;">
	<p style="max-width:1000px;margin:0 auto;text-align:center;line-height:32px;"
	>感謝您支持《南瓜先生大冒險》，自五月三十一日起《南瓜先生大冒險》將轉由胖布丁運營。如您已擁有此版本《南瓜先生大冒險》仍可以繼續遊玩。建議儘快轉至胖布丁帳號下下載。</p> 
</div>
<div id="foot">
    	<div class="footer">
            <span class="logo"><img src="<?php BASE_URL() ?>images/logo.png"></span>
            <div class="cr">
                <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">關於我們 </a> | <a target="_blank" href="//www.idreamsky.com/jobs">誠聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">聯繫我們</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事記</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">網站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用戶協議</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家長控制</a> </p>
                <p> <span>Copyright©2009-2015 深圳市創夢天地科技有限公司 版權所有 粵ICP備11018438號</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
            </div>
            <div class="zg"><strong>健康遊戲忠告：</strong>抵制不良遊戲，拒絕盜版遊戲。注意自我保護，謹防上當受騙。適度遊戲益腦，沉迷遊戲傷身。合理安排時間，享受健康生活。</div>
        </div>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
var touchable = 'createTouch' in document;
		var flash=document.getElementById('flash');
		if (touchable) {
		//canvas.addEventListener('touchstart', onTouchStart, false);
		//canvas.addEventListener('touchmove', onTouchMove, false);
		flash.style.display="none";
		//$('body').css('overflow','hidden');
		}
		else
		{
		//alert("touchable is false !");
		flash.style.display="block";
		}

  $(function(){
	 var w=825;
	  var l=0;
	  var timer=null;
	  var len=$(".scroll ul li").length*2; //
	 $(".scroll ul").append($(".scroll ul").html()).css({'width':len*w, 'left': -len*w/2});
	 
	//自动每8秒切换一次 
    timer=setInterval(init,8000);	
	function init(){
		 $(".next").trigger('click'); 
	}
	
	$(".scroll ul li").hover(function(){
		 clearInterval(timer);
		},function(){
			timer=setInterval(init,8000);
	   });
	
	  $(".prev").click(function(){
		  l=parseInt($(".scroll ul").css("left"))+w;  
			 showCurrent(l); 
		  });
		  $(".next").click(function(){
		     l=parseInt($(".scroll ul").css("left"))-w;  
			showCurrent(l);
	  });
	   function showCurrent(l){     
	   if($(".scroll ul").is(':animated')){ 
	      return;
	   }
		  $(".scroll ul").animate({"left":l},500,function(){
				if(l==0){ 
			   $(".scroll ul").css("left",-len*w/2);   
			   
			 }else if(l==(1-len)*w){ 
				 $(".scroll ul").css('left',(1-len/2)*w); 
				}
		    }); 	  
		 }
	  
	  });	
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>