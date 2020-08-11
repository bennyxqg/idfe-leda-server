<!DOCTYPE html>
<html>
<head>
<title><?= $title; ?></title>
<meta name="keywords" content="<?= $keywords; ?>"/>
<meta name="description" content="<?= $description; ?> "/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=480, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
<script type="text/javascript">
if(navigator.userAgent.indexOf('Android') > -1){
    var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
    var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
    document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
}
</script>
</head>
<body>
<?php
    $content=$this->Ly->get_category_name($result["News"]["news_categories_id"]);
?>
<div class="wrap">
    <div class="header">
        <h1>烈焰遮天</h1>
        <a class="dd" href="<?php echo $this->Base->getBlock(26,"android_download");?>">游戏下载</a>
    </div>
    <div class="content">
        <div class="news">
            <div class="position">
                <span><a href="/">首页</a></span>
                <span>></span>
                <span><a href="<?php echo $this->Base->getNewsUrl($result["News"]["news_categories_id"]);?>"><?php echo $content;?></a></span>
                <span>></span>
                <span>新闻详细</span>
            </div>
            <div class="newsCon">
                <div class="tit">
                    <h3><?php echo $result["News"]["title"];?></h3>
                    <h5>时间：<?php echo date("Y-m-d i:s",$result["News"]["created"]);?></h5>
                    <div class="txt">
                        <?php echo $result["News"]["content"]?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  require_once  "_footer.ctp";?>
</div>
</body>
</html>
