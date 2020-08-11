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
        

<?php require_once("_footer.ctp"); ?>
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
