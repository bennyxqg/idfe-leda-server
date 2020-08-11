<!DOCTYPE html>
<html>
<head>
	<?php
        $this->Website->init();
        echo '<title>'.GET_BLOCK('web_title').'</title>';
        echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
        echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
	<link rel="shortcut icon" href="http://dl.gamdream.com/activity/gavin/AHCQ//icon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" user-scalable="no">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/swiper-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php BASE_URL() ?>css/reset.css"/>
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/common.css"/>
    <script type="text/javascript">
        var devieWidth=Math.min(750,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
</head>
<body style="background:#100a0a">
<header>
    <div id="header" style="height:1.3rem;">
        <div class="head">
            <div class="header">
                <div class="head_left">
                    <div class="head_icon"></div>
                    <p class="head_name">暗影旋风</p>
                    <span class="head_secondname">首款单触控制动作手游</span>
                </div>
                <!--<div class="head_right">
                    <a class="apoint"><img src="<?php BASE_URL() ?>images/menu.png"></a>
                </div>-->
            </div>
        </div>
    </div>
</header>
	<div id="container"  style="background:url('<?php FILE_PATH() ?>/images/news_bg.jpg');">
		<div class="news">
            <?php
                $config = array(
                    1 => array('资讯','公告','攻略'),
                    2 => array('资讯'),
                    3 => array('公告'),
                    4 => array('攻略'),
                );
            ?>
            <div class="news_title">
                <a <?php if ($category_id == 1) echo 'class="active"';?> href="/news/1.html">最新</a>
                <a <?php if ($category_id == 2) echo 'class="active"';?> href="/news/2.html">资讯</a>
                <a <?php if ($category_id == 3) echo 'class="active"';?> href="/news/3.html">公告</a>
                <a <?php if ($category_id == 4) echo 'class="active"';?> href="/news/4.html">攻略</a>
            </div>
            <div class="count off">
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><span>[@@CATEGORY_NAME@@] </span><p> @@TITLE@@</p><i>@@DATE@@</i></a></li>','m/d',$config[$category_id],6,$page,array('LimitFrom'=>0));
                    ?>
                </ul>
                <div class="pages">
                    <?php
                        SHOW_PAGINATION2($config[$category_id],10,array("pageId"=>$category_id),$page);
                    ?>
                </div>
            </div>
        </div>
		<div class="contact">
			<div class="way">
				<div class="mode">
					<ul class="indicat">
						<li class="list">
							<a href="javascript:void(0)" class="wechat">
								<img src="<?php BASE_URL() ?>images/wechat.png">
								<span>公众号</span>
							</a>
						</li>
						<li class="list">
							<a href="<?php echo GET_BLOCK('weibo_url');?>">
								<img src="<?php BASE_URL() ?>images/weibo.png">
								<span>微博</span>
							</a>
						</li>
						<li class="list">
							<a href="javascript:void(0)">
								<img src="<?php BASE_URL() ?>images/QQ.png">
								<span>官方Q群<?php echo GET_BLOCK('qq_group');?></span>
								<!-- <span>123456789</span> -->
							</a>
						</li>
						<li class="list">
							<a href="javascript:void(0)">
								<img src="<?php BASE_URL() ?>images/tell.png">
								<span>官方客服<?php echo GET_BLOCK('kefu_qq');?></span>
								<!-- <span></span> -->
							</a>
						</li>
					</ul>
				</div>
				<a href="javascript:void(0)" class="back_top">返回顶部</a>
			</div>
		</div>
	</div>
<?php require_once '_footer.ctp';?>
<div class="dialog" id="dgvideo">
	<video autoplay poster controls src="" class="videof"></video>
</div>
<div class="fade"></div>
<div class="dia_code">
	<div class="code">
		<img src="<?php echo GET_BLOCK('weixin_qrcode');?>" class="long_click">
	</div>
	<div class="gzh">
		官方微信公众号：<?php echo GET_BLOCK('weixin_account');?>
	</div>
	<div class="gzh_way">
		长按识别二维码，或保存相册，微信中使用扫一扫>相册>选择二维码图片
	</div>
</div>
</body>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script charset="utf-8" type="text/javascript"  src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/common.js"></script>
</html>