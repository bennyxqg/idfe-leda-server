<!DOCTYPE html>
<html lang="en">
	<?php include '_header.ctp' ?>
	<body>
<?php
    include 'include.ctp';
	$categories = $this->Base->getNewsCategoryBySiteId($site_id);
	$newsCategoryId = $result['News']['news_categories_id'];
?>
		<div id="mainContainer2">
			<div id="newsBanner">
				<div class="logo-wrapper">
					<div class="logo"><img src="<?php echo $full_base_url ?>/img/news-logo.png" alt=""></div>
				</div>
			</div>
			<div id="newsNav">
				<div class="nav-wrapper">
					<div class="home">
						<div class="avatar">
							<img src="<?php echo $full_base_url ?>/img/avatar.png" alt="">
						</div>
						<div class="to-home"><a href="/">返回首页 ></a></div>
					</div>
					<div class="dl">
						<div class="client">
						<?php 
						$ios_url = isset($ios_list) ? $ios_list['content'] : '#';
						$an_url = isset($android_list) ? $android_list['content'] : '#';
						?>
							<a href="<?=$ios_url?>"><div class="ios"></div></a>
							<a href="<?=$an_url?>"><div class="android"></div></a>
						</div>
						<div class="qrcode">
							<img src="<?php echo $full_base_url ?>/img/news-qrcode.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div id="detailContent" class="news-content">
				<div class="content-wrapper">
					<div class="main">
						<div class="nav">
							<h2>
								<span>新闻公告</span> | <span>NEWS DETAILS</span>
							</h2>
							<p>
								您所在位置：首页<a href="<?php echo $this->Base->getNewsUrl($newsCategoryId);?>">> <?php echo $categories[$newsCategoryId];?></a></a>
							</p>
						</div>
						<div class="article">
							<h3><?php echo $result["News"]["title"];?></h3>
							<p class="time">时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></p>
							<div class="article-content">
								<?php echo $result['News']['content'];?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include '_footer.ctp' ?>
			<script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
		</div>
	</body>
</html>
