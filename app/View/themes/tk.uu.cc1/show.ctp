<!DOCTYPE html>
<html>
<head>
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta content="'.GET_BLOCK('web_keywords').'" name="keywords">';
echo '<meta content="'.GET_BLOCK('web_description').'" name="description">';
?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link media="screen" href="//jzw.uu.cc/jzw.uu.cc/css/layout.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php BLOCK('game_icon') ?>" />
    <script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?6000fe6c7a6822628de4a7937d77542c";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
    <script type="text/javascript" src="/manage/assets/js/edit/jquery.min.js"></script>
	<!-- CUSTOM-JS-COMPONENT -->
	
</head>
<body>
    <div class="page" id="rtn">
        <div class="header">
            <div class="top_ima">
                <img alt="" src="<?php BLOCK('pc_inner_banner') ?>" style="width: 1920px; height: 476px;" />
            </div>
        </div>
        <div class="content">
            <div class="news_title">
                <div class="wd980 clearfix">
                    <div class="dh_left fl">
                        <a href="/">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;
                        <?php
                        echo '<a href="'.GET_CATEGORY_URL(GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id'))).'">'.GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id')).'</a>';
                        ?>
                        &nbsp;&nbsp;>&nbsp;&nbsp;<span>正文</span>
                    </div>
                    <a href="/" class="ret_homt fr">
                        返回首页
                    </a>
                </div>
            </div>
            <div class="wd980">
                <div class="desc">
                    <h3><?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('title') /*BLOCK*/ ?></h3>
                    <?php /*BLOCK*/ SHOW_CURRENT_NEWS_INFO('content') /*BLOCK*/ ?>
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
                    <?php
                    echo '<img alt="" src="'.GET_BLOCK('weixin_qrcode').'" style="width: 120px; height: 120px;" />';
                    ?>
                    
                    <br />
                    <h3>游戏下载二维码 </h3>
                    <?php
                    echo '<img alt="" src="'.GET_BLOCK('game_download_qrcode').'" style="width: 120px; height: 120px;" />';
                    ?>
                    <br />
                    <?php
                    echo '<a class="game_load" href="'.GET_BLOCK('android_download_url').'">游戏下载</a>';
                    echo '<a href="'.GET_BLOCK('forum_url').'" class="join_lt">进入论坛</a>';
                    ?>
 
                </div>
                <a href="#rtn" class="ret_top"><img src="//jzw.uu.cc/jzw.uu.cc/images/backt.jpg" alt="返回顶部"/></a>
            </div>
        </div>
        

<div class="footer">
        <div class="foot">
            <div class="footTop clearfix" style="position:relative">
                <a href="//sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/4028c08c541442f10154147c287a0034" class="tb_bq" style="position:absolute;right:0px;"><img src="<?php echo $full_base_url ?>/images/bq_tb.png"></a>
                <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏<img src="//jzw.uu.cc/jzw.uu.cc/images/f_logo.png" width="136" /></a></h2>
                <div class="nav fl">
                    <p style="margin-bottom:5px;"><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//career.idreamsky.com/">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
                    <p style="text-indent:5px;float:left;">Copyright?2009-2014 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号</p>
                    <div class="link fr">
                    <a class="no_margin" target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
                    <a class="no_margin" target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
                    <a class="no_margin" target="_blank" href="//net.china.com.cn/index.htm"></a>
                    <a class="no_margin" target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
                    </div>
                </div>
                
            </div>
            <h3><span>健康游戏忠告：</span>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</h3>
        </div>
    </div>
</div>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<!--<script type="text/javascript" src="//tajs.qq.com/stats?sId=40283245" charset="UTF-8"></script>-->

    </div>
</body>

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
