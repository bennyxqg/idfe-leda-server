<div id="foot">
    <!--<span class="ke_f">客服电话：<em><?php echo GET_BLOCK('kefu_phone');?></em></span>-->
    <div class="qrcode_box">
        <span class="arrow"></span>
        <h3 class="title"><img src="<?php BASE_URL() ?>images/foot.png" alt=""></h3>
        <div><img src="<?=GET_BLOCK('weixin_qrcode');?>" alt=""><h3>微信公众号</h3></div>
        <div class="center"><img src="<?=GET_BLOCK('weibo_qrcode');?>" alt=""><h3>新浪微博</h3></div>
        <div><img src="<?=GET_BLOCK('taptap');?>" alt=""><h3>TAPTAP</h3></div>
    </div>
    <footer id="footer">
        <ul>
            <li><span>Copyright©2009- <span class="copy-year"></span> 深圳市创梦天地科技股份有限公司 版权所有 </li>
            <li>闽网文[2014]1353-048号 文网游备字：[2018]M-SLG0114号  登记号：2016SR252253</li>
            <li>著作权人：福州海牛网络技术有限公司  出版单位：天津电子出版社有限公司</li>
            <li>新广出申【2017】8866号 ISBN978-7-498-01823-6</li>
        </ul>
    </footer>
</div>
<script>
    $(function(){
        //版权自动年份
        var d = new Date();
        $('.copy-year').html(d.getFullYear());
    });
</script>