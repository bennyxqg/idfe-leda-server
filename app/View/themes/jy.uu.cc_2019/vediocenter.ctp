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
<link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/lightbox.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body style="background: #efefef;">
<?php require_once '_top.ctp';?>

<div class="page clearfix">
    <div class="wrap">
       
        <div class="btn_list">
            <a href="/vediocenter/1.html" class="<?php if ($type == 1){echo 'on';}?>">影音</a>
            <a href="/vediocenter/2.html" class="<?php if ($type == 2){echo 'on';}?>">图片</a>
        </div>
        <ul class="<?php if ($type == 1){echo 'on';}?>">
            <?php
                    SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /><div></div></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                    'Y-m-d',1,9,$page);
                ?>
        </ul>
        <ul class="<?php if ($type == 2){echo 'on';}?>">
            <?php
                // SHOW_DATAS('<li><a href="@@STR2@@" data-lightbox="img-group1"><img src="@@STR1@@" /><p>@@LABEL@@</p></a></li>','Y-m-d',5,100);
                // SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                SHOW_DATAS('<li><a href="@@STR4@@" data-lightbox="img-group1"><img src="@@STR2@@" width="329" height="212" /><p>@@STR3@@</p></a></li>',
                'Y-m-d',2,9,$page);
            ?>
        </ul>
        <div class="pages">
            <?php
            SHOW_DATAS_PAGINATION($type,9,array('CurrentPageClass' => 'active'),$page,'vediocenter');
            ?>
        </div>
    </div>
</div>
<?php require_once 'left.ctp';?>
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
