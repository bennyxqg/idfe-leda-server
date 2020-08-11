<?php $this->Website->init(); ?>
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
<link rel="stylesheet" href="<?php BASE_URL() ?>v2/css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico"/>
<link rel="bookmark" href="<?php BASE_URL() ?>favicon.ico"/>
<?php require_once('top.ctp'); ?>
</head>

<body class="main">

<div class="top_nav">
	<div class="wrap">
    	<h2 class="pa logo"><img alt="" src="<?php BLOCK('game_icon') ?>"></h2>
        <ul class="pa nav">
        	<li id="n1" class="on"><a href="//ld.uu.cc/home">官网首页</a></li>
            <li id="n2"><a href="<?php CATEGORY_URL('综合') ?>">新闻公告</a></li>
            <li id="n3"><a href="<?php CATEGORY_URL('聚怪','roles') ?>">英雄介绍</a></li>
            <li id="n4"><a href="<?php CATEGORY_URL('公会','gonglue') ?>">游戏攻略</a></li>
            <li id="n5"><a href="<?php BLOCK('forum_url') ?>" target="_blank">官方论坛</a></li>
        </ul>
        <a class="pa wx" href="javascript:;"></a>
        <div class="pa wx_pop"><img alt="" src="<?php BLOCK('weixin_qrcode') ?>"><p>扫码关注官方微信<br>微信号：<?php BLOCK('weixin_account') ?></p></div>
    </div>
</div>

<div class="top1">
	<div class="wrap">
    	<a class="home_link" href="//ld.uu.cc" target="_blank" title="前往官网首页"></a>
    </div>
</div>

<div class="top2">
	<div class="wrap">
    	<div class="pa main_code"><img alt="" src="<?php BLOCK('game_download_qrcode') ?>"><span>扫描下载游戏</span></div>
        <div class="pa down_btns"><a href="<?php BLOCK('ios_download_url') ?>" target="_blank" title="App Store下载"></a><a href="<?php BLOCK('android_download_url') ?>" target="_blank" title="安卓下载"></a></div>
        <a class="pa vedio_btn video_btn_link" name="<?php BLOCK('pc_ad_vedio') ?>" href="javascript:;"  title="视频播放"></a>
        <div class="content">
        	<div class="fl min_bar">
            	<ul>
                	<li><a id="gift_date" href="javascript:;"><img src="<?php BASE_URL() ?>v2/images/min_bar_01.jpg" /></a></li>
                    <?php
                    	SHOW_DATAS('<li><a href="@@STR2@@"><img src="@@STR1@@" /></a></li>','m-d',0,2,0,array())
                    ?>
                </ul>
            </div>
            <div class="fl switch">
            	<ul class="runContent">
            	<?php
            		SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" /></a></li>','m-d',4,100,0,array('OrderBy'=>'`int1` asc'));
            	?>
                </ul>
                <ul class="triggers">
                <?php SHOW_DATAS('<li@@FIRST_CONTENT1@@></li>','m-d',4,100,0,array('FirstContent1'=>' class="cur"')) ?>
              	</ul>
            </div>
            <div class="fl news_box tab">
            	<div class="pr news_tab">
                	<ul class="tab_hd">
                    	<li class="on">综合</li>
                        <li>新闻</li>
                        <li>公告</li>
                        <!--<li>攻略</li>-->
                        <li>活动</li>
                    </ul>
                    <a class="pa news_more" href="//ld.uu.cc/news/0"></a>
                </div>
                <div class="news_con">
                	<div class="tab_con">
                        <ul>
                        	<?php 
                        		SHOW_NEWS(
	                        		'<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>',
	                        		'm/d', array('新闻','公告','活动'), 5, /*条数*/ 0, array('OrderBy'=>'`sort` asc')
                        		) 
                        	?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                            <?php 
                        		SHOW_NEWS(
	                        		'<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>',
	                        		'm/d', '新闻', 5, /*条数*/ 0, array('OrderBy'=>'`sort` asc')
                        		) 
                        	?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                            <?php 
                        		SHOW_NEWS(
	                        		'<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>',
	                        		'm/d', '公告', 5, /*条数*/ 0, array('OrderBy'=>'`sort` asc')
                        		) 
                        	?>
                        </ul>
                    </div>
                    <!--
                    <div class="tab_con">
                        <ul>
                            <?php 
                        		SHOW_NEWS(
	                        		'<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>',
	                        		'm/d', array('公会','冒险','竞技场','副本','其他'), 5, /*条数*/ 0, array('OrderBy'=>'`sort` asc')
                        		) 
                        	?>
                        </ul>
                    </div>
                    -->
                    <div class="tab_con">
                        <ul>
                            <?php 
                        		SHOW_NEWS(
	                        		'<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>',
	                        		'm/d', '活动', 5, /*条数*/ 0, array('OrderBy'=>'`sort` asc')
                        		) 
                        	?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main clearfix">
	<div class="wrap">
		<div class="fl main_left">
        	<h2 class="tit">英雄介绍<i>HERO INTRODUCTION</i></h2>
            <div class="pr role_box">
            	<ul class="runContent">
            		<?php
            			SHOW_DATAS('<li><img src="@@STR1@@" /></li>','m-d',5,32,0,array('OrderBy'=>'`int1` asc'));
            		?>
                </ul>
                <div class="pa role_tab">
                	<ul class="triggers2">
                	<?php
	                	SHOW_DATAS('<li@@FIRST_CONTENT1@@>@@LABEL@@</li>','m-d',5,32,0,array('OrderBy'=>'`int1` asc','FirstContent1'=>' class="cur"'));
            		?>
                    </ul>
                    <a class="pa role_more" href="//ld.uu.cc/news/roles/242">更多+</a>
                </div>
            </div>
            <h2 class="tit">游戏特色<i>GAME FEATURE</i></h2>
            <div class="tese_box">
            	<div class="slide">
                    <ul class="clearfix">
                    <?php
                	$format=<<<_HTML
                		<li class="p@@ID@@@@FIRST_CONTENT1@@">
                        	<span@@FIRST_CONTENT2@@></span>
                        	<img src="@@STR1@@" width="420" alt="">
                    	</li>
