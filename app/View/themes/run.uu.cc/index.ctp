<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>   
    
    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <div class="wrap clearfix">
            <?php require "_left.ctp";?>
            <div class="home_right">
                <div class="banner">
                    <ul class="run_content">
                        <li class="li_bk bka">
                            <div class="bka_des">
                                <div class="play"><a href="/game"><img src="<?php BASE_URL() ?>images/play.png" alt="" /></a><br /><span>&nbsp;&nbsp;点击播放</span></div>
                                <div>
                                    <a href="<?php BLOCK('android_download_url') ?>"><img src="<?php BASE_URL() ?>images/android_onload.png" alt="安卓下载" /></a>
                                    <img src="<?php BLOCK('game_download_qrcode') ?>" alt="" />
                                </div>
                            </div>
                        </li>
                        <li class="li_bk bkb">
                            <div class="bkb_des">
                                 <img src="<?php BLOCK('jianmeng_qrcode') ?>" alt="" />
                                 <a href="//act.uu.cc/run/" target="_blank" class="hdxq"><img src="<?php BASE_URL() ?>images/hdxq.png" alt="活动详情" /></a>
                            </div>
                        </li>
                        <li class="li_bk bkc">
                            <div class="bkc_des">
                                    <!--<img src="<?php BASE_URL() ?>images/erwei_b.png" alt="" />--><div style="font-size:24px;padding:40px 10px 10px 60px;">敬请期待</div>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex">
                        <li><a href="javascript:;" class="flex_left">left</a></li>
                        <li><a href="javascript:;" class="flex_right">right</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?php require "_footer.ctp";?>

    </div>
</body>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script>
    $(function () {
        //轮播广告大图
        var w = null;
        var timeID = null;
        var xk = $(".run_content");
        function init() {
            w = $(window).width() - 220;
            xk.width(w * xk.children("li").size());
            xk.children("li").css({ "width": w + "px", "float": "left" });
            $(".banner").width(w);
        }
        function run() {
            xk.animate({ "left": "-" + w }, 1000, function () {
                xk.css({ "left": 0 }).children("li:first").appendTo(this);
            });
        }
        init();
        timeID = setInterval(run, 8000);
        $(window).resize(function () {
            init();
        })
        $(".flex_left").click(function () {
            xk.stop();
            clearInterval(timeID);
            xk.css({ "left": "-" + w + "px" }).children("li:last").prependTo(xk);
            xk.animate({ "left": 0 }, 1000,function(){
                timeID = setInterval(run, 8000);
            });
        })
        $(".flex_right").click(function () {
            xk.stop();
            clearInterval(timeID);
            xk.animate({ "left": "-" + w+"px"}, 1000,function(){
                xk.css({ "left": 0 }).children("li:first").appendTo(xk);
                timeID = setInterval(run, 8000);
            });
        })
    })

    $(".weixin").hover(function () {
        $(".erweima").show();
    }, function () {
        $(".erweima").hide();
    });
</script>
</html>
