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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimun-scale=1.0,maximun=1.0" user-scalable="no"> -->
    <title>灵幻相谈所-解决不可能</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="路人超能100，灵能百分百，ONE老师，官方正版授权，一拳超人，师匠，茂夫，小酒窝,骨头社，灵能百分百第二季">
    <meta name="description" content="《路人超能100》是由艾格拉斯与日本聚逸株式会社共同获得动画IP的游戏化权利，并同成都萤火虫合力开发联合乐逗游戏共同发行的正版授权漫改手游。 游戏完美再现动漫的剧情内容，日式青春的校园场景，原汁原味的人物超能设定。在游戏中，玩家化身超能路人茂夫，可搭档灵幻新隆、律、小酒窝、花泽辉气等数十位熟悉的伙伴，进行策略对抗以及参与丰富的校园活动。超能力世界，等你一起来除灵冒险！">
    <link rel="icon" href="//dl.gamdream.com/activity/storm/mob100/wap/images/top-bar-logo.png"/>
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/reset.css">
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.3.1.min.css">
        <script src="//dl.gamdream.com/website/timeStyleChange.js"></script>
    <script data-fixed="true">
            //js
            var pic2 = new Image();
            pic2.src = '//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/css_sprites6.jpg';
            pic2.onload = pic2.onreadystatechange = function(){
                if(!this.readyState||this.readyState=='loaded'||this.readyState=='complete'){
                   console.log("css_sprites6加载完成");
                }
            };
    </script>
    <link rel="stylesheet" type="text/css" href="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/index.css?jv=201904301127">
