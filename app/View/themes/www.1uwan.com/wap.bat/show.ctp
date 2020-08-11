<?php require_once '_header.ctp' ?>
<?php 
$content=$result["News"];
$preId = $webHelper->getPreNewsId($site_id, $content['id']); // 上一篇新闻id
$nextId = $webHelper->getNextNewsId($site_id, $content['id']); // 下一篇新闻id
?>
    <div class="page">
        <div class="topbar">
            <h2>新闻详情</h2>
            <a href="javascript:history.back();"></a>
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
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=40202270" charset="UTF-8"></script>
</body>
</html>
