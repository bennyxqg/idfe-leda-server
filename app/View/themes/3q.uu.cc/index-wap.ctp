<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
	<meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css"/>
    
</head>

<body>
<div id="js_banner" class="banner">
    <ul id="js_banner_img" class="banner_img clear">
        <li class="bgli01">
            <div class="banner_inner">
                <div class="child child1" data-z="2"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-1.png" /></a></div>
                <!-- data-z="2"与data-z="3"表示两个图层进退场的顺序有区别 -->
                <div class="child child2" data-z="3"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-2.png" /></a></div>
            </div>
        </li>
        <li class="bgli02">
            <div class="banner_inner">
                <div class="child child1" data-z="2"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-1.png" /></a></div>
                <div class="child child2" data-z="3"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-2.png" /></a></div>
            </div>
        </li>
        <li class="bgli03">
            <div class="banner_inner">
                <div class="child child3" data-z="2"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-1.png" /></a></div>
                <div class="child child4" data-z="3"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-2.png" /></a></div>
            </div>
        </li>
        <li class="bgli04">
            <div class="banner_inner">
                <div class="child child3" data-z="2"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-1.png" /></a></div>
                <div class="child child4" data-z="3"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-2.png" /></a></div>
            </div>
        </li>
        <li class="bgli05">
            <div class="banner_inner">
                <div class="child child1" data-z="2"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-1.png" /></a></div>
                <div class="child child2" data-z="3"><a href="//bbs.uu.cc/forum-248-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/button-2.png" /></a></div>
            </div>
        </li>
    </ul>
    <div class="banner_common"> <a id="js_banner_pre" href="javascript:;" class="banner_pre"></a> <a id="js_banner_next" href="javascript:;" class="banner_next"></a> </div>
</div>
<div class="footer">
    <div class="page"> <span class="logo"><img src="<?php echo $full_base_url ?>/images/act/logo.png"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright&copy;2009-2014 深圳市创梦天地科技有限公司 版权所有</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏  拒绝盗版游戏  注意自我保护  谨防上当受骗  适度游戏益脑  沉迷游戏伤身  合理安排时间  享受健康生活 </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/tab.js"></script>
<script type="text/javascript">
	$(function(){
		new $.Tab({/*添加按钮*/
		target: $('#js_banner_img li'),
		effect: 'slide3d',
		animateTime: 1000,
		stay: 4000,	
		autoPlay: true,
		merge: true,
		prevBtn: $('#js_banner_pre'),
		nextBtn: $('#js_banner_next')
		});	
	})
</script>
</body>
</html>
