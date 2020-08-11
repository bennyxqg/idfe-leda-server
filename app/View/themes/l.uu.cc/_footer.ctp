<div class="footer">
    <div class="footTop clearfix">
        <h2 class="fl"><a target="_blank" href="//www.idreamsky.com/">乐逗游戏</a></h2>
        <div class="nav fl">
            <p><a target="_blank" href="//www.idreamsky.com/homes/about">关于我们</a>|<a target="_blank" href="//www.idreamsky.com/jobs">诚聘英才</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">联系我们</a>|<a target="_blank" href="//www.idreamsky.com/homes/events">公司大事记</a>|<a target="_blank" href="//www.idreamsky.com/homes/customer_service">客服中心</a>|<a target="_blank" href="//www.idreamsky.com/homes/contact">网站合作</a>|<a target="_blank" href="//www.idreamsky.com/homes/disclaimer">用户协议</a>|<a target="_blank" href="//www.idreamsky.com/homes/pcontrol">家长监控</a></p>
            <p style="text-indent:5px;">Copyright©2009-2014 深圳市创梦天地科技有限公司 版权所有</p>
            <p>粤网文〔2016〕6871-1632号 新广出审[2015]13号</p>
            <p>出版物号：ISBN 978-7-89404-199-9 文网游备字[2014] M-RPG 174 号 </p>
        </div>
        <div class="link">
            <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp"></a>
            <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp"></a>
            <a target="_blank" href="//net.china.com.cn/index.htm"></a>
            <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action"></a>
            <a target="_blank" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/gameNetTag/11CDBC36234D4B848E0CB45317E5EC67"></a>
        </div>
    </div>
    <h3><span>健康游戏忠告：</span>抵制不良游戏  拒绝盗版游戏  注意自我保护  谨防上当受骗  适度游戏益脑  沉迷游戏伤身  合理安排时间  享受健康生活</h3>
</div>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=36250124" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $full_base_url ?>/js/switch.js"></script>
<script type="text/javascript">
    $(function(){
        /* 图片切换*/
        $(".switch").Switch({
            moveInterval:500,
            interval:5000,
            direction:"alpha",
            handle:".triggers"
        });
        /*tab 选项卡*/
        $('.tab').each(function(){
            var _this = $(this);
            _this.find('.tab-hd').eq(0).find('li').each(function(i){
                if(i==0){
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                }
                $(this).click(function(){
                    $(this).siblings('li').removeClass('current');
                    $(this).addClass('current');
                    _this.find('.tab-con').eq(i).show().siblings('.tab-con').hide();
                })
            })
        })
    })
</script>
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?d1a97782978604258bc8fa7514ad3df4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<style>
    .footer .footTop .link{position:absolute;right:100px;top:35px;width:90px;height:15px;background:url('/l.uu.cc/css/img/frindlink.png') no-repeat;}
    .footer .footTop .link a{float:left;width:15px;height:15px;margin-right:3px;}
</style>