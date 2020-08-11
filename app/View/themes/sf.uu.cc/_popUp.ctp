<div class="sub-bar">
    <div class="subbox">
        <p class="sns">
            <a href="#"><img src="<?php echo $full_base_url ?>/images/qq-weibo.png" /></a>
            <a href="#"><img src="<?php echo $full_base_url ?>/images/sina.png" /></a>
        </p>
        <p style="margin-bottom:5px;">官方1群：310749298</p>
        <p><a href="//dl.uu.cc/app/3/BuloGame_tianjiangyly.apk" target="_blank"><img src="<?php echo $full_base_url ?>/images/bbs-btn.jpg" /></a></p>
        <p><a href="//bbs.uu.cc/forum-240-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/wanjialuntan.png" /></a></p>
    </div>
    <a href="javascript:;" class="targ" show="1"></a>
</div>
<div class="mask" style="display:none"></div>
<div class="pop pop-video" style="display:none">
    <?php $video=$this->SF->comm_video();
    ?>
    <div id="video">
        <ul>
            <?php if(!empty($video)):?>
             <?php foreach($video as $key=>$value):?>
                    <?php if($key == 0):?>
                        <li><?php echo $value["content"];?></li>
                     <?php else:?>
                        <li style="display:none"><?php echo $value["content"];?></li>
                      <?php endif;?>
              <?php endforeach;?>
            <?php endif;?>
        </ul>
    </div>

    <ul class="pop-video-list">
        <?php if(!empty($video)):?>
            <?php foreach($video as $key=>$value):?>
                <?php $img_url=$value['small_url']?"/uploads/".$value['small_url']:$full_base_url."/images/video-icon.jpg";?>
                <?php if($key == 0):?>
                    <li class="cur"><img src="<?php echo $img_url;?>" width="120" height="66" /><span>正在播放</span></li>
                <?php else:?>
                    <li><img src="<?php echo $img_url;?>" width="120" height="66" /><span>正在播放</span></li>
                <?php endif;?>
            <?php endforeach;?>
        <?php endif;?>

        <li class="more"><a href="/news/30.html">查看更多</a></li>
    </ul>
    <a href="javascript:;" class="close">关闭</a>
</div>
<div class="pop pop-phone" style="display:none">
    <div class="title"><img src="<?php echo $full_base_url ?>/images/pop-phone-title.png" alt="账号激活" /></div>
    <div class="pop-sec">
        <span>手机号</span>
        <span><input type="text" value="" name="phone" /></span>
        <a href="javascript:;" id="get_code"><img src="<?php echo $full_base_url ?>/images/pop-phone-btn.png" alt="立即激活" /></a>
    </div>
    <a href="javascript:;" class="close">关闭</a>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/flowplayer.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/switch.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/cookie.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/data_tracking.js" type="text/javascript"></script>
