<!DOCTYPE html>
<html lang="en">
	<?php include '_header.ctp' ?>
	<body>
	<?php include 'include.ctp' ?>
		<div id="mainContainer2">
			<div id="newsBanner">
				<div class="logo-wrapper">
					<div class="logo"><img src="<?php echo $full_base_url ?>/img/news-logo.png" alt=""></div>
				</div>
			</div>
			<div id="newsNav">
				<div class="nav-wrapper clearfix">
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
			<div id="newsContent">
				<div class="content-wrapper">
					<div class="main">
						<ul class="nav nav-tabs" data-tabtarget="newslist">
							<li class="active">全部</li>
							<li>活动</li>
							<li>新闻</li>
							<li>公告</li>
							<li></li>
						</ul>
						<div class="newslist-main" data-tobeactive="newslist">
							<ul class="tab-content all active">
							<?php 
							$topData=$this->Hx->indexInitData(100);
							$total = $topData['total'];//所有
							if(!empty($total)){
								foreach ($total as $k=>$v){
							?>
							<li>
								<span class="type">[<?=$v['decription']?>]</span>
								<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
								<span class="time"><?=date("m/d",$v["created"])?></span>
							</li>
							<?php	
								}
							}
							?>
							</ul>
							<ul class="tab-content wrapper event">
								<?php 
								if(!empty($topData['activity'])){
									foreach ($topData['activity'] as $k=>$v){
								?>
								<li>
									<span class="type">[<?=$v['decription']?>]</span>
									<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
									<span class="time"><?=date("m/d",$v["created"])?></span>
								</li>
								<?php	
									}
								}
								?>
							</ul>
							<ul class="tab-content wrapper news">
								<?php 
								if(!empty($topData['news'])){
									foreach ($topData['news'] as $k=>$v){
								?>
								<li>
									<span class="type">[<?=$v['decription']?>]</span>
									<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
									<span class="time"><?=date("m/d",$v["created"])?></span>
								</li>
								<?php	
									}
								}
								?>
							</ul>
							<ul class="tab-content wrapper notice">
								<?php 
								if(!empty($topData['consulting'])){
									foreach ($topData['consulting'] as $k=>$v){
								?>
								<li>
									<span class="type">[<?=$v['decription']?>]</span>
									<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
									<span class="time"><?=date("m/d",$v["created"])?></span>
								</li>
								<?php	
									}
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php include '_footer.ctp' ?>
		</div>
		<script src="<?php echo $full_base_url ?>/js/jquery-2.0.0.js"></script>
		<script src="<?php echo $full_base_url ?>/js/main.js"></script>
		<script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
	</body>
</html>
