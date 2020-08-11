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
<link rel="shortcut icon" href="//sds.uu.cc/sds.uu.cc/favicon.ico">
</head>

<body>

<div class="index1">
	<div class="wrap">
    	<a class="go_home" href="//sds.uu.cc/home/"></a>
    </div>
</div>
<div class="index2">
	<div class="wrap">
    	<a class="yuyue_go" href="javascript:;"></a>
        <a class="az_down" href="javascript"></a>
        <div class="yuyue_num">现在已有 <strong><?php echo intval(GET_BLOCK('player_order_count'))+GET_COLLECT_PHONE_COUNT() ?></strong> 人预约，100%得礼包</div>
    </div>
</div>
<div class="pr index3">
	<div class="wrap">
    	<div class="scroll_msg">
        	<ul>
        	<?php
        	SHOW_PLAYER_DATAS('<li>:@@TEXT1@@</li>','m-d',0,20,1,array('OrderBy'=>'`created` desc','Condition'=>'`int1`=1'));
        	?>
            </ul>
        </div>
        <div class="msg_ipt">
        	<input class="msg_inpt" type="text" />
            <a class="msg_btn" href="javascript:;"></a>
        </div>
    </div>
    <div class="copy_right">Copyright©2004-2016 Freejoy Technology Co. Ltd.<br>All rights reserved. 乐逍遥 版权所有<br>©Masami Kurumada/SHUEISHA<br>©SEGA</div>
</div>

<div id="foot">
    <div class="footer">
        <span class="logo"><a href="//www.idreamsky.com/" target="_blank"><img src="<?php BASE_URL() ?>images/foot_logo1.jpg"></a><img style="margin:0 20px;" src="<?php BASE_URL() ?>images/foot_logo2.jpg"><img src="<?php BASE_URL() ?>images/foot_logo3.jpg"></span>
        <div class="cr">
            <p class="link"><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//ld.uu.cc/ld.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//ld.uu.cc/ld.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//ld.uu.cc/ld.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a> </p>
        	<p>Copyright©2004-2013 Freejoy Technology Co. Ltd.All rights reserved. 乐逍遥 版权所有  </p>
            <p>©Masami Kurumada/SHUEISHA</p>
            <p>©SEGA</p>
        </div>
        <div class="game_rule"><strong>健康游戏忠告：</strong><br>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>

<div class="yuyue"><input class="yuyue_ipt" placeholder="请输入手机号" type="tel" /><div id="dropdown"><input class="input_select" readonly="readonly" type="text" value="安卓"/><ul><li><a rel="2">安卓</a></li><li><a rel="1">IOS</a></li></ul></div><a class="yuyue_btn" href="javascript:;"></a><a class="close" href="javascript:;"></a></div>

<div class="div_pop">
	<img class="wx_code" src="<?php BLOCK('weixin_qrcode') ?>" />
    <a class="weixin_pop" href="javascript:;">官方微信</a>
    <a href="<?php BLOCK('weibo_url') ?>" target="_blank">官网微博</a>
    <a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank">官网贴吧</a>
    <a href="" target="_blank">九游论坛</a>
    <a href="" target="_blank">官方论坛</a>
    <p class="qqun">
    1群:<?php BLOCK('qq_group1') ?><br>2群:<?php BLOCK('qq_group2') ?>
    </p>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>


$(document).ready(function(){
	$(".yuyue_go").click(function(){
		$(".yuyue").show();
	});
	$(".close").click(function(){
		$(".yuyue").hide();
	});
	
	$(".input_select").click(function(){ 
		var ul = $("#dropdown ul"); 
			if(ul.css("display")=="none"){ 
				ul.slideDown("fast"); 
			}else{ 
				ul.slideUp("fast"); 
			}
		}); 
		$("#dropdown ul li a").click(function(){ 
		var txt = $(this).text(); 
		$(".input_select").val(txt); 
		$("#dropdown ul").hide(); 
	}); 
	
	var phone,sysType,type;
	var myreg = /^1[34578]\d{9}$/;
    $('.yuyue_btn').click(function(){
		phone = $('.yuyue_ipt').val();
		sysType = $('.input_select').val();
		
		if(sysType == "安卓"){
			type =2;
		}else{
			type =1;
		}
		if(phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
					$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:95},
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
	
//	$(".weixin_pop").hover(function(){
//		$(".wx_code").show(1000);
//	},function(){
//		$(".wx_code").hide(1000);
//	})
	
	var timer;
	$(".weixin_pop").on({
	"mouseenter":function(){
		clearTimeout(timer);
		timer=setTimeout(function(){
			$(".wx_code").fadeIn();
		},200);
	},
	"mouseleave":function(){
		$(".wx_code").fadeOut();
		clearTimeout(timer);
	}
	});
	
	//向上滚动
	var $this = $(".scroll_msg");
    var scrollTimer;
    $this.hover(function(){
          clearInterval(scrollTimer);
     },function(){
       scrollTimer = setInterval(function(){
                     scrollNews( $this );
                }, 1500 );
    }).trigger("mouseout");
	
	function scrollNews(obj){
	   var $self = obj.find("ul:first");
	   var lineHeight = $self.find("li:first").height();  
	   $self.animate({ "margin-top" : -lineHeight +"px" },500 , function(){
			 $self.css({"margin-top":"0px"}).find("li:first").appendTo($self);
	   })
	}
	
	//提交留言
	$('.msg_btn').click(function(){
		msgContent = encodeURI($('.msg_inpt').val());
		
		if(msgContent == ''){
			alert('请输入留言内容！');
			}else{
			$.ajax({
				type:"POST",
				url:"//sds.uu.cc/manage/index.php",
				data:{r:'collect',action:'sds_comment',content:msgContent},
				dataType:"json",
				success:function(res){
					if(res.ret == 0){
						 $(".msg_inpt").val("");
						 alert("留言成功，谢谢您的关注！")
					 }else{
						 alert("留言失败！");
					}
				}
			});	
		}
	})
	
})


</script>
</body>
</html>
