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
<link href="<?php FILE_PATH() ?>/css/style.css?v=2017fasdf915" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body style="background:url('<?php FILE_PATH() ?>/images/news_bg.jpg')">
<div class="pageBanner">

</div>
<div class="pageMain clearfix">
    <div class="subHead">
        <h2><?php SHOW_CURRENT_NEWS_INFO('title') ?></h2>
        <p class="notes"><?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></p>
    </div>
    <div class="text_box">
          <?php SHOW_CURRENT_NEWS_INFO('content') ?>
    </div>
</div>
<?php require_once '_footer.ctp';?>

<!--<script src="<?php BASE_URL() ?>js/pic-slide.js" type="text/jscript"></script>-->
<script type="text/javascript">


//微信
// var wxin_dl = $(".wxin");
// var wxin_pd = $(".wxin_pop");
// var qqun_dl = $(".qqun");
// var qqun_pd = $(".qq_pop");
// wxin_dl.hover(function() {
//     wxin_pd.addClass("wxin_pop_show");
// }, function() {
//     wxin_pd.removeClass("wxin_pop_show");
// });
// qqun_dl.hover(function() {
//     qqun_pd.addClass("wxin_pop_show");
// }, function() {
//     qqun_pd.removeClass("wxin_pop_show");
// });

</script>
</body>
</html>
