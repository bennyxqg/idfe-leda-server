<?php
    $styleData = $module['data']['style'];
?>
<div class='module-list-wrap'>
        <div class='module-item-wrap'>
            <div class='imgNews-wrap'>
                <div class="imgNews-wrap-inner">
                    <div class="imgNews-wrap-inner-carousel">
                        <div class="swiper-imgNews" data-json='<?php echo json_encode($styleData['carousel']) ?>'>
                            <div class="swiper-wrapper">
                            <?php
                                $imgs = $this->Base->showImgs($site_id,$module['data']['imgs']['groupId']);
                                foreach($imgs as $img):
                            ?>
                                <div class="swiper-slide">
                                    <img src='<?php echo $img['url']?>' />
                                </div>
                            <?php endforeach;?>
                            </div>
                            <!-- 如果需要分页器 -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="imgNews-wrap-inner-news" 
                        style='background-color: <?php echo $styleData['bg']['color'] ?>;'                
                    >
                        <div class="imgNews-news-nav">
                            <ul style='color: <?php echo $styleData['news']['nav']['fontColor'] ?>;font-size: <?php echo $styleData['news']['nav']['fontSize'] ?>px;font-weight: <?php echo $styleData['news']['nav']['isBold']?'bold':'normal' ?>;'>
                                <li class='active'>
                                    <span>最新</span>
                                </li>
                                <?php
                                    $newsCategory = $this->Base->showNewsCategory($site_id);
                                    foreach($newsCategory as $cate):
                                        $categoryId[] = $cate['id'];
                                ?>
                                <li>
                                    <span><?php echo $cate['name']?></span>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="imgNews-news-list">
                            <ul class='show'>
                                <?php
                                    $newsArr = $this->Base->showNewsLatest($site_id,5);
                                    foreach($newsArr as $news):
                                ?>
                                <li>
                                    <span class="imgNews-news-list-text"
                                        style="color: <?php echo $styleData['news']['list']['fontColor'] ?>;fontSize: <?php echo $styleData['news']['list']['fontSize'] ?>px; fontWeight: <?php echo $styleData['news']['list']['isBold']?'bold':'normal' ?>;letterSpacing: <?php echo $styleData['news']['list']['letterSpacing'] ?>px;"
                                    >
                                        <?php echo $news['title']?>
                                    </span>
                                    <span class="imgNews-news-list-time">
                                       <?php echo date('m-d',$news['created']);?>
                                    </span>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <?php
                                foreach($categoryId as $cateId):
                            ?>
                            <ul>
                            <?php
                                $newsArr = $this->Base->showNews($cateId,5);
                                foreach($newsArr as $news):
                            ?>
                            <li>
                                <span class="imgNews-news-list-text">
                                    <?php echo $news['title']?>
                                </span>
                                <span class="imgNews-news-list-time">
                                   <?php echo date('m-d',$news['created']);?>
                                </span>
                            </li>
                            <?php endforeach;?>
                            </ul>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>