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
<link href="<?php FILE_PATH() ?>/css/newStyle.css" rel="stylesheet" type="text/css">
<link href="<?php BASE_URL() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
<style>
    .topNav{ position: absolute; }
    #gameData {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
    }
    .swiper1 , .swiper2 ,.swiper3{ width:1020px;-padding:0 70px;margin:0 auto;height:400px;-background:#399; }
    .active_box{ width:500px;margin:138px auto 40px;-height: 236px;-background:#319; overflow: hidden;}
    a.active_list{ margin: 0 auto;float: none;height:auto; }
    .active_box h3{ font-size:26px;color:#20201f;text-align:center;margin:6px 0 18px; }
    .active_box p{ color:#20201f;text-align:center;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 3;overflow: hidden; }
    .list{ width:132px;height:170px;margin:15px 18px ;display:block;float:left; }
    .list div{ width:130px;height:130px;border: 2px solid #fff;border-radius: 12px;text-align: center;background: #494a4e;line-height: 130px; background:#dedede;overflow:hidden; }
    .list div img{ max-width:120px; display: inline-block;vertical-align: middle;}
    .list p{ text-align:center;line-height:30px; font-size:16px;color:#20201f;}
    .swiper-button-next, .swiper-button-prev{ top:65%; }
    div.swiper-button-next { background:url('<?php BASE_URL() ?>/img/arrow-r.png') no-repeat;width:55px;height:89px; }
    div.swiper-button-prev { background:url('<?php BASE_URL() ?>/img/arrow-l.png') no-repeat;width:55px;height:89px; }
    #gameData div.box_pagination{ width:212px;height:178px;position:absolute;left:100px;top:300px;background:url('<?php BASE_URL() ?>/img/box_bg.png') no-repeat;background-size:100% auto;; }
    #gameData div.box_pagination .swiper-pagination-bullet{ border-radius:0;opacity: .8;margin:8px 0 28px 22px;-webkit-transition: all 0.15s ease-in-out;
    -moz-transition: all 0.15s ease-in-out;
    -o-transition: all 0.15s ease-in-out;
    -ms-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out; }
    .box_pagination .swiper-pagination-bullet:nth-child(1){width:113px;height:36px; background:url('<?php BASE_URL() ?>/img/p1_title.png') no-repeat;background-size:100% auto;}
    .box_pagination .swiper-pagination-bullet:nth-child(2){width:115px;height:34px; background:url('<?php BASE_URL() ?>/img/p2_title.png') no-repeat;background-size:100% auto;}
    .box_pagination .swiper-pagination-bullet:nth-child(3){width:108px;height:33px; background:url('<?php BASE_URL() ?>/img/p3_title.png') no-repeat;background-size:100% auto;}
    #gameData div.box_pagination .swiper-pagination-bullet-active{ margin:8px 0 28px 42px; }
</style>
</head>

<body style="background:url(<?php BASE_URL() ?>/img/data_bg.jpg) no-repeat 50% 0;">

<?php require_once '_top.ctp';?>
    <!-- Swiper -->
<div class="swiper-container" id="gameData">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="wrap">
                <div class="active_box active_box1">
                    <!--<a href="javascript:;" class="list active_list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div></a><h3>adsfa但是发</h3><p>ASadsfa但是发DFas</p>-->
                </div>
                <div class="swiper-container swiper1">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide">
                            <a href="javascript:;" class="list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div><p>a大攻防</p></a>
                        </div>
                        <div class="swiper-slide">Slide 2</div>-->
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev1"></div>
                <div class="swiper-button-next swiper-button-next1"></div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="wrap">
                <div class="active_box active_box2">
                    <!--<a href="javascript:;" class="list active_list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div></a><h3>adsfa但是发</h3><p>ASadsfa但是发DFas</p>-->
                </div>
                <div class="swiper-container swiper2">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide">
                            <a href="javascript:;" class="list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div><p>a大攻防</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev2"></div>
                <div class="swiper-button-next swiper-button-next2"></div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="wrap">
                <div class="active_box active_box3">
                    <!--<a href="javascript:;" class="list active_list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div></a><h3>adsfa但是发</h3><p>ASadsfa但是发DFas</p>-->
                </div>
                <div class="swiper-container swiper3">
                    <div class="swiper-wrapper">
                        <!--<div class="swiper-slide">
                            <a href="javascript:;" class="list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div><p>a大攻防</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-prev3"></div>
                <div class="swiper-button-next swiper-button-next3"></div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination box_pagination"></div>
</div>
<script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
<script src="<?php BASE_URL() ?>/js/swiper.min.js" type="text/jscript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var label =  '';
        var str3 = '' ;
        var data = '' ;
        // 
        var pagesize = 12;
        var arr = [<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 4);?>];
        var arr5 = [<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 5);?>];
        var arr6 = [<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 6);?>];
        // updata(arr,[],$('.swiper1 .swiper-wrapper'));
        console.log(updata(arr,[],$('.swiper1 .swiper-wrapper')),updata(arr5,[],$('.swiper2 .swiper-wrapper')),updata(arr6,[],$('.swiper3 .swiper-wrapper')))
        function updata(arr,array,obj){
            for(var i=0; i<Math.ceil(arr.length/pagesize); i++){
                // console.log(arr.slice((i*9),(i+1)*9)s);
                array.push(arr.slice((i*pagesize),(i+1)*pagesize));
            };
            // console.log(array,arr);
            var sum ;
            for(var i=0; i<array.length; i++){
                sum = $('<div class="swiper-slide"></div>').appendTo(obj);
                for(var j=0; j<array[i].length; j++){
                    $('<a href="javascript:;" get_data="'+array[i][j].str2+'" class="list"><div><img src="'+array[i][j].str3+'" alt=""></div><p>'+array[i][j].label+'</p></a>').appendTo(sum);
                }
            }
            return array;
        }
        // 武器
        var swiper1 = new Swiper('.swiper1', {
            autoplayDisableOnInteraction: false,
            pagination: '.swiper-pagination1',
            nextButton: '.swiper-button-next1',
            prevButton: '.swiper-button-prev1',
        });
        // 武器
        var swiper2 = new Swiper('.swiper2', { 
            autoplayDisableOnInteraction: false,
            pagination: '.swiper-pagination2',
            nextButton: '.swiper-button-next2',
            prevButton: '.swiper-button-prev2',
        });
        // 武器
        var swiper3 = new Swiper('.swiper3', {
            autoplayDisableOnInteraction: false,
            pagination: '.swiper-pagination3',
            nextButton: '.swiper-button-next3',
            prevButton: '.swiper-button-prev3',
        });
        $('.swiper1 .swiper-wrapper a').on('click',function(){
            label = $(this).attr('get_data');
            str3 = $(this).find('div img').attr('src');
            data = $(this).find('p').html();
            $('.active_box1').html()
            $('.active_box1').html('<a href="javascript:;" class="list active_list"><div><img src="'+str3+'" alt=""></div></a><h3>'+data+'</h3><p>'+label+'</p>');
        });
        $('.swiper2 .swiper-wrapper a').on('click',function(){
            label = $(this).attr('get_data');
            str3 = $(this).find('div img').attr('src');
            data = $(this).find('p').html();
            $('.active_box2').html()
            $('.active_box2').html('<a href="javascript:;" class="list active_list"><div><img src="'+str3+'" alt=""></div></a><h3>'+data+'</h3><p>'+label+'</p>');
        });
        $('.swiper3 .swiper-wrapper a').on('click',function(){
            label = $(this).attr('get_data');
            str3 = $(this).find('div img').attr('src');
            data = $(this).find('p').html();
            $('.active_box3').html()
            $('.active_box3').html('<a href="javascript:;" class="list active_list"><div><img src="'+str3+'" alt=""></div></a><h3>'+data+'</h3><p>'+label+'</p>');
        });
        function active(obj,even){
            var label =  obj.eq(0).attr('get_data');
            var str3 =  obj.eq(0).find('div img').attr('src');
            var data =  obj.eq(0).find('p').html();
            even.html('<a href="javascript:;" class="list active_list"><div><img src="'+str3+'" alt=""></div></a><h3>'+data+'</h3><p>'+label+'</p>');
        }
        // 滚屏
        var gameData = new Swiper('#gameData', {
            pagination: '.box_pagination',
            direction: 'vertical',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            mousewheelControl: true,
            onInit: function(s){
                // console.log(s.activeIndex)
                active($('.swiper1 .swiper-wrapper a'),$('.active_box1'));
                active($('.swiper2 .swiper-wrapper a'),$('.active_box2'));
                active($('.swiper3 .swiper-wrapper a'),$('.active_box3'));
            }
        });

    })

</script>
</body>
</html>
