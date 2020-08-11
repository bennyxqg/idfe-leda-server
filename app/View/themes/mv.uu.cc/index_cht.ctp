<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
/*BLOCK*/ ?>
<link rel="stylesheet" href="<?php BASE_URL() ?>v2/css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
<script type="text/javascript" src="//hm.baidu.com/hm.js?1d91b91b38581f32a53374a36294677a"></script>
<style type="text/css">
.top,.top .wrap{ background:url(<?php BASE_URL() ?>v2/images/index_top_bg_cht.jpg) 50% 0 no-repeat;}
.contrat_box{background:url(<?php BASE_URL() ?>v2/images/contra_chr.png) no-repeat; width:228px; height:416px; top:35px;}
.contrat_box a{ display:block; width:228px; height:72px; text-indent:-999px; overflow:hidden;}
</style>
</head>

<body class="index">

<div class="top">

    <div class="star1"></div>
    <div class="star2"></div>
    <div class="star3"></div>
    <div class="wrap">
        <div class="pa lg_tab"><a href="//mv.uu.cc/" target="_self">简体中文</a> | <a href="//mv.uu.cc/?lan=cht" target="_self">繁体中文</a></div>
        <div class="windmill"><img src="<?php BASE_URL() ?>v2/images/windmill.jpg"></div>
        <!--<div class="windmill"><video width="540px" src="<?php BASE_URL() ?>v2/images/windmaill.mp4" autoplay="autoplay" loop="loop" class="device-video active"></video></div>
        <div class="pa code_img"><?php BLOCK('android_download_qrcode') ?></div>-->
        <a class="pa android_down2" href="<?php BLOCK('android_download_url_cht') ?>"></a>
        <!--<div class="pa plats"></div>-->
    </div>
</div>

<div class="main">
    <div class="wrap">
        <div class="video_box">
            <div class="video"><video src="<?php BLOCK('index_vedio_url') ?>" width="636" style="background:#000;" height="396" poster="<?php BLOCK('index_vedio_thumb') ?>" controls=""></video></div>
            <div class="pa contrat_box"><a href="<?php BLOCK('facebook_url') ?>" target="_blank">facebook</a></div>
        </div>
        <!--<h2 class="main_tit"></h2>-->
        <div class="foucebox">
          <div class="bd">
            <?php /*BLOCK*/
              SHOW_LIST_FROM_DATAS('<div class="showDiv"><a href="javascript:;"><img src="@@VALUE@@"><span></span></a></div>',0,'章节封面图',array('str1','str2','str3','str4','str5','str6','str7','str8'));
              /*BLOCK*/ ?>
          </div>
          <div class="hd">
            <ul id="hd-thumbs">
            <?php /*BLOCK*/
            SHOW_LIST_FROM_DATAS('<li class="n1"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅰ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str1'));
            SHOW_LIST_FROM_DATAS('<li class="n2"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅱ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str2'));
            SHOW_LIST_FROM_DATAS('<li class="n3"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅲ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str3'));
            SHOW_LIST_FROM_DATAS('<li class="n4"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅳ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str4'));
            SHOW_LIST_FROM_DATAS('<li class="n5"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅴ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str5'));
            SHOW_LIST_FROM_DATAS('<li class="n6"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅵ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str6'));
            SHOW_LIST_FROM_DATAS('<li class="n7"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅶ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str7'));
            SHOW_LIST_FROM_DATAS('<li class="n8"><a href="javascript:;"><img src="@@VALUE@@"><div><span style="color:#ffffff;"><span style="font-size:48px;"><span style="font-family:arial,helvetica,sans-serif;"><big><span style="line-height: 20.02px;">Ⅷ</span></big></span></span></span></div></a></li>',0,'章节封面图',array('str8'));
            /*BLOCK*/ ?>
            </ul>
          </div>
        </div>
    </div>
    <?php require_once('foot_cht.ctp') ?>
</div>



<!--<div class="main_nav">
    <ul>
        <li><a href="#" target="_blank">介绍</a></li>
        <?php foreach($categories as $cateid => $catename) { ?>
        <li><a href="#" target="_blank"><?php echo $catename ?></a></li>
        <?php } ?>
        <li><a id="vedio_btn" href="javascript:;">视频</a></li>
    </ul>
</div>-->

<div class="jietu_slide" style="display:none">
    <a class="close" href="javascript:;"></a>
    <div class="slide_box">
    </div>
</div>
<div class="vedio_box" style="display:none">
    <a class="close" href="javascript:;"></a>
</div>
<div class="mask"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/modernizr.custom.97074.js"></script>
<script type="text/javascript">

$(function() {

    $(".foucebox").slide({ effect:"fold", autoPlay:true, delayTime:300});

    $("#hd-thumbs > li").each( function() { $(this).hoverdir(); } );

    $(".bd .showDiv,#hd-thumbs li").click(function(){

        var index = $(this).index();
        if(index == 0){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_1',array()) ?></ul>");
            }else if(index == 1){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_2',array()) ?></ul>");
            }else if(index == 2){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_3',array()) ?></ul>");
            }else if(index == 3){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_4',array()) ?></ul>");
            }else if(index == 4){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_5',array()) ?></ul>");
            }else if(index == 5){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_6',array()) ?></ul>");
            }else if(index == 6){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_7',array()) ?></ul>");
            }else if(index == 7){
                $(".slide_box").html("<a href=\"javascript:void(0)\" class=\"prev\"></a><a href=\"javascript:void(0)\" class=\"next\"></a><ul class=\"slide\"><?php SHOW_IMAGE_LIST('<li><img src=\"<?php BASE_URL() ?>v2/images/blank.png\" _src=\"@@BIG_IMAGE@@\" /></li>','chapter_8',array()) ?></ul>");
            }
        $(".jietu_slide").show();
        $(".mask").show();

        $(".jietu_slide").slide({ mainCell:".slide",switchLoad:"_src",effect:"leftLoop",autoPlay:true });

    });

    $("#vedio_btn").click(function(){
        $(".vedio_box").show();
        $('.mask').show();
    });
    $(".close,.mask").unbind('click').bind("click",function(){
        $(".jietu_slide").hide();
        $(".vedio_box").hide();
        $(".mask").hide();
    })
});

</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
