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
<link rel="stylesheet" href="<?php echo $full_base_url ?>/v2/css/style.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?145929d32596d329ee661e3c6663e368";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>


<div class="top1">
	<div class="wrap">
    	<a class="pa home_logo fHide" href="//cqb.uu.cc/home" target="_self" title="《苍穹变》官网">《苍穹变》官网</a>
        <div class="pa nav">
        	<ul>
            	<li><a href="//cqb.uu.cc/home" target="_self">官网首页<br><i>HOME</i></a></li>
                <li><a href="#game_tese" target="_self">游戏特色<i>GAME FEATURES</i></a></li>
                <li><a href="#game_data" target="_self">游戏资料<i>GAME DATA</i></a></li>
                <li><a href="//bbs.uu.cc/forum-302-1.html" target="_blank">官方论坛<i>BBS</i></a></li>
            </ul>
        </div>
        <a class="pa down_link fHide" href="#link">游戏下载</a>
    </div>
</div>
<div class="top2">
	<div class="wrap">
    	<a class="pa vedio_btn vedio_click" href="javascript:;" title="播放视频"></a>
    </div>
</div>
<div class="top3">
	<div class="wrap">
    	<a class="down_link" href="<?php BLOCK('ios_download_url') ?>" id="ios" title="苹果下载"></a>
		<a class="down_link" href="<?php BLOCK('android_download_url') ?>" id="az" title="安卓下载"></a>
    	<input id="shuru" type="text" value="请输入手机号领取礼包" />
		<a class="lq" href="javascript:;"></a>
    </div>
</div>
<div class="main2 clearfix">
	<div class="wrap">
    	<div id="game_tese">
        	<div class="fl switch">
            	<ul class="runContent">
            	<?php
            	SHOW_DATAS('<li><a href="@@STR2@@"><img src="@@STR1@@"></a></li>','m-d',1,100,0,array('OrderBy'=>'`int1` asc'));
            	?>
                </ul>
                <ul class="triggers">
                <?php
            	SHOW_DATAS('<li></li>','m-d',1,100,0,array());
            	?>
                </ul>
            </div>
            <div class="fr tab new_box">
                <div class="news_tab">
                	<ul class="tab_hd">
                        <li><a href="javascript:;" target="_self">最新</a></li>
                        <li><a href="javascript:;" target="_self">公告</a></li>
                        <li><a href="javascript:;" target="_self">新闻</a></li>
                        <li><a href="javascript:;" target="_self">活动</a></li>
                    </ul>
                    <a class="pa more fHide" href="<?php CATEGORY_URL('新闻') ?>" title="更多">更多</a>
                </div>
                <div class="new_list">
                	<ul class="tab_con">
                    	<?php
						SHOW_NEWS('<li><a href="@@URL@@">[新闻]@@TITLE@@</a><span>@@DATE@@</span></li>','m-d','新闻',2,0,array());
	
						SHOW_NEWS('<li><a href="@@URL@@">[公告]@@TITLE@@</a><span>@@DATE@@</span></li>','m-d','公告',2,0,array());
	
						SHOW_NEWS('<li><a href="@@URL@@">[活动]@@TITLE@@</a><span>@@DATE@@</span></li>','m-d','活动',2,0,array());
						?>
                    </ul>
                    <ul class="tab_con">
                    	<?php
						SHOW_NEWS('<li><a href="@@URL@@">[公告]@@TITLE@@</a><span>@@DATE@@</span></li>','m-d','公告',6,0,array());
						?>
                    </ul>
                    <ul class="tab_con">
                    	<?php
						SHOW_NEWS('<li><a href="@@URL@@">[新闻]@@TITLE@@</a><span>@@DATE@@</span></li>','m-d','新闻',6,0,array());
						?>
                    </ul>
                    <ul class="tab_con">
                    	<?php
						SHOW_NEWS('<li><a href="@@URL@@">[活动]@@TITLE@@</a><span>@@DATE@@</span></li>','m-d','活动',6,0,array());
						?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide">
            <ul class="clearfix">
                <li class="p1 cur">
                    <span style="display:none;"></span>
                    <img src="<?php echo $full_base_url ?>/v2/images/slide1.jpg" width="660" alt="">
                </li>
                <li class="p2">
                    <span></span>
                    <img src="<?php echo $full_base_url ?>/v2/images/slide2.jpg" width="660" alt="">
                </li>
                <li class="p3">
                    <span></span>
                    <img src="<?php echo $full_base_url ?>/v2/images/slide3.jpg" width="660" alt="">
                </li>
                <li class="p4">
                    <span></span>
                    <img src="<?php echo $full_base_url ?>/v2/images/slide4.jpg" width="660" alt="">
                </li>
                <li class="p5">
                    <span></span>
                    <img src="<?php echo $full_base_url ?>/v2/images/slide5.jpg" width="660" alt="">
                </li>
        	</ul>
        </div>
        <div class="fl">
        	<div class="data_box">
        		<div id="game_data" class="con_tit"><h2>游戏资料</h2></div>
                <div class="data_con">
                	<div class="item_tit"><h2>新手入门</h2></div>
	                	<ul class="item_list">
	                	<?php
	                		SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>','m-d','新手入门',100,0,array());
	                	?>
	                	</ul>
                    <div class="item_tit"><h2>高手进阶</h2></div>
	                    <ul class="item_list item_list2">
	                    <?php
	                		SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>','m-d','高手进阶',100,0,array());
	                	?>
	                    </ul>
                    <div class="item_tit"><h2>特色玩法</h2></div>
                    <!-- <ul class="item_list item_list3"> -->
                    <ul class="item_list">
                    	<?php
	                		SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a></li>','m-d','特色玩法',100,0,array());
	                	?>
                    </ul>
                </div>
            </div>
            <div class="media_box">
            	<div class="con_tit"><h2>媒体专区</h2></div>
                <div class="media_con tab">
                	<ul class="tab_hd clearfix">
                	<?php
                		SHOW_DATAS('<li @@FIRST_CONTENT1@@ @@LAST_CONTENT1@@>@@LABEL@@</li>','m-d',4,100,0,array('FirstContent1'=>'class="current"','LastContent1'=>'class="nomg"','OrderBy'=>'`int1` asc'));
                	?>
                    </ul>
                    
                    <?php
                    	SHOW_DATAS('<div class="tab_con" style="display:@@FIRST_CONTENT1@@"><div class="mf_frame"><iframe src="@@STR1@@" frameborder="0" width="652" height="180" scrolling="no"></iframe></div></div>','m-d',4,100,0,array('FirstContent1'=>'block','OrderBy'=>'`int1` asc'));
                    ?>
                </div>
            </div>
        </div>
        <div class="fr">
        	<a class="video_click" href="javascript:;"><img src="<?php echo $full_base_url ?>/v2/images/video_pic.jpg" /></a>
            <a class="jietu_click" href="javascript:;"><img src="<?php echo $full_base_url ?>/v2/images/jietu_pic.jpg" /></a>

            <div class="links_box">
            	<div class="con_tit"><h2>友情链接</h2></div>
                <ul>
                <?php
                	SHOW_DATAS('<li><a href="@@STR1@@" target="_blank">@@LABEL@@</a></li>','m-d',6,100,0,array());
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>


