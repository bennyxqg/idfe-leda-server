<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/wap/";

$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path; ?>css/swiper.min.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $base_path; ?>css/style.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/lightbox.css" />
</head>

<body>
	<div id="content">
        <div class="top">
            <div class="logo">
                <img src="<?php echo $base_path; ?>images/logo.jpg" />
                <h2>凡人修仙传</h2>
                <p>3D飞仙空战手游</p>
            </div>
            <a class="down downlink" href="javascript:;"></a>
            <a class="nav" href="javascript:;"></a>
        </div>
        <div class="pr main1">
            <a class="video-btn video_btn_link" href="javascript:;" name="<?php echo $config_data['other']['index_video_url']; ?>"></a>
            <!--<div class="date">1月5日 筑基首测</div>-->
            <div class="down-btns">
            	<a class="downlink" href="javascript:;"></a><a class="yuyue-btn" href="javascript:;"></a>
            </div>
        </div>
        <div class="main2">
            <div class="wrap">
            	<div class="item-tit">新闻中心</div>
                <div class="swiper-news-banner">
                    <div class="swiper-wrapper">
                    
                    	<?php if (!empty($topData['data6'])):?>
						<?php foreach ($topData['data6'] as $k => $v): ?>
						<div class="swiper-slide"><a href="javascript:;"><img src="<?php echo $v['str1']; ?>" /></a></div>
						<?php endforeach;?>
		                <?php endif;?>
                    
                    </div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
                
                <div class="news-tabs">
                	<a class="active" href="javascript:;">最新</a>
                    <a href="javascript:;">新闻</a>
                    <a href="javascript:;">公告</a>
                    <a href="javascript:;">活动</a>
                    <a href="javascript:;">攻略</a>
                </div>
                <div id="news-tabs-container" class="swiper-container">
                	<div class="swiper-wrapper">
                    	<div class="swiper-slide">
                        	<ul>
                        	
                        	<?php if (!empty($topData['total'])):?>
							<?php foreach ($topData['total'] as $k => $v): ?>
							<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
							<?php endforeach;?>
		                	<?php endif;?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                        	<ul>
                            	<?php if (!empty($topData['news'])):?>
								<?php foreach ($topData['news'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                        	<ul>
                            	<?php if (!empty($topData['gong_gao'])):?>
								<?php foreach ($topData['gong_gao'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                        	<ul>
                            	<?php if (!empty($topData['huo_dong'])):?>
								<?php foreach ($topData['huo_dong'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                        	<ul>
                            	<?php if (!empty($topData['gong_lue'])):?>
								<?php foreach ($topData['gong_lue'] as $k => $v): ?>
								<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
								<?php endforeach;?>
			                	<?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <a class="more" href="//fr.uu.cc/news/98.html">查看更多</a>
            </div>
        </div>
        
        <div class="main3">
            <div class="wrap">
            	<div class="item-tit">游戏特色</div>
                <div class="swiper-news-banner">
                    <div class="swiper-wrapper">
                    <?php if (!empty($topData['data7'])):?>
						<?php foreach ($topData['data7'] as $k => $v): ?>
						<div class="swiper-slide"><a href="javascript:;"><img src="<?php echo $v['str1']; ?>" /></a></div>
						<?php endforeach;?>
		                <?php endif;?>
                        
                    </div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
			</div>
        </div>
        
        <div class="main4">
            <div class="item-tit">人物简介</div>
            
            <div id="role-tabs-container" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo $base_path; ?>images/role1.jpg" /></div>
                    <div class="swiper-slide"><img src="<?php echo $base_path; ?>images/role2.jpg" /></div>
                    <div class="swiper-slide"><img src="<?php echo $base_path; ?>images/role3.jpg" /></div>
                    <div class="swiper-slide"><img src="<?php echo $base_path; ?>images/role4.jpg" /></div>
                </div>
            </div>
            <div class="role-tabs">
                <a class="active" href="javascript:;">奕剑</a>
                <a href="javascript:;">胧樱</a>
                <a href="javascript:;">画灵</a>
                <a href="javascript:;">武魁</a>
            </div>
        </div>
        
        <div class="main5">
        	<div class="wrap">
            	<div class="item-tit">仙界图鉴</div>
                <div class="pic-tabs">
                	<a class="active" href="javascript:;">截图</a>
                    <a href="javascript:;">壁纸</a>
                    <a href="javascript:;">视频</a>
                </div>
                <div id="pic-tabs-container" class="swiper-container">
                	<div class="swiper-wrapper">
                    	<div class="swiper-slide">
                        	<ul>
                        	
                        	<?php $total = count($topData['imgs2']); if (!empty($topData['imgs2'])): ?>
		                	<?php foreach($topData['imgs2'] as $k => $v): ?>
		                	<li><a href="<?php echo $v['str1'];?>" data-lightbox="img-group1"><img src="<?php echo $v['str1'];?>" /><span><?php echo $v['str2'];?></span></a></li>
		                	<?php endforeach; ?>
		                	<?php endif; ?>
                        	
                           
                            </ul>
                        </div>
                        <div class="swiper-slide">
                        	<ul>
                        	<?php $total = count($topData['tu2']); if (!empty($topData['tu2'])): ?>
		                	<?php foreach($topData['tu2'] as $k => $v): ?>
		                	<li><a href="<?php echo $v['str1'];?>" data-lightbox="img-group2"><img src="<?php echo $v['str1'];?>" /><span><?php echo $v['label'];?></span></a></li>
		                	<?php endforeach; ?>
		                	<?php endif; ?>
                            	
                            </ul>
                        </div>
                        <div class="swiper-slide">
                        	<ul>
                        	<?php $total = count($topData['vedio']); if (!empty($topData['vedio'])): ?>
		                	<?php foreach($topData['vedio'] as $k => $v): ?>
		                	<li><a class="video_btn_link" href="javascript:;" name="<?php echo $v['str2'];?>"><img src="<?php echo $v['str1'];?>" /><span><?php echo $v['label'];?></span></a></li>
		                	<?php endforeach; ?>
		                	<?php endif; ?>
                            	
                            </ul>
                        </div>
                    </div>
            	</div>
                <a class="more" href="//fr.uu.cc/pic/6.html">查看更多</a>
            </div>
        </div>
        
        <div class="main6">
        	<div class="wrap">
            	<div class="wxin-box">
                	<img src="<?php echo $config_data['other']['weixin_qrcode']; ?>" />
                    <p class="wxin-name">搜索公众号：<?php echo $config_data['other']['weixin_account']; ?></p>
                    <p>或长按二维码保存至相册，微信中使用扫一扫 >相册> 选择二维码图片</p>
                </div>
                
                <div class="contact"> 
                	<ul>
                    	<li class="bbs"><a href="<?php echo $config_data['other']['forum_url']; ?>"><i></i>官方论坛</a></li>
                        <li class="tieba"><a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>"><i></i>官方贴吧</a></li>
                        <li class="weibo"><a href="<?php echo $config_data['other']['weibo_url']; ?>"><i></i>官方微博</a></li>
                        <li class="qqun"><a href="<?php echo $config_data['other']['qq_qun_android']; ?>"><i></i>官方QQ群<span><?php echo $config_data['other']['qq_group']; ?></span></a></li>
                        <li class="service"><a href="<?php echo $config_data['other']['qiye_qq_qun_url']; ?>"><i></i>企业QQ<span><?php echo $config_data['other']['qiye_qq_qun']; ?></span></a></li>
                    </ul>
                </div>
                <a id="toTop" class="more" href="#link">返回顶部</a>
            </div>
        </div>
        
	</div>
    <div class="footer">Copyright©2009-<em class="copy-year">2016</em> 深圳市创梦天地科技有限公司 <br>版权所有 粤ICP备11018438号</div>

	<div class="nav-list">
    	<ul>
        	<li><a href="//fr.uu.cc">官网首页</a></li>
            <li><a href="//fr.uu.cc/news/98.html">新闻资讯</a></li>
            <li><a href="//fr.uu.cc/pic/6.html">游戏特色</a></li>
            <li><a href="//fr.uu.cc/pic/6.html">仙界图鉴</a></li>
            <li><a href="//fr.uu.cc/game_data/6.html">游戏资料</a></li>
            <li><a href="<?php echo $config_data['other']['forum_url']; ?>">官方论坛</a></li>
        </ul>
    </div>

<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<!--预约-->
<div class="pop-yuyue">
	<a class="close" href="javascript:;"></a>
    <div class="sys-choose">
    	<a class="ios-choose on" href="javascript:;"><span></span>iOS</a>
        <a class="az-choose" href="javascript:;"><span></span>安卓</a>
    </div>
    <input class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码" />
    <a class="yuyue-go" href="javascript:;"></a>
</div>




<script type="text/javascript" src="<?php echo $base_path; ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base_path; ?>js/lightbox-2.6.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	var swiper = new Swiper('.swiper-news-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
		loop: true,
		autoHeight: true,
    });
	

	var tabsSwiper = new Swiper('#news-tabs-container',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".news-tabs .active").removeClass('active')
		  $(".news-tabs a").eq(tabsSwiper.activeIndex).addClass('active')  
		}
	})
	$(".news-tabs a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".news-tabs .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper.slideTo( $(this).index() )
		})
		$(".news-tabs a").click(function(e){
		e.preventDefault()
	})
	
	var tabsSwiper2 = new Swiper('#role-tabs-container',{
		speed:500,
		effect:'fade',
		onSlideChangeStart: function(){
		  $(".role-tabs .active").removeClass('active')
		  $(".role-tabs a").eq(tabsSwiper2.activeIndex).addClass('active')  
		}
	})
	$(".role-tabs a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".role-tabs .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper2.slideTo( $(this).index() )
		})
		$(".role-tabs a").click(function(e){
		e.preventDefault()
	})
	
	var tabsSwiper3 = new Swiper('#pic-tabs-container',{
		speed:500,
		onSlideChangeStart: function(){
		  $(".pic-tabs .active").removeClass('active')
		  $(".pic-tabs a").eq(tabsSwiper3.activeIndex).addClass('active')  
		}
	})
	$(".pic-tabs a").on('touchstart mousedown',function(e){
		e.preventDefault()
		$(".pic-tabs .active").removeClass('active')
		$(this).addClass('active')
		tabsSwiper3.slideTo( $(this).index() )
		})
		$(".pic-tabs a").click(function(e){
		e.preventDefault()
	})
	//版权自动年份
	var d = new Date()
	$('.copy-year').html(d.getFullYear())

	//页面视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao,.s_p_k').show();
	})
	$(".close,.zhezao").on("click", function(e){
		$('.s_p_k video').attr('src','');
		$('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
		e.stopPropagation();
	});
	
	$('.nav').click(function(){
		$('.nav-list').show();
		$('.zhezao').show();
	})
	
	//GOTOP
	$("#toTop").click(function() {
	   $("body,html").animate({scrollTop:0},800);
	});
	
	//预约
	$('.yuyue-btn').click(function(){
		$('.zhezao,.pop-yuyue').show();
	})

	//预约事件
	$('.sys-choose a').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
		phone = $('.yuyue_ipt').val();
		if($('.ios-choose').is('.on')){
			code_id = 2;
		}else{
			code_id = 1;
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
					data:{phone:phone,collect_name:104,code_id:code_id},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("恭喜您预约成功并获得豪华礼包，奖励将在游戏上线后通过短信发放！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})
	
	
	//微信下提示 浏览器打开，判断安卓 IOS
	$(".downlink").click(function(){
		is_weixn();
	});
	function is_weixn(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(ua.match(/MicroMessenger/i)=="micromessenger"){
			alert("请点击右上角菜单，选择浏览器打开！")
			return false;
		} else {
			if(!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
				var url = "<?php echo stripslashes($config_data['other']['android_download_url']); ?>";
				if (url.indexOf("alert") > 0) {
					var text = url.split("'");
					alert(text[1]);	
				} else {
					window.location.href=url;
				}
			}else{
				var url = "<?php echo stripslashes($config_data['other']['ios_download_url']); ?>";
				if (url.indexOf("alert") > 0) {
					var text = url.split("'");
					alert(text[1]);	
				} else {
					window.location.href=url;
				}
			}
		}
	}
	
})
</script>
</body>
</html>
