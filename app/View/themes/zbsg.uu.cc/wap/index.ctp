
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
	$this->Website->init();
	echo '<title>'.GET_BLOCK('web_title').'</title>';
	echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
	echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
	?>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta content="telephone=no" name="format-detection"/>
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/swiper.css">
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/index.css?ver=201710124">
<link rel="shortcut icon" href="<?php BASE_URL() ?>ico.ico">
<script type="text/javascript">
	var devieWidth=Math.min(750,document.documentElement.clientWidth);
	document.documentElement.style.fontSize=devieWidth/7.5+'px';
	if(!(navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
		//window.location.href=location.href.substring(0,location.href.lastIndexOf('/'))+'/pc.html';
	}
</script>
</head>
<body>
<div class="mpage">
	<div class="header box">
		<div class="img"><img src="<?php BASE_URL() ?>images/ico.png"/></div>
		<div class="text flex">
			<h3>造兵三国</h3>
			<p>三国战争策略手游</p>
		</div>
		<a href="javascript:;" title="立即预约" class="yuyue"></a>
	</div>
	<div class="floor1">
		<div class="log"><img src="<?php BASE_URL() ?>images/log.png"/></div>
		<div class="play_btn active" data-src="<?php echo GET_BLOCK('vedio_url');?>"></div>
		<div class="yuyue" title="立即预约"></div>
	</div>
	<div class="floor2">
		<i class="fen"></i>
		<div class="mt">
			<h3><img src="<?php BASE_URL() ?>images/tit1.png"/></h3>
			<p>
				当预约用户量达到相应量后，相应礼包将在<br/>
				游戏开测后发送给全体游戏玩家！
			</p>
		</div>
		<div class="full_all">
			<div class="full_box">
				<div class="full"></div>				
			</div>
			<ul class="ico_list">
				<li class="p1"></li>
				<li class="p2"></li>
				<li class="p3"></li>
				<li class="p4"></li>
			</ul>
			<ul class="full_text">
				<li class="active">
					预约用户<br/>
					达到<span>40万</span>
				</li>
				<li>
					预约用户<br/>
					达到<span>80万</span>
				</li>
				<li>
					预约用户<br/>
					达到<span>100万</span>
				</li>
				<li>
					预约用户<br/>
					达到<span>200万</span>
				</li>
			</ul>
		</div>	
		<ul class="list">
			<li>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f1/1.jpg"/>
				</div>
				<div class="text">
					粮食x800<br/>
					木材x800
				</div>
			</li>
			<li>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f1/2.jpg"/>
				</div>
				<div class="text">
					银币x1000<br/>
					粮食x1000<br/>
				</div>
			</li>
			<li>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f1/3.jpg"/>
				</div>
				<div class="text">
					粮食x2000<br/>
					突飞令x1 加速令x1
				</div>
			</li>
			<li>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f1/4.jpg"/>
				</div>
				<div class="text">
					突飞令x2<br/>
					加速令x2
				</div>
			</li>
		</ul>
	</div>
	<div class="floor3">
		<i class="fen"></i>
		<div class="mt">
			<h3><img src="<?php BASE_URL() ?>images/tit2.png"/></h3>
			<p>
				当游戏上线后将会以短信形式发放<br/>
				礼包码到相应预约手机号
			</p>
		</div>
		<ul class="list">
			<li>
				<p class="num">01</p>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f2/1.png"/>
				</div>
				<div class="text">粮食x1500</div>
			</li>
			<li>
				<p class="num">02</p>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f2/2.png"/>
				</div>
				<div class="text">木材x2000</div>
			</li>
			<li>
				<p class="num">03</p>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f2/3.png"/>
				</div>
				<div class="text">银币x500</div>
			</li>
			<li>
				<p class="num">04</p>
				<div class="img">
					<img src="<?php BASE_URL() ?>images/f2/4.png"/>
				</div>
				<div class="text">突飞令x3</div>
			</li>			
		</ul>
	</div>
	<div class="floor4">
		<i class="fen"></i>
		<div class="mt">
			<h3><img src="<?php BASE_URL() ?>images/tit3.png"/></h3>
		</div>
		<div class="banners">
			<div class="game-list" id="gameList">
	            <ul class="swiper-wrapper">
	              <li class="swiper-slide">
	                  <div class="img"><img src="<?php BASE_URL() ?>images/banner/1.jpg" alt=""></div>
	              </li>
	              <li class="swiper-slide">
	                  <div class="img"><img src="<?php BASE_URL() ?>images/banner/2.jpg" alt=""></div>
	              </li>
	              <li class="swiper-slide">
	                  <div class="img"><img src="<?php BASE_URL() ?>images/banner/3.jpg" alt=""></div>
	              </li>
	              <li class="swiper-slide">
	                  <div class="img"><img src="<?php BASE_URL() ?>images/banner/4.jpg" alt=""></div>
	              </li>             
	            </ul>
	            <div class="banner_left"></div>
				<div class="banner_right"></div>
	         </div>			
		</div>
	</div>
	<div class="floor5">
		<div class="mt box">
			<div class="code">
				<img src="<?php echo GET_BLOCK('weixin_qrcode');?>"/>
			</div>
			<div class="text flex">
				<h3>搜索公众号：<?php echo GET_BLOCK('weixin_account');?></h3>
				<p>
					或长按二维码保存至相册，微信中<br/>
					使用扫一扫>相册>选择二维码图片
				</p>
			</div>
		</div>
		<div class="mc">
			<ul class="list">
				<li>
					<a href="<?php echo GET_BLOCK('forum_url');?>">
						<img src="<?php BASE_URL() ?>images/ft1.png"/>
						<p>官方论坛</p>
					</a>
				</li>
				<li>
					<a href="<?php echo GET_BLOCK('baidu_tieba_url');?>">
						<img src="<?php BASE_URL() ?>images/ft2.png"/>
						<p>官方贴吧</p>
					</a>
				</li>
				<li>
					<a href="<?php echo GET_BLOCK('weibo_url');?>">
						<img src="<?php BASE_URL() ?>images/ft3.png"/>
						<p>官方微博</p>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<img src="<?php BASE_URL() ?>images/ft4.png"/>
						<p>
							官方qq群<br/>
							<?php echo GET_BLOCK('qq_qun_1');?><br/>
							<?php echo GET_BLOCK('qq_qun_2');?>
						</p>
					</a>
				</li>
				<li>
					<a href="tel:<?php echo GET_BLOCK('weixin_qrcode');?>">
						<img src="<?php BASE_URL() ?>images/ft5.png"/>
						<p>
							官方客服
							<?php echo GET_BLOCK('kefu_phone');?><br/>
						</p>
					</a>
				</li>
			</ul>
			<a class="back_top" href="javascript:scrollTo(0,0);">返回顶部</a>
		</div>
	</div>
	<div class="footer">
		Copyright©2009-2017  深圳市创梦天地科技有限公司<br>
		版权所有 粤ICP备11018438号
	</div>
</div>	
<div class="video-hide" id="video"></div>
<section class="dlog-share">
  <img src="<?php BASE_URL() ?>images/share.png">
  <p class="share-text">在浏览器打开</p>
</section>
<section class="dlog_sub">
	<div class="main">
		<div class="close"></div>
		<div class="text">
			回归经典的三国策略对战手游《造兵三国》重磅来袭！历史名<br/>
			将逐一登场，运筹帷幄指点沙场！城池建筑自由排列，主公天<br/>
			赋搭配建筑建造，偏战斗或偏发展随你心意，弓、骑、步三大<br/>
			体系，12类兵种，38位历史名将，阵型排列相生相克。探索<br/>
			世界地图、资源点随机生成，快来体验吧！
		</div>
		<div class="sys">
			<div class="sys_btn android active" type="2"><i></i>安卓</div>
			<div class="sys_btn ios" type="1"><i></i>iOS</div>
		</div>
		<div class="ins_box">
			<input type="number" id="phoneNum" placeholder="请输入手机号码">
		</div>
		<div class="sub_btn"></div>
		<p class="ps">PS：礼包将通过短信礼包码的形式发放到您的手机中。<p>
	</div>
</section>
<script charset="utf-8" src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script charset="utf-8" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jweixin-1.0.0.js"></script>
<script charset="utf-8" src="<?php BASE_URL() ?>js/index.js?ver=201710124"></script>
</body>
</html>