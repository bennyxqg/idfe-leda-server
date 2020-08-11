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
    <link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>/favicon.ico">
</head>

<body>
    <?php require_once 'top.ctp';?>
    <div class="main1">
        <video class="banner_video" id="video_banner" src="<?php echo GET_BLOCK('video_link');?>" muted="muted" autoplay="" poster="" src=""></video>
    </div>
    <div class="main2">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>img/main2_title.png" alt=""></div>
            <div class="yuyueVal">
                <div class="box"></div>
                <div class="list">
                    <div class="child">
                        <p><?php echo GET_BLOCK('m2_1');?></p>
                        <span></span>
                    </div>
                    <div class="child">
                        <p><?php echo GET_BLOCK('m2_2');?></p>
                        <span></span>
                    </div>
                    <div class="child">
                        <p><?php echo GET_BLOCK('m2_3');?></p>
                        <span></span>
                    </div>
                    <div class="child">
                        <p><?php echo GET_BLOCK('m2_4');?></p>
                        <span></span>
                    </div>
                    <div class="child margin_r0">
                        <p><?php echo GET_BLOCK('m2_5');?></p>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="vedio-box">
                <img src="<?php BASE_URL() ?>img/video_bg.jpg" alt="">
                <a href="javascript:;" class="video_btn_link video_layer" name="<?php echo GET_BLOCK('video_link2');?>"></a>
            </div>
            <div class="btn_box">
                <a href="<?php echo GET_BLOCK('jianli');?>"></a>
                <?php
                    // SHOW_NEWS('<a href="@@URL@@"><h3>@@DATE@@</h3><p>@@TITLE@@</p><span>+</span></a>','m-d',array('新闻'),6,0,array('LimitFrom'=>0));
                    SHOW_NEWS('<a href="@@URL@@"></a>','m-d',array('综合'),2,0,array('LimitFrom'=>0));
                ?>
            </div>
        </div>
    </div>
    <div class="main3">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>img/main3_title.png" alt=""></div>
            <ul>
                <li class="motion2">
                    <div class="top_img motion"><img src="<?php BASE_URL() ?>img/m3-1.png" alt=""></div>
                    <div class="box">
                        <h3 class="motion2">研发类 <span></span></h3>
                        <?php
                            $tpl = '<a href="@@STR1@@">@@STR2@@</a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 0, 12);
                        ?>
                        <!--<a href="javascript:;">啊大事发生的发</a>-->
                    </div>
                </li>
                <li class="motion2">
                    <div class="top_img motion"><img src="<?php BASE_URL() ?>img/m3-2.png" alt=""></div>
                    <div class="box">
                        <h3 class="motion2">运营策划类 <span></span></h3>
                        <?php
                            $tpl = '<a href="@@STR1@@">@@STR2@@</a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 1, 12);
                        ?>
                    </div>
                </li>
                <li class="motion2">
                    <div class="top_img motion"><img src="<?php BASE_URL() ?>img/m3-3.png" alt=""></div>
                    <div class="box">
                        <h3 class="motion2">美术类 <span></span></h3>
                        <?php
                            $tpl = '<a href="@@STR1@@">@@STR2@@</a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 2, 12);
                        ?>
                    </div>
                </li>
                <li class="motion2">
                    <div class="top_img motion"><img src="<?php BASE_URL() ?>img/m3-4.png" alt=""></div>
                    <div class="box">
                        <h3 class="motion2">市场商务类 <span></span></h3>
                        <?php
                            $tpl = '<a href="@@STR1@@">@@STR2@@</a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 3, 12);
                        ?>
                    </div>
                </li>
                <li class="motion2">
                    <div class="top_img motion"><img src="<?php BASE_URL() ?>img/m3-5.png" alt=""></div>
                    <div class="box">
                        <h3 class="motion2">综合职能类 <span></span></h3>
                        <?php
                            $tpl = '<a href="@@STR1@@">@@STR2@@</a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 4, 12);
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main4">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>img/main4_title.png" alt=""></div>
            <div class="main4_box">
                <div class="left top">
                    <h3 style="color:#9f2629;">北京</h3>
                    <div class="pos_centerY">
                        <!--<a href="javascript:;">阿里的购房款解散<span>1月10月 00:00:00</span></a>-->
                        <?php
                            $tpl = '<a href="@@STR1@@"><p>@@STR2@@</p><span>@@STR3@@</span></a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 5, 6);
                        ?>
                    </div>
                </div>
                <div class="right top">
                    <h3 style="color:#a44c0b;">香港</h3>
                    <div class="pos_centerY">
                        <?php
                            $tpl = '<a href="@@STR1@@"><p>@@STR2@@</p><span>@@STR3@@</span></a>';
                            SHOW_DATAS($tpl, 'Y-m-d', 6, 6);
                        ?>
                    </div>
                </div>
                <div class="subBox">
                    <div class="list">
                        <h3 style="color:#0d8332;">武汉</h3>
                        <div class="list_box">
                            <?php
                                $tpl = '<a href="@@STR1@@"><p>@@STR2@@</p><span>@@STR3@@</span></a>';
                                SHOW_DATAS($tpl, 'Y-m-d', 7, 6);
                            ?>
                        </div>
                    </div>
                    <div class="list">
                        <h3 style="color:#0d67a0;">广州</h3>
                        <div class="list_box">
                            <?php
                                $tpl = '<a href="@@STR1@@"><p>@@STR2@@</p><span>@@STR3@@</span></a>';
                                SHOW_DATAS($tpl, 'Y-m-d', 8, 6);
                            ?>
                        </div>
                    </div>
                    <div class="list end">
                        <div class="subTop">
                            <h3 style="color:#993896;">长沙</h3>
                            <div>
                                <?php
                                    $tpl = '<a href="@@STR1@@"><p>@@STR2@@</p><span>@@STR3@@</span></a>';
                                    SHOW_DATAS($tpl, 'Y-m-d', 9, 6);
                                ?>
                            </div>
                        </div>
                        <div class="subBottom">
                            <h3 style="color:#d8308f;">杭州</h3>
                            <div>
                                <?php
                                    $tpl = '<a href="@@STR1@@"><p>@@STR2@@</p><span>@@STR3@@</span></a>';
                                    SHOW_DATAS($tpl, 'Y-m-d', 10, 6);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.ctp';?>
    <div class="mask"></div>
    <div class="s_p_k" style="<?php echo GET_BLOCK('video_style');?>">
        <video width="100%" style="background:#000;" height="100%" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a>
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
            //监听播放时间
            var video = document.getElementById('video_banner');
            //使用事件监听方式捕捉事件
            video.addEventListener("timeupdate",function(){
                var timeDisplay;
                //用秒数来显示当前播放进度
                timeDisplay = Math.floor(video.currentTime);
                // console.log(Math.floor(video.currentTime))
                //当视频播放到 4s的时候做处理
                if(timeDisplay == 12){
                    video.pause(); //暂停控制
                }
            },false);
            $('.close,.popRuleClose').click(function () {
                $('.mask,.pop').hide();
            });
            //功能： 手机号码验证
            function checkPhoneNum(phoneNum) {
                return /^(13|14|15|17|18)\d{9}$/.test(phoneNum) ? !0 : !1
            }
            $('.type div').on('click',function(){
                $('.type div').removeClass('on');
                $(this).addClass('on');
            });
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
            });
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
