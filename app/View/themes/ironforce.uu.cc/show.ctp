<body class="page">
<?php
require_once '_header.ctp';
require_once '_common.ctp';
$banner = $webHelper->getSingleBlock('inner_banner');
$cateId = $result["News"]['news_categories_id'];
$allCategories = $webHelper->getNewsCategory(); // 所有新闻分类
$category = $allCategories[$cateId]; // 分类名称
$qrcodeDownloadAndroid = $webHelper->getBlock($site_id, 'qrcode_download'); // Android下载二维码
$qrcodeWeixinImg = $webHelper->getBlock($site_id, 'qrcode_weixin'); // 微信关注二维码
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
    	<div class="nav font_st"><a href="//ironforce.uu.cc/" target="_self" title="前往首页">首页</a> &gt;&gt; 新闻中心</div>
        <a class="pa back_home" href="//ironforce.uu.cc/" target="_self">返回首页</a>
    </div>
</div>

<div class="page_con">
   
	<h2 class="new_tit"><?=$result["News"]["title"];?></h2>
    
    <div class="content">
    	<?=$result['News']['content'];?>
    </div>
    
    <div class="share clearfix">
        <div class="bdsharebuttonbox fr">
            <a href="#" class="bds_more" data-cmd="more">分享到：</a>
            <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a>
            <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a>
            <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a>
            <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a>
        </div>
        <script>
        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        </script>
    </div>
</div>

<?php require_once '_footer.ctp';?>

<div class="scroll_top" id="scroll_top" style="display:none;">回到顶部</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type"text/javascript">
//返回顶部
$(function(){
	showScroll();
	function showScroll(){
		$(window).scroll( function() { 
			var scrollValue=$(window).scrollTop();
			scrollValue > 100 ? $('div[class=scroll_top]').fadeIn():$('div[class=scroll_top]').fadeOut();
		} );	
		$('#scroll_top').click(function(){
			$("html,body").animate({scrollTop:0},200);	
		});	
	}
		//公众号
	$(".wx_link").hover(function () {
			$("#wx_pic").show();
		}, function () {
			$("#wx_pic").hide();
	})
})

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