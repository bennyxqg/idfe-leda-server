<?php
  $this->Website->init();
  $siteId = $GLOBALS['site_id'];
  $defaultNum = GET_BLOCK('default_baoming_num');
  $addNumByTime = GET_BLOCK('add_num_by_time');
  $time = time();
  $startTime = GET_BLOCK('auto_inc_start_time');
  $endTime = GET_BLOCK('auto_inc_end_time');
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
  $addNum += $defaultNum;
  $realNum = GET_COLLECT_PHONE_COUNT();
  $addNum += $realNum;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui" charset="UTF-8">
  <meta content="telephone=no" name="format-detection" />
  <meta name="msapplication-tap-highlight" content="no">
  <?php
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
  ?>
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.3.1.min.css">
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/wap.css">
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/luren_offical/resource/main.css">
  <style>
  .video-box video{width:5.6rem;height:2.8rem;}
  </style>
  <script type="text/javascript">
    var devieWidth = Math.min(750, document.documentElement.clientWidth);
    document.documentElement.style.fontSize = devieWidth / 7.5 + 'px';
  </script>
</head>
<style type="text/css">
  .mreserve .newsBox .box.active{width: 85%;}
  .mreserve .pop-video .close{right: .1rem;top: .2rem;}
  .pop-video .dialog{background: #000;width: 7.5rem;}
  .pop.pop-video .video-box{text-align: center;padding: .5rem 0 .3rem 0;}
  .video-box video{width: 7.5rem;height: 4rem;}
  .mreserve .floor3 .swiper-box .swiper .swiper-slide{width: 5.5rem !important;}
  .mreserve .floor3 .swiper-box{width: 7.5rem;left: 0rem;top: 1.5rem;}
  .mreserve .floor3 .swiper-box .swiper .swiper-slide img{width: 6.15rem;height: 3.36rem;}
  .mreserve .floor3 .swiper-box .swiper .swiper-slide{width: 6.7rem !important;height: 3.76rem;}
  .mreserve .floor3 .swiper-pagination{top:5.47rem;}
</style>
<body data-id=<?=$siteId;?>>
  <div class="mreserve">
    <?php require_once 'top.ctp';?>
    <div class="con">
      <div class="floor floor1">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/background_01.jpg" alt="">
        <img class="play" src="//dl.gamdream.com/activity/gavin/luren_offical/images/play_button.png" alt="">
        <img class="xts_pc" src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/xts_go.png" style="position: absolute;left: 0;top: .4rem;width: .99rem;height: 1.27rem;">
        <div class="btn-group">
          <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/yuyue_button.png" alt="">
          <a class="btn-reserve show-reserve" href="javascript:;"></a>
        </div>
      </div>
      <div class="floor floor2">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/background_02.jpg" alt="">
        <p class="join">已有<span><?php echo $addNum; ?></span>位灵能者加入</p>
        <div class="progress">
          <div class="now" data-num="<?php echo $addNum; ?>"></div>
          <div class="list">
            <div class="treasure-box">
              <div class="divbox">
                <div class="unfinished <?php if($addNum >= 100000){ echo "finished"; } ?>"></div>
                <div><p>10万</p></div>
              </div>
            </div>
            <div class="treasure-box">
              <div class="divbox">
                <div class="unfinished <?php if($addNum >= 200000){ echo "finished"; } ?>"></div>
                <div><p>20万</p></div>
              </div>
            </div>
            <div class="treasure-box">
              <div class="divbox">
                <div class="unfinished <?php if($addNum >= 500000){ echo "finished"; } ?>"></div>
                <div><p>50万</p></div>
              </div>
            </div>
            <div class="treasure-box">
              <div class="divbox">
                <div class="unfinished <?php if($addNum >= 800000){ echo "finished"; } ?>"></div>
                <div><p>80万</p></div>
              </div>
            </div>
            <div class="treasure-box">
              <div class="divbox">
                <div class="unfinished <?php if($addNum >= 1000000){ echo "finished"; } ?>"></div>
                <div><p>100万</p></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiperBox">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/gift_10.png" ></div>
                  <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/gift_20.png"></div>
                  <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/gift_50.png" ></div>
                  <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/gift_80.png"></div>
                  <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/gift_100.png" ></div>
              </div>
            </div>
            <span class="btn btn-pre"></span>
            <span class="btn btn-next"></span>
        </div>
      </div>
      <div class="floor floor4">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/background_03.jpg" alt="">
        <div class="news_swiper">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php
                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img width="526" height="290" src="@@STR2@@" alt="@@STR1@@"></a></div>',
                      'Y-m-d',8);
                    ?>
              </div>
              <div class="swiper-pagination" slot="pagination">
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
              </div>
          </div>
        </div>
        <div class="newsBox">
          <ul class="newsTab">
            <li class="active" d-num="1"><a href="javascript:;">最新</a></li>
            <li class="diamond"></li>
            <li d-num="2"><a href="javascript:;" >新闻</a></li>
            <li class="diamond"></li>
            <li d-num="3"><a href="javascript:;" >公告</a></li>
            <li class="diamond"></li>
            <li d-num="4"><a href="javascript:;" >活动</a></li>
        </ul>
        <a href="//mob100.uu.cc/news/1.html" class="_bottom"></a>
        <div class="box active">
            <?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><p class="novel">【@@CATEGORY_NAME@@】@@TITLE@@</p><p class="a_time">@@DATE@@</p></a></div>','m-d',array('新闻','公告','活动'),6,0,array('LimitFrom'=>0));
                    ?>
        </div>
        <div class="box">
             <?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><p class="novel">【@@CATEGORY_NAME@@】@@TITLE@@</p><p class="a_time">@@DATE@@</p></a></div>','m-d',array('新闻'),6,0,array('LimitFrom'=>0));
                    ?>
        </div>
        <div class="box">
            <?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><p class="novel">【@@CATEGORY_NAME@@】@@TITLE@@</p><p class="a_time">@@DATE@@</p></a></div>','m-d',array('公告'),6,0,array('LimitFrom'=>0));
                    ?>
        </div>
        <div class="box">
            <?php
                          SHOW_NEWS('<div class="article"><a href="@@URL@@" ><p class="novel">【@@CATEGORY_NAME@@】@@TITLE@@</p><p class="a_time">@@DATE@@</p></a></div>','m-d',array('活动'),6,0,array('LimitFrom'=>0));
                    ?>
        </div>
        </div>
      </div>
      <div class="floor floor3">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/background_04.jpg" alt="">
        <div class="swiper-box swiper-container">
          <div class="swiper swiper-wrapper">
            <?php
              SHOW_DATAS('<div class="swiper-slide">
              <img src="@@STR2@@" alt="">
            </div>','Y-m-d',4,10);
            ?>
          </div>
        </div>
        <div class="swiper-pagination">
          <span class="swiper-pagination-bullet"></span>
          <span class="swiper-pagination-bullet"></span>
        </div>
        <!-- <span class="btn btn-pre"></span>
        <span class="btn btn-next"></span> -->
      </div>
      <div class="floor floor5">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/background_05.jpg" alt="">
        <ul>
          <li>
            <a href="javascript:;" class="pc_share">
              <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/focus_wechat.png" alt="">
            </a>
          </li>
          <li>
            <a href="<?php echo GET_BLOCK('weibo_url');?>">
              <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/focus_weibo.png" alt="">
            </a>
          </li>
          <li>
            <a href="<?php echo GET_BLOCK('qq_jump');?>">
              <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/m/focus_qq.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!--视频弹窗-->
    <div class="pop pop-video">
      <div class="dialog">
        <div class="close"></div>
        <div class="video-box">
            <video src="<?php echo GET_BLOCK('video_url');?>" id="gamevideo" controls="" preload="metadata" width="750"></video>
        </div>
      </div>
    </div>

    <!--选择系统弹窗-->
    <div class="pop pop-btn_select">
      <div class="dialog">
        <div class="close"></div>
        <div class="selectdiv">
          <div class="radio_sect active" type="and">Android</div>
          <div class="radio_sect radio_sectios" type="ios">IOS</div>
        </div>
        <a class="next_one" href="javascript:;"></a>
      </div>
    </div>

    <!--预约弹窗-->
    <div class="pop pop-reserve">
      <div class="dialog">
        <div class="close"></div>
        <h3 class="stit">游戏预约</h3>
        <div class="ins">
          <span>+86 中国</span>
          <input type="tel" maxlength="11" name="phone" placeholder="请输入手机号">
        </div>
        <div class="ins ins-code">
          <input type="text" name="code" placeholder="请输入验证码">
          <span class="get-code">获取验证码</span>
        </div>
        <p class="error error-msg">该手机已经预约过啦~！</p>
        <a class="sub" href="javascript:;">立即预约</a>
      </div>
    </div>

    <!--预约成功-->
    <div class="pop pop-success">
      <div class="dialog">
        <div class="close"></div>
        <div class="ico"></div>
        <h3 class="stit">预约成功！</h3>
        <div class="con">
          <div class="pic">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="">
          </div>
          <div class="text">
            <p>长按扫码或通过账号搜索关注官方微信，<br/>领取专属福利</p>
            微信公众号：<br />
            <span>路人超能100手游</span>
          </div>
        </div>
      </div>
    </div>

    <!--关注微信-->
    <div class="pop pop-share">
      <div class="dialog">
        <div class="close"></div>
        <div class="ico"></div>
        <h3 class="stit"></h3>
        <div class="con">
          <div class="pic">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="">
          </div>
          <div class="text">
            <p>长按扫码或通过账号搜索关注官方微信，<br/>领取专属福利</p>
            微信公众号：<br />
            <span>路人超能100手游</span>
          </div>
        </div>
      </div>
    </div>
    <?php require_once 'footer.ctp';?>
  </div>
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/jquery.min.js"></script>
  <script src="//dl.gamdream.com/activity/galan/luren/js/swiper.min.js"></script>
  <script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.4.2.min.js"></script>
  <script type="text/javascript" src="//dl.gamdream.com/activity/gavin/luren_offical/resource/login.js"></script>
</body>
</html>