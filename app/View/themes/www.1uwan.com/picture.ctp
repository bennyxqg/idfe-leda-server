<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <meta name="keywords" content="<?= $keywords ?>"/>
    <meta name="description" content="<?= $description ?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<div class="header">
    <?php include '_top.ctp' ?>
    <div class="banBox">
        <div class="nybanner"><img src="<?php echo $full_base_url ?>/images/nybanner.jpg" width="1920" height="347" border="0"></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span>精彩截图</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li class="cur"><a href="#">精彩截图</a><em></em></li>
        </ul>
        <div class="imgBox">
            <div class="showImg">
                <div class="jCarouselLite">
                    <ul class="clearfix">
                        <li><img src="<?php echo $full_base_url ?>/images/yh.jpg" alt=""></li>
                        <li><img src="<?php echo $full_base_url ?>/images/yh.jpg" alt=""></li>
                        <li><img src="<?php echo $full_base_url ?>/images/yh.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <button class="btn_left"></button>
            <button class="btn_right"></button>
        </div>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".jCarouselLite").jCarouselLite({
        visible: 1,
        scroll: 1,
        circular: false,
        btnNext: ".btn_right",
        btnPrev: ".btn_left"
        });
    });
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39969579" charset="UTF-8"></script>
</body>
</html>