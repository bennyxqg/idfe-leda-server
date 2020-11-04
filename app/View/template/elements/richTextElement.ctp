<?php
  // var_dump($el_styleData);

  $el_font_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_font_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');
  // 处理换行符
  // $text = str_replace("\n","<br/>",$element['data']['text']);
  $text = $element['data']['text'];
?>
<div >
  <div style='position: relative;display: inline-block;<?php echo $el_font_styleStr ?>'>
    <div>
      <?php echo $text ?>
    </div>
  </div>
</div>