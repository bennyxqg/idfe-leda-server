<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
/*BLOCK*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//ddx.uu.cc/toy.uu.cc/wap/css/index.css" rel="stylesheet">
<link href="//ddx.uu.cc/toy.uu.cc/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>

<div class="container">
     <div class="top">
       <a href="#" class="lt"></a>
     </div>
     <div class="xw_list">
        <div class="lanmu">
        <?php /*BLOCK*/
        if($category_id == 0) $c='class="on"'; else $c='';
        echo '<a href="'.GET_CATEGORY_URL('XXX').'" '.$c.'>全部</a>';
        if($category_id == GET_CATEGORY_ID('资讯')) $c='class="on"'; else $c='';
        echo '<a href="'.GET_CATEGORY_URL('资讯').'" '.$c.'>新闻</a>';
        if($category_id == GET_CATEGORY_ID('活动')) $c='class="on"'; else $c='';
        echo '<a href="'.GET_CATEGORY_URL('活动').'" '.$c.'>活动</a>';
        /*BLOCK*/ ?>
        </div>
        <div class="xw_qb">
        <?php /*BLOCK*/
        $cates=array('资讯','活动');
        if($category_id == 0) 
        {
        	$cates=array('资讯','活动');
        	$c='style="display:block;"';
        }
        else 
        	$c='';
       
        echo '<ul '.$c.'>';
        SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$cates,5,$page,array());
        echo '</ul>';

        if($category_id == GET_CATEGORY_ID('资讯'))
        {
        	$cates='资讯';
        	$c='style="display:block;"';
		}
        else 
        	$c='';
        echo '<ul '.$c.'>';
        SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$cates,5,$page,array());
        echo '</ul>';
        
        if($category_id == GET_CATEGORY_ID('活动'))
        {
        	$cates='活动';
        	$c='style="display:block;"';
        }
        else 
        	$c='';
        echo '<ul '.$c.'>';
        SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m/d',$cates,5,$page,array());
        echo '</ul>';
        /*BLOCK*/ ?>
        
        </div>
     </div>
     <div class="page">
     	<?php /*BLOCK*/
            SHOW_PAGINATION($cates,5,array(),$page);
        /*BLOCK*/ ?>
     </div>
     <footer id="footer">
       <ul>
          <li><a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
          <li>Copyright©2009-2014 &nbsp;&nbsp;深圳市创梦天地科技有限公司 版权所有</li>
          <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
          <li>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
       </ul>
    </footer>
</div>

<script type="text/javascript">
$(function(){
	$(".lanmu a").each(function(i){
	   $(this).on("click",function(){
		   $(this).addClass('on').siblings().removeClass('on');
		   $(".xw_qb > ul").eq(i).show().siblings().hide();
		})
	})
})
</script>


</body>
</html>