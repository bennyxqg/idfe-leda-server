<!DOCTYPE html><html lang="zh-cn"><head>
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="//fruit.uu.cc/fruit.uu.cc/favicon.ico">
    <link media="screen" href="//fruit.uu.cc/fruit.uu.cc/css/m.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->
    
	<script src="//hm.baidu.com/hm.js?bd1059138318d7c7f0b88858b83c5421"></script>
</head>
<body>    
<div class="page" style="background-color:#fff;">
        <div class="topbar">
        <?php /*BLOCK*/
            echo '<a class="back" href="//fruit.uu.cc/news/'.GET_CURRENT_NEWS_INFO('news_categories_id').'.html"></a>';
           /* echo '<a class="download DOWNLOAD_LINK_EDIT" href="'.GET_BLOCK('android_download_url').'" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'">游戏下载</a>';
        /*BLOCK*/ ?>
        </div>
        <div class="content">
            <div class="news_tit">
                <h3><?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('title') /*BLOCK*/ ?></h3>
                <p>时间：<?php /*BLOCK*/ echo date('Y-m-d H:i:s',GET_CURRENT_NEWS_INFO('created')) /*BLOCK*/ ?></p>
            </div>
            <div class="news_con">
            <div>
            	<?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('content') /*BLOCK*/ ?>
            </div>
        </div>
        <div class="bot_bar">
        <?php /*BLOCK*/
        echo '<a href="'.GET_PREV_NEWS_URL().'" class="fl">';
        /*BLOCK*/ ?>
        &lt;上一篇</a>
        <?php /*BLOCK*/
        echo '<a href="'.GET_NEXT_NEWS_URL().'" class="fr">';
        /*BLOCK*/ ?>
                        下一篇&gt;</a>        
        </div>
    </div>
    
 <script type="text/javascript">
$(function(){
	$(".DOWNLOAD_LINK_EDIT").each(function(){
		if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_ios'));
		else if (/(Android)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_android'));
	});	
});
</script>

</div>																																												</body></html>