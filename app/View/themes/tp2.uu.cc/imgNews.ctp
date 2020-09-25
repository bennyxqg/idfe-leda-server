<?php
    $styleData = $module['data']['style'];
    $sectionName = 'imgNews';
 // 背景
 $base_bg_style = '';
 if(!$styleData['base']['bg']['disabled']) {
    if($styleData['base']['bg']['bgColor']) {
        $base_bg_style .= 'background-color: ' . $styleData['base']['bg']['bgColor'] . ';';
    }
    
    if($styleData['base']['bg']['bgType'] == 2 && $styleData['base']['bg']['bgImg']) {
        $base_bg_style .= 'background-image: url(' . $styleData['base']['bg']['bgImg'] . ');';
        if($styleData['width'] && $styleData['height']) {
            $base_bg_style .= 'backgroun-size:'. $styleData['width'] .'px ' .$styleData['height']. 'px';
        }
    }
 }

   // 容器
   $wrap_styleStr = '';
   $wrap_styleStr .= 'padding-top: ' . $styleData['base']['paddingTop'] . 'px;';
   $wrap_styleStr .= 'padding-bottom: ' . $styleData['base']['paddingBottom'] . 'px;';
   $wrap_styleStr .= 'height: ' . ($styleData['base']['height']?$styleData['base']['height'] . 'px;':'auto');

     // 新闻背景
    $news_bg_style = '';
    if(!$styleData['news']['bg']['disabled']) {
        if($styleData['news']['bg']['bgColor']) {
            $news_bg_style .= 'background-color: ' . $styleData['news']['bg']['bgColor'] . ';';
        }
        
        if($styleData['news']['bg']['bgType'] == 2 && $styleData['news']['bg']['bgImg']) {
            $news_bg_style .= 'background-image: url(' . $styleData['news']['bg']['bgImg'] . ');';
            if($styleData['width'] && $styleData['height']) {
                $news_bg_style .= 'backgroun-size:'. $styleData['width'] .'px ' .$styleData['height']. 'px';
            }
        }
    }

?>
<div class='module-item-wrap' id='section_<?php echo $module['sectionId'] ?>'>
    <div class='<?php echo $sectionName ?>-wrap' style='<?php echo $base_bg_style ?><?php echo $wrap_styleStr ?>'>
        <div class="<?php echo $sectionName ?>-wrap-inner <?php echo $sectionName ?>-wrap-inner-<?php echo $module['sectionId'] ?>">
        <div class='<?php echo $sectionName ?>-wrap-item' >
            <div class="imgNews-wrap-inner-carousel">
                <div class="swiper-imgNews swiper-container" data-json='<?php echo json_encode($styleData['swiper']) ?>' data-sectionId='<?php echo $module['sectionId'] ?>'>
                    <div class="swiper-wrapper">
                        <?php
                        $imgs = $this->Base->showImgs($site_id, $module['data']['imgs']['groupId']);
                        foreach ($imgs as $img) :
                        ?>
                            <div class="swiper-slide">
                                <img src='<?php echo $img['url'] ?>' />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination swiper-pagination-<?php echo $module['sectionId'] ?>"></div>
                </div>
            </div>
            <div class="imgNews-wrap-inner-news" style='<?php echo $news_bg_style ?>'>
                <div class="imgNews-news-nav">
                    <ul style='color: <?php echo $styleData['news']['nav']['fontColor'] ?>;font-size: <?php echo $styleData['news']['nav']['fontSize'] ?>px;font-weight: <?php echo $styleData['news']['nav']['isBold'] ? 'bold' : 'normal' ?>;'>
                        <li class='active'>
                            <span>最新</span>
                        </li>
                        <?php
                        $newsCategory = $this->Base->showNewsCategory($site_id);
                        foreach ($newsCategory as $cate) :
                            $categoryId[] = $cate['id'];
                        ?>
                            <li>
                                <span><?php echo $cate['name'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="imgNews-news-list">
                    <ul class='show'>
                        <?php
                        $newsArr = $this->Base->showNewsLatest($site_id, 5);
                        foreach ($newsArr as $news) :
                        ?>
                            <li>
                                <span class="imgNews-news-list-text" style="color: <?php echo $styleData['news']['list']['fontColor'] ?>;font-size: <?php echo $styleData['news']['list']['fontSize'] ?>px; font-weight: <?php echo $styleData['news']['list']['isBold'] ? 'bold' : 'normal' ?>;letter-spacing: <?php echo $styleData['news']['list']['letterSpacing'] ?>px;">
                                    <?php echo $news['title'] ?>
                                </span>
                                <span class="imgNews-news-list-time" style="font-size: <?php echo $styleData['news']['list']['fontSize'] ?>px;">
                                    <?php echo date('m-d', $news['created']); ?>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php
                    foreach ($categoryId as $cateId) :
                    ?>
                        <ul>
                            <?php
                            $newsArr = $this->Base->showNews($cateId, 5);
                            foreach ($newsArr as $news) :
                            ?>
                                <li>
                                    <span class="imgNews-news-list-text">
                                        <?php echo $news['title'] ?>
                                    </span>
                                    <span class="imgNews-news-list-time">
                                        <?php echo date('m-d', $news['created']); ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class='center-dot'>
            <?php
            if($module['data']['elements']) {
                foreach($module['data']['elements'] as $element){
                $eType = $element['type'];
                require 'elements/'.$eType.'.ctp';
                }
            }
            ?>
        </div>
        </div>
    </div>
</div>