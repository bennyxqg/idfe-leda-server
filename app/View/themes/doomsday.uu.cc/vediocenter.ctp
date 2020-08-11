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
<link rel="stylesheet" type="text/css" href="<?php FILE_PATH() ?>/css/lightbox.css" />
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<?php require_once '_top.ctp';?>
<div class="pageBanner">

</div>
<div class="video_page clearfix">
    <div class="subHead">
        <div class="title"><img src="<?php FILE_PATH() ?>/img/newsTitle2.png" alt="新闻"></div>
        <!--<div class="btn_list">
            <a href="/vediocenter/1.html" class="<?php if ($type == 1){echo 'on';}?>">影音</a>
            <a href="/vediocenter/2.html" class="<?php if ($type == 2){echo 'on';}?>">图片</a>
        </div>-->
    </div>
    <div class="wrap">
        <ul class="<?php if ($type == 1){echo 'on';}?>">
            <?php
                SHOW_DATAS('<li><a class="video_btn_link" name="@@STR2@@"><img src="@@STR3@@" width="329" height="212" /><div></div></a><p>@@STR1@@</p></li>',
                'Y-m-d',2,9,$page);
            ?>
        </ul>
        <ul class="<?php if ($type == 2){echo 'on';}?>">
            <?php
                // SHOW_DATAS('<li><a href="@@STR2@@" data-lightbox="img-group1"><img src="@@STR1@@" /><p>@@LABEL@@</p></a></li>','Y-m-d',5,100);
                // SHOW_DATAS('<li><a class="video_btn_link" name="@@STR1@@"><img src="@@STR2@@" width="329" height="212" /></a><h3>@@INDEX@@</h3><p>@@STR3@@</p></li>',
                SHOW_DATAS('<li><a href="@@STR3@@" data-lightbox="img-group1"><img src="@@STR1@@" width="329" height="212" /><p>@@STR2@@</p></a></li>',
                'Y-m-d',3,9,$page);
            ?>
        </ul>
        <div class="pages">
            <?php
            SHOW_DATAS_PAGINATION($type,9,array('CurrentPageClass' => 'active'),$page,'vediocenter');
            ?>
        </div>
    </div>
    <?php require_once '_left.ctp';?>
    

</div>
<div class="mask"></div>

<div class="s_p_k"><video width="700" style="background:#000;" height="400" autoplay poster="" controls src="">您的浏览器不支持 video 标签。</video><a class="close"></a></div>

<?php require_once '_footer.ctp';?>

<script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>
    <script src="<?php BASE_URL() ?>/js/lightbox-2.6.min.js" type="text/jscript"></script>
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
        if(vedioSrc){
            $('.s_p_k video').attr('src',vedioSrc);
            $('.mask,.s_p_k').show();
        }else{
            alert('敬请期待！')
        }

    })
    $(".close,.mask").on("click", function(e){
        $('.s_p_k video').attr('src','');
        $('.s_p_k,.nav-list,.yuyuePop,.mask').hide();
        e.stopPropagation();
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
