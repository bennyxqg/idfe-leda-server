<!doctype html>
<html>
<head>
<meta charset="utf-8">
<META HTTP-EQUIV="Pragma"CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control"CONTENT="no-cache">
<META HTTP-EQUIV="Expires"CONTENT="0">
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'">';
?>
<link rel="stylesheet" href="<?php BASE_URL() ?>home/css/style.css?v=20171120" />
<link rel="shortcut icon" href="//sds.uu.cc/sds.uu.cc/favicon.ico">
</head>

<body>

<div class="menu_top">
    <div class="wrap">
        <a href="/home" target="_self">官网首页<em>HOME</em><span></span></a>
        <a href="<?php CATEGORY_URL('新闻') ?>" target="_self">新闻公告<em>NEWS</em><span></span></a>
        <a class="home_logo" href="/home" target="_self"><span></span></a>
        <a href="http://bbs.uu.cc/forum-345-1.html" target="_blank">游戏攻略<em>DATA</em><span></span></a>
        <a href="<?php BLOCK('forum_url') ?>" target="_self">官方论坛<em>BBS</em></a>
    </div>
</div>
<div class="main1">
    <div class="wrap">
        <div class="fl pr down_box margin300">
            <img src="<?php BLOCK('game_download_qrcode') ?>" />
            <a class="az_down" href="<?php BLOCK('android_download_url') ?>" target="_blank"></a>
            <a class="ios_down" href="<?php BLOCK('ios_download_url') ?>" target="_blank"></a>
        </div>
        <div class="fl switch margin300 ">
            <ul class="runContent">
            <?php
            SHOW_DATAS('<li><a href="@@STR2@@"><img src="@@STR1@@" /></a></li>','m-d',8,3,1,array('OrderBy'=>'`int1` asc'));
            ?>

            </ul>
            <ul class="triggers">
            <?php
            SHOW_DATAS('<li @@FIRST_CONTENT1@@>@@LABEL@@</li>','m-d',8,3,1,array('OrderBy'=>'`int1` asc','FirstContent1'=>'class="cur"'));
            ?>
            </ul>
        </div>

    </div>
</div>
<div class="index_main">
    <div class="wrap">
        
        <div class="main_con">
            <div class="fl guide">
                <h2 class="tit">新手指导<em></em></h2>
                <ul>
                <?php
                SHOW_DATAS('<li><a href="@@STR2@@" target="_blank">@@LABEL@@</a></li>','m-d',3,8,1,array('OrderBy'=>'`int1` asc'));
                ?>
                </ul>
            </div>
            <div class="fl news_box tab">
                <div class="pr news_tab">
                    <ul class="tab_hd">
                        <li class="on">综合<span></span></li>
                        <li>新闻<span></span></li>
                        <li>公告<span></span></li>
                        <li>活动<span></span></li>
                        <li>攻略<span></span></li>
                    </ul>
                    <a class="pa news_more" href="/news/0"></a>
                </div>
                <div class="news_con">
                    <div class="tab_con">
                        <!--<div class="news_top"><a href="#link" target="_blank">摄取充足发展资源《乱斗之王》英雄无敌玩法详解</a></div>-->
                        <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d',array('新闻','公告','活动','攻略'),5,1,array());
                        ?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <!--<div class="news_top"><a href="#link" target="_blank">摄取充足发展资源《乱斗之王》英雄无敌玩法详解</a></div>-->
                        <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','新闻',5,1,array());
                        ?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <!--<div class="news_top"><a href="#link" target="_blank">摄取充足发展资源《乱斗之王》英雄无敌玩法详解</a></div>-->
                        <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','公告',5,1,array());
                        ?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <!--<div class="news_top"><a href="#link" target="_blank">摄取充足发展资源《乱斗之王》英雄无敌玩法详解</a></div>-->
                        <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','活动',5,1,array());
                        ?>
                        </ul>
                    </div>
                    <div class="tab_con">
                        <!--<div class="news_top"><a href="#link" target="_blank">摄取充足发展资源《乱斗之王》英雄无敌玩法详解</a></div>-->
                        <ul>
                        <?php
                        SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a><span>@@DATE@@</span></li>','m/d','攻略',5,1,array());
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="fr data_link" href="<?php BLOCK('pc_home_link_url') ?>" target="_blank"><img src="<?php CDN_BASE_URL() ?>home/images/img_links1.jpg" /></a>
        </div>

        <div class="main_con">
            <div class="slide">
                <ul class="clearfix">
                    <li class="p1 cur" style="width:484px;">
                        <span style="display:none;"><img src="<?php CDN_BASE_URL() ?>home/images/slide1.jpg" /></span>
                        <img src="<?php CDN_BASE_URL() ?>home/images/slide_01.jpg" alt="">
                    </li>
                    <li class="p2">
                        <span><img src="<?php CDN_BASE_URL() ?>home/images/slide2.jpg" /></span>
                        <img src="<?php CDN_BASE_URL() ?>home/images/slide_02.jpg" alt="">
                    </li>
                    <li class="p3">
                        <span><img src="<?php CDN_BASE_URL() ?>home/images/slide3.jpg" /></span>
                        <img src="<?php CDN_BASE_URL() ?>home/images/slide_03.jpg" alt="">
                    </li>
                    <li class="p4">
                        <span><img src="<?php CDN_BASE_URL() ?>home/images/slide4.jpg" /></span>
                        <img src="<?php CDN_BASE_URL() ?>home/images/slide_04.jpg" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <div class="main_con">
            <div class="fl vedio_pic">
                <a href="<?php CATEGORY_URL('精彩视频','vedio') ?>" target="_blank"><img src="<?php CDN_BASE_URL() ?>home/images/img_links2.jpg" /></a>
                <a href="<?php CATEGORY_URL('游戏截图','pic') ?>" target="_blank"><img src="<?php CDN_BASE_URL() ?>home/images/img_links3.jpg" /></a>
            </div>
            <div class="fr data_nav">
                <h2 class="tit">游戏资料<em></em></h2>
                <a class="tit_more" href="#link" target="_blank" title="更多"></a>
                <div class="data_nav_con">
                    <h2>系统</h2>
                    <ul class="data_list1">
                    <?php
                    SHOW_DATAS('<li><a href="@@STR2@@" target="_blank">@@LABEL@@</a></li>','m-d',7,32,1,array('OrderBy'=>'`int1` asc','Condition'=>'`int2`=0'));
                    ?>
                    </ul>
                    <h2>活动</h2>
                    <ul>
                    <?php
                    SHOW_DATAS('<li><a href="@@STR2@@" target="_blank">@@LABEL@@</a></li>','m-d',7,32,1,array('OrderBy'=>'`int1` asc','Condition'=>'`int2`=1'));
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("_footer.ctp"); ?>

