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
<link media="screen" href="<?php echo $full_base_url ?>/css/home_wap.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    $result= $this->SF->indexInitData();
    $img_list=$this->SF->wap_img_list("index_3");
    $img1_list=$this->SF->wap_img_list("index_4");
?>

<div class="page">
    <div class="header">
        <h1>天降</h1>
    </div>
   <div class="div_content">
        <!--<a href="javascript:;" class="cdkey"><img src="<?php echo $full_base_url ?>/images/qiangzihuo.png" alt=""  id="code_click"/></a>
        <p class="kucun">库存充足  放心预约</p>-->
        <div class="content_download">
            <!--<a href="//dl.uu.cc/download/skyfall_ios.ipa" class="ios">ios越狱版下载</a>
            <a href="//dl.uu.cc/download/skyfall_android.apk" class="and">android版下载</a>-->
            <a href="//dl.uu.cc/download/skyfall_ios.ipa"  id="iosDownload"><img src="<?php echo $full_base_url ?>/images/ios_load.png" alt="" /></a>
            <a href="javascript:alert('本次测试仅针对ios越狱版，敬请期待下次测试');"><img src="<?php echo $full_base_url ?>/images/android_load.png" alt="" /></a>
        </div>
        <p class="div_p2">安卓推荐4.0以上系统</p>
   </div>
   <div class="news">
        <ul class="tabs">
            <li class="cur">全部</li>
            <li>新闻</li>
            <li>攻略</li>
            <li>活动</li>
            <li class="more">
                <a href="<?php echo $this->Base->getNewsUrl("all");?>">更多<img src="<?php echo $full_base_url ?>/images/jia.png"></a>
            </li>
        </ul>
        <div class="news-list">
            <ul>
                <?php if($result["wap_total"]):?>
                    <?php foreach($result["wap_total"] as $key=>$value):?>
                        <li <?php if($key == 0) echo 'class="top"'?> ;>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [新闻]<?php echo $value["title"];?></a>
                            <span><?php echo date("y/d",$value["updated"]);?></span>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>

            <ul style="display: none">
                <?php if($result["news"]):?>
                    <?php foreach($result["news"] as $key=>$value):?>
                        <li <?php if($key == 0) echo 'class="top"'?> ;>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [攻略]<?php echo $value["title"];?></a>
                            <span><?php echo date("y/d",$value["updated"]);?></span>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>

            </ul>

            <ul style="display: none">
                <?php if($result["consulting"]):?>
                    <?php foreach($result["consulting"] as $key=>$value):?>
                        <li <?php if($key == 0) echo 'class="top"'?> ;>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [活动]<?php echo $value["title"];?></a>
                            <span><?php echo date("y/d",$value["updated"]);?></span>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>

            <ul style="display: none">
                <?php if($result["activity"]):?>
                    <?php foreach($result["activity"] as $key=>$value):?>
                        <li <?php if($key == 0) echo 'class="top"'?> ;>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [新闻]<?php echo $value["title"];?></a>
                            <span><?php echo date("y/d",$value["updated"]);?></span>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>

        </div>
    </div>
    <?php if($img_list):?>
        <div class="content_top_b">
            <div class="switch">
                <ul class="runContent">
                        <?php foreach($img_list as $key=>$value):?>
                            <li>
                                <?php if($value["big_link"]):?>
                                    <a href='<?php echo $value["big_link"];?>' target="_blank"><img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"></a>
                                <?php else: ?>
                                    <img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>">
                                <?php endif; ?>
                            </li>
                        <?php endforeach;?>
                </ul>
                <ul class="triggers">
                    <?php foreach($img_list as $key=>$value):?>
                                <?php if($key == 0):?>
                                    <li class="cur"></li>
                                <?php else:?>
                                        <li></li>
                                <?php endif;?>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    <?php endif;?>
    <div class="xkbox box">
        <div class="head">
            <h3>
                <img src="<?php echo $full_base_url ?>/images/hero.png" alt="英雄介绍" />
            </h3>
        </div>
        <div class="xk">
            <ul>
                <?php if($img1_list):?>
                <?php foreach($img1_list as $key=>$value):?>
                    <li>
                        <?php if($value["big_link"]):?>
                            <a href='<?php echo $value["big_link"];?>' target="_blank"><img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"></a>
                        <?php else: ?>
                            <img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>">
                        <?php endif; ?>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
            <span class="prev"></span>
            <span class="next"></span>
        </div>
       <!--  <span class="xk-mask"></span> -->
    </div>
    <div>
        <div class="head">
            <h3>
                <img src="<?php echo $full_base_url ?>/images/video.png" alt="攻略视频" />
            </h3>
        </div>
        <div class="video">
            <div id="video"><video id="video1" src="//dl.uu.cc/ars/sf20140423.mp4" width="480" height="263" poster="//sf2.uu.cc/sf.uu.cc/images/player.jpg"></video></div>
            <span class="mm"></span>
        </div>
    </div>
    <div class="sns">
        <div class="fl b1">
            <p><span><img width="24" height="20" src="<?php echo $full_base_url ?>/images/weixin.png" /></span>官方微信:ledousf</p>
            <p><span><img width="24" height="20" src="<?php echo $full_base_url ?>/images/qq.png" /></span>QQ群:310749298</p>
        </div>
        <div class="fl b2">
            <p><span><img width="24" height="20" src="<?php echo $full_base_url ?>/images/txwb.png" /></span><a href="//t.qq.com/tianjiang-jinwei" target="_blank">腾讯微博</a></p>
            <p><span><img width="24" height="20" src="<?php echo $full_base_url ?>/images/sina.png" /></span><a href="//weibo.com/ledousf" target="_blank">新浪微博</a></p>
        </div>
        <div class="fl b3">
            <a href="javascript:;" id="yuyue"><img src="<?php echo $full_base_url ?>/images/yuyue.png" width="128" alt="分享微博抢测试资格" /></a>
        </div>
    </div>
    <div class="luntan">
        <a href="//bbs.uu.cc/forum-240-1.html">进入论坛</a>
    </div>

    <div class="zhonggao">
        <span class="zhonggao_top">健康游戏忠告 </span>
        <p>抵制不良游戏  拒绝盗版游戏  注意自我保护  谨防上当受骗</p>
        <p>适度游戏益脑  沉迷游戏伤身  合理安排时间  享受健康生活 </p>
    </div>
    <div class="footer">
        <img src="<?php echo $full_base_url ?>/images/logo.png" alt="" />
        <p>深圳市创梦天地科技有限公司  联系电话：0755-86110235 </p>
        <p>地址：深圳市南山区高新科技园中区科苑路15号科兴科学园A栋</p>
        <p>Copyright©2012 All Rights Reserved</p>
        <p>粤ICP备11018438号&nbsp;&nbsp;<a href="//www.sznet110.gov.cn/netalarm/index.jsp" target="_blank"><img src="<?php echo $full_base_url ?>/images/shenwang.png" alt="" /></a>
        <a href="//www.sznet110.gov.cn/webrecord/doquery.jsp" target="_blank"><img src="<?php echo $full_base_url ?>/images/anwang.png" alt="" /></a>
        <a href="//net.china.com.cn/index.htm" target="_blank"><img src="<?php echo $full_base_url ?>/images/jubao.png" alt="" /></a>
        <a href="//www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank"><img src="<?php echo $full_base_url ?>/images/beian.png" alt="" /></a>&nbsp;&nbsp;乐逗游戏 版权所有</p>
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
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js" charset="UTF-8"></script>
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
$(".video .mm").click(function(){
        var video = $("#video1")[0];
        if(!$(this).hasClass("playing")){
            $(this).addClass("playing");
            video.play();
        }else{
            $(this).removeClass("playing");
            video.pause();
        }
    });

    $(".mask").height($(document).height());
    $("input[name=phone]").keydown(function(e){
        return wk(e);
    });
    $("#code_click").click(function(){
        showPopUp();
    });
    $("#yuyue").click(function(){
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
    $(".tabs").children().not(".more").click(function(){
            var  i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(this).parent(".tabs").next().children(":eq("+i+")").show().siblings().hide();
        });
        var timing = null;
        var xk = $(".xk").find("ul");

        xk.width(xk.children().size()*480);
        $(".xk").find(".next").click(function(){
            xk.stop();
            timing && clearInterval(timing);
            xk.animate({"left":"-480px"},500,function(){
                xk.css({"left":0}).children(":first").appendTo(this);
                timing = setInterval(run,5000);
            });
        });
        $(".xk").find(".prev").click(function(){
            xk.stop();
            timing && clearInterval(timing);
            xk.css({"left":"-480px"}).children(":last").prependTo(xk);
            xk.animate({"left":0},500,function(){
                timing = setInterval(run,5000);
            });
        });
        function run(){
            xk.animate({"left":"-480px"},500,function(){
                xk.css({"left":0}).children(":first").appendTo(this);
            });
        }

     $(".switch").Switch({
            width: 480,
            height: 260,
            moveInterval: 500,
            interval: 5000,
            direction: "alpha",
            handle: ".triggers"
        });
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