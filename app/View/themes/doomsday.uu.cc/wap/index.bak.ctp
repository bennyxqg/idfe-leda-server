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
    <header>
        <div class="logo">
            <a href="/"><img src="<?php echo GET_BLOCK('game_icon');?>" alt="logo"></a>
            <h1>废土危行</h1>
            <p>多人生存沙盒手游</p>
        </div>
        <div class="libao">
            立即预约
        </div>
    </header>
    <div class="main1">
        <div class="slogan">
            <img src="<?php FILE_PATH(); ?>/wap/images/slogan2.png" alt="slogan">
            <span class="layer"></span>
            <a href="javascript:;" class=" video_btn video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>"></a>
        </div>
        <div class="yuyue"><p>已有 <strong id="collectPhoneNum">loading..</strong> 名幸存者集结</p></div>
    </div>
    <div class="main2">
        <div class="title">
            <img src="<?php FILE_PATH(); ?>/wap/images/p2_title.png" alt="">
        </div>
        <ul>
            <li>
                <span class="reach"></span><img src="<?php BASE_URL() ?>/wap/images/pc2-1.png" alt="">
                <div class="hover">
                    <h3>预约成功获得</h3>
                    <p>蜂蜜*5、木板*10</p>
                    <p>石块*10</p>
                </div>
            </li>
            <li>
                <span class="reach"></span><img src="<?php BASE_URL() ?>/wap/images/pc2-2.png" alt="">
                <div class="hover">
                    <h3>预约成功获得</h3>
                    <p>金撬棍*1</p>
                    <p>金币*50</p>
                </div>
            </li>
            <li>
                <span class="reach"></span><img src="<?php BASE_URL() ?>/wap/images/pc2-3.png" alt="">
                <div class="hover">
                    <h3>预约成功获得</h3>
                    <p>皮革*8</p>
                    <p>精致布*10</p>
                </div>
            </li>
            <li>
                <span class="reach"></span><img src="<?php BASE_URL() ?>/wap/images/pc2-4.png" alt="">
                <div class="hover">
                    <h3>预约成功获得</h3>
                    <p>长刀*1</p>
                </div>
            </li>
            <li>
                <span class="reach"></span><img src="<?php BASE_URL() ?>/wap/images/pc2-5.png" alt="">
                <div class="hover bottom">
                    <h3>预约成功获得</h3>
                    <p>金币*150</p>
                    <p>并抽取一位玩家送出</p>
                    <p>外星人游戏笔记本一台</p>
                </div>
            </li>
        </ul>
        <p class="text">预约成功后，预约达成相应人数即可获得对应公测礼包</p>
    </div>
    <div class="main3">
        <div class="title">
            <img src="<?php FILE_PATH(); ?>/wap/images/p3_title.png" alt="">
        </div>
        <div class="sliderBox">
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <?php
                        SHOW_DATAS('<div class="swiper-slide"><a href="javascript:;"> <img src="@@STR1@@" width="381" height="676"></a></div>',
                        'Y-m-d',3);
                         ?>
                </div>
            </div>
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="foot">
    <div class="qrCode">
        <div class="img">
            <img width="180" height="180" src="<?php echo GET_BLOCK('wx_code');?>">
        </div>
        <div class="text">
            <p class="red">搜索公众号：ftxdgame</p>
            <p>或长按二维码保存至相册，微信中使用扫一扫 > 相册 > 选择二维码图片</p>
        </div>
    </div>
    <ul class="tags">
        <li>
            <a href="http://weibo.com/feituxingdong">
                <img src="<?php FILE_PATH(); ?>/wap/images/weibo2.png" alt="微博">
            </a>
        </li>
        <li>
            <a href="https://tieba.baidu.com/f?fr=wwwt&kw=%E5%BA%9F%E5%9C%9F%E8%A1%8C%E5%8A%A8">
                <img src="<?php FILE_PATH(); ?>/wap/images/baidu2.png" alt="百度">
            </a>
        </li>
        <li>
            <a href="http://bbs.uu.cc/forum-681-1.html">
                <img src="<?php FILE_PATH(); ?>/wap/images/forum2.png" alt="论坛">
            </a>
        </li>
        <!--<li>
            <a id="wechat" href="javascript:void(0);">
                <img src="<?php FILE_PATH(); ?>/wap/images/weixin2.png" alt="微信">
            </a>
        </li>-->
        <li>
            <a href="https://jq.qq.com/?_wv=1027&k=5VDF5FU">
                <img src="<?php FILE_PATH(); ?>/wap/images/qq2.png" alt="qq">
            </a>
        </li>
        <li>
            <a href="javascript:alert('敬请期待！');">
                <img src="<?php FILE_PATH(); ?>/wap/images/kefu2.png" alt="客服">
            </a>
        </li>
    </ul>
    <div id="toTop">返回顶部</div>
</div>
<footer>
    <p>Copyright©2009-<span class="copy-year">2018</span> 深圳市创梦天地科技有限公司 <br/>
                版权所有 粤ICP备11018438号
    </p>
    <!--<p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</p>
    <p>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>-->
</footer>

    <script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/jquery-1.9.1.js"></script>
    <script>
    $(function(){
        var h = 0;
        $('.libao,.yuyue').on('click',function(){
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
            },3)

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
                $('#pop').addClass('phone_');
               return 2;
            };
        }
        os();
        $('.type div').on('click',function(){
            $('.type div').removeClass('on');
            $(this).addClass('on');
        })
        //功能： 手机号码验证
        function checkPhoneNum(phoneNum) {
            // return /^(13|14|15|17|18)\d{9}$/.test(phoneNum) ? !0 : !1
            return /^[1]\d{10}$/.test(phoneNum) ? !0 : !1
        }
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
        //版权自动年份
        var d = new Date();
        $('.copy-year').html(d.getFullYear());
    })
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
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/swiper.jquery.min.js"></script>
<script>
$(document).ready(function(){

    var swiper = new Swiper('.swiper-tese', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop : true,
        // pagination: '.swiper-pagination',
        // autoplay: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        coverflow: {
            rotate: 0,
            stretch: 300,
            depth: 200,
            modifier: 1,
            slideShadows : true
        },
    });

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
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });

});
</script>
</body>
</html>