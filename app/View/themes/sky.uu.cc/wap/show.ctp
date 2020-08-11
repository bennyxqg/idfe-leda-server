<?php 
$topData=$this->PK->topData();
$content=$result["News"];
$downloadlink = $this->PK->getBlock($site_id, 'downloadlink_android_wap'); // 下载链接

if(!empty($topData['total'])){
	foreach ($topData['total'] as $key=>$v){
		if($v['id'] == $news_id){
			$next_news = isset($topData['total'][$key+1]['id']) ? $topData['total'][$key+1]['id'] : '';
			$pre_news = isset($topData['total'][$key-1]['id']) ? $topData['total'][$key-1]['id'] : '';
			break;
		}
		
	}
}
?>

<?php require_once '_head.ctp';?>
    <div class="page">
        <div class="topbar">
            <a class="back" href="javascript:history.back();"></a>
            <?php if ($downloadlink) :?>
                <?php echo $downloadlink;?>
            <?php else:?>
                <a class="download" id="download" href="#">游戏下载</a>
            <?php endif;?>
        </div>
        <div class="content">
            <div class="news_tit">
                <h3><?=$content['title'] ?></h3>
                <p>时间：<?php echo date("Y-m-d H:i:s",$content["created"]);?></p>
            </div>
            <div class="news_con">
            <?=$content['content']?>
            </div>
        </div>
        <div class="bot_bar">
        <?php 
        if($pre_news){
        	$url = $this->Base->getShowUrl($pre_news);
        	echo '<a href="'.$url.'" class="fl"><上一篇</a>';
        }else{
        	echo '<a href="#" class="fl"></a>';
        }
        
		if($next_news){
        	$url = $this->Base->getShowUrl($next_news);
        	echo '<a href="'.$url.'" class="fr">下一篇></a>';
        }else{
        	echo '<a href="#" class="fr"></a>';
        }
        ?>
        </div>
    </div>
    <div class="pop">
        <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
    </div>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
    <script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }

    $(function(){
        $('.pop').height($(document).height());
        if(isWeiXin()){
            $('#download').on("touchend",function(){
                $('.pop').show();
                e.stopPropagation();
                return false;
            });
        }
        $('.pop').on("touchend",function(){
            $(this).hide();
        });
    });
    </script>
<?php require_once '_foot.ctp';?>
