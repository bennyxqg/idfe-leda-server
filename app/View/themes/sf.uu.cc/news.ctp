<!DOCTYPE html>
<html>
<head>
    <?php require_once "_css_header.ctp" ?>
</head>
<body>
<?php
    $consulting =  $this->SF->newsInitData($page,$category_id);
?>
<div class="page">
    <?php require_once "_header.ctp" ?>

    <div class="content layout">
        <div class="newswrap box">
            <div class="title">
                <?php if($category_id != 30):?>
                     <h3 class="fl"><img src="<?php echo $full_base_url ?>/images/news.png" alt="新闻资讯" /></h3>
                <?php else:?>
                    <h3 class="fl"><img src="<?php echo $full_base_url ?>/images/video.png" alt="攻略视频" /></h3>
                <?php endif;?>
                <p class="fr">您的位置：<a href="#">首页</a> > <span>新闻列表</span></p>
            </div>
            <div class="newsbox">
                <?php if($category_id != 30):?>
                <ul class="tabs">
                    <a href="<?php echo $this->Base->getNewsUrl("all");?>"> <li <?php if(isset($category_id) && is_array($category_id)) echo 'class="cur"';?> >全部</li></a>
                    <a href="<?php echo $this->Base->getNewsUrl(24);?>"><li <?php if($category_id == 24) echo 'class="cur"';?>>新闻</li></a>
                    <a href="<?php echo $this->Base->getNewsUrl(26);?>"><li <?php if($category_id == 26) echo 'class="cur"';?>>攻略</li></a>
                    <a href="<?php echo $this->Base->getNewsUrl(28);?>"><li <?php if($category_id == 28) echo 'class="cur"';?>>活动</li></a>
                </ul>
                <?php endif;?>

                <div class="news-list">
                    <ul>

                        <?php if($consulting):?>
                            <?php foreach($consulting as $key=>$value):?>
                                <li>
                                    <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">

                                        <?php if($category_id):?>
                                            <?php switch($category_id){
                                                case 24:
                                                    $name="新闻";
                                                    break;
                                                case 26:
                                                    $name="攻略";
                                                    break;
                                                case 28:
                                                    $name="活动";
                                                    break;
                                                 default:
                                                     $name="新闻";
                                                    break;
                                                }
                                            ?>
                                            [<?php echo $name;?>]
                                        <?php endif;?>
                                        <?php echo $value["title"]?></a>
                                    <span><?php echo date("Y-m-d",$value["updated"])?></span>
                                </li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <div class="pagination">
<!--                                <a href="#">上一页</a>-->
<!--                              <span>第2/3页</span>-->
<!--                        <a href="#">下一页</a>-->
                        <?php echo $this->TemRun->pagination($category_id,$page);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp" ?>
<?php require_once "_popUp.ctp" ?>

</body>
</html>