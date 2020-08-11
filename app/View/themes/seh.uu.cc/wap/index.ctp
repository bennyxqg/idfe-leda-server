<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//seh.uu.cc/seh.uu.cc/wap/css/index.css" rel="stylesheet">
<link href="//seh.uu.cc/seh.uu.cc/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->
	
</head>
<body>
<div class="container">
    <div class="inner bander">
       <header id="header">
       	 <?php /*BLOCK*/
         echo '<span class="logo"><img src="'.GET_BLOCK('game_icon').'" width="117" height="117" /></span>';
         /*BLOCK*/ ?>
         <img src="//seh.uu.cc/seh.uu.cc/wap/images/logo_wz.png" width="156" height="56" />
         <?php /*BLOCK*/
         echo '<a href="'.GET_BLOCK('android_download_url').'" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'" class="d_load DOWNLOAD_LINK_EDIT"></a>';
         /*BLOCK*/ ?>
       </header>
       <div class="sp_lb">
         
       </div>
       
    </div>
    
    <div class="zx_yx">
    <?php /*BLOCK*/
      echo '<a href="'.GET_CATEGORY_URL('最新活动').'" class="active"><img src="//seh.uu.cc/seh.uu.cc/wap/images/active.png" width="180" height="128" /></a>';
      echo '<a href="'.GET_CATEGORY_URL('新闻公告').'" class="xinwen"><img src="//seh.uu.cc/seh.uu.cc/wap/images/new.png" width="180" height="128" /></a>';
      echo '<a href="'.GET_CATEGORY_URL('游戏攻略').'" class="gongl"><img src="//seh.uu.cc/seh.uu.cc/wap/images/gongl.png" width="180" height="128" /></a>';
    /*BLOCK*/ ?>
    </div>
    
    <div class="inner list2">
        <h1><img src="//seh.uu.cc/seh.uu.cc/wap/images/tese.jpg" width="580" height="55"></h1>
        <div class="swiper-container swiper3">
        <div id="loop_img_edit" class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><a href="@@STR2@@"><img src="@@STR1@@" /></a></div>','m-d',2,100,1,array('OrderBy'=>'`int1` asc'));
        ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination3"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
    </div>
    
    <div class="wx_qq">
      <p>
        <img src="//seh.uu.cc/seh.uu.cc/wap/images/wx.png" width="91" height="91" />
        <span>微信号</span>
        <a>
        <?php /*BLOCK*/
           echo '<em>'.GET_BLOCK('weixin_account').'</em>';
        /*BLOCK*/ ?>
        </a>
      </p>
      <p>
        <img src="//seh.uu.cc/seh.uu.cc/wap/images/qq.png" width="91" height="91" />
        <span>QQ群</span>
        <a>
        <?php /*BLOCK*/
           echo '<em>'.GET_BLOCK('qq_group').'</em>';
        /*BLOCK*/ ?>
        </a>
      </p>
      <p>
        <img src="//seh.uu.cc/seh.uu.cc/wap/images/kefu.png" width="91" height="91" />
        <span>客服电话</span>
        <a>
        <?php /*BLOCK*/
           echo '<em>'.GET_BLOCK('custom_service_phone').'</em>';
        /*BLOCK*/ ?>
        </a>
      </p>
    </div>
    
    <?php require_once("_footer.ctp"); ?>
    
</div>

<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/wap/js/swiper.min.js"></script>
 <script>
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
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
    
    $(".DOWNLOAD_LINK_EDIT").each(function(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(ua.match(/MicroMessenger/i)=="micromessenger"){
			$(".weixin_tip").show();
			return false;
		} else {
			if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
				$(this).attr('href',$(this).attr('href_ios'));
			else if (/(Android)/i.test(navigator.userAgent))
				$(this).attr('href',$(this).attr('href_android'));
		}
	});
    </script>
</body>
</html>