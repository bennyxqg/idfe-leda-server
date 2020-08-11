<div class="download">
    <span id="d_and">安卓下载</span>
    <span id="d_ios"><?php echo $iosDownload; // ios下载链接?></span>
</div>
<div class="wxbox">
    <?php echo $qrcodeDownload; // 下载二维码?>
</div>
<div class="box wx">
    <h2>微信</h2>
    <p>收听官方微信<br /><span>获取礼包</span></p>
</div>
<div class="box lt">
    <h2>新闻</h2>
    <a href="//hoda.uu.cc/news/all.html">
        <p>进新闻中心获取资讯</p>
    </a>
</div>
<div class="box qq">
    <h2>QQ群</h2>
    <p>进官方QQ群吐槽</p>
</div>
<div class="pop" style="display: none">
    <div class="box">
        <h3>分流渠道下载地址</h3>
        <ul class="clearfix">
            <?php if (!$downlinkLinks) :?>
            <li style="margin-left:0;">
                <h4>360</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>UC九游</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>小米应用</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>豌豆荚</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>百度应用</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>安智市场</h4>
                <a href="#">下载地址</a>
            </li>
            <li>
                <h4>OPPO</h4>
                <a href="#">下载地址</a>
            </li>
            <?php else :?>
                <?php foreach ($downlinkLinks as $key => $link):?>
                   <?php if ($link['title']) :?>
                       <li <?php if ($key == 0):?> style="margin-left:0;" <?php endif;?>>
                            <h4><?php echo $link['title']?></h4>
                            <a target="_blank" href="<?php echo $link['url']?>">下载地址</a>
                        </li>
                   <?php endif;?>
                <?php endforeach;?>
            <?php endif;?>
        </ul>
        <div class="close"></div>
    </div>
</div>