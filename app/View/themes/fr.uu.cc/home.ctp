<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once "include.php";

$base_path = "//fr.uu.cc/fr.uu.cc/";

$datas =  $this->Frxxz->newsInitData($page,334);
$consulting1 = $datas['consulting'];

$datas =  $this->Frxxz->newsInitData($page,335);
$consulting2 = $datas['consulting'];

$datas =  $this->Frxxz->newsInitData($page,336);
$consulting3 = $datas['consulting'];


$config_data = $this->Frxxz->getConfigData();
$tuijian = $this->Frxxz->getTuijian();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php echo $base_path; ?>css/index.css?v=170718" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $base_path; ?>favicon.ico" />
<script src="<?php echo $base_path; ?>js/jquery-1.8.0.min.js" type="text/javascript"></script>
</head>

<body>
<div id="container">
<!--   <div id="video_bj">
         <video id="video_bj_m" autoplay width="1920" loop  height="1680"  src="<?php echo $base_path; ?>images/fr.mp4"></video>
   </div>-->
   <div id="con_main">
   <div id="header">
       <a href="/" class="logo"><img src="<?php echo $base_path; ?>images/logo.png" width="230" height="93" /></a>
       <ul class="nav">
           <a class="on" href="//fr.uu.cc/home"><em>HOME</em>首 页</a><span>/</span>
           <a href="//fr.uu.cc/news/98.html"><em>NEWS</em>新闻资讯</a><span>/</span>
           <a href="//fr.uu.cc/game_data/334.html"><em>GAME DATA</em>游戏资料</a><span>/</span>
           <a href="<?php echo $config_data['other']['forum_url']; ?>"><em>BBS</em>官方论坛</a>
       </ul>
   </div>
   
   <div id="bander">
       <a href="javascript:;" data-src="<?php echo $config_data['other']['index_video_url']; ?>" class="video_click"></a>
       <div class="down_lb">
          <span class="ewm"><img width="110" src="<?php echo $config_data['other']['game_download_qrcode']; ?>"></span>
          <p class="down">
             <a href="<?php echo stripslashes($config_data['other']['android_download_url']); ?>" class="az"><img src="<?php echo $base_path; ?>images/down_az.png" width="171" height="60" /></a>
             <a href="<?php echo stripslashes($config_data['other']['ios_download_url']); ?>" class="ios"><img src="<?php echo $base_path; ?>images/down_ios.png" width="171" height="60" /></a>
          </p>
          <p class="lb">
              <a href="javascript:;">
                 <img class="fu" src="<?php echo $base_path; ?>images/gift_icon.png" width="85" height="87" />
                 <img src="<?php echo $base_path; ?>images/lqfl.png" width="105" height="44" />
              </a>
          </p>
       </div>
   </div>
   
   <div id="lunbo_new">
       <div class="lunbo">
           <ul id="list">
           <?php $total = count($topData['tu_news']); if (!empty($topData['tu_news'])): ?>
	       <?php foreach($topData['tu_news'] as $k => $v): ?>
	       <?php if ($k == 0): ?>
	       <li style="display:block;opacity:1;"><a href="<?php echo $v["str2"]; ?>"><img width="640" height="320" src="<?php echo $v["str1"]; ?>" /></a></li>
	       <?php else: ?>
	       <li><a href="<?php echo $v["str2"]; ?>"><img width="640" height="320" src="<?php echo $v["str1"]; ?>" /></a></li>
	       <?php endif; ?>
	       <?php endforeach;?>
	       <?php endif;?>
           </ul>
           <ul id="bar">
             <span style="background:#00b4ff;"></span>
             <span></span>
             <span></span>
             <span></span>
           </ul>
       </div>
       
       <div class="new">
          <p class="lanmu">
              <span href="#" class="on_bj">最新</span>
              <span href="#">新闻</span>
              <span href="#">公告</span>
              <span href="#">活动</span>
              <span href="#">攻略</span>
              <a href="//fr.uu.cc/news/98.html" target="_blank" class="more"><img src="<?php echo $base_path; ?>images/more_icon.png" width="16" height="16" /></a>
           </p>
           <div class="message">
           
           <?php 
             $cate_class = array(
             	'331' => 'new_gg','330' => 'new_xw','333' => 'new_gl','332' => 'new_hd'
             );
             $cate_names = array('331' => '公告','330' => '新闻','333' => '攻略','332' => '活动');
             ?>
           
             <ul id="z_x" style="display:block">
             		<?php if (!empty($topData['total'])):?>
					<?php foreach ($topData['total'] as $k => $v): ?>
					<li><strong class="<?php 
					$cate_name = get_category_name($v['news_categories_id']);
					if (!isset($cate_names[$v['news_categories_id']])) {
						$cate_name = '资料';		
					}
					if (isset($cate_class[$v['news_categories_id']])) {
						echo $cate_class[$v['news_categories_id']];
					} else {
						echo 'new_gg';
					}
					
					 ?>"><?php echo $cate_name; ?></strong><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
               
             </ul>
             <ul id="g_g">
             <?php if (!empty($topData['news'])):?>
					<?php foreach ($topData['news'] as $k => $v): ?>
					<li><strong class="<?php 
					$cate_name = get_category_name($v['news_categories_id']);
					if (!isset($cate_names[$v['news_categories_id']])) {
						$cate_name = '资料';		
					}
					if (isset($cate_class[$v['news_categories_id']])) {
						echo $cate_class[$v['news_categories_id']];
					} else {
						echo 'new_gg';
					}
					
					 ?>"><?php echo $cate_name; ?></strong><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
               
             </ul>
             <ul id="x_w">
             <?php if (!empty($topData['gong_gao'])):?>
					<?php foreach ($topData['gong_gao'] as $k => $v): ?>
					<li><strong class="<?php 
					$cate_name = get_category_name($v['news_categories_id']);
					if (!isset($cate_names[$v['news_categories_id']])) {
						$cate_name = '资料';		
					}
					if (isset($cate_class[$v['news_categories_id']])) {
						echo $cate_class[$v['news_categories_id']];
					} else {
						echo 'new_gg';
					}
					
					 ?>"><?php echo $cate_name; ?></strong><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
             </ul>
             <ul id="h_d">
             <?php if (!empty($topData['huo_dong'])):?>
					<?php foreach ($topData['huo_dong'] as $k => $v): ?>
					<li><strong class="<?php 
					$cate_name = get_category_name($v['news_categories_id']);
					if (!isset($cate_names[$v['news_categories_id']])) {
						$cate_name = '资料';		
					}
					if (isset($cate_class[$v['news_categories_id']])) {
						echo $cate_class[$v['news_categories_id']];
					} else {
						echo 'new_gg';
					}
					
					 ?>"><?php echo $cate_name; ?></strong><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
             </ul>
             <ul id="g_l">
             <?php if (!empty($topData['gong_lue'])):?>
					<?php foreach ($topData['gong_lue'] as $k => $v): ?>
					<li><strong class="<?php 
					$cate_name = get_category_name($v['news_categories_id']);
					if (!isset($cate_names[$v['news_categories_id']])) {
						$cate_name = '资料';		
					}
					if (isset($cate_class[$v['news_categories_id']])) {
						echo $cate_class[$v['news_categories_id']];
					} else {
						echo 'new_gg';
					}
					
					 ?>"><?php echo $cate_name; ?></strong><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" target="_blank"><?php echo $v['title'];?></a><span><?php echo date("m/d",$v['updated']);?></span></li>
					<?php endforeach;?>
                	<?php endif;?>
             </ul>
           </div>
      </div>
   </div>
   
   <div id="show">
   <!--
      <ul>
      
      <?php /* if (!empty($topData['tu_shan'])):?>
					<?php foreach ($topData['tu_shan'] as $k => $v): ?>
					
					<li<?php if ($k == 0) echo ' class="active"'; ?>>
		                <span class="bg<?php echo $k; ?>"></span>
		                <img src="<?php echo $v['str1']; ?>" />
		            </li>
					
					
					<?php endforeach;?>
					<?php endif; */?>
           
       </ul>
       -->
       
       <div class="slide">
            <ul class="clearfix">
                <li class="p1 cur">
                    <span style="display:none;"></span>
                    <img src="<?php echo $base_path; ?>images/slide1.jpg" width="640" alt="">
                </li>
                <li class="p2">
                    <span></span>
                    <img src="<?php echo $base_path; ?>images/slide2.jpg" width="640" alt="">
                </li>
                <li class="p3">
                    <span></span>
                    <img src="<?php echo $base_path; ?>images/slide3.jpg" width="640" alt="">
                </li>
                <li class="p4">
                    <span></span>
                    <img src="<?php echo $base_path; ?>images/slide4.jpg" width="640" alt="">
                </li>
                <li class="p5">
                    <span></span>
                    <img src="<?php echo $base_path; ?>images/slide5.jpg" width="640" alt="">
                </li>
        	</ul>
        </div>
   </div>
   
   <div id="show2">
      <div class="main">
         <ul class="rw_list">
            <li style="display:block" class="active">
               <span class="img_l"><img src="<?php echo $base_path; ?>images/rw_1ist1_l.png" width="438" height="513" />
                 <a href="javascript:;" class="rw_l_left" data-img="<?php echo $base_path; ?>images/rw_1ist1_l_1.png"></a>
                 <a href="javascript:;" class="rw_l_right" data-img="<?php echo $base_path; ?>images/rw_1ist1_l_.png"></a>
                 <p class="rw_l_photo"><img src="<?php echo $base_path; ?>images/rw_1ist1_l_.png"  /></p>
               </span>
               <span class="img_r"><img src="<?php echo $base_path; ?>images/rw_1ist1_r.png" width="549" height="582" /></span>
               
            </li>
            <li>
               <span class="img_l"><img src="<?php echo $base_path; ?>images/rw_1ist2_l.png" width="438" height="513" />
                  <a href="javascript:;" class="rw_l_left" data-img="<?php echo $base_path; ?>images/rw_1ist2_l_1.png"></a>
                  <a href="javascript:;" class="rw_l_right" data-img="<?php echo $base_path; ?>images/rw_1ist2_l_.png"></a>
                  <p class="rw_l_photo"><img src="<?php echo $base_path; ?>images/rw_1ist2_l_.png"  /></p>
               </span>
               <span class="img_r"><img src="<?php echo $base_path; ?>images/rw_1ist2_r.png" width="549" height="582" /></span>
            </li>
            <li>
               <span class="img_l"><img src="<?php echo $base_path; ?>images/rw_1ist3_l.png" width="438" height="513" />
                   <a href="javascript:;" class="rw_l_left" data-img="<?php echo $base_path; ?>images/rw_1ist3_l_1.png"></a>
                   <a href="javascript:;" class="rw_l_right" data-img="<?php echo $base_path; ?>images/rw_1ist3_l_.png"></a>
                   <p class="rw_l_photo"><img src="<?php echo $base_path; ?>images/rw_1ist3_l_.png"  /></p>
               </span>
               <span class="img_r"><img src="<?php echo $base_path; ?>images/rw_1ist3_r.png" width="549" height="582" /></span>
            </li>
            <li>
               <span class="img_l"><img src="<?php echo $base_path; ?>images/rw_1ist4_l.png" width="438" height="513" />
                   <a href="javascript:;" class="rw_l_left" data-img="<?php echo $base_path; ?>images/rw_1ist4_l_1.png"></a>
                   <a href="javascript:;" class="rw_l_right" data-img="<?php echo $base_path; ?>images/rw_1ist4_l_.png"></a>
                   <p class="rw_l_photo"><img src="<?php echo $base_path; ?>images/rw_1ist4_l_.png"  /></p>
               </span>
               <span class="img_r"><img src="<?php echo $base_path; ?>images/rw_1ist4_r.png" width="549" height="582" /></span>
            </li>
         </ul>
         <ul class="rw_bar">
            <a class="rw1" href="javascript:;"></a>
            <a class="rw2" href="javascript:;"></a>
            <a class="rw3" href="javascript:;"></a>
            <a class="rw4" href="javascript:;"></a>
         </ul>
      </div>
   </div>
   
   <div id="zl_mt">
       <div class="yxzl">
           <h1></h1>
           <div class="yx_contain">
              <h2>新手入门</h2>
              <ul>
                 <?php foreach($consulting1 as $k=>$v):?>
	              <li <?php if ($k == 0) echo 'class="no"'; ?>><a href="//fr.uu.cc/show/<?php echo $v['id'];?>.html"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
              </ul>
              <h2>高手进阶</h2>
              <ul>
                 <?php foreach($consulting2 as $k=>$v):?>
	              <li <?php if ($k == 0) echo 'class="no"'; ?>><a href="//fr.uu.cc/show/<?php echo $v['id'];?>.html"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
              </ul>
              <h2>特色系统</h2>
              <ul>
                 <?php foreach($consulting3 as $k=>$v):?>
	              <li <?php if (($k+1)%5 == 1) echo 'class="no"'; ?>><a href="//fr.uu.cc/show/<?php echo $v['id'];?>.html"><?php echo $v['title'];?></a></li>
	              <?php endforeach; ?>
              </ul>
           </div>
       </div>
       <div class="mtzq">
           <h1></h1>
           <div class="mt_contain">
                <ul class="mt_bar">
                    <a class="on_bj" href="javascript:;">18183</a>
                    <a href="javascript:;">优游网</a>
                    <a href="javascript:;">游戏狗</a>
                    <a href="javascript:;">安趣网</a>
                    <a href="javascript:;">着迷网</a>
                    <a href="javascript:;">游戏多</a>
                </ul>
                <div class="bar_m">
                     <ul style="display:block;">
                       <!--
                       <p>
                       <img  src="<?php echo $topData['tu_business'][0]['str1']; ?>" width="470" height="115" />
                       </p>
                       <li><a href="#"><img src="<?php echo $base_path; ?>images/li_style.gif">我是新闻我是新闻我是新闻</a><span class="time">01/27</span></li>
                       <li><a href="#"><img src="<?php echo $base_path; ?>images/li_style.gif">我是新闻我是新闻我是新闻</a><span class="time">01/27</span></li>
                       <li><a href="#"><img src="<?php echo $base_path; ?>images/li_style.gif">我是新闻我是新闻我是新闻</a><span class="time">01/27</span></li>
                       <li><a href="#"><img src="<?php echo $base_path; ?>images/li_style.gif">我是新闻我是新闻我是新闻</a><span class="time">01/27</span></li>
                       <li><a href="#"><img src="<?php echo $base_path; ?>images/li_style.gif">我是新闻我是新闻我是新闻</a><span class="time">01/27</span></li>
                       -->
                       <iframe scrolling="no" width='100%' height='356'  frameborder='0' src='http://www.18183.com/api/temone/?typeid=17539'></iframe>
                     </ul>
                     <ul>
                       <iframe scrolling="no" width='100%' height='356'  frameborder='0' src='http://qt.yoyou.com/frxxz/61.html'></iframe>
                     </ul>
                     <ul>
                     	<iframe scrolling="no" width='100%' height='356'  frameborder='0' src='http://pcapi.gamedog.cn/qianru/fanrenxiuxian.html'></iframe>
                     </ul>
                     <ul>
                     	<iframe scrolling="no" width='100%' height='356'  frameborder='0' src='http://api.anqu.com/embed/frxxz/'></iframe>
                     </ul>
                     <ul>
                     	<iframe scrolling="no" width='100%' height='356'  frameborder='0' src='http://www.joyme.com/news/fr/index.html'></iframe>
                     </ul>
                     <ul>
                     	<iframe scrolling="no" width='100%' height='356'  frameborder='0' src='http://www.youxiduo.com/mtzq/mtzq.html'></iframe>
                     </ul>
                </div>
           </div>
       </div>
   </div>
   
   <div id="xjtj">
      <h1></h1>
      <div class="xj_container xj_c_more">
          <a href="//fr.uu.cc/images/6/1.html" class="c_more"><img src="<?php echo $base_path; ?>images/xj_more.png" width="78" height="16" /></a>
          <ul class="xj_bar">
             <a href="//fr.uu.cc/images/6/1.html" class="on_bj">游戏截图</a>
             <a href="//fr.uu.cc/vedio/1.html">精彩视频</a>
             <a href="//fr.uu.cc/images/10/1.html">玩家美照</a>
             <a href="//fr.uu.cc/images/11/1.html">壁纸</a>
          </ul>
          <div class="bar_x">
             <ul id="jietu" style="display:block">
             
             <?php $total = count($topData['imgs2']); if (!empty($topData['imgs2'])): ?>
                	<?php foreach($topData['imgs2'] as $k => $v): ?>
                	<li data-img="<?php echo $v['str1'];?>"><a id="scale" href="javascript:;"><img src="<?php echo $v['str1'];?>" width="265"  /></a><span><?php echo $v['label'];?></span><strong></strong></li>
                	<?php endforeach; ?>
                	<?php endif; ?>
             </ul>
             <ul id="video_list">
             <?php $total = count($topData['vedio']); if (!empty($topData['vedio'])): ?>
                	<?php foreach($topData['vedio'] as $k => $v): ?>
                	<li data-src="<?php echo $v['str2'];?>"><a id="scale" href="javascript:;"><img src="<?php echo $v['str1'];?>" width="265" ></a><span><?php echo $v['label'];?></span><strong class="sp"></strong></li>
                	<?php endforeach; ?>
                	<?php endif; ?>
             </ul>
             <ul id="meizhao">
             <?php $total = count($topData['tu1']); if (!empty($topData['tu1'])): ?>
                	<?php foreach($topData['tu1'] as $k => $v): ?>
                	<li data-img="<?php echo $v['str1'];?>"><a id="scale" href="javascript:;"><img src="<?php echo $v['str1'];?>" width="265"  /></a><span><?php echo $v['label'];?></span><strong></strong></li>
                	<?php endforeach; ?>
                	<?php endif; ?>
             </ul>
               
             </ul>
             <ul id="bizhi">
             <?php $total = count($topData['tu2']); if (!empty($topData['tu2'])): ?>
                	<?php foreach($topData['tu2'] as $k => $v): ?>
                	<li data-img="<?php echo $v['str1'];?>"><a id="scale" href="javascript:;"><img src="<?php echo $v['str1'];?>" width="265"  /></a><span><?php echo $v['label'];?></span><strong></strong></li>
                	<?php endforeach; ?>
                	<?php endif; ?>
             </ul>
               
             </ul>
          </div>
      </div>
   </div>
   
   	<?php require_once 'footer.ctp';?>
   
