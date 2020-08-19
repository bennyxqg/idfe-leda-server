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
    <?php require_once 'top.ctp';?>
    <div class="news">
        <?php
            $config = array(
                0 => array('新闻','公告','活动','攻略'),
                1 => array('新闻'),
                2 => array('公告'),
                3 => array('活动'),
                4 => array('攻略'),
            )
        ?>
        <div class="news_title">
            <a <?php if ($category_id == 0) echo 'class="active"';?> href="/news/0.html">最新</a>
            <a <?php if ($category_id == 1) echo 'class="active"';?> href="/news/1.html">新闻</a>
            <a <?php if ($category_id == 2) echo 'class="active"';?> href="/news/2.html">公告</a>
            <a <?php if ($category_id == 3) echo 'class="active"';?> href="/news/3.html">公告</a>
            <a <?php if ($category_id == 4) echo 'class="active"';?> href="/news/4.html">攻略</a>
        </div>
        <div class="count off">
            <ul>
                <?php
                    SHOW_NEWS('<li><a href="@@URL@@" ><span>[@@CATEGORY_NAME@@]</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',$config[$category_id],6,$page,array('LimitFrom'=>0));
                ?>
            </ul>
            <div class="pages">
                <?php
                        SHOW_PAGINATION2($config[$category_id],6,array("pageId"=>$category_id),$page);
                    ?>

            </div>
        </div>
    </div>
    <?php require_once 'footer.ctp';?>
</div>
</body>
</html>