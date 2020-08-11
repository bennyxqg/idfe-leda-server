<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>乱斗之王</title>
<meta content="<?= $keywords; ?>" name="keywords">
<meta name="description" content="<?= $description; ?>">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="author" content="乱斗之王">
<link rel="stylesheet" href="<?php echo $full_base_url ?>/mobile/css/mobile.css"/>

<?php 
$topData=$this->Ld->indexInitData();
// var_dump($topData);
$top_ma = $topData['top_ma'];
$footer_ma = $topData['footer_ma'];
$total = $topData['total'];
/* if($topData['site_block']){
	foreach ($topData['site_block'] as $k=>$v){
		if($v['Abbr'] == 'index_1'){
			$top_ma = $v;
		}
		if($v['Abbr'] == 'index_2'){
			$footer_ma = $v;
		}
	}
} */
/* $site_block = $topData['site_block'];
$topData['consulting'] = isset($topData['consulting']) ? $topData['consulting'] : array();
$topData['gonggao'] = isset($topData['gonggao']) ? $topData['gonggao'] : array();
$topData['huodong'] = isset($topData['huodong']) ? $topData['huodong'] : array();
// var_dump($topData['zong_list']);
$news_list = array_merge($topData['consulting'],$topData['gonggao'],$topData['huodong']);
$_news = $this->Cpb->getMenuNews(); */
$cid_map=$topData['cid_map'];
?>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9ce983a1ee9572198ea8bf47c150fc98";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
