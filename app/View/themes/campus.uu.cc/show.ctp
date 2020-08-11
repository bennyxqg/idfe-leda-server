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
<link href="<?php FILE_PATH() ?>/css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>
    <?php require_once 'top.ctp';?>
    <div class="pageMain clearfix">
        <div class="subHead">
            <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?><span></span></h2>
            <!--<p class="notes"><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></p>-->
        </div>
        <div class="text_box">
            <?php SHOW_CURRENT_NEWS_INFO('content') ?>
        </div>
    </div>
    <?php require_once 'footer.ctp';?>
<script src="<?php FILE_PATH() ?>/js/jquery-1.11.3.min.js" type="text/jscript"></script>

</body>
</html>
