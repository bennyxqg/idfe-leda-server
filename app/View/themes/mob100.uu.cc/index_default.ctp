 <?php
    $this->Website->init();
    $siteId = $GLOBALS['site_id'];
?>
<!DOCTYPE html>
<html>
<head>

 	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<?php
	    echo '<title>'.GET_BLOCK('web_title').'</title>';
	    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
	    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
	?>

	<link rel="stylesheet" href="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.css">
  	<link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/storm/mob100/css/index.css">
  	<link rel="shortcut icon" href="http://mob100.uu.cc/manage/upload/image/mob100.uu.cc/2018-11-14/20181114_174814_750383.png">
  	    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body onscroll="scroll()">

	<!--&lt;!&ndash;邀请好友分享链接参数&ndash;&gt;-->
	<!--<div style="display: none">-->
	<!--<p id = "share_url" pub-name="分享链接">mob100.uu.cc</p>-->
	<!--<p id="share_title" pub-name="分享标题">路人超能100</p>-->
	<!--<p id="share_desc" pub-name="分享描述">-->
		<!--愿予必成，有求必应！全新SP阶式神御怨般若应召而来！SP/SSR召唤概率超绝UP，最高100%！海之旅、大阴阳师与伊吹、SR海忍急速育成等超多活动来袭，共同开启《海国篇序章·雾海谜途》！http://yys.163.com/index.html</p>-->
	<!--<img id="share_pic" pub-name="分享图片" src="">-->
	<!--<div id="qrcode"></div>-->