</head>
<style type="text/css">
  .pop-success_two .el-dialog {
    position: relative;
    margin: 0 auto 50px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 50%;
    background: url(//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/dia_success_bg.png) no-repeat;
    height: 386px;
    text-align: center;
}
.yournum{width: 90%;margin: 120px auto 0;height: 64px;line-height: 32px;text-align: center;color: #000000;font-size: 20px;font-weight: 800;}
.pop-success_two .success_email{width: 90%;margin: 20px auto 0;height: 60px;line-height: 28px;text-align: center;color: #000000;font-size: 16px;font-weight: 800;overflow: hidden;
text-overflow:ellipsis;
white-space: nowrap;}
</style>
<body>
    <script type="text/javascript">
        function share(){
          // 微博分享
          var title = '<?php echo GET_BLOCK('wb_title_xts');?>';
          var picurl = '<?php echo GET_BLOCK('wb_share_img_xts');?>';
          var sharesinastring='https://service.weibo.com/share/share.php?title='+title+'&url='+window.location.href+'&content=utf-8&sourceUrl='+window.location.href+'&pic='+picurl;
          window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
        } 
    </script>
    <div id="container">
        <div class="content">
            <div class="con">
                <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/bg.jpg">
                <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/m/images/article.png" class="title">
                <svg viewBox="0, 0, 1920, 400" class="btn_start"><foreignObject class="i" width="1920" height="400"><div class="bz bz1"></div></foreignObject></svg>
                <div class="music"></div>
                <audio id="musicfx" loop autoplay="autoplay">
                    <source src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/bg.mp3" type="audio/mpeg">
                </audio>
                <div class="menu">
                    <span class="share">
                        <div class="pcShare">
                          <a href="javascript:;" class="pc_share"></a>
                          <a href="javascript:;" onclick="share()" class="wb"></a>
                        </div>
                    </span>
                    <a class="news_link" href="//mob100.uu.cc"></a>
                </div>
                <span class="ekubo"></span>
                <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/text.png" class="text"></img>
                <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/handin_btn.png" class="handinBtn"></img>
                <div class="pointNumber">已有<div class="number"><?php echo $addNum; ?></div>位委托者提交委托</div>
                <span class="neonIllust"></span>
                <img class="yewu_title" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/yewu_title.png"></img>
                <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/sale.png" class="sale">
                <a href="//mob100.uu.cc" class="role"></a>
                <div class="business">
                  <div class="hoverarea">
                    <div class="img1"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/img_hover1.png"></div>
                    <div class="img2"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/img2.png"></div>
                    <div class="img3"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/img3.png"></div>
                    <div class="img4"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/img4.png"></div>
                    <div class="img5"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/img5.png"></div>
                    <div class="img6"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/img6.png"></div>
                  </div>
                </div>
                <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/introduct.png" class="staff">
                <div class="swiperarea">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/pic1.png" ></div>
                        <div class="swiper-slide"><img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/pic3.png"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
                <span class="neonThunder"></span>
            </div>
        </div>
        <div class="introduct">
          <div class="activity_intro">
            <p class="intro_title">活动介绍</p>
<!--             <p class="intro_time">相谈所试营业时间：2019年6月1日-7月31日</p> -->
            <p class="intro_explain">相谈所业务说明</p>
            <p class="article">1）灵幻相谈所是“21世纪新生灵能力者”灵幻新隆与《路人超能100》手游联合创办的事务所，专注于使用“超能力”解决不可能的委托！</p>
            <p class="article">2）你可以将一切遇到的烦恼通过“提交委托”按钮告诉灵幻相谈所，相谈所试营业期间将抽取一部分委托解决。</p>
            <p class="article">3）同一个委托人提交委托的次数不限，但所提交委托最多完成一个，委托人身份信息由昵称及预留邮箱核定。</p>
            <p class="article">4）委托的解决将通过预留邮箱同步，请填写正确联系信息哦！</p>
            <p class="intro_explain2">免责声明</p>
            <p class="article">1）本次活动经《路人超能100》动画官方授权监修，受版权方认可及约束。</p>
            <p class="article">2）委托人享有所提交委托的隐私权，《路人超能100》手游官方拥有在征求委托人同意后，将委托内容内容及相谈所解决委托过程在官方媒体公开的权利。</p>
            <p class="article">3）活动最终解释权归《路人超能 100》手游官方所有。</p>
          </div>

        </div>
        <div class="footer">
          <span class="logo">
            <img src="//dl.gamdream.com/activity/galan/luren/images/ft_logo1.png" width="100">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo2_foot.png"><br>
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo3_foot.png">
            <img src="//dl.gamdream.com/activity/galan/luren/images/logo4_foot.png">
          </span>
          <div class="cr">
            <p class="link">
              <a target="_blank" href="//www.idreamsky.com/home/about">关于我们</a> |
              <a target="_blank" href="//idreamsky.zhiye.com/home">诚聘英才</a> |
              <a target="_blank" href="//www.idreamsky.com/home/about?type=contact">联系我们</a> |
              <a target="_blank" href="//www.idreamsky.com/home/about?type=growth">公司大事记</a> |
              <a target="_blank" href="//www.idreamsky.com/home/service">客服中心</a> |
              <a target="_blank" href="//www.idreamsky.com/home/cooperate">网站合作</a> |
              <a target="_blank" href="//www.idreamsky.com/home/service?type=agreement">用户协议</a> |
              <a target="_blank" href="//www.idreamsky.com/home/service?type=agreement">家长控制</a></p>
            <p>
              <span>Copyright©2009-2019 深圳市创梦天地科技有限公司 版权所有 粤ICP备11018438号 京新广文 [2018] 535号</span><br>
              <a target="_blank" href="//www.sznet110.gov.cn/netalarm/index.jsp">
                <img src="//dl.gamdream.com/activity/galan/luren/images/shenwang.jpg" width="16" alt="深圳网络警察报警平台">
              </a>
              <a target="_blank" href="//www.sznet110.gov.cn/webrecord/doquery.jsp">
                <img src="//dl.gamdream.com/activity/galan/luren/images/anwang.jpg" alt="公共信息安全网络监察" width="16">
              </a>
              <a target="_blank" href="//net.china.com.cn/index.htm">
                <img src="//dl.gamdream.com/activity/galan/luren/images/jubao.jpg" alt="经营性网站备案信息" width="16">
              </a>
              <a target="_blank" href="//www.miitbeian.gov.cn/publish/query/indexFirst.action">
                <img src="//dl.gamdream.com/activity/galan/luren/images/beian.jpg" alt="不良信息举报中心" width="16">
              </a>
            </p>
          </div>
          <div class="zg">
            <strong>健康游戏忠告：</strong>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。适度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。
          </div>
        </div>
    </div>
    <div class="fade"></div>
    <div class="dialog-share pop pop-share">
      <div class="el-dialog" style="margin-top: 25vh; width: 739px;">
        <div class="el-dialog__header">
          <span class="el-dialog__title">扫一扫分享给好友</span>
          <button type="button" aria-label="Close" class="el-dialog__close"></button>
        </div>
        <div class="el-dialog__body">
          <div class="focus_box">
            <img src="http://mob100.uu.cc/manage/upload/image/mob100.uu.cc/2018-11-15/20181115_212355_446274.png" alt="" class="qrcode">
            <div class="detail">
              <p style="margin-top: 20px;">用微信“扫一扫”左侧二维码，即可把网站分享给您的好友们哦。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dialog-reserve pop pop-reserve" style="display: none;">
      <div class="el-dialog" style="margin-top: 25vh; width: 739px;">
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
            <div class="error-msg">该手机已经预约过啦~！</div>
          </div>
        </div>
        <div class="el-dialog__footer">
          <div class="dialog-footer">
            <img src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/point_btn.png" alt="" class="btn-reserve sub">
          </div>
        </div>
      </div>
    </div>
    <div class="dialog-success pop pop-success" style="display: none;">
      <div class="el-dialog" style="margin-top: 25vh; width: 739px;">
        <button type="button" aria-label="Close" class="el-dialog__close"></button>
        <div class="el-dialog__body">
          <div class="success_email">委托将通过邮箱回复，请关注预留邮箱<span></span></div>
          <div class="success_num">
            <p class="succ_num"></p>
            <div class="succ_name"></div>
          </div>
          <p class="ask"></p>
          <img class="wechatcode" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/images/wechatcode.png"></img>
          <a href="javascript:void(0)" class="sure_btn"></a>
        </div>
      </div>
    </div>
    <div class="dialog-success_two pop pop-success_two" style="display: none;">
      <div class="el-dialog" style="margin-top: 25vh; width: 608px;">
        <button type="button" aria-label="Close" class="el-dialog__close"></button>
        <div class="el-dialog__body">
          <p class="yournum">你是第<span></span>号<br>委托人</p>
          <div class="success_email">委托将通过邮箱回复<br>请关注预留邮箱<span></span></div>
        </div>
      </div>
    </div>
</body>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/swiper-3.4.2.min.js"></script>
<script src="//dl.gamdream.com/activity/gavin/passerby_talk/resource/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//dl.gamdream.com/activity/gavin/passerbyNewtalk/resource/index_second.js"></script>
</html>