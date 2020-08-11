<?php 
require_once "include.php";
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?>  
<meta name="keywords" content="<?= $keywords; ?>"/>
<meta name="description" content="<?= $description; ?>"/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/swiper.min.css" />
</head>

<body>
<div id="main">
	<div class="section section_1">
    	<div class="pr top_nav">
        	<h2 class="pa logo"><a href="//tanke.uu.cc" target="_self"><img src="<?php echo $full_base_url ?>/images/logo.jpg" alt="坦克大战" /></a></h2>
            <div class="pa nav">
            	<ul>
                	<li class="on"><a href="//tanke.uu.cc" target="_self"><i></i>官网首页</a></li>
                    <li id="nav_news"><a href="//tanke.uu.cc/news/98.html" target="_self"><i></i>新闻公告</a></li>
                    <li id="nav_bbs"><a href="//bbs.uu.cc/forum.php?mod=forumdisplay&fid=378" target="_self"><i></i>官方论坛</a></li>
                    <li id="nav_fuli"><a href="#link" target="_self"><i></i>关注领福利</a></li>
                </ul>
            </div>
            <div class="pa pop_wx">            	
                    <img src="<?php echo $topData['other']['weixin_qrcode']; ?>" />
                            <span class="qqun"><?php echo $topData['other']['qq_group'];?></span>
                <a class="pa tieba" href="<?php echo $topData['other']['baidu_tieba_url'];?>" target="_blank"></a>
            </div>
        </div>
    	<div class="top1">
        	<div class="wrap"></div>
        </div>
        <div class="top2">
        	<div class="wrap">
            	<a class="down_link" href="<?php echo $down_url;?>"></a>
                <a class="yuyue_link" href="#link"></a>
            </div>
        </div>
        <div class="top3">
        	<div class="wrap"></div>
        </div>
    </div>
    <div class="section section_2">
    	<div class="wrap">
        	<div class="item_tit">
            	<h3>新闻公告</h3>
                <span>NEWS BULLETIN</span>
            </div>
            <div class="content">
            	<div class="switch">
                    <ul class="runContent">
                 <?php 
                $imgs = $topData['imgs'];
		            if(!empty($imgs)){
		            	foreach ($imgs as $key=>$v){
		            ?>
		            		<li><a href="<?=$v['str2']?>"><img src="<?=$v['str1']?>" /></a></li>
		            <?php 
		            	}
		            
		            }
		            
		            ?>
		            
                                                                     
                    </ul>
                    <ul class="triggers">
                        <li class="cur"></li>
                        <li></li>
                    </ul>
                    
                </div>
                <div class="pr img1">
                <?php 
                $img_index_1 = $topData['img_index_1'];
                //print_r($topData);
		            if(!empty($img_index_1)){
		            	foreach ($img_index_1 as $key=>$v){
		            ?>
		            		<li><img src="<?=$zxdtUrl.$v['small_url']?>" /></li>
		            <?php 
		            	}
		            
		            }
		            
		            ?>
		            
                <!--<img src="<?php echo $full_base_url ?>/images/img01.jpg" />-->
                </div>
                <div class="fl news_box tab">
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
                <!--<div class="fr imgs_box">
                	<img src="<?php echo $full_base_url ?>/images/img02.jpg" />
                    <img src="<?php echo $full_base_url ?>/images/img03.jpg" />
                </div>-->
            </div>
        </div>
    </div>
    <div class="section section_3">
    	<div class="wrap">
        	<div class="item_tit">
            	<h3>游戏特色</h3>
                <span>GAME FEATURES</span>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                	<?php if (!empty($topData['imgs2'])):?>
			        <?php foreach ($topData['imgs2'] as $k => $v):?>
			        <div class="swiper-slide"><img src="<?php echo $v['str1'];?>" /></div>
			        <?php endforeach;?>
			        <?php endif;?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
		</div>
    </div>
	<a href="#" class="prev"></a>
	<a href="#" class="next"></a>
</div>

<div class="pop_down">
	<a class="close" href="javascript:;" title="关闭"></a>
	       
   <img src="<?php echo $down_code; ?>" />
    <a class="down" href="<?php echo $down_url;?>" target="_self"></a>
</div>

<div class="zhezao"></div>
<div class="yuyue">
    <a class="close" href="javascript:;"></a>
    <p>输入手机号，礼包将在测试前通过短信发送</p>
    <div id="dropdown">
        <input class="input_select" readonly type="text" value="安卓" />
        <ul style="display: none;">
            <li><a rel="2">安卓</a></li>
            <li><a rel="1">IOS</a></li>
        </ul>
    </div>
    <input class="yuyue_ipt" placeholder="请输入手机号" type="tel">
    <a class="yuyue_btn" href="javascript:;"></a>
</div>


<div class="footer">
    <span class="logo"><img src="//fruit.uu.cc/fruit.uu.cc/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//fruit.uu.cc/fruit.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//fruit.uu.cc/fruit.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//fruit.uu.cc/fruit.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//fruit.uu.cc/fruit.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> <a target="_blank" href="//sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/8A6EE0A6B56843C0B0641F5BA865EBA8"> <img src="//ddx.uu.cc/ddx.uu.cc/images/youxidzbq.png" alt="游戏电子标签" width="20"> </a></p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/pagescroller.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/swiper.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var navLabel = new Array('首页', '新闻','特色');
	$('#main').pageScroller({ navigation: navLabel });
	$('.next').click(function(e){
		e.preventDefault();
		pageScroller.next();
	});			
	$('.prev').click(function(e){
		e.preventDefault();
		pageScroller.prev();
	});
	
	$('.pop_down .close').click(function(){
		$('.pop_down').hide()
	});
	
	/* 图片切换*/
	$(".switch").Switch({
		moveInterval:300,
		interval:5000,
		direction:"alpha",
		handle:".triggers"
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
	//微信
	var dl = $("#nav_fuli");
	var pd = $(".pop_wx");
	dl.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
	pd.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
	
	//预约
	$(".yuyue_link").click(function(){
		$(".yuyue,.zhezao").show();
	});
	$(".close").click(function(){
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
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0,
		loop: true
    });
});	
</script>
</body>
</html>
