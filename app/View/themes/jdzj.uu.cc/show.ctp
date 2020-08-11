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
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/reset.css">
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/news.css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>
    <?php require_once 'top.ctp';?>
    <div class="banner"></div>
    <div class="body">
        <div class="wrap">
            <div class="head">
                <h3><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
                <p class="notes"><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></p>
                <!--<h3>抵制不良游戏，拒绝盗版游戏</h3>
                <p>2018-06-04</p>-->
                <!--<p class="text">当前位置：
                    <a href="javascript:void(0);">首页</a>>
                    <a href="javascript:void(0);">新闻资讯</a>>
                    <a href="javascript:void(0);">新闻</a>
                </p>-->
            </div>
            <div class="text_box">
                <?php SHOW_CURRENT_NEWS_INFO('content') ?>
            </div>
        </div>
        <?php require_once 'pop.ctp';?>
    </div>
    <?php require_once 'footer.ctp';?>
<script src="<?php BASE_URL() ?>js/jquery-1.9.1.min.js"></script>

<script>
    function getStyle(obj, name)
    {
        if(obj.currentStyle)
        {
            return obj.currentStyle[name];
        }else
        {
            return getComputedStyle(obj, false)[name];
        }
    };
    function startMove(obj, arr, iTarget,fn)
    {
        clearInterval(obj.timer);

        obj.timer=setInterval(function (){
            var cur=0;
            if(arr=='opacity'){
                cur=Math.round(parseFloat(getStyle(obj, arr))*100);
            }else{
                cur=parseInt(getStyle(obj, arr));
            }
            var speed=(iTarget-cur)/6;
            speed=speed>0?Math.ceil(speed):Math.floor(speed);
            if(cur==iTarget){
                clearInterval(obj.timer);
                if (fn) {fn()};
            }else{
                if(arr=='opacity')
                {
                    obj.style.filter='alpha(opcity:'+(cur+speed)+')';
                    obj.style.opacity=(cur+speed)/100;

                }else
                {
                    obj.style[arr]=cur+speed+'px';
                }
            }
        }, 30);
    };
    $(document).ready(function(){
        // 副导航
        $('.navTab a').on('click',function(){
            $('.navTab a').removeClass('active');
            $(this).addClass('active');
        });
        // 
        $('.tab span').on('click',function(){
            $('.tab span').removeClass('on');
            $(this).addClass('on');
            $('.pop .none').removeClass('on');
            $('.pop .none').eq($(this).index()).addClass('on');
        });

        var qrCodeBox = document.querySelector('.pop');
        var download_box = document.querySelector('.download_box');
        var oClose = document.querySelector('.pop .btn');
        oClose.onclick=function(){
            startMove(qrCodeBox,'right',-213,function(){
                startMove(download_box,'right',0,function(){
                    // alert('完了！')
                })
            });
        };
        download_box.onclick=function(){
            startMove(download_box,'right',-53,function(){
                startMove(qrCodeBox,'right',0,function(){
                    // alert('完了！')
                })
            });
        };
    });
</script>
</body>
</html>