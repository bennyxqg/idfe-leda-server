<?php
  $el_styleData = $element['data']['style'];
  // var_dump($el_styleData);

  $el_font_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_font_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');

  $el_wrap_styleStr = 'left: '.$el_styleData['left'].'px;';
  $el_wrap_styleStr .= 'top: '.$el_styleData['top'].'px;';
  $el_wrap_styleStr .= 'z-index: '.($element['data']['zIndex']?$element['data']['zIndex']:1);
  // 处理换行符
  // $text = str_replace("\n","<br/>",$element['data']['text']);
  $text = $element['data']['text'];
?>
<div style='position: absolute;<?php echo $el_wrap_styleStr ?>'>
  <div style='position: relative;display: inline-block;<?php echo $el_font_styleStr ?>'>
    <div>
      <?php echo $text ?>
    </div>
  </div>
</div>