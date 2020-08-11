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
<link href="<?php FILE_PATH() ?>/css/newStyle.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>

<?php require_once '_top.ctp';?>
<div class="pageBanner">

</div>
<div class="pageMain clearfix">
    <div class="subHead">
        <div class="title"><img src="<?php FILE_PATH() ?>/img/video_title.png" alt="视频"></div>
    </div>

    <?php require_once '_left.ctp';?>
    <div style="min-height:600px;height:600px;height:auto!important;" class="video_box">
        <ul class="video_list">
            <?php
                SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="372" height="284" /><div></div></a><p>@@STR3@@</p></li>',
                'Y-m-d',1);
                 ?>
        </ul>
    </div>
</div>
<?php require_once '_footer.ctp';?>
<div class="s_p_k" style="display: none;"><video width="700" style="background:#000;" height="400" autoplay="" poster="" controls="" src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>
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
    $('.subHead ul li').on('click',function(){
        $('.subHead ul li').removeClass('active');
        $('.subHead ul li').eq($(this).index()).addClass('active');
    })

    //页面视频
    $('.video_btn_link').click(function(){
        var vedioSrc = this.name;
        $('.s_p_k video').attr('src',vedioSrc);
        $('.mask').show();
        $('.s_p_k').show();
    })

    $('.close').click(function(){
        $('.s_p_k video').attr('src','');
        $('.s_p_k').hide();
        $('.gift_pop').hide();
        $('.pic_slide').hide();
        $('.mask').hide();
    })

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
