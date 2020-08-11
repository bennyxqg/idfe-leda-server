<?php include '_header.ctp' ?>
    <div class="banBox">
        <div class="nybanner">
            <img alt="" src="//www.1uwan.com/uploads/editor_upload/images/201507091501514749.jpg" style="height: 447px; width: 1920px" />        
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span>活动</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
        <div class="listBox">
        <ul class="news-hd clearfix">
                    <li <?php if($category_id == GET_CATEGORY_ID('新闻')) echo 'class="cur"'; ?>>
                        <a href="<?php CATEGORY_URL('新闻') ?>">新闻</a>
                        <em></em>
                    </li>
                    <li <?php if($category_id == GET_CATEGORY_ID('活动')) echo 'class="cur"'; ?>>
                        <a href="<?php CATEGORY_URL('活动') ?>">活动</a>
                        <em></em>
                    </li>
                    <li <?php if($category_id == GET_CATEGORY_ID('攻略')) echo 'class="cur"'; ?>>
                        <a href="<?php CATEGORY_URL('攻略') ?>">攻略</a>
                        <em></em>
                    </li>                
        </ul>
        <ul class="newslist">
        <?php
        	SHOW_NEWS('<li><span>[@@DATE@@]</span><a href="@@URL@@"><strong>[@@CATEGORY_NAME@@]</strong> @@TITLE@@ <img src="//www.1uwan.com/www.1uwan.com/images/hot.png" alt=""/></a></li>','m/d',GET_CATEGORY_NAME($category_id),10,$page,array());
        ?>
        </ul>
        <div class="pagination">
        <?php
        	SHOW_PAGINATION(GET_CATEGORY_NAME($category_id),10,array(),$page);
        ?>
        </div>
    </div>
        <div class="wxbox">
        <h3>扫描二维码</h3>
        <p>扫描下载</p>
        <p>
		<img alt="" src="<?php BLOCK('weixin_qrcode') ?>" style="height: 120px; width: 120px" /></p>
        <p>关注微信公众号</p>
        <div class="tieba">
        	<a href="<?php BLOCK('baidu_tieba_url') ?>" target="_blank"></a>
            <a href="<?php BLOCK('weibo_url') ?>" target="_blank"></a>
        </div>
    </div>
</div>
<div class="footer">

    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//career.idreamsky.com">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  1uwan.com深圳市翼游科技有限公司  版权所有  粤ICP备15058754号  </span><a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="//www.1uwan.com/www.1uwan.com/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="//www.1uwan.com/www.1uwan.com/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="//www.1uwan.com/www.1uwan.com/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="//www.1uwan.com/www.1uwan.com/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div><script type="text/javascript" src="//www.1uwan.com/www.1uwan.com/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="//www.1uwan.com/www.1uwan.com/js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //tab选项卡
    $('.tab-hd').find('li').each(function(i){
        $(this).hover(function(){  
            $(this).addClass('cur').siblings('li').removeClass('cur');
            $('.tab-con').eq(i).show().siblings('.tab-con').hide();
        })
    });
});
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39969579" charset="UTF-8"></script>
</body>
</html>