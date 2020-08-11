<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/index.css?v=16121118" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
</head>

<body style="background:url(<?php BASE_URL() ?>images/n_bj_c.jpg) repeat;">
<div id="container">
   <div id="header">
      <h1>
        <img src="<?php BASE_URL() ?>images/icon.png" width="96" height="96" />
        <img class="logo" src="<?php BASE_URL() ?>images/icon_logo.png" width="145" height="36" />
      </h1>
      <div class="nav">
         <a href="/" class="sy nav_bar"><em></em>官网首页</a>
         <a href="//lr.uu.cc/news/340.html" class="hd nav_bar"><em></em>最新活动</a>
         <a href="//lr.uu.cc/news/338.html" class="gg nav_bar"><em></em>新闻公告</a>
         <a href="//lr.uu.cc/" class="ts nav_bar"><em></em>游戏特色</a>
         <a href="<?php BLOCK('forum_url') ?>" target="_blank" class="lt nav_bar"><em></em>官方论坛</a>
         <p class="w_q">
            <a href="#" class="weixin"><em></em>关注微信</a>
            <a href="#" class="qq"><em></em>加入Q群</a>
         </p>
      </div>
      <div class="w_q_float w_q_float1" >
          <span class="w_q_ewm"><img src="<?php BLOCK('weixin_qrcode') ?>" width="106" /></span>
          <p>官方微信公众号</p>
          <span class="w_q_name"><?php BLOCK('weixin_account') ?></span>
      </div>
      <div class="w_q_float2 w_q_float">
          <span class="w_q_ewm"><img src="<?php BLOCK('qq_qun_qrcode') ?>" width="106" /></span>
          <p>手游官方群</p>
          <span class="w_q_name"><?php BLOCK('qq_qun') ?></span>
      </div>
   </div>
   <div class="bander bander_news">
     <div class="bander_1"></div>
     <div class="bander_2"></div>
     <div class="news_content">
     <div class="news_bj">
     <div class="news_main">
         <div class="n_left">
              <span class="down_xz"><img src="<?php BLOCK('global_download_url') ?>" width="182"  /></span>
              <a href="<?php BLOCK('ios_download_url') ?>" class="ios"></a>
              <a href="<?php BLOCK('android_download_url') ?>" class="az"></a>
              <span class="wx_ewm"><img src="<?php BLOCK('weixin_qrcode') ?>" width="182"  /></span>
              <ul>
                  <li>群1:<?php BLOCK('qq_group') ?></li>
              </ul>
         </div>
         <div class="n_right">
             <div class="title">
             
             <?php
        	if($category_id == GET_CATEGORY_ID('活动')) {
        		$catename='最新活动/<em>LATEST ACTIVITY</em>';
        		$catename1 = '最新活动';
        		$cates=array('活动');
        	} else if($category_id == GET_CATEGORY_ID('新闻')) {
        		$catename='新闻公告/<em>NEWS</em>';
        		$catename1 = '新闻公告';
        		$cates=array('新闻');
        	}else {
        		$catename='最新/<em>NEW</em>';
        		$catename1 = '最新';
        		$cates=array('新闻','活动');
        	}
        	?>
                <h1><?php echo $catename ?></h1>
                <span class="position">当前位置：官网首页><i><?php echo $catename1; ?></i></span>
             </div>
             <ul class="new_list">
             <?php
            	SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',$cates,10,$page,array());
            ?>
             </ul>
             <div class="page">
                 <?php
	            	SHOW_PAGINATION($cates,10,array("CurrentPageClass" => "click"),$page);
	            ?>
             </div>
         </div>
     </div>
     </div>
     
     <?php require_once("_footer.ctp"); ?>
     
     </div>
   </div>
   
 
 
</div>




<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js?v=12"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
$(function(){
	
	
	
	$('.weixin, .w_q_float1').hover(function(){
		$('.w_q_float1').css('right','80px').show();
	},function(){
		$('.w_q_float1').hide();
	})
	
	$('.qq, .w_q_float2').hover(function(){
		$('.w_q_float2').css('right','-20px').show();
	},function(){
		$('.w_q_float2').hide();
	})
	
	$('.page a').on('click',function(){
	   $(this).addClass('click').siblings().removeClass('click');	
	})
   
})
</script>

</body>
</html>
