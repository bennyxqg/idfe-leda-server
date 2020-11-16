<?php
  $styleData = $module['data']['style'];
  $sectionName = 'blankSection';
  // var_dump($styleData);
  // 样式字符串拼接
  $styleStr = 'height: ' . $styleData['height'] . 'px;';
  // 背景
  if($styleData['bg']['bgColor']) {
    $styleStr .= 'background-color: ' . $styleData['bg']['bgColor'] . ';';
  }
  
  if($styleData['bg']['bgType'] == 2 && $styleData['bg']['bgImg']) {
    $styleStr .= 'background-image: url(' . $styleData['bg']['bgImg'] . ');';
    if($styleData['width'] && $styleData['height']) {
      $styleStr .= 'backgroun-size:'. $styleData['width'] .'px ' .$styleData['height']. 'px';
    }
  }

  $videoBg = '';
  if($styleData['bg']['bgType'] == 3 && $styleData['bg']['bgVideo']) {
    // result.backgroundImage = `url(${tempData.bg.bgVideo})` 
    $videoBg = $styleData['bg']['bgVideo'];
  }
  
?>
<div class='module-item-wrap' id='section_<?php echo $module['sectionId'] ?>'>
    <div class='<?php echo $sectionName ?>-wrap'>
      <div class='<?php echo $sectionName ?>-wrap-inner <?php echo $sectionName ?>-wrap-inner-<?php echo $module['sectionId'] ?>'>
        <div class='<?php echo $sectionName ?>-wrap-item' style='<?php echo $styleStr ?>'>
          <?php
              if($videoBg) {
                
            ?>
              <div
                style='text-align: center;overflow: hidden;position: relative;height: 100%'>
                <video 
                  style='position: absolute;left: 50%;transform: translate(-50%)'
                  autoPlay loop muted src='<?php echo $videoBg ?>'>
                </video>
              </div>
            <?php
              }
            ?>
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