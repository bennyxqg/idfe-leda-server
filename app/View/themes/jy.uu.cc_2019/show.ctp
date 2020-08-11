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
<?php require_once '_top.ctp';?>
<div class="pageBanner">

</div>
<div class="nc_head">
    <div class="title"><img src="<?php FILE_PATH() ?>/images/bg11_title.png" alt=""></div>
    <div class="text">
        <p><span>您的位置：</span><a href="/">官网首页</a> > 新闻公告</p>
        <div class="list">
            <a href="//jy.uu.cc/news/2.html">资讯</a>
            <a href="//jy.uu.cc/news/3.html">攻略</a>
            <a href="/vediocenter/2.html">图片</a>
            <a href="/vediocenter/1.html">影音</a>
        </div>
    </div>
    <i class="left_btn"></i>
</div>
<div class="pageMain clearfix">
    <div class="subHead">
        <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
        <p class="notes">
            <span>作者：梦幻家园运营团队</span>
            <span>时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></span>
        </p>
    </div>
    <div class="text_box">
          <?php SHOW_CURRENT_NEWS_INFO('content') ?>
    </div>
</div>
<div class="nc_bottom">
    <div class="left">
        <h3>关于《梦幻家园》</h3>
        <p>《梦幻家园》由全球顶级休闲手游研发商Playrix打造，是一款集成益智消除与房屋经营乐趣的休闲手游。
            消除2.0代产品，横纵型消除模式，通过消除过程以获取各种资源。体验消除乐趣同时，模拟经营装扮自己的房屋。玩家们将陪伴管家奥斯汀前往老家渡假 ，造访他年事已高的父母，顺便帮助奥斯汀完成重新翻修童年老宅，说服父母不要出售这栋房子的任务。</p>
    </div>
    <div class="line"></div>
    <div class="right">
        <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" width="120" height="120" alt="">
        <div>
            <h3> 关于《梦幻家园》</h3>
            <p>《梦幻家园》官方网站：http://jy.uu.cc/</p>
            <p>《梦幻家园》官方玩家交流群：724777813</p>
            <p>《梦幻家园》官方微信：梦幻家园正版手游</p>
        </div>
    </div>
    <a href="http://jy.uu.cc/news/1.html" class="go_list">返回列表</a>
</div>
<div class="line_bottom"></div>
<?php require_once 'left.ctp';?>
<?php require_once 'footer.ctp';?>
<script src="<?php FILE_PATH() ?>/js/jquery-1.9.1.js" type="text/jscript"></script>
<script type="text/javascript">

</script>
</body>
</html>
