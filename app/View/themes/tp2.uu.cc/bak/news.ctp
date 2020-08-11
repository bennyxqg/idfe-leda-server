<!DOCTYPE HTML>
<html>
<?php include '_header.ctp' ?>
<body>
<div class="header">
    <?php
    $consulting =  $this->Tp->newsInitData($page,$category_id);
    // var_dump($consulting);
    $name=$this->Tp->get_category_name($category_id);
    ?>
    <div class="banBox">
        <div class="nybanner"><img src="<?php echo $full_base_url ?>/images/nybanner.jpg" border="0"></div>
        <div class="top_db">
            <div class="pos">
                <a href="/" class="goIndex">返回首页</a>
                <a href="/">首页</a> >>
                <span><?=$name?></span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="listBox">
        <ul class="news-hd clearfix">
             <li <?php if($category_id == $NewsCa_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($NewsCa_id);?>">新闻</a><em></em></li>
                <li  <?php if($category_id == $HdCa_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($HdCa_id);?>">活动</a><em></em></li>
                <li <?php if($category_id == $Glca_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($Glca_id);?>">攻略</a><em></em></li>
                <li <?php if($category_id == $GgCa_id ) echo 'class="cur"';?>><a  href="<?php echo $this->Base->getNewsUrl($GgCa_id);?>">公告</a><em></em></li>
        </ul>
        <?php $result=$this->Tp->newsInitData($page,$category_id);?>
        <ul class="newslist">
            <?php if($result){?>
                <?php foreach($result as $val){?>
                    <li>
                        <span>[<?php echo date('m-d',$val['updated']);?>]</span>
                        <?php $name = $categories[(int)$category_id];?>
                        <a href="/show/<?php echo $val['id']?>.html">
                            <strong>[<?php echo $name;?>]</strong> <?php echo $val['title'];?>
                            <img src="<?php echo $full_base_url ?>/images/hot.png" alt="">
                        </a>
                    </li>
                <?php }?>
            <?php }?>

        </ul>
        <div class="pagination">
            <?php  echo $this->PK->pagination($category_id,$page);?>
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
<script type="text/javascript" src="//act.uu.cc/gamesnav/gamesNav.js"></script>
</body>
</html>