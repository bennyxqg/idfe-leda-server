<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Tanke->getAudio(5,$page);
$topData=$this->Tanke->topData();
?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?> 
<link rel="stylesheet" href="<?php BASE_URL() ?>/new_index/css/style.css" />

</head>

<body>
    <div class="section_page">
    	<div class="top_nav">
        	<div class="wrap">
                <a class="home_logo" href="#link" target="_self"></a>
                <div class="pa nav">
                    <ul>
                        <li><a href="//tanke.uu.cc" target="_self">官网首页</a></li>
                        <li><a href="//tanke.uu.cc/news/98.html" target="_self">新闻公告</a></li>
                        <li><a href="//tanke.uu.cc/game_data/327.html" target="_self">游戏资料</a></li>
                        <li class="on"><a href="//tanke.uu.cc/vedio/1.html" target="_self">影音中心</a></li>
                        <li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378" target="_self">官方论坛</a></li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="top_banner">
        	<div class="wrap">
            	
            </div>
        </div>
    </div>
    <div class="page_main">
    	<div class="wrap">
        	<div class="pr page_nav">
            	<div class="item_nav">
                    <a class="on" href="javascript:;" target="_self">精彩视频</a>
                    <a href="//tanke.uu.cc/pic/1.html" target="_self">游戏截图</a>
                </div>
                <div class="pa site_nav">当前位置：<a href="//tanke.uu.cc" target="_self">首页</a> &gt; 影音中心</div>
            </div>
            <div class="img_list">
            	<ul>
            	<?php if ($data['list']):?>
            	
            	<?php foreach ($data['list'] as $k => $v):?>
            	<li>
                	<a class="video_btn_link" name="<?php echo $v['datas']['str2'];?>" href="javascript:;"><img src="<?php echo $v['datas']['str1'];?>"/><span></span></a>
                </li>
            	<?php endforeach;?>
            	
            	<?php endif;?>
                	
                </ul>
            </div>
            <div class="pages"><?php echo $data['page'];?></div>
        </div>
    </div>


<div class="pop_down">
	<a class="close" href="javascript:;" title="关闭"></a>
    <img src="<?php echo $topData['other']['game_download_qrcode'];?>" />
    <a class="down" href="<?php echo $topData['other']['android_download_url'];?>"></a>
    <a class="down2" href="<?php echo $topData['other']['ios_download_url'];?>" target="_self"></a>
</div>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php echo $full_base_url ?>/new_index/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	
	$('.pop_down .close').click(function(){
		$('.pop_down').hide()
	});
	
	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.pic_slide').hide();
		$('.zhezao').hide();
	})
	
	
	//预约
	$(".gift_btn").click(function(){
		$(".yuyue,.zhezao").show();
	});
	$(".close2").click(function(){
		$(".yuyue,.zhezao").hide();
	});
	
	$(".input_select").click(function(){ 
		var ul = $("#dropdown ul"); 
			if(ul.css("display")=="none"){ 
				ul.slideDown("fast"); 
			}else{ 
				ul.slideUp("fast"); 
			}
		}); 
		$("#dropdown ul li a").click(function(){ 
		var txt = $(this).text(); 
		$(".input_select").val(txt); 
		$("#dropdown ul").hide(); 
	}); 
	
	var phone,sysType,type;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue_btn').click(function(){
		phone = $('.yuyue_ipt').val();
		sysType = $('.input_select').val();
		
		if(sysType == "安卓"){
			type =2;
		}else{
			type =1;
		}
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:95},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("您已预约成功！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})
});	
</script>
</body>
</html>
