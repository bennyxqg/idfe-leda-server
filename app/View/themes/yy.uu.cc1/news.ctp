<?php 
$banner = $this->PK->getBlock($site_id, 'inner_banner');
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
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/v2/css/minimalist.css" type="text/css" />
</head>
<body class="ny_body">
<div class="header">
    <?php require_once "_top_nav.ctp"; ?>
    <div class="banBox">
        <div class="nybanner">
        <?php if($banner){?>
            <?php echo $banner;?>
        <?php }else{?>
            <img src="<?php echo $full_base_url ?>/v2/images/nybanner.jpg" width="1920" height="351" border="0">
        <?php }?>
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/home" class="goIndex">返回首页</a>
                <a href="/home">首页</a> >>
                <?php
                    if (!is_array($category_id)) {
                        $category_id = (int)$category_id;
                    }
                    $categories = $this->Base->getNewsCategoryBySiteId($site_id);
                    
                    if (!is_array($category_id) && array_key_exists((int)$category_id, $categories)) {
                        $categoryName = $categories[(int)$category_id];
                    } else {
                        $categoryName = '新闻中心';  
                    }
                ?>
                <span><?php echo $categoryName;?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <?php foreach ($categories as $key => $value) {
            ?>
                <li <?php if($key == (int)$category_id){?>class="cur"<?php }?>><a href="//yy.uu.cc/news/<?php echo $key;?>.html"><?php echo $value;?></a><em></em></li>
            <?php 	
            }?>
        </ul>
        <?php $result=$this->PK->newsInitData($page,$category_id);?>
        <ul class="newslist">
            <?php if($result){?>
                <?php foreach($result as $val){?>
                    <li>
                        <span>[<?php echo date('m-d',$val['updated']);?>]</span>
                        <?php $name = $categories[(int)$category_id];?>
                        <a href="/show/<?php echo $val['id']?>.html">
                            <strong>[<?php echo $name;?>]</strong> <?php echo $val['title'];?>
                            <img src="<?php echo $full_base_url ?>/v2/images/hot.png" alt="">
                        </a>
                    </li>
                <?php }?>
            <?php }?>

        </ul>
        <div class="pagination">
            <?php  echo $this->PK->pagination($category_id,$page);?>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp"; ?>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=28932393" charset="UTF-8"></script>
</body>
</html>