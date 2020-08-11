<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<link rel="stylesheet" href="//hnd.uu.cc/hnd.uu.cc/v2/css/style.css" />

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
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
<link rel="shortcut icon" href="//hnd.uu.cc/hnd.uu.cc/favicon.ico">
</head>

<body class="main">

<div class="top" style="background:url(//hnd.uu.cc/hnd.uu.cc/v2/images/index_banner1.jpg) no-repeat 50% 0;">

<?php
$navid='n1';
require_once 'nav.ctp';
//require_once GET_BASE_DIR().'nav.ctp';
?>


    <div class="wrap">
    	<div class="pa main_code"><img src="<?php BLOCK('game_download_qrcode') ?>" /><span>扫描下载游戏</span></div>
        <div class="pa down_btns"><a href="<?php BLOCK('ios_download_url') ?>" target="_blank" title="App Store下载"></a><a href="<?php BLOCK('android_download_url') ?>" target="_blank" title="安卓下载"></a></div>
        <a id="vedio_edit1" class="pa vedio_btn video_btn_link" name="<?php BLOCK('index_video_url') ?>" href="javascript:;"  title="视频播放"><span></span></a>
        <div class="content">
        	<div class="fl ad_bar">
            	<ul>
                	<li><a id="gift_date" href="javascript:;"><img src="//hnd.uu.cc/hnd.uu.cc/v2/images/nav_a1.jpg" /></a></li>

                	<?php
	                	SHOW_DATAS('<li><a href="@@STR2@@"><img src="@@STR1@@" /></a></li>','m-d',4,2,0,array());
                	?>

                </ul>
            </div>
            <div class="fl switch">
            	<ul class="runContent">
            	<?php
            		SHOW_DATAS('<li><a href="@@STR2@@"><img src="@@STR1@@" /></a></li>','m-d',0,100,0,array('OrderBy'=>'`int1` asc'));
            	?>
                </ul>
                <ul class="triggers">
                <?php
                	SHOW_DATAS('<li @@FIRST_CONTENT1@@></li>','m-d',0,100,0,array('FirstContent1'=>'class="cur"'));
                ?>
              	</ul>
            </div>
            <div class="fr news_box tab">
            	<div class="pr news_tab">
                	<ul class="tab_hd">
                    	<li class="on">最新</li>
                        <li>新闻</li>
                        <li>公告</li>
                        <li>活动</li>
                    </ul>
                    <a class="pa news_more" href="<?php CATEGORY_URL('XXX') ?>" title="查看更多&gt;&gt;" target="_blank"></a>

                </div>
                <div class="news_con">
                	<div class="tab_con">
                        <ul>
                        <?php
							SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻','公告','活动'),5,$page,array())
						?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                        <?php
							SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','新闻',5,$page,array())
						?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                        <?php
							SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','公告',5,$page,array())
						?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                        <?php
							SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','活动',5,$page,array())
						?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="main clearfix">
	<div class="wrap clearfix">
		<div class="fl main_left">
        	<h2 class="tit"><em class="icon_hero"></em>英雄介绍<i>HERO INTRODUCTION</i></h2>
            <div class="tese_box">
            	<div class="slide">
                    <ul class="clearfix">
                        <li class="p1 cur">
                            <span style="display:none;" title="火焰导师"></span>
                            <img src="//hnd.uu.cc/hnd.uu.cc/v2/images/hero_big1.jpg" width="521" alt="">
                        </li>
                        <li class="p2">
                            <span title="奥术射手"></span>
                            <img src="//hnd.uu.cc/hnd.uu.cc/v2/images/hero_big2.jpg" width="521" alt="">
                        </li>
                        <li class="p3">
                            <span title="上古蛮族"></span>
                            <img src="//hnd.uu.cc/hnd.uu.cc/v2/images/hero_big3.jpg" width="521" alt="">
                        </li>
                    </ul>
                </div>
            </div>
    	</div>
        <div class="fr main_right">
        	<h2 class="tit"><em class="icon_data"></em>图鉴介绍<i>POKEDEX INTRODUCTION</i></h2>
            <div class="data_box">
            	<div class="data_tab tab">
                	<div class="data_tab_hd">
                    	<ul class="tab_hd">
                        	<li class="on">陷阱图鉴</li>
                            <li>怪物图鉴</li>
                        </ul>
                    </div>
                    <div class="tab_con">
                    	<div class="fl data_switch1">
                            <ul class="runContent">
                            <?php
                            $c=GET_NEWS_COUNT('陷阱图鉴');
                            $p=1;
                            $pn=15;
                            $tri='';
                            while($c > 0)
                            {
                            	echo '<li><ul class="data_img_list">';
                            	SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><img src="@@BIG_IMAGE@@" /></a></li>','m/d','陷阱图鉴',$pn,$p,array());
                            	echo '</ul></li>';

                            	if($p == 1)
	                            	$tri.='<li class="cur"></li>';
	                            else
	                            	$tri.='<li></li>';
                            	$c-=$pn;
                            	$p++;
                            }
                            ?>


                            </ul>
                            <ul class="data_trig triggers1">
                            <?php echo $tri; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_con">
                    	<div class="fl data_switch2">
                            <ul class="runContent">
                            <?php
                            $c=GET_NEWS_COUNT('怪物图鉴');
                            $p=1;
                            $pn=15;
                            $tri='';
                            while($c > 0)
                            {
                            	echo '<li><ul class="data_img_list">';
                            	SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><img src="@@BIG_IMAGE@@" /></a></li>','m/d','怪物图鉴',$pn,$p,array());
                            	echo '</ul></li>';

                            	if($p == 1)
	                            	$tri.='<li class="cur"></li>';
	                            else
	                            	$tri.='<li></li>';
                            	$c-=$pn;
                            	$p++;
                            }
                            ?>

                            </ul>
                            <ul class="data_trig triggers2">
                            <?php echo $tri; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="wrap clearfix">
    	<div class="mid_nav clearfix">
        	<ul>
        	<?php
        		SHOW_DATAS('<li@@LAST_CONTENT1@@><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" alt="" /></a></li>','m-d',5,4,1,array('OrderBy'=>'`int1` asc','LastContent1'=>' class="no_mg"'));
        	?>
            </ul>
        </div>
    	<h2 class="pr tit"><em class="icon_vision"></em>视觉欣赏<i>VISUAL APPRECIATION</i><a class="pa vision_more" href="<?php CATEGORY_URL('官方视频','video') ?>" title="查看更多&gt;&gt;" target="_blank"></a></h2>
        <div class="vision_box tab clearfix">
        	<div class="vision_tab">
            	<ul class="tab_hd">
                	<li class="on">官方视频</li>
                    <li>精彩原画</li>
                    <li>游戏截图</li>
                    <li>玩家作品</li>
                </ul>
            </div>
            <div class="tab_con vedio_tab_con">
            	<ul>
            	<?php
            	SHOW_NEWS('<li><a class="video_btn_link" name="@@CONTENT@@" href="javascript:;"><img src="@@BIG_IMAGE@@" /><span></span><p>@@TITLE@@</p></a></li>','m-d','官方视频',5,$page,array());
            	?>
                </ul>
            </div>
            <div class="tab_con screenshot_con">
            	<ul class="pic_view">
            	<?php
            	SHOW_NEWS('<li><a href="javascript:;"><img src="@@BIG_IMAGE@@" /></a></li>','m-d','精彩原画',5,$page,array());
            	?>
                </ul>
            </div>
            <div class="tab_con screenshot_con">
            	<ul class="pic_view">
                <?php
            	SHOW_NEWS('<li><a href="javascript:;"><img src="@@BIG_IMAGE@@" /></a></li>','m-d','游戏截图',5,$page,array());
            	?>
                </ul>
            </div>
            <div class="tab_con vedio_tab_con">
            	<ul>
            	<?php
            	SHOW_NEWS('<li><a class="video_btn_link" name="@@CONTENT@@" href="javascript:;"><img src="@@BIG_IMAGE@@" /><span></span><p>@@TITLE@@</p></a></li>','m-d','玩家作品',5,$page,array());
            	?>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrap">
    	<div class="fl main_left">
            <h2 class="tit"><em class="icon_media"></em>媒体专区<i>MEDIA ZONE</i></h2>
            <div class="media_box tab">
            	<div class="media_tab">
                	<ul class="tab_hd">
                	<?php
                		SHOW_DATAS('<li @@FIRST_CONTENT1@@>@@LABEL@@</li>','m-d',1,100,0,array('FirstContent1'=>'class="on"'));
                	?>
                    </ul>
                </div>
                <?php
                	SHOW_DATAS('<div class="pr media_con tab_con"><iframe height="120" frameborder="0" width="650" scrolling="no" src="@@STR1@@"></iframe></div>','m-d',1,100,0,array('OrderBy'=>'`int1` asc'))
                ?>
            </div>
        </div>
    	<div class="fr main_right">
            <h2 class="tit"><em class="icon_coop"></em>合作伙伴<i>COOPERATION PARTNER</i></h2>
            <div class="parter_box" id="hzhb_edit">
            <?php
            	SHOW_DATAS('<li><a href="@@STR1@@" target="_blank" title="@@LABEL@@"><img src="@@STR2@@" /></a></li>','m-d',2,100,0,array());
            ?>

            </div>
        </div>
    </div>