<!--    底部开始      -->
<?php require_once "_footer.ctp";?>

<div class="pop_right">
	<ul>
    	<li><a target="_blank" href="<?php BLOCK('weibo_url') ?>" title="新浪微博"></a></li>
        <li><a target="_blank" href="<?php BLOCK('baidu_tieba_url') ?>" title="百度贴吧"></a></li>
        <li><a target="_blank" href="<?php BLOCK('forum_url') ?>" title="官方论坛"></a></li>
        <li><a target="_blank" href="<?php BLOCK('jiuyou_forum_url') ?>" title="九游论坛"></a></li>
    </ul>
    <a id="toTop" class="toTop" href="javascript:;"></a>
</div>

<div class="biaodan" style="display:none;">
    <span class="close"></span>
    <input type="radio" name="banben"  value="1" class="radio radio1" checked="checked"><label for="a" class="radio lab1">iOS预约</label><br>
    <input type="radio" name="banben"  value="2" class="radio radio2"><label for="b" class="radio lab2" >安卓预约</label><br>
    <input type="text" id="shuru" value="输入手机号预约礼包"/>
    <a class="yuyue" href="javascript:;"></a> 
</div>

<div class="sp">
	<a href="javascript:void(0)"></a>
    <embed
    type="application/x-shockwave-flash"
    src="<?php BLOCK('index_video_url') ?>" id="movie_player" name="movie_player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true"
    flashvars="isShowRelatedVideo=false&showAd=0&show_pre=1&show_next=1&isAutoPlay=true&isDebug=false&UserID=&winType=interior&playMovie=true&MMControl=false&MMout=false&RecordCode=1001,1002,1003,1004,1005,1006,2001,3001,3002,3003,3004,3005,3007,3008,9999"
    pluginspage="//www.macromedia.com/go/getflashplayer" width="700" height="488">
</div>

<!--游戏截图 浮层-->
<div class="pic_slide">
	<a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="<?php echo $full_base_url ?>/v2/images/loading.gif" width="32" height="32"></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
	<ul class="slide_content">
		<?php
        SHOW_DATAS('<li><img src="@@STR1@@" /></li>','m-d',5,100,0,array());
        ?>
    </ul>
    <div class="bottom">
    	共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<div class="zhezao"></div>
<div class="lb_tk">
   <p class="xt">
     <select id="select"> 
       <option value="安卓">安卓</option>
       <option value="苹果">苹果</option>
      </select>
   </p>
   <p class="yzm">
      <input type="text" id="yz_m" />
      <img src="" width="120" height="50" id="yz_img" />
   </p>
   <a href="#" class="lk_lq"></a>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
