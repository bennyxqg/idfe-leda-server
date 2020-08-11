<?php 
$rmhd = '//ironforce.uu.cc/news/170.html?t=r';
$yxzl = '//ironforce.uu.cc/news/168.html?t=y';
$gljh = '//ironforce.uu.cc/news/172.html?t=g';
?>

<div class="fl top_nav">
	<ul>
	<?php 
	switch ($_GET['t'])
	{
		case 'r':
			echo '<li><a href="//ironforce.uu.cc/" target="_self">官网首页</a><em>|</em></li>
		<li class="cur"><a href="'.$rmhd.'" target="_blank">热门活动</a><em>|</em></li>
		<li><a href="'.$yxzl.'" target="_blank">游戏资料</a><em>|</em></li>
		<li><a href="'.$gljh.'" target="_blank">攻略集合</a></li>';
			break;
		case 'y':
			echo '<li><a href="//ironforce.uu.cc/" target="_self">官网首页</a><em>|</em></li>
			<li><a href="'.$rmhd.'" target="_blank">热门活动</a><em>|</em></li>
			<li class="cur"><a href="'.$yxzl.'" target="_blank">游戏资料</a><em>|</em></li>
			<li><a href="'.$gljh.'" target="_blank">攻略集合</a></li>';
			break;
		case 'g':
			echo '<li><a href="//ironforce.uu.cc/" target="_self">官网首页</a><em>|</em></li>
			<li><a href="'.$rmhd.'" target="_blank">热门活动</a><em>|</em></li>
			<li><a href="'.$yxzl.'" target="_blank">游戏资料</a><em>|</em></li>
			<li class="cur"><a href="'.$gljh.'" target="_blank">攻略集合</a></li>';
			break;
		default:
			echo '<li class="cur"><a href="//ironforce.uu.cc/" target="_self">官网首页</a><em>|</em></li>
			<li><a href="'.$rmhd.'" target="_blank">热门活动</a><em>|</em></li>
			<li><a href="'.$yxzl.'" target="_blank">游戏资料</a><em>|</em></li>
			<li><a href="'.$gljh.'" target="_blank">攻略集合</a></li>';
			break;
	}
	?>
	
		
	</ul>
</div>
<div class="fr wx_link">
	<div id="wx_pic"><img src="<?php echo $full_base_url ?>/images/v2/code_pic.png" /><span>公众号 <em>钢铁力量</em></span></div>
</div>