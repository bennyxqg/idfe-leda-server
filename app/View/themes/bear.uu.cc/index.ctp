<?php 
include '_header.ctp';
/* 
 * 首页显示内容
 * 网站helper由$webHelper代替 ----$webHelper在_header.ctp中定义
 */
/* 区块内容 */
$blocks = $webHelper->getAllBlock();
$banner = $blocks['index_banner']; // banner
$gameIcon = $blocks['game_icon']; // 游戏图标
$gameName = $blocks['game_name']; // 游戏名称
$gameDescriptionDetail = $blocks['game_description_detail']; // 游戏详细描述
$gameDescriptionSimple = $blocks['game_description_simple']; // 游戏简单描述
$downloadImg = $blocks['download_img']; // 下载按钮
$qrcodeDownload = $blocks['qrcode_download']; // 下载二维码
$qrcodeWeixinImg = $blocks['qrcode_weixin']; // 微信关注二维码
$bottomImages = $blocks['bottom_3_images']; // 底部三张截图

/* 轮播图片 */
$loopImage = $webHelper->getImageList('loop_img'); // 左轮播图片
/* 合作友链 */
$friendlinks = $webHelper->getTextList('friendlinks'); // 合作友联 - 友情链接为文本列表的形式

$categoryIds = array_keys($categories); 
$news = $webHelper->getNews($categoryIds); // 显示的新闻
// 确保新闻分类和新闻对应
ksort($categories);
ksort($news);
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <?php require_once '_top.ctp'; // 顶部公告?>
        </div>
    </div>
    <div class="banBox">
        <div class="syBanner">
            <?php if($banner){ // 首页banner?>
                <?php echo $banner;?>
            <?php }?>
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2><?php echo $gameName; // 游戏名称?></h2>
                    <p>
                    <?php if (!$gameDescriptionSimple): // 游戏简单描述?>
                    《地铁跑酷》是一款3D建模Q版美漫风格的跑酷类休闲手游。游戏的背景设定在地铁铁轨上
                    <?php else :?>
                        <?php echo $gameDescriptionSimple;?>
                    <?php endif;?>
                    </p>
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk" id="info_zk">
                    <h2><?php echo $gameName; // 游戏名称?></h2>
                    <p>
                    <?php if (!$gameDescriptionDetail): // 游戏详细描述?>
                    《地铁跑酷》是一款3D建模Q版美漫风格的跑酷类休闲手游。游戏的背景设定在地铁铁轨上，玩家要帮助Jake和淘气的小伙伴们躲避警察的追捕，躲避障碍物与往来的地铁。调皮恶搞的设定、嬉皮卡通的画风以及紧张刺激、停不了手的操作体验，使得《地铁跑酷》成为一款品质较高、气质独特同时又符合大众诉求、内涵与玩法可深挖的诚意作品。
                    <?php else :?>
                        <?php echo $gameDescriptionDetail;?>
                    <?php endif;?>
                    </p>
                    <div class="more" id="btn_sq">收起</div>
                    <div class="masks"></div>
                </div>
                <div class="download clearfix">
                    <?php if ($downloadImg): // 下载链接?>
                        <?php echo $downloadImg;?>
                    <?php endif;?>
                    <?php if ($qrcodeDownload): // 下载二维码?>
                        <?php echo $qrcodeDownload;?>
                    <?php endif;?>
                    <p>扫描下载游戏</p>
                </div>
                <div class="icon">
                    <?php if ($gameIcon): // 游戏图标?>
                        <?php echo $gameIcon;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="clearfix">
        <div class="switch fl">
            <ul class="runContent">
                <?php if($loopImage): // 轮播图片?>
                    <?php foreach($loopImage as $value):?>
                        <?php if ($value['big_link']):?>
                            <li><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></a></li>
                        <?php else :?>
                            <li><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            <ul class="triggers">
                <?php if ($loopImage) : // 左侧轮播图片按钮?>
                    <?php foreach ($loopImage as $key => $value):?>
                        <?php if ($value['big_link']):?>
                            <?php if($key == 0):?>
                                <li class="cur"></li>
                            <?php else :?>
                                <li></li>
                            <?php endif;?>
                        <?php else :?>
                            <li class="cur"></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
        <div class="news fr">
            <ul class="tab-hd clearfix">
                <?php if ($categories): // 新闻分类?>
                    <?php
                    $i = 0;    
                    foreach ($categories as $value):
                    ?>
                        <li <?php if ($i == 0):?>class="cur"<?php endif;?>><?php echo $value;?><em></em></li>
                    <?php
                    $i++;
                    endforeach;
                    ?>
                <?php endif;?>
            </ul>
            <div class="tabCons">
                <?php if ($news):?>
                    <?php $j = 0;?>
                    <?php foreach ($news as $key => $value):?>
                        <div class="tab-con"<?php if ($j ==0 ):?> style="display:block;"<?php endif;?>>
                            
                                <?php if (!$value):?>
                                <ul class="newslist">
                                    <li class="first"><a href="javascript:;">暂无信息</a></li>
                                </ul>
                                <?php else :?>
                                    <ul class="newslist">
                                        <?php foreach ($value as $k => $v):?>
                                            <?php if ($k == 0):?>
                                                <li class="first"><a href="<?php echo $this->Base->getShowUrl($v['id']);?>"><?php echo $v['title'];?></a></li>
                                            <?php else :?>
                                                <li>
                                                    <span>[<?php echo date('Y-n-j', $v['updated']);?>]</span>
                                                    <a href="<?php echo $this->Base->getShowUrl($v['id']);?>">
                                                        <strong>[<?php echo $allCategorires[$v['news_categories_id']]?>]</strong><?php echo $v['title'];?>
                                                        <?php if ($v['home'] == 1):?><img src="<?php echo $full_base_url ?>/images/hot.png" alt=""><?php endif;?>
                                                    </a>
                                                </li>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    </ul>
                                    <div class="more"><a href="<?php echo $this->Base->getNewsUrl($key);?>">更多</a></div>
                                <?php endif;?>
                        </div>
                    <?php $j++;?>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="imgLink">
        <?php if ($bottomImages):echo $bottomImages;endif; // 底部三张截图?>
    </div>
    <div class="other clearfix">
        <div class="wBox wb fl">
            <a href="//weibo.com/ditiepaoku/home?topnav=1&wvr=6" target="_blank">
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
                <h4>如何关注<span>地铁跑酷</span>公众账号</h4>
                <p>A.微信扫描二维码</p>
                <p>B.微信搜索公众号<span>ditiepaoku2013</span></p>
                <?php if ($qrcodeWeixinImg): // 微信二维码?>
                    <?php echo $qrcodeWeixinImg;?>
                <?php endif;?>
            </div>
        </div>
        <div class="wBox mt fr">
            <div class="select">
                <input type="hidden" name="type" />
                <h4>官方合作媒体</h4>
                <ul>
                <?php if ($friendlinks): // 友情链接?>
                    <?php foreach ($friendlinks as $value):?>
                        <?php if ($value):?>
                            <li><a href="<?php echo $value['url']?>" target="_blank"><?php echo $value['title'];?></a></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php // echo $this->element('sql_dump');?>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=28932393" charset="UTF-8"></script>
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url;?>/js/switch.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        });
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
                _this.find('h4').text($(this).text());
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
});
</script>
</body>
</html>