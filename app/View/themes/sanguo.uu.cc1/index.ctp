<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
</head>
<body>
<?php 
$topData=$this->Mf->topData();
// var_dump($topData);exit;
$NewsCa_id = 80;//65;
$HdCa_id = 82;//66;
$GgCa_id = 84;//67;
$zxdtUrl = "//sanguo.uu.cc/uploads/";
$siteBlock = $topData['site_block'];
// $website_images = $this->Mf->get_website_images();
// var_dump($website_images);exit;
$blocks = array();
foreach ($siteBlock as $block) {
    $blocks[$block['Abbr']] = $block['content'];
}
$banner = $blocks['index_banner'];
$gameIcon = $blocks['game_icon'];
$androidDownloadLink =  $blocks['android_download_link'];
$iosDownloadLink = $blocks['ios_download_link'];
$qrcodeDownload = $blocks['qrcode_download'];
$gameDescriptionDetail = $blocks['game_description_detail']; // 游戏详细描述
$gameDescriptionSimple = $blocks['game_description_simple']; // 游戏简单描述
$videoLink = $blocks['video_link']; // 视频链接
?>


<div class="header">
    <div class="top clearfix">
        <div class="orange_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="/">萌翻三国</a></h1>
            <ul class="fl">
                <li class="cur"><a href="//sanguo.uu.cc">官网首页</a><em></em></li>
                <li><a href="/">游戏介绍</a><em></em></li>
                <li><a href="//bbs.uu.cc/forum-290-1.html">游戏论坛</a><em></em></li>
            </ul>
        </div>
    </div>
    <div class="sybanner">
        <?php if ($banner):?>
            <?php echo $banner;?>
        <?php else :?>
            <img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="360" border="0">
        <?php endif;?>
        </div>
    <div class="top_db">
        <div class="dbox">
            <div class="info ss" id="info_sq">
                <h2>萌翻三国</h2>
                <p><?php if (!$gameDescriptionSimple):?>年度超萌策略手游《萌翻三国》即将来袭，精美的场景原画，量身打造的角色配音<?php else : echo $gameDescriptionSimple; endif;?></p>
                <div class="more" id="btn_zk">详细介绍</div>
            </div>
            <div class="info zk" id="info_zk">
                <h2>萌翻三国</h2>
                <p><?php if (!$gameDescriptionDetail):?>年度超萌策略手游《萌翻三国》即将来袭，精美的场景原画，量身打造的角色配音，让你随时随地置身三国战场，书写不一样的三国历史；独特创新的游戏玩法，角色养成以及战争策略让你过足三国瘾。作为一款策略类手机游戏，玩家将扮演东汉末年三国鼎立形成之前的无名英雄，通过辅佐蜀汉、曹魏、孙吴势力中的一员，逐渐扩张自己的势力。通过外交和策略，善用群雄豪杰，帮助自己完成一统江山的伟大事业。<?php else: echo $gameDescriptionDetail; endif;?></p>
                <div class="more" id="btn_sq">收起</div>
            </div>
            <div class="download">
                <!--<?php if (!$iosDownloadLink):?>
                    <?php echo $iosDownloadLink;?>
                <?php else : // 没有添加IOS下载时显示默认图标?>
                    <a href="#"><img src="<?php echo $full_base_url;?>/images/d_ios.png" alt=""/></a>
                <?php endif;?>
                
                <?php if (!$androidDownloadLink):?>
                    <?php echo $androidDownloadLink;?>
                <?php else : // 没有添加Android下载时显示默认图标?>
                    <a href="#"><img src="<?php echo $full_base_url;?>/images/d_and.png" alt=""/></a>
                <?php endif;?>-->
				<a href="//android.myapp.com/myapp/detail.htm?apkName=com.tencent.tmgp.threekingsdoms"  target="_blank"><img src="//sanguo.uu.cc/sanguo.uu.cc/images/d_and.png" alt="下载"/></a> 
            </div>
            <!--<div class="wx">
                <?php if ($qrcodeDownload) :?>
                    <?php echo $qrcodeDownload;?>
                <?php else :?>
                    <img src="//sanguo.uu.cc/uploads/game/20141223104015_c3656.png" alt=""/>
                <?php endif;?>
            </div>-->
            <div class="icon">
                <?php if ($gameIcon):?>
                    <?php echo $gameIcon;?>
                <?php else :?>
                    <img src="<?php echo $full_base_url ?>/images/tub.png" alt="">
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<div class="content clearfix">
    <div class="main fl">
        <div class="news">
            <ul class="tab-hd clearfix">
                <li class="cur">全部<em></em></li>
                <li>攻略<em></em></li>
                <li>活动<em></em></li>
                <li>公告<em></em></li>
            </ul>
            <div class="tabCons">
                <div class="tab-con" style="display:block;">
                    <ul class="newslist">
                    <?php
                    $total=$topData["total"];
                    if(!empty($total)){
                    	foreach ($total as $key=>$v){
                    		if($key == 0){
                    ?>
                    		<li class="first"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></li>
                        <li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong><?=$name?></strong><?=$v['title']?> 
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li> 	
                    
                    <?php 
                    		}else{
                    ?>
                    			<li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl("all");?>">更&nbsp;多</a></div>
                </div>
                <div class="tab-con">
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
                            <span>[<?=date("m/d",$value["created"])?>]</span>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>">更&nbsp;多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                    <?php
                    $huodong=$topData["gong_luo"];
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">更&nbsp;多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                    <?php
                    $gonggao=$topData["gong_gao"];
                    if(!empty($gonggao)){
                    	foreach ($gonggao as $key=>$v){
                    		if($key == 0){
                    ?>
                    		<li class="first"><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>"><?=$v['title']?></a></li>
                        <li>
                            <span>[<?=date("m/d",$v["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[公告]</strong><?=$v['title']?> 
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li> 	
                    
                    <?php 
                    		}else{
                    ?>
                    			<li>
                            <span>[<?=date("m/d",$value["created"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                                <strong>[公告]</strong><?=$v['title']?> 
                                <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                            </a>
                        </li> 
                    
                    <?php 			
                    			
                    		}
                    		
                    		
                    	}
                    	
                    	
                    	
                    }
                    ?>
                    </ul>
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($GgCa_id);?>">更&nbsp;多</a></div>
                </div>
            </div>
        </div>
        <div class="dtbox">
            <h3><span>最新动态</span></h3>
            <ul class="dtlist clearfix">
            <?php 
            $zxdt=$topData["img_index_3"];
            if(!empty($zxdt)){
            	foreach ($zxdt as $key=>$v){
            		if($key == count($zxdt) - 1){
            ?>
            			<li class="last"><a href="//<?=$v['small_link']?>"><img src="<?=$zxdtUrl.$v['small_url']?>" alt="<?=$v['title']?>"></a></li>
            <?php 			
            			
            		}else{
            ?>
            			<li><a href="//<?=$v['small_link']?>"><img src="<?=$zxdtUrl.$v['small_url']?>" alt="<?=$v['title']?>"></a></li>
            
            <?php 			
            			
            		}
            	}
            }
            
            ?>
            </ul>
        </div>
        <div class="dtbox partner">
            <h3><span>合作友链</span></h3>
            <ul class="links clearfix">
            <?php 
            $hzyl = $topData['hzyl'];
            if(!empty($hzyl)){
            	foreach ($hzyl as $key=>$v){
            ?>
            		<li><a href="<?=$v['url']?>"><?=$v['title'] ?></a></li>
            
            <?php 		
            		
            	}
            	
            }
            
            ?>
            </ul>
        </div>
    </div>
    <div class="side fr">
        <div class="switch">
        <?php 
        	$img_index_1 = $topData['img_index_1'];
        ?>
        
            <ul class="runContent">
            <?php 
            if(!empty($img_index_1)){
            	foreach ($img_index_1 as $key=>$v){
            ?>
            		<li><a href="//<?$v['small_link']?>" target="_blank"><img src="<?=$zxdtUrl.$v['small_url']?>" /></a></li>
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
        <div class="quick">
            <a class="td1" href="//tieba.baidu.com/f?kw=%C3%C8%B7%AD%C8%FD%B9%FA&fr=ala0" target="_blank">游戏贴吧</a>
            <div class="td2" href="#">玩家QQ群<p class="qqDiv">萌翻三国玩家群<br />338607740</p></div>
        </div>
        <div class="video">
            <embed src="<?php echo $videoLink ? $videoLink :'//player.youku.com/player.php/sid/XODcxNDU0Njg0/v.swf';?>" allowFullScreen="true" quality="high" width="293" height="197" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        </div>
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/switch.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
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

    /*QQ群*/
    $(".td2").hover(function(){
        $(this).find(".qqDiv").show();
    },function(){
        $(this).find(".qqDiv").hide();
    });
    $(".td3").hover(function(){
        $(this).find("span").show();
    },function(){
        $(this).find("span").hide();
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39638800" charset="UTF-8"></script>
</body>
</html>