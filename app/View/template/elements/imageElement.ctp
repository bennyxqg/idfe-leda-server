<?php
  $el_eventData = $element['data']['event'];
  // var_dump(json_encode($el_eventData));

  $el_img_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_img_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');

?>
<div >
  <div style='position: relative;display: inline-block;'>
    <img 
      class='common-event-target' 
      data-event-json='<?php echo json_encode($el_eventData) ?>'
      style='<?php echo $el_img_styleStr ?>' 
      src='<?php echo $element['data']['imgUrl'] ?>'
    />
  </div>
</div>