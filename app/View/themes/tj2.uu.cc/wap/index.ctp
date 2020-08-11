<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <title><?= $title; ?></title>
    <meta content="<?= $keywords; ?>" name="keywords" />
    <meta content="<?= $description; ?>" name="description" />
    <meta name="viewport" content="target-densitydpi=device-dpi,width=640, user-scalable=yes">
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <link media="screen" href="<?php echo $full_base_url ?>/css/m.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <?php require_once '_top.ctp';?>
        <div class="content">
            <div class="swipeBox">
                <div id="slider" class="swiper-container">
                    <ul class="swipe-wrap">
                    <?php 
		            $img_index_3 = $topData['img_index_3'];
		            if(!empty($img_index_3)){
		            	foreach ($img_index_3 as $key=>$v){
		            ?>
		            		<li><img src="<?=$zxdtUrl.$v['small_url']?>" width="100%" /></li>
		            <?php 
		            	}
		            
		            }
		            
		            ?>
                    </ul>
                    <ul class="dot clearfix" id="dot">
                    <?php 
		            if(!empty($img_index_3)){
		            	foreach ($img_index_3 as $key=>$v){
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
            <div class="contact">
                <div class="wx fl"><a href="//bbs.uu.cc/forum-287-1.html">游戏论坛</a></div>
                <div class="qq fr">玩家QQ群：427336175</div>
            </div>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="<?php echo $full_base_url ?>/images/logo.png" alt=""></a>
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
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
var bullets = $('#dot').find('li');
li_w = 1/bullets.length*100;
bullets.css({'width':li_w+'%'});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
</body>
</html>
