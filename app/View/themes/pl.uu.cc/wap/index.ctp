<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="热血、空战、海外大作、射击" name="keywords" />
    <meta content="《霹雳战机》是由国际顶级游戏开发商韩国Wemade开发，乐逗游戏独家代理的3D大型空战手游。游戏在继承了传统打飞机游戏简单粗暴爽快玩法的基础上，对游戏画面和特技效果进行了升级，加上危险射击等别出心裁的特色玩法，为玩家呈现出一个浩瀚的宇宙战场。玩家不仅可以不断挑战难度更高的关卡和模式，还能DIY各种不同的战机，搭配不同的僚机激爽开战！" name="description" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=480, user-scalable=yes">
    <title><?php echo  $title; ?></title>
    <link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/minimalist.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
</head>
<body>
<div class="page">
    <div class="header">
        <h1 class="tit_hide">霹雳战机</h1>
        <h2 class="tit_hide">3D空战传奇之作</h2>
    </div>
    <div class="content">
        <div class="download">
            <h3 class="tit_hide">游戏下载</h3>
            <div class="btn"><a href="#">安卓下载</a></div>
            <p>当前版本：v1.0.1 &nbsp;&nbsp; 游戏大小：47.6M</p>
        </div>
        <div class="video">
            <div id="video"></div>
        </div>
    </div>
    <div class="footer"></div>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=36603757" charset="UTF-8"></script>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/flowplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    $("#video").flowplayer({
        playlist: [
            [{ flv: "//dl.uu.cc/ars/prjw.mp4"}]
        ],
        poster: '<?php echo $full_base_url ?>/images/m_fm.png',
        ratio: 3 / 4,
        autoplay: true
    });
})
</script>
</body>
</html>
