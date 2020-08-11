<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, user-scalable=no, minimal-ui">
    <?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php BASE_URL() ?>css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="//tr.uu.cc/tr.uu.cc/favicon.ico">
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>
    <div class="page">
       <!--start 头部 -->
       <div class="header" style=" height:450px;background:url(<?php FILE_PATH() ?>/images/ibenner.jpg) no-repeat;">
           <?php require_once '_top.ctp';?>
       </div>
       <!--end 头部 -->

       <!--start 新闻资讯 -->
       <div class="news_cont">
           <div class="core">
               <div class="news_title"><? echo GET_CURRENT_NEWS_INFO('title');?></div>
               <div class="news_date">发布日期:<?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>
               <div class="news_desc">
                   <?php
                        echo GET_CURRENT_NEWS_INFO('content');
                    ?>
               </div>
           </div>
           <div class="c_foot"></div>
       </div>
       <!--end 新闻资讯 -->

       <!--start footer -->
       <?php require_once '_footer.ctp';?>
       <!--end footer -->

    </div>
</body>
</html>
