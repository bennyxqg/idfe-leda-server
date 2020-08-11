
<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Wxt->getPic($type,$page);
$topData=$this->Wxt->topData();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = 'http://'.$_SERVER['HTTP_HOST'].'/wxt.uu.cc/home/';

$config_data = $this->Wxt->getConfigData();
$tuijian = $this->Wxt->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/lightbox.css" />
<link rel="shortcut icon" href="//wxt.uu.cc/wxt.uu.cc/favicon.ico">
</head>

<body class="page">
<div class="top-nav">
	<div class="wrap">
    	<a class="home-logo fl" href="/home"><img src="<?php echo $base_path; ?>images/logo.jpg" /></a>
        <ul class="nav-list fl">
        	<li><a href="/home" target="_self">官网首页</a></li>
            <li class="on"><a href="//5.uu.cc/news/98.html" target="_self">新闻资讯</a></li>
            <li><a href="//5.uu.cc/game_data/351.html" target="_self">游戏资料</a></li>
            <li><a href="//5.uu.cc/vedios/14/1.html" target="_self">游戏视频</a></li>
            <li><a href="<?php echo GET_BLOCK('forum_url'); ?>" target="_blank">官方论坛</a></li>
        </ul>
        <ul class="nav-item fr">
        	<li><a href="<?php echo GET_BLOCK('kefu_url'); ?>" target="_blank">客服</a></li>
            <li><a class="tieba" href="<?php echo GET_BLOCK('baidu_tieba_url'); ?>" target="_blank">贴吧</a></li>
            <li><a class="weixin" href="javascript:;" target="_blank">微信</a></li>
            <li><a class="weibo" href="<?php echo GET_BLOCK('weibo_url'); ?>" target="_blank">微博</a></li>
        </ul>
    </div>
</div>

<div class="page-banner"></div>

<div class="c_main">
	<div class="f_left">
    	<h2>下载游戏</h2>
        <span class="d_ewm"><img src="<?php echo GET_BLOCK('pc_download_qrcord'); ?>"><p>扫一扫下载游戏</p></span>
        <p class="down_n">
            <a href="<?php echo GET_BLOCK('android_download_url'); ?>" class="d_n_az"><img src="<?php echo $base_path; ?>images/page_downaz.png" width="167" height="57"></a>
            <a href="<?php echo GET_BLOCK('ios_download_url'); ?>" class="d_n_ios"><img src="<?php echo $base_path; ?>images/page_downios.png" width="167" height="57"></a>
        </p>
        <h2>社交媒体</h2>
        <div class="d_ewm d_ewm">
        	<img src="<?php echo GET_BLOCK('weixin_qrcode'); ?>">
			<p>扫一扫关注公众号</p>
        </div>
	</div>
        
    <div id="xjtj" class="xjtj_n">
        <div class="xj_container" id="xj_container">
        <ul class="xj_bar" id="xj_bar">
         <a href="//5.uu.cc/images/18/1.html"<?php if ($type == 18) echo ' class="on"'; ?>>游戏截图</a>
         <a href="//5.uu.cc/images/19/1.html"<?php if ($type == 19) echo ' class="on"'; ?>>精美壁纸</a>
         <a href="//5.uu.cc/images/20/1.html"<?php if ($type == 20) echo ' class="on"'; ?>>同人创作</a>
         <div class="pa site_nav">当前位置：<a href="//5.uu.cc" target="_self">首页</a> &gt; 游戏截图</div>
        </ul>
            <div class="bar_x bar_x_n">
            <ul id="bizhi" style="display:block">
            <?php foreach ($data['list'] as $k => $v):?>
            	<li><a id="scale" href="<?php echo $v['datas']['str1'];?>" data-lightbox="img-group1"><img src="<?php echo $v['datas']['str1'];?>" alt="image 1 0f 4 thumb"/><strong></strong></a><span><?php echo $v['datas']['str3'];?></span></li>
            	<?php endforeach;?>
                        
            </ul>
             <div class="pages"><?php echo $data['page'];?></div>
            </div>
        </div>
	</div>
</div>

<div id="foot">
    	<div class="footer">
            <div class="cr">
               <span class="logo"><img src="<?php echo $base_path; ?>images/f_logo.png"><img style="margin-left:20px;" src="<?php echo $base_path; ?>images/foot_logo2.png"></span>
                 <div class="demo">
                 	<div class="bd">
                        <ul>
                            <?php if (!empty($topData['data_22'])): ?>
	                    <?php foreach ($topData['data_22'] as $k =>$v):?>
	                    <li><a href="<?php echo $v['str2']; ?>" target="_blank"><img src="<?php echo $v['str1']; ?>" /></a></li>
	                    <?php endforeach; ?>
	                    <?php endif; ?>
                        </ul>
                    </div>
                 </div>
                 <div class="hezuo">
                      <a href="javascript:;" class="hz_hover"><img src="<?php echo $base_path; ?>images/hezuo.jpg" width="285" height="35"></a>
                      <ul class="bar_hz">
							<?php if (!empty($topData['data_22'])): ?>
	                    <?php foreach ($topData['data_22'] as $k =>$v):?>
	                    <li><a href="<?php echo $v['str2']; ?>" target="_blank"><?php echo $v['label']; ?></a></li>
	                    <?php endforeach; ?>
	                    <?php endif; ?>
					</ul>
                 </div>
            </div>
            <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
            <div class="messages">
                <p class="link"> <a class="first_o" target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                <p> <span>Copyright©2009-<em class="copy-year">2017</em>  TENCENT. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创梦天地科技有限公司  版权所有<br>  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
            </div>
        </div>
   </div>


<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/lightbox-2.6.min.js"></script>

<script>
$(document).ready(function(){

	jQuery(".demo").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20});
	
	
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())

	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
	
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
