<?php
$qrcodeDownload = $this->LV->getSingleBlock('qrcode_download'); // 下载二维码
$qrcodeWeixin = $this->LV->getSingleBlock('qrcode_weixin'); // 微信二维码
$banner = $this->LV->getSingleBlock('inner_banner'); // 内页banner
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<div class="header">
    <div class="top clearfix">
        <div class="purple_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="#">乐舞，舞随心动</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//love.uu.cc">官网首页</a><em></em></li>
                <li><a href="#">游戏介绍</a><em></em></li>
                <li><a href="//bbs.uu.cc/forum-269-1.html">游戏论坛</a><em></em></li>
            </ul>
        </div>
    </div>
    <div class="nybanner"><?php if($banner): echo $banner; endif;?></div>
    <div class="top_db sl-shadow">
        <div class="pos">
            <a href="/" class="goIndex">返回首页</a>
            <a href="/">首页</a> >>
            <?php
                $categories = $this->Base->getNewsCategoryBySiteId($site_id);
                $newsCategoryId = $result['News']['news_categories_id'];
            ?>
            <a href="<?php echo $this->Base->getNewsUrl($newsCategoryId);?>"><?php echo $categories[$newsCategoryId];?></a> >>
            <span>正文</span>
        </div>
    </div>
</div>
<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?php  echo $result["News"]["title"];?></h2>
            <p>时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></p>
        </div>
        <div class="text">
            <?php echo $result['News']['content'];?>
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
        <?php if($qrcodeDownload): ?>
            <?php echo $qrcodeDownload;?>
        <?php endif;?>
        <p>下载游戏</p>
        <?php if($qrcodeWeixin): echo $qrcodeWeixin; endif; ?>
        <p>扫描关注微信公众号</p>
    </div>
</div>
<?php require_once "_footer.ctp"; ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
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

//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?87109a8ac60e1afbaa24d8b17f309c3e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/banner.js"></script>
</body>
</html>