//$(function(){
//  var bdUrl = window.location.href;
//  if(bdUrl == "//cqb.uu.cc/home"){
//	   $("#az").attr("href","<?php GET_BLOCK('nbd_ios_download') ?>");
//	}else{
//		$("#az").attr("href","<?php GET_BLOCK('bd_pc_ios_download') ?>");
//	}
//})
</script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jbase64.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/js/pic-slide.js"></script>
<script type="text/javascript">

/*五屏切换*/
$(".slide").find("li").click(function(){
	if($(this).hasClass("cur")){return false;}
	var li = $(this);
	sibling = li.siblings();
	li.find("span").fadeOut(200,function(){
		li.animate({"width":"660px"},500,function(){
			li.addClass("cur");
		});
		sibling.animate({"width":"98px"},500,function(){
			sibling.removeClass("cur");
			sibling.find("span").fadeIn(200);
		});
	});
});

$(function(){
	$('.zhezao').click(function(){
		$('.zhezao').hide();
		$('.lb_tk').hide();
	})
	
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		if($(this).attr('value') == '请输入手机号领取礼包'){}
		  $(this).attr('value','');
		})
		
	$('#shuru').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','请输入手机号领取礼包');
		}
		})	
    var phone;
    $('.lq').click(function(){
		 phone = $('#shuru').val();
		
		if(phone == '请输入手机号领取礼包' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				$('.zhezao').show();
                $('.lb_tk').show();
				$.ajax({
					type:"POST",
					url:"/get_verify_code",
					data:{charnum:4,mode:'img',width:120,height:50},
					dataType:"json",
					success:function(res){
						if(res.ret == 0){
							var imgUrl = BASE64.decoder(res.url);
							$("#yz_img").attr('src',imgUrl);
						}else {
							alert("获取失败");
						}		
				  }
				  });
				  
				  
					}	
		}
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
					var imgUrl = BASE64.decoder(res.url);
					//alert(imgUrl);
					$("#yz_img").attr('src',imgUrl);
				}else {
					alert("获取失败");
				}
		  }
		  });
		})	
	    var type;
		var code_id;
	    $('.lk_lq').click(function(){
			 var verify = $('#yz_m').val();
			 var value = $('#select').val();
			 if(value == '安卓'){
				 type=2;
				 code_id = 67;
				 }else{
				 type=1;
				 code_id = 65;
			}
			 $.ajax({
						type:"POST",
						url:"/send_code_by_sm",
						data:{phone:phone,code_id:code_id,verify:verify,type:type,mode:'img'},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("您已成功领取礼包一枚，请尽快下载游戏使用哟~");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else{
								alert("发送失败");
							}
					  }
				});
			
		})
	
})
</script>


<script type="text/javascript">
$(document).ready(function(){

	
	$(".date_point a").hover(function() {
		$(this).next().addClass("dres_show");
	}, function() {
		$(this).next().removeClass("dres_show");
	});
	
	var dl = $(".down_link");
	var pd = $(".pop_down");
	dl.hover(function() {
		pd.addClass("pop_down_show");
	}, function() {
		pd.removeClass("pop_down_show");
	});
	pd.hover(function() {
		pd.addClass("pop_down_show");
	}, function() {
		pd.removeClass("pop_down_show");
	});
	
	$('.sp a').click(function(){
		 $('.sp').hide();
		 $('.zhezao').hide();
	})
	$('.video_click').click(function(){
		$('.zhezao').show();
		$('.sp').show();
	})
	
	$('#yu_y').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
		})
	$('.close').click(function(){
		$('.biaodan').hide();
		$('.zhezao,.pic_slide').hide();
		$('#shuru').attr('value','输入手机号预约礼包');
		})
	$('.zhezao').click(function(){
		$('.biaodan').hide();
		$('.zhezao,.pic_slide').hide();
		$('#shuru').attr('value','输入手机号预约礼包');
		$('.sp').hide();
		})
	//手机号预约
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		if($(this).attr('value') == '输入手机号预约礼包'){}
		  $(this).attr('value','');
		})
		
	$('#shuru').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','输入手机号预约礼包');
		}
		})	
		
    $('.yuyue').unbind("click").click(function(){
		var phone = $('#shuru').attr('value');
		if(phone == '输入手机号预约礼包' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				var type = $('input:radio[name="banben"]:checked').val();
				
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:70},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 alert("您已成功预约！开测当天我们将抽取部分玩家发放VIP礼包！");
						}else{
						   alert("预约失败！");
						}
					}
				});

			}	
		}
	})
	/* 图片切换*/
    $(".switch").Switch({
        moveInterval:400,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

	
	/*tab 选项卡*/
	$('.tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('li').each(function(i){
			if(i==0){
				$(this).addClass('current');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).click(function(){
				$(this).siblings('li').removeClass('current');
				$(this).addClass('current');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
	})
	
	
	$("#toTop").click(function() {
		$("body,html").animate({scrollTop:0},500);
	});
});
</script>
</body>

</html>
