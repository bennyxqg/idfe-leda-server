
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="baidu-site-verification" content="w8PW4Csvlk" />
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link href="<?php FILE_PATH() ?>/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php FILE_PATH() ?>/css/common.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>
<div id="header">
    <div class="head">
        <div class="masthed">
            <div class="icon"><img width="122" height="122" src="<?=GET_BLOCK('game_icon');?>"></div>
            <div class="top_tit">
                <h3 class="game_name">梦幻家园</h3>
                <p>快乐消除 装扮豪宅</p>
            </div>
        </div>
        <div class="section">
            <div class="message">
                <div class="wx_hover">
                    <img src="<?php BASE_URL() ?>/images/wechat.png" alt="">
                    <div class="wx">
                        <img width="75" height="75" src="<?=GET_BLOCK('weixin_qrcode');?>">
                        <div class="sao">
                            <h4>微信公众号</h4>
                            <p>扫描二维码关注</p>
                            <p class="wx_id">mhjiayuan2018</p>
                        </div>
                    </div>&nbsp;&nbsp;关注公众号
                </div>
                <div class="fc"></div>
                <a href="<?=GET_BLOCK('qq_jump');?>" class="qq_hover">
                    <div class="qq">
                        <img width="75" height="75" src="<?=GET_BLOCK('qq_qrcode');?>">
                        <div class="qq_sao">
                            <h4>加入QQ群</h4>
                            <p><?=GET_BLOCK('qq_number');?></p>
                        </div>
                    </div>
                    &nbsp;&nbsp;加入QQ群<img src="<?php BASE_URL() ?>/images/QQ.png" alt="" class="qq_icon">
                </a>
            </div>
        </div>
    </div>
</div>
<div id="container">
    <div class="content">
        <div class="time_tit"></div>
        <a href="<?=GET_BLOCK('android_download_url');?>" class="down_btn"></a>
    </div>
</div>
<?php require_once 'footer.ctp';?>
<script src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script>
<script>

</script>
</body>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=65891888" charset="UTF-8"></script>

</html>
