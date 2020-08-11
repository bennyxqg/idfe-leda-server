<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=480, user-scalable=yes">
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/m.css" type="text/css" />
</head>
<body>
<div class="page">
    <input id="cdkey" type="text" value="" />
    <p>长按复制，登录游戏内，点击“设置”按钮，激活使用</p>
    <a href="/"><img class="btn" src="<?php echo $full_base_url ?>/images/m_btn.png" alt=""></a>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=40283245" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript">
$(function(){
	var oldkey = $.cookie("cdkey");
	if(oldkey){
		$("#cdkey").val(oldkey);
	}else{
		$.ajax({
			type: 'post',
			url: '/send_code',
			dataType: 'json',
			data: {code_id: 52},
			success: function(res){
				console.log(res);
				if(res){
					if(res.ret == 0){
						var cdkey = res.code;
						$.cookie("cdkey",cdkey);
						$("#cdkey").val(cdkey);
					}else if(res.ret == 4){
						$("#cdkey").val('兑换码已不足！');
					}
				}
			}
		})
	}
})
</script>
</body>
</html>