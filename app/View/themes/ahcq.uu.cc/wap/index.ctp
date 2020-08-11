<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/swiper.min.css"  />
    <link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/index.css?baltfkeaka"  />
    <script src="<?php FILE_PATH(); ?>/wap/js/jweixin-1.0.0.js"></script>
    <!--<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/favicon.ico">-->
    <style>
        .index{width:100%;height:100%; position:relative; background:url(//dl.gamdream.com/ipg/homePage/sdkdown3/img/bg2.jpg) no-repeat center 50%; background-size:100% auto;}
        .btn{position:absolute;width:750px;height:100px;left:50%;margin-left:-375px;bottom:0px;background:url(//dl.gamdream.com/ipg/homePage/sdkdown3/img/btn2.jpg) no-repeat center center; background-size:100% auto; z-index: 5;}
        .btn22:active{-webkit-transform:translate(3px,3px);transform:translate(3px,3px);}
        .text{color:#fff; text-align:center; position:absolute;left:0;width:100%;bottom:210px; font-size:20px; opacity: .4;}


        .text a{color:#fff;}
        .text a:hover{text-decoration:underline;}
        .wx{display:none;position:fixed;width:100%;height:100%;background:rgba(0,0,0,0.8); z-index:100;left:0;top:0; z-index: 10;}
        .wx p{padding:8% 5% 0; text-align:center;}
        .wx img,.popup-setup img{width:100%;border:none; vertical-align:top;}
        .popup-bg{display:none;background:rgba(0,0,0,0.5);position:fixed;top:0;left:0;width:100%;height:100%; z-index: 10;}
        .ios_box{ position:fixed;top:0;left:0;width:100%;height:100%; z-index: 10;display:none;}
        .popup-setup{display:none;position:absolute;top:50%;left:50%;width:650px;height: 705px;margin:-363px 0 0 -325px;background:#fff;border-radius:8px;padding:23px 0;overflow:hidden;z-index: 15;}
        .popup-btn{width:590px;height:80px; line-height:80px; font:18px "SimHei";color:#fff;border-radius:10px;background:#e4393c;margin:0 auto;text-align: center;}
        .popup-kf{width: 100%;color: #f24f5c;font-size: 24px;text-align: center;margin-top: 22px;}
        #hide-swiper{padding-bottom:25px;}
        #hide-swiper .swiper-pagination .slide-active{background:#e4393c; opacity:1;}
        #hide-swiper .swiper-container-horizontal>.swiper-pagination{bottom:0;}
        .swiper-box{padding:0 20px;margin-bottom:30px;}
        .popup-btn a{display:block;color:#fff; line-height:80px;font-size:26px;}
        .popup-plan{height:10px;border-radius:10px;background:#e6e6e6;overflow:hidden;margin:0 23px 50px;}
        .popup-plan span{height:10px;border-radius:10px;background:#e4393c;display: block;}
        .popup-end{height:60px;text-align:center;color:#e4393c;background:#FFF;font:26px "SimHei"; line-height:1;margin-bottom:0;}
        .show-box{position:absolute;left:0;top:0;width:100%;height:100%;overflow: hidden;}
        .show-box .swiper-wrapper{position: relative;}
        .show-box img{width:750px;max-width: 100%;}
        .show-box .show-pagination{bottom:150px; position: absolute;width:100%; text-align: center;}
        .show-box .swiper-pagination-bullet{background:rgba(243,243,243,.7);margin:0 10px;}
        .show-box .swiper-pagination-bullet.show-active{background:#cfa762; opacity:1;}
        #show-swiper .swiper-slide{height:100%;background:url(//dl.gamdream.com/ipg/homePage/sdkdown3/img/1.png) no-repeat center top -0.50px;background-size:contain;}
        #show-swiper .swiper-slide:nth-of-type(2){background-image:url(//dl.gamdream.com/ipg/homePage/sdkdown3/img/2.png);}
        #show-swiper .swiper-slide:nth-of-type(3){background-image:url(//dl.gamdream.com/ipg/homePage/sdkdown3/img/3.png);}
        #show-swiper .swiper-slide:nth-of-type(4){background-image:url(//dl.gamdream.com/ipg/homePage/sdkdown3/img/4.png);}
        .tips{display:none;position:fixed;width:750px;left:50%;margin-left:-375px;z-index:10;top:0;padding-top:200px;}
        .tips .p{width:600px;background:rgba(0,0,0,.8);color:#fff;text-align:center;font-size:30px; line-height:50px;padding:20px 0;margin:0 auto; border-radius:10px;}
        .main1 .m1_logo{position: absolute;right:30px;top:30px;width:213px;height:161px;background: url('<?php echo GET_BLOCK('game_logo');?>') no-repeat;}
    </style>
</head>

<body>
<div class="main1">
    <div class="m1_logo"></div>
    <div class="slogan">
        <!--<img src="<?php FILE_PATH(); ?>/wap/images/slogan2.png" alt="slogan">-->
        <span class="video_btn"></span>
        <a href="javascript:;" data-ios="" data-android="" class=" layer video_btn_link" name="<?php echo GET_BLOCK('index_video');?>"></a>
    </div>

    <div class="yuyue_ios">
        <a href="javascript:;" id="yuyue_ios"></a>
    </div>
    <div class=" yuyue_android yuyue download_img_a_zs">
        <a href="javascript:;" id="yuyue_zs"></a>
    </div>
    <div class="yuyue_android yueyu1 download_img_a_fg">
        <a href="javascript:;" id="yuyue_fg"></a>
    </div>
</div>
<div class="main3">
    <div class="title">
        <img src="/ahcq.uu.cc/wap/img/p3_title.png" style="padding:26px 0;" alt="">
        <img src="/ahcq.uu.cc/wap/img/2208-1242-1_2.jpg" alt="">
        <img src="/ahcq.uu.cc/wap/img/2208-1242-2_2.jpg" alt="">
        <img src="/ahcq.uu.cc/wap/img/2208-1242-3_2.jpg" alt="">
        <img src="/ahcq.uu.cc/wap/img/2208-1242-4_2.jpg" alt="">
        <img src="/ahcq.uu.cc/wap/img/2208-1242-5_2.jpg" alt="">
    </div>
</div>
<div class="foot">
    <ul class="tags">
        <li>
            <a> <img src="/ahcq.uu.cc/wap/img/qq2.png" alt="qq"> </a>
            <div class="text">
                <h3>官方QQ群</h3>
                <h3><?php echo GET_BLOCK('qq_qun');?></h3>
            </div>
        </li>
        <li>
            <a> <img src="/ahcq.uu.cc/wap/img/kefu2.png" alt="客服"> </a>
            <div class="text">
                <h3>官方客服</h3>
                <h3>4008400188</h3>
            </div>
        </li>
    </ul>
</div>
<footer>
    <!-- <p>Copyright©2009-2018 深圳乐易互娱科技有限公司版权所有 </p>
    <p>文网文号 粤B2-20160701 粤网文（2016）3191-703号 </p> -->
    <p>Copyright2009-2019 深圳市创梦天地科技有限公司 版权所有</p>
    <p>网络文化经营许可证：粤网文【2016】6871-1632号</p>
    <p>增值电信业务经营许可证：粤B2-20120567</p>
</footer>
<div class="wx_pop">
    <img src="/ahcq.uu.cc/wap/img/layer.png" alt="">
</div>
<!--ios信任引导-->
<div class="popup-bg"></div>
<div class="ios_box">
    <div class="popup-setup">
        <div class="popup-plan"><span style="width:0%;"></span></div>
        <div class="swiper-box">
            <div class="swiper-container" id="hide-swiper">
                <div class="swiper-wrapper">
                    <?php
                    // SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@"><img width="640" height="320" src="@@STR2@@" alt=""></a></div>',
                    SHOW_DATAS('<div class="swiper-slide"><div class="autoimg"><img src="@@STR1@@" alt=""></div></div>',
                        'Y-m-d',2,6);
                    ?>
                    <!--<div class="swiper-slide">
                        <div class="autoimg"><img src="//dl.gamdream.com/ipg/homePage/sdkdown3/img/setup/1.png" alt=""></div>
                    </div>-->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="popup-btn"><a href="javascript:;">正在安装，请稍候...</a></div>
        <div class="popup-kf">如有问题添加微信客服（微信号：<?php echo GET_BLOCK('kf_wx');?>）</div>
    </div>
</div>
<section class="tips">
    <p class="p">暂无安卓版本</p>
</section>
<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/swiper.min.js"></script>
<script>
    $(function(){
        var phone;
        var myreg = /^1[34578]\d{9}$/;
        function os() {
            if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
                return 1;
            } else if (/(Android)/i.test(navigator.userAgent)) {
                return 2;
            } else {
                return 2;
            };
        }
        os();
        var u = navigator.userAgent;
        var ua = u.toLowerCase();
        var isWxin = ua.match(/MicroMessenger/i)=="micromessenger";
        function is_weixn(){
            // if(isWxin){
            //     $('.wx_pop').show();
            // }else {
            //     if(os() == 1){
            //         location.href="<?php echo GET_BLOCK('ios_download_url');?>";
            //     }else{
            //         location.href="<?php echo GET_BLOCK('android_download_url');?>";
            //     }
            // }
        };
        // ios 信任引导
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
        var timer=null;
        function is_weixin() {
            if (ua.match(/MicroMessenger/i) == "micromessenger") {
                return true;
            } else {
                return false;
            }
        }
        var isWeixin = is_weixin();
        var mySwiper2 = new Swiper ('#show-swiper', {
            autoplay: 3000,
            loop : false,
            autoplayStopOnLast : true,
            // 如果需要分页器
            pagination: '.show-pagination',
            bulletActiveClass : 'show-active',
            onSlideChangeStart: function(swiper){
                if(swiper.activeIndex==0) $(".text").show();
                else $(".text").hide();
            }
        });

        var android_url_fg = "<?php echo GET_BLOCK('android_download_url');?>";
        var android_url_zs = "<?php echo GET_BLOCK('android_download_url_zs');?>";
        var ios_url = "<?php echo GET_BLOCK('ios_download_url');?>";

        if(isiOS){
            $(".yuyue_android").hide();
            $(".yuyue_ios").show();
            if(ios_url){
                $("#yuyue_ios")[0].dataset.ios = ios_url;
            }

        }
        if(isAndroid){
            $(".yuyue_ios").hide();
            $(".yuyue_android").show();
            if(android_url_fg){
                $("#yuyue_fg")[0].dataset.android = android_url_fg;
            }
            if(android_url_zs){
                $("#yuyue_zs")[0].dataset.android = android_url_zs;
            }
        }
        var bok = false;
        <?php echo GET_BLOCK('m_jscode');?>

        $('#yuyue_ios,#yuyue_fg,#yuyue_zs').click(function(ev) {
            var url='';
            if(!bok){
                if(isWeixin){
                    $(".wx_pop").show();
                    return;
                }
            }else{
                if(isWeixin){
                    if(isAndroid){
                        $(".wx_pop").show();
                        return;
                    }
                }
            }

            if(isiOS){
                $(".popup-bg,.popup-setup,.ios_box").show();
                $(".popup-plan span").css("width","0%");
                var sWidth=$('.popup-plan').width();
                //进度条的速度，越小越快
                var speed = 1000;
                bar = setInterval(function(){
                    nowWidth = parseInt($(".popup-plan span").width());
                    //宽度要不能大于进度条的总宽度
                    if(nowWidth<=sWidth*1){
                        barWidth = (nowWidth + sWidth/20)+"px";
                        $(".popup-plan span").css("width",barWidth);
                    }else{
                        //进度条读满后，停止
                        clearInterval(bar);
                        $(".popup-plan").addClass("popup-end").html("安装完成");
                        //$(".popup-btn").html("<a href='prefs:root=General&path=ManagedConfigurationList'>安装完成，前往企业证书</a>")
                        $(".popup-btn").html("<a href='javascript:;'>安装完成</a>");
                        $('.popup-btn a').on('click',function(){
                            $(".popup-bg,.popup-setup,.ios_box").hide();
                        });
                    }
                },speed);
                var mySwiper = new Swiper ('#hide-swiper', {
                    autoplay: 6000,
                    loop : false,
                    autoplayStopOnLast : true,
                    // 如果需要分页器
                    pagination: '.swiper-pagination',
                    bulletActiveClass : 'slide-active',
                })
                url=$(this).attr("data-ios");
                window.location.href=url;
            }

            if(isAndroid){
                url=$(this).attr("data-android");
                if(url == ''){
                    if($('.tips').css('display')=='block'){
                        clearTimeout(timer);
                    }
                    $('.tips').show();
                    timer=setTimeout(function(){
                        $('.tips').hide();
                    },3000)
                }else{
                    window.location.href=url;
                }
            }
        });

        $('.wx_pop').on('click',function(){
            $('.wx_pop').hide();
        });
        // $('#yuyue').on('click',function(){
        //     is_weixn();
        // });
        $('.type div').on('click',function(){
            $('.type div').removeClass('on');
            $(this).addClass('on');
        });


        //页面视频
        $('.video_btn_link').click(function(){
            var vedioSrc = this.name;
            if(vedioSrc){
                $('.s_p_k video').attr('src',vedioSrc);
                $('.zhezao,.s_p_k').show();
            }else{
                alert("敬请期待！");
            }
        })
        $(".close,.zhezao").on("click", function(e){
            $('.s_p_k video').attr('src','');
            $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
            e.stopPropagation();
        });
        //版权自动年份
        var d = new Date();
        $('.copy-year').html(d.getFullYear());
    });


</script>
</body>
</html>