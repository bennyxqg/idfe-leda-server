
<div class="footer" id="foot">
    <div class="foot2">
        <span class="arrow"></span>
        <div class="title"><img src="<?php FILE_PATH() ?>/images/foot.png" alt=""></div>
        <div class="qrcode_box">
            <div><img src="<?=GET_BLOCK('weixin_qrcode');?>" alt=""><h3>微信公众号</h3></div>
            <div class="center"><img src="<?=GET_BLOCK('weibo_qrcode');?>" alt=""><h3>新浪微博</h3></div>
            <div><img src="<?=GET_BLOCK('taptap');?>" alt=""><h3>TAPTAP</h3></div>
        </div>
    </div>
    <div class="wrap">
        <!--<span class="logo"><img src="<?php FILE_PATH() ?>/images/ft_logo1.png"><img src="<?php FILE_PATH() ?>/images/ft_logo2.png?v=0"></span>-->
        <div class="cr">
            <!--<p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>-->
            <p class="text"><span>Copyright©2009- <span class="copy-year"></span> 深圳市创梦天地科技股份有限公司 版权所有 &nbsp;&nbsp;
                <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php FILE_PATH() ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
                <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php FILE_PATH() ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
                <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php FILE_PATH() ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
                <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php FILE_PATH() ?>/images/beian.jpg" alt="不良信息举报中心" width="16"> </a>
                <a target="_blank" href="javascript:;"> <img src="//game-resource.uu.cc/wxt.uu.cc/images/w_foot2_icon2.png" alt="电子标签" width="16"> </a>
                 <br>
                闽网文[2014]1353-048号 文网游备字：[2018]M-SLG0114号 &nbsp; 登记号：2016SR252253<br>
                著作权人：福州海牛网络技术有限公司 &nbsp; 出版单位：天津电子出版社有限公司<br>
                新广出申【2017】8866号 ISBN978-7-498-01823-6</p>
            <!--<p> <span>Copyright©2009- <span class="copy-year"></span>  深圳市创梦天地科技股份有限公司  版权所有  粤ICP备11018438号</span> 
                
            </p>-->
        </div>
        <!--<div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>-->
    </div>
</div>
<!--<script type="text/javascript" src="http://tajs.qq.com/stats?sId=65715670" charset="UTF-8"></script>-->
<script src="<?php BASE_URL() ?>/js/jquery-1.9.1.js"></script>
<script>
$(function(){
    //版权自动年份
    var d = new Date();
    $('.copy-year').html(d.getFullYear());
});
</script>


