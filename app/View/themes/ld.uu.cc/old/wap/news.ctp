<?php require_once '_include.ctp';?>
<link rel="stylesheet" href="<?php echo $full_base_url ?>/mobile/css/swiper.min.css"/>
<script src="<?php echo $full_base_url ?>/mobile/js/jquery-1.8.0.min.js"></script>
</head>

<body style="background:#e4e4e4;">
<p style="display:none"><img src="//act.uu.cc/subwayData/images/icon2.jpg" alt="乱斗之王"></p>
<section id="news">
  <div class="list">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php $len=count($topData['sylb']);for($i=0;$i<$len;$i++) { ?>  
               		<div class="swiper-slide"><a class="down_load2" href="#"><img width="620" height="322" src="/uploads/<?php echo $topData['sylb'][$i]['big_url']; ?>" /></a></div>
            <?php } ?>
            <!--
            <div class="swiper-slide"><img src="<?php echo $full_base_url ?>/mobile/images/p2_list1.jpg" /></div>
            <div class="swiper-slide"><img src="<?php echo $full_base_url ?>/mobile/images/p2_list1.jpg" /></div>
            <div class="swiper-slide"><img src="<?php echo $full_base_url ?>/mobile/images/p2_list1.jpg" /></div>
            <div class="swiper-slide"><img src="<?php echo $full_base_url ?>/mobile/images/p2_list1.jpg" /></div>
            -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="x_w_news">
              <p class="lanmu">
                  <span class="on_bj one" href="#" type="1">综合</span>
                  <span class="two" href="#" type="2">公告</span>
                  <span class="three" href="#" type="3">新闻</span>
                  <span class="four" href="#" type="4">活动</span>
                  <span class="five" href="#" type="5">攻略</span>
              </p>
               <div class="message">
                 <ul id="zh_ul" style="display:block">
                 <?php if($total):?> 
	             	<?php $i=0;foreach ($total as $k=>$v):?>
	             	<?php if(preg_match('@(^\s*https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?\s*$)@',$v['content']) == 1) $link=$v['content']; else $link="/show/".$v['id'].".html"; ?>
	             	<?php if($i>4) break;?>
	             		<li><strong>【<?=$v['categoryname']?>】</strong><a href="<?php echo $link;?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php $i++;endforeach;?>
             	<?php endif;?>
                 </ul>
                 <ul id="gg_ul">
                 <?php if($topData['gong_gao']):?> 
	             	<?php $i=0;foreach ($topData['gong_gao'] as $k=>$v):?>
	             	<?php if(preg_match('@(^\s*https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?\s*$)@',$v['content']) == 1) $link=$v['content']; else $link="/show/".$v['id'].".html"; ?>
	             	<?php if($i>4) break;?>
	             		<li><strong>【公告】</strong><a href="<?php echo $link;?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php $i++;endforeach;?>
             	<?php endif;?>
                
                 </ul>
                 <ul id="xw_ul">
                	<?php if($topData['news']):?> 
                    	<?php $i=0;foreach ($topData['news'] as $k=>$v):?>
                    	<?php if(preg_match('@(^\s*https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?\s*$)@',$v['content']) == 1) $link=$v['content']; else $link="/show/".$v['id'].".html"; ?>
                    	<?php if($i>4) break;?>
	             		<li><strong>【新闻】</strong><a href="<?php echo $link;?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php $i++;endforeach;?>
             	<?php endif;?>
                
                 </ul>
                 <ul id="hd_ul">
                	<?php if($topData['huo_dong']):?> 
                    	<?php $i=0;foreach ($topData['huo_dong'] as $k=>$v):?>
                    	<?php if(preg_match('@(^\s*https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?\s*$)@',$v['content']) == 1) $link=$v['content']; else $link="/show/".$v['id'].".html"; ?>
                    	<?php if($i>4) break;?>
	             		<li><strong>【活动】</strong><a href="<?php echo $link;?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php $i++;endforeach;?>
             	<?php endif;?>
                 </ul>
                 <ul id="gl_ul">
                 <?php if($topData['gong_lv']):?> 
	             	<?php $i=0;foreach ($topData['gong_lv'] as $k=>$v):?>
	             	<?php if(preg_match('@(^\s*https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?\s*$)@',$v['content']) == 1) $link=$v['content']; else $link="/show/".$v['id'].".html"; ?>
	             	<?php if($i>4) break;?>
	             		<li><strong>【攻略】</strong><a href="<?php echo $link;?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php $i++;endforeach;?>
             	<?php endif;?>
                 </ul>
              </div>
              <a href="#" class="more_" id="morenews"></a>
  </div>
  <p class="tb"><img src="<?php echo $full_base_url ?>/mobile/images/ld_logo.png" width="161" height="65" /><img src="<?php echo $full_base_url ?>/mobile/images/xy_logo.png" width="168" height="40" /></p>
  <nav id="nav" style="background:#000 url(<?php echo $full_base_url ?>/mobile/images/xw.png) no-repeat center center">
     <?php require_once '_dh.ctp';?>
  </nav>
