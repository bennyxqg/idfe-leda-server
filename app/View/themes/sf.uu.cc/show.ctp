<!DOCTYPE html>
<html>
<head>
    <?php require_once "_css_header.ctp" ?>
</head>
<body>
<div class="page">
    <?php require_once "_header.ctp" ?>
    <div class="content layout">
        <div class="newswrap box">
            <div class="title">

                <?php if($result["News"]["news_categories_id"] != 30):?>
                    <h3 class="fl"><img src="<?php echo $full_base_url ?>/images/news.png" alt="新闻资讯" /></h3>
                <?php else:?>
                    <h3 class="fl"><img src="<?php echo $full_base_url ?>/images/video.png" alt="攻略视频" /></h3>
                <?php endif;?>

                <p class="fr">
                    <?php
                    switch ($result["News"]["news_categories_id"]){
                        case 24:
                            $url=$this->Base->getNewsUrl(24);
                            $content="新闻";
                            break;
                        case    26:
                            $url=$this->Base->getNewsUrl(26);
                            $content="公告";
                            break;
                        case    28:
                            $url=$this->Base->getNewsUrl(28);
                            $content="活动";
                            break;
                        case   30:
                            $url=$this->Base->getNewsUrl(30);
                            $content="视频";
                            break;
                        default:
                            $url=$this->Base->getNewsUrl(24);
                            $content="新闻";
                            break;
                    }
                    ?>
                    您的位置：<a href="#">首页</a> > <a href="<?php echo $url;?>">
                        <?php echo $content;?></a> </p>

            </div>

            <div class="newsbox">
                <strong class="title"><?php echo $result["News"]["title"];?></strong>
                <div class="info">
                    <span>时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></span>
                    <span>分享：</span>
                    <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style" style="display:inline-block;vertical-align:middle;margin-top:-3px;">
                        <a class="jiathis_button_qzone"></a>
                        <a class="jiathis_button_tsina"></a>
                        <a class="jiathis_button_tqq"></a>
                        <a class="jiathis_button_weixin"></a>
                        <a class="jiathis_button_renren"></a>
                        <a class="jiathis_button_xiaoyou"></a>
                        <a href="//www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                    </div>
                    <script type="text/javascript" src="//v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    <!-- JiaThis Button END -->
                </div>
                <div class="text <?php echo 30 == $result["News"]["news_categories_id"]?"videoWrap":"";?>" >

                    <?php echo $result["News"]["content"]?>

                </div>
            </div>
        </div>
    </div>
    <?php require_once "_footer.ctp" ?>
</div>
<?php require_once "_popUp.ctp" ?>
</body>
</html>
