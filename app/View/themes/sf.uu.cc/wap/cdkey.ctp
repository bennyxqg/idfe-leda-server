<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=480,user-scalable=no" />
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link media="screen" href="<?php echo $full_base_url ?>/css/reset.css" rel="stylesheet" type="text/css">
<link media="screen" href="<?php echo $full_base_url ?>/css/download.css" rel="stylesheet" type="text/css">
<style type="text/css">
.cdkey{color:#fff;font-size:24px;font-weight:700;line-height:56px;width:197px;height:56px;margin:10px auto;border:1px solid #000;}
.tip{color:#fff;margin:0 0 0 146px;font-size:14px;text-align:left;padding:14px 0 100px;}
</style>
</head>
<body>
<div class="page">
    <div class="header">
        <h1>天降</h1>
    </div>
   <div class="div_content">
        <p class="cdkey">读取中...</p>
        <div class="tip">
             <p>说明：</p>
             <p>1：每个账号只能使用一次礼包。</p>
             <p>2：游戏中点击左上角人物头像激活。</p>
             <p>3：请尽快使用。</p>
         </div>
   </div>
   <div class="footer">
        <img src="<?php echo $full_base_url ?>/images/logo.png" alt="" />
        <p>深圳市创梦天地科技有限公司  联系电话：0755-86110235 </p>
        <p>地址：深圳市南山区高新科技园中区科苑路15号科兴科学园A栋</p>
        <p>Copyright©2012 All Rights Reserved</p>
        <p>粤ICP备11018438号<a href="//www.sznet110.gov.cn/netalarm/index.jsp" target="_blank"><img src="<?php echo $full_base_url ?>/images/shenwang.png" alt="" /></a>
        <a href="//www.sznet110.gov.cn/webrecord/doquery.jsp" target="_blank"><img src="<?php echo $full_base_url ?>/images/anwang.png" alt="" /></a>
        <a href="//net.china.com.cn/index.htm" target="_blank"><img src="<?php echo $full_base_url ?>/images/jubao.png" alt="" /></a>
        <a href="//www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank"><img src="<?php echo $full_base_url ?>/images/beian.png" alt="" /></a>乐逗游戏 版权所有</p>
   </div>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/cookie.js" type="text/javascript"></script>
<script type="text/javascript">
if(navigator.userAgent.indexOf('Android') > -1)
{
    var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
    var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
    document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
}
$(function(){
    var cdkey = $.cookie("cdkey");
    if(cdkey){
         alert("您已经领取过礼包");
         $(".cdkey").html(cdkey);
    }else{
        $.post("/send_code",{site_id:11,code_id:42},function(res){
            console.log(res);
            if(res.ret == 0){
                $(".cdkey").html(res.code);
                $.cookie("cdkey",res.code);
            }else{
                alert(res.msg);
            }
        },"json");
    }
})
</script>
</body>
</html>