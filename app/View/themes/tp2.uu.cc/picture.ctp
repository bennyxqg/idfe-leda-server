<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/minimalist.css" type="text/css" />
    <script type="text/javascript" src="/js/edata.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</head>

<body>
<div class="header">
    <div class="banBox">
        <div class="nybanner"><img src="<?php BASE_URL() ?>images/nybanner.jpg" width="1920" height="461" border="0"></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span>精彩截图</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li class="cur"><a href="#">精彩截图</a><em></em></li>
        </ul>
        <div class="imgBox">
            <div class="showImg">
                <div class="jCarouselLite">
                    <ul class="runContent">
                    <?php
                    SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" /></a></li>','m-d',2,50,0,array('OrderBy'=>'`int1` asc'));
                    ?>
                    </ul>
                </div>
            </div>
            <button class="btn_left disabled"></button>
            <button class="btn_right"></button>
        </div>
    </div>
</div>
<?php require_once("_footer.ctp");?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".jCarouselLite").jCarouselLite({
        visible: 1,
        scroll: 1,
        circular: false,
        btnNext: ".btn_right",
        btnPrev: ".btn_left"
        });
        sToEdata();
    });
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>