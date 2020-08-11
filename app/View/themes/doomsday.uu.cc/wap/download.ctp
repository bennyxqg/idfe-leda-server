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
<link rel="shortcut icon" href="<?php FILE_PATH(); ?>/favicon.ico">
<style type="text/css">
html,body {
    position: relative;
    height: 100%
}

body {
    margin: 0;
    padding: 0;
    position: relative;
    height: 100%
}
div{position:absolute;left:0;top:0;bottom:0;right:0;background:url('<?php FILE_PATH(); ?>/wap/images/dl_page_bg.jpg') #fff no-repeat;
    background-size: 100% 100%;}
</style>
<body>
<div style="display:none"></div>
</body>
<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/jquery-1.9.1.js"></script>
<script>
var u = navigator.userAgent;
var ua = u.toLowerCase();
var isWxin = ua.match(/MicroMessenger/i)=="micromessenger";
function is_weixn(){
    if(isWxin){
        $("div").show();
        return false;
    }else {
        if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
            var dl_url ="<?php echo GET_BLOCK('ios_download_url');?>";
        }else{
            var dl_url = "<?php echo GET_BLOCK('android_download_url');?>";
        }
        if(!dl_url){
            alert("敬请期待！");
        }else{
            location.href = dl_url;
        }
    }
}
is_weixn();
</script>
</html>



