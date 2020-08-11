<!DOCTYPE HTML>
<html>
<?php include '_header.ctp';?>
<body>
<div class="header">
    <?php
    $zxdtUrl = "//tp2.uu.cc/uploads/";
    $siteBlock = $topData['site_block'];
    $desc_block = $topData['desc_block'];
    $android_download = $this->Tp->getBlock($this->Tp->site_id, "android_download_url",true);
		$ios_download = $this->Tp->getBlock($this->Tp->site_id, "ios_download_url",true);
    ?>
    <div class="banBox">
        <div class="syBanner"><img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="565" border="0"></div>
        <div class="top_db">
            <div class="dbox">
                <?php
                    if(!empty($desc_block)){
                ?>
                <div class="ss info" id="info_sq">
                    <h2>神庙逃亡2</h2>
                    <p><?php echo mb_substr($desc_block['content'],0,80,'utf-8')?>......</p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2>神庙逃亡2</h2>
                    <p><?=$desc_block['content']?></p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>


                <?php

                }else{
                ?>
                <div class="ss info" id="info_sq">
                    <h2>神庙逃亡2</h2>
                   </div>
                <?php
                }
                ?>
                <div class="download">
                <?php
                if(!empty($siteBlock)){
                    foreach ($siteBlock as $key=>$v){
                        if(!in_array($v['Abbr'], array('download','ios_download'))) break;
                        //$imgname = $v['title'] == 'ios下载' ? $full_base_url."/images/d_ios.png" : $full_base_url."/images/d_and.png" ;
                ?>
                
               
                <?php
                    }
                }
                ?>
                
                <a href="<?=$android_download['content']?>"><img class="d_img" src="<?php echo $full_base_url ?>/images/az.png" alt="安卓下载"></a>
                <a href="<?=$ios_download['content']?>"><img class="d_img" src="<?php echo $full_base_url ?>/images/ios.png" alt="ios下载"></a>
                    <span><?php echo $topData['index_qrcode_img_block']['content'] ?></span>
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon"><img src="<?php echo $full_base_url ?>/images/tub.png" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <ul class="runContent">
                <?php
            $img_index_1 = $topData['img_index_1'];
//             var_dump($img_index_1);exit;
            if(!empty($img_index_1)){
                foreach ($img_index_1 as $key=>$v){
            ?>
                    <li><a href="<?=$v['small_link']?>"><img src="<?=$zxdtUrl.$v['small_url']?>" /></a></li>
            <?php
                }

            }

            ?>
            </ul>
            <ul class="triggers">
                <?php
            if(!empty($img_index_1)){
                foreach ($img_index_1 as $key=>$v){
                    if($key == 0){
            ?>
                        <li class="cur"></li>
            <?php
                    }else{
            ?>
                        <li></li>
            <?php
                    }
                }

            }

            ?>
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
                    $news=$topData["news"];
                    if(!empty($news)){
                        foreach ($news as $key=>$v){
                            if($key == 0){
                    ?>
                            <li class="first"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></li>
                        <li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[新闻]</strong><?=$v['title']?>
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li>

                    <?php
                            }else{
                    ?>
                                <li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[新闻]</strong><?=$v['title']?>
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li>

                    <?php

                            }


                        }
                    }
                    ?>
                    </ul>
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php
                    $huodong=$topData["huo_dong"];
                    if(!empty($huodong)){
                        foreach ($huodong as $key=>$v){
                            if($key == 0){
                    ?>
                            <li class="first"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></li>
                        <li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[活动]</strong><?=$v['title']?>
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li>

                    <?php
                            }else{
                    ?>
                                <li>
                            <span>[<?=date("m/d",$value["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[活动]</strong><?=$v['title']?>
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li>

                    <?php

                            }
                        }
                    }
                    ?>
                    </ul>
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php
                    $gonglue=$topData["gong_lue"];
                    if(!empty($gonglue)){
                        foreach ($gonglue as $key=>$v){
                            if($key == 0){
                    ?>
                            <li class="first"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></li>
                        <li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[攻略]</strong><?=$v['title']?>
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li>

                    <?php
                            }else{
                    ?>
                                <li>
                            <span>[<?=date("m/d",$value["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[攻略]</strong><?=$v['title']?>
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li>

                    <?php

                            }

                        }

                    }
                    ?>
                    </ul>
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($Glca_id);?>" target="_blank">更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">

                <li> <a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>" target="_blank"><img src="<?php echo $full_base_url ?>/images/tp1.jpg" alt="最新活动"></a>
                </li>
                <li><a href="<?php echo $this->Base->getNewsUrl($Glca_id);?>" target="_blank"><img src="<?php echo $full_base_url ?>/images/tp2.jpg" alt="大神攻略"></a></li>
                <?php
                $img_index_2 = $topData['img_index_2'];
                if(!empty($img_index_2)){
                ?>
                <li><a href="<?php echo $this->Base->getPictureurl("2");?>" target="_blank"><img src="<?php echo $full_base_url ?>/images/tp3.jpg" alt="精彩截图"></a></li>
                <?php
                }

                ?>
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="//weibo.com/p/1006063469925682" target="_blank">
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
                <p>B.微信搜索公众号<span>shenmiao2</span></p>
                <img src="<?php echo $full_base_url ?>/images/weixin.png" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <?php $link=$this->Tp->getBlock($site_id,'link_1');?>
                <?php echo $link;?>
            </div>
        </div>
    </div>
</div>
<?php // echo $this->element('sql_dump');?>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/js/switch.js"></script>
<script type="text/javascript">
function AutoScroll(obj){
    $(obj).find("ul:first").animate({
            marginTop:"-30px"
    },500,function(){
            $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
    });
}
$(document).ready(function(){
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
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>