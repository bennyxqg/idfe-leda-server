<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div class="article-page">
    <div class="top">
    <div class="wrap-menu">
        <a class="top-logo" href="/"></a>
        <div class="top-menu">
           <a class="menu-item menu1 act" href="/">官网首页</a>
            <a class="menu-item menu2" href="/news/1.html">游戏资讯</a>
            <a class="menu-item menu3" href="/welfare">福利中心</a>
            <a class="menu-item menu4" href="/news/2.html">游戏攻略</a>
            <a class="menu-item menu5" href="/media_appreciate/1.html">影音鉴赏</a>
        </div>
    </div>

</div>
    <div>
        <?php
            $categoryName = GET_CATEGORY_NAME(GET_CURRENT_NEWS_INFO('news_categories_id'));
            if(strpos($categoryName,'攻略') !== false){
                $title = 'walktitle-detail@2x.png';
                $id = 2;
            }else{
                $title = 'inftitle2@2x.png';;
                $id = 1;
            }
            
        ?>
        <img class="news-page-banner" src="//dl.gamdream.com/website/jy/images/news-banner@2x.png" />
        <img class="news-list-title" src="//dl.gamdream.com/website/jy/images/<?php echo $title;?>" />
        <div class="news-position">
            <span class="position-label">您的位置：</span>
            <span class="position-detail"><a href="/">官网首页</a> > <a href="/news/<?php echo $id;?>.html">游戏<?php echo $categoryName;?></a></span>
        </div>
        <div class="news-line">
            <div class="base-pin"></div>
            <div class="base-line"></div>
        </div>
        <div class="article-wrap">
            <div class="article-title"><?php SHOW_CURRENT_NEWS_INFO('title') ?></div>
            <div class="author-wrap">
                <div class="author fl">作者：梦幻家园运营团队</div>
                <div class="author-date fr">时间：<?php echo date('Y-m-d H:i',GET_CURRENT_NEWS_INFO('created')) ?></div>
            </div>
            <div class="author-line"></div>
            <div class="article-content"><?php SHOW_CURRENT_NEWS_INFO('content') ?>
            </div>
            <div class="about-jy">
                <div class="about-box1">
                    <h3 class="about-title">关于《梦幻家园》</h3>
                    <p class="about-detail">俄罗斯知名手游研发商playrix联合乐逗游戏倾力四年精心打造的全新三消养成手游《梦幻家园》，于2017年9月21日安卓全平台上线。在2016年，该作被Facebook评选为年度游戏，全球顶级三消游戏。《梦幻家园》拥有丰富多样的玩法，新颖故事剧情，独一无二的游戏设定，为你带来更多快乐！</p>
                </div>
                <div class="about-line"></div>
                <div class="about-box2">
                    <img class="about-qrcode" src="//dl.gamdream.com/website/jy/images/about-qrcode@2x.png">
                    <div class="join-us-wrap">
                        <div class="join-us">加入《梦幻家园》</div>
                        <div class="join-contact">
                            <p>《梦幻家园》官方网站：https://jy.uu.cc/</p>
                            <p>《梦幻家园》官方玩家交流二群：724777813</p>
                            <p>《梦幻家园》官方微信：梦幻家园正版手游</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="back-list" href="/news/1.html">返回列表</a>
        </div>
    </div>
    <div class="separate-block"></div>
    <?php
    require_once 'footer.ctp';
?>