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
<link href="<?php FILE_PATH() ?>/css/newStyle.css?v=2017fasdf915" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>

<?php require_once '_top.ctp';?>
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
    <<?php require_once '_left.ctp';?>
</div>
<?php require_once '_footer.ctp';?>
<script src="<?php FILE_PATH() ?>/js/jquery-1.11.3.min.js" type="text/jscript"></script>

<!--<script src="<?php BASE_URL() ?>js/pic-slide.js" type="text/jscript"></script>-->
<script type="text/javascript">
function getStyle(obj, name)
{
    if(obj.currentStyle)
    {
        return obj.currentStyle[name];
    }else
    {
        return getComputedStyle(obj, false)[name];
    }
}
//var alpha = 30;
function startMove(obj, arr, iTarget,fn)
{
    clearInterval(obj.timer);

    obj.timer=setInterval(function (){
        var cur=0;
        if(arr=='opacity'){
            cur=Math.round(parseFloat(getStyle(obj, arr))*100);
        }else{
            cur=parseInt(getStyle(obj, arr));
        }
        var speed=(iTarget-cur)/6;
        speed=speed>0?Math.ceil(speed):Math.floor(speed);
        if(cur==iTarget){
            clearInterval(obj.timer);
            if (fn) {fn()};
        }else{
            if(arr=='opacity')
            {
                obj.style.filter='alpha(opcity:'+(cur+speed)+')';
                obj.style.opacity=(cur+speed)/100;

            }else
            {
                obj.style[arr]=cur+speed+'px';
            }
        }
    }, 30);
}

//微信
var wxin_dl = $(".wxin");
var wxin_pd = $(".wxin_pop");
var qqun_dl = $(".qqun");
var qqun_pd = $(".qq_pop");
wxin_dl.hover(function() {
    wxin_pd.addClass("wxin_pop_show");
}, function() {
    wxin_pd.removeClass("wxin_pop_show");
});
qqun_dl.hover(function() {
    qqun_pd.addClass("wxin_pop_show");
}, function() {
    qqun_pd.removeClass("wxin_pop_show");
});
var qrCodeBox = document.querySelector('.left');
var download_game = document.querySelector('.download_game');
var oClose = document.querySelector('.left .close');
oClose.onclick=function(){
    startMove(qrCodeBox,'right',-334,function(){
        startMove(download_game,'right',0,function(){
            // alert('完了！')
        })
    });
};
download_game.onclick=function(){
    startMove(download_game,'right',-75,function(){
        startMove(qrCodeBox,'right',0,function(){
            // alert('完了！')
        })
    });
};
</script>
</body>
</html>
