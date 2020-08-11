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
        <?php require "_download.ctp" ;?>
        <?php
            $result=$this->Mrj->indexInitData();
        ?>
    </ul>
    <div class="swipeBox">
        <div id="slider" class="swipe">
            <ul class="swipe-wrap">
                <?php if(!empty($result["img_index_2"])):
                        foreach($result["img_index_2"] as $key=>$value):
                ?>
                <li><a href="<?php echo $value["small_link"];?>"><img  alt="<?php echo $value["alt"];?>" title="<?php echo $value["title"];?>" src="/uploads/<?php echo $value["small_url"]?>" width="418" height="248" /></a></li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
            <ul class="dot" id="dot">
                <?php if(!empty($result["img_index_2"])):
                foreach($result["img_index_2"] as $key=>$value):
                ?>
                <li <?php if($key == 0) echo 'class="on"';?>></li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
        <span class="prev"><img src="<?php echo $full_base_url ?>/images/wrap/al.png" width="100%" alt=""></span>
        <span class="next"><img src="<?php echo $full_base_url ?>/images/wrap/ar.png" width="100%" alt=""></span>
    </div>
    <div class="news tab">
        <ul class="tab-hd clearfix">
            <li>最新</li>
            <li>公告</li>
            <li>新闻</li>
            <li>活动</li>
        </ul>
        <div id="tab-con">
            <div class="tab-con">
                <?php
                $total=$result["total"];
                if(!empty($total)):
                $first=array_pop($total);
                ?>
                <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
                <ul class="newslist">
                    <?php if(!empty($total)):?>
                        <?php foreach($total as $key=>$value):?>
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
                            <li><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">[<?php echo $name;?>]<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="more"><a href="/news/all.html">更多</a></div>
            </div>
            <div class="tab-con">
                <?php
                $gong_gao=$result["gong_gao"];
                if(!empty($gong_gao)):
                    $first=array_pop($gong_gao);
                 ?>
                    <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
                <ul class="newslist">
                    <?php if(!empty($gong_gao)):?>
                        <?php foreach($gong_gao as $key=>$value):?>
                            <li><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">【公告】<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="more"><a href="<?php echo $this->Base->getNewsUrl(40);?>">更多</a></div>
            </div>
            <div class="tab-con">
                <?php
                $news=$result["news"];
                if(!empty($news)):
                    $first=array_pop($news);
                    ?>
                    <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
                <ul class="newslist">
                    <?php if(!empty($news)):?>
                        <?php foreach($news as $key=>$value):?>
                            <li><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">【新闻】<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="more"><a href="<?php echo $this->Base->getNewsUrl(38);?>">更多</a></div>
            </div>
            <div class="tab-con">
                <?php
                $activity=$result["activity"];
                if(!empty($activity)):
                    $first=array_pop($activity);
                    ?>
                    <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>"><?php echo $first["title"];?></a></h4>
                <?php endif;?>
                <ul class="newslist">
                    <?php if(!empty($activity)):?>
                        <?php foreach($activity as $key=>$value):?>
                            <li><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">【活动】<?php echo $value["title"];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="more"><a href="<?php echo $this->Base->getNewsUrl(42);?>">更多</a></div>
            </div>


        </div>
    </div>
    <div class="yxts">
        <h3>游戏特色</h3>
        <div id="slider2" class="swipe">
            <ul class="swipe-wrap">

                <li><img src="<?php echo $full_base_url ?>/images/01.jpg" width="100%" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/02.jpg" width="100%" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/03.jpg" width="100%" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/04.jpg" width="100%" /></li>
                <li><img src="<?php echo $full_base_url ?>/images/05.jpg" width="100%" /></li>

            </ul>
        </div>
        <span class="prev2"><img src="<?php echo $full_base_url ?>/images/wrap/al.png" width="100%" alt=""></span>
        <span class="next2"><img src="<?php echo $full_base_url ?>/images/wrap/ar.png" width="100%" alt=""></span>
    </div>
    <div class="clearfix">
        <div class="wxin fl">
            <h3>官方微信<span>关注有礼</span></h3>
            <p>公众号：meirenjisy</p>
        </div>
        <div class="lt fr"><a href="//bbs.uu.cc/forum-249-1.html">游戏论坛</a></div>
    </div>
        <?php require "_footer.ctp"; ?>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/swipe.js" type="text/javascript"></script>
<script type="text/javascript">
    var slider1 = Swipe(document.getElementById('slider'), {
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
    var bullets = document.getElementById('dot').getElementsByTagName('li');
    $(function(){
        $(".prev").click(function(){
            slider1.prev();
        })
        $(".next").click(function(){
            slider1.next();
        })
        $(".prev2").click(function(){
            slider2.prev();
        })
        $(".next2").click(function(){
            slider2.next();
        })
    })
    var slider2 = Swipe(document.getElementById('slider2'), {
        auto: 3000,
        continuous: true,
        callback: function(pos) {}
    });
    $(function(){
        //选项卡
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
    });
</script>
</body>
</html>
