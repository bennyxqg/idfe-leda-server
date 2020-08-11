<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/index.css"  />
<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/favicon.ico">
</head>

<body>
<div id="news">
    <?php require_once '_top.ctp';?>
    <div class="main2">
        <div class="news_box">
            <div class="title">
                <h3><?php echo GET_CURRENT_NEWS_INFO('title');?></h3>
                <p><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></p>
            </div>
            <div class="text">
                <?php echo GET_CURRENT_NEWS_INFO('content');?>
            </div>
        </div>

    </div>
    <?php require_once '_footer.ctp';?>
</div>
</body>
</html>