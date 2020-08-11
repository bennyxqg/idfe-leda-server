<div class="qrCode_box">
    <div class="subBox">
        <!--<img class="qrCode" src="<?php BASE_URL() ?>images/person1.png" width="106" height="106" alt="...">-->
        <img class="qrCode" src="<?php echo GET_BLOCK('weixin_qrcode');?>" width="106" height="106" alt="...">
        <p>扫码关注微信号</p>
    </div>
    <a href="<?php echo GET_BLOCK('weibo_url');?>" class="weibo"></a>
    <a href="<?php echo GET_BLOCK('qq_jump');?>" class="forum"><?php echo GET_BLOCK('qq_group');?></a>
</div>