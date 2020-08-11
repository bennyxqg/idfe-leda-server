<?php 
require_once "include.php";
if($category_id==98){
	$category_id='all';
}
//echo $page;

$datas =  $this->Xhzc->newsInitData($page,$category_id);
$consulting = $datas['consulting'];
$page = $datas['page'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?>
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" />

</head>

<body>
	<div class="header">
    	<div class="wrap">
            <a class="fl logo" href="//xhzc.uu.cc/" target="_self"></a>
            <div class="fl menu">
                <ul>
                    <li><a href="//xhzc.uu.cc/" target="_self">官网首页</a></li>
                    <li><a href="//xhzc.uu.cc/news/98" target="_blank">新闻资讯</a></li>
                    <li><a href="javascript:alert('敬请期待！')" target="_self">游戏特色</a></li>
                    <li><a href="<?php echo $topData['other']['forum_url'];?>" target="_self">官方论坛</a></li>
                </ul>
            </div>
            <a class="fr qq_btn" href="javascript:;"></a>
            <a class="fr weixin_btn" href="javascript:;"></a>
            <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo $topData['other']['weixin_qrcode'];?>"><h3>扫一扫领礼包</h3></div>
            <div class="pa wxin_qq_pop qq_pop"><span>加入VIP先遣队</span>
            <?php $qqqun = explode(',',$topData['other']['qq_group']);
		    	foreach ($qqqun as $v):
					echo "<h3>$v</h3>";
				endforeach;
		    ?>
            </div>
    	</div>
    </div>
    <div class="banner">
    	<div class="wrap"></div>
    </div>
    <div class="page_main">
    	<div class="wrap">
        	<div class="pr page_nav">
            	<div class="item_nav">
                    <a class="on">新闻资讯</a>
                </div>
                <div class="pa site_nav">当前位置：<a href="#link" target="_self">首页</a> &gt; 新闻资讯</div>
            </div>
            <div class="news_list">
            	<ul>
            	
            	<?php foreach($consulting as $k=>$v):?>
            	   <li>
                    	<a class="news_tit" href="//xhzc.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a>
                    	<p><?php echo $this->Tanke->substr_cut(strip_tags($v['content']),300); ?></p>
                        <span class="m_d"><?php echo date("M-d",$v['created']) ?></span>
                        <span class="year"><?php echo date("Y",$v['created']) ?></span>
                        <a class="news_go" href="//xhzc.uu.cc/show/<?php echo $v['id'];?>.html" target="_blank"></a>
                    </li>
            	 
            	 <?php endforeach; ?>
            	
            	
                </ul>
            </div>
            <div class="pages"><?php echo $page;?></div>
        </div>
    </div>


<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//微信
	var wxin_dl = $(".weixin_btn");
	var wxin_pd = $(".wxin_pop");
	var qqun_dl = $(".qq_btn");
	var qqun_pd = $(".qq_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	$(".qq_btn,.qq_pop").hover(function() {
		qqun_pd.addClass("wxin_pop_show");
	}, function() {
		qqun_pd.removeClass("wxin_pop_show");
	});
});	
</script>
</body>
</html>
