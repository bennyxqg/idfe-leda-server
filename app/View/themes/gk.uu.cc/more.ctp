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
<link href="<?php BASE_URL() ?>css/style.css?v=2" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/lightbox.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>

<div class="epMain1">
    <?php require_once '_top.ctp';?>
    <div class="contence">
        <a class="video_btn_link" href="javascript:;" name="http://gimg.gamdream.com/market/mv/gk_index.mp4" title="点击播放视频" style="background:url(/gk.uu.cc/images/video.png) no-repeat center"></a>
    </div>
</div>
<div class="epMain2">
    <a href="/picture/1" title="了解伊利亚里世界"></a>
</div>
<div class="epMain3">
    <a href="/game_list" title="查看所有英雄111"></a>
</div>
<div class="epMain4">
    <div class="container">
        <div class="many"><img src="<?php echo GET_BLOCK('more_page_p1'); ?>"/></div>
    </div>
</div>
<div class="epMain5">
    <div class="container">
        <div class="war"><img src="<?php echo GET_BLOCK('more_page_p2'); ?>"/></div>
    </div>
</div>
<div class="epMain6">
<div class="container">
        <div class="boss"><img src="<?php echo GET_BLOCK('more_page_p3'); ?>"/></div>
    </div>
</div>
<?php require_once '_footer.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

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
