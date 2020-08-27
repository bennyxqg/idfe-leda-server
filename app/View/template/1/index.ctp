<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/index.css">
    <link rel="shortcut icon" id="head-game-icon" href="">
    <title>网站标题</title>
    <meta name="keywords" content="弓箭手大冒险官方网站">
    <meta name="description" content="2020年新款清新奇幻射箭创意游戏！！">

</head>

<body>
    <div class="pcreserve">
        <div class="warp warp02">
            <div class='module-list-wrap'>
                <?php
                    $module_list = $config_json['moduleList'];
                    foreach($module_list as $module){
                        $type = $module['type'];
                        require $type.'.ctp';
                    }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
    <script src="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.js"></script>

    <script>
        $(function() {
            $('.swiper-imgNews').each(function(index) {
                console.log($(this).attr('data-json'))
                var configData = $(this).attr('data-json')
                if(configData) {
                    configData = JSON.parse(configData)
                } else {
                    configData = {
                        autoPlay: true,
                        delay: 3000,
                        nav: {type: "1", color: "#ffffff"}
                    }
                }
                if(configData.nav.type == '1') {
                    configData.nav.className = 'line-dots'
                } else {
                    configData.nav.className = 'circle-dots'
                }
                var mySwiper = new Swiper(this, {
                    loop: true, // 循环模式选项
                    autoplay:  configData.autoPlay,
                    delay:  configData.delay,
                    // 如果需要分页器
                    pagination: {
                        el: '.swiper-pagination',
                        renderBullet: function (index, className) {
                            return '<span class="' + className + " " + configData.nav.className + '" style="background-color:'+ configData.nav.color +'"></span>';
                        },
                        clickable: true,
                    },
                })
            })

            $('.imgNews-wrap-inner-news').each(function() {
                var $wrapper = $(this)
                $wrapper.find('.imgNews-news-nav li').click(function() {
                    $(this).siblings('li').removeClass('active')
                    $(this).addClass('active')
                    var index = $(this).index()
                    $wrapper.find('.imgNews-news-list ul').removeClass('show')
                    $wrapper.find('.imgNews-news-list ul').eq(index).addClass('show')
                })

            })
            // var mySwiper = new Swiper( '.swiper-imgNews', {
            //         // loop: true, // 循环模式选项
            //         // 如果需要分页器
            //         pagination: {
            //             el: '.swiper-pagination',
            //         },
            //     })

        })


        // setTimeout(function() {

        //     var mySwiper = new Swiper('.warp01 .news-swiper', {
        //         pagination: {
        //             el: '.swiper-pagination',
        //         },
        //         observer: true,
        //         observeParents: true

        //     });

        //     var feature = new Swiper('.feature-swiper', {
        //         // initialSlide :0,
        //         effect: 'coverflow',
        //         // grabCursor: true,
        //         centeredSlides: true,
        //         slidesPerView: 'auto',
        //         // autoplay : true,
        //         loop: true,
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //         pagination: {
        //             el: '.swiper-pagination',
        //         },
        //         // pagination: '.feature-paination',
        //         coverflow: {
        //             rotate: 50,
        //             stretch: 20,
        //             depth: 120,
        //             modifier: 1,
        //             slideShadows: true
        //         },
        //         observer: true, //修改swiper自己或子元素时，自动初始化swiper 
        //         observeParents: false, //修改swiper的父元素时，自动初始化swiper 
        //         grabCursor: false,
        //         onSlideChangeEnd: function(swiper) {
        //             swiper.update();
        //             swiper.startAutoplay();
        //             swiper.reLoop();
        //         }
        //     })



        // }, 600);
    </script>
</body>

</html>