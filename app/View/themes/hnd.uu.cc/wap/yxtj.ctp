<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
?>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//hnd.uu.cc/hnd.uu.cc/v2/wap/css/index.css" rel="stylesheet">
<link href="//hnd.uu.cc/hnd.uu.cc/v2/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/jquery-1.8.0.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f7b46d5b26c91c9c86bc641ab6fd4fa5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="container" >
   <div class="top">
      <span class="logo_small">
      <?php
         echo '<img src="'.GET_BLOCK('game_icon').'" width="90" />';
      ?>
      </span>
      <span class="by by_small"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/by.png" width="150"  /></span>
      <?php
         echo '<a class="d_onload" href="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'" href_android="'.GET_BLOCK('android_download_url').'"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/ljxz.png" width="176" height="67" /></a>';
      ?>
   </div>
   <div class="relative">
      <a href="//hnd.uu.cc/" class="back"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/back.png" width="25" height="36" /></a>
      <span class="lm_yx"></span>
      <a href="#" class="lm_list"><img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/list.png" width="34" height="36" /></a>
      <div class="tishi">
         <a class="xw" href="<?php CATEGORY_URL('新闻') ?>"></a>
         <a class="gl" href="<?php CATEGORY_URL('陷阱图鉴','yxtj') ?>"></a>
      </div>
    </div>
    <div class="yx_js"  style="margin:0;">

       <div class="yx_jj">
       <ul id="list_contain">
       	  <?php
			SHOW_NEWS('<a href="@@URL@@"><img src="@@SMALL_IMAGE@@" width="125" height="125" /></a>','m-d',array('陷阱图鉴','怪物图鉴'),12,$page,array())
		  ?>
		  
       </ul>
       </div>
       <p class="more" id="get_more_btn"><a href="#">查看更多</a></p>
    </div>
    <div class="qq_wb" style="margin-top:30px;">
      <ul>
      <?php
      	echo '<a href="'.GET_BLOCK('weibo_url').'"><span></span>官方微博</a>';
      	echo '<a href="'.GET_BLOCK('baidu_tieba_url').'"><span></span>百度贴吧</a>';
        echo '<a href="'.GET_BLOCK('forum_url').'"><span></span>官方论坛</a>'
      ?>
      </ul>
      <p class="p_let">
      <?php
          echo '<img src="'.GET_BLOCK('weixin_qrcode').'" width="136" height="136" />';
          echo '<span>微信号：'.GET_BLOCK('weixin_account').'<br />关注官方微信获取最新资讯</span>';
      ?>
      </p>
      <p class="p_ret">
          <img src="//hnd.uu.cc/hnd.uu.cc/v2/wap/images/qq.png" width="120" height="120" />
          <span><strong>官方QQ交流群</strong></span>
          <a>
          <?php
          $qqs=explode(',',GET_BLOCK('qq_group'));
          $len=count($qqs);
          for($i=0;$i<$len;$i++)
          	echo '<em><font>官方'.($i+1).'群：'.$qqs[$i].'</font><br></em>';
          ?>
          </a>
      </p>
    </div>
    <?php require_once("_footer.ctp");?>
</div>
<script type="text/javascript" src="//hnd.uu.cc/hnd.uu.cc/v2/wap/js/commen.js"></script>

<?php
$cid1=GET_CATEGORY_ID('怪物图鉴');
$cid2=GET_CATEGORY_ID('陷阱图鉴');
echo <<<_HTML
<script type="text/javascript">
var cid = '{$cid1},{$cid2}';
</script>
_HTML;
?>


<script type="text/javascript">

$(function(){
	var page = 1;
	var limit = 12;
	$("#get_more_btn").click(function(){
		var nextPage = parseInt(page) + 1;
		var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
		
		$.get(url,function(result){
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('#list_contain');
                    for(var i=0;i<data.length;i++){
                        lists += '<a href="/show/'+data[i]['id']+'.html"><img src="'+data[i]['small_url']+'" width="125" height="125" /></a>';
                    }
                    newslist.append(lists);
                    page = parseInt(page) + 1;
                }
         },'json');
	});
	
	$(".d_load").each(function(){
		if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_ios'));
		else if (/(Android)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_android'));
	});	
});

</script>

</body>
</html>