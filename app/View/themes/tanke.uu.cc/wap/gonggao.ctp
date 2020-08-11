<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>坦克大战</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="images/down.png" />
<link rel="prefetch" href="images/icon.png" />
</head>

<body>
<div id="container">
	
   <section class="part1_new" >	
		<header class="con">
			<h1 class="logo"><img src="images/icon.png" /><img src="images/icon_logo.png"></h1>
			<a class="nav" href="javascript:;"><img src="images/nav.png" /></a>
		</header>
		
		<div class="nav_hidden">
			<ul>
				<li><a href="#">官网首页</a></li>
				<li><a href="#">新闻公告</a></li>
				<li><a href="#">官方论坛</a></li>
				<li><a href="#">关注领福利</a></li>
			</ul>
		</div>
   </section>
   
   <section class="part2_new">
   	    <div class="place">
   	    	<a href="#" class="back">返回</a>
   	    	<span class="dq_title">新闻中心</span>
   	    </div>
	    <div class="new">
	    	<div class="lm">
		    	<p class="lanmu">
		    		<a href="#">最新</a>
		    		<a href="#" class="on">公告</a>
		    		<a href="#">新闻</a>
		    	</p>
		    	<a href="#" class="more"><img src="images/more.png" /></a>
	    	</div>
	    	<div class="new_nr">
	    		<ul style="display: block;">
	    			<li><a href="#">我是公告我是公告我是公告我是公告</a><span class="date">04/28</span></li>
	    			<li><a href="#">我是新闻我是新闻我是新闻</a><span class="date">04/28</span></li>
	    			<li><a href="#">我是新闻我是新闻我是新闻</a><span class="date">04/28</span></li>
	    			<li><a href="#">我是新闻我是新闻我是新闻</a><span class="date">04/28</span></li>
	    			<li><a href="#">我是新闻我是新闻我是新闻</a><span class="date">04/28</span></li>
	    		</ul>
	    	</div>
	    	<a href="#" class="jz_more">加载更多</a>
	    </div>
	    
	    <footer>
	   	     <a href="#" class="down_load"><img src="images/down.png" width="100%" /></a>
	   	     <div class="eqt">
	   	     	<p>
	   	     		<span>扫码关注公众号</span>
	   	     		<span>tkdz</span>
	   	     	</p>
	   	     	<p>
	   	     		<span>加入官方QQ群</span>
	   	     		<span>123456789</span>
	   	     	</p>
	   	     	<p>
	   	     		<span>关注官方贴吧</span>
	   	     		<a href="#">一键前往</a>
	   	     	</p>
	   	     </div>
	   </footer>
	    
   </section>
   
   
  
</div>	

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>

<script>
$(function(){
	 
	$('.nav').on('touchstart',function(){
		$('.nav_hidden').toggle();
	})


})
</script>

</body>
</html>
