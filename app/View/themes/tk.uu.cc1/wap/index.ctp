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
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    	<header id="header">
    		<img src="<?php BASE_URL() ?>images/bander.jpg" width="960" height="404">
    	</header>
        <nav id="nav">
          <a class="on" href="/"><em></em>首页</a>
          <a href="<?php CATEGORY_URL('新闻') ?>"><em></em>游戏新闻</a>
          <a href="<?php CATEGORY_URL('攻略') ?>"><em></em>攻略指引</a>
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
        <section id="lunbo">
             <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php
                	SHOW_DATAS('<div class="swiper-slide"><a target="_blank" href="@@STR2@@"><img src="@@STR1@@" width="890" height="455" /></a></div>','m-d',0,24,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        
            <!-- Swiper JS -->
            <script src="<?php BASE_URL() ?>js/swiper.min.js"></script>
        
            <!-- Initialize Swiper -->
            <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 1,
                paginationClickable: true,
                spaceBetween: 30,
                loop: true
            });
            </script>
            
            <p id="wx_qq">
               <span class="wx">微信号：<?php BLOCK('weixin_account') ?></span>
               <span class="qq">玩家QQ群：<?php BLOCK('qq_group') ?></span>
            </p>
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