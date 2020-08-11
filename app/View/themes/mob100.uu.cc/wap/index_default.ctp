 <?php
    $this->Website->init();
    $siteId = $GLOBALS['site_id'];
?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="telephone=no" name="format-detection">
 	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<?php
	    echo '<title>'.GET_BLOCK('web_title').'</title>';
	    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
	    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
	?>

	<!--<link rel="stylesheet" href="js/swiper.min.css">-->
  	<link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/storm/mob100/wap/css/index.css">

	<link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.3.1.min.css">
  	<link rel="shortcut icon" href="http://mob100.uu.cc/manage/upload/image/mob100.uu.cc/2018-11-14/20181114_174814_750383.png">
  	    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
	<script type="text/javascript">
		var devieWidth = Math.min(750, document.documentElement.clientWidth);
		document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';
	</script>

</head>
<body>

	<script type="text/javascript">
		function weiboshare(){
	        // 微博分享
	        var title = '<?php echo GET_BLOCK('wb_title');?>';
	        var picurl = '<?php echo GET_BLOCK('wb_share_img');?>';
	        var sharesinastring='https://service.weibo.com/share/share.php?title='+title+'&url='+window.location.href+'&content=utf-8&sourceUrl='+window.location.href+'&pic='+picurl;
	        window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
	    }
	    function qZone(){
	        var p = {
	            url: 'https://mob100.uu.cc',
	            showcount: '1',/*是否显示分享总数,显示：'1'，不显示：'0' */
	            desc: '<?php echo GET_BLOCK('qq_desc');?>',/*默认分享理由(可选)*/
	            summary: '',/*分享摘要(可选)*/
	            title: '<?php echo GET_BLOCK('wb_title');?>',/*分享标题(可选)*/
	            site: '',/*分享来源 如：腾讯网(可选)summary*/
	            pics: '<?php echo GET_BLOCK('wb_share_img');?>', /*分享图片的路径(可选)*/
	            style: '101',
	            width: 199,
	            height: 30
	        };
	        var s = [];
	        for (var i in p) {
	            s.push(i + '=' + encodeURIComponent(p[i] || ''));
	        }
	      var target_url ="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join('&');
	      window.open(target_url, 'qZone','height=430, width=400');
	    }
	</script>

		<!-- 内容-->
		<div class = "pcreserve">
			<!--顶部bar-->
			<div class = "top-guide-bar">
				<img class="logo-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/top-bar-logo.png">
				<div class="game-name-info">
					<a class="game-name">路人超能100</a>
					<a class="game-subtitle">官方正版授权手游</a>
				</div>

				<a href="//mob100.uu.cc/downloadLr">
					<img class = "download" src="//dl.gamdream.com/activity/storm/mob100/wap/images/topbar-download.png">
				</a>
				
				<img class = "more-button" src="//dl.gamdream.com/activity/storm/mob100/wap/images/topbar-more.png">
				

			</div>
			<!--顶部fv-->
			<div class="warp warp_01" >
				<img class ="logo" src="//dl.gamdream.com/activity/storm/mob100/wap/images/logo.png">
				<img class ="slogan" src="//dl.gamdream.com/activity/storm/mob100/wap/images/slogan.png">
				<img class="sub-title" src="//dl.gamdream.com/activity/storm/mob100/wap/images/sub-title.png">
				<a href= "//mob100.uu.cc/downloadLr">
					<img class="download" src="//dl.gamdream.com/activity/storm/mob100/wap/images/main-download.png">
				</a>

			</div>

			<div class="warp warp_02" id="page_1">
			<img class = "title_icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/news-title-image.png">

			<!--banner 轮播-->
			<div class= "swiper-view">
					<div class="swiper-wrapper">