<!--</div>-->
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
	<style type= "text/css">
			.warp_01 .download{
  			  width: 450px;
			}
			.warp_01 .download .qrcode-download{
				width: 202px;
			}
			.warp_01 .download .download-qrcdoe-img{
				width: 160px;
  			    height: 160px;
    			position: absolute;
    			left: 35px;
    			top: 0px;
			}
			.warp_01 .download .wap-download .andriod_download{
				top: 5px;
			}
			.warp_01 .download .wap-download .taptap-download{
				position: relative;
				top: 10px;
			}
			.warp_01 .download .qrcode-download .animation-line{
    			width: 165px;
   				 height: 9px;
    			left: 35px;
			}
			@keyframes floating {
 			 from {
   			 transform: translate(0, 0);
  				}
  			to {
  			  transform: translate(0, 160px);
  			}
}
	</style>


	<div class = "controllerDiv">
		<!-- 内容-->
		<div class = "pcreserve">
			<!--顶部fv-->
			<div class="warp warp_01" >
				<video id="dgvideo" width="100%" src="//dl.gamdream.com/activity/storm/mob100/images/mob100-bgmv.mp4" height="" muted="muted" loop="loop" preload="" autoplay="" style="display: inline; position:absolute;top:0px;left:0px"></video>
				<!--顶部bar-->
				<div class = "top-guide-bar">
				<span class="left-guide-list">
					<div class="guide-item"><a class="guide-title" href = "/"><img src="//dl.gamdream.com/activity/storm/mob100/images/home_page.png"> 首 页 </a></div>
					<div class="guide-item"><a class="guide-title" href = "#page_1"><img src="//dl.gamdream.com/activity/storm/mob100/images/new_icon.png"> 新闻资讯 </a></div>
					<div class="guide-item"><a class="guide-title" href = "#page_2"><img src="//dl.gamdream.com/activity/storm/mob100/images/game_doc.png"> 游戏资料 </a></div>

				</span>
					<img class = "logo" src="//dl.gamdream.com/activity/storm/mob100/images/logo.png">
					<span class="right-guide-list">
					<div class="guide-item"><a class="guide-title" href = "#page_3"><img src="//dl.gamdream.com/activity/storm/mob100/images/winner_function.png"> 制胜攻略 </a></div>
					<div class="guide-item"><a class="guide-title" href = "<?php echo GET_BLOCK('discuz_url');?>" target="_BLANK"><img src="//dl.gamdream.com/activity/storm/mob100/images/game_bbs_icon.png"> 游戏论坛 </a></div>
				</span>
					<span class="share-guide-list" style = "color:#5C5D5E;">
						分享到&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="share-item weixin-share">
							<img src="//dl.gamdream.com/activity/storm/mob100/images/share-icon-weixin.png">
						</div>
						<a href="#" onclick="weiboshare()"><div class="share-item"><img  src="//dl.gamdream.com/activity/storm/mob100/images/share-icon-sina.png"></div></a>
						<a href="#" onclick="qZone()"><div class="share-item"><img  src="//dl.gamdream.com/activity/storm/mob100/images/share-icon-qqzone.png"></div></a>
					</span>
					<span style = "position: absolute; left:90%;top:20px;"><a href= "https://www.taptap.com/app/83187 "><img src = "//dl.gamdream.com/activity/storm/mob100/images/taptap.png"></a></span>
				</div>

				<!--slogan标题-->
				<img class = "main_title" src="//dl.gamdream.com/activity/storm/mob100/images/main-slogan-01.png" alt="">

				<div class = "sub_title_play">
					<img src="//dl.gamdream.com/activity/storm/mob100/images/main_title_play.png" alt="">
					<a class="play-button"></a>
				</div>
				<!--下载模块-->
				<div class="download">
						<div class="qrcode-download">
							<img src="//dl.gamdream.com/activity/storm/mob100/images/new-qrcode_download_bg.png">
							<img class = "download-qrcdoe-img" src="<?php echo GET_BLOCK('game_download_qrcode');?>">
							<div class = "animation-line">
							</div>
						</div>
						<div class="wap-download">
							<a href = "<?php echo GET_BLOCK('ios_download_url');?>">
							<img class = "appstore_download" src="//dl.gamdream.com/activity/storm/mob100/images/new-appstore-download.png">
							</a>
							<a href = "<?php echo GET_BLOCK('android_download_url');?>">
							<img class = "andriod_download" src="//dl.gamdream.com/activity/storm/mob100/images/new-android-download.png">
							</a>
							<a href = "https://www.taptap.com/app/83187">
							<img class = "taptap-download" src="//dl.gamdream.com/activity/storm/mob100/images/new-taptap-download.png">
							</a>
						</div>
					
				</div>

				<!--新闻资讯-->
				<div class="news">
					<div class="news-content">

						<!--banner 轮播-->
						<div class= "swiper-view">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php
				                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
				                      'Y-m-d',0);
				                    ?>
							</div>
								<!-- 如果需要分页器 -->
								<div class="swiper-pagination"></div>
							</div>

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
								<div class = "more-item">
									<a style="font-size: 12px">MORE</a>
									<a href="//mob100.uu.cc/news/1.html"><img src="//dl.gamdream.com/activity/storm/mob100/images/more-news-icon.png"></a>
								</div>
							</ul>
							<img class = "angle" src = "//dl.gamdream.com/activity/storm/mob100/images/article-angle.png">
							<div class="box active">
								<!--置顶最新文章-->
								<div class="top-article">
									<div class = "top-article-tag"><a >最新</a></div>
									<?php
                          				SHOW_NEWS('<a href="@@URL@@"><div class="top-article-content">@@TITLE@@</div></a>','m/d',array('新闻','公告','活动'),1,0,array('LimitFrom'=>0));
                    				?>
								</div>			
 								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div>
                          			<img class = "sepector-line"src = "//dl.gamdream.com/activity/storm/mob100/images/article-sepector-line.png">
                          			</a>

                          		</div>','m/d',array('新闻','公告','活动'),3,0,array('LimitFrom'=>1));
                    			?>
							</div>
							<div class="box">
								<!--置顶最新文章-->
								<div class="top-article">
									<div class = "top-article-tag"><a>新闻</a></div>
									<?php
                          				SHOW_NEWS('<a href="@@URL@@"><div class="top-article-content">@@TITLE@@</div></a>','m/d',array('新闻'),1,0,array('LimitFrom'=>0));
                    				?>
								</div>
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div><img class = "sepector-line"src = "//dl.gamdream.com/activity/storm/mob100/images/article-sepector-line.png"></a></div>','m/d',array('新闻'),3,0,array('LimitFrom'=>1));
                    			?>

							</div>
							<div class="box">
								<!--置顶最新文章-->
								<div class="top-article">
									<div class = "top-article-tag"><a >公告</a></div>
									<?php
                          				SHOW_NEWS('<a href="@@URL@@"><div class="top-article-content">@@TITLE@@</div></a>','m/d',array('公告'),1,0,array('LimitFrom'=>0));
                    				?>
								</div>
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div><img class = "sepector-line"src = "//dl.gamdream.com/activity/storm/mob100/images/article-sepector-line.png"></a></div>','m/d',array('公告'),3,0,array('LimitFrom'=>1));
                    			?>

							</div>
							<div class="box">
								<!--置顶最新文章-->
								<div class="top-article">
									<div class = "top-article-tag"><a >活动</a></div>
									<?php
                          				SHOW_NEWS('<a href="@@URL@@"><div class="top-article-content">@@TITLE@@</div></a>','m/d',array('活动'),1,0,array('LimitFrom'=>0));
                    				?>
								</div>
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div><img class = "sepector-line"src = "//dl.gamdream.com/activity/storm/mob100/images/article-sepector-line.png"></a></div>','m/d',array('活动'),3,0,array('LimitFrom'=>1));
                    			?>

							</div>
							<div class="box">
								<!--置顶最新文章-->
								<div class="top-article">
									<div class = "top-article-tag"><a >攻略</a></div>
									<?php
                          				SHOW_NEWS('<a href="@@URL@@"><div class="top-article-content">@@TITLE@@</div></a>','m/d',array('萌新指引','伙伴超能','除灵副本'),1,0,array('LimitFrom'=>0));
                    				?>
								</div>
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div><img class = "sepector-line"src = "//dl.gamdream.com/activity/storm/mob100/images/article-sepector-line.png"></a></div>','m/d',array('萌新指引','伙伴超能','除灵副本'),3,0,array('LimitFrom'=>1));
                    			?>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!--定位新闻界面使用，不做界面显示-->
			<div class="warp warp_news" id="page_1">
