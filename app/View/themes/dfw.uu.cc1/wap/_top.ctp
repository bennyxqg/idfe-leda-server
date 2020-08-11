<?php
$curAction = $this->request->params['action']; // 当前action
/* 顶部轮播图片 */
$loopImgTop = $webHelper->getImageList('loop_img_wap_1');

/* 新闻分类 */
/*
 * 手机版栏目显示为“游戏新闻”、“热门活动”、“游戏资料”
* 去除“攻略”分类
*/
$categories = $webHelper->categoriesWap; // 新闻分类
array_pop($categories); // 去除攻略分类id

/* 区块 */
$gameDecripe = $webHelper->getSingleBlock('game_describe_wap'); // 游戏描述
$gameIcon = $webHelper->getSingleBlock('game_icon_wap'); // 游戏图标
$androidDownload = $webHelper->getSingleBlock('android_download_url_wap'); // 安卓下载
$iosDownload = $webHelper->getSingleBlock('ios_download_url_wap'); // ios下载
?>
<h1 class="tit_hide">IRON FORCE</h1>
<div class="swipeBox" id="qieh1">
    <div id="slider1" class="swiper-container">
        <div class="swiper-wrapper">
            <?php if ($loopImgTop) : // 顶部轮播图片?>
                <?php foreach ($loopImgTop as $key => $value):?>
                    <?php if ($value['big_link']) : // 有链接时?>
                        <div class="swiper-slide"><a href="<?php echo $value['big_link']; ?>" target="_blank"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></a></div>
                    <?php else: // 无链接?>
                        <div class="swiper-slide"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></div>
                    <?php endif;?>
                <?php endforeach;?>
            <?php else : // 没有顶部轮播图片时显示?>
                <div class="swiper-slide"><img src="<?php echo $full_base_url ?>/images/m_banner.jpg" width="100%" /></div>
            <?php endif;?>
        </div>
        <ul class="dot clearfix" id="dot1">
                        <?php if ($loopImg) :?>
                            <?php for ($i = 0; $i < count($loopImg); $i++):?>
                                <li <?php if ($i == 0): echo 'class="on"'; endif;?>></li>
                            <?php endfor;?>
                        <?php else :?>
                            <li class="on"></li>
                        <?php endif;?>
                    </ul>
    </div>
</div>
<ul class="dh">
    <li <?php if ($curAction == 'index') : echo ' class="cur"'; endif;?>><a href="/"><i></i>首页</a></li>
    <?php if ($categories) :?>
        <?php foreach ($categories as $key => $value):?>
        <li <?php if(isset($category_id) && $category_id && $category_id == $key): echo ' class="cur"'; endif;?>><a href="<?php echo $this->PK->getNewsUrl($key);?>"><i></i><?php echo $value;?></a></li>
        <?php endforeach;?>
    <?php endif;?>
    <li <?php if ($curAction == 'home') : echo ' class="cur"'; endif;?>><a href="//bbs.uu.cc/forum-311-1.html"><i></i>论坛</a></li>
</ul>
<div class="infoBox clearfix">
    <div class="info fl">
        <h2>我爱大富翁</h2>
        <p><?php if (!$gameDecripe) : // 没有游戏描述时显示?>游戏大小：34.7MB<?php else : echo $gameDecripe; endif;?></p>
        <?php if ( !$gameIcon ) : // 没有游戏图标时显示默认图标?>
            <img src="<?php echo $full_base_url ?>/images/m_tub.jpg" alt="X-觉醒">
        <?php else :?>
            <?php echo $gameIcon; ?>
        <?php endif;?>
    </div>
    <div class="download fr">
        <a href="javascript:;">游戏下载</a>
    </div>
</div>