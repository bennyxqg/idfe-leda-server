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
                <ul class="newsnav clearfix">
                    <li class="cur">最新</li>
                    <li>新闻</li>
                    <li>公告</li>
                </ul>
                <div class="news-list">
                   <ul style="display:block">
                        <?php
                    SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><span class="date">@@DATE@@</span></a></li>','m/d',array('新闻','公告'),6,1);
                    ?>
                        </ul>
                        <ul>
                        <?php
                    SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><span class="date">@@DATE@@</span></a></li>','m/d',array('新闻'),6,1);
                    ?>
                        </ul>
                        <ul>
                        <?php
                    SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p>@@TITLE@@</p><span class="date">@@DATE@@</span></a></li>','m/d',array('公告'),6,1);
                    ?>
                    </ul>
                </div>
                <div class="c_foot"></div>
            </div>
       </div>
       <!--end 新闻资讯 -->

       <!--start footer -->
       <?php require_once '_footer.ctp';?>
       <!--end footer -->
    </div>
<script src="<?php FILE_PATH() ?>/js/jquery.min.js"></script>
<script>
    $(function(){
        $(".newsnav").find("li").click(function(){
            if($(this).hasClass("cur"));
            var index=$(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".news-list ul").eq(index).show().siblings().hide();
        });

    })
</script>
</body>
</html>
