<!DOCTYPE html><html lang="zh-cn"><head>
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
/*BLOCK*/ ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link media="screen" href="//jzw.uu.cc/jzw.uu.cc/css/layout.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="//jzw.uu.cc/jzw.uu.cc/favicon.ico">
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
            	<img id="inner_banner_edit" class="CUSTOM_EDIT IMG_EDIT" alt="" src="//jzw.uu.cc/uploads/editor_upload/images/201509231603037943.jpg" style="width: 1920px; height: 476px;">
            </div>
        </div>
        <div class="content">
            <div class="news_title">
                <div class="wd980 clearfix">
                    <div class="dh_left fl">
                        <a href="/">首页</a> &nbsp;&gt;&nbsp;&nbsp;
                        <?php /*BLOCK*/ CATEGORY_NAME($category_id) /*BLOCK*/ ?>
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
							<li id="cate223"><a href="//jzw.uu.cc/news/223.html">新闻</a><em></em></li>
							<li id="cate224"><a href="//jzw.uu.cc/news/224.html">最新活动</a><em></em></li>
							<li id="cate225"><a href="//jzw.uu.cc/news/225.html">攻略指引</a><em></em></li>
							<li id="cate226"><a href="//jzw.uu.cc/news/226.html">游戏视频</a><em></em></li>
							<li id="cate227"><a href="//jzw.uu.cc/news/227.html">机战大全</a><em></em></li>
						</ul>
                    </div>
                    <div class="cont_news_detail">
                        <div>
							<ul>
							<?php /*BLOCK*/
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
							/*BLOCK*/ ?>
							</ul>
						</div>
                        <div class="pagination">
                            <?php /*BLOCK*/
                            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),5,array(),$page);
                            /*BLOCK*/ ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<div class="footer">
        <div class="foot">
            <div class="footTop clearfix">
                <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏<img src="//jzw.uu.cc/jzw.uu.cc/images/f_logo.png" width="136"></a></h2>
                <div class="nav fl" style="position:relative">
                    <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//career.idreamsky.com/">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
                    <p style="text-indent:5px;float:left;">Copyright &copy; 2009-2016 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
                    <p style="text-indent:5px;float:left;">粤网文〔2016〕6871-1632号 新广出审[2016]2527号 </p>
                    <p style="text-indent:5px;float:left;">出版物号：ISBN 978-7-7979-1372-0 文网游备字〔2016〕Ｍ-SLG 0159 号 </p>
                    <div class="link fr" style="position:absolute; right:0; top:25px;">
                        <a class="no_margin" target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
                        <a class="no_margin" target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
                        <a class="no_margin" target="_blank" href="//net.china.com.cn/index.htm"></a>
                        <a class="no_margin" target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
                        <a class="no_margin" target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08c52543578015267e434ba2936"></a>
                    </div>
                </div>
                
            </div>
            <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
        </div>
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

<?php /*BLOCK*/
echo <<<_HTML
<script type="text/javascript">
$(function () {
	$("#cate{$category_id}").addClass("cur");
});
</script>
_HTML;
/*BLOCK*/ ?>
        
</body></html>