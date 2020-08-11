<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
</head>

<body>

<div id="content">
	<div class="top">
    	<img src="<?php BASE_URL() ?>images/wap_logo.png" />
        <h2>我的酷跑世界</h2>
        <div class="top_detail">首款超萌轻松对战手游</div>
        <a class="download" href="http://kp.uu.cc/download">立即下载</a>
    </div>
   
    <div class="news-list">
    	<div class="news-item">游戏公告</div>
    	<ul>
    	<?php
    	$cates=array('新闻','活动','公告');
            $class = 'new';
            SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><i>@@CATEGORY_NAME@@</i>@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻','活动','公告'),5,0,array('class' => array(354=>'news',355=>'act',356=>'anm')));
            ?>
        </ul>
        <div class="pages">
        <?php
     	SHOW_PAGINATION($cates,5,array(),$page);
     ?>
        </div>
    </div>
       <div class="footer">
        <div class="links"><a href="http://www.idreamsky.com/homes/about">关于我们</a> | <a href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="#">进入论坛</a></div>
    	<div class="copyright">Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技有限公司 版权所有</div>
        <div class="game-tips">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>





<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())
})

</script>
</body>
</html>
