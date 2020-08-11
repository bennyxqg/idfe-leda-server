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
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
</head>

<body class="page">
    <div id="#page-content">
        <?php require_once 'top.ctp';?>
        <div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span><</span>返回</a><p>新闻中心</p></div>
        <div class="page-main page-detail">
            <div class="wrap">
                <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="date"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
                <div class="content_box">
                    <!--<img style="width:710px; max-width:710;" src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" alt="">-->
                    <?php
                        echo GET_CURRENT_NEWS_INFO('content');
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'footer.ctp';?>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
