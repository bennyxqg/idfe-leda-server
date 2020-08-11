<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<title><?= $title; ?></title>
<meta content="<?= $keywords; ?>" name="keywords">
<meta name="description" content="<?= $description; ?>">
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/custom.css">
<link href="<?php echo $full_base_url ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/index.css">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9ce983a1ee9572198ea8bf47c150fc98";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<?php require_once '_require.php';?>

<body>
<div id="container">
  <div id="main">
   <EMBED style="left:50%;margin-left:-949px; POSITION: absolute; TOP: 0px; absolute: " align=right src="<?php echo $full_base_url ?>/images/dh.swf" width='1900' height='690' type=application/x-shockwave-flash wmode="transparent" quality="high" ;;></EMBED>
   <div id="content">
       <div class="part1">
           <div class="nav">
             <?php require_once '_dh.ctp';?>
           </div>
           <a href="javascript:;" class="sp_button"></a>
           <div class="down_load">
              <div class="d_left">
                 <p>扫一扫领礼包</p>
                 <?php if($top_ma):?>
                 	<img src="/uploads/<?php echo $top_ma[0]['big_url'];?>" width="160" height="160" />
                 <?php endif;?>
              </div>
              <div class="d_right">
                <ul>
                  <li class="android"><a href="javascript:;"></a></li>
                  <li class="ios"><a href="javascript:;"></a></li>
                </ul>
              </div>
           </div>
       </div>
       <div class="part2">
         <div class="p2_1">
           <p class="lanmu">
              <span class="on_bj one">综合</span>
              <span>公告</span>
              <span>新闻</span>
              <span>活动</span>
              <span>攻略</span>
              <a href="/news/<?=$total[0]['news_categories_id']?>" target="_blank" class="more"><img src="<?php echo $full_base_url ?>/images/more.gif" width="18" height="18" /></a>
           </p>
           <div class="message">
             <ul id="z_h" class="zx_" style="display:block">
             <?php if($total):?> 
             	<?php $i=0;foreach ($total as $k=>$v):?>
             	<?php if($i>4) break;?>
             		<li class="border border_top"><strong><?=$v['categoryname']?></strong><a href="/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
             	<?php $i++;endforeach;?>
             <?php endif;?>
             </ul>
             <ul id="g_g" class="zx_">
             	<?php if($topData['gong_gao']):?> 
	             	<?php foreach ($topData['gong_gao'] as $k=>$v):?>
	             		<li class="border border_top"><strong>公告</strong><a href="/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php endforeach;?>
             	<?php endif;?>
             </ul>
             <ul id="x_w" class="zx_">
             
             <?php if($topData['news']):?> 
	             	<?php foreach ($topData['news'] as $k=>$v):?>
	             		<li class="border border_top"><strong>新闻</strong><a href="/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php endforeach;?>
             	<?php endif;?>
             </ul>
             <ul id="h_d">
				<?php if($topData['huo_dong']):?> 
	             	<?php foreach ($topData['huo_dong'] as $k=>$v):?>
	             		<li class="border border_top"><strong>新闻</strong><a href="/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php endforeach;?>
             	<?php endif;?>             
             </ul>
             <ul id="g_l" class="zx_">
             
             <?php if($topData['gong_lv']):?> 
	             	<?php foreach ($topData['gong_lv'] as $k=>$v):?>
	             		<li class="border border_top"><strong>攻略</strong><a href="/show/<?php echo $v['id'];?>.html" target="_blank"><?php echo $v['title'];?></a><span><?php echo isset($v['updated'])?date('m/d',$v['updated']):'';?></span></li>
	             	<?php endforeach;?>
             	<?php endif;?>
             </ul>
           </div>
         </div>
         <div class="p2_2">
            <div class="lunbo">
               <ul id="list">
               <?php if($topData['sylb']):?>  
               
               <?php $i=0;foreach ($topData['sylb'] as $k=>$v):?>
               		<?php if($i==0):?> 
               			<li style="display:block;opacity:1;"><a class="android" href="javascript:;"><img width="510" height="260" src="/uploads/<?php echo $v['big_url'];?>" /></a></li>
               		<?php else:?>
               			<li><a href="<?php echo $v['big_link'];?>" target="_blank"><img width="510" height="260" src="/uploads/<?php echo $v['big_url'];?>"/></a></li>
               		<?php endif;?>
               <?php $i++;endforeach;?>
               
               <?php endif;?>
               </ul>
               <ul id="bar">
               <?php if($topData['sylb']):?>  
               
               <?php $i=0;foreach ($topData['sylb'] as $k=>$v):?>
               		<?php if($i==0):?> 
               			<span style="background:#00b4ff;"></span>
               		<?php else:?>
               			<span></span>
               		<?php endif;?>
               <?php $i++;endforeach;?>
               
               <?php endif;?>
               </ul>
             </div>
         </div>
         <div class="p2_3">
             <a class="con_bj a_wb" target="_blank" href="//weibo.com/u/5547344215?topnav=1&wvr=6&topsug=1"><span class="wb"></span><i class="w_b">官方微博</i></a>
             <a class="con_bj a_qq" href="javascript:void(0)"><span class="qq"></span><i class="q_q">玩家QQ群</i></a>
             <a class="con_bj a_bd" target="_blank" href="//tieba.baidu.com/f?ie=utf-8&fr=bks0000&kw=乱斗之王"><span class="bd"></span><i class="b_d">百度贴吧</i></a>
             <a class="con_bj last a_lt" target="_blank" href="//ldzw.vxinyou.com/bbs/forum.php"><span class="lt"></span><i class="l_t">官方论坛</i></a>
         </div>
         <div class="p2_4">
            <span><?php if($footer_ma):?>
            	<img src="/uploads/<?php echo $footer_ma[0]['big_url'];?>" width="107" height="107" />
                 <?php endif;?>
             </span>
         </div>
      </div>
   </div>
  </div>
  
</div>
<?php require_once '_footer.ctp';?>
<div class="yu_yue">
  <a class="close2" href="javascript:;" ></a>
  <p class="choice"><span class="ios on"></span><span class="az"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/main.js"></script>
<script type="text/javascript">
$(function(){

	$('.zx_ > li').each(function(i) {
        var str = $(this).find('a').text();
		if(str.length>25){
	     $(this).find('a').text(str.substring(0,25)+"...") 
	    }
    });
	
	
	//预约事件
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	$('.android').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.ios').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.close2').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
	})
	
	
	var type;
	var myreg = /^1[34578]\d{9}$/;
		$('#shuru').focus(function(){
		if($(this).attr('value') == '请输入手机号'){}
		  $(this).attr('value','');
		})
		
	$('#shuru').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','请输入手机号');
		}
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
<!--[if IE]>
  <script src="//api.html5media.info/1.1.4/html5media.min.js"  type="text/javascript"></script>
<![endif]-->
</body>
</html>
