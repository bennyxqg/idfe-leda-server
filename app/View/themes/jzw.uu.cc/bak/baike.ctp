<?php
$this->Website->init();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php TITLE() ?></title>
<meta name="description" content="<?php DESCRIPTION() ?>">
<meta name="keywords" content="<?php KEYWORDS() ?>">
<style type="text/css">
html,body,h1,h2,h3,h4,h5,h6,div,dl,dt,dd,ul,ol,li,p{margin:0;padding:0;}
body {padding:0;margin:0;background:black;}
html,body,fieldset,img,iframe,abbr {border:0;}
li {list-style:none;}
textarea {overflow:auto;resize:none;}
a,button {cursor:pointer;}
h1,h2,h3,h4,h5,h6,em,strong,b {font-weight:bold;}
a,a:hover {text-decoration:none;}
body,textarea,input,button {color:#62a1c9;}
html,body {width:100%;height:100%;}
.hide {display:none;}
body {background-color:#fff;font-family:"Microsoft YaHei";}
.news {width:750px;padding:0 30px;}
.news li {height:125px;padding:30px 0;border-bottom:1px solid lightgray;}
.news li .pic {float:left;width:180px;height:130px;}
.news li .text {float:right;width:530px;margin-left:30px;}
.news li .text .title {height:27px;overflow:hidden;font-size:20px;color:#000;}
.news li .text .content {overflow:hidden;font-size:14px;color:gray;height:68px;padding:10px 0;line-height:24px;}
.news li .text .time {font-size:12px;color:gray;}
</style>
</head>

<body>
<ul class="news">

	<?php
	
	$html=<<<_HTML
	<li><img src="@@BIG_IMAGE@@" alt="pic" class="pic">
        <div class="text">
            <a href="@@URL@@" class="title" target="_blank">@@TITLE@@</a>
            <p class="content">@@DESCRIPTION@@</p>
            <div class="time">@@DATE@@</div>
        </div>
    </li>
_HTML;
	SHOW_BAIKE_NEWS($html,'Y-m-d',20,$page,array());
	?>
	
</ul>
</body>
</html>
