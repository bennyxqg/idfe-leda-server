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
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css" />
</head>

<body>
<div id="container">

      <header class="top">
           <div class="left"><img src="<?php BLOCK('game_icon') ?>" width="103" height="103" /><img src="<?php BASE_URL() ?>images/icon_logo.png" width="193" height="56" /></div>
           <div class="right right_nav">
               <ul>
               		<a href="<?php CATEGORY_URL('新闻') ?>"><li>新闻</li></a>
                   <a href="<?php CATEGORY_URL('视频','video') ?>"><li>视频</li></a>
                   
                   <a href="<?php CATEGORY_URL('图片','picture') ?>"><li>图片</li></a>
                   <a href="/home"><li>首页</li></a>
               </ul>
           </div>
      </header>
      
      <section class="news">
           <div class="nav">
               <a href="javascript:;" id="zh_btn"></a>
               <a href="javascript:;" id="xw_btn"></a>
               <a href="javascript:;" id="gg_btn"></a>
               <a href="javascript:;" id="hd_btn"></a>
           </div> 
           <div class="xw_gg" id="news_c">
                <ul id="z_h" style="display:block;">
                <?php
                SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a  target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),4,0,array('OrderBy'=>'`sort` asc,updated desc'));
                ?>
                </ul>
                <ul id="x_w">
                <?php
        			SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',4,0,array('OrderBy'=>'`sort` asc,updated desc'))
        		?>
                </ul>
                <ul id="g_g">
                <?php
        			SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公告',4,0,array('OrderBy'=>'`sort` asc,updated desc'))
        		?>
                </ul>
                <ul id="h_d">
                <?php
        			SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','活动',4,0,array('OrderBy'=>'`sort` asc,updated desc'))
        		?>
                </ul>
              </div>
              <p class="c_more" id="get_more_btn">查看更多</p>
              
      </section>
      
      
      <footer class="bottom">
           <p class="qq">
                 <span class="wxh">关注微信领大礼：shiya</span>
                 <strong>官方QQ交流群</strong>
                 <a><span class="left">官方1群：<em><?php BLOCK('qq_group1') ?></em></span><span class="right">官方2群：<em><?php BLOCK('qq_group2') ?></em></span></a>
           </p>
           <p class="copy">
              Copyright©2009-2016 <br />
              深圳市创梦天地科技有限公司 版权所有  粤ICP备11018438号<br />
              Copyright©2004-2013 Freejoy Technology Co. Ltd.<br />
              All rights reserved. 乐逍遥 版权所有<br />
              ©Masami Kurumada/SHUEISHA<br />
              ©SEGA
           </p>
           <p class="tb_icon"><img src="<?php BASE_URL() ?>images/p1.png" width="213" height="85" /><img src="<?php BASE_URL() ?>images/p3.png" width="87" height="94" /><img src="<?php BASE_URL() ?>images/p2.png" width="157" height="52" /></p>
      </footer>
  
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

<script type="text/javascript">
var currentbtnid='zh_btn';
$(function(){
	
	$('.right_nav ul li').first().toggle(function(){
		$('.right_nav').css('height','225px');
	},function(){
		$('.right_nav').css('height','55px');
	})
	
    $(".nav a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on').siblings().removeClass('on');  
		currentbtnid=$(this).attr('id');
		$('#news_c ul').eq(i).show().siblings().hide();
		})	
	})
	

})
</script>

<script type="text/javascript">
	$(function(){
		var pages=[];
		var limit=4;
		//var currentbtnid='zh_btn';
		
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
		

	});
</script>

</body>