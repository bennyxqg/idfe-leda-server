<!DOCTYPE html>
<html lang="en">

<?php
$baseInfo = $this->Base->getSiteInfo($site_id);
$title = '网站标题';
$keywords = '';
$description = '';
$icon = '';

$pageTitle = $website_config['title'];

$pageKeywords = $website_config['keywords'];
// var_dump($this->Base->getWebsiteConfig('90'));

if ($baseInfo) {
    if ($pageTitle) {
        $title = $pageTitle;
    } else if ($baseInfo['title']) {
        $title = $baseInfo['title'];
    }
    if ($pageKeywords) {
        $keywords = $pageKeywords;
    } else if ($baseInfo['keywords']) {
        $keywords = $baseInfo['keywords'];
    }
    if ($website_config['desc']) {
        $description = $website_config['desc'];
    } else if ($baseInfo['description']) {
        $description = $baseInfo['description'];
    }

    if ($baseInfo['icon']) {
        $icon = $baseInfo['icon'];
    }
}


// 页面类型
$pageKind = 'pc';
if ($type != 0) {
    $pageKind = 'wap';
}

// 是否为预览状态
$sitePreview = false;
if ($_SERVER['REQUEST_URI']) {
    if (preg_match('/\/preview\//', $_SERVER['REQUEST_URI']) === 1) {
        $sitePreview = true;
    }
}
require 'tools.ctp';
?>

<head>
    <!-- <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"> -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=375,  <?php if ($pageKind === 'wap') { ?> user-scalable=no, <?php } ?>minimal-ui, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" href="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/css/index.css">
    <link rel="icon" href="<?php echo ($icon); ?>" type="image/x-icon">
    <title><?php echo ($title); ?></title>
    <meta name="keywords" content="<?php echo ($keywords); ?>">
    <meta name="description" content="<?php echo ($description); ?>">

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
                if ($popupListItem['config_json'] && count(json_decode($popupListItem['config_json'])) !== 0) {
                    $popupListItemObj = json_decode($popupListItem['config_json'], true);
                    $popupModuleList = $popupListItemObj['moduleList'];
                    if ($popupModuleList  && count($popupModuleList) > 0) {
                        foreach ($popupModuleList as $popupData) {
                            require 'popup/index.ctp';
                        }
                    }
                }
            }
            ?>
        </div>
        <div class="sidebar-list">
            <?php
            if ($config_json['props']) {
                $configProps = $config_json['props'];
                if ($configProps['sidebarViewId'] && $configProps['sidebarStatus'] != '0') {
                    $sidebarInfo = $this->Base->getWebsiteConfig($configProps['sidebarViewId']);
                    if ($sidebarInfo['config_json'] && count(json_decode($sidebarInfo['config_json'])) !== 0) {
                        $sidebarViewId = $configProps['sidebarViewId'];
                        $sidebarTemp = json_decode($sidebarInfo['config_json'], true);
                        $sidebarData = $sidebarTemp['moduleList'][0];
                        
                        require 'sidebar/index.ctp';
                    }
                }
            }
            ?>
        </div>
    </div>
    <script>
        var pageKind = "<?php echo $pageKind ?>";
        var sitePreview = "<?php echo $sitePreview ?>";
        var hostDomain = "//<?php echo $_SERVER['HTTP_HOST']; ?>";
    </script>
    <script type="text/javascript" src="//dl.gamdream.com/activity/storm/legend/js/jquery.min.js"></script>
    <script src="//dl.gamdream.com/idfe/leda/js/lodash.min.js"></script>
    <script src="//dl.gamdream.com/idfe/leda/js/velocity.min.js"></script>
    <script src="//dl.gamdream.com/idfe/leda/js/velocity.ui.min.js"></script>
    <script src="//dl.gamdream.com/activity/storm/mob100/js/swiper.min.js"></script>
    <script src="//dl.gamdream.com/idfe/leda/js/template-web.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=7ae13368159d6a513eaa7a17b9413b4b"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST']; ?>/static/dist/js/index.bundle.js?v=20210826"></script>
</body>

</html>