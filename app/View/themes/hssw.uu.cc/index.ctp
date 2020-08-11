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
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div class="top">
    <div class="wrap">
           <div class="logo"><a href="#link" target="_blank"><img src="<?php BASE_URL() ?>images/logo.png" /></a></div>
        <ul>
            <li><a href="/" target="_self">官网首页<em></em></a></li>
            <li><a href="//hssw.uu.cc/news/378.html" target="_self">游戏攻略<em></em></a></li>
            <li><a href="<?php echo GET_BLOCK('forum_url');?>" target="_blank">官方论坛<em></em></a></li>
            <li><a href="//hssw.uu.cc/news/377.html" target="_self">最新活动<em></em></a></li>
        </ul>
        <a class="qqun" href="javascript:;" title="官方粉丝群"></a>
        <div class="tips-pop qq_pop">
            <img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>" />
            <span>加入QQ群</span><h3><?php echo GET_BLOCK('qq_group');?></h3>
        </div>
        <a class="wxin" href="javascript:;" title="官方微信"></a>
        <div class="tips-pop wxin_pop">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" />
            <h3>微信公众号</h3><span>扫描二维码关注<br><?php echo GET_BLOCK('weixin_account');?></span>
        </div>

    </div>
</div>

<div class="main-banner1">
    <div class="wrap"><a class="vedioBtn video_btn_link" href="javascript:;" name="<?php echo GET_BLOCK('vedio_url');?>"></a></div>
</div>
<div class="main-banner2">
    <div class="wrap">
        <div class="main1Download">
            <div class="subBox1">
                <a href="<?php echo GET_BLOCK('android_download_url');?>"></a>
                <a href="<?php echo GET_BLOCK('ios_download_url');?>"></a>
            </div>
            <div class="subBox2">
                <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" alt="" width="126" height="126">
            </div>
            <a href="javascript:;" class="subBox3 libao"></a>
        </div>

    </div>
</div>

