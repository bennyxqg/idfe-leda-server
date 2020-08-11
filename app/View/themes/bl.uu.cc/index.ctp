<?php 
require_once "_include.ctp";

// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlock();
$banner = $blocks['index_banner']; // banner
$gameIcon = $blocks['game_icon']; // 游戏图标
$gameDescriptionDetail = $blocks['game_description_detail']; // 游戏详细描述
$gameDescriptionSimple = $blocks['game_description_simple']; // 游戏简单描述
$androidDownloadImg = $blocks['android_download_img']; // Android下载按钮图片
$iosDownloadImg = $blocks['ios_download_img']; // ios下载按钮图片
$qrcodeDownload = $blocks['qrcode_download']; // 下载二维码
$imageLink = $blocks['imagelink_index']; // 三个图片链接-最新动态

$loopImageLeft = $webHelper->getImageList('loop_img_1'); // 左轮播图片
$loopImageRight = $webHelper->getImageList('loop_img_2'); // 右轮播图片
$friendlinks = $webHelper->getTextList('friendlinks'); // 合作友联 - 友情链接为文本列表的形式

$categoryIds = array_keys($categories);
$news = $webHelper->getNews($categoryIds); // 显示的新闻
ksort($categories);
ksort($news);

require_once "_header.ctp";
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <h1 class="fl"><a href="#">部落英雄传</a></h1>
            <div class="note fl" id="note">
                <?php require_once "_notice.ctp";?>
            </div>
            <a href="//www.idreamsky.com" class="gw">乐逗游戏官网</a>
        </div>
    </div>
    <div class="banBox">
        <div class="syBanner">
            <?php if ($banner): // 首页banner图片?>
                <?php echo $banner;?>
            <?php endif;?>
        </div>
        <div class="top_db">
            <div class="dbox">
                <div class="info ss" id="info_sq">
                    <h2><?php echo $name;?></h2>
                    <p><?php if ($gameDescriptionSimple): // 游戏简单介绍?>
                            <?php echo $gameDescriptionSimple;?>
                        <?php endif;?></p>    
                    <div class="more" id="btn_zk">详细介绍</div>
                </div>
                <div class="info zk sl-shadow2" id="info_zk">
                    <h2><?php echo $name;?></h2>
                    <p><?php if ($gameDescriptionDetail): // 游戏详细介绍?>
                            <?php echo $gameDescriptionDetail;?>
                        <?php endif;?></p>
                    <div class="more" id="btn_sq">收起</div>
                </div>
                    
                <div class="download">
                    <?php if ($iosDownloadImg): // iOS下载按钮?>
                        <?php echo $iosDownloadImg;?>
                    <?php endif;?>
                    <?php if ($androidDownloadImg): // 安卓下载按钮?>
                        <?php echo $androidDownloadImg;?>
                    <?php endif;?>
                </div>
                <div class="wx">
                    <?php if ($qrcodeDownload): // 下载二维码?>
                        <?php echo $qrcodeDownload;?>
                    <?php endif;?>
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
<div class="content clearfix">
    <div class="main fl">
        <h2><span>游戏截图</span></h2>
        <div class="imgBox">
            <div class="showImg">
                <div class="jCarouselLite">
                    <ul class="clearfix">
                    <?php if ($loopImageLeft) : // 游戏截图轮播图片?>
                        <?php foreach ($loopImageLeft as $value):?>
                            <?php if ($value['big_link']):?>
                                <li><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></a></li>
                            <?php else :?>
                                <li><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></li>
                            <?php endif;?>
                        <?php endforeach;?>
                    <?php endif;?>
                    </ul>
                </div>
            </div>
            <button class="btn_left"></button>
            <button class="btn_right"></button>
        </div>
        <div class="news">
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
                    <?php
                    $ci = 0;
                    foreach ($news as $categoryId => $value) :
                    ?>
                        <div class="tab-con" <?php if ($ci == 0):?>style="display:block;"<?php endif;?>>
                            <ul class="newslist">
                                <?php if($value): $hot = array();?>
                                    <?php foreach ($value as $k => $v) : ?>
                                        <?php if ($k == 0) :?>
                                            <li class="first"><a href="<?php echo $webHelper->getShowUrl($v['id']);?>" target="_blank"><?php echo $v['title'];?></a></li>
                                        <?php else :?>
                                            <li>
                                                <span>[<?php echo date('m/d',$v['updated']);?>]</span>
                                                <a href="<?php echo $webHelper->getShowUrl($v['id']);?>">
                                                    <strong>[<?php echo $categories[$v['news_categories_id']]?>]</strong><?php echo $v['title'];?>
                                                    <?php if($v['home'] == 1): ?>
                                                    <img src="<?php echo $full_base_url ?>/images/hot.png" alt=""/>
                                                    <?php endif;?>
                                                </a>
                                            </li> 
                                        <?php endif;?>
                                    <?php endforeach;?>
                                <?php else :?>
                                    <li class="nd_title"><a href="javascript:;">暂无信息</a></li>
                                <?php endif;?>
                            </ul>
                            <div class="more"><a href="<?php echo $webHelper->getNewsUrl($categoryId);?>">更&nbsp;&nbsp;多</a></div>
                        </div>
                    <?php
                    $ci++; 
                    endforeach;
                    ?>
                <?php else:?>
                    <div class="tab-con">
                        <ul>
                            <li class="nd_title"><a href="javascript:;">暂无信息</a></li>
                        </ul>
                    </div>
                    <div class="tab-con" style="display:none;">
                        <ul>
                            <li class="nd_title"><a href="javascript:;">暂无信息</a></li>
                        </ul>
                    </div>
                <?php endif;?>
            </div>
        </div>
