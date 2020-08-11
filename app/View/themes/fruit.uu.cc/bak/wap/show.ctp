<?php 
$content=$result["News"];
$downloadlink = $this->Fr->getBlock($site_id, 'downloadlink_show_wap'); // 下载链接
$preId = $this->Fr->getPreNewsId($site_id, $content['id']); // 上一篇新闻id
$nextId = $this->Fr->getNextNewsId($site_id, $content['id']); // 下一篇新闻id
?>

<?php require_once '_head.ctp';?>
    <div class="page" style="background-color:#fff;">
        <div class="topbar">
            <a class="back" href="<?php echo $this->Base->getNewsUrl($content['news_categories_id']);?>"></a>
            <?php if ($downloadlink) :?>
                <?php echo $downloadlink;?>
            <?php else:?>
                <a class="download" href="#">游戏下载</a>
            <?php endif;?>
        </div>
        <div class="content">
            <div class="news_tit">
                <h3><?=$content['title'] ?></h3>
                <p>时间：<?php echo date("Y-m-d H:i:s",$content["created"]);?></p>
            </div>
            <div class="news_con">
            <?=$content['content']?>
            </div>
        </div>
        <div class="bot_bar">
        <?php 
        if($preId){
        	$url = $this->Base->getShowUrl($preId['id']);
        	echo '<a href="'.$url.'" class="fl"><上一篇</a>';
        }else{
        	echo '<a href="#" class="fl"></a>';
        }
        
		if($nextId){
        	$url = $this->Base->getShowUrl($nextId['id']);
        	echo '<a href="'.$url.'" class="fr">下一篇></a>';
        }else{
        	echo '<a href="#" class="fr"></a>';
        }
        ?>
        </div>
    </div>
<?php require_once '_foot.ctp';?>
