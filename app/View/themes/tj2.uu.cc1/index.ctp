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
</head>
<body>
<?php 
require_once "include.ctp";
$zxdtUrl = "//tj2.uu.cc/uploads/";
$siteBlock = $topData['site_block'];
$desc_block = $topData['desc_block'];
// var_dump($topData);exit;
// $website_images = $this->Mf->get_website_images();
// var_dump($website_images);exit;
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="#">调教三国</a></h1>
            <div class="note fl" id="note">
                <ul>
                <?php 
                	$gong_gao = $topData['gong_gao'];
                	if(!empty($gong_gao)){
                		foreach ($gong_gao as $key=>$v){
                ?>
                			<li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">公告：<?=$v['title']?></a></li>
                <?php 		
                			
                		}
                	}
                ?>
                </ul>
            </div>
            <a href="//www.idreamsky.com" class="gw">乐逗游戏官网</a>
        </div>
    </div>
    <div class="banBox">
        <div class="syBanner">
            <img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="360" border="0">
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                <?php 
                if(!empty($desc_block)){
                ?>
                <h2><?=$desc_block['title']?></h2>
                    <p><?php echo $this->Tj->substr_cut($desc_block['content'],100)?></p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk sl-shadow2" id="info_zk">
                    <h2><?=$desc_block['title']?></h2>
                    <p><?=$desc_block['content']?></p>
                    <div class="more" id="btn_sq">收起</div>
                </div>
                
                
                <?php 
                	
                }
                
                ?>
                    
                <div class="download">
                    <?php 
            	if(!empty($siteBlock)){
            		foreach ($siteBlock as $key=>$v){
            			if(!in_array($v['Abbr'], array('download','ios_download'))) break;
            			$imgname = $v['title'] == 'ios下载' ? $full_base_url."/images/d_ios.png" : $full_base_url."/images/d_and.png" ;
            	?>
            		<a href="<?=$v['content']?>"><img src="<?=$imgname;?>" alt="<?=$v['title']?>"></a>
            	
            	<?php 
            		}
            	}
            	?>
                </div>
                <div class="wx">
                    <img src="<?php echo $full_base_url ?>/images/download_ewm.png" alt="">
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon"><img src="<?php echo $full_base_url ?>/images/tub.png" alt=""></div>
            </div>
        </div>
    </div>
</div>
<div class="content clearfix">
    <div class="main fl">
        <div class="imgBox">
            <div class="showImg">
                <div class="jCarouselLite">
                    <ul class="clearfix">
                    <?php 
                    $img_index_1 = $topData['img_index_1'];
		            if(!empty($img_index_1)){
		            	foreach ($img_index_1 as $key=>$v){
		            ?>
		            		<li><img src="<?=$zxdtUrl.$v['small_url']?>" /></li>
		            <?php 
		            	}
		            
		            }
		            
		            ?>
                    </ul>
                </div>
            </div>
            <button class="btn_left"></button>
            <button class="btn_right"></button>
        </div>
        <div class="news">
            <ul class="tab-hd clearfix">
                <li class="cur">新闻<em></em></li>
                <li>活动<em></em></li>
                <li>攻略<em></em></li>
                <li>公告<em></em></li>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>">查看更多</a></div>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">查看更多</a></div>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($Glca_id);?>">查看更多</a></div>
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
                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($GgCa_id);?>">查看更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="side fr">
        <div class="switch">
            <ul class="runContent">
            <?php 
            $img_index_2 = $topData['img_index_2'];
            if(!empty($img_index_2)){
            	foreach ($img_index_2 as $key=>$v){
            ?>
            		<li><a href="//<?$v['small_link']?>"><img src="<?=$zxdtUrl.$v['small_url']?>" /></a></li>
            <?php 
            	}
            
            }
            
            ?>
            </ul>
            <ul class="triggers">
                <?php 
            if(!empty($img_index_2)){
            	foreach ($img_index_2 as $key=>$v){
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
            <a class="td1" href="//bbs.uu.cc/forum-287-1.html">游戏论坛</a>
            <div class="td2" href="#">玩家QQ群<p class="qqDiv">调教三国2玩家群<br />427336175</p></div>
        </div>
        <div class="video">
            <embed src="//player.youku.com/player.php/sid/XODU3MTE2MTI0/v.swf" allowFullScreen="true" quality="high" width="287" height="192" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
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
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
</body>
</html>