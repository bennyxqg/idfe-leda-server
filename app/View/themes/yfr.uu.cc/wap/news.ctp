<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=750, user-scalable=no">
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
    <div id="page-content">
        <?php require_once 'top.ctp';?>
        <div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span><</span> 返回</a><p>更多资讯</p></div>
        <div class="page-main">
            <div class="wrap">
                <!--<?php echo $category_id ?>-->
                <div class="news-tabs">
                    <a <?php if ($category_id == 1) echo 'class="active"';?> href="/news/1.html">最新资讯</a>
                    <a <?php if ($category_id == 2) echo 'class="active"';?> href="/news/2.html">新闻</a>
                    <a <?php if ($category_id == 3) echo 'class="active"';?> href="/news/3.html">活动</a>
                    <a <?php if ($category_id == 4) echo 'class="active"';?> href="/news/4.html">公告</a>
                </div>
                <div id="news-tabs-container">
                    <ul>
                        <?php
                            $config = array(
                                1 => array('新闻','活动','公告'),
                                2 => array('新闻'),
                                3 => array('活动'),
                                4 => array('公告')
                            );
                            SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@<span>@@DATE@@</a></span></li>','Y-m-d',$config[$category_id],8,$page,array());
                        ?>
                    </ul>
                </div>
                <div class="pages">
                    <?php
                        SHOW_PAGINATION2($config[$category_id],10,array("pageId"=>$category_id),$page);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.ctp';?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.9.1.js"></script>
<script type="text/javascript">

$(document).ready(function(){


})
</script>
</body>
</html>
