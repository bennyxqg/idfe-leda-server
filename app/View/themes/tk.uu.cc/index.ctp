<!DOCTYPE html><html lang="zh-cn"><head>
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link media="screen" href="//tk.uu.cc/tk.uu.cc/css/layout.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BLOCK('game_icon') ?>">
    <script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->
    
<style type="text/css">#yddContainer{display:block;font-family:Microsoft YaHei;position:relative;width:100%;height:100%;top:-4px;left:-4px;font-size:12px;border:1px solid}#yddTop{display:block;height:22px}#yddTopBorderlr{display:block;position:static;height:17px;padding:2px 28px;line-height:17px;font-size:12px;color:#5079bb;font-weight:bold;border-style:none solid;border-width:1px}#yddTopBorderlr .ydd-sp{position:absolute;top:2px;height:0;overflow:hidden}.ydd-icon{left:5px;width:17px;padding:0px 0px 0px 0px;padding-top:17px;background-position:-16px -44px}.ydd-close{right:5px;width:16px;padding-top:16px;background-position:left -44px}#yddKeyTitle{float:left;text-decoration:none}#yddMiddle{display:block;margin-bottom:10px}.ydd-tabs{display:block;margin:5px 0;padding:0 5px;height:18px;border-bottom:1px solid}.ydd-tab{display:block;float:left;height:18px;margin:0 5px -1px 0;padding:0 4px;line-height:18px;border:1px solid;border-bottom:none}.ydd-trans-container{display:block;line-height:160%}.ydd-trans-container a{text-decoration:none;}#yddBottom{position:absolute;bottom:0;left:0;width:100%;height:22px;line-height:22px;overflow:hidden;background-position:left -22px}.ydd-padding010{padding:0 10px}#yddWrapper{color:#252525;z-index:10001;background:url(chrome-extension://eopjamdnofihpioajgfdikhhbobonhbb/ab20.png);}#yddContainer{background:#fff;border-color:#4b7598}#yddTopBorderlr{border-color:#f0f8fc}#yddWrapper .ydd-sp{background-image:url(chrome-extension://eopjamdnofihpioajgfdikhhbobonhbb/ydd-sprite.png)}#yddWrapper a,#yddWrapper a:hover,#yddWrapper a:visited{color:#50799b}#yddWrapper .ydd-tabs{color:#959595}.ydd-tabs,.ydd-tab{background:#fff;border-color:#d5e7f3}#yddBottom{color:#363636}#yddWrapper{min-width:250px;max-width:400px;}</style><link href="//act.uu.cc/gamesnav/gamesNav.css?ran=0.0697568291798234" rel="stylesheet" type="text/css"><style type="text/css">#yddContainer{display:block;font-family:Microsoft YaHei;position:relative;width:100%;height:100%;top:-4px;left:-4px;font-size:12px;border:1px solid}#yddTop{display:block;height:22px}#yddTopBorderlr{display:block;position:static;height:17px;padding:2px 28px;line-height:17px;font-size:12px;color:#5079bb;font-weight:bold;border-style:none solid;border-width:1px}#yddTopBorderlr .ydd-sp{position:absolute;top:2px;height:0;overflow:hidden}.ydd-icon{left:5px;width:17px;padding:0px 0px 0px 0px;padding-top:17px;background-position:-16px -44px}.ydd-close{right:5px;width:16px;padding-top:16px;background-position:left -44px}#yddKeyTitle{float:left;text-decoration:none}#yddMiddle{display:block;margin-bottom:10px}.ydd-tabs{display:block;margin:5px 0;padding:0 5px;height:18px;border-bottom:1px solid}.ydd-tab{display:block;float:left;height:18px;margin:0 5px -1px 0;padding:0 4px;line-height:18px;border:1px solid;border-bottom:none}.ydd-trans-container{display:block;line-height:160%}.ydd-trans-container a{text-decoration:none;}#yddBottom{position:absolute;bottom:0;left:0;width:100%;height:22px;line-height:22px;overflow:hidden;background-position:left -22px}.ydd-padding010{padding:0 10px}#yddWrapper{color:#252525;z-index:10001;background:url(chrome-extension://eopjamdnofihpioajgfdikhhbobonhbb/ab20.png);}#yddContainer{background:#fff;border-color:#4b7598}#yddTopBorderlr{border-color:#f0f8fc}#yddWrapper .ydd-sp{background-image:url(chrome-extension://eopjamdnofihpioajgfdikhhbobonhbb/ydd-sprite.png)}#yddWrapper a,#yddWrapper a:hover,#yddWrapper a:visited{color:#50799b}#yddWrapper .ydd-tabs{color:#959595}.ydd-tabs,.ydd-tab{background:#fff;border-color:#d5e7f3}#yddBottom{color:#363636}#yddWrapper{min-width:250px;max-width:400px;}</style></head>
<body class="" huaban_collector_injected="true">

    <div class="page">
        <div class="header">
            <div class="top_ima">
            	<img alt="" src="<?php BLOCK('pc_index_banner') ?>">
            </div>
        </div>
        <div class="content">
            <div class="title">
                <div class="wd980 clearfix">
                    <div class="game_icon fl">
                    <?php
                    	echo '<img alt="" src="'.GET_BLOCK('game_icon').'" style="width: 160px; height: 160px;">';
                   	?>
                    </div>
                    <div class="game_desc fl">
                        <h3><?php BLOCK('game_name') ?></h3>
                        <div class="wz_desc">
                            <p><?php BLOCK('game_description') ?></p>
                            <img src="//jzw.uu.cc/jzw.uu.cc/images/slip_up.jpg" alt="详细介绍" class="slip_up">
                            <img src="//jzw.uu.cc/jzw.uu.cc/images/slip_down.jpg" alt="收起介绍" class="slip_down" style="display:none;">
                        </div>
                    </div>
                    <div class="game_load fl">
                    <?php
                        echo '<a href="'.GET_BLOCK('android_download_url').'"><img src="//jzw.uu.cc/jzw.uu.cc/images/az.png" alt="安卓下载"></a>';
                    	echo '<a href="'.GET_BLOCK('ios_download_url').'"><img src="//jzw.uu.cc/jzw.uu.cc/images/ios.png" alt="ios下载"></a>';
                    ?>
                    </div>
                    <div class="game_eweima fl">
                    <?php
                    	echo '<img alt="" src="'.GET_BLOCK('game_download_qrcode').'" style="width: 120px; height: 120px;">';
                   	?>
                    </div>
                </div>
            </div>
            <div class="cont clearfix">
                <div class="cont_left fl">
                    <div class="yxjt">
                        <h3><span>游戏截图</span></h3>
                        <div class="clearfix">
                            <div class="prev fl"><img src="//jzw.uu.cc/jzw.uu.cc/images/left.png"></div>
                            <div class="banner fl">
                                <ul class="run_content clearfix">
                                <?php
                                	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" title="" alt=""></a></li>','m/d',1,24,1,array('OrderBy'=>'`int1` asc'));
                                ?>
                                </ul>
                            </div>
                            <div class="next fl"><img src="//jzw.uu.cc/jzw.uu.cc/images/right.png"></div>
                        </div>
                    </div>
                    <div class="cont_news">
                        <div class="cont_news_title clearfix">
                            <ul class="fl tab-hd">
                                <li class="">新闻<em></em></li>
                                <li class="">最新活动<em></em></li>
                                <li class="">攻略指引<em></em></li>
                                <li class="cur">游戏视频<em></em></li>
                            </ul>
                        </div>
                        <div class="cont_news_detail">
                        	<div class="tab-con" style="display: none;">
								<ul class="newslist">
									<?php
									SHOW_NEWS('<li><span class="news_date fr">[@@DATE@@]</span><span class="news_desc"><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="news_desc"></li>','m/d','新闻',5,$page,array())
									?>
								</ul>
								<div class="more">
								<?php
								echo '<a href="'.GET_CATEGORY_URL('新闻').'">更&nbsp;&nbsp;多</a>';
								?>
								</div>
							</div>
							
							<div class="tab-con" style="display: none;">
								<ul class="newslist">
									<?php
									SHOW_NEWS('<li><span class="news_date fr">[@@DATE@@]</span><span class="news_desc"><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="news_desc"></li>','m/d','活动',5,$page,array())
									?>
								</ul>
								<div class="more">
								<?php
								echo '<a href="'.GET_CATEGORY_URL('活动').'">更&nbsp;&nbsp;多</a>';
								?>
								</div>
							</div>
							
							<div class="tab-con" style="display: none;">
								<ul class="newslist">
									<?php
									SHOW_NEWS('<li><span class="news_date fr">[@@DATE@@]</span><span class="news_desc"><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="news_desc"></li>','m/d','攻略',5,$page,array())
									?>
								</ul>
								<div class="more">
								<?php
								echo '<a href="'.GET_CATEGORY_URL('攻略').'">更&nbsp;&nbsp;多</a>';
								?>
								</div>
							</div>
							
							<div class="tab-con" style="display: block;">
								<ul class="newslist">
									<?php
									SHOW_NEWS('<li><span class="news_date fr">[@@DATE@@]</span><span class="news_desc"><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@</a><span class="news_desc"></li>','m/d','游戏视频',5,$page,array());
									?>
								</ul>
								<div class="more">
								<?php
								echo '<a href="'.GET_CATEGORY_URL('游戏视频').'">更&nbsp;&nbsp;多</a>';
								?>
								</div>
							</div>
                        
                            
                        </div>
                    </div>
                    
                    <!--
                     <div class="jzdq">
                        <h3><span>机甲大全</span>
                        <?php
                        echo '<a class="more" href="//jzw.uu.cc/news/'.GET_CATEGORY_ID('机战大全').'.html" target="_blank">更多&gt;&gt;</a>';
                       	?>
                        </h3>
                        <div class="imgbox">
                        	<?php
                        	//SHOW_NEWS('<a href="@@URL@@"><img src="@@SMALL_IMAGE@@"/></a>','m/d','机战大全',4,0,array());
                        	?>
                        </div>
                    </div>
                    -->
                    <div class="friend">
                        <h3><span>合作友链</span></h3>
                        <div class="yqlj">
                        <ul>
                        <?php
                        	SHOW_DATAS('<li><a href="@@STR2@@" target="_blank">@@LABEL@@</a></li>','m-d',2,24,1,array('OrderBy'=>'`int1` asc'));
                        ?>
                        </ul>
                        
                        </div>
                    </div>
                </div>
                <div class="cont_right fr">
                    
                    <div class="vedio">
                        <embed src="//player.video.qiyi.com/b89eeb1327dbcfe56d0d65fe619c5b30/0/134/w_19rrtpsqst.swf-albumId=4218377409-tvId=4218377409-isPurchase=0-cnId=8" allowfullscreen="true" quality="high" width="293" height="187" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash">
                    </div>
                    
                    <div class="yxlt">
                        <ul>
                        <?php
                            echo '<li class="gamelx game_lt"><a href="'.GET_BLOCK('forum_url').'" target="_blank">游戏论坛</a></li>';
                        ?>
                            <li class="gamelx game_tb"><a href="javascript:;">玩家QQ群</a></li>
                            <li id="slideBox1" class="slideBox" style="height: 205px; padding-top: 8px; margin-top: 8px; padding-bottom: 8px; margin-bottom: 0px; display: none;"><img id="qq_qrcode_img_edit" class="CUSTOM_EDIT IMG_EDIT" alt="微信二维码" src="<?php BLOCK('qq_group_qrcode') ?>" style="width: 190px; height: 189px;" width="120px" height="120px"></li>
                            <li class="gamelx game_wx"><a href="javascript:;">游戏微信</a></li>
                            <li id="slideBox2" class="slideBox" style="height: 136px; padding-top: 8px; margin-top: 8px; padding-bottom: 8px; margin-bottom: 0px; display: none;">
                        <?php
                            echo '<img alt="" src="'.GET_BLOCK('weixin_qrcode').'" style="width: 120px; height: 120px;">';
                        ?>
                            </li>
                            <!--
                            <li class="gamelx game_lt"><a id="lanfeiluntan_edit" class="CUSTOM_EDIT A_EDIT" href="//www.3ko.com/bbs/forum.php?mod=forumdisplay&amp;fid=163" target="_blank">蓝粉论坛</a></li>
                            -->
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

	<?php require_once("_footer.ctp"); ?>
