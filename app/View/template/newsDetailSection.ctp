<?php
  $styleData = $module['data']['style'];
  $sectionName = 'newsDetailSection';
  // var_dump($styleData);
  // 样式字符串拼接
  $styleStr = '';
  if($styleData['height']) {
    $styleStr = $styleStr . 'height: ' . $styleData['height'] . 'px;';
  }
  // 背景
  if($styleData['bg']['bgColor']) {
    $styleStr .= 'background-color: ' . $styleData['bg']['bgColor'] . ';';
  }
  
  if($styleData['bg']['bgType'] == 2 && $styleData['bg']['bgImg']) {
    $styleStr .= 'background-image: url(' . $styleData['bg']['bgImg'] . ');';
    if($styleData['width'] && $styleData['height']) {
      $styleStr .= 'backgroun-size:'. $styleData['width'] .'px ' .$styleData['height']. 'px';
    }
  }

  $newsId = '';
  if($module['data']['bindPathParam']) {
    if($module['data']['pathParam']) {
      $newsId = $_GET[$module['data']['pathParam']];
      // $newsId = $_GET['newsId'];
    }
  } else {
    if($module['data']['newsId']) {
      $newsId = $module['data']['newsId'];
    }
  }
  // $newsData = new class{};
  if($newsId) {
    $newsData = $this->Base->showNewsInfo($site_id, $newsId);
  }
  // var_dump($_SERVER["QUERY_STRING"]);
  // var_dump($_GET['newsId']);
  // $newsId = $_GET['newsId']
  // var_dump($newsId);
  // var_dump($newsData);

  
  
?>
<div class='module-item-wrap' id='section_<?php echo $module['sectionId'] ?>'>
    <div class='<?php echo $sectionName ?>-wrap <?php echo $sectionName ?>-wrap-kind-<?php echo $pageKind ?>' >
      <div class='<?php echo $sectionName ?>-wrap-inner <?php echo $sectionName ?>-wrap-inner-<?php echo $module['sectionId'] ?>'
        style='<?php echo $styleStr ?>'>
          <?php
            if($newsData) {
          ?>
            <div class="news-title">
              <?php
                echo $newsData['title']
              ?>
            </div>
            <div class="news-time">
              <?php
                echo date('Y-m-d', $newsData['created'])
              ?>
            </div>
            <div class="news-content">
              <?php
                echo $newsData['content']
              ?>
            </div>
          <?php
          }
          ?>
        <div>
          <div class='center-dot'>
            <?php
              if($module['data']['elements']) {
                $elementList = $module['data']['elements'];
                require 'elements/common.ctp';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
</div>