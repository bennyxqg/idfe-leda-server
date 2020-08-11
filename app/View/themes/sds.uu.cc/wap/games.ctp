<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=750, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
<style>
    html,body{margin:0;padding:0;}
    .main{width:750px;margin:0 auto;}
    .main1{width:750px;height:930px;background:url('<?php FILE_PATH() ?>/wap/images/game1.jpg') no-repeat;background-size: 100%;margin-top:-1px;overflow:hidden;}
    .main1 a.btn{display:block;width:320px;height:108px;background:url('<?php FILE_PATH() ?>/wap/images/btn.png') no-repeat;background-size: 100%;margin: 810px auto 0;}
    .main2{width:750px;height:1521px;background:url('<?php FILE_PATH() ?>/wap/images/game2.jpg') no-repeat;background-size: 100%;margin-top:-1px;}
    .main3{width:750px;height:1039px;background:url('<?php FILE_PATH() ?>/wap/images/game3.jpg') no-repeat;background-size: 100%;margin-top:-1px;}
    footer{width:750px;height:201px;background:#040000;overflow:hidden;}
    footer p{margin:8px 0;color:#897171;line-height:30px;font-size:18px;text-align:center;}
</style>
</head>

<body>
    <div class="main">
    <div class="main1">
        <a class="btn" href="/download"></a>
    </div>
    <div class="main2"></div>
    <div class="main3"></div>
    <footer>
        <p>
            Copyright©2009-2016 <br/>
深圳市创梦天地科技有限公司 版权所有  粤ICP备11018438号<br/>
Copyright©2004-2013 Freejoy Technology Co. Ltd. <br/>
All rights reserved. 乐逍遥 版权所有<br/>
©Masami Kurumada/SHUEISHA<br/>
©SEGA
        </p>
    </footer>
    </div>
</body>