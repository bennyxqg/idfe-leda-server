<h1 class="tit_hide">钢铁力量</h1>
<div class="infoBox clearfix">
    <div class="info fl">

        <h2>钢铁力量</h2>
        <p>
            <?php if ($gameDescribe) :?>
                <?php echo $gameDescribe;?>
            <?php else :?>
                                                     游戏大小：34.7MB
            <?php endif;?>
        </p>
        <?php if ($gameIcon):?>
            <?php echo $gameIcon;?>
        <?php else:?>
            <img src="<?php echo $full_base_url ?>/images/v2/logo_game_png8.png" alt="">
        <?php endif;?>
    </div>
    <div class="download fr">
       <?php if ($iosDownloadImg):?>
       		<a href="<?php echo $iosDownloadImg;?>" class="ios_download">苹果下载</a>
            <?php else:?>
            <a href="#" class="ios_download">苹果下载</a>
        <?php endif;?>
        <?php if ($androidDownloadImg):?>
            <a href="<?php echo $androidDownloadImg;?>" class="android_download">安卓下载</a>
            <?php else:?>
            <a href="#" class="android_download">安卓下载</a>
        <?php endif;  ?>
    </div>
</div>