</div>

<div class="contact clearfix">
	<div class="wrap">
    	<div class="fl pr contact_wx">
    	<?php
    	echo '<span><img src="'.GET_BLOCK('weixin_qrcode').'" />扫码关注官方微信</span>';
        echo '<h2>微信号：'.GET_BLOCK('weixin_account').'</h2>';
        ?>
            <p>关注官方微信获取最新游戏资讯</p>
        </div>
        <span class="line"></span>
        <div class="fl contact_qq">
        	<h2>官方QQ交流群</h2>
            <ul>
            <?php
            	$qqs=explode(',',GET_BLOCK('qq_group'));
            	$len=count($qqs);
            	for($i=0;$i<$len;$i++)
            		echo '<li><span>官方'.($i+1).'群：'.$qqs[$i].'</span></li>';
            ?>
            </ul>
        </div>
        <span class="line"></span>
        <div class="fl contact_tel">
        	<h2>客服电话</h2>
            <p><?php BLOCK('custom_service_phone_ios') ?>（iOS）<br><?php BLOCK('custom_service_phone') ?>（安卓）</p>
        </div>
        <span class="line"></span>
        <div class="fr contact_wb_tb">
        <?php
        	echo '<a class="contact_wb" href="'.GET_BLOCK('weibo_url').'" target="_blank"></a>';
            echo '<a class="contact_tb" href="'.GET_BLOCK('baidu_tieba_url').'" target="_blank"></a>';
        ?>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="yu_yue">
  <a class="close2" href="javascript:;"></a>
  <p class="choice"><span class="ios on"></span><span class="az"></span></p>
  <p class="biaodan">
  <input type="text" id="shuru" value="请输入手机号">
  <input type="text" id="yz_m" />
  <img src="" id="yz_img" width="100"  height="39" />
  <a href="#" class="yuyue"></a>
  </p>
