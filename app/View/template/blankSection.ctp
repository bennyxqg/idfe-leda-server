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
  
?>
<div class='module-item-wrap' id='section_<?php echo $module['sectionId'] ?>'>
    <div class='<?php echo $sectionName ?>-wrap'>
      <div class='<?php echo $sectionName ?>-wrap-inner <?php echo $sectionName ?>-wrap-inner-<?php echo $module['sectionId'] ?>'>
        <div class='<?php echo $sectionName ?>-wrap-item' style='<?php echo $styleStr ?>'>
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
</div>