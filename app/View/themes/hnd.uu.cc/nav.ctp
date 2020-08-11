
	<div class="top_nav">
        <div class="wrap">
            <h2 class="pa logo">
            <?php
            echo '<img src="'.GET_BLOCK('game_icon').'">';
            ?>
            </h2>
            <ul class="pa nav">
                <li id="n1" class=""><a href="/">官网首页</a></li>
                <li id="n2" class="nav_hover"><a href="<?php CATEGORY_URL('XXX') ?>">新闻公告</a></li>
                <li id="n3" class="nav_hover"><a href="<?php CATEGORY_URL('新手指南','data') ?>">游戏资料</a></li>
                <li id="n4" class="nav_hover"><a href="<?php CATEGORY_URL('官方视频','video') ?>">视听中心</a></li>
                <li id="n5" class="nav_hover"><a href="<?php CATEGORY_URL('玩家互动','wjhd') ?>">玩家互动</a></li>
                <li id="n6"><a href="<?php BLOCK('jifenshangcheng_url') ?>">官方论坛</a></li>
            </ul>
            <div class="nav_item" style="display:">
            	<ul>
                	<li><a href="<?php CATEGORY_URL('新闻') ?>">官方新闻</a></li>
                    <li><a href="<?php CATEGORY_URL('公告') ?>">官方公告</a></li>
                    <li><a href="<?php CATEGORY_URL('活动') ?>">官方活动<i class="item_hot_icon"></i></a></li>
                </ul>
                <ul>
                	<li><a href="<?php CATEGORY_URL('新手指南','data') ?>">新手指南</a></li>
                    <li><a href="<?php CATEGORY_URL('系统介绍','data') ?>">系统介绍</a></li>
                    <!--
                    <li><a href="<?php CATEGORY_URL('游戏截图','pic') ?>">游戏图鉴</a></li>
                    -->
                    <li><a href="<?php CATEGORY_URL('通关秘籍','data') ?>">通关秘籍<i class="item_hot_icon"></i></a></li>
                    <li><a href="<?php CATEGORY_URL('攻略专区','data') ?>">攻略专区</a></li>
                </ul>
                <ul>
                	<li><a href="<?php CATEGORY_URL('官方视频','video') ?>">官方视频</a></li>
                    <li><a href="<?php CATEGORY_URL('精彩原画','pic') ?>">精彩原画</a></li>
                    <li><a href="<?php CATEGORY_URL('游戏截图','pic') ?>">游戏截图</a></li>
                    <li><a href="<?php CATEGORY_URL('玩家作品','video') ?>">玩家作品<i class="item_new_icon"></i></a></li>
                </ul>
                <ul>
                	<li><a href="<?php BLOCK('forum_url') ?>" target="_blank">官方论坛<i class="item_hot_icon"></i></a></li>
                    <li><a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank">官方贴吧<i class="item_new_icon"></i></a></li>
                    <!--<li><a href="<?php BLOCK('jinisi_url') ?>" target="_blank">吉尼斯专区</a></li>-->
                </ul>
            </div>
            <a class="pa wx" href="javascript:;">关注官方微信<em>领红包</em></a>
            <div class="pa wx_pop">
            <?php
            echo '<img src="'.GET_BLOCK('weixin_qrcode').'" /><p>扫码关注官方微信号：<span>'.GET_BLOCK('weixin_account').'</span></p>';
            ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(function(){
    	$('#<?php echo $navid; ?>').addClass('on');
    });
    </script>
