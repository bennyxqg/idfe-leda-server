<?php require_once '_header.ctp' ?>
<?php 
    /* 首页显示内容 */
    $loopImg = $webHelper->getImageList('loop_img_wap_2'); // 轮播图片
    $allCategories = $this->Xrise->getNewsCategory(); // 所有新闻分类
$categories = $allCategories;

unset($categories[$this->Xrise->specialCategoryId]); // 首页不显示 公告 分类
unset($categories[$this->Xrise->roleCateId]); // 首页不显示 人物大全 分类
unset($categories[$this->Xrise->propCateId]); // 首页不显示 道具大全 分类

$categoryIds = array_keys($categories);
$news = $this->Xrise->getNews($categoryIds); // 显示的新闻
ksort($categories);
ksort($news);
?>
    <div class="page">
        <div class="header">
            <?php require_once '_top.ctp' ?>
        </div>
        <div class="content">
        	<ul class="newslist index_new">
        	<?php 
        	if($news){
        		foreach ($news as $key=>$value){
        			if($value){
        				foreach ($value as $k=>$v){
        					$date = date("Y-n-j",$v["updated"]);
        					$link = $this->Base->getShowUrl($v["id"]);
        					$title = $v["title"];
        					echo '<li>';
        					echo '<span>'.$date.'</span>';
        					echo '<a href="'.$link.'" target="_blank">
        					'.$title.'
        					</a>';
        					echo '</li>';
        				
        				}
        			}
        		}
        	}
        	?>
            </ul>
            <div class="swipeBox" id="qieh2">
                <div id="slider2" class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if ($loopImg) : // 顶部轮播图片?>
                            <?php foreach ($loopImg as $key => $value):?>
                                <?php if ($value['big_link']) : // 有链接时?>
                                    <div class="swiper-slide"><a href="<?php echo $value['big_link']; ?>" target="_blank"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></a></div>
                                <?php else: // 无链接?>
                                    <div class="swiper-slide"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></div>
                                <?php endif;?>
                            <?php endforeach;?>
                        <?php else : // 没有顶部轮播图片时显示?>
                            <div class="swiper-slide"><img src="<?php echo $full_base_url ?>/images/mban.jpg" width="100%" /></div>
                        <?php endif;?>
                    </div>
                    <div class="dot clearfix" id="dot2"></div>
                </div>
            </div>
            <div class="contact">
                <div class="wx fl"><i></i>微信号：ldXrise</div>
                <div class="qq fr"><i></i>玩家QQ群：88420552</div>
            </div>
        </div>
        <div class="footer">
            <img src="<?php echo $full_base_url ?>/images/logo.png" alt="">
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    <div class="tip">
        <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
    </div>
<script src="<?php echo $full_base_url ?>/js/zepto.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/swiper.jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/swiper.min.css" />
<script type="text/javascript">
$(function(){
	var swiper = new Swiper('#slider1', {
		pagination: '#dot1',
		paginationClickable: true
	});
	
	var swiper = new Swiper('#slider2', {
		pagination: '#dot2',
		paginationClickable: true
	});
	
	var bullet2 = $('#dot2').find('span');
	li_w = parseInt(1/bullet2.length*590);
	bullet2.css({'width':li_w+'px'});
	
	//微信下提示 浏览器打开，判断安卓 IOS
	$(".download a").click(function(){
		is_weixn();
	});
	function is_weixn(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(ua.match(/MicroMessenger/i)=="micromessenger"){
			$(".tip").show();
			return false;
		} else {
			if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
				<?php if(strlen(trim($iosDownload)) == 0) { ?>
				alert('敬请期待！'); //苹果下载地址
				<?php } else { ?>
				location.href="<?php echo $iosDownload; ?>";
				<?php } ?>
			}else{
				<?php if(strlen(trim($androidDownload)) == 0) { ?>
				alert('敬请期待！'); //安卓下载地址
				<?php } else { ?>
				location.href="<?php echo $androidDownload; ?>";
				<?php } ?>
			}
		}
	}
	$(".tip").height($(document).height());
	$(".tip").click(function(){
		$(".tip").hide();
	});
});
</script>
</body>
</html>
