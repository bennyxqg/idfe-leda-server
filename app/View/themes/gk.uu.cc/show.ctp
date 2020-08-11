<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<?php require_once '_top.ctp';?>

<div class="page">
    <div class="newsTit">
        <div class="wrap">
            <a class="backBtn" href="javascript:window.history.go(-1);"></a>
            <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
            <div class="date"><?php echo date("Y-m-d",GET_CURRENT_NEWS_INFO('created'));?></div>
        </div>
    </div>
    <div class="content">
        <?php echo GET_CURRENT_NEWS_INFO('content');?>
    </div>
    <a class="newsListMore clearfix" href="javascript:history.go(-1);">返回上页</a>
</div>
<?php require_once '_footer2.ctp';?>
</body>
</html>
