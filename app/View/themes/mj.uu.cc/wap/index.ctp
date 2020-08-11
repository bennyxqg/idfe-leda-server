<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=480, user-scalable=yes" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/layout_wap.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page">
    <div class="header">
        <h1>萌姬乱舞</h1>
        <h2>主公，原来你也是女孩子</h2>
        <div class="onload">
            <a href="//dl.uu.cc/download/MJLW-1_v1.0_s2.1.0_UC0S0N00001_20141231.apk"><img src="<?php echo $full_base_url ?>/images/android_onload_wap.png" alt="安卓下载" class="android_onload"/></a>
            <a href="javascript:alert('ios版紧张开发中，敬请期待')"><img src="<?php echo $full_base_url ?>/images/ios_onload_wap.png" alt="IOS下载" class="ios_onload"/></a>
        </div>
    </div>
    <div class="content">
        <h3>游戏特色</h3>
        <div id="slider" class="switch">
            <ul class="runContent">
                <li><img src="<?php echo $full_base_url ?>/images/yxts_a.jpg" alt="是你，从未见过的卡牌玩法" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/yxts_b.jpg" alt="三国武将，化身萌娘" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/yxts_c.jpg" alt="百万萌姬，一手掌握" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/yxts_d.jpg" alt="最萌Q三国，萌你一脸血" /></li>
            </ul>
            <ul class="dot" id="dot">
                <li class="on"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="wb">
            <a href="">
                <div class="wb_bg sina_wb">
                    <img src="<?php echo $full_base_url ?>/images/sina_wb.png" alt="新浪微博" /><br />
                    <span>新浪微博</span>
                </div>
            </a>
            <a href="">
                <div class="wb_bg tencent_wb">
                    <img src="<?php echo $full_base_url ?>/images/tencent_wb.png" alt="腾讯微博" /><br />
                    <span>腾讯微博</span>
                </div>
            </a>
            <a href="//bbs.uu.cc/forum-262-1.html">
                <div class="wb_bg gf_wb">
                    <img src="<?php echo $full_base_url ?>/images/gf_wb.png" alt="官方论坛" /><br />
                    <span>官方论坛</span>
                </div>
            </a>
        </div>
    </div>
    <div class="footer">
        <div class="kf">
            客服中心  I  服务器列表  I  进入论坛<br />
            Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有
        </div>
        <div class="atten">
            &nbsp;抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防上当受骗。<br />
            &nbsp;适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活。
        </div>
    </div>
</div>
</body>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/swipe.js"></script>
<script type="text/javascript">
    var slider1 = Swipe(document.getElementById('slider'), {
        auto: 3000,
        continuous: true,
        callback: function (pos) {
            var i = bullets.length;
            while (i--) {
                bullets[i].className = ' ';
            }
            bullets[pos].className = 'on';
        }
    });
    var bullets = document.getElementById('dot').getElementsByTagName('li');
</script>
</html>
