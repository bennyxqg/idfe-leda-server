<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/index.css?v=1609" />
</head>

<body>
<div id="container">

      <header class="top">
           <div class="left"><img src="<?php BLOCK('game_icon') ?>" width="103" height="103" /><img src="<?php BASE_URL() ?>images/icon_logo.png" width="193" height="56" /></div>
           <div class="right">
               <ul>
                   <a href="<?php CATEGORY_URL('视频','video') ?>"><li>视频</li></a>
                   <a href="<?php CATEGORY_URL('新闻') ?>"><li>新闻</li></a>
                   <a href="<?php CATEGORY_URL('图片','picture') ?>"><li>图片</li></a>
                   <a href="/home"><li>首页</li></a>
               </ul>
           </div>
      </header>
     
      <section class="sp_video">
         <div class="sp_c">
          <ul>
          <?php
          $img=GET_BASE_URL()."images/play.png";
          $html=<<<_HTML
          	<li data-src="@@STR2@@">
                <img src="@@STR1@@" width="261" height="154"  />
                <p>@@LABEL@@</p>
                <a href="#"><img src="{$img}" width="40" height="43"  /></a>
             </li>
_HTML;
		  SHOW_DATAS($html,'m-d',5,100,1,array('OrderBy'=>'`int1` asc'));
          ?>
   
          </ul>
         </div>
         <p class="c_more">查看更多</p>
      </section>
      
      <?php require_once("_footer.ctp"); ?>
  
</div>
<div class="video_list"><video id="video" controls="" src="" width="588" height="380" ></video></div>
<div class="zhezao"></div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>

<script type="text/javascript">
$(function(){
	
	$('.right ul li').first().toggle(function(){
		$('.right').css('height','225px');
	},function(){
		$('.right').css('height','55px');
	})
	
	$('.sp_c ul li').each(function(i){
		$(this).click(function(){
			var sp_src = $(this).attr('data-src');
			$('.zhezao').show();
			$('.video_list').show().find('video').attr('src',sp_src);
			
		})
	   	
	})
	
	$('.zhezao').click(function(){
		$('.zhezao').hide();
		$('.video_list').hide();
	})
	
	
})
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?de64d2f7cefe742c2e593b9bfac2caab";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>