<?php 
require_once "include.php";
if($category_id==98){
$category_id='all';
}
//echo $page;

$datas =  $this->Tanke->newsInitData($page,$category_id);
$consulting = $datas['consulting'];
$page = $datas['page'];

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?>  
<meta name="keywords" content="<?= $keywords; ?>"/>
<meta name="description" content="<?= $description; ?>"/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link rel="stylesheet" href="<?php BASE_URL() ?>/new_index/css/style.css" />

</head>

<body>
    <div class="section_page">
    	<div class="top_nav">
        	<div class="wrap">
                <a class="home_logo" href="#link" target="_self"></a>
                <div class="pa nav">
                    <ul>
                        <li><a href="//tanke.uu.cc" target="_self">官网首页</a></li>
                        <li class="on"><a href="//tanke.uu.cc/news/98.html" target="_self">新闻公告</a></li>
                        <li><a href="//tanke.uu.cc/game_data/327.html" target="_self">游戏资料</a></li>
                        <li><a href="//tanke.uu.cc/vedio/1.html" target="_self">影音中心</a></li>
                        <li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378" target="_self">官方论坛</a></li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="top_banner">
        	<div class="wrap">
            	
            </div>
        </div>
    </div>
    <div class="page_main">
    	<div class="wrap">
        	<div class="pr page_nav">
            	<div class="item_nav">
                    <a <?php if ($category_id == 'all') echo 'class="on"';?> href="//tanke.uu.cc/news/98.html" target="_self">综合</a>
                    <a <?php if ($category_id == 321) echo 'class="on"';?>href="//tanke.uu.cc/news/321.html" target="_self">公告</a>
                    <a <?php if ($category_id == 320) echo 'class="on"';?>href="//tanke.uu.cc/news/320.html" target="_self">新闻</a>
                    <a <?php if ($category_id == 326) echo 'class="on"';?>href="//tanke.uu.cc/news/326.html" target="_self">玩家攻略</a>
                </div>
                <div class="pa site_nav">当前位置：<a href="//tanke.uu.cc" target="_self">首页</a> &gt; 新闻中心</div>
            </div>
            <div class="news_list">
            	<ul>
            	
            	 <?php foreach($consulting as $k=>$v):?>
            	   <li>
                    	<a class="news_tit" href="//tanke.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a>
                    	<p><?php echo $this->Tanke->substr_cut(strip_tags($v['content']),300); ?></p>
                        <span class="m_d"><?php echo date("M-d",$v['created']) ?></span>
                        <span class="year"><?php echo date("Y",$v['created']) ?></span>
                        <a class="news_go" href="//tanke.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"></a>
                    </li>
            	 
            	 <?php endforeach; ?>
            	 
            	 
                </ul>
            </div>
            <div class="pages"><?php echo $page;?></div>

        </div>
    </div>


<div class="pop_down">
	<a class="close" href="javascript:;" title="关闭"></a>
    <img src="<?php echo $topData['other']['game_download_qrcode'];?>" />
    <a class="down" href="javascript:;" onclick="alert('敬请期待')"></a>
    <a class="down2" href="https://appsto.re/cn/pB-pcb.i" target="_self"></a>
</div>

<?php require_once 'footer.ctp';?>

<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//微信
	var dl = $("#nav_fuli");
	var pd = $(".pop_wx");
	dl.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
	pd.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
	
	$('.pop_down .close').click(function(){
		$('.pop_down').hide()
	});
});	
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
