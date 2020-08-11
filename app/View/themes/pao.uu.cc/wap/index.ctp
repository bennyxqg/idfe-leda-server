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
    <link rel="shortcut icon" href="//pao.uu.cc/pao.uu.cc/favicon.ico" />
    <link media="screen" href="//pao.uu.cc/pao.uu.cc/css/m.css" rel="stylesheet" type="text/css" />
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body>

    <div class="page">
        <?php require_once '_top.ctp';?>
        <div class="content">
            <ul class="list">.
            <?php
            	SHOW_NEWS('<li class="list@@ID@@"><a href="@@URL@@"><h4>@@TITLE@@</h4><p>@@DATE@@</p></a></li>','m/d',array('地铁新闻','地铁活动','地铁攻略'),3,0,array('FromID'=>1));
            ?>
            </ul>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="//pao.uu.cc/pao.uu.cc/images/logo.png" alt=""></a>
            <p style="font-size:12px;">本游戏适合12岁以上的玩家进入 <br> 粤网文〔2016〕6871-1632号  <br>  批准文号：文网游进字〔2017〕0010 号  新广出审[2016]1378号 <br> 出版号：ISBN  978-7-7979-0242-7</p>
            <p style="font-size:12px;">健康游戏忠告：<br />抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    <div class="pop">
        <img src="//pao.uu.cc/pao.uu.cc/images/tip.png" alt="">
    </div>
<script src="//pao.uu.cc/pao.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="//pao.uu.cc/pao.uu.cc/js/swipe.js" type="text/javascript"></script>
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
var bullets = $('#dot').find('li');

function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}

$(function(){
    $('.pop').height($(document).height());
    if(isWeiXin()){
        $('#download').click(function(e){
            $('.pop').show();
            e.stopPropagation();
            return false;
        });
    }
    $('.pop').click(function(){
        $(this).hide();
    });
});
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
<?php require_once '_foot.ctp';?>
