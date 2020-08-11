<?php
    if(isset($category_id)){
        $c = $category_id;
    }
    $_class = "";
    if($c == 1 || $c == 2 || $c == 3 || $c == 4 || $c == 5){
        $_class =  "left_news";
    }
?>
<div class="fl left <?php echo $_class;?>">
    <div class="text">
        <h3>下载游戏</h3>
        <p>Download</p>
    </div>
    <span class="close"></span>
    <img class="downCode" src="<?php echo GET_BLOCK('game_download_qrcode');?>" >
    <p>扫一扫下载游戏</p>
    <div class="downLink">
        <a href="<?php echo GET_BLOCK('ios_download_url');?>" target="_self"><img src="<?php FILE_PATH() ?>/img/page_downIos.png"></a>
        <a href="<?php echo GET_BLOCK('android_download_url');?>" target="_self"><img src="<?php FILE_PATH() ?>/img/page_downAz.png"></a>
    </div>
    <!--<img class="downCode" src="<?php echo GET_BLOCK('weixin_qrcode');?>" >
    <p>扫一扫关注微信</p>-->
</div>
<div class="download_game"></div>