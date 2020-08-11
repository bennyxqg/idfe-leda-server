<div class="pop">
    <span class="btn">收起</span>
    <h3>下载游戏</h3>
    <div class="code">
        <div class="qrCode">
            <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" width="121" height="121" alt="">
        </div>
    </div>
    <p>扫一扫下载游戏</p>
    <div class="download">
        <a href="<?php echo GET_BLOCK('android_download_url');?>"><img src="<?php BASE_URL() ?>images/android.png" alt="安卓"></a>
        <a href="<?php echo GET_BLOCK('ios_download_url');?>"><img src="<?php BASE_URL() ?>images/ios.png" alt="ios"></a>
    </div>
    <h3>官方媒体</h3>
    <div class="tab">
        <span class="on">微信</span>
        <span>微博</span>
    </div>
    <div class="none on">
        <div class="tabCode"><img src="<?php echo GET_BLOCK('weixin_qrcode');?>" width="137" height="137" alt=""></div>
        <p>扫一扫关注微信</p>
    </div>
    <div class="none">
        <div class="tabCode"><img src="<?php echo GET_BLOCK('weibo_qrcode');?>" width="137" height="137" alt=""></div>
        <p>扫一扫关注微博</p>
    </div>
</div>
<div class="download_box"></div>