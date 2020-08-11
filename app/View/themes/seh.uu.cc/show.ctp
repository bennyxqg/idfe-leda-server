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
</head>
<body>
<div >
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
             <em>关注官方微信</em><br />
             领红包
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
  <div class="bander2">
  </div>
  <div class="content">
     <div class="c_left">
        <div class="ewm">
        <?php /*BLOCK*/
       		echo '<img src="'.GET_BLOCK('game_download_qrcode').'" width="142" />';
       	/*BLOCK*/ ?>
          <span>扫一扫下载游戏</span>
        </div>
        <p>
       <?php /*BLOCK*/
       	echo '<a href="'.GET_BLOCK('ios_download_url').'" class="ios">';
       /*BLOCK*/ ?>
           <img src="//seh.uu.cc/seh.uu.cc/images/ios.png" width="187" height="55" /></a>
       <?php /*BLOCK*/
       echo '<a href="'.GET_BLOCK('android_download_url').'" class="az">';
       /*BLOCK*/ ?>
           <img src="//seh.uu.cc/seh.uu.cc/images/az.png" width="187" height="55" /></a>
        </p>
        <div class="ewm">
          <h3>官方信息</h3>
          <p>
          <?php /*BLOCK*/
       		echo '<img src="'.GET_BLOCK('game_download_qrcode').'" width="142" />';
       	/*BLOCK*/ ?>
          <span>扫一扫关注微信</span>
          <?php /*BLOCK*/
          echo '<h3>微信号：'.GET_BLOCK('weixin_account').'</h3>';
          /*BLOCK*/ ?>
          </p>
          <ul>
              <li><strong>官方QQ交流群</strong></li>
		        <?php /*BLOCK*/
		        $qqs=explode(',',GET_BLOCK('qq_group'));
		        $len=count($qqs);
		        for($i=0;$i<$len;$i++)
		        	echo '<li>官方'.($i+1).'群：'.$qqs[$i].'</li>';
		        /*BLOCK*/ ?>
          </ul>
        </div>
        
     </div>
     <div class="c_right">
       <?php /*BLOCK*/
     if(GET_CURRENT_NEWS_INFO('news_categories_id') == GET_CATEGORY_ID('最新活动'))
     	echo '<div class="title"><h1>最新活动</h1><span>首页>最新活动</span></div>';
     else if(GET_CURRENT_NEWS_INFO('news_categories_id') == GET_CATEGORY_ID('新闻公告'))
       	echo '<div class="title"><h1>新闻中心</h1><span>首页>新闻中心</span></div>';
     else 
     	echo '<div class="title"><h1>游戏攻略</h1><span>首页>游戏攻略</span></div>';
     /*BLOCK*/ ?>
       <div class="list">
       <?php /*BLOCK*/
         echo '<h1>'.GET_CURRENT_NEWS_INFO('title').'</h1>';
       /*BLOCK*/ ?>
          <div class="share">
               <div class="bdsharebuttonbox"> 
               <?php /*BLOCK*/
               echo '<span class="time">时间：'.date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')).' 分享：</span>';
               /*BLOCK*/ ?>
               <a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到腾讯朋友" href="#" class="bds_tqf" data-cmd="tqf"></a></div>
        <script>
        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","tqf"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","tqf"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
        </script>
            </div> 
            
        <?php /*BLOCK*/
         echo '<p>'.GET_CURRENT_NEWS_INFO('content').'</p>';
       /*BLOCK*/ ?>
            
       </div>
     </div>
  </div>
  
  
  
</div>
<?php require_once("_footer.ctp"); ?>
<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/js/main.js"></script>
<script type="text/javascript">
$(function(){
    $('.lm_c a').each(function(i) {
        $(this).hover(function(){
			$(this).addClass('on_d').siblings().removeClass('on_d');
			$('.message > ul').eq(i).show().siblings().hide();
			})
    });
	
	$('.page span a').click(function(){
		$(this).css('background','#fff').siblings().css('background','#ddd');
	})
})
</script>
</body>





