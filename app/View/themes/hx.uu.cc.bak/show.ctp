<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>超燃系·激战卡牌《幻想之心》官网</title>
    <meta name="keywords" content="幻想之心，幻想之心官网，二次元，动漫，卡牌，卡牌手游"/>
    <meta name="description" content="超燃系·激战卡牌手游《幻想之心》惊艳亮相，街机级战斗体验，创新战斗设计重新定义动作卡牌，卡牌不只“站”起来，还要“战”痛快；独创主城共享模式，支持多人在线组队PVE，和你的朋友一起告别卡牌单机时代。二次元偶像大集结，人气动漫主角等你收入麾下，征战四方。日本顶级美术团队，千张精美原画，全程美少女技能配音震撼视听。"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css"/>
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>幻想之心</h1>
    </div>
    <div class="content clearfix">
        <div class="side fl">
            <a href="//dl.uu.cc/download/hxzx_jycs_v0.3.7_1.apk " id="bank">安卓下载</a>
            <div class="wx">
                <img src="<?php echo $full_base_url ?>/images/wx.jpg" alt="">
                <p>扫一扫二维码，立即下载游戏</p>
            </div>
            <div class="link">
                <a class="tx" href="//t.qq.com/xin____2014" target="_blank">腾讯微博</a>
                <a class="sina" href="//weibo.com/huanxiangzhixin" target="_blank">新浪微博</a>
                <a class="lt" href="//bbs.uu.cc/forum-268-1.html" target="_blank">游戏论坛</a>
            </div>
            <div class="wx2 clearfix">
                <img src="<?php echo $full_base_url ?>/images/wx2.jpg" alt="">
                <p>关注官方微信<br /><span>抢首测资格</span></p>
            </div>
        </div>
        <div class="nymain fr">
            <div class="tit">
                <h2>新闻公告 <span>NEWS DETAILS</span></h2>
                <?php
                    switch ($result["News"]["news_categories_id"]){
                        case 24:
                            $url=$this->Base->getNewsUrl(24);
                            $content="新闻公告";
                            break;
                        case 26:
                            $url=$this->Base->getNewsUrl(56);
                            $content="公告";
                            break;
                        case 28:
                            $url=$this->Base->getNewsUrl(57);
                            $content="新闻";
                            break;
                        default:
                            $url=$this->Base->getNewsUrl(58);
                            $content="活动";
                            break;
                    }
                    ?>
                <div class="pos">您当前的位置：<a href="/">首页</a> > <span><?php echo $content;?></span></div>
            </div>
            <div class="newsBox">
                <div class="news_tit">
                    <h2><?php echo $result["News"]["title"];?></h2>
                    <p>时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></p>
                </div>
                <div class="text">
                    <?php echo $result["News"]["content"]?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"><img src="<?php echo $full_base_url ?>/images/logo_xl.png"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright&copy;2009-2014 深圳市创梦天地科技有限公司 版权所有</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间  享受健康生活。</div>
    </div>
</div>
<div class="popup">
    <div class="mask"></div>
    <div class="box">
        <input class="ipt" type="text" name="phone" autocomplete="off" value="填写手机号码" />
        <span id="submit">预约资格</span>
        <div class="close"></div>
    </div>
</div>
<div class="popTab" style="display:none;">
    <div class="mask"></div>
    <div class="box tab">
        <ul class="tab-hd clearfix">
            <li class="first"><span class="t1"></span></li>
            <li><span class="t2"></span></li>
            <li><span class="t3"></span></li>
            <li><span class="t4"></span></li>
        </ul>
        <div class="tabs">
            <div class="tab-con">
                <ul class="draw clearfix">
                    <li id="jp1">
                        <img src="<?php echo $full_base_url ?>/images/jp1.png" alt="">
                        <p>iPad mini 3</p>
                    </li>
                    <li id="jp2">
                        <img src="<?php echo $full_base_url ?>/images/jp2.png" alt="">
                        <p>谢谢参与</p>
                    </li>
                    <li id="jp3">
                        <img src="<?php echo $full_base_url ?>/images/jp3.png" alt="">
                        <p>蓝牙耳机</p>
                    </li>
                    <li id="jp4">
                        <img src="<?php echo $full_base_url ?>/images/jp4.png" alt="">
                        <p>iPhone 6</p>
                    </li>
                    <li id="jp10">
                        <img src="<?php echo $full_base_url ?>/images/jp7.png" alt="">
                        <p>充电宝</p>
                    </li>
                    <li class="blank"></li>
                    <li class="blank"></li>
                    <li id="jp5" id="jp5">
                        <img src="<?php echo $full_base_url ?>/images/jp5.png" alt="">
                        <p>触控手套</p>
                    </li>
                    <li class="zgm" id="jp9">
                        <img src="<?php echo $full_base_url ?>/images/jp6.png" alt="">
                        <p>幻想先遣团资格码</p>
                    </li>
                    <li id="jp8">
                        <img src="<?php echo $full_base_url ?>/images/jp5.png" alt="">
                        <p>触控手套</p>
                    </li>
                    <li id="jp7">
                        <img src="<?php echo $full_base_url ?>/images/jp2.png" alt="">
                        <p>谢谢参与</p>
                    </li>
                    <li class="zgm"  id="jp6">
                        <img src="<?php echo $full_base_url ?>/images/jp6.png" alt="">
                        <p>幻想先遣团资格码</p>
                    </li>
                </ul>
                <button id="btn_draw"></button>
            </div>
            <div class="tab-con"><a href="//sale.suning.com/images/advertise/yx/huanxiangzhixin/index.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/t2.png" alt=""></a></div>
            <div class="tab-con"><a href="//bbs.9game.cn/forum-3135-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/t3.png" alt=""></a></div>
            <div class="tab-con"><img src="<?php echo $full_base_url ?>/images/t4.png" alt=""></div>
        </div>
        <div class="close"></div>
    </div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/common.js"></script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
</body>
</html>