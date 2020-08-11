<?php 
$this->Gbsg->init(array('site_id' => $site_id));
$blocks = $this->Gbsg->getAllBlock();
$banner = $blocks['index_banner']; // banner
$logo = $blocks['logo']; // 小logo
$gameDescriptionSimple = $blocks['game_description_simple']; // 短描述
$gameDescriptionDetail = $blocks['game_description_detail']; // 长描述
$downloadIos = $blocks['ios_download_img']; // ios下载
$downloadAndroid = $blocks['android_download_img']; // Android下载
$qrcodeDownload = $blocks['qrcode_download']; // 下载二维码
$qrcodeWeixin = $blocks['qrcode_weixin']; // 微信公众号二维码 
$friendlinks = $blocks['friendlinks']; // 官方合作伙伴
$imageLink = $blocks['imagelink_index']; // 三个图片链接

$loopImage = $this->Gbsg->getImageList('loop_img'); // 轮播图片
$loopImageGame = $this->Gbsg->getImageList('loop_img_game'); // 游戏截图轮播图片

$allCategories = $this->Gbsg->getNewsCategory(); // 所有新闻分类
$categories = $allCategories;

unset($categories[$this->Gbsg->specialCategoryId]); // 首页不显示 公告 分类
unset($categories[$this->Gbsg->roleCateId]); // 首页不显示 人物大全 分类
unset($categories[$this->Gbsg->propCateId]); // 首页不显示 道具大全 分类

$categoryIds = array_keys($categories);
$news = $this->Gbsg->getNews($categoryIds); // 显示的新闻
ksort($categories);
ksort($news);

$noticeCateIds = array('id' => $this->Gbsg->specialCategoryId); // 特殊显示的公告
$notices = $this->Gbsg->getNews($noticeCateIds); // 公告
$roles = $this->Gbsg->getNewsByLimit($this->Gbsg->roleCateId, 10); // 人物大全
$props = $this->Gbsg->getNewsByLimit($this->Gbsg->propCateId, 6); // 道具大全
?>

