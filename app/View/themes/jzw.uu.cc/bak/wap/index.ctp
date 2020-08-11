<!DOCTYPE html>
<?php
$full_base_url.='/wap/';
$this->JZW->init(array('site_id' => $site_id));
$blocks = $this->JZW->getAllBlock();
$banner = $blocks['index_banner']; // banner
$logo = $blocks['logo']; // 小logo
$gameDescription = $blocks['game_description']; // 描述
$downloadIcon = $blocks['download_icon']; // 下载按钮图片
$qrcodeDownloadAndroid = $blocks['qrcode_download_android']; // Android下载二维码
$qrcodeWeixinImg = $blocks['qrcode_weixin_image']; // 微信关注二维码
$friendlinks = $blocks['friendlinks']; // 友情链接
$imageLink = $blocks['imagelink_index']; // 三个图片链接
$indexList = $blocks['index_list']; // 右侧链接列表
$indexViedoLink = $blocks['index_viedo_link']; // 首页视频链接

$android_download_url=htmlspecialchars_decode($blocks['android_download_url']); 
$ios_download_url=htmlspecialchars_decode($blocks['ios_download_url']); 

$loopImage = $this->JZW->getImageList('loop_img'); // 轮播图片

$allCategories = $this->JZW->getNewsCategory(); // 所有新闻分类
$categories = $allCategories;
unset($categories[$this->JZW->specialCategoryId]);
$categoryIds = array_keys($categories);
$news = $this->JZW->getNews($categoryIds); // 显示的新闻
ksort($categories);
ksort($news);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<link href="<?php echo $full_base_url ?>css/mobile.css" rel="stylesheet">
<link href="<?php echo $full_base_url ?>css/swiper.min.css" rel="stylesheet">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<style type="text/css">
.swiper-container{ padding-bottom:20px;}
.swiper-pagination{ text-align:center; height:20px;}
.swiper-pagination span{ display:inline-block; width:20px; height:20px; -moz-border-radius:10px;border-radius:10px;}
.swiper-container-horizontal>.swiper-pagination .swiper-pagination-bullet{ margin:0 10px;}
</style>
</head>
<body>
    <div class="container">
    	<header id="header">
    		<?php if ($banner):?>
                 <?php echo $banner;?>
            <?php else :?>
                 <img src="<?php echo $full_base_url ?>images/bander.jpg" width="960" height="404">
            <?php endif;?>
    	</header>
        <nav id="nav">
          <a class="on" href="//jzw.uu.cc"><em></em>首页</a>
          <a href="//jzw.uu.cc/news/<?php echo $this->JZW->youxixinwenid;?>"><em></em>最新活动</a>
          <a href="//jzw.uu.cc/news/<?php echo $this->JZW->gonglvezhiyinid;?>"><em></em>攻略指引</a>
          <a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=313"><em></em>论坛</a>
        </nav>
        <aside id="icon_down">
           <p>
             <img src="<?php echo $full_base_url ?>images/icon.png" width="134" height="134" />
             <span>
               <strong>机战王</strong>
               <em>游戏大小：59MB</em>
             </span>
           </p>
           <a class="down_load" href="javascript:;"><img src="<?php echo $full_base_url ?>images/download.png" width="255" height="134" /></a>
        </aside>
        <section id="lunbo">
             <div class="swiper-container">
                <div class="swiper-wrapper">
                
                
                	<?php if ($loopImage) :?>
                    	<?php foreach ($loopImage as $value):?>
                        	<?php if ($value['big_link']):?>
                        		<div class="swiper-slide"><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" width="890" height="455" /></a></div>
                            <?php else :?>
                            	<div class="swiper-slide"><img src="/uploads/<?php echo $value['big_url'];?>" width="890" height="455" /></div>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php else :?>
                    	<div class="swiper-slide"><img src="<?php echo $full_base_url ?>images/list1.jpg" width="890" height="455" /></div>
                    <?php endif;?>
                
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <p id="wx_qq">
               <span class="wx">微信号：jizhanwang2015</span>
               <span class="qq">玩家QQ群：513135474</span>
            </p>
        </section>
        <footer id="footer">
            <img src="<?php echo $full_base_url ?>images/logo.png" width="294" height="118" /><br />
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗 </p>
            <p>适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </footer>
    </div>
    
    <div class="weixin_tip" ontouchstart="document.querySelector('.weixin_tip').style.display='none';"></div>
<script type="text/javascript" src="<?php echo $full_base_url ?>js/jquery-1.8.0.min.js"></script>
 <!-- Swiper JS -->
<script src="<?php echo $full_base_url ?>js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	slidesPerView: 1,
	paginationClickable: true,
	spaceBetween: 30,
	loop: true
});

$(function(){	
	//微信下提示 浏览器打开，判断安卓 IOS
	$(".down_load").click(function(){
		is_weixn();
	});
	function is_weixn(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(ua.match(/MicroMessenger/i)=="micromessenger"){
			$(".weixin_tip").show();
			return false;
		} else {
			if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
				<?php if(strlen(trim($ios_download_url)) == 0) { ?>
				alert('敬请期待！'); //苹果下载地址
				<?php } else { ?>
				location.href="<?php echo $ios_download_url; ?>";
				<?php } ?>
			}else{
				<?php if(strlen(trim($android_download_url)) == 0) { ?>
				alert('敬请期待！'); //安卓下载地址
				<?php } else { ?>
				location.href="<?php echo $android_download_url; ?>";
				<?php } ?>
			}
		}
	}
});
</script>
</body>

</html>