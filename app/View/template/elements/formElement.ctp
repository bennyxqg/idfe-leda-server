<?php

  $el_itemConfig = $element['data']['itemConfig'];
  // var_dump(json_encode($el_itemConfig));

  $el_wrap_inner_styleStr = 'width: '. ($el_styleData['width']?$el_styleData['width'].'px;':'auto;');
  $el_wrap_inner_styleStr .= 'height: '. ($el_styleData['height']?$el_styleData['height'].'px;':'auto;');

  $el_btn_styleData = $el_styleData['submitBtn'];
  $el_btn_styleStr = 'width: '.($el_btn_styleData['width']?$el_btn_styleData['width'].'px;':'auto;');
  $el_btn_styleStr .= 'height: '.($el_btn_styleData['height']?$el_btn_styleData['height'].'px;':'auto;');
?>
<div 
  id="el_form_wrap_<?php echo $element['elementId'] ?>"
  class="el-form-wrap" 
  data-req-url="<?php echo $element['data']['reqUrl'] ?>"
  style='<?php echo $el_wrap_inner_styleStr ?>'
  >
  <div style='position: relative;'>
    <ul>
      <?php
        foreach ($el_itemConfig as $itemSingle) :
      ?>
        <li>
          <div class='el-form-item' data-ismust="<?php echo $itemSingle['isMust'] ?>" data-rules="<?php echo $itemSingle['rules'] ?>">
            <div class='el-form-item-label'>
              <span class='text'><?php echo $itemSingle['label'] ?></span>
              <?php
                if($itemSingle['isMust']) {
              ?>
                <span class='must'>*</span>
              <?php
                }
              ?>
            </div>

            <div class='el-form-item-widget'>
              <div class="el-form-item-input">
                <?php
                  if($itemSingle['type'] === 'input') {
                ?>
                  
                  <input 
                    name='<?php echo $itemSingle['name'] ?>'
                    placeholder="<?php echo $itemSingle['placeholder'] ?>"
                    class="common-input widget-item" type='text' />
                
                <?php
                  }
                ?>
                <?php
                  if($itemSingle['type'] === 'textarea') {
                ?>
                  <div>
                    <textarea 
                      name='<?php echo $itemSingle['name'] ?>'
                      placeholder="<?php echo $itemSingle['placeholder'] ?>"
                      class="common-textarea widget-item" rows='3'></textarea>
                  </div>
                <?php
                  }
                ?>
                <?php
                  if($itemSingle['type'] === 'radio') {
                ?>
                  <div class='radio-group widget-item'>
                    <?php
                      foreach ($itemSingle['items'] as $options) :
                    ?>
                      <div class='radio-group-item'>
                        <input
                          class="mar-r-4"
                          name='<?php echo $itemSingle['name'] ?>'
                          type="radio" 
                          value='<?php echo $options['value'] ?>' 
                          <?php
                            if($options['checked'] == 1) {
                          ?>
                            checked
                          <?php
                            }
                          ?>
                        />
                        <span><?php echo $options['label'] ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php
                  }
                ?>
                <?php
                  if($itemSingle['type'] === 'checkbox') {
                ?>
                  <div class='checkbox-group widget-item'>
                    <?php
                      foreach ($itemSingle['items'] as $options) :
                    ?>
                      <div class='checkbox-group-item'>
                        <input 
                          class="mar-r-4"
                          name='<?php echo $itemSingle['name'] ?>'
                          type="checkbox" 
                          value='<?php echo $options['value'] ?>' 
                          <?php
                            if($options['checked'] == 1) {
                          ?>
                            checked
                          <?php
                            }
                          ?>
                        />
                        <span><?php echo $options['label'] ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php
                  }
                ?>
                <?php
                  if($itemSingle['type'] === 'select') {
                ?>
                  <div class='select-wrap'>
                    <select class='widget-item'
                      name='<?php echo $itemSingle['name'] ?>'
                    >
                      <?php
                        foreach ($itemSingle['items'] as $options) :
                      ?>
                        <option value='<?php echo $options['value'] ?>' class='select-item'>
                          <?php echo $options['label'] ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                <?php
                  }
                ?>
                <div class="err-tips"></div>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="el-form-submit-btn"
    style='text-align:<?php echo $el_styleData['submitBtn']['align'] ?>;'
  >
    <img 
      style='<?php echo $el_btn_styleStr ?>cursor: pointer;'
      src="<?php echo $el_styleData['submitBtn']['imgUrl'] ?>">
  </div>
</div>