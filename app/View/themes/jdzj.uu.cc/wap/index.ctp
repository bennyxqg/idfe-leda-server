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
<link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/index.css"  />
<script src="<?php FILE_PATH(); ?>/wap/js/jweixin-1.0.0.js"></script>
<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/favicon.ico">
</head>

<body>
<div id="index">
    <?php require_once 'top.ctp';?>
    <div class="main1">
        <div class="slogan">
            <img src="<?php FILE_PATH(); ?>/wap/images/title.png" alt="">
            <a href="javascript:;" class=" layer video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>"></a>
            <!--<a href="javascript:;" class=" layer video_btn_link" name="http://dl.uu.cc/static/download1/mhhy/1280x720_xiaomi_2.mp4"></a>-->
        </div>
    </div>
    <div class="main2">
        <div class="title"><img src="<?php FILE_PATH(); ?>/wap/images/news_title.png" alt=""></div>
        <div class="banner_box">
            <div class="banner">
                <div id="banner1" class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide"><a href="@@STR1@@"><img width="704" height="350" src="<?php FILE_PATH(); ?>/wap/images/title.png" alt="b"></a></div>
                        <div class="swiper-slide"><a href="@@STR1@@"><img width="704" height="350" src="<?php FILE_PATH(); ?>/wap/images/title.png" alt="b"></a></div>-->
                        <?php
                            SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@"><img width="704" height="350" src="@@STR2@@" alt="banner"></a></div>',
                            'Y-m-d',5);
                         ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
            </div>
        </div>
        <div class="news">
            <div class="news_title">
                <a class="active" href="javascript:void(0);">最新</a>
                <a href="javascript:void(0);">新闻</a>
                <a href="javascript:void(0);">公告</a>
                <a href="javascript:void(0);">活动</a>
                <a href="javascript:void(0);">攻略</a>
            </div>
            <div class="count off">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('新闻','公告','攻略'),5,0,array('LimitFrom'=>0, 'OrderBy' => '`sort`'));
                    ?>
                </ul>
                <a class="subFooter" href="/news/0.html">查看更多 &nbsp;&nbsp;</a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','新闻',5,0,array('LimitFrom'=>0, 'OrderBy' => '`sort`'));
                    ?>
                </ul>
                <a class="subFooter" href="/news/1.html">查看更多 &nbsp;&nbsp;</a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','公告',5,0,array('LimitFrom'=>0, 'OrderBy' => '`sort`'));
                    ?>
                </ul>
                <a class="subFooter" href="/news/2.html">查看更多 &nbsp;&nbsp;</a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','活动',5,0,array('LimitFrom'=>0, 'OrderBy' => '`sort`'));
                    ?>
                </ul>
                <a class="subFooter" href="/news/3.html">查看更多 &nbsp;&nbsp;</a>
            </div>
            <div class="count">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','攻略',5,0,array('LimitFrom'=>0, 'OrderBy' => '`sort`'));
                    ?>
                </ul>
                <a class="subFooter" href="/news/3.html">查看更多 &nbsp;&nbsp;</a>
            </div>
        </div>
    </div>
    <div class="main3">
        <div class="title"><img src="<?php FILE_PATH(); ?>/wap/images/game_title.png" alt=""></div>
        <div class="sliderBox">
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <!--<div class="swiper-slide"><a href="javascript:;"> <img src="<?php FILE_PATH(); ?>/wap/images/title.png" width="592" height="972"></a></div>
                    <div class="swiper-slide"><a href="javascript:;"> <img src="<?php FILE_PATH(); ?>/wap/images/title.png" width="592" height="972"></a></div>-->
                    <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;"><img src="@@STR1@@" width="592" height="972"></a></div>',
                        'Y-m-d',1);
                        ?>
                </div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination swiper-pagination2"></div>
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="main4">
        <div class="title"><img src="<?php FILE_PATH(); ?>/wap/images/airport_title.png" alt=""></div>
        <div class="tabs">
            <a href="javascript:;" class="active">战机</a>
            <a href="javascript:;">僚机</a>
        </div>
        <ul class="on">
            <!--<li><a href="javascript:;"><img src="<?php FILE_PATH(); ?>/wap/images/fj1.png" alt=""></a><p>紫娘</p></li>-->
            <?php
                SHOW_DATAS('<li><a href="@@STR1@@"><img width="169" height="142" src="@@STR2@@" alt=""></a><p>@@STR3@@</p></li>',
                'Y-m-d',6);
                ?>
        </ul>
        <ul>
            <?php
                SHOW_DATAS('<li><a href="@@STR1@@"><img width="169" height="142" src="@@STR2@@" alt=""></a><p>@@STR3@@</p></li>',
                'Y-m-d',7);
                ?>
        </ul>
    </div>
    <div class="main5">
        <div class="title"><img src="<?php FILE_PATH(); ?>/wap/images/video_title.png" alt=""></div>
        <div class="tabs">
            <a href="javascript:;" class="active">宣传片</a>
            <a href="javascript:;">游戏攻略</a>
            <a href="javascript:;">游戏直播</a>
        </div>
        <ul class="on">
            <!--<li><a href="javascript:;"><div></div><img src="<?php FILE_PATH(); ?>/wap/images/fj1.png" alt=""></a><p>紫娘</p></li>-->
            <?php
                // SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img width="357" height="214" src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',2,4);
                SHOW_DATAS('<li><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><div></div><img width="325" height="164" src="@@STR1@@" alt=""></a><p>@@STR3@@</p></li>','m-d',2,4,0,array('LimitFrom'=>0, 'OrderBy' => '`int1` asc'));
            ?>
        </ul>
        <ul>
            <?php
                SHOW_DATAS('<li><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><div></div><img width="325" height="164" src="@@STR1@@" alt=""></a><p>@@STR3@@</p></li>','m-d',3,4,0,array('LimitFrom'=>0, 'OrderBy' => '`int1` asc'));
            ?>
        </ul>
        <ul>
            <?php
                // SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img width="357" height="214" src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',2,4);
                SHOW_DATAS('<li><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><div></div><img width="325" height="164" src="@@STR1@@" alt=""></a><p>@@STR3@@</p></li>','m-d',4,4,0,array('LimitFrom'=>0, 'OrderBy' => '`int1` asc'));
            ?>
        </ul>
        <a class="subFooter" href="/vediocenter/2.html">查看更多 &nbsp;&nbsp;</a>
    </div>
    <?php require_once 'footer.ctp';?>
    <script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/swiper.min.js"></script>
    <script>
        $(function(){
            var h = 0;
            $('.libao,#yuyue').on('click',function(){
                h = $(document).scrollTop();
                $('.phone_box,.zhezao,.phone_ios').show();
                var Height = $(window).height();
                $('#index').css({'position': 'absolute','height':Height});
                $('.phone_box,.phone_ios').css({'height': Height});
            });
            $('.close2').on('click',function(){
                $('#index').css({'position': 'relative','height':''});
                $("body,html").animate({scrollTop:h},1).find('.phone_box,.phone_ios').hide();;
                setTimeout(function(){
                    $('.zhezao').hide();
                },3);

            });
            var phone;
            var myreg = /^1[34578]\d{9}$/;
            function os() {
                if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
                    $('.ios').addClass('on');
                    $('#pop').addClass('phone_ios');
                    return 1;
                } else if (/(Android)/i.test(navigator.userAgent)) {
                    $('.andoid').addClass('on');
                    $('#pop').addClass('phone_box');
                    return 2;
                } else {
                    $('.andoid').addClass('on');
                    $('#pop').addClass('phone_box');
                    return 2;
                };
            }
            os();
            $('.type div').on('click',function(){
                $('.type div').removeClass('on');
                $(this).addClass('on');
            })
            
            //版权自动年份
            var d = new Date();
            $('.copy-year').html(d.getFullYear());
        });
    </script>
