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
<div class="page">
    <div class="header">
        <h1>天降</h1>
    </div>
   <div class="news">
        <div class="news-list">
            <div class="news_head">
                <div class="news_title"><?php echo $result["News"]["title"];?></div>
                <div class="news_data">时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></div>
            </div>
            <div class="news_content">
                <?php echo $result["News"]["content"]?>
            </div>
        </div>
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

    window.onload = function(){
        $(".news_content").find("img").each(function(){
            if($(this).width() > 448){
                $(this).css({"width":"100%"});
                $(this).css({"height":"100%"});
            }
        })
    }
    </script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
</body>
</html>