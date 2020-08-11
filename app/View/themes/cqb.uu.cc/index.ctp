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
<link media="screen" href="<?php echo $full_base_url ?>/css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?145929d32596d329ee661e3c6663e368";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/zepto.min.js"></script>
<script type="text/javascript">
$(function(){
var ref = document.referrer;
//var refer = ref.substr(0,22);
//alert(refer);

 if(/\.baidu\.com/.test(ref)){
	$("#az").attr("href","<?php BLOCK('bd_pc_ios_download') ?>");
	$(".home").attr("href","//cqb.uu.cc/home?link=bd");
	}else{
		$("#az").attr("href","<?php BLOCK('nbd_ios_download') ?>");
		}
		
})
</script>
</head>

<body>

<div class="top1">
	<div class="wrap">
    	<a class="pa home_logo home" target="_blank" href="//cqb.uu.cc/home" title="前往《苍穹变》官网"></a>
        <a class="pa home_link home" target="_blank" href="//cqb.uu.cc/home" title="前往《苍穹变》官网">进入官网&gt;</a>
    </div>
</div>
<div class="top2">
	<div class="wrap">
    	<a class="pa vedio_btn" href="javascript:;"></a>
    </div>
</div>
<div class="top3">
	<div class="wrap">
        <span class="pa code_img"><img scr="<?php BLOCK('game_download_qrcode'); ?>"/></span>
        <a class="pa down_link down_ios" id="ios" href="<?php BLOCK('ios_download_url') ?>" title="苹果客户端下载"></a>
        <a class="pa down_link down_android" id="az" href="<?php BLOCK('android_download_url') ?>" title="安卓客户端下载"></a>
        
        <input id="shuru" type="text" value="请输入手机号领取礼包" />
        <a class="lq" href="javascript:;"></a>
    </div>
</div>
<!--
<div class="main">
	<div class="wrap">
    	<div class="part1">

        	

        	<div class="item_tit main_tit1"><h2></h2></div>

            <ul class="fuli_box">
                <li class="box1">
                    <h3>战力大比拼</h3>
                    <p>技高一筹拼战力，首服送iphone6大奖</p>
                </li>
                <li class="box2">
                    <h3>红包齐分享</h3>
                    <p>贵宾到！豪礼送！千万红包齐分享</p>
                </li>
                <li class="box3">
                    <h3>千万基金</h3>
                    <p>成长登录送基金，每天涨涨涨</p>
                </li>
            </ul>
        </div>
        <div class="part2">

        	

        	<div class="item_tit main_tit2"><h2></h2></div>

            <ul class="pay_gift">
                <li class="box1">
                    <h3>充值送特权</h3>
                    <p>想成为全民老公吗？想获得贵族独一无二的特权吗？</p>
                </li>
                <li class="box2">
                    <h3>连续充有礼</h3>
                    <p>连续每日充值任意金额即可获得丰富礼品</p>
                </li>
                <li class="box3">
                    <h3>充值大返利</h3>
                    <p>单笔充值可得返利,3千万京东卡免费拿</p>
                </li>
                <li class="box4">
                    <h3>单日充值返</h3>
                    <p>单日累计充值送大奖</p>
                </li>
            </ul>
        </div>
        <div class="part3">

        	

        	<div class="item_tit main_tit3"><h2></h2></div>

            <ul class="gift_list">
                <li>
                    <img src="<?php echo $full_base_url ?>/images/gift_icon1.jpg" />
                    <h3>登录大礼</h3>
                    <p>每日登录累计7天领取大礼包助你升级</p>
                </li>
                <li>
                    <img src="<?php echo $full_base_url ?>/images/gift_icon2.jpg" />
                    <h3>极速升级</h3>
                    <p>提升角色斗魂等级即可获得升级奖励</p>
                </li>
                <li>
                    <img src="<?php echo $full_base_url ?>/images/gift_icon3.jpg" />
                    <h3>道具大特卖</h3>
                    <p>熏儿给你送礼啦！稀有道具限时特卖</p>
                </li>
                <li class="nomg">
                    <img src="<?php echo $full_base_url ?>/images/gift_icon4.jpg" />
                    <h3>家族壕礼</h3>
                    <p>完成家族任务即可得家族壕礼</p>
                </li>
                <li>
                    <img src="<?php echo $full_base_url ?>/images/gift_icon5.jpg" />
                    <h3>神秘硬币</h3>
                    <p>秘密道具兑换稀有游戏道具</p>
                </li>
                <li>
                    <img src="<?php echo $full_base_url ?>/images/gift_icon6.jpg" />
                    <h3>在线壕礼</h3>
                    <p>在线越久！奖励越多！</p>
                </li>

            </ul>
        </div>
    </div>
