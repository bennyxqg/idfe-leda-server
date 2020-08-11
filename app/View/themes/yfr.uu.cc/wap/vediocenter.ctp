<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=750, user-scalable=no">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/lightbox.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<?php require_once 'top.ctp';?>

<div class="page clearfix">
    <div id="page-content">
        <?php require_once 'top.ctp';?>
        <div class="page-tit">
            <a class="back" href="javascript:history.go(-1);"><span><</span> 返回</a> 
            <p>合作品牌</p>
        </div>
        <div class="page-main page-detail">
            <div class="wrap">
                <!--<?php echo $type ?>-->
                <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <!--<div class="date"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>-->

                <ul class="link_box img">
                    <?php
                        // SHOW_DATAS('<li><a class="video_btn" name="@@STR1@@"><img src="@@STR2@@" width="196" height="196" /></a><p>@@STR3@@</p></li>',
                        SHOW_DATAS('<li><img src="@@STR2@@" alt=""><p>@@STR3@@</p></li>',
                        'Y-m-d',2,280,$page);
                    ?>
                    <!--<li><img src="http://jy.uu.cc/manage/upload/image/jy.uu.cc/2018-07-11/20180711_161605_773876.jpg" alt=""><p>合理安排时间</p></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>
<!--<script src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script>-->
<script src="<?php BASE_URL() ?>/js/lightbox-2.6.min.js" type="text/jscript"></script>

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
    })

})
</script>
</body>
</html>
