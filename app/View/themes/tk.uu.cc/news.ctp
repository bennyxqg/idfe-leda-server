<!DOCTYPE html><html lang="zh-cn"><head>
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link media="screen" href="//jzw.uu.cc/jzw.uu.cc/css/layout.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BLOCK('game_icon') ?>">
    <script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>

    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->
	
<link type="text/css" rel="stylesheet" href="//act.uu.cc/gamesnav/gamesNav.css?ran=0.23847983706326414"></head>
<body class="" style="">
    <div class="page" id="rtn">
        <div class="header">
            <div class="top_ima">
            	<img alt="" src="<?php BLOCK('pc_inner_banner') ?>" style="width: 1920px; height: 476px;">
            </div>
        </div>
        <div class="content">
            <div class="news_title">
                <div class="wd980 clearfix">
                    <div class="dh_left fl">
                        <a href="/">首页</a> &nbsp;&gt;&nbsp;&nbsp;
                        <?php CATEGORY_NAME($category_id) ?>
                    </div>
                    <a href="/" class="ret_homt fr">
                        返回首页
                    </a>
                </div>
            </div>
            <div class="con_list">
                <div class="cont_news">
                    <div class="cont_news_title clearfix">
                        <ul class="fl">
							<li id="cate310"><a href="<?php CATEGORY_URL('新闻') ?>">新闻</a><em></em></li>
							<li id="cate312"><a href="<?php CATEGORY_URL('活动') ?>">最新活动</a><em></em></li>
							<li id="cate311"><a href="<?php CATEGORY_URL('攻略') ?>">攻略指引</a><em></em></li>
							<li id="cate313"><a href="<?php CATEGORY_URL('游戏视频') ?>">游戏视频</a><em></em></li>
							
						</ul>
                    </div>
                    <div class="cont_news_detail">
                        <div>
							<ul>
							<?php
							$html=<<<_HTML
								<li>
									<strong>[@@CATEGORY_NAME@@]</strong>
									<span class="news_desc">
										<a href="@@URL@@" target="_blank">@@TITLE@@</a>
									</span>
									<span class="news_date fr">[@@DATE@@]</span>
								</li>
_HTML;
							SHOW_NEWS($html,'m/d',GET_CATEGORY_NAME($category_id),5,$page,array());
							?>
							</ul>
						</div>
                        <div class="pagination">
                            <?php
                            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),5,array(),$page);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<?php require_once("_footer.ctp"); ?>
    </div>
</div>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=40283245" charset="UTF-8"></script>

    

<script type="text/javascript">
    $(function () {
        $(".cont_news_title ul li").click(function () {
            var i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".cont_news_detail").children(":eq(" + i + ")").show().siblings().hide();
        });
        
        

    });
</script>

<?php
echo <<<_HTML
<script type="text/javascript">
$(function () {
	$("#cate{$category_id}").addClass("cur");
});
</script>
_HTML;
?>
        
</body></html>