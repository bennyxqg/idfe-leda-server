<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="show">
       <div class="head">
         <a href="<?php CATEGORY_URL('新闻') ?>" class="back">详情</a>
         <a href="//hjdt.uu.cc/download" class="down_load">游戏下载</a>
       </div>
       <div class="article">
          <h1><?php SHOW_CURRENT_NEWS_INFO('title') ?></h1>
          <span class="time">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('updated')) ?></span>
          <div class="s_cont">
          <?php SHOW_CURRENT_NEWS_INFO('content') ?>
          </div>
       </div>
       <div class="page">
       <?php
       	SHOW_PREV_NEWS('<a href="@@URL@@" class="pre"><上一篇</a>');
       	SHOW_NEXT_NEWS('<a href="@@URL@@" class="next">下一篇></a>');
       ?>
       </div>
    </div>
</body>