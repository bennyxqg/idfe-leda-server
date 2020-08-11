<?php 
    $this->Website->init();
    $siteId = $GLOBALS['site_id'];
    $defaultNum = GET_BLOCK('default_weituo_num');
    $addNumByTime = GET_BLOCK('add_wt_num_by_time');
    $time = time();
    $startTime = GET_BLOCK('wt_tuo_auto_inc_start_time');
    $endTime = GET_BLOCK('wt_tuo_auto_inc_end_time');
    $addNum = 0;
    if(!empty($startTime) && !empty($endTime) && !empty($addNumByTime)){
        $startTime = strtotime($startTime);
        $endTime = strtotime($endTime);
        if($startTime < $time){
            if($endTime >= $time){
                $addNum = ($time - $startTime)/$addNumByTime;
            }else{
                $addNum = ($endTime - $startTime)/$addNumByTime;
            }
            $addNum = ceil($addNum);
        }
    }
    $realNum = GET_COLLECT_EMAIL_COUNT();
    $addNum += $realNum;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimun-scale=1.0,maximun=1.0" user-scalable="no">
    <meta name="higame-image" content="//dl.gamdream.com/activity/gavin/jzmf_img_test/icon.png?jv=1.0.20160301" />
    <!-- 分享链接时的展示文本 -->
    <meta name="description" content="完美再现动画内容，日式青春校园场景，原汁原味的人物超能设定。在游戏中，玩家扮演灵能者影山茂夫，搭档灵幻新隆、律、小酒窝、花泽辉气等数十位熟悉的伙伴，进行策略对抗以及参与丰富的校园活动。超能力世界，等你一起来除灵冒险">
    <title>灵幻相谈所-解决不可能</title>
    <link rel="icon" href="//dl.gamdream.com/activity/gavin/passerby_talk/images/icon.png"/>
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerby_talk/resource/reset.css">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.3.1.min.css">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/common.css">
    <script type="text/javascript">
        var devieWidth=Math.min(750,document.documentElement.clientWidth);
        document.documentElement.style.fontSize=devieWidth/7.5+'px';
    </script>
