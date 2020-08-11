<?php 
$banner = $this->Tntgd->getBlock($site_id, 'inner_banner');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?60a512c3b978fcde922f4640a4616d14";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="header">
<!--    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">地铁跑酷</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//tntgd.uu.cc">官网首页</a><em></em></li>
                <li><a href="//www.idreamsky.com/games/show/131">游戏介绍</a><em></em></li>
            </ul>
        </div>
    </div>-->
    <div class="banBox">
        <div class="nybanner">
        	<img alt="" src="/uploads/editor_upload/images/201509251536331272.jpg" style="height: 347px; width: 1920px" />
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="//tntgd.uu.cc">首页</a> >>
                <span><?php CATEGORY_NAME($category_id) ?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
        	<li <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('新闻') ?>">新闻</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('活动') ?>">活动</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('攻略')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('攻略') ?>">攻略</a><em></em></li>
        </ul>
        <?php $result=$this->Tntgd->newsInitData($page,$category_id);?>
        <ul class="newslist">
        <?php
        	SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@<img src="//tntgd.uu.cc/tntgd.uu.cc/images/hot.png" alt=""></a></li>','m-d',GET_CATEGORY_NAME($category_id),5,$page,array());
        ?>
        </ul>
        <div class="pagination">
        <?php
        	SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),5,array(),$page);
        ?>
        </div>
    </div>
    <div class="wxbox">
    	<img src="<?php BLOCK('game_download_qrcode') ?>" alt="">
        <p>下载游戏</p>
        <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
        <p>扫描关注微信公众号</p>
    
	
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //右侧微信
    var elm = $('.wxbox'); 
    var startPos = $(elm).offset().top; 
    $.event.add(window, "scroll", function(){ 
        var p = $(window).scrollTop(); 
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
    });
});
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>