</section>
<div class="zhezao"></div>
<div class="yu_yue">
  <a class="close" href="#" ></a>
  <p class="choice"><span class="ios on" data-type="1"></span><span class="az" data-type="2"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>

<script src="<?php echo $full_base_url ?>/mobile/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
</script>
<script type="text/javascript">
$(function(){
	var type = 1;
	$('.lanmu span').each(function(i) {
        $(this).hover(function(){
			$(this).addClass('on_bj').siblings().removeClass('on_bj');
			$('.message > ul').eq(i).show().siblings().hide();
			
			if($('.one').hasClass('on_bj')){
				type = 1;
				
				}
			if($('.two').hasClass('on_bj')){
				type = 2;
				
				}
			if($('.three').hasClass('on_bj')){
				type = 3;
				
				}
			if($('.four').hasClass('on_bj')){
				type = 4;
				
				}
			if($('.five').hasClass('on_bj')){
				type = 5;
				
				}
				
				
			})
    });
	
	var pages=[1,1,1,1,1,1];
	var container_ids=['','zh_ul','gg_ul','xw_ul','hd_ul','gl_ul'];
	var cata_labels=['','【综合】','【公告】','【新闻】','【活动】','【攻略】'];
	$("#morenews").click(function(){
		console.log('click type='+type);
		var limit=5;
		var cid=0;
		if(type == 2)
			cid=<?php echo $cid_map['gong_gao']; ?>;
		else if(type == 3)
			cid=<?php echo $cid_map['news']; ?>;
		else if(type == 4)
			cid=<?php echo $cid_map['huo_dong']; ?>;
		else if(type == 5)
			cid=<?php echo $cid_map['gong_lv']; ?>;
		else
			cid=0;
			
			
			
		var nextPage=pages[type]+1;
		var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
		$.get(url,function(result){
			if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('#'+container_ids[type]);
                    //console.dir(data);
                    for(var i=0;i<data.length;i++){
                    
                    	lists += '<li><strong>'+cata_labels[type]+'</strong><a href="/show/'+data[i]['id']+'.html" target="_blank">'+data[i]['title']+'</a><span>'+data[i]['updated']+'</span></li>';
                    }
                    newslist.append(lists);
                    pages[type] = parseInt(pages[type]) + 1;
                }
            },'json');
		
		return false;
		
	});
})
</script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/mobile/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	$('.down_load2').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
		
	})
	$('.close').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
	})
	
	
	var type;
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		$(this).attr('value','');
		$('#nav').css('position','ralative');
		})
	$('#shuru').blur(function(){
		$('#nav').css('position','fixed ');
		})
    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		if(phone == '请输入手机号' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				//var type = $('input:radio[name="banben"]:checked').val();
				if($('.az').is('.on')){
					type = 2;
					}else{
					type = 1;
				}
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:68},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							 alert("您已预约成功，我们会在首测前1天以短信形式向您发送预约礼包");
						}else{
						   alert("预约失败！");
						}
					}
				});

			}	
		}
	    })
	
	
	
	
	
	
})
</script>


</body>
</html>
  