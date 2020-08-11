<?php 
include '_header.ctp';
$banner = $webHelper->getSingleBlock('inner_banner'); // 内页banner
$screenshot = $webHelper->getImageList('screenshot'); // 截图图片
?>
<div class="header">
    <div class="top clearfix">
        <div class="blue_bg fl"></div>
        <div class="white_bg fr"></div>
        <div class="tbox clearfix">
            <?php require_once '_top.ctp'; // 顶部公告?>
        </div>
    </div>
    <div class="banBox">
        <div class="nybanner">
        <?php if($banner){?>
            <?php echo $banner;?>
        <?php }else{?>
            <img src="<?php echo $full_base_url ?>/images/nybanner.jpg" width="1920" height="347" border="0">
        <?php }?>
        </div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span>精彩截图</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
            <li class="cur"><a href="javascript:;">精彩截图</a><em></em></li>
        </ul>
        <div class="imgBox">
            <div class="showImg">
                <div class="jCarouselLite">
                    <ul class="runContent">
                    <?php if($screenshot): // 截图列表?>
                        <?php foreach($screenshot as $value):?>
                            <li>
                                <?php if ($value['big_link']):?>
                                <a href="<?php echo $value['big_link'];?>" target="_blank">
                                    <img src="/uploads/<?php echo $value['big_url'];?>" />
                                </a>
                                <?php else :?>
                                    <img src="/uploads/<?php echo $value['big_url'];?>" />
                                <?php endif;?>
                            </li>
                        <?php endforeach;?>
                    <?php endif;?>
                    </ul>
                </div>
            </div>
            <button class="btn_left disabled"></button>
            <button class="btn_right"></button>
        </div>
    </div>
</div>
<div class="footer">
    <span class="logo"><img src="<?php echo $full_base_url ?>/images/logo.png"></span>
    <div class="cr">
        <p class="link"> <a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a> | <a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a> | <a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a> | <a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a> | <a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a> | <a target="_blank" href="//www.idreamsky.com/homes/disclaimer">家长控制</a> </p>
        <p> <span>Copyright©2009-2014  深圳市创梦天地科技有限公司  版权所有  粤ICP备11018438号</span> <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"> <img src="<?php echo $full_base_url ?>/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台" /> </a> <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"> <img src="<?php echo $full_base_url ?>/images/anwang.jpg" alt="公共信息安全网络监察" width="16" /> </a> <a target="_blank" href="//net.china.com.cn/index.htm"> <img src="<?php echo $full_base_url ?>/images/jubao.jpg" alt="经营性网站备案信息" width="16" /> </a> <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"> <img src="<?php echo $full_base_url ?>/images/beian.jpg" alt="不良信息举报中心" width="16" /> </a> </p>
    </div>
    <div class="zg"><strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</div>
</div>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/cookie.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".jCarouselLite").jCarouselLite({
        visible: 1,
        scroll: 1,
        circular: false,
        btnNext: ".btn_right",
        btnPrev: ".btn_left"
        });
    });
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=28932393" charset="UTF-8"></script>
</body>
</html>