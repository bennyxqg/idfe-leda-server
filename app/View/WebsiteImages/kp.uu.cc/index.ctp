<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" />
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css" />
</head>

<body>

<div class="index1">
	<div class="wrap">
    	<img class="img-code" src="<?php BASE_URL() ?>images/11.jpg" />
        <a class="wxin-btn" href="javascript:;"></a>
        <div class="wxin-pop"><img src="<?php BASE_URL() ?>images/11.jpg" /></div>
    </div>
</div>
<div class="index2">
	<div class="wrap">
    	<a class="video_btn video_btn_link" name="<?php BLOCK('vedio_url') ?>" title="播放精彩视频" href="javascript:;"></a>
    </div>
</div>
<div class="index3">
	<div class="wrap">
    	<div class="focus-img">
        	<div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/index2.jpg" /></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/index2.jpg" /></div>
                    <div class="swiper-slide"><img src="<?php BASE_URL() ?>images/index2.jpg" /></div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="news-box">
        	<h2 class="tit">新闻资讯 | NEWS</h2>
            <a class="more" href="#link" target="_blank"></a>
            <ul>
            	<li><em class="new">最新</em><a href="#link" target="_blank">我是各种新闻资讯请点击我请点击我请点击我请点我是各种新闻资讯请点击我请点击我请点击我请点</a><span>05/18</span></li>
                <li><em class="act">活动</em><a href="#link" target="_blank">我是各种新闻资讯请点击我请点击我请点击我请点</a><span>05/18</span></li>
                <li><em class="anm">公告</em><a href="#link" target="_blank">我是各种新闻资讯请点击我请点击我请点击我请点</a><span>05/18</span></li>
                <li><em class="anm">公告</em><a href="#link" target="_blank">我是各种新闻资讯请点击我请点击我请点击我请点</a><span>05/18</span></li>
            </ul>
        </div>
    </div>
</div>


<div id="foot">
    <div class="footer">
        <span class="logo"><a href="http://www.idreamsky.com/" target="_blank"><img src="images/foot_logo3.png"></a></span>
        <div class="cr">
            <p class="link"><a target="_blank" href="http://www.idreamsky.com/homes/about">关于我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a><em>|</em><a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2017  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        </div>
        <div class="g_rule"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>


<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>

<script>

//微信
	var wxin_dl = $(".wxin-btn");
	var wxin_pd = $(".wxin-pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin-pop-show");
	}, function() {
		wxin_pd.removeClass("wxin-pop-show");
	});
	
	
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
	
	
	//页面头部视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.zhezao').show();
		$('.s_p_k').show();
	})
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.s_p_k').hide();
		$('.zhezao').hide();
	})

</script>

</body>
</html>
