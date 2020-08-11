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
        $content=$this->Ly->get_category_name($result["News"]["news_categories_id"]);
    ?>
    <div class="newsBox">
        <div class="position">
            <span>您的位置：</span>
            <span><a href="/">首页</a></span>
            <span>></span>
            <span>
                <a target="_blank" href="<?php echo $this->Base->getNewsUrl($result["News"]["news_categories_id"]);?>"><?php echo $content;?></a> </span>
        </div>

        <h2><img src="<?php echo $full_base_url ?>/images/xwzx.png" alt="<?php echo $content;?>"></h2>

        <div class="newscon" id="newCon">
            <h3><?php echo $result["News"]["title"];?></h3>
            <h5>
                <span>时间：<?php echo date("Y-m-d i:s",$result["News"]["created"]);?> </span>
                <span> 分享：</span>
                <!-- JiaThis Button BEGIN -->
                <div class="jiathis_style">
                    <a class="jiathis_button_qzone"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_tqq"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_renren"></a>
                    <a class="jiathis_button_xiaoyou"></a>
                    <a href="//www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis"
                       target="_blank"></a>
                    <a class="jiathis_counter_style"></a>
                </div>
                <script type="text/javascript" src="//v3.jiathis.com/code/jia.js?uid=1405992778323369"
                        charset="utf-8"></script>
                <!-- JiaThis Button END -->
            </h5>
            <div class="txt">
                <?php echo $result["News"]["content"]?>
            </div>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp"; ?>
</body>
</html>
