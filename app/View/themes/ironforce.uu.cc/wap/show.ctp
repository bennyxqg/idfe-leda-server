<?php
require_once '_header.ctp';
require_once '_common.ctp';
$content = $result["News"];
$preId = $webHelper->getPreNewsId($site_id, $content['id']); // 上一篇新闻id
$nextId = $webHelper->getNextNewsId($site_id, $content['id']); // 下一篇新闻id
?>
    <div class="page">
        <div class="topbar">
            <h2>新闻详情</h2>
            <a class="back" href="<?php echo $this->Base->getNewsUrl($content['news_categories_id']);?>"></a>
        </div>
        <div class="content">
            <div class="news_tit">
                <h3><?php echo $content['title'] ?></h3>
                <p>时间：<?php echo date("Y-n-j H:i:s",$content["created"]);?></p>
            </div>
            <div class="news_con">
                <?php echo $content['content'];?>
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
    <script>
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
