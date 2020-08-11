<!doctype html>
<html style="background:#2d2c2b ;">
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
<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/favicon.ico">
</head>

<body style="background:#2d2c2b ;">
<div id="game_list">
    <?php require_once '_top.ctp';?>
    <div class="content">
        <div class="menu">
            <a href="javascript:;" class="on"></a>
            <a href="javascript:;"></a>
            <a href="javascript:;"></a>
        </div>
        <div class="swiper_box on">
            <div class="active_box active_box1"></div>
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
        <div class="swiper_box">
            <div class="active_box active_box2"></div>
            <div class="swiper-container swiper2">
                <div class="swiper-wrapper">
                    <!--<div class="swiper-slide">
                        <a href="javascript:;" class="list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div><p>a大攻防</p></a>
                    </div>
                    <div class="swiper-slide">Slide 2</div>-->
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev2"></div>
            <div class="swiper-button-next swiper-button-next2"></div>
        </div>
        <div class="swiper_box">
            <div class="active_box active_box3"></div>
            <div class="swiper-container swiper3">
                <div class="swiper-wrapper">
                    <!--<div class="swiper-slide">
                        <a href="javascript:;" class="list"><div><img src="<?php BASE_URL() ?>/img/data_bg.jpg" alt=""></div><p>a大攻防</p></a>
                    </div>
                    <div class="swiper-slide">Slide 2</div>-->
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev3"></div>
            <div class="swiper-button-next swiper-button-next3"></div>
        </div>
    </div>
</div>
<script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/swiper.jquery.min.js"></script>
<script>
    $(document).ready(function(){
        var label =  '';
        var str3 = '' ;
        var data = '' ;
        // 
        var pagesize = 8;
        var arr = [<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 4);?>];
        var arr5 = [<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 5);?>];
        var arr6 = [<?php SHOW_DATAS('{"label":"@@LABEL@@", "str2":"@@STR2@@", "str3":"@@STR3@@"},', 'Y-m-d', 6);?>];
        console.log(updata(arr,[],$('.swiper1 .swiper-wrapper')),updata(arr5,[],$('.swiper2 .swiper-wrapper')),updata(arr6,[],$('.swiper3 .swiper-wrapper')))
        function updata(arr,array,obj){
            for(var i=0; i<Math.ceil(arr.length/pagesize); i++){
                // console.log(arr.slice((i*9),(i+1)*9)s);
                array.push(arr.slice((i*pagesize),(i+1)*pagesize));
            };
            var sum ;
            for(var i=0; i<array.length; i++){
                sum = $('<div class="swiper-slide"></div>').appendTo(obj);
                for(var j=0; j<array[i].length; j++){
                    $('<a href="javascript:;" get_data="'+array[i][j].str2+'" class="list"><div><img src="'+array[i][j].str3+'" alt=""></div><p>'+array[i][j].label+'</p></a>').appendTo(sum);
                }
            }
            return array;
        }
        $('.menu a').on('click',function(){
            $('.menu a').removeClass('on');
            $(this).addClass('on');
            $('.content .swiper_box').removeClass('on');
            $('.content .swiper_box').eq($(this).index()).addClass('on');
            if($(this).index() == 1){
                // 建造
                var swiper2 = new Swiper('.swiper2', { 
                    autoplayDisableOnInteraction: false,
                    pagination: '.swiper-pagination2',
                    nextButton: '.swiper-button-next2',
                    prevButton: '.swiper-button-prev2',
                });
            }
            if($(this).index() == 2){
                // 服装
                var swiper3 = new Swiper('.swiper3', {
                    autoplayDisableOnInteraction: false,
                    pagination: '.swiper-pagination3',
                    nextButton: '.swiper-button-next3',
                    prevButton: '.swiper-button-prev3',
                }); 
            }
        })
        // 武器
        var swiper1 = new Swiper('.swiper1', {
            autoplayDisableOnInteraction: false,
            pagination: '.swiper-pagination1',
            nextButton: '.swiper-button-next1',
            prevButton: '.swiper-button-prev1',
        });
        // 赋值详情图
        $('.swiper1 .swiper-wrapper a').on('click',function(){
            label = $(this).attr('get_data');
            str3 = $(this).find('div img').attr('src');
            data = $(this).find('p').html();
            $('.active_box1').html()
            $('.active_box1').html('<a href="javascript:;" class="active_list"><div><img src="'+str3+'" alt=""></div></a><h3>'+data+'</h3><p>'+label+'</p>');
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
            even.html('<a href="javascript:;" class="active_list"><div><img src="'+str3+'" alt=""></div></a><h3>'+data+'</h3><p>'+label+'</p>');
        }
        active($('.swiper1 .swiper-wrapper a'),$('.active_box1'));
        active($('.swiper2 .swiper-wrapper a'),$('.active_box2'));
        active($('.swiper3 .swiper-wrapper a'),$('.active_box3'));
    })
</script>
</body>
</html>