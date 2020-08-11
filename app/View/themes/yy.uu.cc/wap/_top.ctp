<div class="header">
    <h1 class="tit_hide"><?php echo $name;?></h1>
    <div class="swipeBox">
        <div id="slider" class="swiper-container">
            <ul class="swipe-wrap">
                <?php if ($loopImgs) :?>
                    <?php foreach ($loopImgs as $key => $value):?>
                        <?php if ($value['big_link']) :?>
                            <li><a href="<?php echo $value['big_link']; ?>" target="_blank"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></a></li>
                        <?php else:?>
                            <li><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php else :?>
                    <li><img src="<?php echo $full_base_url ?>/v2/images/m_bg.jpg" width="100%" /></li>
                <?php endif;?>
            </ul>
            <ul class="dot clearfix" id="dot">
                <?php if ($loopImgs) :?>
                    <?php for ($i = 0; $i < count($loopImgs); $i++):?>
                        <li <?php if ($i == 0): echo 'class="on"'; endif;?>></li>
                    <?php endfor;?>
                <?php else :?>
                    <li class="on"></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <ul class="dh">
        <li <?php if (!isset($category_id)) : echo ' class="cur"'; endif;?>><a href="/home">首页</a></li>
        <?php if ($newsCategory) :?>
            <?php foreach ($newsCategory as $key => $value):?>
            <li <?php if(isset($category_id) && $category_id && $category_id == $key): echo ' class="cur"'; endif;?>><a href="<?php echo $this->PK->getNewsUrl($key);?>"><?php echo $value;?></a></li>
            <?php endforeach;?>
        <?php else:?>
            <li><a href="#">新闻</a></li>
            <li><a href="#">攻略</a></li>
            <li><a href="#">活动</a></li>
        <?php endif;?>
    </ul>
    <div class="infoBox clearfix">
        <div class="info fl">
            <?php if ($gameDescribe) :?>
                <?php echo $gameDescribe;?>
            <?php else :?>
                <h2>悠悠世界树</h2>
                <p>游戏大小：157.79MB</p>
            <?php endif;?>
            <?php if ($logo):?>
                <?php echo $logo;?>
            <?php else:?>
                <img src="<?php echo $full_base_url ?>/v2/images/m_tub.png" alt="">
            <?php endif;?>
        </div>
        <div class="download fr" id="download">
            <!--<?php if ($downloadButton):?>
                <?php echo $downloadButton;?>
            <?php else:?>
            	<a href="#"><img src="<?php echo $full_base_url ?>/v2/images/m_download.png" alt=""></a>
            <?php endif;?>
-->
			<a id="down_link" href="javascript:;"><img src="<?php echo $full_base_url ?>/v2/images/m_download.png" alt=""></a>
        </div>
    </div>
</div>