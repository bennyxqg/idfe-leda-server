<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=480,user-scalable=no" />
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link media="screen" href="<?php echo $full_base_url ?>/css/reset.css" rel="stylesheet" type="text/css">
<link media="screen" href="<?php echo $full_base_url ?>/css/news_wap.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
    $consulting =  $this->SF->newsInitData($page,$category_id);
?>
<div class="page">
    <div class="header">
        <h1>天降</h1>
    </div>
   <div class="news">
        <ul class="tabs">
            <a href="<?php echo $this->Base->getNewsUrl("all");?>"> <li <?php if(isset($category_id) && is_array($category_id)) echo 'class="cur"';?> >全部</li></a>
            <a href="<?php echo $this->Base->getNewsUrl(24);?>"><li <?php if($category_id == 24) echo 'class="cur"';?>>新闻</li></a>
            <a href="<?php echo $this->Base->getNewsUrl(26);?>"><li <?php if($category_id == 26) echo 'class="cur"';?>>攻略</li></a>
            <a href="<?php echo $this->Base->getNewsUrl(28);?>"><li <?php if($category_id == 28) echo 'class="cur"';?>>活动</li></a>
        </ul>
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
                            <span><?php echo date("y/d",$value["updated"])?></span>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>

        </div>
        <p>
            <?php echo $this->TemRun->pagination($category_id,$page);?>
        </p>
    </div>
    </div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>

<script type="text/javascript">
    if(navigator.userAgent.indexOf('Android') > -1)
    {
        var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
        var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
        document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
    }

    $(".tabs").children().click(function(){
            var  i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(this).parent(".tabs").next().children(":eq("+i+")").show().siblings().hide();
        });

</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
</body>
</html>