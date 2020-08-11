<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php BASE_URL() ?>css/home.css?var=1">
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

<body class="page">
<?php require_once '_top.ctp';?>

<div class="pageContent">
    <?php
    $style = "itemNews";
    if($category_id==98){
        $style = "itemZongHe";
    }elseif($category_id==388){
        $style = "itemNews";
    }else if($category_id == 389){
        $style = "itemGonggao";
    }else if($category_id == 390){
        $style = "itemHuoDong";
    }else if($category_id == 391 || $category_id == 392 || $category_id == 393){
        $style = 'itemGonglue';
    }
    ?>
    <div class="pageItem <?php echo $style;?>">
        <a class="backBtn" href="/home"></a>
    </div>
    <?php
        $config = array(98=>array('新闻','公告','活动'),
            388 => array('新闻'),
            389 => array('公告'),
            390 => array('活动'),
            391 => array('战斗攻略'),
            392 => array('升本攻略'),
            393 => array('兵种攻略'));
        if($category_id == 388){
           SHOW_NEWS(
           '<div class="imgNews">'.
                '<a href="@@URL@@">'.
                    '<img src="@@SMALL_IMAGE@@">'.
                    '<div class="newsTxts">'.
                        '<h2>@@TITLE@@</h2>'.
                        '<p>@@DESCRIPTION@@</p>'.
                    '</div>'.
                '</a>'.
            '</div>',
           'Y/m/d',array('新闻'),2,1);
        }else if($category_id == 391 || $category_id == 392 || $category_id == 393){
    ?>
    <div class="gonglue-tabs slider-tabs">
        <ul>
            <li <?php if ($category_id == 391) echo 'class="active"';?> ><a href="//gk.uu.cc/news/391.html">战斗攻略</a></li>
            <li <?php if ($category_id == 392) echo 'class="active"';?> ><a href="//gk.uu.cc/news/392.html">升本攻略</a></li>
            <li <?php if ($category_id == 393) echo 'class="active"';?> ><a href="//gk.uu.cc/news/393.html">兵种攻略</a></li>
        </ul>
    </div>
    <?php } ?>
    <div class="newsList">
        <ul>
        <?php
            $offset = array();
            if($category_id == 388){
                $offset = array("LimitFrom"=>2);
            }
            SHOW_NEWS('<li><a href="@@URL@@"><h2>@@TITLE@@</h2><p>@@DESCRIPTION@@</p><span>@@DATE@@</span></a></li>','Y/m/d',$config[$category_id],5,$page,$offset);
        ?>
        </ul>
    </div>
    <div class="pages">
    <?php
        SHOW_PAGINATION2($config[$category_id],5,array("pageId"=>$category_id),$page);
     ?>
    </div>
</div>
<?php require_once '_footer.ctp';?>

<script type="text/javascript" src="http://game-resource.uu.cc/gk.uu.cc/wap/js/jquery-2.1.4.min.js"></script>
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