<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title; ?></title>
    <meta name="keywords" content="<?= $keywords; ?>"/>
    <meta name="description" content="<?= $description; ?> "/>
    <link rel="shortcut icon" href="<?php echo $full_base_url ?>/favicon.ico" />
    <meta name="viewport" content="width=480, user-scalable=no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <script type="text/javascript">
        if(navigator.userAgent.indexOf('Android') > -1){
            var densitydpi = 480 / screen.width * window.devicePixelRatio * 160;
            var initialContent = 'target-densitydpi=' + densitydpi + ', width=480, user-scalable=no';
            document.getElementsByName('viewport')[0].setAttribute( 'content', initialContent );
        }
    </script>
    <link media="screen" href="<?php echo $full_base_url ?>/css/mobile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap">
    <ul class="download clearfix">
         <?php require "_download.ctp";?>
         <?php
            $consulting =  $this->Mrj->newsInitData($page,$category_id);
         ?>
    </ul>
    <div class="news m_news">
        <ul class="tab-hd clearfix">
            <li><a href="/news/all.html">最新</a></li>
            <li><a href="<?php echo $this->Base->getNewsUrl(40);?>">公告</a></li>
            <li><a href="<?php echo $this->Base->getNewsUrl(38);?>">新闻</a></li>
            <li><a href="<?php echo $this->Base->getNewsUrl(42);?>">活动</a></li>
        </ul>
        <div id="tab-con">
            <div class="tab-con" style="display:block;">
                <ul class="newslist">
                    <?php if($consulting):?>
                        <?php foreach($consulting as $key=>$value):?>
                                <?php switch($value["news_categories_id"]){
                                case 38:
                                    $name="新闻";
                                    break;
                                case 40:
                                    $name="公告";
                                    break;
                                case 42:
                                    $name="活动";
                                    break;
                                default:
                                    $name="新闻";
                                    break;
                            }
                            ?>
                            <li>
                                <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">
                                    【<?php echo $name;?>】
                                    <?php echo $value["title"]?></a>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="pagination">
                    <?php echo $this->Mrj->pagination($category_id,$page);?>
                </div>

            </div>

        </div>
        <div class="goIndex"><a href="/">返回首页</a></div>
    </div>


    <div class="clearfix">
        <div class="wxin fl">
            <h3>官方微信</h3>
            <button>关注有礼</button>
            <div><img src="<?php echo $full_base_url ?>/images/wrap/wxin.png" alt=""></div>
            <p>公众号：meirenjisy</p>
        </div>
        <div class="wbo fr">
            <h3>官方微博</h3>
            <button>关注有礼</button>
            <div class="share">
                <a title="分享到新浪微博" href="//weibo.com/meirenjisy" class="sina fl">新浪微博</a>
                <a title="分享到腾讯微博" href="//t.qq.com/meirenjisy/follower" class="tx fr">腾讯微博</a>
            </div>
        </div>
    </div>
    <?php require "_footer.ctp"; ?>
</div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        //选项卡
        $('.tab').each(function(){
            var _this = $(this);
            _this.find('.tab-hd').eq(0).find('li').each(function(i){
                if(i==0){
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                }
                $(this).click(function(){
                    $(this).siblings('li').removeClass('current');
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            })
        })
    });
</script>
</body>
</html>
