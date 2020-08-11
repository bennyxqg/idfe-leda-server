<?php 
require_once "include.php";
$data6=$this->Tanke->getAudio(6,$page);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
echo '<title>'.GET_BLOCK('web_title').'</title>'."\n";
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>'."\n";
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>'."\n";
?>
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" />

</head>

<body>

<div class="header">
	<a class="fl logo" href="//xhzc.uu.cc/" target="_self"></a>
    <div class="fl menu">
    	<ul>
        	<li><a href="//xhzc.uu.cc/" target="_self">官网首页</a></li>
            <li><a href="//xhzc.uu.cc/news/98" target="_blank">新闻资讯</a></li>
            <li><a href="javascript:alert('敬请期待！')" target="_self">游戏特色</a></li>
            <li><a href="<?php echo $topData['other']['forum_url'];?>" target="_self">官方论坛</a></li>
        </ul>
    </div>
    <a class="fr qq_btn" href="javascript:;"></a>
    <a class="fr weixin_btn" href="javascript:;"></a>
    <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo $topData['other']['weixin_qrcode'];?>"><h3>扫一扫领礼包</h3></div>
    <div class="pa wxin_qq_pop qq_pop"><span>加入VIP先遣队</span>
    <?php $qqqun = explode(',',$topData['other']['qq_group']);
    	foreach ($qqqun as $v):
			echo "<h3>$v</h3>";
		endforeach;
    ?>
    </div>
</div>

<div class="main1">
	<div class="wrap"></div>
</div>
<div class="main2">
	<div class="wrap">
    	<a class="yuyue_link" href="javascript:;"></a>
        <a class="down_link" href="//xhzc.uu.cc/download" ></a>
    </div>
</div>
<div class="main3">
	<div class="wrap"></div>
</div>


<div class="zhezao"></div>
<div class="yuyue">
    <a class="close" href="javascript:;"></a>
    <p>输入手机号，预约测试资格</p>
    <input class="yuyue_ipt" placeholder="请输入手机号" type="tel">
    <a class="yuyue_btn" href="javascript:;"></a>
</div>


<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	
	
	//微信
	var wxin_dl = $(".weixin_btn");
	var wxin_pd = $(".wxin_pop");
	var qqun_dl = $(".qq_btn");
	var qqun_pd = $(".qq_pop");
	wxin_dl.hover(function() {
		wxin_pd.addClass("wxin_pop_show");
	}, function() {
		wxin_pd.removeClass("wxin_pop_show");
	});
	$(".qq_btn,.qq_pop").hover(function() {
		qqun_pd.addClass("wxin_pop_show");
	}, function() {
		qqun_pd.removeClass("wxin_pop_show");
	});
	
	//预约
	$(".yuyue_link").click(function(){
		$(".yuyue,.zhezao").show();
	});
	$(".close").click(function(){
		$(".yuyue,.zhezao").hide();
	});
	
	var phone,sysType,type;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue_btn').click(function(){
		phone = $('.yuyue_ipt').val();

		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:101},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("您已预约成功！");
						}else{
							alert("预约失败！");
						}
				  }
			});
			}	
		}
	})
});	
</script>
</body>
</html>
