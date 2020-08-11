<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <?php
        $this->Website->init();
        echo '<title>'.GET_BLOCK('web_title').'</title>';
        echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
        echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php BASE_URL() ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php BASE_URL() ?>/favicon.ico">
</head>

<body>
<script>
    location.href = 'https://idreamsky.m.zhiye.com';
</script>
</body>
</html>