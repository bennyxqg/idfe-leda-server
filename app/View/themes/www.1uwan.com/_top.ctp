<div class="top clearfix">
    <div class="blue_bg fl"></div>
    <div class="white_bg fr"></div>
    <div class="tbox clearfix">
        <h1 class="fl"><a href="<?php echo FULL_BASE_URL;?>"><?php GET_SITE_NAME() ?></a></h1>
        <div class="note fl" id="note">
            <ul>
                <?php if ($notices):?>
                    <?php foreach ($notices as $noticeId => $value) :?>
                        <?php if ($value) :?>
                            <?php foreach ($value as $notice):?>
                                <li><a href="<?php echo $this->Gbsg->getShowUrl($notice['id']);?>"><?php echo $allCategories[$noticeId]?>：<?php echo $notice['title'];?></a></li>
                            <?php endforeach;?>
                        <?php else :?>
                            <li><a href="#">公告：攻略二次元女神，《幻想之心》11月20日心跳首测1</a></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php else :?>
                    <li><a href="#">a公告：攻略二次元女神，《幻想之心》11月20日心跳首测1</a></li>
                <?php endif;?>
            </ul>
        </div>
        <a href="//www.idreamsky.com" class="gw">乐逗游戏官网</a>
    </div>
</div>