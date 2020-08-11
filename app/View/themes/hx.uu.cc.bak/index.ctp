<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>超燃系·激战卡牌《幻想之心》官网</title>
    <meta name="keywords" content="幻想之心，幻想，幻想之心官网，幻想之心手游，卡牌手游，幻想之心卡牌，幻想之心下载，幻想之心新闻，幻想之心活动"/>
    <meta name="description" content="幻想之心惊艳亮相，街机级战斗体验，创新战斗设计重新定义动作卡牌，卡牌不只站起来，还要战痛快。独创主城共享模式，支持多人在线组队PVE，和你的朋友一起告别卡牌单机时代。二次元偶像大集结，人气动漫主角等你收入麾下，征战四方。日本顶级美术团队，千张精美原画，全程美少女技能配音震撼视听。"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css"/>
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>幻想之心</h1>
    </div>
    <div class="content clearfix">
        <div class="side fl">
            <a href="//dl.uu.cc/download/hxzx_jycs_v0.3.7_1.apk " id="bank">安卓下载</a>
            <div class="wx">
                <img src="<?php echo $full_base_url ?>/images/wx.jpg" alt="">
                <p>扫一扫二维码，立即下载游戏</p>
            </div>
            <div class="link">
                <a class="tx" href="//t.qq.com/xin____2014" target="_blank">腾讯微博</a>
                <a class="sina" href="//weibo.com/huanxiangzhixin" target="_blank">新浪微博</a>
                <a class="lt" href="//bbs.uu.cc/forum-268-1.html" target="_blank">游戏论坛</a>
            </div>
            <div class="wx2 clearfix">
                <img src="<?php echo $full_base_url ?>/images/wx2.jpg" alt="">
                <p>关注官方微信<br /><span>抢首测资格</span></p>
            </div>
            <div class="media">
                <h2>媒体专区<span>MEDIA PARTNERS</span></h2>
                <?php $block=$this->HX->getBlock(36,'index_1');?>
                <div>
                    <?php echo $block;?>
                </div>
            </div>
        </div>
        <div class="main fr">
            <!-- banner -->
            <div class="switch" id="banner">
                <ul class="runContent">
                    <?php $result["img_index_1"]=$this->HX->img_list();?>
                    <?php if($result["img_index_1"]){?>
                        <?php foreach($result["img_index_1"] as $key=>$value){?>
                            <li>
                                <?php if($value["big_link"]){?>
                                    <a href='<?php echo $value["big_link"];?>' target="_blank">
                                        <img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"/>
                                    </a>
                                <?php }else{?>
                                    <span><img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"></span>
                                <?php }?>
                            </li>
                        <?php }?>
                    <?php }else{?>
                        <li>
                            <img src="<?php echo $full_base_url ?>/images/banner1.jpg" />
                        </li>
                        <li>
                            <a href="//sale.suning.com/images/advertise/yx/huanxiangzhixin/index.html" target="_blank">
                                <img src="<?php echo $full_base_url ?>/images/banner2.jpg" />
                            </a>
                        </li>
                        <li>
                            <a href="//bbs.9game.cn/forum-3135-1.html" target="_blank">
                                <img src="<?php echo $full_base_url ?>/images/banner3.jpg" />
                            </a>
                        </li>
                    <?php }?>
                </ul>
                <ul class="triggers">
                    <li class="cur"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="news tab">
                <ul class="tab-hd clearfix">
                    <li class="cur">全部</li>
                    <li>公告</li>
                    <li>新闻</li>
                    <li>活动</li>
                </ul>
                <?php
                    $news_result= $this->HX->indexInitData();
                ?>
                <div class="tabCons">
                    <div class="tab-con">
                        <ul class="newslist">
                            <ul>
                                <?php if($news_result["total"]):?>
                                    <?php foreach($news_result["total"] as $key=>$value):?>
                                         <li><span><?php echo date('m/d',$value["updated"]);?></span><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"><strong>【全部】</strong><?php echo $value["title"];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </ul>
                        <div class="more"><a href="//hx.uu.cc/news/all.html" target="_blank">更多</a></div>
                    </div>
                    <div class="tab-con">
                        <ul class="newslist">
                            <ul>
                                <?php if($news_result["consulting"]):?>
                                    <?php foreach($news_result["consulting"] as $key=>$value):?>
                                         <li><span><?php echo date('m/d',$value["updated"]);?></span><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"><strong>【公告】</strong><?php echo $value["title"];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </ul>
                        <div class="more"><a href="//hx.uu.cc/news/all.html" target="_blank">更多</a></div>
                    </div>
                    <div class="tab-con">
                        <ul class="newslist">
                            <ul>
                                <?php if($news_result["news"]):?>
                                    <?php foreach($news_result["news"] as $key=>$value):?>
                                         <li><span><?php echo date('m/d',$value["updated"]);?></span><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"><strong>【新闻】</strong><?php echo $value["title"];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </ul>
                        <div class="more"><a href="//hx.uu.cc/news/all.html" target="_blank">更多</a></div>
                    </div>
                    <div class="tab-con">
                        <ul class="newslist">
                            <ul>
                                <?php if($news_result["activity"]):?>
                                    <?php foreach($news_result["activity"] as $key=>$value):?>
                                         <li><span><?php echo date('m/d',$value["updated"]);?></span><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"><strong>【活动】</strong><?php echo $value["title"];?></a></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </ul>
                        <div class="more"><a href="//hx.uu.cc/news/all.html" target="_blank">更多</a></div>
                    </div>
                </div>
            </div>
            <?php $imglist3=$this->HX->wap_img_list('index_3');// 原画欣赏?>
            <?php $imglist2=$this->HX->wap_img_list('index_2');// 游戏截图?>
            <div class="info tab">
                <ul class="tab-hd clearfix">
                    <li class="cur">人物介绍</li>
                    <li>原画欣赏</li>
                    <li>游戏截图</li>
                </ul>
                <div class="tabs">
                    <div class="tab-con ntab">
                        <ul class="ntab-hd clearfix">
                            <li class="cur"><img src="<?php echo $full_base_url ?>/images/p-zhiye1.png" alt=""></li>
                            <li><img src="<?php echo $full_base_url ?>/images/p-zhiye2.png" alt=""></li>
                            <li><img src="<?php echo $full_base_url ?>/images/p-zhiye3.png" alt=""></li>
                        </ul>
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
                        <div class="showImg">
                            <div class="jCarouselLite_b">
                                <ul class="clearfix">
                                    <?php if($imglist3){?>  
                                        <?php foreach($imglist3 as $key =>$value){?>
                                            <li><img src="/uploads/<?php echo $value['big_url']?>" alt=""></li>
                                        <?php }?>
                                    <?php }else{?>
                                        <li><img src="<?php echo $full_base_url ?>/images/yh.jpg" alt=""></li>
                                        <li><img src="<?php echo $full_base_url ?>/images/yh.jpg" alt=""></li>
                                        <li><img src="<?php echo $full_base_url ?>/images/yh.jpg" alt=""></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <button class="btn_left2"></button>
                        <button class="btn_right2"></button>
                    </div>
                    <div class="tab-con">
                        <div class="showImg">
                            <div class="jCarouselLite_a">
                                <ul class="clearfix">
                                    <?php if($imglist2){?>  
                                        <?php foreach($imglist2 as $key =>$value){?>
                                            <li>
                                                <img src="/uploads/<?php echo $value['big_url']?>" alt="">
                                            </li>
                                        <?php }?>
                                    <?php }else{?>    
                                        <li><img src="<?php echo $full_base_url ?>/images/p-jt.jpg" alt=""></li>
                                        <li><img src="<?php echo $full_base_url ?>/images/p-jt.jpg" alt=""></li>
                                        <li><img src="<?php echo $full_base_url ?>/images/p-jt.jpg" alt=""></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <button class="btn_left1"></button>
                        <button class="btn_right1"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"><img src="<?php echo $full_base_url ?>/images/logo_xl.png"></span>
        <div class="cr">
            <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
            <p> <span>Copyright&copy;2009-2014 深圳市创梦天地科技有限公司 版权所有</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
        </div>
        <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间  享受健康生活。</div>
    </div>
</div>
<div class="popup">
    <div class="mask"></div>
    <div class="box">
        <input class="ipt" type="text" name="phone" autocomplete="off" value="填写手机号码" />
        <span id="submit">预约资格</span>
        <div class="close"></div>
    </div>
</div>
<!-- <div class="popTab" style="display:none;">
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
            <div class="tab-con"><a href="//sale.suning.com/images/advertise/yx/huanxiangzhixin/index.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/t2.png" alt=""></a></div>
            <div class="tab-con"><a href="//bbs.9game.cn/forum-3135-1.html" target="_blank"><img src="<?php echo $full_base_url ?>/images/t3.png" alt=""></a></div>
            <div class="tab-con"><img src="<?php echo $full_base_url ?>/images/t4.png" alt=""></div>
        </div>
        <div class="close"></div>
    </div>
</div> -->
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/common.js"></script>
<script type="text/javascript">
//图片滚动
$(".jCarouselLite_a").jCarouselLite({
    visible: 1,
    scroll: 1,
    circular: false,
    btnNext: ".btn_right1",
    btnPrev: ".btn_left1"
});
$(".jCarouselLite_b").jCarouselLite({
    visible: 1,
    scroll: 1,
    circular: false,
    btnNext: ".btn_right2",
    btnPrev: ".btn_left2"
});
$(function(){
    /* 图片切换*/
    $(".switch").Switch({
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });
    //tab选项卡
    $('.tab').each(function(){
        var _this = $(this);
        _this.find('.tab-hd').eq(0).find('li').each(function(i){
            if(i==0){
                $(this).addClass('cur');
                _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
            }
            $(this).click(function(){
                $(this).siblings('li').removeClass('cur');
                $(this).addClass('cur');
                _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
            });
        });
    });
    $('.ntab').each(function(){
        var _this = $(this);
        _this.find('.ntab-hd').eq(0).find('li').each(function(i){
            if(i==0){
                $(this).addClass('cur');
                _this.find('.ntab-con').eq(i).show().siblings('.ntab-con').hide();
            }
            $(this).click(function(){
                $(this).siblings('li').removeClass('cur');
                $(this).addClass('cur');
                _this.find('.ntab-con').eq(i).show().siblings('.ntab-con').hide();
            });
        });
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
</body>
</html>