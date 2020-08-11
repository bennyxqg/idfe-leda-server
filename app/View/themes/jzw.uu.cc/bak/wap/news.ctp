<!DOCTYPE html>
<?php
$full_base_url.='/wap/';
$category_list = explode('.', $category_id);
$category_id = $category_list[0];
$this->JZW->init(array('site_id' => $site_id));
$news = $this->JZW->getNews($category_id); // 显示的新闻
$blocks = $this->JZW->getAllBlock();
$android_download_url=htmlspecialchars_decode($blocks['android_download_url']); 
$ios_download_url=htmlspecialchars_decode($blocks['ios_download_url']); 
$banner = $blocks['index_banner']; // banner
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
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
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
          <a href="//jzw.uu.cc"><em style="background-position:0 -2px"></em>首页</a>
          <a <?php if($this->JZW->youxixinwenid == $category_id) echo 'class="on"';?> href="//jzw.uu.cc/news/<?php echo $this->JZW->youxixinwenid;?>"><em style="background-position:-78px -90px"></em>最新活动</a>
          <a <?php if($this->JZW->gonglvezhiyinid == $category_id) echo 'class="on"';?> href="//jzw.uu.cc/news/<?php echo $this->JZW->gonglvezhiyinid;?>"><em></em>攻略指引</a>
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
        <section id="xinwen">
          <ul>
          
          	<?php if(empty($news)){ ?>
          		<li class="nd_title"><a href="javascript:;">暂无信息</a></li>
          	<?php } else { ?>
          		<?php for($i=0;$i<count($news);$i++){ ?>
          			<li><a href="//jzw.uu.cc/show/<?php echo $news[$i]['id']; ?>"><img src="<?php echo $full_base_url ?>images/xw_bj.gif" width="24" height="24" /><?php echo $news[$i]['title']; ?></a><span class="time"><?php echo date('m/d',$news[$i]['created']); ?></span></li>
          		<?php } ?>
      
          	<?php } ?>
  
          </ul>
        </section>
        <footer id="footer">
            <img src="<?php echo $full_base_url ?>images/logo.png" width="294" height="118" /><br />
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗 </p>
            <p>适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </footer>
    </div>
    <div class="weixin_tip" ontouchstart="document.querySelector('.weixin_tip').style.display='none';"></div>
<script type="text/javascript" src="<?php echo $full_base_url ?>js/jquery-1.8.0.min.js"></script>
<script>
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