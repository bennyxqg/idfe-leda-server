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
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css?var=1" />
<style>
	/*   首页底部样式   */
#foot{ position:relative; width:100%;height:230px;background-color: #1f191c;}
.newFooter{color:#fff;width:1180px;margin:0 auto;font-size:12px;position:relative;padding:20px 0 0;font-family:Helvetica,Arial,sans-serif; }
.newFooter img{vertical-align:middle;}
.newFooter .cr{width:100%;height:80px;padding-top:18px; padding-bottom:10px;border-bottom:1px solid #ccc;color:#fff;padding-left:0px; line-height:21px;}
.newFooter .messages{overflow: hidden;margin-bottom:24px;margin-top:20px;color:#b9b7b8;}
.newFooter .messages .logo{margin-left:130px;float:left;width: 230px;height:72px;display: inline-block;}
.newFooter .messages .logo .img_logo{margin-right:50px;}
.newFooter .messages .foot_text{float:left;width: 708px;}
.newFooter .messages span{margin-right:20px;}
.newFooter .messages p{line-height: 24px;color:#b9b7b8;}
.newFooter .messages .link a{margin:0 10px;color:#b9b7b8;}
.newFooter .messages .link a.first_o{margin:0;color:#b9b7b8;}
.newFooter .messages img{display:inline-block; }
.newFooter .zg{clear:both;line-height:22px;padding:10px 0 10px 20px;text-align: center; color:#b9b7b8;font-size: 14px;}
.newFooter .zg strong{font-size:14px; font-weight:bold;}
.newFooter .wj{float:right;margin:-26px 78px 0 0;}

</style>

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

<div id="foot">
    <div class="newFooter">
        <div class="messages">
            <div class="logo">
                <img class="img_logo" src="<?php BASE_URL() ?>images/w_foot_logo.png" alt="">
                <img src="<?php BASE_URL() ?>images/w_foot_icon.png" alt="">
            </div>
            <div class="foot_text">
                <p class="link"> <a class="first_o" target="_blank" href="http://www.idreamsky.com/homes/about">关于我们 </a>&nbsp;&nbsp; | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                <p> <span>Copyright©2009-<em class="copy-year">2018</em>  IDREAMSKY. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创梦天地科技有限公司  版权所有
				<br>  粤ICP备11018438号&nbsp;&nbsp;&nbsp;&nbsp; 粤网文〔2016〕6871-1632号  &nbsp;&nbsp;&nbsp;   批准文号：新广出审[2016]1423号 <br> 出版物号：ISBN 978-7-7979-0196-3</span> 
                <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
                <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
                <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
                <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a>
                <a target="_blank" href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/gameNetTag/2c94c08c628b45400162c2610bd1425d"><img src="<?php BASE_URL() ?>images/w_foot2_icon2.png" alt="电子标签" width="16"></a> </p>

            </div>
        </div>
        <div class="zg"><strong>健 康 游 戏 忠 告 ：</strong>抵制不良游戏，拒绝盗版游戏。 注意自我保护，谨防上当受骗。 适度游戏益脑，沉迷游戏伤身。 合理安排时间，享受健康生活。</div>

    </div>
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
