<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$this->Website->init();
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>圣斗士星矢专题</title>
<link href="<?php BASE_URL() ?>act/wap/css/index.css?v=20160510.css" rel="stylesheet" type="text/css" />
<link href="<?php BASE_URL() ?>act/wap/css/swiper.min.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/scor1.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/scor2.jpg" />
</head>

<body>
<div id="container" style="position:absolute;height:100%;">
   <section class="content" style="height:90%;">
       <header>
            <img src="<?php BASE_URL() ?>act/wap/images/logo.png" width="253" height="101" /> 
       </header>
       <section class="part1">
            <img src="<?php BASE_URL() ?>act/wap/images/scor1.jpg" width="580" height="424" />
            <img src="<?php BASE_URL() ?>act/wap/images/scor2.jpg" width="580" height="374" />
            <span class="score_f"><?php echo $score;?></span>
            <a href="#" id="share" class="wybm" style="top:80%;"></a>
       </section>

   </section>
   
   <div class="share"></div>
   
</div>

</div>
<script type="text/javascript" src="<?php BASE_URL() ?>act/wap/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
	//获取分数
	function UrlSearch() 
    {
	   var name,value; 
	   var str=location.href; //取得整个地址栏
	   var num=str.indexOf("?") 
	   str=str.substr(num+1); //取得所有参数   stringvar.substr(start [, length ]
	
	   var arr=str.split("&"); //各个参数放到数组里
	   for(var i=0;i < arr.length;i++){ 
	    num=arr[i].indexOf("="); 
	    if(num>0){ 
	     name=arr[i].substring(0,num);
	     value=arr[i].substr(num+1);
	     this[name]=value;
	     } 
	    } 
    } 
	var Request=new UrlSearch(); //实例化
	$('.score_f').text(Request.score);
	
	
	
	$('#share').on('click',function(){
		
		$('.share').show();
		
	})
	
	$('.share').on('click',function(){
		
		$('.share').hide();
		
	})
})
</script>

<script type="text/javascript">

$(function(){
	
	$.ajax({
			type:"POST",
			url:"//sds.uu.cc/w_share",
			data:{app_name:'gh_9cb8986990a8',url:window.location.href},
			dataType:"json",
			success:function(res){
				if(res.ret == 2){
					//alert("您已参与过该活动！");
				}else if(res.ret == 0){
					
					wx.config({
					  debug: false,
					  appId: res.data.appid,
					  timestamp: res.data.timestamp,
					  nonceStr: res.data.nonceStr,
					  signature: res.data.signature,
						  
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
					
				}else{
				 //  alert("提交失败！");
				}
			}
		});

  
})
</script>
<script type="text/javascript" src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>act/wap/js/demo.js"></script>

</body>
</html>
