<?php 
require_once "_include.ctp";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keywords;?>"/>
    <meta name="description" content="<?php echo $description;?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/v2/css/style.css" type="text/css" />
</head>
<body class="ny_body">
<div class="header">
    <?php require_once "_top_nav.ctp"; ?>
    <div class="banBox">
        <div class="nybanner">
        <?php if($banner){?>
            <?php echo $banner;?>
        <?php }else{?>
            <img src="<?php echo $full_base_url ?>/v2/images/nybanner.jpg" width="1920" height="347" border="0">
        <?php }?>
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/home" class="goIndex">返回首页</a>
                <a href="/home">首页</a> >>
                <?php
                    $categories = $this->Base->getNewsCategoryBySiteId($site_id);
                    $newsCategoryId = $result['News']['news_categories_id'];
                ?>
                <a href="<?php echo $this->Base->getNewsUrl($newsCategoryId);?>"><?php echo $categories[$newsCategoryId];?></a> >>
                <span>正文</span>
                
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="newsBox">
        <div class="news_tit">
            <h2><?php echo $result["News"]["title"];?></h2>
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
</div>
<?php require_once "_footer.ctp"; ?>
</body>
</html>