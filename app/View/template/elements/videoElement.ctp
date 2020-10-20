<?php
  $el_styleData = $element['data']['style'];
  $el_eventData = $element['data']['event'];
  // var_dump(json_encode($el_eventData));

  $el_video_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_video_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');

  $el_wrap_styleStr = 'left: '.$el_styleData['left'].'px;';
  $el_wrap_styleStr .= 'top: '.$el_styleData['top'].'px;';
  $el_wrap_styleStr .= 'z-index: '.($element['data']['zIndex']?$element['data']['zIndex']:1);
?>
<div style='position: absolute;<?php echo $el_wrap_styleStr ?>'>
  <div style='position: relative;display: inline-block;'>
      <video style='<?php echo $el_video_styleStr ?>' 
        controls
        src='<?php echo $element['data']['srcUrl'] ?>'
        >
      </video>
  </div>
</div>