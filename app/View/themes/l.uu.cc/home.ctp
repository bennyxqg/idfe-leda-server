<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
    <link media="screen" href="<?php echo $full_base_url ?>/css/index.css" rel="stylesheet" type="text/css">
</head>

<body onload="loadpopup();">
<div class="sybg">
    <div class="header">
        <h1><a href="/">烈焰遮天</a></h1>
        <div class="lt"><a target="_blank" href="//bbs.uu.cc/forum-250-1.html"><img src="<?php echo $full_base_url ?>/images/jrlt.png" alt=""></a></div>
    </div>
    <div class="content">
        <?php require_once "_top.ctp"; ?>
        <div class="second clearfix">
            <div class="zyjs tab fl">
                <ul class="tab-hd clearfix">
                    <li><span class="zs">战士</span></li>
                    <li><span class="fs">法师</span></li>
                    <li><span class="ds">道士</span></li>
                </ul>
                <div class="tabCon">
                    <div class="tab-con">
                        <div class="zyms">
                            <h3>职业描述</h3>
                            <p>先天的武者，以战斗作为自身生存的意义，专注于冷兵器的杀伐，凝练武魂之奥义，身为铁血战士的他习惯在战场上堂堂正正的击败任何对手</p>
                        </div>
                        <ul class="skill clearfix">
                            <li>
                                <h4>基础剑术</h4>

                                <p>奥义基础，修行根骨，自身可以永久提高攻击的命中效果。</p>

                                <div><img src="<?php echo $full_base_url ?>/images/skill_1_1.png" alt=""></div>
                            </li>
                            <li>
                                <h4>致命一击</h4>

                                <p>集结全身力道于双臂，攻击时有几率对敌单方造成额外的物理伤害。</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_1_2.png" alt="">
                            </li>
                            <li class="last">
                                <h4>穿刺剑法</h4>

                                <p>剑之域境的高级武术，具有隔位攻击前方双目标单位的技能效果，无视防御。</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_1_3.png" alt="">
                            </li>
                        </ul>
                        <img class="zs" src="<?php echo $full_base_url ?>/images/person-zs.png" alt="">
                    </div>
                    <div class="tab-con">
                        <div class="zyms">
                            <h3>职业描述</h3>

                            <p>喜爱玩火的熊孩子。虽没有武圣般的体魄，却参悟五行的真谛。善于召唤火、冰、雷释放远程魔法攻击。</p>
                        </div>
                        <ul class="skill clearfix">
                            <li>
                                <h4>小火球</h4>

                                <p>召唤天火凝练微型火炎球，对单个目标造成魔法伤害。</p>

                                <div><img src="<?php echo $full_base_url ?>/images/skill_2_1.png" alt=""></div>
                            </li>
                            <li>
                                <h4>火神领域</h4>

                                <p>火神加持，释放火焰光圈。可由几率将自身周围目标推开，此技能仅对低于自身等级的目标有效。</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_2_2.png" alt="">
                            </li>
                            <li class="last">
                                <h4>炎魔之路</h4>

                                <p>火神加持，释放火焰光圈。可由几率将自身周围目标推开，此技能仅对低于自身等级的目标有效。</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_2_3.png" alt="">
                            </li>
                        </ul>
                        <img class="fs" src="<?php echo $full_base_url ?>/images/person-fs.png" alt="">
                    </div>
                    <div class="tab-con">
                        <div class="zyms">
                            <h3>职业描述</h3>

                            <p>善于疗伤与辅助的好基友。精通毒蛊傀儡之术。</p>
                        </div>
                        <ul class="skill clearfix">
                            <li>
                                <h4>回春术</h4>

                                <p>妙手回春歧黄之术，可向己身或友方单体目标施加持续恢复生命值的神奇医术。</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_3_1.png" alt="">
                            </li>
                            <li>
                                <h4>召唤骷髅</h4>

                                <p>与魔界签订临时契约，可召唤一只继承自身一定百分比战斗力的骷髅卫士协同作战。</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_3_2.png" alt="">
                            </li>
                            <li class="last">
                                <h4>群体隐遁术</h4>

                                <p>土系奥义秘法，可使目标范围内的所有友方目标持续隐遁，目标单位移动后将解除隐遁效果</p>
                                <img src="<?php echo $full_base_url ?>/images/skill_3_3.png" alt="">
                            </li>
                        </ul>
                        <img class="ds" src="<?php echo $full_base_url ?>/images/person-ds.png" alt="">
                    </div>
                </div>
            </div>
            <div class="wbo fr">
                <img src="<?php echo $full_base_url ?>/images/gwwx.png" alt="">
                <ul class="micro-blog">
                    <li>客服电话<br />4008-4001-88</li>
                    <li><a target="_blank" href="//weibo.com/u/5576040055">新浪微博</a></li>
                </ul>
                <div class="gflt"><a target="_blank" href="//bbs.uu.cc/forum-250-1.html">官方论坛</a></div>
            </div>
        </div>
        <div class="third">
            <h3>合作媒体</h3>
            <div>
                <?php $data=$this->Ly->text_list("text_1");?>
                <?php if(!empty($data)):?>
                <?php foreach($data as $key=>$value):?>
                    <a target="_blank" href="<?php echo $value["url"];?>"><?php echo $value["title"] ?></a>
                <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!-- 弹出层 开始 -->
    <div class="floatDiv">
        <div class="info clearfix">
            <input class="ipt_01" type="text" name="phone" autocomplate="off" />
            <button id="code1">确定</button>
            <span>填写手机号，预约十万军费&极品装备</span>
        </div>
        <div class="info clearfix">
            <input class="ipt_02" type="text" name="code" autocomplate="off" />
            <button id="code2">确定</button>
            <span>填写您手机收到的验证码</span>
        </div>
        <div class="close"></div>
    </div>
    <div class="floatDiv2">
        <h2>预约成功</h2>
        <p>敬请关注8月27日不删档测试</p>
        <div class="close"></div>
    </div>
    <div class="xfc"></div>
    <div class="mask"></div>
    <!-- 弹出层结束 -->
    <?php require_once "_footer.ctp"; ?>
