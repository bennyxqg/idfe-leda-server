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
<link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico">
</head>

<body>

<?php require_once '_top.ctp';?>
<div class="pageBanner">

</div>
<div class="pageMain clearfix">
    <div class="subHead">
        <?php
            $config = array(
                1 => array('新闻','公告','攻略'),
                2 => array('新闻'),
                3 => array('公告'),
                4 => array('攻略'),
                // 4 => array('活动'),
                // 5 => array('媒体')
            );
            if($category_id == 1 || $category_id == 2 || $category_id == 3 || $category_id == 4 || $category_id == 5){
        ?>
            <div class="title"><img src="<?php FILE_PATH() ?>/img/newsTitle.png" alt="新闻"></div>
        <?php }elseif($category_id == 3){?>
            <div class="title"><img src="<?php FILE_PATH() ?>/img/guide.png" alt="攻略"></div>
       <?php
            }
        ?>
        <?php
            if($category_id == 1 || $category_id == 2 || $category_id == 3 || $category_id == 4){
             $_class = "active";
        ?>
        <ul>
            <li class="<?php if($category_id == 1) echo "active";?>"><a href="//doomsday.uu.cc/news/1.html">综合</a></li>
            <li class="<?php if($category_id == 2) echo "active";?>"><a href="//doomsday.uu.cc/news/2.html">新闻</a></li>
            <li class="<?php if($category_id == 3) echo "active";?>"><a href="//doomsday.uu.cc/news/3.html">公告</a></li>
            <li class="<?php if($category_id == 4) echo "active";?>"><a href="//doomsday.uu.cc/news/4.html">攻略</a></li>
            <!--<li class="<?php if($category_id == 4) echo "active";?>"><a href="//doomsday.uu.cc/news/4.html">活动</a></li>
            <li class="<?php if($category_id == 5) echo "active";?>"><a href="//doomsday.uu.cc/news/5.html">媒体</a></li>-->
        </ul>
        <?php
            }
        ?>
    </div>

    <?php require_once '_left.ctp';?>
    <div style="min-height:800px;height:600px;height:auto!important;">
        <ul class="list">
            <?php
                SHOW_NEWS('<li><a href="@@URL@@" target="_blank"><div><span>@@CATEGORY_NAME@@</span><i></i><h3>@@DATE@@ &nbsp;@@TITLE@@</h3><p>@@DESCRIPTION@@</p></div></a></li>','m-d',$config[$category_id],5,$page,array('LimitFrom'=>0));
                ?>
        </ul>
    </div>
    <div class="pages">
       <?php
            SHOW_PAGINATION2($config[$category_id],5,array("pageId"=>$category_id),$page);
       ?>
    </div>


</div>
<?php require_once '_footer.ctp';?>

<script src="http://dl.gamdream.com/market/resource/js/jquery-1.9.1.js" type="text/jscript"></script>

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
