<html>
<head>
    <meta charset="utf-8">
    <meta name="baidu-site-verification" content="w8PW4Csvlk" />
    <?php
        $this->Website->init();
        echo '<title>'.GET_BLOCK('web_title').'</title>';
        echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
        echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php FILE_PATH() ?>/css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php FILE_PATH() ?>/200.png">
</head>

<body>
    <?php require_once '_top.ctp';?>
    <div class="banner_box">
        <div class="wrap">
            <a class="logo" href="javascript:;"><img src="/ff.uu.cc/images/logo.png" alt=""></a>
            <div class="video_bg">
                <a class="video_btn vedio_box" href="javascript:;" name="<?php echo GET_BLOCK('banner_video');?>"></a>
            </div>
            <div class="down_text">
                <div class="download_box">
                    <a href="<?php echo GET_BLOCK('ios_download_url');?>"><img src="<?php FILE_PATH() ?>/images/ios.png" alt=""></a>
                    <a href="<?php echo GET_BLOCK('android_download_url');?>"><img src="<?php FILE_PATH() ?>/images/an.png" alt=""></a>
                </div>
                <!--<p class="text">版本信息：当前版本1.3.5版本，容量120M，更新时间2018年8月30日</p>-->
            </div>
        </div> 
    </div>
    <?php require_once '_footer.ctp';?>
    <div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<script type="text/javascript" src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script>
<script>
    $(document).ready(function(){
        // 最新资讯 banner
        // var mySwiper =  new Swiper('#banner1',  {
        //     autoplay:3000,//自动滚动
        //     autoplayDisableOnInteraction: false,
        //     loop:true,//循环
        //     speed:1000,//滚动速度
        //     pagination: '.swiper-pagination1',
        // });

        //微信
        var wxin_dl = $(".wxin");
        var wxin_pd = $(".wxin_pop");
        var qqun_dl = $(".qqun");
        var qqun_pd = $(".qq_pop");
        wxin_dl.hover(function() {
            wxin_pd.addClass("wxin_pop_show");
        }, function() {
            wxin_pd.removeClass("wxin_pop_show");
        });
        qqun_dl.hover(function() {
            qqun_pd.addClass("wxin_pop_show");
        }, function() {
            qqun_pd.removeClass("wxin_pop_show");
        });
        //页面视频
        $('.vedio_box').click(function(){
            var vedioSrc = this.name;
            $('.s_p_k video').attr('src',vedioSrc);
            $('.zhezao').show();
            $('.s_p_k').show();
        })
        $('.close,.zhezao').click(function(){
            $('.s_p_k video').attr('src','');
            $('.s_p_k').hide();
            $('.pop-yuyue').hide();
            $('.zhezao').hide();
        });
    });
</script>  
</body>
</html>