<!--        <div class="zxdt">
            <h2><span>最新动态</span></h2>
            <?php if ($imageLink): // 最新动态?>
                <?php echo $imageLink;?>
            <?php else :?>
                <ul class="clearfix">
                    <li class="first"><a href=""><img src="<?php echo $full_base_url ?>/images/tp1.jpg" alt="" /></a></li>
                        <li><a href=""><img src="<?php echo $full_base_url ?>/images/tp2.jpg" alt="" /></a></li>
                        <li><a href=""><img src="<?php echo $full_base_url ?>/images/tp3.jpg" alt="" /></a></li>
                    </ul>
                </ul>
            <?php endif;?>
                
        </div>
        <div class="dtbox partner">
            <h2><span>友情链接</span></h2>
            <ul class="links">
                <?php if ($friendlinks):?>
                    <?php foreach ($friendlinks as $k => $v):?>
                        <li><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['title'];?></a></li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
-->
    </div>
    <div class="side fr">
        <div class="switch">
            <ul class="runContent">
            <?php if ($loopImageRight) : // 右侧轮播图片?>
                <?php foreach ($loopImageRight as $value):?>
                    <?php if ($value['big_link']):?>
                        <li><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></a></li>
                    <?php else :?>
                        <li><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></li>
                    <?php endif;?>
                <?php endforeach;?>
            <?php endif;?>
            </ul>
            <ul class="triggers">
                <?php if ($loopImageRight) : // 右侧轮播图片按钮?>
                    <?php foreach ($loopImageRight as $key => $value):?>
                        <?php if ($key == 0):?>
                            <li class="cur"></li>
                        <?php else :?>
                            <li></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
        <div class="quick">
            <a class="td1" href="//bbs.uu.cc/forum-288-1.html">游戏论坛</a>
            <div class="td2" href="#">玩家QQ群<p class="qqDiv">部落英雄传群<br />422459611</p></div>
            <div class="td3">游戏微信</div>
        </div>
        <!-- <div class="video">
            <embed src="//player.youku.com/player.php/sid/XODU3MTE2MTI0/v.swf" allowFullScreen="true" quality="high" width="287" height="192" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
        </div> -->
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/common.js"></script>
</body>
</html>