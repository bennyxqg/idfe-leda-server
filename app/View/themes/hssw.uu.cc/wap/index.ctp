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
<link rel="stylesheet" href="<?php BASE_URL() ?>css/swiper.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css"  />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<div id="content">
    <div class="top">
        <img class="game-logo" src="<?php BASE_URL() ?>images/icon.png" />
        <a class="download" href="//hssw.uu.cc/download"><img src="<?php BASE_URL() ?>images/downBtn.png"></a>
    </div>

    <div class="main">
    </div>

    <div class="btns">
        <a class="date-btn" href="javascript:;"></a>
        <a href="//hssw.uu.cc/download"></a>
    </div>

    <div class="vedio-box"><video width="522" style="background:#000;" onClick="playPause()" height="318" poster="<?php BASE_URL() ?>images/videoBg.jpg" controls src="<?php echo GET_BLOCK('vedio_url');?>" /></div>

    <div class="news-tabs">
        <ul>
            <li class="active"><a href="javascript:;">新闻</a></li>
            <li><a href="javascript:;" class="">活动</a></li>
            <li><a href="javascript:;" class="">公告</a></li>
            <li><a href="javascript:;" class="">攻略</a></li>
        </ul>
        <a class="more" href="//hssw.uu.cc/news/373.html">更多 +</a>
    </div>

    <div id="news-tabs-container" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <ul>
                <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻'),5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
            </div>
            <div class="swiper-slide">
                <ul>
                <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('活动'),5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
            </div>
            <div class="swiper-slide">
                <ul>
                <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('公告'),5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
            </div>
            <div class="swiper-slide">
                <ul>
                <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('攻略'),5,0,array('LimitFrom'=>0));
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="sliderBox">
        <div class="swiper-container swiper-role">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="roleImg role5" src="<?php BASE_URL() ?>images/role5_big.png">
                    <div class="roleSkill">
                        <div class="roleTit"><h2>朗斯</h2><img src="<?php BASE_URL() ?>images/role5_skill.png"></div>
                        <p>人物介绍：挥舞着强有力的龙之哀伤，从不使用盾牌，朗斯总是第一个冲进战斗中敌人最密集的地方。<br>技能：震地（能震晕并伤害周围的敌人。）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;火焰洪流(释放火焰攻击，对全区域内怪物造成巨大伤害。)</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="roleImg role1" src="<?php BASE_URL() ?>images/role1_big.png">
                    <div class="roleSkill">
                        <div class="roleTit"><h2>艾瑞斯</h2><img src="<?php BASE_URL() ?>images/role1_skill.png"></div>
                        <p>人物介绍：艾瑞斯是一个无可匹敌的魔法战士，她用巨大的威力保卫着天空岛屿。<br>技能：法师爆炸（强大的能量光束能对周围的怪物造成巨大伤害！）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;法力刀 ( 利用锋利的箭造成伤害，同时降低敌人对自己的伤害。)</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="roleImg role2" src="<?php BASE_URL() ?>images/role2_big.png">
                    <div class="roleSkill">
                        <div class="roleTit"><h2>石之领主</h2><img src="<?php BASE_URL() ?>images/role2_skill.png"></div>
                        <p>人物介绍：尽管外表冷酷，石之领主一心一意保护他的子民，并把每位士兵的牺牲都视为个人失败。<br>技能：爆炸愈合（治愈并给予石之领主和周围部队额外的生命值。）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;神盾岩 ( 震荡符石能够治愈盟军并对怪物造成伤害。)</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="roleImg role3" src="<?php BASE_URL() ?>images/role3_big.png">
                    <div class="roleSkill">
                        <div class="roleTit"><h2>凯伦</h2><img src="<?php BASE_URL() ?>images/role3_skill.png"></div>
                        <p>人物介绍：金箔的精英突击兵和精灵族太阳神的守卫者，凯伦，布莱斯虽然年轻，但是身兼巨任。<br>技能：森林陷阱（设置陷阱击晕怪物。）<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;太阳陷阱( 激活后，陷阱会持续造成太阳伤害。)</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="roleImg role4" src="<?php BASE_URL() ?>images/role4_big.png">
                    <div class="roleSkill">
                        <div class="roleTit"><h2>塔拉</h2><img src="<?php BASE_URL() ?>images/role4_skill.png"></div>
                        <p>人物介绍：来自遥远沙漠的游牧旅者，塔拉天赋神力，<br>攻防兼备。<br>技能：达鲁德风暴（创造沙之漩涡，拖慢敌人。）</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next next1"></div>
           <div class="swiper-button-prev prev1"></div>
    </div>

    <div class="sliderImg">
        <div class="swiper-container swiper-img">
            <div class="swiper-wrapper">
            <?php
                    SHOW_DATAS('<div class="swiper-slide"><img src="@@STR2@@"></div>',
                    'Y-m-d',2,4);
                     ?>
            </div>
        </div>
           <div class="swiper-button-next next2"></div>
           <div class="swiper-button-prev prev2"></div>
    </div>
    <div class="contact">
        <span class="tel"><?php echo GET_BLOCK('kefu_phone');?></span>
        <span class="qq"><?php echo GET_BLOCK('kefu_qq');?></span>
    </div>

    <?php require_once 'footer.ctp';?>
</div>

<div class="zhezao"></div>
<div class="pop-yuyue">
    <a class="close" href="javascript:;"></a>

    <input class="yuyue_ipt" name="phone" type="tel" placeholder="指挥官，请在这输入您的手机号">

    <a class="yuyue-go" href="javascript:;"></a>
</div>

<script src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>

<script>
$(function(){
    //新闻列表
    var swiper = new Swiper('.swiper-news-banner', {
        pagination: '.swiper-pagination1',
        paginationClickable: true,
        loop: true
    });
    var tabsSwiper = new Swiper('#news-tabs-container',{
        speed:500,
        effect:'left',
        onSlideChangeStart:function(){
          $(".news-tabs .active").removeClass('active')
          $(".news-tabs li").eq(tabsSwiper.activeIndex).addClass('active')
        }
    })
    $(".news-tabs li").on('touchstart mousedown',function(e){
        e.preventDefault()
        $(".news-tabs .active").removeClass('active')
        $(this).addClass('active')
        tabsSwiper.slideTo( $(this).index() )
        })
        $(".news-tabs li").click(function(e){
        e.preventDefault()
    })


    var swiper = new Swiper('.swiper-role', {

        paginationClickable: true,
        loop: true,
        nextButton: '.next1',
        prevButton: '.prev1',
    });

    var swiper = new Swiper('.swiper-img', {

        paginationClickable: true,
        loop: true,
        nextButton: '.next2',
        prevButton: '.prev2',
    });

    //预约
    $('.date-btn').click(function(){
        $('.zhezao,.pop-yuyue').show();
    })

    $(".close,.zhezao").on("click", function(e){
        $('.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });

    var phone,code_id,u = navigator.userAgent;;
    var myreg = /^1[34578]\d{9}$/;
    $('.yuyue-go').click(function(){
        phone = $('.yuyue_ipt').val();
        if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
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


})

function playPause() {
    var myVideo = document.getElementsByTagName('video')[0];
    if (myVideo.paused){
       myVideo.play();
    }else{
       myVideo.pause();
    }
}
</script>
</body>
</html>
