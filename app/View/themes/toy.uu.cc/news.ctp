<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php /*BLOCK*/
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords" />';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description" />';
/*BLOCK*/ ?>
<link rel="stylesheet" type="text/css" href="//ddx.uu.cc/toy.uu.cc/css/style.css" />

<script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
<!-- CUSTOM-JS-COMPONENT -->

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?6ce2185a19fd69d91e33207c431a2cc2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body class="page">
<div class="pr nav">
    <a href="//ddx.uu.cc/" title="《玩家爆破》官网首页" class="pa logo"></a>
    <div class="pa nav_menu">
        <?php /*BLOCK*/
        	echo '<a class="n1" href="'.GET_CATEGORY_URL('资讯').'">资讯</a>';
        	echo '<a class="n2" href="'.GET_CATEGORY_URL('攻略').'">攻略</a>';
        	echo '<a class="n3" href="'.GET_CATEGORY_URL('活动').'">活动</a>';
            echo '<a class="n4" href="'.GET_BLOCK('baidu_tieba_url').'" target="_blank">贴吧</a>';
        /*BLOCK*/ ?>
        	<a class="n5" href="//shang.qq.com/wpa/qunwpa?idkey=9568f4c4482157c6c32c608ba84ce6b6e1becd48df2d9cef6edc9213ba78d185" target="_blank">Q群</a>
    </div>
    <span class="pa wxin"></span>
    <div class="pa wxin_pop">
    <?php /*BLOCK*/
        echo '<img src="'.GET_BLOCK('weixin_qrcode').'" />';
        echo '<h2>扫描二维码</h2><span>关注'.GET_BLOCK('weixin_account').'公众号</span></div>';
    /*BLOCK*/ ?>
</div>
<div class="page_content">
	<div class="pr page_wrap">
    	<div class="pa wx_code">
    	<?php /*BLOCK*/
        	echo '<img src="'.GET_BLOCK('weixin_qrcode').'" />';
       	/*BLOCK*/ ?>
            <span>扫一扫关注微信公众号</span>
        </div>
        <div class="content">
        <?php /*BLOCK*/
        	$map=array('资讯'=>'NEWS','攻略'=>'STRATEGY','活动'=>'ACTIVITY');
        	echo '<h2 class="pr page_tit">'.GET_CATEGORY_NAME($category_id).'<i>';
        	echo $map[GET_CATEGORY_NAME($category_id)].'</i>';
        /*BLOCK*/ ?>
        	
        	<a class="pa back_home" href="//ddx.uu.cc/" title="返回官网首页">返回首页</a></h2>
            <ul class="news_list">
            <?php /*BLOCK*/
            	SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m-d',GET_CATEGORY_NAME($category_id),10,$page,array());
            /*BLOCK*/ ?>
            </ul>
            <div class="pages">
            <?php /*BLOCK*/
            SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array(),$page);
            /*BLOCK*/ ?>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="wrap">
        <span class="logo"><img src="//ddx.uu.cc/toy.uu.cc/images/ft_logo1.png" /><img src="//ddx.uu.cc/toy.uu.cc/images/ft_logo2.png" /></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<script>
$(document).ready(function(){ 
	//微信
	var dl = $(".wxin");
	var pd = $(".wxin_pop");
	dl.hover(function() {
		pd.addClass("wxin_pop_show");
	}, function() {
		pd.removeClass("wxin_pop_show");
	});
})
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>
