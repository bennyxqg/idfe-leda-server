<?php
$topData=$this->Tp->topData();
// var_dump($topData);exit;
$NewsCa_id = 22;
$HdCa_id = 23;
$Glca_id = 21;
$GgCa_id = 102;//76;
$yxzl_id = 104;//78
// var_dump($topData);exit;
$zxdtUrl = "//tp2.uu.cc/uploads/";
$siteBlock = $topData['site_block'];
$category_id = isset($category_id) && $category_id  ?  $category_id : "index";
$android_download = $this->Tp->getBlock($this->Tp->site_id, "android_download_url",true);
$ios_download = $this->Tp->getBlock($this->Tp->site_id, "ios_download_url",true);
?>
<div class="header">
            <h1 class="tit_hide">神庙逃亡2</h1>
            <div class="swipeBox">
                <div id="slider" class="swiper-container">
                    <ul class="swipe-wrap">
                    <?php
                    $img_index_4 = $topData['img_index_4'];
                    if(!empty($img_index_4)){
                        foreach ($img_index_4 as $key=>$v){
                    ?>
                            <li><img src="<?=$zxdtUrl.$v['small_url']?>" width="100%" /></li>
                    <?php
                        }

                    }

                    ?>
                    </ul>
                    <ul class="dot clearfix" id="dot">
                    <?php
                    if(!empty($img_index_4)){
                        foreach ($img_index_4 as $key=>$v){
                            if($key == 0){
                    ?>
                                <li class="on"></li>
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
            </div>
            <ul class="dh">
            <li <?php if($category_id == "index" ) echo 'class="cur"';?>><a href="/">首页</a></li>
                <li <?php if($category_id == $NewsCa_id ) echo 'class="cur"';?>><a href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">热门活动</a></li>
                <li <?php if($category_id == $Glca_id ) echo 'class="cur"';?>><a href="<?php echo $this->Base->getNewsUrl($yxzl_id);?>">游戏资料</a></li>
                <li <?php if($category_id == $HdCa_id ) echo 'class="cur"';?>><a href="<?php echo $this->Base->getNewsUrl($Glca_id);?>">攻略集合</a></li>
            </ul>
            <div class="infoBox clearfix">
                <div class="info fl">
                    <h2>神庙逃亡2</h2>
                    <p>游戏大小：34.7MB</p>
                    <img src="<?php echo $full_base_url ?>/images/m_tub.png" alt="">
                </div>
                <div class="download fr">
                <a href="<?=$android_download['content']?>"  id="download"><img width="100%" src="<?php echo $full_base_url ?>/images/y_az.png" alt="<?=$v['title']?>"></a>
                     <a href="<?=$ios_download['content']?>"  id="download"><img width="100%" src="<?php echo $full_base_url ?>/images/y_ios.png" alt="<?=$v['title']?>"></a>
                
                <?php
                if(!empty($siteBlock)){
                    foreach ($siteBlock as $key=>$v){
                        if(!in_array($v['Abbr'], array('download','ios_download'))) break;
//             			$imgname = $v['title'] == 'ios下载' ? $full_base_url."/images/m_ios.png" : $full_base_url."/images/m_and.png" ;
                ?>
                    <a href="<?=$android_download['content']?>"  id="download"><img width="100%" src="<?php echo $full_base_url ?>/images/y_az.png" alt="<?=$v['title']?>"></a>
                     <a href="<?=$ios_download['content']?>"  id="download"><img width="100%" src="<?php echo $full_base_url ?>/images/y_ios.png" alt="<?=$v['title']?>"></a>
                <?php
                    }
                }
                ?>

                </div>
            </div>
        </div>