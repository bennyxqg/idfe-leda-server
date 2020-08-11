<!DOCTYPE html>
<html>
<?php require_once "_header.ctp" ?>
<body>
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
                    <p class="fl">
                        <?php
                            switch ($result["News"]["news_categories_id"]){
                                case 23:
                                    $url=$this->Base->getNewsUrl(23);
                                    $content="活动";
                                    break;
                                case    22:
                                    $url=$this->Base->getNewsUrl(22);
                                    $content="新闻中心";
                                    break;
                                case    21:
                                    $url=$this->Base->getNewsUrl(21);
                                    $content="最新资讯";
                                    break;
                                default:
                                    $url=$this->Base->getNewsUrl(22);
                                    $content="新闻中心";
                                    break;
                            }
                        ?>
                        <a href="<?php echo $url?>"><?php echo $content;?></a> > 详情

                    </p>
                    <a href="/" class="fr">返回首页</a>
                </div>
                <div class="newsDetail">
                    <h2> <?php echo $result["News"]["title"]?></h2>
                    <p class="info">时间： <?php echo date("Y-m-d H:i",$result["News"]["updated"])?></p>
                    <div class="text">
                        <?php echo $result["News"]["content"]?>
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
        $(".tabs").children().click(function(){
            var i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".newsList").children(":eq("+i+")").show().siblings().hide();
        });
    });
</script>
</body>
</html>