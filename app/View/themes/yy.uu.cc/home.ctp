<?php 
require_once "_include.ctp";
// var_dump($topData);exit;
// 获得所有banner
/* $allBlock = array();
$blocks = $this->Base->getAllBlock(33);

foreach ($blocks as $block) {
    $allBlock[$block['Abbr']] = $block['content'];
}
$banner = $allBlock['index_banner']; // 首页banner
$gameIcon = $allBlock['game_icon']; // 游戏图标
$gameDescriptionDetail = $allBlock['game_description_detail']; // 游戏详细描述
$gameDescriptionSimple = $allBlock['game_description_simple']; // 游戏简单描述
$downloadLink = $allBlock['download_link']; // 下载链接
$link = $allBlock['link_1']; // 合作媒体
$qrcodeDownload = $allBlock['qrcode_download']; // 二维码下载链接
$videoLink = $allBlock['index_video_link']; // 首页视频链接 */
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<meta name="keywords" content="<?php echo $keywords;?>"/>
<meta name="description" content="<?php echo $description;?>"/>
<link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
<meta name="baidu-site-verification" content="wkFtx4mgS4" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/v2/css/style.css" type="text/css" />
</head>
<body>
<div class="header">
	<?php require_once "_top_nav.ctp"; ?>
    <div class="banBox">
        <div class="syBanner">
        	<img src="<?php echo $full_base_url ?>/v2/images/banner.jpg" width="1920" height="512" border="0">
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2>悠悠世界树</h2>
                    <p>
                    <?php echo mb_substr($yyjj['content'],0,50,'utf-8'); ?>
                    </p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2>悠悠世界树</h2>
                    <p>
                    <?php echo $yyjj['content'];?>
                    </p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>
                <div class="download">
                    <a href="<?php echo $yyxz['content'];?>"><img src="<?php echo $full_base_url ?>/v2/images/download.jpg" alt="下载"></a>
                </div>
                <div class="icon">
                    <img src="<?php echo $full_base_url ?>/v2/images/tub.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <ul class="runContent">
            <?php if($topData['sylb']):?>
            	<?php foreach ($topData['sylb'] as $k=>$v):?>
            		<li><a href="<?php echo $v['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $v['big_url'];?>" /></a></li>
            	<?php endforeach;?>
            <?php endif;?>
            </ul>
            <ul class="triggers">
            <?php if($topData['sylb']):?>
            	<?php
				$i=0;
            	foreach ($topData['sylb'] as $k=>$v):?>
            	<?php if($i==0):?>
            	<li class="cur"></li>
            	<?php else:?>
            	<li></li>
            	<?php endif;?>
            	<?php $i++;endforeach;?>
            <?php endif;?>
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
                        <?php if($topData["news"]){?>
                            <?php $i=0; foreach($topData['news'] as $value){?>
                            	<?php if($i > 5) break;?>
                                <?php if($i==0):?>
                                <li class="first">
                                    <a href="/show/<?php echo $value['id'];?>.html" target="_blank"><?php echo $value['title'];?></a>
                                </li>
                                <?php  else :?>
                                <li>
                                    <span><?php echo isset($value['updated'])?date('m-d',$value['updated']):'';?></span>
                                    <a href="/show/<?php echo $value['id'];?>.html" target="_blank">
                                        <strong>[新闻]</strong> <?php echo $value['title'];?>
                                        <img src="<?php echo $full_base_url ?>/v2/images/hot.png" alt="">
                                    </a>
                                </li>
                                <?php endif;?>
                            <?php $curCateId = $value['news_categories_id']; $i++;}?>
                        <?php }?>

                    </ul>
                    <div class="more"><a href="//yy.uu.cc/news/<?php echo $curCateId;?>.html" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php if($topData['gong_gao']){?>
                            <?php $i=0;foreach($topData['gong_gao'] as $val){?>
                            <?php if($i > 5) break;?>
                                <?php if($i==0):?>
                                    <li class="first">
                                        <a href="/show/<?php echo $val['id'];?>.html" target="_blank"><?php echo $val['title'];?></a>
                                    </li>
                                <?php  else :?>
                                <li>
                                    <span><?php echo isset($val['updated'])?date('m-d',$val['updated']):'';?></span>
                                    <a href="/show/<?php echo $val['id']?>.html" target="_blank">
                                        <strong>[活动]</strong> <?php echo $val['title'];?>
                                        <img src="<?php echo $full_base_url;?>/v2/images/hot.png" alt="">
                                    </a>
                                </li>
                                <?php endif;?>
                            <?php $curCateId = $val['news_categories_id']; $i++;}?>
                        <?php }?>
                    </ul>
                    <div class="more"><a href="//yy.uu.cc/news/<?php echo $curCateId;?>.html" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php if($topData['gong_luo']){?>
                            <?php $i=0; foreach($topData['gong_luo'] as $items){?>
                            <?php if($i > 5) break;?>
                                <?php if($i==0):?>
                                <li class="first">
                                    <a href="/show/<?php echo $items['id'];?>.html" target="_blank"><?php echo $items['title'];?></a>
                                </li>
                                <?php  else :?>
                                <li>
                                    <span><?php echo isset($items['updated'])?date('m-d',$items['updated']):'';?></span>
                                    <a href="/show/<?php echo $items['id']?>.html" target="_blank">
                                        <strong>[攻略]</strong> <?php echo $items['title'];?>
                                        <img src="<?php echo $full_base_url;?>/v2/images/hot.png" alt="">
                                    </a>
                                </li>
                                <?php endif;?>
                            <?php $curCateId = $items['news_categories_id']; $i++;}?>
                        <?php }?>
                    </ul>
                    <div class="more"><a href="//yy.uu.cc/news/<?php echo $curCateId;?>.html" target="_blank">更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
        <?php if($topData['zxhd']):?>
        	<li> <a href="<?php echo $topData['zxhd'][0]['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $topData['zxhd'][0]['big_url'];?>" alt="最新活动"></a>
            </li>
        <?php endif;?>
        <li> <a href="//yy.uu.cc/jietu" target="_blank"><img src="<?php echo $full_base_url ?>/v2/images/tp2.jpg" alt="精彩截图"></a></li>
        <?php if($topData['dsgl']):?>
        	<li> <a href="<?php echo $topData['dsgl'][0]['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $topData['dsgl'][0]['big_url'];?>" alt="大神攻略"></a>
            </li>
        <?php endif;?>
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="//weibo.com/u/5380843584/" target="_blank">
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
                <h4>如何关注<span>悠悠世界树</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号：<span>yysjs1</span></p>
                <img src="<?php echo $full_base_url ?>/v2/images/weixin.png" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
        	<div class="lbox2">
        	<h4>官网QQ群</h4>
            <p>官方群1：172710691<br />官方群2：173541505<br />iOS玩家1群：464483148<br />iOS玩家2群：257378807</p>
            </div>
            <!--<div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <?php echo $link;?>
            </div>-->
        </div>
    </div>
</div>
<?php // echo $this->element('sql_dump');?>

<?php require_once "_footer.ctp";?>

<script type="text/javascript" src="//tajs.qq.com/stats?sId=28932393" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/v2/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/v2/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/v2/js/switch.js"></script>
<script type="text/javascript">
$(document).ready(function(){
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
   // $(function(){
//        var zIndex = 99;
//        $('div.select').each(function(i){
//            var _this = $(this);
//            zIndex = zIndex - i;
//            $(this).css('z-index',zIndex);
//            _this.hover(
//                function(){$(this).find('ul').stop(true,true).animate({ height: 'show'},400)},
//                function(){$(this).find('ul').stop(true,true).animate({ height: 'hide'},1)}
//            );
//            _this.find('li').click(function(){
//                _this.find('h4').text($(this).text());
//                _this.find('input').eq(0).val($(this).attr('alt'));
//                _this.find('ul').hide();
//            });
//        });
//    });

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
</body>
</html>