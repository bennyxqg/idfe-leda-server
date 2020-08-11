<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link rel="stylesheet" type="text/css" media="all" href="<?php FILE_PATH(); ?>/wap/css/style.css"  />
<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/icon.png">
</head>

<body>
    <?php require_once 'top.ctp';?>
    <div id="index">
        <div class="video_bg">
            <a class="video_btn video_btn_link" href="javascript:;" name="<?php echo GET_BLOCK('banner_video');?>"></a>
        </div>
        <a href="javascript:;" class="download"></a>
    </div>
    <?php require_once 'footer.ctp';?>
    <div class="zhezao"></div>
    <div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script>
$(document).ready(function(){
    
    var u = navigator.userAgent;
    var ua = u.toLowerCase();
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        var dl_url = "<?php echo GET_BLOCK('ios_download_url');?>";
    }else{
        var dl_url = "<?php echo GET_BLOCK('android_download_url');?>";
    }
    if(dl_url){
        $('.main1 .downLoad').attr('href','/download');
        $('header .download').attr('href','/download');
    }
    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        if(vedioSrc){
            $('.s_p_k video').attr('src',vedioSrc);
            $('.zhezao,.s_p_k').show();
        }else{
            alert("敬请期待！");
        }
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });
    
    
});
</script>
</body>
</html>