</div>
<script type="text/javascript">
function get_cookie(name) {  
    var search = name+"=";  
    var returnvalue = "";  
      
    if(document.cookie.length>0) {  
        offset = document.cookie.indexOf(search);  
        if(offset!=-1) {  
            offset = search.length;  
            end = document.cookie.indexOf(";",offset);  
            if(end==-1) {  
                end = document.cookie.length;  
                  
            }  
            returnvalue = unescape(document.cookie.substring(offset,end));  
        }  
    }  
    return returnvalue;  
}  

function tcc(){
   
}
function loadpopup() {  
    if(get_cookie("popped")=='') {  
        tcc(); 
        document.cookie="popped=yes";  
    }   
}
$(document).ready(function(){
    // 弹出层
    $(".xfc").click(function(){
        $(".floatDiv").show();
        $(".mask").show();
        $(".xfc").hide();
    });
    wk = function (e) {
        var _keyCode = e.keyCode;
        if (e.shiftKey) { return false; } //禁用shift键，防止输入其他字符
        if ((_keyCode > 47 && _keyCode < 58) || (_keyCode > 95 && _keyCode < 106) || (_keyCode > 36 && _keyCode < 41) || (_keyCode == 46) || (_keyCode == 8) || (_keyCode == 9)) {
            return true;
        }
        return false;
    };

    $(".mask").height($(document).height());
    $(".close").click(function(){
        $(this).parent().hide();
        $(".mask").hide();
        $(".xfc").show();
    })
    $("input[name=phone]").keydown(function(e){
        return wk(e);
    })
    
    $("#code1").click(function(){
        console.log("ssss");
        var phone = $("input[name=phone]").val();
        console.log(phone);
        if(phone && phone.length == 11){
            $.ajax({
                type:"POST",
                url:"Online/send_check_code",
                data:{site_id:26, phone:phone},
                dataType:"json",
                success:function(res){
                    //开始发送短信
                    var t = 59;
                    var ele = $("#code1");
                    ele.attr("disabled","disabled");
                    ele.html("60");
                    tid = setInterval(function(){
                        if(t == 0){
                            clearInterval(tid);
                            ele.removeAttr("disabled");
                            ele.html("重新获取");
                        }else{
                            ele.html(t);
                            t--;
                        }
                    },1000);
                }
            });
        }else{
            alert("请输入11位手机号码");
            return false;
        }
    })
    /*发送短信*/
    $("#code2").click(function(){
        var phone = $("input[name=phone]").val();
        var code =  $("input[name=code]").val();
        if(code){
            $.ajax({
                type:"POST",
                url:"/Online/check_code",
                data:{site_id:26, code_id:42, phone:phone, code:code},
                dataType:"json",
                success:function(res){
                    if(res.ret == 0){
                        $(".floatDiv").hide();
                        $(".floatDiv2").show();
                    }
                }
            });
        }else{
            alert("请输入验证码");
            return false;
        }
    })
})
</script>
</body>
</html>
