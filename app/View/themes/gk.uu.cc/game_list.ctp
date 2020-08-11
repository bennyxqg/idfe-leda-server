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
<link href="<?php BASE_URL() ?>css/style.css?var=3" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php BASE_URL() ?>yuyue/favicon.ico">
</head>

<body>
<?php require_once '_top.ctp';?>

<div class="page">
    <div class="wrap">
        <div class="pageItemTit itemRole"></div>
        <ul class="filter">
            <li class="active" data-sort-by="original-order">所有</li>
            <li data-sort-by="ranged" class="">远程</li>
            <li data-sort-by="melee" class="">近战</li>
            <li data-sort-by="support" class="">辅助</li>
            <li data-sort-by="tank" class="">坦克</li>
        </ul>
        <ul class="four-up sets champion-filter">
            <?php echo GET_CODE_BLOCK('gk_hero_list_PC'); ?>
        </ul>
    </div>
</div>
<?php require_once '_footer2.ctp';?>
<script src="http://game-resource.uu.cc/gk.uu.cc/wap/js/isotope.js" type="text/jscript"></script>

<script type="text/javascript">
$(document).ready(function(){
    //英雄排序
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
