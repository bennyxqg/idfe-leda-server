<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>v2/css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico"/>
<link rel="bookmark" href="<?php BASE_URL() ?>favicon.ico"/>
<?php require_once('top.ctp'); ?>
</head>

<body class="index">

<div class="index1">
	<div class="wrap">
    	<a class="home_link" href="//ld.uu.cc" target="_blank" title="前往官网首页"></a>
    </div>
</div>

<div class="index2">
	<div class="wrap">
        <div class="content">
            <div class="fl vedio_box"><video src="<?php BLOCK('pc_ad_vedio') ?>" width="502" style="background:#000;" height="302" poster="<?php BLOCK('pc_ad_vedio_img') ?>" controls></video></div>
            <div class="fr">
                <div class="code_box">
                    <!--<img src="<?php BASE_URL() ?>v2/images/code.jpg" />-->
                    <img alt="" src="<?php BLOCK('game_download_qrcode') ?>">
                    <a href="<?php BLOCK('ios_download_url') ?>" title="App Store下载"></a>
                    <a href="<?php BLOCK('android_download_url') ?>" title="安卓下载"></a>
                </div>
                <a class="home_btn" href="//ld.uu.cc/home" title="前往官网"></a>
            </div>
            <div class="index_min_bar">
                <ul>
                    <li><a id="gift_date" href="javascript:;"><img src="<?php BASE_URL() ?>v2/images/min_bar_01.jpg" /></a></li>
                    <?php
                    	SHOW_DATAS('<li@@LAST_CONTENT1@@><a href="@@STR2@@"><img src="@@STR1@@" /></a></li>','m-d',0,2,0,array('LastContent1'=>' class="nmr"'));
                    ?>

                </ul>
            </div>
            <div class="slide">
                <ul class="clearfix">
                <?php
                $format=<<<_HTML
                	<li class="p@@ID@@@@FIRST_CONTENT1@@">
                        <span@@FIRST_CONTENT2@@></span>
                        <img src="@@STR1@@" width="420" alt="">
                    </li>
_HTML;
                SHOW_DATAS($format,'m-d',1,4,0,array('FromID'=>1,'FirstContent1'=>' cur','FirstContent2'=>' style="display:none;"'));
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>


<div class="yu_yue">
  <a class="close2" href="javascript:;"></a>
  <p class="choice"><span class="ios on"></span><span class="az"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号"><a href="#" class="yuyue"></a></p>
</div>
<div class="zhezao"></div>

<script type="text/javascript" src="<?php BASE_URL() ?>v2/js/jquery-1.8.2.min.js"></script>
<script>
/*五屏切换*/
$(".slide").find("li").click(function(){
	if($(this).hasClass("cur")){return false;}
	var li = $(this);
	sibling = li.siblings();
	li.find("span").fadeOut(200,function(){
		li.animate({"width":"420px"},500,function(){
			li.addClass("cur");
		});
		sibling.animate({"width":"90px"},500,function(){
			sibling.removeClass("cur");
			sibling.find("span").fadeIn(200);
		});
	});
});
$(function(){
	
	//预约事件
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})

	$('#gift_date').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.close2').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
	})
	
	
	var type;
	var myreg = /^1[34578]\d{9}$/;
		$('#shuru').focus(function(){
		if($(this).attr('value') == '请输入手机号'){}
		  $(this).attr('value','');
		})
		
	$('#shuru').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','请输入手机号');
		}
		})	
	
    $('.yuyue').click(function(){
		var phone = $('#shuru').val();
		if(phone == '请输入手机号' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				//var type = $('input:radio[name="banben"]:checked').val();
				if($('.az').is('.on')){
					type = 2;
					}else{
					type = 1;
				}
				//alert(type + "---" + phone);
				 $.ajax({
					type:"POST",
					url:"/collect_phone",
					data:{phone:phone,type:type,collect_name:68},
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

			}	
		}
	    })
})
</script>

</body>
</html>
