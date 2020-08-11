<div class="header">
    <!-- 导航 -->
    <div class="nav clearfix">
        <?php
            $controller=$this->request->params["controller"];
            $action=$this->request->params["action"];
        ?>
        <dl <?php if(isset($action) && $action == "index") echo 'class="cur"'; ?>>
            <a href="/">
                <dt>官网首页</dt>
                <dd>HOME</dd>
            </a>
        </dl>

        <dl <?php if(isset($category_id) && ( is_array($category_id) || $category_id == 38 || $category_id == 40)) echo 'class="cur"'; ?>>
            <a href="/news/all.html">
                <dt>新闻公告</dt>
                <dd>NEWS</dd>
            </a>
        </dl>

        <h1><a href="/">美人记官网</a></h1>
        <dl <?php if(isset($category_id) && $category_id == 44) echo 'class="cur"'; ?>>
            <a href="//online.gamedog.cn/detail/587650/">
                <dt>游戏资料</dt>
                <dd>GAME DATA</dd>
            </a>
        </dl>
        <dl>
            <a href="//bbs.uu.cc/forum-249-1.html">
                <dt>官方论坛</dt>
                <dd>FORUM</dd>
            </a>
        </dl>
    </div>
    <!-- 下载和微信 -->
    <div class="combox clearfix">
        <ul class="fl ">
             <img src="<?php echo $full_base_url ?>/css/img/download_ewm.png" alt="" />
        </ul>
        <div class="wx fr">
              <!--<li><a href="<?php  echo $this->Base->getBlock(18,"ios_download_2");?>">ios越狱下载</a></li> -->
            <li><a href="<?php echo $this->Base->getBlock(18,"ios_download");?>"><img src="<?php echo $full_base_url ?>/css/img/download_ios.png"></a></li>
            <li><a href="<?php echo $this->Base->getBlock(18,"android_download");?>"><img src="<?php echo $full_base_url ?>/css/img/download_az.png"></a></li>
        </div>
    </div>
    <!-- 浮层 -->
    <div class="package">
        <h2 class="tit">领188元豪华礼包</h2>
        <div class="packCon">
            <h3>手机号：</h3>
            <input type="text" name="phone" value="请输入11位手机号码" />
            <p class="tip">(礼包兑换码将通过手机短信发送)</p>
            <div class="btn" id="lqlb">立即领取</div>
            <p><a href="//mrj.uu.cc/show/220.html">兑换方法>></a></p>
        </div>
        <div class="ann" id="ann1" style="display:block;"></div>
        <div class="ann" id="ann2"></div>
    </div>
</div>