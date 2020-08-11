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
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $full_base_url ?>/wap/css/style.css"  />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $full_base_url ?>/wap/css/swiper.min.css"  />
<!--
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.11.0.min.js"></script>
-->
<script type="text/javascript"> 
window.onload = function(){ 
if(isWeiXin()){ 

} 
} 
function isWeiXin(){ 
var ua = window.navigator.userAgent.toLowerCase(); 
if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
$('.xz_down').attr('href','//cqb.uu.cc/activity/cqb/weixingw.html');
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

               // var img_url_xz = $('.xz_down img').attr('src');
			   // var img_url_yy = $('.vip_yy img').attr('src');
				if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
					 // var bdUrl = window.location.href;
					 // if(bdUrl == "//cqb.uu.cc/"){
						   $('.xz_down').attr('href','<?php BLOCK("ios_download_url") ?>');	
						//}else{
						//   $('.xz_down').attr('href','//lnk8.cn/Y1Qdks');	
						//   $('.go_home').attr('href','//cqb.uu.cc/home?link=bd');
					//	}		
					$('.xz_down').attr('data-type',1);
					
				} else if (/(Android)/i.test(navigator.userAgent)) {
					$('.xz_down').attr('data-type',2);
					 var ref = document.referrer;
					 
					// var bdUrl = window.location.href;
					  if(/\.baidu\.com/.test(ref)){
						  
						 $('.xz_down').attr("href","<?php BLOCK('bd_wap_ios_download') ?>")
						 //$('.xz_down').attr("href","//duokoo.baidu.com/game/?pageid=Hdkicssp&p_tag=864103 ")
						 $('.go_home').attr('href','//cqb.uu.cc/home?link=bd');
						 }else{
							 $('.xz_down').attr("href","<?php BLOCK('nbd_ios_download') ?>")
							 }
					//$('.xz_down').attr("href","//m.pt.cn/down/game/20012221110")
					
				}



return false; 
} 
} 
</script> 
</head>

<body>
<div id="content">
	<header class="top"><a class="top_logo" href="//cqb.uu.cc/home/"><img src="<?php BLOCK('game_icon') ?>" alt="《苍穹变》官网" /></a><h2>苍穹变</h2><h3>3D超人气小说PK手游</h3><a class="go_home" href="//cqb.uu.cc/home/">进入官网</a></header>
	<section class="pr section1">
		<a class="pa vedio_btn" href="javascript:;"></a>
		<div class="down_load">
	       <a href="//lnk8.cn/Y1Qdks" class="xz_down" ></a>
	       <a href="javascript:;" class="vip_yy" data-type=""></a>
	    </div>
	</section>
    <!--
    <div class="down_load">
       <a href="//lnk8.cn/Y1Qdks" class="xz_down" ><img src="//cqb.uu.cc/cqb.uu.cc/wap/images/dn_load.jpg" width="284" height="73"></a>
       <a href="javascript:;" class="vip_yy" data-type=""><img src="//cqb.uu.cc/cqb.uu.cc/wap/images/dn_yy.jpg" width="284" height="73"></a>
    </div>
    -->
<!--
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php
        	SHOW_DATAS('<div class="swiper-slide"><img src="@@STR1@@" width="582" height="328" /></div>','m-d',7,100,1,array());
        ?>
        </div>
    
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
-->
    <!-- Swiper JS -->
    <script src="<?php echo $full_base_url ?>/wap/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });
    </script>


  
    <footer class="footer">
    	<div class="logos"><a href="//www.idreamsky.com" target="_blank"><img src="<?php echo $full_base_url ?>/wap/images/foot_logo_ledou.jpg" alt="乐逗游戏" /></a><img src="<?php echo $full_base_url ?>/wap/images/foot_logo_tianshen.jpg" alt="天神互动" /></div>
         <ul>
           <li><a href="//www.idreamsky.com/homes/contact">联系我们</a>|<a href="#">客服中心</a>|<a href="#">服务器列表</a>|<a href="#">进入论坛</a></li>
           <li class="second">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</li>
           <!--
           <li>地址：深圳市南山区科苑北路科兴科学园A3单元16层</li>
           <li>客服: 4008400188 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;媒体合作: 0755-86110235</li>
           -->
           <li>粤网文〔2016〕6871-1632号 新广出审[2015]186号 </li>
           <li>出版物号：ISBN 978-7-89390-007-5 文网游备字〔2016〕Ｍ-SLG 0504 号</li>
           <li>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</li>
           <li>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</li>
         </ul>
     </footer>
