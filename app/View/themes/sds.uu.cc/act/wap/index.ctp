<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$this->Website->init();
?>
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title>圣斗士星矢专题</title>
<link href="<?php BASE_URL() ?>act/wap/css/index.css?v=20160510.css" rel="stylesheet" type="text/css" />
<link href="<?php BASE_URL() ?>act/wap/css/swiper.min.css" rel="stylesheet" type="text/css" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/bj.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/bj2.gif" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/logo.png" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/p1.jpg" />
<link rel="prefetch" href="<?php BASE_URL() ?>act/wap/images/p2.jpg" />
<link rel="prefetch" href="" />
<link rel="prefetch" href="" />
<link rel="prefetch" href="" />
<link rel="prefetch" href="" />
</head>

<body>
<div id="container">
   <section class="content">
       <header>
            <img src="<?php BASE_URL() ?>act/wap/images/logo.png" width="253" height="101" /> 
       </header>
       <section class="part1">
            <img src="<?php BASE_URL() ?>act/wap/images/p11.jpg" width="580" height="424" />
            <img src="<?php BASE_URL() ?>act/wap/images/p21.jpg" width="580" height="374" />
            <a href="//sds.uu.cc/act/2" class="wybm"></a>
       </section>
       <section class="part2">
             <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-src="//dl.ldzw.gxpan.cn/site/video/ldzwPV.mp4"><a href="javascript:;"><img src="<?php BASE_URL() ?>act/wap/images/list1.png" /></a></div>
                    <div class="swiper-slide" data-src="//dl.uu.cc/download/2.mp4"><a href="javascript:;"><img src="<?php BASE_URL() ?>act/wap/images/list1.png" /></a></div>
                    <div class="swiper-slide" data-src="//dl.ldzw.gxpan.cn/site/video/ldzwPV.mp4"><a href="javascript:;"><img src="<?php BASE_URL() ?>act/wap/images/list1.png" /></a></div>
                </div>
             </div>
             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
       </section>
       <section class="part3 part">
           <h1>招募流程<span>PROCESS</span></h1>
           <img src="<?php BASE_URL() ?>act/wap/images/zm.png" width="520" height="461" />
       </section>
       <section class="part4 part">
           <h1>大师特权<span>PRIVILEGE</span></h1>
           <ul>
              <li><span></span><p><strong>永久VIP资格</strong>一旦成功加入玩家大师团，即可在游戏内享受永久VIP资格</p></li>
              <li><span></span><p><strong>大师专属福利</strong>成为玩家大师后，在游戏中将获得永久专属称号、专属时装，更有圣斗士星矢限量周边放送</p></li>
              <li><span></span><p><strong>游戏开屏感谢名单</strong>一旦成功加入玩家大师团，我们将会把玩家大师的名字加入游戏开始闪屏的感谢名单中，让广大玩家都看到玩家大师的名字</p></li>
           </ul>
       </section>
       <section class="part5 part">
           <h1>大师职责<span>DUTY</span></h1>
           <ul>
              <li><span></span><p><strong>分享圣斗士星矢知识</strong>帮助我们更好地还原圣斗士星矢的方方面面</p></li>
              <li><span></span><p><strong>提交游戏改进建议</strong>体验圣斗士星矢3D游戏，和我们一起为游戏策划更多的新玩法！</p></li>
              <li><span></span><p><strong>参与内部体验调研</strong>参与游戏的内部体验调研，帮助我们更好地收集玩家们的反馈</p></li>
           </ul>
       </section>
       <section class="part6 part">
           <h1>圣迷排行<span>RANKING LIST</span></h1>
           <table border="0" cellspacing="0">
               <thead>
                  <th width="100">排名</th>
                  <th width="100">头像</th>
                  <th width="130">用户名</th>
                  <th width="100">测试分数</th>
                  <th width="130">阅读</th>
               </thead>
               <?php 
               $class = array(0 => 'one',1 => 'two',2 => 'three');
               for ($i=0;$i<5;$i++):
               ?>
               
               <?php if ($i < 3):?>
               <tbody class="<?php echo $class[$i];?>">
                   <tr>
                       <td><?php echo $i+1;?></td><td><img src="//sds.uu.cc/uploads/sds.uu.cc/<?php echo $list[$i]['act_sds']['icon'];?>" width="70" height="70" /></td><td><?php echo $list[$i]['act_sds']['name'];?></td><td><?php echo $list[$i]['act_sds']['score'];?></td><td><a href="javascript:;" class="reader">点击阅读</a></td>
                       
                   </tr>
                   <tr>
                       <td colspan="5"><p class="decr"><?php echo $list[$i]['act_sds']['story'];?></p></td>
                   </tr>
               </tbody>
               <?php else :?>
               <tbody>
                   <tr>
                       <td><?php echo $i+1;?></td><td><img src="//sds.uu.cc/uploads/sds.uu.cc/<?php echo $list[$i]['act_sds']['icon'];?>" width="70" height="70" /></td><td><?php echo $list[$i]['act_sds']['name'];?></td><td><?php echo $list[$i]['act_sds']['score'];?></td><td><a href="javascript:;" class="reader">点击阅读</a></td>
                       
                   </tr>
                   <tr>
                       <td colspan="5"><p class="decr"><?php echo $list[$i]['act_sds']['story'];?></p></td>
                   </tr>
               </tbody>
               <?php endif;?>
               
               
               <?php endfor;?>
               
           </table>
       </section>
    
   </section>
   
   <footer><img src="<?php BASE_URL() ?>act/wap/images/footer.jpg" width="640" height="264" /></footer>
</div>
<!--  视频框 -->
<div class="zhezao"></div>
<div class="video_tk">
   <a class="close" href="javascript:;"><img src="<?php BASE_URL() ?>act/wap/images/close.jpg" width="66" height="66" /></a>
   <strong class="v_title">某某某<em>-明星圣迷</em></strong>
   <p>我是内容我是内容我是内是内容我是内容我是是内容我是内容我是是内容我是内容我是是内容我是内容我是是内容我是内容我是容</p>
   <div class="video_sp"></div>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>act/wap/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>act/wap/js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 2,
        slidesPerColumn:1,
        paginationClickable: true,
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0
    });
</script>
<script type="text/javascript">
$(function(){
	$('.reader').on('click',function(){
		$(this).parents('tbody').find('tr').eq(1).show().end().parents('tbody').siblings().find('p').parents('tr').hide();
	})
	
	$('.swiper-wrapper div').each(function(i){
		var v_src = $(this).attr('data-src');	
		$(this).on('click',function(){
		   $('.video_sp').append('<video src="'+v_src+'" controls="controls" width="550" height="300"></video>'); 	
		   $('.zhezao').show();
		   $('.video_tk').show();
		   	
		})
		
	})
	
	$('.close, .zhezao').on('touchstart',function(){
	    $('.video_tk').hide();
		$('.zhezao').hide();
		$('.video_sp').empty();
	})
})
</script>
</body>
</html>
