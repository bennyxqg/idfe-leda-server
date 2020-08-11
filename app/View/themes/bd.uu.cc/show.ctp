<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";

$base_path = "//bd.uu.cc/bd.uu.cc/";

$data = $this->Bd->getPreLastId($news_id);

echo '<title>'.GET_BLOCK('web_title').'-'.GET_CURRENT_NEWS_INFO('title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="<?php echo $base_path; ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_path; ?>css/swiper.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo $base_path; ?>favicon.ico">
</head>

<body>
<div class="top_bar"><a class="back" href="javascript:history.go(-1);"><i></i>返回</a><div class="language"><a href="//buddyman.ldoverseas.com" target="_blank">ENG</a> | <a class="on">CHN</a></div></div>
<div class="news_content">
	<div class="news_time"><?php echo date('Y-m-d',GET_CURRENT_NEWS_INFO('created'))?></div>
    <h2 class="news_tit"><?php echo GET_CURRENT_NEWS_INFO('title');?></h2>
    <div class="content"><?php echo GET_CURRENT_NEWS_INFO('content');?></div>
    <div class="prev_next">
    	<a class="fl news_next" href="<?php if ($data['data']['pre']) echo "//bd.uu.cc/show/".$data['data']['pre'].".html"; else "javascript:;";?>"></a>
        <a class="fr news_prev" href="<?php if ($data['data']['last']) echo "//bd.uu.cc/show/".$data['data']['last'].".html"; else "javascript:;";?>"></a>
    </div>
</div>
</body>
</html>
