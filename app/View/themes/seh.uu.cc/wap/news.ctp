<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="//seh.uu.cc/seh.uu.cc/wap/css/index.css" rel="stylesheet">
<link href="//seh.uu.cc/seh.uu.cc/wap/css/swiper.min.css" rel="stylesheet">

<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/wap/js/jquery-1.8.0.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>
<div class="container">
   <div class="top">
      <span class="logo_small">
      <?php /*BLOCK*/
      echo '<img src="'.GET_BLOCK('game_icon').'" width="74" />';
      /*BLOCK*/ ?>
      </span>
      <span class="by by_small"><img src="//seh.uu.cc/seh.uu.cc/wap/images/logo_wz.png" width="150"  /></span>
      <?php /*BLOCK*/
      echo '<a class="d_onload DOWNLOAD_LINK_EDIT" href="'.GET_BLOCK('android_download_url').'" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'">';
      /*BLOCK*/ ?>
      <img src="//seh.uu.cc/seh.uu.cc/wap/images/down.png" width="176" height="67" /></a>

   </div>
   <div class="relative">
      <a href="#" class="back"><img src="//seh.uu.cc/seh.uu.cc/wap/images/back.png" width="25" height="36" /></a>
      <?php /*BLOCK*/
      if($category_id == GET_CATEGORY_ID('新闻公告'))
      	echo 'span class="lm_gl"></span>';
      else if($category_id == GET_CATEGORY_ID('最新活动'))
      	echo '<span class="lm_xw"></span>';
      else
      	echo '<span class="lm_yx"></span>';
      /*BLOCK*/ ?>
      <a href="#" class="lm_list"><img src="//seh.uu.cc/seh.uu.cc/wap/images/list.png" width="34" height="36" /></a>
      <div class="tishi">
      <?php /*BLOCK*/
        echo '<a class="xw" href="'.GET_CATEGORY_URL('最新活动').'"></a>';
        echo '<a class="gl" href="'.GET_CATEGORY_URL('新闻公告').'"></a>';
        echo '<a class="yx" href="'.GET_CATEGORY_URL('游戏攻略').'"></a>';
      /*BLOCK*/ ?>
      </div>
   </div>
   <div class="hm_xw">
      <div class="xw_gg">
        <ul id="h_d" style="display:block;">
        <?php /*BLOCK*/
        	SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',GET_CATEGORY_NAME($category_id),5,$page,array());
        /*BLOCK*/ ?>
        </ul>
      </div>
      <p class="more"><a id="get_more_btn" href="#">查看更多</a></p>
    </div>
    <div class="wx_qq">
      <p>
        <img src="//seh.uu.cc/seh.uu.cc/wap/images/wx.png" width="91" height="91" />
        <span>微信号</span>
        <a>
        <?php /*BLOCK*/
           echo '<em>'.GET_BLOCK('weixin_account').'</em>';
        /*BLOCK*/ ?>
        </a>
      </p>
      <p>
        <img src="//seh.uu.cc/seh.uu.cc/wap/images/qq.png" width="91" height="91" />
        <span>QQ群</span>
        <a>
        <?php /*BLOCK*/
           echo '<em>'.GET_BLOCK('qq_group').'</em>';
        /*BLOCK*/ ?>
        </a>
      </p>
      <p>
        <img src="//seh.uu.cc/seh.uu.cc/wap/images/kefu.png" width="91" height="91" />
        <span>客服电话</span>
        <a>
        <?php /*BLOCK*/
           echo '<em>'.GET_BLOCK('custom_service_phone').'</em>';
        /*BLOCK*/ ?>
        </a>
      </p>
    </div>
    
    <?php require_once("_footer.ctp"); ?>
</div>

<script type="text/javascript" src="//seh.uu.cc/seh.uu.cc/wap/js/commen.js"></script>

<?php /*BLOCK*/
echo <<<_HTML
<script type="text/javascript">
var cid = {$category_id};
</script>
_HTML;
/*BLOCK*/ ?>
<script type="text/javascript">
$(".DOWNLOAD_LINK_EDIT").each(function(){
		var u = navigator.userAgent;
		var ua = u.toLowerCase();
		
		if(ua.match(/MicroMessenger/i)=="micromessenger"){
			$(".weixin_tip").show();
			return false;
		} else {
			if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
				$(this).attr('href',$(this).attr('href_ios'));
			else if (/(Android)/i.test(navigator.userAgent))
				$(this).attr('href',$(this).attr('href_android'));
		}
});

var page = 1;
var limit = 5;
$("#get_more_btn").click(function () {

        var nextPage = parseInt(page) + 1;
        var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
        $.get(url,function(result){
            if (result && result['status'] == 1) {
                var data = result.data;
                var lists = '';
                var newslist = $('#h_d');
                for(var i=0;i<data.length;i++){
                    lists += '<li><strong>['+data[i]['news_category']+']</strong><a href="/show/'+data[i]['id']+'.html">'+data[i]['title']+'</a><span class="date">'+data[i]['updated']+'</span></li>';
                }
                newslist.append(lists);
                page = parseInt(page) + 1;
            }
        },'json');
        
    });
</script>

</body>
</html>