<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php echo $full_base_url ?>/wap/css/index.css?v=0704" rel="stylesheet" type="text/css" />
<style type="text/css">
.footer{background:#141414;border-top:solid 1px #666;padding-bottom:50px;padding-top:10px;}
.footer ul li{text-align:center;color:#393939;font-size:0.6rem;line-height:1rem;}
.footer ul li.second{color:#afafaf;margin-bottom:20px;}
.footer ul li a{color:#afafaf;font-size:0.5rem;padding:0 10px;}
</style>
</head>

<body>
<div id="container">
  <section class="part1_content">
  	<header class="top">
    	<a class="top_logo" href="//cqb.uu.cc/home/"><img src="<?php BLOCK('game_icon') ?>" alt="《苍穹变》官网" /></a>
    	<h2>苍穹变</h2><h3>3D超人气小说PK手游</h3>
        <a class="go_home download" href="javascript:;">立即下载</a>
    </header>
     <!--<header class="header">
       <a class="download" href="javascript:;)"></a>
       <div class="donwnload_fc">
         <span>IOS版本敬请期待！</span>
         <a href="javascript:void(0);" class="close" ><img src="<?php echo $full_base_url ?>/wap/images/close.png" /></a>
       </div>
     </header>-->
     <!--<a class="yu_y" id="yu_y" href="javascript:void(0);"></a>-->
     <article>
       <h1><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
       <span>时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'))?></span>
       <p><?php SHOW_CURRENT_NEWS_INFO('content') ?></p>
     </article>
  </section>
  
  <div class="footer">
     <ul>
       <li><a href="//www.idreamsky.com/homes/contact">联系我们</a>|<a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
       <li class="second">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</li>
       <li>地址：深圳市南山区科苑北路科兴科学园A3单元16层</li>
       <li>粤网文〔2016〕6871-1632号 新广出审[2015]186号 </li>
       <li>出版物号：ISBN 978-7-89390-007-5 文网游备字〔2016〕Ｍ-SLG 0504 号</li>
       <li>客服: 4008400188 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;媒体合作: 0755-86110235</li>
       <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
       <li>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
     </ul>
  </div>
</div>

<div class="zhezao"></div>
<div class="biaodan">
    <span class="cha"><img src="<?php echo $full_base_url ?>/wap/images/cha.jpg" /></span>
    <!--
    <input type="radio" name="banben"  value="1" class="radio radio1" checked="checked"><label for="a" class="radio lab1"><img src="<?php echo $full_base_url ?>/wap/images/p4_2.png" /></label><br>
    <input type="radio" name="banben"  value="2" class="radio radio2"><label for="b" class="radio lab2" ><img src="<?php echo $full_base_url ?>/wap/images/p4_1.png" /></label>
    -->
    <input type="text" id="shuru" value="请输入手机号" />
    <a class="yuyue" href="#"></a> 
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

           
		 $('.close').click(function(){
			 $('.donwnload_fc').hide();
			 })
 
 
</script>
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.download').attr('href','//cqb.uu.cc/activity/cqb/weixingw.html');
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

                var img_url_xz = $('.xz_down img').attr('src');
			    var img_url_yy = $('.vip_yy img').attr('src');
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					   //$('.download').attr('href','//lnk8.cn/Y1Qdks')
					   //document.write(document.referrer);
					    var ref = document.referrer;
						//var refer = ref.substr(0,22);
						//alert(refer);
						if(ref == "//cqb.uu.cc/home/"){
							$(".download").attr("href","<?php BLOCK('nbd_ios_download') ?>");
							}else{
								$(".download").attr("href","<?php BLOCK('nbd_ios_download') ?>");
								}
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					   $('.download').click(function(){
						   alert('安卓版本7月上线，VIP精英礼包预约中！');
						   })
					
				}



return false; 
} 
} 
</script> 
<!--
<script type="text/javascript">
$(function(){
	 //遮罩层
	$('#yu_y').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
		})
	$('.cha').click(function(){
		$('.biaodan').hide();
		$('.zhezao').hide();
		$('#shuru').attr('value','请输入手机号');
		})

	var myreg = /^1[3458]\d{9}$/;
	$('#shuru').click(function(){
		$(this).attr('value','');
		})

    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		
		if(phone == '请输入手机号' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				var type = $('input:radio[name="banben"]:checked').val();
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:1,collect_name:70},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 alert("您已预约成功，开测当天我们将抽取部分玩家发放激活码!");
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
-->
</body>
</html>
