<?php 
$noticeCateIds = array('id' => $this->R->specialCategoryId); // 特殊显示的公告
$notices = $this->R->getNews($noticeCateIds, 0, 0, 'updated DESC', array('id', 'title', 'updated', 'created', 'news_categories_id', 'content')); // 公告
?>
<div class="header_top">
    <div class="top clearfix">
        <div class="logo fl">
            <img src="<?php echo $full_base_url ?>/images/logo.png" alt="乐逗游戏" />
        </div>
        <?php if ($notices):?>
            <?php foreach ($notices as $noticeId => $value) :?>
                <?php if ($value) :?>
                    <?php foreach ($value as $notice):?>
                        <a class="top_news fl" href="<?php if ($notice['content']) {echo $this->Gbsg->getShowUrl($notice['id']);}else{echo "javascript:alert('敬请期待！')";}?>"><?php echo $allCategories[$noticeId]?>：<?php echo $notice['title'];?></a></li>
                    <?php break; endforeach;?>
                <?php else :?>
                    <a href="//r.uu.cc/show/954.html" class="top_news fl"><?php echo $allCategories[$noticeId]?>：《奔跑吧兄弟：跑男来了》今日公测！</a></li>
                <?php endif;?>
            <?php endforeach;?>
        <?php else :?>
            <a href="//r.uu.cc/show/954.html" class="top_news fl">《奔跑吧兄弟：跑男来了》今日公测！</a></li>
        <?php endif;?>
        <a href="" class="gohome fr">乐逗游戏官网</a>
    </div>
</div>