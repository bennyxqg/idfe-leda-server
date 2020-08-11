<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
    <meta name="description" content="突破 创新 连接" />
	<title>《中国好歌曲-乐舞》主题曲征名活动 赢千元HI-FI耳机</title>    
    <link type="text/css" rel="stylesheet" href="<?php echo $full_base_url ?>/css/myanimate.css" />	
    <link type="text/css" rel="stylesheet" href="<?php echo $full_base_url ?>/css/index.css" />
</head>
<body>
    <img src="<?php echo $full_base_url ?>/images/wxfx.png" alt="" style="position:absolute;left:-10000px;top:-10000px;">
    <div class="loading_bg" id="loading">
        <h4 id="loading_text"><b>0</b></h4>
    	<div class="bar_bg">
            <div class="loadbar" id="loadw"></div>   
        </div>
    </div>
    <div class="lock_wrp" id="lock">
        <div class="lock">
            <i></i><br />
            为了更好的体验，请使用竖屏浏览
        </div>
    </div>
	<div class="wrapper">
        <section class="sec0"></section>
    	<section class="sec1"><div class="h_wrp">
            <h2>第一屏</h2>
            <div class="box">
                <div class="changPian" id="changpian">
                    <div class="cd doCircle" id="cd"><img src="<?php echo $full_base_url ?>/images/cd.png" alt=""></div>
                    <div class="circle"><img src="<?php echo $full_base_url ?>/images/cd_fm.png" alt=""></div>
                    <div class="cizhen"><img src="<?php echo $full_base_url ?>/images/cizhen.png" alt=""></div>
                </div>
                <div class="word fadeInUp"><img src="<?php echo $full_base_url ?>/images/word1.png" alt=""></div>
                <audio loop="" src="<?php echo $full_base_url ?>/music.mp3" id="media" autoplay="" preload=""></audio>
            </div>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
        <section class="sec2"><div class="h_wrp">
            <h2>第二屏</h2>
            <div class="box">
                <input type="text" value="" class="ipt" id="name" />
                <input type="text" value="" class="ipt" id="phone" />
                <input type="submit" value="" class="submit" />
                <p>提交资料并分享朋友圈就有机会获得<span>千元HI-FI耳机</span></p>
            </div>
            <div class="start"><img src="<?php echo $full_base_url ?>/images/start.png" alt=""></div>
        </div></section>
    </div>
    <div class="pop">
        <img src="<?php echo $full_base_url ?>/images/tc.png" alt="">
    </div>
    <script src="<?php echo $full_base_url ?>/js/zepto.min.js" type="text/javascript"></script>
    <script src="<?php echo $full_base_url ?>/js/parallax.js" type="text/javascript"></script>
    <script src="<?php echo $full_base_url ?>/js/index.js" type="text/javascript"></script>
    <script src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
    <script type="text/javascript">
    $(function(){
        $("#changpian").on("touchend",function(){
            var audio = $('#media')[0];
            audio.loop = false;
            if(!audio.paused){
                audio.pause();
                $('#cd').removeClass('doCircle');
            }else{
                audio.play();
                $('#cd').addClass('doCircle');
            }
        });

        var reg =  /^0?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
        $(".submit").on("touchend",function(){
            var name = $.trim($("#name").val());
            var phone = $.trim($("#phone").val());
            if(name == ''){
                alert('请输入歌曲名');
                return false;
            }
            if(!phone){
                alert("请输入手机号码");
                return false;
            }else if(!phone.match(reg)){
                alert("您的手机号码格式有误");
                return false;
            }
            else{
                $.ajax({
                    type: 'post',
                    url: '/saveMusic',
                    data: {name:name, phone:phone},
                    dataType: 'json',
                    success: function(res){
                        if(res && res.status == 1){
                            $(".pop").show();
                        }
                    }
                });
            }
        });
        $(".pop").on("touchend",function(){
            $(this).hide();
        });
    })

    //微信分享
    var title = "《中国好歌曲-乐舞》主题曲征名活动 赢千元HI-FI耳机"; //分享给好友会显示
    var link = "//love.uu.cc/h5";
    var imgUrl = "//love.uu.cc/love.uu.cc/images/wxfx.jpg";
    var shareDesc = "《中国好歌曲-乐舞》主题曲征名活动 赢千元HI-FI耳机";
    var onBridgeReady = function () {

        var appId = '';
        // 发送给好友;
        WeixinJSBridge.on('menu:share:appmessage', function(argv){
            WeixinJSBridge.invoke('sendAppMessage',{
                'img_url' : imgUrl,
                'img_width' : '640',
                'img_height' : '640',
                'link' : link,
                'desc' : shareDesc,
                'title' : title
                }, function(res) {
            });
        });
        // 分享到朋友圈;
        WeixinJSBridge.on('menu:share:timeline', function(argv){
            WeixinJSBridge.invoke('shareTimeline',{
            'img_url' : imgUrl,
            'img_width' : '640',
            'img_height' : '640',
            'link' : link,
            'desc' : shareDesc,
            'title' : title
            }, function(res) {
            });
        });
    };
    if(document.addEventListener){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    } else if(document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady' , onBridgeReady);
        document.attachEvent('onWeixinJSBridgeReady' , onBridgeReady);
    }

    //百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?87109a8ac60e1afbaa24d8b17f309c3e";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
    </script>
</body>
</html>