<div class="div_pop">
    <a class="go_top" href="javascript:;"></a>
    <img class="wx_code" src="<?php BLOCK('weixin_qrcode') ?>" />
    <p class="qqun">①群：<?php BLOCK('qq_group1') ?><br>②群：<?php BLOCK('qq_group2') ?></p>
</div>

<script type="text/javascript" src="<?php BASE_URL() ?>home/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL() ?>home/js/switch.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
/* 图片切换*/
$(".switch").Switch({
    moveInterval:300,
    interval:5000,
    direction:"alpha",
    handle:".triggers"
});

/*tab 选项卡*/
$('.tab').each(function(){
    var _this = $(this);
    _this.find('.tab_hd').eq(0).find('li').each(function(i){
        if(i==0){
            $(this).addClass('on');
            _this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
        }
        $(this).hover(function(){
            $(this).siblings('li').removeClass('on');
            $(this).addClass('on');
            _this.find('.tab_con').eq(i).show().siblings('.tab_con').hide();
        })
    })
})

/*五屏切换*/
$(".slide").find("li").click(function(){
    if($(this).hasClass("cur")){return false;}
    var li = $(this);
    sibling = li.siblings();
    li.find("span").fadeOut(200,function(){
        li.animate({"width":"484px"},500,function(){
            li.addClass("cur");
        });
        sibling.animate({"width":"167px"},500,function(){
            sibling.removeClass("cur");
            sibling.find("span").fadeIn(200);
        });
    });
});
$(document).ready(function(){



    $(".yuyue_ipt").focus(function () { $(this).css("background", "none"); }).blur(function () { $(this).css("background", ""); })

    var phone;
    var myreg = /^1[34578]\d{9}$/;
    $('.yuyue_btn').click(function(){
        phone = $('.yuyue_ipt').val();

        if(phone == ''){
            alert('请输入手机号哦！');
            }else{
            if(!myreg.exec(phone)){
                alert('您输入的手机号码不对哦！');
                }else{
                    $.ajax({
                    type:"POST",
                    url:"/collect_phone",
                    data:{phone:phone,collect_name:68},
                    dataType:"json",
                    success:function(res){
                        if(res.ret == 2){
                            alert("您已经参加过预约！");
                        }else if(res.ret == 0){
                            alert("您已预约成功！");
                        }else{
                            alert("预约失败！");
                        }
                  }
            });
            }
        }
    })

    //向上滚动
    var $this = $(".scroll_msg");
    var scrollTimer;
    $this.hover(function(){
          clearInterval(scrollTimer);
     },function(){
       scrollTimer = setInterval(function(){
                     scrollNews( $this );
                }, 1500 );
    }).trigger("mouseout");

    function scrollNews(obj){
       var $self = obj.find("ul:first");
       var lineHeight = $self.find("li:first").height();
       $self.animate({ "margin-top" : -lineHeight +"px" },500 , function(){
             $self.css({"margin-top":"0px"}).find("li:first").appendTo($self);
       })
    }

    //提交留言
    $('.msg_btn').click(function(){
        msgContent = encodeURI($('.msg_inpt').val());

        if(msgContent == ''){
            alert('请输入留言内容！');
            }else{
            $.ajax({
                type:"POST",
                url:"//sds.uu.cc/manage/index.php",
                data:{r:'collect',action:'sds_comment',content:msgContent},
                dataType:"json",
                success:function(res){
                    if(res.ret !== 0){
                      alert("留言失败！");
                    }
                }
            });
        }
    })

    $(".go_top").click(function() {
        $("body,html").animate({scrollTop:0},500);
    });

})


</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?de64d2f7cefe742c2e593b9bfac2caab";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
