<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet">
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet">
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.d_load, .x_xz').attr('href','//ld.uu.cc/activity/ld_download/index.php');
return true; 
}else{ 
var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }

				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
						$('.d_load, .x_xz').attr('href',"<?php BLOCK('ios_download_url'); ?>");

					
				} else if (/(Android)/i.test(navigator.userAgent)) {
			           $('.d_load, .x_xz').attr('href','<?php BLOCK('android_download_url'); ?>');
				
					
				}



return false; 
} 
} 
</script> 

</head>
<body style="background:#202121;">
<div class="container">
    <div class="inner bander_hm">
       <header id="header" class="home_hd" style="position:fixed;top:0;z-index:9;">
         <span class="logo"><img alt="" src="<?php BLOCK('game_icon') ?>"></span>
         <a href="javascript:;" class="d_load"></a>
       </header>
       <div class="hm_sp">
           <a href="#" class="h_sp"></a>
       </div> 
    </div>
    <div class="xz_lb">
       <a href="javascript:;" class="x_xz"><img src="<?php BASE_URL() ?>images/d_load.jpg" width="320" height="100" /></a>
       <a href="javascript:;" class="x_lb"><img src="<?php BASE_URL() ?>images/libao.jpg" width="320" height="100" /></a>
       <span class="hm_wx"><img src="<?php BASE_URL() ?>images/s_wx.jpg" width="307" height="47" /><em style="color:#fff;float:left;font-size:35px;font-style:normal;"> <?php BLOCK('wx_number') ?></em></span>
    </div>
    <div class="inner list_hm">
       <div class="swiper-container swiper1">
        <div class="swiper-wrapper" style="border-top:solid 2px red;">
        	<?php
        		SHOW_DATAS('<div class="swiper-slide"><a href="@@STR2@@"><img src="@@STR1@@" /></a></div>','m-d',9,100,0,array());
        	?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>
    </div>
    </div>
    <div class="hm_xw">
      <h1><img src="<?php BASE_URL() ?>images/xw_title.jpg" width="640" height="85" /></h1>
      <ul id="lanmu" class="x_g">
        <a class="on" href="javascript:;">综合</a>
        <a href="javascript:;">新闻</a>
        <a href="javascript:;">公告</a>
        <a href="javascript:;">活动</a>
      </ul>
      <div class="xw_gg">
        <ul id="z_h" style="display:block;">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d',array('新闻','公告','活动'),5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="x_w">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','新闻',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="g_g">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公告',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="h_d">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','活动',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
      </div>
      <p class="more"><a href="<?php CATEGORY_URL('综合') ?>">查看更多</a></p>
    </div>
    
    <div class="zx_gl">
        <h1><img src="<?php BASE_URL() ?>images/gl_title.jpg" width="640" height="82" /></h1>
        <ul id="lanmu" class="z_g">
        <a class="on" href="javascript:;"><span></span>公会</a>
        <a href="javascript:;"><span></span>冒险</a>
        <a href="javascript:;"><span></span>竞技场</a>
        <a href="javascript:;"><span></span>副本</a>
        <a href="javascript:;"><span></span>其他</a>
      </ul>
      <div class="xw_gg">
        <ul id="g_h" style="display:block;">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','公会',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="m_x">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','冒险',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="jj_c">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','竞技场',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="f_b">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','副本',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
        <ul id="q_t">
        	<?php SHOW_NEWS('<li><strong>[@@CATEGORY_NAME@@]</strong><a target="_blank" href="@@URL@@">@@TITLE@@</a><span class="date">@@DATE@@</span></li>','m-d','其他',5,0,array('OrderBy'=>'`sort` asc')) ?>
        </ul>
      </div>
      <p class="more"><a href="<?php CATEGORY_URL('公会','gonglue') ?>">查看更多</a></p>
    </div>
    <div class="yx_js">
       <h1><img src="<?php BASE_URL() ?>images/yx_title.jpg" width="640" height="82" /></h1>
       <ul>
       <?php
       	SHOW_NEWS('<a href="@@URL@@"><img src="@@SMALL_IMAGE@@" width="100%" /><span>@@TITLE@@</span></a>','',array('聚怪','输出','破招'),8,0,array('OrderBy'=>'`sort` asc'));
       ?>
       </ul>
       <p class="more"><a href="<?php CATEGORY_URL('聚怪','yxjs') ?>">查看更多</a></p>
    </div>
    <div class="qq_wb">
      <h2>官方QQ交流群</h2>
      <p>
      <?php
      	$qqs=explode(',',GET_BLOCK('qq_group'));
      	$len=count($qqs);
      	for($i=0;$i<$len;$i++)
      		echo '<span>官方'.($i+1).'群：'.$qqs[$i].' </span>';
      ?>
      </p>
      <ul>
        <a href="<?php BLOCK('weibo_url') ?>"><span></span>官方微博</a>
        <a href="<?php BLOCK('baidu_tieba_url') ?>"><span></span>百度贴吧</a>
        <a href="<?php BLOCK('forum_url') ?>"><span></span>官方论坛</a>
      </ul>
    </div>
    <?php require_once("_footer.ctp"); ?>
    
</div>
<div class="zhezao"></div>
<div class="video_"></div>
<div class="yu_yue">
  <a class="close" href="#" ></a>
  <p class="choice"><span class="ios on" data-type="1"></span><span class="az" data-type="2"></span></p>
  <p class="biaodan"><input type="text" id="shuru" value="请输入手机号" /><a href="#" class="yuyue"></a></p>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.min.js"></script>
 <script>
    var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        spaceBetween: 30,
    });
    var swiper3 = new Swiper('.swiper3', {
        pagination: '.swiper-pagination3',
       // paginationClickable: true,
         paginationClickable: '.swiper-pagination3',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
</script>
<script type="text/javascript">
$(function(){
	$("#lanmu a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on').siblings().removeClass('on');  
		$('.xw_gg ul').eq(i).show().siblings().hide();
		})	
	})
	
})
</script>
<script type="text/javascript">
$(function(){
	$("#lanmu a").each(function(i){
	  $(this).on('click',function(){
		$(this).addClass('on').siblings().removeClass('on');  
		$('.xw_gg ul').eq(i).show().siblings().hide();
		})	
	})
	
	$('.h_sp').on('click',function(){
		 $('.zhezao').show();
		 $('.video_').show().append('<video id="video" src="<?php BLOCK('wap_ad_vedio') ?>" controls="" width="600" height="400"></video>');
		 })
	$('.choice span').click(function(){
		$(this).addClass('on').siblings().removeClass('on');
	})
	$('.x_lb').click(function(){
		$('.zhezao').show();
		$('.yu_yue').show();
	})
	$('.close,.zhezao').click(function(){
		$('.yu_yue').hide();
		$('.zhezao').hide();
		$('.video_').empty().hide();
	})
	
	
	var type;
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		$(this).attr('value','');
		$('#nav').css('position','ralative');
		})
	$('#shuru').blur(function(){
		$('#nav').css('position','fixed ');
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