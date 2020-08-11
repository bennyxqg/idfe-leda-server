<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" href="/ahcq.uu.cc/css/style.css" />
<link rel="stylesheet" href="/ahcq.uu.cc/css/index.css" />
<link rel="shortcut icon" href="/ahcq.uu.cc/favicon.png" />
</head>

<body style="background:none;">
    <div class="pg-header">
         <?php require_once 'top.ctp';?>
    </div>
    <div class="page_main page_main_n">
        <div class="f_left">
            <span class="d_ewm"><img src="<?php echo GET_BLOCK('game_download_qrcode');?>" width="151" height="151" /></span>
            <p class="down_n">
                <a href="<?php echo GET_BLOCK('android_download_url');?>" class="d_n_az"><img src="/ahcq.uu.cc/images/down_az_n.png" width="167" height="57" /></a>
                <a href="<?php echo GET_BLOCK('ios_download_url');?>" class="d_n_ios"><img src="/ahcq.uu.cc/images/down_ios_n.png" width="167" height="57" /></a>
            </p>
        </div>
    	<div class="wrap">
        	<div class="pr news_top">
                <h2 class="content_tit"><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="news_time"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>

                <div class="pa site_nav">当前位置：<a href="#link" target="_self">首页</a> &gt; 新闻中心</div>
            </div>
            <div class="news_content">
            	<?php
					echo GET_CURRENT_NEWS_INFO('content');
				?>
            </div>
        </div>
    </div>

    <?php require_once 'footer.ctp';?>


<script type="text/javascript" src="/ahcq.uu.cc/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.tab_sj li').each(function(i){
		$(this).on('click',function(){
		   $(this).addClass('on_click').siblings().removeClass('on_click');	
		   $('.bar_sj li').eq(i).show().siblings().hide();
		})
	})
	
	$(".right-pop").click(function(){
		$(this).animate({right:'-53px'},"fast",function(){
			 $(".right-pop-active").animate({right:'0px'});
		 });
	});
	$(".pop-close").click(function(){
		$('.right-pop-active').animate({right:'-212px'},function(){
			 $(".right-pop").animate({right:'0px'});
		 });
	});
	
	/*tab 选项卡*/
	$('.tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('a').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).click(function(){
				$(this).siblings('a').removeClass('on');
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
	})
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
});	
</script>
<script>
var speed=20; //数字越大速度越慢
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
</script>
</body>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</html>
