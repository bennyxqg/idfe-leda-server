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
$consulting =  $this->Tp->newsInitData($page,$category_id);
// var_dump($consulting);
$zxdtUrl = "//tp2.uu.cc/uploads/";
switch($category_id){
    case 22://
        $name="新闻";
        break;
    case 21://
        $name="攻略集合";
        break;
    case 23://
        $name="热门活动";
        break;
    case 102://76
        $name="公告";
        break;
    case 104://78
        $name="游戏资料";
        break;
    default:
        $name="新闻";
    break;
}
?>
<div class="page">
        <div class="topbar">
            <h2><?=$name;?></h2>
            <a href="javascript:history.back();"></a>
        </div>
        <div class="content">
            <ul class="newslist">
            <?php if($consulting):?>
                    <?php foreach($consulting as $key=>$v):
                    $v['small_url'] = isset($v['small_url']) ? $zxdtUrl.$v['small_url'] : $full_base_url."/images/li_img.jpg";
                    ?>
                        <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                    <h3><?=$v['title']?></h3>
                    <div><?php echo mb_substr($v['content'],0,24,'utf-8')?>......</div>
                    <span><?=date("m/d",$v["created"])?></span>
                    <img src="<?php echo $v['small_url']?>" alt="">
                        </a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
</body>
</html>
