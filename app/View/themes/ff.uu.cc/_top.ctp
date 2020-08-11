<div class="topNav">
    <div class="wrap">
        <div class="logo">
            <?php echo GET_BLOCK('title_text');?>
            <img class="logo_img" src="<?php echo GET_BLOCK('game_icon');?>" />
        </div>
        <div class="wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></div>
        <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo GET_BLOCK('weixin_qrcode');?>"><h3>微信公众号</h3><span>扫描二维码关注<br><?php echo GET_BLOCK('weixin_account');?></span></div>
        <div class="pa wxin_qq_pop qq_pop"><img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>"><h3>加入QQ群</h3><p><?php echo GET_BLOCK('qq_group');?></p></div>
    </div>
</div>