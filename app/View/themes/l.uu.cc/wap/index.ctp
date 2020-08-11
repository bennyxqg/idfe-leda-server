<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
    <meta name="viewport" content="width=480, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">

    <link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico"/>
    <script type="text/javascript">
        if(navigator.userAgent.indexOf('Android') > -1){
            var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
            var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
            document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
        }
    </script>
</head>

<body>
<?php
$topData=$this->Ly->topData();
//    var_dump($topData);
?>
<div class="wrap">
    <div class="header">
        <h1>烈焰遮天</h1>
        <a class="dd" href="download">游戏下载</a>
    </div>
    <div class="content">
        <div class="news">
            <ul class="tab-hd clearfix">
                <li class="current"><span class="qb">全部</span></li>
                <li><span class="xw">新闻</span></li>
                <li><span class="gg">公告</span></li>
                <li><span class="hd">攻略</span></li>
            </ul>
            <div class="tabCon">
                <div class="tab-con" style="display:block;">
                    <div class="detail">
                        <?php
                        $total=$topData["total"];
                        if(!empty($total)):
                            $first=array_shift($total);
                            ?>
                            <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                            <p><?php echo $first["decription"];?></p>
                        <?php endif;?>
                    </div>
                    <ul class="newslist">
                        <?php if(!empty($total)):?>
                            <?php foreach($total as $key=>$value):?>
                                <li><span><?php echo date("m/d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                        <?php
                                        $name=$this->Ly->get_category_name($value["news_categories_id"]);
                                        ?>
                                        [<?php echo $name;?>]<?php echo $value["title"];?></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <div class="gd"><a href="<?php echo $this->Base->getNewsUrl("all");?>">更多</a></div>
                </div>
                <div class="tab-con">
                    <div class="detail">
                        <?php
                        $news=$topData["news"];
                        if(!empty($news)):
                            $first=array_shift($news);
                            ?>
                            <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                            <p><?php echo $first["decription"];?></p>
                        <?php endif;?>
                    </div>
                    <ul class="newslist">
                        <?php if(!empty($news)):?>
                            <?php foreach($news as $key=>$value):?>
                                <li><span><?php echo date("m/d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                        [新闻]<?php echo $value["title"];?></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <div class="gd"><a href="<?php echo $this->Base->getNewsUrl(46);?>">更多</a></div>
                </div>
                <div class="tab-con">
                    <div class="detail">
                        <?php
                        $gong_gao=$topData["gong_gao"];
                        if(!empty($gong_gao)):
                            $first=array_shift($gong_gao);
                            ?>
                            <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                            <p><?php echo $first["decription"];?></p>
                        <?php endif;?>
                    </div>
                    <ul class="newslist">
                        <?php if(!empty($gong_gao)):?>
                            <?php foreach($gong_gao as $key=>$value):?>
                                <li><span><?php echo date("m/d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                        [公告]<?php echo $value["title"];?></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <div class="gd"><a href="<?php echo $this->Base->getNewsUrl(48);?>">更多</a></div>
                </div>
                <div class="tab-con">
                    <div class="detail">
                        <?php
                        $gong_luo=$topData["gong_luo"];
                        if(!empty($gong_luo)):
                            $first=array_shift($gong_luo);
                            ?>
                            <h4><a href="<?php echo $this->Base->getShowUrl($first["id"]);?>" title="<?php echo $first["title"];?>"><?php echo $first["title"];?></a></h4>
                            <p><?php echo $first["decription"];?></p>
                        <?php endif;?>
                    </div>
                    <ul class="newslist">
                        <?php if(!empty($gong_luo)):?>
                            <?php foreach($gong_luo as $key=>$value):?>
                                <li><span><?php echo date("m/d",$value["created"])?></span><a href="<?php echo $this->Base->getShowUrl($value["id"]);?>">
                                        [攻略]<?php echo $value["title"];?></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <div class="gd"><a href="<?php echo $this->Base->getNewsUrl(52);?>">更多</a></div>
                </div>
            </div>
        </div>
        <div class="ad">
            <a href="#"><img src="<?php echo $full_base_url ?>/images/m_image.jpg" alt=""></a>
        </div>
        <div class="dbox clearfix">
            <div class="switch fl">
                <ul class="runContent">
                    <?php if(!empty($topData["img_index_2"])):?>
                        <?php foreach($topData["img_index_2"] as $key=>$value):?>
                            <li><a href="<?php echo $value["small_link"] ?>" target="_blank"><img src="/uploads/<?php echo $value["small_url"];?>" /></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <ul class="triggers">
                    <?php if(!empty($topData["img_index_2"])):?>
                        <?php foreach($topData["img_index_2"] as $key=>$value):?>
                            <li <?php if($key == 0) echo 'class="cur"';?>></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
            </div>
            <div class="wbo fr">
                <!-- <img src="<?php echo $full_base_url ?>/images/gwwx.png" alt=""> -->
                <div class="lt"><a href="//bbs.uu.cc/forum-250-1.html">进入论坛</a></div>
                <ul class="micro-blog">
                    <li class="kf">客服电话<br />4008-4001-88</li>
                    <li><a href="//weibo.com/u/5576040055">新浪微博</a></li>
                </ul>
            </div>
        </div>
    </div>
   <?php  require_once  "_footer.ctp";?>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/switch.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        //选项卡
        $('.tab-hd').find('li').each(function(i){
            $(this).click(function(){
                $(this).siblings('li').removeClass('current');
                $(this).addClass('current');
                $('.tab-hd').parent().find('.tab-con').eq(i).show().siblings('.tab-con').hide();
            })
        });

        /* 图片切换*/
        $(".switch").Switch({
            moveInterval:500,
            interval:5000,
            direction:"alpha",
            handle:".triggers"
        });
    });
</script>
<script type="text/javascript">
            /*
             * 智能机浏览器版本信息:
             *
             */
            var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }
		   
           $(".dd").click(function(){
				if (browser.versions.ios || browser.versions.iPhone || browser.versions.iPad) {
					$('.dd').attr('href','https://itunes.apple.com/cn/app/lie-yan-zhe-tian-song-tu-long/id898135782?l=zh&ls=1&mt=8');    //ios链接地址
				}
				else if (browser.versions.android) {
				    $('.dd').attr('href','//dl.uu.cc/download/lieyanzhetian-409_v0.0.4.9_s2.1.13_LE0S0N30000.apk');    //安卓链接地址
				}
            })
 
 
        </script>
</body>
</html>
