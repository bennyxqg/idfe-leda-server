<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/layout.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrap">
<?php
    $result= $this->Mrj->indexInitData();
//var_dump($result);
?>
<?php include '_top.ctp' ?>


<!-- 正文 -->
<div class="box_01 clearfix">
    <!-- 首页新闻 -->
    <div class="news tab fl">
        <ul class="tab-hd clearfix">
            <li>最新</li>
            <li>公告</li>
            <li>新闻</li>
            <li class="last">活动</li>
        </ul>
        <div class="tab-con">
            <div class="detail">
                <?php
                $total=$result["total"];
                if(!empty($total)):
                $first=$total[0];
                ?>
                <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
            </div>

            <ul class="newslist">
                <?php if(!empty($total)):?>
                    <?php foreach($total as $key=>$value):?>
                        <li><span><?php echo date("m-d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                <?php switch($value["news_categories_id"]){
                                    case 38:
                                        $name="新闻";
                                        break;
                                    case 40:
                                        $name="公告";
                                        break;
                                    case 42:
                                        $name="活动";
                                        break;
                                    default:
                                        $name="新闻";
                                        break;
                                }
                                ?>
                                [<?php echo $name;?>]<?php echo $value["title"];?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            <div class="more"><a href="/news/all.html">更多</a></div>
        </div>
        <div class="tab-con">
            <div class="detail">
                <?php
                $gong_gao=$result["gong_gao"];
                if(!empty($gong_gao)):
                    $first=$gong_gao[0];
                ?>
                    <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                    <!-- <p><?php echo mb_substr($first["decription"],0,50);?></p> -->
                <?php endif;?>
            </div>
            <ul class="newslist">
                <?php if(!empty($gong_gao)):?>
                    <?php foreach($gong_gao as $key=>$value):?>
                        <li><span><?php echo date("m-d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">[公告]<?php echo $value["title"];?></a></li>
                     <?php endforeach;?>
                <?php endif;?>
            </ul>
            <div class="more"><a href="<?php echo $this->Base->getNewsUrl(40);?>">更多</a></div>
        </div>
        <div class="tab-con">
            <?php
            $news=$result["news"];
            ?>
            <div class="detail">
                <?php
                if(!empty($news)):
                    $first=$news[0];
                    ?>
                    <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
            </div>
            <ul class="newslist">
                <?php if(!empty($news)):?>
                    <?php foreach($news as $key=>$value):?>
                        <li><span><?php echo date("m-d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">[新闻]<?php echo $value["title"];?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            <div class="more"><a href="<?php echo $this->Base->getNewsUrl(38);?>">更多</a></div>
        </div>
        <div class="tab-con">
            <?php
            $activity=$result["activity"];
            ?>
            <div class="detail">
                <?php
                if(!empty($news)):
                    $first=$activity[0];
                    ?>
                    <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
            </div>
            <ul class="newslist">
                <?php if(!empty($activity)):?>
                    <?php foreach($activity as $key=>$value):?>
                        <li><span><?php echo date("m-d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">[活动]<?php echo $value["title"];?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            <div class="more"><a href="<?php echo $this->Base->getNewsUrl(42);?>">更多</a></div>
        </div>
    </div>
    <!-- banner -->
    <div class="switch fr">
        <ul class="runContent">
            <?php
            $img_index_1=$result["img_index_1"];
            ?>
            <?php if(!empty($img_index_1)):?>
                <?php foreach($img_index_1 as $key=>$value):?>
                    <li><a href="<?php echo  $value["small_link"] == "#"?"javascript:;":$value["small_link"]; ?>" target="_blank"><img alt="<?php echo $value["alt"]?>" title="<?php echo $value["title"];?>" src="/uploads/<?php echo $value["small_url"];?>" /></a>
                    </li>
                <?php endforeach;?>
            <?php endif;?>

        </ul>
        <ul class="triggers">
            <?php if(!empty($img_index_1)):?>
            <?php foreach($img_index_1 as $key=>$value):?>
                <li  <?php if($key == 0) echo 'class="cur"'; ?>></li>
            <?php endforeach;?>
            <?php endif;?>

        </ul>
    </div>
</div>
<!-- 5屏切换 -->
<div class="slide">
    <ul class="clearfix">
        <li class="p1">
            <span></span>
            <img src="<?php echo $full_base_url ?>/images/01.jpg" width="478" alt="" />
        </li>
        <li class="p2">
            <span></span>
            <img src="<?php echo $full_base_url ?>/images/02.jpg" width="478" alt="" />
        </li>
        <li class="p3">
            <span></span>
            <img src="<?php echo $full_base_url ?>/images/03.jpg" width="478" alt="" />
        </li>
        <li class="p4">
            <span></span>
            <img src="<?php echo $full_base_url ?>/images/04.jpg" width="478" alt="" />
        </li>
        <li class="p5 cur">
            <span></span>
            <img src="<?php echo $full_base_url ?>/images/05.jpg" width="478" alt="" />
        </li>

    </ul>
</div>
<!-- 联系方式与媒体专区 -->
<div class="box_02 clearfix">
    <div class="box_03 fl">
        <div class="wbo fl">
            <h4>官方微信</h4>
            <div class="wx">
                <div class="gz">关注有礼</div>
                <img src="<?php echo $full_base_url ?>/images/weixin.jpg" alt="" />
            </div>
            <p>微信号：meirenjisy</p>
            <div class="share">
                <a title="分享到新浪微博" href="//weibo.com/meirenjisy" class="sina"></a>
                <a title="分享到腾讯微博" href="//t.qq.com/meirenjisy/follower" class="tx"></a>
            </div>
        </div>
        <div class="contact fr" style="width:131px;padding:6px 12px;">
            <h4>客服专区</h4>
            <h5>客服电话</h5>
            <p>4008400188</p>
            <h5>客服QQ</h5>
            <p>800051212</p>
            <h5>玩家QQ群</h5>
            <p>313170659</p>
            <p>150406551</p>
            <p>369137993</p>
        </div>
    </div>
    <div class="media tab fr">
        <h3>媒体专区</h3>
        <ul class="tab-hd clearfix">
            <li>口袋巴士</li>
            <li>游戏狗</li>
            <li>魔方网</li>
            <li>66游</li>
        </ul>
        <div id="tabCon">
            <div class="tab-con">
                <iframe src="//api.ptbus.com/dzhs/?m=mrj" frameborder="0" width="580" height=""></iframe>
            </div>
            <div class="tab-con">
                <iframe src="//pcapi.gamedog.cn/qianru/mrj.html" frameborder="0" width="580" height=""></iframe>
            </div>
            <div class="tab-con">
                <iframe src="//www.mofang.com/mrj/list_9640_1.html?refreshcache=1" frameborder="0" width="580" height=""></iframe>
            </div>
            <div class="tab-con">
                <iframe src="//www.66u.com/meirenji/hz/" frameborder="0" width="580" height=""></iframe>
            </div>
        </div>
    </div>
</div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/post_cdk.js"></script>
<script type="text/javascript">
    $(function(){
        /*tab 选项卡*/
        $('.tab').each(function(){
            var _this = $(this);
            _this.find('.tab-hd').eq(0).find('li').each(function(i){
                if(i==0){
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                }
                $(this).click(function(){
                    $(this).siblings('li').removeClass('current');
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            })
        })
        /* 图片切换*/
        $(".switch").Switch({
            moveInterval:500,
            interval:5000,
            direction:"alpha",
            handle:".triggers"
        });
        /*五屏切换*/
        $(".slide").find("li").click(function(){
            if($(this).hasClass("cur")){return false;}
            var li = $(this);
            sibling = li.siblings();
            li.find("span").fadeOut(200,function(){
                li.animate({"width":"478px"},500,function(){
                    li.addClass("cur");
                });
                sibling.animate({"width":"120px"},500,function(){
                    sibling.removeClass("cur");
                    sibling.find("span").fadeIn(200);
                });
            });
        });
        // 发送电话号码
        var phone = $("input[name=phone]").val();
        $("#lqlb").click(function(){
            var phone = $("input[name=phone]").val();
            post_cdk(phone);
        });
        $("#ann1").click(function(){
            $(this).hide();
            $("#ann2").show();
            $(".package").animate({"right":"50%","margin-right":"-720px"},500);
        });
        $("#ann2").click(function(){
            $(this).hide();
            $("#ann1").show();
            $(".package").animate({"right":"-201px","margin-right":"0px"},500);
        });
        $("body").find("a:last").hide();
    });
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=35514540" charset="UTF-8"></script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F244096667fe9ff7060e96315f79b0886' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
