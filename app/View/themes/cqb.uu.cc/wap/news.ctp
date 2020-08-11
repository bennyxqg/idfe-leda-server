<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php echo $full_base_url ?>/wap/css/index.css?v=0704" rel="stylesheet" type="text/css" />
<style type="text/css">
.footer{background:#141414;border-top:solid 1px #666;padding-bottom:50px;padding-top:10px;}
.footer ul li{text-align:center;color:#393939;font-size:0.6rem;line-height:1rem;}
.footer ul li.second{color:#afafaf;margin-bottom:20px;}
.footer ul li a{color:#afafaf;font-size:0.5rem;padding:0 10px;}
</style>
</head>

<body style="background:#e1e7ec;">
<div id="container">
  <div class="news_top" id="tab">
  	
    <header class="top">
    	<a class="top_logo" href="//cqb.uu.cc/home/"><img src="<?php BLOCK('game_icon') ?>" alt="《苍穹变》官网" /></a>
    	<h2>苍穹变</h2><h3>3D超人气小说PK手游</h3>
        <a class="go_home download" href="javascript:;">立即下载</a>
    </header>
    
     <!--<header class="header" style="top:0;">
       <a class="download" href="javascript:;)"></a>
       <div class="donwnload_fc">
         <span>IOS版本敬请期待！</span>
         <a href="javascript:void(0);" class="close" ><img src="<?php echo $full_base_url ?>/wap/images/close.png" /></a>
       </div>
     </header>-->
     <!--
     <div class="n_top"><a href="<?php BLOCK('forum_url') ?>" class="n_lt"></a></div>
     -->
     <div class="tab_bar tab_hd" style="margin-top:150px;">
        <a href="#" class="on">全部</a>
        <a href="#">公告</a>
        <a href="#">新闻</a>
        <a href="#">活动</a>
     </div>
     <div class="new_list">
        <div class="qb xinwen">
           <ul>
           <?php
           		SHOW_NEWS('<li><strong>【新闻】</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','新闻',6,1,array());
           		SHOW_NEWS('<li><strong>【公告】</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','公告',6,1,array());
           		SHOW_NEWS('<li><strong>【活动】</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','活动',6,1,array());
           ?>
           </ul>
        </div>
        <div class="gg xinwen">
           <ul>
           <?php
           SHOW_NEWS('<li><strong>【公告】</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','公告',6,1,array());
           ?>
           </ul>
        </div>
        <div class="xw xinwen">
           <ul>
           <?php
           SHOW_NEWS('<li><strong>【新闻】</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','新闻',6,1,array());
           ?>
           </ul>
        </div>
        <div class="hd xinwen">
           <ul>
           <?php
           SHOW_NEWS('<li><strong>【活动】</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','Y-m-d','活动',6,1,array());
           ?>
           </ul>
        </div>
     </div>
  </div>
  <div class="footer">
     <ul>
       <li><a href="//www.idreamsky.com/homes/contact">联系我们</a>|<a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
       <li class="second">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</li>
       <li>地址：深圳市南山区科苑北路科兴科学园A3单元16层</li>
       <li>粤网文〔2016〕6871-1632号 新广出审[2015]186号 </li>
       <li>出版物号：ISBN 978-7-89390-007-5 文网游备字〔2016〕Ｍ-SLG 0504 号</li>
       <li>客服: 4008400188 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;媒体合作: 0755-86110235</li>
       <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
       <li>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
     </ul>
  </div>
</div>


<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(function(){
	/*tab 选项卡*/
	$('#tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('a').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.xinwen').eq(i).show().siblings('.xinwen').hide();
			}
			$(this).click(function(){
				$(this).siblings('a').removeClass('on');
				$(this).addClass('on');
				_this.find('.xinwen').eq(i).show().siblings('.xinwen').hide();
			})
		})
	})
})
</script>
</body>
</html>
