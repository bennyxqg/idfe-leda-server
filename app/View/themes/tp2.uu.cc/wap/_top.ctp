<div class="header">
            <h1 class="tit_hide">神庙逃亡2</h1>
            <div class="swipeBox">
                <div id="slider" class="swiper-container">
                    <ul class="swipe-wrap" id="loop_img">
                    <?php
                    	SHOW_LIST_FROM_DATAS('<li><img src="@@VALUE@@" width="100%" /></li>',0,'手机端主页轮播图',array('str1','str2','str3','str4','str5','str6','str7','str8'));
                    ?>
                    </ul>
                    <ul class="dot clearfix" id="dot">
                        <li class="on"></li>
                    </ul>
                </div>
            </div>
            <ul class="dh">
            <li class="cur"><a href="/">首页</a></li>
                <li ><a href="<?php CATEGORY_URL('活动') ?>">热门活动</a></li>
                <li ><a href="<?php CATEGORY_URL('游戏资料') ?>">游戏资料</a></li>
                <li ><a href="<?php CATEGORY_URL('攻略') ?>">攻略集合</a></li>
            </ul>
            <div class="infoBox clearfix">
                <div class="info fl">
                    <h2>神庙逃亡2</h2>
                    <p>游戏大小：93.93M</p>
                    <img src="<?php BLOCK('game_icon') ?>" alt="">
                </div>
                <div class="download fr">
                <a href="<?php BLOCK('android_download_url') ?>" id="download"><img width="100%" src="//tp2.uu.cc/tp2.uu.cc/images/y_az.png" alt=""></a>
                <a href="<?php BLOCK('ios_download_url') ?>" id="download"><img width="100%" src="//tp2.uu.cc/tp2.uu.cc/images/y_ios.png" alt=""></a>
                
                </div>
            </div>
        </div>        

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
});
</script>
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
