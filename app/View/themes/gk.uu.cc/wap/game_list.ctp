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
    <div class="pageItem itemRole">
        <a class="backBtn" href="javascript:history.go(-1);"></a>
        
        来自各个王国的英雄
    </div>
    <ul class="filter">
        <li class="active" data-sort-by="original-order">所有</li>
        <li data-sort-by="ranged" class="">远程</li>
        <li data-sort-by="melee" class="">近战</li>
        <li data-sort-by="support" class="">辅助</li>
        <li data-sort-by="tank" class="">坦克</li>
    </ul>
    <ul class="four-up sets champion-filter">
    <?php echo GET_CODE_BLOCK('gk_hero_list'); ?>
    </ul>
</div>
<?php require_once '_footer.ctp';?>

<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/isotope.js"></script>
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

        function setupFilterAnimation(){

            var $grid = $('.champion-filter').isotope({
                itemSelector: '.champion-single',
                getSortData: {
                    melee: '[data-melee] parseInt',
                    support: '[data-support] parseInt',
                    ranged: '[data-ranged] parseInt',
                    tank: '[data-tank] parseInt'
                }
            });

            $('.filter li').click(function(){

                $('.filter li.active').removeClass("active");
                $(this).addClass("active");

                var sortValue = $(this).attr('data-sort-by');
                $grid.isotope({ sortBy: sortValue });

                $(".champion-single.active").removeClass("active");
                $(".champion-single." + sortValue).addClass("active");

            });

        }

        $(window).load(setupFilterAnimation);
    })
</script>
</body>
</html>