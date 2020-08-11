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
<!doctype html>
<html>
<head>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<?php
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
?>
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/galan/luren/css/index.css">
  <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/luren_offical/resource/common.css">
  <script type="text/javascript" src="//dl.gamdream.com/activity/galan/luren/js/jquery.min.js"></script>
  <link rel="shortcut icon" href="<?php echo GET_BLOCK('game_icon');?>" />
      <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
</head>
<body data-id=<?=$siteId;?> style="max-width: 1920px;margin: 0 auto;">
<script type="text/javascript">
    function share(){
        // 微博分享
        var title = '<?php echo GET_BLOCK('wb_title');?>';
        var picurl = '<?php echo GET_BLOCK('wb_share_img');?>';
        var sharesinastring='https://service.weibo.com/share/share.php?title='+title+'&url='+window.location.href+'&content=utf-8&sourceUrl='+window.location.href+'&pic='+picurl;
        window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
    }
    function qZone(){
        var p = {
            url: 'https://mob100.uu.cc',
            showcount: '1',/*是否显示分享总数,显示：'1'，不显示：'0' */
            desc: '<?php echo GET_BLOCK('qq_desc');?>',/*默认分享理由(可选)*/
            summary: '',/*分享摘要(可选)*/
            title: '<?php echo GET_BLOCK('wb_title');?>',/*分享标题(可选)*/
            site: '',/*分享来源 如：腾讯网(可选)summary*/
            pics: '<?php echo GET_BLOCK('wb_share_img');?>', /*分享图片的路径(可选)*/
            style: '101',
            width: 199,
            height: 30
        };
        var s = [];
        for (var i in p) {
            s.push(i + '=' + encodeURIComponent(p[i] || ''));
        }
      var target_url ="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+s.join('&');
      window.open(target_url, 'qZone','height=430, width=400');
    }
</script>
<style type="text/css">
  .shareto .share.shareTowechat{width: 108px;margin-right: 8px;}
