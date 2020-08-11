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
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css?v=0" />
<link type="text/css" rel="stylesheet" href="<?php BASE_URL() ?>css/posterTvGrid.css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div class="top">
	<div class="wrap">
    	<ul>
        	<li><a class="on" href="/home" target="_self">官网首页</a></li>
            <li><a href="//tf.uu.cc/news/98.html" target="_self">公告资讯</a></li>
            <li class="mg-right"><a href="//tf.uu.cc/guide/98.html" target="_self">攻略指南</a></li>
            <li><a href="//tf.uu.cc/pokedex" target="_self">偶像图鉴</a></li>
            <li><a href="http://bbs.uu.cc/forum-575-1.html" target="_blank">八卦社区</a></li>
            <li><a href="javascript:alert('敬请期待');" target="_self">校园留影</a></li>
        </ul>
        <div class="logo"><a href="/" target="_blank"><img src="<?php BASE_URL() ?>images/logo.png" /></a></div>
    </div>
</div>


<div class="main-banner">
	<div class="wrap">
    	<span class="game-date"></span>
        <div class="down-box">
        	<a class="vedio video_btn_link" href="javascript:;" name="<?php echo GET_BLOCK('vedio_url');?>"></a>
            <div class="down-btns">
            	<a class="down-ios" href="<?php echo GET_BLOCK('ios_download_url');?>"></a>
                <a class="down-android" href="<?php echo GET_BLOCK('android_download_url');?>"></a>
            </div>
            <img class="down-code" src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
        </div>
        
        <div class="date-btn">
        	<img class="date1" src="<?php BASE_URL() ?>images/gift_icon.png" />
            <img class="date2" src="<?php BASE_URL() ?>images/gift_btn.png" />
        </div>
    </div>
</div>

<div class="main2">
	<div class="wrap">
    	<h2 class="item-tit">新闻资讯</h2>
        <div class="content">
            <div id="picFocus" class="picFocus blue-shadow">
                <div class="bd">
                    <ul>
                    <?php 
                    SHOW_DATAS('<li><a target="_blank" href=""><img src="@@STR3@@" /></a></li>',
                    'Y-m-d',2,4);
                     ?>
                     <!--
                        <li><a target="_blank" href=""><img src="<?php BASE_URL() ?>images/111.jpg" /></a></li>
                        <li><a target="_blank" href=""><img src="<?php BASE_URL() ?>images/111.jpg" /></a></li>
                        <li><a target="_blank" href=""><img src="<?php BASE_URL() ?>images/111.jpg" /></a></li>
                        -->
                    </ul>
                </div>
            
                <div class="hd">
                    <ul><li class="on"></li><li class=""></li><li class=""></li></ul>
                </div>
            </div>
            
            <div id="newsTabs" class="newsTabs blue-shadow">
            	<div class="hd">
                	<ul>
                    	<li>最新</li>
                        <li>公告</li>
                        <li>活动</li>
                        <li>攻略</li>
                        <li>热聊</li>
                    </ul>
                    <a class="newsMore" href="//tf.uu.cc/news/98.html" target="_blank"></a>
                </div>
                
                <div class="bd">
                	<ul>
                	<?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('公告','活动','热聊','偶像','公寓','甜点社','跑圈','教室','棒球社'),6,1);
                ?>
                    </ul>
                    <ul>
                    	<?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('公告'),6,1);
                ?>
                    </ul>
                    <ul>
                    	<?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('活动'),6,1);
                ?>
                    </ul>
                    <ul>
                    	<?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('偶像','公寓','甜点社','跑圈','教室','棒球社'),6,1);
                ?>
                    </ul>
                    <ul>
                    	<?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('热聊'),6,1);
                ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main3">
	<h2 class="item-tit">偶像图鉴</h2>
    
    <div class="bd">
    	<img class="indexRole3" src="<?php BASE_URL() ?>images/index_role3.png" />
    	<img class="indexRole1" src="<?php BASE_URL() ?>images/index_role1.png" />
        <img class="indexRole2" src="<?php BASE_URL() ?>images/index_role2.png" />
        
    </div>
    
    <div class="main3Bg"></div>
    
    <div class="hd">
    	<ul>
        	<li>
            	<img src="<?php BASE_URL() ?>images/index_roleTab3.png" />
            	<div class="roleText">
                	<h2>班小松</h2>
                	<p>特长：极其喜爱棒球，是努力型选手，基础技能扎实。学习上<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;的成绩却是一般，尤其头疼英语。<br><br>
                    简介：长郡学校高一六班的学生，校棒球队队长及游击手，<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;也是球队里的开心果和粘合剂。</p>
                </div>
            </li>
            
            <li class="hdRole2">
            	<img src="<?php BASE_URL() ?>images/index_roleTab1.png" />
            	<div class="roleText">
                	<h2>尹 柯</h2>
                	<p>特长：学习上是众人羡慕的学霸，拥有着超高的绘画水准。头<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;脑清晰且冷静，是棒球场上掌控全局的捕手。<br><br>
                    简介：长郡学校高一六班的学生，棒球队的主力捕手。是学<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校有名的全能学霸和艺术才子。</p>
                </div>
            </li>
            
            <li class="hdRole3">
            	<img src="<?php BASE_URL() ?>images/index_roleTab2.png" />
            	<div class="roleText">
                	<h2>邬 童</h2>
                	<p>特长：外表酷帅俊美，体育文艺样样顶尖，是一个棒球天才，<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;超级明星，高手中的高高手！<br><br>
                    简介：长郡学校高一六班的转学生，棒球队的主力投手。学<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校里的人气校草，球队中的王牌球员。</p>
                </div>
            </li>
        </ul>
        <a class="roleMore" href="//tf.uu.cc/pokedex" target="_blank"><img src="<?php BASE_URL() ?>images/index_roleMore.png" /></a>
    </div>
