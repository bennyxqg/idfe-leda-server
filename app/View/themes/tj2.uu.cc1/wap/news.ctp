<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta content="<?= $keywords; ?>" name="keywords" />
    <meta content="<?= $description; ?>" name="description" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <?php require_once '_top.ctp';?>
        <?php 
        $consulting =  $this->Tj->newsInitData($page,$category_id);
        // var_dump($consulting);
        $name=$this->Tj->get_category_name($category_id);
        
        ?>
        <div class="content">
            <ul class="newslist">
            <?php if($consulting):?>
                    <?php foreach($consulting as $key=>$value):?>
                        <li>
                            <span>[<?php echo date("m/d",$value["updated"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">

                                [<?php
                                $category_name=$this->Tj->get_category_name($value["news_categories_id"]);
                                echo $category_name;?>]
                                <?php echo $value["title"]?></a>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            <div class="contact">
                <div class="wx fl"><a href="//bbs.uu.cc/forum-287-1.html">游戏论坛</a></div>
                <div class="qq fr">玩家QQ群：427336175</div>
            </div>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="<?php echo $full_base_url ?>/images/logo.png" alt=""></a>
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
</body>
</html>
