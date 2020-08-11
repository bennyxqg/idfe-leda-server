
<?php
require_once '_header.ctp';
require_once '_common.ctp';
// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlock();
$banner = $blocks['index_banner']; // banner
$gameIcon = $blocks['game_icon']; // 游戏图标
$gameDescriptionDetail = $blocks['game_description_detail']; // 游戏详细描述
$gameDescriptionSimple = $blocks['game_description_simple']; // 游戏简单描述
$iosDownloadImg = $blocks['ios_download_img']; // ios下载按钮图片
$androidDownloadImg = $blocks['android_download_img']; // Android下载按钮图片
$qrcodeDownload = $blocks['qrcode_download']; // 下载二维码
$qrcodeWeixinImg = $blocks['qrcode_weixin']; // 微信关注二维码

$loopImageLeft = $webHelper->getImageList('loop_img_1'); // 左轮播图片
$loopImageRight = $webHelper->getImageList('loop_img_2'); // 右轮播图片
$friendlinks = $webHelper->getTextList('friendlinks'); // 合作友联 - 友情链接为文本列表的形式

$tk = $webHelper->getImageList('right_tk'); // 坦克
$wf = $webHelper->getImageList('right_wf'); // 玩法
$ls = $webHelper->getImageList('right_ls'); // 联赛
$sp = $webHelper->getImageList('right_sp'); // 视频
$jt = $webHelper->getImageList('right_jt'); // 截图
$bz = $webHelper->getImageList('right_bz'); // 壁纸

$rtt = $webHelper->getImageList('iron_rtt');//任天堂 
$sy_16163 = $webHelper->getImageList('iron_16163sy');//16163
$sy_91 = $webHelper->getImageList('iron_91sy');//任天堂
$mfw = $webHelper->getImageList('iron_mfw');//任天堂
$kdbs = $webHelper->getImageList('iron_kdbs');//任天堂

$categories = $allCategorires; // 首页需要显示的新闻分类
$categoryIds = array_keys($allCategorires); 
$news = $webHelper->getNews($categoryIds); // 显示的新闻
// var_dump($news);exit;
ksort($categories);
ksort($news);
$news_more_url = $this->Base->getNewsUrl(key($categories));
// var_dump($news_more_url);exit;
?>
<body>
<div class="top">
	<div class="wrap">
    	<h2><a class="fHide" href="//www.idreamsky.com" target="_blank">乐逗游戏</a></h2>
        <?php require_once '_dh.ctp';?>
    </div>
</div>

<div class="banner">
</div>

<!-- 游戏介绍 游戏下载 开始-->
<div class="game_info">
	<div class="wrap">
    	<div class="fl game_about">
        	<h2 class="fl pr game_logo fHide">钢铁力量</h2>
            <div class="fl pr about_box">
            	<h3 class="game_tit">钢铁力量</h3>
                <p class="game_txt">
     			<?php if ($gameDescriptionSimple): // 游戏简单描述?>
                        <?php echo $gameDescriptionSimple;?>
                    <?php else :?>
                                                                《钢铁力量》是一款拟真坦克射击游戏，为玩家提供了与全世界坦克指挥官一较高下的机会。
                    <?php endif;?>           
                </p>
                <a id="btn_zk" href="JavaScript:;">详细介绍<i></i></a>
                <div class="pa about_detail" style="display:none">
                	<h3 class="game_tit">钢铁力量</h3>
                	<p class="game_txt"><?php if ($gameDescriptionDetail): // 游戏详细描述?>
                        <?php echo $gameDescriptionDetail;?>
                    <?php else :?>
                                                                《钢铁力量》是一款拟真坦克射击游戏，为玩家提供了与全世界坦克指挥官一较高下的机会。
                    <?php endif;?>
                    </p>
                    <a id="btn_sq" href="JavaScript:;">收起<i></i></a>
                    <div class="masks"></div>
                </div>
            </div>
        </div>
        <div class="fr">
        	<div class="fl down_link">
            	<!-- <a href="https://itunes.apple.com/cn/app/gang-tie-li-liang/id606190854?mt=8" target="_blank">IOS下载</a> -->
                <a href="<?=$iosDownloadImg?>" target="_blank">IOS下载</a>
                <a href="<?=$androidDownloadImg?>" target="_blank">安卓下载</a>
            </div>
        	<div class="fl code_down">
        	<?php if ($qrcodeDownload): // 下载二维码?>
                        <?php echo $qrcodeDownload; ?>
                    <?php else : // 没有下载二维码区块时显示?>
                        <img src="<?php echo $full_base_url ?>/images/download_ewm.png" alt="">
                    <?php endif;?>
        	</div>
        </div>
    </div>
</div>

