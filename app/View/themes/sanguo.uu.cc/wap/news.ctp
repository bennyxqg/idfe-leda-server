<?php 
require_once '_header.ctp'; 
// 网站helper由$webHelper代替
$blocks = $webHelper->getAllBlockWap();
$gameIcon = $blocks['game_icon_wap']; // 游戏图标
$iosDownloadImg = $blocks['ios_download_img_wap']; // ios下载按钮图片
$androidDownloadImg = $blocks['android_download_img_wap']; // Android下载按钮图片
$weixinLink = $blocks['weixin_link']; // 关注微信
$weiboLink = $blocks['weibo_link']; // 关注微博

$categories = $allCategorires; // 首页需要显示的新闻分类
$curCateName = $categories[(int)$category_id]; // 当前分类名称
$newList = $webHelper->newsInitDataWap($page, $category_id);
?>
<body>
    <div class="page">
        <div class="reback">
            <?php echo $curCateName; // 分类名称?><img src="<?php echo $full_base_url ?>/images/back.png" alt="返回" />
        </div>
        <div class="content content_news">
            <ul class="cont_home">
                <?php // 新闻列表
                    if ($newList):
                        foreach ($newList as $value):
                ?>
                <li>
                   <a href="<?php echo $webHelper->getShowUrl($value['id']);?>" class="clearfix">
                        <div class="news_pic fl"><?php if ($value['small_url']):?><img src="/uploads/<?php echo $value['small_url'];?>"/><?php endif;?></div>
                        <div class="news_detail fl">
                            <div class="news_title"<?php if (!$value['small_url']):?> style="width: 800px"<?php endif; ?>><?php echo $value['title']; // 标题?></div>
                            <div class="news_desc"<?php if (!$value['small_url']):?> style="width: 800px"<?php endif; ?>><?php echo $webHelper->getDesc($value['content']); // 摘要?></div>
                            <div class="news_date">09/12</div>
                        </div>
                   </a> 
                </li>    
                <?php
                        endforeach;
                    endif;
                ?>
            </ul>
            <div class="loading"><img src="<?php echo $full_base_url ?>/images/load.gif" alt="加载中"</div>
        </div>
    </div>
    <div class="news_float game_top clearfix">
        <div class="game_ico fl"><?php if ($gameIcon): echo $gameIcon;endif; // 游戏图标?></div>
        <h3 class="game_name fl">萌翻三国</h3>
        <?php if($iosDownloadImg): echo $iosDownloadImg; endif; // ios下载链接?>
        <?php if($androidDownloadImg): echo $androidDownloadImg; endif; // 安卓下载链接 ?>
    </div>
</body>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
    $(function () {
        var page = 1;
        var cid = parseInt('<?php echo $category_id;?>');
        var limit = 5;
        var oStop = true;
        $(window).scroll(function (ev) {
            ev.preventDefault();
            var scrollTop = $(this).scrollTop();
            var scrollHeight = $(document).height();
            var windowHeight = $(this).height();
            var nextPage = parseInt(page) + 1;
            var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
           
            if (scrollTop + windowHeight > scrollHeight - 5) {
                if(oStop != true){
                    return false;
                };
                oStop = false;
                $(".loading").show();
                $.ajax({
                    type: "get",
                    url: url,
                    dataType: 'json',
                    async: false,
                    success: function (result) {
                        if (result && result['status'] === 1) {
                            var data = result.data;
                            var addinput = "";
                            var imgHtml = "";
                            var styleHtml = "";
                            console.log(data);
                            for (var k in data) {
                                var str = data[k]["content"];
                                
                                if (str.length > 26) {
                                    str = str.replace(/<[^>]+>/g,"");//去掉所有的html标记
                                    data[k]["content"] = str.substr(0, 26);
                                }
                                
                                if (data[k]["small_url"]) {
                                    imgHtml = '<div class="news_pic fl"><img src="/uploads/'+ data[k]["small_url"] +'"/></div>';
                                } else {
                                    styleHtml = ' style="width:800px"';
                                }
                                
                                addinput += '<li><a href="/show/' + data[k]["id"] + '.html" class="clearfix">'+ imgHtml +'<div class="news_detail fl"><div class="news_title"'+ styleHtml +'>'+ data[k]["title"] +'</div><div class="news_desc"'+ styleHtml +'>'+ data[k]["content"] +'</div><div class="news_date">'+ data[k]["updated"] +'</div></div></a></li> ';
                                
                            }
                            console.log(addinput);
                            $(".cont_home").append(addinput);
                            page = parseInt(page) + 1;
                            oStop = true;
                        }
                        $(".loading").hide();
                    }
                });
            }
        });
            
        $(".reback img").click(function () {
            history.back();
        });
        
        $(".news_desc").each(function(){
            if ($(this).text().length > 26) {
                $(this).html($(this).text().substr(0, 26));
            };
        });
    });
</script>
</html>