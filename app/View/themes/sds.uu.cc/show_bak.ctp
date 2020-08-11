<!doctype html>
<html>
<head>
<meta charset="utf-8">
<META HTTP-EQUIV="Pragma"CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control"CONTENT="no-cache">
<META HTTP-EQUIV="Expires"CONTENT="0">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'-'.GET_CURRENT_NEWS_INFO('title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>home/css/style.css?v=20171120" />
<link rel="shortcut icon" href="//sds.uu.cc/sds.uu.cc/favicon.ico">
</head>

<body class="page">

<div class="menu_top">
    <div class="wrap">
        <a href="/home" target="_self">官网首页<em>HOME</em><span></span></a>
        <a href="<?php CATEGORY_URL('新闻') ?>" target="_self">新闻公告<em>NEWS</em><span></span></a>
        <a class="home_logo" href="/home" target="_self"><span></span></a>
        <a href="http://bbs.uu.cc/forum-345-1.html" target="_blank">游戏攻略<em>DATA</em><span></span></a>
        <a href="<?php BLOCK('forum_url') ?>" target="_self">官方论坛<em>BBS</em></a>
    </div>
</div>

<!--<div class="page_banner"></div>-->

<div class="page_main">
    <div class="wrap">
        <div class="pr page_nav"><h2>新闻中心<em>NEWS</em></h2><div class="pa nav_link"><a href="/">首页</a>&gt;<a href="/news/0">新闻中心</a>&gt;正文</div></div>
        <div class="page_con">
            <div class="page_con_top"></div>
            <div class="content">
                <?php
                    echo '<h2 class="news_tit">'.GET_CURRENT_NEWS_INFO('title').'</h2>';
                ?>
                <?php
                    echo '<div class="news_time">时间：'.date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')).'</div>';
                ?>
                <div class="news_detail_con">
                <?php
                    SHOW_CURRENT_NEWS_INFO('content');
                ?>
                </div>
            </div>
            <div class="page_con_bottom"></div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="div_pop">
    <a class="go_top" href="javascript:;"></a>
    <img class="wx_code" src="<?php BLOCK('weixin_qrcode') ?>" />
    <p class="qqun">①群：<?php BLOCK('qq_group1') ?><br>②群：<?php BLOCK('qq_group2') ?></p>
</div>


<script type="text/javascript" src="<?php BASE_URL() ?>home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
$(document).ready(function(){
    $(".go_top").click(function() {
        $("body,html").animate({scrollTop:0},500);
    });

})
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?de64d2f7cefe742c2e593b9bfac2caab";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
