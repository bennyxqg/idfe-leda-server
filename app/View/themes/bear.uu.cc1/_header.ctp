<?php 
/*
 * 这里主要对网站中公共的变量进行初始化
*/
$webHelper = $this->Bear; // 不同网站的helper由一个变量控制
$webHelper->init(array('site_id' => $site_id, 'limit' => 5)); // 设置网站id和分页数
$allCategorires = $webHelper->getNewsCategory(); // 所有新闻分类；此网站分类显示没有需要特殊显示的分类，所以可以直接从数据库中读取
/* 新闻列表 */
$categories = $allCategorires; // 首页需要显示的新闻分类
unset( $categories[$webHelper->noticeId] ); // 删除公告分类----公告分类显示在顶部

$noticeId = $webHelper->noticeId; // 公告分类
$notices = $webHelper->getNews($noticeId); // 公告
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keywords;?>"/>
    <meta name="description" content="<?php echo $description;?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>