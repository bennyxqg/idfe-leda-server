<?php
$banner = $this->PK->getBlock($site_id, 'inner_banner');
$qrcodeDownload = $this->PK->getBlock($site_id, 'qrcode_download'); // 下载二维码
?>
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
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
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
                <a href="/">首页</a> >>
                <?php
                    $categories = $this->Base->getNewsCategoryBySiteId($site_id);
                    $newsCategoryId = $result['News']['news_categories_id'];
                ?>
                <a href="<?php CATEGORY_URL(GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id'))) ?>"><?php CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id')) ?></a> >>
                <span>正文</span>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
            <p>时间：<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'))?></p>
        </div>
        <div class="text">
            <?php SHOW_CURRENT_NEWS_INFO('content') ?>
        </div>
        <div class="share clearfix">
            <div class="bdsharebuttonbox fr">
                <a href="#" class="bds_more" data-cmd="more">分享到：</a>
                <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a>
                <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a>
                <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a>
                <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a>
            </div>
            <script>
            window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};
            with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
            </script>
        </div>
    </div>
    <div class="wxbox">
        <img alt="" src="<?php BLOCK('game_download_qrcode') ?>" style="width: 120px; height: 120px;">
        <p>下载游戏</p>
        <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
        <p>扫描关注微信公众号</p>
    </div>
</div>
<?php require_once 'footer.ctp';?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.2.min.js"></script>
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