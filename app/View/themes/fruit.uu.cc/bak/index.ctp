<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?>"/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="baidu-site-verification" content="wkFtx4mgS4" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/minimalist.css" type="text/css" />
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?bd1059138318d7c7f0b88858b83c5421";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
</head>
<body>
<?php 
$topData=$this->Fr->topData();
// var_dump($topData);exit;
$NewsCa_id = 86;//65;
$HdCa_id = 88;//66;
$GgCa_id = 90;//67;
$zxdtUrl = "//fruit.uu.cc/uploads/";
$siteBlock = $topData['site_block'];
$iosDownload = $siteBlock['ios_download']; // ios下载链接
$androidDownload = $siteBlock['android_download']; // 安卓下载链接
$qrcodeDownload = $siteBlock['index_qrcode_download']; // 二维码下载
$banner = $siteBlock['index_banner']; // 首页背景图
$gameIcon = $siteBlock['game_icon']; // 游戏图标
$gameDescriptionDetail = $siteBlock['game_description_detail']; // 游戏详细描述
$gameDescriptionSimple = $siteBlock['game_description_simple']; // 游戏简单描述
// $website_images = $this->Mf->get_website_images();
?>

<div class="header">
    <div class="banBox">
        <div class="syBanner">
            <?php if ($banner) : // banner?>
        	   <?php echo $banner;?>
    	    <?php else :?>
    	       <img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="360" border="0">
    	    <?php endif;?>
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2>水果忍者</h2>
                    <p>
                    <?php if ($gameDescriptionSimple):?>
                	   <?php echo $gameDescriptionSimple;?>
            	    <?php else :?>
            	       《水果忍者》（Fruit Ninja）是一款经典之作，刺激好玩、容易上手却教人难以离手的
            	    <?php endif;?>
                    </p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk sl-shadow2" id="info_zk">
                    <h2>水果忍者</h2>
                    <p>
                    <?php if ($gameDescriptionDetail):?>
                	   <?php echo $gameDescriptionDetail;?>
            	    <?php else :?>
                    《水果忍者》（Fruit Ninja）是一款经典之作，刺激好玩、容易上手却教人难以离手的休闲益智类游戏。玩家将会在游戏中扮演一个讨厌水果的忍者，用锋利的刀切开各种水果。只需将手指扫过屏幕，就能像忍者战士般痛快地切开溅出美味果汁的水果。但注意不要触碰混杂其中的炸弹，一旦引发爆炸，你的刺激冒险便会瞬间终结！</p>
            	    <?php endif;?>
                    <div class="more" id="btn_sq">收起</div>
                </div>
                <div class="download">
            	<?php if ($iosDownload) : // ios下载?>
            	   <?php echo $iosDownload;?>
        	    <?php else :?>
        	       <a href="#"><img src="<?php echo $full_base_url;?>/images/d_ios.png"></a>
        	    <?php endif;?>
                <?php if ($androidDownload) : // Android下载?>
            	   <?php echo $androidDownload;?>
        	    <?php else :?>
        	       <a href="#"><img src="<?php echo $full_base_url;?>/images/d_and.png"></a>
        	    <?php endif;?>
                </div>
                <div class="wx">
                    <?php if ($qrcodeDownload) : // 二维码下载?>
                	   <?php echo $qrcodeDownload;?>
            	    <?php else :?>
            	       <img src="<?php echo $full_base_url ?>/images/download_ewm.png" alt="">
            	    <?php endif;?>
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon">
                    <?php if ($gameIcon) : // 游戏图标?>
                	   <?php echo $gameIcon;?>
            	    <?php else :?>
            	       <img src="<?php echo $full_base_url ?>/images/tub.png" alt="">
            	    <?php endif;?>
                </div>
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
            if(!empty($img_index_1)){
            	foreach ($img_index_1 as $key=>$v){
            ?>
            		<li><a href="<?$v['small_link']?>" target="_blank"><img src="<?=$zxdtUrl.$v['small_url']?>" /></a></li>
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
                    		if($key > 5) break;
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php
                    $huodong=$topData["huo_dong"];
                    if(!empty($huodong)){
                    	foreach ($huodong as $key=>$v){
                    		if($key > 5) break;
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">更多</a></div>
                </div>
                <div class="tab-con">
                    <ul class="newslist">
                        <?php
                    $gonggao=$topData["gong_lue"];
                    if(!empty($gonggao)){
                    	foreach ($gonggao as $key=>$v){
                    		if($key > 5) break;
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
                            <span>[<?=date("m/d",$v["created"])?>]</span>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($GgCa_id);?>">更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="imgLink">
        <ul class="clearfix">
        <?php 
        $img_index_2 = $topData['img_index_2'];

        if(!empty($img_index_2)){
        ?>
        <li><a href="<?=$img_index_2[0]['small_link']?>" target="_blank"><img src="<?=$zxdtUrl.$img_index_2[0]['small_url']?>" alt="最新活动"></a></li>
        <?php 
        }
        
        ?>
        <?php 
        $img_index_3 = $topData['img_index_3'];
        if(!empty($img_index_3)){
        ?>
        <li><a href="<?=$img_index_3[0]['small_link']?>" target="_blank"><img src="<?=$zxdtUrl.$img_index_3[0]['small_url']?>" alt="大神攻略"></a></li>
        <?php 
        }
        
        ?>
        <?php 
        $img_index_4 = $topData['img_index_4'];
        if(!empty($img_index_4)){
        ?>
        <li><a href="<?php echo $this->Base->getPictureurl("4");?>" target="_blank"><img src="<?php echo $full_base_url ?>/images/jcjt.jpg" alt="精彩截图"></a></li>
        <?php 
        }
        
        ?>
        
            
        </ul>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="//weibo.com/NinjaFruit" target="_blank">
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
                <h4>如何关注<span>水果忍者</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span>FruitNinja2011</span></p>
                <img src="<?php echo $full_base_url ?>/images/wx.png" alt="">
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <ul>
                    <li><a href="#" target="_blank">肥猪游戏</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/common.js"></script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>