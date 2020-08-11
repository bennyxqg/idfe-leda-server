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

<body>
<?php require_once '_top.ctp';?>

<div class="page clearfix">
    <div class="wrap">
        
        <div class="<?php if ($category_id == 2){echo 'imgList clearfix';}elseif($category_id == 1){echo "imgList videoList clearfix";}?>">
            <?php if($category_id == 5){?>
            <div class="pageItemTit itemSoldiers"></div>
            <?php }elseif($category_id == 6){?>
            <div class="pageItemTit itemBuild"></div>
            <?php } ?>
            <ul class="<?php if($category_id == 5 || $category_id == 6){echo "soldiersList buildList clearfix";}?>">
                <!-- 视频 -->
                <?php if ($category_id == 1){
                    SHOW_DATAS(
                    '<li class="big"><a class="video_btn_link" href="javascript:;" name="@@STR3@@"><img src="@@STR2@@" /><p>@@LABEL@@</p></a></li>',
                    'Y-m-d',
                    4,2,1,//类型4，取2条，第1页
                    array("Condition"=>"`int1`=1") //取置顶视频
                    );
                    SHOW_DATAS(
                    '<li><a class="video_btn_link" href="javascript:;" name="@@STR3@@"><img src="@@STR2@@" /><p>@@LABEL@@</p></a></li>',
                    'Y-m-d',
                    4,50,1,//类型4，取50条，第1页
                    array("Condition"=>"`int1`=0"));
                ?>
                <!-- 原画 -->
                <?php }elseif($category_id == 2){
                    SHOW_DATAS('<li><a href="@@STR2@@" data-lightbox="img-group1"><img src="@@STR1@@" /><p>@@LABEL@@</p></a></li>','Y-m-d',5,100);
                    SHOW_DATAS('<li><a href="@@STR2@@" data-lightbox="img-group1"><img src="@@STR1@@" /><p>@@LABEL@@</p></a></li>','Y-m-d',6,100);
                ?>
                <!-- 兵种 -->
                <?php }elseif($category_id == 5){
                    SHOW_DATAS('<li><a href="/guide_detail/5/@@DATEID@@"><img src="@@STR1@@"><p>@@LABEL@@</p></a></li>','Y-m-d',2,100);
                ?>
                <li><img src="<?php BASE_URL() ?>images/w_expect.png"></li>
                <!-- 建筑 -->
                <?php }elseif($category_id == 6){
                    SHOW_DATAS('<li><a href="/guide_detail/6/@@DATEID@@"><img src="@@STR1@@"><p>@@LABEL@@</p></a></li>','Y-m-d',1,100);
                ?>
                <li><img src="<?php BASE_URL() ?>images/w_expect.png"></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php require_once '_footer2.ctp';?>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script src="<?php BASE_URL() ?>js/lightbox-2.6.min.js" type="text/jscript"></script>

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
