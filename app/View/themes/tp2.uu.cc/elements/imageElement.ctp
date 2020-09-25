<?php
  $el_styleData = $element['data']['style'];
  $el_eventData = $element['data']['event'];
  // var_dump(json_encode($el_eventData));

  $el_img_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_img_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');

  $el_wrap_styleStr = 'left: '.$el_styleData['left'].'px;';
  $el_wrap_styleStr .= 'top: '.$el_styleData['top'].'px;';
  $el_wrap_styleStr .= 'z-index: '.($element['data']['zIndex']?$element['data']['zIndex']:1);
?>
<div style='position: absolute;<?php echo $el_wrap_styleStr ?>'>
  <div style='position: relative;display: inline-block;'>
    <img 
      class='common-event-target' 
      data-event-json='<?php echo json_encode($el_eventData) ?>'
      style='<?php echo $el_img_styleStr ?>' 
      src='<?php echo $element['data']['imgUrl'] ?>'
    />
  </div>
</div>