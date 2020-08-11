<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/gallery.css" rel="stylesheet" type="text/css">
    <!--<link href="<?php BASE_URL() ?>css/jquery.fullPage.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/lightbox.css" />
    <link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>
    <?php require_once '_top.ctp';?>
    <div id="dowebok" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide main1">
                    <div id="hero">
                        <div id="element1"></div>
                        <div id="element2"></div>
                    </div>
                <div class="wrap">
                    <div class="title_img">
                        <img src="<?php BASE_URL() ?>img/main_title.png?20190312" alt="">
                        <a class="video_btn video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>" title="播放精彩视频" href="javascript:;"></a>
                    </div>
                </div>
                <div class="download_box motion">
                    <div class="box">
                        <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" width="113" height="113" class="qrCode" alt="">
                        <div class="text">
                            <p><img style="margin-bottom: -5px;" src="<?php BASE_URL() ?>img/arrow.png" alt=""> 扫一扫下载</p>
                            <h3>开启废土求生之旅</h3>
                        </div>
                        <div class="download">
                            <a href="<?php echo GET_BLOCK('ios_download_url');?>"><img src="<?php BASE_URL() ?>img/appStore.png" alt="二维码"></a>
                            <a href="<?php echo GET_BLOCK('android_download_url');?>"><img src="<?php BASE_URL() ?>img/android.png" alt="二维码"></a>
                        </div>
                        <a href="javascript:;" class="libao"><img src="<?php BASE_URL() ?>img/libao.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main2">
                <div class="m_title"><img src="<?php BASE_URL() ?>img/main2_title.png" alt=""></div>
                <div class="wrap">
                    <div class="news">
                        <div id="banner1" class="swiper-container banner">
                            <div class="swiper-wrapper">
                                <!--<div class="swiper-slide"><a href="JavaScript:void(0);"><img width="555" height="321" src="<?php BASE_URL() ?>images/gBanner1.jpg" alt="banner"></a></div>-->
                                <?php
                                    SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@"><img width="555" height="321" src="@@STR2@@" alt="banner"></a></div>',
                                    'Y-m-d',0);
                                ?>
                            </div>
                            <!-- 如果需要分页器 -->
                            <div class="swiper-pagination swiper-pagination1"></div>
                        </div>
                        <div class="newsList">
                            <div class="newsMenu">
                                <div class="on">综合</div>
                                <div>新闻</div>
                                <div>公告</div>
                                <div>攻略</div>
                                <!--<div>活动</div>
                                <div>媒体</div>-->
                                <a href="//doomsday.uu.cc/news/1.html" target="_blank" ></a>
                            </div>
                            <div class="count off">
                                <ul>
                                    <!--<li><a href="javascript:void(0);" ><span>【新闻】</span><p>1攻略攻略攻略攻略攻略</p><i>05/12</i></a></li>-->
                                    <?php
                                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('新闻','公告','攻略'),6,0,array('LimitFrom'=>0));
                                    ?>
                                </ul>
                            </div>
                            <div class="count">
                                <ul>
                                    <?php
                                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','新闻',6,0,array('LimitFrom'=>0));
                                    ?>
                                </ul>
                            </div>
                            <div class="count">
                                <ul>
                                    <?php
                                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','公告',6,0,array('LimitFrom'=>0));
                                    ?>
                                </ul>
                            </div>
                            <div class="count">
                                <ul>
                                    <?php
                                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','攻略',6,0,array('LimitFrom'=>0));
                                    ?>
                                </ul>
                            </div>
                            <!--<div class="count">
                                <ul>
                                    <?php
                                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','活动',6,0,array('LimitFrom'=>0));
                                    ?>
                                </ul>
                            </div>
                            <div class="count">
                                <ul>
                                    <?php
                                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','媒体',6,0,array('LimitFrom'=>0));
                                    ?>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main3">
                <div class="m_title"><img src="<?php BASE_URL() ?>img/main3_title.png" alt=""></div>
                <div class="wrap">
                    <div class="swiper-container swiper-tese">
                        <div class="swiper-wrapper">
                        <?php
                            $tpl = '<div class="swiper-slide"><div class="name"><h3>@@STR1@@</h3></div><div class="text"><h3>@@STR2@@</h3><div>@@STR3@@</div></div><img width="424" height="480" src="@@STR4@@" alt=""></div>';
                            SHOW_DATAS($tpl, 'Y-m-d', 7);
                        ?>
                        </div>
                        <!-- 如果需要分页器 -->
                        <div class="swiper-pagination swiper-pagination2"></div>
                    </div>
                    <div class="prop">
                        <div class="main_list">
                            <span class="active">武器</span> |
                            <span>建造</span> |
                            <span>材料</span> 
                        </div>

                        <div class="prop_list on">
                            <div class="name"><h3>武器</h3></div>
                            <?php
                                $tpl = '<div class="text"><h3>@@LABEL@@</h3><div>@@STR2@@</div></div><div class="prop_img"><img src="@@STR3@@" alt=""></div>';
                                SHOW_DATAS($tpl, 'Y-m-d', 4, 1);
                            ?>
                            <img width="424" height="480" src="<?php BASE_URL() ?>img/prop_bg.png" alt="">
                            <span class="more"><a href="game_list" target="_blank" >查看更多+</a></span>
                        </div>

                        <div class="prop_list">
                            <div class="name"><h3>建造</h3></div>
                            <?php
                                $tpl = '<div class="text"><h3>@@LABEL@@</h3><div>@@STR2@@</div></div><div class="prop_img"><img src="@@STR3@@" alt=""></div>';
                                SHOW_DATAS($tpl, 'Y-m-d', 5, 1);
                            ?>
                            <img width="424" height="480" src="<?php BASE_URL() ?>img/prop_bg.png" alt="">
                            <span class="more"><a href="game_list" target="_blank" >查看更多+</a></span>
                        </div>

                        <div class="prop_list">
                            <div class="name"><h3>材料</h3></div>
                            <?php
                                $tpl = '<div class="text"><h3>@@LABEL@@</h3><div>@@STR2@@</div></div><div class="prop_img"><img src="@@STR3@@" alt=""></div>';
                                SHOW_DATAS($tpl, 'Y-m-d', 6, 1);
                            ?>
                            <img width="424" height="480" src="<?php BASE_URL() ?>img/prop_bg.png" alt="">
                            <span class="more"><a href="game_list" target="_blank" >查看更多+</a></span>
                        </div>
                    </div>
                    <div class="news_img">
                        <div class="name"><h3>生存宝典</h3></div>
                        <?php
                            $tpl = '<a href="@@STR1@@"><img width="100%" src="@@STR2@@" alt=""></a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 8);
                        ?>

                    </div>
                </div>
            </div>
            <div class="swiper-slide main4">
                <div class="m_title"><img src="<?php BASE_URL() ?>img/main4_title.png" alt=""></div>
                <div class="wrap">
                    <div class="box top">
                        <h3><img src="<?php BASE_URL() ?>img/video_title.png" alt=""><a href="/vediocenter/1.html" target="_blank" >查看更多+</a></h3>
                        <ul>
                            <?php
                                $tpl = '<li><img width="365" height="220" src="@@STR3@@" alt=""><a href="javascript:;" class="video_btn_link video_layer" name="@@STR2@@"></a><p>@@STR1@@ </p></li>';
                                SHOW_DATAS($tpl, 'Y-m-d', 2, 3);
                            ?>
                            <!--<li>
                                <img width="365" height="220" src="<?php BASE_URL() ?>img/video-1.png" alt="">
                                <a href="javascript:;" class="video_btn_link video_layer" name="http://gimg.gamdream.com/market/hy.uu.cc/video.mp4"></a>
                                <p> 阿萨德发了就 啊sdfj  </p>
                            </li>-->
                        </ul>
                    </div>
                    <div class="box">
                        <h3><img src="<?php BASE_URL() ?>img/screen_title.png" alt=""><a href="/vediocenter/2.html" target="_blank" >查看更多+</a></h3>
                        <ul>
                            <?php
                                $tpl = '<li><a href="@@STR3@@" data-lightbox="img-group1"><img width="365" height="220" src="@@STR1@@" alt=""></a><p> @@STR2@@ </p></li>';
                                SHOW_DATAS($tpl, 'Y-m-d', 3, 3);
                            ?>
                            <!--<li class="noMargin">
                                <a href="<?php BASE_URL() ?>images/active.png" data-lightbox="img-group1"><img width="365" height="220" src="<?php BASE_URL() ?>images/active.png" alt=""></a>
                                <p> 阿萨德发了就 啊sdfj  </p>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main5">
                <div class="m_title"><img src="<?php BASE_URL() ?>img/main5_title.png" alt=""></div>
                <div class="wrap">
                    <div class="galleryBox">
                        <div class="gallery_container">
                            <!--<a href="javascript:;" class="gallery_item" > <img src="http://hy.uu.cc/hy.uu.cc/img/page_banner.png" width="831" height="472"  @@STR1@@ ></a>-->
                            <?php
                                SHOW_DATAS('<a href="javascript:;" class="gallery_item"> <img src="@@STR1@@" width="831" height="472"></a>',
                                'Y-m-d',1);
                            ?>
                        </div>
                        <div class="swiper-button-prev2 gallery_prev"></div>
                        <div class="swiper-button-next2 gallery_next"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide main6">
                <div class="foot_box">
                    <img src="<?php BASE_URL() ?>img/foot_text.png" alt="">
                    <ul>
                        <li><img class="qrcode" src="<?php echo GET_BLOCK('weixin_qrcode');?>" width="188" height="188" class="qrCode" alt=""><p>官方微信</p></li>
                        <li><img class="qrcode" src="<?php echo GET_BLOCK('weibo_code');?>" width="188" height="188" class="qrCode" alt=""><p>官方微博</p></li>
                        <li class="subBox">
                            <a href="<?php echo GET_BLOCK('android_download_url');?>" class="download">立即下载</a>
                            <p>
                                <img style="margin-bottom: -10px;" src="<?php BASE_URL() ?>img/qq.png" alt=""> 
                                <span>官方QQ1群：<?php echo GET_BLOCK('qq_1');?></span>
                                <a href="<?php echo GET_BLOCK('qq_jump');?>">加入</a>
                            </p>
                            <p>
                                <img style="margin-bottom: -10px;" src="<?php BASE_URL() ?>img/qq.png" alt=""> 
                                <span>官方QQ2群：<?php echo GET_BLOCK('qq_2');?></span>
                                <a href="<?php echo GET_BLOCK('qq_jump2');?>">加入</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <?php require_once '_footer.ctp';?>
            </div>
        </div>
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
        <input id="phoneNum" class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码" />
        <a class="yuyue-go"  id="yuyue_go" href="javascript:;">立即领取</a>
        <!--<a class="yuyue-go" id="ios_dl" href="<?php echo GET_BLOCK('ios_download_url');?>">立即预约</a>-->
    </div>
    <script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
    <script src="http://dl.gamdream.com/market/resource/js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>js/swiper.min.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>js/gallery.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>js/lightbox-2.6.min.js" type="text/jscript"></script>
    <script type="text/javascript">
    function getParam(_n){
         var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
         var r = window.location.search.substr(1).match(reg);
             if(r!=null) return  decodeURIComponent(r[2]); return null;
    }
    // console.log(<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 4);?>)
    $(document).ready(function () {
        var index_box = new Swiper('#dowebok', {
            // pagination: '.swiper-pagination',
            direction: 'vertical',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            mousewheelControl: true,
            onSlideChangeStart: function(s){
                // console.log(s.activeIndex)
                if(s.activeIndex != 0){
                    $('.topNav').addClass('topAcitve');
                    $('.main1 .download_box').addClass('download_none');
                }else{
                    $('.topNav').removeClass('topAcitve');
                    $('.main1 .download_box').removeClass('download_none');
                }
            }
        });
        // 最新资讯 banner
        var mySwiper =  new Swiper('#banner1',  {
            autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            speed:1000,//滚动速度
            pagination: '.swiper-pagination1',
        });
        // 最新资讯 banner
        var swiper =  new Swiper('.swiper-tese',  {
            // autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            // speed:1000,//滚动速度
            // pagination: '.swiper-pagination1',
        });
        // 
        $('.main_list span').on('click',function(){
            $('.main_list span').removeClass('active');
            $(this).addClass('active');
            $('.prop_list').removeClass('on');
            $('.prop_list').eq($(this).index()).addClass('on');
        })
        var plane = document.getElementById('element1');
        var rocket = document.getElementById('element2');
        plane.homePos = {x: plane.offsetLeft, y: plane.offsetTop+10};
        rocket.homePos = {x: rocket.offsetLeft-10, y: rocket.offsetTop};

        $('body').mousemove(function (e) {
            parallax(e, plane, 65);
            parallax(e, rocket, 30);
        });
        function parallax(e, target, layer) {
            var x = target.homePos.x - (e.pageX - target.homePos.x) / layer;
            var y = target.homePos.y - (e.pageY - target.homePos.y) / layer;
            //$(target).offset({ top: y ,left : x });
            $(target).css({transform: "translate3D(" + x + "px, " + y + "px, 0px)"});
        };
        var myGallery = Gallery.create({
                galleryContainer: ".gallery_container",
                slidesPerView:5,
                gallery_prev:'.gallery_prev',
                gallery_next:'.gallery_next',
                stretch:0,
                initialSlide:4,
                depth: 600,
                rotate:0,
                // autoPlay:3000,
                onGalleryStart:function(param){

                },
                onGalleryEnd:function(param){
                    //alert(param.index);
                }
            });
            // console.log(<?=$siteId;?>+'111')
        //功能： 手机号码验证
        function checkPhoneNum(phoneNum) {
            return /^(13|14|15|16|17|18|19)\d{9}$/.test(phoneNum) ? !0 : !1
        }
        //
        $('.libao').on('click',function(){
            $('.mask,.popDate').show();
        });
        $('.yuyue-go').on('click',function(){
            var phone = $("#phoneNum").val();
            if ($('.ios').is('.on')) {
                code_id  = 109;
                code_id2 = 108;
            } else {
                code_id  = 108;
                code_id2 = 109;
            }
            if (phone == "" || phone == undefined) {
                alert("请输入手机号码！");
            } else if (!checkPhoneNum(phone)) {
                alert("请输入正确的手机号码！");
            }else{
                $.ajax({
                    type:"POST",
                    url:"/send_phone_code",
                    data:{phone: phone ,code_id: code_id,union: code_id2},
                    dataType:"json",
                    success:function(res){
                        // if(res.ret == 2){
                        //     alert("您已经参加过预约！");
                        // }else if(res.ret == 0){
                        //     alert("")
                        // }else{
                        //     alert("领取失败！");
                        // }
                        if(res.ret == 0 || res.ret == 11){
                            alert("领取"+res.message)
                        }else{
                            alert(res.message);
                        }
                    }
                });
            }
            
        });

        $('.close,.popRuleClose').click(function () {
            $('.mask,.pop').hide();
        });
        var aA = $('.news .newsMenu div')
        aA.on('click',function(){
            aA.removeClass('on');
            $(this).addClass('on');
            $('.news .newsList .count').removeClass('off');
            $('.news .newsList .count').eq($(this).index()).addClass('off');
        })

        $('.type div').on('click',function(){
            $('.type div').removeClass('on');
            $(this).addClass('on');
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
