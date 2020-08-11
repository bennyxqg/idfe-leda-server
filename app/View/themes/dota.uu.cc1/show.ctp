<!DOCTYPE html>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    <link media="screen" href="<?php BASE_URL() ?>css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="page">
        <div class="header">
            <h1>这不是刀塔</h1>
            <h2>12月16日，创梦首测</h2>
            <div class="top clearfix">
                <div class="logo fl">
                    <a href="//www.idreamsky.com"><img src="<?php BASE_URL() ?>images/logo.png" alt="乐逗游戏" /></a>
                </div>
                <?php
                	SHOW_NEWS('<a href="@@URL@@" class="top_news fl">公告：@@TITLE@@</a>','m-d','公告',1,1,array());
                ?>
                <a href="//www.idreamsky.com" class="gohome fr">乐逗游戏官网</a>
            </div>
        </div>
        <div class="content">
            <div class="news_title">
                <div class="wd980 clearfix">
                    <div class="dh_left fl">
                        <a href="/">首页</a>》<a href="javascript:alert('敬请期待！');">新闻中心</a>》<span>正文</span>
                    </div>
                    <a href="/" class="ret_homt fr">
                        返回首页
                    </a>
                </div>
            </div>
            <div class="wd980">
                <div class="desc">
                    <h3><?php SHOW_CURRENT_NEWS_INFO('title') ?></h3>
                    <?php SHOW_CURRENT_NEWS_INFO('content') ?>
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
                    <img src="<?php BLOCK('weixin_qrcode') ?>" width="134"/><br />
                    <h3>游戏下载二维码 </h3>
                    <img src="<?php BLOCK('game_download_qrcode') ?>" width="134"/><br />
                    <a href="<?php BLOCK('ios_download_url') ?>" class="game_load">游戏下载</a>
                    <a href="<?php BLOCK('forum_url') ?>" class="join_lt">进入论坛</a>
                </div>
                <a href="#rtn" class="ret_top"><img src="<?php BASE_URL() ?>images/backt.jpg" alt="返回顶部"/></a>
            </div>
        </div>
        <div class="footer">
            <div class="foot">
                <div class="footTop clearfix">
                    <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏<img src="<?php echo $full_base_url;?>/images/f_logo.png" width="136" /></a></h2>
                    <div class="nav fl">
                        <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
                        <p style="text-indent:5px;">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
                    </div>
                    <div class="link fr">
                        <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
                        <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
                        <a target="_blank" href="//net.china.com.cn/index.htm"></a>
                        <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
                    </div>
                </div>
                <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
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