_HTML;
					SHOW_DATAS($format,'m-d',1,4,0,array('FromID'=>1,'FirstContent1'=>' cur','FirstContent2'=>' style="display:none;"'));
                	?>
                    </ul>
                </div>
            </div>
            <h2 class="tit">媒体专区<i>MEDIA ZONE</i></h2>
            <div class="media_box tab">
            	<div class="media_tab">
                	<ul class="tab_hd">
                	<?php
                		SHOW_DATAS('<li@@FIRST_CONTENT1@@>@@LABEL@@</li>','m-d',6,100,0,array('OrderBy'=>'`int1` asc','FIRST_CONTENT1'=>' class="on"'))
                	?>
                		
                    </ul>
                </div>
                
                <?php 
                	SHOW_DATAS('<div class="pr tab_con"><iframe height="120" frameborder="0" width="690" scrolling="no" src="@@STR1@@"></iframe></div>','m-d',6,100,0,array('OrderBy'=>'`int1` asc'))
                ?>
                
            </div>
        </div>
    	<div class="fr main_right">
        	<h2 class="pr tit">最新攻略<i>GAME DATA</i><a class="pa tit_more" href="<?php CATEGORY_URL('公会','gonglue') ?>"></a></h2>
            <div class="game_data tab">
                <div class="data_tab">
                    <ul class="tab_hd">
                        <li id="d1" class="on"><i></i>公会</li>
                        <li id="d2"><i></i>冒险</li>
                        <li id="d3"><i></i>竞技场</li>
                        <li id="d4"><i></i>副本</li>
                        <li id="d5"><i></i>其他</li>
                    </ul>
                </div>
                <div class="tab_con">
                	<div class="data_item">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><em>|</em></li>','','公会-关键字',50,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                    <div class="data_news">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d','公会',4,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                </div>
                
                <div class="tab_con">
                	<div class="data_item">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><em>|</em></li>','','冒险-关键字',50,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                    <div class="data_news">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d','冒险',4,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                </div>
                
                <div class="tab_con">
                	<div class="data_item">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><em>|</em></li>','','竞技场-关键字',50,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                    <div class="data_news">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d','竞技场',4,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                </div>
                
                <div class="tab_con">
                	<div class="data_item">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><em>|</em></li>','','副本-关键字',50,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                    <div class="data_news">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d','副本',4,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                </div>
                
                <div class="tab_con">
                	<div class="data_item">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><em>|</em></li>','','其他-关键字',50,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                    <div class="data_news">
                    	<ul>
                    		<?php SHOW_NEWS('<li><a href="@@URL@@" target="_blank">[@@CATEGORY_NAME@@] @@TITLE@@</a><span>@@DATE@@</span></li>','m-d','其他',4,0,array('OrderBy'=>'`sort` asc')) ?>
                        </ul>
                    </div>
                </div>
                
                
            </div>
            <h2 class="pr tit">影音中心<i>VIDEO GALLERY</i><a class="pa tit_more" href="<?php CATEGORY_URL('影音中心','vedio') ?>"></a></h2>
            <div class="video_box tab">
            	<div class="video_tab">
                	<ul class="tab_hd">
                    	<li class="on">游戏视频</li>
                        <li>精彩截图</li>
                    </ul>
                </div>
                <div class="pr video_con vedio_list_con tab_con">
                    <ul>
                    	<?php
                    		SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@" href="javascript:;"><img src="@@STR1@@" /></a></li>','m-d',2,100,0,array('OrderBy'=>'`int1` asc'));
                    	?>
                    </ul>
                </div>
                <div class="pr video_con tab_con">
                    <ul>
                    	<?php
                    		SHOW_IMAGE_LIST('<li><a href="@@BIG_IMAGE@@" target="_blank"><img src="@@BIG_IMAGE@@" /></a></li>','pc_game_img',array(),6)
                    	?>
                    </ul>
                </div>
            </div>
            <h2 class="tit">合作伙伴<i>COOPERATION PARTNER</i></h2>
            <div class="parter_box">
            	<?php
            		SHOW_DATAS('<li><a href="@@STR1@@" target="_blank"><img src="@@STR2@@" /></a></li>','m-d',7,100,0,array('OrderBy'=>'`int1` asc'));
            	?>
            </div>
        </div>
    </div>
