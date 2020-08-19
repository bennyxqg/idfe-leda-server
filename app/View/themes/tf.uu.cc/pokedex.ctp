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
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">

</head>

<body>

<div class="top">
	<div class="wrap">
    	<ul>
        	<li><a href="/home" target="_self">官网首页</a></li>
            <li><a href="//tf.uu.cc/news/98.html" target="_self">公告资讯</a></li>
            <li class="mg-right"><a href="//tf.uu.cc/guide/98.html" target="_self">攻略指南</a></li>
            <li><a href="//tf.uu.cc/pokedex" target="_self">偶像图鉴</a></li>
            <li><a href="http://bbs.uu.cc/forum-575-1.html" target="_blank">八卦社区</a></li>
            <li><a href="javascript:alert('敬请期待');" target="_self">校园留影</a></li>
        </ul>
        <div class="logo"><a href="/" target="_blank"><img src="<?php BASE_URL() ?>images/logo.png" /></a></div>
    </div>
</div>

<div class="page pageRole">
	<div class="content">
		<div class="role_focus">
        	<ul class="focus_pic" id="focus_pic_list">
                <li><img src="<?php BASE_URL() ?>images/page_role1.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role3.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role5.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role7.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role2.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role4.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role6.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role8.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role9.png" /></li>
                <li><img src="<?php BASE_URL() ?>images/page_role10.png" /></li>
            </ul>
            
            <div class="focus_text">
            	<ul class="focus_content_list">
                	<li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            
            <div class="focus_nav">
            	<div class="tempWrap">
                	<ul class="focus_smaillPic_list">
                    	<li>
                        	<a id="roleB1"></a>
                            <a id="roleB2"></a>
                            <a id="roleB3"></a>
                            <a id="roleB4"></a>
                        </li>
                        <li>
                        	<a id="roleB5"></a>
                            <a id="roleB6"></a>
                            <a id="roleB7"></a>
                            <a id="roleB8"></a>
                        </li>
                        <li>
                        	<a id="roleB9"></a>
                        </li>
                        <li>
                        	<a id="roleB10"></a>
                        </li>
                    </ul>
                </div>
                <a href="javascript:;" title="上一个" class="navPrev">上一个</a>
                <a href="javascript:;" title="下一个" class="navNext">下一个</a>
            </div>
        </div>
        
        <div class="roleBtBg"></div>
        <div class="clearfix"></div>
    </div>
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

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.SuperSlide.2.1.1.js"></script>

<script type="text/javascript">
	
	//大图和文字切换
	jQuery(".role_focus").slide({ titCell:".focus_nav a", mainCell:".focus_pic",trigger:"click", targetCell:".focus_text li"});
	//小图滚动
	jQuery(".role_focus").slide({ mainCell:".focus_nav ul",prevCell:".navPrev",nextCell:".navNext",effect:"left",vis:2,scroll:2,delayTime:0,pnLoop:false});
		
	
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
</script>

</body>
</html>