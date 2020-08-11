
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
<link rel="shortcut icon" href="http://sds.uu.cc/sds.uu.cc/favicon.ico">
<style type="text/css">
body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,hr,input,legend,li,ol,p,pre,td,textarea,th,ul {margin:0;padding:0}
body,button,input,select,textarea { font:12px/1.5 tahoma,arial,'Microsoft Yahei',\5b8b\4f53,sans-serif;}
h1,h2,h3,h4,h5,h6{font-size:100%}
li{list-style:none}
a {text-decoration:none}
a:hover {text-decoration:none}
a:active{outline:none;}
img {border:0;vertical-align:middle;}
.clearfix:after{content:".";display:block;height:0;font-size:0;clear:both;visibility:hidden;overflow:hidden;}
html[xmlns] .clearafter,iframe{display:block;}
button,input,select,textarea {font-size:100%;outline:none;}
.fl{float:left;}
.fr{float:right;}
body{width: 100%;min-width:1000px;max-width:1920px;margin: 0 auto;background:url(http://dl.gamdream.com/activity/zhuiguang/pc/bg.jpg) center top no-repeat;}
.main{width:1000px; margin:0 auto;height:1077px; position:relative;}
.bg{display:none;}
.content{position:relative;z-index:50;}
.btn_box{padding-top:364px;}
.code{float:left;width:140px;height:140px;overflow:hidden;margin:0 10px 0 190px;}
.btns a{display:block;width:262px;height:62px;background:url(http://dl.gamdream.com/activity/zhuiguang/pc/ios.png) no-repeat;margin-bottom:15px;}
.btns .android{height:64px;background-image:url(http://dl.gamdream.com/activity/zhuiguang/pc/android.png);}
.play{width:222px;height:107px; padding-top:33px; margin-left:34px;background:#000; text-align:center; cursor:pointer;}
.play i{display:inline-block;width:73px;height:74px;background:url(http://dl.gamdream.com/activity/zhuiguang/pc/play.png) no-repeat;}
.dialog {z-index:10000;position:fixed;top:50%;left:50%;display:none;}
#dgVideo{width:700px;height:400px;margin: -210px 0 0 -350px;background: #000;border: solid 2px #959595;padding:10px;}
#dgVideo video{background: #000;}
#dgVideo .dialog-close{position: absolute;z-index: 2;top: 0;right: -50px;width: 41px;height: 41px;background: url('http://dl.gamdream.com/activity/zhuiguang/pc/close.png');text-indent: -9999px;overflow: hidden;-webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-ms-transition: all 0.5s ease;-o-transition: all 0.5s ease;transition: all 0.5s ease;}
#dgVideo .dialog-close:hover {-webkit-transform: rotate(180deg);-moz-transform: rotate(180deg);-ms-transform: rotate(180deg);-o-transform: rotate(180deg);transform: rotate(180deg);}
#fade {display: none;z-index: 9999;position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #000;opacity: .6;filter: alpha(opacity=60);}   
</style>
</head>
<body>
<div class="main">
	<div class="bg"></div>
	<div class="content">
		<div class="btn_box clear">
			<div class="code"><img src="<?php BLOCK('game_download_qrcode') ?>"/></div>
			<div class="btns fl">
				<a href="<?php BLOCK('ios_download_url') ?>" class="ios" target="_blank"></a>
				<a href="<?php BLOCK('android_download_url') ?>" class="android" target="_blank"></a>
			</div>
			<div class="play fl" data-v4="<?php BLOCK('vedio_url') ?>"><i></i></div>
		</div>
	</div>
</div>
<div class="dialog" id="dgVideo">
    <video width="700" height="400" autoplay poster controls src="">您的浏览器不支持 video 标签。</video>
    <a class="dialog-close" href="javascript:;"></a>
</div>
<div id="fade"></div>
<script charset="utf-8" src="http://dl.gamdream.com/activity/lib/jquery-1.9.1.js"></script>
<script type="text/javascript">
    $(function(){
        $('.play').click(function(){
            var vedioSrc = $(this).attr("data-v4");
            $("#dgVideo video").attr('src',vedioSrc);
            $("#dgVideo").show();
            $("#fade").show();
        });
        $('.dialog-close').click(function(){
            $('#dgVideo,#fade').hide();
            $("#dgVideo video").attr('src',"");
        });
    })
</script>
</body>
</html>