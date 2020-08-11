<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title><?= $title; ?></title>
<meta name="keywords" content="<?= $keywords; ?>"/>
<meta name="description" content="<?= $description; ?> "/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
<meta name="viewport" content="width=480, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
if(navigator.userAgent.indexOf('Android') > -1){
    var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
    var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
    document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
}
</script>
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>烈焰遮天</h1>
        <a class="dd" href="<?php echo $this->Base->getBlock(26,"android_download");?>">游戏下载</a>
        <?php
        $consulting =  $this->Ly->newsInitData($page,$category_id);
        $name=$this->Ly->get_category_name($category_id);
        ?>
    </div>
    <div class="content">
        <div class="news">
            <ul class="tab-hd clearfix">

                <li <?php if(isset($category_id) && is_array($category_id)) echo 'class="current"';?>><a class="qb" href="/news/all.html">全部</a></li>
                <li  <?php if($category_id == 46 ) echo 'class="current"';?>><a class="xw" href="<?php echo $this->Base->getNewsUrl(46);?>">新闻</a></li>
                <li <?php if($category_id == 48 ) echo 'class="current"';?>><a class="gg" href="<?php echo $this->Base->getNewsUrl(48);?>">公告</a></li>
                <li <?php if($category_id == 52 ) echo 'class="current"';?>><a class="hd" href="<?php echo $this->Base->getNewsUrl(52);?>">攻略</a></li>
            </ul>
            <div class="tab-con" style="display:block;">
                <ul class="newslist">
                    <?php if($consulting):?>
                        <?php foreach($consulting as $key=>$value):?>
                            <li>
                                <span><?php echo date("m/d",$value["updated"])?></span>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">

                                    [<?php
                                    $category_name=$this->Ly->get_category_name($value["news_categories_id"]);
                                    echo $category_name;?>]
                                    <?php echo $value["title"]?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="pagination">
                    <?php echo $this->Ly->pagination($category_id,$page);?>
                </div>
            </div>
        </div>
    </div>
    <?php  require_once  "_footer.ctp";?>
</div>
</body>
</html>
