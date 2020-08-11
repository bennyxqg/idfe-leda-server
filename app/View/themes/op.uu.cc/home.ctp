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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css?v=201702091" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>
<div class="wx_wb">
   <div class="wx_float">
      <a href="javascript:alert('敬请期待！');" class="weibo"></a>
      <a href="http://bbs.uu.cc/forum.php?mod=forumdisplay&fid=481" class="luntan"></a>
   </div>
</div>
<a class="video-btn" href="javascript:;" name="http://dl.uu.cc/static/download/cbhhw20170120.mp4"></a>

<div class="main1">
	<div class="wrap">
       <div class="down_bj"><img src="<?php BASE_URL() ?>images/op_down.jpg" width="114">
          <a href="https://itunes.apple.com/cn/app/chong-ba-hang-hai-wang/id1144418586?mt=8" class="ios"></a>
          <a href="http://dl.uu.cc/idreamsky/OP_0907_IDS_05.apk" class="az"></a>
       </div>
    </div>
</div>
<div class="main2">
	<div class="wrap">
    </div>
</div>
<div class="main3">
	<div class="wrap">
    	<!--<div class="yuyue"></div>-->
    </div>
</div>
<div class="main4">
	<div class="wrap">
    	<div class="news_list_box">
        	<div class="item_tit">
            	<h2>最新动态NEWS</h2>
                <a class="more" href="<?php CATEGORY_URL('XXXXX') ?>" title="更多动态" target="_blank"></a>
            </div>
            <div class="news_list">
            	<ul>
            	<?php
            	SHOW_NEWS('<li><i class="@@CATEGORY_MAP@@">@@CATEGORY_NAME@@</i><a href="@@URL@@" target="_self">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),9,1,array('CategoryMap'=>array('新闻'=>'news_icon','公告'=>'act_icon','活动'=>'act2_icon')));
            	?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main5">
	<div class="wrap">
    	<div class="contact">
        	<ul>
            	<li class="pr"><a class="weixin" href="javascript:;"><h2>官方微信</h2><p>收听官方微信，获得第一手游戏资讯</p></a>
                <!--
                <div class="pa wx_pop"><img alt="" src="<?php BLOCK('weixin_qrcode') ?>"><p>扫码关注官方微信<br>微信号：<?php BLOCK('weixin_account') ?></p></div>
                -->
                </li>
                <li><a class="qqun" href="<?php BLOCK('qq_start_url') ?>" target="_blank"><h2>官方Q群</h2><p>加入官方Q群，参与交流，反馈意见 </p></a></li>
                <li><a class="tieba" href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"><h2>官方贴吧</h2><p>关注官方贴吧，参与交流，反馈意见</p></a></li>
                <li><a class="luntan" href="<?php BLOCK('forum_url') ?>" target="_blank"><h2>官方论坛</h2><p>从此，星辰大海有了我们的传说......</p></a></li>
            </ul>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp");?>

<div class="mask"></div>
<div id="yuyue-pop1" class="yuyue-pop">
	<a class="close" href="javascript:;"></a>
	<input class="yuyue_ipt" placeholder="请输入手机号" type="tel" /><a class="yuyue_btn" href="javascript:;"></a>
</div>

<div id="yuyue-pop2" class="yuyue-pop">
	<a class="close" href="javascript:;"></a>
	<div class="code-box"></div>
</div>

<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close" href="javascript:;"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){ 

	$('.yuyue').click(function(){
		
		$('#yuyue-pop1,.mask').show();
	
	})

	$('.close').click(function(){
		$('.s_p_k video').attr('src','');
		$('.yuyue-pop,.mask,.s_p_k').hide();
	
	})
	
	//页面头部视频	   
	$('.video-btn').click(function(){
		var vedioSrc = this.name;
		$('.s_p_k video').attr('src',vedioSrc);
		$('.mask,.s_p_k').show();
	})
	
	
	var phone;
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
					url:"/send_phone_code",
					data:{phone:phone,code_id:92,site_id:92},
					dataType:"json",
					success:function(res){
						if(res.ret == 8){
							alert("您已经领取过兑换码！");
						}else if(res.ret == 0){
							$('.code-box').html(res.code)
							$('#yuyue-pop1').hide();
							$('#yuyue-pop2').show();
						}else{
							alert("领取失败！");
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
