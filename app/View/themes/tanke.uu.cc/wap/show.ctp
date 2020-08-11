<?php 
require_once "include.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?> 
<link href="<?php echo $full_base_url ?>/wap/css/index.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/down.png" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/icon.png" />
</head>

<body>
<div id="container">
	
   <section class="part1_new" >	
		<header class="con">
			<h1 class="logo"><img src="<?php echo $full_base_url ?>/wap/images/icon.png" /><img src="<?php echo $full_base_url ?>/wap/images/icon_logo.png"></h1>
			<a class="nav" href="javascript:;"><img src="<?php echo $full_base_url ?>/wap/images/nav.png" /></a>
		</header>
		
		<div class="nav_hidden">
			<ul>
				<li><a href="//tanke.uu.cc">官网首页</a></li>
				<li><a href="//tanke.uu.cc/news/98.html">新闻公告</a></li>
				<li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378">官方论坛</a></li>
				<li><a href="//tanke.uu.cc/manage/upload/image/tanke.uu.cc/2016-05-11/20160511_102250_750415.jpg">关注领福利</a></li>
			</ul>
		</div>
   </section>
   
   <section class="part2_new">
   	    <div class="place">
   	    	<a href="//tanke.uu.cc" class="back">返回</a>
   	    	<span class="dq_title">新闻中心</span>
   	    </div>
	    
	    <div class="content">
	    	 <h1><? echo GET_CURRENT_NEWS_INFO('title');?></h1>
	    	 <span class="time">时间：<?php echo date("Y-m-d i:s",GET_CURRENT_NEWS_INFO('created'));?></span>
	    	 <article>
	    	 <?php
					echo GET_CURRENT_NEWS_INFO('content');
				?>
	    	 </article>
	    </div>
	    
	    <footer>
	   	     <a href="<?php echo $down_url;?>" class="down_load"><img src="<?php echo $full_base_url ?>/wap/images/down.png" width="100%" /></a>
	   	     <div class="eqt">
	   	     	<p>
	   	     		<span>关注公众号</span>
	   	     		<span><?php echo $topData['other']['weixin_account'];?></span>
	   	     	</p>
	   	     	<p>
	   	     		<span>加入官方QQ群</span>
	   	     		<span><?php echo $topData['other']['qq_group'];?></span>
	   	     	</p>
	   	     	<p>
	   	     		<span>关注官方贴吧</span>
	   	     		<a href="<?php echo $topData['other']['baidu_tieba_url'];?>">一键前往</a>
	   	     	</p>
	   	     </div>
	   </footer>
	    
   </section>
   
   
  
</div>	

<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.8.0.min.js"></script>

<script>
$(function(){
	 
	$('.nav').on('touchstart',function(){
		$('.nav_hidden').toggle();
	})
     
    $('.content article img').css({'max-width':'100%','display':'block','margin':'0 auto'});
	
})
</script>

</body>
</html>
