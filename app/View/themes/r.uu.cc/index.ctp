<?php 
$this->R->init(array('site_id' => $site_id));
$blocks = $this->R->getAllBlock();
$banner = $blocks['index_banner']; // banner
$logo = $blocks['logo']; // 小logo
$gameDescription = $blocks['game_description']; // 描述
$downloadIcon = $blocks['download_icon']; // 下载按钮图片
$qrcodeDownloadAndroid = $blocks['qrcode_download_android']; // Android下载二维码
$qrcodeWeixinImg = $blocks['qrcode_weixin_image']; // 微信关注二维码
$friendlinks = $blocks['friendlinks']; // 友情链接
$imageLink = $blocks['imagelink_index']; // 三个图片链接
$indexList = $blocks['index_list']; // 右侧链接列表
$indexViedoLink = $blocks['index_viedo_link']; // 首页视频链接
$loopImage = $this->R->getImageList('loop_img'); // 轮播图片

$allCategories = $this->R->getNewsCategory(); // 所有新闻分类
$categories = $allCategories;
unset($categories[$this->R->specialCategoryId]);
$categoryIds = array_keys($categories);
$news = $this->R->getNews($categoryIds); // 显示的新闻
ksort($categories);
ksort($news);
?>
<?php include '_header.ctp' ?>
    <div class="page">
        <div class="header">
           <!-- <?php include '_top.ctp' ?>-->
            <div class="top_ima">
                <?php if ($banner):?>
                    <?php echo $banner;?>
                <?php else :?>
                    <img src="<?php echo $full_base_url ?>/images/dsa.jpg" />
                <?php endif;?>
            </div>
        </div>
        <div class="content">
            <div class="title">
                <div class="wd980 clearfix">
                    <div class="game_icon fl">
                        <?php if ($logo):?>
                            <?php echo $logo;?>
                        <?php else :?>
                        <img src="<?php echo $full_base_url ?>/images/icon.png" alt="奔跑吧兄弟" />
                        <?php endif;?>
                    </div>
                    <div class="game_desc fl">
                        <h3><?php echo $name;?></h3>
                        <div class="wz_desc">
                            <p>
                                <?php if ($gameDescription):?>
                                    <?php echo $gameDescription;?>
                                <?php else :?>
                                浙江卫视热播节目《奔跑吧兄弟》官方正版授权，360手游和乐逗游戏联合打造的<span class="wz_simple">...</span><span class="wz_detail">同名3D竖版跑酷类手游，游戏还原撕名牌，夺宝箱，背肥妞等游戏玩法，2015新年偶像明星邀你，“奔跑吧，兄弟！”</span>
                                <?php endif;?>
                            </p>
                            <img src="<?php echo $full_base_url ?>/images/slip_up.jpg" alt="详细介绍" class="slip_up"/>
                            <img src="<?php echo $full_base_url ?>/images/slip_down.jpg" alt="收起介绍" class="slip_down"  style="display:none;"/>
                        </div>
                    </div>
                    <div class="game_load fl">
                        <?php if ($downloadIcon):?>
                            <a href="<?php echo $downloadIcon ?>"><img style="width: 236px; height: 119px;" src="/uploads/editor_upload/images/201501120440097603.png" alt=""></a>
                        <?php else :?>
                            <img src="<?php echo $full_base_url ?>/images/load.png" alt="安卓下载" />
                        <?php endif;?>
                    </div>
                    <div class="game_eweima fl">
                        <?php if ($qrcodeDownloadAndroid):?>
                            <?php echo $qrcodeDownloadAndroid;?>
                        <?php else :?>
                            <img src="<?php echo $full_base_url ?>/images/erweima.jpg" alt="扫描下载游戏" />
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="cont clearfix">
                <div class="cont_left fl">
                    <div class="yxjt">
                        <h3><span>游戏截图</span></h3>
                        <div class="clearfix">
                            <div class="prev fl"><img src="<?php echo $full_base_url ?>/images/left.png" /></div>
                            <div class="banner fl">
                                <ul class="run_content clearfix">
                                    <?php if ($loopImage) :?>
                                        <?php foreach ($loopImage as $value):?>
                                            <?php if ($value['big_link']):?>
                                                <li><a href="<?php echo $value['big_link'];?>" target="_blank"><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></a></li>
                                            <?php else :?>
                                                <li><img src="/uploads/<?php echo $value['big_url'];?>" title="<?php echo $value['title'];?>" alt="<?php echo $value['alt'];?>"/></li>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    <?php else :?>
                                       <li><a href=""><img src="<?php echo $full_base_url ?>/images/banner.jpg" /></a></li>
                                    <?php endif;?>
                                </ul>
                            </div>
                            <div class="next fl"><img src="<?php echo $full_base_url ?>/images/right.png" /></div>
                        </div>
                    </div>
                    <div class="cont_news">
                        <div class="cont_news_title clearfix">
                            <ul class="fl tab-hd">
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
                                <?php endif;?>
                            </ul>
                        </div>
                        <div class="cont_news_detail">
                            <?php if ($news):?>
                                <?php
                                $ci = 0;
                                foreach ($news as $categoryId => $value) :
                                $mostClicks = $this->Gbsg->getMostClicksNews($categoryId); // 点击数最多的记录id
                                $lastNews = $this->Gbsg->getLastNews($categoryId); // 最新的记录id
                                ?>
                                    <div class="tab-con" <?php if ($ci != 0):?>style="display:none;"<?php endif;?>>
                                        <ul class="newslist">
                                            <?php if($value): $hot = array();?>
                                                <?php foreach ($value as $k => $v) : ?>
                                                    <?php if ($k == 0) :?>
                                                        <li class="nd_title"><a href="<?php echo $this->Gbsg->getShowUrl($v['id']);?>" target="_blank"><?php echo $v['title'];?></a></li>
                                                    <?php else :?>
                                                        <li>
                                                            <span class="news_date fr">[<?php echo date('m/d',$v['updated']);?>]</span>
                                                            <span class="news_desc"><a href="<?php echo $this->Gbsg->getShowUrl($v['id']);?>">
                                                                <strong>[<?php echo $categories[$v['news_categories_id']]?>]</strong><?php echo $v['title'];?>
                                                            </a><span class="news_desc">
                                                            <?php 
                                                            // 需求：最新的和点击数最多的记录加hot
                                                            if($v['id'] == $lastNews['id'] || $v['id'] == $mostClicks['id']):
                                                            ?>
                                                            <span class="news_sty"><img src="<?php echo $full_base_url ?>/images/hot.png" alt=""/></span>
                                                            <?php endif;?>
                                                        </li> 
                                                    <?php endif;?>
                                                <?php endforeach;?>
                                            <?php else :?>
                                                <li class="nd_title"><a href="javascript:;">暂无信息</a></li>
                                            <?php endif;?>
                                        </ul>
                                        <div class="more"><a href="<?php echo $this->Gbsg->getNewsUrl($categoryId);?>">更&nbsp;&nbsp;多</a></div>
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
                    <div class="zxdt">
                        <h3><span>最新动态</span></h3>
                        <div >
                            <?php if ($imageLink):?>
                                <?php echo $imageLink;?>
                            <?php else :?>
                                <ul class="clearfix">
                                    <li class="mrg14"><a href=""><img src="<?php echo $full_base_url ?>/images/pic_a.jpg" alt="邓超" /></a></li>
                                    <li class="mrg14"><a href=""><img src="<?php echo $full_base_url ?>/images/pic_b.jpg" alt="王宝强" /></a></li>
                                    <li><a href=""><img src="<?php echo $full_base_url ?>/images/pic_c.jpg" alt="陈赫" /></a></li>
                                </ul>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="friend">
                        <h3><span>友情链接</span></h3>
                        <div class="yqlj">
                            <?php if ($friendlinks):?>
                                <?php echo $friendlinks;?>
                            <?php else :?>
                                <ul>
                                    <li><a href="javascript:;" target="_blank">肥猪游戏</a></li>
                                </ul>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="cont_right fr">
                    <div class="vedio">
                        <embed src="//player.youku.com/player.php/sid/XODcyNDg0NjQ0/v.swf" allowFullScreen="true" quality="high" width="293" height="187" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
                    </div>
                    <div class="yxlt">
                        <?php if ($indexList): ?>
                            <?php echo $indexList;?>
                        <?php else :?>
                        <ul>
                            <!-- <li class="gamelx game_lt"><a href="#" target="_blank">游戏论坛</a></li> -->
                            <li class="gamelx game_tb"><a href="//tieba.baidu.com/f?ie=utf-8&kw=%E5%A5%94%E8%B7%91%E5%90%A7%E5%85%84%E5%BC%9F%E8%B7%91%E7%94%B7%E6%9D%A5%E4%BA%86&fr=search" target="_blank">游戏贴吧</a></li>
                            <li class="gamelx game_wx"><a href="//r.uu.cc/show/956.html" target="_blank">游戏微信</a></li>
                            <li class="gamelx game_wb"><a href="//weibo.com/u/5451434152" target="_blank">游戏微博</a></li>
                            <li class="kfdh"><img src="<?php echo $full_base_url ?>/images/phone.jpg" alt="客服电话" /></li>
                        </ul>
                        <?php endif;?>
                    </div>
                </div>
                <div class="float_wx">
                    <h4>公测盛典</h4>
                    <a href="">点击查看详情</a>
                    <div class="float_desc">微信有礼 扫描关注</div>
                    <div class="flaot_erweima">
                    <?php if ($qrcodeWeixinImg):?>
                        <?php echo $qrcodeWeixinImg;?>
                    <?php else :?>
                        <img src="<?php echo $full_base_url ?>/images/erweima.jpg" alt="扫描下载游戏" />
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <?php include '_footer.ctp' ?>
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var w = null;
            var xk = $(".run_content");
            
            $(".wz_desc span.wz_detail").hide(); 
            
            function init() {
                w = 568;
                xk.width(w * xk.children("li").size());
                console.log(w);
                xk.children("li").css({ "width": w + "px", "float": "left" });
            }
            function run() {
                xk.animate({ "left": "-" + w + "px" }, 1000, function () {
                    xk.css({ "left": 0 }).children("li:first").appendTo(this);
                });
            }
            init();
            setInterval(run, 6000);
            $(".prev").click(function () {
                xk.stop();
                xk.css({ "left": "-" + w + "px" }).children("li:last").prependTo(xk);
                xk.animate({ "left": 0 }, 1000);
            });
            $(".next").click(function () {
                xk.stop();
                xk.animate({ "left": "-" + w + "px" }, 1000, function () {
                    xk.css({ "left": 0 }).children("li:first").appendTo(this);
                });
            });
            $(".slip_up").click(function () {
                $(".game_desc").css("background", "#fff");
                $(".wz_desc span.wz_detail").show();
                $(".wz_desc span.wz_simple").hide();
                $(".slip_up").hide();
                $(".slip_down").slideDown();
            });
            $(".slip_down").click(function () {
            	$(".wz_desc span.wz_detail").hide();
            	$(".wz_desc span.wz_simple").show();
                $(".game_desc").css("background", "none");
                $(".slip_down").hide();
                $(".slip_up").slideDown();
            });
            $(".cont_news_title ul li").click(function () {
                var i = $(this).index();
                $(this).addClass("cur").siblings().removeClass("cur");
                $(".cont_news_detail").children(":eq(" + i + ")").show().siblings().hide();
            });
            //tab选项卡
            $('.tab-hd').find('li').each(function(i){
                $(this).hover(function(){  
                    $(this).addClass('cur').siblings('li').removeClass('cur');
                    $('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            });
        });
    </script>
</body>
</html>
