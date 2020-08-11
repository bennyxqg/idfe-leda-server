
<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Jxmg->getDatas(0,$page);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = "//mg.uu.cc/mg.uu.cc/wap/";

echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path; ?>css/style.css"  />
<script src="<?php echo $base_path; ?>js/jquery.min.js"></script>
<script src="<?php echo $base_path; ?>js/jquery.pagination.js"></script>
</head>

<body>

<div id="content">
	<div class="top">
    	<img class="game-logo" src="<?php echo $base_path; ?>images/game_logo.png" />
        <img class="game-name" src="<?php echo $base_path; ?>images/game_name.png" />
        <a class="download" href="//mg.uu.cc/download"></a>
    </div>
    
    <div class="main">
    	<div class="vedio-box"><video width="100%" style="background:#000;" onClick="playPause()" height="296" poster="<?php echo $base_path; ?>images/video_bg.jpg" controls src="<?php echo GET_BLOCK('vedio_url');?>" /></div>
    	<div class="item-tit"></div>
        <div class="img-box">
        	<div class="img-list">
            	<ul></ul>
            </div>
            <div class="img-page"></div>
        </div>
        
        <div class="contact">
        	<a class="public-pop-btn" href="javascript:;"></a>
            <span>535114977</span>
            <a href="#link" title="玩家社区"></a>
        </div>
    </div>
    
    <div class="footer">
    	<a href="http://www.idreamsky.com/"><img src="<?php echo $base_path; ?>images/logo.png" /></a>
        <div class="links"><a href="http://www.idreamsky.com/homes/about">关于我们</a> | <a href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a href="<?php echo GET_BLOCK('forum_url'); ?>">进入论坛</a></div>
    	<div class="copyright">Copyright©2009-<span class="copy-year">2017</span> 深圳市创梦天地科技有限公司 版权所有</div>
    	<div>粤网文〔2016〕6871-1632号  新广出审[2017]5374号  </div>
        <div>出版物号：ISBN  978-7-7979-8885-8 文网游备字〔2017〕Ｍ-CSG 1423 号</div>
        <div class="game-tips">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<div class="mask"></div>
<div class="img-show"><img src="" /><a class="close" href="javascript:;"></a></div>


<!--关注公众号 弹窗-->
<div class="public-pop">
	<img src="<?php echo GET_BLOCK('weixin_qrcode'); ?>" />
    <span>机械迷宫<?php echo GET_BLOCK('weixin_account'); ?></span>
</div>

<script>
$(function(){
	
	var url = 'http://mg.uu.cc/datas/0/1';
	$.get(url, function(json){
		var obj = eval("("+json+")");
		$('.img-page').pagination({
			pageCount: obj.page_total, /*这里是后台传过来的总页数*/
			jump:true,
			coping:true,
			count:1,
			prevContent:'上页',
			nextContent:'下页',
			keepShowPN: true,
			callback:function(api){
				
				var pageIndex = api.getCurrent(),
					data = {
					page: pageIndex, //传当前的页码
				};
				
				var url = 'http://mg.uu.cc/datas/0/'+pageIndex;
				$.getJSON(url, data, function(json){
//					var obj = eval("("+json+")");
//					console.log(json.data);
					$('.img-list ul').html(json.data)
				});
			}
		});
		$('.img-list ul').html(obj.data)
		$('.img-list ul img').click(function(){
			var imgSrc = this.name;
			$('.img-show img').attr('src',imgSrc);
			$('.mask,.img-show').show();
		})
//		console.log(obj.data,obj.page_total);
	});
	
	$('.public-pop-btn').click(function(){
		$('.mask,.public-pop').show();
	})
	
	$('.close,.mask').click(function(){
		$('.mask,.img-show,.public-pop').hide();
	})

})

function playPause() {
	var myVideo = document.getElementsByTagName('video')[0];
	if (myVideo.paused){
	   myVideo.play();
	}else{
	   myVideo.pause();
	}
}
</script>
</body>
</html>
