<?php
require_once '_header.ctp';
require_once '_common.ctp';
$banner = $webHelper->getSingleBlock('inner_banner');
$allCategories = $categories = $webHelper->getNewsCategory(); // 分类
$categoryIds = array_keys($categories);
$news = $webHelper->getNews($category_id, $page); // 正常显示的新闻
$qrcodeDownloadAndroid = $webHelper->getBlock($site_id, 'qrcode_download'); // Android下载二维码
$qrcodeWeixinImg = $webHelper->getBlock($site_id, 'qrcode_weixin'); // 微信关注二维码
ksort($categories);
$jt = $webHelper->getImageList('right_jt'); // 截图
$bz = $webHelper->getImageList('right_bz'); // 壁纸
$w = isset($_GET['w']) ? $_GET['w'] : 'j';
$info = $w == 'j' ? $jt : $bz;
?>
<body class="page">
<div class="top">
	<div class="wrap">
    	<h2><a class="fHide" href="//www.idreamsky.com" target="_blank">乐逗游戏</a></h2>
        <?php require_once '_dh.ctp';?>
    </div>
</div>

<div class="banner">
</div>

<div class="page_nav">
	<div class="pr page_wrap">
    	<div class="nav font_st"><a href="//ironforce.uu.cc/" target="_self" title="前往首页">首页</a> &gt;&gt; 截图</div>
        <a class="pa back_home" href="//ironforce.uu.cc/" target="_self">返回首页</a>
    </div>
</div>

<div class="page_con">

	<div class="tab_nav">
        <ul>
        <?php 
        if($w == 'j'){
        	echo '<li class="cur"><a href="/jietu?w=j">截图</a><em></em></li>
            <li><a href="/jietu?w=b">壁纸</a><em></em></li>';
        }else{
        	echo '<li><a href="/jietu?w=j">截图</a><em></em></li>
        	<li class="cur"><a href="/jietu?w=b">壁纸</a><em></em></li>';
        }
        ?>
        </ul>
    </div>

    <div class="pic_list">
        <ul>
        <?php 
        		if(!empty($info)){
        			foreach ($info as $k=>$v){
        				echo '<li><a href="'.$v['small_link'].'" target="_blank"><img src="/uploads/'.$v['big_url'].'" /><span>'.$v['title'].'</span></a></li>';
        			}
        		}
        ?>
        </ul>
    </div>
</div>

<?php require_once '_footer.ctp';?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function(){
	//公众号
	$(".wx_link").hover(function () {
			$("#wx_pic").show();
		}, function () {
			$("#wx_pic").hide();
	})
});
//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e737a33fcfdf5c458257847d176d585b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>