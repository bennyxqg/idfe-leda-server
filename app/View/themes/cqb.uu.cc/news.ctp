<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/v2/css/style.css" type="text/css" />
</head>

<body class="page">
<div class="pages">
	<div class="wrap">
    	<a class="pa home_logo fHide" href="//cqb.uu.cc/home" target="_self" title="《苍穹变》官网">《苍穹变》官网</a>
        <div class="pa nav">
        	<ul>
            	<li><a href="//cqb.uu.cc/home" target="_self">官网首页<br><i>HOME</i></a></li>
                <li><a href="//cqb.uu.cc/home/#game_tese" target="_self">游戏特色<i>GAME FEATURES</i></a></li>
                <li><a href="//cqb.uu.cc/home/#game_data" target="_self">游戏资料<i>GAME DATA</i></a></li>
                <li><a href="//bbs.uu.cc/forum-302-1.html" target="_blank">官方论坛<i>BBS</i></a></li>
            </ul>
        </div>
        <div class="pages_con clearfix">
        	<div class="page_nav">您所在的位置： <a href="//cqb.uu.cc/home" target="_self">首页</a> > <strong>新闻中心</strong></div>
            
            <div class="fl side_down">
            	<a href="<?php BLOCK('ios_download_url') ?>" id="ios" title="苹果下载"></a>
				<a href="<?php BLOCK('android_download_url') ?>" id="az" title="安卓下载"></a>
            </div>
            <div id="tab" class="fr content">
                <div class="pr pages_news_tab">
                	<h2 class="pa">新闻中心</h2>
                    <ul class="tab_hd">
                        <li class="cur">最新</li>
                        <li>公告</li>
                        <li>新闻</li>
                        <li>活动</li>
                    </ul>
                </div>
                <div class="pages_news_list">
                    <ul class="tab_con">
                    
                    <?php
                    	SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@ </a><span>@@DATE@@</span></li>','m-d','新闻',6,1,array());
                    	SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@ </a><span>@@DATE@@</span></li>','m-d','公告',6,1,array());
                    	SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@ </a><span>@@DATE@@</span></li>','m-d','活动',6,1,array());
                    ?>
                    
                    </ul>
                    <ul class="tab_con">
                    <?php
                    	SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@ </a><span>@@DATE@@</span></li>','m-d','公告',12,1,array());
                    ?>
                    </ul>
                    <ul class="tab_con">
                    <?php
                    	SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@ </a><span>@@DATE@@</span></li>','m-d','新闻',12,1,array());
                    ?>
                    </ul>
                    <ul class="tab_con">
                    <?php
                    	SHOW_NEWS('<li><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@ </a><span>@@DATE@@</span></li>','m-d','活动',12,1,array());
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    底部开始      -->
<?php require_once "_footer.ctp";?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	/*tab 选项卡*/
	$('#tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('li').each(function(i){
			if(i==0){
				$(this).addClass('cur');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).click(function(){
				$(this).siblings('li').removeClass('cur');
				$(this).addClass('cur');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
	})
});
</script>
</body>
</html>
