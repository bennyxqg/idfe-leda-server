<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
require_once "include.php";

$datas =  $this->Wxt->newsInitData($page,351);
$consulting1 = $datas['consulting'];

$datas =  $this->Wxt->newsInitData($page,352);
$consulting2 = $datas['consulting'];

$datas =  $this->Wxt->newsInitData($page,353);
$consulting3 = $datas['consulting'];

$this->Website->init();
$config_data = $this->Wxt->getConfigData();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css?v=301" />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?v=20171025" />

</head>

<body>
<div style="display:none"><img src="<?php BASE_URL() ?>images/logo.jpg" /></div>
<div id="content">
    <div class="top">
        <div class="logo">
            <img src="<?php BASE_URL() ?>images/logo.png" />
            <h2>五行天手游</h2>
            <p>亲密社交3D国战手游</p>
        </div>
        <div class="menu-bg"></div>
        <div class="menu">				
            <ul>
                <li><a href="//wxt.uu.cc">官网首页</a></li>
                <li><a href="//wxt.uu.cc/news/98.html">新闻中心</a></li>
                <li><a href="#main3">游戏特色</a></li>
                <li><a href="#main4">职业介绍</a></li>
                <li><a href="#main5">游戏视频</a></li>
                <li><a href="#main6">游戏资料</a></li>
            </ul>
        </div>
        <div class="burger">
            <div class="x"></div>
            <div class="y"></div>
            <div class="z"></div>
        </div>
    </div>
    <div class="pr main1">
        <!--<div class="date"></div>-->
        <div class="down-btns">
            <a class="downlink" href="//wxt.uu.cc/download"></a><a class="yuyue-btn" href="javascript:;"></a>
        </div>
    </div>
    
    <div class="main2">
        <div class="wrap">
            <div class="item-tit clearfix"><span>新闻中心</span></div>
            <div class="swiper-news-banner">
                <div class="swiper-wrapper">
                <?php if (!empty($topData['data_news'])):?>
						<?php foreach ($topData['data_news'] as $k => $v): ?>
						<div class="swiper-slide"><a href="<?php echo $v["str2"]; ?>"><img src="<?php echo $v["str1"]; ?>" /></a></div>
						<?php endforeach;?>
						<?php endif;?>
                </div>
                <div class="swiper-pagination swiper-pagination1"></div>
            </div>
            
            <div class="news-tabs">
                <a class="active" href="javascript:;">最新</a>
                <a href="javascript:;">新闻</a>
                <a href="javascript:;">公告</a>
                <a href="javascript:;">活动</a>
                <a href="javascript:;">攻略</a>
            </div>
            <div id="news-tabs-container" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <ul>
                        <?php if (!empty($topData['total'])):?>
							<?php foreach ($topData['total'] as $k => $v): ?>
							<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
							<?php endforeach;?>
		                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php if (!empty($topData['news'])):?>
								<?php foreach ($topData['news'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php if (!empty($topData['gong_gao'])):?>
								<?php foreach ($topData['gong_gao'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php if (!empty($topData['huo_dong'])):?>
								<?php foreach ($topData['huo_dong'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                    <div class="swiper-slide">
                        <ul>
                            <?php if (!empty($topData['gong_lue'])):?>
								<?php foreach ($topData['gong_lue'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="more" href="//5.uu.cc/news/98.html">查看更多</a>
        </div>
    </div>
    <a name="main3" id="main3" ></a>
    <div class="main3">
    	<div class="wrap">
            <div class="item-tit"><span>游戏特色</span></div>
            
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                <?php if (!empty($topData['data_tese'])):?>
						<?php foreach ($topData['data_tese'] as $k => $v): ?>
						<div class="swiper-slide" style="background-image:url(<?php echo $v["str1"]; ?>)"></div>
						<?php endforeach;?>
						<?php endif;?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-tese"></div>
            </div>
    	</div>
    </div>
    <a name="main4" id="main4" ></a>
    <div class="main4">
    	<div class="item-tit"><span>职业介绍</span></div>
        <div class="role-tabs">
            <a class="active" href="javascript:;">落尘</a>
            <a href="javascript:;">问水</a>
            <a href="javascript:;">青花</a>
            <a href="javascript:;">飞羽</a>
        </div>
        <div id="role-tabs-container" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/role1.png" />
                	<span class="role-tip">手持长剑，铜皮铁骨，擅长压制，连续发动攻击</span>
                	<div class="skill-tabs role1-skill">
                    	<a class="active" href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                    </div>
                    <div id="skill-tabs-container" class="swiper-container skill-tabs-container1">
                    	<div class="swiper-wrapper">
                        	<div class="swiper-slide"><span class="skill-name">烟闪</span><span class="skill-drc">挥剑横向扫1次，造成物理伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">凌诀</span><span class="skill-drc">凌空纵劈1次，造成物理伤害，并附带眩晕对<br>方3秒</span></div>
                            <div class="swiper-slide"><span class="skill-name">破凡</span><span class="skill-drc">挥动长剑，造成多段物理伤害，并在3秒内增<br>加法术和物理防御</span></div>
                            <div class="swiper-slide"><span class="skill-name">弦月</span><span class="skill-drc">一剑寒光动四方，一轮弦月掌生灭，造成物理<br>伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">雷霆之怒</span><span class="skill-drc">风云之变，雷霆之怒，惊天动地，一剑沉<br>浮，造成物理伤害</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/role2.png" />
                	<span class="role-tip">手持长枪，刚猛无比，擅长正面硬碰硬，无所畏惧</span>
                    <div class="skill-tabs role2-skill">
                    	<a class="active" href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                    </div>
                    <div id="skill-tabs-container" class="swiper-container skill-tabs-container2">
                    	<div class="swiper-wrapper">
                        	<div class="swiper-slide"><span class="skill-name">问水</span><span class="skill-drc">穿云破月，长枪残血。连续数次挥动长枪进行<br>3次攻击，造成法术伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">闪电枪</span><span class="skill-drc">连续快速的刺激数次，造成法术伤害，并在3<br>秒内增加法术和物理防御</span></div>
                            <div class="swiper-slide"><span class="skill-name">飞轮枪</span><span class="skill-drc">长枪围绕角色飞速旋转，造成法术伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">冰露云珠</span><span class="skill-drc">连续对前方范围内敌人造成法术伤害，并<br>附带眩晕对方3秒</span></div>
                            <div class="swiper-slide"><span class="skill-name">鲸云绝尘</span><span class="skill-drc">长枪尖刺出，一条白色巨鲸喷涌而出，造成<br>法术伤害</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/role3.png" />
                	<span class="role-tip two-line">手持长杖，召唤木系藤蔓作战，擅长控制，攻击技法变化莫测</span>
                    <div class="skill-tabs role3-skill">
                    	<a class="active" href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                    </div>
                    <div id="skill-tabs-container" class="swiper-container skill-tabs-container3">
                    	<div class="swiper-wrapper">
                        	<div class="swiper-slide"><span class="skill-name">雷闪</span><span class="skill-drc">4次攻击，造成法术伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">雷动</span><span class="skill-drc">召唤雷电，波浪性向前方范围发动攻击数次，造成法术攻击，同时被雷电困住3秒</span></div>
                            <div class="swiper-slide"><span class="skill-name">惊雷</span><span class="skill-drc">在目标周围召唤出无数雷电，雷电此起彼伏向上突刺，造成法术伤害，附带中毒效果持续4秒</span></div>
                            <div class="swiper-slide"><span class="skill-name">五雷</span><span class="skill-drc">挥动法杖，对范围内的敌人造成多次法术伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">寂灭天下</span><span class="skill-drc">召唤出雷电，造成法术伤害</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/role4.png" />
                	<span class="role-tip">手持弓箭，远程攻击，擅长牵制，箭无虚发</span>
                    <div class="skill-tabs role4-skill">
                    	<a class="active" href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                        <a href="javascript:;"></a>
                    </div>
                    <div id="skill-tabs-container" class="swiper-container skill-tabs-container4">
                    	<div class="swiper-wrapper">
                        	<div class="swiper-slide"><span class="skill-name">惊虹</span><span class="skill-drc">射出一道金色神芒，4次攻击，造成物理伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">长虹</span><span class="skill-drc">连续射出三波金色神芒，造成物理伤害</span></div>
                            <div class="swiper-slide"><span class="skill-name">射魂</span><span class="skill-drc">朝天射出一道神光，然后落下数波攻击，造成<br>物理伤害，并附带减速效果，持续4秒</span></div>
                            <div class="swiper-slide"><span class="skill-name">赤焰</span><span class="skill-drc">朝天射出一道神光，然后落下数波攻击，造成<br>物理伤害，并附带灼热效果，持续4秒</span></div>
                            <div class="swiper-slide"><span class="skill-name">凤舞九天</span><span class="skill-drc">射出一团烈焰，焚烧四方，造成物理伤害</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <a name="main5" id="main5" ></a>
    <div class="main5">
    	<div class="wrap">
            <div class="item-tit"><span>游戏视频</span></div>
            <div class="video-list">
                <ul>
                <?php if (!empty($topData['vedio'])):?>
						<?php foreach ($topData['vedio'] as $k => $v): ?>
						<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v["str2"];?>"><img src="<?php echo $v["str1"]; ?>" /></a></li>
						<?php endforeach;?>
						<?php endif;?>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <a name="main6" id="main6" ></a>
    <div class="main6">
    	<div class="wrap">
            <div class="item-tit"><span>游戏资料</span></div>
            <div class="data-box">
            	<h2>新手入门</h2>
                <ul class="data-list clearfix">
                <?php foreach($consulting1 as $k=>$v):?>
	              <li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
                </ul>
                <h2>高手进阶</h2>
                <ul class="data-list clearfix">
                <?php foreach($consulting2 as $k=>$v):?>
	              <li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
                </ul>
                <h2>特色系统</h2>
                <ul class="data-list clearfix"> 
                <?php foreach($consulting3 as $k=>$v):?>
	              <li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="main7 clearfix">
        	<div class="wrap">
            	<div class="wxin-box">
                	<img src="<?php echo $config_data['other']['weixin_qrcode']; ?>" />
                    <p class="wxin-name">关注官方微信领豪华礼包<br>搜索公众号：<?php echo $config_data['other']['weixin_account']; ?></p>
                    <p>识别左侧二维码可识别公众号</p>
                </div>
                
                <div class="contact">
                	<ul>
                    	<li class="bbs"><a href="<?php echo $config_data['other']['forum_url']; ?>"><i></i>官方论坛</a></li>
                        <li class="tieba"><a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>"><i></i>官方贴吧</a></li>
                        <li class="weibo"><a href="<?php echo $config_data['other']['weibo_url']; ?>"><i></i>官方微博</a></li>
                        <li class="qqun"><a href="<?php echo $config_data['other']['qq_qun_link']; ?>"><i></i>官方QQ群<span><?php echo $config_data['other']['qq_group']; ?></span></a></li>
                        <li class="service"><a href="<?php echo $config_data['other']['qiye_qq_qun_url']; ?>"><i></i>企业QQ<span><?php echo $config_data['other']['qiye_qq_qun']; ?></span></a></li>
                    </ul>
                </div>
                <a id="toTop" class="more" href="#link">返回顶部</a>
            </div>
        </div>
</div>
<div class="footer">Copyright©2009-<em class="copy-year">2016</em> 
	深圳市创梦天地科技有限公司 版权所有 <br>粤ICP备11018438号
	粤网文〔2016〕6871-1632号<br> 批准文号：文网游备字〔2016〕Ｍ-RPG 7445 号   <br> 新广出审[2017]1900号 出版号：ISBN  978-7-7979-5402-0
	</div>


<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
    <a class="yuyue-go" href="javascript:;"></a>
    <p class="yuyue-tips">注：预约成功后，我们将在开测前一天以手机短信的形式将礼包码发送到您的手机里，届时请留意查收！</p>
</div>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script>

$(document).ready(function(){
	var swiper = new Swiper('.swiper-news-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
		loop: true
    });
	
	//游戏特色
	var swiper = new Swiper('.swiper-tese', {
        pagination: '.swiper-pagination-tese',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
		loop : true,
        coverflow: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows : true
        }
    });
	
	//新闻列表
	var tabsSwiper = new Swiper('#news-tabs-container',{
		speed:500,
		onSlideChangeStart:function(){
		  $(".news-tabs .active").removeClass('active')
		  $(".news-tabs a").eq(tabsSwiper.activeIndex).addClass('active')  
		}
	})
	$(".news-tabs a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".news-tabs .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper.slideTo( $(this).index() )
		})
		$(".news-tabs a").click(function(e){
		e.preventDefault()
	})
	
	//职业介绍
	var tabsSwiper2 = new Swiper('#role-tabs-container',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".role-tabs .active").removeClass('active')
		  $(".role-tabs a").eq(tabsSwiper2.activeIndex).addClass('active')  
		}
	})
	$(".role-tabs a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".role-tabs .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper2.slideTo( $(this).index() )
		})
		$(".role-tabs a").click(function(e){
		e.preventDefault()
	})
	
	
	//技能介绍1
	var tabsSwiper3 = new Swiper('.skill-tabs-container1',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".role1-skill .active").removeClass('active')
		  $(".role1-skill a").eq(tabsSwiper3.activeIndex).addClass('active')  
		}
	})
	$(".role1-skill a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".role1-skill .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper3.slideTo( $(this).index() )
		})
		$(".role1-skill a").click(function(e){
		e.preventDefault()
	})
	
	//技能介绍2
	var tabsSwiper4 = new Swiper('.skill-tabs-container2',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".role2-skill .active").removeClass('active')
		  $(".role2-skill a").eq(tabsSwiper4.activeIndex).addClass('active')  
		}
	})
	$(".role2-skill a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".role2-skill .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper4.slideTo( $(this).index() )
		})
		$(".role2-skill a").click(function(e){
		e.preventDefault()
	})
	
	//技能介绍3
	var tabsSwiper5 = new Swiper('.skill-tabs-container3',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".role3-skill .active").removeClass('active')
		  $(".role3-skill a").eq(tabsSwiper5.activeIndex).addClass('active')  
		}
	})
	$(".role3-skill a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".role3-skill .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper5.slideTo( $(this).index() )
		})
		$(".role3-skill a").click(function(e){
		e.preventDefault()
	})
	
	//技能介绍4
	var tabsSwiper6 = new Swiper('.skill-tabs-container4',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".role4-skill .active").removeClass('active')
		  $(".role4-skill a").eq(tabsSwiper6.activeIndex).addClass('active')  
		}
	})
	$(".role4-skill a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".role4-skill .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper6.slideTo( $(this).index() )
		})
		$(".role4-skill a").click(function(e){
		e.preventDefault()
	})
	

	
	//顶部导航
	$('.burger').click(function(){
		if (!$(this).hasClass('open')) {
			openMenu();
		} else {
			
			closeMenu();
		}
	})

	$('.menu ul li a').click(function(e){
		//e.preventDefault();
		closeMenu();
	});
	function openMenu() {
		$('div.burger').addClass('open');
		$('div.x, div.z').addClass('collapse');
		$('.menu,div.menu-bg').fadeIn();
		setTimeout(function () {
			$('div.y').hide();
			$('div.x').addClass('rotate30');
			$('div.z').addClass('rotate150');
		}, 70);
		setTimeout(function () {
			$('div.x').addClass('rotate45');
			$('div.z').addClass('rotate135');
		}, 120);
	}
	function closeMenu() {
		$('.menu,div.menu-bg').fadeOut();
		setTimeout(function() {
			$('div.burger').removeClass('open');
			$('div.x').removeClass('rotate45').addClass('rotate30');
			$('div.z').removeClass('rotate135').addClass('rotate150');
			setTimeout(function() {
				$('div.x').removeClass('rotate30');
				$('div.z').removeClass('rotate150');
			}, 50);
			setTimeout(function () {
				$('div.y').show();
				$('div.x, div.z').removeClass('collapse');
			}, 70);
		}, 100);
	}
	
	//GOTOP
	$("#toTop").click(function() {
	   $("body,html").animate({scrollTop:0},800);
	});
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
	
	
		//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao,.s_p_k').show();
	})
	$(".close,.zhezao").on("click", function(e){
		$('.s_p_k video').attr('src','');
		$('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
		e.stopPropagation();
	});
	
	

	//预约
	$('.yuyue-btn').click(function(){
		$('.zhezao,.pop-yuyue').show();
	})
	
	var code_id,u = navigator.userAgent;
	if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
		code_id = 2;
	}else{
		code_id = 1;
	}
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,collect_name:109,code_id:code_id},
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
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
