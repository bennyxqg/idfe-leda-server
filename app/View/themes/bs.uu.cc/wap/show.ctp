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
<body>
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
	<div id="container">
	    <div class="show_title">
            <h3><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
            <p><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></p>
        </div>
        <div class="show_text"><?php SHOW_CURRENT_NEWS_INFO('content') ?></div>

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