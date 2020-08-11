<div class="nav">
    <div class="topWrap">
        <!--<a href="/"><img class="logo" src="<?php BASE_URL() ?>images/logo.png"></a>-->
        <ul>
            <li class="li"><a class="<?php if($this->view == "home") echo "active";?>" href="/home">首页</a></li>
            <li class="li">
                <a href="javascript:;" class="<?php if(($this->view == "news" || $this->view == "show") && !isset($type)) echo "active";?>">资讯<i></i></a>
                <div class="navMore">
                    <a href="//gk.uu.cc/news/388.html">新闻</a>
                    <a href="//gk.uu.cc/news/389.html">公告</a>
                    <a href="//gk.uu.cc/news/390.html">活动</a>
                    <a href="//gk.uu.cc/news/99.html">攻略</a>
                </div>
            </li>
            <li class="li"><a class="<?php if($this->view == "game_list"||$this->view == "game_data") echo "active";?>" href="/game_list">英雄</a></li>
            <li class="li">
                <a class="<?php if($this->view == "guide" && ($this->viewVars["category_id"] == 1 ||$this->viewVars["category_id"] == 2)) echo "active";?>" href="javascript:;">视频图片<i></i></a>
                <div class="navMore">
                    <a href="//gk.uu.cc/guide/1.html">视频</a>
                    <a href="//gk.uu.cc/guide/2.html">图片</a>
                </div>
            </li>
            <li class="li_logo"><a href="/"><img class="logo" src="<?php BASE_URL() ?>images/logo.png"></a></li>
            <li class="li"><a class="<?php if($this->view == "picture" || (isset($type) && $type==4)) echo "active";?>" href="/picture/1">世界观</a></li>
            <li class="li"><a class="<?php if($this->view == "guide" && ($this->viewVars["category_id"] == 5)) echo "active";?>" href="//gk.uu.cc/guide/5.html">兵种</a></li>
            <li class="li"><a class="<?php if($this->view == "guide" && ($this->viewVars["category_id"] == 6)) echo "active";?>" href="//gk.uu.cc/guide/6.html">建筑</a></li>
            <li class="li"><a href="http://bbs.uu.cc/forum-627-1.html">论坛</a></li>
        </ul>
    </div>
    
</div>