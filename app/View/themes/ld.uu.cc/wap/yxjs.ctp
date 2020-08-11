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
<body>
<div class="container" style="background:#202121;">
   <div class="top">
      <img alt="" src="<?php BLOCK('game_icon') ?>">
      <a class="d_onload" href="<?php BLOCK('android_download_url') ?>"></a>
   </div>
   <div class="relative">
      <a href="/home" class="back"><img src="<?php BASE_URL() ?>images/back.png" width="25" height="36" /></a>
      <span class="lm_yx"></span>
      <a href="#" class="lm_list"><img src="<?php BASE_URL() ?>images/list.png" width="34" height="36" /></a>
      <div class="tishi">
         <a class="xw" href="<?php CATEGORY_URL('综合') ?>"></a>
         <a class="gl" href="<?php CATEGORY_URL('公会','gonglue') ?>"></a>
         <a class="yx" href="<?php CATEGORY_URL('聚怪','yxjs') ?>"></a>
      </div>
    </div>
    <div class="yx_js">
       <div class="js_lab">
         <a href="#" class="l_on" id="jg_btn">聚怪</a>
         <a href="#" id="sc_btn">输出</a>
         <a href="#" id="pz_btn">破招</a>
       </div>
       <div class="yx_jj">
       <ul id="j_g" style="display:block;">
       <?php
        	SHOW_NEWS('<a target="_blank" href="@@URL@@"><img src="@@SMALL_IMAGE@@" width="100%" /><span>@@TITLE@@</span></a>','','聚怪',8,0,array('OrderBy'=>'`sort` asc'))
       ?>
       </ul>
       <ul id="s_c">
       <?php
        	SHOW_NEWS('<a target="_blank" href="@@URL@@"><img src="@@SMALL_IMAGE@@" width="100%" /><span>@@TITLE@@</span></a>','','输出',8,0,array('OrderBy'=>'`sort` asc'))
       ?>
       </ul>
       <ul id="p_z">
       <?php
        	SHOW_NEWS('<a target="_blank" href="@@URL@@"><img src="@@SMALL_IMAGE@@" width="100%" /><span>@@TITLE@@</span></a>','','破招',8,0,array('OrderBy'=>'`sort` asc'))
       ?>
       </ul>
       </div>
       <!--
       <p class="more"><a href="#" id="get_more_btn">查看更多</a><img src="<?php BASE_URL() ?>images/more.png" width="17" height="15" /></p>
       -->
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
		var limit=8;
		var currentbtnid='jg_btn';
		
		$("#get_more_btn").click(function(){
			var cid;
			var containid;
			
			if(currentbtnid == 'jg_btn')
			{
				cid=<?php CATEGORY_ID('聚怪') ?>;
				containid='j_g';
			}
			else if(currentbtnid == 'sc_btn')
			{
				cid=<?php CATEGORY_ID('输出') ?>;
				containid='s_c';
			}
			else if(currentbtnid == 'pz_btn')
			{
				cid=<?php CATEGORY_ID('破招') ?>;
				containid='p_z';
			}
			

			if(typeof pages[cid] == 'undefined' || pages[cid] == 0)
				pages[cid]=2;
			var url = '/getMoreNews/' + pages[cid] + '/' + cid + '/' + limit;
			$.get(url,function(result){
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('#'+containid);
                    //console.dir(data);
                    for(var i=0;i<data.length;i++){
                    	list += '<a href="/show/'+data[i]['id']+'.html"><img src="/uploads'+data[i]['small_url']+'" width="100%" /><span>'+data[i]['title']+'</span></a>';
                    	//lists += '<li><strong>['+data[i]['news_category']+']</strong><a href="/show/'+data[i]['id']+'.html">'+data[i]['title']+'</a><span class="date">'+data[i]['updated']+'</span></li>';
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