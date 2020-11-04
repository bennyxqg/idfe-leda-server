<?php
  // var_dump($el_styleData);

  $el_font_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_font_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');
  $el_font_styleStr .= 'font-size: '. $el_styleData['font']['fontSize'].'px;';
  $el_font_styleStr .= 'color: '. $el_styleData['font']['fontColor'].';';
  $el_font_styleStr .= 'font-weight: '.($el_styleData['font']['isBold']?'bold;':'normal;');
  $el_font_styleStr .= 'line-height: '. ($el_styleData['font']['lineHeight']?$el_styleData['font']['lineHeight'].'px;':'normal;');
  $el_font_styleStr .= 'letter-spacing: '. ($el_styleData['font']['letterSpacing']?$el_styleData['font']['letterSpacing'].'px;':'normal;');
  $el_font_styleStr .= 'text-align: '. ($el_styleData['align']?$el_styleData['align']:'left;');

  // 处理换行符
  $text = str_replace("\n","<br/>",$element['data']['text']);

  // 事件数据
  $el_eventDataStr = '';
  if ($element['data']['event']) {
    $el_eventData = $element['data']['event'];
    $el_eventDataStr = json_encode($el_eventData);
  }
?>
<div>
  <div style='position: relative;display: inline-block;<?php echo $el_font_styleStr ?>'>
    <div 
      class='common-event-target' 
      data-event-json='<?php echo $el_eventDataStr ?>'>
    <?php echo $text ?>
    </div>
  </div>
</div>