<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
<link rel="stylesheet" type="text/css" href="//seh.uu.cc/seh.uu.cc/css/index.css" />
<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->
</head>

<body>
<div id="container">
  <div id="header">
    <div class="head"> 
         <div class="logo">
            <span class="icon">
            <?php /*BLOCK*/
            echo '<img src="'.GET_BLOCK('game_icon').'" width="117" height="117" />';
            /*BLOCK*/ ?>
            </span>
            <img class="wz" src="//seh.uu.cc/seh.uu.cc/images/logo_wz.png" width="144" height="56" />
         </div>
         <div class="nav">
         <?php /*BLOCK*/
            echo '<a href="//seh.uu.cc/"><strong>官网首页</strong><em>HOME</em></a>';
            echo '<a href="'.GET_CATEGORY_URL('最新活动').'"><strong>最新活动</strong><em>NEWS</em></a>';
            echo '<a href="'.GET_CATEGORY_URL('新闻公告').'"><strong>新闻公告</strong><em>PLAY</em></a>';
            echo '<a href="'.GET_CATEGORY_URL('游戏攻略').'"><strong>游戏攻略</strong><em>DATA</em></a>';
         /*BLOCK*/ ?>
         </div>
         <div class="weixin">
           <p>
             <em>关注官方微信</em><br />领红包
           </p>
           <div class="fk">
           <?php /*BLOCK*/
             echo '<img src="'.GET_BLOCK('weixin_qrcode').'" width="100"  />';
             echo '<p><span>扫码关注微信</span>微信号：<br />'.GET_BLOCK('weixin_account').'</p>';
           /*BLOCK*/ ?>
           </div>
         </div>
    </div>
  </div>
  <div class="bander">
    <div style="position:relative;width:1180px;height:855px;margin:0 auto;">
     <div class="ban_con">
       <p class="p_let">
       <?php /*BLOCK*/
       	echo '<img src="'.GET_BLOCK('game_download_qrcode').'" width="108" height="108" />';
       /*BLOCK*/ ?>
       <span>扫描下载游戏</span></p>
       <p class="p_ret">
       <?php /*BLOCK*/
       	echo '<a href="'.GET_BLOCK('ios_download_url').'" class="ios">';
       /*BLOCK*/ ?>
       <img src="//seh.uu.cc/seh.uu.cc/images/ios.png" width="187" height="55" />
       </a>
       <?php /*BLOCK*/
       echo '<a href="'.GET_BLOCK('android_download_url').'" class="az">';
       /*BLOCK*/ ?>
       <img src="//seh.uu.cc/seh.uu.cc/images/az.png" width="187" height="55" />
       </a></p>
     </div>
    </div>
  </div>
  <div class="part1">
      <div class="left">
         <div class="lunbo">
               <ul id="list">
               <?php
               SHOW_DATAS('<li @@FIRST_CONTENT1@@><a href="@@STR2@@" target="_blank"><img width="515" height="262" src="@@STR1@@" /></a></li>','m-d',0,100,1,array('FirstContent1'=>'style="display:block;opacity:1;"','OrderBy'=>'`int1` asc'));
               ?>
               </ul>
               <ul id="bar">
               <?php
               SHOW_DATAS('<span @@FIRST_CONTENT1@@></span>','m-d',0,100,1,array('FirstContent1'=>'style="background:#00b4ff;"','OrderBy'=>'`int1` asc'));
               ?>
               </ul>
             </div>
      </div>
      <div class="right">
          <p class="lanmu">
              <span href="#" class="on_bj">最新</span>
              <span href="#">新闻</span>
              <span href="#">攻略</span>
              <span href="#">活动</span>
              <?php /*BLOCK*/
              echo '<a href="'.GET_CATEGORY_URL('最新活动').'" target="_blank" class="more"><img src="//seh.uu.cc/seh.uu.cc/images/more.gif" width="18" height="18" /></a>';
              /*BLOCK*/ ?>
           </p>
           <div class="message">
             <ul id="g_g" style="display:block">
             <?php /*BLOCK*/
             	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d',array('最新活动','新闻公告','游戏攻略'),6,$page,array());
             /*BLOCK*/ ?>
             </ul>
             <ul id="x_w">
             <?php /*BLOCK*/
             	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d','新闻公告',6,$page,array());
             /*BLOCK*/ ?>
             </ul>
             <ul id="h_d">
             <?php /*BLOCK*/
             	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d','游戏攻略',6,$page,array());
             /*BLOCK*/ ?>
             </ul>
             <ul id="g_l">
             <?php /*BLOCK*/
             	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y-m-d','最新活动',6,$page,array());
             /*BLOCK*/ ?>
             </ul>
           </div>
      </div>
  </div>
  
  <div class="part2">
     <div id="show1">
        <ul>
            <li>
                <span class="bg0"></span>
                <img src="//seh.uu.cc/seh.uu.cc/images/z5.jpg" />
            </li>
            <li>
                <span class="bg1"></span>
                <img src="//seh.uu.cc/seh.uu.cc/images/z2.jpg" />
            </li>
            <li class="active">
                <span class="bg2"></span>
                <img src="//seh.uu.cc/seh.uu.cc/images/z3.jpg" />
            </li>
            <li>
                <span class="bg3"></span>
                <img src="//seh.uu.cc/seh.uu.cc/images/z4.jpg" />
            </li>
            <li>
                <span class="bg4"></span>
                <img src="//seh.uu.cc/seh.uu.cc/images/z1.jpg" />
            </li>
          
        </ul>
    </div>
  </div>
  
  <div class="part3">
  <?php /*BLOCK*/
    echo '<a href="'.GET_CATEGORY_URL('最新活动').'"><img src="//seh.uu.cc/seh.uu.cc/images/active.jpg" width="380" height="128" /></a>';
    echo '<a href="'.GET_CATEGORY_URL('新闻公告').'"><img src="//seh.uu.cc/seh.uu.cc/images/new.jpg" width="380" height="128" /></a>';
    echo '<a href="'.GET_CATEGORY_URL('游戏攻略').'" class="last"><img src="//seh.uu.cc/seh.uu.cc/images/gongl.jpg" width="380" height="128" /></a>';
  /*BLOCK*/ ?> 
  </div>
  
  <div class="part4">
    <div class="p4_con">
     <p class="wxh">
     <?php /*BLOCK*/
        echo '<span class="er"><img src="'.GET_BLOCK('weixin_qrcode').'" width="108" height="108" /><br />扫码关注官方微信</span>';
        echo '<span class="bt"><strong>微信号：'.GET_BLOCK('weixin_account').'</strong><br />关注官方微信获取最新资讯</span>';
     /*BLOCK*/ ?>
     </p>
     <p class="qq">
        <strong>官方QQ交流群</strong>
        <a>
        <?php /*BLOCK*/
        $qqs=explode(',',GET_BLOCK('qq_group'));
        $len=count($qqs);
        for($i=0;$i<$len;$i++)
        	echo '<span>官方'.($i+1).'群：'.$qqs[$i].'</span>';
        /*BLOCK*/ ?>
        </a>
     </p>
     <p class="kefu">
        <strong>客服电话</strong>
        <a>
        <?php /*BLOCK*/
        echo '<span>'.GET_BLOCK('custom_service_phone_ios').'(ios)</span>';
        echo '<span>'.GET_BLOCK('custom_service_phone').'(安卓)</span>';
        /*BLOCK*/ ?>
        </a>
     </p>
     <p class="hz">
        <select onchange="top.location=this.value;">
        <?php
        	SHOW_DATAS('<option id="option@@ID@@" value="@@STR1@@">@@LABEL@@</option>','m-d',1,100,1,array('OrderBy'=>'`int1` asc'));
        ?>
        </select>
     </p>
     
     
    </div>
  </div>
</div>
<?php require_once("_footer.ctp"); ?>

<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/js/main.js"></script>
<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/js/zns_script.js"></script>
<script type="text/javascript">
$(function(){

	//新闻切换
	$('.lanmu span').each(function(i) {
        $(this).hover(function(){
			$(this).addClass('on_bj').siblings().removeClass('on_bj');
			$('.message > ul').eq(i).show().siblings().hide();
			})
    });
	
	//轮播事件
	show(0);
	var i = 0;
	var len = $('#list li').length;
	function show(i){
		$('#bar span').eq(i).css('background','#ff0000').siblings().css('background','#fff');
		$('#list li').eq(i).fadeIn(1000).siblings().fadeOut(1000);
		i++;
		 mytime = setTimeout(function(){
				show(i);
				if(i == len){
					i = 0;show(i);
					}
				},5000)
		}
	$('#bar span').each(function(i){
		$(this).hover(function(){
			$(this).css('background','#ff0000').siblings().css('background','#fff');
			$('#list li').eq(i).fadeIn(1000).siblings().fadeOut(1000);
			if(mytime){
				clearTimeout(mytime);
				}
			},function(){
				show(i);
				})
			})	
		
})

</script>
</body>
</html>
