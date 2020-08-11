<?php
require_once '_include.ctp'; // 初始化变量
/* 网站地图-分类名称 */
if (!is_array($category_id)) {
    $category_id = (int)$category_id;
    $categoryName = $allCategorires[(int)$category_id] ? $allCategorires[(int)$category_id] : '新闻中心';
} else {
    $categoryName = '全部新闻';
}
/* 新闻列表 */
$result = $webHelper->newsInitData($page,$category_id); // 新闻内容

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
            <div class="content clearfix" id="content">
                <div class="main fr">
                    <div class="nytit">您的位置：<a href="/">首页</a> > <span><?php echo $categoryName; // 当前分类名称?></span></div>
                    <ul class="classic clearfix">
                        <li <?php if (is_array($category_id)) : echo 'class="cur"';endif;?>><a href="<?php echo $webHelper->getNewsUrl('all');?>">全部</a></li>
                        <?php foreach ($categories as $key => $value) : // 显示新闻分类?>
                            <li <?php if($key == (int)$category_id) :?>class="cur"<?php endif;?>><a href="<?php echo $webHelper->getNewsUrl($key);?>"><?php echo $value;?></a><em></em></li>
                        <?php endforeach;?>
                    </ul>
                    <ul class="newslist">
                        <?php if($result) :?>
                            <?php foreach($result as $val):?>
                                <li>
                                    <span><?php echo date('Y-m-d',$val['updated']);?></span>
                                    <a href="/show/<?php echo $val['id']?>.html">
                                        <strong>[<?php echo $categories[(int)$val['news_categories_id']];?>]</strong> <?php echo $val['title'];?>
                                    </a>
                                </li>
                            <?php endforeach;?>
                        <?php else : // 没有新闻时?>
                            <li>
                                <a href="javascript:;"><strong>暂无信息</strong></a>
                            </li>
                        <?php endif;?>
                    </ul>
                    <div class="pagination">
                        <?php  echo $webHelper->pagination($category_id,$page);?>
                    </div>
                    <div class="bot_bg"></div>
                </div>
                <div class="side fl">
                    <?php require_once '_left.ctp'; // 左侧页面?>
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
