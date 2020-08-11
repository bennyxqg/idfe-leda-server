<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta content="<?= $keywords; ?>" name="keywords" />
    <meta content="<?= $description; ?>" name="description" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css" />
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
</head>
<body>
<?php 
$topData=$this->Tp->topData();
$content=$result["News"];
if(!empty($topData['total'])){
	foreach ($topData['total'] as $key=>$v){
		if($v['id'] == $news_id){
			$next_news = isset($topData['total'][$key+1]['id']) ? $topData['total'][$key+1]['id'] : '';
			$pre_news = isset($topData['total'][$key-1]['id']) ? $topData['total'][$key-1]['id'] : '';
			break;
		}
		
	}
}
// var_dump($topData);exit;

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
        if($pre_news){
        	$url = $this->Base->getShowUrl($pre_news);
        	echo '<a href="'.$url.'" class="fl"><上一篇</a>';
        }else{
        	echo '<a href="#" class="fl"></a>';
        }
        
		if($next_news){
        	$url = $this->Base->getShowUrl($next_news);
        	echo '<a href="'.$url.'" class="fr">下一篇></a>';
        }else{
        	echo '<a href="#" class="fr"></a>';
        }
        ?>
        </div>
    </div>
</body>
</html>
