<div id="foot">
    <div class="newFooter">
        <div class="messages">
            <div class="logo">
                <img class="img_logo" src="<?php BASE_URL() ?>images/w_foot_logo.png" alt="">
                <img src="<?php BASE_URL() ?>images/w_foot_icon.png" alt="">
            </div>
            <div class="foot_text">
                <p class="link"> <a class="first_o" target="_blank" href="http://www.idreamsky.com/homes/about">关于我们 </a>&nbsp;&nbsp; | <a target="_blank" href="http://www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="http://www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="http://www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="http://www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="http://www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
                <p> <span>Copyright©2009-<em class="copy-year">2018</em>  IDREAMSKY. ALL RIGHTS RESERVED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创梦天地科技有限公司  版权所有<br>  粤ICP备11018438号&nbsp;&nbsp;&nbsp;&nbsp; 粤网文〔2016〕6871-1632号  &nbsp;&nbsp;&nbsp;   批准文号：文网游备字〔2017〕Ｍ-CSG 2907 号  新广出审[2017]10143 号 <br> 出版物号：ISBN 978-7-498-03024-5</span> 
                <a target="_blank" href="http://www.sznet110.gov.cn/netalarm/index.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台"> </a> 
                <a target="_blank" href="http://www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="http://pao.uu.cc/pao.uu.cc/images/anwang.jpg" alt="公共信息安全网络监察" width="16"> </a> 
                <a target="_blank" href="http://net.china.com.cn/index.htm"> <img src="http://pao.uu.cc/pao.uu.cc/images/jubao.jpg" alt="经营性网站备案信息" width="16"> </a> 
                <a target="_blank" href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="http://pao.uu.cc/pao.uu.cc/images/beian.jpg" alt="不良信息举报中心" width="16"> </a>
                <a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/2c94c08b5fc44881015fc7dc9fc107ea"><img src="<?php BASE_URL() ?>images/w_foot2_icon2.png" alt="游戏电子标签" width="16"></a> </p>

            </div>
        </div>
        <div class="zg"><strong>健 康 游 戏 忠 告 ：</strong>抵制不良游戏，拒绝盗版游戏。 注意自我保护，谨防上当受骗。 适度游戏益脑，沉迷游戏伤身。 合理安排时间，享受健康生活。</div>

    </div>
</div>
<script type="text/javascript" src="<?php BASE_URL() ?>wap/js/jquery-2.1.4.min.js"></script>
<script src="<?php BASE_URL() ?>js/jquery.SuperSlide.2.1.1.js" type="text/jscript"></script>
<script>
$(function(){
    jQuery(".demo").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20});

    $('.hezuo').hover(function(){
        $('.bar_hz').show();
    },function(){
        $('.bar_hz').hide();
    })
    //版权自动年份
    var d = new Date();
    $('.copy-year').html(d.getFullYear());
    $(".topWrap").find("a").click(function(){
        $(".navMore").hide();
        $(this).siblings(".navMore").toggle();
    });
    $(".topWrap li").hover(function(){
        $(".navMore").hide();
        $(this).find(".navMore").show();
    },function(){
        $(this).find(".navMore").hide();
    });
});
</script>