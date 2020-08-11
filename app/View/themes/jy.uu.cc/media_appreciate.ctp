<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div class="media-page">
    <div class="top">
    <div class="wrap-menu">
        <a class="top-logo" href="/"></a>
        <div class="top-menu">
            <a class="menu-item menu1" href="/">官网首页</a>
            <a class="menu-item menu2" href="/news/1.html">游戏资讯</a>
            <a class="menu-item menu3" href="/welfare">福利中心</a>
            <a class="menu-item menu4" href="/news/2.html">游戏攻略</a>
            <a class="menu-item menu5 act" href="/media_appreciate">影音鉴赏</a>
        </div>
    </div>

</div>
    <div class="media-wrap overflow-hidden">
        <img class="media-title" src="//dl.gamdream.com/website/jy/images/media-title@2x.png" />
        <div class="media-bg overflow-hidden">
            <div class="media-tab overflow-hidden">
                <a href="/media_appreciate/1.html" class="media-tab-item <?php if ($type == 1){echo 'act';}?>">影音</a>
                <a href="/media_appreciate/2.html" class="media-tab-item <?php if ($type == 2){echo 'act';}?>">图片</a>
            </div>
            <?php if($type==1):?>
            <div class="media-content">
                
                    <!-- <div class="media-item video index1" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index2" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index3" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index0" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index1" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index2" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index3" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index0" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index1" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div>
                
                    <div class="media-item video index2" data-src="http://www.w3school.com.cn/i/movie.mp4">
                        <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                        <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                        <div class="media-btn"></div>
                    </div> -->
                    <?php
                        SHOW_DATAS('<div class="media-item video index2" data-src="@@STR1@@"><img class="media-cover" src="@@STR2@@"><div class="media-des overflow-ellipsis">@@STR3@@</div><div class="media-btn"></div></div>',
                        'Y-m-d',1,10,$page);
                    ?>
					<div class="paging">
						<?php
							SHOW_DATAS_PAGINATION3($type,10,array('CurrentPageClass' => 'active'),$page,'media_appreciate');
						?>
					</div>
            </div>
        <?php endif;?>
        <?php if($type==2):?>
            <div class="media-content">
                
                <!-- <div class="media-item pic index1" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index2" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index3" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index0" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index1" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index2" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index3" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index0" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index1" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div>
                
                <div class="media-item pic index2" data-src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <img class="media-cover" src="//dl.gamdream.com/website/jy/images/media-appreciate-pic@2x.png">
                    <div class="media-des overflow-ellipsis">这个是影音描述这个是影音描述这个是影音描述</div>
                </div> -->
                <?php
                    SHOW_DATAS('<div class="media-item pic index2" data-src="@@STR2@@"><img class="media-cover" src="@@STR2@@"><div class="media-des overflow-ellipsis">@@STR3@@</div><</div>',
                    'Y-m-d',2,10,$page);
                ?>
				<div class="paging">
					<?php
						SHOW_DATAS_PAGINATION3($type,10,array('CurrentPageClass' => 'active'),$page,'media_appreciate');
					?>
				</div>
            </div>
            <?php endif;?>
           <!--  <div class="paging">
                <div class="paging-pre">上一页</div>
                
                <div class="paging-item">1</div>
                
                <div class="paging-item">2</div>
                
                <div class="paging-item">3</div>
                
                <div class="paging-item">4</div>
                
                <div class="paging-item">5</div>
                
                <div class="paging-item act">100</div>
                <div class="paging-next">下一页</div>
            </div> -->

        </div>

    </div>
    <!-- 影音鉴赏图片预览S -->
<div class="dialog media-dialog-pic hide">
    <div class="close"></div>
    <img class="media-preview" src="">
</div>
<div class="shadow"></div>

    <!-- 影音鉴赏视频短片预览S -->
<div class="dialog media-dialog-video hide">
    <div class="close"></div>
    <video class="media-preview" controls="controls" autoplay="autoplay">
        浏览器版本过低，请升级您的浏览器
    </video>
</div>
<div class="shadow"></div>

</div>
<?php
    require_once 'footer.ctp';
?>