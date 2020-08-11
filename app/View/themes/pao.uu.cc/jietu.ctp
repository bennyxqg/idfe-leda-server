<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/minimalist.css" type="text/css" />
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>
<div class="header">

    <div class="banBox">
        <div class="nybanner">
            <?php
                SHOW_DATAS('<img src="@@STR1@@" style="height: 347px; width: 1920px">','m/d',6,1,0,array());
            ?>
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="//pao.uu.cc">首页</a> >>
                <span>精彩截图</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li class="cur"><a href="#">精彩截图</a><em></em></li>
        </ul>
        <div class="imgBox">
            <div class="showImg">
                <div class="jCarouselLite">
                    <ul class="runContent">
                    <?php
                        SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" /></a></li>','m/d',3,100,0,array());
                    ?>
                    </ul>
                </div>
            </div>
            <button class="btn_left disabled"></button>
            <button class="btn_right"></button>
        </div>
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php BASE_URL() ?>images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php BASE_URL() ?>images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php BASE_URL() ?>images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php BASE_URL() ?>images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php BASE_URL() ?>images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".jCarouselLite").jCarouselLite({
        visible: 1,
        scroll: 1,
        circular: false,
        btnNext: ".btn_right",
        btnPrev: ".btn_left"
        });
    });
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>