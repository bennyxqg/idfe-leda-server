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
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/main.css">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
</head>
<?php require_once '_require.php';
?>
<body>
<div id="n_content">
  <div id="n_con">
     <div class="n_main">
       <div class="n_left">
          <div class="left_1"><a target="_blank" href="//ld.uu.cc/"><img src="<?php echo $full_base_url ?>/images/logo.jpg" width="220" height="165" /></a></div>
          <div class="left_2">
               <?php require_once '_dh.ctp';?>
          </div>
          <div class="left_3">
             <p>扫一扫领礼包</p>
             <?php if($top_ma):?>
                 	<img src="/uploads/<?php echo $top_ma[0]['big_url'];?>" width="160" height="160" />
                 <?php endif;?>
             <a href="#" class="n_android"></a>
             <a href="#" class="n_ios"></a>
          </div>
          <div class="left_4">
             <a class="con_bj a_wb" target="_blank" href="//weibo.com/u/5547344215?topnav=1&wvr=6&topsug=1"><span class="wb"></span><i class="w_b">官方微博</i></a>
             <a class="con_bj last a_qq" target="_blank" href="javascript:void(0)"><span class="qq"></span><i class="q_q">玩家QQ群</i><em></em></a>
             <a class="con_bj a_bd" target="_blank" href="//tieba.baidu.com/f?ie=utf-8&fr=bks0000&kw=乱斗之王"><span class="bd"></span><i class="b_d">百度贴吧</i></a>
             <a class="con_bj last a_lt" target="_blank" href="//ldzw.vxinyou.com/bbs/forum.php"><span class="lt"></span><i class="l_t">官方论坛</i></a>
          </div>
          <div class="left_5"><?php if($downleft_qrcode):?>
            	<img src="/uploads/<?php echo $downleft_qrcode[0]['big_url'];?>" width="85" height="85" />
                 <?php endif;?></div>
          
       </div>
       <div class="n_right">
	   	<a href="javascript:;" class="sp_button"></a>
          <div class="header">
             <h1 class="h_video"></h1>
             <span>您当前的位置：首页&nbsp; > &nbsp;新闻资讯</span>
          </div>
          <div class="article">
             <div class="video">
                 <h1>《乱斗之王》世界观视频</h1>
                 
              <!--   <video id="ship" src="<?php echo $topData['yyzq'][0]['big_link'];?>" width="660" style="background:#2e3035;" height="370" controls preload></video>-->
                 
                
				<!--<?php if($topData['yyzq'][0]):?>
					<embed id="ship" src="//player.youku.com/player.php/sid/XOTY1Nzg0NTQw/v.swf" 
					width="660" height="400" 
					type="application/x-shockwave-flash" allowScriptAccess="sameDomain">
					</embed>  
				<?php endif;?>-->
				<video  src="//dl.ldzw.gxpan.cn/site/video/world.mp4" width="660" style="background:#000;" height="400" autoplay="autoplay" controls="controls"></video>
             </div>
             <div class="video_list">
             
             	<?php if($topData['yyzq']):?> 
             		<?php foreach ($topData['yyzq'] as $k=>$v):?>
             			  <a href="javascript:void(0);"><img src="/uploads/<?php echo $v['big_url'];?>" alt="<?php echo $v['big_link'];?>" /><h3><?php echo $v['title']?></h3><em></em><span></span></a>
             		<?php endforeach;?>
             	<?php endif;?>
             </div>
             
          </div>
       </div>
     </div>
  </div>

</div>
<?php require_once '_footer.ctp';?>
<div class="yu_yue">
  <a class="close2" href="#" ></a>
  <p class="choice"><span class="ios on"></span><span class="az"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/main.js"></script>
<script type="text/javascript">
$(function(){
	
	$('.video_list a').mouseenter(function(){
		$(this).find('em').css({'background':'none'}).end().find('h3').css('background','url(<?php echo $full_base_url ?>/images/sp_hbj.png)');
	})
	$('.video_list a').mouseleave(function(){
		$(this).find('em').css({'background':'#000'}).end().find('h3').css('background','#43454a');
		})
		  
	$('.video_list a').click(function(){
		$(this).find('em').css({'background':'none'}).end().find('h3').css('background','url(<?php echo $full_base_url ?>/images/sp_hbj.png)').end().siblings().find('em').css({'background':'#000'}).end().find('h3').css('background','#43454a');
		$(this).unbind('mouseenter').unbind('mouseleave').siblings().bind('mouseenter',function(){$(this).find('em').css({'background':'none'}).end().find('h3').css('background','url(<?php echo $full_base_url ?>/images/sp_hbj.png)');}).bind('mouseleave',function(){$(this).find('em').css({'background':'#000'}).end().find('h3').css('background','#43454a');});
		
		var txt = $(this).find('h3').text();
		var video_src = $(this).find('img').attr('alt');
		$('.video h1').text(txt);
		$('#ship').attr('src',video_src);
		
		var aa = $('#ship object param').last().attr('value');
		
		var playlist = eval(aa).playlist; 
		//alert(palylist)
		alert(palylist[0].url)

		})		


})
</script>
<script>
$(function(){
	//预约事件
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	$('.n_android').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.n_ios').click(function(){
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
