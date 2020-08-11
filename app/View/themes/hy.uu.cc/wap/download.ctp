<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>

<script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<style type="text/css">
html,body {
    position: relative;
    height: 100%
}

body {
    background:url(//dl.gamdream.com/market/hy.uu.cc/20171107/images/index.jpg?v=1) #fff no-repeat;
    background-size: 100% 100%;
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


.wx_tip{ position:fixed; left:0; top:0; width:100%; height:100%; background:url(//dl.gamdream.com/market/hy.uu.cc/20181016//yindaoye.jpg?v=11) #fff center no-repeat; background-size:100% auto; display:none;}

a.close{position:fixed;display: block;right:50%;margin-right:-30px;bottom:200px;width:80px;height:80px;background:url(//game-resource.uu.cc/hy.uu.cc/wap/images/close.png) rgba(0,0,0,0.6) center center no-repeat;-moz-border-radius:100%;border-radius:100%;z-index: 99;}

</style>
<link rel="shortcut icon" href="//game-resource.uu.cc/hy.uu.cc/favicon.ico">
</head>

<div id="wx_tip" class="wx_tip"></div>

<a id="close" class="close" style="display: none"></a>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/js/edata.js"></script>
<script>

function getParam(_n){
     var reg = new RegExp("(^|&)"+ _n +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
         if(r!=null) return  decodeURIComponent(r[2]); return null;
}
document.getElementById("close").addEventListener('touchstart', function(e)
{
    document.querySelector('.wx_tip').style.display='none';
    document.querySelector('.close').style.display='none';
    e.stopPropagation();
});

var u = navigator.userAgent;
var ua = u.toLowerCase();
var isWxin = ua.match(/MicroMessenger/i)=="micromessenger";
//数据统计
var page_id = "tutorial_downloadpage";
sToEdata("show_page",page_id);
function is_weixn(){
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        location.href="<?php echo GET_BLOCK('ios_download_url');?>";
        return;
    }
    if(isWxin){
        document.querySelector('.wx_tip').style.display='block';
        sToEdata("show_win_w",page_id);
    }else {
        location.href="<?php echo GET_BLOCK('android_download_url');?>";
        var type = getParam("type");
        if(type && type == "qr_code"){
            sToEdata("qrcode_download",page_id);
        }else{
            sToEdata("download",page_id);
        }
    }
};
is_weixn();

</script>
<script>
$(function(){
    wx.config({
        debug: false,
        appId: '<?php echo $wxSignPackage["appId"];?>',
        timestamp: '<?php echo $wxSignPackage["timestamp"];?>',
        nonceStr: '<?php echo $wxSignPackage["nonceStr"];?>',
        signature: '<?php echo $wxSignPackage["signature"];?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
        ]
    });
    wx.ready(function () {
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
            link:'<?php echo $wxSignPackage["url"];?>',
            imgUrl: "<?php echo GET_BLOCK('share_img');?>", // 分享图标
            success: function () {
               // alert('success');
            },
            cancel: function () {
                //alert('cancel');
            }
        });
        wx.onMenuShareAppMessage({
             title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
             desc: "<?php echo GET_BLOCK('share_desc');?>",
             link:'<?php echo $wxSignPackage["url"];?>',
             imgUrl: "<?php echo GET_BLOCK('share_img');?>", // 分享图标
             trigger: function (res) {

             },
             success: function (res) {
                 //alert('分享成功！');
             },
             cancel: function (res) {
                 //alert('已取消！');
             },
             fail: function (res) {
                 alert(JSON.stringify(res));
             }
         });
         wx.onMenuShareQQ({
             title: "<?php echo GET_BLOCK('share_title');?>", // 分享标题
             desc: "<?php echo GET_BLOCK('share_desc');?>", // 分享描述
             link: '<?php echo $wxSignPackage["url"];?>', // 分享链接
             imgUrl: '<?php echo GET_BLOCK('share_img');?>', // 分享图标
             success: function () {
             // 用户确认分享后执行的回调函数
             },
             cancel: function () {
             // 用户取消分享后执行的回调函数
             }
         });
     });
});
</script>
<body>


</body>
</html>