<!-- 焦点图 推介新闻 开始-->
<div class="main_con main1">
	<div class="fl switch" style="position:relative;">
        <ul class="runContent">
        <?php 
        if($loopImageLeft){
        	$i=0;
        	foreach ($loopImageLeft as $value){
        		if($i==0){
        			echo '<li style="display:block;"><a href="'.$value['big_link'].'" target="_blank">
        			<img src="/uploads/'.$value['big_url'].'" /></a></li>';
        		}else{
        			echo '<li style="display:none;"><a href="'.$value['big_link'].'" target="_blank">
        			<img src="/uploads/'.$value['big_url'].'" /></a></li>';
        		}
        		
        		$i++;
        	}
        }
        ?>
        </ul>
        <ul class="triggers">
        <?php 
        if($loopImageLeft){
        	$i=0;
        	foreach ($loopImageLeft as $value){
        		if($i==0){
        			echo '<li class="cur"></li>';
        		}else{
        			echo '<li></li>';
        		}
        		
        		$i++;
        	}
        }
        ?>
        </ul>
    </div>
    <div class="fl new_box">
    	<div class="pr tab_nav">
        	<ul>
            	<li class="cur">公告<em></em></li>
                <li>新闻<em></em></li>
                <li>活动<em></em></li>
                <li>攻略<em></em></li>
            </ul>
            <a class="pa more" href="<?=$news_more_url?>">更多</a>
        </div>
        <?php 
        if($news){
        	$j=0;
        	foreach ($news as $k=>$v){
        		if($j==0){
        			echo '<div class="tab_con">
        			<ul class="con">';
        			foreach ($v as $key=>$value){
        				$new_url = $this->Base->getShowUrl($value['id']);
        				$date = date('m/d', $value['updated']);
        				echo '<li><em></em><strong>['.$categories[$value['news_categories_id']].']</strong><a href="'.$new_url.'">'.$value['title'].'<i></i></a><span>['.$date.']</span></li>';
        			}
        			echo '</ul>
        			</div>';
        		}else{
        			echo '<div class="tab_con" style="display:none">
        			<ul class="con">';
        			foreach ($v as $key=>$value){
        				$new_url = $this->Base->getShowUrl($value['id']);
        				$date = date('m/d', $value['updated']);
        				echo '<li><em></em><strong>['.$categories[$value['news_categories_id']].']</strong><a href="'.$new_url.'">'.$value['title'].'<i></i></a><span>['.$date.']</span></li>';
        			}
        			echo '</ul>
        			</div>';
        		}
        		$j++;
        	}
        }
        ?>
    </div>
    <div class="fr index_nav">
    	<ul>
        	<li><a href="#link"><em class="bbs"></em><span>论坛</span></a></li>
            <li><a href="#link"><em class="wx"></em><span>公众号</span></a></li>
            <li><a href="#link"><em class="service"></em><span>客服</span></a></li>
            <li><a href="#link"><em class="wb"></em><span>微博</span></a></li>
        </ul>
    </div>
</div>

<!-- 图片导航 开始-->
<div class="main_con main2">
	<ul class="item_nav">
    	<li class="item_act"><a href="<?=$rmhd?>" target="_blank">劲爆活动</a></li>
        <li class="item_str"><a href="<?=$gljh?>" target="_blank">攻略秘籍</a></li>
        <li class="item_osp"><a href="/jietu" target="_blank">精彩截图</a></li>
    </ul>
</div>

<!-- 坦克、玩法、联赛 视频、截图、壁纸 开始-->
<div class="main_con main3">
	<div class="fl con_left">
    	<div class="tab_nav">
        	<ul>
            	<li class="cur">坦克</li>
                <li>玩法</li>
                <li>联赛</li>
            </ul>
        </div>
        <div class="tab_con">
        	<ul>
        	<?php 
        	if(!empty($tk)){
        		foreach ($tk as $key=>$value){
        			echo '<li><a href="'.$value['small_link'].'" target="_blank"><img src="/uploads/'.$value['big_url'].'" /><span>'.$value['title'].'</span></a></li>';
        		}
        	}
        	?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<ul>
        	<?php 
        	if(!empty($wf)){
        		foreach ($wf as $key=>$value){
        			echo '<li><a href="'.$value['small_link'].'" target="_blank"><img src="/uploads/'.$value['big_url'].'" /><span>'.$value['title'].'</span></a></li>';
        		}
        	}
        	?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<ul>
        	<?php 
        	if(!empty($ls)){
        		foreach ($ls as $key=>$value){
        			echo '<li><a href="'.$value['small_link'].'" target="_blank"><img src="/uploads/'.$value['big_url'].'" /><span>'.$value['title'].'</span></a></li>';
        		}
        	}
        	?>
            </ul>
        </div>
    </div>
    <div class="fr con_right">
    	<div class="tab_nav">
        	<ul>
            	<li class="cur">视频</li>
                <li>截图</li>
                <li>壁纸</li>
            </ul>
            <span class="tab_nav_bg"></span>
        </div>
        <div class="tab_con" id="video">
        	<ul>
        	<?php 
        	if(!empty($sp)){
        		foreach ($sp as $key=>$value){
        			echo '<li><a href="'.$value['small_link'].'" target="_blank"><img src="/uploads/'.$value['big_url'].'" /><span>'.$value['title'].'</span></a></li>';
        		}
        	}
        	?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<ul>
        	<?php 
        	if(!empty($jt)){
        		foreach ($jt as $key=>$value){
        			echo '<li><a href="'.$value['small_link'].'" target="_blank"><img src="/uploads/'.$value['big_url'].'" /><span>'.$value['title'].'</span></a></li>';
        		}
        	}
        	?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<ul>
        	<?php 
        	if(!empty($bz)){
        		foreach ($bz as $key=>$value){
        			echo '<li><a href="'.$value['small_link'].'" target="_blank"><img src="/uploads/'.$value['big_url'].'" /><span>'.$value['title'].'</span></a></li>';
        		}
        	}
        	?>
            </ul>
        </div>
    </div>
