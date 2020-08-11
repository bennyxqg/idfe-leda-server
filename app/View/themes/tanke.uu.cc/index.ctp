<?php 
require_once "include.php";
$data6=$this->Tanke->getAudio(6,$page);
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
<meta content="坦克大战" name="keywords">
<meta name="description" content="坦克大战">
<link rel="stylesheet" href="<?php BASE_URL() ?>/new_index/css/style.css" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/new_index/css/swiper.min.css" />
<link rel="shortcut icon" href="//tanke.uu.cc/tanke.uu.cc/favicon.ico">
</head>

<body>
<div id="main">
	<div class="section section_1">
    	<div class="top_nav">
        	<div class="wrap">
                <a class="home_logo" href="#link" target="_self"></a>
                <div class="pa nav">
                    <ul>
                        <li class="on"><a href="//tanke.uu.cc" target="_self">官网首页</a></li>
                        <li><a href="//tanke.uu.cc/news/98.html" target="_self">新闻公告</a></li>
                        <li><a href="//tanke.uu.cc/game_data/327.html" target="_self">游戏资料</a></li>
                        <li><a href="//tanke.uu.cc/vedio/1.html" target="_self">影音中心</a></li>
                        <li><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378" target="_self">官方论坛</a></li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="top_banner">
        	<div class="wrap">
            	<div class="pa main_btns">
                	<img src="<?php echo $topData['other']['game_download_qrcode'];?>" />
                    <div class="down_btns">
                    	<a href="<?php echo $topData['other']['ios_download_url'];?>" target="_blank"></a>
                        <a href="<?php echo $topData['other']['android_download_url'];?>" target="_blank"></a>
                    </div>
                    <a class="video_btn video_btn_link" href="javascript:;" name="<?php echo $topData['other']['index_video_url'];?>"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_2">
    	<div class="wrap">
        	<div class="fl swiper-container">
       			 <div class="swiper-wrapper">
       			 <?php 
                $imgs = $topData['imgs'];
		            if(!empty($imgs)){
		            	foreach ($imgs as $key=>$v){
		            ?>
		            <div class="swiper-slide"><a href=""><img src="<?=$v['str1']?>" /></a></div>
		            <?php 
		            	}
		            
		            }
		            
		            ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
			<div class="fr news_box tab">
                <div class="pr news_tab">
                    <ul class="tab_hd">
                        <li class="on">综合</li>
                        <li>新闻</li>
                        <li>公告</li>
                    </ul>
                    <a class="pa news_more" href="//tanke.uu.cc/news/98.html"></a>
                </div>
                <div class="news_con">
                    <div class="tab_con">
                        <ul>
                        <?php 
                	$zhonghe = $topData['total'];
                	if(!empty($zhonghe)){
                		foreach ($zhonghe as $key=>$v){
                    ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <ul>
                            <?php 
                	$zhonghe = $topData['news'];
                	if(!empty($zhonghe)){
                		foreach ($zhonghe as $key=>$v){
                ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
                        </ul>
                    </div>
                    
                    <div class="tab_con">
                        <ul>
                           <?php 
                	$zhonghe = $topData['gong_gao'];
                	if(!empty($zhonghe)){
                		foreach ($zhonghe as $key=>$v){
                ?>
               <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo get_category_name($v['news_categories_id']); ?>：<?=$v['title']?></a><span><?=date("Y-m-d",$v['updated'])?></span></li>
                <?php 		
                			
                		}
                	}
                ?>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="section_3">
    	<div class="wrap">
        	<div class="content content1">
            	<div class="con_left fl">
            		<h2 class="main_tit tit_about"></h2>
                    <div class="con_about tab">
                        <div class="about_con">
                            <div class="tab_con">
                            	<img src="//tanke.uu.cc/tanke.uu.cc/new_index/images/pic1_1.jpg" />
                            </div>
                            <div class="tab_con">
                            	<img src="//tanke.uu.cc/tanke.uu.cc/new_index/images/pic1_2.jpg" />
                            </div>
                            <div class="tab_con">
                            	<img src="//tanke.uu.cc/tanke.uu.cc/new_index/images/pic1_3.jpg" />
                            </div>
                            <div class="tab_con">
                            	<img src="<?php echo $full_base_url ?>/new_index/images/pic1_4.jpg" />
                            </div>
                        </div>
                        <div class="pr about_tab">
                            <ul class="tab_hd">
                                <li class="on"><a>火炮</a></li>
                                <li><a>突击</a></li>
                                <li><a>重坦</a></li>
                                <li class="noBd"><a>主战</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="con_right fr">
                	<h2 class="main_tit tit_data"></h2>
                    <div class="con_data">
                    	<h2><span>坦克手册</span></h2>
                        <ul>
                        	<li><a href="//tanke.uu.cc/show/3100.html" target="_blank">主战系</a><em>·</em></li>
                        	<li><a href="//tanke.uu.cc/show/3101.html" target="_blank">重型系</a><em>·</em></li>
                        	<li><a href="//tanke.uu.cc/show/3102.html" target="_blank">突击系</a><em>·</em></li>
                        	<li><a href="//tanke.uu.cc/show/3103.html" target="_blank">远程系</a></li>
                        </ul>
                        <h2><span>系统介绍</span></h2>
                        <ul>
                        	<li><a href="//tanke.uu.cc/show/3104.html" target="_blank">战役合作（PVE）</a><em>·</em></li>
                            <li><a href="//tanke.uu.cc/show/3105.html" target="_blank">多人竞技（PVP）</a><em>·</em></li>
                            <li><a href="//tanke.uu.cc/show/3106.html" target="_blank">战车研发工厂</a><em>·</em></li>
                            <li><a href="//tanke.uu.cc/show/3107.html" target="_blank">商店</a><em>·</em></li>
                            
                            <li><a href="//tanke.uu.cc/show/3108.html" target="_blank">科技中心</a><em>·</em></li>
                            <li><a href="//tanke.uu.cc/show/3109.html" target="_blank">军团中心</a><em>·</em></li>
                            
                            <li><a href="//tanke.uu.cc/show/3110.html" target="_blank">任务系统</a></li>
                        </ul>
                        <h2><span>游戏攻略</span></h2>
                        <ul>
                        	<li><a href="//tanke.uu.cc/show/3111.html" target="_blank">FAQ</a><em>·</em></li>
                        	<li><a href="//bbs.uu.cc/forum-379-1.html" target="_blank">玩家攻略</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
            	<h2 class="main_tit tit_tese"></h2>
            	<div class="swiper-container2">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href=""><img src="<?php echo $full_base_url ?>/new_index/images/pic2_1.jpg" /></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?php echo $full_base_url ?>/new_index/images/pic2_2.jpg" /></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?php echo $full_base_url ?>/new_index/images/pic2_3.jpg" /></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?php echo $full_base_url ?>/new_index/images/pic2_4.jpg" /></a></div>
                    </div>
                    <div class="swiper-pagination2"></div>
                </div>
            </div>
            <div class="content">
            	<div class="con_left fl">
            		<h2 class="main_tit tit_av"></h2>
                	<div class="con_av tab">
                    	<div class="pr av_tab">
                            <ul class="tab_hd">
                                <li class="on">精彩视频</li>
                                <li>游戏截图</li>
                            </ul>
                        </div>
                        <div class="tab_con">
                            <ul>
                            <?php if (!empty($data5)):?>
					        <?php foreach ($data5['list'] as $k => $v):?>
					        <?php if ($k > 3) {
					        	break;
					        }?>
					        	<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['datas']['str2'];?>"><img src="<?php echo $v['datas']['str1'];?>" /><span></span></a></li>
					        <?php endforeach;?>
					        <?php endif;?>
                                <li><a class="video_btn_link" href="javascript:;" name="//dl.uu.cc/download/1920x1080.mp4"><img src="<?php echo $full_base_url ?>/new_index/images/pic3.jpg" /><span></span></a></li>

                            </ul>
                        </div>
                        <div class="tab_con">
                            <ul class="jietu_view">
                            <?php if (!empty($topData['imgs2'])):?>
					        <?php foreach ($topData['imgs2'] as $k => $v):?>
					        <?php if ($k > 3) {
					        	break;
					        }?>
					        	<li><a href="javascript:;"><img src="<?php echo $v['str1'];?>" /></a></li>
					        <?php endforeach;?>
					        <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="con_right fr">
                	<h2 class="main_tit tit_contact"></h2>
                    <div class="con_contact">
                    	<div class="fl weixin_pic">
                        	<span>关注官方微信领好礼</span>
                            <img src="<?php echo $topData['other']['weixin_qrcode'];?>" />
                        </div>
                        <ul class="fl contact_list">
                        	<li class="sina"><a href="<?php echo $topData['other']['weibo_url']; ?>" target="_blank">新浪微博</a></li>
                            <li class="bbs"><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378" target="_blank">官方论坛</a></li>
                            <li class="baidu"><a href="<?php echo $topData['other']['baidu_tieba_url']; ?>" target="_blank">百度贴吧</a></li>
                        </ul>
                        <div class="fl qqun">玩家QQ群<br><?php echo $topData['other']['qq_group']; ?>
                        <br><?php echo $topData['other']['qq_qun_ios']; ?>
                        <br><?php echo $topData['other']['qq_qun_android']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <?php require_once 'footer.ctp';?>

<a class="gift_btn" href="javascript:;"></a>

<div class="yuyue">
    <a class="close2" href="javascript:;"></a>
    <p>输入手机号码领取礼包</p>
    <div id="dropdown">
        <input class="input_select" readonly type="text" value="IOS" />
        <ul style="display: none;">
            <li><a rel="1">IOS</a></li>
            <li><a rel="2">安卓</a></li>
        </ul>
    </div>
    <input class="yuyue_ipt" placeholder="请输入手机号" type="tel">
    <a class="yuyue_btn" href="javascript:;"></a>
</div>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<!--精彩截图-->
<div class="pic_slide">
	<a class="close" href="javascript:;" title="关闭"></a>
    <span class="pic_slide_load"><img src="<?php echo $full_base_url ?>/new_index/images/loading.gif" width="32" height="32"></span>
    <div class="slide_left"></div>
    <div class="slide_right"></div>
	<ul class="slide_content">
    </ul>
    <div class="bottom">
    	共 <span id="imgdata">x</span> 张 / 第 <span id="xz">x</span> 张
    </div>
</div>

<script type="text/javascript" src="<?php echo $full_base_url ?>/new_index/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/new_index/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/new_index/js/pic-slide.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
		loop: true
    });
	
	var swiper = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination2',
        paginationClickable: true,
		loop: true
    });
	
	
	/*tab 选项卡*/
	$('.tab').each(function(){
		var _this = $(this);
		_this.find('.tab_hd').eq(0).find('li').each(function(i){
			if(i==0){
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			}
			$(this).hover(function(){
				$(this).siblings('li').removeClass('on');
				$(this).addClass('on');
				_this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
			})
		})
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
					data:{phone:phone,type:type,collect_name:98},
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
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
