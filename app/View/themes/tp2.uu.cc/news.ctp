<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/minimalist.css" type="text/css" />
    <script type="text/javascript" src="/js/edata.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    sToEdata();
    </script>
</head>

<body>
<div class="header">
    <?php
    $consulting =  $this->Tp->newsInitData($page,$category_id);
    // var_dump($consulting);
    $name=$this->Tp->get_category_name($category_id);
    ?>
    <div class="banBox">
        <div class="nybanner"><img src="<?php BASE_URL() ?>images/nybanner.jpg" border="0"></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span><?php CATEGORY_NAME($category_id) ?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="cur"';?>><a href="<?php CATEGORY_URL('新闻') ?>">新闻</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="cur"';?>><a href="<?php CATEGORY_URL('活动') ?>">活动</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('攻略')) echo 'class="cur"';?>><a href="<?php CATEGORY_URL('攻略') ?>">攻略</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('公告')) echo 'class="cur"';?>><a href="<?php CATEGORY_URL('公告') ?>">公告</a><em></em></li>
        </ul>
        <ul class="newslist">
        <?php
            SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@  <img src="//tp2.uu.cc/tp2.uu.cc/images/hot.png" alt=""></a></li>','m-d',GET_CATEGORY_NAME($category_id),10,$page,array());
        ?>
        </ul>
        <div class="pagination">
        <?php
            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array(),$page);
        ?>
        </div>
    </div>
</div>
<?php require_once("_footer.ctp");?>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>