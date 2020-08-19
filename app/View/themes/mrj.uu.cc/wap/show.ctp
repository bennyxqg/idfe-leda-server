<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="viewport" content="width=480, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <script type="text/javascript">
        if(navigator.userAgent.indexOf('Android') > -1){
            var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
            var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
            document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
        }
    </script>
    <link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap">
    <ul class="download clearfix">
        <?php require "_download.ctp";?>
    </ul>
    <div class="ny_news">
        <?php
        switch ($result["News"]["news_categories_id"]){
            case 38:
                $url=$this->Base->getNewsUrl(38);
                $content="新闻";
                break;
            case    40:
                $url=$this->Base->getNewsUrl(40);
                $content="活动";
                break;
            case    42:
                $url=$this->Base->getNewsUrl(40);
                $content="公告";
                break;
            default:
                $url=$this->Base->getNewsUrl(38);
                $content="新闻";
                break;
        }
        ?>
        <h3><span>您的位置：<a href="/">首页</a> ><a href="<?php echo $url;?>">
                    <?php echo $content;?>列表</a>>新闻正文</span></h3>
        <div class="tit">
            <h2><?php echo $result["News"]["title"];?></h2>
            <h5>
                <span>作者：meirenji</span>
                <span>时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></span>
                <span>分享：</span>
                <!-- JiaThis Button BEGIN -->
                <div class="jiathis_style" style="display:inline-block;vertical-align:middle;margin-top:-3px;">
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_tqq"></a>
                    <a class="jiathis_button_qzone"></a>
                    <a class="jiathis_button_renren"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a href="//www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                </div>
                <script type="text/javascript" src="//v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                <!-- JiaThis Button END -->
            </h5>
        </div>
        <div class="txt">
            <p> <?php echo $result["News"]["content"]?></p>
        </div>
        <div class="goIndex"><a href="/">返回首页</a></div>
        <!-- <div class="goTop"><a href="#goTop">goTop</a></div> -->
    </div>
    <div class="clearfix">
        <div class="wxin fl">
            <h3>官方微信</h3>
            <button>关注有礼</button>
            <div><img src="<?php echo $full_base_url ?>/images/wrap/wxin.png" alt=""></div>
            <p>公众号：meirenjisy</p>
        </div>
        <div class="wbo fr">
            <h3>官方微博</h3>
            <button>关注有礼</button>
            <div class="share">
                <a title="分享到新浪微博" href="//weibo.com/meirenjisy" class="sina fl">新浪微博</a>
                <a title="分享到腾讯微博" href="//t.qq.com/meirenjisy/follower" class="tx fr">腾讯微博</a>
            </div>
        </div>
    </div>
    <?php require "_footer.ctp"; ?>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
window.onload = function(){
    gotoTop();
}
function gotoTop(min_height){
    var gotoTop_html = '<div id="gotoTop">&nbsp;</div>';      
    $("body").append(gotoTop_html);    
    $("#gotoTop").click(function(){
        $('html,body').animate({scrollTop:0},300);   
    }).hover(function(){
        $(this).addClass("hover");
    },function(){
        $(this).removeClass("hover");    
    });       
    min_height ? min_height = min_height : min_height = 600;    
    $(window).scroll(function(){    
        var s = $(window).scrollTop();         
        if( s > min_height){            
            $("#gotoTop").fadeIn(100);        
        }else{           
        $("#gotoTop").fadeOut(200);        
        };    
    });
};
//处理图片缩放问题
$(function(){
    $('.txt img').each(function () {
        var firstwidth = $(".txt");
        var ratio = 0;  // 放大比例  
        var width = $(".txt img").width();
        var height = $(".txt img").height();
        ratio = firstwidth / width;
        width = width * ratio;
        height = height * ratio;
        $(".txt img").css("width", width);
        $(".txt img").css("height", height);
    }); 
})
</script>
</body>
</html>