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
<link href="<?php BASE_URL() ?>css/style.css?v=20170921" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div class="topNav">
    <div class="wrap">
        <img class="logo" src="<?php BASE_URL() ?>images/logo.jpg" />
        <ul>
            <li>
                <a href="/" target="_self">官网首页<span>HOME</span></a>
            </li>
            <li>
                <a href="//hy.uu.cc/news/98.html" target="_self">新闻资讯<span>NEWS</span></a>
            </li>
            <li>
                <a href="//hy.uu.cc/news/372.html" target="_self">游戏攻略<span>WALKTHROUGH</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('forum_url');?>" target="_self">官方论坛<span>FORUM</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('baidu_tieba_url');?>" target="_self">百度贴吧<span>BAIDU</span></a>
            </li>
        </ul>
        <div class="wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></div>
        <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo GET_BLOCK('weixin_qrcode');?>"><h3>微信公众号</h3><span>扫描二维码关注<br><?php echo GET_BLOCK('weixin_account');?></span></div>
        <div class="pa wxin_qq_pop qq_pop"><img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>"><span>加入QQ群</span><h3><?php echo GET_BLOCK('qq_group');?></h3></div>
    </div>
</div>
<div class="banner">
    <div class="wrap">
        <!--
        <div class="pa down_box">
            <img class="code" src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
            <a class="down_ios" href="<?php echo GET_BLOCK('ios_download_url');?>" target="_self"><img src="<?php BASE_URL() ?>images/down_ios.png" /></a>
            <a class="down_ios" href="<?php echo GET_BLOCK('android_download_url');?>" target="_self"><img src="<?php BASE_URL() ?>images/down_az.png" /></a>
            <a class="down_az" href="http://l.taptap.com/Nsb41ku7" target="_blank"><img src="<?php BASE_URL() ?>images/down_taptap.png" /></a>
        </div>
        -->
    </div>
</div>

<div class="main1">
    <div class="wrap">
        <div id="slideBox" class="slideBox">
            <div class="hd">
                <ul><li></li><li></li><li></li></ul>
            </div>
            <div class="bd">
                <ul>
                <?php
                    SHOW_DATAS('<li><a target="_blank" href="@@STR1@@"><img src="@@STR2@@" /></a></li>',
                    'Y-m-d',0,4);
                     ?>
                </ul>
            </div>

        </div>

        <div class="slideNewsBox">
            <div class="hd">
                <ul><li>新闻中心</li><li>最新活动</li><li>官方论坛</li><li>游戏攻略</li></ul>
                <a class="more" href="//hy.uu.cc/news/98.html" target="_blank"></a>
            </div>
            <div class="bd">
                <ul>
                    <?php
                    SHOW_NEWS('<div class="tit"><a href="@@URL@@" target="_blank">@@TITLE@@</a></div>','Y-m-d',array('新闻'),1,0,array());
                    ?>
                    <?php
                        SHOW_NEWS('<li><em>@@CATEGORY_NAME@@</em><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',array('新闻'),5,0,array('LimitFrom'=>1));
                    ?>
                </ul>
                <ul>
                    <?php
                    SHOW_NEWS('<div class="tit"><a href="@@URL@@" target="_blank">@@TITLE@@</a></div>','Y-m-d','活动',1,0,array());
                    ?>
                    <?php
                        SHOW_NEWS('<li><em>@@CATEGORY_NAME@@</em><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d','活动',5,0,array('LimitFrom'=>1));
                    ?>
                </ul>
                <ul>
                    <?php
                    SHOW_NEWS('<div class="tit"><a href="@@URL@@" target="_blank">@@TITLE@@</a></div>','Y-m-d',array('论坛'),1,0,array());
                    ?>
                    <?php
                        SHOW_NEWS('<li><em>@@CATEGORY_NAME@@</em><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',array('论坛'),5,0,array('LimitFrom'=>1));
                    ?>
                </ul>
                <ul>
                    <?php
                    SHOW_NEWS('<div class="tit"><a href="@@URL@@" target="_blank">@@TITLE@@</a></div>','Y-m-d',array('攻略'),1,0,array());
                    ?>
                    <?php
                        SHOW_NEWS('<li><em>@@CATEGORY_NAME@@</em><a href="@@URL@@" target="_blank">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',array('攻略'),5,0,array('LimitFrom'=>1));
                    ?>
                </ul>
            </div>
        </div>

    </div>
</div>

