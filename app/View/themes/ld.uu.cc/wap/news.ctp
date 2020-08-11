<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<?php require_once('top.ctp'); ?>
</head>
<body >
<div class="container" style="background:#202121;">
   <div class="top">
      <img alt="" src="<?php BLOCK('game_icon') ?>">
      <a class="d_onload" href="<?php BLOCK('android_download_url') ?>"></a>
   </div>
   <div class="relative">
      <a href="/home" class="back"><img src="<?php BASE_URL() ?>images/back.png" width="25" height="36" /></a>
      <span class="lm_xw"></span>
      <a href="#" class="lm_list"><img src="<?php BASE_URL() ?>images/list.png" width="34" height="36" /></a>
      <div class="tishi">
         <a class="xw" href="<?php CATEGORY_URL('综合') ?>"></a>
         <a class="gl" href="<?php CATEGORY_URL('公会','gonglue') ?>"></a>
         <a class="yx" href="<?php CATEGORY_URL('聚怪','yxjs') ?>"></a>
      </div>
   </div>
   <div class="hm_xw">
      <ul id="lanmu" class="x_g">
        <a class="on" href="javascript:;" id="zh_btn">综合</a>
        <a href="javascript:;" id="xw_btn">新闻</a>
        <a href="javascript:;" id="gg_btn">公告</a>
        <a href="javascript:;" id="hd_btn">活动</a>
      </ul>
      <div class="xw_gg">
        <ul id="z_h" style="display:block;">
        	<?php
        		SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a  target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),4,0,array('OrderBy'=>'`sort` asc'))
        	?>
        </ul>
        <ul id="x_w">
        	<?php
        		SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',4,0,array('OrderBy'=>'`sort` asc'))
        	?>
        </ul>
        <ul id="g_g">
			<?php
        		SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公告',4,0,array('OrderBy'=>'`sort` asc'))
        	?>
        </ul>
        <ul id="h_d">
			<?php
        		SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','活动',4,0,array('OrderBy'=>'`sort` asc'))
        	?>
        </ul>
      </div>
      <p class="more"><a href="#" id="get_more_btn">查看更多</a><img src="<?php BASE_URL() ?>images/more.png" width="17" height="15" /></p>
    </div>
    <div class="qq_wb">
      <h2>官方QQ交流群</h2>
      <p>
      <?php
      	$qqs=explode(',',GET_BLOCK('qq_group'));
      	$len=count($qqs);
      	for($i=0;$i<$len;$i++)
      		echo '<span>官方'.($i+1).'群：'.$qqs[$i].' </span>';
      ?>
      </p>
      <ul>
        <a href="<?php BLOCK('weibo_url') ?>"><span></span>官方微博</a>
        <a href="<?php BLOCK('baidu_tieba_url') ?>"><span></span>百度贴吧</a>
        <a href="<?php BLOCK('forum_url') ?>"><span></span>官方论坛</a>
      </ul>
    </div>
    <?php require_once("_footer.ctp"); ?>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/commen.js"></script>

<script type="text/javascript">
	$(function(){
		var pages=[];
		var limit=4;
		var currentbtnid='zh_btn';
		
		$("#get_more_btn").click(function(){
			var cid;
			var cids;
			var containid;
			
			
			if(currentbtnid == 'zh_btn')
			{
				cid=0;
				containid='z_h';
				cids='<?php CATEGORY_ID("新闻") ?>,<?php CATEGORY_ID("公告") ?>,<?php CATEGORY_ID("活动") ?>';
			}
			else if(currentbtnid == 'xw_btn')
			{
				cids=cid=<?php CATEGORY_ID('新闻') ?>;
				containid='x_w';
			}
			else if(currentbtnid == 'gg_btn')
			{
				cids=cid=<?php CATEGORY_ID('公告') ?>;
				containid='g_g';
			}
			else if(currentbtnid == 'hd_btn')
			{
				cids=cid=<?php CATEGORY_ID('活动') ?>;
				containid='h_d';
			}
			
			if(typeof pages[cid] == 'undefined' || pages[cid] == 0)
				pages[cid]=2;
			var url = '/getMoreNews/' + pages[cid] + '/' + cids + '/' + limit;
			$.get(url,function(result){
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('#'+containid);
                    //console.dir(data);
                    for(var i=0;i<data.length;i++){
                    	lists += '<li><strong>['+data[i]['news_category']+']</strong><a href="/show/'+data[i]['id']+'.html">'+data[i]['title']+'</a><span class="date">'+data[i]['updated']+'</span></li>';
                    }
                    newslist.append(lists);
                    pages[cid]++;
                }
            },'json');
		});
		
		$("#lanmu a").click(function(){
			currentbtnid=$(this).attr('id');
		});
		

	});
</script>

</body>
</html>