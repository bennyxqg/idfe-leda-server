<?php 
$newsCategory = $this->PK->getNewsCategoryBySiteId($site_id); // 新闻分类
$loopImgs = $this->PK->img_list('loop_img_wap'); // 手机首页轮播图片
$logo = $this->PK->getBlock($site_id, 'logo_wap'); // 手机logo
$gameDescribe = $this->PK->getBlock($site_id, 'game_describe_wap'); // 游戏描述
$downloadButton = $this->PK->getBlock($site_id, 'download_android_wap'); // 下载按钮

$indexNews = $this->PK->getContentByAllBySiteId($site_id, "all", 0, 3, 1); // 首页新闻
?>
<?php require_once '_head.ctp';?>
    <div class="page">
        <?php require_once '_top.ctp';?>
        <div class="content">
            <ul class="list">
                <?php if ($indexNews) :?>.
                    <?php foreach ($indexNews as $key => $value):?>
                        <li class="list<?php echo ($key + 1);?>">
                            <a href="<?php echo $this->PK->getShowUrl($value['id']);?>">
                                <h4><?php echo $value['title'];?></h4>
                                <p><?php echo date('m/d', $value['created']);?></p>
                            </a>
                        </li>
                    <?php endforeach;?>
                <?php else :?>
                <li class="list1">
                    <a href="#">
                        <h4><span class="blue">曼谷风情《地铁跑酷》</span>新版即将上线</h4>
                        <p>10/29</p>
                    </a>
                </li>
                <li class="list2">
                    <a href="#">
                        <h4><span class="blue">不一样的中东风情</span>开罗版上线</h4>
                        <p>10/29</p>
                    </a>
                </li>
                <li class="list3">
                    <a href="#">
                        <h4><span class="yellow">一周年庆典</span>《地铁跑酷》开罗版开跑</h4>
                        <p>10/29</p>
                    </a>
                </li>
                <?php endif;?>
            </ul>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="<?php echo $full_base_url ?>/images/logo.png" alt=""></a>
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    <div class="pop">
        <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
    </div>
<script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo $full_base_url ?>/js/swipe.js" type="text/javascript"></script>
<script type="text/javascript">
var slider1 = Swipe(document.getElementById('slider'), {
    auto: 3000,
    continuous: true,
    callback: function(pos) {
        var i = bullets.length;
        while (i--) {
            bullets[i].className = ' ';
        }
        bullets[pos].className = 'on';
    }
});
var bullets = $('#dot').find('li');

function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
}

$(function(){
    $('.pop').height($(document).height());
    if(isWeiXin()){
        $('#download').click(function(e){
            $('.pop').show();
            e.stopPropagation();
            return false;
        });
    }
    $('.pop').click(function(){
        $(this).hide();
    });
});
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?826b1be98e0fe9d23409ceac79215ebc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
<?php require_once '_foot.ctp';?>
