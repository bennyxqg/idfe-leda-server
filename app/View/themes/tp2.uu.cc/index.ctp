<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>

    <link rel="shortcut icon" href="<?php BASE_URL() ?>favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php BASE_URL() ?>css/minimalist.css" type="text/css" />
    <script type="text/javascript" src="/js/edata.js"></script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</head>

<body>
<div class="header">
    <div class="banBox">
        <div class="syBanner"><img src="<?php echo GET_BLOCK('pc_index_banner'); ?>" width="1920" height="565" border="0"></div>
        <div class="top_db">
            <div class="dbox">

                <div class="ss info" id="info_sq">
                    <h2>神庙逃亡2</h2>
                    <p><?php echo mb_substr(GET_BLOCK('game_description'),0,40,'utf-8')?>......</p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2>神庙逃亡2</h2>
                    <p><?php BLOCK('game_description') ?></p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>

                <div class="download">
                <a class="sToEdata" href="<?php BLOCK('android_download_url') ?>"><img class="d_img" src="//tp2.uu.cc/tp2.uu.cc/images/az.png" alt="安卓下载"></a>
                <a class="sToEdata" href="<?php BLOCK('ios_download_url') ?>"><img class="d_img" src="//tp2.uu.cc/tp2.uu.cc/images/ios.png" alt="ios下载"></a>
                    <span><img alt="" src="<?php BLOCK('game_download_qrcode') ?>" style="width: 100px; height: 100px;" /></span>
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon"><img src="<?php BLOCK('game_icon') ?>" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <ul class="runContent" id="index_loop_img">
            <?php
            SHOW_LIST_FROM_DATAS('<li><a href=""><img src="@@VALUE@@" /></a></li>',0,'PC端主页轮播图',array('str1','str2','str3','str4','str5','str6','str7','str8'));
            ?>
            </ul>
            <ul class="triggers" id="index_loop_img_triggers">
            </ul>
        </div>

        <div class="news fr">
            <ul class="tab-hd clearfix">
                <li class="cur">新闻<em></em></li>
                <li>活动<em></em></li>
                <li>攻略<em></em></li>
            </ul>
            <div class="tabCons">
                <div class="tab-con" style="display:block;">
                    <ul class="newslist">
                    <?php
                        SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@<img src="//tp2.uu.cc/tp2.uu.cc/images/hot.png" alt=""></a></li>','m/d','新闻',5,$page,array());
                    ?>
                    </ul>
                    <div class="more"><a href="<?php CATEGORY_URL('新闻') ?>" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                    <?php
                        SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@<img src="//tp2.uu.cc/tp2.uu.cc/images/hot.png" alt=""></a></li>','m/d','活动',5,$page,array());
                    ?>
                    </ul>
                    <div class="more"><a href="<?php CATEGORY_URL('活动') ?>" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                    <?php
                        SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong>@@TITLE@@<img src="//tp2.uu.cc/tp2.uu.cc/images/hot.png" alt=""></a></li>','m/d','攻略',5,$page,array());
                    ?>
                    </ul>
                    <div class="more"><a href="<?php CATEGORY_URL('攻略') ?>" target="_blank">更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
             <li><a href="<?php CATEGORY_URL('活动') ?>" target="_blank"><img src="<?php BASE_URL() ?>images/tp1.jpg" alt="最新活动"></a></li>
             <li><a href="<?php CATEGORY_URL('攻略') ?>" target="_blank"><img src="<?php BASE_URL() ?>images/tp2.jpg" alt="大神攻略"></a></li>
             <li><a href="<?php CATEGORY_URL('XXX','picture') ?>" target="_blank"><img src="<?php BASE_URL() ?>images/tp3.jpg" alt="精彩截图"></a></li>
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="<?php BLOCK('weibo_url') ?>" target="_blank">
                <h4>官网微博</h4>
                <p>收听官网微博，了解游戏动态</p>
            </a>
        </div>
        <div class="wBox fl" id="wx">
            <div class="lbox wx" id="wbox1">
                <h4>官网微信</h4>
                <p>收听官网微信，获得第一手游戏咨询</p>
            </div>
            <div class="lbox" id="wbox2">
                <h4>如何关注<span>神庙逃亡2</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span><?php BLOCK('weixin_account') ?></span></p>
                <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <ul>
                <?php
                SHOW_DATAS('<li><a href="@@STR1@@" target="_blank">@@LABEL@@</a></li>','m-d',1,50,0,array('OrderBy'=>'`int1` asc'));
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once("_footer.ctp");?>
<script type="text/javascript" src="<?php BASE_URL() ?>js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/cookie.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>js/switch.js"></script>
<script type="text/javascript">
function AutoScroll(obj){
    $(obj).find("ul:first").animate({
            marginTop:"-30px"
    },500,function(){
            $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
    });
}
$(document).ready(function(){
    sToEdata();
    $(".sToEdata").click(function(){
       sToEdata("download");
    });
    //轮播图
    var isFirst=true;
    $("#index_loop_img li").each(function(){
        if(isFirst)
        {
            $("#index_loop_img_triggers").append('<li class="cur"></li>');
            isFirst=false;
        }
        else
        {
            $("#index_loop_img_triggers").append('<li></li>');
        }
    });

    //顶部滚动新闻
    setInterval('AutoScroll("#note")',2000);

    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        });
    });

    //模拟下拉框
    $(function(){
        var zIndex = 99;
        $('div.select').each(function(i){
            var _this = $(this);
            zIndex = zIndex - i;
            $(this).css('z-index',zIndex);
            _this.hover(
                function(){$(this).find('ul').stop(true,true).animate({ height: 'show'},400)},
                function(){$(this).find('ul').stop(true,true).animate({ height: 'hide'},1)}
            );
            _this.find('li').click(function(){
                _this.find('h4').text($(this).text());
                _this.find('input').eq(0).val($(this).attr('alt'));
                _this.find('ul').hide();
            });
        });
    });

    //展开详细信息
    $('#btn_zk').click(function(){
        $(this).parent().hide();
        $('#info_zk').show();
    });
    $('#btn_sq').click(function(){
        $(this).parent().hide();
        $('#info_sq').show();
    });

    /* 图片切换*/
    $(".switch").Switch({
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

    //微信
    $("#wx").hover(function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right: 0},400);
        $(this).children("#wbox1").animate({left: -360},400);
    },function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right:-360},400);
        $(this).children("#wbox1").animate({left: 0},400);
    });
});
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js?v=20190227"></script>
</body>
</html>