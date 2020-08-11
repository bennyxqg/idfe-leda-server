<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="baidu-site-verification" content="w8PW4Csvlk" />
    <?php
        $this->Website->init();
        echo '<title>'.GET_BLOCK('web_title').'</title>';
        echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
        echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
    <link href="<?php FILE_PATH() ?>/css/style2.css" rel="stylesheet" type="text/css">
    <link href="<?php FILE_PATH() ?>/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php FILE_PATH() ?>/favicon.ico">
</head>

<body>
    <div class="banner_box">
        
        <div class="wrap">
            
            <a class="logo" href="javascript:;"></a>
            <div class="title_img">
                <!--<a class="pa layer video_btn_link" name="http://dl.uu.cc/static/download1/mhhy/1280x720_xiaomi_2.mp4" title="播放精彩视频" href="javascript:;"></a>-->
                <span class="video_btn"></span>
                <a class="pa layer video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>" title="播放精彩视频" href="javascript:;"></a>

            </div>
            <a href="javascript:;" class="yuyue">
                <p>已有 <strong id="collectPhoneNum">loading..</strong> 兄弟预约</p>
            </a>
        </div> 
    </div>
    <div class="main1">
        
        <div class="wrap">
            
            <a class="logo" href="javascript:;"></a>
            <div class="title_img">
                <!--<a class="pa layer video_btn_link" name="http://dl.uu.cc/static/download1/mhhy/1280x720_xiaomi_2.mp4" title="播放精彩视频" href="javascript:;"></a>-->
                <span class="video_btn"></span>
                <a class="pa layer video_btn_link" name="<?php echo GET_BLOCK('mobile_index_video');?>" title="播放精彩视频" href="javascript:;"></a>

            </div>
            <a href="javascript:;" class="yuyue">
                <p>已有 <strong id="collectPhoneNum">loading..</strong> 兄弟预约</p>
            </a>
        </div> 
    </div>     
</body>
</html>
