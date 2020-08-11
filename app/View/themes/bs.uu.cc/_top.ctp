<div class="topNav">
    <div class="wrap">
        <div class="logo">
            <h1>梦幻花园</h1>
            <p>玩消除养花遛狗建庄园</p>
            <img class="logo_img" src="<?php FILE_PATH() ?>/img/topImg.png" />
        </div>
        <ul>
            <li class="<?php if($this->view == "index"){echo "active";}?>">
                <a href="/" target="_self">首&nbsp; 页<span>HOME</span></a>
            </li>
            <li class="<?php if($this->view == "news" && (isset($category_id)&&$category_id!=5)){echo "active";}?>">
                <a href="//hy.uu.cc/news/1.html" target="_self">新&nbsp; 闻<span>NEWS</span></a>
            </li>
            <li class="<?php if($this->view == "news" && (isset($category_id)&&$category_id==5)){echo "active";}?>">
                <a href="//hy.uu.cc/news/5.html" target="_self">攻&nbsp; 略<span>GUIDE</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('forum_url');?>" target="_self">论&nbsp; 坛<span>FORUM</span></a>
            </li>
            <!--<li>
                <a href="<?php echo GET_BLOCK('baidu_tieba_url');?>" target="_self">百度贴吧<span>BAIDU</span></a>
            </li>-->
        </ul>
        <div class="wxin_qq"><a class="wxin" href="javascript:;"></a><a class="qqun" href="javascript:;"></a></div>
        <div class="pa wxin_qq_pop wxin_pop"><img src="<?php echo GET_BLOCK('weixin_qrcode');?>"><h3>微信公众号</h3><span>扫描二维码关注<br><?php echo GET_BLOCK('weixin_account');?></span></div>
        <div class="pa wxin_qq_pop qq_pop"><img src="<?php echo GET_BLOCK('qq_qun_qrcode');?>"><span>加入QQ群</span><h3><?php echo GET_BLOCK('qq_group');?></h3></div>
    </div>
</div>