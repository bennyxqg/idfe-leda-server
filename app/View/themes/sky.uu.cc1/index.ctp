<?php 
// 获得所有banner
$allBlock = array();
$blocks = $this->Base->getAllBlock($site_id);

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
$videoLink = $allBlock['index_video_link']; // 首页视频链接
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
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
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
<!--
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">极品滑板酷跑</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//pao.uu.cc">官网首页</a><em></em></li>
                <li><a href="//www.idreamsky.com/games/show/131">游戏介绍</a><em></em></li>
            </ul>
        </div>
    </div>
    -->
    <div class="banBox">
        <div class="syBanner">
            <?php if($banner){?>
                <?php echo $banner;?>
            <?php }else{?>
                <img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="512" border="0">
            <?php }?>
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2>极品滑板酷跑</h2>
                    <p>
                    <?php if (!$gameDescriptionSimple): // 游戏简单描述?>
                    《极品滑板酷跑》是一款3D题材的横版"滑板跑酷"游戏
                    <?php else :?>
                        <?php echo $gameDescriptionSimple;?>
                    <?php endif;?>
                    </p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2>极品滑板酷跑</h2>
                    <p>
                    <?php if (!$gameDescriptionDetail): // 游戏详细描述?>
                    《地铁跑酷》是一款3D建模Q版美漫风格的跑酷类休闲手游。游戏的背景设定在地铁铁轨上，玩家要帮助Jake和淘气的小伙伴们躲避警察的追捕，躲避障碍物与往来的地铁。调皮恶搞的设定、嬉皮卡通的画风以及紧张刺激、停不了手的操作体验，使得《地铁跑酷》成为一款品质较高、气质独特同时又符合大众诉求、内涵与玩法可深挖的诚意作品。
                    <?php else :?>
                        <?php echo $gameDescriptionDetail;?>
                    <?php endif;?>
                    </p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>
                <div class="download">
                    <?php if (!$downloadLink): // 下载链接?>
                    <a href="//dl.uu.cc/idreamsky/SubwaySurf-Free-68_v2.26.0_s2.3.8.3_LE0S0N00000.apk"><img src="<?php echo $full_base_url ?>/images/download.png" alt="下载"></a>
                    <?php else :?>
                        <?php echo $downloadLink;?>
                    <?php endif;?>
                    <?php if (!$qrcodeDownload): // 下载二维码?>
                    <img src="<?php echo $full_base_url ?>/images/smxz.png" alt="" width="120">
                    <?php else :?>
                        <?php echo $qrcodeDownload;?>
                    <?php endif;?>
                </div>
                <div class="icon">
                    <?php if (!$gameIcon): // 游戏图标?>
                    <img src="<?php echo $full_base_url ?>/images/tub.png" alt="">
                    <?php else :?>
                        <?php echo $gameIcon;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <?php $image_list=$this->Sky->topData();?>
            <ul class="runContent">
                <?php if($image_list['img_index_2']){?>
                    <?php foreach($image_list['img_index_2'] as $value){?>
                        <li>
                           <!--  <a href="<?php echo $value['small_link'];?>" target="_blank">
                                <img src="/uploads/<?php echo $value['small_url'];?>" />
                            </a> -->
                            <a href='<?php echo $value["big_link"];?>' target="_blank">
                                <img alt="<?php $value["alt"];?>" title="<?php $value["title"];?>" src="/uploads/<?php echo $value["big_url"];?>"/>
                            </a>
                        </li>
                    <?php }?>
                <?php }else{?>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                <?php }?>
            </ul>
            <ul class="triggers">
                <?php if($image_list['img_index_2']){ $switch = 0;?>

                    <?php foreach($image_list['img_index_2'] as $value){?>
                        <li <?php if ($switch == 0) { echo 'class="cur"';}?>>
                        </li>
                    <?php $switch++; }?>
                <?php }else{?>
                     <li class="cur"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                <?php }?>
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
                    <?php $content=$this->Sky->indexInitData();?>
                    <ul class="newslist">
                        <?php if($content["news"]){?>
                            <?php $i=0; foreach($content['news'] as $value){?>
                                <?php if($i==0):?>
                                <li class="first">
                                    <a href="/show/<?php echo $value['id'];?>.html" target="_blank"><?php echo $value['title'];?></a>
                                </li>
                                <?php  else :?>
                                <li>
                                    <span><?php echo isset($value['updated'])?date('m-d',$value['updated']):'';?></span>
                                    <a href="/show/<?php echo $value['id'];?>.html" target="_blank">
                                        <strong>[新闻]</strong> <?php echo $value['title'];?>
                                        <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                                    </a>
                                </li>
                                <?php endif;?>
                            <?php $curCateId = $value['news_categories_id']; $i++;}?>
                        <?php }?>

                    </ul>
                    <div class="more"><a href="//sky.uu.cc/news/<?php echo $curCateId;?>.html" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php if($content['gong_gao']){?>
                            <?php $i=0;foreach($content['gong_gao'] as $val){?>
                                <?php if($i==0):?>
                                    <li class="first">
                                        <a href="/show/<?php echo $val['id'];?>.html" target="_blank"><?php echo $val['title'];?></a>
                                    </li>
                                <?php  else :?>
                                <li>
                                    <span><?php echo isset($val['updated'])?date('m-d',$val['updated']):'';?></span>
                                    <a href="/show/<?php echo $val['id']?>.html" target="_blank">
                                        <strong>[活动]</strong> <?php echo $val['title'];?>
                                        <img src="<?php echo $full_base_url;?>/images/hot.png" alt="">
                                    </a>
                                </li>
                                <?php endif;?>
                            <?php $curCateId = $val['news_categories_id']; $i++;}?>
                        <?php }?>
                    </ul>
                    <div class="more"><a href="//sky.uu.cc/news/<?php echo $curCateId;?>.html" target="_blank">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php if($content['gong_lv']){?>
                            <?php $i=0; foreach($content['gong_lv'] as $items){?>
                                <?php if($i==0):?>
                                <li class="first">
                                    <a href="/show/<?php echo $items['id'];?>.html" target="_blank"><?php echo $items['title'];?></a>
                                </li>
                                <?php  else :?>
                                <li>
                                    <span><?php echo isset($items['updated'])?date('m-d',$items['updated']):'';?></span>
                                    <a href="/show/<?php echo $items['id']?>.html" target="_blank">
                                        <strong>[攻略]</strong> <?php echo $items['title'];?>
                                        <img src="<?php echo $full_base_url;?>/images/hot.png" alt="">
                                    </a>
                                </li>
                                <?php endif;?>
                            <?php $curCateId = $items['news_categories_id']; $i++;}?>
                        <?php }?>
                    </ul>
                    <div class="more"><a href="//sky.uu.cc/news/<?php echo $curCateId;?>.html" target="_blank">更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
            <?php if($image_list['img_index_4']){?>
                <?php foreach($image_list['img_index_4'] as $value){?>
                    <li>
                        <a href="<?php echo $value['small_link'];?>" target="_blank">
                            <img src="/uploads/<?php echo $value['small_url'];?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>">
                        </a>
                    </li>
                <?php }?>
            <?php }else{?>
                <li> <a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/tp1.jpg" alt="最新活动"></a>
                </li>
                <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/tp2.jpg" alt="大神攻略"></a></li>
                <li><a href="/jietu" target="_blank"><img src="<?php echo $full_base_url ?>/images/tp3.jpg" alt="精彩截图"></a></li>
            <?php }?>
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="//weibo.com/ditiepaoku/home?topnav=1&wvr=6" target="_blank">
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
                <h4>如何关注<span>极品滑板酷跑</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span>ditiepaoku2015</span></p>
                <img src="<?php echo $full_base_url ?>/images/smxz.png" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <?php echo $link;?>
            </div>
        </div>
    </div>
</div>
<?php // echo $this->element('sql_dump');?>
<div class="footer" style="position:relative">
    <span class="tb_bq" style="position:absolute;right:0px;top:40px;"><img src="<?php echo $full_base_url ?>/images/bq_tb.png"></span>
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<!-- <div class="popup">
    <div class="mask"></div>
    <?php $first_img=$this->Sky->img_list('first_1');?>
    <div class="video">
        <div class="vBox">
            <embed src="<?php if (!$videoLink):?>//player.youku.com/player.php/sid/XODU0OTEyNzQw/v.swf<?php else : echo $videoLink; endif;?>" allowFullScreen="true" quality="high" width="730" height="450" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        </div>
        <?php if($first_img){?>
        <img src="/uploads/<?php echo $first_img[0]['big_url'];?>" alt="">
        <?php }else{?>
        <img src="<?php echo $full_base_url;?>/images/video.jpg" alt="">
        <?php }?>
        <a href="javascript:;" class="close"></a>
    </div>
</div> -->
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/js/switch.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
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
</body>
</html>