<!DOCTYPE html>
<html lang="en">
	<?php include 'index_header.ctp' ?>
	<body>
	<?php include 'include.ctp' ?>
		<div id="mainContainer">
			<div id="banner">
				<div id="head">
					<div class="object logo"></div>
					<?php 
					$ios_url = isset($ios_list) ? '<a href="'.$ios_list['content'].'">'.$ios_list['title'].'</a>' : '<a href="#"></a>';
					$an_url = isset($android_list) ? '<a href="'.$android_list['content'].'">'.$android_list['title'].'</a>' : '<a href="#"></a>';
					?>
					<div class="object dl-ios"><?=$ios_url?></div>
					<div class="object dl-android"><?=$an_url?></div>
					<div class="object dl-qrcode"></div>
					<div class="object tiqu">
						<input type="text" name="phone" value="" placeholder="输入手机号立拿礼包">
						<span class="mybtn mybtn-qitqu" id="code1"></span>
					</div>
				</div>
			</div>
			<div id="content">
				<div id="contentWrapper" class="clearfix">
					<div id="sidebar">
						<div class="guanzhu-wx"></div>
						<div class="links">
						<?php 
						if(isset($xlwo_list)){
						?>
						<a href="<?=$xlwo_list['content']?>" target="_blank" class="sina"><?=$xlwo_list['title']?></a>
						<?php 
						}else{
						?>
						<a href="//weibo.com/huanxiangzhixin" target="_blank" class="sina">新浪微博</a>
						<?php 
						}
						
						?>
						
						<?php 
						if(isset($txwb_list)){
						?>
						<a href="<?=$txwb_list['content']?>" target="_blank" class="qq"><?=$txwb_list['title']?></a>
						<?php 
						}else{
						?>
						<a href="//t.qq.com/xin____2014" target="_blank" class="qq">腾讯微博</a>
						<?php 
						}
						
						?>
						
						<?php 
						if(isset($yxlt_list)){
						?>
						<a href="<?=$yxlt_list['content']?>" target="_blank" class="bbs"><?=$yxlt_list['title']?></a>
						<?php 
						}else{
						?>
						<a href="//bbs.uu.cc/forum-268-1.html" target="_blank" class="bbs">游戏论坛</a>
						<?php 
						}
						
						?>
						</div>
					</div>
					<div id="main">
						<div class="rows row1">
							<div class="img-show">
								<div class="swipeslide slider" data-slider="first">
									<div class="swipe">
										<div class="swipe-wrap">
										<?php 
										if(!empty($topData) && isset($topData['img_index_1'])){
											foreach ($topData['img_index_1'] as $k=>$v){
												$link = $v['small_link'] ? $v['small_link'] : $v['big_link'] ? $v['big_link'] : '#';
										?>
										<div class="item"><a href="<?=$link?>"><img src="<?=$HxzxUrl.$v['small_url']?>" alt=""></a></div>
										<?php 
											}
										}else{
										?>
										<div class="item"><a href="#"><img src="<?php echo $full_base_url ?>/img/img-show.png" alt=""></a></div>
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
							</div>
							<div class="newslist">
								<ul class="nav nav-tabs" data-tabtarget="newslist">
									<li class="active">全部</li>
									<li>活动</li>
									<li>新闻</li>
									<li>公告</li>
									<li data-redirectto="<?php echo $this->Base->getNewsUrl($topData['total'][0]['news_categories_id']);?>">+</li>
								</ul>
								<div class="newslist-main" data-tobeactive="newslist">
									<ul class="tab-content all active">
									<?php 
									if(!empty($topData['news'][0])){
									?>
									<li class="top"><a href="<?php echo $this->Base->getShowUrl($topData['news'][0]['id']);?>"><?=$topData['news'][0]['title']?></a></li>
									<?php 
									}
									?>
										<?php 
										if(!empty($total)){
											foreach ($total as $k=>$v){
										?>
										<li>
											<span class="type">[<?=$v['decription']?>]</span>
											<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
											<span class="time"><?=date("m/d",$v["created"])?></span>
										</li>
										<?php	
											}
										}
										?>
									</ul>
									<ul class="tab-content wrapper event">
										<?php 
										if(!empty($topData['activity'][0])){
										?>
										<li class="top"><a href="<?php echo $this->Base->getShowUrl($topData['activity'][0]['id']);?>"><?=$topData['activity'][0]['title']?></a></li>
										<?php 
										}
										?>
										<?php 
										if(!empty($topData['activity'])){
											foreach ($topData['activity'] as $k=>$v){
										?>
										<li>
											<span class="type">[<?=$v['decription']?>]</span>
											<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
											<span class="time"><?=date("m/d",$v["created"])?></span>
										</li>
										<?php	
											}
										}
										?>
									</ul>
									<ul class="tab-content wrapper news">
										<?php 
										if(!empty($topData['news'][0])){
										?>
										<li class="top"><a href="<?php echo $this->Base->getShowUrl($topData['news'][0]['id']);?>"><?=$topData['news'][0]['title']?></a></li>
										<?php 
										}
										?>
										<?php 
										if(!empty($topData['news'])){
											foreach ($topData['news'] as $k=>$v){
										?>
										<li>
											<span class="type">[<?=$v['decription']?>]</span>
											<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
											<span class="time"><?=date("m/d",$v["created"])?></span>
										</li>
										<?php	
											}
										}
										?>
									</ul>
									<ul class="tab-content wrapper notice">
										<?php 
										if(!empty($topData['consulting'][0])){
										?>
										<li class="top"><a href="<?php echo $this->Base->getShowUrl($topData['consulting'][0]['id']);?>"><?=$topData['consulting'][0]['title']?></a></li>
										<?php 
										}
										?>
										<?php 
										if(!empty($topData['consulting'])){
											foreach ($topData['consulting'] as $k=>$v){
										?>
										<li>
											<span class="type">[<?=$v['decription']?>]</span>
											<span class="title"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></span>
											<span class="time"><?=date("m/d",$v["created"])?></span>
										</li>
										<?php	
											}
										}
										?>
									</ul>
								</div>
							</div>
						</div>
						<div class="rows row2">
							<ul class="nav nav-tabs" data-tabtarget="renwuMain">
								<li class="active">职业介绍</li>
								<li>人物原画</li>
								<li>游戏截图</li>
							</ul>
							<div class="renwu-main clearfix" data-tobeactive="renwuMain">
								<div class="tab-content zhiye active">
									<div class="pic" data-tobeactive="zhiye">
										<img src="<?php echo $full_base_url ?>/img/fashi-pic1.png" alt="" class="active">
										<img src="<?php echo $full_base_url ?>/img/gjs-pic1.png" alt="" class="">
										<img src="<?php echo $full_base_url ?>/img/qishi-pic1.png" alt="" class="">
									</div>
									<div class="desc">
										<ul class="nav nav-tabs" data-tabtarget="zhiye">
											<li class="active">法师</li>
											<li>弓箭手</li>
											<li>骑士</li>
										</ul>
										<div class="desc-main" data-tobeactive="zhiye">
											<div class="tab-content fashi active">
												<h4>法师</h4>
												<p>法师以魔法、远程攻击为主，领悟各大魔法元素之力， 造成巨大伤害</p>
												<p>使用武器：法杖</p>
												<p>上手难度：
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
												</p>
												<ul class="jineng">
													<li>
														<img src="<?php echo $full_base_url ?>/img/fashi-diyuhuo.png" alt="">
														<p>地狱火</p>
													</li>
													<li>
														<img src="<?php echo $full_base_url ?>/img/fashi-yanlongdan.png" alt="">
														<p>炎龙弹</p>
													</li>
													<li>
														<img src="<?php echo $full_base_url ?>/img/fashi-yunshi.png" alt="">
														<p>陨石巨落</p>
													</li>
												</ul>
											</div>
											<div class="tab-content gongjian">
												<h4>弓箭手</h4>
												<p>以物理、远程攻击为主，暴击伤害高，使其措手不及。 </p>
												<p>使用武器：弓箭</p>
												<p>上手难度：
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
												</p>
												<ul class="jineng">
													<li>
														<img src="<?php echo $full_base_url ?>/img/gjs-cyj.png" alt="">
														<p>穿云箭</p>
													</li>
													<li>
														<img src="<?php echo $full_base_url ?>/img/gjs-jyfb.png" alt="">
														<p>箭雨风暴</p>
													</li>
													<li>
														<img src="<?php echo $full_base_url ?>/img/gjs-xsls.png" alt="">
														<p>迅矢连射</p>
													</li>
												</ul>
											</div>
											<div class="tab-content qishi">
												<h4>骑士</h4>
												<p>骑士以物理、近战攻击为主，血厚防高，拥有强力的 防守反击技能。 </p>
												<p>使用武器：长枪</p>
												<p>上手难度：
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
													<span class="star"><img src="<?php echo $full_base_url ?>/img/icon-star.png" alt=""></span>
												</p>
												<ul class="jineng">
													<li>
														<img src="<?php echo $full_base_url ?>/img/qishi-cz.png" alt="">
														<p>重斩</p>
													</li>
													<li>
														<img src="<?php echo $full_base_url ?>/img/qishi-qlp.png" alt="">
														<p>千裂破</p>
													</li>
													<li>
														<img src="<?php echo $full_base_url ?>/img/qishi-xfz.png" alt="">
														<p>旋风斩</p>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-content rwyh">
									<div id="carousel-rwyh-generic" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
									    <li data-target="#carousel-rwyh-generic" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-rwyh-generic" data-slide-to="1"></li>
									    <li data-target="#carousel-rwyh-generic" data-slide-to="2"></li>
									  </ol>
									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									  <?php 
									  if(!empty($topData['img_index_3'])){
									  	foreach ($topData['img_index_3'] as $k=>$v){
									  		$className = $k==0 ? 'class="item active"' : 'class="item"';
									  ?>
									  <div <?=$className?>>
									      <img src="<?=$HxzxUrl.$v['small_url']?>" alt="...">
									    </div>
									  <?php 
									  	}
									  }
									  ?>
									  </div>
									</div>
								</div>
								<div class="tab-content yxjt">
									<div id="carousel-yxjt-generic" class="carousel slide" data-ride="carousel">
									  <!-- Indicators -->
									  <ol class="carousel-indicators">
									  <?php 
									  if(!empty($topData['img_index_2'])){
									  	foreach ($topData['img_index_2'] as $k=>$v){
									  		$className = $k==0 ? 'class="active"' : '';
									  ?>
									  <li data-target="#carousel-yxjt-generic" data-slide-to="<?=$k?>" <?=$className?>></li>
									  <?php 
									  	}
									  }
									  ?>
									  </ol>
									  <!-- Wrapper for slides -->
									  <div class="carousel-inner" role="listbox">
									  <?php 
									  if(!empty($topData['img_index_2'])){
									  	foreach ($topData['img_index_2'] as $k=>$v){
									  		$className = $k==0 ? 'class="item active"' : 'class="item"';
									  ?>
									  <div <?=$className?>>
									      <img src="<?=$HxzxUrl.$v['small_url']?>" alt="...">
									    </div>
									  <?php 
									  	}
									  }
									  ?>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include '_footer.ctp' ?>
			</div>
		</div>
		<script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
		<script src="<?php echo $full_base_url ?>/js/jquery-2.0.0.js"></script>
		<script src="<?php echo $full_base_url ?>/js/carousel.js"></script>
		<script src="<?php echo $full_base_url ?>/js/swipe.js"></script>
		<script src="<?php echo $full_base_url ?>/js/main.js"></script>
		<script src="<?php echo $full_base_url ?>/js/cookie.js"></script>
		<script>
		$(function(){
			$(".dl-ios").click(function(){
				alert('ios还在紧张开发中=￣ω￣=!关注公众号hxzx1024获得最新消息哟！');
			});
			$(".dl-android").click(function(){
				alert('1月20号开放下载，敬请期待！');
			});



			$('[data-slider]').each(function(index, el) {
                var $this = $(el),
                    $swiper = $this.find('.swipe'),
                    $pages = $this.find('.pagination');
                var delay = 5000;
                var mySlider = Swipe($swiper[0], {
                  auto: 5000,
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
                $this.on('click', '[data-action]', function(ev){
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
                window.mySlider = mySlider;

                var autoInterval;
                $pages.find('li').on('click', function(e){
                	var $this = $(this);
                	var i = $this.index();
                	clearInterval(autoInterval);
                	mySlider.slide(i);
                	autoInterval = setInterval(function(){
                		mySlider.next();
                	}, delay);
                })
            });
		})
		//手机验证码
		$("#code1").click(function(){
        var phone = $("input[name=phone]").val();
        var oldphone = $.cookie("phone");
        if(phone == oldphone){
			alert("请不要重复领取！");
			return false;
			}
        if(phone && phone.length == 11){
            $.ajax({
                type:"POST",
                url:"Online/send_phone_code",
                data:{site_id:<?=$site_id?>, phone:phone,code_id:54},
                dataType:"json",
                success:function(res){
                    //开始发送短信
                    var t = 59;
                    var ele = $("#code1");
                    ele.attr("disabled","disabled");
                    //ele.html("60");
                    tid = setInterval(function(){
                        if(t == 0){
                            clearInterval(tid);
                            ele.removeAttr("disabled");
                            //ele.html("重新获取");
                        }else{
                            //ele.html(t);
                            t--;
                        }
                    },1000);
                    $.cookie("phone",phone);
                    alert('礼包已经发送到您的手机，请注意查收');
                }
            });
        }else{
            alert("请输入11位手机号码");
            return false;
        }
    })
		</script>
	</body>
</html>
