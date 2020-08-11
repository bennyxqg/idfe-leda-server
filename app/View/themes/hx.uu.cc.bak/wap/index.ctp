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
<div class="wrap">
    <div class="header">
        <h1>幻想之心</h1>
        <div class="bank">
            <h3>幻想之心</h3>
            <p>ARPG<br />2014-11-06</p>
            <a id="bank" href="//dl.uu.cc/download/hxzx_jycs_v0.3.7_1.apk">预约</a>
        </div>
    </div>
    <div class="wxBox">
        <p>关注幻想之心官方微信：<strong>hxzx1024</strong>，抢首测资格！</p>
    </div>
    <div class="box" style="display:none;">
        <p><input type="number" name="phone" placeholder="填写手机号码" autocomplete="off" /></p>
        <a href="//dl.uu.cc/download/hxzx_jycs_v0.3.7_1.apk">安卓下载</a>
    </div>
    <div class="swipeBox" id="banner">
        <div id="slider" class="swiper-container">
            <ul class="swipe-wrap">
                <?php $img_list=$this->HX->wap_img_list("index_1");?>
                <?php if($img_list){?>
                    <?php foreach($img_list as $key=>$value){?>
                        <li> 
                            <?php if($value["big_link"]){?>
                                <a href='<?php echo $value["big_link"];?>' target="_blank">
                                   <img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>">
                                </a>    
                            <?php }else{?>
                                <img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>">
                            <?php }?>
                        </li>
                    <?php }?>        
                <?php }else{?>
                    <li>
                        <img src="<?php echo $full_base_url ?>/images/banner1.jpg" width="100%" />
                    </li>
                    <li>
                        <a href="//sale.suning.com/images/advertise/yx/huanxiangzhixin/index.html" target="_blank">
                            <img src="<?php echo $full_base_url ?>/images/banner2.jpg" width="100%" />
                        </a>
                    </li>
                    <li>
                        <a href="//bbs.9game.cn/forum-3135-1.html" target="_blank">
                            <img src="<?php echo $full_base_url ?>/images/banner3.jpg" width="100%" />
                        </a>
                    </li>
                <?php }?>
            </ul>
            <ul class="dot" id="dot">
                <li class="on"></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
        </div>
    </div>
    <div class="news">
        <h2><a href="//hx.uu.cc/news/all.html" target="_blank">更多</a>新闻公告</h2>
        <?php $result=$this->HX->indexInitData();//var_dump($result);?>
        <ul class="newslist">
            <?php if($result['news']){?>
                <?php foreach($result['news'] as $key =>$value){?>
                    <li>
                        <span><?php echo isset($value['updated'])?date('m-d',$value['updated']):'';?></span>
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
                        <a href="/show/<?php echo $activity['id'].'.html';?>"><strong>【公告】</strong><?php echo $activity['title'];?></a>
                    </li>
                <?php }?>
             <?php }?>  
        </ul>
    </div>
    <div class="info tab">
        <ul class="tab-hd clearfix">
            <li class="cur">人物介绍</li>
            <li>原画欣赏</li>
            <li>游戏截图</li>
        </ul>
        <div class="tabs">
            <div class="tab-con ntab">
                <ul class="ntab-hd clearfix">
                    <li class="cur"><img src="<?php echo $full_base_url ?>/images/zhiye1.png" alt=""></li>
                    <li><img src="<?php echo $full_base_url ?>/images/zhiye2.png" alt=""></li>
                    <li><img src="<?php echo $full_base_url ?>/images/zhiye3.png" alt=""></li>
                </ul>
                <?php $img_list2=$this->HX->wap_img_list("index_2"); //游戏截图?>
                <?php $img_list3=$this->HX->wap_img_list("index_3"); //原画欣赏?>
                <div class="ntabs">
                    <div class="ntab-con gjs">
                        <h2>弓箭手</h2>
                        <p>以物理、远程攻击为主，暴击伤害高，使其措手不及。</p>
                        <div>
                            <p>使用武器：弓箭</p>
                            <p>上手难度：<span class="two"></span></p>
                        </div>
                        <ul class="skill clearfix">
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/gjs1.png" alt="">
                                <p>穿云箭</p>
                            </li>
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/gjs2.png" alt="">
                                <p>箭雨风暴</p>
                            </li>
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/gjs3.png" alt="">
                                <p>迅矢连射</p>
                            </li>
                        </ul>
                    </div>
                    <div class="ntab-con qs">
                        <h2>骑士</h2>
                        <p>以物理、近战攻击为主，血厚防高，拥有强力的防守反击技能。</p>
                        <div>
                            <p>使用武器：长枪</p>
                            <p>上手难度：<span class="three"></span></p>
                        </div>
                        <ul class="skill clearfix">
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/qs1.png" alt="">
                                <p>重斩</p>
                            </li>
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/qs2.png" alt="">
                                <p>千裂破</p>
                            </li>
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/qs3.png" alt="">
                                <p>旋风斩</p>
                            </li>
                        </ul>
                    </div>
                    <div class="ntab-con fs">
                        <h2>法师</h2>
                        <p>以魔法、远程攻击为主，领悟各大魔法元素之力，造成巨大伤害。</p>
                        <div>
                            <p>使用武器：法杖</p>
                            <p>上手难度：<span class="three"></span></p>
                        </div>
                        <ul class="skill clearfix">
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/fs1.png" alt="">
                                <p>地狱火</p>
                            </li>
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/fs2.png" alt="">
                                <p>炎龙弹</p>
                            </li>
                            <li>
                                <img src="<?php echo $full_base_url ?>/images/fs3.png" alt="">
                                <p>陨石巨落</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-con">
                <div class="yh">
                    <div class="swipeBox">
                        <div id="slider2" class="swiper-container">
                            <ul class="swipe-wrap">
                                <?php if($img_list3){?>
                                       <?php foreach($img_list3 as $value){?>
                                            <li class="clearfix">
                                                <img src="/uploads/<?php echo $value['big_url']?>" width="100%" />
                                            </li>
                                       <?php }?> 
                                <?php }else{?>
                                    <li class="clearfix"><img src="<?php echo $full_base_url ?>/images/yh.jpg" width="100%" /></li>
                                    <li class="clearfix"><img src="<?php echo $full_base_url ?>/images/yh.jpg" width="100%" /></li>
                                    <li class="clearfix"><img src="<?php echo $full_base_url ?>/images/yh.jpg" width="100%" /></li>
                                <?php }?>
                            </ul>
                        </div>
                        <span class="prev1"></span>
                        <span class="next1"></span>
                    </div>
                </div>
            </div>
            <div class="tab-con">
                <div class="jt">
                    <div class="swipeBox">
                        <div id="slider3" class="swiper-container">
                            <ul class="swipe-wrap">
                                <?php if($img_list2){?>
                                    <?php foreach($img_list2 as $value){?>
                                            <li class="clearfix">
                                                <img src="/uploads/<?php echo $value['big_url']?>" width="100%" />
                                            </li>
                                    <?php }?>
                                <?php }else{?>
                                    <li class="clearfix"><img src="<?php echo $full_base_url ?>/images/jt.jpg" width="100%" /></li>
                                    <li class="clearfix"><img src="<?php echo $full_base_url ?>/images/jt.jpg" width="100%" /></li>
                                    <li class="clearfix"><img src="<?php echo $full_base_url ?>/images/jt.jpg" width="100%" /></li>
                                 <?php }?>
                            </ul>
                        </div>
                        <span class="prev2"></span>
                        <span class="next2"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="link clearfix">
            <a class="tx" href="//t.qq.com/xin____2014">腾讯微博</a>
            <a class="sina" href="//weibo.com/huanxiangzhixin">新浪微博</a>
            <a class="lt" href="//bbs.uu.cc/forum-268-1.html">游戏论坛</a>
        </div>
        <div class="logo">
            <a href="//www.idreamsky.com"><img src="<?php echo $full_base_url ?>/images/ld.png" alt=""></a>
            <a href="#"><img src="<?php echo $full_base_url ?>/images/xl.png" alt=""></a>
        </div>
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