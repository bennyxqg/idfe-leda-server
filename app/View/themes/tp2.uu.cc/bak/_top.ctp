<?php 
$topData=$this->Tp->topData();
// var_dump($topData);exit;
$NewsCa_id = 22;//
$HdCa_id = 23;//
$Glca_id = 21;
$GgCa_id = 102;//76;

?>

<div class="top clearfix">
    <div class="blue_bg fl"></div>
    <div class="white_bg fr"></div>
    <div class="tbox clearfix">
        <h1 class="fl"><a href="#">水果忍者</a></h1>
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
