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
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?0e228a1d1e6a090fecadd9f9a71177ef";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
</head>
<body>
    <div class="page">
        <?php require_once '_top.ctp';?>
        <div class="content">
            <ul class="newslist">
            <?php
                    $news=$topData["huo_dong"];
                    if(!empty($news)){
                        foreach ($news as $key=>$v){
                            $v['small_url'] = isset($v['small_url']) ? $zxdtUrl.$v['small_url'] : "//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg";
                    ?>
                    <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                    <h3><?=$v['title']?></h3>
                    <div><?php echo mb_substr($v['content'],0,24,'utf-8')?>......</div>
                    <span><?=date("m/d",$v["created"])?></span>
                    <img src="<?php echo $v['small_url']?>" alt="">
                        </a></li>
                    <?php
                            }


                        }
             ?>
             <?php
                    $news=$topData["yx_zl"];
                    if(!empty($news)){
                        foreach ($news as $key=>$v){
                            $v['small_url'] = isset($v['small_url']) ? $zxdtUrl.$v['small_url'] : "//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg";
                    ?>
                    <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                    <h3><?=$v['title']?></h3>
                    <div><?php echo mb_substr($v['content'],0,24,'utf-8')?>......</div>
                    <span><?=date("m/d",$v["created"])?></span>
                    <img src="<?php echo $v['small_url']?>" alt="">
                        </a></li>
                    <?php
                            }


                        }
             ?>
             <?php
                    $news=$topData["gong_lue"];
                    if(!empty($news)){
                        foreach ($news as $key=>$v){
                            $v['small_url'] = isset($v['small_url']) ? $zxdtUrl.$v['small_url'] : "//tp2.uu.cc/tp2.uu.cc/images/li_img.jpg";
                    ?>
                    <li><a href="<?php echo $this->Base->getShowUrl($v["id"]);?>">
                    <h3><?=$v['title']?></h3>
                    <div><?php echo mb_substr($v['content'],0,24,'utf-8')?>......</div>
                    <span><?=date("m/d",$v["created"])?></span>
                    <img src="<?php echo $v['small_url']?>" alt="">
                        </a></li>
                    <?php
                            }


                        }
             ?>
            </ul>
        </div>
    </div>
 <div class="pop" style="display:none;">
     <img src="<?php echo $full_base_url ?>/images/wxpop.png" />
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
function isWx(){
       var ua = navigator.userAgent.toLowerCase();
       if(ua.match(/MicroMessenger/i) == "micromessenger"){
             return true;
       }else{
           return false;
       }
    };
var bullets = $('#dot').find('li');
$(function(){
    $("#download").click(function(){
        if(isWx()){
            $(".pop").show();
            return false;
        }
    });
    $(".pop").height($(document).height()+20);
    $(".pop").click(function(){
        $(".pop").hide();
    });
});
</script>
</body>
</html>