</div>

<div class="main4">
	<h2 class="item-tit">游戏特色</h2>
    
    <div id="posterTvGrid86804" style="margin:104px auto 0 auto;"></div>
    
    
</div>

<div class="footer">
    <span class="logo"><a href="http://www.idreamsky.com/" target="_blank"><img src="<?php BASE_URL() ?>images/foot_logo3.png"></a></span>
    <div class="cr">
        <p class="link"><a target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2017  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
    </div>
    <div class="g_rule"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>

<div class="right-pop">
	<a class="giftMore" href="javascript:alert('敬请期待');" title="礼包中心" target="_blank"></a>
    <ul>
    	<li><a href="<?php echo GET_BLOCK('yingyuanzhan_url');?>" target="_blank">官方应援站</a></li>
        <li><a href="<?php echo GET_BLOCK('qq_group');?>" target="_blank">官方粉丝群</a></li>
        <li><a href="<?php echo GET_BLOCK('weibo_url');?>" target="_blank">官方微博</a></li>
        <li><a href="<?php echo GET_BLOCK('buluo_url');?>" target="_blank">兴趣部落</a></li>
        <li><a href="<?php echo GET_BLOCK('baidu_tieba_url');?>" target="_blank">百度贴吧</a></li>
        <li>
        	<a class="wxin" href="javascript:;">官方微信</a>
        	<div class="tips-pop wxin_pop">
            	<img src="<?php echo GET_BLOCK('weixin_qrcode');?>" />
            </div>
        </li>
    </ul>
    <a id="toTop" href="javascript:;"></a>
</div>

<div class="zhezao"></div>

<div class="s_p_k" ><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>


<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">

    	<a class="ios-choose on" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
    <a class="yuyue-go" href="javascript:;"></a>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/posterTvGrid.js"></script>

<script type="text/javascript">
	jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });
	
	jQuery(".newsTabs").slide({});
	
	jQuery(".main3").slide({trigger:"click"});
	
	
	var posterTvGrid86804 = new posterTvGrid('posterTvGrid86804',{className: "posterTvGrid"},[

			{"img":"<?php BASE_URL() ?>images/slider_img1.png","title":"","url":"javascript:;"},
	
			{"img":"<?php BASE_URL() ?>images/slider_img2.png","title":"","url":"javascript:;"},
	
			{"img":"<?php BASE_URL() ?>images/slider_img3.png","title":"","url":"javascript:;"},
	
			{"img":"<?php BASE_URL() ?>images/slider_img4.png","title":"","url":"javascript:;"},
	
			{"img":"<?php BASE_URL() ?>images/slider_img5.png","title":"","url":"javascript:;"},
	
		]
	
	);
	
	//微信
	var wxin_dl = $(".wxin");
	var wxin_pd = $(".wxin_pop");

	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	
	//GOTOP
	$("#toTop").click(function() {
    	$("body,html").animate({scrollTop:0},800);
	});
	
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close,.zhezao').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.pop-yuyue').hide();
		$('.zhezao').hide();
	})
	
	//预约
	$('.date-btn').click(function(){
		$('.zhezao,.pop-yuyue').show();
	})

	//预约事件
	$('.sys-choose a').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	

	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if($('.ios-choose').is('.on')){
			code_id = 2;
		}else{
			code_id = 1;
		}
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,collect_name:111,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("恭喜您预约成功并获得豪华礼包，奖励将在游戏上线后通过短信发放！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})
</script>

</body>
</html>
