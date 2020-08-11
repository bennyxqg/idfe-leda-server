<div class="left">
    <div class="top">
      <a href="/">
        <img src="<?php BLOCK('game_icon') ?>" alt="" class="logo"/>
      </a>
        <a href="<?php BLOCK('android_download_url') ?>"><img src="<?php BASE_URL() ?>images/onload.png" alt="" class="onload"/></a>
    </div>
    <div class="title">
        <ul>
            <?php
                $action=$this->request->action;
            ?>
            <li <?php if(isset($action) && $action == "games" ) echo 'class="cur";'?>><a href="/game"><img src="<?php BASE_URL() ?>images/ldesc.png" alt="游戏简介" /></a></li>

            <li <?php if(isset($action) && $action == "news" ) echo 'class="cur";'?> ><a href="<?php CATEGORY_URL('新闻') ?>"><img src="<?php BASE_URL() ?>images/lnews.png" alt="新闻活动" /></a></li>

            <li><a href="<?php BLOCK('forum_url') ?>"><img src="<?php BASE_URL() ?>images/llunt.png" alt="游戏论坛" /></a></li>
        </ul>
    </div>
    <div class="wei">
        <ul>
            <li class="weixin">官方微信</li>
            <li class="weibo"><a href="<?php BLOCK('weibo_url') ?>" target="_blank">官方微博</a></li>
        </ul>
        <div class="nd">
            <div class="erweima">
                <img src="<?php BLOCK('weixin_qrcode') ?>" alt="" />
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="bhead">健康游戏公告</div>
        <div class="bdesc">
            抵制不良游戏&nbsp;&nbsp;&nbsp;拒绝盗版游戏<br />
            注意自我保护&nbsp;&nbsp;&nbsp;谨防上当受骗<br />
            适度游戏益脑&nbsp;&nbsp;&nbsp;沉迷游戏伤身<br />
            合理安排时间&nbsp;&nbsp;&nbsp;享受健康生活<br />
        </div>
    </div>
</div>

