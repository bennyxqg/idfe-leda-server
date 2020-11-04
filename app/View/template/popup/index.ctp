<?php 

  $el_styleData = $popupData['data']['style'];
  $headerData = $popupData['data']['style']['header'];
  $headerTitle = '';
  $headerShow = false;
  // var_dump($headerData);
  if($headerData) {
    $headerShow = $headerData['show'];
    $headerTitle = $headerData['title'];
  }

  $el_wrap_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_wrap_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');
  $el_wrap_styleStr .= 'border-radius: '. ($el_styleData['borderRadius']?$el_styleData['borderRadius'].'px;':'0px;');
?>
<div id="popup_wrapper_<?php echo $popupListItem['id'] ?>" class="popup-wrapper applyPopup-wrapper ">
  <div style="z-index:999;position: fixed;width: 100%;top: 0;left: 0;bottom:0;background:rgb(0,0,0);opacity: .35;filter:Alpha(Opacity=35);"></div>
  <div style="<?php echo $el_wrap_styleStr ?>position:fixed;z-index:1000;top:0;left:0;right:0;bottom:0;margin:auto;">
    <div class="popup-html-wrap" style="<?php echo $el_wrap_styleStr ?>position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; background-color: rgb(255, 255, 255);">
    <?php
      // var_dump($popupData['data']['elements']);
    ?>
      <div>
        <?php
          if($headerShow) {
        ?>
          <div class="popup-box-header">
            <span><?php echo $headerTitle ?></span>
            <img class="icon-close popup-close-btn" src="http://dl.gamdream.com//website/image/202009/5f70289cad106.png" alt="">
          </div>
        <?php
          } else {
        ?>
          <div class="popup-outer-close-btn popup-close-btn">
            <img src="//dl.gamdream.com/activity/storm/gamemode/image/img_main_appointment_close.png">
          </div>
        <?php
          }
        ?>
        <div class="applyPopup-wrap-inner">
          <div>
            <div class='center-dot'>
              <?php
                if($popupData['data']['elements']) {
                  $elementList = $popupData['data']['elements'];
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