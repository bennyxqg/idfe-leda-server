<?php
$sectionName = 'carouselSection';
$styleData = $module['data']['style'];

$sec_img_styleStr = 'width: ' . ($styleData['img']['width'] ? $styleData['img']['width'] . 'px;' : 'auto;');
$sec_img_styleStr .= 'height: ' . ($styleData['img']['height'] ? $styleData['img']['height'] . 'px;' : 'auto;');

// 背景
$bg_styleStr = '';
if ($styleData['bg']['bgColor']) {
  $bg_styleStr .= 'background-color: ' . $styleData['bg']['bgColor'] . ';';
}

if ($styleData['bg']['bgType'] == 2 && $styleData['bg']['bgImg']) {
  $bg_styleStr .= 'background-image: url(' . $styleData['bg']['bgImg'] . ');';
  if ($styleData['width'] && $styleData['height']) {
    $bg_styleStr .= 'backgroun-size:' . $styleData['width'] . 'px ' . $styleData['height'] . 'px';
  }
}

// 容器
$wrap_styleStr = '';
$wrap_styleStr .= 'padding-top: ' . $styleData['paddingTop'] . 'px;';
$wrap_styleStr .= 'padding-bottom: ' . $styleData['paddingBottom'] . 'px;';
$wrap_styleStr .= 'text-align: ' . $styleData['align'] . ';';

$wrap_width = '';
$wrap_width_style = '';
$wrap_outer_width = '';
$wrap_outer_width_style = '';
if($styleData['img']['width']) {
  $wrap_width = $styleData['img']['width'];
  if($styleData['type'] == 2) {
    $wrap_width = $styleData['img']['width'] * 1.53;
  }
  $wrap_width_style = 'width: ' . $wrap_width . 'px;';
  if($styleData['swiper']['navBtn']) {
    if($styleData['swiper']['navBtn']['show']) {
      $wrap_outer_width = $wrap_width;
      if($styleData['type'] == 2) {
        if($pageKind === 'pc') {
          $wrap_outer_width = $wrap_width + 200;
        }
      }
      $wrap_outer_width_style = 'width: ' . $wrap_outer_width . 'px;';
    }
  }
}
$imgs = $this->Base->showImgs($site_id, $module['data']['imgs']['groupId']);

$imgElements = $module['data']['imgs']['elements'];

?>
<div class='module-item-wrap' id='section_<?php echo $module['sectionId'] ?>'>
  <?php
    if($imgs && count($imgs) > 0) {
  ?>
  <div class='<?php echo $sectionName ?>-wrap'>
    <div class='<?php echo $sectionName ?>-wrap-inner <?php echo $sectionName ?>-wrap-inner-<?php echo $module['sectionId'] ?>'>
      <div class='<?php echo $sectionName ?>-wrap-item' style='<?php echo $bg_styleStr ?><?php echo $wrap_styleStr ?>'>
        <div class="swiper-container-wrap swiper-comp-wrap">
          <div class="swiper-container-outer"
            style="<?php echo $wrap_outer_width_style ?>" 
          >
            <div class="swiper-container" 
              style="<?php echo $wrap_width_style ?>" 
              data-type='<?php echo $styleData['type'] ?>' 
              data-json='<?php echo json_encode($styleData['swiper']) ?>' 
              data-sectionId='<?php echo $module['sectionId'] ?>'>
              <div class="swiper-wrapper" 
                style="<?php echo $sec_img_styleStr ?>" >
                <?php
                  foreach ($imgs as $imgIndex=>$img) :
                ?>
                  <div class="swiper-slide" style="<?php echo $sec_img_styleStr ?>">
                    <div class="swiper-slide-inner" style="position: relative">
                      <img src='<?php echo $img['url'] ?>' style="<?php echo $sec_img_styleStr ?>" />
                      <div class='center-dot'>
                        <?php
                          if($imgElements) {
                            if($imgElements['index_'.$imgIndex]) {
                              $elementList = $imgElements['index_'.$imgIndex];
                              require 'elements/common.ctp';
                            }
                          }
                        ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <!-- 如果需要分页器 -->
              <div class="swiper-pagination swiper-pagination-<?php echo $module['sectionId'] ?>"></div>
            </div>
            <div class='swiper-buttons'>
              <div
                class='swiper-button swiper-button-prev swiper-button-prev-<?php echo $module['sectionId'] ?>'
              ></div>
              <div
                class='swiper-button swiper-button-next swiper-button-next-<?php echo $module['sectionId'] ?>'
              ></div>
            </div>
          </div>
          <div class='center-dot'>
            <?php
              if($module['data']['elements']) {
                $elementList = $module['data']['elements'];
                require 'elements/common.ctp';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    }
  ?>
</div>