<script>
    // var dUrl = {
    //     'android':[{
    //         'wk': '//dl.uu.cc/download/TianJiang-3_v3.1.2_s2.1.22_WK0S0N20000.apk',
    //         'chw': '//dl.uu.cc/download/TianJiang-3_v3.1.2_s2.1.22_CW0S0N10001.apk',
    //         'bd': '//dl.uu.cc/download/TianJiang-3_v3.1.2_s2.1.22_BD0S0N50002.apk',
    //         'u9': '//dl.uu.cc/download/TianJiang-3_v3.1.2_s2.1.22_YJ0S0N30000.apk',
    //         '17173': '//dl.uu.cc/download/TianJiang-3_v3.1.2_s2.1.22_YQ0S0N20001.apk',
    //         'yxd': '//dl.uu.cc/download/TianJiang-3_v3.1.2_s2.1.22_YD0S0N02000.apk'
    //     }],
    //     'ios':[{
    //         'wk': '//dl.uu.cc/download/TianJiang_v3.1.2_s1.0.0_WK0S0N20001.ipa',
    //         'chw': '//dl.uu.cc/download/TianJiang_v3.1.2_s1.0.0_CW0S0N10000.ipa',
    //         'bd': '//dl.uu.cc/download/TianJiang_v3.1.2_s1.0.0_BD0S0N50001.ipa',
    //         'u9': '//dl.uu.cc/download/TianJiang_v3.1.2_s1.0.0_YJ0S0N30001.ipa',
    //         '17173': '//dl.uu.cc/download/TianJiang_v3.1.2_s1.0.0_YQ0S0N20000.ipa',
    //         'yxd': '//dl.uu.cc/download/TianJiang_v3.1.2_s1.0.0_YD0S0N02001.ipa'
    //     }]
    // }

    // function get_cookie(name) {  
    //     var search = name + "=";  
    //     var returnvalue = "";  
          
    //     if(document.cookie.length>0) {  
    //         offset = document.cookie.indexOf(search);  
    //         if(offset!=-1) {  
    //             offset = search.length;  
    //             end = document.cookie.indexOf(";",offset);  
    //             if(end==-1) {  
    //                 end = document.cookie.length;  
                      
    //             }  
    //             returnvalue = unescape(document.cookie.substring(offset,end));  
    //         }  
    //     }  
    //     return returnvalue;  
    // }

    // function set_cookie() {  
    //     if(get_cookie("wk")=='') {  
    //         document.cookie="wk=yes";  
    //     }
    //     if(get_cookie("chw")=='') {  
    //         document.cookie="chw=yes";  
    //     }
    //     if(get_cookie("bd")=='') {  
    //         document.cookie="bd=yes";  
    //     }
    //     if(get_cookie("u9")=='') {  
    //         document.cookie="u9=yes";  
    //     }
    //     if(get_cookie("1713")=='') {  
    //         document.cookie="1713=yes";  
    //     }
    //     if(get_cookie("yxd")=='') {  
    //         document.cookie="yxd=yes";  
    //     }   
    // }

    // function SetCookie(sName, sValue){
    //     document.cookie = sName + "=" + escape(sValue) ;
    // }
    // function GetCookie(sName){
    //     var aCookie = document.cookie.split("; ");
    //     for (var i=0; i < aCookie.length; i++) {
    //         var aCrumb = aCookie[i].split("=");
    //         if (sName == aCrumb[0]);
    //         return unescape(aCrumb[1]);
    //     }
    //     return "";
    // }

    // $(function(){
    //     var url = window.location.search;
    //     if(url.indexOf("wk")>-1){

    //     }
    // })










    flowplayer.conf = {
        engine:"flash"
    };
    wk = function(e) {
        var _keyCode = e.keyCode;
        if(e.shiftKey){return false;}//禁用shift键，防止输入其他字符
        if ((_keyCode > 47 && _keyCode < 58)|| (_keyCode > 95 && _keyCode < 106) ||(_keyCode > 36 && _keyCode < 41) || (_keyCode == 46)||  (_keyCode == 8) || (_keyCode == 9)) {
            return true;
        }
        return false;
    };
    function showPopUp(){
        alert("天降精英品鉴已经结束，敬请期待下一轮测试");
            return;
        $(".mask").show();
        $(".pop-phone").show();
        var url = "//share.v.t.qq.com/index.php?c=share&a=index&title="+encodeURIComponent("#这张牌，不一样！#创新卡牌手游《天降-近卫英雄传》今日开测，拥有类dota游戏的灵魂元素，享受原汁原味的战斗操作，团队配合，阵容策略；你还会来和我并肩战斗吗？官网地址：//sf.uu.cc/，视频地址：")+"&url="+encodeURIComponent("//v.youku.com/v_show/id_XNzAyNzQ2NTc2.html")+"&appkey=&site=sf.uu.cc&pic="
        /* var content = "#哪张牌，能赢下这个时代？#乐逗游戏神秘新游《代号D》悬念站上线，创新玩法，打造即时战斗卡牌手游领袖，立即预约首测礼包 //sf.uu.cc";
         var url = "//service.weibo.com/share/share.php?";
         url += "title=" +encodeURIComponent(content) + "&";
         url += "url="+encodeURIComponent("//sf.uu.cc")+"&appkey=1203024545&";
         url += "pic=http%3A%2F%2Fsf.uu.cc%2Fimages%2Fss.jpg";*/

        window.open(url,'weibo','top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');
    }
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
    $(function(){
        //侧边浮动条
        $(".targ").click(function(){
            var m_left = null;
            if($(this).attr("show") == 0){
                $(this).attr("show","1");
                m_left = 0;
            }else{
                $(this).attr("show","0");
                m_left = "-163px";
            }
            $(".sub-bar").animate({"left":m_left},300);
        });
        $(".switch").Switch({
            width:360,
            height:200,
            moveInterval:400,
            interval:5000,
            direction:"alpha",
            handle:".triggers"
        });
        //新闻切换
        $(".tabs").children().not(".more").click(function(){
            var  i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(this).parent(".tabs").next().children(":eq("+i+")").show().siblings().hide();
        });
        //英雄介绍
        var timing = null;
        var xk = $(".xk").find("ul");

        xk.width(xk.children().size()*809);
        $(".xk").find(".next").click(function(){
            xk.stop();
            timing && clearInterval(timing);
            xk.animate({"left":"-940px"},500,function(){
                xk.css({"left":0}).children(":first").appendTo(this);
                timing = setInterval(run,5000);
            });
        });
        $(".xk").find(".prev").click(function(){
            xk.stop();
            timing && clearInterval(timing);
            xk.css({"left":"-940px"}).children(":last").prependTo(xk);
            xk.animate({"left":0},500,function(){
                timing = setInterval(run,5000);
            });
        });
        function run(){
            xk.animate({"left":"-940px"},500,function(){
                xk.css({"left":0}).children(":first").appendTo(this);
            });
        }
        timing = setInterval(run,5000);
        //弹窗
        $(".mask").height($(document).height());
        $(".close").click(function(){
            $(".mask").hide();
            $(".pop").hide();
        });
        $(".play").click(function(){
            $(".mask").show();
            $(".pop-video").show();
        });
        $(".pop-video-list").children().not(".more").click(function(){
            var  i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $("#video").children("ul").children(":eq("+i+")").show().siblings().hide();
        });
        //抢激活码
        $("#cdkey").click(function(){
            showPopUp();
        });
        $("input[name=phone]").keydown(function(e){
            return wk(e);
        });

        $("#get_code").click(function(){
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
    })
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F295fce5acbdeb282a4b01099387c7e10' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
$(function(){
    $("body").find("a:last").hide();
});
</script>