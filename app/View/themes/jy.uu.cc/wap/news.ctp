<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>资讯</title>
<?php
    $this->Website->init();
    require_once 'header.ctp';
    $config = array(
                1 => array('资讯'),
                2 => array('攻略')
            );
    if($category_id == 1){
        $title = 'banner@2x.png';
    }elseif($category_id == 2){
        $title = 'banner-guide@2x.png';
    }
?>
<script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
<div class="news-page">
        <div class="menu">
    <a class="menu-item menu-first" href="/"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-infx" href="/news/1.html"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-giftx" href="/welfare"></a>
    <div class="menu-cut"></div>
    <a class="menu-item menu-stratage" href="/news/2.html"></a>
</div>
        <img class="banner" src="//dl.gamdream.com/activity/storm/jy/images/<?php echo $title;?>" />
        <!-- <div class="news-menu-wrap">
            <div class="news-menu-item news-menu1 act" data-index="0"></div>
            <div class="slash-bar"></div>
            <div class="news-menu-item news-menu2" data-index="1"></div>
            <div class="slash-bar"></div>
            <div class="news-menu-item news-menu3" data-index="2"></div>
        </div> -->
           <!--  <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type0">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type1">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type2">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type3">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type0">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type1">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type2">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type3">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type0">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type1">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a>
            
            <a class="news-list-item" href="news_detail.html">
                <span class="news-type tc news-type2">最新</span>
                <span class="news-title overflow-ellipsis">是最新的乐逗，公告啊还是那个公告告公告啊还是那个公告告公告啊还是那个公最新</span>
                <span class="news-date">12/07</span>
            </a> -->
           
            <?php
                if($category_id == 1){
                    echo '<div class="news-list">';
                    SHOW_NEWS('<a class="news-list-item" href="@@URL@@"><span class="news-type tc news-type1">@@CATEGORY_NAME@@</span><span class="news-title overflow-ellipsis">@@TITLE@@<</span><span class="news-date">@@DATE@@</span></a>','m/d',$config[$category_id],10,0,array('LimitFrom'=>0));
                    echo '</div>';
                }elseif($category_id == 2){
                    echo '<div class="guide-list">';
                    SHOW_NEWS('<a class="news-list-item" href="@@URL@@"><span class="news-type tc news-type2">@@CATEGORY_NAME@@</span><span class="news-title overflow-ellipsis">@@TITLE@@<</span><span class="news-date">@@DATE@@</span></a>','m/d',$config[$category_id],10,0,array('LimitFrom'=>0));
                    echo '</div>';
                }
            ?>    
        <div class="menu-line"></div>
        <div class="pagenation">
            
            <!-- <div class="pre-page">上一页</div>
            
                <div class="pagenation-item">1</div>
            
                <div class="pagenation-item">2</div>
            
                <div class="pagenation-item">3</div>
            
                <div class="pagenation-item">4</div>
            
                <div class="pagenation-item">5</div>
            
                <div class="pagenation-item">···</div>
            <div class="next-page">下一页</div> -->
            <?php
                SHOW_PAGINATION8($config[$category_id],10,array("pageId"=>$category_id),$page);
            ?>
        </div>
        <img class="foot" src="//dl.gamdream.com/activity/storm/jy/images/foot@2x.png">
    </div>
    <script>
        $(function () {
            var mySwiper = new Swiper ('.news-content .swiper-container', {
                autoplay:false,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                },
            })
            var swiper = new Swiper('.home-walk .swiper-container', {
                slidesPerView: 2.01,
                spaceBetween:30,
                initialSlide:1,
                centeredSlides: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            var swiper = new Swiper('.character-swiper .swiper-container', {
                slidesPerView: 5,
                spaceBetween: 20,
                slidesPerGroup: 5,
                loop: true,
                loopFillGroupWithBlank: true,
                navigation: {
                    nextEl: '.character-next',
                    prevEl: '.character-prev',
                },

            });

        })
    </script>
<div id="video-player-box" class="hide">
    <video id="video-player" controls="controls">
        <source id="video-player-play" src="" type="video/mp4">
    </video>
    <div class="close"></div>
</div>
<div class="toast-shdow"></div>
<div class="toast"></div>
<script type="text/javascript" src="//dl.gamdream.com/activity/storm/jy/styles.js"></script><script type="text/javascript" src="//dl.gamdream.com/activity/storm/jy/main.js"></script></body>
</html>