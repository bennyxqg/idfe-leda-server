<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css?v=1212166">

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

</head>

<body>
<div id="container">
    <div id="header">
        <span class="icon"><img src="<?php BASE_URL() ?>images/icon.png" width="90" height="90" ;></span>
        <a class="sy" href="/">首页</a>
        <a class="xw" href="//lr.uu.cc/news/338.html">新闻</a>
        <a class="hd" href="//lr.uu.cc/news/340.html">活动</a>
        <a class="lt" href="<?php BLOCK('forum_url') ?>">论坛</a>
    </div>

    <div class="list1 new_list1">
        <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
                <?php
		        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" /></div>','m-d',11,100,0,array());
		        ?>
        </div>
            <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
        </div>
    </div>
   
    <div class="news">
                <div class="tab">
                   <ul>
                       <li id="zh" <?php if($category_id == 0) echo 'class="dq"'; ?>><a href="<?php CATEGORY_URL('XXX') ?>">综合</a></li>
				       <li id="xw" <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="dq"'; ?>><a href="<?php CATEGORY_URL('新闻') ?>">新闻</a></li>
				       <li id="hd" <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="dq"'; ?>><a href="<?php CATEGORY_URL('活动') ?>">活动</a></li>
				                      
                   </ul>
                   
                </div>
                <div class="tab_content">
                   <ul style="display:block">
                      
                   </ul>
                   
                </div>
                
                
    </div> 
    <a href="#" style="display:none;" class="jz_more"><img src="<?php BASE_URL() ?>images/more.png" width="640" height="52" /></a>        
    
    
    <?php require_once("_footer.ctp"); ?>
     
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<script type="text/javascript">
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
		loop: true
    });
    var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
        spaceBetween: 30,
		loop: true
    });

</script>
<script type="text/javascript">

$(function(){
    $('.tab ul li').each(function(t){
		$(this).on('click',function(){
			 $(this).addClass('dq').siblings().removeClass('dq');
			 	
		})
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
		     $('.tab ul li').each(function(e){
				var on_class = $(this).attr('class');
			    if(on_class == 'dq'){
				  	currentbtnid=$(this).attr('id');
				}
				
			 })	
			 
			 if(currentbtnid == 'zh')
			{
				cid='0';
				cids='0';
			}
			else if(currentbtnid == 'xw')
			{   
			    cid='338'; 
				cids='338';
			}
			else if(currentbtnid == 'hd')
			{   
			    cid='340'; 
				cids='340';
			}
			
			
			if(typeof pages[cid] == 'undefined' || pages[cid] == 0)
			pages[cid]=1;
			var url = '/getMoreNews/' + pages[cid] + '/' + cids + '/' + limit;
			$.get(url,function(result){
                if (result && result['status'] == 1) {
					$('.jz_more').show();
                    var data = result.data;
                    var lists = '';
					var newslist = $('.tab_content ul');
					//alert(data);
					if(data.length<5){
						$('.jz_more').hide();
					}
                    for(var i=0;i<data.length;i++){
						
                    	lists += '<li><a href="/show/'+data[i]['id']+'.html">'+data[i]['title']+'</a><span class="="time">'+data[i]['updated']+'</span></li>';
					
					    
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