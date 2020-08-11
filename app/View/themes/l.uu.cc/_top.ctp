<?php
    $topData=$this->Ly->topData();
//    var_dump($topData);
?>

<div class="first clearfix">
    <!-- 图片轮播 -->
    <div class="switch fl">
        <ul class="runContent">
            <?php if(!empty($topData["img_index_1"])):?>
            <?php foreach($topData["img_index_1"] as $key=>$value):?>
                <li><a href="<?php echo $value["small_link"] ?>" target="_blank"><img src="/uploads/<?php echo $value["small_url"];?>" /></a></li>
            <?php endforeach;?>
            <?php endif;?>
        </ul>
        <ul class="triggers">
            <?php if(!empty($topData["img_index_1"])):?>
            <?php foreach($topData["img_index_1"] as $key=>$value):?>
            <li <?php if($key == 0) echo 'class="cur"';?>></li>
                <?php endforeach;?>
            <?php endif;?>
        </ul>
    </div>
    <div class="news tab fl">
        <ul class="tab-hd clearfix">
            <li><span class="qb">全部</span></li>
            <li><span class="xw">新闻</span></li>
            <li><span class="gg">公告</span></li>
            <li><span class="hd">攻略</span></li>
        </ul>
        <div class="tabCon">
            <div class="tab-con">
                <div class="detail">
                    <?php
                    $total=$topData["total"];
                    if(!empty($total)):
                        $first=array_shift($total);
                        ?>
                        <h4><a target="_blank" href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                        <p><?php echo $first["decription"];?></p>
                    <?php endif;?>
                </div>
                <ul class="newslist">
                    <?php if(!empty($total)):?>
                        <?php foreach($total as $key=>$value):?>
                            <li><span><?php echo date("m/d",$value["created"])?></span><a target="_blank" href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                    <?php
                                        $name=$this->Ly->get_category_name($value["news_categories_id"]);
                                    ?>
                                    [<?php echo $name;?>]<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="gd"><a target="_blank" href="<?php echo $this->Base->getNewsUrl("all");?>">更多</a></div>
            </div>
            <div class="tab-con">
                <div class="detail">
                    <?php
                    $news=$topData["news"];
                    if(!empty($news)):
                        $first=array_shift($news);
                        ?>
                        <h4><a target="_blank" href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                        <p><?php echo $first["decription"];?></p>
                    <?php endif;?>
                </div>
                <ul class="newslist">
                    <?php if(!empty($news)):?>
                        <?php foreach($news as $key=>$value):?>
                            <li><span><?php echo date("m/d",$value["created"])?></span><a target="_blank" href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                    [新闻]<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="gd"><a target="_blank" href="<?php echo $this->Base->getNewsUrl(46);?>">更多</a></div>
            </div>
            <div class="tab-con">
                <div class="detail">
                    <?php
                    $gong_gao=$topData["gong_gao"];
                    if(!empty($gong_gao)):
                        $first=array_shift($gong_gao);
                        ?>
                        <h4><a target="_blank" href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                        <p><?php echo $first["decription"];?></p>
                    <?php endif;?>
                </div>
                <ul class="newslist">
                    <?php if(!empty($gong_gao)):?>
                        <?php foreach($gong_gao as $key=>$value):?>
                            <li><span><?php echo date("m/d",$value["created"])?></span><a target="_blank" href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                    [公告]<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="gd"><a target="_blank" href="<?php echo $this->Base->getNewsUrl(48);?>">更多</a></div>
            </div>
            <div class="tab-con">
                <div class="detail">
                    <?php
                    $gong_luo=$topData["gong_luo"];
                    if(!empty($gong_luo)):
                        $first=array_shift($gong_luo);
                        ?>
                        <h4><a target="_blank" href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                        <p><?php echo $first["decription"];?></p>
                    <?php endif;?>
                </div>
                <ul class="newslist">
                    <?php if(!empty($gong_luo)):?>
                        <?php foreach($gong_luo as $key=>$value):?>
                            <li><span><?php echo date("m/d",$value["created"])?></span><a target="_blank" href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                    [攻略]<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="gd"><a target="_blank" href="<?php echo $this->Base->getNewsUrl(52);?>">更多</a></div>
            </div>
        </div>
    </div>
    <div class="download fr">
        <img src="<?php echo $full_base_url ?>/images/xzwx.png" alt="" />
        <!-- <a class="android" href="//dl.uu.cc/download/lieyanzhetian-409_v0.0.4.9_s2.1.13_LE0S0N30000.apk"></a>-->
       <!-- <a class="ios" href="//dl.uu.cc/download/lieyanzhetian_v0.0.4.6_s1.1.0_LE0S0N20000.ipa"></a>-->
        <a class="ios2" href="javascript:alert('敬请期待！')"></a>
    </div>
</div>
