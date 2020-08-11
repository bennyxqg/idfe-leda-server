<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title><?php echo  $title; ?></title>
<meta name="keywords" content="<?php echo  $keywords; ?>"/>
<meta name="description" content="<?php echo  $description; ?> "/>
<link media="screen" href="<?php echo $full_base_url ?>/css/layout.css" rel="stylesheet" type="text/css">
<link media="screen" href="<?php echo $full_base_url ?>/css/minimalist.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
</head>

<body>
<div class="wrap">
    <div class="header">
        <h1>庞然巨物</h1>
    </div>
    <div class="content">
        <div class="main clearfix">
            <div class="side fl">
                <div class="wx"><img src="<?php echo $full_base_url ?>/images/wx.png" alt=""></div>
                <div class="download">
                    <a id="android" href="//dl.uu.cc/idreamsky/Colossatron-1004_v1.0.4_s2.3.5.6_ZQ0S0N00002.apk"></a>
                    <a id="ios" href="#"></a>
                </div>
            </div>
            <div class="video fr">
                <div id="video"></div>
            </div>
        </div>
        <!-- 背景动态元素 -->
        <div class="bg">
            <div class="robot"></div>
            <div class="dragon"></div>
            <div class="arrow"></div>
            <div class="arrow2"></div>
            <div class="plane"></div>
            <div class="missile"></div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footTop clearfix">
        <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏<img src="<?php echo $full_base_url ?>/images/logo_01.jpg" width="140" height="67" /></a></h2>
        <h2 class="fl"><a target="_blank" href="#">HALFBRICK<img src="<?php echo $full_base_url ?>/images/logo_02.jpg" width="141" height="67" /></a></h2>
        <div class="nav fl">
            <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
            <p style="text-indent:5px;">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
        </div>
        <div class="link">
            <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
            <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
            <a target="_blank" href="//net.china.com.cn/index.htm"></a>
            <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
        </div>
    </div>
    <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/flowplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
flowplayer.conf = {
    engine:"flash"
};

$(function(){
    $("#video").flowplayer({
        playlist: [
            [{ flv: "//dl.uu.cc/ars/prjw.mp4"}]
        ],
        poster: '<?php echo $full_base_url ?>/images/fm.jpg',
        ratio: 3 / 4,
        autoplay: true
    });

    $("#ios").click(function(){
        alert("暂未开放");
    })
})
</script>

<script type="text/javascript" src="//tajs.qq.com/stats?sId=36038520" charset="UTF-8"></script>
</body>
</html>
