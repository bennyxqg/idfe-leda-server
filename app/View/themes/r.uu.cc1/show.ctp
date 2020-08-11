<?php 
$this->R->init(array('site_id' => $site_id));
$cateId = $result["News"]['news_categories_id'];
$categories = $this->R->getNewsCategory(array('id' => $cateId)); // 正常显示的分类
$category = $categories[$cateId]; // 分类名称
$allCategories = $this->R->getNewsCategory(); // 所有新闻分类
$banner = $this->R->getSingleBlock('inner_banner');

$qrcodeDownloadAndroid = $this->R->getBlock($site_id, 'qrcode_download_android'); // Android下载二维码
$qrcodeWeixinImg = $this->R->getBlock($site_id, 'qrcode_weixin_image'); // 微信关注二维码
$downloadLink = $this->R->getBlock($site_id, 'show_download_link'); // 下载链接
?>
<?php include '_header.ctp' ?>
    <div class="page" id="rtn">
        <div class="header">
            <!--<?php include '_top.ctp' ?>-->
            <div class="top_ima">
                <?php if ($banner):?>
                    <?php echo $banner;?>
                <?php else :?>
                    <img src="<?php echo $full_base_url ?>/<?php echo $full_base_url ?>/images/dsa.jpg" />
                <?php endif;?>
            </div>
        </div>
        <div class="content">
            <div class="news_title">
                <div class="wd980 clearfix">
                    <div class="dh_left fl">
                        <a href="/">首页</a>》<a href="<?php echo $this->Gbsg->getNewsUrl($cateId);?>"><?php echo $category;?></a>》<span>正文</span>
                    </div>
                    <a href="/" class="ret_homt fr">
                        返回首页
                    </a>
                </div>
            </div>
            <div class="wd980">
                <div class="desc">
                    <h3><?php echo $result["News"]["title"];?></h3>
                    <?php echo $result['News']['content'];?>
                </div>
                <div class="share clearfix">
                   <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style fr">
                    <span class="jiathis_txt">分享到：</span>
                    <a class="jiathis_button_weixin">微信</a>
                    <a class="jiathis_button_qzone">QQ空间</a>
                    <a class="jiathis_button_tqq">腾讯微博</a>
                    <a class="jiathis_button_tsina">新浪微博</a>

                    <a href="//www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
                    <a class="jiathis_counter_style"></a>
                    </div>
                    <script type="text/javascript" >
                        var jiathis_config = {
                            summary: "",
                            shortUrl: false,
                            hideMore: false
                        }
                    </script>
                    <script type="text/javascript" src="//v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                    <!-- JiaThis Button END -->
                </div>
                <div class="new_float">
                    <h3>官方微信二维码 </h3>
                    <?php if (!$qrcodeWeixinImg):?>
                        <img src="<?php echo $full_base_url ?>/images/news_wx.jpg" />
                    <?php else :?>
                        <?php echo $qrcodeWeixinImg;?>
                    <?php endif;?>
                    <br />
                    <h3>游戏下载二维码 </h3>
                    <?php if (!$qrcodeDownloadAndroid):?>
                        <img src="<?php echo $full_base_url ?>/images/news_wx2.jpg" />
                    <?php else :?>
                        <?php echo $qrcodeDownloadAndroid;?>
                    <?php endif;?>
                    <br />
                    <?php if (!$downloadLink):?>
                        <a href="javascript:alert('敬请期待！');" class="game_load">游戏下载</a>
                    <?php else :?>
                        <?php echo $downloadLink;?>
                    <?php endif;?>
                    <!-- <a href="javascript:alert('敬请期待！');" class="join_lt">进入论坛</a> -->
                </div>
                <a href="#rtn" class="ret_top"><img src="<?php echo $full_base_url ?>/images/backt.jpg" alt="返回顶部"/></a>
            </div>
        </div>
        <?php include '_footer.ctp' ?>
    </div>
</body>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    $(function () {
        if ($(window).width() > 980) {
            $(".ret_top").css("left", (($(window).width() - 980) / 2 + 800) + "px");
        } else {
            $(".ret_top").css("left", ($(window).width() - 50) + "px");
        };
        $(window).resize(function () {
            if ($(window).width() > 980) {
                $(".ret_top").css("left", (($(window).width() - 980) / 2 + 800) + "px");
            } else {
                $(".ret_top").css("left", ($(window).width() - 50) + "px");
            };
        });
        $(window).scroll(function () {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > 400) {
                $(".new_float").css({ "top": "120px", "left": (($(window).width() - 980) / 2 + 815) + "px", "position": "fixed" });
                $(".ret_top").show();
            } else {
                $(".new_float").css({ "top": "0", "left": "815px", "position": "absolute" });
                $(".ret_top").hide();
            }
        });
        $(".desc img").each(function () {
            if ($(this).width() > 674) {
                $(this).css("width", "674px");
            }
        });
    });
</script>
</html>
