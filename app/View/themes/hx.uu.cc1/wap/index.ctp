<!DOCTYPE html>
<html lang="zh-cn">
<?php include 'index_header.ctp' ?>
<body class="index">
<?php include 'include.ctp'; ?>

<script>
function down_hx(){
	var down_url;
	if(sys == 1){//an zhuo
		down_url = "<?=$android_list['content']?>";
	}else{
		down_url = "<?=$ios_list['content']?>";
	}
	window.location.href=down_url; 
}

</script>
    <header>
        <div class="header-logo">
            <div class="icon"></div>
            <div class="title">幻想之心</div>
            <div class="desc">首款动漫全明星手游</div>
        </div>
        <div class="download">
            <a href="javascript:down_hx();" data-action="dl" class="download-btn">
                <img data-btn="dlIOS" class="hide" src="<?php echo $full_base_url ?>/mobile/img/iOS-download.jpg" id="d_ios" alt="">
                <img data-btn="dlAndroid" class="hide" src="<?php echo $full_base_url ?>/mobile/img/android-download.jpg" id="d_and" alt="">
            </a>
        </div>
    </header>	
    <div class="wrapper">
        <section class="section-1">
            <div class="swipeslide slider slider1" data-slider="first">
                <div id='slider' class='swipe'>
                    <div class='swipe-wrap'>
                    <?php 
					if(!empty($topData) && isset($topData['img_index_1'])){
						foreach ($topData['img_index_1'] as $k=>$v){
                            $link = $v['small_link'] ? $v['small_link'] : $v['big_link'] ? $v['big_link'] : '#';
					?>
					<div class="wrap"><a href="<?=$link?>"><img src="<?=$HxzxUrl.$v['small_url']?>" width="300" height="173" alt=""></a></div>
					<?php 
						}
					}else{
					?>
					<div class='wrap'><img src="<?php echo $full_base_url ?>/mobile/img/img-show.jpg" width="300" height="173" alt=""></div>
					<?php 
					}
					?>
                    </div>
                </div>
                <ul class="pagination">
                <?php 
				if(!empty($topData) && isset($topData['img_index_1'])){
					foreach ($topData['img_index_1'] as $k=>$v){
						$class_name = $k == 0 ? 'class="on"' : '';
				?>
				<li <?=$class_name?>></li>
				<?php 
					}
				}else{
				?>
				<li></li>
				<?php 
				}
				?>
                </ul>
            </div>

        </section>

        <section class="section-newslist">
            <div class="section-title">
                新闻公告
            </div>
            <div class="newslist">
                <ul>
                <?php 
				if(!empty($total)){
					foreach ($total as $k=>$v){
				?>
				<li>
                        <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" class="li-inner">
                            <span class="type">[<?=$v['decription']?>]</span>
                            <?=$v['title']?>
                            <div class="date">
                                <?=date("m/d",$v["created"])?>
                            </div>
                        </a>
                    </li>
				<?php	
					}
				}
				?>
                </ul>
            </div>
            <a href="<?php echo $this->Base->getNewsUrl($topData['total'][0]['news_categories_id']);?>" class="more">
                查看更多>
            </a>
        </section>

        <section class="section-3">
            <div class="section-title">
                职业介绍
            </div>
            <div class="nav">
                <a class="on" data-renwu="fashi">法师</a>
                <a data-renwu="gjs">弓箭手</a>
                <a data-renwu="qishi">骑士</a>
            </div>
            <img data-renwutarget="fashi" class="career-img" src="<?php echo $full_base_url ?>/mobile/img/career-mage.jpg" alt="">
            <img data-renwutarget="gjs" class="career-img hide" src="<?php echo $full_base_url ?>/mobile/img/career-archer.jpg" alt="">
            <img data-renwutarget="qishi" class="career-img hide" src="<?php echo $full_base_url ?>/mobile/img/career-knight.jpg" alt="">
        </section>

        <section class="section-4">
            <div class="section-title">
                游戏截图
            </div>
            <div class="swipeslide slider slider-2 slider2" data-slider="first">
                <div id='slider' class='swipe'>
                    <div class='swipe-wrap'>
                    <?php 
					  if(!empty($topData['img_index_2'])){
					  	foreach ($topData['img_index_2'] as $k=>$v){
					  ?>
					  <div class='wrap'><img src="<?=$HxzxUrl.$v['small_url']?>" width="258" height="152" alt=""></div>
					  <?php 
					  	}
					  }
					  ?>
                    </div>
                </div>
                <div class="arrow-left" data-action="toLeft"></div>
                <div class="arrow-right" data-action="toRight"></div>
                <ul class="pagination">
	              <?php 
				  if(!empty($topData['img_index_2'])){
				  	foreach ($topData['img_index_2'] as $k=>$v){
				  		$className = $k==0 ? 'class="on"' : '';
				  ?>
				  <li <?=$className?>></li>
				  <?php 
				  	}
				  }
				  ?>
                </ul>
            </div>
        </section>

        <section class="section-5">
            <div class="section-title">
                原画欣赏
            </div>
            <div class="swipeslide slider slider-2 slider2" data-slider="first">
                <div id='slider' class='swipe'>
                    <div class='swipe-wrap'>
                    <?php 
					  if(!empty($topData['img_index_3'])){
					  	foreach ($topData['img_index_3'] as $k=>$v){
					  ?>
					  <div class='wrap'><img src="<?=$HxzxUrl.$v['small_url']?>" width="258" height="152" alt=""></div>
					  <?php 
					  	}
					  }
					  ?>
                    </div>
                </div>
                <!-- <div class="arrow-left" data-action="toLeft"></div>
                <div class="arrow-right" data-action="toRight"></div> -->
                <ul class="pagination">
                <?php 
				  if(!empty($topData['img_index_2'])){
				  	foreach ($topData['img_index_2'] as $k=>$v){
				  		$className = $k==0 ? 'class="on"' : '';
				  ?>
				  <li <?=$className?>></li>
				  <?php 
				  	}
				  }
				  ?>
                </ul>
            </div>
        </section>

        <section class="social-account">
            <table>
                <tbody>
                    <tr>
                        <td>
                        <?php 
						if(isset($xlwo_list)){
						?>
						<a href="<?=$xlwo_list['content']?>">
                                <span class="weibo icon"></span><?=$xlwo_list['title']?>
                            </a>
						<?php 
						}else{
						?>
						<a href="//weibo.com/huanxiangzhixin">
                                <span class="weibo icon"></span>新浪微博
                            </a>
						<?php 
						}
						
						?>
						
						<?php 
						if(isset($txwb_list)){
						?>
						<a href="<?=$txwb_list['content']?>">
                                <span class="weibo icon"></span><?=$txwb_list['title']?>
                            </a>
						<?php 
						}else{
						?>
						<a href="//weibo.com/huanxiangzhixin">
                                <span class="weibo icon"></span>新浪微博
                            </a>
						<?php 
						}
						
						?>
						
						<?php 
						if(isset($yxlt_list)){
						?>
						<a href="<?=$yxlt_list['content']?>">
                                <span class="weibo icon"></span><?=$yxlt_list['title']?>
                            </a>
						<?php 
						}else{
						?>
						<a href="//weibo.com/huanxiangzhixin">
                                <span class="weibo icon"></span>新浪微博
                            </a>
						<?php 
						}
						
						?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="company-logo">
            <img src="<?php echo $full_base_url ?>/mobile/img/company-logo.jpg" alt="">
        </section>

        <footer>
            <table class="links">
                <tbody>
                    <tr>
                        <td><a href="#">客服中心</a></td>
                        <td><a href="#">服务器列表</a></td>
                        <td><a href="#">进入论坛</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="copyright">
                Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有
            </div>
            <div class="tips">
                <p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</p>
                <p>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
    <script src="//cdn.staticfile.org/zepto/1.1.4/zepto.min.js"></script>
    <script src="//cdn.staticfile.org/hammer.js/1.1.3/hammer.min.js"></script>
    <script src="<?php echo $full_base_url ?>/mobile/js/jquery_hammer_min.js"></script>
    <script src="<?php echo $full_base_url ?>/mobile/js/swipe.js"></script>
    <script src="<?php echo $full_base_url ?>/mobile/js/main.js?vbv"></script>
    <script>
        $(function(){
            $("#d_ios").click(function(){
                alert('ios还在紧张开发中=￣ω￣=!关注公众号hxzx1024获得最新消息哟！');
            });

            //轮播
            $('[data-slider]').each(function(index, el) {
                var $this = $(el),
                    $swiper = $this.find('.swipe'),
                    $pages = $this.find('.pagination');
                var mySlider = Swipe($swiper[0], {
                  auto: 2000,
                  continuous: true,
                  stopPropagation: true,
                  callback: function(index, element) {
                    // console.log(arguments);
                  },
                  transitionEnd: function(index, element) {
                    // console.log(arguments);
                    $pages.children().removeClass('on');
                    $pages.children().eq(index).addClass('on');
                  }
                });
                $this.hammer().on(touchEvent, '[data-action]', function(ev){
                    var action = $(this).data('action');
                    switch(action){
                        case 'toLeft':
                            mySlider.prev();
                            break;
                        case 'toRight':
                            mySlider.next();
                            break;
                    }
                })
                $this.data('slider', mySlider);
            });

            $('[data-renwu]').hammer().on(touchEvent, function(ev){
                ev.preventDefault();
                ev.stopPropagation();
                var $this = $(this);
                $this.addClass('on').siblings().removeClass('on');
                var target = $this.data('renwu');
                $('[data-renwutarget="'+ target +'"]')
                    .removeClass('hide')
                    .siblings('[data-renwutarget]')
                    .addClass('hide');
                return false;
            })
        })
    </script>
</body>
</html>
