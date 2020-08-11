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
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/swiper.min.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>
<div class="pr nav">
    <a href="#link" target="_blank" class="pa logo"><img src="<?php BLOCK('game_icon') ?>" /></a>
    <h2><b>快乐点点消</b><span>国民级点击消除闯关手游</span></h2>
    <div class="pa nav_menu">
        <a id="n1" class="on" href="//ddx.uu.cc/">首页</a>
        <a id="n2" href="<?php CATEGORY_URL('活动') ?>">活动</a>
        <a id="n3" href="<?php CATEGORY_URL('新闻') ?>">新闻</a>
        <a id="n4" href="<?php CATEGORY_URL('攻略') ?>">攻略</a>
        <a id="n5" href="<?php BLOCK('forum_url') ?>">论坛</a>
    </div>
    <div class="pa wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></span></div>
    <div class="pa wxin_qq_pop wxin_pop"><img src="<?php BLOCK('weixin_qrcode') ?>" /><h3>微信公众号</h3><span>扫描二维码关注<br><?php BLOCK('weixin_account') ?></span></div>
    <div class="pa wxin_qq_pop qq_pop"><img src="<?php BLOCK('qq_qrcode') ?>" /><span>加入QQ群</span><h3><?php BLOCK('qq_group') ?></h3></div>
</div>
<div class="main1">
	<div class="wrap">
    	<a class="pa video_btn video_btn_link" name="<?php BLOCK('index_video_url') ?>" title="播放精彩视频" href="javascript:;"></a>
        <div class="pa main_code"><img src="<?php BLOCK('game_download_qrcode') ?>" /><span>扫描下载游戏</span></div>
        <div class="pa down_btns"><a class="ios_down" href="<?php BLOCK('pc_ios_download_url') ?>" target="_blank" title="App Store下载"></a><a class="android_down" href="<?php BLOCK('pc_android_download_url') ?>" target="_blank" title="安卓下载"></a></div>
    	<div class="pa gift_date"><input class="pa phone" name="phone" value="请输入手机号" maxlength="11" type="tel"><a class="pa get_gift" href="javascript:;"></a></div>
    </div>
</div>
<div class="main2">
	<div class="wrap">
    	<!-- <div class="fl banner_pics"><img src="<?php BASE_URL() ?>images/pic1.jpg" /></div> -->
    	<div class="fl pr banner_pics">
            <div class="swiper-wrapper">
            <?php
            	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" /></div>','m/d',3,100,array());
            ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination1"></div>
        </div>
    	<div class="fr news_box tab">
        	<div class="news_tab_hd">
            	<ul class="tab_hd">
                	<li class="on">综合</li>
                    <li>最新活动</li>
                    <li>新闻公告</li>
                    <li>游戏攻略</li>
                </ul>
            </div>
            <div class="news_tab_con tab_con">
            	<a class="news_more" title="查看更多&gt;&gt;" href="<?php CATEGORY_URL('新闻') ?>"></a>
            	<?php
            	SHOW_NEWS('<h2><a href="@@URL@@" target="_blank">@@TITLE@@</a></h2>','Y-m-d',array('新闻','活动','攻略'),1,0,array());
            	?>
            	<ul>
            	<?php
            		SHOW_NEWS('<li><i>[@@CATEGORY_NAME@@]</i><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d',array('新闻','活动','攻略'),5,0,array('LimitFrom'=>1));
            	?>
                </ul>
            </div>
            <div class="news_tab_con tab_con">
            	<a class="news_more" title="查看更多最新活动&gt;&gt;" href="<?php CATEGORY_URL('活动') ?>"></a>
            	<?php
            	SHOW_NEWS('<h2><a href="@@URL@@" target="_blank">@@TITLE@@</a></h2>','Y-m-d','活动',1,0,array());
            	?>
            	<ul>
                <?php
            		SHOW_NEWS('<li><i>[@@CATEGORY_NAME@@]</i><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d','活动',5,0,array('LimitFrom'=>1));
            	?>
                </ul>
            </div>
            <div class="news_tab_con tab_con">
            	<a class="news_more" title="查看更多新闻&gt;&gt;" href="<?php CATEGORY_URL('新闻') ?>"></a>
            	<?php
            	SHOW_NEWS('<h2><a href="@@URL@@" target="_blank">@@TITLE@@</a></h2>','Y-m-d','新闻',1,0,array());
            	?>
            	<ul>
                <?php
            		SHOW_NEWS('<li><i>[@@CATEGORY_NAME@@]</i><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d','新闻',5,0,array('LimitFrom'=>1));
            	?>
                </ul>
            </div>
            <div class="news_tab_con tab_con">
            	<a class="news_more" title="查看更多攻略&gt;&gt;" href="<?php CATEGORY_URL('攻略') ?>"></a>
            	<?php
            	SHOW_NEWS('<h2><a href="@@URL@@" target="_blank">@@TITLE@@</a></h2>','Y-m-d','攻略',1,0,array());
            	?>
            	<ul>
                <?php
            		SHOW_NEWS('<li><i>[@@CATEGORY_NAME@@]</i><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d','攻略',5,0,array('LimitFrom'=>1));
            	?>
                </ul>
            </div>
        </div>
	</div>
</div>

<div class="main3">
	<div class="swiper-container2">
        <div class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" ></div>','m/d',4,100,array());
        ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Navigation -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
</div>

