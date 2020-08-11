<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
        <img class="banner" src="//dl.gamdream.com/activity/storm/jy/images/banner@2x.png" />

        <!-- 新闻咨询标题S -->
        <div class="news-detail-title"><?php SHOW_CURRENT_NEWS_INFO('title') ?></div>
        <div class="author-wrap">
            <div class="author">作者：梦幻家园运营团队</div>
            <div class="publish-date"><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></div>
        </div>
        <div class="menu-line"></div>
        <div class="news-detail-con"><?php SHOW_CURRENT_NEWS_INFO('content') ?></div>
        <img class="foot" src="//dl.gamdream.com/activity/storm/jy/images/foot@2x.png">
    </div>
<div id="video-player-box" class="hide">
    <video id="video-player" controls="controls">
        <source id="video-player-play" src="" type="video/mp4">
    </video>
    <div class="close"></div>
</div>
<div class="toast-shdow"></div>
<div class="toast"></div>
<script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/storm/jy/styles.js"></script><script type="text/javascript" src="//dl.gamdream.com/activity/storm/jy/main.js"></script></body>
</html>