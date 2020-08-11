<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css?v=161219">

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>

<body>
<div id="container">
    <div id="header">
        <span class="icon"><img src="<?php BASE_URL() ?>images/icon.png" width="90" height="90" ;></span>
        <a class="sy" href="/">首页</a>
        <a class="xw" href="//lr.uu.cc/news/338.html">新闻</a>
        <a class="hd" href="//lr.uu.cc/news/340.html">活动</a>
        <a class="lt" href="<?php BLOCK('forum_url') ?>">论坛</a>
    </div>
    <div class="bander">
        <a href="<?php BLOCK('global_download_url') ?>" class="down"></a>
    </div>
    <div class="list1">
        <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" /></div>','m-d',11,100,0,array());
        ?>
        </div>
            <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
        </div>
    </div>
    <h1 class="n_h1 h1"></h1>
    <div class="news">
                <div class="tab">
                   <ul>
                       <li class="dq"><span>综合</span></li>
                       <li><span>新闻</span></li>
                       <li><span>活动</span></li>
                   </ul>
                   <a href="<?php CATEGORY_URL() ?>" class="more"></a>
                   <a style="display:none" href="<?php CATEGORY_URL('新闻') ?>" class="more"></a>
                   <a style="display:none" href="<?php CATEGORY_URL('活动') ?>" class="more"></a>
                </div>
                <div class="tab_content">
                   <ul style="display:block">
                   <?php
				       	SHOW_NEWS('<li><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',array('新闻','活动'),6,$page,array());
				       ?>
                   </ul>
                   <ul>
                       <?php
				       	SHOW_NEWS('<li><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',array('新闻'),6,$page,array());
				       ?>
                   </ul>
                   <ul>
                       <?php
				       	SHOW_NEWS('<li><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',array('活动'),6,$page,array());
				       ?>
                   </ul>
                </div>
    </div> 
            
    <div class="list2">
          <h1 class="l_h1 h1"></h1>
          <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                <?php
        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" /></div>','m-d',4,100,0,array());
        ?>
                </div>
                <div class="swiper-pagination swiper-pagination2"></div>
          </div>
    </div>        
    <div class="hz">
        <h1 class="h_h1 h1"></h1> 
        <img src="<?php BASE_URL() ?>images/hz.jpg" width="640"  usemap="#planetmap"  />
        <!--
         <map name="planetmap" id="planetmap">
             <area shape="rect" coords="24,2,121,54" href ="#"  />
             <area shape="rect" coords="120,-4,222,55" href ="#"  />
             <area shape="rect" coords="222,2,320,55" href ="#"  />
             <area shape="rect" coords="320,2,421,56" href ="#"  />
             <area shape="rect" coords="421,0,515,56" href ="#"  />
             <area shape="rect" coords="514,0,613,57" href ="#"  />
             <area shape="rect" coords="24,55,121,114" href ="#"  />
             <area shape="rect" coords="121,54,222,115" href ="#"  />
             <area shape="rect" coords="222,54,322,117" href ="#"  />
             <area shape="rect" coords="321,54,423,117" href ="#"  />
             <area shape="rect" coords="421,56,517,117" href ="#"  />
             <area shape="rect" coords="517,55,614,116" href ="#"  />
             <area shape="rect" coords="24,112,122,177" href ="#"  />
             <area shape="rect" coords="121,114,221,177" href ="#"  />
             <area shape="rect" coords="220,116,323,176" href ="#"  />
             <area shape="rect" coords="321,116,426,175" href ="#"  />
             <area shape="rect" coords="425,115,517,175" href ="#"  />
             <area shape="rect" coords="516,116,614,177" href ="#"  />
         </map>
         -->
    </div>       
    <div class="w_q">
        <div class="w_q_left">
           <p>长按码识别公众号</p>
           <img src="<?php BLOCK('weixin_qrcode') ?>" width="139"  />
        </div>
        <div class="w_q_right">
            <p class="wx">
                   微信公众号<br /><?php BLOCK('weixin_account') ?>
            </p>
            <p class="qq">
                   官方QQ交流群<br /><?php BLOCK('qq_group') ?>
            </p>
        </div>
    </div>
    <?php require_once("_footer.ctp"); ?>
     
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript">
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
		loop: true
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 30,
		loop: true
    });

</script>
<script type="text/javascript">

$(function(){
$('.tab ul li').each(function(t){
		$(this).on('click',function(){
			 $(this).addClass('dq').siblings().removeClass('dq');
			 $('.tab_content ul').eq(t).show().siblings().hide();
			 $('.tab a').eq(t).show().siblings().hide();
			 $('.tab ul').show();	
		})
	})
})
</script>

</body>