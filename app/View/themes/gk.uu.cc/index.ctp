<?php
//引入WebsiteHelper
$this->Website->init();

$time = time();
$siteId = $GLOBALS['site_id'];

$defaultNum = 0; //预约数累加
//start_time=1508922410##minute_num=0##default_num=20000
//累加逻辑
$numInc = explode('##', GET_BLOCK('yuyue_num_inc'));
$startTime = explode('=', $numInc[0]);
$endTime = explode('=', $numInc[1]);
$minuteIncNum = explode('=', $numInc[2]);
$defaultIncNum = explode('=', $numInc[3]);
//按start_time计算时间间隔，然后按每分钟的规则递增预约数
if ($startTime[1] > 0 && $minuteIncNum[1] > 0) {
    if ($endTime[1] <= 0 || $endTime >= $time) {
        $minuteCount = ($time - $startTime[1]) / 60;
        $defaultNum += intval($minuteIncNum[1] * $minuteCount);
    }
}
//额外增加
$defaultNum += intval($defaultIncNum[1]);
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=GET_BLOCK('web_title');?></title>
        <meta name="description" content="<?=GET_BLOCK('web_description');?>" />
        <meta name="keywords" content="<?=GET_BLOCK('web_keywords');?>"/>
        <link href="<?php BASE_URL() ?>yuyue/css/style.css?var=17" rel="stylesheet" type="text/css">
        <link href="<?php BASE_URL() ?>yuyue/css/swiper.min.css?var=8" rel="stylesheet" type="text/css">
        <!--<link href="http://dl.gamdream.com/market/resource/css/Swiper-2.7.6.css" rel="stylesheet" type="text/css">-->
        <link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
    </head>

    <body>
        <div class="main1">
            <!--<div id="hero">
                <div id="element1"></div>
                <div id="element2"></div>
            </div>-->
            <a href="javaScript:;" class="gohp">下载游戏</a>
            <a href="/home" class="gohp gohps">进入官网</a>
            <div class="download">
                <a href="<?=GET_BLOCK('ios_download_url');?>"><i></i>iOS端</a>
                <a href="<?=GET_BLOCK('android_download_url');?>"><i></i>安卓端</a>
            </div>

            <div class="logo"><img src="<?php BASE_URL() ?>yuyue/images/w_i_logo.png" /></div>
            <a class="dateBtn" href="javascript:;"></a>
            <p class="dateNums">已经有 <strong id="collectPhoneNum">loading..</strong> 人预约</p>
        </div>

        <div class="main2">
            <div class="wrap">
                <div class="title"></div>
                <!--<a class="ruleBtn" href="javascript:;"></a>-->
                <div class="light">
                    <div class="list1"></div>
                    <div class="list2"></div>
                </div>
            </div>
        </div>

        <div class="main3">
            <a name="main3"></a>
            <div class="wrap">
                <div class="title"></div>
                <div class="txt">
                    <p> 在最近的一次流星雨过后，似乎有什么东西正在唤醒休眠中腐败水晶。<br/>
                        混沌军团回来了并且比以前更强大。<br/>
                        在此号召守卫者们，加入战斗，招募史诗英雄，<br/>
                        建立你的王国来粉碎混沌军团。<br/>
                        联合你们力量与世界各地的守护者建立联盟，并肩战斗！<br/>
                        </p>
                    <a href="/picture/1"></a>
                </div>
                <div class="vedio-box"><video width="753" style="background:#000;" onClick="playPause()" height="442" poster="<?=GET_BLOCK('index_video_img');?>" src="<?=GET_BLOCK('index_video_url');?>" /></div>
                <!--<a class="pa video_btn video_btn_link" name="http://avatar.dl.toyblast.gxpan.cn/yyb/data/video_01.mp4" title="播放精彩视频" href="javascript:;"></a>-->
            </div>
        </div>

        <div class="main4">
            <a name="main4"></a>
            <div class="wrap">
                <div class="title"></div>
                <div class="demo1">
                    <div class="loop">
                        <ul>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-1.png" alt="..."></li>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-2.png" alt="..."></li>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-3.png" alt="..."></li>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-4.png" alt="..."></li>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-5.png" alt="..."></li>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-6.png" alt="..."></li>
                            <li><img src="<?php BASE_URL() ?>yuyue/images/w_i_m4-7.png" alt="..."></li>
                        </ul>
                    </div>
                </div>
                <a class="btn" href="/game_list"></a>
            </div>
        </div>

        <div class="main5">
            <a name="main5"></a>
            <div class="wrap">
                <div class="title"></div>
                <div class="swiper-tese">
                    <div class="swiper-wrapper">
                        <?php
                            $data = GET_BLOCK('m_index_run');
                            if(!empty($data)){
                                $dataArr = explode(",",$data);
                                $str = '';
                                foreach ($dataArr as $v) {
                                    $str .= '<div class="swiper-slide" style="background-image:url('.$v.')"><img src-='.$v.' alt=""></div>';
                                }
                                echo $str;
                            }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev prev"></div>
                <div class="swiper-button-next next"></div>
                <div class="game_logo"></div>
                <ul class="link">
                    <li class="wxbox">
                        <div>官方公众号</div>
                        <a href="javascript:;" class="weixin"></a>
                        <div class="wxPop"><img src="<?=GET_BLOCK('m_wx_ecode'); ?>"></div>
                    </li>
                    <li>
                        <div>官方玩家群</div>
                        <a href="<?=GET_BLOCK('qq_group_url'); ?>" target="_blank"></a>
                    </li>
                    <li>
                        <div>官方微博</div>
                        <a href="<?=GET_BLOCK('weibo_url'); ?>"  target="_blank"></a>
                    </li>
                </ul>
                <!--<a id="toTop" href="javascript:void(0);"></a>-->
            </div>
        </div>
        <?php require_once '_footer.ctp';?>

        <div class="nav">
            <a class="goTop active" href="javascript:;">返回顶部</a>
            <a href="#main3">世界介绍</a>
            <a href="#main4">英雄介绍</a>
            <a href="#main5">游戏特色</a>
            <img src="<?=GET_BLOCK('weixin_code'); ?>" />
            <p>关注官方公众号</p>
        </div>


        <div class="mask"></div>

        <!--<div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>-->

        <div class="popRule pop">
            <a class="close" href="javascript:;"></a>
            <h2>【预登录活动规则】</h2>
            <p>
                1、本次活动仅限使用大陆手机号参加。<br>
                2、本次活动中的奖励只需要总登录人数达到指定人数，就会在活动结束后发送奖励给所有参与预登录活动的守卫者。<br>
                3、同一个手机号只能领取一份本次活动奖励。<br>
                4、本次活动持续到公测开启当天，请守卫者们留意活动关闭的相关公告，奖励将通过短信发送到预约手机。
            </p>
            <a class="popRuleClose" href="javascript:;">确 定</a>
        </div>

        <div class="popDate pop">
            <a class="close" href="javascript:;"></a>
            <h2 class="and_title" style="display:none">输入手机号，即可预约成功 </h2>
            <h2 class="ios_title" sytle="">IOS可直接下载并开始游戏</h2>
            <ul>
                <li class="sys-choose"><label>手机系统：</label><a class="ios-choose" href="javascript:;"> IOS </a><a class="az-choose  on" href="javascript:;"> 安卓</a></li>
                <li class="and_dl" ><!--安卓不删档内测已经开启！<br/>请进入官网下载-->
                    <input id="phoneNum" class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码" />
                </li>
                <li class="ios_tips" style="display:none">IOS不删档内测已经开启！<br/> 请前往APP STORE下载 </li>
            </ul>
            <a class="yuyue-go" style="display:none"  id="yuyue_go" href="javascript:;<?php //echo GET_BLOCK('android_download_url');?>">立即下载</a>
            <a class="yuyue-go" id="ios_dl" href="<?php echo GET_BLOCK('ios_download_url');?>">立即下载</a>
        </div>

        <script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
        <script src="http://dl.gamdream.com/market/resource/js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
        <script src="<?php BASE_URL() ?>yuyue/js/swiper.jquery.min.js" type="text/jscript"></script>
        <script type="text/javascript" src="/js/edata.js"></script>
        <script type="text/javascript">
            function getParam(_n){
                 var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
                 var r = window.location.search.substr(1).match(reg);
                     if(r!=null) return  decodeURIComponent(r[2]); return null;
            }
            $(document).ready(function () {
                jQuery(".demo1").slide({mainCell:".loop ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:12});

                //游戏特色
                var swiper = new Swiper('.swiper-tese', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    pagination: '.swiper-pagination',
                    loop : true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    coverflow: {
                        rotate: 20,
                        stretch: 150,
                        depth: 150,
                        modifier: 1,
                        slideShadows : true
                    },
                });

                $("#ios_dl").click(function(){
                    sToEdata("download_ios");
                });
                if ($("#element1").length && $("#element2").length) {

                    var plane = document.getElementById('element1');
                    var rocket = document.getElementById('element2');
                    plane.homePos = {x: plane.offsetLeft, y: plane.offsetTop};
                    rocket.homePos = {x: rocket.offsetLeft, y: rocket.offsetTop};

                    $('.main1').mousemove(function (e) {
                        parallax(e, plane, 80);
                        parallax(e, rocket, 20);
                    });

                }

                function parallax(e, target, layer) {
                    var x = target.homePos.x - (e.pageX - target.homePos.x) / layer;
                    var y = target.homePos.y - (e.pageY - target.homePos.y) / layer;
                    //$(target).offset({ top: y ,left : x });
                    $(target).css({transform: "translate3D(" + x + "px, " + y + "px, 0px)"});
                }
                ;


                jQuery(".swiper-container").slide({titCell: ".hd li", mainCell: ".swiper-wrapper", effect: "fold", trigger: "click", autoPlay: true, titOnClassName: "active",
                    endFun: function (i, c) {
                        $(".swiper-wrapper .swiper-slide").removeClass("swiper-slide-active").eq(i).addClass("swiper-slide-active");
                    }});
                jQuery(".teseTab").slide({titCell: ".tab_hd li", mainCell: ".teseCon", effect: "fold", trigger: "click", titOnClassName: "active",
                    endFun: function (i, c) {
                        $(".teseCon .tab_con").removeClass("on").eq(i).addClass("on");
                    }});

                //规则
                $('.ruleBtn').click(function () {
                    $('.mask,.popRule').show();
                })
                //预约
                $('.dateBtn').click(function () {
                    $('.mask,.popDate').show();
                })
                //预约事件
                $('.sys-choose a').click(function () {
                    $(this).addClass('on').siblings().removeClass('on');
                    if($(this).hasClass("ios-choose")){
                        $(".and_dl").hide();
                        $("#yuyue_go").hide();
                        $(".and_title").hide();
                        $(".ios_tips").show();
                        $(".ios_title").show();
                        $("#ios_dl").show();
                    }else{
                        $(".and_dl").show();
                        $("#yuyue_go").show();
                        $(".and_title").show();
                        $(".ios_tips").hide();
                        $(".ios_title").hide();
                        $("#ios_dl").hide();
                    }
                })
                $('.close,.popRuleClose').click(function () {
                    $('.mask,.pop').hide();
                })
                //功能： 手机号码验证
                function checkPhoneNum(phoneNum) {
                    return /^(13|14|15|17|18)\d{9}$/.test(phoneNum) ? !0 : !1
                }
                //发送注册验证
                $('#sendCode').click(function () {
                    var wait = 60;
                    var obj = $(this);
                    var phone = $("#phoneNum").val();
                    if (phone == "" || phone == undefined) {
                        alert("请输入手机号码！");
                    } else if (!checkPhoneNum(phone)) {
                        alert("请输入正确的手机号码！");
                    } else {
                        sendCodes();
                        $.ajax({
                            type: "POST",
                            url: "/qd_send_check_code",
                            data: {phone: phone, site_id: <?=$siteId;?>},
                            dataType: "json",
                            success: function (res) {
                                if (res.ret == 0) {
                                    alert("验证码已发送至您的手机！");
                                } else {
                                    alert("发送失败！");
                                }
                            }
                        });
                        function sendCodes() {
                            if (wait == 0) {
                                obj.html("获取验证码");
                                wait = 10;
                                obj.removeClass("codeClick");
                                $('#sendCode').removeAttr("disabled"); //移除disabled属性
                            } else {
                                $('#sendCode').attr('disabled', "true"); //添加disabled属性
                                obj.addClass("codeClick");
                                obj.html("重新发送" + wait + "s");
                                wait--;
                                setTimeout(function () {
                                    sendCodes();
                                }, 1000);
                            }
                        }
                    }
                })

                //验证 验证码
                function checkValidCode(phoneNum, checkCode) {

                    var codeState;

                    $.ajax({
                        type: "POST",
                        url: "/qd_valid_check_code",
                        data: {phone: phoneNum, site_id: <?=$siteId;?>, "code": checkCode},
                        dataType: "json",
                        async: false,
                        success: function (res) {
                            if (res.ret == 0) {
                                codeState = true;
                                return true;
                            } else {

                                codeState = false;
                                return false;
                            }
                        }
                    });
                    return codeState;
                }

                function getCollectPhoneNum() {
                    var num = <?=$defaultNum;?>;
                    $("#collectPhoneNum").html(num);
                    $.ajax({
                        type: "POST",
                        url: "/get_collect_phone_num",
                        data: {site_id: <?=$siteId;?>, in_code_id: '1,2'},
                        dataType: "json",
                        async: false,
                        success: function (res) {
                            if (res.ret == 0) {
                                num = Number(res.total) + <?=$defaultNum?>;
                                $("#collectPhoneNum").html(num);
                                return true;
                            }
                        }
                    });
                    // if (num >= 10000) {
                    //     $("#jl1").attr("src", "<?php BASE_URL() ?>yuyue/images/timesImgOk1.png");
                    // }
                    // if (num >= 50000) {
                    //     $("#jl2").attr("src", "<?php BASE_URL() ?>yuyue/images/timesImgOk2.png");
                    // }
                    // if (num >= 100000) {
                    //     $("#jl3").attr("src", "<?php BASE_URL() ?>yuyue/images/timesImgOk3.png");
                    // }
                    if (num >= 200000) {
                        // $("#jl4").attr("src", "<?php BASE_URL() ?>yuyue/images/timesImgOk4.png");
                        $(".main2 .light .list1").css({
                            'opacity': "0"
                        })
                    }
                    if (num >= 300000) {
                        // $("#jl5").attr("src", "<?php BASE_URL() ?>yuyue/images/timesImgOk5.png");
                        $(".main2 .light .list2").css({
                            'opacity': "0"
                        })
                    }
                }
                getCollectPhoneNum();

                /*预约请求*/
                $("#yuyue_go").on("click", function () {
                    var phone = $("#phoneNum").val();
                    var code = $("#checkCode").val();
                    if ($('.ios-choose').is('.on')) {
                        code_id = 1;
                    } else {
                        code_id = 2;
                    }
                    if (phone == "" || phone == undefined) {
                        alert("请输入手机号码！");
                    } else if (!checkPhoneNum(phone)) {
                        alert("请输入正确的手机号码！");
                    }
//                    else if (code == "" || code == undefined) {
//                        alert("请输入验证码！");
//                    } else if (!checkValidCode(phone, code)) {
//                        alert("验证码错误！");
//                    }
                    else {

                        $.ajax({
                            type: "POST",
                            url: "/collect_phone",
                            data: {phone: phone, "type": code_id, collect_name: <?=$siteId;?>},
                            dataType: "json",
                            success: function (res) {
                                if (res.ret == 0) {
                                    alert("恭喜您，预约成功！");
                                    $('.mask,.pop').hide();
                                } else if (res.ret == 2) {
                                    alert("您已经预约过了哦！");
                                    $('.mask,.pop').hide();
                                } else {
                                    alert("预约失败！");
                                }
                            }
                        });
                    }
                });

                // 滑动滚动条
                $(window).scroll(function () {
                    // 滚动条距离顶部的距离 大于 200px时
                    var M1 = $('.main1').height();
                    var M2 = $('.main2').height();
                    var M3 = $('.main3').height();
                    var M4 = $('.main4').height();
                    var M5 = $('.main5').height();
                    if ($(window).scrollTop() > 200) {
                        $(".goTop").show(); // 开始淡入
                    } else {
                        $(".goTop").hide(); // 如果小于等于 200 淡出
                    }
                    if($(window).scrollTop() > (M1) && $(window).scrollTop() < (M1+M2)){
                        $('.nav a').removeClass('active');
                        $('.nav a').eq(0).addClass('active');
                    }else if($(window).scrollTop() > (M1+M2) && $(window).scrollTop() < (M1+M2+M3)){
                        $('.nav a').removeClass('active');
                        $('.nav a').eq(1).addClass('active');
                    }else if($(window).scrollTop() > (M1+M2+M3) && $(window).scrollTop() < (M1+M2+M3+M4)) {
                        $('.nav a').removeClass('active');
                        $('.nav a').eq(2).addClass('active');
                    }else if($(window).scrollTop() > (M1+M2+M3+M4) && $(window).scrollTop() < (M1+M2+M3+M4+M5)) {
                        $('.nav a').removeClass('active');
                        $('.nav a').eq(3).addClass('active');
                    }
                });
                $('.nav').on('click','a',function(){
                    $('.nav a').removeClass('active');
                    $('.nav a').eq($(this).index()).addClass('active');
                })
            var from = getParam("from");
            if(from == "android_download"){
                $(".dateBtn").click();
                $(".az-choose").click();
            }
            });

            function playPause() {
                var myVideo = document.getElementsByTagName('video')[0];
                if (myVideo.paused) {
                    myVideo.play();
                } else {
                    myVideo.pause();
                }
            }


            //GOTOP
            $("#toTop,.goTop").click(function () {
                $("body,html").animate({scrollTop: 0}, 800);
            });

            //页面视频
            $('.video_btn_link').click(function () {
                var vedioSrc = this.name;
                $('.s_p_k video').attr('src', vedioSrc);
                $('.mask').show();
                $('.s_p_k').show();
            })
            $(".weixin").click(function(){
                $(".wxPop").toggle();
            });
        </script>
    </body>
</html>
