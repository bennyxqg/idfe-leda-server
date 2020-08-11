<!DOCTYPE html>
<html>
<head>
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="target-densitydpi=device-dpi,width=960, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<script type="text/javascript" src="//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c"></script>

<link href="//jzw.uu.cc/jzw.uu.cc/wap/css/mobile.css" rel="stylesheet">

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

</head>
<body>
    <div class="container">
    	<header id="header">
    		<img alt="" id="index_banner_edit" class="CUSTOM_EDIT IMG_EDIT" src="/uploads/editor_upload/images/201509231601252386.jpg" />
    	</header>
        <nav id="nav">
          <a href="//jzw.uu.cc"><em style="background-position:0 -2px"></em>首页</a>
          <a id="cate224" href="//jzw.uu.cc/news/224"><em style="background-position:-78px -90px"></em>最新活动</a>
          <a id="cate225" href="//jzw.uu.cc/news/225"><em></em>攻略指引</a>
          <?php /*BLOCK*/
          echo '<a href="'.GET_BLOCK('forum_url').'"><em></em>论坛</a>';
          /*BLOCK*/ ?>
        </nav>
        <aside id="icon_down">
           <p>
           <?php /*BLOCK*/
             echo '<img src="'.GET_BLOCK('game_icon').'" width="134" height="134" />';
           /*BLOCK*/ ?>
             <span>
               <strong id="game_name_edit" class="CUSTOM_EDIT TEXT_EDIT">机战王</strong>
               <em id="game_size_edit" class="CUSTOM_EDIT TEXT_EDIT">游戏大小：59MB</em>
             </span>
           </p>
           <?php /*BLOCK*/
           	echo '<a class="down_load DOWNLOAD_LINK_EDIT" href="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'" href_android="'.GET_BLOCK('android_download_url').'"><img src="//jzw.uu.cc/jzw.uu.cc/wap/images/download.png" width="255" height="134" /></a>';
           /*BLOCK*/ ?>
         
        </aside>
        <section id="xinwen">
          <ul>
          <?php /*BLOCK*/
          SHOW_NEWS('<li><a href="@@URL@@"><img src="//jzw.uu.cc/jzw.uu.cc/wap/images/xw_bj.gif" width="24" height="24" />@@TITLE@@</a><span class="time">@@DATE@@</span></li>','m/d',GET_CATEGORY_NAME($category_id),50,$page,array());
          /*BLOCK*/ ?>
          </ul>
        </section>
        <footer id="footer">
            <img src="//jzw.uu.cc/jzw.uu.cc/wap/images/logo.png" width="294" height="118" /><br />
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗 </p>
            <p>适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
            <p>粤网文〔2016〕6871-1632号 新广出审[2016]2527号 </p>
            <p>出版物号：ISBN 978-7-7979-1372-0 文网游备字〔2016〕Ｍ-SLG 0159 号 </p>
        </footer>
    </div>
    <div class="weixin_tip" ontouchstart="document.querySelector('.weixin_tip').style.display='none';"></div>

<script type="text/javascript">
$(function(){
	$(".DOWNLOAD_LINK_EDIT").each(function(){
		if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_ios'));
		else if (/(Android)/i.test(navigator.userAgent))
			$(this).attr('href',$(this).attr('href_android'));
	});	
});
</script>

<?php /*BLOCK*/
echo <<<_HTML
<script type="text/javascript">
$(function () {
	$("#cate{$category_id}").addClass("on");
});
</script>
_HTML;
/*BLOCK*/ ?>

</body>

</html>