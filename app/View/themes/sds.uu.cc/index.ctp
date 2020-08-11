<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<link rel="shortcut icon" href="//sds.uu.cc/sds.uu.cc/favicon.ico">

<style type="text/css">
blockquote,body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,hr,input,legend,li,ol,p,pre,td,textarea,th,ul {margin:0;padding:0}
body,button,input,select,textarea { font:12px/1.5 tahoma,arial,'Microsoft Yahei',\5b8b\4f53,sans-serif}
h1,h2,h3,h4,h5,h6 {font-size:100%}
address,cite,dfn,em,var {font-style:normal}
code,kbd,pre,samp {font-family:courier new,courier,monospace}
small {font-size:12px}
ol,ul,li{list-style:none}
a {text-decoration:none}
a:hover {text-decoration:none}
fieldset,img {border:0}
.clearfix:after{content:".";display:block;height:0;font-size:0;clear:both;visibility:hidden;overflow:hidden}
html[xmlns] .clearafter,iframe{display:block;}
button,input,select,textarea {font-size:100%;outline:none;}
table {border-collapse:collapse;border-spacing:0}
.pr{position:relative;}
.pa{position:absolute;}
.fHide{text-indent:-9999px;overflow:hidden;}
.fl{float:left;}
.fr{float:right;}

    .main{position: relative;height: 963px;background: url(<?php BASE_URL() ?>images/indexBg.jpg) 50% 0 no-repeat;}
    .goHome{position: absolute;top: 20px;right:6px; display: block;width: 294px;height: 66px;background: url(<?php BASE_URL() ?>images/btnGoHome.png) no-repeat;}

/*   底部样式  */
#foot{position:relative;width:100%;height:173px;background-color:#110c20;overflow:hidden;clear:both;}
.footer{color:#7464a2;width:970px;margin:0 auto;font-size:12px;position:relative;padding:20px 0 0;font-family:Helvetica,Arial,sans-serif;}
.footer img{vertical-align:middle;}
.footer .logo{float:left;margin-top:8px;padding-right:35px;height:60px;}
.footer .logo img{display:inline-block;height:50px;}
.footer .logo-dev{padding-top:10px;margin-left:10px;}
.footer p{padding-bottom:5px;height:20px;line-height:20px;}
.footer a{color:#7464a2;text-decoration:none}
.footer a:hover{text-decoration:none;}
.footer .cr{float:left;padding-top:18px;padding-bottom:20px;padding-left:0px;line-height:21px;}
.footer .cr span{margin-right:20px;}
.footer .cr .link a{margin:0 5px;}
.footer .wj{float:right;margin:-26px 78px 0 0;}
.game_rule{position:absolute;left:0;top:100px;}

    .popRight{position: fixed;right: 0;top: 100px; width: 180px;height: 518px;background:#5f1c88 url(<?php BASE_URL() ?>images/indexPopBg.jpg) no-repeat;}
    .popRight img{display: block;width: 137px;height: 137px;margin: 43px auto 10px;}
    .popRight .text_qq{ text-align: center;color:#eee;margin-top: 8px;color:#a96dda; }
    .popRight a.downLink{display: block;width: 140px;height: 35px;margin: 9px auto 0;}
    .popRight ul{width: 180px;padding-top: 42px;}
    .popRight li{width: 180px;height: 41px;line-height: 41px;margin-bottom: 2px;text-indent:70px;font-size:18px;color:transparent;}
    .popRight li a{position: relative;display: block;width: 180px;height: 41px;color:transparent;}
    .popRight .qq{padding-top: 48px;font-size: 14px; color:#a96dda;text-align: center;}
    .weixShow .weixPop{display: none;position: absolute;left: -135px;top: -8px; width: 131px;height: 119px;background: url(<?php BASE_URL() ?>images/erweima1.png) no-repeat;}
    .weixShow .weixPop img{display: block;width: 107px;height: 107px;margin: 6px 0 0 6px;}
    .weixShow a:hover .weixPop{display: block;}
</style>
</head>

<body>



<!-- <div class="main">
    <a class="goHome" href="http://sds.uu.cc/home/" target="_blank"></a>
</div>

<?php require_once("_footer.ctp"); ?>

    <div class="popRight">
        <img src="<?php BLOCK('game_download_qrcode') ?>" />
        <a class="downLink" href="<?php BLOCK('ios_download_url') ?>" target="_blank"></a>
        <a class="downLink" href="<?php BLOCK('android_download_url') ?>" target="_blank"></a>
        <ul>
            <li class="weixShow">官方微信<a href="javascript:;"><div class="weixPop"><img src="<?php BASE_URL() ?>images/qrcode_for_gh_afad88dc94e6_860.jpg"></div></a></li>
            <li><a href="http://dq.tieba.com/f?kw=%CA%A5%B6%B7%CA%BF%D0%C7%CA%B83d&fr=home"  target="_blank">官方贴吧</a></li>
            <li><a href="http://bbs.uu.cc/forum.php?mod=forumdisplay&fid=343"  target="_blank">官方论坛</a></li>
            <li><a href="http://bbs.uu.cc/forum.php?mod=forumdisplay&fid=343"  target="_blank">官方QQ群</a></li>
        </ul>
        <p class="text_qq"><?php BLOCK('qq_group1') ?> / <?php BLOCK('qq_group2') ?></p>
    </div> -->


</body>
<script type="text/javascript">
    window.location.href = '//sds.uu.cc/news/315';
</script>
</html>
