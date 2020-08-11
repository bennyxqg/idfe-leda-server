<!DOCTYPE html>
<html lang="zh-cn">
<?php include '_header.ctp' ?>
<body class="newslist">
<?php include 'include.ctp';?>
    <header>
        <div class="header-logo">
            <a href="/"><div class="icon"></div></a>
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
        <section class="banner">

        </section>
        <section class="news-nav">
            <ul data-tabtarget="newslist">
                <li class="active">
                    <a href="#" class="li-inner">
                        全部
                    </a>
                </li>
                <li>
                    <a href="#" class="li-inner">
                        新闻
                    </a>
                </li>
                <li>
                    <a href="#" class="li-inner">
                        公告
                    </a>
                </li>
                <li>
                    <a href="#" class="li-inner">
                        活动
                    </a>
                </li>
            </ul>
        </section>

        <section class="section-newslist" data-tobeactive="newslist">
            <div class="newslist active">
                <ul>
                
                <?php 
                $topData=$this->Hx->indexInitData(100);
                $total = $topData['total'];//所有
				if(!empty($total)){
					foreach ($total as $k=>$v){
				?>
				<li>
                        <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" class="li-inner">
                            <span class="type">[<?=$v['decription']?>]</span>
                            <?=$v['title']?>
                            <div class="date">
                                <?=date("m/d",$v["created"])?>
                            </div>
                        </a>
                    </li>
				<?php	
					}
				}
				?>
                </ul>
                    <div class="pagination">
                    <?php //echo $this->Hx->pagination($category_id,$page);?>
                	</div>
            </div>
            <div class="newslist">
                <ul>
                <?php 
				if(!empty($topData['news'])){
					foreach ($topData['news'] as $k=>$v){
				?>
				<li>
                        <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" class="li-inner">
                            <span class="type">[<?=$v['decription']?>]</span>
                            <?=$v['title']?>
                            <div class="date">
                                <?=date("m/d",$v["created"])?>
                            </div>
                        </a>
                    </li>
				<?php	
					}
				}
				?>
                </ul>
                <div class="pagination">
                    <?php //echo $this->Hx->pagination($category_id,$page);?>
                	</div>
            </div>
            <div class="newslist">
                <ul>
                <?php 
				if(!empty($topData['consulting'])){
					foreach ($topData['consulting'] as $k=>$v){
				?>
				<li>
                        <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" class="li-inner">
                            <span class="type">[<?=$v['decription']?>]</span>
                            <?=$v['title']?>
                            <div class="date">
                                <?=date("m/d",$v["created"])?>
                            </div>
                        </a>
                    </li>
				<?php	
					}
				}
				?>
                </ul>
                <div class="pagination">
                    <?php //echo $this->Hx->pagination($category_id,$page);?>
                	</div>
            </div>
            <div class="newslist">
                <ul>
                <?php 
				if(!empty($topData['activity'])){
					foreach ($topData['activity'] as $k=>$v){
				?>
				<li>
                        <a href="<?php echo $this->Base->getShowUrl($v["id"]);?>" class="li-inner">
                            <span class="type">[<?=$v['decription']?>]</span>
                            <?=$v['title']?>
                            <div class="date">
                                <?=date("m/d",$v["created"])?>
                            </div>
                        </a>
                    </li>
				<?php	
					}
				}
				?>
                </ul>
                <div class="pagination">
                    <?php //echo $this->Hx->pagination($category_id,$page);?>
                	</div>
            </div>
        </section>

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
    <script src="<?php echo $full_base_url ?>/mobile/js/main.js?jjjk"></script>
</body>
</html>
