<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div class="top">
    <div class="wrap">
           <div class="logo"><a href="#link" target="_blank"><img src="<?php BASE_URL() ?>images/logo.png" /></a></div>
        <ul>
            <li><a href="/" target="_self">官网首页<em></em></a></li>
            <li><a href="//hssw.uu.cc/news/378.html" target="_self">游戏攻略<em></em></a></li>
            <li><a href="<?php echo GET_BLOCK('forum_url');?>" target="_blank">官方论坛<em></em></a></li>
            <li><a href="//hssw.uu.cc/news/377.html" target="_self">最新活动<em></em></a></li>
        </ul>
        <a class="qqun" href="javascript:;" title="官方粉丝群"></a>
        <div class="tips-pop qq_pop">
            <img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>" />
            <span>加入QQ群</span><h3><?php echo GET_BLOCK('qq_group');?></h3>
        </div>
        <a class="wxin" href="javascript:;" title="官方微信"></a>
        <div class="tips-pop wxin_pop">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" />
            <h3>微信公众号</h3><span>扫描二维码关注<br><?php echo GET_BLOCK('weixin_account');?></span>
        </div>

    </div>
</div>

<div class="page">
    <div class="wrap">
        <div class="newsLeft">
            <img class="downCode" src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
            <a class="downIos" href="<?php echo GET_BLOCK('ios_download_url');?>"></a>
            <a class="downAz" href="<?php echo GET_BLOCK('android_download_url');?>"></a>
        </div>
        <div class="newsRight">
            <div class="newsBtns">
                <ul>
                    <li><a class="<?php if ($category_id == 98) echo 'on';?>" href="//hssw.uu.cc/news/98.html" target="_self">最新</a></li>
                    <li><a class="<?php if ($category_id == 374) echo 'on';?>" href="//hssw.uu.cc/news/374.html" target="_self">公告</a></li>
                    <li><a class="<?php if ($category_id == 377) echo 'on';?>" href="//hssw.uu.cc/news/377.html" target="_self">活动</a></li>
                    <li><a class="<?php if ($category_id == 378) echo 'on';?>" href="//hssw.uu.cc/news/378.html" target="_self">攻略</a></li>
                </ul>
            </div>

            <div class="newsList">
                <ul>
                <?php

                $config = array(98 => array('公告','活动','攻略'),
                374 => array('公告'),
                377 => array('活动'),
                378 => array('攻略'));

                SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>[@@DATE@@]</span></li>','Y/m/d',$config[$category_id],12,1);
                ?>
                </ul>

                <div class="pageBox">
                <?php
                SHOW_PAGINATION3($config[$category_id],10,array('default_class' => 'pageNum','prev_class' => 'pagePrev','CurrentPageClass' => 'pageNum on'),$page);
            ?>
            <!--
                    <a class="pagePrev" href="" target="_self">上一页</a>
                    <a class="pageNum on" href="" target="_self">1</a>
                    <a class="pageNum" href="" target="_self">2</a>
                    <a class="pageNum" href="" target="_self">3</a>
                    <span>……</span>
                    <a class="pageNum" href="" target="_self">10</a>
                    <a class="pageNum" href="" target="_self">11</a>
                    <a class="pageNum" href="" target="_self">12</a>
                    <a class="pageNext" href="" target="_self">下一页</a>
                    -->
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php require_once 'footer.ctp';?>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>


<script type="text/javascript">


    //微信
    var wxin_dl = $(".wxin");
    var wxin_pd = $(".wxin_pop");
    var qqun_dl = $(".qqun");
    var qqun_pd = $(".qq_pop");
    wxin_dl.hover(function() {
        wxin_pd.addClass("wxin_pop_show");
    }, function() {
        wxin_pd.removeClass("wxin_pop_show");
    });
    qqun_dl.hover(function() {
        qqun_pd.addClass("wxin_pop_show");
    }, function() {
        qqun_pd.removeClass("wxin_pop_show");
    });

</script>

</body>
</html>
