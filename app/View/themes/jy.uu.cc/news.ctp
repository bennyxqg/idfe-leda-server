<?php
    $this->Website->init();
    require_once 'header.ctp';
?>
<body>
<div class="news-page">
    <div class="top">
    <div class="wrap-menu">
        <a class="top-logo" href="/"></a>
        <div class="top-menu">
            <a class="menu-item menu1" href="/">官网首页</a>
            <a class="menu-item menu2 <?php echo $category_id == 1?'act':''?>" href="/news/1.html">游戏资讯</a>
            <a class="menu-item menu3" href="/welfare">福利中心</a>
            <a class="menu-item menu4 <?php echo $category_id == 2?'act':''?>" href="/news/2.html">游戏攻略</a>
             <a class="menu-item menu5" href="/media_appreciate/1.html">影音鉴赏</a>
        </div>
    </div>

</div>
    <div>
        <?php
            $config = array(
                        1 => array('资讯'),
                        2 => array('攻略')
                    );
            if($category_id == 1){
                $title = 'inftitle2@2x.png';
            }elseif($category_id == 2){
                $title = 'walktitle@2x.png';
            }
        ?>    
        <img class="news-page-banner" src="//dl.gamdream.com/website/jy/images/news-banner@2x.png" />
        <img class="news-list-title" src="//dl.gamdream.com/website/jy/images/<?php echo $title;?>" />
        <div class="news-line">
            <div class="base-pin"></div>
            <div class="base-line"></div>
        </div>
        
        <div class="news-type-wrap">
            <div class="news-type-tab act"><?php echo $config[$category_id][0];?></div>
<!--             <div class="news-type-tab">新闻</div>
            <div class="news-type-tab">公告</div> -->
        </div>
        <div class="news-list-wrap">
            
                <!-- <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》1</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》2</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》3</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》4</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》5</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》6</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》7</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》8</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》9</a>
                    <span class="publish-date">2018/06/06</span>
                </div>
            
                <div class="news-list-item">
                    <a class="news-item-title overflow-ellipsis" href="article_detail.html">[第102关] 最新乐逗游戏联合知名手游研发商playrix倾力四年精心打造，全球顶级三消养成手游《梦幻花园》10</a>
                    <span class="publish-date">2018/06/06</span>
                </div> -->
                <?php
                    SHOW_NEWS('<div class="news-list-item"><a class="news-item-title overflow-ellipsis" href="@@URL@@"> @@TITLE@@</a><span class="publish-date">@@DATE@@</span></div>','Y/m/d',$config[$category_id],9,$page,array('LimitFrom'=>0));
                ?>
            
            <!-- <div class="pagenation-wrap">
                <div class="pagenation-pre fl">上一页</div>
                <div class="pagenation-next fr">下一页</div>
            </div> -->
            <div class="pagenation-wrap">
               <?php
                    SHOW_PAGINATION7($config[$category_id],9,array("pageId"=>$category_id),$page);
               ?>
            </div>
        </div>
    </div>
    <div class="separate-block"></div>
<?php
    require_once 'footer.ctp';
?>