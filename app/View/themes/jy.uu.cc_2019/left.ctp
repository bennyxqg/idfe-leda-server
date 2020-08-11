<div class="popRight">
    <img class="parrot2" src="<?php FILE_PATH() ?>/images/parrot2.png" alt="">
    <img class="qrCode_an" src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
    <span>扫一扫下载游戏</span>
    <a href="<?=GET_BLOCK('android_download_url');?>"><img class="android" src="<?php FILE_PATH() ?>/images/android.png" ></a>
    <div class="kefu">
        <div class="phone">
            <p>客服电话：</p>
            <p><?php echo GET_BLOCK('kefu_phone');?></p>
        </div>
        <div class="qq">
            <p>客服QQ：</p>
            <p><?php echo GET_BLOCK('kefu_qq');?></p>
        </div>
    </div>
    <i id="toTop"></i>
</div>

<script>
    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });
    window.onscroll=window.onresize = function() {
        var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
        // console.log(scrollTop);
        if(Math.floor(scrollTop) < 200){
            $('#toTop').hide();
        }else{
            $('#toTop').show();
        };
    };
</script>