<?php include '_header.ctp' ?>
    <?php include '_top.ctp' ?>
    <div class="banBox">
        <div class="syBanner">
            <?php if ($banner):?>
                <?php echo $banner;?>
            <?php else :?>
                <img src="<?php echo $full_base_url ?>/images/banner.jpg" width="1920" height="512" border="0">
            <?php endif;?>
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2><?php echo $name?></h2>
                    <p><?php echo $gameDescriptionSimple;?></p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk sl-shadow2" id="info_zk">
                    <h2><?php echo $name?></h2>
                    <p><?php echo $gameDescriptionDetail;?></p>
                    <div class="more" id="btn_sq">收起</div>
                </div>
                <div class="download">
                    <?php if ($downloadIos): echo $downloadIos; endif;// ios下载链接?>
                    <?php if ($downloadAndroid): echo $downloadAndroid; endif;// Android下载链接?>
                </div>
                <div class="wx">
                    <?php if ($qrcodeDownload): echo $qrcodeDownload; endif; // 下载二维码?>
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon"><?php if ($logo): echo $logo; endif;// 游戏图标?></div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <ul class="runContent">
                <?php if ($loopImage) :?>
                    <?php foreach ($loopImage as $value):?>
                        <?php if ($value['big_link']):?>
                            <li><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></a></li>
                        <?php else :?>
                            <li><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php else :?>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo $full_base_url ?>/images/qh.jpg" /></a></li>
                <?php endif;?>
            </ul>
            <ul class="triggers">
                <?php if ($loopImage) :?>
                    <?php foreach ($loopImage as $key => $value):?>
                        <?php if ($key == 0):?>
                            <li class="cur"></li>
                        <?php else :?>
                            <li></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php else :?>
                    <li class="cur"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                <?php endif;?>
            </ul>
        </div>
        <div class="news fr">
            <ul class="tab-hd clearfix">
                <?php if ($categories):?>
                    <?php
                    $i = 0;    
                    foreach ($categories as $value):
                    ?>
                        <li <?php if ($i == 0):?>class="cur"<?php endif;?>><?php echo $value;?><em></em></li>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                <?php else:?>
                    <li class="cur">新闻<em></em></li>
                    <li>活动<em></em></li>
                    <li>攻略<em></em></li>
                <?php endif;?>
            </ul>
            <div class="tabCons">
                <?php if ($news):?>
                    <?php
                    $ci = 0;
                    foreach ($news as $categoryId => $value) :
                    $mostClicks = $this->Gbsg->getMostClicksNews($categoryId); // 点击数最多的记录id
                    $lastNews = $this->Gbsg->getLastNews($categoryId); // 最新的记录id
                    ?>
                        <div class="tab-con" <?php if ($ci == 0):?>style="display:block;"<?php endif;?>>
                            <ul class="newslist">
                                <?php if($value): $hot = array();?>
                                    <?php foreach ($value as $k => $v) : ?>
                                        <?php if ($k == 0) :?>
                                            <li class="first"><a href="<?php echo $this->Gbsg->getShowUrl($v['id']);?>" target="_blank"><?php echo $v['title'];?></a></li>
                                        <?php else :?>
                                            <li>
                                                <span><?php echo date('m/d',$v['updated']);?></span>
                                                <a href="<?php echo $this->Gbsg->getShowUrl($v['id']);?>">
                                                    <strong>[<?php echo $categories[$v['news_categories_id']]?>]</strong><?php echo $v['title'];?>
                                                    <?php 
                                                    // 需求：最新的和点击数最多的记录加hot
                                                    if($v['id'] == $lastNews['id'] || $v['id'] == $mostClicks['id']):
                                                    ?>
                                                    <img src="<?php echo $full_base_url ?>/images/hot.png" alt=""/>
                                                    <?php endif;?>
                                                </a>
                                            </li> 
                                        <?php endif;?>
                                    <?php endforeach;?>
                                <?php else :?>
                                    <li class="first"><a href="#" target="_blank">暂无信息</a></li>
                                <?php endif;?>
                            </ul>
                            <div class="more"><a href="<?php echo $this->Gbsg->getNewsUrl($categoryId);?>">更多</a></div>
                        </div>
                    <?php
                    $ci++; 
                    endforeach;
                    ?>
                <?php else:?>
                    <div class="tab-con" style="display:block;">
                        <ul class="newslist">
                            <li class="first"><a href="#" target="_blank">暂无信息</a></li>
                        </ul>
                    </div>
                    <div class="tab-con">
                        <ul class="newslist">
                            <li class="first"><a href="#" target="_blank">暂无信息</a></li>
                        </ul>
                    </div>
                    <div class="tab-con">
                        <ul class="newslist">
                            <li class="first"><a href="#" target="_blank">暂无信息</a></li>
                        </ul>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="imgBox ylb_list blk1">
        <h3><span>摇乐宝</span></h3>
        <div class="showImg">
            <ul class="clearfix">
                <li><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/ylb_01.jpg" /></a></li>
                <li><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/ylb_02.jpg" /></a></li>
                <li><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/ylb_03.jpg" /></a></li>
                <li><a href="//t.im/lrff" target="_blank"><img src="<?php echo $full_base_url ?>/images/ylb_04.jpg" /></a></li>
            </ul>
        </div>
    </div>
    <div class="imgBox blk1">
        <h3><span>游戏截图</span></h3>
        <div class="showImg">
            <div class="jCarouselLite">
                <ul class="clearfix">
                    <?php 
                    if ($loopImageGame) :
                        foreach ($loopImageGame as $key => $value):
                            if ($value['big_link']):
                    ?>
                            <li><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></a></li>
                        <?php else :?>
                            <li><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></li>
                    <?php 
                            endif;
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <button class="btn_left"></button>
        <button class="btn_right"></button>
    </div>
    <div class="clearfix">
        <div class="imgBox blk2 fl">
            <h3><span>人物大全</span></h3>
            <ul class="role clearfix">
                <?php 
                if ($roles): // 人物大全
                    foreach ($roles as $key => $value):
                ?>
                    <li><a href="<?php echo $this->Base->getShowUrl($value['id']);?>"><img src="/uploads/<?php echo $value['small_url']?>" alt=""></a></li>
                <?php
                    endforeach;
                endif;
                ?>
            </ul>
            <div class="more"><a href="<?php echo $this->Gbsg->getNewsUrl($this->Gbsg->roleCateId);?>">更多</a></div>
        </div>
        <div class="imgBox blk3 fr">
            <h3><span>道具大全</span></h3>
            <ul class="prop clearfix">
                <?php 
                if ($props): // 人物大全
                    foreach ($props as $key => $value):
                ?>
                    <li><a href="<?php echo $this->Base->getShowUrl($value['id']);?>"><img src="/uploads/<?php echo $value['small_url']?>" alt=""></a></li>
                <?php
                    endforeach;
                endif;
                ?>
            </ul>
            <div class="more"><a href="<?php echo $this->Gbsg->getNewsUrl($this->Gbsg->propCateId);?>">更多</a></div>
        </div>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="//weibo.com/u/5122162901" target="_blank">
                <h4>官网微博</h4>
                <p>收听官网微博，了解游戏动态</p>
            </a>
        </div>
        <div class="wBox fl" id="wx">
            <div class="lbox wx" id="wbox1">
                <h4>官网微信</h4>
                <p>收听官网微信，获得第一手游戏咨询</p>
            </div>
            <div class="lbox" id="wbox2">
                <h4>如何关注<span>果宝三国</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span>果宝三国</span></p>
                <?php if ($qrcodeWeixin): echo $qrcodeWeixin; endif;?>
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <?php if ($friendlinks):?>
                    <?php echo $friendlinks;?>
                <?php else :?>
                    <ul>
                        <li><a href="#" target="_blank">肥猪游戏</a></li>
                    </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
    <!--论坛和qq群-->
    <div class="floatDiv">
        <div class="lt"><a href="//www.3ko.com/bbs/forum.php?mod=forumdisplay&fid=134" target="_blank">官方论坛</a></div>
        <div class="qq" style="display:none;">
            <h4>官方Q群</h4>
            <p>8508891</p>
        </div>
    </div>
