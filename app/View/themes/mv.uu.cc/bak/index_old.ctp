<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640,user-scalable=0"/> 
    <title>纪念碑谷</title>
    <link media="screen" href="<?php echo $full_base_url ?>/css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="mainbg" class="">
        <div class="header">
            <h1>纪念碑谷</h1>
        </div>
        <div class="content">
            <div class="load"><a href="javascript:;"><img src="<?php echo $full_base_url ?>/images/load5.png" alt="android下载" /></a></div>
            <div class="hrf clearfix">
                <a class="hrf_yyb" href="//android.myapp.com/myapp/detail.htm?apkName=com.ustwo.monumentvalleyzz"></a>
                <a class="hrf_360" href="//zhushou.360.cn/detail/index/soft_id/2996259?recrefer=SE_D_%E7%BA%AA%E5%BF%B5%E7%A2%91%E8%B0%B7"></a>
                <a class="hrf_bd" href="//shouji.baidu.com/game/item?docid=7770388&from=as&f=search_app_%E7%BA%AA%E5%BF%B5%E7%A2%91%E8%B0%B7%40listsp_1_image%401%40header_game_input"></a>
                <a class="hrf_wdj" href="//www.wandoujia.com/apps/com.ustwo.monumentvalleyzz"></a>
                <a class="hrf_xm" href="//app.mi.com/detail/96929?ref=search"></a>
                <a class="hrf_leshop" href="//www.lenovomm.com/app/16488477.html"></a>
                <a class="hrf_oppo" href="//m.store.oppomobile.com/app/detail.html?i=2113083&pos=3&sc=3412"></a>
                <a class="hrf_vivo" href="//appstore.vivo.com.cn/appinfo/downloadApp?id=91006&package_name=com.ustwo.monumentvalleyzz&token=861600e445d01c35f332a6c73433082e&cfrom=1&version=10"></a>
                <a class="hrf_coolpad" href="//www.coolmart.net.cn/#id=detail&appid=11383589"></a>
                <a class="hrf_huawei" href="//a.vmall.com/app/C10285072?shareTo=weixin&shareFrom=gamebox&from=singlemessage&isappinstalled=0"></a>
                <a class="hrf_jinli" href="//game.gionee.com/Front/Game/detail/?from=gn&id=4988&keyword=%E7%BA%AA%E5%BF%B5%E7%A2%91%E8%B0%B7&cku=_2821692189_null&action=visit&object=gamedetail4988_gn&intersrc=isearch_gn_gid4988"></a>
            </div>
        </div>
        <div class="wx">
            <div class="wx_desca">先点击右上角</div>
            <div class="wx_descb">然后"在浏览器中打开"</div>
        </div>
    </div>
    <div class="h_game" style=" width:640px; padding:6px 0; margin:0 auto; line-height:25px; font-size:12px; text-align:center; text-align:center; background-color:#000; color:#fff;"><strong>健康游戏忠告：</strong><br />抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br />适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。<br /><a href="//sq.ccm.gov.cn/ccnt/sczr/service/business/emark/gameNetTag/4028c08b4dd1e476014dd29b68cc059c" target="_blank"><img width="30px;" src="<?php echo $full_base_url ?>/images/emark.png" alt="android下载" /></a></div>
    <script src="<?php echo $full_base_url ?>/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
        var bgNum = Math.floor(Math.random()*6);; 
		
   
		$("#mainbg").attr("class",'bg'+bgNum)
		
        window.onload = function () {
            var ua = navigator.userAgent.toLowerCase();
            $(".load a").click(function () {
                if (ua.match(/MicroMessenger/i) == "micromessenger") {
                    $(".wx").show();
                } else {
                    window.location.href = "//dl.uu.cc/idreamsky/Monumentvalleyzz_v2.3.0.1_s2.4.3.5_LE0S0N00000-weixin-ali.apk";
                }
            });
    
        };
    </script>
</body>
</html>
