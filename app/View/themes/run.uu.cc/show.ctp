<!DOCTYPE html>

<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <div class="wrap clearfix">
        <?php require "_left.ctp";?>

        <div class="right">
			<a href="/" class="returnh">
				<img src="<?php echo $full_base_url ?>/images/return.png" alt="" class="return"/>
			</a>
            <div class="games news">
                <ul>
                    <li <?php if(isset($result["News"]["news_categories_id"]) && $result["News"]["news_categories_id"] == 32) echo "class='cur'";  ?>><a href="<?php echo  $this->Base->getNewsUrl(32);?>">新闻<br /><span>NEWS</span></a></li>
                    <li <?php if(isset($result["News"]["news_categories_id"]) && $result["News"]["news_categories_id"] == 34) echo "class='cur'";  ?>><a href="<?php echo  $this->Base->getNewsUrl(34);?>">活动<br /><span>EVENTS</span></a></li>
                    <li <?php if(isset($result["News"]["news_categories_id"]) && $result["News"]["news_categories_id"] == 36) echo "class='cur'";  ?>><a href="<?php echo  $this->Base->getNewsUrl(36);?>">攻略<br /><span>DATA</span></a></li>
                </ul>
            </div>
            <div class="detail">
                <div class="show">
                    <div class="loca">您所在的位置：首页 >
                        <?php
                        switch ($result["News"]["news_categories_id"]){
                            case 32:
                                $url=$this->Base->getNewsUrl(32);
                                $content="新闻";
                                break;
                            case    34:
                                $url=$this->Base->getNewsUrl(34);
                                $content="活动";
                                break;
                            case   36:
                                $url=$this->Base->getNewsUrl(36);
                                $content="攻略";
                                break;
                            default:
                                $url=$this->Base->getNewsUrl(32);
                                $content="新闻";
                                break;
                        }
                        echo $content;
                        ?>
                         > 正文</div>
                    <div class="header">
                        <div class="title"><?php echo $result["News"]["title"];?></div>
                        <div class="date">时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?>
                            <span>分享到：</span>
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
                    </div>
                    <div class="data">
                        <?php echo $result["News"]["content"]?>
                    </div>
                </div>
            </div>
        </div>
        </div>

       <?php require "_footer.ctp";?>

    </div>
</body>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script>
    $(".weixin").hover(function () {
        $(".erweima").show();
    }, function () {
        $(".erweima").hide();
    });
    $(document).ready(function () {
        $('.data img').each(function () {
            var firstwidth = 540;
            var ratio = 0;  // 缩放比例  
            var width = $(this).width();
            var height = $(this).height();
            ratio = firstwidth / width;
            width = width * ratio;
            height = height * ratio;
            $(this).css("width", width);
            $(this).css("height", height);
        });
    });  
</script>
</html>
