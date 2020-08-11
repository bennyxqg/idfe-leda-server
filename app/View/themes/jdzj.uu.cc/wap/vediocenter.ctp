<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css">
<!--<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/lightbox.css" />-->
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body style="background: #efefef;">
<?php require_once 'top.ctp';?>

<div class="page clearfix">
    <div id="page-content">
        <?php echo $type;?>
        <div class="page-tit">
            <!--<a class="back" href="javascript:history.go(-1);"><span></span>返回</a> -->
            <ul>
                <li class="<?php if ($type == 2){echo 'active';}?>"><a href="/vediocenter/2.html">宣传片</a></li>
                <li class="<?php if ($type == 3){echo 'active';}?>"><a href="/vediocenter/3.html">游戏攻略</a></li>
                <li class="<?php if ($type == 4){echo 'active';}?>"><a href="/vediocenter/4.html">游戏直播</a></li>
            </ul>
        </div>
        <div class="page-main page-detail">
            <div class="wrap">
                <!--<?php echo $type ?>-->
                <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <?php if($type == 2){ ?>
                
                    <ul class="content">
                        <?php
                            SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@" href="javascript:void(0);"><div></div><img src="@@STR1@@" width="318" height="169" /></a><p>@@STR3@@</p></li>',
                            'Y-m-d',2,6,$page);
                        ?>
                    </ul>
                <?php } ?>
                <?php if($type == 3){ ?>
                    <ul class="content">
                        <?php
                            // SHOW_DATAS('<li><a class="video_btn" name="@@STR2@@"><img src="@@STR2@@" width="318" height="169" /></a><p>@@STR3@@</p></li>',
                            SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@"><img src="@@STR1@@" width="318" height="169" /><div></div></a><p>@@STR3@@</p></li>',
                            'Y-m-d',3,6,$page);
                        ?>
                    </ul>
                 <?php } ?>
                <?php if($type == 4){ ?>
                    <ul class="content">
                        <?php
                            SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@"><img src="@@STR1@@" width="318" height="169" /><div></div></a><p>@@STR3@@</p></li>',
                            'Y-m-d',4,6,$page);
                        ?>
                    </ul>
                 <?php } ?>
                
                <div class="pages videoCenter">
                    <?php
                        SHOW_DATAS_PAGINATION1($type,6,array('CurrentPageClass' => 'active'),$page,'vediocenter');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" playsinline="" x-webkit-airplay="" x5-video-player-fullscreen="true"
            webkit-playsinline="" x5-video-player-type="h5" 
            x5-video-orientation="portrait"  height="100%" autoplay poster=""  src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>
<script src="<?php BASE_URL() ?>/wap/js/jquery-1.9.1.js"></script>
<!--<script src="<?php BASE_URL() ?>/js/lightbox-2.6.min.js" type="text/jscript"></script>-->

<script type="text/javascript">
$(document).ready(function(){
    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao').show();
        $('.s_p_k').show();
    })
    $('.close,.zhezao').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.pop-yuyue').hide();
        $('.zhezao').hide();
    });

});

</script>
</body>
</html>
