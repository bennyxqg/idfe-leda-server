<div class="topNav">
    <div class="wrap">
        <div class="logo">
            <!--<h1>梦幻家园</h1>
            <p>快乐消除 建造豪宅</p>-->
            <img class="logo_img" src="//dl.gamdream.com/activity/yfr/logo.png" />
        </div>
        <ul>
            <li class="<?php if($this->view == "index"){echo "active";}?>">
                <a href="/" target="_self">首 &nbsp; 页</a><span></span>
            </li>
            <li class="<?php if($this->view == "show" || $this->view == "news" && (isset($category_id)&&$category_id!=2)){echo "active";}?>">
                <a href="//yfr.uu.cc/news/1.html" target="_self">新闻资讯</a><span></span>
            </li>
            <li>
                <a href="//yfr.uu.cc/#main2" target="_self">游戏特色</a><span></span>
            </li>
            <li class="<?php if($this->view == "vediocenter" ){echo "active";}?>">
                <a href="/vediocenter/1.html" target="_self">合作品牌</a><span></span>
            </li>
            <li>
                <a href="//yfr.uu.cc/#main4" target="_self">游戏视频</a><span></span>
            </li>
            <li>
                <a href="//yfr.uu.cc/#foot" target="_self">关注我们</a><span></span>
            </li>
            <!--<li>
                <a href="<?php echo GET_BLOCK('forum_url');?>" target="_self">官方论坛</a>
            </li>-->
        </ul>
    </div>
</div>
<script src="<?php FILE_PATH() ?>/js/jquery-1.9.1.js" type="text/jscript"></script>
<script type="text/javascript">
    var wxin_dl = $(".wxin");
    var wxin_pd = $(".wxin_pop");
    var qqun_dl = $(".qqun");
    var qqun_pd = $(".qq_pop");
    wxin_dl.hover(function() {
        wxin_pd.addClass("wxin_pop_show");
    }, function() {
        wxin_pd.removeClass("wxin_pop_show");
    });
    qqun_dl.hover(function() {
        qqun_pd.addClass("wxin_pop_show");
    }, function() {
        qqun_pd.removeClass("wxin_pop_show");
    });
    
</script>