<!DOCTYPE html>
<html>
<?php require_once "_header.ctp" ?>
<body>

<?php
$this->TemRun->newsInitData($page,$category_id);
$consulting=$this->TemRun->indexInitData["consulting"];

?>

<div class="page">

    <div class="header">
        <h1>神庙逃亡2</h1>
    </div>
    <div class="layout">
        <!-- sub end -->
                 <?php require_once "_left.ctp" ?>
        <!-- sub end -->
        <!-- core start -->
        <div class="core">
            <div class="news-hb news">
                <div class="newst">
                    <ul class="tabs fl">
                        <li <?php if($category_id == 21) echo 'class="cur"';?>><a href="<?php echo  $this->Base->getNewsUrl(21);?>">最新资讯</a></li>
                        <li <?php if($category_id == 22) echo 'class="cur"';?>><a href="<?php  echo $this->Base->getNewsUrl(22);?>" >新闻中心</a></li>
                        <li <?php if($category_id == 23) echo 'class="cur"';?>><a href="<?php  echo $this->Base->getNewsUrl(23);?>" >活动</a></li>
                    </ul>
                    <a href="/" class="fr">返回首页</a>
                </div>
                <div class="newsList">
                    <div>
                        <ul>
                            <?php if($consulting):?>
                            <?php foreach($consulting as $key=>$value):?>
                            <li>
                                <p><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [最新资讯]<?php echo $value["title"]?></a></p>
                                <span class="time"><?php echo date("y/d",$value["updated"])?></span>
                            </li>
                            <?php endforeach;?>
                            <?php endif;?>

                        </ul>
                        <div class="pagination">
                                 <?php echo $this->TemRun->pagination($category_id,$page);?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- sub end -->
    </div>
</div>
<?php require_once "_footer.ctp" ?>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        //新闻切换
//        $(".tabs").children().click(function(){
//            var i = $(this).index();
//            $(this).addClass("cur").siblings().removeClass("cur");
//            $(".newsList").children(":eq("+i+")").show().siblings().hide();
//        });
    });
</script>
</body>
</html>