</div>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<!--<script type="text/javascript" src="//tajs.qq.com/stats?sId=40283245" charset="UTF-8"></script>-->

    <script type="text/javascript">
    // $(function(){
//		 //轮播事件
//	
//	show(0);
//	var i = 0;
//	var len = $('#list li').length;
//	function show(i){
//		$('#bar span').eq(i).css('background','#0f6179').siblings().css('background','#fff');
//		$('#list li').eq(i).fadeIn().siblings().fadeOut();
//		i++;
//		 mytime = setTimeout(function(){
//				show(i);
//				if(i == len){
//					i = 0;show(i);
//					}
//				},5000)
//		}
//		
//    $('#bar span').each(function(i){
//		$(this).hover(function(){
//			$(this).css('background','#0f6179').siblings().css('background','#fff');
//			$('#list li').eq(i).fadeIn().siblings().fadeOut();
//			if(mytime){
//				clearTimeout(mytime);
//				}
//			},function(){
//				show(i);
//				})
//			})
//		 
//	})
    </script>
    <script type="text/javascript">
        $(function () {
            var w = null;
            var xk = $(".run_content");
            
            $(".wz_desc span.wz_detail").hide(); 
            
            function init() {
                w = 568;
                xk.width(w * xk.children("li").size());
                console.log(w);
                xk.children("li").css({ "width": w + "px", "float": "left" });
            }
            function run() {
                xk.animate({ "left": "-" + w + "px" }, 1000, function () {
                    xk.css({ "left": 0 }).children("li:first").appendTo(this);
                });
            }
            init();
            setInterval(run, 6000);
            $(".prev").click(function () {
                xk.stop();
                xk.css({ "left": "-" + w + "px" }).children("li:last").prependTo(xk);
                xk.animate({ "left": 0 }, 1000);
            });
            $(".next").click(function () {
                xk.stop();
                xk.animate({ "left": "-" + w + "px" }, 1000, function () {
                    xk.css({ "left": 0 }).children("li:first").appendTo(this);
                });
            });
            $(".slip_up").click(function () {
                $(".game_desc").css("background", "#0090ff");
				$(".wz_desc p").css({"height":"auto","padding-bottom":"20px"});
                $(".wz_desc span.wz_detail").show();
                $(".wz_desc span.wz_simple").hide();
                $(".slip_up").hide();
                $(".slip_down").slideDown();
            });
            $(".slip_down").click(function () {
            	$(".wz_desc span.wz_detail").hide();
            	$(".wz_desc span.wz_simple").show();
				$(".wz_desc p").css({"height":"70px","padding-bottom":"0"});
                $(".game_desc").css("background", "none");
                $(".slip_down").hide();
                $(".slip_up").slideDown();
            });
            $(".cont_news_title ul li").click(function () {
                var i = $(this).index();
                $(this).addClass("cur").siblings().removeClass("cur");
                $(".cont_news_detail").children(":eq(" + i + ")").show().siblings().hide();
            });
            //tab选项卡
            $('.tab-hd').find('li').each(function(i){
                $(this).hover(function(){  
                    $(this).addClass('cur').siblings('li').removeClass('cur');
                    $('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            });
			
			 $(".game_wx a").on({
				mouseenter : function()
				{
					$('#slideBox2').stop(true).slideDown();
				},

				mouseleave : function()
				{
					$('#slideBox2').stop(true).slideUp();
				}
			}); 
			$(".game_tb a").on({
				mouseenter : function()
				{
					$('#slideBox1').stop(true).slideDown();
				},

				mouseleave : function()
				{
					$('#slideBox1').stop(true).slideUp();
				}
			});

        });
    </script>


																																								    				    					    				    					    																																																											    					    				    					    				    					    				    					    				    					    				    					    				    					    																																																		<div id="cli_dialog_div"></div><script id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i.toString(); } else { d.textContent=i.toString(); } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }}catch(e){}</script><div id="HUABAN_WIDGETS"><div class="HUABAN-f-button" style="display: none; left: 0px; top: 62px;">采集</div><style>#HUABAN_WIDGETS  {font-family: "helvetica neue",arial,sans-serif; color: #444; font-size: 14px;} #HUABAN_WIDGETS * {box-sizing: content-box;} #HUABAN_WIDGETS .HUABAN-main {position: fixed; left: 0; top: 0; width: 100%; height: 100%; background: #e5e5e5; background: rgba(229,229,229,.95); max-height: 100%; overflow: hidden; z-index: 9999999999999;} #HUABAN_WIDGETS a img {border: 0;} #HUABAN_WIDGETS .HUABAN-header {height: 50px; background: white; box-shadow: 0 0 4px rgba(0,0,0,.2); width: 100%; left: 0; top: 0; position: absolute;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-inner {margin: 0 auto; position: relative;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-close {width: 60px; height: 50px; border-left: 1px solid #ddd; position: absolute; right: 0; top: 0; background: url(//huaban.com/img/widgets/btn_close.png) 20px 14px no-repeat; cursor: pointer;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-close:hover {background-position: 20px -26px;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-close:active {background-position: 20px -66px;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-logo {display: block; position: absolute; top: 12px;} #HUABAN_WIDGETS .HUABAN-waterfall-holder {position: relative; overflow-y: auto; height: 100%;} #HUABAN_WIDGETS .HUABAN-waterfall {position: relative; margin-top: 50px;} #HUABAN_WIDGETS .HUABAN-waterfall .HUABAN-empty {position: absolute; left: 50%; top: 30px; height: 36px; line-height: 36px; width: 216px; text-align: left; margin-left: -128px; color: #777; background: url(//huaban.com/img/widgets/icon_notice.png) 12px 8px no-repeat white; padding-left: 40px; font-size: 15px;} #HUABAN_WIDGETS .HUABAN-btn {display: inline-block; border-radius: 2px; font-size: 14px; padding: 0 12px; height: 30px; line-height: 30px; cursor: pointer; text-decoration: none; white-space: nowrap; -moz-user-select: none; -webkit-user-select: none; user-select: none; text-align: center; background: #D53939; color: white;} #HUABAN_WIDGETS .HUABAN-btn:hover {background: #E54646;} #HUABAN_WIDGETS .HUABAN-btn:active {background: #C52424;} #HUABAN_WIDGETS .HUABAN-wbtn {background: #EDEDED; color: #444;} #HUABAN_WIDGETS .HUABAN-wbtn:hover {background: #F2F2F2;} #HUABAN_WIDGETS .HUABAN-wbtn:active {background: #DDD;} #HUABAN_WIDGETS .HUABAN-f-button {position: absolute; display: none; z-index: 9999999999998; box-shadow: 0 0 0 2px rgba(255,255,255,.2); background: #aaa; background: rgba(0,0,0,.3); color: white; cursor: pointer; padding: 0 12px; height: 30px; line-height: 30px; border-radius: 2px; font-size: 14px} #HUABAN_WIDGETS .HUABAN-f-button:hover {background-color: #999; background-color: rgba(0,0,0,.5);} #HUABAN_WIDGETS .HUABAN-f-button:active {background-color: rgba(0,0,0,.6);} #HUABAN_WIDGETS .HUABAN-red-normal-icon-button {width: 36px; height: 24px; border: 0px; line-height: 24px; padding-left: 24px; padding-right: 0px; text-align: left; background: url(//huaban.com/img/widgets/widget_icons.png) 0 -200px no-repeat; box-shadow: none !important; font-size: 14px; background-color: transparent !important;} #HUABAN_WIDGETS .HUABAN-red-normal-icon-button:hover {background-position: -130px -200px;} #HUABAN_WIDGETS .HUABAN-red-normal-icon-button:active {background-position: -260px -200px;} #HUABAN_WIDGETS .HUABAN-red-large-icon-button {width: 80px; height: 24px; border: 0px; line-height: 24px; padding-left: 24px; padding-right: 0px; text-align: left; background: url(//huaban.com/img/widgets/widget_icons.png) 0 -150px no-repeat; box-shadow: none !important; font-size: 14px; background-color: transparent !important;} #HUABAN_WIDGETS .HUABAN-red-large-icon-button:hover {background-position: -130px -150px;} #HUABAN_WIDGETS .HUABAN-red-large-icon-button:active {background-position: -260px -150px;} #HUABAN_WIDGETS .HUABAN-red-small-icon-button {width: 30px; height: 21px; border: 0px; line-height: 21px; padding-left: 20px; padding-right: 0px; text-align: left; background: url(//huaban.com/img/widgets/widget_icons.png) 0 -250px no-repeat; box-shadow: none !important; font-size: 12px; background-color: transparent !important;} #HUABAN_WIDGETS .HUABAN-red-small-icon-button:hover {background-position: -130px -250px;} #HUABAN_WIDGETS .HUABAN-red-small-icon-button:active {background-position: -260px -250px;} #HUABAN_WIDGETS .HUABAN-white-normal-icon-button {width: 36px; height: 24px; border: 0px; line-height: 24px; padding-left: 24px; padding-right: 0px; text-align: left; background: url(//huaban.com/img/widgets/widget_icons.png) 0 -500px no-repeat; box-shadow: none !important; color: #444; font-size: 14px; background-color: transparent !important;} #HUABAN_WIDGETS .HUABAN-white-normal-icon-button:hover {background-position: -130px -500px;} #HUABAN_WIDGETS .HUABAN-white-normal-icon-button:active {background-position: -260px -500px;} #HUABAN_WIDGETS .HUABAN-white-large-icon-button {width: 80px; height: 24px; border: 0px; line-height: 24px; padding-left: 24px; padding-right: 0px; text-align: left; background: url(//huaban.com/img/widgets/widget_icons.png) 0 -450px no-repeat; box-shadow: none !important; color: #444; font-size: 14px; background-color: transparent !important;} #HUABAN_WIDGETS .HUABAN-white-large-icon-button:hover {background-position: -130px -450px;} #HUABAN_WIDGETS .HUABAN-white-large-icon-button:active {background-position: -260px -450px;} #HUABAN_WIDGETS .HUABAN-white-small-icon-button {width: 30px; height: 21px; border: 0px; line-height: 21px; padding-left: 20px; padding-right: 0px; text-align: left; background: url(//huaban.com/img/widgets/widget_icons.png) 0 -550px no-repeat; box-shadow: none !important; color: #444; font-size: 12px; background-color: transparent !important;} #HUABAN_WIDGETS .HUABAN-white-small-icon-button:hover {background-position: -130px -550px;} #HUABAN_WIDGETS .HUABAN-white-small-icon-button:active {background-position: -260px -550px;} #HUABAN_WIDGETS .HUABAN-cell {width: 236px; position: absolute; background: white; box-shadow: 0 1px 3px rgba(0,0,0,.3); transition: left .3s ease-in-out, top .3s linear;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-img-holder {overflow: hidden; position: relative;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-img-holder:hover img.HUABAN-cell-img {opacity: .8} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-video-icon {width: 72px; height: 62px; position: absolute; left: 50%; top: 50%; margin: -31px auto auto -36px; background: url(//huaban.com/img/widgets/media_video.png) 0 0 no-repeat; display: none;} #HUABAN_WIDGETS .HUABAN-cell.HUABAN-video .HUABAN-video-icon {display: block;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-over {display: none;} #HUABAN_WIDGETS .HUABAN-cell:hover .HUABAN-over {display: block;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-over .HUABAN-btn {width: 60px; height: 34px; padding: 0; position: absolute; left: 50%; top: 50%; margin: -18px 0 0 -31px; line-height: 34px; box-shadow: 0 0 0 2px rgba(255,255,255,.2); font-size: 16px;} #HUABAN_WIDGETS .HUABAN-cell.HUABAN-long .HUABAN-img-holder {height: 600px;} #HUABAN_WIDGETS .HUABAN-cell.HUABAN-long .HUABAN-img-holder:after {content: ""; display: block; position: absolute; width: 236px; height: 12px; left: 0; bottom: 0; background: url(//huaban.com/img/widgets/long_image_shadow_2.png) repeat-x 4px top;} #HUABAN_WIDGETS .HUABAN-cell img {width: 236px; display: block;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-size {margin: 8px 16px; font-size: 12px; color: #999} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-description {display: block; width: 202px; margin: 0 6px 6px; padding: 6px 10px; border: 0; resize: none; outline: 0; border: 1px solid transparent; line-height: 18px; font-size: 13px; overflow: hidden; word-wrap: break-word; background: url(//huaban.com/img/widgets/icon_edit.png) 500px center no-repeat;} #HUABAN_WIDGETS .HUABAN-cell:hover .HUABAN-description {background-color: #fff9e0; background-position: right top;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-description:focus {background-color: #F9F9F9; background-position: 500px center;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-select-btn {width: 34px; height:34px; background: url(//huaban.com/img/widgets/checkbox.png) 0 0 no-repeat; position: absolute; right: 5px; top: 5px; cursor: pointer;} #HUABAN_WIDGETS .HUABAN-cell .HUABAN-pinned-label {position: absolute; left: 0; top: 10px; height: 24px; line-height: 24px; padding: 0 10px; background: #CE0000; background: rgba(200, 0, 0, 0.9); color: white; font-size: 12px; display: none;} #HUABAN_WIDGETS .HUABAN-cell.HUABAN-pinned .HUABAN-pinned-label {display: block;} #HUABAN_WIDGETS .HUABAN-selected .HUABAN-select-btn {background-position: 0 -40px;} #HUABAN_WIDGETS .HUABAN-multi .HUABAN-cell .HUABAN-img-holder {cursor: pointer;} #HUABAN_WIDGETS .HUABAN-multi .HUABAN-cell .HUABAN-cell-pin-btn {display: none;} #HUABAN_WIDGETS .HUABAN-multi .HUABAN-cell .HUABAN-over {display: block;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-multi-buttons {position: absolute; top: 10px; left: 0; display: none;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-multi-buttons .HUABAN-btn {margin-right: 10px;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-multi-noti {display: none; height: 50px; line-height: 50px; text-align: center; font-size: 16px; color: #999; font-weight: bold;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-multi-noti span {font-weight: normal;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-multi-noti i {font-style: normal;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-notice {padding: 0 10px; height:30px; line-height: 30px; position: absolute; left: 50%; top: 10px; margin-left: -83px; background: #fff9e2; text-align: center;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-notice i {display: inline-block; width: 18px; height: 18px; background: url(//huaban.com/img/widgets/icon_notice.png) 0 0 no-repeat; vertical-align: top; margin: 6px 6px 0 0;} #HUABAN_WIDGETS .HUABAN-switcher {height: 50px; width: 100px; position: relative;} #HUABAN_WIDGETS .HUABAN-switcher .HUABAN-title {position: absolute; right: 75px; top: 13px; color: #999; white-space: nowrap; line-height: 24px; opacity: 0; visibility: hidden;} #HUABAN_WIDGETS .HUABAN-switcher:hover .HUABAN-title {visibility: visible; opacity: 1; -webkit-transition: opacity .2s linear; -webkit-transition-delay: .2s; transition: opacity .2s linear; transition-delay: .2s;} #HUABAN_WIDGETS .HUABAN-switcher .HUABAN-bar {width: 40px; height: 24px; background: #EB595F; border-radius: 12px; color: white; position: absolute; right: 0; top: 13px; cursor: pointer; font-size: 14px; -webkit-transition: all .2s linear; transition: all .2s linear;} #HUABAN_WIDGETS .HUABAN-switcher:hover .HUABAN-bar {width: 64px;} #HUABAN_WIDGETS .HUABAN-switcher.HUABAN-on .HUABAN-bar {background: #7DD100;} #HUABAN_WIDGETS .HUABAN-switcher .HUABAN-bar .HUABAN-round {width: 20px; height: 20px; background: white; border-radius: 50%; position: absolute; left: 2px; top: 2px; -webkit-transition: left .2s linear; box-shadow: 0px 0px 3px rgba(0,0,0,0.15); transition: left .2s linear; box-shadow: 0px 0px 3px rgba(0,0,0,0.15);} #HUABAN_WIDGETS .HUABAN-switcher.HUABAN-on .HUABAN-bar .HUABAN-round {left: 17px;} #HUABAN_WIDGETS .HUABAN-switcher.HUABAN-on:hover .HUABAN-bar .HUABAN-round {left: 41px;} #HUABAN_WIDGETS .HUABAN-switcher .HUABAN-bar .HUABAN-text-1 {height: 24px; line-height: 24px; position: absolute; right:17px; top: 0; opacity: 0; visibility: hidden; -webkit-transition: all .2s linear; transition: all .2s linear;} #HUABAN_WIDGETS .HUABAN-switcher:hover .HUABAN-bar .HUABAN-text-1 {right: 9px; opacity: 1; visibility: visible;} #HUABAN_WIDGETS .HUABAN-switcher.HUABAN-on:hover .HUABAN-bar .HUABAN-text-1 {right: 17px; opacity: 0; visibility: hidden;} #HUABAN_WIDGETS .HUABAN-switcher .HUABAN-bar .HUABAN-text-2 {height: 24px; line-height: 24px; position: absolute; left:17px; top: 0; opacity: 0; visibility: hidden; -webkit-transition: all .2s linear; transition: all .2s linear;} #HUABAN_WIDGETS .HUABAN-switcher:hover .HUABAN-bar .HUABAN-text-2 {left: 17px; opacity: 0; visibility: hidden;} #HUABAN_WIDGETS .HUABAN-switcher.HUABAN-on:hover .HUABAN-bar .HUABAN-text-2 {left: 9px; opacity: 1; visibility: visible;} #HUABAN_WIDGETS .HUABAN-header .HUABAN-switcher {position: absolute; right: 0; top: 0;} <!--[if IE 6]>#HUABAN_WIDGETS .HUABAN-red-normal-icon-button, .HUABAN-red-large-icon-button, .HUABAN-red-small-icon-button, .HUABAN-white-normal-icon-button, .HUABAN-white-large-icon-button, .HUABAN-white-small-icon-button { background-image: url({{imgBase}}/widget_icons_ie6.png) <![endif]--></style></div>    					    				    					    				    					    				    					    				</body></html>