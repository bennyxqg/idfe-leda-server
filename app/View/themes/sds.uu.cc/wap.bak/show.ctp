<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css" />
</head>

<body>
<div id="container">

      <header class="top">
           <div class="left"><img src="<?php BLOCK('game_icon') ?>" width="103" height="103" /><img src="<?php BASE_URL() ?>images/icon_logo.png" width="193" height="56" /></div>
           <div class="right right_nav">
               <ul>
                   <a href="<?php CATEGORY_URL('新闻') ?>"><li>新闻</li></a>
                   <a href="<?php CATEGORY_URL('视频','video') ?>"><li>视频</li></a>
                   <a href="<?php CATEGORY_URL('图片','picture') ?>"><li>图片</li></a>
                   <a href="/home"><li>首页</li></a>
               </ul>
           </div>
      </header>
     
      <section class="show">
         <div class="sp_c">
            <ul>
             <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
             <span class="time">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></span>
             <article>
                <p>
                <?php SHOW_CURRENT_NEWS_INFO('content') ?>
				</p>
             </article>
             </ul>
         </div>

      </section>
      
      <footer class="bottom">
           <p class="qq">
                 <span class="wxh">关注微信领大礼：<?php BLOCK('weixin_account') ?></span>
                 <strong>官方QQ交流群</strong>
                 <a><span class="left">官方1群：<em><?php BLOCK('qq_group1') ?></em></span><span class="right">官方2群：<em><?php BLOCK('qq_group2') ?></em></span></a>
           </p>
           <p class="copy">
              Copyright©2009-2016 <br />
              深圳市创梦天地科技有限公司 版权所有  粤ICP备11018438号<br />
              Copyright©2004-2013 Freejoy Technology Co. Ltd.<br />
              All rights reserved. 乐逍遥 版权所有<br />
              ©Masami Kurumada/SHUEISHA<br />
              ©SEGA
           </p>
           <p class="tb_icon"><img src="<?php BASE_URL() ?>images/p1.png" width="213" height="85" /><img src="<?php BASE_URL() ?>images/p3.png" width="87" height="94" /><img src="<?php BASE_URL() ?>images/p2.png" width="157" height="52" /></p>
      </footer>
  
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

<script type="text/javascript">
$(function(){
	
	$('.right_nav ul li').first().toggle(function(){
		$('.right_nav').css('height','225px');
	},function(){
		$('.right_nav').css('height','55px');
	})
	
	$('article img').css('max-width','100%');
	$('article p').css('text-indent','0');
	
	
})
</script>
</body>