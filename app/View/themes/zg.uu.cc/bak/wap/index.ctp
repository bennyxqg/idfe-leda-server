
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
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="http://sds.uu.cc/sds.uu.cc/favicon.ico">
<style type="text/css">
body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,hr,input,legend,li,ol,p,pre,td,textarea,th,ul{margin:0;padding:0}
body,button,input,select,textarea { font:12px/1.5 tahoma,arial,'Microsoft Yahei',\5b8b\4f53,sans-serif;}
h1,h2,h3,h4,h5,h6{font-size:100%}
li{list-style:none}
a {text-decoration:none}
a:hover {text-decoration:none}
a:active{outline:none;}
input,p,div,i{-webkit-appearance: none;-webkit-tap-highlight-color: rgba(0,0,0,0);}
img {border:0;vertical-align:middle;}
.clearfix:after{content:".";display:block;height:0;font-size:0;clear:both;visibility:hidden;overflow:hidden;}
button,input,select,textarea{font-size:100%;outline:none;}
.fl{float:left;}
.fr{float:right;}
img{max-width:100%;}
body{width:6.4rem;min-height:14.17rem;margin: 0 auto; overflow-x:hidden; background:url(http://dl.gamdream.com/activity/zhuiguang/mb/bg.jpg) center top no-repeat; background-size:100% auto;}
.logo{padding-top:1rem;margin-bottom:.83rem;}
.down{display:block;width:3.25rem;height:.96rem;background:url(http://dl.gamdream.com/activity/zhuiguang/mb/down.png) center top no-repeat; background-size:100% auto; margin:0 0 .56rem .82rem;}
.play{display:block;width:2.23rem;height:1.41rem;background:url(http://dl.gamdream.com/activity/zhuiguang/mb/play.jpg) center top no-repeat; background-size:100% auto; margin:0 0 2.65rem .82rem;}
.down:active{transform:translate(2px,2px);}
.list{margin-left:-.1rem;}
.video-box,.wx{display:none;position:fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(0, 0, 0, 0.5);z-index:60; }
.video-box video{position:absolute;top:50%;left:0;right:0;width:100%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);}
.wx{background:#1a1c28;width:100%;height:100%;}
.wx img{padding-top:1.68rem;}
</style>
<script type="text/javascript">
  var devieWidth=Math.min(640,document.documentElement.clientWidth);
  document.documentElement.style.fontSize=devieWidth/6.4+'px';
</script>
</head>
<body>
<div class="main">
    <h3 class="logo"><img src="http://dl.gamdream.com/activity/zhuiguang/mb/logo.png" alt="追光者"/></h3>
    <a href="javascript:;" class="down"></a>
    <a href="javascript:;" class="play" data-src="<?php BLOCK('vedio_url') ?>"></a>
    <div class="list"><img src="http://dl.gamdream.com/activity/zhuiguang/mb/list.png" alt=""/></div>
</div>
<div class="dlog">
    <div class="bg"></div>
    <div class="con"><s class="close"></s></div>
</div>
<div class="video-box" id="video"></div>
<div class="wx"><img src="http://dl.gamdream.com/activity/zhuiguang/mb/open.png" alt="在浏览器打开"/></div>
<script charset="utf-8" src="http://dl.gamdream.com/activity/lib/zepto.min.js"></script>
<script type="text/javascript">
$(function(){
  var u = navigator.userAgent;
  var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
  var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);

  function isWeiXin(){
      var ua = window.navigator.userAgent.toLowerCase();
      if(ua.match(/MicroMessenger/i) == 'micromessenger'){
          return true;
      }else{
          return false;
      }
  }



  function onTouchMove(e) {
    e.preventDefault();
    e.stopPropagation();
  };
  $('.play').on('tap',function(){
    var src = $(this).attr('data-src');
    $('.video-box').html('<video src="'+src+'" controls="controls" id="tsvideo"></video>');
    $('.video-box').show();
    $('.main,header').css("pointer-events","none");
    $('.video-box').find('video')[0].play();
    document.body.addEventListener('touchmove', onTouchMove, false);
  });
  $('.video-box').on('tap',function(e){
    if(e.target.tagName != 'VIDEO'){
      $('.video-box').hide().empty();
      document.body.removeEventListener('touchmove', onTouchMove, false);
      setTimeout(function(){
        $('.main,header').css("pointer-events","auto");
      },500);
    }
  });
  $('.down').on('click',function(){
    if(isWeiXin()){
      $('.wx').show();
    }else{
      var androidUrl='<?php BLOCK('android_download_url') ?>';
      var iosUrl='<?php BLOCK('ios_download_url') ?>';  
      if(isAndroid){
        window.location.href=androidUrl;
      }
      if(isiOS){
        window.location.href=iosUrl;
      }
    }
  });
  $('.wx').on('click',function(){
    $('.wx').hide();
  });
})
</script>
</body>
</html>