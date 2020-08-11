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
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<link rel="shortcut icon" href="/tp2.uu.cc/favicon.ico" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
<style type="text/css">
html,body {
    position: relative;
    height: 100%
}

body {
    background:url(<?php BASE_URL() ?>images/mainBg.jpg) center center no-repeat;
    background-size: cover;
    margin: 0;
    padding: 0;
    font-family: 'Microsoft Yahei';
    position: relative;
    height: 100%
}

div,form,ul,ol,li,span,p,dl,dt,dd,img,section,header,footer,input,textarea,a,i {
    margin: 0 auto;
    padding: 0;
    border: 0;
    outline：none；
    moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box
}

h1,h2,h3,h4,h5,h6 {
    font-size: 1.2em;
    font-weight: normal;
    margin: 0;
    padding: 0;
    border: 0
}

ul,ol,li {
    list-style: none;
    list-style-position: inside
}
.clear:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden
}
.wx_tip{ position:fixed; left:0; top:0; width:100%; height:100%; background:url(<?php BASE_URL() ?>images/wxpop.png) rgba(0,0,0,0.6) 90% 20px no-repeat;display:none;}
#content{width:640px;margin:0 auto;position:relative; height:100%;}
#content div img{ display:block; width:100%;}
#content a#download,#content a#download2{ display:block; position:absolute; width:298px; height:107px; top:50%; background: url(<?php BASE_URL() ?>images/btn1.png) no-repeat;left: 0;right: 0;margin:60px auto 0;}
#content a#download2{background: url(<?php BASE_URL() ?>images/btn2.png) no-repeat;margin:175px auto 0;}
</style>

</head>

<body>
<div id="content">
    <a id="download"  target="_blank" style="display:none" href="javascript:;"></a>
    <a id="download2" target="_blank" style="display:none" href="javascript:;"></a>
</div>
<div id="wx_tip" class="wx_tip"></div>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/edata.js"></script>
<script>
function getParam(_n){
     var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
         if(r!=null) return  decodeURIComponent(r[2]); return null;
}
$(function(){
    var urlOpen = {
        'iframe' : function(url) {
            var iframe = document.createElement('iframe');
            iframe.style.display = 'none';
            iframe.src = url;
            document.body.appendChild(iframe);
        }
    };
    var url = "http://shiwan.dl.gxpan.cn/apks/tr2/tr2.apk";
    var iosurl = "https://itunes.apple.com/cn/app/shen-miao-tao-wang2-quan-qiu/id1014227673?mt=8";
    var u = navigator.userAgent;
    var ua = u.toLowerCase();

    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        location.href = iosurl;
    }else{
        var isWxin = ua.match(/MicroMessenger/i)=="micromessenger";
        if(isWxin){
            urlOpen.iframe(url);
        }else{
            sToEdata("download");
            window.location = url;
        }
    }
    /*
    $("a").click(function(){
            if(isWxin){
                urlOpen.iframe(url);
            }else{
                window.location = url;
                sToEdata("download");
            }
        });*/

    sToEdata();
});

</script>
</body>
</html>
