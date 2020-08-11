<!DOCTYPE html>
<html>
<?php require_once "_header.ctp" ?>
<body>
<?php  $this->TemRun->indexInitData();?>

<?php $consulting=$this->TemRun->indexInitData["consulting"];?>
<?php $news=$this->TemRun->indexInitData["news"];?>
<?php $activity=$this->TemRun->indexInitData["activity"];?>
<?php $img_index_1=$this->TemRun->indexInitData["img_index_1"];?>
<?php $img_index_2=$this->TemRun->indexInitData["img_index_2"];?>
<?php $text_index_3=$this->TemRun->indexInitData["text_index_3"];?>


<div class="page">
    <div class="header">
        <h1>神庙逃亡2</h1>
    </div>
    <div class="layout">
        <!-- sub end -->
                <?php require_once "_left.ctp" ?>
        <!-- sub end -->
        <!-- core start -->
        <div class="core">
            <div class="clearfix">
                <div class="news-hb">
                    <ul class="tabs">
                        <li class="cur">最新资讯</li>
                        <li>新闻中心</li>
                        <li>活动</li>
                    </ul>
                    <div class="newsList">
                        <div>
                            <ul>
                                <?php if($consulting):?>
                                    <?php foreach($consulting as $key=>$value):?>
                                        <li>
                                            <p><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [最新资讯]<?php echo $value["title"];?></a></p>
                                            <span class="time"><?php echo date("m/d",$value["updated"]);?></span>
                                        </li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                            <p class="tr"><a href="<?php echo $this->Base->getNewsUrl(21);?>">更多 >></a></p>
                        </div>
                        <div style="display:none">
                            <ul>
                                <?php if($news):?>
                                    <?php foreach($news as $key=>$value):?>
                                        <li>
                                            <p><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [新闻中心]<?php echo $value["title"];?></a></p>
                                            <span class="time"><?php echo date("m/d",$value["updated"]);?></span>
                                        </li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                            <p class="tr"><a href="<?php echo $this->Base->getNewsUrl(22);?>">更多 >></a></p>
                        </div>
                        <div style="display:none">
                            <ul>
                                <?php if($activity):?>
                                 <?php foreach($activity as $key=>$value):?>
                                <li>
                                    <p><a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank"> [活动]<?php echo $value["title"];?></a></p>
                                    <span class="time"><?php echo date("m/d",$value["updated"]);?></span>
                                </li>
                                 <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                            <p class="tr"><a href="<?php echo $this->Base->getNewsUrl(23);?>">更多 >></a></p>
                        </div>
                    </div>
                </div>
                <div class="switch" id="tg">
                    <ul class="runContent">
                         <?php if($img_index_1):?>
                          <?php foreach($img_index_1 as $key=>$value):?>
                                   <li><a href="<?php $value["small_link"]?>" target="_blank"><img src="<?php echo  PHOTO_URL.$value["small_url"]?>" alt=""></a></li>
                           <?php endforeach;?>
                         <?php endif;?>
                    </ul>
                    <ul class="triggers">
                        <?php if($img_index_1):?>
                        <?php foreach($img_index_1 as $key=>$value):?>
                                        <?php if($key == 0):?>
                                            <li class="cur"></li>
                                        <?php else:?>
                                            <li></li>
                                         <?php endif;?>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <div class="clearfix">
                <div class="jt">
                    <h3><img src="<?php echo $full_base_url ?>/images/jtt.jpg" alt="游戏截图" /></h3>
                    <div class="switch" id="jt">
                        <ul class="runContent">
                            <?php if($img_index_2):?>
                                <?php foreach($img_index_2 as $key=>$value):?>
                                    <li><img src="<?php echo  PHOTO_URL.$value["small_url"]?>" alt=""></li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                        <ul class="triggers">
                            <?php if($img_index_2):?>
                                <?php foreach($img_index_2 as $key=>$value):?>
                                    <?php if($key == 0):?>
                                        <li class="cur"></li>
                                    <?php else:?>
                                        <li></li>
                                    <?php endif;?>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
                <div class="video">
                    <h3><img src="<?php echo $full_base_url ?>/images/sp.jpg" alt="游戏视频" /></h3>
                    <div id="video"></div>
                </div>
            </div>
            <div class="link">
                <h3><img src="<?php echo $full_base_url ?>/images/mt.jpg" alt="合作媒体" /></h3>
                <div class="box">
                    <?php if(!empty($text_index_3)):?>
                     <?php foreach($text_index_3 as $key=>$value):?>
                    <a href="<?php echo $value["url"]?>" target="_blank"><?php echo  $value["title"]?></a>
                     <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <!-- sub end -->
    </div>
</div>

<?php require_once "_footer.ctp" ?>

<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/flowplayer.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/switch.js" type="text/javascript"></script>

<script type="text/javascript">
    flowplayer.conf = {
        engine:"flash"
    };
    $(function(){
        //新闻切换
        $(".tabs").children().click(function(){
            var i = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".newsList").children(":eq("+i+")").show().siblings().hide();
        });
        //推荐位图片
        $("#tg").Switch({
            width:407,
            height:231,
            moveInterval:400,
            interval:5000,
            direction:"alpha",
            handle:".triggers"
        });
        //游戏截图
        $("#jt").Switch({
            width:407,
            height:231,
            moveInterval:400,
            interval:7000,
            direction:"alpha",
            handle:".triggers"
        });
        //视频
        $("#video").flowplayer({
            playlist: [
                [{ flv:"//dl.uu.cc/ars/templerun2web.mp4"}]
            ],
            poster: '<?php echo $full_base_url ?>/images/play.jpg',
            ratio: 3/4
        });
    });
</script>

</body>
</html>