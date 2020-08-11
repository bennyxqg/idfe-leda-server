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
    <link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/gallery.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>
    <div class="main1">
        <div class="wrap">
            <a class="logo" href="javascript:;"></a>
            <div class="title_img">
                <span class="layer"></span>
                <a class="pa video_btn video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>" title="播放精彩视频" href="javascript:;"></a>

            </div>
            <!--<a href="" class="yuyue">
                <p>已有 <strong id="collectPhoneNum">loading..</strong> 名幸存者集结</p>
            </a>-->
            <div class="download">
                <div class="qrCode">
                    <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" width="112" height="112" alt="二维码">
                    <p>扫码下载游戏</p>
                </div>
                    <a href="<?php echo GET_BLOCK('ios_download_url');?>"><img src="<?php BASE_URL() ?>images/appStore.jpg" alt="二维码"></a>
                    <a href="<?php echo GET_BLOCK('android_download_url');?>"><img src="<?php BASE_URL() ?>images/android.jpg" alt="二维码"></a>
            </div>
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
                        <div>活动</div>
                        <div>媒体</div>
                        <a href="//doomsday.uu.cc/news/2.html"></a>
                    </div>
                    <div class="count off">
                        <ul>
                            <!--<li><a href="javascript:void(0);" ><span>【新闻】</span><p>1攻略攻略攻略攻略攻略</p><i>05/12</i></a></li>-->
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',array('新闻','公告','攻略','活动','媒体'),6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','新闻',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','公告',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','攻略',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','活动',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                    <div class="count">
                        <ul>
                            <?php
                                SHOW_NEWS('<li><a href="@@URL@@" ><span>【@@CATEGORY_NAME@@】</span><p>@@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d','媒体',6,0,array('LimitFrom'=>0));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main3">
        <div class="wrap">
            <div class="title"><img src="<?php BASE_URL() ?>images/pc3_title.png" alt=""></div>
            <div class="galleryBox">
                <div class="gallery_container">

<!--<a href="javascript:;" class="gallery_item" > <img src="http://hy.uu.cc/hy.uu.cc/img/page_banner.png" width="831" height="472"  @@STR1@@ ></a>-->

                    <?php
                        SHOW_DATAS('<a href="javascript:;" class="gallery_item" > <img src="@@STR1@@" width="831" height="472"></a>',
                        'Y-m-d',2);
                    ?>
                </div>
                <div class="swiper-button-prev2 gallery_prev"></div>
                <div class="swiper-button-next2 gallery_next"></div>
            </div>
            <!--<div class="sliderBox">
                <div class="swiper-tese">
                    <div class="swiper-wrapper">
                        <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;"> <img src="@@STR1@@" width="831" height="472"></a></div>',
                        'Y-m-d',2);
                         ?>
                    </div>
                </div>
                <div class="swiper-pagination2"></div>
                <div class="swiper-button-prev2"></div>
                <div class="swiper-button-next2"></div>
            </div>-->
        </div>
    </div>
    <footer id="foot">
        <div class="wrap">
            <div class="box">
                <div class="qrCode"><a href="http://weibo.com/feituxingdong" target="_blank"><img width="104" height="104" src="<?php echo GET_BLOCK('weibo_code');?>" /></a></div>
                <!-- <div class="qrCode"><a href="http://weibo.com/feituxingdong" target="_blank"><img src="<?php BASE_URL() ?>images/22.jpg"></a></div> -->
                <div class="text">
                    <h3>官方微博</h3>
                        <p>扫码关注官方微博</p>
                        <p>微博：废土行动手游</p>
                </div>
            </div>
            <div class="box">
                <div class="qrCode"><img width="104" height="104" src="<?php echo GET_BLOCK('wx_code');?>"></div>
                <div class="text">
                    <h3>微信公众号</h3>
                        <p>扫码关注官方微信公众号</p>
                        <p>废土行动手游</p>
                </div>
            </div>
            <div class="box">
                <div class="qrCode">
                    <div class="img"><a target="_blank" href="https://jq.qq.com/?_wv=1027&k=5VDF5FU"><img src="<?php BASE_URL() ?>images/qq.png" alt=""></a></div>
                </div>
                <div class="text">
                    <h3>官方Q群</h3>
                        <p>399584698</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="nav">
        <!--<a class="goTop" href="javascript:;">返回顶部</a>-->
        <div class="qrCode"><img width="113" height="113" src="<?php echo GET_BLOCK('weixin_qrcode');?>"></div>
        <div class="icons">
            <a href="http://weibo.com/feituxingdong" target="_blank"><img src="<?php BASE_URL() ?>images/weibo.png" alt=""></a>
            <a href="https://tieba.baidu.com/f?fr=wwwt&kw=%E5%BA%9F%E5%9C%9F%E8%A1%8C%E5%8A%A8" target="_blank"><img src="<?php BASE_URL() ?>images/baidu.png" alt=""></a>
            <a href="https://jq.qq.com/?_wv=1027&k=5VDF5FU" target="_blank"><img src="<?php BASE_URL() ?>images/qq.png" height="20" alt=""></a>
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

        <a class="yuyue-go"  id="yuyue_go" href="javascript:;">立即预约</a>
        <!--<a class="yuyue-go" id="ios_dl" href="<?php echo GET_BLOCK('ios_download_url');?>">立即预约</a>-->
    </div>
    <script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
    <script src="http://dl.gamdream.com/market/resource/js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>js/swiper.min.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>js/gallery.js" type="text/jscript"></script>
    <script type="text/javascript">
    function getParam(_n){
         var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
         var r = window.location.search.substr(1).match(reg);
             if(r!=null) return  decodeURIComponent(r[2]); return null;
    }
    
    $(document).ready(function () {
        // 最新资讯 banner
        var mySwiper =  new Swiper('.swiper-container',  {
            autoplay:3000,//自动滚动
            autoplayDisableOnInteraction: false,
            loop:true,//循环
            speed:1000,//滚动速度
            pagination: '.swiper-pagination1',
        });


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
        //功能： 手机号码验证
        function checkPhoneNum(phoneNum) {
            return /^(13|14|15|17|18)\d{9}$/.test(phoneNum) ? !0 : !1
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
            function reach(number){
                for(var i=0; i<number; i++){
                    $('.main2 ul li span').eq(i).addClass('on');
                }
            }
            if (num >= 100000) { reach(1) } ;
            if (num >= 250000) { reach(2) } ;
            if (num >= 500000) { reach(3) } ;
            if (num >= 750000) { reach(4) } ;
            if (num >= 1000000) { reach(5) } ;
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
