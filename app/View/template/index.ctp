<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/storm/gamemode/css/v1.1.1/index-pc.css">
    <!-- <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/swiper.min.css"> -->
    <link rel="stylesheet" href="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.css">

    <link rel="shortcut icon" id="head-game-icon" href="">
    <title>网站标题</title>
    <meta name="keywords" content="弓箭手大冒险官方网站">
    <meta name="description" content="2020年新款清新奇幻射箭创意游戏！！">

</head>

<body>
<div class="pcreserve">
    <div class="warp warp02">
        <div class="swiper-div">
            <div class="feature-swiper">
                <?php
                    foreach($this->Base->showData(10,'imgs') as $val){
                        echo '<div class="swiper-wrapper" src="$val">'
                    }
                ?>
                <div class="swiper-wrapper">
                  <!-- <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="background: rgba(0, 0, 0, 0); transition-duration: 0ms; transform: translate3d(0px, 0px, -300px) rotateX(0deg) rotateY(150deg); z-index: -2;"><img class="feature-swiper-image" src="http://oaa.uu.cc/manage/upload/image/oaa.uu.cc/2019-12-30/20191230_145803_930887.jpg"><div class="swiper-slide-shadow-left" style="opacity: 3; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                 </div> -->
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
     </div>
</div>

<script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
<script src="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.js"></script>

<script>
 
    setTimeout(function(){ 

    var mySwiper = new Swiper ('.warp01 .news-swiper', {
         pagination: {
            el: '.swiper-pagination',
         },
        observer:true,
        observeParents:true

    });

    var feature = new Swiper ('.feature-swiper', {
        // initialSlide :0,
        effect: 'coverflow',
        // grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        // autoplay : true,
        loop : true,
         navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
         },
         pagination: {
            el: '.swiper-pagination',
         },
        // pagination: '.feature-paination',
        coverflow: {
            rotate: 50,
            stretch: 20,
            depth: 120,
            modifier: 1,
            slideShadows:true
        },
        observer:true,//修改swiper自己或子元素时，自动初始化swiper 
        observeParents:false,//修改swiper的父元素时，自动初始化swiper 
        grabCursor : false,
        onSlideChangeEnd: function(swiper){ 
　　　     swiper.update();  
　　　     swiper.startAutoplay();
　　      swiper.reLoop();  
        }
    })
        


    }, 600);

    
</script>
</body>

</html>


