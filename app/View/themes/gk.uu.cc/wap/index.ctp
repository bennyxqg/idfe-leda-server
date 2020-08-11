<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';

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

?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?v=23040128"  />
<link rel="shortcut icon" href="//gk.uu.cc/gk.uu.cc/yuyue/favicon.ico">
</head>

<body>
<div id="content">
    <?php require_once '_top.ctp';?>
    <div class="pr main1">
         <div class="topbar">
             <span ><img src="<?php BASE_URL() ?>images/w_logo.png"/></span>
             <!--<a href="/home"><img src="<?php BASE_URL() ?>images/gohome.png"/></a>-->
         </div>
         <a class="yuyueBtn" href="javascript:;"></a>
         <div class="yuyueNum">已经有<strong id="collectPhoneNum">loading..</strong>人预约</div>

    </div>

    <div class="main2">
        <div class="wrap">
        <div class="item-tit"><img src="<?php BASE_URL() ?>images/w_m2_title.png"></div>
        <!--<ul class="giftList">
            <li id="jl1" class="gray">
                <p></p>
                <img src="<?php BASE_URL() ?>images/yy_p1.png" />
            </li>
            <li id="jl2" class="gray">
                <p></p>
                <img src="<?php BASE_URL() ?>images/yy_p2.png" />
            </li>
            <li id="jl3" class="gray">
                <p></p>
                <img src="<?php BASE_URL() ?>images/yy_p3.png" />
            </li>
            <li id="jl4" class="gray">
                <p></p>
                <img src="<?php BASE_URL() ?>images/yy_p4.png" />
            </li>
            <li id="jl5" class="gray">
                <p></p>
                <img src="<?php BASE_URL() ?>images/yy_p5.png" />
            </li>
        </ul>-->
        </div>
    </div>


    <div class="main3">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/w_m3_title.png"></div>

            <a class="video_btn_link" href="javascript:;" name="http://gimg.gamdream.com/market/mv/gk_index.mp4"><img src="<?php BASE_URL() ?>images/w_m3_video.png" /></a>

            <div class="vedioTxt">
                在最近的一次流星雨过后，似乎有什么东西正在唤醒休眠中腐败水晶。<br/>
                混沌军团回来了并且比以前更强大。<br/>
                在此号召守卫者们，加入战斗，招募史诗英雄，<br/>
                建立你的王国来粉碎混沌军团。<br/>
                联合你们力量与世界各地的守护者建立联盟，并肩战斗！
            </div>

            <a class="videoMore clearfix" href="/home"></a>

        </div>
    </div>

    <div class="main4">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/w_m4_title.png"></div>
            <div class="roleTxt">
                <p>使用独特而强大的传奇英雄，来帮助你击败混乱军团和你的敌人</p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/w_m4-1.png" alt="..."></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/w_m4-2.png" alt="..."></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/w_m4-3.png" alt="..."></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/w_m4-4.png" alt="..."></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/w_m4-5.png" alt="..."></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/w_m4-6.png" alt="..."></div>
                </div>
            </div>
            <a class="moreHeroes" href="/game_list"></a>
        </div>
    </div>


    <div class="main5">
        <div class="wrap">
            <div class="item-tit"><img src="<?php BASE_URL() ?>images/w_m5_title.png"></div>
            <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <?php
                        $data = GET_BLOCK('m_index_run');
                        if(!empty($data)){
                            $dataArr = explode(",",$data);
                            $str = '';
                            foreach ($dataArr as $v) {
                                $str .= '<div class="swiper-slide" style="background-image:url('.$v.')"></div>';
                            }
                            echo $str;
                        }
                    ?>

                </div>
                <div class="swiper-pagination"></div>
                <!--<div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>-->
            </div>
            <div class="tj"></div>
        </div>
    </div>

    <?php require_once '_footer2.ctp';?>

    <div class="clearfix"></div>

</div>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<div class="yuyuePop">
    <a class="close"></a>
    <div class="and_pop" style="display:none">
        <div class="yuyueTips">输入手机号，即可预约成功</div>
        <input id="phoneNum" class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
        <a class="yuyueGo" id="yuyueGo" href="javascript:;">立即预约</a>
    </div>
    <div class="ios_pop" >
        <div class="ios_tips">IOS不删档测试已经开启，请进入官网 <br/> 或前往APP STORE下载</div>
        <a class="yuyueGo" id="ios_dl" href="<?php echo GET_BLOCK('ios_download_url');?>">立即下载</a>
    </div>
