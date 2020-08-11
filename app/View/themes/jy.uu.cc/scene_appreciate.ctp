<?php
$this->Website->init();
require_once 'header.ctp';
?>
<body>
<div id="content">
	<div class="top">
		<div class="wrap-menu">
			<a class="top-logo" href="/"></a>
			<div class="top-menu">
				<a class="menu-item menu1 act" href="/">官网首页</a>
				<a class="menu-item menu2" href="/news/1.html">游戏资讯</a>
				<a class="menu-item menu3" href="/welfare">福利中心</a>
				<a class="menu-item menu4" href="/news/2.html">游戏攻略</a>
				<a class="menu-item menu5" href="/media_appreciate/1.html">影音鉴赏</a>
			</div>
		</div>

	</div>
	<div class="panel-rank">
		<div class="panel-rank-wrap">
			<div class="panel-rank-item color-first">
				<div class="panel-rank-index">1</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_1');?></div>
			</div>
			<div class="panel-rank-item color-second">
				<div class="panel-rank-index">2</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_2');?></div>
			</div>
			<div class="panel-rank-item color-third">
				<div class="panel-rank-index">3</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_3');?></div>
			</div>
			<div class="panel-rank-item color-other">
				<div class="panel-rank-index">4</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_4');?></div>
			</div>
			<div class="panel-rank-item color-other">
				<div class="panel-rank-index">5</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_5');?></div>
			</div>
			<div class="panel-rank-item color-other">
				<div class="panel-rank-index">6</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_6');?></div>
			</div>
			<div class="panel-rank-item color-other">
				<div class="panel-rank-index">7</div>
				<div class="panel-rank-name"><?php echo GET_BLOCK('rank_7');?></div>
			</div>
		</div>

	</div>
	<!-- 右侧收缩面板S -->
	<!-- 右侧收缩面板S -->
	<div class="panel-box">
		<!--    <a href="###" class="panel-btn tribune" title="官网论坛"></a>-->
		<a href="###" class="panel-btn back-top" title="官网论坛"></a>
		<div class="download-panel">
			<div class="panel-arrow right"></div>
			<img class="panel-qr" src="<?php echo GET_BLOCK('weixin_qrcode');?>"/>
			<a class="panel-android" href="<?php echo GET_BLOCK('android_download_url');?>" title="Android下载"></a>
			<a class="panel-appstore" href="<?php echo GET_BLOCK('ios_download_url');?>" title="App Store下载" target="_blank"></a>
			<a class="panel-tel" href="###" title="电话"></a>
		</div>
	</div>

	<!-- 领取礼包弹窗S -->
	<div class="dialog exchange-dialog hide" id="start-get">
		<div class="close"></div>
		<input class="tel" id="tel" placeholder="输入手机号" value=""/>
		<input class="tel-code" id="tel-code" placeholder="输入验证码" value=""/>
		<div class="get-tel-code" id="get-tel-code">获取验证码</div>
		<img class="exchange-now" src="//dl.gamdream.com/website/jy/images/award-now@2x.png" alt="立即领取">
	</div>
	<!-- 获取兑换码成功S -->
	<div class="dialog exchange-success hide">
		<div class="close"></div>
		<div class="exchange-code" id="exchangeCode"></div>
		<div class="copycode" data-clipboard-text=""></div>
	</div>
	<!-- 兑换码已经领取过S -->
	<div class="dialog exchange-got hide" id="exchange-got">
		<div class="close"></div>
		<div class="exchange-code" id="exchange-got-code"></div>
		<div class="copycode" data-clipboard-text=""></div>
	</div>

	<div class="download-dialog hide">
		<div class="close"></div>
		<img class="android-qr" src="//dl.gamdream.com/website/jy/images/android-qr@2x.png">
		<img class="appstore-qr" src="//dl.gamdream.com/website/jy/images/appstore-qr@2x.png">
	</div>
	<div class="codeborder">
		<img id="scan-down" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt=""/>
		<a href="<?php echo GET_BLOCK('android_download_url');?>"><img id="scan-down-android" src="//dl.gamdream.com/website/jy/images/android@2x.png" alt=""/></a>
		<a href="<?php echo GET_BLOCK('ios_download_url');?>"><img id="scan-down-appstroe" src="//dl.gamdream.com/website/jy/images/appstore-download@2x.png" alt=""/></a>
	</div>
	<div class="main-content">
		<!-- 游戏资讯S -->
		<div>
			<div class="game-news-title"></div>
			<div class="game-news-box">
				<div class="news-banner">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php
							SHOW_DATAS('<div class="swiper-slide"><a href="JavaScript:void(0);"><img class="" width="100%" src="@@STR2@@" alt="@@STR1@@"></a></div>',
								'Y-m-d',0);
							?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<div class="news-list">
					<div class="news-type">
						<div class="nes-type-tab active">最新</div>
						<div class="nes-type-tab">资讯</div>
						<div class="nes-type-tab">攻略</div>
					</div>
					<!-- 新闻资讯tab对应的boxS -->
					<div class="news-tab news-list-box">
						<?php
						SHOW_NEWS('<div class="news-item-wrap"><a href="@@URL@@" class="news-item overflow-ellipsis">【@@CATEGORY_NAME@@】 @@TITLE@@</a><div class="news-date">@@DATE@@</div></div>','m/d',array('资讯','攻略'),6,0,array('LimitFrom'=>0));
						?>

					</div>

					<div class="news-tab news-list-box hide">
						<?php
						SHOW_NEWS('<div class="news-item-wrap"><a href="@@URL@@" class="news-item overflow-ellipsis">【@@CATEGORY_NAME@@】 @@TITLE@@</a><div class="news-date">@@DATE@@</div></div>','m/d',array('资讯'),6,0,array('LimitFrom'=>0));
						?>

					</div>

					<div class="news-tab news-list-box hide">
						<?php
						SHOW_NEWS('<div class="news-item-wrap"><a href="@@URL@@" class="news-item overflow-ellipsis">【@@CATEGORY_NAME@@】 @@TITLE@@</a><div class="news-date">@@DATE@@</div></div>','m/d',array('攻略'),6,0,array('LimitFrom'=>0));
						?>

					</div>
				</div>
			</div>
			<div class="opacity-block"></div>
			<!-- 福利中心S -->
			<div class="welfare-center">
				<a class="control-video control-video-pre" href="/welfare">
					<img width="100%" src="//dl.gamdream.com/website/jy/images/welfare-center@2x.png"/>
				</a>
				<div>
					<a class="goto-welfare" href="/welfare">
						<img width="100%" src="//dl.gamdream.com/website/jy/images/welpic@2x.png"/>
					</a>
					<div class="slide-block-shade"></div>
					<div class="slide-block"></div>
					<a class="goto-media" href="/media_appreciate/1.html">
						<img width="100%" src="//dl.gamdream.com/website/jy/images/audiopic@2x.png"/>
					</a>
				</div>
				<a class="control-video control-video-next" href="/media_appreciate/1.html">
					<img width="100%" src="//dl.gamdream.com/website/jy/images/audiovisual@2x.png"/>
				</a>
			</div>
			<!-- 家园图鉴S -->
			<div class="homescapes-center">
				<div class="homescapes-title"></div>
				<div class="homescene-wrap">
					<div class="sceneborder">
						<div class="scene-mask">
							<img id="austin" src="//dl.gamdream.com/website/jy/images/scene/1-Austinroom.png" alt=""/>
						</div>
					</div>
					<div class="role-des-wrap">
						<div id="nick-zh">奥斯汀房间</div>
						<div id="nick-en">Austin's room</div>
					</div>
					<div class="role-line"></div>
					<div id="role-detail">回到久违的家，一切还是那么温暖。</div>
					<div id="role-slide-box">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide act" data-nick="奥斯汀房间" data-ennick="Austin's room" data-detail="回到久违的家，一切还是那么温暖。" data-src="//dl.gamdream.com/website/jy/images/scene/1-Austinroom.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/1-Austinroom-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="门厅" data-ennick="Hall" data-detail="妈妈在舒适的沙发上看电视，爸爸在摇椅里读着书，这就是我想要的生活呀。" data-src="//dl.gamdream.com/website/jy/images/scene/2-Hall.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/2-Hall-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="厨房" data-ennick="Kitchen" data-detail="妈妈的厨房终于装修好了，又可以吃好吃的烤苹果派了！" data-src="//dl.gamdream.com/website/jy/images/scene/3-Kitchen.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/3-Kitchen-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="花园" data-ennick="Garden" data-detail="懒洋洋的下午，就适合在花园里慵懒地喝着下午茶，和心爱的人。" data-src="//dl.gamdream.com/website/jy/images/scene/4-Garden.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/4-Garden-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="车库" data-ennick="Garage" data-detail="有房有车，温柔体贴，奥斯汀这么好，嫁了吧！" data-src="//dl.gamdream.com/website/jy/images/scene/5-Garage.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/5-Garage-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="派对屋" data-ennick="Party room" data-detail="灯光摇曳、劲歌热舞，和小伙伴们一起嗨皮吧！" data-src="//dl.gamdream.com/website/jy/images/scene/6-Party-room.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/6-Party-room-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="图书馆" data-ennick="Library" data-detail="徜徉在知识的海洋里，岂不快乐？就像奥秃说的：“如果可以的话，我愿意把所有时间都花在看书上”。" data-src="//dl.gamdream.com/website/jy/images/scene/7-Library.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/7-Library-thumb.png" alt=""/>
								</div>
								<div class="swiper-slide" data-nick="休息室" data-ennick="Relaxroom" data-detail="累了的话，和小伙伴一起在休息室放松放松，岂不快哉！" data-src="//dl.gamdream.com/website/jy/images/scene/8-Relaxroom.png">
									<div class="role-shadow"></div>
									<img class="role-icon"  src="//dl.gamdream.com/website/jy/images/scene/8-Relaxroom-thumb.png" alt=""/>
								</div>
							</div>
						</div>
					</div>
					<!--                    <div class="role-button-prev"></div>
										<div class="role-button-next"></div>-->
					<a class="back-home" href="javascript:history.go(-1)"></a>

				</div>
			</div>
		</div>
		<div class="feature-box">
			<img class="feature-title" src="//dl.gamdream.com/website/jy/images/title3@2x.png" alt="游戏特色">
			<div class="feature-bg">
				<img class="chahu" src="//dl.gamdream.com/website/jy/images/chahu.png">
				<div id="certify">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php
								SHOW_DATAS('<div class="swiper-slide"><img width="100%" src="@@STR1@@"></div>',
								'Y-m-d',6,12);
							?>
						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
		<div class="social">
			<div class="social-item">
				<img class="social-erweima" src="//dl.gamdream.com/website/jy/images/erweima-wechat.jpg" alt="">
				<div class="social-icon wechat"></div>
				<div class="social-title">微信公众号</div>
			</div>
			<div class="social-item">
				<img class="social-erweima" src="//dl.gamdream.com/website/jy/images/erweima-qq.png" alt="">
				<div class="social-icon qq"></div>
				<div class="social-title">家园QQ群</div>
			</div>
			<div class="social-item">
				<img class="social-erweima" src="//dl.gamdream.com/website/jy/images/erweima-weibo.png" alt="">
				<div class="social-icon weibo"></div>
				<div class="social-title">官方微博</div>
			</div>
			<div class="social-item social-tiktok">
				<img class="social-erweima" src="//dl.gamdream.com/website/jy/images/tiktok.jpg" alt="">
				<div class="social-icon tiktok"></div>
				<div class="social-title">官方抖音号</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
require_once 'footer.ctp';
?>