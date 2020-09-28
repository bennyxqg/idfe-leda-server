<!DOCTYPE html>
<html lang="en">

<?php 
    $baseInfo = $this->Base->getSiteInfo($site_id);
    $title = '网站标题';
    $keywords = '';
    $description = '';
    $icon = '';
    if($baseInfo) {
        if($baseInfo['name']) {
            $title = $baseInfo['name'];
        }
        if($baseInfo['keywords']) {
            $keywords = $baseInfo['keywords'];
        }
        if($baseInfo['description']) {
            $description = $baseInfo['description'];
        }
        if($baseInfo['icon']) {
            $icon = $baseInfo['icon'];
        }
    }
?>

<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/index.css">
    <link rel="icon" href="http:<?php echo($icon);?>" type="image/x-icon">
    <title><?php echo($title);?></title>
    <meta name="keywords" content="<?php echo($keywords);?>">
    <meta name="description" content="<?php echo($description);?>">

</head>

<body>
    <div class="pcreserve">
        <div class="warp warp02">
            <div class='module-list-wrap'>
                <?php
                $module_list = $config_json['moduleList'];
                foreach ($module_list as $module) {
                    $type = $module['type'];
                    require $type . '.ctp';
                }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
    <script src="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/art-template/4.13.2/lib/template-web.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7ae13368159d6a513eaa7a17b9413b4b"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/js/index.js"></script>
    <script>
        var hostDomain = "//<?php echo $_SERVER['HTTP_HOST']; ?>"
        // var_dump($site_id);
        var popupList = []
        <?php 
            $popupList = $this->Base->getPopupInfo($site_id);
            if($popupList && count($popupList) > 0) {
                echo 'popupList='.json_encode($popupList);
            }
        ?>
        
    </script>
    <script>
        
        $(function() {
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