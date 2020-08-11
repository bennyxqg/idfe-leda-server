<!DOCTYPE html>
<html>
<?php
$full_base_url.='/wap/';
$this->JZW->init(array('site_id' => $site_id));
$content=$result["News"];
$preId = $this->JZW->getPreNewsId($site_id, $content['id']); // 上一篇新闻id
$nextId = $this->JZW->getNextNewsId($site_id, $content['id']); // 下一篇新闻id
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $title.'-'.$content['title']; ?></title>
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
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.xz_down').attr('href','//jzw.uu.cc/activity/jzw/weixingw.html');
return true; 
}else{ 
var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }

               
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					 $('.down_load').click(function(){
						alert('即将上线，敬请期待！想了解游戏最新信息，请加微信公众号和玩家群！'); 
					 })
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					$('.down_load').click(function(){
						alert('即将上线，敬请期待！想了解游戏最新信息，请加微信公众号和玩家群！'); 
					 })
					
				}



return false; 
} 
} 
</script> 
</head>
<body>
<div class="container">
<header id="show_h">新闻详情</header>
<article>
<h1><?php echo $content['title']; ?></h1>
<span class="timer">时间：<?php echo date('Y-m-d H:i:s',$content['created']); ?></span>
<p>
<?php echo $content['content'] ?>
</p>

</article>
<div class="page">
<?php if($preId) { ?>
	<a href="//jzw.uu.cc/show/<?php echo $preId['id']; ?>" class="pre"><上一页</a>
<?php } ?>

<?php if($nextId) { ?>
	<a href="//jzw.uu.cc/show/<?php echo $nextId['id']; ?>" class="next">下一页></a>
<?php } ?>
</div>
</div>
</body>