<?php
// var_dump(111);exit();
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
    <link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
    <div id="hero">
        <div id="element1"></div>
        <div id="element2"></div>
    </div>
    <div class="main1">
        
        <div class="wrap">
            
            <a class="logo" href="javascript:;"></a>
            <div class="title_img">
                <!--<a class="pa layer video_btn_link" name="http://dl.uu.cc/static/download1/mhhy/1280x720_xiaomi_2.mp4" title="播放精彩视频" href="javascript:;"></a>-->
                <span class="video_btn"></span>
                <a class="pa layer video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>" title="播放精彩视频" href="javascript:;"></a>

            </div>
            <a href="javascript:;" class="yuyue">
                <p>已有 <strong id="collectPhoneNum">loading..</strong> 兄弟预约</p>
            </a>
        </div> 
    </div>
    <div class="main2">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>img/p2_title.png" alt=""></div>
            <div class="p2_text">当预约用户量达到对应量后，相应礼包将直接推送到预约账号的游戏邮箱中！</div>
            <ul>
                <li>
                    <img src="<?php BASE_URL() ?>img/p2-1.png" alt="">
                    <div class="hover">
                        <p>比奇传送石*50</p>
                        <p>盟重传送石*50</p>
                        <p>随机传送石*50</p>
                    </div>
                </li>
                <li>
                    <img src="<?php BASE_URL() ?>img/p2-2.png" alt="">
                    <div class="hover">
                        <p>初级打孔符*40</p>
                        <p>中级打孔符*20</p>
                        <p>高级打孔符*10</p>
                    </div>
                </li>
                <li>
                    <img src="<?php BASE_URL() ?>img/p2-3.png" alt="">
                    <div class="hover">
                        <p>书页*100</p>
                        <p>十倍经验卷轴*100</p>
                    </div>
                </li>
                <li>
                    <img src="<?php BASE_URL() ?>img/p2-4.png" alt="">
                    <div class="hover">
                        <p>书页*200</p>
                        <p>高级泡点精华*10</p>
                        <p>沃玛号角*1</p>
                    </div>
                </li>
            </ul>
            <div class="yuyueVal">
                <div class="box"><div></div>   </div>
                <div class="list">
                    <div class="child">
                        <span></span>
                        <p>预约用户 <br> 达到 <em>10万</em></p>
                    </div>
                    <div class="child">
                        <span></span>
                        <p>预约用户 <br> 达到 <em>30万</em></p>
                    </div>
                    <div class="child">
                        <span></span>
                        <p>预约用户 <br> 达到 <em>60万</em></p>
                    </div>
                    <div class="child">
                        <span></span>
                        <p>预约用户 <br> 达到 <em>100万</em></p>
                    </div>
                </div>
            </div>
            <!--<p class="text">预约成功后，预约达成相应人数即可获得对应公测礼包</p>-->
        </div>
    </div>
    <div class="main3">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>img/p3_title.png" alt=""></div>
            <div class="sliderBox">
                <div class="swiper-tese">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="javascript:;"> <img src="<?php BASE_URL() ?>img/banner1.png" width="789" height="483"><img class="kuang" src="<?php BASE_URL() ?>img/banner.png"></a></div>
                        <div class="swiper-slide"><a href="javascript:;"> <img src="<?php BASE_URL() ?>img/banner1.png" width="789" height="483"><img class="kuang" src="<?php BASE_URL() ?>img/banner.png"></a></div>
                        <div class="swiper-slide"><a href="javascript:;"> <img src="<?php BASE_URL() ?>img/banner1.png" width="789" height="483"><img class="kuang" src="<?php BASE_URL() ?>img/banner.png"></a></div>
                        <div class="swiper-slide"><a href="javascript:;"> <img src="<?php BASE_URL() ?>img/banner1.png" width="789" height="483"><img class="kuang" src="<?php BASE_URL() ?>img/banner.png"></a></div>
                        <div class="swiper-slide"><a href="javascript:;"> <img src="<?php BASE_URL() ?>img/banner1.png" width="789" height="483"><img class="kuang" src="<?php BASE_URL() ?>img/banner.png"></a></div>-->
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;"> <img src="@@STR2@@" width="789" height="483"><img class="kuang" src="http://gimg.gamdream.com/activity/dream/xiaozhao/p_banner.png"></a></div>',
                        'Y-m-d',0);
                         ?>
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <!--<div class="swiper-pagination2"></div>-->

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev2"></div>
                <div class="swiper-button-next2"></div>
            </div> 
        </div>
    </div>
    <footer id="foot">
        <div class="wrap">
            <div class="title">
                <img src="<?php BASE_URL() ?>img/foot_title.png" alt="">
                <p>关注官方社群， 获取最新资讯</p>
            </div>
            <div class="box">
                <div class=typeBox1>
                    <div class="qrCode"><a href="javascript:;" target="_blank"><img width="184" height="184" src="<?php echo GET_BLOCK('weixin_code');?>" /></a></div>
                    <p>官方微信</p>
                </div>
                <div class=typeBox1>
                    <div class="qrCode"><a href="javascript:;" target="_blank"><img width="184" height="184" src="<?php echo GET_BLOCK('weibo_code');?>" /></a></div>
                    <p>官方微博</p>
                </div>
                <div class=typeBox2>
                    <a href="javascript:;" class="yuyue"></a>
                    <div><img class="fl" src="<?php BASE_URL() ?>img/qq.png" alt=""><p class="fl">官方QQ1群：<?php echo GET_BLOCK('qq_1');?> </p>
                    <a class="span" target="_blank" href="<?php echo GET_BLOCK('qq_jump1');?>">加入</a></div>
                    <div><img class="fl" src="<?php BASE_URL() ?>img/qq.png" alt=""><p class="fl">官方QQ2群：<?php echo GET_BLOCK('qq_2');?> </p>
                    <a class="span" target="_blank" href="<?php echo GET_BLOCK('qq_jump2');?>">加入</a></div>
                </div>
            </div>
        </div>
    </footer>

    <div class="nav">
        <!--<a class="goTop" href="javascript:;">返回顶部</a>-->
        <div class="qrCode"><img width="150" height="150" src="<?php echo GET_BLOCK('wx_code');?>"></div>
        <p>扫二维码关注微信公众号 </p>
    </div>


    <div class="mask"></div>

    <div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

    <div class="popDate pop">
        <a class="close" href="javascript:;"></a>
        <div class="type">
            <div class="andoid fl on">
                <i></i>
                <span>Andoid</span>
            </div>
            <div class="ios fr">
                <i></i>
                <span>IOS</span>
            </div>
        </div>
        <input id="phoneNum" class="yuyue_ipt" name="phone" maxlength="11" type="tel" placeholder="请输入手机号码" />

        <a class="yuyue-go"  id="yuyue_go" href="javascript:;">立即预约</a>
        <!--<a class="yuyue-go" id="ios_dl" href="<?php echo GET_BLOCK('ios_download_url');?>">立即预约</a>-->
    </div>

    <script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
    <script src="http://dl.gamdream.com/market/resource/js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>js/swiper.min.js" type="text/jscript"></script>
    <script>
        function getParam(_n){
            var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
                if(r!=null) return  decodeURIComponent(r[2]); return null;
        }
        $(document).ready(function () {
            jQuery(".demo1").slide({mainCell:".loop ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:12});
            var plane = document.getElementById('element1');
            var rocket = document.getElementById('element2');
            plane.homePos = {x: plane.offsetLeft, y: plane.offsetTop+10};
            rocket.homePos = {x: rocket.offsetLeft-10, y: rocket.offsetTop};

            $('body').mousemove(function (e) {
                parallax(e, plane, 65);
                parallax(e, rocket, 110);
            });
            function parallax(e, target, layer) {
                var x = target.homePos.x - (e.pageX - target.homePos.x) / layer;
                var y = target.homePos.y - (e.pageY - target.homePos.y) / layer;
                //$(target).offset({ top: y ,left : x });
                $(target).css({transform: "translate3D(" + x + "px, " + y + "px, 0px)"});
            };
            var swiper = new Swiper('.swiper-tese', {
                    watchSlidesProgress: true,
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    loop: true,
                    loopedSlides: 5,
                    // autoplay: true,
                    navigation: {
                        nextEl: '.swiper-button-next2',
                        prevEl: '.swiper-button-prev2',
                    },
                    // pagination: {
                    //     el: '.swiper-pagination2',
                    // },
                    on: {
                        progress: function(progress) {
                            for (i = 0; i < this.slides.length; i++) {
                                var slide = this.slides.eq(i);
                                var slideProgress = this.slides[i].progress;
                                modify = 1;
                                if (Math.abs(slideProgress) > 1) {
                                    modify = (Math.abs(slideProgress) - 1) * 0.3 + 1;
                                }
                                translate = slideProgress * modify * 665 + 'px';
                                scale = 1 - Math.abs(slideProgress) / 5;
                                zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
                                slide.transform('translateX(' + translate + ') scale(' + scale + ')');
                                slide.css('zIndex', zIndex);
                                slide.css('opacity', 1);
                                if (Math.abs(slideProgress) > 3) {
                                    slide.css('opacity', 0);
                                }
                            }

                        },
                        setTransition: function(transition) {
                            // console.log(transition)
                            for (var i = 0; i < this.slides.length; i++) {
                                var slide = this.slides.eq(i)
                                slide.transition(transition);
                            }

                        }
                    }
                });

            $('.close,.popRuleClose').click(function () {
                $('.mask,.pop').hide();
            })
            //功能： 手机号码验证
            function checkPhoneNum(phoneNum) {
                return /^(13|14|15|17|18)\d{9}$/.test(phoneNum) ? !0 : !1
            }
            // 点亮
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
                function reach(number){
                    for(var i=0; i<number; i++){
                        $('.yuyueVal .list .child').eq(i).addClass('on');
                    }
                }
                // num = 100000;
                if (num >= 100000) { reach(1) } ;
                if (num >= 300000) { reach(2) } ;
                if (num >= 600000) { reach(3) } ;
                if (num >= 1000000) { reach(4) } ;
                var width = Math.floor(num/10000);
                if( width >= 10 && width <= 12 ){ width = 12;  }
                if( width >= 30 && width <= 36 ){ width = 36;  }
                if( width >= 80 && width < 90 ){ width = width-7;  }
                if( width >= 90 ){ width = width-15;  }
                
                console.log(width);
                $('.yuyueVal .box div').css('width',width+'%')
            }
            getCollectPhoneNum();

            $('.type div').on('click',function(){
                $('.type div').removeClass('on');
                $(this).addClass('on');
                // console.log($('.ios').is('.on'));
                // console.log($('.andoid').is('.on'));
            })
            /*预约请求*/
            $("#yuyue_go").on("click", function () {
                // return true;
                var phone = $("#phoneNum").val();
                if ($('.ios').is('.on')) {
                    code_id = 1;
                } else {
                    code_id = 2;
                }
                if (phone == "" || phone == undefined) {
                    alert("请输入手机号码！");
                } else if (!checkPhoneNum(phone)) {
                    alert("请输入正确的手机号码！");
                }
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

            //预约
            $('.yuyue').click(function () {
                $('.mask,.popDate').show();
                return false;
            })
            //GOTOP
            $("#toTop,.goTop").click(function () {
                $("body,html").animate({scrollTop: 0}, 800);
            });

            //页面视频
            $('.video_btn_link').click(function(){
                var vedioSrc = this.name;
                if(vedioSrc){
                    $('.s_p_k video').attr('src',vedioSrc);
                    $('.mask,.s_p_k').show();
                }else{
                    alert('敬请期待！')
                }

            })
            $(".close,.mask").on("click", function(e){
                $('.s_p_k video').attr('src','');
                $('.s_p_k,.nav-list,.yuyuePop,.mask').hide();
                e.stopPropagation();
            });

            $(".weixin").click(function(){
                $(".wxPop").toggle();
            });
        });
    </script>
</body>
</html>
