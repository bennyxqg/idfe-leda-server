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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" />
<link rel="shortcut icon" href="//kp.uu.cc/kp.uu.cc/favicon.ico">
</head>

<body>

<div class="page-banner"></div>
<div class="page-nav">
	<div class="page-wrap">
    	<div class="nav">首页 &gt; 新闻中心 </div>
        <a class="home" href="/">返回首页</a>
    </div>
</div>

<div class="page-content">
	<div class="page-wrap">
    	<div class="news-list">
        	<h2  class="tit">新闻资讯 | NEWS</h2>
            <ul>
            <?php
            $class = 'new';
            SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻','活动','公告'),5,0);
            ?>
            </ul>
        </div>
        <div class="page-right">
        	<img src="<?php BLOCK('game_download_qrcode') ?>" />
            <p>扫描二维码下载游戏</p>
            <a class="down-link" href="http://kp.uu.cc/download" target="_blank"></a>
            <img src="<?php BLOCK('weixin_qrcode') ?>" />
            <p>官方微信二维码</p>
        </div>
    </div>
</div>

<div id="foot">
    <div class="footer">
        <span class="logo"><a href="http://www.idreamsky.com/" target="_blank"><img src="<?php BASE_URL() ?>images/foot_logo3.png"></a></span>
        <div class="cr">
            <p class="link"><a target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2017  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        </div>
        <div class="g_rule"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


</body>
</html>
