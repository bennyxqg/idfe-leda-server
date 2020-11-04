<?php
  $el_eventData = $element['data']['event'];
  // var_dump(json_encode($el_eventData));

  $el_video_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_video_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');
?>
<div >
  <div style='position: relative;display: inline-block;'>
      <video style='<?php echo $el_video_styleStr ?>' 
        controls
        src='<?php echo $element['data']['srcUrl'] ?>'
        >
      </video>
  </div>
</div>