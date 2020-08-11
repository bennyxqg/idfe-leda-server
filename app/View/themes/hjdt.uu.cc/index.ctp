<!DOCTYPE html>
<html xmlns="//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
<link href="<?php BASE_URL() ?>css/foot.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* -----底部样式开始------ */
.bottom{max-width:1920px;height:auto;overflow:hidden;margin:0 auto;background:#321502;}
.footer{color:#898989;width:820px;margin:0 auto;font-size:12px;position:relative;padding:20px 0 10px;font-family:Helvetica,Arial,sans-serif;background:#321502;}
.footer img{vertical-align:middle;}
.footer .logo{float:left;margin-top:8px;padding-right: 50px;width: 155px;height: 60px;}
.footer .logo-dev{padding-top:10px;margin-left:10px;}
.footer p{padding-bottom:10px;}
.footer a{color:#fff;}
.footer a:hover{text-decoration: none;}
.footer .cr{padding-top:18px; padding-bottom:10px;color:#fff;padding-left:0px; line-height:21px;}
.footer .cr span{margin-right:20px;}
.footer .cr .link a{margin:0 5px;}
.footer .zg{clear:both;height:24px;line-height:24px;padding:10px 0;color:#898989;}
.footer .zg strong{color:#904a1d; font-weight:bold;}
.footer .wj{float:right;margin:-26px 78px 0 0;}
</style>

<style>
/*
.active_page{
	background:darkblue;
	color:white !important;
}
*/
</style>
</head>

<body>
<div id="container">
  <div class="main">
    <h1><img src="<?php BASE_URL() ?>images/logo.png" width="268" height="54" /></h1>
    <a id="gift_date" href="javascript:;"><img src="<?php BASE_URL() ?>images/yuyue.png" width="282" height="243" /></a>
    <div class="float_r">
       <p class="ewm">
          <strong>hollow point</strong>
          <img src="<?php BLOCK('weixin_qrcode') ?>" width="102" height="102" />
          <span class="qq"><?php BLOCK('qq_group') ?></span>
          <a href="javascript:;" class="xinw"></a>
          <a href="<?php BLOCK('forum_url') ?>" class="luntan"></a>
       </p>
    </div>
  </div>
</div>

<div class="zhezhao"></div>
<div class="xinwen" id="xw_btn">
   <a href="#" class="close"><img src="<?php BASE_URL() ?>images/close.jpg" width="37" height="37" /></a>
   <div class="x_w">
      <p><img src="<?php BASE_URL() ?>images/xw_title.png" width="97" height="24" /></p> 
      <h2><a href="#" class="title">我是标题我是标题我是标题</a><!--<a href="#" class="more">更多<img src="<?php BASE_URL() ?>images/more.gif" width="19" height="19" /></a>--></h2>
      <input type='hidden' id='current_page' />
	  <input type='hidden' id='show_per_page' />
      <ul id="content">
        <!--
        <li><a href="#"><img src="<?php BASE_URL() ?>images/pre.gif" width="9" height="4" /><strong>[新闻]</strong>我是新闻我是新闻我是新闻<em><img src="<?php BASE_URL() ?>images/hot.gif" width="12" height="11" /></em></a><span class="date">[01/07]</span></li>
        <li><a href="#"><img src="<?php BASE_URL() ?>images/pre.gif" width="9" height="4" /><strong>[新闻]</strong>我是新闻我是新闻我是新闻<em><img src="<?php BASE_URL() ?>images/hot.gif" width="12" sheight="11" /></em></a><span class="date">[01/07]</span></li>
        <li><a href="#"><img src="<?php BASE_URL() ?>images/pre.gif" width="9" height="4" /><strong>[新闻]</strong>我是新闻我是新闻我是新闻</a><span class="date">[01/07]</span></li>
        <li><a href="#"><img src="<?php BASE_URL() ?>images/pre.gif" width="9" height="4" /><strong>[新闻]</strong>我是新闻我是新闻我是新闻</a><span class="date">[01/07]</span></li>
        -->
        <?php /*
        		SHOW_NEWS('<li><a target="_blank" href="@@URL@@"><img src="<?php BASE_URL() ?>images/pre.gif" width="9" height="4" /><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',200,0,array('OrderBy'=>'`sort` asc'))
        	*/?>
        
      </ul>
   </div>
   <div id='page_navigation' class="page"></div>
   <!--
   <div class="page"><a class="pre" href="#">上一页</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">...</a><a href="#">9</a><a href="#"  class="next">下一页</a></div>
   -->
</div>

<div class="yu_yue">
  <p class="choice"><span class="ios on"></span><span class="az"></span></p>
  <p class="biaodan">
  <input type="text" id="shuru" value="请输入手机号">
  <!--
  <input type="text" id="yz_m" />
  <img src="" id="yz_img" width="100"  height="39" />
  -->
  <a href="#" class="yuyue"></a>
  </p>
</div>

<!--    底部开始      -->
<div class="bottom">
<div class="footer">
    <span class="logo"><img src="<?php BASE_URL() ?>images/logo_w.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2015  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php BASE_URL() ?>images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php BASE_URL() ?>images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php BASE_URL() ?>images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php BASE_URL() ?>images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jbase64.js"></script>
<script type="text/javascript">
$(function(){
	
	var url='/getMoreNews/1/<?php CATEGORY_ID('新闻') ?>/200';
	
	$.ajax({
	    type: 'POST',
	    url: '/getMoreNews/1/<?php CATEGORY_ID('新闻') ?>/200',
	    success: function(res){
	    	var data = res.data;
	    	var lists='';
	    	for(var i=0;i<data.length;i++)
	    	{
				lists += '<li><a href="/show/'+data[i]['id']+'.html"><img src="//hjdt.uu.cc/hjdt.uu.cc/images/pre.gif" width="9" height="4"><strong>['+data[i]['news_category']+']</strong>'+data[i]['title']+'</a><span class="date">'+data[i]['updated']+'</span></li>';
            }
			$('#content').append(lists);
			
			var show_per_page = 4; 
			var number_of_items = $('#content').children().size();
			var number_of_pages = Math.ceil(number_of_items/show_per_page);
			$('#current_page').val(0);
			$('#show_per_page').val(show_per_page);
			var navigation_html = '<a class="previous_link" href="javascript:previous();">上一页</a>';
			var current_link = 0;
			while(number_of_pages > current_link){
				navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
				current_link++;
			}
			navigation_html += '<a class="next_link" href="javascript:next();">下一页</a>';
			$('#page_navigation').html(navigation_html);
			$('#page_navigation .page_link:first').addClass('active_page');
			$('#content').children().css('display', 'none');
			$('#content').children().slice(0, show_per_page).css('display', 'block');	
					
				},
				dataType: 'json'
			});


})
</script>

<script type="text/javascript">
function previous(){
	new_page = parseInt($('#current_page').val()) - 1;
	if($('.active_page').prev('.page_link').length==true){
		go_to_page(new_page);
	}
}
function next(){
	new_page = parseInt($('#current_page').val()) + 1;
	//if there is an item after the current active link run the function
	if($('.active_page').next('.page_link').length==true){
		go_to_page(new_page);
	}
}
function go_to_page(page_num){
	var show_per_page = parseInt($('#show_per_page').val());
	start_from = page_num * show_per_page;
	end_on = start_from + show_per_page;
	$('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
	$('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
	$('#current_page').val(page_num);
}
</script>


<script type="text/javascript">
$(function(){
    $('.xinw').click(function(){
		$('.zhezhao').show();
	    $('.xinwen').show().addClass('t_animate');
	})	
    $('.close').click(function(){
		$('.zhezhao').hide();
	    $('.xinwen').hide();
	}) 	
	
   $('#gift_date').click(function(){
		$('.zhezhao').show();
		$('.yu_yue').show().addClass('t_animate');
		/*
		$.ajax({
			type:"POST",
			url:"/get_verify_code",
			data:{charnum:4,mode:'img',width:99,height:50},
			dataType:"json",
			success:function(res){
				if(res.ret == 0){
					var imgUrl = BASE64.decoder(res.url);
					//alert(imgUrl);
					$("#yz_img").attr('src',imgUrl);
				}else {
					alert("获取失败");
				}
		  }
		  });
		  */
	})
	
	$('.zhezhao').click(function(){
		$('.yu_yue').hide();
		$('.zhezhao').hide();
		$('.xinwen').hide();
	})
	
	$('.choice span').each(function(i){
		$(this).on('click',function(){
		   	$(this).addClass('on').siblings().removeClass('on');
		})
	})
		
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').click(function(){
		$(this).attr('value','');
		})

    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		
		if(phone == '输入手机号预约礼包' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				//var type = $('.xz_down').attr('data-type');
				if($('.az').is('.on')){
					type = 2;
					}else{
					type = 1;
				}
				var code_id;
				if(type == 1){
					    code_id = 77;
					}else{
						code_id = 78;
				    }
					
				$.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:91},
					dataType:"json",
					success:function(res){
						if(res.ret == 2){
							alert("您已经参加过预约！");
						}else if(res.ret == 0){
							alert("您已预约成功，我们会在首测前1天以短信形式向您发送预约礼包");
						}else{
							alert("预约失败！");
						}
				  }
		    	});

				//var verify = $('#yz_m').val();
				/*
				 $.ajax({
						type:"POST",
						url:"/send_code_by_sm",
						data:{phone:phone,code_id:code_id,verify:verify,type:type,mode:'img'},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("您的手机号已提交，请查看短信");
							}else if(res.ret == 8){
								alert("您的手机已登记，请勿重复领取");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else if(res.ret == 4){
								alert("目前兑换码存量不足，请联系官方人员进行领取");
							}else{
								alert("领取失败，请稍后再试");
							}
					  }
				});
				*/

			}	
		}
	    })
  	
})
</script>
</body>
</html>
