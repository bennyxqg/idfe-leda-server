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
<link href="<?php echo $full_base_url ?>/wap/css/swiper.min.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/bander.jpg" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/down.png" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/icon.png" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/yy.png" />

<link rel="prefetch" href="<?php echo $topData['other']['index_video_url'];?>" />
</head>

<body>
<div id="container">
	
   <section class="part1" id="part1">	
		<header>
			<h1 class="logo"><img src="<?php echo $full_base_url ?>/wap/images/icon.png" /><img src="<?php echo $full_base_url ?>/wap/images/icon_logo.png"></h1>
			<a class="nav" href="javascript:;"><img src="<?php echo $full_base_url ?>/wap/images/nav.png" /></a>
		</header>
		<p class="down_yy">
			<a href="javascript:;" class="down" data-type = ""><!--<img src="<?php echo $full_base_url ?>/wap/images/down.png" />--></a>
			<a href="javascript:;" class="yy"><img src="<?php echo $full_base_url ?>/wap/images/yy.png" /></a>
            <a href="javascript:;" class="video"><img src="<?php echo $full_base_url ?>/wap/images/video.png" /></a>
		</p>
        <!--
		<span class="next"><img src="<?php echo $full_base_url ?>/wap/images/next.png"></span>
        -->
		<div class="nav_hidden">
			<ul>
				<li><a href="//tanke.uu.cc">官网首页</a></li>
				<li><a href="//tanke.uu.cc/news/98.html">新闻公告</a></li>
				<li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378">官方论坛</a></li>
				<li><a class="gzlfl" href="javascript:;">关注领福利</a></li>
			</ul>
		</div>
   </section>
   
   <section class="part2">
   	    <h2><strong>新闻公告</strong></h2>
   	    <div class="swiper-container swiper1">
	        <div class="swiper-wrapper">
	             <?php 
                $imgs = $topData['imgs'];
		            if(!empty($imgs)){
		            	foreach ($imgs as $key=>$v){
		            ?>
		            		<div class="swiper-slide"><img src="<?=$v['str1']?>" /></div>
		            <?php 
		            	}
		            
		            }
		            
		            ?>
	        </div>
	        <!-- Add Pagination -->
	        <div class="swiper-pagination swiper-pagination1"></div>
	    </div>
	    <div class="new">
	    	<div class="lm">
		    	<p class="lanmu">
		    		<a href="javascript:;" class="on">最新</a>
		    		<a href="javascript:;">公告</a>
		    		<a href="javascript:;">新闻</a>
                    <a href="javascript:;">资料</a>
		    	</p>
		    	<a href="//tanke.uu.cc/news/98.html" class="more"><img src="<?php echo $full_base_url ?>/wap/images/more.png" /></a>
	    	</div>
	    	<div class="new_nr">
	    		<ul style="display: block;">
                    <?php 
                	$zhonghe = $topData['total'];
                	if(!empty($zhonghe)){
                		foreach ($zhonghe as $key=>$v){
                    ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
	    		</ul>
	    		<ul>
                    <?php 
                	$zhonghe = $topData['news'];
                	if(!empty($zhonghe)){
                		foreach ($zhonghe as $key=>$v){
                ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
	    		</ul>
	    		<ul>
                    <?php 
                	$zhonghe = $topData['gong_gao'];
                	if(!empty($zhonghe)){
                		foreach ($zhonghe as $key=>$v){
                ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
	    		</ul>
	    		
	    		<ul>
                    <?php 
                	$ziliao = $topData['ziliao'];
                	if(!empty($ziliao)){
                		foreach ($ziliao as $key=>$v){
                ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
	    		</ul>
	    	</div>
	    </div>
	    <div class="add_list">
	    	<h2><strong>游戏特色</strong></h2>
		    <div class="swiper-container swiper3">
		        <div class="swiper-wrapper">
		        <?php if (!empty($topData['imgs2'])):?>
		        <?php foreach ($topData['imgs2'] as $k => $v):?>
		        <div class="swiper-slide"><img src="<?php echo $v['str2'];?>" /></div>
		        <?php endforeach;?>
		        <?php endif;?>
		        </div>
		        
		        <div class="swiper-pagination swiper-pagination3"></div>
	
	        </div>
	    </div>
	    <footer>
	   	     <a href="<?php echo $down_url;?>" class="down_load"><!--<img src="<?php echo $full_base_url ?>/images/down.png" width="100%" /> --></a>
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
             <a style="display:block;width:50px;height:50px;margin:0 auto;" href="//sq.ccm.gov.cn/ccnt/sczr/service/business/emark/gameNetTag/4028c08c5529fca301552a4f894b0993"><img src="//cqb.uu.cc/cqb.uu.cc/images/youxidzbq.jpg" width="50px"></a>
	   </footer>
   </section>
   
   
  
</div>	
<!--  预约弹框  -->
<div class="zhezao"></div>
<div class="video_" style="display:none;">
    <video id="media" controls="controls" width="560" height="380" src="<?php echo $topData['other']['index_video_url'];?>" preload="auto"></video>
</div>
<div class="biaodan">
    <h5>输入手机号，礼包将通过短信发送</h5>
    <input type="text" id="shuru" value="请输入手机号码" />
    <a class="yuyue" href="javascript:;"><img src="<?php echo $full_base_url ?>/wap/images/ljyy.jpg"></a> 
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/Swiper/3.0.7/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    
    var swiper3 = new Swiper('.swiper3', {
        pagination: '.swiper-pagination3',
        paginationClickable: '.swiper-pagination3',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    
</script>
<script>
$(function(){
	/*
	var startX = 0, startY = 0;  
	function touchstart(event){
		event.preventDefault(); 
		var touch = event.touches[0]; 
		var x = Number(touch.pageX); 
		var y = Number(touch.pageY); 
		startX = x;  
		startY = y; 
	}
	function touchmove(event){
		event.preventDefault(); 
		var touch = event.touches[0]; 
		var x = Number(touch.pageX); 
		var y = Number(touch.pageY); 
		var lasty = y-startY;
		if (y - startY < 200) {   
		   $('.part1').css('-webkit-transform','translate3d(0,-100%,0)');
		   $('.part2').addClass('fadeIn');
		}  
		
	}
    
	document.getElementById('part1').addEventListener('touchstart', touchstart, false); 
	document.getElementById('part1').addEventListener('touchmove', touchmove, false); 
    */
	
	var media = document.getElementById('media');
	$('.video').on('touchstart',function(){
		$('.zhezao').show();
		$('.video_').show();
		media.play();
	})
	
	$('.gzlfl').on('click',function(){
		$('.nav_hidden').hide();
		var offTop = $('.part1').height()+$('.part2').height();
		//$('body').animate({scrollTop:offTop},800);
		$('body').scrollTop(offTop);
	})
	
	$('.nav').on('touchstart',function(){
		$('.nav_hidden').toggle();
	})

	$('.yy').on('touchstart',function(){
		$('.zhezao').show();
		$('.biaodan').show();
	})
	$('.down').on('touchstart',function(){
		location.href="<?php echo $down_url;?>";
	})
	$('.zhezao').on('touchstart',function(){
		$('.zhezao').hide();
		$('.biaodan').hide();
		$('#shuru').attr('value','请输入手机号码');
		$('.video_').hide();
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
				var type = $('.xz_down').attr('data-type');
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:1,collect_name:98},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 alert("您已预约成功,上线当天我们将会通过短信发放礼包!");
						}else{
						   alert("预约失败！");
						}
					}
				});

			}	
		}
	    })
	
	
	
	$('.lanmu a').each(function(i){
		$(this).on('click',function(){
			$(this).addClass('on').siblings().removeClass('on');
			$('.new_nr ul').eq(i).show().siblings().hide();
		})
	})
	
})
</script>

    

</body>
</html>
