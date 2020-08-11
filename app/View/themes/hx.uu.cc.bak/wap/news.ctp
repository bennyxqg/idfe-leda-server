<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>超燃系·激战卡牌《幻想之心》官网</title>
    <meta name="keywords" content="幻想之心，幻想，幻想之心官网，幻想之心手游，卡牌手游，幻想之心卡牌，幻想之心下载，幻想之心新闻，幻想之心活动"/>
    <meta name="description" content="幻想之心惊艳亮相，街机级战斗体验，创新战斗设计重新定义动作卡牌，卡牌不只站起来，还要战痛快。独创主城共享模式，支持多人在线组队PVE，和你的朋友一起告别卡牌单机时代。二次元偶像大集结，人气动漫主角等你收入麾下，征战四方。日本顶级美术团队，千张精美原画，全程美少女技能配音震撼视听。"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="viewport" content="width=640,user-scalable=no"/>
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/m.css" type="text/css"/>
    <script type="text/javascript">
    if(navigator.userAgent.indexOf('Android') > -1){
        var densitydpi = 640 / screen.width * window.devicePixelRatio * 160;
        var initialContent = 'target-densitydpi=' + densitydpi + ', width=640, user-scalable=no';
        document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
    }
    </script>
</head>
<body>
<div class="wrap" style="background:none;">
    <div class="top">
        <h1><a href="//hx.uu.cc">幻想之心</a></h1>
        <div class="lt"><a href="//bbs.uu.cc/forum-268-1.html">论坛</a></div>
        <img src="<?php echo $full_base_url ?>/images/game.png" alt="">
    </div>
    <div class="newsBox">
        <ul class="classic">
            <li class="cur"><a href="//hx.uu.cc/news/all.html">全部</a></li>
            <li><a href="//hx.uu.cc/news/54.html">公告</a></li>
            <li><a href="//hx.uu.cc/news/56.html">新闻</a></li>
            <li><a href="//hx.uu.cc/news/58.html">活动</a></li>
        </ul>
        <?php $result=$this->HX->indexInitData();?>
        <?php $id=$this->params['id'];?>
        <ul class="newslist">
            <?php if($id=='all'){?>
            <?php if($result['news']){?>
                <?php foreach($result['news'] as $key =>$value){?>
                    <li>
                        <span><?php echo date('m-d',$value['updated']);?></span>
                        <a href="/show/<?php echo $value['id'].'.html';?>"><strong>【新闻】</strong><?php echo $value['title'];?></a>
                    </li>
                <?php }?>
            <?php }?>
            <?php if($result['consulting']){?>
                <?php foreach($result['consulting'] as $gonggao){?>
                    <li>
                        <span><?php echo isset($gonggao['updated'])?date('m-d',$gonggao['updated']):'';?></span>
                        <a href="/show/<?php echo $gonggao['id'].'.html';?>"><strong>【公告】</strong><?php echo $gonggao['title'];?></a>
                    </li>
                <?php }?>
             <?php }?> 
             <?php if($result['activity']){?>
                <?php foreach($result['activity'] as $activity){?>
                    <li>
                        <span><?php echo isset($activity['updated'])?date('m-d',$activity['updated']):'';?></span>
                        <a href="/show/<?php echo $activity['id'].'.html';?>"><strong>【活动】</strong><?php echo $activity['title'];?></a>
                    </li>
                <?php }?>
             <?php }?> 
             <?php }else{?>
                <?php if($id==54){?>
                    <?php if($result['consulting']){?>
                        <?php foreach($result['consulting'] as $gonggao){?>
                            <li>
                                <span><?php echo isset($gonggao['updated'])?date('m-d',$gonggao['updated']):'';?></span>
                                <a href="/show/<?php echo $gonggao['id'].'.html';?>"><strong>【公告】</strong><?php echo $gonggao['title'];?></a>
                            </li>
                        <?php }?>
                     <?php }?> 
                <?php }?>
                <?php if($id==56){?>
                    <?php if($result['news']){?>
                        <?php foreach($result['news'] as $key =>$value){?>
                            <li>
                                <span><?php echo date('m-d',$value['updated']);?></span>
                                <a href="/show/<?php echo $value['id'].'.html';?>"><strong>【新闻】</strong><?php echo $value['title'];?></a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php }?>
                    <?php if($id==58){?>
                    <?php if($result['activity']){?>
                        <?php foreach($result['activity'] as $key =>$activity){?>
                            <li>
                                <span><?php echo date('m-d',$activity['updated']);?></span>
                                <a href="/show/<?php echo $activity['id'].'.html';?>"><strong>【活动】</strong><?php echo $activity['title'];?></a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php }?>
            <?php }?>
        </ul>
    </div>
    <div class="footer news_footer">
        <p><a href="//www.idreamsky.com/homes/customer_service">客服中心</a>| <a href="#">进入论坛</a></p>
        <p>Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</p>
        <div class="tip">抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br />适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
    </div>
</div>
<div class="popup">
    <div class="mask"></div>
    <div class="box">
        <input type="text" class="ipt" name="phone" placeholder="填写手机号码" autocomplete="off">
        <input type="submit" class="submit" value="&nbsp;" id="btn">
        <div class="close"></div>
    </div>
</div>
<div class="popTab" style="display:none;">
    <div class="mask"></div>
    <div class="box tab">
        <ul class="tab-hd clearfix">
            <li class="first"><span class="t1"></span></li>
            <li><span class="t2"></span></li>
            <li><span class="t3"></span></li>
            <li><span class="t4"></span></li>
        </ul>
        <div class="tabs">
            <div class="tab-con">
                <div class="draw_box">
                    <ul class="draw clearfix">
                        <li id="jp1">
                            <img src="<?php echo $full_base_url ?>/images/jp1.png" alt="">
                            <p>iPad mini 3</p>
                        </li>
                        <li id="jp2">
                            <img src="<?php echo $full_base_url ?>/images/jp2.png" alt="">
                            <p>谢谢参与</p>
                        </li>
                        <li id="jp3">
                            <img src="<?php echo $full_base_url ?>/images/jp3.png" alt="">
                            <p>蓝牙耳机</p>
                        </li>
                        <li id="jp4">
                            <img src="<?php echo $full_base_url ?>/images/jp4.png" alt="">
                            <p>iPhone 6</p>
                        </li>
                        <li id="jp10">
                            <img src="<?php echo $full_base_url ?>/images/jp7.png" alt="">
                            <p>充电宝</p>
                        </li>
                        <li class="blank"></li>
                        <li class="blank"></li>
                        <li id="jp5" id="jp5">
                            <img src="<?php echo $full_base_url ?>/images/jp5.png" alt="">
                            <p>触控手套</p>
                        </li>
                        <li class="zgm" id="jp9">
                            <img src="<?php echo $full_base_url ?>/images/jp6.png" alt="">
                            <p>幻想先遣团资格码</p>
                        </li>
                        <li id="jp8">
                            <img src="<?php echo $full_base_url ?>/images/jp5.png" alt="">
                            <p>触控手套</p>
                        </li>
                        <li id="jp7">
                            <img src="<?php echo $full_base_url ?>/images/jp2.png" alt="">
                            <p>谢谢参与</p>
                        </li>
                        <li class="zgm"  id="jp6">
                            <img src="<?php echo $full_base_url ?>/images/jp6.png" alt="">
                            <p>幻想先遣团资格码</p>
                        </li>
                    </ul>
                    <button id="btn_draw"></button>
                </div>
            </div>
            <div class="tab-con other clearfix"><a href="//sale.suning.com/images/advertise/yx/huanxiangzhixin/index.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/mt2.jpg" alt=""></a></div>
            <div class="tab-con other clearfix"><a href="//bbs.9game.cn/forum-3135-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/mt3.jpg" alt=""></a></div>
            <div class="tab-con other clearfix"><img src="<?php echo $full_base_url ?>/images/mt4.jpg" alt=""></div>
        </div>
        <div class="close"></div>
    </div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script src="<?php echo $full_base_url ?>/js/swipe.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/common.js"></script>
<script type="text/javascript">
 var slider = Swipe(document.getElementById('slider'), {
    auto: 3000,
    continuous: true,
    callback: function(pos) {
        var i = bullets.length;
        while (i--) {
            bullets[i].className = ' ';
        }
        bullets[pos].className = 'on';
    }
});
var slider2 = Swipe(document.getElementById('slider2'), {
    auto: 3000,
    continuous: true,
    callback: function(pos) {}
});
var slider3 = Swipe(document.getElementById('slider3'), {
    auto: 3000,
    continuous: true,
    callback: function(pos) {}
});
$(function(){
    //图片轮播

    var bullets = $('#dot').find('li');

    $(".prev1").click(function(){
        slider2.prev();
    });
    $(".next1").click(function(){
        slider2.next();
    });
    $(".prev2").click(function(){
        slider3.prev();
    });
    $(".next2").click(function(){
        slider3.next();
    });
})
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
</body>
</html>