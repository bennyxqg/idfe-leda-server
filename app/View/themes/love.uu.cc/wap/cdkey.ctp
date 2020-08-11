<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
    <meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=yes">
    <link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
</head>
<body class="bg2">
<div class="header">
    <h1>乐舞·中国好歌曲</h1>
</div>
<div class="cdkey_bg">
    <div class="cdkey">asdfasg33434</div>
    <div class="goIndex">
        <a href="/">进入官网</a>
    </div>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/cookie.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
    //
    $(".cdkey_bg").height($(window).height());
    var oldcdkey = $.cookie("cdkey");
    if(oldcdkey){
        $(".cdkey").html(oldcdkey);
    }else{
        $.ajax({
            type: 'post',
            url: '/send_code',
            dataType: 'json',
    		data: {code_id: 58},
    		success: function(res){
    			console.log(res);
    			if(res){
    				if(res.ret == 0){
    					var cdkey = res.code;
    					$.cookie("cdkey",cdkey);
    					$(".cdkey").html(cdkey);
    				}else if(res.ret == 4){
    					$(".cdkey").html('兑换码已不足！');
    				}
    			}
    		}
        });
    }
});

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