<!-- 				<?php
	                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
	                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=2'));
	                    ?> -->
			</div>
			<!-- 角色介绍 -->
			<div class="warp warp_02" id = "page_2">

				<img class ="title_icon" src="//dl.gamdream.com/activity/storm/mob100/images/role_introdution_title.png" alt="">
				
				<!--角色介绍详细-->
				<div class = "role-content-view">
					<div class="role-animation-bg"></div>
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
							<img class = "role-big-image" src="@@STR4@@">
						</div>
						<!--名称信息-->
						<div class ="role-info">
							<!--中文日文名 ssr-->
							<img class ="role-ssr-tag" src="@@STR6@@">
							<div class = "chinese-Name-tag">@@STR2@@</div>
							<div class= "japan-name-tag">@@STR16@@</div>
							<!--声音标签-->
							<div class = "voice-tag" type = "@@STR18@@"><div class ="voice-title">@@STR17@@</div><img class = "voice-icon"src="//dl.gamdream.com/activity/storm/mob100/images/voice-play-icon.png"></a></div>
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
<!-- 									<div class="swiper-slide active" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div>
									<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div><div class = "role-name-style">夏娃</div></div>
									<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div><div class = "role-name-style">图嗷嗷</div></div>
									<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div><div class = "role-name-style">曾轶可</div></div>
									<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div><div class = "role-name-style">泡泡王</div></div>
									<div class="swiper-slide" roleId="role-02"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div><div class = "role-name-style">赛亚人</div></div>
									<div class="swiper-slide" roleId="role-01"><div><img class = "role-image" src="//dl.gamdream.com/activity/storm/mob100/images/role-image-01.png"></div><div class = "role-name-style">校霸</div></div> -->
									<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
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
									<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
				                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=2'));
				                    ?>

								</div>
								<!-- 如果需要导航按钮 -->
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>

							</div>
						</div>
						<div class = "role-list active">
							<div class="aux-swiper">
								<div class="swiper-wrapper">
									<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
				                      'Y-m-d',11,100,1,array('Condition'=>'`int1`=3'));
				                    ?>
								</div>
								<!-- 如果需要导航按钮 -->
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>

							</div>
						</div>
						<div class = "role-list active">
							<div class="life-swiper">
								<div class="swiper-wrapper">
									<?php
				                      SHOW_DATAS('<div class="swiper-slide" roleId="role-@@id@@" isnew="@@STR5@@"><div><img class = "role-image" src="@@STR3@@"><img class = "new-icon" src="//dl.gamdream.com/activity/storm/mob100/images/role-new-icon.png"></div><div class = "role-name-style">@@STR2@@</div></div>',
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
			</div>

			<!--游戏攻略-->
			<div class="warp warp_03" id="page_3">
				<img class ="title_icon" src="//dl.gamdream.com/activity/storm/mob100/images/game-strategy-title.png" alt="">
				<div class = "game-strategy-guide">
					<div class = "game-strategy-box">
						<img class = "guide-image" src="//dl.gamdream.com/activity/storm/mob100/images/game-strategy-guide-01.png">
						<div class="game-strategy-content active">
							<!--banner 轮播-->
							<div class= "strategy-swiper-01 strategy-swiper">
									<div class="swiper-wrapper">
									<?php
				                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
				                      'Y-m-d',8);
				                    ?>
									</div>

							</div>
							<!--攻略内容-->
							<div class="box">
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','Y-m-d',array('萌新指引'),4,0,array('LimitFrom'=>0));
                    			?>
								<a href="//mob100.uu.cc/news/5.html"><div class="more-button">查看更多>></div></a>
							</div>

						</div>
					</div>
					<div class = "game-strategy-box">
						<img class = "guide-image" src="//dl.gamdream.com/activity/storm/mob100/images/game-strategy-guide-02.png">
						<!--banner 轮播-->
						<div class="game-strategy-content">
							<div class= "strategy-swiper-02 strategy-swiper">
							<div class="swiper-wrapper">
								<?php
				                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
				                      'Y-m-d',9);
				                    ?>
							</div>
						</div>
							<!--攻略内容-->
							<div class="box">
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','Y-m-d',array('伙伴超能'),4,0,array('LimitFrom'=>0));
                    			?>
								<a href="//mob100.uu.cc/news/5.html"><div class="more-button">查看更多>></div></a>
							</div>
						</div>
					</div>
					<div class = "game-strategy-box">
						<img class = "guide-image" src="//dl.gamdream.com/activity/storm/mob100/images/game-strategy-guide-03.png">
						<div class="game-strategy-content">
						<!--banner 轮播-->
							<div class= "strategy-swiper-03 strategy-swiper">
							<div class="swiper-wrapper">
								<?php
				                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img class = "swiper-banner-image" src="@@STR2@@" alt="@@STR1@@"></a></div>',
				                      'Y-m-d',10);
				                    ?>
							</div>
						</div>
							<!--攻略内容-->
							<div class="box">
								<?php
                          			SHOW_NEWS('<div class="article"><a href="@@URL@@" ><div class="article-title">【@@CATEGORY_NAME@@】@@TITLE@@</div><div class="article-date">@@DATE@@</div></a></div>','Y-m-d',array('除灵副本'),4,0,array('LimitFrom'=>0));
                    			?>
								<a href="//mob100.uu.cc/news/5.html"><div class="more-button">查看更多>></div></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!--游戏特色-->
			<div class="warp warp_04" id="page_4">
				<img class ="title_icon" src="//dl.gamdream.com/activity/storm/mob100/images/game-special-title.png" alt="">
				<div class = "game-special-guide">
					<div class = "game-special-box">
						<!--小图-->
						<div class="game-special-normal special-left" specialId ="0">
							<img  src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-normal-01.png">
						</div>
						<!--选中的大图-->
						<img class = "game-special-selected special-left" src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-selected-01.png">
					</div>
					<div class = "game-special-box">
						<div class="game-special-normal special-left-1" specialId ="1">
							<img src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-normal-02.png">
						</div>
						<img class = "game-special-selected special-left-1" src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-selected-02.png">
					</div>
					<div class = "game-special-box">
						<div class="game-special-normal" style="display: none" specialId ="2">
							<img src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-normal-03.png">
						</div>
						<img class = "game-special-selected" style="display: block" src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-selected-03.png">
					</div>
					<div class = "game-special-box">
						<div class="game-special-normal special-right-1" specialId ="3">
							<img src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-normal-04.png">
						</div>
						<img class = "game-special-selected special-right-1" src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-selected-04.png">
					</div>
					<div class = "game-special-box">
						<div class="game-special-normal special-right" specialId ="4">
							<img src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-normal-05.png">
						</div>
						<img class = "game-special-selected special-right" src="//dl.gamdream.com/activity/storm/mob100/images/game-feature-selected-05.png">
					</div>
				</div>
			</div>

			<div class="warp warp_05">
				<div class="qrcode-pop-view">
					<div class = "weixin-qrcode-pop">
						<img class="qrcode" src="<?php echo GET_BLOCK('weixin_qrcode');?>">
						<a class="title">公众号：路人超能100手游</a>
					</div>
					<div class = "sina-qrcode-pop">
						<img class="qrcode" src="//dl.gamdream.com/activity/galan/luren/images/weibo.png">
						<a class="title">官方微博：路人超能100手游</a>
					</div>
					<div class="qq-group">加入官方Q群：<a href="<?php echo GET_BLOCK('qq_jump');?>"><?php echo GET_BLOCK('qq_group');?></a></div>
				</div>

			</div>
			<div class = "warp warp06" style = "height:60px; background:#202020;color:#CCCCCC;font-size:12px;text-align: center;line-height:60px;">
				本游戏适合18岁以上的玩家进入
			</div>

		</div>

		<!--右边的悬浮窗-->
		<div class = "dialog-right-pop">
			<!--导航栏-->
			<div class = "guide-item-list">
				<div class="selected-line-bg"></div>
				<ul>
					<li class="guide-list-item active">
						<div class="item">
							<a  class="guide-item-title" href = "#page_1">
								新闻资讯
							</a>
						</div>
						<div class = "item-status-image"></div>

					</li>
					<li class="guide-list-item" >
						<div class="item">
							<a  class="guide-item-title" href = "#page_2">
								游戏资料
							</a>
						</div>
						<div class = "item-status-image"></div>
					</li>
					<li class="guide-list-item">
						<div class="item">
							<a  class="guide-item-title" href = "#page_3">
								制胜攻略
							</a>
						</div>
						<div class = "item-status-image"></div>
					</li>
					<li class="guide-list-item" >
						<div class="item">
							<a  class="guide-item-title" href = "#page_4">
								游戏特色
							</a>
						</div>
						<div class = "item-status-image"></div>
					</li>
				</ul>
			</div>

			<!--分享弹窗-->
			<div class="share-pop">
				<img class="qrcode" src="<?php echo GET_BLOCK('weixin_qrcode');?>">
				<a class="weibo-link" href="<?php echo GET_BLOCK('weibo_url');?>"></a>
				<a class="qq-link" href="<?php echo GET_BLOCK('qq_jump');?>"></a>
				<a class="show-top" href="#"></a>
				<a class="hidden-button"></a>
			</div>
		</div>
		<img class ="dialog-right-pop-extend" src = "//dl.gamdream.com/activity/storm/mob100//images/dialog-right-pop-extend-button.png">


		<!-- 视频弹窗-->
		<div class = "dialog-video">
			<div class = "video-player">
				<video class="video-download-qrcdoe-imgplayer" id="video_id_01" width="1400" height="800" controls>
					<source src="<?php echo GET_BLOCK('video_url');?>" >
				</video>
				<div class = "video-player-close-button">
					<img src = "//dl.gamdream.com/activity/storm/mob100/images/video_player_close.png">
				</div>
			</div>
		</div>

		<!--分享弹窗-->
		<div class="dialog-share  pop-share">
			<div class="el-dialog" style="margin-top: 25vh; width: 675px;">
				<div class="el-dialog__header">
					<span class="el-dialog__title">扫一扫分享给好友</span>
					<button type="button" aria-label="Close" class="el-dialog__close"></button>
				</div>
				<div class="el-dialog__body">
					<div class="focus_box">
						<img src="<?php echo GET_BLOCK('qrCode_share');?>" alt="" class="qrcode">
						<div class="detail">
							<p style="margin-top: 20px;">用微信“扫一扫”左侧二维码，即可把网站分享给您的好友们哦。</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.js"></script>


<script type="text/javascript">
		var myGuideClick = function(v) {

			var llis = document.getElementsByClassName("guide-list-item");

			for(var i = 0; i < llis.length; i++) {

                let item = llis[i];
                if(!item)continue;
                if(i == v){
					$(".guide-list-item").eq(i).addClass("active");
                }else {
					$(".guide-list-item").eq(i).removeClass("active");
                }
			}
		}

		function scroll(e){

			var offsetY = document.documentElement.scrollTop;

			if(offsetY <1200){
				myGuideClick(0);
				$(".dialog-right-pop").css("display","none");
			}else if(offsetY<2100){
				myGuideClick(1);
				$(".dialog-right-pop").css("display","block");
			}else if(offsetY<3100){
				myGuideClick(2);
				$(".dialog-right-pop").css("display","block");
			}else if(offsetY<4500){
				myGuideClick(3);
				$(".dialog-right-pop").css("display","block");
			}

		}

	</script>

<script type="text/javascript" src="//dl.gamdream.com/activity/storm/mob100/js/jquery.min.js"></script>
<script src="//dl.gamdream.com/activity/storm/mob100/js/index-08-21.js"></script>
</body>
</html>