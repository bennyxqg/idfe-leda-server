<?php 
require_once '_header.ctp'; 

$content = $result["News"];
$preId = $webHelper->getPreNewsId($site_id, $content['id']); // 上一篇新闻id
$nextId = $webHelper->getNextNewsId($site_id, $content['id']); // 下一篇新闻id
?>
<body>
     <div class="page">
        <div class="reback">
            详情<img src="<?php echo $full_base_url ?>/images/back.png" alt="返回" />
        </div>
        <div class="cont_detail">
            <div class="detail_title"><?php echo $content['title'] ?></div>
            <div class="detail_date">时间：<?php echo date("Y-m-d H:i",$content["updated"]);?></div>
            <div class="detail_desc">
                <?php echo $content['content'];?>
            </div>
        </div>
        <div class="footer">
            <img src="<?php echo $full_base_url ?>/images/logo.png" alt="创梦天地" />
            <div class="atten">
                健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗 <br />
                适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活
            </div>
        </div>
        <div class="fpage clearfix">
            <?php 
            if($preId){
            	$url = $this->Base->getShowUrl($preId['id']);
            	echo '<a href="'.$url.'" class="last fl">&lt;上一篇</a>';
            }
            
            if($nextId){
            	$url = $this->Base->getShowUrl($nextId['id']);
            	echo '<a href="'.$url.'" class="next fr">下一篇&gt;</a>';
            }
            ?>
        </div>
    </div>
</body>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    $(function () {
        $(".reback img").click(function () {
            history.back();
        });
        window.onload = (function () {
            $(".detail_desc img").each(function () {
                if ($(this).width() > 888) {
                    $(this).css("width", "888px");
                }
            });
        });
        $(window).resize(function () {
            $(".detail_desc img").each(function () {
                if ($(this).width() > 888) {
                    $(this).css("width", "888px");
                }
            });
        })
    });
</script>
</html>
