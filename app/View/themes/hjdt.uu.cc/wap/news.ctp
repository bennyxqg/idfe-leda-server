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
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
</head>

<body style="background:#eaecee;">
<div id="news">
  <div class="top">
     <h1><img src="<?php BLOCK('game_icon') ?>" width="220" height="50" /></h1>
  </div>
  <div class="new_m">
     <p>
       <a class="home" href="//hjdt.uu.cc/">首页</a>
       <a class="xwzx" href="#">新闻资讯</a>
     </p>
     <ul class="newslist">
     <?php
     	SHOW_NEWS('<li><a href="@@URL@@"><img src="'.GET_BASE_URL().'images/pre.gif" width="16" height="16" /><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="date">[@@DATE@@]</span></li>','m/d',GET_CATEGORY_NAME($category_id),7,1,array());
     ?>
     </ul>
  </div>
</div>
</body>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">

	var cid=<?php echo $category_id ?>;
	var page=1;
	var limit=7;
	var isrun=false;
	$(window).scroll(function () {
		console.log('scroll');
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        var nextPage = parseInt(page) + 1;
        var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
        if(isrun)
            return;
        if (scrollTop + windowHeight > scrollHeight - 5) {
        	isrun=true;
            $.get(url,function(result){
            	
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('.newslist');
                    console.log(data);
                    for(var i=0;i<data.length;i++){
                        
                        lists += '<li><a href="/show/' + data[i]['id'] + '.html"><img src="//hjdt.uu.cc/hjdt.uu.cc/wap/images/pre.gif" width="16" height="16" /><strong>['+data[i]['news_category']+']</strong>'+data[i]['title']+'</a><span class="date">['+data[i]['updated']+']</span></li>';
                    }
                    newslist.append(lists);
                    page = parseInt(page) + 1;
                }
                isrun=false;
            },'json');
        }
    });

</script>
</html>