<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
<link media="screen" href="<?php echo $full_base_url ?>/css/index.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">
    <h1><a href="/">烈焰遮天</a></h1>
    <div class="lt"><a target="_blank" href="//bbs.uu.cc/forum-250-1.html"><img src="<?php echo $full_base_url ?>/images/jrlt.png" alt=""></a></div>
</div>
<div class="content">
    <?php
    $consulting =  $this->Ly->newsInitData($page,$category_id);
    $name=$this->Ly->get_category_name($category_id);
    ?>
    <?php require_once "_top.ctp"; ?>
    <div class="newsBox">
        <div class="position">
            <span>您的位置：</span>
            <span><a href="/">首页</a></span>
            <span>></span>

            <span><a target="_blank" href="<?php echo $this->Base->getNewsUrl($category_id);?>"><?php echo $name;?></a></span>

        </div>
        <h2><img src="<?php echo $full_base_url ?>/images/xwzx.png" alt="新闻资讯"></h2>
        <div class="newscon">
            <ul class="tab-hd clearfix">
                <li <?php if(isset($category_id) && is_array($category_id)) echo 'class="cur"';?>><a class="qb" href="/news/all.html">全部</a></li>
                <li  <?php if($category_id == 46 ) echo 'class="cur"';?>><a class="xw" href="<?php echo $this->Base->getNewsUrl(46);?>">新闻</a></li>
                <li <?php if($category_id == 48 ) echo 'class="cur"';?>><a class="gl" href="<?php echo $this->Base->getNewsUrl(48);?>">公告</a></li>
                <li <?php if($category_id == 52 ) echo 'class="cur"';?>><a class="hd" href="<?php echo $this->Base->getNewsUrl(52);?>">攻略</a></li>
            </ul>
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
<?php require_once "_footer.ctp"; ?>
</body>
</html>
