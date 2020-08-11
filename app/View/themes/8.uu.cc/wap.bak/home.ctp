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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css" />
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css" />
</head>

<body>
<div id="container">

      <header class="top">
           <div class="left"><img src="<?php BLOCK('game_icon') ?>" width="103" height="103" /><img src="<?php BASE_URL() ?>images/icon_logo.png" width="193" height="56" /></div>
           <div class="right right_nav">
               <ul>
               		<a href="/home"><li>首页</li></a>
                   <a href="<?php CATEGORY_URL('视频','video') ?>"><li>视频</li></a>
                   <a href="<?php CATEGORY_URL('新闻') ?>"><li>新闻</li></a>
                   <a href="<?php CATEGORY_URL('图片','picture') ?>"><li>图片</li></a>
                   
               </ul>
           </div>
      </header>
     
      <section class="part1">
           <div class="swiper-container swiper1">
                <div class="swiper-wrapper">
                <?php
                	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" alt="" /></div>','m-d',0,16,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination1"></div>
            </div>
      </section>
      
      <section class="content">
      
          <section class="part2 part">
              <p>
                <a href="<?php BLOCK('android_download_url') ?>"><img src="<?php BASE_URL() ?>images/az.png" width="287" height="97" /></a>
                <a href="<?php BLOCK('ios_download_url') ?>"><img src="<?php BASE_URL() ?>images/ios.png" width="291" height="97" /></a>
              </p>
              <p class="wxh">关注微信领大礼：<?php BLOCK('weixin_account') ?></p>
          </section>
          
          <section class="part3 part">
              <h1><span class="left"></span><a href="<?php CATEGORY_URL('综合') ?>" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
              <ul id="lanmu" class="x_g">
                <a class="on" href="javascript:;">综合</a>
                <a href="javascript:;">新闻</a>
                <a href="javascript:;">公告</a>
                <a href="javascript:;">活动</a>
                <a href="javascript:;">攻略</a>
              </ul>
              <div class="xw_gg">
                <ul id="z_h" style="display:block;">
                <?php
                	SHOW_NEWS('<li><strong>[综合]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),4,1,array());
                ?>
                </ul>
                <ul id="x_w">
                <?php
                	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',4,1,array());
                ?>
                </ul>
                <ul id="g_g">
                <?php
                	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公告',4,1,array());
                ?>
                </ul>
                <ul id="h_d">
                <?php
                	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','活动',4,1,array());
                ?>
                </ul>
              </div>
              
          </section>
          
          <section class="part4 part">
               <h1><span class="left"></span><a href="<?php CATEGORY_URL('综合') ?>" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <a href="#"><img src="<?php BASE_URL() ?>images/zl.jpg" width="588" height="232" /></a>
          </section>
          
          <section class="part5 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <ul>
               <?php
               	SHOW_DATAS('<a href="@@STR2@@">@@LABEL@@</a>','m-d',3,100,1,array('OrderBy'=>'`int1` asc'));
               ?>
               </ul>
          </section>
          
          <section class="part6 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <div class="swiper-container swiper2" style="margin:20px 0;">
                    <div class="swiper-wrapper">
                    <?php
                    	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" alt="" width="100%" /></div>','m-d',4,100,1,array('OrderBy'=>'`int1` asc'));
                    ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination2"></div>
               </div>
          </section>
          
          <section class="part7 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <?php
               SHOW_DATAS('<video id="video" controls="" src="@@STR2@@" width="588" height="380" ></video>','m-d',5,1,1,array('OrderBy'=>'`int1` asc'));
               ?>
          </section>
          
          <section class="part8 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <div class="swiper-container swiper3">
                <div class="swiper-wrapper">
                <?php
                SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" alt="" width="100%" /></div>','m-d',6,100,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </div>
                <!-- Add Pagination -->

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
          </section>
          
          <section class="part9 part">
               <h1><span class="left"></span><a href="#" class="right"><img src="<?php BASE_URL() ?>images/more.png" width="44" height="44" /></a></h1>
               <ul>
                  <li>
                  <?php
	                SHOW_DATAS('<a href="@@STR2@@" class="@@STR3@@">@@LABEL@@</a>','m-d',7,100,1,array('OrderBy'=>'`int1` asc','Condition'=>'`int2`=0'));
	              ?>
                  <br />
                  </li>
                  <li>
                  <?php
	                SHOW_DATAS('<a href="@@STR2@@" class="@@STR3@@">@@LABEL@@</a>','m-d',7,100,1,array('OrderBy'=>'`int1` asc','Condition'=>'`int2`=1'));
	              ?>
                  </li>
               </ul>
          </section>

      </section>
      
      <footer class="bottom">
           <p class="qq">
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
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript">
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper3 = new Swiper('.swiper3', {
        pagination: '.swiper-pagination3',
       // paginationClickable: true,
         paginationClickable: '.swiper-pagination3',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
</script>
<script type="text/javascript">
$(function(){
	
	$('.right_nav ul li').first().toggle(function(){
		$('.right_nav').css('height','225px');
	},function(){
		$('.right_nav').css('height','55px');
	})
	
	
	$("#lanmu a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on').siblings().removeClass('on');  
		$('.xw_gg ul').eq(i).show().siblings().hide();
		})	
	})
	
	
})
</script>
</body>