</div>

<div class="contact clearfix">
	<div class="wrap">
    	<div class="fl pr contact_wx">
        	<span><img alt="" src="<?php BLOCK('weixin_qrcode') ?>">扫码关注官方微信</span>
            <h2>微信号：<?php BLOCK('weixin_account') ?></h2>
            <p>关注官方微信获取最新游戏资讯</p>
        </div>
        <div class="fl contact_qq">
        	<h2>官方QQ交流群</h2>
            <ul>
            	<?php
                    $qqs=explode(',',GET_BLOCK('qq_group'));
                    $len=count($qqs);
                    for($i=0;$i<$len;$i++)
                    	echo '<li>'.$qqs[$i].'</li>';
            	?>
            </ul>
        </div>
        <div class="fl contact_tel">
        	<h2>客服电话</h2>
            <p><?php BLOCK('custom_service_phone') ?></p>
        </div>
        <div class="fr contact_wb_tb">
        	<a class="contact_wb" href="<?php BLOCK('weibo_url') ?>" target="_blank"></a>
            <a class="contact_tb" href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"></a>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="yu_yue">
  	<a class="close2" href="javascript:;"></a>
  	<p class="choice"><span class="ios on"></span><span class="az"></span></p>
  	<div class="biaodan">
		<div class="ios_ipt"><input type="text" id="shuru" value="请输入手机号"><a href="javascript:;" class="yuyue">确认预约</a></div>
  		<div class="az_ipt"><label>礼包兑换码：</label><span>sd234ds</span></div>
  	</div>
	<p class="tips">iOS即将上线，现在预约，上线前我们将以<i>短信形式</i>向您发放专属礼包</p>
    <p class="tips1"><i>兑换方式：</i>进入游戏，点击主界面左侧的“设置”按钮进入设置界面，然后点击“<i>设置</i>”界面中的“<i>兑换激活码</i>”按钮，<i>输入激活码</i>并确定，即可通过邮件获得奖励</p>
</div>

<div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay="autoplay" poster="//ld.uu.cc/ld.uu.cc/images/video.jpg" controls="controls">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/switch.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/cookie.js"></script>
<script>
/* 图片切换*/
$(".switch").Switch({
	moveInterval:300,
	interval:5000,
	direction:"alpha",
	handle:".triggers"
});
$(".role_box").Switch({
	height:293,
	moveInterval:400,
	interval:5000,
	direction:"top",
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
		li.animate({"width":"420px"},500,function(){
			li.addClass("cur");
		});
		sibling.animate({"width":"90px"},500,function(){
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
$(function(){
	
	//预约事件
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
		if($('.az').hasClass('on')){
			$('.yu_yue').addClass('yu_yue_az');
			if(!$.cookie("resCode")){
				$.ajax({
					type:"POST",
					url:"/send_code",
					data:{ code_id:70},
					dataType:"json",
					success:function(res){
						if(res.ret==0){
							$('.az_ipt span').text(res.code);
							$.cookie("resCode",res.code,{expires:60}) 
						
						}else{
							$('.az_ipt span').text('领取失败！')
						}
					}
				});
			}else{
				$('.az_ipt span').text($.cookie("resCode"));	
			}
		}else{
			$('.yu_yue').removeClass('yu_yue_az');
		}
	})

	$('#gift_date').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.close2').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
	})
	
	
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
		$('.zhezao').hide();
		})
})
</script>
</body>
</html>