<div class="main2">
    <div class="wrap">
        <div class="content">
            <div id="newsTabs" class="newsTabs">
                <div class="hd">
                    <ul>
                        <li>最新</li>
                        <li>公告</li>
                        <li>活动</li>
                        <li>攻略</li>
                    </ul>
                    <a class="newsMore" href="//hssw.uu.cc/news/98.html" target="_blank">更多 +</a>
                </div>

                <div class="bd">
                    <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y/m/d',array('公告','活动','攻略'),5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y/m/d',array('公告'),5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y/m/d',array('活动'),5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','Y/m/d',array('攻略'),5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                </div>
            </div>
            <div id="picFocus" class="picFocus"><!--最多四张图片-->
                <div class="bd">
                    <ul>
                    <?php
                    SHOW_DATAS('<li><a target="_blank" href="@@STR1@@"><img src="@@STR2@@" /></a></li>',
                    'Y-m-d',3,5);
                     ?>
                </ul>
                    </ul>
                </div>

                <div class="hd">
                    <ul><li class="on"></li><li class=""></li><li class=""></li><li class=""></li></ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main3">
    <div class="wrap">
        <div class="role_focus">
            <ul class="focus_pic" id="focus_pic_list">
                <li class="role5"><img src="<?php BASE_URL() ?>images/role5_big.png" /></li>
                <li class="role1"><img src="<?php BASE_URL() ?>images/role1_big.png" /></li>
                <li class="role2"><img src="<?php BASE_URL() ?>images/role2_big.png" /></li>
                <li class="role3"><img src="<?php BASE_URL() ?>images/role3_big.png" /></li>
                <li class="role4"><img src="<?php BASE_URL() ?>images/role4_big.png" /></li>
            </ul>

            <div class="focus_nav">
                <div class="tempWrap">
                    <ul class="fnav" id="focus_smaillPic_list">
                        <li class="on"><img src="<?php BASE_URL() ?>images/role5_icon.jpg"></li>
                        <li><img src="<?php BASE_URL() ?>images/role1_icon.jpg"></li>
                        <li><img src="<?php BASE_URL() ?>images/role2_icon.jpg"></li>
                        <li><img src="<?php BASE_URL() ?>images/role3_icon.jpg"></li>
                        <li><img src="<?php BASE_URL() ?>images/role4_icon.jpg"></li>
                    </ul>

                </div>
                <a href="javascript:;" title="上一个" class="navPrev"></a>
                <a href="javascript:;" title="下一个" class="navNext"></a>
                <ul class="hd"><li class="on"></li><li></li></ul>
            </div>
            <div class="focus_text">
                <ul id="focus_content_list">
                    <li>
                        <div class="roleTit"><h2>朗斯</h2><img src="<?php BASE_URL() ?>images/role5_skill.png"></div>
                        <p>人物介绍：挥舞着强有力的龙之哀伤，从不使用盾牌，朗斯总是第一<br>个冲进战斗中敌人最密集的地方。<br>技能：震地（能震晕并伤害周围的敌人。）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;火焰洪流(释放火焰攻击，对全区域内怪物造成巨大伤害。)</p>
                    </li>
                    <li>
                        <div class="roleTit"><h2>艾瑞斯</h2><img src="<?php BASE_URL() ?>images/role1_skill.png"></div>
                        <p>人物介绍：艾瑞斯是一个无可匹敌的魔法战士，她用巨大的威力保卫<br>着天空岛屿。<br>技能：法师爆炸（强大的能量光束能对周围的怪物造成巨大伤害！）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法力刀 ( 利用锋利的箭造成伤害，同时降低敌人对自己的伤害。)</p>
                    </li>
                    <li>
                        <div class="roleTit"><h2>石之领主</h2><img src="<?php BASE_URL() ?>images/role2_skill.png"></div>
                        <p>人物介绍：尽管外表冷酷，石之领主一心一意保护他的子民，并把每<br>位士兵的牺牲都视为个人失败。<br>技能：爆炸愈合（治愈并给予石之领主和周围部队额外的生命值。）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;神盾岩 ( 震荡符石能够治愈盟军并对怪物造成伤害。)</p>
                    </li>
                    <li>
                        <div class="roleTit"><h2>凯伦</h2><img src="<?php BASE_URL() ?>images/role3_skill.png"></div>
                        <p>人物介绍：金箔的精英突击兵和精灵族太阳神的守卫者，凯伦，布莱<br>斯虽然年轻，但是身兼巨任。<br>技能：森林陷阱（设置陷阱击晕怪物。）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;太阳陷阱( 激活后，陷阱会持续造成太阳伤害。)</p>
                    </li>
                    <li>
                        <div class="roleTit"><h2>塔拉</h2><img src="<?php BASE_URL() ?>images/role4_skill.png"></div>
                        <p>人物介绍：来自遥远沙漠的游牧旅者，塔拉天赋神力，<br>攻防兼备。<br>技能：达鲁德风暴（创造沙之漩涡，拖慢敌人。）</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main4">
    <div class="wrap">
        <div class="m4Role"></div>
        <ul class="tabsList">
            <li class="tit on">
                <h4 class="lib"><img src="<?php BASE_URL() ?>images/teseS02.jpg"></h4>
                <div class="tabBody"><img src="<?php BASE_URL() ?>images/teseB02.jpg"></div>
            </li>
            <li class="tit">
                <h4 class="lib"><img src="<?php BASE_URL() ?>images/teseS01.jpg"></h4>
                <div class="tabBody"><img src="<?php BASE_URL() ?>images/teseB01.jpg"></div>
            </li>
            <li class="tit">
                <h4 class="lib"><img src="<?php BASE_URL() ?>images/teseS03.jpg"></h4>
                <div class="tabBody"><img src="<?php BASE_URL() ?>images/teseB03.jpg"></div>
            </li>
            <li class="tit">
                <h4 class="lib"><img src="<?php BASE_URL() ?>images/teseS04.jpg"></h4>
                <div class="tabBody"><img src="<?php BASE_URL() ?>images/teseB04.jpg"></div>
            </li>
            <li class="tit">
                <h4 class="lib"><img src="<?php BASE_URL() ?>images/teseS05.jpg"></h4>
                <div class="tabBody"><img src="<?php BASE_URL() ?>images/teseB05.jpg"></div>
            </li>
        </ul>
    </div>
</div>

<div class="main5">
    <div class="wrap">
        <!--<ul class="mediaLinks">
            <?php
                    SHOW_DATAS('<li><a target="_blank" href="@@STR2@@">@@STR1@@</a></li>',
                    'Y-m-d',1,20);
                     ?>
        </ul>
        <img class="codeImg" src="<?php echo GET_BLOCK('weixin_qrcode');?>">
        <div class="contact">
            <span><?php echo GET_BLOCK('kefu_qq');?></span>
            <span><?php echo GET_BLOCK('kefu_phone');?></span>
        </div>-->
        <img class="bg" src="<?php BASE_URL() ?>images/kefu.png" alt="">
        <img class="bg" src="<?php BASE_URL() ?>images/kefu2.png" alt="">
        <img class="bg" src="<?php BASE_URL() ?>images/kefu3.png" alt="">
        <img class="qrCode" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="">
        <div class="text"><?php echo GET_BLOCK('kefu_qq');?></div>
    </div>
</div>

<?php require_once 'footer.ctp';?>

<div class="floatTing">
    <img src="<?php echo GET_BLOCK('game_download_qrcode');?>" alt="">
    <a href="<?php echo GET_BLOCK('android_download_url');?>"></a>
    <a href="<?php echo GET_BLOCK('ios_download_url');?>"></a>
    <a href="javascript:;" class="libao"></a>
    <span class="back_btn1 on">收<br>起</span>
    <span class="back_btn2">展<br>开</span>
</div>
<div class="popup">
    <div class="yuyuePop">
        <input class="yuyue_ipt" name="phone" type="tel" placeholder="指挥官，在这输入您的手机号">
        <div class="device_choice"><span class="ios-choose on"></span><em>IOS</em><span class="android"></span><em>安卓</em></div>
        <a class="yuyue-go" href="javascript:;"></a>
        <a href="javascript:;" class="close"></a>
    </div>
