<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=480,user-scalable=no" />
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<link media="screen" href="<?php echo $full_base_url ?>/css/reset.css" rel="stylesheet" type="text/css">
<link media="screen" href="<?php echo $full_base_url ?>/css/download.css" rel="stylesheet" type="text/css">
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>
<body>
<div class="page" style="padding-bottom:20px;height:auto;">
    <div class="header">
        <h1>天降</h1>
		<div class="home"><a target="_blank" href="/">官网首页</a></div>
    </div>
   <div class="div_content">
        <!-- <a href="javascript:;" class="cdkey"><img src="<?php echo $full_base_url ?>/images/qiangzihuo.png" alt=""  id="code_click"/></a>
        <p class="kucun">库存充足  放心预约</p> -->
        <div class="content_download">
            <a href="//dl.uu.cc/download/skyfall_ios.ipa"  id="iosDownload"><img src="<?php echo $full_base_url ?>/images/ios_load.png" alt="" /></a>
            <a href="//dl.uu.cc/download/skyfall_android.apk"><img src="<?php echo $full_base_url ?>/images/android_load.png" alt="" /></a>
            <!-- <a href="//dl.uu.cc/download/skyfall_ios.ipa"><img src="<?php echo $full_base_url ?>/images/ios_load.png" alt="" /></a>
            <a href="//dl.uu.cc/download/skyfall_android.apk"><img src="<?php echo $full_base_url ?>/images/android_load.png" alt="" /></a> -->
        </div>
        <p class="div_p2">安卓推荐4.0以上系统</p>
   </div>
   <div class="tishi">
        <p>温馨提示：如若您使用微信客户端打开页面，请点击右上角<img src="<?php echo $full_base_url ?>/images/lian2.png" alt="" /></p>
        <p>再选择<img src="<?php echo $full_base_url ?>/images/lian.png" alt="" />在浏览器中打开后进行下载。</p>
   </div>
   <div class="footer">
        <img src="<?php echo $full_base_url ?>/images/logo.png" alt="" />
        <p>深圳市创梦天地科技有限公司  联系电话：0755-86110235 </p>
        <p>地址：深圳市南山区高新科技园中区科苑路15号科兴科学园A栋</p>
        <p>Copyright©2012 All Rights Reserved</p>
        <p>粤ICP备11018438号<a href="//www.sznet110.gov.cn/netalarm/index.jsp" target="_blank"><img src="<?php echo $full_base_url ?>/images/shenwang.png" alt="" /></a>
        <a href="//www.sznet110.gov.cn/webrecord/doquery.jsp" target="_blank"><img src="<?php echo $full_base_url ?>/images/anwang.png" alt="" /></a>
        <a href="//net.china.com.cn/index.htm" target="_blank"><img src="<?php echo $full_base_url ?>/images/jubao.png" alt="" /></a>
        <a href="//www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank"><img src="<?php echo $full_base_url ?>/images/beian.png" alt="" /></a>乐逗游戏 版权所有</p>
   </div>
</div>
<div class="mask" style="display:none;"></div>
<div class="pop pop-phone" style="display:none">
    <div class="title"><img src="<?php echo $full_base_url ?>/images/pop-phone-title.png" alt="账号激活" /></div>
    <div class="pop-sec">
        <span>手机号</span>
        <span><input type="text" value="" name="phone" /></span>
        <a href="javascript:;" id="send"><img src="<?php echo $full_base_url ?>/images/pop-phone-btn.png" alt="立即激活" /></a>
    </div>
    <a href="javascript:;" class="close">关闭</a>
</div>
<script src="//sf.uu.cc/sf.uu.cc/js/cookie.js" type="text/javascript"></script>

<script type="text/javascript">
    if(navigator.userAgent.indexOf('Android') > -1)
    {
        var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
        var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
        document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
    }
    function showPopUp(){
        $(".pop").show();
        $(".mask").show();
        var url = "//share.v.t.qq.com/index.php?c=share&a=index&title="+encodeURIComponent("#这张牌，不一样！#创新卡牌手游《天降-近卫英雄传》今日开测，拥有类dota游戏的灵魂元素，享受原汁原味的战斗操作，团队配合，阵容策略；你还会来和我并肩战斗吗？官网地址：//sf.uu.cc/，视频地址：")+"&url="+encodeURIComponent("//v.youku.com/v_show/id_XNzAyNzQ2NTc2.html")+"&appkey=&site=sf.uu.cc&pic="
        /* var content = "#哪张牌，能赢下这个时代？#乐逗游戏神秘新游《代号D》悬念站上线，创新玩法，打造即时战斗卡牌手游领袖，立即预约首测礼包 //sf.uu.cc";
         var url = "//service.weibo.com/share/share.php?";
         url += "title=" +encodeURIComponent(content) + "&";
         url += "url="+encodeURIComponent("//sf.uu.cc")+"&appkey=1203024545&";
         url += "pic=http%3A%2F%2Fsf.uu.cc%2Fimages%2Fss.jpg";*/

        window.open(url,'weibo','top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
    }
    wk = function(e) {
        var _keyCode = e.keyCode;
        if(e.shiftKey){return false;}//禁用shift键，防止输入其他字符
        if ((_keyCode > 47 && _keyCode < 58)|| (_keyCode > 95 && _keyCode < 106) ||(_keyCode > 36 && _keyCode < 41) || (_keyCode == 46)||  (_keyCode == 8) || (_keyCode == 9)) {
            return true;
        }
        return false;
    };
$(function(){
    $(".mask").height($(document).height());
    $("input[name=phone]").keydown(function(e){
        return wk(e);
    });
    $("#code_click").click(function(){
        showPopUp();
    });
    $(".close").click(function(){
        $(".pop").hide();
        $(".cardPop").hide();
        $(".mask").hide();
    });
    function sendphone(phone){
        $.ajax({
            type:"POST",
            url:"/send_phone_code",
            data:{phone:phone,site_id:11,code_id:40},
            dataType:"json",
            success:function(respon){
                alert(respon.message);
                if(respon.ret == 0){
                    $(".pop").hide();
                    $(".mask").hide();
                }
            }
        });
    }
    $("#send").click(function(){
        var v = $("input[name=phone]").val();
        if(v){
            if(v.length != 11){
                alert("号码格式似乎有点不对？");
            }else{
                var oldtel = $.cookie("tel");
                if(oldtel){
                    oldtel = oldtel.split(",");
                    var d = false;
                    $.each(oldtel,function(i,t){
                        if(t == v){
                            d = true;
                            return false;
                        }
                    });
                    if(d){
                        alert("每个手机号限领一次，别贪心哦！");
                    }else{
                        sendphone(v);
                        oldtel.push(v);
                        $.cookie("tel",oldtel.join(","));
                       $("input[name=phone]").val('').change();
                    }
                }else{
                    $.cookie("tel",v);
                    sendphone(v);
                    $("input[name=phone]").val('').change();
                }
            }
        }else{
            alert("手机号还没输入呢！");
        }
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
</body>
</html>