<div class="main2">
    <div class="wrap">
        <div class="slide">
            <ul class="clearfix">
                <li class="p1">
                    <p><img src="<?php BASE_URL() ?>images/sliderTab1.jpg?v=0"></p>
                    <img src="<?php BASE_URL() ?>images/sliderPic1.jpg" alt="">
                </li>
                <li class="p2">
                    <p><img src="<?php BASE_URL() ?>images/sliderTab2.jpg?v=0"></p>
                    <img src="<?php BASE_URL() ?>images/sliderPic2.jpg" alt="">
                </li>
                <li class="p3">
                    <p><img src="<?php BASE_URL() ?>images/sliderTab3.jpg?v=0"></p>
                    <img src="<?php BASE_URL() ?>images/sliderPic3.jpg" alt="">
                </li>
                <li class="p4 cur">
                    <p style="display:none;"><img src="<?php BASE_URL() ?>images/sliderTab4.jpg?v=0"></p>
                    <img src="<?php BASE_URL() ?>images/sliderPic4.jpg" alt="">
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main3">
    <div class="wrap">
        <div class="videoJietu">
            <div class="hd">
                <ul>
                    <li>游戏视频</li>
                    <li>游戏截图</li>
                </ul>
                <!--<a class="more" href="" target="_blank"></a>-->
            </div>
            <div class="bd">
                <ul>
                <?php
                    SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@" href="javascript:;"><div><img src="@@STR2@@" /></div><span>@@STR3@@</span><em></em></a></li>',
                    'Y-m-d',1,4);
                     ?>
                </ul>
                <ul class="jietu_view">
                <?php
                    SHOW_DATAS('<li><a href="javascript:;"><div><img src="@@STR2@@" /></div><span>@@STR3@@</span></a></li>',
                    'Y-m-d',2,4);
                     ?>
                </ul>
            </div>
        </div>

        <a class="bizi" href="" target="_blank"><img src="<?php BASE_URL() ?>images/biz.jpg" /></a>

    </div>
</div>

<div class="footer">
    <div class="wrap">
        <span class="logo"><img src="<?php BASE_URL() ?>images/ft_logo1.png"><img src="<?php BASE_URL() ?>images/ft_logo2.png?v=0"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2017  深圳市创梦天地科技股份有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php BASE_URL() ?>images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php BASE_URL() ?>images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php BASE_URL() ?>images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php BASE_URL() ?>images/beian.jpg" alt="不良信息举报中心" width="16"> </a></p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<div class="popRight">
    <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" />
    <div class="downLink">
        <a href="<?php echo GET_BLOCK('ios_download_url');?>" target="_self"></a>
        <a href="<?php echo GET_BLOCK('android_download_url');?>" target="_self"></a>
    </div>
    <div class="popTel"><?php echo GET_BLOCK('kefu_phone');?></div>
    <div class="popQq"><?php echo GET_BLOCK('kefu_qq');?></div>
    <a id="toTop" href="javascript:;"></a>
</div>



<div class="mask"></div>

<div class="pic_slide">
    <a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="<?php BASE_URL() ?>images/loading.gif" width="32" height="32"></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
    <ul class="slide_content">
    </ul>
    <div class="bottom">
        共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>


<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js" type="text/jscript"></script>
<script src="<?php BASE_URL() ?>js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
<script src="<?php BASE_URL() ?>js/pic-slide.js" type="text/jscript"></script>
<script type="text/javascript">
    //焦点图
    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});

    jQuery(".slideNewsBox").slide();

    jQuery(".videoJietu").slide();

    /*五屏切换*/
    $(".slide").find("li").click(function(){
        if($(this).hasClass("cur")){return false;}
        var li = $(this);
        sibling = li.siblings();
        li.find("p").fadeOut(200,function(){
            li.animate({"width":"614px"},500,function(){
                li.addClass("cur");
            });
            sibling.animate({"width":"195px"},500,function(){
                sibling.removeClass("cur");
                sibling.find("p").fadeIn(200);
            });
        });
    });

    //微信
    var wxin_dl = $(".wxin");
    var wxin_pd = $(".wxin_pop");
    var qqun_dl = $(".qqun");
    var qqun_pd = $(".qq_pop");
    wxin_dl.hover(function() {
        wxin_pd.addClass("wxin_pop_show");
    }, function() {
        wxin_pd.removeClass("wxin_pop_show");
    });
    qqun_dl.hover(function() {
        qqun_pd.addClass("wxin_pop_show");
    }, function() {
        qqun_pd.removeClass("wxin_pop_show");
    });

    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.mask').show();
        $('.s_p_k').show();
    })

    $('.close').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.gift_pop').hide();
        $('.pic_slide').hide();
        $('.mask').hide();
    })
</script>
</body>
</html>