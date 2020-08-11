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
    <link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php FILE_PATH() ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php FILE_PATH() ?>/css/minimalist.css" type="text/css" />
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>
<div class="header">
    <div class="banBox">
        <div class="nybanner">
            <?php
                SHOW_DATAS('<img src="@@STR1@@" style="height: 347px; width: 1920px">','m/d',6,1,0,array());
            ?>
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="//pao.uu.cc">首页</a> >>
                <?php
                    if (!is_array($category_id)) {
                        $category_id = (int)$category_id;
                    }
                    $categories = $this->Base->getNewsCategoryBySiteId($site_id);

                    if (!is_array($category_id) && array_key_exists((int)$category_id, $categories)) {
                        $categoryName = $categories[(int)$category_id];
                    } else {
                        $categoryName = '新闻中心';
                    }
                ?>
                <span><?php CATEGORY_NAME($category_id) ?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li <?php if($category_id == GET_CATEGORY_ID('地铁新闻')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('地铁新闻') ?>">地铁新闻</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('地铁活动')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('地铁活动') ?>">地铁活动</a><em></em></li>
            <li <?php if($category_id == GET_CATEGORY_ID('地铁攻略')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('地铁攻略') ?>">地铁攻略</a><em></em></li>
        </ul>
        <ul class="newslist">
        <?php
            SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ <img src="//pao.uu.cc/pao.uu.cc/images/hot.png" alt=""></a></li>','m-d',GET_CATEGORY_NAME($category_id),5,$page,array());
        ?>
        </ul>

        <div class="pagination">
        <?php
            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),5,array(),$page);
        ?>
        </div>
    </div>
    <div class="wxbox">
        <img src="<?php BLOCK('game_download_qrcode') ?>" alt="">
        <p>下载游戏</p>
        <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
        <p>扫描关注微信公众号</p>
    </div>
</div>
<?php require_once 'footer.ctp';?>
<script type="text/javascript" src="<?php FILE_PATH() ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //右侧微信
    var elm = $('.wxbox');
    var startPos = $(elm).offset().top;
    $.event.add(window, "scroll", function(){
        var p = $(window).scrollTop();
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute');
        $(elm).css('top',((p) > startPos) ? '0px' : '');
    });
});
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>