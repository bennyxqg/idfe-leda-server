<div class="topNav">
    <div class="wrap">
        <div class="logo">
            <h1>梦幻家园</h1>
            <p>快乐消除 建造豪宅</p>
            <img class="logo_img" src="<?=GET_BLOCK('game_icon');?>" />
        </div>
        <ul>
            <li class="<?php if($this->view == "index"){echo "active";}?>">
                <a href="/" target="_self">官网首页<span>INDEX</span></a>
            </li>
            <li class="<?php if($this->view == "news" && (isset($category_id)&&$category_id!=2)){echo "active";}?>">
                <a href="//jy.uu.cc/news/1.html" target="_self">新闻资讯<span>NEWS</span></a>
            </li>
            <li class="<?php if($this->view == "vediocenter"){echo "active";}?>">
                <!--<a href="//jy.uu.cc/news/2.html" target="_self">游戏攻略<span>WALKHROUGH</span></a>-->
                <a href="//jy.uu.cc/vediocenter/1.html" target="_self">影音鉴赏<span> AUDIOVISUAL</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('forum_url');?>" target="_self">官方论坛<span>FORUM</span></a>
            </li>
            <!--<li>
                <a href="<?php echo GET_BLOCK('baidu_tieba_url');?>" target="_self">百度贴吧<span>BAIDU</span></a>
            </li>-->
        </ul>
        <div class="wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></div>
        <div class="pa wxin_qq_pop wxin_pop">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>">
            <h3>微信公众号</h3>
            <span>扫描二维码关注<br></span>
            <p><?php echo GET_BLOCK('weixin_account');?> </p>
        </div>
        <div class="pa wxin_qq_pop qq_pop">
            <img src="<?php echo GET_BLOCK('qq_qrcode');?>">
            <span>加入QQ群</span>
            <p><?php echo GET_BLOCK('qq_number');?></p>
        </div>
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