</div>
-->

<!--    底部开始      -->
<?php require_once "_footer.ctp";?>

<div class="pop_div">
    <a class="close" href="javascript:;"></a>
    <div class="con">
    </div>
</div>
<div class="mask" style="display:none;"></div>
<div class="zhezao" style="display:none;"></div>
<div class="sp_video">
  <embed src="//player.youku.com/player.php/sid/XMTI5MDU1MjA0MA==/v.swf" 
    width="700" height="480" 
    type="application/x-shockwave-flash">
   </embed>
   <a class="close_sp" href="javascript:void(0)"></a>
</div>

<div class="pop_right">
	<ul>
    	<li><a target="_blank" href="<?php BLOCK('weibo_url') ?>" title="新浪微博"></a></li>
        <li><a target="_blank" href="<?php BLOCK('baidu_tieba_url') ?>" title="百度贴吧"></a></li>
        <li><a target="_blank" href="<?php BLOCK('forum_url') ?>" title="官方论坛"></a></li>
    </ul>
</div>


<div class="lb_tk">
   <p class="xt">
     <select id="select"> 
       <option value="安卓">安卓</option>
       <option value="苹果">苹果</option>
      </select>
   </p>
   <p class="yzm">
      <input type="text" id="yz_m" />
      <img src="" width="120" height="50" id="yz_img" />
   </p>
   <a href="#" class="lk_lq"></a>
</div>


