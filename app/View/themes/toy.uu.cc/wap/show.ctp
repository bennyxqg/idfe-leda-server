<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
/*BLOCK*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//ddx.uu.cc/toy.uu.cc/wap/css/index.css" rel="stylesheet">
<link href="//ddx.uu.cc/toy.uu.cc/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>


<div class="container">
    <div class="inner" >
       <header id="header">
         <span class="logo"></span>
       </header>
    </div>
    <article>
    <?php /*BLOCK*/
       echo '<h1>'.GET_CURRENT_NEWS_INFO('title').'</h1>';
       echo '<span class="timer">时间：'.date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')).'</span>';
       echo '<p>'.GET_CURRENT_NEWS_INFO('content').'</p>';
    /*BLOCK*/ ?>
    </article>
     <footer id="footer">
       <ul>
          <li><a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
          <li>Copyright©2009-2014 &nbsp;&nbsp;深圳市创梦天地科技有限公司 版权所有</li>
          <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
          <li>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
       </ul>
    </footer>
</div>




</body>
</html>