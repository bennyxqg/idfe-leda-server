<?php
//引入WebsiteHelper
$this->Website->init();

$time = time();
$siteId = $GLOBALS['site_id'];

$defaultNum = 0; //预约数累加
//start_time=1508922410##minute_num=0##default_num=20000
//累加逻辑
$numInc = explode('##', GET_BLOCK('yuyue_num_inc'));
$startTime = explode('=', $numInc[0]);
$endTime = explode('=', $numInc[1]);
$minuteIncNum = explode('=', $numInc[2]);
$defaultIncNum = explode('=', $numInc[3]);
//按start_time计算时间间隔，然后按每分钟的规则递增预约数
if ($startTime[1] > 0 && $minuteIncNum[1] > 0) {
    if ($endTime[1] <= 0 || $endTime >= $time) {
        $minuteCount = ($time - $startTime[1]) / 60;
        $defaultNum += intval($minuteIncNum[1] * $minuteCount);
    }
}
//额外增加
$defaultNum += intval($defaultIncNum[1]);
?><!DOCTYPE html>
<html>
<head>
	<?php
        $this->Website->init();
        echo '<title>'.GET_BLOCK('web_title').'</title>';
        echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
        echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
	<link rel="shortcut icon" href="http://dl.gamdream.com/activity/gavin/AHCQ//icon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" user-scalable="no">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/swiper-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php BASE_URL() ?>css/reset.css"/>
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/common.css?var"/>
    <script type="text/javascript">
        var devieWidth=Math.min(750,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
</head>
<body>
	<header>
		<div id="header" style="height:1.3rem;">
			<div class="head">
				<div class="header">
					<div class="head_left">
					    <div class="head_icon"></div>
					    <p class="head_name">暗影旋风</p>
					    <span class="head_secondname">首款单触控制动作手游</span>
				    </div>
				    <div class="head_right">
				        <a href="http://bs.uu.cc/home" class="apoint"><img class="nav" src="<?php BASE_URL() ?>images/download_y.png"></a>
				    </div>
				</div>
			</div>
		</div>
	</header>
	<div id="content">
		<a href="javascript:;" class="yuyue rotate"></a>
		<h3 class="yuyueData">已有 <strong id="collectPhoneNum">loading..</strong>  人预约</h3>
		<div class="video_box"><a class="video"  data="http://dl.gamdream.com/activity/dream/scb/1920x1080.mp4"><img src="<?php BASE_URL() ?>images/1.jpg"><div></div></a></div>
	</div>
	<div class="foot">
		<a href="javascript:;" class="wxShare"></a>
		<a href="<?php echo GET_BLOCK('qq_jump1');?>"></a>
		<a href="<?php echo GET_BLOCK('weibo_url');?>"></a>
	</div>
	<!--<footer>
		<div class="footer">
			Copyright©2009-2018  深圳市创梦天地科技有限公司<br>
			版权所有 粤ICP备11018438号
		</div>
	</footer>-->
<div class="dialog" id="dgvideo">
	<video autoplay poster controls src="" height="100%" width="100%" class="videof"></video>
</div>
<div class="fade"></div>
<div class="pop_box">
	<a href="javascript:;" class="close"></a>
	<div class="ios_box"><img src="<?php BASE_URL() ?>images/ios_text.png" alt=""><a href="javascript:;"  class="download"></a></div>
	<div class="and_box">
		<h3><img src="<?php BASE_URL() ?>images/an_title.png" alt=""></h3>
		<input id="phoneNum" class="yuyue_ipt" name="phone" type="tel" placeholder="请输入手机号码">
		<a href="javascript:;" class="yuyue_go"></a>
	</div>
	<div class="su_box">
		<h3><img src="<?php BASE_URL() ?>images/su_text.png" alt=""></h3>
		<img class="qrCode" src="<?php echo GET_BLOCK('qrCode_yuyue');?>" alt="">
	</div>
</div>
<div class="layer"><img src="<?php BASE_URL() ?>images/share.png" alt=""></div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.min.js"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script charset="utf-8" type="text/javascript"  src="<?php BASE_URL() ?>js/swiper.min.js"></script>
<!--<script type="text/javascript" src="<?php BASE_URL() ?>js/common.js"></script>-->
<script>
	$(document).ready(function(){
		function getCollectPhoneNum() {
            var num = <?=$defaultNum;?>;
            $("#collectPhoneNum").html(num);
            $.ajax({
                type: "POST",
                url: "/get_collect_phone_num",
                data: {site_id: <?=$siteId;?>, in_code_id: '1,2'},
                dataType: "json",
                async: false,
                success: function (res) {
                    if (res.ret == 0) {
                        num = Number(res.total) + <?=$defaultNum?>;
                        $("#collectPhoneNum").html(num);
                        return true;
                    }
                }
            });
            function reach(number){
                for(var i=0; i<number; i++){
                    $('.main2 ul li span').eq(i).addClass('on');
                }
            }
            if (num >= 100000) { reach(1) } ;
            if (num >= 250000) { reach(2) } ;
            if (num >= 500000) { reach(3) } ;
            if (num >= 750000) { reach(4) } ;
            if (num >= 1000000) { reach(5) } ;
        }
        getCollectPhoneNum();
		//头部的点击打开视频
        $(".video").on("click", function () {
            var videoplay = $(this).attr("data");
            // 将视频的链接赋值上去
            $("#dgvideo video").attr('src',videoplay);                 
            $("#dgvideo").show();
            $(".fade").show();
        });
        //点击蒙层关闭全部弹框
        $(".fade").on("click", function () {
            // 去除视频链接
            $("#dgvideo video").attr("src","");
            $("#dgvideo,.fade,.dia_code,.pop_box").hide();
        });
        //点击蒙层关闭全部弹框
        $(".layer").on("click", function () {
            $("#dgvideo,.fade,.dia_code,.pop_box,.layer").hide();
        });
        //点击蒙层关闭全部弹框
        $(".wxShare").on("click", function () {
            $(".layer").show();
        });
        $(".close").on("click", function () {
            // 去除视频链接
            $(".pop_box").hide();
            $("#dgvideo,.fade,.dia_code").hide();
        });
		var u = navigator.userAgent;
		//预约
		$('.yuyue').click(function(){
			$('.pop_box,.fade').show();
			if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){//ios
				$(".pop_box .ios_box").show();
				$(".pop_box .and_box").hide();
				$(".pop_box .su_box").hide();
			}else{
				$(".pop_box .ios_box").hide();
				$(".pop_box .and_box").show();
				$(".pop_box .su_box").hide();
			}
		});
		var phone;
		var myreg = /^1[34578]\d{9}$/;
		$('.yuyue_go').click(function(){
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
						data:{phone:phone,collect_name:<?=$siteId;?>},
						dataType:"json",
						success:function(res){
							if(res.ret == 2){
								alert("您已经参加过预约！");
							}else if(res.ret == 0){
								$(".pop_box .ios_box").hide();
								$(".pop_box .and_box").hide();
								$(".pop_box .su_box").show();
							}else{
								alert("预约失败！");
							}
					}
				});
				}
			}
		});

		$('.apoint .nav').on('click',function(){
			$('.hiddenNav').show();
			$(this).hide();
			$('.apoint .close').show();
		});
		$('.apoint .close').on('click',function(){
			$('.hiddenNav').hide();
			$(this).hide();
			$('.apoint .nav').show();
		});
	})