</div>
<div class="pop_div">
	<a class="close" href="javascript:;"></a>
    <div class="con">
    </div>
</div>
<div class="mask" style="display:none;"></div>
<div class="zhezao" style="display:none;"></div>
<div class="biaodan">
	<!--
    <span class="cha"><img src="<?php echo $full_base_url ?>/wap/images/cha.jpg" /></span>
    
    <input type="radio" name="banben"  value="1" class="radio radio1" checked="checked"><label for="a" class="radio lab1"><img src="<?php echo $full_base_url ?>/wap/images/p4_2.png" /></label><br>
    <input type="radio" name="banben"  value="2" class="radio radio2"><label for="b" class="radio lab2" ><img src="<?php echo $full_base_url ?>/wap/images/p4_1.png" /></label>
    -->
    <h5>领取礼包</h5>
    <input type="text" id="shuru" value="请输入手机号码领取" />
    <!--
    <input type="text" id="yz_m" /><img src="" id="yz_img" width='99' height='50'/>
    -->
    <p>
    <a class="yuyue" href="javascript:;">确认领取</a> 
    <a href="javascript:;" class="cha">关闭</a>
    </p>
</div>
<div class="sp_video">
   <video id="video1" src="//dl.uu.cc/download/2.mp4" controls=""  width="600" height="380" >   </video>
</div>


<div class="pa index_pop" style="display:none;"><a class="close2" href="javascript:;" title="关闭"></a><a class="pa go_index2" href="//cqb.uu.cc/activity/cqb_my/index.html" title="前往报名"></a></div>
<div class="mask" style="display:none;"></div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/zepto.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jbase64.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/wap/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(function() {
	$(".index_pop .close2,.mask").click(function(){
		$(".wish_pop,.index_pop,.mask").hide();
	});
	
	
	
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
		$('.sp_video').hide();
		$('.biaodan').hide();
	})
})
</script>

<script type="text/javascript">
   $('.vedio_btn').click(function(){
	     $('.zhezao').show();
	     $('.sp_video').show();
	    })
   
   $('.vip_yy').click(function(){
		$('.zhezao').show();
		$('.biaodan').show();
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
	//刷新验证码
	/*
   $('#yz_img').click(function(){
	$.ajax({
		type:"POST",
		url:"/get_verify_code",
		data:{charnum:4,mode:'img',width:99,height:50},
      	dataType:"json",
      	success:function(res){
      		if(res.ret == 0){
				//alert('aa');
				var imgUrl = BASE64.decoder(res.url);
                //alert(imgUrl);
				$("#yz_img").attr('src',imgUrl);
            }else {
            	alert("获取失败");
            }
      }
      });
	})			
	*/	
		
	$('.cha').click(function(){
		$('.biaodan').hide();
		$('.zhezao').hide();
		$('#shuru').attr('value','请输入手机号码领取');
		$('#yz_m').val('');
		})
    $('.zhezao').click(function(){
		$('.zhezao').hide();
		$('.biaodan').hide();
		$('#shuru').attr('value','请输入手机号码领取');
		$('#yz_m').val('');
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
				var type = $('.xz_down').attr('data-type');
				var code_id;
				if(type == 1){
					    code_id = 65;
					}else{
						code_id = 67;
				    }
				//var verify = $('#yz_m').val();
				//alert(type + "---" + code_id+"----"+phone+"---"+verify);
				 $.ajax({
						type:"POST",
						url:"/send_phone_code",
						data:{phone:phone,code_id:code_id,type:type,site_id:70},
						dataType:"json",
						success:function(res){
							if(res.ret == 0){
								alert("发送成功");
							}else if(res.ret == 8){
								alert("您已经领取过哦！");
							}else if(res.ret == 10){
								alert("验证码错误！");
							}else{
								alert("发送失败");
							}
					  }
				});

			}	
		}
	    })
</script>
</body>
</html>
