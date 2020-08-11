<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
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
<?php require_once 'top.ctp';?>

<div class="page clearfix">
    <div id="page-content">
        <?php require_once 'top.ctp';?>
        <div class="page-tit">
            <!--<a class="back" href="javascript:history.go(-1);"><span></span>返回</a> -->
            <ul>
                <li class="<?php if ($type == 1){echo 'active';}?>"><a href="/vediocenter/1.html">视频</a></li>
                <li class="<?php if ($type == 2){echo 'active';}?>"><a href="/vediocenter/2.html">图片</a></li>
            </ul>
        </div>
        <div class="page-main page-detail">
            <div class="wrap">
                <!--<?php echo $type ?>-->
                <h2><? echo GET_CURRENT_NEWS_INFO('title');?></h2>
                <div class="date"><?php echo date("Y-m-d H:i",GET_CURRENT_NEWS_INFO('created'));?></div>

                <?php
                    if($type == 1){
                ?>
                    <ul class="content">
                        <?php
                            SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="263" height="169" /><div></div></a><p>@@STR3@@</p></li>',
                            'Y-m-d',1,6,$page);
                        ?>
                    </ul>
                <?php
                    }
                ?>
                <?php
                    if($type == 2){
                ?>
                    <ul class="content img">
                        <?php
                            SHOW_DATAS('<li><a class="video_btn" name="@@STR1@@"><img src="@@STR2@@" width="263" height="169" /></a><p>@@STR3@@</p></li>',
                            'Y-m-d',2,6,$page);
                        ?>
                    </ul>
                <?php
                    }
                ?>
                
                <div class="pages videoCenter">
                    <?php
                        SHOW_DATAS_PAGINATION1($type,6,array('CurrentPageClass' => 'active'),$page,'vediocenter');
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="wrap">
        <div class="btn_list">
            <a href="/vediocenter/1.html" class="<?php if ($type == 1){echo 'on';}?>">影音</a>
            <a href="/vediocenter/2.html" class="<?php if ($type == 2){echo 'on';}?>">图片</a>
        </div>
        <ul class="<?php if ($type == 1){echo 'on';}?>">
            <?php
                SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /><div></div></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                'Y-m-d',1,3,$page);
            ?>
        </ul>
        <ul class="<?php if ($type == 2){echo 'on';}?>">
            <?php
                // SHOW_DATAS('<li><a href="@@STR2@@" data-lightbox="img-group1"><img src="@@STR1@@" /><p>@@LABEL@@</p></a></li>','Y-m-d',5,100);
                // SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                SHOW_DATAS('<li><a href="@@STR4@@" data-lightbox="img-group1"><img src="@@STR1@@" width="329" height="212" /><p>@@LABEL@@</p></a></li>',
                'Y-m-d',2,3,$page);
            ?>
        </ul>
        <div class="pages">
            <?php
            SHOW_DATAS_PAGINATION($type,3,array('CurrentPageClass' => 'active'),$page,'vediocenter');
            ?>
        </div>
    </div>-->
</div>
<span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>
<p class="logo_2"><img src="<?php BASE_URL() ?>images/ledou.png" width="164" height="66"><img src="<?php BASE_URL() ?>images/peak.png?v=0" width="161" height="69"></p>
<footer id="footer">
    <ul>
        <li><a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
        <li>Copyright©2009-2014 &nbsp;&nbsp;深圳市创梦天地科技股份有限公司 版权所有</li>
        <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
        <li>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
    </ul>
</footer>

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
