<?php require_once '_header.ctp' ?>
<?php 
    /* 首页显示内容 */
    $loopImg = $webHelper->getImageList('loop_img_wap_2'); // 轮播图片
    $allCategories = $this->Gbsg->getNewsCategory(); // 所有新闻分类
$categories = $allCategories;

unset($categories[$this->Gbsg->specialCategoryId]); // 首页不显示 公告 分类
unset($categories[$this->Gbsg->roleCateId]); // 首页不显示 人物大全 分类
unset($categories[$this->Gbsg->propCateId]); // 首页不显示 道具大全 分类

$categoryIds = array_keys($categories);
$news = $this->Gbsg->getNews($categoryIds); // 显示的新闻
ksort($categories);
ksort($news);
?>
    <div class="page">
        <div class="header">
            <?php require_once '_top.ctp' ?>
        </div>
        <div class="content">
        	<div class="toy_box">
            	<h2>果宝三国专属智能玩具摇乐宝</h2>
                <div class="toy_item">
                    <div id="slider3" class="toy_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_01.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_02.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_03.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_04.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_05.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_06.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            <div class="swiper-slide"><div class="toy_img"><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/toy_07.jpg" /></a></div><div class="toy_btn"><a href="//t.im/lrff" target="_blank">点击购买</a></div></div>
                            </div>
                    </div>
                </div>
            </div>
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
            <ul class="contact">
                <li class="wx">guobaosanguo2014</li>
                <li class="tx"><a href="//weibo.com/u/5122162901">腾讯微博</a></li>
                <li class="sina"><a href="#">新浪微博</a></li>
                <li class="lt"><a href="//www.3ko.com/">论坛</a></li>
            </ul>
        </div>
        <div class="footer">
            <img src="<?php echo $full_base_url ?>/images/logo.png" alt="">
            <img src="<?php echo $full_base_url ?>/images/logo2.png" alt="">
            <img src="<?php echo $full_base_url ?>/images/logo3.png" alt="">
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
$(document).ready(function () {
var swiper = new Swiper('#slider1', {
	pagination: '#dot1',
	paginationClickable: true
});

var swiper = new Swiper('#slider2', {
	pagination: '#dot2',
	paginationClickable: true
});

var swiper = new Swiper('#slider3', {
		
	slidesPerView: 3,
	paginationClickable: true,
	spaceBetween: 22

});
var bullet2 = $('#dot2').find('span');
console.log(bullet2.length);
li_w = parseInt(1/bullet2.length*590);
bullet2.css({'width':li_w+'px'});
})


function isWx(){
   var ua = navigator.userAgent.toLowerCase();
   if(ua.match(/MicroMessenger/i) == "micromessenger"){
         return true;
   }else{
       return false;
   }
};

$(function(){
    //判断android 和 ios
    var u = navigator.userAgent;
    if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
        $("#d_ios").show();
        $("#d_and").hide();
    }else{
        $("#d_and").show();
        $("#d_ios").hide();
    }

    //提示
    $("#d_ios, #d_and").click(function(){
        if(isWx()){
            $(".tip").show();
            return false;
        }
    });
    $(".tip").height($(document).height());
    $(".tip").click(function(){
        $(".tip").hide();
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=40202270" charset="UTF-8"></script>
</body>
</html>