</div>


<!-- 媒体专区 合作媒体 开始-->
<div class="main_con main4">
	<div class="fl media_left">
    	<div class="pr con_tit">
        	<h2><i></i>媒体专区</h2>
            <div class="fr tab_nav">
                <ul>
                    <li class="cur">任天堂<i>丨</i></li>
                    <li>16163手游<i>丨</i></li>
                    <li>91手游<i>丨</i></li>
                    <li>魔方网<i>丨</i></li>
                    <li>口袋巴士</li>
                </ul>
            </div>
        </div>
        <div class="tab_con">
        	<div class="fl img_left"><img src="/uploads/<?=$rtt[0]['big_url']?>" /></div>
            <ul class="fl media_new">
            <?php 
            if(!empty($rtt)){
            	foreach ($rtt as $key=>$value){
            		$date = date('m/d',$value['updated']);
            		echo '<li><strong>[公告]</strong><a href="'.$value['small_link'].'" target="_blank">'.$value['title'].'</a><span>'.$date.'</span></li>';
            	}
            }
            ?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<div class="fl img_left"><img src="/uploads/<?=$sy_16163[0]['big_url']?>" /></div>
            <ul class="fl media_new">
            <?php 
            if(!empty($sy_16163)){
            	foreach ($sy_16163 as $key=>$value){
            		$date = date('m/d',$value['updated']);
            		echo '<li><strong>[公告]</strong><a href="'.$value['small_link'].'" target="_blank">'.$value['title'].'</a><span>'.$date.'</span></li>';
            	}
            }
            ?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<div class="fl img_left"><img src="/uploads/<?=$sy_91[0]['big_url']?>" /></div>
            <ul class="fl media_new">
            <?php 
            if(!empty($sy_91)){
            	foreach ($sy_91 as $key=>$value){
            		$date = date('m/d',$value['updated']);
            		echo '<li><strong>[公告]</strong><a href="'.$value['small_link'].'" target="_blank">'.$value['title'].'</a><span>'.$date.'</span></li>';
            	}
            }
            ?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<div class="fl img_left"><img src="/uploads/<?=$mfw[0]['big_url']?>" /></div>
            <ul class="fl media_new">
            <?php 
            if(!empty($mfw)){
            	foreach ($mfw as $key=>$value){
            		$date = date('m/d',$value['updated']);
            		echo '<li><strong>[公告]</strong><a href="'.$value['small_link'].'" target="_blank">'.$value['title'].'</a><span>'.$date.'</span></li>';
            	}
            }
            ?>
            </ul>
        </div>
        <div class="tab_con" style="display:none">
        	<div class="fl img_left"><img src="/uploads/<?=$kdbs[0]['big_url']?>" /></div>
            <ul class="fl media_new">
            <?php 
            if(!empty($kdbs)){
            	foreach ($kdbs as $key=>$value){
            		$date = date('m/d',$value['updated']);
            		echo '<li><strong>[公告]</strong><a href="'.$value['small_link'].'" target="_blank">'.$value['title'].'</a><span>'.$date.'</span></li>';
            	}
            }
            ?>
            </ul>
        </div>
    </div>
    <div class="fr media_right">
    	<div class="pr con_tit">
        	<h2><i></i>合作媒体</h2>
        </div>
        <ul class="media_list">
        <?php 
        if(!empty($friendlinks)){
        	foreach ($friendlinks as $k=>$v){
        		echo '<li><a href="'.$v['url'].'" target="_blank">'.$v['title'].'</a></li>';
        	}
        }
        ?>
        </ul>
    </div>
</div>
<?php require_once '_footer.ctp';?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link type="text/css" media="screen" href="<?php echo $full_base_url ?>/js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
<script>
$(document).ready(function(){
    //tab选项卡
    $('.tab_nav').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab_con').eq(i).show().siblings('.tab_con').hide();
        })
    });

    //展开详细信息
    $('#btn_zk').click(function(){
        $('.about_detail').show();
		$(this).hide();
    });
    $('#btn_sq').click(function(){
        $(this).parent().hide();
		$('#btn_zk').show();

    });

    /* 图片切换*/
    $(".switch").Switch({
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

    $('.mask').height($(document).height());
    $('.close').click(function(){
        $('.popup').hide();
    });
	
	$(".wx_link").hover(function () {
        $("#wx_pic").show();
    }, function () {
        $("#wx_pic").hide();
    })
	
	$("#video").find("a").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

});

//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e737a33fcfdf5c458257847d176d585b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>