<div class="main4 clearfix">
	<div class="wrap">
    	<h2 class="main_tit"></h2>
        <div class="clearfix">
            <div class="fl media_box">
                <h2 class="media_tit">游戏截图</h2>
                <ul class="jietu_view">
                    <?php
                	SHOW_NEWS('<li><a href="javascript:;"><img src="@@BIG_IMAGE@@" /></a></li>','m-d','游戏截图',100,$page,array());
                ?>
                </ul>
            </div>
            <div class="fr video_box">
                <h2 class="pr media_tit">游戏视频<a class="pa more" href="//ddx.uu.cc/vediocenter/0.html" target="_blank">查看更多</a></h2>
                <div class="tab2">
                	<div class="vedio_tab_hd">
                        <ul class="tab_hd">
                            <li class="on">官方视频</li>
                            <li>通关视频</li>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                            <?php
			                	SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@" href="javascript:;"><img src="@@STR1@@" /><span></span><p>@@STR3@@</p></a></li>','m-d',0,4,0,array('OrderBy' => 'created desc'));
			                ?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                            <?php
			                	SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@" href="javascript:;"><img src="@@STR1@@" /><span></span><p>@@STR3@@</p></a></li>','m-d',5,4,0,array('OrderBy' => 'created desc'));
			                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="fl c_box">
                <h2 class="media_tit">合作媒体</h2>
                <ul>
                	<?php
                		SHOW_DATAS('<li><a href="@@STR1@@" target="_blank">@@LABEL@@</a></li>','m-d',1,100,0,array('OrderBy'=>'`int1` asc'));
                	?>
                </ul>
            </div>
            <div class="fr contact">
            	<h2 class="media_tit">官方服务</h2>
                <ul>
                	<li class="tel">客服电话<br><?php BLOCK('custom_service_phone') ?></li>
                    <li class="qq">客服QQ<br><?php BLOCK('custom_service_qq') ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="side_box">
	<div class="down_img"><img src="<?php BLOCK('game_download_qrcode') ?>" /></div>
	<a class="ios_down" href="<?php BLOCK('pc_ios_download_url') ?>" target="_blank" title="App Store下载"></a>
    <a class="android_down" href="<?php BLOCK('pc_android_download_url') ?>" target="_blank" title="安卓下载"></a>
    <a id="toTop" href="javascript:;" title="返回顶部"></a>
</div>

<div class="gift_pop">
	<a class="close" title="关闭" href="javascript:;"></a>
    <div class="device_choice"><span class="on ios"></span><span class="android"></span></div>
    <a class="gift_yuyue" href="javascript:;"></a>
</div>

<!--图片浏览-->
<div class="pic_slide">
	<a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="//hnd.uu.cc/hnd.uu.cc/v2/images/loading.gif" width="32" height="32" /></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
	<ul class="slide_content">
    </ul>
    <div class="bottom">
    	共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="//ddx.uu.cc/ddx.uu.cc/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/pic-slide.js"></script>
<script>
var swiper = new Swiper('.banner_pics', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
		autoplay: 2500,
    });
var swiper = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		autoplay: 3000,
    });
$(document).ready(function(){ 

	/*tab 选项卡*/
	$('.tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('li').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).click(function(){
				$(this).siblings('li').removeClass('on');
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
	})
	/*tab 选项卡*/
	$('.tab2').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('li').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).hover(function(){
				$(this).siblings('li').removeClass('on');
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
	})
	//微信
	var wxin_dl = $(".wxin");
	var wxin_pd = $(".wxin_pop");
	var qqun_dl = $(".qqun");
	var qqun_pd = $(".qq_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	qqun_dl.hover(function() {
		qqun_pd.addClass("wxin_pop_show");
	}, function() {
		qqun_pd.removeClass("wxin_pop_show");
	});
	
	//GOTOP
	$("#toTop").click(function() {
    	$("body,html").animate({scrollTop:0},800);
	});
	
	//预约事件
	$('.device_choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	
	//手机预约
	var myreg = /^1[34578]\d{9}$/;
	$('.phone').focus(function(){
		if($(this).attr('value') == '请输入手机号'){}
		  $(this).attr('value','');
		})
		
	$('.phone').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','请输入手机号');
		}
		})	
    var phone,code_id;
    $('.get_gift').click(function(){
		 phone = $('.phone').val();
		
		if(phone == '请输入手机号' || phone == ''){
			alert('请输入手机号哦！');
		}else if(!myreg.exec(phone)){
			alert('您输入的手机号码不对哦！');
		}else{
			$('.gift_pop').show();
			$('.zhezao').show();
		}
	})
	
	$('.gift_yuyue').click(function(){
		 phone = $('.phone').val();
		if($('.android').is('.on')){
			code_id = 85;
			}else{
			code_id = 86;
		}
		$.ajax({
			type:"POST",
			url:"/send_phone_code",
			data:{phone:phone,code_id:code_id},
			dataType:"json",
			success:function(res){
				if(res.ret == 8){
					alert("您已经领取过礼包，去游戏里兑换吧！");
				}else if(res.ret == 0){
					 alert("礼包兑换码已经通过手机短信下发给您，请注意查收，祝您游戏愉快~");
				}else{
				   alert("礼包领取失败！");
				}
				$('.gift_pop').hide();
				$('.zhezao').hide();
			}
		});
	});
	
	
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
		$('.gift_pop').hide();
		$('.pic_slide').hide();
		$('.zhezao').hide();
	})
	
	//右侧浮层
	$(window).scroll(function(){
        var this_scrollTop = $(this).scrollTop();
        if(this_scrollTop>2000){
            $(".side_box").show();
        }else{
			$(".side_box").hide();
		}
    });
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
