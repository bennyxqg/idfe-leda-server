<!DOCTYPE html>
<html>
<head>

 	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta name="keywords" content="《梦工场大冒险》官方正版授权手游预约开启！！"><meta name="description" content="《路人超能100》是由艾格拉斯与日本聚逸株式会社共同获得动画IP的游戏化权利，并同成都萤火虫合力开发联合乐逗游戏共同发行的正版授权漫改手游。 游戏完美再现动漫的剧情内容，日式青春的校园场景，原汁原味的人物超能设定。在游戏中，玩家化身超能路人茂夫，可搭档灵幻新隆、律、小酒窝、花泽辉气等数十位熟悉的伙伴，进行策略对抗以及参与丰富的校园活动。超能力世界，等你一起来除灵冒险！">
	<title>《决战玛法》官方网站</title>

	<link rel="stylesheet" href="//dl.gamdream.com/activity/legend/js/swiper.min.css">
  	<link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/legend/css/index.css">

</head>
<body onscroll="scroll()">


	<div class = "controllerDiv">


		<!-- 内容-->
		<div class = "pcreserve">


			<!--顶部fv-->
			<div class="warp warp_01">


				<!--顶部bar-->
				<div class = "top-guide-bar">
					<img class = "logo" src="//dl.gamdream.com/activity/legend/images/logo.png">
				<span class="left-guide-list">
					<div class="guide-item"><a class="guide-title" href="/"> 官网首页 </a><Br><a class="sub-title">HOME</a></div>
					<div class="guide-item"><a class="guide-title" href="/privacy"> 隐私政策 </a><Br><a class="sub-title">PRIVACY POLICY</a></div>
					<div class="guide-item"><a class="guide-title" href="/support"> 技术支持 </a><Br><a class="sub-title">SUPPORT</a></div>
				</span>
				</div>

				<!--新闻资讯-->
				<div class="news">
					<div class="news-content">

						<!--banner 轮播-->
						<div class= "swiper-view">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/legend/images/banner-01.jpg">
									</div>
								<div class="swiper-slide">
								<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/legend/images/banner-02.jpg">
								</div>
									<div class="swiper-slide">
										<img class = "swiper-banner-image" src = "//dl.gamdream.com/activity/legend/images/banner-03.png">
									</div>
							</div>
								<!-- 如果需要分页器 -->
								<div class="swiper-pagination"></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="//dl.gamdream.com/activity/legend/js/swiper.min.js"></script>
					<script>
						var swiper = new Swiper('.swiper-container', {
							pagination: {
								el: '.swiper-pagination',
								type: 'fraction',
							},
							// navigation: {
							// 	nextEl: '.swiper-button-next',
							// 	prevEl: '.swiper-button-prev',
							// },
							hideOnClick: true,
							autoplay:{
								delay: 3000,
								stopOnLastSlide: false,
								disableOnInteraction: false,
							},

							pagination: {
								el: '.swiper-pagination',
								clickable: true,
								renderBullet: function (index, className) {
									return '<span class="' + className + '">' + (index + 1) + '</span>';
								},
							},

						});

					</script>

<script type="text/javascript">
		var myGuideClick = function(v) {

			var llis = document.getElementsByTagName("li");

			for(var i = 0; i < llis.length; i++) {

                let lineItem = document.getElementById("item-line-"+i);
                if(!lineItem)continue;
                if(i == v){
                    lineItem.style.opacity = 1;
                }else {
                    lineItem.style.opacity = 0;
                }
			}
		}

	</script>

</body>

</html>