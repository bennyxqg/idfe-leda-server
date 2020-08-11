<?php 
require_once "include.php";
if($category_id==98){
$category_id='all';
}
//echo $page;

$datas =  $this->Tanke->newsInitData($page,$category_id);
$consulting = $datas['consulting'];
$page = $datas['page'];

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?> 
<link href="<?php echo $full_base_url ?>/wap/css/index.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/down.png" />
<link rel="prefetch" href="<?php echo $full_base_url ?>/wap/images/icon.png" />
</head>

<body>
<div id="container">
	
   <section class="part1_new" >	
		<header class="con">
			<h1 class="logo"><img src="<?php echo $full_base_url ?>/wap/images/icon.png" /><img src="<?php echo $full_base_url ?>/wap/images/icon_logo.png"></h1>
			<a class="nav" href="javascript:;"><img src="<?php echo $full_base_url ?>/wap/images/nav.png" /></a>
		</header>
		
		<div class="nav_hidden">
			<ul>
				<li><a href="//tanke.uu.cc">官网首页</a></li>
				<li><a href="//tanke.uu.cc/news/98.html">新闻公告</a></li>
				<li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378">官方论坛</a></li>
				<li><a href="//tanke.uu.cc/manage/upload/image/tanke.uu.cc/2016-05-11/20160511_102250_750415.jpg">关注领福利</a></li>
			</ul>
		</div>
   </section>
   
   <section class="part2_new">
   	    <div class="place">
   	    	<a href="//tanke.uu.cc" class="back">返回</a>
   	    	<span class="dq_title">新闻中心</span>
   	    </div>
	    <div class="new">
	    	<div class="lm">
		    	<p class="lanmu">
		    		<a id="zx_btn" href="//tanke.uu.cc/news/98.html" <?php if($category_id=='all'){ echo "class=\"on\"";}   ?> >最新</a>
		    		<a id="gg_btn" href="//tanke.uu.cc/news/321.html" <?php if($category_id==321){ echo "class=\"on\"";}   ?> >公告</a>
		    		<a id="xw_btn" href="//tanke.uu.cc/news/320.html" <?php if($category_id==320){ echo "class=\"on\"";}   ?> >新闻</a>
		    		<a id="zl_btn" href="//tanke.uu.cc/news/323.html" <?php if($category_id==323){ echo "class=\"on\"";}   ?> >资料</a>
		    	</p>
		    	<a href="#" class="more"><img src="<?php echo $full_base_url ?>/wap/images/more.png" /></a>
	    	</div>
	    	<div class="new_nr">
	    		<ul style="display: block;">
                
	    		
            	
	    		</ul>
	    		
	    	</div>
	    	
	    	<a style="display:none;" href="javascript:;" class="jz_more">加载更多</a>
	    	
	    </div>
	    
	    <footer>
	   	     <a href="<?php echo $down_url;?>" class="down_load"><img src="<?php echo $full_base_url ?>/wap/images/down.png" width="100%" /></a>
	   	     <div class="eqt">
	   	     	<p>
	   	     		<span>关注公众号</span>
	   	     		<span><?php echo $topData['other']['weixin_account'];?></span>
	   	     	</p>
	   	     	<p>
	   	     		<span>加入官方QQ群</span>
	   	     		<span><?php echo $topData['other']['qq_group'];?></span>
	   	     	</p>
	   	     	<p>
	   	     		<span>关注官方贴吧</span>
	   	     		<a href="<?php echo $topData['other']['baidu_tieba_url'];?>">一键前往</a>
	   	     	</p>
	   	     </div>
	   </footer>
	    
   </section>
   
   
  
</div>	

<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.8.0.min.js"></script>

<script>
$(function(){
	 
	$('.nav').on('touchstart',function(){
		$('.nav_hidden').toggle();
	})
    
	
	var pages=[];
	var limit=5;
	var currentbtnid='';
    $('.jz_more').on('click',function(){
			var cid;
			var cids;
			var containid;
			hq_on(2);
		});
         hq_on(1);
		 function  hq_on(v){
			var cid;
			var cids;
			var containid;
		     $('.lanmu a').each(function(e){
				var on_class = $(this).attr('class');
			    if(on_class == 'on'){
				  	currentbtnid=$(this).attr('id');
				}
				
			 })	
			 
			 if(currentbtnid == 'zx_btn')
			{
				cid='321,320,326,324,325,327';
				cids='321,320,326,324,325,327';
			}
			else if(currentbtnid == 'gg_btn')
			{   
			    cid='321'; 
				cids='321';
			}
			else if(currentbtnid == 'xw_btn')
			{   
			    cid='320'; 
				cids='320';
			}
			else if(currentbtnid == 'zl_btn')
			{  
			    cid='326'; 
				cids='326';
			}
			
			if(typeof pages[cid] == 'undefined' || pages[cid] == 0)
			pages[cid]=1;
			var url = '/getMoreNews/' + pages[cid] + '/' + cids + '/' + limit;
			$.get(url,function(result){
                if (result && result['status'] == 1) {
					$('.jz_more').show();
                    var data = result.data;
                    var lists = '';
					var newslist = $('.new_nr ul');
					//alert(data);
					if(data.length<5){
						$('.jz_more').hide();
					}
                    for(var i=0;i<data.length;i++){
						
                    	lists += '<li><a href="/show/'+data[i]['id']+'.html">'+data[i]['title']+'</a><span class="date">'+data[i]['updated']+'</span></li>';
					}
                   
					
                    newslist.append(lists);
                    pages[cid]++;
                }else{
					$('.jz_more').hide();
					return false;	
				}
            },'json');
			  
		 }
         
		 
		 
})
</script>

</body>
</html>
