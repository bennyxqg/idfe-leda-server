<!DOCTYPE html><html lang="zh-cn"><head>
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="//fruit.uu.cc/fruit.uu.cc/favicon.ico">
    <link media="screen" href="//fruit.uu.cc/fruit.uu.cc/css/m.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->
	
	<script src="//hm.baidu.com/hm.js?bd1059138318d7c7f0b88858b83c5421"></script>
<script>window["_GOOG_TRANS_EXT_VER"] = "1";</script></head>
<body class="">    
<div class="page">
    <div class="header">
    <h1 class="tit_hide">水果忍者</h1>
    <div class="swipeBox">
        <div id="slider" class="swiper-container" style="visibility: visible;">
            <ul class="swipe-wrap CUSTOM_EDIT LIST_LI_A_IMG_EDIT CAROUSEL_IMAGE" id="loop_img_edit" style="width: 640px;"><li data-index="0" style="width: 640px; left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);"><a href="#" target="_blank"><img src="//fruit.uu.cc/manage/upload/image/fruit.uu.cc/2016-05-26/20160526_164659_455105.jpg" alt="" title="" width="100%" height=""></a></li></ul>
            <ul class="dot clearfix" id="dot">
            	<li class="on"></li>
            </ul>
        </div>
    </div>
    <ul class="dh">
        <li id="homelink" class="cur"><a href="/">首页</a></li>
        <li id="cate86"><a href="//fruit.uu.cc/news/86.html">资讯</a></li>
        <li id="cate90"><a href="//fruit.uu.cc/news/90.html">攻略</a></li>
        <li id="cate88"><a href="//fruit.uu.cc/news/88.html">活动</a></li>
    </ul>
    <div class="infoBox clearfix">
        <div class="info fl">
            <h2 id="game_name_edit" class="CUSTOM_EDIT TEXT_EDIT">水果忍者</h2>
            <p id="game_size_edit" class="CUSTOM_EDIT TEXT_EDIT">游戏大小：47.6MB</p>
            <?php /*BLOCK*/
            	echo '<img alt="" src="'.GET_BLOCK('game_icon').'" style="width: 91px; height: 90px;" width="" height="">';
            /*BLOCK*/ ?>
		</div>
        <!--
        <div class="download fr">
        <?php /*BLOCK
            echo '<a class="DOWNLOAD_LINK_EDIT" href="'.GET_BLOCK('android_download_url').'" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'" class="m_download"><img src="//fruit.uu.cc/fruit.uu.cc/images/m_xiazai.png" width="70%" alt="下载"></a>';
        /*BLOCK*/ ?> 
        </div>
        -->
    </div>
</div>


        <div class="content">
            <ul class="list">
            	<?php /*BLOCK*/
            		SHOW_NEWS('<li class="list@@ID@@"><a href="@@URL@@"><h4><span class="blue">@@TITLE@@</h4><p>@@DATE@@</p></a></li>','m/d',array('新闻','活动','攻略'),3,0,array('FromID'=>1));
            	/*BLOCK*/ ?>
            </ul>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="//fruit.uu.cc/fruit.uu.cc/images/logo.png" alt=""></a>
            <p>粤网文〔2016〕6871-1632号 新广出审[2016]599号<br />出版物号：ISBN 978-7-89471-856-3 文网进字[2014]0103号</p>
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br>适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
<script src="//fruit.uu.cc/fruit.uu.cc/js/swipe.js" type="text/javascript"></script>
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

<script type="text/javascript">
var slider1 = Swipe(document.getElementById('slider'), {
    auto: 3000,
    continuous: true,
    callback: function(pos) {
        var i = bullets.length;
        while (i--) {
            bullets[i].className = ' ';
        }
        bullets[pos].className = 'on';
    }
});
var bullets = $('#dot').find('li');
</script>

<?php /*BLOCK*/
if($category_id > 0)
{
echo <<<_HTML
<script type="text/javascript">
$(function () {
	$("#cate{$category_id}").addClass("cur");
	$("#homelink").removeClass("cur");
});
</script>
_HTML;
}
/*BLOCK*/ ?>

																																					    					    				    					    																																																																																																    					    																																																											    					    																																									    					    																																																																																												    					    				    					    																																																																		    					    				    					    																																																									    					    				    					    																																																																																																														    					    				    					    																																																																																																														    					    				    					    																																																    					    				    					    																																																									    					    				    					    																																																																																																					    					    				    					    																																																																																																					</body></html>