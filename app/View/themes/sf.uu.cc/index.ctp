<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/reset.css" rel="stylesheet" type="text/css">
    <link media="screen" href="<?php echo $full_base_url ?>/css/minimalist.css" rel="stylesheet" type="text/css">
    <link media="screen" href="<?php echo $full_base_url ?>/css/home.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page">
    <div class="header">
        <h1>天降官网</h1>
        <div class="home"><a target="_blank" href="/home">官网首页</a></div>
        <div class="download clearfix">
            <a class="d1" href="//dl.uu.cc/download/skyfall_ios.ipa">IOS越狱版</a>
            <a class="d2" href="#">IOS正版</a>
            <a class="d3" href="//dl.uu.cc/download/skyfall_android.apk">安卓版</a>
            <div class="wxbox">
                <p>扫描二维码下载游戏</p>
                <div class="wx">
                    <img src="<?php echo $full_base_url ?>/images/weixin.png" width="135" height="135" alt="" />
                </div>
            </div>
            <div class="tip">敬请期待</div>
        </div>
    </div>
    <div class="mainbox clearfix">
        <div class="vedio tab fl">
            <ul class="tab-hd clearfix">
                <li class="current"><span class="sp1">宣传视频</span></li>
                <li><span class="sp2">游戏实录</span></li>
                <li class="last"><span class="sp3">世界观</span></li>
            </ul>
            <div id="tab-con">
                <div class="tab-con">
                    <div class="spin" id="video1"></div>
                </div>
                <div class="tab-con">
                    <div class="spin" id="video2"></div>
                </div>
                <div class="tab-con">
                    <div class="spin" id="video3"></div>
                </div>
            </div>
        </div>
        <div class="rightbox fr">
            <div class="banner"><a target="_blank" href="//sf.uu.cc/show/386.html"><img src="<?php echo $full_base_url ?>/images/banner.jpg" alt=""></a></div>
            <div class="clearfix">
                <div class="fayan fl">
                    <a target="_blank" href="//bbs.uu.cc/forum-240-1.html">
                        <h4>我要发言</h4>
                        <p>bbs论坛</p>
                    </a>
                </div>
                <div class="wxlb fr">
                    <a target="_blank" href="#">
                        <h4>微信礼包</h4>
                        <p>ledousf</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide">
        <ul class="clearfix">
            <li class="p1 cur">
                <span></span>
                <img src="<?php echo $full_base_url ?>/images/ban_01.jpg" width="420" alt="" />
            </li>
            <li class="p2">
                <span></span>
                <img src="<?php echo $full_base_url ?>/images/ban_02.jpg" width="420" alt="" />
            </li>
            <li class="p3">
                <span></span>
                <img src="<?php echo $full_base_url ?>/images/ban_03.jpg" width="420" alt="" />
            </li>
            <li class="p4">
                <span></span>
                <img src="<?php echo $full_base_url ?>/images/ban_04.jpg" width="420" alt="" />
            </li>
            <li class="p5">
                <span></span>
                <img src="<?php echo $full_base_url ?>/images/ban_05.jpg" width="420" alt="" />
            </li>
        </ul>
    </div>
</div>
<div class="footer">
    <div class="foot">
        <div class="footTop clearfix">
            <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏<img src="<?php echo $full_base_url ?>/images/idreamsky.png" width="136" height="65" /></a></h2>
            <div class="nav fl">
                <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
                <p style="text-indent:5px;">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
            </div>
            <div class="link fr">
                <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
                <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
                <a target="_blank" href="//net.china.com.cn/index.htm"></a>
                <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
            </div>
        </div>
        <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
    </div>
</div>

<script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/switch.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/flowplayer.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/cookie.js" type="text/javascript"></script>
<script type="text/javascript">
flowplayer.conf = {
    engine:"flash"
};

$(function(){
    /*五屏切换*/
    $(".slide").find("li").click(function(){
        if($(this).hasClass("cur")){
            return false;
        }
        var li = $(this);
        sibling = li.siblings();
        li.find("span").hide(0,function(){
            li.animate({"width":"421px"},500,function(){
                li.addClass("cur");
            });
            sibling.animate({"width":"73px"},500,function(){
                sibling.removeClass("cur");
                sibling.find("span").show(0);
            });
        });
    });
    //视频
    var Player = function(id){
        this.id = id;
        this.dom = $('#video'+this.id);
        this.source = '//dl.uu.cc/ars/sf0814-'+id+'.mp4';
        this.init();
        Player.players[id] = this;
    }

    Player.prototype = {
        init: function(){
            if(this.inited){
                return;
            }
            var _this = this;
            $(this.dom).flowplayer({
                playlist: [
                    [
                        { flv: this.source }
                    ]
                ],
                poster: '<?php echo $full_base_url ?>/images/player.jpg',
                ratio: 3/4
            });
            this.player = $(this.dom).data("flowplayer");
            this.inited = true;
        },
        pause: function(){
            this.player.pause();
        },
        play: function(){
            this.player.play();
        }
    }
    Player.players = {};

    Player.getPlayer = function(id){
        if(!Player.players[id]){
            new Player(id);
        }
        return Player.players[id];
    }

    Player.pause = function(obj){
        $.each(Player.players, function(_, o){
            if(o != obj){
                o.player.pause();
            }
        })
    }
    $(window).load(function(){
        Player.getPlayer(1);
    });
    /*tab 选项卡*/
    $(".tab-hd").find("li").click(function(){
        var i = $(this).index();
        var v = i + 1;
        $(this).addClass("current").siblings().removeClass("current");
        $("#tab-con").children(":eq("+i+")").show().siblings().hide();
        //Player.pause();
        Player.getPlayer(v);
    });
});
</script>
<div style="display:none;">
    <script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F295fce5acbdeb282a4b01099387c7e10' type='text/javascript'%3E%3C/script%3E"));
    </script>
</div>
</body>
</html>