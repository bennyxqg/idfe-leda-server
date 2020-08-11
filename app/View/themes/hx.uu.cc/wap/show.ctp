<!DOCTYPE html>
<html lang="zh-cn">
<?php include '_header.ctp' ?>
<body class="newsDetail">
<?php 
	include 'include.ctp';
	$categories = $this->Base->getNewsCategoryBySiteId($site_id);
	$newsCategoryId = $result['News']['news_categories_id'];
?>
    <header>
        <div class="header-logo">
            <a href="newslist.html"><div class="icon"></div></a>
            <div class="title">幻想之心</div>
            <div class="desc">首款动漫全明星手游</div>
        </div>
        <div class="download">
            <a href="javascript:down_hx();" data-action="dl" class="download-btn">
                <img data-btn="dlIOS" class="hide" src="<?php echo $full_base_url ?>/mobile/img/iOS-download.jpg" alt="">
                <img data-btn="dlAndroid" class="hide" src="<?php echo $full_base_url ?>/mobile/img/android-download.jpg" alt="">
            </a>
        </div>
        <script>
        function down_hx(){
        	var down_url;
        	if(sys == 1){//an zhuo
        		down_url = "<?=$android_list['content']?>";
        	}else{
        		down_url = "<?=$ios_list['content']?>";
        	}
        	window.location.href=down_url; 
        }
        
        </script>
    </header>
    <div class="wrapper">
        <section class="banner"></section>
        <article>
            <div class="title"><?php echo $result["News"]["title"];?></div>
            <div class="time">时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></div>
            <div class="content">
			<?php echo $result['News']['content'];?>
            </div>
        </article>

        <footer>
            <table class="links">
                <tbody>
                    <tr>
                        <td><a href="#">客服中心</a></td>
                        <td><a href="#">服务器列表</a></td>
                        <td><a href="#">进入论坛</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="copyright">
                Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有
            </div>
            <div class="tips">
                <p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</p>
                <p>适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
            </div>
        </footer>

    </div>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=38164475" charset="UTF-8"></script>
    <script src="//cdn.staticfile.org/zepto/1.1.4/zepto.min.js"></script>
    <script src="//cdn.staticfile.org/hammer.js/1.1.3/hammer.min.js"></script>
    <script src="<?php echo $full_base_url ?>/mobile/js/jquery_hammer_min.js"></script>
    <!-- // <script src="./js/swipe.js"></script> -->
    <script src="<?php echo $full_base_url ?>/mobile/js/main.js?klklklkl"></script>
</body>
</html>
