<!DOCTYPE html>
<html>
<head>
    <?php require_once "_css_header.ctp" ?>
    <style type="text/css">
        body{background:#13151d url("<?php echo $full_base_url ?>/css/home/index_bg.jpg") no-repeat 50% 0;}
    </style>
</head>
<body>
<?php   $result= $this->SF->indexInitData();?>

<div class="page">
    <?php require_once "_header.ctp" ?>
    <div class="content layout">
        <div class="news">
            <ul class="tabs">
                <li class="cur">全部</li>
                <li>新闻</li>
                <li>攻略</li>
                <li>活动</li>
                <li class="more">
                    <a href="<?php echo $this->Base->getNewsUrl("all");?>">更多<img src="<?php echo $full_base_url ?>/images/jia_1.png"></a>
                </li>
            </ul>
            <div class="news-list">
                <ul>
                    <?php if($result["total"]):?>
                        <?php foreach($result["total"] as $key=>$value):?>
                            <li <?php if($key == 0) echo 'class="top"'?> ;>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [新闻]<?php echo $value["title"];?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>

                <ul style="display: none">
                    <?php if($result["news"]):?>
                        <?php foreach($result["news"] as $key=>$value):?>
                            <li <?php if($key == 0) echo 'class="top"'?> ;>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [新闻]<?php echo $value["title"];?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>

                </ul>

                <ul style="display: none">
                    <?php if($result["consulting"]):?>
                        <?php foreach($result["consulting"] as $key=>$value):?>
                            <li <?php if($key == 0) echo 'class="top"'?> ;>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [攻略]<?php echo $value["title"];?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>

                </ul>

                <ul style="display: none">
                    <?php if($result["activity"]):?>
                        <?php foreach($result["activity"] as $key=>$value):?>
                            <li <?php if($key == 0) echo 'class="top"'?> ;>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [活动]<?php echo $value["title"];?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>

            </div>
        </div>
        <div class="fn-list">
            <ul>
                <li><a href="/show/174.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/fn-1.jpg" /></a></li>
                <li><a href="/show/176.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/fn-2.jpg" /></a></li>
                <li><a href="/show/178.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/fn-3.jpg" /></a></li>
                <li><a href="/show/180.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/fn-4.jpg" /></a></li>
            </ul>
        </div>
        <div class="xkbox box">
            <div class="head"><h3><img src="<?php echo $full_base_url ?>/images/hero_1.png" alt="英雄介绍" /></h3></div>
            <div class="xk">
                <ul>
                    <li><img src="<?php echo $full_base_url ?>/images/xk-1_new.jpg" width="940"/></li>
                    <li><img src="<?php echo $full_base_url ?>/images/xk-2_new.jpg" width="940" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/xk-3_new.jpg" width="940" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/xk-4_new.jpg" width="940" /></li>
                    <li><img src="<?php echo $full_base_url ?>/images/xk-5_new.jpg" width="940" /></li>
                </ul>
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            <!-- <span class="xk-mask"></span> -->
        </div>
        <div class="clearfix">
            <div class="box mediabox">
                <div class="head"><h3><img src="<?php echo $full_base_url ?>/images/media_zoom_1.png" alt="媒体专区" /></h3></div>
                <div class="zoom">
                    <ul class="tabs">
                         <li class="cur">91手游</li>
                         <li>5G手游</li>
                         <li>魔方网</li>
                         <li>口袋巴士</li>
                         <li>游戏多</li>
                     </ul>
                     <div class="iframe">
                         <div style=""><iframe height=124 width=545 src="//game.91.com/tj/qt.html" frameborder=0 allowfullscreen></iframe></div>
                         <div style="display:none"><iframe height=124 width=545 src="//api.5g.com/api/qlist/id/tj" frameborder=0 allowfullscreen></iframe></div>
                         <div style="display:none"><iframe height=124 width=545 src="//www.mofang.com/tj/list_8047_1.html" frameborder=0 allowfullscreen></iframe></div>
                         <div style="display:none"><iframe height=124 width=545 src="//www.ptbus.com/tianjiang/show/" frameborder=0 allowfullscreen></iframe></div>
                         <div style="display:none"><iframe height=124 width=545 src="//www.youxiduo.com/iframe/32547.shtml" frameborder=0 allowfullscreen></iframe></div>
                     </div>
                </div>
            </div>
            <div class="box linkbox">
                <div class="head"><h3><img src="<?php echo $full_base_url ?>/images/media_1.png" alt="合作媒体" /></h3></div>
                <div class="media">
                    <p>
                        <?php if($result["text_index_2"]):?>
                        <?php foreach($result["text_index_2"] as $key=>$value):?>
                                <a href="<?php echo $value["url"];?>" target="_blank"><?php echo $value["title"];?></a>
                    <?php endforeach;?>
                    <?php endif;?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "_footer.ctp" ?>
<?php require_once "_popUp.ctp" ?>
</body>
</html>