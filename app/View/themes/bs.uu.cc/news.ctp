<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="baidu-site-verification" content="w8PW4Csvlk" />
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link href="<?php FILE_PATH() ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php FILE_PATH() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body style="background:url('<?php FILE_PATH() ?>/images/news_bg.jpg')">
<div class="pageBanner">
    
</div>
<div class="pageMain">
    <div class="subHead">
        <?php
            $config = array(
                1 => array('公告','资讯','攻略'),
                2 => array('公告'),
                3 => array('资讯'),
                4 => array('攻略')
            );
            if($category_id == 1 || $category_id == 2 || $category_id == 3 || $category_id == 4){
        ?>
            <div class="title"><img src="<?php FILE_PATH() ?>/images/news_title.png" alt="资讯"></div>
       <?php
            }
        ?>
        <?php
            if($category_id == 1 || $category_id == 2 || $category_id == 3 || $category_id == 4){
             $_class = "active";
        ?>
        <ul>
            <li class="<?php if($category_id == 1) echo "active";?>"><a href="//bs.uu.cc/news/1.html">最新</a></li>
            <li class="<?php if($category_id == 2) echo "active";?>"><a href="//bs.uu.cc/news/2.html">公告</a></li>
            <li class="<?php if($category_id == 3) echo "active";?>"><a href="//bs.uu.cc/news/3.html">资讯</a></li>
            <li class="<?php if($category_id == 4) echo "active";?>"><a href="//bs.uu.cc/news/4.html">攻略</a></li>
        </ul>
        <?php
            }
        ?>
    </div>
    <div style="min-height:600px;height:600px;height:auto!important;">
        <ul class="list">
            <!--<li><p><span> [公告] </span> 新闻标题</p><i>时间</i></li>-->
            <?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><p><span> [@@CATEGORY_NAME@@] </span> @@TITLE@@</p><i>@@DATE@@</i></a></li>','Y/m/d',$config[$category_id],9,$page,array('LimitFrom'=>0));
            ?>
        </ul>
    </div>
    <div class="pages">
       <?php
            SHOW_PAGINATION2($config[$category_id],9,array("pageId"=>$category_id),$page);
       ?>
    </div>
</div>
<?php require_once '_footer.ctp';?>


<!--<div class="pic_slide">
    <a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="<?php FILE_PATH() ?>/images/loading.gif" width="32" height="32"></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
    <ul class="slide_content">
    </ul>
    <div class="bottom">
        共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>-->

<div class="mask"></div>
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php FILE_PATH() ?>/js/jquery-1.9.1.js" type="text/jscript"></script>
<script src="<?php FILE_PATH() ?>/js/swiper.jquery.min.js" type="text/jscript"></script>
<script type="text/javascript">
    
    // 新闻切换
    var aA = $('.news .newsMenu div')
    aA.on('click',function(){
        aA.removeClass('on');
        $(this).addClass('on');
        $('.news .newsList .count').removeClass('off');
        $('.news .newsList .count').eq($(this).index()).addClass('off');
    });
    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.mask').show();
        $('.s_p_k').show();
    });

    $('.close').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.gift_pop').hide();
        $('.pic_slide').hide();
        $('.mask').hide();
    });
</script>
</body>
</html>
