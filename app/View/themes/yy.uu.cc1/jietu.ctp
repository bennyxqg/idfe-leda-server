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
<body>
<div class="header">
    <?php require_once "_top_nav.ctp"; ?>
    <div class="banBox">
        <div class="nybanner">
            <img src="<?php echo $full_base_url ?>/v2/images/nybanner.jpg" width="1920" height="347" border="0">
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/home" class="goIndex">返回首页</a>
                <a href="//yy.uu.cc">首页</a> >>
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
                    <ul class="runContent">
                    <?php
                    if($topData['jcjt']){?>
                        <?php foreach($topData['jcjt'] as $value){?>
                            <li>
                                <a href="<?php echo $value['big_link'];?>" target="_blank">
                                    <img src="/uploads/<?php echo $value['big_url'];?>" />
                                </a>
                            </li>
                        <?php }?>
                    <?php }else{?>
                        <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <?php }?>
                    </ul>
                </div>
            </div>
            <button class="btn_left disabled"></button>
            <button class="btn_right"></button>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp"; ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/v2/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/v2/js/cookie.js"></script>
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
<script type="text/javascript" src="//tajs.qq.com/stats?sId=28932393" charset="UTF-8"></script>
</body>
</html>