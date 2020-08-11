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

<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/wap/js/jquery-1.8.0.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>
<div class="container" >
   <div class="top">
      <span class="logo_small">
      <?php /*BLOCK*/
      echo '<img src="'.GET_BLOCK('game_icon').'" width="74" />';
      /*BLOCK*/ ?>
      </span>
      <span class="by by_small"><img src="//seh.uu.cc/seh.uu.cc/wap/images/logo_wz.png" width="150"  /></span>
      <?php /*BLOCK*/
      echo '<a class="d_onload DOWNLOAD_LINK_EDIT" href="'.GET_BLOCK('android_download_url').'" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'">';
      /*BLOCK*/ ?>
      <img src="//seh.uu.cc/seh.uu.cc/wap/images/down.png" width="176" height="67" /></a>
   </div>
   <div class="relative">
      <a href="#" class="back"><img src="//seh.uu.cc/seh.uu.cc/wap/images/back.png" width="25" height="36" /></a>
      <?php /*BLOCK*/
      if(GET_CURRENT_NEWS_INFO('news_categories_id') == GET_CATEGORY_ID('新闻公告'))
      	echo 'span class="lm_gl"></span>';
      else if(GET_CURRENT_NEWS_INFO('news_categories_id') == GET_CATEGORY_ID('最新活动'))
      	echo '<span class="lm_xw"></span>';
      else
      	echo '<span class="lm_yx"></span>';
      /*BLOCK*/ ?>
      <a href="#" class="lm_list"><img src="//seh.uu.cc/seh.uu.cc/wap/images/list.png" width="34" height="36" /></a>
      <div class="tishi">
      <?php /*BLOCK*/
        echo '<a class="xw" href="'.GET_CATEGORY_URL('最新活动').'"></a>';
        echo '<a class="gl" href="'.GET_CATEGORY_URL('新闻公告').'"></a>';
        echo '<a class="yx" href="'.GET_CATEGORY_URL('游戏攻略').'"></a>';
      /*BLOCK*/ ?>
      </div>
   </div>
   <?php /*BLOCK*/
   echo '<h1 class="title_h1">'.GET_CURRENT_NEWS_INFO('title').'</h1>';
   echo '<span class="timer">时间：'.date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')).'</span>';
   echo '<article>'.GET_CURRENT_NEWS_INFO('content').'</article>';
   /*BLOCK*/ ?>
</div>

<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/wap/js/commen.js"></script>
</body>
</html>