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

<link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico" />
<meta name="baidu-site-verification" content="wkFtx4mgS4" />
<link rel="stylesheet" href="<?php FILE_PATH() ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php FILE_PATH() ?>/css/minimalist.css" type="text/css" />
    <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
<div class="header">
    <div class="banBox">
        <div class="syBanner">
            <?php
                SHOW_DATAS('<img src="@@STR1@@" style="height: 516px; width: 1920px">','m/d',5,1,0,array());
            ?>
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2>地铁跑酷</h2>
                    <p>
                    <?php BLOCK('game_description_simple') ?>
                    </p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2>地铁跑酷</h2>
                    <p>
                    <?php BLOCK('game_description_detail') ?>
                    </p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>
                <div class="download">
                    <a href="<?php BLOCK('android_download_url') ?>"><img alt="" src="<?php FILE_PATH() ?>/images/download.png" style="height: 119px; width: 328px" /></a>
                    <img alt="" src="<?php BLOCK('qrcode_download') ?>" style="width: 120px; height: 120px;" />&nbsp;
                </div>
                <div class="icon">
                    <img alt="" src="<?php BLOCK('game_icon') ?>" style="width: 149px; height: 149px;">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content index_con">
    <div class="clearfix">
        <div class="switch fl">
            <?php $image_list=$this->PK->topData();?>
            <ul class="runContent" id="loop_img">
            <?php
                SHOW_DATAS('<a href="@@STR2@@" target="_blank"><img alt="" title="" src="@@STR1@@"/></a>','m/d',0,20,0,array('OrderBy'=>'`int1` asc'));
               ?>
            </ul>
            <ul class="triggers" id="loop_img_triggers">
            </ul>
        </div>
        <div class="news fr">
            <ul class="tab-hd clearfix">
                <li class="cur">新闻<em></em></li>
                <li>活动<em></em></li>
                <li>攻略<em></em></li>
            </ul>






        <div class="tabCons">

               <div class="tab-con" style="display: block;">
                <ul class="newslist">
                <?php
                    SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ <img src="//pao.uu.cc/pao.uu.cc//images/hot.png" alt=""></a></li>','m-d','地铁新闻',5,$page,array());
                ?>
                </ul>
                <div class="more"><a href="<?php CATEGORY_URL('地铁新闻') ?>" target="_blank">更多</a></div>
            </div>

            <div class="tab-con">
                <ul class="newslist">
                <?php
                    SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ <img src="//pao.uu.cc/pao.uu.cc//images/hot.png" alt=""></a></li>','m-d','地铁活动',5,$page,array());
                ?>
                </ul>
                <div class="more"><a href="<?php CATEGORY_URL('地铁活动') ?>" target="_blank">更多</a></div>
            </div>

            <div class="tab-con">
                <ul class="newslist">
                <?php
                    SHOW_NEWS('<li><span>@@DATE@@</span><a href="@@URL@@" target="_blank"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ <img src="//pao.uu.cc/pao.uu.cc//images/hot.png" alt=""></a></li>','m-d','地铁攻略',5,$page,array());
                ?>
                </ul>
                <div class="more"><a href="<?php CATEGORY_URL('地铁攻略') ?>" target="_blank">更多</a></div>
            </div>

           </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
            <?php
                SHOW_DATAS('<li><a href="@@STR2@@" target="_blank"><img src="@@STR1@@" alt=""></a></li>','m/d',1,3,0,array());
            ?>
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
                <h4>如何关注<span>地铁跑酷</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span><?php BLOCK('weixin_account') ?></span></p>
                <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <ul style="display: none;">
                <?php
                    SHOW_DATAS('<li><a href="@@STR1@@">@@LABEL@@</a></li>','m/d',2,50,0,array());
                ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="wxbox">
        <img src="<?php BLOCK('weixin_qrcode') ?>" alt="">
        <p>扫描关注微信公众号</p>
    </div>
</div>

<?php require_once 'footer.ctp';?>
<!-- <div class="popup">
    <div class="mask"></div>
    <?php $first_img=$this->Pk->img_list('first_1');?>
    <div class="video">
        <div class="vBox">
            <embed src="<?php if (!$videoLink):?>/player.youku.com/player.php/sid/XODU0OTEyNzQw/v.swf<?php else : echo $videoLink; endif;?>" allowFullScreen="true" quality="high" width="730" height="450" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        </div>
        <?php if($first_img){?>
        <img src="/uploads/<?php echo $first_img[0]['big_url'];?>" alt="">
        <?php }else{?>
        <img src="<?php echo $full_base_url;?>/images/video.jpg" alt="">
        <?php }?>
        <a href="javascript:;" class="close"></a>
    </div>
</div> -->
<script type="text/javascript" src="<?php FILE_PATH() ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php FILE_PATH() ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php FILE_PATH() ?>/js/switch.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    var isFirst=true;
    $("#loop_img a").each(function(){
        if(isFirst)
        {
            $("#loop_img_triggers").append('<li class="cur"></li>');
            isFirst=false;
        }
        else
        {
            $("#loop_img_triggers").append('<li></li>');
        }
    });



    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        });
    });

    //视频
    $(".mask").height($(document).height());
    $(".close").click(function(){
        $(".popup").hide();
    });
    $(".video").find("img").click(function(){
        $(this).hide().siblings(".vBox").show();
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

     //右侧微信
    var elm = $('.wxbox');
    var startPos = $(elm).offset().top;
    $.event.add(window, "scroll", function(){
        var p = $(window).scrollTop();
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute');
        $(elm).css('top',((p) > startPos) ? '0px' : '');
    });

    //短链监控 修改成监控下载链接
    var url=window.location.href;
    var args = url.split("=");
    var downLink = $(".download a")
    if(args.length > 1){
        var keyWords = args[1];
        if(keyWords == "ppc"){
            downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N00002.apk');
        }else if(keyWords == "tty"){
            downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N40009.apk');
        }else if(keyWords == "byc1"){
            downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N40011.apk');
        }else if(keyWords == "byc2"){
            downLink.attr('href','//dl.uu.cc/idreamsky/SubwaySurf-Free-75_v2.31.0_s2.4.2.1_p3.2.0.17_BD0S0N40012.apk');
        }
    }
});
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js?v=20190227"></script>
</body>
</html>