</div>

<div id="pop">
    <div class="phone">
        <span class="close2"></span>
        <div class="type">
            <div class="andoid fl">
                <i></i>
                <span>Andoid</span>
            </div>
            <div class="ios fr">
                <i></i>
                <span>IOS</span>
            </div>
        </div>
        <input id="phoneNum" class="yuyue_ipt" name="phone" type="tel" maxlength="11" placeholder="请输入手机号码" />

        <a class="yuyue-go"  id="yuyue_go" href="javascript:;">立即预约</a>
    </div>
</div>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" playsinline="" x-webkit-airplay="" x5-video-player-fullscreen="true" x5-video-player-type="h5" 
            x5-video-orientation="portrait"  width="100%" style="background:#000;" height="100%" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script>
    $(document).ready(function(){
        // 最新资讯 banner
        var mySwiper = new Swiper('#banner1', {
            // autoplay:6000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            speed:1000,//滚动速度
            pagination: '.swiper-pagination1',
        });

        var swiper = new Swiper('.swiper-tese', {
            loop:true,//循环
            speed:800,//滚动速度
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pagination: '.swiper-pagination2',
        });
        $('.main4 .tabs a ,.main4 .tabs a').on('click',function(){
            $('.main4 .tabs a ,.main4 .tabs a').removeClass('active');
            $(this).addClass('active');
            $('.main4 ul').removeClass('on');
            $('.main4 ul').eq($(this).index()).addClass('on');
        })
        $('.main5 .tabs a ,.main5 .tabs a').on('click',function(){
            $('.main5 .tabs a ,.main5 .tabs a').removeClass('active');
            $(this).addClass('active');
            $('.main5 ul').removeClass('on');
            $('.main5 ul').eq($(this).index()).addClass('on');
        })
        // var swiper = new Swiper('.swiper-tese', {
        //     effect: 'coverflow',
        //     grabCursor: true,
        //     centeredSlides: true,
        //     slidesPerView: 'auto',
        //     loop : true,
        //     // pagination: '.swiper-pagination',
        //     // autoplay: true,
        //     nextButton: '.swiper-button-next',
        //     prevButton: '.swiper-button-prev',
        //     coverflow: {
        //         rotate: 0,
        //         stretch: 309,
        //         depth: 200,
        //         modifier: 1,
        //         slideShadows : true
        //     },
        // });

        // 新闻选择
        $(".news_title a").on('click',function(e){
            e.preventDefault()
            $(".news_title .active").removeClass('active')
            $(this).addClass('active')
            $('.news .count').removeClass('off')
            $('.news .count').eq($(this).index()).addClass('off')
        });

        $('.main2 ul li').on('click',function(){
            if($(this).is('.on')){
                $(this).removeClass('on');
            }else{
                $(this).addClass('on');
            }
        });

        //GOTOP
        $("#toTop").click(function() {
            $("body,html").animate({scrollTop:0},800);
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
        });
        $(".close,.zhezao").on("click", function(e){
            $('.s_p_k video').attr('src','');
            $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
            e.stopPropagation();
        }); 
        

    });
</script>
</body>
</html>