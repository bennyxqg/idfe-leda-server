<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>
<body>


<div class="container">
    <div class="inner" >
       <header id="header">
         <span class="logo"><img src="<?php BASE_URL() ?>images/logo.png"  /></span>
       </header>
    </div>
    <article>
    <h1><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
    <span class="timer">时间：<?php echo date('Y-m-d',GET_CURRENT_NEWS_INFO('created')) ?></span>
    <p>
    <?php SHOW_CURRENT_NEWS_INFO('content') ?>
	</p>
    </article>

    
    
     <?php require_once("_footer.ctp"); ?>
</div>


</body>
</html>