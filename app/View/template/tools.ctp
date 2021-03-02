<!-- 工具函数 -->
<?php
  // 获取宽度单位
  function getUnit($value)
  {
    if (preg_match("/px$/", $value, $m)) {
      return 'px';
    }
    if (preg_match("/%$/", $value, $m)) {
      return '%';
    }
    return 'px';
  }

  // 获取宽度数值
  function toValue($value)
  {
    $value = floatval($value);
    return $value;
  }

  // 拼接宽度
  function handleWidth($width)
  {
    return toValue($width) . getUnit($width);
  }
?>