<!-- 						<div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
						</div>
						<div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
						</div>
						<div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
						</div>
						<div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
						</div> -->
						<?php
                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
                      'Y-m-d',7);
                    ?>
					</div>
					<!-- 如果需要分页器 -->
					<div class="swiper-pagination"></div>


			</div>

			<!--新闻盒子-->
			<div class= "news-box">
				<ul class = "newsTab">
					<div class = "bottom-line"></div>
					<li class="tab-item active" d-num="0"><a>最新</a></li>
					<li class="tab-item" d-num="1"><a>新闻</a></li>
					<li class="tab-item" d-num="2"><a>公告</a></li>
					<li class="tab-item" d-num="3"><a>活动</a></li>
					<li class="tab-item" d-num="4"><a>攻略</a></li>



					<a href="//mob100.uu.cc/news/1.html">
						<div class = "more-item">
							<img class = "more-item-image"src="//dl.gamdream.com/activity/storm/mob100/wap/images/MORE.png">
						</div>
					</a>



				</ul>
				<div class="box active">

					<!-- <div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】1【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>


					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div> -->
					<?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('新闻','公告','活动','攻略'),4,0,array('LimitFrom'=>0));
                    ?>

				</div>
				<div class="box">

					<!-- <div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】2【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div> -->
					<?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('新闻'),4,0,array('LimitFrom'=>0));
                    ?>

				</div>
				<div class="box">

					<!-- <div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】3【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div> -->
					<?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('公告'),4,0,array('LimitFrom'=>0));
                    ?>

				</div>
				<div class="box">

					<!-- <div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】4【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div> -->
					<?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('活动'),4,0,array('LimitFrom'=>0));
                    ?>

				</div>
				<div class="box">
					<!-- <div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】5【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div>
					<div class="article">
						<a href="https://mob100.uu.cc/show/3961">
							<div class="article-title">【新闻】【权重10】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
							<div class="article-date">2019-06-23</div>
						</a>

					</div> -->
					<?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('萌新指引','伙伴超能','除灵副本'),4,0,array('LimitFrom'=>0));
                    ?>

				</div>
			</div>
		</div>
			<div class="warp warp_03" id="page_2">
				<img class = "title_icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-introduction-title.png">
				<img class="magic-bg" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-magic-bg.png">
				<!--用于切换的角色层-->
				<?php
	                      SHOW_DATAS('<div class = "role-content active" roleId="role-@@id@@">
						<!--技能-->
						<div class="skills">
							<div class = "skill-item">
								<!--技能描述-->
								<div class="skill-bg" >
									<div class="skill-description">
										<a class="skill-title">@@STR10@@</a><br>
										<a class="skill-des-content">@@STR13@@</a>
									</div>
								</div>
								<!--技能图标-->
								<div class = "skill-icon-div">
									<img class="skill-icon" src="@@STR7@@">
								</div>
							</div>
							<div class = "skill-item">
								<!--技能描述-->
								<div class="skill-bg">
									<div class="skill-description">
										<a class="skill-title">@@STR11@@</a><br>
										<a class="skill-des-content">@@STR14@@</a>
									</div>
								</div>
								<div class = "skill-icon-div">
									<img class="skill-icon" src="@@STR8@@">
								</div>
							</div>
							<div class = "skill-item">
								<!--技能描述-->
								<div class="skill-bg">
									<div class="skill-description">
										<a class="skill-title">@@STR12@@</a><br>
										<a class="skill-des-content">@@STR15@@</a>
									</div>
								</div>
								<div class = "skill-icon-div">
									<img class="skill-icon" src="@@STR9@@">
								</div>
							</div>
						</div>
						<!--角色-->
						<div class="role">
							<img class = "role-big-image" src="@@STR20@@">
						</div>
						<!--名称信息-->
						<div class ="role-info">
							<!--中文日文名 ssr-->
							<img class ="role-ssr-tag" src="@@STR6@@">
							<div class = "chinese-Name-tag">@@STR2@@</div>
							<div class= "japan-name-tag">@@STR16@@</div>

							<div class = "voice-tag" type = "@@STR18@@">@@STR17@@<img class = "voice-icon-image" src="//dl.gamdream.com/activity/storm/mob100/images/voice-play-icon.png"></a></div>
							<div class= "role-descrition-bg">
								<div class="role-descrition">@@STR19@@</div>
							</div>
						</div>
					</div>',
	                      'Y-m-d',11,1000,1);
	                    ?>
				<!--角色选择切换-->
				<div class = "role-select">
					<ul class="role-type-select">
						<li class="role-tab-item active" d-num="0"><a>攻击型</a></li>
						<li class="role-tab-item" d-num="1"><a>防御型</a></li>
						<li class="role-tab-item" d-num="2"><a>辅助型</a></li>
						<li class="role-tab-item" d-num="3"><a>生命型</a></li>
					</ul>
					<!--对应类型的角色列表 -->
					<div class = "role-list active">
						<div class="attack-swiper">
							<div class="swiper-wrapper">
								<!-- <div class="swiper-slide active" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-new-icon.png"></div><div class = "role-name-style">亚当</div></div>
								<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><p class = "role-name-style">夏娃</p></div>
								<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">图嗷嗷</div></div>
								<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">曾轶可</div></div>
								<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">泡泡王</div></div>
								<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">赛亚人</div></div>
								<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">校霸</div></div> -->
								<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
				                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=1'));
				                    ?>
							</div>
							<!-- 如果需要导航按钮 -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>

						</div>
					</div>
					<div class = "role-list active">
						<div class="defense-swiper">
							<div class="swiper-wrapper">
	<!-- 							<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">亚当2</div></div>
								<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">夏娃</div></div>
								<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">图嗷嗷</div></div> -->
								<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
				                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=2'));
				                 ?>

							</div>
							<!--&lt;!&ndash; 如果需要导航按钮 &ndash;&gt;-->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>

						</div>
					</div>
					<div class = "role-list active">
						<div class="aux-swiper">
							<div class="swiper-wrapper">
		<!-- 						<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">亚当3</div></div>
								<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">夏娃</div></div> -->
								<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
				                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=3'));
				                 ?>
							</div>
							<!--&lt;!&ndash; 如果需要导航按钮 &ndash;&gt;-->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>

						</div>
					</div>
					<div class = "role-list active">
						<div class="life-swiper">
							<div class="swiper-wrapper">
								<!-- <div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">亚当4</div></div>
								<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-image-01.png"></div><div class = "role-name-style">夏娃</div></div> -->
								<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
				                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=4'));
				                    ?>
							</div>
							<!-- 如果需要导航按钮 -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>

						</div>
					</div>

				</div>


			</div>

			<div class="warp warp_04" id="page_3">
				<img class = "title_icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/game-guidance-title.png">
				<ul class = "game-stratege-tabbar">

					<li class="game-tab-item active" d-num="0"><img class = "guide-title"src="//dl.gamdream.com/activity/storm/mob100/wap/images/game-stratege-title-01.png"></li>
					<li class="game-tab-item" d-num="1"><img class = "guide-title" src="//dl.gamdream.com/activity/storm/mob100/wap/images/game-stratege-title-02.png"></li>
					<li class="game-tab-item" d-num="2"><img class = "guide-title" src="//dl.gamdream.com/activity/storm/mob100/wap/images/game-stratege-title-03.png"></li>
				</ul>
					<!--切换的分页内容-->
					<div class = "game-strategy-content active">
					<!--banner 轮播-->
					<div class= "strategy-swiper-01 strategy-swiper">
						<div class="swiper-wrapper">
