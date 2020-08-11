<?php 
$topData=$this->Tj->topData();
// var_dump($topData);exit;
$NewsCa_id = 94;//65;
$HdCa_id = 98;//66;
$Glca_id = 96;
$GgCa_id = 100;//67;
// var_dump($topData);exit;
$zxdtUrl = "//tj2.uu.cc/uploads/";
$siteBlock = $topData['site_block'];
$category_id = isset($category_id) && $category_id  ?  $category_id : "index";
?>

<div class="header">
            <h1 class="tit_hide">调教三国2</h1>
            <div class="banner"><img src="<?php echo $full_base_url ?>/images/m_bg.jpg" alt=""></div>
            <ul class="dh">
                <li <?php if($category_id == "index" ) echo 'class="cur"';?>><a href="/">首页</a></li>
                <li <?php if($category_id == $NewsCa_id ) echo 'class="cur"';?>><a href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>">新闻</a></li>
                <li <?php if($category_id == $Glca_id ) echo 'class="cur"';?>><a href="<?php echo $this->Base->getNewsUrl($Glca_id);?>">攻略</a></li>
                <li <?php if($category_id == $HdCa_id ) echo 'class="cur"';?>><a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">活动</a></li>
            </ul>
            <div class="infoBox clearfix">
                <div class="info fl">
                    <h2>调教三国</h2>
                    <p>游戏大小：34.7MB</p>
                    <img src="<?php echo $full_base_url ?>/images/m_tub.png" alt="">
                </div>
                <div class="download fr">
                <?php 
            	if(!empty($siteBlock)){
            		foreach ($siteBlock as $key=>$v){
            			if(!in_array($v['Abbr'], array('download','ios_download'))) break;
            			$imgname = $v['title'] == 'ios下载' ? $full_base_url."/images/m_ios.png" : $full_base_url."/images/m_and.png" ;
            	?>
            		<a href="<?=$v['content']?>"><img src="<?=$imgname;?>" alt="<?=$v['title']?>"></a>
            	
            	<?php 
            		}
            	}
            	?>
                </div>
            </div>
        </div>