
<?php 
$this->Website->init();
//引入TankeHelper
$data=$this->Jxmg->getDatas(0,$page);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<?php
require_once "include.php";

$base_path = "//mg.uu.cc/mg.uu.cc/";

echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $base_path; ?>css/style.css" media="screen">

<script src="<?php echo $base_path; ?>js/jquery.min.js"></script>
<script src="<?php echo $base_path; ?>js/jquery.pagination.js"></script>
<link rel="shortcut icon" href="<?php echo $base_path; ?>favicon.ico">
</head>

<body>

<div class="top">
	<div class="wrap">
    	<img class="game-logo" src="<?php echo $base_path; ?>images/game_logo.png" />
        <img class="game-name" src="<?php echo $base_path; ?>images/game_name.png" />
        <a class="down-links" href="<?php echo GET_BLOCK('ios_download_url'); ?>"><img src="<?php echo $base_path; ?>images/down_ios.png" /></a>
        <a class="down-links" href="<?php echo GET_BLOCK('android_download_url'); ?>"><img src="<?php echo $base_path; ?>images/down_az.png" /></a>
        <a class="wxin fr" href="javascript:;"><img src="<?php echo $base_path; ?>images/wxin.png" /></a>
        
        <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo GET_BLOCK('weixin_qrcode'); ?>"></div>
    </div>
</div>

<div class="index1">
	<div class="wrap">
    	<a class="video_btn_link" name="<?php echo GET_BLOCK('vedio_url');?>" title="播放精彩视频" href="javascript:;"></a>
    </div>
</div>
<div class="index2">
	<div class="wrap"></div>
</div>
<div class="index3">
	<div class="wrap">
    	<div class="img-list">
        	<span class="prev-end"></span>
            <span class="next-end"></span>
            <ul></ul>
        </div>
        <div class="img-page"></div>
    </div>
</div>


<div id="foot">
    <div class="footer">
        <span class="logo"><img src="<?php echo $base_path; ?>images/logo.png"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>

            <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> 
				<a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $base_path; ?>images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
				<a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $base_path; ?>images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
				<a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $base_path; ?>images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
				<a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $base_path; ?>images/beian.jpg" alt="不良信息举报中心" width="16"> </a> 
				<a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08b5d3af2d7015d646c130668ae"> <img src="<?php echo $base_path; ?>images/w_foot2_icon2.png" alt="电子标签" width="16"> </a> </p>
            <p>粤网文〔2016〕6871-1632号  新广出审[2017]5374号  </p>
            <p>出版物号：ISBN  978-7-7979-8885-8 文网游备字〔2017〕Ｍ-CSG 1423 号</p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<div class="mask"></div>
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close" href="javascript:;"></a></div>

<div class="img-show"><img src="" /><a class="close" href="javascript:;"></a></div>

<script>
$(function(){
	
	var url = 'http://mg.uu.cc/datas/0/1';
	$.get(url, function(json){
		var obj = eval("("+json+")");
		$('.img-page').pagination({
			pageCount: obj.page_total, /*这里是后台传过来的总页数*/
			jump:true,
			coping:true,
			prevContent:'上页',
			nextContent:'下页',
			callback:function(api){
				
				var pageIndex = api.getCurrent(),
					data = {
					page: pageIndex, //传当前的页码
				};
				
				var url = 'http://mg.uu.cc/datas/0/'+pageIndex;
				$.getJSON(url, data, function(json){
//					var obj = eval("("+json+")");
//					console.log(json.data);
					$('.img-list ul').html(json.data)
				});
			}
		});
		$('.img-list ul').html(obj.data)
		$('.img-list ul img').click(function(){
			var imgSrc = this.name;
			$('.img-show img').attr('src',imgSrc);
			$('.mask,.img-show').show();
		})
//		console.log(obj.data,obj.page_total);
	});
	
	//页面头部视频	   
	$('.video_btn_link').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.mask,.s_p_k').show();
	})
	
	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.mask,.s_p_k,.img-show').hide();
	})
	
	
	
	
	//微信
	var wxin_dl = $(".wxin");
	var wxin_pd = $(".wxin_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});

})
</script>
</body>
</html>
