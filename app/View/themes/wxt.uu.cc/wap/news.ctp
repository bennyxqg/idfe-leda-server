<?php
require_once "include.php";
if($category_id==98){
	$category_id='all';
}

$datas =  $this->Wxt->newsInitData($page,$category_id);
$consulting = $datas['consulting'];
$page = $datas['page'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
require_once "include.php";
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
</head>

<body>
	<div id="#page-content">
        <div class="top">
            <div class="logo">
                <img src="<?php BASE_URL() ?>images/logo.png" />
                <h2>五行天手游</h2>
                <p>亲密社交3D国战手游</p>
            </div>
            <div class="menu-bg"></div>
            <div class="menu">				
                <ul>
                    <li><a href="//wxt.uu.cc">官网首页</a></li>
                    <li><a href="//wxt.uu.cc/news/349.html">新闻中心</a></li>
                    <!--
                    <li><a href="javascript;;">游戏特色</a></li>
                    <li><a href="javascript;;">职业介绍</a></li>
                    <li><a href="javascript;;">游戏视频</a></li>
                    <li><a href="javascript;;">游戏资料</a></li>
                    -->
                </ul>
            </div>
            <div class="burger">
                <div class="x"></div>
                <div class="y"></div>
                <div class="z"></div>
            </div>
        </div>
		<div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>新闻中心</div>
        <div class="page-main">
            <div class="wrap">
                
                <div class="news-tabs">
                	<a <?php if ($category_id == 'all') echo 'class="active"';?> href="//wxt.uu.cc/news/98.html">最新</a>
                    <a <?php if ($category_id == '349') echo 'class="active"';?> href="//wxt.uu.cc/news/349.html">新闻</a>
                    <a <?php if ($category_id == '346') echo 'class="active"';?> href="//wxt.uu.cc/news/346.html">公告</a>
                    <a <?php if ($category_id == '347') echo 'class="active"';?> href="//wxt.uu.cc/news/347.html">活动</a>
                    <a <?php if ($category_id == '350') echo 'class="active"';?> href="//wxt.uu.cc/news/350.html">攻略</a>
                </div>
                <div id="news-tabs-container">
                    <ul>
                    <?php foreach($consulting as $k=>$v):?>
                    <li><a href="//wxt.uu.cc/show/<?php echo $v['id'];?>.html"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['created']) ?></span></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="pages"><?php echo $page;?></div>
            </div>
        </div>
	</div>  
    <div class="footer">Copyright©2009-<em class="copy-year">2016</em> 
	深圳市创梦天地科技有限公司 版权所有 <br>粤ICP备11018438号
	粤网文〔2016〕6871-1632号<br> 批准文号：文网游备字〔2016〕Ｍ-RPG 7445 号   <br> 新广出审[2017]1900号 出版号：ISBN  978-7-7979-5402-0
	</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	//顶部导航
	$('.burger').click(function(){
		if (!$(this).hasClass('open')) {
			openMenu();
		} else {
			
			closeMenu();
		}
	})

	$('.menu ul li a').click(function(e){
		//e.preventDefault();
		closeMenu();
	});
	function openMenu() {
		$('div.burger').addClass('open');
		$('div.x, div.z').addClass('collapse');
		$('.menu,div.menu-bg').fadeIn();
		setTimeout(function () {
			$('div.y').hide();
			$('div.x').addClass('rotate30');
			$('div.z').addClass('rotate150');
		}, 70);
		setTimeout(function () {
			$('div.x').addClass('rotate45');
			$('div.z').addClass('rotate135');
		}, 120);
	}
	function closeMenu() {
		$('.menu,div.menu-bg').fadeOut();
		setTimeout(function() {
			$('div.burger').removeClass('open');
			$('div.x').removeClass('rotate45').addClass('rotate30');
			$('div.z').removeClass('rotate135').addClass('rotate150');
			setTimeout(function() {
				$('div.x').removeClass('rotate30');
				$('div.z').removeClass('rotate150');
			}, 50);
			setTimeout(function () {
				$('div.y').show();
				$('div.x, div.z').removeClass('collapse');
			}, 70);
		}, 100);
	}
	
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>
</html>
