<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
$this->Website->init();
?>
<title><?php BLOCK('web_title') ?></title>
<meta name="description" content="<?php BLOCK('web_description') ?>">
<meta name="keywords" content="<?php BLOCK('web_keywords') ?>">
<link href="<?php BASE_URL() ?>css/mobile.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    	<header id="header">
    		<img src="<?php BASE_URL() ?>images/bander.jpg" width="960" height="404">
    	</header>
        <nav id="nav">
          <a href="/"><em style="background-position:0 -2px"></em>首页</a>
          <?php
          if($category_id == GET_CATEGORY_ID('新闻'))
          {
          	$s1='class="on"';
          	$s2='style="background-position:-78px -90px"';
          	$s3='';
          	$s4='';
          }
          else if($category_id == GET_CATEGORY_ID('攻略'))
          {
          	$s1='';
          	$s2='';
          	$s3='class="on"';
          	$s4='style="background-position:-161px -90px"';
          }
          ?>
          <a <?php echo $s1 ?> href="<?php CATEGORY_URL('新闻') ?>"><em <?php echo $s2 ?>></em>游戏新闻</a>
          <a <?php echo $s3 ?> href="<?php CATEGORY_URL('攻略') ?>"><em <?php echo $s4 ?>></em>攻略指引</a>
          <a href="<?php BLOCK('forum_url') ?>"><em></em>论坛</a>
        </nav>
        <aside id="icon_down">
           <p>
             <img src="<?php BLOCK('game_icon') ?>" width="134" height="134" />
             <span>
               <strong><?php BLOCK('game_name') ?></strong>
               <em>游戏大小：<?php BLOCK('game_package_size') ?></em>
             </span>
           </p>
           <a class="down_load" href="//tk.uu.cc/download"><img src="<?php BASE_URL() ?>images/download.png" width="255" height="134" /></a>
        </aside>
        <section id="xinwen">
          <ul>
          <?php
          	SHOW_NEWS('<li><a href="@@URL@@"><img src="//tk.uu.cc/tk.uu.cc/wap/images/xw_bj.gif" width="24" height="24" />@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',GET_CATEGORY_NAME($category_id),8,$page,array());
          ?>
          </ul>
        </section>
        <footer id="footer">
            <img src="<?php BASE_URL() ?>images/logo.png" width="294" height="118" /><br />
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗 </p>
            <p>适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </footer>
    </div>
    
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
</body>

</html>