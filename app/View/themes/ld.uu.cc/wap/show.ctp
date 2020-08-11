<?php $this->Website->init(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<?php require_once('top.ctp'); ?>
</head>
<body>
<div class="container" style="background:#202121;">
   <div class="top">
      <img alt="" src="<?php BLOCK('game_icon') ?>">
      <a class="d_onload" href="<?php BLOCK('android_download_url') ?>"></a>
      
   </div>
   <h1 class="title_h1"><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
   <span class="timer">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></span>
   <article>
      <?php SHOW_CURRENT_NEWS_INFO('content') ?>
   </article>
   <a class="gotop"></a>
</div>
<script type="text/javascript">
$(function(){
	$('.gotop').click(function(){$('html,body').animate({scrollTop: '0px'}, 1000);return false;});
	})
</script>
</body>
</html>