<div class="pa index_pop" style="display:none;"><a class="close2" href="javascript:;" title="关闭"></a><a class="pa go_index2" href="//cqb.uu.cc/activity/cqb_my/index.html" title="前往报名"></a></div>
<div class="mask" style="display:none;" ></div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jbase64.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".index_pop .close2").click(function(){
		$(".wish_pop,.index_pop,.mask").hide();
	});
	
	
	$('.zhezao').click(function(){
		$('.zhezao').hide();
		$('.lb_tk').hide();
	})
	
	var myreg = /^1[34578]\d{9}$/;
	$('#shuru').focus(function(){
		if($(this).attr('value') == '请输入手机号领取礼包'){}
		  $(this).attr('value','');
		})
		
	$('#shuru').blur(function(){
	   if($(this).attr('value') == ''){
		$(this).attr('value','请输入手机号领取礼包');
		}
		})	
    var phone;
    $('.lq').click(function(){
		 phone = $('#shuru').val();
		
		if(phone == '请输入手机号领取礼包' || phone == ''){
			alert('请输入手机号哦！');
			}else{
			if(!myreg.exec(phone)){
				alert('您输入的手机号码不对哦！');
				}else{
				$('.zhezao').show();
                $('.lb_tk').show();
				$.ajax({
					type:"POST",
					url:"/get_verify_code",
					data:{charnum:4,mode:'img',width:120,height:50},
					dataType:"json",
					success:function(res){
						if(res.ret == 0){
							var imgUrl = BASE64.decoder(res.url);
							$("#yz_img").attr('src',imgUrl);
						}else {
							alert("获取失败");
						}		
				  }
				  });
				  
				  
					}	
		}
	    })
		
	   //刷新验证码
	   $('#yz_img').click(function(){
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
		})	
	    var type;
		var code_id;
	    $('.lk_lq').click(function(){
			 var verify = $('#yz_m').val();
			 var value = $('#select').val();
			 if(value == '安卓'){
				 type=2;
				 code_id = 67;
				 }else{
				 type=1;
				 code_id = 65;
			}
			 $.ajax({
						type:"POST",
						url:"/send_code_by_sm",
						data:{phone:phone,code_id:code_id,verify:verify,type:type,mode:'img'},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("您已成功领取礼包一枚，请尽快下载游戏使用哟~");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else{
								alert("发送失败");
							}
					  }
				});
			
		})
	
})
</script>
<script type="text/javascript">
    $(function() {
		$('.vedio_btn').click(function(){
			$('.sp_video').show();
			$('.zhezao').show();
			})
        $('.close_sp').click(function(){
			$('.sp_video').hide();
			$('.zhezao').hide();
			})
		
		
        $(".fuli_box li").click(function(){
            
            var index = $(this).index();
            var popdiv = $(".pop_div .con");
            if(index == 0){
                popdiv.html("<h2>战力大比拼</h2><p><strong>【活动时间】</strong><br />2015/7/6 00:00—2015/7/6 23:59<br /><strong>【活动范围】</strong><br />ios首服<br /><strong>【活动内容】</strong><br />想知道如何证明自己的实力超群吗？《苍穹变》IOS上线当天，进入首服参与战力比拼大赛，既有机会获得超级大奖，最高奖励iphone6手机一部，更有海量京东卡大奖，名利双收的机会千万不要错过哦！<br /><strong>【活动奖励】</strong><br />首服战力排行榜第1名奖励：iphone6手机<br />首服战力排行榜第2名奖励：1000元京东卡*1<br />首服战力排行榜第3名奖励：500元京东卡*1</p>");
            }else if(index == 1){
                popdiv.html("<h2>红包齐分享</h2><p><strong>【活动时间】</strong><br />2015/7/6 00:00—2015/7/17 23:59<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />想知道如何彰显自己的土豪身份吗？在游戏中，只要完成任意金额充值，即可激活全服置顶红包分享功能，您！将引领全服斗者掀起红包抢夺热潮！！想上头条就是如此的简单！<br />1、玩家完成不同额度充值后，可通过滚动公告解锁红包分享功能，全服玩家通过抢夺方式激活红包，手快有，手慢无。");
            }else if(index == 2){
                popdiv.html("<h2>千万基金</h2><p><b>登录基金</b><br /><strong>【活动时间】</strong><br />永久<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />在游戏内充值30元即可成功购买登录基金，累计可获得3100晶钻，低投入高回报！<br />1、当天返利	        100晶钻<br />2、第二天返利	        100晶钻<br />3、第三天返利	        100晶钻<br />4、第五天返利	        200晶钻<br />5、第七天返利	        200晶钻<br />6、第十天返利	        200晶钻<br />7、第十五天返利	        300晶钻<br />8、第二十天返利	        300晶钻<br />9、第二十五天返利	500晶钻<br />10、第三十天返利	800晶钻<br /><br /><br /><b>成长基金</b><br /><strong>【活动时间】</strong><br />永久<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><b />玩家在游戏内一次性充值198，即可成功购买成长基金，累计可获得共计6980晶钻，低投入高回报！<br />1、等级达到35级返利		500晶钻<br />2、等级达到45级返利		500晶钻<br />3、等级达到55级返利	       1000晶钻<br />4、等级达到60级返利	       1000晶钻<br />5、等级达到65级返利	       1000晶钻<br />6、等级达到70级返利	       1000晶钻</p>");
            }
            $(".pop_div").show();
            $(".zhezao").show();

        });
       
	     $(".pay_gift li").click(function(){
            var index = $(this).index();
            var popdiv = $(".pop_div .con");
            if(index == 0){
                popdiv.html("<h2>充值送特权</h2><p><strong>【活动时间】</strong><br />永久<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />1、VIP等级达到3级，可免费获得30级橙色高级专属武器*1<br />2、VIP等级达到5级，可免费获得专属幻化翅膀*1<br />3、VIP等级达到10级，可免费获得永久幻化坐骑飞龙*1</p>");
            }else if(index == 1){
                popdiv.html("<h2>连续充有礼</h2><p><strong>【活动时间】</strong><br />2015/7/6 11:00—2015/7/8 23:59<br /><strong>【活动范围】</strong><br />新开服务器<br /><strong>【活动内容】</strong><br />喜迎IOS不删档内测，活动期间连续每日充值任意金额即可获得丰富礼品<br /><strong>【活动奖励】</strong><br />1、连续充值天数满1天获得奖励：魔符凝石*5、进阶丹*1、悬赏令*1<br />2、连续充值天数满2天获得奖励：魔符凝石*10、进阶丹*2、悬赏令*2<br />3、连续充值天数满3天获得奖励：魔符凝石*15、进阶丹*4、悬赏令*5</p>");
            }else if(index == 2){
                popdiv.html("<h2>充值大返利</h2><p><strong>【活动时间】</strong><br />2015/7/6 11:00—2015/7/9 23:59<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />喜迎IOS不删档内测，开服四天内单笔充值相应金额可获得相应返利<br /><strong>【活动奖励】</strong><br />1、单笔充值达到300非绑定晶钻获得奖励 ：20绑定晶钻、<br />2、单笔充值达到980非绑定晶钻获得奖励： 100绑定晶钻、<br />3、单笔充值达到1980非绑定晶钻获得奖励：250绑定晶钻、京东惊喜宝箱*1<br />4、单笔充值达到3280非绑定晶钻获得奖励：500绑定晶钻、京东惊喜宝箱*1<br />5、单笔充值达到6480非绑定晶钻获得奖励：1200绑定晶钻、京东惊喜宝箱*1</p>");
            }else if(index == 3){
                popdiv.html("<h2>单日充值返</h2><p><strong>【活动时间】</strong><br />2015/7/10 00:00—2015/7/13 23:59<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />单日累计充值达到相应非绑定晶钻获得奖励<br /><strong>【活动奖励】</strong><br />1、累积充值达到500非绑定晶钻可获得奖励：培养丹*1<br />2、累积充值达到1200非绑定晶钻可获得奖励：培养丹*1、进阶丹*1<br />3、累积充值达到2500非绑定晶钻获得奖励：培养丹*2、进阶丹*1<br />4、累积充值达到5000非绑定晶钻可获得奖励：培养丹*3、进阶丹*2<br />5、累计充值达到10000非绑定晶钻可获得奖励：培养丹*5、进阶丹*3<br />6、累计充值达到20000非绑定晶钻可获得奖励：培养丹*8、进阶丹*4<br />7、累计充值达到30000非绑定晶钻可获得奖励：培养丹*12、进阶丹*5</p>");
            }
            $(".pop_div").show();
            $(".zhezao").show();

        });
	   
	     $(".gift_list li").click(function(){
            var index = $(this).index();
            var popdiv = $(".pop_div .con");
            if(index == 0){
                popdiv.html("<h2>登录大礼</h2><p><strong>【活动时间】</strong>自首次登录内七天<br /><strong>【活动范围】</strong>全服<br /><strong>【活动内容】</strong>每日登录游戏即可得到超值游戏大礼包，连续七天登录天天有送！<br /><strong>【活动奖励】</strong><br />1、第一天：初级升级丹、融血丹*3、绑定金币卡（5W）、普通精炼石、2级至阳土系魔核、特大雪莲丹包裹、特大回气丹包裹、还魂符*10<br />2、第二天：玄阶斗气丹、融血丹*3、绑定晶钻卡（100）、储存结晶、淬翼丹*20、凝羽丹*2、悬赏令、特大雪莲丹包裹<br />3、第三天：玄阶斗气丹*2、进阶丹、还魂符*10、中级升级丹、特大雪莲丹包裹、特大回气丹包裹、家族令牌、神行鸟幻化卡<br >4、第四天：普通精炼石*5、储存结晶*5、卓越的纳灵结晶*5、魔符凝石*5、钻石后冠、初级问心丹、天阶斗气丹、还魂符<br />5、第五天：地阶斗气丹*2、还魂符*15、卓越的纳灵结晶*10、融血丹*5、进阶丹*2、特大雪莲丹包裹、特大回气丹包裹、当前职业45级橙衣<br />6、第六天：地阶斗气丹*2、储存结晶*10、完美的纳灵结晶*5、凝羽丹*5、魔符凝石*10、冰雪玫瑰*2、淬翼丹*40、1级轮回土系魔核<br />7、第七天：紫妍信物*10、悬赏令*5、1级天灵水系魔核、完美的纳灵结晶*10、水晶鞋*2、魔符凝石*10、融血丹*10、进阶丹*5</p>");
            }else if(index == 1){
                popdiv.html("<h2>极速升级</h2><p><strong>【活动时间】</strong>永久<br /><strong>【活动范围】</strong>全服<br /><strong>【活动内容】</strong>游戏中角色达到相应等级即可获得升级奖励，助你登顶斗帝<br /><strong>【活动奖励】</strong><br />1、[10级]：本职业1级蓝色护肩、黄阶斗气丹*1、初级经验珠*1、绑定金币10000、魔符凝石*10、绑定晶钻100<br />2、[20级]：本职业15级蓝色护肩、玄阶斗气丹*1、双倍经验符*2、冰雪玫瑰、还魂符*5、绑定晶钻100<br />3、[30级]：本职业30级蓝色护肩、储蓄结晶*5、双倍斗气符*2、融血丹*2、魔符凝石*30、绑定晶钻100<br />4、[40级]:本职业30级蓝色护肩、储蓄结晶*5、双倍斗气符*2、融血丹*2、魔符凝石*30、绑定晶钻100<br />5、[50级]：本职业45级橙色护肩、优秀的纳灵晶核*10、魔符凝石*20、三倍经验符*1、凝羽丹*2、绑定晶钻200<br />6、[55级]：本职业45级橙色腰带、卓越的纳灵结晶*5、血莲丹*15、魔符凝石*50、淬翼丹*20、绑定晶钻200<br />7、[60级]：本职业60级橙色护肩、卓越的纳灵结晶*10、血莲丹*20、凝羽丹*5、家族令牌*5、晶钻200<br />8、[65级]：本职业60级橙色腰带、完美的纳灵晶核*2、血莲丹*25、天阶斗气丹*1、讨伐令*2、晶钻200<br />9、[70级]：本职业70级橙色护肩、完美的纳灵晶核*5、血莲丹*30、钻石精炼石*15、1级天灵土系魔核*5、晶钻300</p>");
            }else if(index == 2){
                popdiv.html("<h2>道具大特卖</h2><p><strong>【活动时间】</strong><br />2015/7/6 11:00—2015/7/7 23:59<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />游戏内稀有道具限时特卖！！快来抢购吧<br /><strong>【活动奖励】</strong><br />奖励1：仅限1天，限量购买喔！（仅限20次） 60非绑定晶钻购买玄阶斗气丹*1<br />奖励2：仅限1天，限量购买喔！（仅限5次） 150非绑定晶钻购买地阶斗气丹*1<br />奖励3：仅限1天，限量购买喔！（仅限6次） 200非绑定晶钻购买1级随机紫色魔核*1<br />奖励4：仅限1天，限量购买喔！（仅限2次） 2000非绑定晶钻购买1级随机橙色魔核*1</p>");
            }else if(index == 3){
                popdiv.html("<h2>家族壕礼</h2><p><strong>【活动时间】</strong><br />2015/7/6 11:00—2015/7/12 23:59<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />勤劳的勇士，完成家族任务即可得到家族壕礼！<br /><strong>【活动奖励】</strong><br />奖励1：每天做家族任务，家族积分超过30就可以获得双倍经验卷*1（每日1次）<br />奖励2：每天做家族任务，家族积分超过50就可以获得三倍经验卷*1（每日1次）</p>");
            }else if(index == 4){
                popdiv.html("<h2>神秘硬币</h2><p><strong>【活动时间】</strong><br />2015/7/6 11:00—2015/7/12 23:59<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />击杀野外小怪几率掉落拥有着神秘力量的钱币，收集神秘钱币可以兑换物品喔！<br />1、奖励1：10个神秘钱币，可兑换（不限次）：血莲丹*5<br />2、奖励2：10个神秘钱币，可兑换（不限次）：回气丹*5<br />3、奖励3：10个神秘钱币，可兑换（不限次）：还魂符*2<br />4、奖励4：20个神秘钱币，可兑换（每日10次）：淬翼丹*5<br />5、奖励5：20个神秘钱币+10非绑定晶钻，可兑换（每日10次）：融血丹*2<br />6、奖励6：20个神秘钱币+10非绑定晶钻，可兑换（每日10次）：储存结晶*1</p>");
            }else if(index == 5){
                popdiv.html("<h2>在线壕礼</h2><p><strong>【活动时间】</strong><br />永久<br /><strong>【活动范围】</strong><br />全服<br /><strong>【活动内容】</strong><br />游戏中角色在线时长达到对应时间，即可获得丰厚奖励<br /><strong>【活动奖励】</strong><br />[在线3秒]   空间玉简*2、斗气600<br />[在线120秒]：小红药*20、小蓝药*20、斗气600<br />[在线180秒]：强化石*1、斗气600<br />[在线240秒]：复活符*2、斗气600<br />[在线300秒]：商城红药*5、商城蓝药*5、斗气600<br />[在线360秒]：绿色异火结晶、斗气600<br />[在线420秒]：扩包道具*1、斗气600<br />[在线480秒]：家族令*1、斗气600<br />[在线540秒]：精炼石*1、斗气600<br />[在线600秒]：悬赏令*1、斗气600<br />[在线720秒]：20钻、斗气600<br />[在线900秒]：通用信物*1、斗气600</p>");
            }
            $(".pop_div").show();
            $(".zhezao").show();

        });
	   
        $(".close,.zhezao").unbind('click').bind("click",function(){
            $(".pop_div").hide();
            $(".zhezao").hide();
			$('.lb_tk').hide();
        })
		
		
    })
</script>
</body>

</html>
