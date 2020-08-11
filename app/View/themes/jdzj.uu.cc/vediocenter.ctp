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
    <div class="videoCenter">
        <div class="wrap">
            <div class="nav">
                <!--<div class="vedio_tab">
                    <ul>
                        <li <?php if ($type == 0) echo 'class="on"';?>><a href="//ddx.uu.cc/vediocenter/0.html" target="_self">官方视频</a><span></span></li>
                        <li <?php if ($type == 5) echo 'class="on"';?>><a href="//ddx.uu.cc/vediocenter/5_1.html" target="_self">通关视频</a><span></span></li>
                    </ul>
                </div>-->
                <div class="subNav">
                    
                    <a <?php if ($type == 2) echo 'class="active"';?> href="//jdzj.uu.cc/vediocenter/2_1.html">宣传片</a>
                    <a <?php if ($type == 3) echo 'class="active"';?> href="//jdzj.uu.cc/vediocenter/3_1.html">游戏攻略</a>
                    <a <?php if ($type == 4) echo 'class="active"';?> href="//jdzj.uu.cc/vediocenter/4_1.html">游戏直播</a>
                    
                </div>
                <div class="route">
                    <span>当前位置：</span>
                    <a href="/">首页</a>>
                    <a href="javascript:void(0);">视频中心</a>
                </div>
            </div>
            <div class="box off">
                
                <?php
                    SHOW_DATAS('<div class="list"><a class="video_btn_link video" name="@@STR2@@" href="javascript:void(0);"><i></i><img width="357" height="214" src="@@STR1@@" alt=""></a><h3>@@STR3@@</h3></div>','m-d',$type,10,0,array('OrderBy' => 'created desc'));
                ?>
                <!--<div class="list">
                    <a href="javascript:void(0);" class="video"><i></i><img src="./images/video1.jpg" alt=""></a>
                    <h3>1游戏的标题</h3>
                </div>-->
            </div>
            <div class="pages"></div>
        </div>
    </div>
<?php require_once 'footer.ctp';?>
<div class="mask"></div>
<div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script src="<?php BASE_URL() ?>js/jquery-1.9.1.min.js"></script>
<script>
    
$(document).ready(function(){
    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        if(vedioSrc){
            $('.s_p_k video').attr('src',vedioSrc);
            $('.mask,.s_p_k').show();
        }else{
            alert('敬请期待！')
        }
    });
    $(".close,.mask").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.mask').hide();
        e.stopPropagation();
    });
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
});
</script>
</body>
</html>