</div>
<?php include '_footer.ctp' ?>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript">
function AutoScroll(obj){
    $(obj).find("ul:first").animate({
            marginTop:"-30px"
    },500,function(){
            $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
    });
}

$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
    });

    //模拟下拉框
    $(function(){
        var zIndex = 99;
        $('div.select').each(function(i){
            var _this = $(this);
            zIndex = zIndex - i;
            $(this).css('z-index',zIndex);
            _this.hover(
                function(){$(this).find('ul').stop(true,true).animate({ height: 'show'},400)},
                function(){$(this).find('ul').stop(true,true).animate({ height: 'hide'},1)}
            );
            _this.find('li').click(function(){
                _this.find('h4').html($(this).html());
                _this.find('input').eq(0).val($(this).attr('alt'));
                _this.find('ul').hide();
            });
        });
    });

    //展开详细信息
    $('#btn_zk').click(function(){
        $(this).parent().hide();
        $('#info_zk').show();
    });
    $('#btn_sq').click(function(){
        $(this).parent().hide();
        $('#info_sq').show();
    });

    /* 图片切换*/
    $(".switch").Switch({
        moveInterval:500,
        interval:5000,
        direction:"alpha",
        handle:".triggers"
    });

    //微信
    $("#wx").hover(function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right: 0},400);
        $(this).children("#wbox1").animate({left: -360},400);
    },function () {
        $(this).children().stop(false,true);
        $(this).children("#wbox2").animate({right:-360},400);
        $(this).children("#wbox1").animate({left: 0},400);
    });

    /*右侧浮层*/
    var elm = $('.floatDiv'); 
    var startPos = $(elm).offset().top; 
    $.event.add(window, "scroll", function(){ 
        var p = $(window).scrollTop(); 
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'absolute'); 
        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
    });

    //顶部滚动新闻
    setInterval('AutoScroll("#note")',2000);

    //扫描下载
    $('.download').hover(function(){
        $('.code').show();
    },function(){
        $('.code').hide();
    });

    //游戏截图
    $(".jCarouselLite").jCarouselLite({
        visible: 3,
        scroll: 1,
        circular: false,
        btnNext: ".btn_right",
        btnPrev: ".btn_left"
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39969579" charset="UTF-8"></script>
</body>
</html>