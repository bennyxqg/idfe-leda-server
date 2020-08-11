<html>
<head>
<title>扫描二维码查看分数</title>
<style type="text/css">
*{ margin:0; padding:0;}
.qrcode{ width:300px; height:330px; margin:200px auto 0; border:1px solid #CCC;-moz-border-radius:15px;border-radius:15px;}
.qrcode img{ display:block; width:300px; height:300px;-moz-border-radius:20px;border-radius:20px;}
.qrcode span{ display:block; width:300px; height:30px; font-weight:bold;font-size:18px; text-align:center;}
</style>
</head>
<body>
<div class="qrcode"><img src="//sds.uu.cc/act/qrcode/<?php echo $id;?>"><span>扫二维码，查看分数</span></div>
</body>
</html>