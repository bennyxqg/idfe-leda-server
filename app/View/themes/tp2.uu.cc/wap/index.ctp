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
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="//tp2.uu.cc/tp2.uu.cc/favicon.ico" />
    <link media="screen" href="//tp2.uu.cc/tp2.uu.cc/css/m.css" rel="stylesheet" type="text/css" />

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
    <div class="page">
        <?php require_once '_top.ctp';?>
        <div class="content">
            <ul class="newslist">   
            <?php

                SHOW_NEWS('<li><a href="@@URL@@"><h3>@@TITLE@@</h3></a><div><a href="@@URL@@"><span>@@DATE@@</span><img src="@@SMALL_IMAGE@@" alt=""></a></div></li>','m/d','新闻',6,$page,array('DefaultImage'=>'//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg','ContentLength'=>24));
                SHOW_NEWS('<li><a href="@@URL@@"><h3>@@TITLE@@</h3></a><div><a href="@@URL@@"><span>@@DATE@@</span><img src="@@SMALL_IMAGE@@" alt=""></a></div></li>','m/d','游戏资料',6,$page,array('DefaultImage'=>'//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg','ContentLength'=>24));
                SHOW_NEWS('<li><a href="@@URL@@"><h3>@@TITLE@@</h3></a><div><a href="@@URL@@"><span>@@DATE@@</span><img src="@@SMALL_IMAGE@@" alt=""></a></div></li>','m/d','攻略',6,$page,array('DefaultImage'=>'//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg','ContentLength'=>24));
               ?>
            </ul>
        </div>
    </div>
    <?php
        require_once "_footer.ctp";
    ?>
 <div class="pop" style="display:none;">
     <img src="//tp2.uu.cc/tp2.uu.cc/images/wxpop.png" />
 </div>
<script src="//tp2.uu.cc/tp2.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="//tp2.uu.cc/tp2.uu.cc/js/swipe.js" type="text/javascript"></script>
<script type="text/javascript">
var slider1 = Swipe(document.getElementById('slider'), {
    auto: 3000,
    continuous: true,
    callback: function(pos) {
        var i = bullets.length;
        while (i--) {
            bullets[i].className = ' ';
        }
        bullets[pos].className = 'on';
    }
});
function isWx(){
       var ua = navigator.userAgent.toLowerCase();
       if(ua.match(/MicroMessenger/i) == "micromessenger"){
             return true;
       }else{
           return false;
       }
    };
var bullets = $('#dot').find('li');
$(function(){
    $("#download").click(function(){
        if(isWx()){
            $(".pop").show();
            return false;
        }
    });
    $(".pop").height($(document).height()+20);
    $(".pop").click(function(){
        $(".pop").hide();
    });
    sToEdata();
});
</script>
</body>
</html>
