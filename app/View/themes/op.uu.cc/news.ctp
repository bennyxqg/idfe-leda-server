<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body class="page">

<div class="page1">
	<div class="wrap">
    	<a class="home_link" href="//op.uu.cc/home" target="_blank" title="前往官网首页"></a>
    </div>
</div>
<div class="page2">
	<div class="wrap">
    	<div class="news_list_box">
        	<div class="item_tit">
            	<h2>最新动态NEWS</h2>
                <div class="item_nav"><a href="//op.uu.cc/home" target="_self">首页 &gt;</a> 新闻动态</div>
            </div>
            <div class="news_list">
            	<ul>
            	<?php
            	SHOW_NEWS('<li><i class="@@CATEGORY_MAP@@">@@CATEGORY_NAME@@</i><a href="@@URL@@" target="_self">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),100,1,array('CategoryMap'=>array('新闻'=>'news_icon','公告'=>'act_icon','活动'=>'act2_icon')));
            	?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp");?>
</body>
</html>
