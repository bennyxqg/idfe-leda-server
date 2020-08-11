<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
require_once "include.php";
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/style.css?v=293" />
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/jquery.fullpage.min.css?v=24" />
<link rel="stylesheet" type="text/css" href="<?php BASE_URL() ?>css/swiper.min.css" />
<link rel="shortcut icon" href="//wxt.uu.cc/wxt.uu.cc/favicon.ico">

<style type="text/css">
        html, body
        {
            margin: 0px 0px;
            width: 100%;
            height: 100%;
        }
        iframe
        {
            margin: 0px 0px;
            width: 100%;
            height: 100%;
        }
    </style>

    <script type="text/javascript">
        function iframeHeight() {
            document.getElementById('iframeId').height="100%";
        }
    </script>

</head>

<body>
<?php echo GET_BLOCK('baidu_tongji'); ?>
</body>

<script>
window.location.href="http://5.uu.cc/home";
</script>
</html>
