<?php 
require_once '_header.ctp'; 
// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlockWap();
$gameIcon = $blocks['game_icon_wap']; // 游戏图标
$iosDownloadImg = $blocks['ios_download_img_wap']; // ios下载按钮图片
$androidDownloadImg = $blocks['android_download_img_wap']; // Android下载按钮图片
$weixinLink = $blocks['weixin_link']; // 关注微信
$weiboLink = $blocks['weibo_link']; // 关注微博

$categories = $allCategorires; // 首页需要显示的新闻分类
$loopImage = $webHelper->getImageList('loop_img_wap'); // 轮播图片
/* 首页新闻 */
$newList = $webHelper->getContentByAllBySiteId($site_id, "all", 0, 3, 0);
?>
<body>
    <div class="page">
        <div class="header">
            <h1>萌翻三国</h1>
            <h2>谁是下一个策略卡牌大师</h2>
            <div id="slider" class="switch">
                <ul class="runContent clearfix" id="runContent">
                    <?php if ($loopImage) : // 轮播图片?>
                        <?php foreach ($loopImage as $key => $value):?>
                            <?php if ($value['big_link']) :?>
                                <li><a href="<?php echo $value['big_link']; ?>" target="_blank"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></a></li>
                            <?php else:?>
                                <li><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></li>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="dot clearfix" id="dot">
                </div>
            </div>
            <div class="tab">
                <ul class="clearfix">
                    <?php
                    $tabClassArr = array('tab_act', 'tab_news', 'tab_info'); // 分类样式
                    ?>
                    <li class="tab_home"><a class="cur" href="/">首页</a></li>
                    <?php if ($categories) : $i = 0;?>
                        <?php foreach ($categories as $key => $value):?>
                        <li class="<?php echo $tabClassArr[$i];?>"><a href="<?php echo $webHelper->getNewsUrl($key);?>"><?php echo $value;?></a></li>
                        <?php $i ++;endforeach;?>
                    <?php endif;?>
                </ul>
            </div>
            <div class="game_top clearfix">
                <div class="game_ico fl"><?php if ($gameIcon): echo $gameIcon;endif; // 游戏图标?></div>
                <h3 class="game_name fl">萌翻三国</h3>
                <?php if($iosDownloadImg): echo $iosDownloadImg; endif; // ios下载链接?>
                <?php if($androidDownloadImg): echo $androidDownloadImg; endif; // 安卓下载链接 ?>
            </div>
        </div>
        <div class="content">
            <ul class="cont_home">
                <?php // 新闻列表
                    if ($newList):
                        foreach ($newList as $key => $value):
                ?>
                <li>
                   <a href="<?php echo $webHelper->getShowUrl($value['id']);?>" class="clearfix">
                        <div class="news_pic fl"><?php if ($value['small_url']):?><img src="/uploads/<?php echo $value['small_url'];?>"/><?php endif;?></div>
                        <div class="news_detail fl">
                            <div class="news_title"<?php if (!$value['small_url']):?> style="width: 800px"<?php endif; ?>><?php echo $value['title']; // 标题?></div>
                            <div class="news_desc"<?php if (!$value['small_url']):?> style="width: 800px"<?php endif; ?>><?php echo $webHelper->getDesc($value['content']); // 摘要?></div>
                            <div class="news_date"><?php echo date('m-d', $value['updated']); ?></div>
                        </div>
                   </a> 
                </li>    
                <?php
                        endforeach;
                    endif;
                ?>
            </ul>
        </div>
        <div class="float clearfix">
            <?php if($weixinLink): echo $weixinLink; endif; // 关注微信?>
            <?php if($weiboLink): echo $weiboLink; endif; // 关注微博?>
        </div>
    </div>
</body>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/scroll.js"></script>
<script type="text/javascript">
    $(function () {
        if (document.getElementById("runContent")) {
            var slide = new ScrollPic();
            slide.scrollContId = "runContent";
            slide.dotListId = "dot";
            slide.dotOnClassName = "selected";
            slide.frameWidth = 960;
            slide.pageWidth = 960;
            slide.upright = false;
            slide.speed = 10;
            slide.space = 50;
            slide.initialize();
        };
        $(".news_desc").each(function(){
            if ($(this).text().length > 26) {
                $(this).html($(this).text().substr(0, 26));
            };
        });
        $(".header .tab ul li").click(function () {
            var i = $(this).index();
            $(this).children("a").addClass("cur");
            $(this).siblings().children("a").removeClass("cur");
            $(".content").children(":eq(" + i + ")").show().siblings().hide();
        });
    })
</script>
</html>