</style>
  <div class="pcreserve">
    <div class="con">
      <div class="wrap">
        <img class="background1" src="//dl.gamdream.com/activity/gavin/luren_offical/images/background_08.jpg" alt="">
        <img class="video" src="//dl.gamdream.com/activity/gavin/luren_offical/images/play_button.png" alt="">
        <a href="//mob100.uu.cc/xts" class="xts_pc" style="position: absolute;left: 0;top: 229px;z-index: 100;cursor: pointer;width: 110px;height: 150px;background: url(//dl.gamdream.com/activity/gavin/luren_offical/images/xts_pc.png) no-repeat;"></a>
        <img class="logo_png" src="//dl.gamdream.com/activity/gavin/luren_offical/images/logo.png"></img>
        <img class="slogin" src="//dl.gamdream.com/activity/gavin/luren_offical/images/slogin.png">
        <div class="btn-group">
          <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/yuyue_button.png">
          <div class="dong"></div>
          <a href="javascript:;" class="btn-reserve show-reserve"></a>
        </div>
        <video id="dgvideo" width="100%" src="//dl.gamdream.com/activity/gavin/luren_offical/images/bg.mp4" height="" muted="muted" preload loop="loop" autoplay=""></video>
        <div class="qrcode_box">
          <div class="subBox">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" class="qrcode">
            <!-- <p class="focus">扫码关注微信号</p> -->
          </div>
          <a href="<?php echo GET_BLOCK('weibo_url');?>" class="weibo"></a>
          <a href="<?php echo GET_BLOCK('qq_jump');?>" target="_blank" class="forum"></a>
        </div>
      </div>
      <!--预约进度条-->
      <div class="wrap complete">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/background_02.png" alt="">
        <img class="havegift" src="//dl.gamdream.com/activity/gavin/luren_offical/images/havegift.png" alt="">
        <div class="gift_tips">已集结的灵能者可在公测获得对应的累计预约奖励</div>
        <p class="join">已有<span><?php echo $addNum; ?></span>位灵能者加入</p>
        <div class="milestone progress">
          <div class="milestone-timeline">
            <div class="now" data-num="<?php echo $addNum; ?>">
              <div class="role_timeline">
                <svg viewBox="0, 0, 85, 68" class="btn_start"><foreignObject class="i" width="85" height="68"><div class="bz bz1"></div></foreignObject></svg>
              </div>
            </div>
            <div class="list">
              <div class="treasure-box">
                <div class="divbox">
                  <div class="unfinished <?php if($addNum >= 100000){ echo "finished"; } ?>"></div>
                  <div class="gift  <?php if($addNum >= 100000){ echo "gift_finished"; } ?>">
                    <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/tou1.png" class="tou1">
                    <p>10万</p>
                  </div>
                </div>
              </div>
              <div class="treasure-box">
                <div class="divbox">
                  <div class="unfinished <?php if($addNum >= 200000){ echo "finished"; } ?>"></div>
                  <div class="gift <?php if($addNum >= 200000){ echo "gift_finished"; } ?>">
                    <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/tou2.png" class="tou2">
                    <p>20万</p>
                  </div>
                </div>
              </div>
              <div class="treasure-box">
                <div class="divbox">
                  <div class="unfinished <?php if($addNum >= 500000){ echo "finished"; } ?>"></div>
                  <div class="gift <?php if($addNum >= 500000){ echo "gift_finished"; } ?>">
                    <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/tou3.png" class="tou3">
                    <p>50万</p>
                  </div>
                </div>
              </div>
              <div class="treasure-box">
                <div class="divbox">
                  <div class="unfinished <?php if($addNum >= 800000){ echo "finished"; } ?>"></div>
                  <div class="gift <?php if($addNum >= 800000){ echo "gift_finished"; } ?>">
                    <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/tou4.png" class="tou4">
                    <p>80万</p>
                  </div>
                </div>
              </div>
              <div class="treasure-box">
                <div class="divbox">
                  <div class="unfinished <?php if($addNum >= 1000000){ echo "finished"; } ?>"></div>
                  <div class="gift <?php if($addNum >= 1000000){ echo "gift_finished"; } ?>">
                    <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/tou5.png" class="tou5">
                    <p>100万</p>
                    <!-- million -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wrap news">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/background_03.jpg" alt="">
        <img class="new_tit" src="//dl.gamdream.com/activity/gavin/luren_offical/images/new_tit.png" alt="">
        <div class="newsdiv">
            <div class="swiperBox">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                      SHOW_DATAS('<div class="swiper-slide"><a href="@@STR3@@"><img width="580" height="322" src="@@STR2@@" alt="@@STR1@@"></a></div>',
                      'Y-m-d',0);
                    ?>
                </div>
                <div class="swiper-pagination" slot="pagination">
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
      </div>
      <!--轮播图-->
      <div class="wrap">
        <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/background_04.jpg" alt="">
        <img class="spectial" src="//dl.gamdream.com/activity/gavin/luren_offical/images/game_spacetil.png" alt="">
        <div class="swiper-box swiper-container">
          <span class="btn btn-pre"></span>
          <span class="btn btn-next"></span>
          <div class="swiper swiper-wrapper">
            <?php
              SHOW_DATAS('<div class="swiper-slide">
              <img src="@@STR2@@" alt="">
              <div class="swiper-pagination"></div>
            </div>','Y-m-d',2,10);
            ?>
          </div>
          <div class="swiper-pagination">
            <span class="swiper-pagination-bullet"></span>
            <span class="swiper-pagination-bullet"></span>
          </div>
        </div>
      </div>
    
      <!--底部预约-->
      <div class="social clearfix">
        <div class="shareshare">
          <div class="qrcode">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" class="img"/>
            <p class="desc">
              扫码关注官方微信
            </p>
          </div>
          <div class="qrcode">
            <img src="//dl.gamdream.com/activity/galan/luren/images/weibo.png" class="img" />
            <p class="desc">
              扫码关注官方微博
            </p>
          </div>
          <a href="<?php echo GET_BLOCK('qq_jump');?>" class="qrcode" style="margin-left: 50px;">
            <div class="qq_code">
              <img src="//dl.gamdream.com/activity/gavin/luren_offical/images/qq_icon.jpg" class="img" />
              <p class="qqforum"><?php echo GET_BLOCK('qq_group');?></p>
            </div>          
            <p class="desc">
              官方Q群
            </p>
          </a>
        </div>
        <div class="shareto">
          <!-- <span class="qiba">
            分享到：
          </span> -->
          <a href="javascript:void(0)" class="share shareTowechat pc_share"></a>
          <a href="javascript:void(0)" class="share shareToweibo" onclick="share()"></a>
          <a href="javascript:void(0)" class="share shareToqqkone" onclick="qZone()"></a>
        </div>
      </div>
    </div>
    <!--底部-->
    <?php require_once 'footer.ctp';?>

    <!--视频弹窗-->
    <div class="dialog-video pop pop-video">
      <div class="el-dialog" style="margin-top: 25vh; width: 700px;">
        <div class="el-dialog__header">
          <!-- <span class="el-dialog__title"></span> -->
          <button type="button" aria-label="Close" class="el-dialog__close"></button>
        </div>
        <div class="el-dialog__body">
          <video src="<?php echo GET_BLOCK('video_url');?>" id="gamevideo" controls="" preload="metadata" width="700" height="400">您的浏览器不支持 video 标签。</video>
        </div>
      </div>
    </div>

    <!--预约弹窗-->
    <div class="dialog-reserve pop pop-reserve">
      <div class="el-dialog" style="margin-top: 25vh; width: 675px;">
        <div class="el-dialog__header"><span class="el-dialog__title">游戏预约</span>
          <button type="button" aria-label="Close" class="el-dialog__close"></button></div>
        <div class="el-dialog__body">
          <div class="form">
            <div class="form-item">
              <label class="form-label">手机类型</label>
              <div class="input-radio input-radio--checked" type="ios">
                <img src="//dl.gamdream.com/activity/galan/luren/images/ios.png"><span>IOS</span></div>
              <div class="input-radio" type="android">
                <img src="//dl.gamdream.com/activity/galan/luren/images/android.png"><span>Android</span>
              </div>
            </div>
            <div class="input-group input-group--prepend">
              <div class="input-group__prepend">+86 中国</div>
              <input autocomplete="off" name="phone" placeholder="请输入手机号码" class="input__inner" oninput="this.value = this.value.slice(0, 11)">
            </div>
            <div class="input-group input-group--append">
              <input autocomplete="off" placeholder="请输入验证码" name="code" class="input__inner">
              <div class="input-group__append get-code">获取验证码</div>
            </div>
            <div class="error-msg">该手机已经预约过啦~！</div>
          </div>
        </div>
        <div class="el-dialog__footer">
          <div class="dialog-footer">
            <img src="//dl.gamdream.com/activity/galan/luren/images/btn-reserve1.png" alt="" class="btn-reserve sub">
          </div>
        </div>
      </div>
    </div>
    <!--预约成功-->
    <div class="dialog-success pop pop-success">
      <div class="el-dialog" style="margin-top: 25vh; width: 675px;">
        <div class="el-dialog__header">
          <span class="el-dialog__title">预约成功！</span>
          <button type="button" aria-label="Close" class="el-dialog__close"></button>
        </div>
        <div class="el-dialog__body">
          <img src="//dl.gamdream.com/activity/galan/luren/images/wap/pop1.png" alt="" class="figure">
          <div class="focus_box">
            <img src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="" class="qrcode">
            <div class="detail">
              <p style="margin-bottom: 30px;">扫码关注官方微信，领取专属福利！</p>
              <div>
                <p>微信公众号： </p>
                <p><strong>路人超能100手游</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--分享弹窗-->
    <div class="dialog-share pop pop-share">
      <div class="el-dialog" style="margin-top: 25vh; width: 675px;">
        <div class="el-dialog__header">
          <span class="el-dialog__title">扫一扫分享给好友</span>
          <button type="button" aria-label="Close" class="el-dialog__close"></button>
        </div>
        <div class="el-dialog__body">
          <div class="focus_box">
            <img src="<?php echo GET_BLOCK('qrCode_share');?>" alt="" class="qrcode"/>
            <div class="detail">
              <p style="margin-top: 20px;">用微信“扫一扫”左侧二维码，即可把网站分享给您的好友们哦。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fade"></div>
  </div>
  <script src="//dl.gamdream.com/activity/galan/luren/js/swiper.min.js"></script>
  <script type="text/javascript" src="//dl.gamdream.com/activity/gavin/luren_offical/resource/login.js"></script>
</body>
</html>