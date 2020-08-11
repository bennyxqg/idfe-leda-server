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
<link href="<?php BASE_URL() ?>css/style.css?var=16" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<div class="top">
    <?php require_once '_top.ctp';?>
    <a id="vedio_box" href="javascript:;" name="<?=GET_BLOCK('index_video_url');?>"></a>
    <div class="downBox">
        <span class="qrcode"><img src="<?php echo GET_BLOCK('weixin_code');?>"></span>
        <div class="down">
            <a class="downAz" href="<?php echo GET_BLOCK('android_download_url');?>"></a>
            <a class="downIos" href="<?php echo GET_BLOCK('ios_download_url');?>"></a>
        </div>
        <a class="goindex" href="/"><img src="<?php BASE_URL() ?>images/w_enter.png"/></a>
    </div>
    <div id="hero">
        <div id="element1"></div>
        <div id="element2"></div>
    </div>
</div>
<div class="main1">
    <div class="wrap">
        <div class="itemTit">
            <img src="<?php BASE_URL() ?>images/w_m1_title.png" alt="">
            <!--<h2>来自王国的前线报道 · 新闻资讯最前沿</h2>
            <p>THE FOREFRONT OF NEWS AND INFORMATION</p>-->
        </div>
        <div class="main1Bg"></div>
        <div class="newsFocus">
            <div class="bd">
                <ul>
                    <?php
                        SHOW_DATAS('<li><a  href="@@STR1@@"><img src="@@STR2@@" /></a></li>',
                    'Y-m-d',3,5);
                     ?>
                </ul>
            </div>
            <div class="hd">
                <ul>
                    <?php
                        SHOW_DATAS('<li></li>','Y-m-d',3,5);
                     ?>
                </ul>
            </div>
        </div>
        <div class="newsSlider">
            <div class="hd">
                <ul><li>综合</li><li>新闻</li><li>公告</li><li>活动</li></ul>
                <a class="more" href="//gk.uu.cc/news/388.html">+</a>
            </div>
            <div class="bd padding">
                <div>
                    <h2 class="tit">
                        <?php
                        SHOW_NEWS('<a href="@@URL@@" >@@TITLE@@</a>',
                        'm/d',array('新闻','活动','公告','战斗攻略','升本攻略','兵种攻略'),1,0,
                        array('LimitFrom'=>0));
                    ?>
                    </h2>
                    <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><i>@@CATEGORY_MAP@@</i>@@TITLE@@</a><span>@@DATE@@</span></li>',
                        'm/d',array('新闻','活动','公告','战斗攻略','升本攻略','兵种攻略'),5,0,
                        array('LimitFrom'=>1,"CategoryMap"=>array("战斗攻略"=>"攻略","升本攻略"=>"攻略","兵种攻略"=>"攻略",'新闻'=>'新闻','活动'=>'活动','公告'=>'公告')));
                    ?>
                    </ul>
                </div>
                <div>
                    <h2 class="tit">
                        <?php
                        SHOW_NEWS('<a href="@@URL@@" >@@TITLE@@</a>',
                        'm/d','新闻',1,0,array('LimitFrom'=>0));?>
                    </h2>
                    <ul>
                        <?php
                            SHOW_NEWS('<li><a href="@@URL@@" ><i>新闻</i>@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻'),5,0,array('LimitFrom'=>1));
                        ?>
                    </ul>
                </div>
                <div>
                    <h2 class="tit">
                        <?php
                            SHOW_NEWS('<a href="@@URL@@" >@@TITLE@@</a>','m/d','公告',1,0,array('LimitFrom'=>0));
                        ?>
                    </h2>
                    <ul>
                        <?php
                            SHOW_NEWS('<li><a href="@@URL@@" ><i>公告</i>@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('公告'),5,0,array('LimitFrom'=>1));
                        ?>
                    </ul>
                </div>
                <div>
                    <h2 class="tit">
                        <?php
                            SHOW_NEWS('<a href="@@URL@@" >@@TITLE@@</a>','m/d','活动',1,0,array('LimitFrom'=>0));
                        ?>
                    </h2>
                    <ul>
                        <?php
                            SHOW_NEWS('<li><a href="@@URL@@" ><i>活动</i>@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('活动'),5,0,array('LimitFrom'=>1));
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main3">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide role1-slide">
                <div class="roleBg" style="margin-top:100px;background: url(<?php BASE_URL() ?>images/w_person1.png) no-repeat 100% 0;"></div>
                <div class="text">
                    <div class="img"><img src="<?php BASE_URL() ?>images/w_tit1.png" alt="..."></div>
                    <p>手里的“长空”之箭一出，寒箭呼啸，冰封万里。寒冰射手塞莱斯特，她的使命就是率领弓箭手军队，从混沌军团中拯救万千黎民。</p></div>
            </div>
            <div class="swiper-slide role1-slide">
                <div class="roleBg" style="margin-top:100px;background: url(<?php BASE_URL() ?>images/w_person2.png) no-repeat 100% 0;;"></div>
                <div class="text">
                    <div class="img"><img src="<?php BASE_URL() ?>images/w_tit2.png" alt="..."></div>
                    <p>斯特莱德作为风暴王储，从小接受悉心教导，但他的王国被混沌军团攻陷。刹那间，斯特莱德失去了家人和家园。现在，在威利安的训练下，他将挥舞手中的断剑继续战斗。</p></div>
            </div>
            <div class="swiper-slide role1-slide">
                <div class="roleBg" style="margin-top:100px;background: url(<?php BASE_URL() ?>images/w_person3.png) no-repeat 100% 0;;"></div>
                <div class="text">
                    <div class="img"><img src="<?php BASE_URL() ?>images/w_tit3.png" alt="..."></div>
                    <p>作为瓦尔基里的圣骑士，圣光照耀下的英雄，威利安率领的人类军队是混沌军团与守卫者王国之间最后的堡垒。随着远古巨龙的一声怒吼，他已经做好了拯救世界的准备。</p></div>
            </div>
            <div class="swiper-slide role1-slide">
                <div class="roleBg" style="margin-top:100px;background: url(<?php BASE_URL() ?>images/w_person4.png) no-repeat 100% 0;;"></div>
                <div class="text">
                    <div class="img"><img src="<?php BASE_URL() ?>images/w_tit4.png" alt="..."></div>
                    <p>混沌军团一边战斗一边用腥红水晶的力量将人类转变为混沌的同党。那些普通的市井小民成为了混沌士兵，而那些原本就身经百战的士兵们，则成为了混沌领主。</p></div>
            </div>
        </div>
        <div class="roleTabs hd">
            <ul>
                <li><img src="<?php BASE_URL() ?>images/w_c1-2.png"></li>
                <li><img src="<?php BASE_URL() ?>images/w_c2-2.png"></li>
                <li><img src="<?php BASE_URL() ?>images/w_c3-2.png"></li>
                <li><img src="<?php BASE_URL() ?>images/w_c4-2.png"></li>
            </ul>
            <a href="/game_list"><img style="margin-top:-10px;" src="<?php BASE_URL() ?>images/w_more.png"></a>
        </div>
    </div>
</div>

<div class="main4">
    <div class="wrap">
        <div class="gonglueFocus">
            <div class="bd">
                <ul>
                    <?php
                        SHOW_DATAS('<li>'.
                                        '<a href="@@STR2@@" >'.
                                            '<img src="@@STR3@@" />'.
                                            '<div class="txt">'.
                                                '<h2>@@LABEL@@</h2>'.
                                                '<p>@@STR1@@</p>'.
                                                '<span>查看详情</span>'.
                                            '</div>'.
                                        '</a>'.
                                    '</li>','Y-m-d',8,5);
                     ?>
                </ul>
            </div>
            <div class="hd">
                <?php
                    SHOW_DATAS('<li></li>','Y-m-d',8,5);
                 ?>
            </div>
        </div>

        <div class="gonglueBox">
            <div class="gonglueList">
                <h2 class="tit">
                    <?php
                        SHOW_NEWS('<a href="@@URL@@" >@@TITLE@@</a>','m/d',array('战斗攻略','升本攻略','兵种攻略'),1,0,array('LimitFrom'=>0));
                    ?>
                </h2>
                <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" ><i>攻略</i>@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('战斗攻略','升本攻略','兵种攻略'),3,0,array('LimitFrom'=>1));
                    ?>
                </ul>

            </div>
            <a class="gonglueVideoLink" href="//gk.uu.cc/guide/1.html"><img src="<?php BASE_URL() ?>images/w_vedio_layer.png"></a>
        </div>
    </div>
</div>
<div class="main5">
    <div class="bg1">
        <div class="box">
            <img src="<?php BASE_URL() ?>images/w_c5_2.png" alt="..." usemap="#area">
            <map id="area" name="area">
                <area shape="poly" class="area1" coords="188,227, 110,272, 110,361, 188,406, 264,361, 264,272, 188,227" href="//gk.uu.cc/guide/1.html" alt="">
                <area shape="poly" coords="658,227, 580,272, 580,361, 658,406, 734,361, 734,272, 658,227" href="//gk.uu.cc/guide/1.html" alt="">

                <area shape="poly" coords="105,372, 28,417, 28,505, 105,550, 181,505, 181,417, 105,372" href="//gk.uu.cc/guide/2.html" alt="">
                <area shape="poly" coords="742,372, 665,417, 665,505, 742,550, 818,505, 818,417, 742,372" href="//gk.uu.cc/guide/2.html" alt="">

                <area shape="poly" coords="188,518, 111,563, 111,651, 188,696, 265,651, 265,563, 188,518" href="//gk.uu.cc/guide/2.html" alt="">
                <area shape="poly" coords="658,518, 580,563, 580,651, 658,696, 734,651, 734,563, 658,518" href="//gk.uu.cc/guide/2.html" alt="">
            </map>
        </div>
    </div>
    <div class="bg2">
        <div class="demo1">
            <div class="loop">
                <ul>
                    <?php
                        SHOW_DATAS('<li><a href="@@STR1@@" targetpic="@@STR3@@"><img src="@@STR2@@" /></a></li>','Y-m-d',7,12);

                     ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once '_footer.ctp';?>
<!--视频弹窗-->
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
<div class="zhezao"></div>

<script type="text/javascript" src="/js/edata.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 jQuery(".demo1").slide({mainCell:".loop ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:12});

    function tool(){
        var active1 = $(this).find('a').attr('targetpic');
        var active2 = $(this).find('a img').attr('src');
        $(this).find('a').attr('targetpic',active2);
        $(this).find('a img').attr('src',active1);
    }
    $('.demo1 .loop ul').on('mouseover','li',tool);
    $('.demo1 .loop ul').on('mouseout','li',tool);

    if ($("#element1").length && $("#element2").length) {

        var plane = document.getElementById('element1');
        var rocket = document.getElementById('element2');
        plane.homePos = {x: plane.offsetLeft, y: plane.offsetTop+10};
        rocket.homePos = {x: rocket.offsetLeft-10, y: rocket.offsetTop};

        $('.top').mousemove(function (e) {
            parallax(e, plane, 65);
            parallax(e, rocket, 110);
        });

    }
    //页面视频
    $('#vedio_box').click(function(){
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
    function parallax(e, target, layer) {
        var x = target.homePos.x - (e.pageX - target.homePos.x) / layer;
        var y = target.homePos.y - (e.pageY - target.homePos.y) / layer;
        //$(target).offset({ top: y ,left : x });
        $(target).css({transform: "translate3D(" + x + "px, " + y + "px, 0px)"});
    };

    $(".downIos").click(function(){
        sToEdata("download_ios");
    });
    jQuery(".newsFocus").slide({mainCell:".bd ul",autoPlay:true,effect:"fold"});
    jQuery(".newsSlider").slide({mainCell:".bd",effect:"fold",trigger:"click"});
    jQuery(".swiper-container").slide({titCell:".hd li",mainCell:".swiper-wrapper",effect:"fold",trigger:"click",autoPlay:true,titOnClassName:"active",
                                startFun:function(i,c){
                                    var count = $('.hd li img').length;
                                    for(var j=0; j<count; j++){
                                        $('.hd li img').eq(j).attr("src",'<?php BASE_URL() ?>images/w_c'+(1+j)+'-2.png');
                                    }
                                    $('.hd li img').eq(i).attr("src",'<?php BASE_URL() ?>images/w_c'+(1+i)+'-1.png');
                                },
                                endFun:function(i,c){
                                //   alert(i);

                                    $(".swiper-wrapper .swiper-slide").removeClass("swiper-slide-active").eq(i).addClass("swiper-slide-active");
                                }});
    jQuery(".slider .bd li").first().before( jQuery(".slider .bd li").last() );

    jQuery(".slider").slide({ mainCell:".bd ul", effect:"leftLoop", vis:3, autoPage:true, trigger:"click",
                             startFun:function(){
                                  $(".boxBd").fadeOut(200);
                              },
                             endFun:function(){
                                  $(".boxBd").fadeIn(200);
                              }});
    jQuery(".gonglueFocus").slide({mainCell:".bd ul",autoPlay:true,effect:"fold"});


})
</script>
</body>
</html>
