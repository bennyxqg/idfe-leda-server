<div class="foot">
    <div class="qrCode">
        <div class="img">
            <img width="180" height="180" src="<?php echo GET_BLOCK('weixin_qrcode');?>">
        </div>
        <div class="text">
            <p class="red">搜索公众号：ftxdgame</p>
            <p>或长按二维码保存至相册，微信中使用扫一扫 > 相册 > 选择二维码图片</p>
        </div>
    </div>
    <ul class="tags">
        <li>
            <a href="<?php echo GET_BLOCK('forum_url');?>">
                <img src="<?php FILE_PATH(); ?>/wap/images/forum2.png" alt="论坛">
            </a>
        </li>
        
        <li>
            <a href="<?php echo GET_BLOCK('baidu_tieba_url');?>">
                <img src="<?php FILE_PATH(); ?>/wap/images/baidu2.png" alt="百度">
            </a>
        </li>
        <li>
            <a href="<?php echo GET_BLOCK('weibo_url');?>">
                <img src="<?php FILE_PATH(); ?>/wap/images/weibo2.png" alt="微博">
            </a>
        </li>
        <li>
            <a target="_blank"  href="<?php echo GET_BLOCK('qq_link');?>">
                <img src="<?php FILE_PATH(); ?>/wap/images/qq2.png" alt="qq">
            </a>
            <div class="text">
                <h3>官方QQ群</h3>
                <p><?php echo GET_BLOCK('qq_group');?></p>
                <p><?php echo GET_BLOCK('qq_2');?></p>
            </div>
        </li>
        <li>
            <a href="javascript:alert('敬请期待！');">
                <img src="<?php FILE_PATH(); ?>/wap/images/kefu2.png" alt="客服">
            </a>
            <div class="text">
                <h3>官方客服</h3>
                <p><?php echo GET_BLOCK('kefu');?></p>
            </div>
        </li>
    </ul>
    <div id="toTop">返回顶部</div>
</div>
<footer>
    <p>本游戏适合16岁以上的玩家进入 <br/>Copyright©2009-<span class="copy-year">2018</span> 深圳市创梦天地科技有限公司 <br/>
                版权所有 粤ICP备11018438号
    </p>
</footer>
<script src="<?php BASE_URL() ?>/wap/js/jquery-1.9.1.js"></script>
<script>
$(function(){
    //版权自动年份
    var d = new Date();
    $('.copy-year').html(d.getFullYear());

    //GOTOP
    $("#toTop").click(function() {
        $("body,html").animate({scrollTop:0},800);
    });
});
</script>