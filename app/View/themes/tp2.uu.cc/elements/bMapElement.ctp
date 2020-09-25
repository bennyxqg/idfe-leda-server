<?php
  $el_styleData = $element['data']['style'];

  $el_wrap_styleStr = 'left: '.$el_styleData['left'].'px;';
  $el_wrap_styleStr .= 'top: '.$el_styleData['top'].'px;';
  $el_wrap_styleStr .= 'z-index: '.($element['data']['zIndex']?$element['data']['zIndex']:1);
?>
<div style='position: absolute;<?php echo $el_wrap_styleStr ?>'>
  <div style='position: relative;'>
    <div class='map-bd'>
      <div class='map-bd-item' 
        data-json='<?php echo json_encode($element['data']) ?>'
        style='width:<?php echo $el_styleData['width'] ?>px;height:<?php echo $el_styleData['height'] ?>px;'>
    </div>
    </div>
  </div>
</div>