</div>

<div id="lightbox">
   <a href="javascript:;" class="close_sp"><img src="<?php echo $base_path; ?>images/close_sp.png" width="43" height="43" /></a>
   <div id="list">
       <div class="box_tp" id="box_tp1">
          <img src="" />
          <a href="javascript:;" class="pre pre1"></a>
          <a href="javascript:;" class="next next1"></a>
       </div>
       <div class="box_tp" id="box_tp2">
          <img src="" />
          <a href="javascript:;" class="pre pre2"></a>
          <a href="javascript:;" class="next next2"></a>
       </div>
       <div class="box_tp" id="box_tp3">
          <img src="" />
          <a href="javascript:;" class="pre pre3"></a>
          <a href="javascript:;" class="next next3"></a>
       </div>
   </div>
</div>


<div class="zhezao"></div>
<div class="video_tk">
  <a href="javascript:;" class="close"><img src="<?php echo $base_path; ?>images/close.png" width="54" height="54" /></a>
  <video id="video_sp" width="700" style="background:#000;" height="400"  poster="" controls="" src="http://dl.cqb.gxpan.cn/upgrade/CG/fanren.mp4">您的浏览器不支持 video 标签。</video>
</div>

<div class="fuli">
  <a href="javascript:;" class="close2"><img src="<?php echo $base_path; ?>images/close2.png" width="43" height="43"></a>
  <p class="check">
     <span class="ck_pt">
        <a href="javascript:;" class="az_c dq">安卓</a>
        <a href="javascript:;" class="ios_c dq">ios</a>
     </span>
     <input type="text" id="shuru" value="请输入手机号码" />
     <a href="javascript:;" class="yy"><img src="<?php echo $base_path; ?>images/yy.jpg" width="191" height="60" /></a>
  </p>
