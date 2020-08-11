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
</head>
<body class="">    
<div class="page">
        
<div class="header">
    <h1 class="tit_hide">水果忍者</h1>
    <div class="swipeBox">
        <div id="slider" class="swiper-container" style="visibility: visible;">
            <ul class="swipe-wrap CUSTOM_EDIT LIST_LI_A_IMG_EDIT CAROUSEL_IMAGE" id="loop_img_edit"><li><a href="#" target="_blank"><img src="//fruit.uu.cc/manage/upload/image/fruit.uu.cc/2016-05-26/20160526_164659_455105.jpg" alt="" title="" height="" width="100%"></a></li></ul>
            <ul class="dot clearfix" id="dot">
            	<li class="on"></li>
            </ul>
        </div>
    </div>
    <ul class="dh">
        <li id="homelink" class=""><a href="/">首页</a></li>
        <li id="cate86" class="cur"><a href="//fruit.uu.cc/news/86.html">资讯</a></li>
        <li id="cate90"><a href="//fruit.uu.cc/news/90.html">攻略</a></li>
        <li id="cate88"><a href="//fruit.uu.cc/news/88.html">活动</a></li>
    </ul>
    <div class="infoBox clearfix">
        <div class="info fl">
            <h2 id="game_name_edit" class="CUSTOM_EDIT TEXT_EDIT">水果忍者</h2>
            <p id="game_size_edit" class="CUSTOM_EDIT TEXT_EDIT">游戏大小：34.7MB</p>
            <?php /*BLOCK*/
            	echo '<img alt="" src="'.GET_BLOCK('game_icon').'" style="width: 91px; height: 90px;">';
            /*BLOCK*/ ?>
		</div>
        <!--
        <div class="download fr">
        <?php /*BLOCK
            echo '<a href="'.GET_BLOCK('android_download_url').'" href_android="'.GET_BLOCK('android_download_url').'" href_ios="'.GET_BLOCK('ios_download_url').'" class="m_download DOWNLOAD_LINK_EDIT"><img src="//fruit.uu.cc/fruit.uu.cc/images/m_xiazai.png" width="70%" alt="下载"></a>';
        /*BLOCK*/ ?> 
        </div>
        -->
    </div>
</div>
        
        <div class="content">
            <ul class="newslist">
            <?php /*BLOCK*/
            SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@">[@@CATEGORY_NAME@@]@@TITLE@@</a></li>','m/d',GET_CATEGORY_NAME($category_id),5,0,array());
			/*BLOCK*/ ?>
            <li><span>[03/06]</span><a href="/show/1318.html">[新闻]花灯转出好彩头《水果忍者》正月十五duang~duang~duang</a></li><li><span>[02/09]</span><a href="/show/1216.html">[新闻]水果也任性 《水果忍者》与贡茶玩转新玩法</a></li><li><span>[02/05]</span><a href="/show/1166.html">[新闻]萌宠陪你贺新春《水果忍者》多重活动乐不停</a></li><li><span>[02/03]</span><a href="/show/1092.html">[新闻]乐逗游戏联手奶盖贡茶打造《水果忍者》全新体验</a></li><li><span>[02/02]</span><a href="/show/1086.html">[新闻]新春福利来袭《水果忍者》萌宠贺岁版今日上线</a></li><li><span>[03/31]</span><a href="/show/1442.html">[新闻]谁说中忍考试是学霸专场《水果忍者》分分钟教你逆袭</a></li><li><span>[03/24]</span><a href="/show/1414.html">[新闻]中忍考试今日开打《水果忍者》开启炫技新模式</a></li><li><span>[03/10]</span><a href="/show/1344.html">[新闻]炫技大PK《水果忍者》中忍考试即将开始 </a></li><li><span>[03/06]</span><a href="/show/1318.html">[新闻]花灯转出好彩头《水果忍者》正月十五duang~duang~duang</a></li><li><span>[02/09]</span><a href="/show/1216.html">[新闻]水果也任性 《水果忍者》与贡茶玩转新玩法</a></li></ul>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="//fruit.uu.cc/fruit.uu.cc/images/logo.png" alt=""></a>
            <p>粤网文〔2016〕6871-1632号 新广出审[2016]599号<br />出版物号：ISBN 978-7-89471-856-3 文网进字[2014]0103号</p>
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br>适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    
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
var cid = {$category_id};
$("#homelink,#cate86,#cate90,#cate88").removeClass("cur");
$("#cate"+cid).addClass("cur");
</script>
_HTML;
/*BLOCK*/ ?>

    <script type="text/javascript">
    var page = 1;
    //var cid=86;
    var limit = 5;

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        var nextPage = parseInt(page) + 1;
        var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
        
        if (scrollTop + windowHeight > scrollHeight - 5) {
            $.get(url,function(result){
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('.newslist');
                    console.log(data);
                    for(var i=0;i<data.length;i++){
                        lists += '<li><span>[' + data[i]['updated'] + ']</span><a href="/show/' + data[i]['id'] + '.html">[' + data[i]['news_category'] + ']' + data[i]['title'] + '</a></li>';
                    }
                    newslist.append(lists);
                    page = parseInt(page) + 1;
                }
            },'json');
        }
    });
    </script>																																					

																																												    					    				    					    																																																																		    					    				    					    																																																																																																																																																																																																						    					    				    					    																																																																																																														</body></html>