</div>
<div class="zhezao"></div>

<div class="s_p_k" ><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>


<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery.SuperSlide.2.1.1.js"></script>


<script type="text/javascript">
    function getStyle(obj, name)
    {
        if(obj.currentStyle)
        {
            return obj.currentStyle[name];
        }else
        {
            return getComputedStyle(obj, false)[name];
        }
    }
    //var alpha = 30;
    function startMove(obj, arr, iTarget,fn)
    {
        clearInterval(obj.timer);

        obj.timer=setInterval(function (){
            var cur=0;
            if(arr=='opacity'){
                cur=Math.round(parseFloat(getStyle(obj, arr))*100);
            }else{
                cur=parseInt(getStyle(obj, arr));
            }
            var speed=(iTarget-cur)/6;
            speed=speed>0?Math.ceil(speed):Math.floor(speed);
            if(cur==iTarget){
                clearInterval(obj.timer);
                if (fn) {fn()};
            }else{
                if(arr=='opacity')
                {
                    obj.style.filter='alpha(opcity:'+(cur+speed)+')';
                    obj.style.opacity=(cur+speed)/100;

                }else
                {
                    obj.style[arr]=cur+speed+'px';
                }
            }
        }, 30);
    }

    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });

    jQuery(".newsTabs").slide({});

    jQuery(".main3").slide({trigger:"click"});

    //大图和文字切换
    jQuery(".role_focus").slide({ titCell:".fnav li", mainCell:".focus_pic", targetCell:".focus_text li",trigger:"click",delayTime:100,startFun:function(i,p){
        //控制小图自动翻页
        if(i==0){ jQuery(".role_focus .navPrev").click() } else if( i%4==0 ){ jQuery(".role_focus .navNext").click()}
        }
    });
    //小图滚动
    jQuery(".role_focus").slide({ mainCell:".fnav",prevCell:".navPrev",nextCell:".navNext",effect:"left",vis:4,scroll:4,delayTime:0,pnLoop:false});

    //游戏特色
    jQuery(".tabsList").slide({ titCell:".tit",trigger:'click',triggerTime:0 });

    //微信
    var wxin_dl = $(".wxin");
    var wxin_pd = $(".wxin_pop");
    var qqun_dl = $(".qqun");
    var qqun_pd = $(".qq_pop");
    wxin_dl.hover(function() {
        wxin_pd.addClass("wxin_pop_show");
    }, function() {
        wxin_pd.removeClass("wxin_pop_show");
    });
    qqun_dl.hover(function() {
        qqun_pd.addClass("wxin_pop_show");
    }, function() {
        qqun_pd.removeClass("wxin_pop_show");
    });

    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });
    //
    var floatTing = document.querySelector('.floatTing');
    var back_btn1 = document.querySelector('.back_btn1');
    var back_btn2 = document.querySelector('.back_btn2');
    back_btn1.onclick=function(){
        startMove(floatTing,'right',-166,function(){
            startMove(back_btn1,'right',0,function(){
                // alert('完了！')
            })
        });
        $('.floatTing span').removeClass('on');
        $('.floatTing .back_btn2').addClass('on');
    };
    back_btn2.onclick=function(){
        startMove(floatTing,'right',0,function(){
            startMove(back_btn2,'right',-166,function(){
                // alert('完了！')
            })
        });
        $('.floatTing span').removeClass('on');
        $('.floatTing .back_btn1').addClass('on');
    };

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao').show();
        $('.s_p_k').show();
    })
    $('.close,.zhezao').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.pop-yuyue').hide();
        $('.zhezao').hide();
    })

    //预约
    $('.date-btn').click(function(){
        $('.zhezao,.pop-yuyue').show();
    })

    $('.libao').click(function(){
        $('.popup').show();
    })
    $('.close').click(function(){
        $('.popup').hide();
    })

    //预约事件
    $('.device_choice span').click(function(){
        $(this).addClass('on').siblings().removeClass('on');
    })

    var phone;
    var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
        phone = $('.yuyue_ipt').val();
        if($('.ios-choose').is('.on')){
            code_id = 103;
        }else{
            code_id = 104;
        }
        if(phone == ''){
            alert('请输入手机号哦！');
            }else{
            if(!myreg.exec(phone)){
                alert('您输入的手机号码不对哦！');
                }else{
                    $.ajax({
                    type:"POST",
                    url:"/send_phone_code",
                    data:{phone:phone,collect_name:126,code_id:code_id},
                    dataType:"json",
                    success:function(res){
                        if(res.ret == 2){
                            alert("您已经领取过礼包，去游戏里兑换吧！");
                        }else if(res.ret == 0){
                            alert("礼包兑换码已经通过手机短信下发给您，请注意查收，祝您游戏愉快~");
                        }else{
                            alert("礼包领取失败！");
                        }
                  }
            });
            }
        }
    })
</script>

</body>
</html>
