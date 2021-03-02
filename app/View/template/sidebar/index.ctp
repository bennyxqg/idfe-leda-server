<?php 

  $el_styleData = $sidebarData['data']['style'];

  // var_dump(handleWidth($el_styleData['offsetTop']));

  $el_outer_styleStr = 'top: '. (handleWidth($el_styleData['offsetTop'])).';';

  $el_wrap_styleStr = 'width: '. (handleWidth($el_styleData['width'])).';';
  $el_wrap_styleStr .= 'height: '. (handleWidth($el_styleData['height'])).';';
  $el_wrap_styleStr .= 'border-radius: '. (handleWidth($el_styleData['borderRadius'])).';';

  // 背景
  $el_wrap_styleStr .= 'background-position: center;';
  if($el_styleData['bg']['bgType'] == 1 && $el_styleData['bg']['bgColor']) {
    $el_wrap_styleStr .= 'background-color: ' . $el_styleData['bg']['bgColor'] . ';';
  }
  
  if($el_styleData['bg']['bgType'] == 2 && $el_styleData['bg']['bgImg']) {
    $el_wrap_styleStr .= 'background-image: url(' . $el_styleData['bg']['bgImg'] . ');';
  }
?>
<div id="sidebar_wrapper_<?php echo $sidebarData['sectionId'] ?>" 
  data-id="<?php echo $sidebarViewId ?>"
  data-status="<?php echo $configProps['sidebarStatus'] ?>"
  class="sidebar-wrapper ">
  <div style="<?php echo $el_wrap_styleStr ?>position:fixed;z-index:998;display:none;<?php echo $el_outer_styleStr ?>">
    <div class="sidebar-html-wrap" style="<?php echo $el_wrap_styleStr ?>position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; background-color: rgb(255, 255, 255);">
      <div>
        <div class="sidebar-wrap-inner">
          <div>
            <div class='center-dot'>
              <?php
                if($sidebarData['data']['elements']) {
                  $elementList = $sidebarData['data']['elements'];
                  include(dirname(__FILE__) . '/../elements/common.ctp');
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>