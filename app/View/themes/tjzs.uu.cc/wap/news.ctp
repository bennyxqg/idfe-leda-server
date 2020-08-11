<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$this->Website->init();
echo '<title>'.GET_BLOCK('web_title').'</title>';
echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
    <link rel="shortcut icon" href="//tjzs.uu.cc/tjzs.uu.cc/favicon.ico" />
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
    <link media="screen" href="//tjzs.uu.cc/tjzs.uu.cc/css/mobile.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrap">
    <ul class="download clearfix">
         <?php require "_download.ctp";?>
    </ul>
    <div class="news m_news">
        <ul class="tab-hd clearfix">
            <li><a href="<?php CATEGORY_URL('XXX') ?>">最新</a></li>
            <li><a href="<?php CATEGORY_URL('公告') ?>">公告</a></li>
            <li><a href="<?php CATEGORY_URL('新闻') ?>">新闻</a></li>
            <li><a href="<?php CATEGORY_URL('活动') ?>">活动</a></li>
        </ul>
        <div id="tab-con">
            <div class="tab-con" style="display:block;">
                <ul class="newslist">
                <?php
                	if(intval($category_id) == 0)
                		$cate=array('新闻','公告','活动');
                	else
                		$cate=GET_CATEGORY_NAME($category_id);
                	SHOW_NEWS('<li><a href="@@URL@@" target="_blank">【@@CATEGORY_NAME@@】@@TITLE@@</a></li>','m-d',$cate,10,$page,array());
                ?>
                </ul>
                <div class="pagination">
                <?php
                    SHOW_PAGINATION($cate,10,array(),$page);
                ?>
                </div>

            </div>

        </div>
        <div class="goIndex"><a href="/">返回首页</a></div>
    </div>


    <div class="clearfix">
        <div class="wxin fl">
            <h3>官方微信</h3>
            <button>关注有礼</button>
            <div><img src="<?php BLOCK('weixin_qrcode') ?>" alt="" width="200"></div>
            <p>公众号：<?php BLOCK('weixin_account') ?></p>
        </div>
        <div class="wbo fr">
            <h3>官方微博</h3>
            <button>关注有礼</button>
            <div class="share">
                <a title="分享到新浪微博" href="<?php BLOCK('sina_weibo_url') ?>" class="sina fl">新浪微博</a>
                <a title="分享到腾讯微博" href="<?php BLOCK('tecent_weibo_url') ?>" class="tx fr">腾讯微博</a>
            </div>
        </div>
    </div>
    <?php require "_footer.ctp"; ?>
</div>
<script src="//tjzs.uu.cc/tjzs.uu.cc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
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
