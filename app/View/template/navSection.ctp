<?php
  $styleData = $module['data']['style'];
  $sectionName = 'navSection';
  // var_dump($styleData);
  // 样式字符串拼接
  $styleStr = 'height: ' . $styleData['height'] . 'px;';
  $styleStr .= 'color: ' . $styleData['fontColor'] . ';';
  $styleStr .= 'font-size: ' . $styleData['fontSize'] . 'px;';
  $styleStr .= 'font-weight: '.($styleData['isBold']?'bold;':'normal;');
  
  // 背景
  $bgStyleStr = '';
  if($styleData['bg']['bgColor']) {
    $bgStyleStr .= 'background-color: ' . $styleData['bg']['bgColor'] . ';';
  }
  if($styleData['bg']['bgType'] == 2 && $styleData['bg']['bgImg']) {
    $bgStyleStr .= 'background-image: url(' . $styleData['bg']['bgImg'] . ');';
    if($styleData['width'] && $styleData['height']) {
      $bgStyleStr .= 'backgroun-size:'. $styleData['width'] .'px ' .$styleData['height']. 'px';
    }
  }
  // 滚动时效果
  $stickyType = 'default';
  if($styleData['navType']) {
    $stickyType = $styleData['navType'];
  }
?>
<div class='module-item-wrap' id='section_<?php echo $module['sectionId'] ?>'>
    <div class='<?php echo $sectionName ?>-wrap <?php echo $sectionName ?>-sticky-<?php echo $stickyType?> <?php echo $sectionName ?>-wrap-kind-<?php echo $pageKind ?>' >
      <div class='<?php echo $sectionName ?>-wrap-inner <?php echo $sectionName ?>-wrap-inner-<?php echo $module['sectionId'] ?>'
        style='<?php echo $bgStyleStr ?>'>
        <div class='<?php echo $sectionName ?>-wrap-item <?php echo ($styleData['screenType'] == 2?$sectionName.'-full-screen':'') ?>' 
          style='<?php echo $styleStr ?>'>
          <div class='<?php echo $sectionName ?>-navbar-left'>
            <img src='<?php echo $module['data']['navImg'] ?>' alt='' />
          </div>
          <div class='<?php echo $sectionName ?>-navbar-right'
            style='text-align: <?php echo $styleData['align'] ?>;margin-left: <?php echo $styleData['menuMargin']['left'] ?>px;margin-right: <?php echo $styleData['menuMargin']['right'] ?>px;'
          >
            <?php
              if($pageKind === 'pc') {
            ?>
              <ul class="menu-horizontal">
                <?php
                  $navList = $module['data']['navList'];
                  foreach ($navList as $key => $nav) :
                ?>
                  <li
                    style="line-height: <?php echo $styleData['height'] ?>px"
                  >
                    <span
                      data-active-color="<?php echo $styleData['selectFont']['color'] ?>"
                      data-event-json='<?php echo json_encode($nav['event']) ?>'
                      data-event-type='<?php echo $nav['event']['type'] ?>'
                      class='nav-menu-item common-event-target <?php if($key == 0){ echo 'active ';} ?>'
                      
                    >
                      <span class='nav-label' style='color: <?php echo $styleData['fontColor'] ?>;'><?php echo $nav['label'] ?></span>
                      <span class='nav-label active' style='color: <?php echo $styleData['selectFont']['color'] ?>;'><?php echo $nav['label'] ?></span>
                      <span class='active-line <?php
                        if ($styleData['selectLine']['show'] === false)
                        {
                          echo "hidden";
                        }
                      ?>'
                        style='background-color: <?php echo $styleData['selectLine']['color'] ?>;height: <?php echo $styleData['selectLine']['height'] ?>px';
                      ></span>
                    </span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php } ?>
            <?php
              if($pageKind === 'wap') {
            ?>
              <div>
                  <div class='<?php echo $sectionName ?>-navbar-right-menu-icon'>
                    <span class='menu-icon'>
                        <i class="menu-icon-line" title="导航开关">
                        </i>
                    </span>
                    
                    <div
                      class='menu-drop-down-wrap'
                      style='right: -80px;opacity: 0'
                    >
                      <div class="menu-drop-down">
                        <div class="menu-drop-down-bg"></div>
                          <ul>
                            <?php
                              $navList = $module['data']['navList'];
                              foreach ($navList as $key => $nav) :
                            ?>
                              <li>
                                <span
                                  data-active-color="<?php echo $styleData['selectFont']['color'] ?>"
                                  data-event-json='<?php echo json_encode($nav['event']) ?>'
                                  data-event-type='<?php echo $nav['event']['type'] ?>'
                                  class='common-event-target'
                                >
                                  <?php echo $nav['label'] ?>
                                </span>
                              </li>
                            <?php endforeach; ?>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>
          </div>
          <div class='center-dot'>
            <?php
              if($module['data']['elements']) {
                foreach($module['data']['elements'] as $element){
                  $eType = $element['type'];
                  require 'elements/'.$eType.'.ctp';
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="<?php echo $sectionName ?>-sticky-placeholder" style="display: none;height:<?php echo $styleData['height'] ?>px;"></div>
</div>