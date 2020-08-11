<div class="header">
    <h1 class="tit_hide"><?php echo $name;?></h1>
    <div class="swipeBox">
        <div id="slider" class="swiper-container">
            <ul class="swipe-wrap" id="loop_img">
                <?php
                    SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" alt="" title="" width="100%" /></a></li>','m/d',4,100,$page,array('OrderBy'=>'`int1` asc'));
                ?>
            </ul>
            <ul class="dot clearfix" id="dot">
            </ul>
        </div>
    </div>
    <ul class="dh">
        <li <?php if(intval($category_id) == 0) echo 'class="cur"'; ?>><a href="/">首页</a></li>
        <li <?php if($category_id == GET_CATEGORY_ID('地铁新闻')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('地铁新闻') ?>">地铁新闻</a></li>
        <li <?php if($category_id == GET_CATEGORY_ID('地铁活动')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('地铁活动') ?>">地铁活动</a></li>
        <li <?php if($category_id == GET_CATEGORY_ID('地铁攻略')) echo 'class="cur"'; ?>><a href="<?php CATEGORY_URL('地铁攻略') ?>">地铁攻略</a></li>
    </ul>
    <div class="infoBox clearfix">
        <div class="info fl">
            <h2>&nbsp;&nbsp;&nbsp;地铁跑酷</h2>
            <p>&nbsp; &nbsp; &nbsp;史上最酷的3D跑酷手游！</p>
            <img alt="" src="<?php BLOCK('game_icon') ?>" style="width: 100px; height: 100px;">
        </div>
        <div class="download fr" id="download">
            <a class="DISTINCT_DOWNLOAD_LINK" href="<?php BLOCK('android_download_url') ?>" href_android="<?php BLOCK('android_download_url') ?>" href_ios="<?php BLOCK('ios_download_url') ?>" target="_blank"><img alt="游戏下载" src="<?php FILE_PATH() ?>/images/m_download.png" /></a>
        </div>
    </div>
</div>
<script src="//pao.uu.cc/pao.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    var isFirst=true;
    $("#loop_img li").each(function(){
        if(isFirst)
        {
            $("#dot").append('<li class="on"></li>');
            isFirst=false;
        }
        else
        {
            $("#dot").append('<li></li>');
        }
    });

    $(".DISTINCT_DOWNLOAD_LINK").each(function(){
        var u = navigator.userAgent;
        var ua = u.toLowerCase();

        if(ua.match(/MicroMessenger/i)=="micromessenger"){
            $(".weixin_tip").show();
            return false;
        } else {
            if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
                $(this).attr('href',$(this).attr('href_ios'));
            else if (/(Android)/i.test(navigator.userAgent))
                $(this).attr('href',$(this).attr('href_android'));
        }
    });
});
</script>
