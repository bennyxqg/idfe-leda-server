<?php
  if($elementList) {
    foreach($elementList as $element){
      $eType = $element['type'];

      $el_styleData = $element['data']['style'];

      $el_wrap_styleStr = 'left: '.$el_styleData['left'].'px;';
      $el_wrap_styleStr .= 'top: '.$el_styleData['top'].'px;';
      $el_wrap_styleStr .= 'z-index: '.(strlen($element['data']['zIndex'])?$element['data']['zIndex']:1);

      $aniamtion_json = '';
      if($element['data']['animation']) {
        $aniamtion_json = json_encode($element['data']['animation']);
      }
?>
  <div class="element-item-wrapper" 
    style='position: absolute;<?php echo $el_wrap_styleStr ?>;visibility: hidden;'
    data-id="<?php echo $element['elementId'] ?>"
    data-animation-json='<?php echo $aniamtion_json ?>'
  >
<?php
      require $eType.'.ctp';
?>
  </div>
<?php
    }
  }
?>