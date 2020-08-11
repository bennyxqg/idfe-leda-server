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
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/share.swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/share.style.css"  />
<style type="text/css">
    #content{width:640px;margin:0 auto;position:relative;height:auto;background:url(<?php echo GET_BLOCK('share_mainbg');?>) #ebae54 top center no-repeat;background-size:100% auto;}
</style>
</head>

<body>
<div id="content">
    <div class="top">
        <div class="logo">
            <img src="<?php echo GET_BLOCK('game_icon');?>" />
            <?php echo GET_BLOCK('mobile_top_title');?>
            <!--
            <h2>梦幻花园</h2>
            <p>模拟经营与消除完美融合的休闲游戏</p>
            -->
        </div>
        <a class="down" target="_blank" href="/download"></a>
    </div>
    <div class="pr main1">
        <a class="downBtn" target="_blank" href="/download"><img src="<?php echo GET_BLOCK('share_download');?>"></a>
    </div>
    <div class="main5">
        <div class="wrap">
            <img src="<?php BASE_URL() ?>images/teseTit.jpg">
             <div class="swiper-tese">
                <div class="swiper-wrapper">
                    <?php
                        $data = GET_BLOCK('share_swiper');
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
            </div>
        </div>
    </div>

    <a class="video_btn_link" href="javascript:;" name="<?php echo GET_BLOCK('share_video');?>"><img src="<?php BASE_URL() ?>images/video.jpg"></a>

    <div class="footer">
        Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技股份有限公司<br>版权所有 粤ICP备11018438号
    </div>

    <div class="clearfix"></div>

</div>



<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/js/edata.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    function getParam(_n){
         var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
         var r = window.location.search.substr(1).match(reg);
             if(r!=null) return  decodeURIComponent(r[2]); return null;
    }
    //游戏特色
    var swiper = new Swiper('.swiper-tese', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop : true,
        coverflow: {
            rotate: 0,
            stretch: 168,
            depth: 200,
            modifier: 1,
            slideShadows : true
        },
    });

    //版权自动年份
    var d = new Date()
    $('.copy-year').html(d.getFullYear())

    //数据统计
    var channel = getParam("id");
    if(channel){
        $(".down").attr("href","/download?channel="+channel);
        $(".downBtn").attr("href","/download?channel="+channel);
    }
    var page_id = "official_downloadpage";
        //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao,.s_p_k').show();
        sToEdata("play_video",page_id,channel);
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.zhezao').hide();
        e.stopPropagation();
    });
    //页面访问量
    sToEdata("show_page",page_id,channel);
    $(".down").click(function(){
        sToEdata("download_rightnow_btn",page_id,channel);
    });
    $(".downBtn").click(function(){
        sToEdata("download_android_btn",page_id,channel);
    });
})
</script>
</body>
</html>
