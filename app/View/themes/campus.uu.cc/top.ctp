<div class="topNav">
    <div class="wrap">
        <div class="logo">
            <h1><img class="logo_img" src="<?php BASE_URL() ?>/img/logo.png"></h1>
        </div>
        <ul>
            <li class="active">
                <a href="/" target="_self">校招首页<span>INDEX</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('xiaozhao_zw');?>" target="_self">校招职位<span>POSITION</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('idreamsky');?>" target="_self">了解创梦<span>ABOUT IDREAMSKY</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('center');?>" target="_self">个人中心<span>PERSONAL CENTER</span></a>
            </li>
        </ul>
        <div class="wx_qq">
            <a href="<?php echo GET_BLOCK('login');?>" class="one"></a>
            <a href="javascript:;" class="weixin">
                <div class="qrCode motion"><img width="120" height="120" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt=""></div>
            </a>
            <a href="<?php echo GET_BLOCK('qq_jump');?>"></a>
        </div>
    </div>
</div>