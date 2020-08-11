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
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
<style type="text/css">
body{background:#000;text-align:center;vertical-align: middle;}
video{width: 100%;vertical-align: middle;}
</style>
</head>
<body>
<?php
 if(!empty($page)){
     $data = SHOW_ONE_DATA((int)$page);
     if(!empty($data)){
?>
 <video controls="" autoplay="" name="media">
    <source src="<?php echo $data["str1"]; ?>" type="video/mp4">
</video>
<?php }} ?>

</body>
</html>