</head>
<style type="text/css">
  .pop-success_two .el-dialog {
    position: relative;
    margin: 0 auto .5rem;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 50%;
    background: url(//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/dia_success_bg.png) no-repeat;
    background-size: 100% auto;
    height: 3.86rem;
    text-align: center;
}
.yournum{width: 90%;margin: 1.6rem auto 0;height: .64rem;line-height: .32rem;text-align: center;color: #000000;font-size: .2rem;font-weight: 800;}
.pop-success_two .success_email{width: 90%;margin: .2rem auto 0;height: .6rem;line-height: .28rem;text-align: center;color: #000000;font-size: .16rem;font-weight: 800;overflow: hidden;
text-overflow:ellipsis;
white-space: nowrap;}
</style>
<body>
    <div class="mreserve">
        <div class="top">
            <img class="icon" src="//dl.gamdream.com/activity/gavin/passerby_talk/images/icon.png" alt="">
            <div class="text">
                <h2>路人超能100</h2><p>官方正版授权手游</p>
            </div>
            <a class="reserve show-reserve" href="//mob100.uu.cc"></a>
        </div>
        <div class="content">
            <div class="con">
                <div class="con_title">
                    <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/title.gif">
                    <div class="music"></div>
                    <audio id="musicfx" loop autoplay="autoplay">
                        <source src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/bg.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="slogin"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/text.png"></div>
                <div class="pointArea"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/handin_btn.png" class="pointBtn"></div>
                <div class="pointNumber">已有<div class="number"><?php echo $addNum; ?></div>位委托者提交委托</div>
            </div>
            <div class="com">
                <div class="yewuarea">
                    <span class="neonIllust"></span>
                    <div class="yewu_tit"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/yewu_tit.png"></div>
                    <div class="business">
                        <div class="hoverarea">
                            <div class="img1"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/img_hover1.png"></div>
                            <div class="img2"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/img2.png"></div>
                            <div class="img3"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/img3.png"></div>
                            <div class="img4"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/img4.png"></div>
                            <div class="img5"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/img5.png"></div>
                            <div class="img6"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/img6.png"></div>
                        </div>
                        <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/sale.png" class="sale">
                    </div>
                </div>
                <div class="swiperarea">
                    <span class="neonThunder"></span>
                    <div class="swiper_tit"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/introduct_tit.png"></div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/pic1.png" ></div>
                            <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/pic3.png"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                    </div>
            </div>
        </div>
        <div class="activity_intro">
            <div class="introduct"></div>
        </div>
        <footer class="footer">
            <div class="pic">
                <img src="//dl.gamdream.com/activity/galan/luren/images/ft_logo1.png">
                <img src="//dl.gamdream.com/activity/galan/luren/images/logo2_foot.png">
                <img src="//dl.gamdream.com/activity/galan/luren/images/logo3_foot.png">
                <img src="//dl.gamdream.com/activity/galan/luren/images/logo4_foot.png">
            </div>
            <!-- <div class="link">
                <a href="">客服中心</a>
                |
                <a href="">服务器列表</a>
                |
                <a href="">进入论坛</a>
            </div> -->
            <p class="info">Copyright©2009-2019 深圳市创梦天地科技有限公司 版权所有</p>
            <p class="text">
                抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。<br>
                适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
            </p>
        </footer>
    </div>
    <div class="fade"></div>
    <div class="dialog-reserve pop pop-reserve" style="display: none;">
      <div class="el-dialog" style="margin-top: 25vh; width: 6.17rem;">
        <button type="button" aria-label="Close" class="el-dialog__close"></button>
        <div class="el-dialog__body">
          <div class="form">
            <div class="input-group input-group--prepend">
              <div class="input-group__prepend">委托人</div>
              <input autocomplete="off" name="name" placeholder="请输入你的昵称" class="input__inner name">
            </div>
            <div class="input-group input-group--prepend">
              <div class="input-group__prepend">联系邮箱</div>
              <input autocomplete="off" name="email" placeholder="灵幻将通过邮箱与你联系" class="input__inner email">
            </div>
            <div class="input-group input-group--append">
              <textarea autocomplete="off" placeholder="说说你的烦恼吧！灵幻相谈所帮你解决！" name="project" class="textarea__inner project"></textarea>
            </div>
            <!-- <div class="error-msg">该手机已经预约过啦~！</div> -->
          </div>
        </div>
        <div class="el-dialog__footer">
          <div class="dialog-footer">
            <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/point_btn.png" alt="" class="btn-reserve sub">
          </div>
        </div>
      </div>
    </div>
    <div class="dialog-success pop pop-success_two" style="display: none;">
      <div class="el-dialog" style="margin-top: 25vh; width: 6.17rem;">
        <button type="button" aria-label="Close" class="el-dialog__close"></button>
        <div class="el-dialog__body">
          <p class="yournum">你是第<span></span>号<br>委托人</p>
          <div class="success_email">委托将通过邮箱回复<br>请关注预留邮箱<span></span></div>
        </div>
      </div>
    </div>
    <div class="dia_canvas">
        <button type="button" aria-label="Close" class="el-dialog__close"></button>
        <div class="tipsarea">
            <div class="success_tips"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/success_tips.png"></div>
            <div class="emailtips">委托将通过邮箱回复，请关注预留邮箱<span>1352316161@qq.com</span></div>
        </div>
        <div class="canvasarea">
            <canvas id="canvas" width="1232" height="2088"></canvas>
            <img src="" class="saveimg">
        </div>
        <p class="savetips">长按可保持图片</p>
    </div>
    <div class="loading_dia">
        <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/loading.gif" class="loading">
    </div>
    <div class="lock_wrp" id="lock" style="display: none;">
        <div class="lock">
            <i></i><br>
            为了更好的体验，请使用竖屏浏览
        </div>
    </div>
</body>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.4.2.min.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerby_talk/resource/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/shenmiao/js/clipboard.min.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/market/resource/js/jweixin-1.0.0.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/common.js"></script>
</html>