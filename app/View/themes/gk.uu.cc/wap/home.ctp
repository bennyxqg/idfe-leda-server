<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>/css/swiper.min.css">
<link rel="stylesheet" type="text/css" media="all"
href="<?php BASE_URL() ?>css/home.css?var=6">
<link rel="shortcut icon" href="//gk.uu.cc/gk.uu.cc/yuyue/favicon.ico">
<script type="text/javascript">

(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            if (clientWidth >= 640) {
                docEl.style.fontSize = '100px';
            } else {
                docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';

            }
        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
    </script>
</head>

<body>
<?php require_once '_top.ctp';?>

<div class="main1">
    <div class="m1_count">
        <div class="left">
            <a class="downIos" href="<?php echo GET_BLOCK('ios_download_url');?>"></a>
            <a class="downAz" href="<?php echo GET_BLOCK('android_download_url');?>"></a>
        </div>
        <div class="right">
            <a class="goindex" href="/"><img src="<?php BASE_URL() ?>images/w_enter.png"/></a>
        </div>


    </div>
</div>

<div class="main2">
    <div class="wrap">
        <div class="itemTit"></div>
        <div class="newsBanner">
            <?php echo GET_BLOCK('m_home_banner');?>
        </div>
        <div class="news-tabs slider-tabs">
            <ul>
                <li class="active"><a href="javascript:;">综合</a></li>
                <li><a href="javascript:;" class="">新闻</a></li>
                <li><a href="javascript:;" class="">公告</a></li>
                <li><a href="javascript:;" class="">活动</a></li>
            </ul>
        </div>

        <div id="news-tabs-container" class="slider-tabs-container swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <ul>
                     <?php
                        SHOW_NEWS('<li><a href="@@URL@@" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻','活动','公告','战斗攻略','升本攻略','兵种攻略'),5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/98.html" >查看更多&gt;</a>
                </div>
                <div class="swiper-slide">
                    <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','新闻',5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/388.html" >查看更多&gt;</a>
                </div>
                <div class="swiper-slide">
                    <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','公告',5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/389.html" >查看更多&gt;</a>
                </div>
                <div class="swiper-slide">
                    <ul>
                    <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','活动',5,0,array('LimitFrom'=>0));
                    ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/390.html" >查看更多&gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main4">
    <div class="itemTit"></div>

    <div class="role-tabs">
        <ul>
            <li id="role1" class="active"></li>
            <li id="role2"></li>
            <li id="role3"></li>
            <li id="role4"></li>
        </ul>
        <a class="roleMore" href="/game_list"></a>
    </div>
    <div id="role-tabs-container" class="swiper-container">
        <div class="swiper-wrapper role1">
            <div class="swiper-slide">
                <div class="roleTxt"><p>手里的“长空”之箭一出，寒箭呼啸，冰封万里。寒冰射手塞莱斯特，她的使命就是率领弓箭手军队，从混沌军团中拯救万千黎民。</p></div>
            </div>
            <div target="" class="swiper-slide role2">
                <div class="roleTxt"><p>斯特莱德作为风暴王储，从小接受悉心教导，但他的王国被混沌军团攻陷。刹那间，斯特莱德失去了家人和家园。现在，在威利安的训练下，他将挥舞手中的断剑继续战斗。</p></div>
            </div>
            <div class="swiper-slide role3">
                <div class="roleTxt"><p>作为瓦尔基里的圣骑士，圣光照耀下的英雄，威利安率领的人类军队是混沌军团与守卫者王国之间最后的堡垒。随着远古巨龙的一声怒吼，他已经做好了拯救世界的准备。</p></div>
            </div>
            <div class="swiper-slide role4">
                <div class="roleTxt"><p>混沌军团一边战斗一边用腥红水晶的力量将人类转变为混沌的同党。那些普通的市井小民成为了混沌士兵，而那些原本就身经百战的士兵们，则成为了混沌领主。</p></div>
            </div>
        </div>
    </div>
</div>


<div class="main5">
    <div class="item-tit"><img src="<?php BASE_URL() ?>images/w_c5_title.png"></div>
    <div class="wrap">

            <div class="swiper-tese">
            <div class="swiper-wrapper">
                <?php
                    $data = GET_BLOCK('m_index_run');
                    if(!empty($data)){
                        $dataArr = explode(",",$data);
                        $str = '';
                        foreach ($dataArr as $v) {
                            $str .= '<div class="swiper-slide" style="background-image:url('.$v.')"></div>';
                        }
                        echo $str;
                    }
                ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="wrap">
        <div class="item-tit"><img src="<?php BASE_URL() ?>images/w_c5_title2.png"></div>
        <div class="gonglue-tabs slider-tabs">
            <ul>
                <li class="active"><a href="javascript:;">战斗攻略</a></li>
                <li><a href="javascript:;" class="">升本攻略</a></li>
                <li><a href="javascript:;" class="">兵种攻略</a></li>
            </ul>
        </div>

        <div id="gonglue-tabs-container" class="slider-tabs-container swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <ul>
                        <?php
                            SHOW_NEWS('<li><a href="@@URL@@" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','战斗攻略',5,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/391.html" >查看更多&gt;</a>
                </div>
                <div class="swiper-slide">
                    <ul>
                        <?php
                            SHOW_NEWS('<li><a href="@@URL@@" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','升本攻略',5,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/392.html" >查看更多&gt;</a>
                </div>
                <div class="swiper-slide">
                    <ul>
                        <?php
                            SHOW_NEWS('<li><a href="@@URL@@" >@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','兵种攻略',5,0,array('LimitFrom'=>0));
                        ?>
                    </ul>
                    <a class="moreBtn" href="//gk.uu.cc/news/393.html" >查看更多&gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main6">
    <div class="wrap">
        <div class="itemTit"></div>
        <div class="box">

            <div class="b_top">
                <a href="//gk.uu.cc/guide/2.html"></a>
                <a href="//gk.uu.cc/guide/1.html"></a>
                <a class="on" href="//gk.uu.cc/guide/2.html"></a>
            </div>
            <div class="b_bottom">
                <a href="//gk.uu.cc/guide/2.html"></a>
                <a href="//gk.uu.cc/guide/2.html"></a>
            </div>
        </div>
    </div>
</div>
<?php require_once '_footer.ctp';?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/swiper.jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        //顶部导航
        $('.burger').click(function(){
            if (!$(this).hasClass('open')) {
                openMenu();
            } else {

                closeMenu();
            }
        })

        $('.menu ul li a').click(function(e){
            //e.preventDefault();
            closeMenu();
        });
        function openMenu() {
            $('div.burger').addClass('open');
            $('div.x, div.z').addClass('collapse');
            $('.menu,div.menu-bg').fadeIn();
            setTimeout(function () {
                $('div.y').hide();
                $('div.x').addClass('rotate30');
                $('div.z').addClass('rotate150');
            }, 70);
            setTimeout(function () {
                $('div.x').addClass('rotate45');
                $('div.z').addClass('rotate135');
            }, 120);
        }
        function closeMenu() {
            $('.menu,div.menu-bg').fadeOut();
            setTimeout(function() {
                $('div.burger').removeClass('open');
                $('div.x').removeClass('rotate45').addClass('rotate30');
                $('div.z').removeClass('rotate135').addClass('rotate150');
                setTimeout(function() {
                    $('div.x').removeClass('rotate30');
                    $('div.z').removeClass('rotate150');
                }, 50);
                setTimeout(function () {
                    $('div.y').show();
                    $('div.x, div.z').removeClass('collapse');
                }, 70);
            }, 100);
        }


        //新闻列表

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

        //游戏特色
        var swiper = new Swiper('.swiper-tese', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop : true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            coverflow: {
                rotate: 70,
                stretch: 52,
                depth: 200,
                modifier: 1,
                slideShadows : true
            },
        });

        //英雄切换

        var roletabsSwiper = new Swiper('#role-tabs-container',{
            speed:500,
            effect:'left',
            onSlideChangeStart:function(){
              $(".role-tabs .active").removeClass('active')
              $(".role-tabs li").eq(roletabsSwiper.activeIndex).addClass('active')
            }
        })
        $(".role-tabs li").on('touchstart mousedown',function(e){
            e.preventDefault()
            $(".role-tabs .active").removeClass('active')
            $(this).addClass('active')
            roletabsSwiper.slideTo( $(this).index() )
            })
            $(".role-tabs li").click(function(e){
            e.preventDefault()
        })

        //攻略列表

        var tabsSwiper2 = new Swiper('#gonglue-tabs-container',{
            speed:500,
            effect:'left',
            onSlideChangeStart:function(){
              $(".gonglue-tabs .active").removeClass('active')
              $(".gonglue-tabs li").eq(tabsSwiper2.activeIndex).addClass('active')
            }
        })
        $(".gonglue-tabs li").on('touchstart mousedown',function(e){
            e.preventDefault()
            $(".gonglue-tabs .active").removeClass('active')
            $(this).addClass('active')
            tabsSwiper2.slideTo( $(this).index() )
            })
            $(".gonglue-tabs li").click(function(e){
            e.preventDefault()
        })

        //微信弹窗
        $(".weixin").click(function(){
          $(".wxPop").toggle();
        });

        //版权自动年份
        var d = new Date()
        $('.copy-year').html(d.getFullYear())
    })
</script>
</body>
</html>