</div>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="<?php BLOCK('pc_video_img') ?>" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<!--图片浏览-->
<div class="pic_slide">
	<a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="//hnd.uu.cc/hnd.uu.cc/v2/images/loading.gif" width="32" height="32" /></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
	<ul class="slide_content">
        <!--<?php
        SHOW_NEWS('<li style="background:url(@@BIG_IMAGE@@); width:816px; height:459px;"></li>','m-d','游戏截图',5,$page,array());
        ?>-->
    </ul>
    <div class="bottom">
    	共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<div class="zhezao"></div>
<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/js/switch.js"></script>
<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/js/pic-slide.js"></script>
<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/jbase64.js"></script>
<script>
$(function(){

/* 图片切换*/
$(".switch").Switch({
	moveInterval:300,
	interval:5000,
	direction:"alpha",
	handle:".triggers"
});
$(".data_switch1").Switch({
	width:428,
	moveInterval:300,
	interval:9000,
	direction:"alpha",
	handle:".triggers1"
});
$(".data_switch2").Switch({
	width:428,
	moveInterval:300,
	interval:9000,
	direction:"alpha",
	handle:".triggers2"
});

/*tab 选项卡*/
$('.tab').each(function(){
	var _this = $(this);
	_this.find('.tab_hd').eq(0).find('li').each(function(i){
		if(i==0){
			$(this).addClass('on');
			_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
		}
		else
		{
			$(this).removeClass('on');
		}
		$(this).hover(function(){
			$(this).siblings('li').removeClass('on');
			$(this).addClass('on');
			_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
		})
	})
})
/*五屏切换*/
$(".slide").find("li").click(function(){
	if($(this).hasClass("cur")){return false;}
	var li = $(this);
	sibling = li.siblings();
	li.find("span").fadeOut(200,function(){
		li.animate({"width":"521px"},500,function(){
			li.addClass("cur");
		});
		sibling.animate({"width":"85px"},500,function(){
			sibling.removeClass("cur");
			sibling.find("span").fadeIn(200);
		});
	});
});
//微信
var dl = $(".wx");
var pd = $(".wx_pop");
dl.hover(function() {
	pd.addClass("wxin_pop_show");
}, function() {
	pd.removeClass("wxin_pop_show");
});
//导航
var navL = $(".nav_hover");
var itemB = $(".nav_item");
navL.hover(function() {
	itemB.addClass("nav_item_show");
}, function() {
	itemB.removeClass("nav_item_show");
});
itemB.hover(function() {
	itemB.addClass("nav_item_show");
}, function() {
	itemB.removeClass("nav_item_show");
});


   //领取礼包事件

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

	//预约事件

	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})

	$('#gift_date').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
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
	$('.close2').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
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
				//var type = $('.xz_down').attr('data-type');
				if($('.az').is('.on')){
					type = 2;
					}else{
					type = 1;
				}

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
	var type;
	var myreg = /^1[34578]\d{9}$/;
		$('#shuru').focus(function(){
		if($(this).attr('value') == '请输入手机号'){}
		  $(this).attr('value','');
		})

	$('#shuru').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','请输入手机号');
		}
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
	//页面头部视频
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.pic_slide').hide();
		$('.zhezao').hide();
	})
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
