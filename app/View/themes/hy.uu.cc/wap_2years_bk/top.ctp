<div class="top">
    <div class="logo">
        <img src="<?php echo GET_BLOCK('game_icon');?>" />
        <?php echo GET_BLOCK('mobile_top_title');?>
    </div>
    <a href="http://hy.uu.cc/download" class="top_download"></a>
    <div class="menu-bg"></div>
    <div class="menu">
        <ul>
            <li><a href="//hy.uu.cc">官网首页</a></li>
            <li><a href="//hy.uu.cc/news/98.html">新闻中心</a></li>
            <li><a href="#main3">游戏特色</a></li>
            <li><a href="//hy.uu.cc/images/1/1.html">游戏视频</a></li>
            <li><a href="https://tieba.baidu.com/f?kw=%E6%A2%A6%E5%B9%BB%E8%8A%B1%E5%9B%AD&fr=home">百度贴吧</a></li>
            <li><a href="#main6">截图&壁纸</a></li>
        </ul>
    </div>
    <div class="burger">
        <div class="x"></div>
        <div class="y"></div>
        <div class="z"></div>
    </div>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-2.1.4.min.js"></script>
<script>

$(document).ready(function(){
    //顶部导航
    $('.burger').click(function(){
        if (!$(this).hasClass('open')) {
            openMenu();
        } else {
            closeMenu();
        }
    });
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
})
</script>