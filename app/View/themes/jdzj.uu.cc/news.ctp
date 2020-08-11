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
    <div class="content">
        <div class="wrap">
            <div class="box">
                <!--<div class="subNav">
                    <a class="active" href="javascript:void(0);">最新</a>
                    <a href="javascript:void(0);">新闻</a>
                    <a href="javascript:void(0);">公告</a>
                    <a href="javascript:void(0);">活动</a>
                    <a href="javascript:void(0);">攻略</a>
                </div>-->
                <?php
                        $config = array(
                            1 => array('新闻','公告','活动','攻略'),
                            2 => array('新闻'),
                            3 => array('公告'),
                            4 => array('活动'),
                            5 => array('攻略')
                        );
                        
                    ?>
                       
                    <?php
                        if($category_id == 1 || $category_id == 2 || $category_id == 3 || $category_id == 4 || $category_id == 5){
                        $_class = "active";
                    ?>
                    <div class="subNav">
                        <a class="<?php if($category_id == 1) echo "active";?>" href="//jdzj.uu.cc/news/1.html">最新</a>
                        <a class="<?php if($category_id == 2) echo "active";?>" href="//jdzj.uu.cc/news/2.html">新闻</a>
                        <a class="<?php if($category_id == 3) echo "active";?>" href="//jdzj.uu.cc/news/3.html">公告</a>
                        <a class="<?php if($category_id == 4) echo "active";?>" href="//jdzj.uu.cc/news/4.html">活动</a>
                        <a class="<?php if($category_id == 5) echo "active";?>" href="//jdzj.uu.cc/news/5.html">攻略</a>
                    </div>
                    <?php
                        }
                    ?>
                <div class="route">
                    <span>当前位置：</span>
                    <a href="javascript:void(0);">首页</a>>
                    <a href="javascript:void(0);">新闻资讯</a>
                </div>
            </div>
            <ul class="list">
                <?php
                    // <li><div class="left"><h3><a href="@@URL@@">@@TITLE@@</a></h3><p>@@DESCRIPTION@@</p></div><div class="right"><h3>@@DATE@@</h3><span>2018</span><a href="@@URL@@"></a></div></li>
                    // SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><div><span>@@CATEGORY_NAME@@</span><i></i><h3>@@DATE@@ &nbsp;@@TITLE@@</h3><p>@@DESCRIPTION@@</p></div></a></li>','m-d',$config[$category_id],5,$page,array('LimitFrom'=>0));
                    SHOW_NEWS('<li><div class="left"><h3><a href="@@URL@@">@@TITLE@@</a></h3><p>@@DESCRIPTION@@</p></div><div class="right"><h3>@@DATE@@</h3><span class="copy-year">2018</span><a href="@@URL@@"></a></div></li>','m-d',$config[$category_id],5,$page,array('LimitFrom'=>0));
                    ?>
            </ul>
            <div class="pages">
                <?php
                        SHOW_PAGINATION2($config[$category_id],5,array("pageId"=>$category_id),$page);
                ?>
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
        //新闻自动年份
        var d = new Date();
        $('.copy-year').html(d.getFullYear());
        // 
        $('.tab span').on('click',function(){
            $('.tab span').removeClass('on');
            $(this).addClass('on');
            $('.pop .none').removeClass('on');
            $('.pop .none').eq($(this).index()).addClass('on');
        });

        $('.subNav a').on('click',function(){
            $('.subNav a').removeClass('active');
            $(this).addClass('active');
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