</div>

<div id="f_right">
    
    <div class="f_r_main">
       <a href="<?php echo $config_data['other']['weibo_url']; ?>" class="weibo"></a>
       <a href="<?php echo $config_data['other']['baidu_tieba_url']; ?>" class="tieba"></a>
       <a href="<?php echo $config_data['other']['forum_url']; ?>" class="luntan"></a>
       <a href="javascript:alert('敬请期待！')" target="_blank" class="pcGame"></a>
       <a href="#" class="back_top" id="back_top"></a>
    </div>
    <a href="javascript:;" class="f_r_click"><img src="<?php echo $base_path; ?>images/float_right_click.jpg" width="22" height="62" /></a>
</div>

</body>
<!--
<script type="text/javascript" src="<?php echo $base_path; ?>js/zns_script.js"></script>
-->
<script>
var speed=10;
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
</script>

<script>
$(function(){
	var k = 0;
	var length_jt = $('#jietu li').length;
	var length_mz = $('#meizhao li').length;
	var length_bz = $('#bizhi li').length;
	
	xjtj_tab('#jietu li',length_jt,'#box_tp1');
	xjtj_tab('#meizhao li',length_mz,'#box_tp2');
	xjtj_tab('#bizhi li',length_bz,'#box_tp3');
	$('.next1').on('click',function(){
		next('#jietu li',length_jt);
	})
	$('.pre1').on('click',function(){
		pre('#jietu li',length_jt);
	})
	$('.next2').on('click',function(){
		next('#meizhao li',length_mz);
	})
	$('.pre2').on('click',function(){
		pre('#meizhao li',length_mz);
	})
	$('.next3').on('click',function(){
		next('#bizhi li',length_bz);
	})
	$('.pre3').on('click',function(){
		pre('#bizhi li',length_bz);
	})
	
	function xjtj_tab(tab_title,length,id_dq){
		$(tab_title).each(function(e){
			$(this).on('click',function(){
			   var data_img = $(this).attr('data-img');	
			   $('.box_tp img').attr('src',data_img);
			   $('.zhezao').show();	
			   $('#lightbox').show();
			   $(id_dq).show();	
			   dq_p();
			   k = e;
			   k_dq(length);
			})
			
	    })
	}

	function dq_p(){
		   var img = new Image();
		   img.src = $('.box_tp img').attr('src');
		   var img_width = img.width;
		   if(img_width > 700){
			   img_width = 700;
			   $('.close_sp').css('right','-5px'); 
		   }else{
			   $('.close_sp').css('right',(695-img_width)/2); 
		   }
		   $('.box_tp').css('width',img_width);	
	}
    
	function next(id,length){
		if(k<length-1){
			var tt = $(id).eq(k+1).attr('data-img');
			$('.box_tp img').attr('src',tt);
			k++;
			dq_p();
			k_dq(length);
		}
    } 
    function pre(id,length){
		if(k>0){
			var tt = $(id).eq(k-1).attr('data-img');
			$('.box_tp img').attr('src',tt);
			k--;
			dq_p();
			k_dq(length);
		}
	}
	
	function k_dq(length){
		if(k == 0){
			  $('.pre').css('opacity','0'); 
			  $('.next').css('opacity','1');
		   }else if(k == length-1){
			  $('.next').css('opacity','0');
			  $('.pre').css('opacity','1'); 
		   }else{
			  $('.pre').css('opacity','1');
			  $('.next').css('opacity','1');
		}
	}
	
	$('.close_sp').on('click',function(){
		$('.zhezao').hide();
		$('#lightbox').hide();
		$('#list div').hide();
		k = 0;
	})
	
    //视频弹框
	video('.video_click');
	video('#video_list li');
	function video(videoName){
		var myVideo=document.getElementById("video_sp");
		$(videoName).on('click',function(){
			var data_src = $(this).attr('data-src');
			$('.zhezao').show();
			$('.video_tk').show();
			$('#video_sp').attr('src',data_src);
			myVideo.currentTime = 0;
			myVideo.play();
	    })		
	}

	$('.close').on('click',function(){
		$('.zhezao').hide();
		$('.video_tk').hide();
		myVideo.pause();
		
	})
	
	$('.close2').on('click',function(){
	    $('.zhezao').hide();
		$('.fuli').hide();	
	})
	
	//轮播事件
	show(0);
	var i = 0;
	var len = $('#list li').length;
	function show(i){
		$('#bar span').eq(i).css({'background':'#ff0000','width':'25px','border-radius':'25px'}).siblings().css({'background':'#fff','width':'10px','border-radius':'50%'});
		$('#list li').eq(i).fadeIn(1000).siblings().fadeOut(1000);
		i++;
		mytime = setTimeout(
		function(){
				show(i);
				if(i == len){
					i = 0;show(i);
					}
		},5000)
	}
		
    $('#bar span').each(function(i){
		$(this).hover(function(){
			$('#bar span').eq(i).css({'background':'#ff0000','width':'25px','border-radius':'25px'}).siblings().css({'background':'#fff','width':'10px','border-radius':'50%'});
			$('#list li').eq(i).fadeIn(1000).siblings().fadeOut(1000);
			if(mytime){clearTimeout(mytime);}
		},
	    function(){
			show(i);
		})
	})
	
	//新闻切换
	
	tab('.lanmu span','.message > ul');
	tab('.mt_bar a','.bar_m > ul');
	tab('.xj_bar a','.bar_x > ul');
	function tab(name,keyname){
		$(name).each(function(i) {
        $(this).hover(function(){
			$(this).addClass('on_bj').siblings().removeClass('on_bj');
			$(keyname).eq(i).show().siblings().hide();
			})
        });
	}
	
	
	//人物展示事件
	$('.rw_bar a').each(function(i){   //
		 $(this).on('click',function(){
			$(this).css('background-position','-117px -'+i*140+'px').siblings().css('background-position-x','0');
		    $('.rw_list li').eq(i).addClass('active').show().siblings().removeClass('active').hide();;	 
		 })
	})
	
	//预约事件
	$('.lb').on('click',function(){
		$('.zhezao').show();
	    $('.fuli').show();	
	})
	
	$('.ck_pt a').on('click',function(){
	    $(this).addClass('dq').siblings().removeClass('dq');	
	})
	
	$('#shuru').focus(function(){
	   	$(this).val('');
	})
	
	
	var phone;
	var myreg = /^1[34578]\d{9}$/;
    $('.yy').click(function(){
		phone = $('#shuru').val();
		if($('.ios_c').is('.dq')){
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
	
	
	
	//回到顶部
	back_top.onclick = function(){
       document.body.scrollTop = document.documentElement.scrollTop = 0;
	}
	
	//右侧浮动框
	$('.f_r_click').toggle(function(){
		$('#f_right').css('right','-142px');
		$(this).find('img').css('transform','rotate(180deg)')
	},function(){
	    $('#f_right').css('right','0');
		$(this).find('img').css('transform','rotate(0deg)')
	})
	
	$('.hezuo').hover(function(){
		$('.bar_hz').show();
	},function(){
		$('.bar_hz').hide();
	})
	
	rw_js('.rw_l_left');
	rw_js('.rw_l_right');
	function  rw_js(click_id){
		$(click_id).on('click',function(){
	        var data_img = $(this).attr('data-img');
		    $(this).parent().find('p > img').attr('src',data_img);	
			//alert('aa');
	    })
	}
	
	/*五屏切换*/
$(".slide").find("li").click(function(){
	if($(this).hasClass("cur")){return false;}
	var li = $(this);
	sibling = li.siblings();
	li.find("span").fadeOut(200,function(){
		li.animate({"width":"640px"},500,function(){
			li.addClass("cur");
		});
		sibling.animate({"width":"123px"},500,function(){
			sibling.removeClass("cur");
			sibling.find("span").fadeIn(200);
		});
	});
});
	
	
})
</script>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</html>

