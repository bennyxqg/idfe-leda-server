<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<?php
    $this->Website->init();
    $data=$this->Tanke->getPic(4,$page);
    print_r($data);
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/style.css?v=0"  />
</head>

<body class="page">
    <div id="page-content">
        <div class="top">
            <div class="logo">
                <img src="<?php echo GET_BLOCK('game_icon');?>" />
                <?php echo GET_BLOCK('mobile_top_title');?>
            </div>
            <div class="menu-bg"></div>
            <div class="menu">
                <ul>
                <li><a href="//hy.uu.cc">官网首页</a></li>
                <li><a href="//hy.uu.cc/jnh">嘉年华</a></li>
                    <li><a href="//hy.uu.cc/news/98.html">新闻中心</a></li>
                    <li><a href="//hy.uu.cc#main3">游戏特色</a></li>
                    <li><a href="//hy.uu.cc/images/1/1.html">游戏视频</a></li>
                    <li><a href="https://tieba.baidu.com/f?kw=%E6%A2%A6%E5%B9%BB%E8%8A%B1%E5%9B%AD&fr=home">百度贴吧</a></li>
                    <li><a href="//hy.uu.cc#main6">截图&壁纸</a></li>
                </ul>
            </div>
            <div class="burger">
                <div class="x"></div>
                <div class="y"></div>
                <div class="z"></div>
            </div>
        </div>
        <div class="page-tit"><a class="back" href="javascript:history.go(-1);"><span></span>返回</a>游戏视频</div>
        <div class="page-main">
            <div class="wrap">

                <div class="video-list clearfix">
                    <ul>

                    <?php
                    SHOW_DATAS('<li><a class="video_btn_link" href="javascript:;" name="@@STR1@@"><img src="@@STR2@@" /><span>@@STR3@@</span></a></li>',
                    'Y-m-d',1,12);
                     ?>
                    </ul>
                </div>

                <div class="pages">
                <?php
                    SHOW_DATAS_PAGINATION2(1,12,array('HasFirstPage' => false,'HasLastPage' => false,'HasCurrentPage' => false),0,'images');
                 ?>
                </div>
            </div>
        </div>
    </div>
    <span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>

<?php require_once 'footer.ctp';?>

<div class="zhezao"></div>
<div class="s_p_k" style="display: none;"><video webkit-playsinline="true" width="100%" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
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

            //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.zhezao,.s_p_k').show();
    })
    $(".close,.zhezao").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.pop-yuyue,.zhezao').hide();
        e.stopPropagation();
    });
})
</script>
</body>
</html>
