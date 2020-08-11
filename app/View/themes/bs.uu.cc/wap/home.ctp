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
		<div id="header">
			<div class="head">
				<div class="header">
					<div class="head_left">
					    <div class="head_icon"></div>
					    <p class="head_name">暗影旋风</p>
					    <span class="head_secondname">首款单触控制动作手游</span>
				    </div>
				    <!--<div class="head_right">
				        <a class="apoint"><img class="nav" src="<?php BASE_URL() ?>images/menu.png"><img class="close" src="<?php BASE_URL() ?>images/close.png"></a>
				        
				    </div>-->
				</div>
			</div>
			<div class="hiddenNav">
				<ul>
					<li><a href="news/1.html"></a></li>
					<li><a href="#main2"></a></li>
					<li><a href="#main3"></a></li>
					<li><a href="#main4"></a></li>
				</ul>
			</div>
			<div class="point">
				<div class="pointer">
					<div class="video_all">
						<a href="javascript:void(0)" class="video" data="<?php echo GET_BLOCK('banner_video');?>"><img src="<?php BASE_URL() ?>images/video_btn.png"></a>
					</div>
					<div class="down_area">
					    <!--安卓下载-->
						<a href="<?php echo GET_BLOCK('android_download_url');?>" class="down_android"></a>
						<!--苹果下载-->
						<a href="<?php echo GET_BLOCK('ios_download_url');?>" class="down_ios"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="container">
		<div class="content">
			<div class="secondpage">
				<div class="no_del">
					<div class="swiper-container">
				        <div class="swiper-wrapper">
				        <?php
                            SHOW_DATAS('<div class="swiper-slide"><a href="@@STR1@@"><img src="@@STR3@@"></a></div>','Y-m-d',0);
                         ?>
				        </div>
				        <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
				    </div>
				</div>
				<div class="package">
					<div class="g-news-box">
                        <div class="nav-news-box">
                            <div class="news-nav">
                                <a class="Li zxi zx" href="javascript:void(0)" target="_blank">最新</a>
                                <a class="Li gg" href="javascript:void(0)" target="_blank">公告</a>
                                <a class="Li zs" href="javascript:void(0)" target="_blank">资讯</a>
                                <a class="Li gl" href="javascript:void(0)" target="_blank">攻略</a>
                                <a class="newsmore" href="news/1.html" title="查看更多"></a>
                            </div>
                        </div>
                        <div class="tempWrap">
                            <div class="article_mes" style="width: 100%; height: 2.3rem;">
                                <div class="newsView">
                                	<div class="news_name">
                                		<ul class="opa">
                                		<?php
                                            SHOW_NEWS('<li><a class="clearfix" href="@@URL@@" target="_blank"><span>@@TITLE@@</span><em>@@DATE@@</em></a></li>','m/d',array('公告','资讯','攻略'),5,0,array('LimitFrom'=>0));
                                        ?>
                                        </ul>
                                	</div>
                                </div>
                            </div>
                            <div class="article_gov" style="width: 100%; height: 2.3rem;">
                                <div class="newsView">
                                	<div class="news_name">
                                		<ul class="opa">
                                            <?php
                                                SHOW_NEWS('<li><a class="clearfix" href="@@URL@@" target="_blank"><span>@@TITLE@@</span><em>@@DATE@@</em></a></li>','m/d',array('公告'),5,0,array('LimitFrom'=>0));
                                            ?>
                                        </ul>
                                	</div>
                                </div>
                            </div>
                            <div class="article_sto" style="width: 100%; height: 2.3rem;">
                                <div class="newsView">
                                	<div class="news_name">
                                		<ul class="opa">
                                            <?php
                                                SHOW_NEWS('<li><a class="clearfix" href="@@URL@@" target="_blank"><span>@@TITLE@@</span><em>@@DATE@@</em></a></li>','m/d',array('资讯'),5,0,array('LimitFrom'=>0));
                                            ?>
                                        </ul>
                                	</div>
                                </div>
                            </div>
                            <div class="article_con " style="width: 100%; height: 2.3rem;">
                                <div class="newsView">
                                	<div class="news_name">
                                		<ul class="opa">
                                            <?php
                                                SHOW_NEWS('<li><a class="clearfix" href="@@URL@@" target="_blank"><span>@@TITLE@@</span><em>@@DATE@@</em></a></li>','m/d',array('攻略'),5,0,array('LimitFrom'=>0));
                                            ?>
                                        </ul>
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="contern" id="main2">
			<div class="threepage">
				<!-- 游戏特色板块 -->
				<div class="character">
					<div class="swiper-content">
				        <div class="swiper-wrapper">
                        <?php
                            SHOW_DATAS('<div class="swiper-slide"><img src="@@STR2@@" style="width: 4.79rem;height: 4.63rem;"></div>','Y-m-d',1);
                         ?>
				        </div>

				        <!-- Add Arrows -->
				        <div class="swiper-button-prev"></div>
				        <div class="swiper-button-next"></div>
				    </div>
				</div>
			</div>
		</div>
		<div class="contert" id="main3">
			<div class="fourpage">
				<div class="video_left">
				<?php
                    $html = '<a href="javascript:void(0)" 
					style="background: url(@@str4@@) no-repeat center;background-size: 100% 100%;" class="video_btn1" 
					data-src="@@str2@@"></a><span class="video_name">@@str1@@</span>';
                    SHOW_DATAS($html,'Y-m-d',3, 1);
                ?>
				</div>
				<div class="video_right">
					<?php
                        $html = '<a href="javascript:void(0)" 
						style="background: url(@@str4@@) no-repeat center;background-size: 100% 100%;" class="video_btn2" 
						class="video_btn2" data-v2="@@str2@@"><span class="video_describe">@@str1@@</span></a>';
                        SHOW_DATAS($html,'Y-m-d',2, 2);
                    ?>
				</div>
			</div>
		</div>
		<div class="contact" id="main3">
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
							<a href="<?php echo GET_BLOCK('qq_jump1');?>">
								<img src="<?php BASE_URL() ?>images/QQ.png">
								<span>官方Q群</span>
								 <span><?php echo GET_BLOCK('qq_group');?></span> 
							</a>
						</li>
						<li class="list">
							<a href="javascript:void(0)">
								<img src="<?php BASE_URL() ?>images/tell.png">
								<span>官方客服</span>
								 <span><?php echo GET_BLOCK('kefu_qq');?></span> 
							</a>
						</li>
					</ul>
				</div>
				<a href="javascript:void(0)" class="back_top">返回顶部</a>
			</div>
		</div>
	</div>
	<footer>
		<div class="footer">
			Copyright©2009-2018  深圳市创梦天地科技有限公司<br>
			版权所有 粤ICP备11018438号
		</div>
	</footer>
<div class="dialog" id="dgvideo">
	<video autoplay poster controls src="" height="100%" width="100%" class="videof"></video>
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
<script>
	$(document).ready(function(){
		$('.apoint .nav').on('click',function(){
			$('.hiddenNav').show();
			$(this).hide();
			$('.apoint .close').show();
		});
		$('.apoint .close').on('click',function(){
			$('.hiddenNav').hide();
			$(this).hide();
			$('.apoint .nav').show();
		});
	})
</script>
</html>