<!-- 							<div class="swiper-slide">
								<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
							</div>
							<div class="swiper-slide">
								<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
							</div> -->
							<?php
		                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
		                      'm/d',8);
		                    ?>
						</div>

					</div>
					<!--攻略内容-->
					<div class="box">
						<!-- <div class="article">
							<a href="https://mob100.uu.cc/show/3961">
								<div class="article-title">【新手指南11】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
								<div class="article-date">06-23</div>
							</a>
						</div>
						<div class="article">
							<a href="https://mob100.uu.cc/show/3961">
								<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
								<div class="article-date">06-23</div>
							</a>
						</div>
						<div class="article">
							<a href="https://mob100.uu.cc/show/3961">
								<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
								<div class="article-date">06-23</div>
							</a>
						</div>
						<div class="article">
							<a href="https://mob100.uu.cc/show/3961">
								<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
								<div class="article-date">06-23</div>
							</a>

						</div> -->
						<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('萌新指引'),4,0,array('LimitFrom'=>0));
                    			?>
						<a href="//mob100.uu.cc/news/5.html"><div class="more-button">查看更多>></div></a>
					</div>
				</div>

					<!--切换的分页内容-->
					<div class = "game-strategy-content active">
						<!--banner 轮播-->
						<div class= "strategy-swiper-02 strategy-swiper">
							<div class="swiper-wrapper">
								<!-- <div class="swiper-slide">
									<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
								</div>
								<div class="swiper-slide">
									<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
								</div> -->
								<?php
				                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
				                      'm/d',9);
				                    ?>
							</div>

						</div>
						<!--攻略内容-->
						<div class="box">
							<!-- <div class="article">
								<a href="https://mob100.uu.cc/show/3961">
									<div class="article-title">【新手指南222】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
									<div class="article-date">06-23</div>
								</a>
							</div>
							<div class="article">
								<a href="https://mob100.uu.cc/show/3961">
									<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
									<div class="article-date">06-23</div>
								</a>
							</div>
							<div class="article">
								<a href="https://mob100.uu.cc/show/3961">
									<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
									<div class="article-date">06-23</div>
								</a>
							</div>
							<div class="article">
								<a href="https://mob100.uu.cc/show/3961">
									<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
									<div class="article-date">06-23</div>
								</a>

							</div> -->
							<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('伙伴超能'),4,0,array('LimitFrom'=>0));
                    			?>

							<a href="//mob100.uu.cc/news/5.html"><div class="more-button">查看更多>></div></a>
						</div>
					</div>

						<!--切换的分页内容-->
					<div class = "game-strategy-content active">
							<!--banner 轮播-->
							<div class= "strategy-swiper-03 strategy-swiper">
								<div class="swiper-wrapper">
									<!-- <div class="swiper-slide">
										<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
									</div>
									<div class="swiper-slide">
										<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/swiper_banner_01.png">
									</div> -->
									<?php
				                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
				                      'm/d',10);
				                    ?>
								</div>

							</div>
							<!--攻略内容-->
							<div class="box">
								<!-- <div class="article">
									<a href="https://mob100.uu.cc/show/3961">
										<div class="article-title">【新手指南】333创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
										<div class="article-date">06-23</div>
									</a>
								</div>
								<div class="article">
									<a href="https://mob100.uu.cc/show/3961">
										<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
										<div class="article-date">06-23</div>
									</a>
								</div>
								<div class="article">
									<a href="https://mob100.uu.cc/show/3961">
										<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
										<div class="article-date">06-23</div>
									</a>
								</div>
								<div class="article">
									<a href="https://mob100.uu.cc/show/3961">
										<div class="article-title">【新手指南】创梦天地荣获“2018金港股最受投资者欢迎新股公司”大奖</div>
										<div class="article-date">06-23</div>
									</a>

								</div> -->
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','m/d',array('除灵副本'),4,0,array('LimitFrom'=>0));
                    			?>

								<a href="//mob100.uu.cc/news/5.html"><div class="more-button">查看更多>></div></a>
							</div>
						</div>
			</div>


			<div class="warp warp_05" id="page_4">
				<img class = "title_icon" src="//dl.gamdream.com/activity/storm/mob100/wap/images/game-featrues-title.png">


				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<div class= "game-special-swiper">
					<!-- 如果需要导航按钮 -->
					<div class="swiper-wrapper">
						<!-- <div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-special-01.png">
						</div>
						<div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-special-02.png">
						</div>
						<div class="swiper-slide">
							<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-special-03.png">
						</div> -->
						<?php
			              SHOW_DATAS('<div class="swiper-slide">
			              <img class = "swiper-banner-image" src="@@STR2@@" alt="">
			            </div>','Y-m-d',3);
			            ?>
					</div>
					<!-- 如果需要分页器 -->
					<div class="swiper-pagination"></div>

				</div>
			</div>

			<div class="warp warp_06">
				<span>
					<img class = "share-item weixin-share-item" src="//dl.gamdream.com/activity/storm/mob100/wap/images/share-weixin.png">
					<a href="<?php echo GET_BLOCK('weibo_url');?>">
						<img class = "share-item" src="//dl.gamdream.com/activity/storm/mob100/wap/images/share-weibo.png">
					</a>
					<a href="<?php echo GET_BLOCK('qq_jump');?>">
						<img class = "share-item" src="//dl.gamdream.com/activity/storm/mob100/wap/images/share-qq.png">
					</a>

				</span>
			</div>


			<footer class="warp footer">
				<div class="pic">
					<img class = "logo_1"src="//dl.gamdream.com/activity/galan/luren/images/ft_logo1.png">
					<img class = "logo_2" src="//dl.gamdream.com/activity/galan/luren/images/logo2_foot.png">
					<img class = "logo_3" src="//dl.gamdream.com/activity/galan/luren/images/logo3_foot.png">
					<img class = "logo_4" src="//dl.gamdream.com/activity/galan/luren/images/logo4_foot.png">
				</div>
		
				<p class="info">本游戏适合18岁以上的玩家进入</p>	
				<p class="info">Copyright©2009-2019 深圳市创梦天地科技有限公司 版权所有</p>
				<p class="text">
					抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>
					适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
				</p>
			</footer>


			<!-- 视频弹窗-->
		<div class = "dialog-video">
				<div class = "video-player">
					<video class = "video-download-qrcdoe-imgplayer" id="video_id_01" controls>
						<source src="https://media.w3.org/2010/05/sintel/trailer.mp4" >
					</video>
					<div class = "video-player-close-button">
						<img class ="close-button" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/video_player_close.png">
					</div>
				</div>
		</div>

					<!-- 菜单-->
		<div class = "menu-list-pop">
				<ul class = "menu-list">
					<li class="tab-item"></li>
					<li class="tab-item"><a href = "#">官网首页</a><img class = "bottom-line" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-menu-line.png"></li>
					<li class="tab-item"><a href = "//mob100.uu.cc/news/1.html">新闻资讯</a><img class = "bottom-line" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-menu-line.png"></li>
					<li class="tab-item"><a href = "#page_2">角色介绍</a><img class = "bottom-line" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-menu-line.png"></li>
					<li class="tab-item"><a href = "#page_3">游戏攻略</a><img class = "bottom-line" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-menu-line.png"></li>
					<li class="tab-item"><a href= "#page_4">游戏特色</a><img class = "bottom-line" src = "//dl.gamdream.com/activity/storm/mob100/wap/images/game-menu-line.png"></li>
				</url>
		</div>



			<div class="pop pop-share">
				<div class="dialog">
					<div class="close"></div>
					<div class="ico"></div>
					<h3 class="stit"></h3>
					<div class="con">

						<img class = "qr-code"src="http://mob100.uu.cc/manage/upload/image/mob100.uu.cc/2018-11-08/20181108_113113_941185.jpg" alt="">

						<div class="text">
							<p>长按扫码或通过账号搜索关注官方微信，<br>领取专属福利</p>
							微信公众号：<br>
							<span>路人超能100手游</span>
						</div>
					</div>
				</div>
			</div>


	<script src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.4.2.min.js"></script>
	<script>
					var swiper = new Swiper('.warp_02 .swiper-view', {

						    hideOnClick: true,
							autoplay: 3000,
							speed:1000,

							pagination: '.warp_02 .swiper-pagination',
							paginationClickable :true,
							// pagination: {
							// 	el: '.warp_02 .swiper-pagination',
							// 	clickable : true,
							// },

					});

					var attack = new Swiper('.attack-swiper',{
						slidesPerView: 5,
						spaceBetween: 4,
						freeMode: false,

						prevButton:'.attack-swiper .swiper-button-prev',
						nextButton:'.attack-swiper .swiper-button-next',

					});

					var defense = new Swiper('.defense-swiper',{
						slidesPerView: 5,
						spaceBetween: 4,
						freeMode: false,

						prevButton: '.defense-swiper .swiper-button-next',
						nextButton: '.defense-swiper .swiper-button-prev',


					});
					//
					var roleList03 = new Swiper('.aux-swiper',{
						slidesPerView: 5,
						spaceBetween: 4,
						freeMode: false,

						prevButton: '.aux-swiper.swiper-button-next',
						nextButton: '.aux-swiper .swiper-button-prev',

					});
					//
					var roleList04 = new Swiper('.life-swiper',{
						slidesPerView: 5,
						spaceBetween: 4,
						freeMode: false,

						prevButton: '.life-swiper .swiper-button-next',
						nextButton: '.life-swiper .swiper-button-prev',


					});


					var strategy01 = new Swiper('.strategy-swiper-01', {

						hideOnClick: true,
						autoplay: 3000,
						speed:1000,
						freeMode:false,
					});

					var strategy02 = new Swiper('.strategy-swiper-02', {

						hideOnClick: true,
						autoplay: 3000,
						speed:1000,
						freeMode:false,
					});

					var strategy03 = new Swiper('.strategy-swiper-03', {

						hideOnClick: true,
						autoplay: 3000,
						speed:1000,
						freeMode:false,
					});


					var o = Math.round((750- 750) / 2.1);
					var specialSwiper = new Swiper('.warp_05 .game-special-swiper',{
						autoplayDisableOnInteraction: false,
						loop: true,
						autoplay: 5000,
						speed:1000,
						effect: "coverflow",
						centeredSlides: true,
						slidesPerView: "auto",

						nextButton: '.warp_05 .swiper-button-next',
						prevButton: '.warp_05 .swiper-button-prev',
						pagination: '.warp_05 .swiper-pagination',
						observer: true,
						observeParents: true,
						coverflow: {
							rotate: 0,
							stretch: 100 + o,
							depth: 180,
							modifier: 1,
							slideShadows: true
						}
					});


	</script>

<script type="text/javascript" src="//dl.gamdream.com/activity/storm/mob100/wap/js/jquery.min.js"></script>
<script src="//dl.gamdream.com/activity/storm/mob100/wap/js/index.js"></script>
</body>

</html>