</script>
<script>
$(function(){
    wx.config({
        debug: false,
        appId: '<?php echo $wxSignPackage["appId"];?>',
        timestamp: '<?php echo $wxSignPackage["timestamp"];?>',
        nonceStr: '<?php echo $wxSignPackage["nonceStr"];?>',
        signature: '<?php echo $wxSignPackage["signature"];?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
            'checkJsApi',
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone'
        ]
    });
    wx.ready(function () {
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: '街机怀旧格斗手游，与您一起重温经典', // 分享标题
            link:'<?php echo $wxSignPackage["url"];?>',
            imgUrl: "http://bs.uu.cc/bs.uu.cc/images/icon.png", // 分享图标
            success: function () {
               // alert('success');
            },
            cancel: function () {
                //alert('cancel');
            }
        });
        wx.onMenuShareAppMessage({
             title: '街机怀旧格斗手游，与您一起重温经典', // 分享标题
             desc: '暗影旋风：完美还原童年红白机游戏风格，重燃起对热血物语，快打旋风、怒之铁拳、双截龙等经典老游戏怀旧情结',
             link:'<?php echo $wxSignPackage["url"];?>',
             imgUrl: "http://bs.uu.cc/bs.uu.cc/images/icon.png", // 分享图标
             trigger: function (res) {

             },
             success: function (res) {
                 //alert('分享成功！');
             },
             cancel: function (res) {
                 //alert('已取消！');
             },
             fail: function (res) {
                 alert(JSON.stringify(res));
             }
         });
         wx.onMenuShareQQ({
             title: '街机怀旧格斗手游，与您一起重温经典', // 分享标题
             desc: '暗影旋风：完美还原童年红白机游戏风格，重燃起对热血物语，快打旋风、怒之铁拳、双截龙等经典老游戏怀旧情结', // 分享描述
             link: '<?php echo $wxSignPackage["url"];?>', // 分享链接
             imgUrl: 'http://bs.uu.cc/bs.uu.cc/images/icon.png', // 分享图标
             success: function () {
             // 用户确认分享后执行的回调函数
             },
             cancel: function () {
             // 用户取消分享后执行的回调函数
             }
         });
     });
});
</script>
</body>
</html>