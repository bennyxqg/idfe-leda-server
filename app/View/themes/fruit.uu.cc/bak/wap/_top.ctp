<div class="header">
    <h1 class="tit_hide"><?php echo $name;?></h1>
    <div class="swipeBox">
        <div id="slider" class="swiper-container">
            <ul class="swipe-wrap">
                <?php if ($loopImgs) :?>
                    <?php foreach ($loopImgs as $key => $value):?>
                        <?php if ($value['big_link']) :?>
                            <li><a href="<?php echo $value['big_link']; ?>" target="_blank"><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></a></li>
                        <?php else:?>
                            <li><img src="/uploads/<?php echo $value['big_url']; ?>" alt="<?php echo $value['alt'];?>" title="<?php echo $value['title'];?>" width="100%" /></li>
                        <?php endif;?>
                    <?php endforeach;?>
                <?php else :?>
                    <li><img src="<?php echo $full_base_url ?>/images/m_bg.jpg" width="100%" /></li>
                <?php endif;?>
            </ul>
            <ul class="dot clearfix" id="dot">
                <?php if ($loopImgs) :?>
                    <?php for ($i = 0; $i < count($loopImgs); $i++):?>
                        <li <?php if ($i == 0): echo 'class="on"'; endif;?>></li>
                    <?php endfor;?>
                <?php else :?>
                    <li class="on"></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <ul class="dh">
        <li <?php if (!isset($category_id)) : echo ' class="cur"'; endif;?>><a href="/">首页</a></li>
        <?php if ($newsCategory) :?>
            <?php foreach ($newsCategory as $key => $value):?>
            <li <?php if(isset($category_id) && $category_id && $category_id == $key): echo ' class="cur"'; endif;?>><a href="<?php echo $this->PK->getNewsUrl($key);?>"><?php echo $value;?></a></li>
            <?php endforeach;?>
        <?php else:?>
            <li><a href="#">资讯</a></li>
            <li><a href="#">攻略</a></li>
            <li><a href="#">活动</a></li>
        <?php endif;?>
    </ul>
    <div class="infoBox clearfix">
        <div class="info fl">
            <h2>水果忍者</h2>
            <?php if ($gameDescribe) :?>
                <p><?php echo $gameDescribe;?></p>
            <?php else :?>
                <p>游戏大小：34.7MB</p>
            <?php endif;?>
            <?php if ($logo):?>
                <?php echo $logo;?>
            <?php else:?>
                <img src="<?php echo $full_base_url ?>/images/m_tub.png" alt="">
            <?php endif;?>
        </div>
        <div class="download fr">
            <a href="#" class="m_download"><img src="<?php echo $full_base_url ?>/images/m_xiazai.png" width="70%" alt="下载"></a> 
            <?php /* if ($downloadButtonIos) :?>
                <?php echo $downloadButtonIos;?>
            <?php else :?>
                <a href="#" class="ios"><img src="<?php echo $full_base_url ?>/images/m_ios.png" alt=""></a>
            <?php endif;?>
            <?php if ($downloadButtonAndroid) :?>
                <?php echo $downloadButtonAndroid;?>
            <?php else :?>
                <a href="#" class="android"><img src="<?php echo $full_base_url ?>/images/m_and.png" alt=""></a>
            <?php endif; */?>
        </div>
    </div>
</div>

 <script type="text/javascript" src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js"></script>
 <script type="text/javascript">
            /*
             * 智能机浏览器版本信息:
             *
             */
            var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }
		   
           $(".m_download").click(function(){
				if (browser.versions.ios || browser.versions.iPhone || browser.versions.iPad) {
					$('.m_download').attr('href','//itunes.apple.com/cn/app/fruit-ninja-free/id403858572?mt=8');    //ios链接地址
				}
				else if (browser.versions.android) {
					$('.m_download').attr('href','//dl.uu.cc/idreamsky/FN-Full-2013_v2.1.3_s2.4.1.3_LE0S0N00000.apk');    //安卓链接地址
				}
            })
 
 
        </script>