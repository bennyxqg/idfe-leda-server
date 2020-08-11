<?php
require_once '_include.ctp'; // 初始化变量
/* 新闻列表 */
$category_id = $result['News']['news_categories_id'];
/* 网站地图-分类名称 */
$categoryName = $allCategorires[$category_id] ? $allCategorires[$category_id] : '新闻中心';

// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlock();
$iosDownload = $blocks['ios_download']; // ios下载链接
//$qrcodeWeixin = $blocks['qrcode_weixin']; // 微信二维码
$qrcodeDownload = $blocks['qrcode_download']; // 下载二维码
$downlinkLinks = $webHelper->getTextList('downlink_android'); // 安卓下载地址
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
        <title><?php echo $title; ?></title>
        <meta  content="<?php echo $keywords; ?>" name="keywords" />
        <meta content="<?php echo $description; ?>" name="description" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
        <link rel="stylesheet" href="<?php echo $full_base_url ?>/css/ny.css" type="text/css" />
    </head>
    <body>
        <div class="page">
            <div class="header">
                <h1>剑与魔法的史诗</h1>
            </div>
            <div class="content clearfix">
                <div class="main fr">
                    <div class="nytit">您的位置：<a href="/">首页</a> > <a href="<?php echo $this->Base->getNewsUrl($category_id);?>"><?php echo $categoryName?></a> > <span>正文</span></div>
                    <div class="news_tit">
                        <h2><?php echo $result["News"]["title"]; // 标题?></h2>
                        <div class="other">
                            <span>时间：<?php echo date("Y-m-d H:i",$result["News"]["updated"])?></span>
                            <!-- JiaThis Button BEGIN -->
                            <div class="jiathis_style" style="display:inline-block;*display:inline;zoom:1;vertical-align:middle;margin-top:-3px;margin-left:10px;">
                                <a href="//www.jiathis.com/share" class="jiathis jiathis_txt jtico_jiathis" target="_blank" style="color:#82949b;">分享：</a>
                                <a class="jiathis_button_tsina"></a>
                                <a class="jiathis_button_tqq"></a>
                                <a class="jiathis_button_qzone"></a>
                                <a class="jiathis_button_renren"></a>
                                <a class="jiathis_button_weixin"></a>
                            </div>
                            <script type="text/javascript" src="//v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                            <!-- JiaThis Button END -->
                        </div>
                    </div>
                    <div class="text">
                        <?php echo $result['News']['content'];?>
                    </div>
                    <div class="bot_bg"></div>
                </div>
                <div class="side fl">
                    <?php require_once '_left.ctp'; // 左侧页面 ?>
                </div>
            </div>
            <div class="footer">
                <div class="foot">
                    <div class="footTop clearfix">
                        <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/"><img src="<?php echo $full_base_url ?>/images/logo.png" alt="乐逗游戏" /></a></h2>
                        <div class="nav fl">
                            <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//career.idreamsky.com/">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
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

        <script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
        <script>
            $(function () {
                /* 图片切换*/
                $(".switch").Switch({
                    moveInterval: 500,
                    interval: 5000,
                    direction: "alpha",
                    handle: ".triggers"
                });

                //模拟下拉框
                $(function () {
                    var zIndex = 99;
                    $('div.select').each(function (i) {
                        var _this = $(this);
                        zIndex = zIndex - i;
                        $(this).css('z-index', zIndex);
                        _this.hover(
                                function () {
                                    $(this).find('ul').stop(true, true).animate({height: 'show'}, 400)
                                },
                                function () {
                                    $(this).find('ul').stop(true, true).animate({height: 'hide'}, 1)
                                }
                        );
                        _this.find('li').click(function () {
                            _this.find('h4').text($(this).text());
                            _this.find('input').eq(0).val($(this).attr('alt'));
                            _this.find('ul').hide();
                        });
                    });
                });
                //下载弹窗
                $('.pop').height($(document).height());
                $('#d_and').click(function(){
                    $('.pop').show();
                });
                $('.close').click(function(){
                    $('.pop').hide();
                });
            })
        </script>
    </body>
</html>
