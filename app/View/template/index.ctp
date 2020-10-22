<!DOCTYPE html>
<html lang="en">

<?php 
    $baseInfo = $this->Base->getSiteInfo($site_id);
    $title = '网站标题';
    $keywords = '';
    $description = '';
    $icon = '';
    if($baseInfo) {
        if($baseInfo['title']) {
            $title = $baseInfo['title'];
        }
        if($baseInfo['keywords']) {
            $keywords = $baseInfo['keywords'];
        }
        if($baseInfo['description']) {
            $description = $baseInfo['description'];
        }
        if($baseInfo['icon']) {
            $icon = $baseInfo['icon'];
        }
    }

    // 页面类型
    $pageKind = 'pc';
    if($type != 0) {
        $pageKind = 'wap';
    }
?>

<head>
    <!-- <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"> -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=375, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" href="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/index.css">
    <link rel="icon" href="http:<?php echo($icon);?>" type="image/x-icon">
    <title><?php echo($title);?></title>
    <meta name="keywords" content="<?php echo($keywords);?>">
    <meta name="description" content="<?php echo($description);?>">

</head>

<body class="body-page-kind-<?php echo $pageKind ?>">
    <div class="pcreserve">
        <div class="warp warp02">
            <div class='module-list-wrap'>
                <?php
                $module_list = $config_json['moduleList'];
                foreach ($module_list as $module) {
                    $type = $module['type'];
                    require $type . '.ctp';
                }
                ?>
            </div>
        </div>

        <div class="popup-list">
            <?php
                $popupList = $this->Base->getPopupInfo($site_id);
                
                foreach ($popupList as $popupListItem) {
                    if($popupListItem['config_json'] && count(json_decode($popupListItem['config_json'])) !== 0) {
                        $popupListItemObj = json_decode($popupListItem['config_json'], true);
                        $popupModuleList = $popupListItemObj['moduleList'];
                        if($popupModuleList  && count($popupModuleList) > 0) {
                            foreach ($popupModuleList as $popupData) {
                                require 'popup/index.ctp';
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>

    <script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
    <script src="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.js"></script>
    <script src="//dl.gamdream.com/idfe/leda/js/template-web.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7ae13368159d6a513eaa7a17b9413b4b"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/js/index.js"></script>
    <script>
        var pageKind = "<?php echo $pageKind ?>"
        var hostDomain = "//<?php echo $_SERVER['HTTP_HOST']; ?>"
        // var_dump($site_id);
        // var popupList = []
        // <php 
        //     $popupList = $this->Base->getPopupInfo($site_id);
        //     if($popupList && count($popupList) > 0) {
        //         echo 'popupList='.json_encode($popupList);
        //     }
        // ?>
        
    </script>
</body>

</html>