<?php 
// 公告
$notices = $webHelper->getNews($noticeCategoryId);
?>
<ul>
<?php 
	if(!empty($notices)):
		foreach ($notices as $key => $notice):
?>
			<li><a href="<?php echo $this->Base->getShowUrl($notice["id"]);?>">公告：<?php echo $notice['title'];?></a></li>
<?php 		
			
		endforeach;
	endif;
?>
</ul>