</div>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/js/edata.js"></script>
<script>
function getParam(_n){
     var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
         if(r!=null) return  decodeURIComponent(r[2]); return null;
}
$(document).ready(function(){
    // jQuery(".demo").slider({mainCell:".loop ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:12});
    $("#ios_dl").click(function(){
        sToEdata("download_ios");
    });
    // 英雄
    var mySwiper = new Swiper ('.swiper-container', {
        autoplay:1,//自动滚动
        autoplayDisableOnInteraction: false,
        loop:true,//循环
        speed:2000,//滚动速度
        slidesPerView : 4,//slide可见数量
        spaceBetween : 10//slide之间的距离（单位px）
    })
    //游戏特色
    var swiper = new Swiper('.swiper-tese', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop : true,
        pagination: '.swiper-pagination',
        // autoplay: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        coverflow: {
            rotate: 30,
            stretch: 190,
            depth: 200,
            modifier: 1,
            slideShadows : true
        },
    });

    //顶部导航
    $('.burger').click(function(){
        if (!$(this).hasClass('open')) {
            openMenu();
        } else {

            closeMenu();
        }
    })

    $('.menu ul li a').click(function(e){
        //e.preventDefault();
        closeMenu();
    });
    function openMenu() {
        $('div.burger').addClass('open');
        $('div.x, div.z').addClass('collapse');
        $('.menu,div.menu-bg').fadeIn();
        setTimeout(function () {
            $('div.y').hide();
            $('div.x').addClass('rotate30');
            $('div.z').addClass('rotate150');
        }, 70);
        setTimeout(function () {
            $('div.x').addClass('rotate45');
            $('div.z').addClass('rotate135');
        }, 120);
    }
    function closeMenu() {
        $('.menu,div.menu-bg').fadeOut();
        setTimeout(function() {
            $('div.burger').removeClass('open');
            $('div.x').removeClass('rotate45').addClass('rotate30');
            $('div.z').removeClass('rotate135').addClass('rotate150');
            setTimeout(function() {
                $('div.x').removeClass('rotate30');
                $('div.z').removeClass('rotate150');
            }, 50);
            setTimeout(function () {
                $('div.y').show();
                $('div.x, div.z').removeClass('collapse');
            }, 70);
        }, 100);
    }

    //微信弹窗
    $(".weixin").click(function(){
      $(".wxPop").toggle();
    });

    //版权自动年份
    var d = new Date()
    $('.copy-year').html(d.getFullYear())


        //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao,.s_p_k').show();
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.yuyuePop,.zhezao').hide();
        e.stopPropagation();
    });




    var code_id,u = navigator.userAgent;
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        code_id = 2;
    }else{
        code_id = 1;
    }
    //预约
    $('.yuyueBtn').click(function(){
        $('.zhezao,.yuyuePop').show();
        if(code_id == 2){//ios
             $('.yuyuePop .ios_pop').show();
             $('.yuyuePop .and_pop').hide();
        }else{
             $('.yuyuePop .ios_pop').hide();
             $('.yuyuePop .and_pop').show();
        }
    })
    var phone;
    var myreg = /^1[34578]\d{9}$/;
    $('#yuyueGo').click(function(){
        phone = $('.yuyue_ipt').val();
        if(phone == ''){
            alert('请输入手机号哦！');
            }else{
            if(!myreg.exec(phone)){
                alert('您输入的手机号码不对哦！');
                }else{
                    $.ajax({
                    type:"POST",
                    url:"/collect_phone",
                    data:{phone:phone,collect_name:<?php echo $site_id;?>,code_id:code_id},
                    dataType:"json",
                    success:function(res){
                        if(res.ret == 2){
                            alert("您已经参加过预约！");
                        }else if(res.ret == 0){
                            alert("恭喜您预约成功并获得豪华礼包，奖励将在游戏上线后通过短信发放！");
                        }else{
                            alert("预约失败！");
                        }
                  }
            });
            }
        }
    })

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
        if (num >= 10000) {
            $("#jl1").removeClass('gray');
        }
        if (num >= 50000) {
            $("#jl2").removeClass('gray');
        }
        if (num >= 100000) {
            $("#jl3").removeClass('gray');
        }
        if (num >= 200000) {
            // $("#jl4").removeClass('gray');
            $('.main2').css({
                "background-image":"url(<?php BASE_URL() ?>images/w_m2_bg2.png)"
            })
        }
        if (num >= 300000) {
            // $("#jl5").removeClass('gray');
            $('.main2').css({
                "background-image":"url(<?php BASE_URL() ?>images/w_m2_bg1.png)"
            })
        }
    }
    getCollectPhoneNum();
    var from = getParam("from");
    if(from == "android_download"){
        $(".yuyueBtn").click();
    }
});
</script>
</body>
</html>