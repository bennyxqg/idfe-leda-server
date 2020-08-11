<?php
$this->Website->init();
$siteId = $GLOBALS['site_id'];
$startTime = GET_BLOCK('xts_start_time');
if (strtotime($startTime) < time()) {
    $startTime = date('Y-m-d');
}
$endTime = GET_BLOCK('xts_end_time');
$xtsDayPrefix = 0;
$xtsDay = 9;
if (!empty($startTime) && !empty($startTime)) {
    $xtsDay = intval((strtotime($endTime) - strtotime($startTime)) / 86400);
}

if ($xtsDay >= 10) {
    $tmpPrefix = str_split($xtsDay);
    $xtsDayPrefix = $tmpPrefix[0];
    $xtsDay = $tmpPrefix[1];
}

if ($xtsDay > 0 || $xtsDayPrefix > 0) {
    include('wtz_default.ctp');
} else {
    include('wtz_start.ctp');
}
?>