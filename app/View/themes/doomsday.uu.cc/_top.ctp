<div class="topNav">
    <div class="wrap">
        <div class="logo"></div>
        <ul>
            <li class="<?php if($this->view == "index"){echo "active";}?>">
                <a href="/" target="_self">首&nbsp; 页<span>HOME</span></a>
            </li>
            <li class="<?php if($this->view == "news" && (isset($category_id)&&$category_id!=4)){echo "active";}?>">
                <a href="//doomsday.uu.cc/news/1.html" target="_self">新&nbsp; 闻<span>NEWS</span></a>
            </li>
            <li class="<?php if($this->view == "news" && (isset($category_id)&&$category_id==4)){echo "active";}?>">
                <a href="//doomsday.uu.cc/news/4.html" target="_self">攻&nbsp; 略<span>GUIDE</span></a>
            </li>
            <li>
                <a href="<?php echo GET_BLOCK('forum_url');?>" target="_self">论&nbsp; 坛<span>FORUM</span></a>
            </li>
            <!--<li>
                <a href="<?php echo GET_BLOCK('baidu_tieba_url');?>" target="_self">百度贴吧<span>BAIDU</span></a>
            </li>-->
        </ul>
        <div class="contactUs">
            <a href="<?php echo GET_BLOCK('weibo_url');?>"></a>
            <a href="<?php echo GET_BLOCK('qq_jump');?>"></a>
            <a class="weixin" href="javascript:;">
                <div class="qrCode motion"><img width="120" height="120" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt=""></div>
                <!--<div class="qrCode"><img width="120" height="120" src="<?php BASE_URL() ?>/img/download_game.png" alt=""></div>-->
            </a>
            <a href="<?php echo GET_BLOCK('baidu_tieba_url');?>"></a>
        </div>
    </div>
</div>
