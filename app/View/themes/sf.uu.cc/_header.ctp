<div class="header">
    <div class="nav">
        <ul>
            <li class="nav-home"><a href="/home">官网首页</a></li>
            <li class="nav-news"><a href="<?php echo $this->Base->getNewsUrl(24);?>">新闻公告</a></li>
            <li class="nav-video"><a href="<?php echo $this->Base->getNewsUrl(30);?>">攻略视频</a></li>
            <li class="nav-bbs"><a href="//bbs.uu.cc/forum-240-1.html">论坛专区</a></li>
        </ul>
    </div>
    <h1>天降-近卫英雄传，即时战斗，卡牌领袖</h1>
    <!--<div class="cdkey">
      <?php
        echo '<a href="javascript:;" id="cdkey"><img src="'.$full_base_url.'/images/btn.png" /></a><span class="red mgd">库存告罄</span>';
      ?>
        <?php
                $date = date("G");
                if($date >= 12 && $date < 18){
                    echo '<a href="javascript:;" id="cdkey"><img src="'.$full_base_url.'/images/btn.png" /></a><span class="green">库存充足<br>立即领取</span>';
                }else if($date >=18 && $date < 23){
                    echo '<a href="javascript:;" id="cdkey"><img src="'.$full_base_url.'/images/btn.png" /></a><span class="orange">库存紧张<br>赶紧领取</span>';
                }else{
                    echo '<span><img src="'.$full_base_url.'/images/btn.png" /></span><span class="red mgd">库存告罄</span>';
                }
             ?>
    </div>-->
</div>
<div class="banner layout">
    <div class="switch" style="position: relative;">
        <ul class="runContent">
            <?php $result["img_index_1"]=$this->SF->img_list();?>
            <?php if($result["img_index_1"]):?>
                <?php foreach($result["img_index_1"] as $key=>$value):?>
                            <li>
                                <?php if($value["big_link"]):?>
                                <a href='<?php echo $value["big_link"];?>' target="_blank"><img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"></a>
                                <?php else: ?>
                                <span><img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"></span>
                                <?php endif; ?>
                            </li>
                    <?php endforeach;?>
            <?php endif;?>
        </ul>
        <ul class="triggers">

            <?php if($result["img_index_1"]):?>
            <?php foreach($result["img_index_1"] as $key=>$value):?>
            <?php if($key == 0):?>
                        <li class="cur"></li>
             <?php else:?>
                        <li></li>
              <?php endif;?>
            <?php endforeach;?>
            <?php endif;?>


        </ul>
    </div>
  <!--//dl.uu.cc/download/skyfall_ios.ipa-->
  <div class="top-dl">
        <!--<a href="//dl.uu.cc/download/skyfall_ios.ipa" class="ios">ios越狱版下载</a>
        <a href="//dl.uu.cc/download/skyfall_android.apk" class="and">android版下载</a>-->
        <a href="//dl.uu.cc/download/skyfall_ios.ipa" class="ios"  id="iosDownload">ios越狱版下载</a>
        <a href="//dl.uu.cc/download/skyfall_android.apk" class="and">android版下载</a>
        <img src="<?php echo $full_base_url ?>/images/dl1.png" />
    </div>
    <div class="play"><img src="<?php echo $full_base_url ?>/images/play.jpg" alt="点击播放视频" /></div>
</div>
