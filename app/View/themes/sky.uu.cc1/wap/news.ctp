<?php 
$newsCategory = $this->PK->getNewsCategoryBySiteId($site_id); // 新闻分类
$loopImgs = $this->PK->img_list('loop_img_wap'); // 手机首页轮播图片
$logo = $this->PK->getBlock($site_id, 'logo_wap'); // 手机logo
$gameDescribe = $this->PK->getBlock($site_id, 'game_describe_wap'); // 游戏描述
$downloadButton = $this->PK->getBlock($site_id, 'download_android_wap'); // 下载按钮

$consulting =  $this->PK->newsInitData($page,$category_id);
?>
<?php require_once '_head.ctp';?>
    <div class="page">
        <?php require_once '_top.ctp';?>
        <div class="content">
            <ul class="newslist">
            <?php if($consulting):?>
                    <?php foreach($consulting as $key=>$value):?>
                        <li>
                            <span>[<?php echo date("m/d",$value["updated"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>">

                                [<?php
                                $category_name=$newsCategory[$value["news_categories_id"]];
                                echo $category_name;?>]
                                <?php echo $value["title"]?></a>
                        </li>
                    <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
        <div class="footer">
            <a href="//www.idreamsky.com"><img src="<?php echo $full_base_url ?>/images/logo.png" alt=""></a>
            <p>健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
        </div>
    </div>
    <div class="pop">
        <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
    </div>
    <script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=39731400" charset="UTF-8"></script>
    <script type="text/javascript">
    var page = 1;
    var cid = parseInt('<?php echo $category_id;?>');
    var limit = 5;

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var scrollHeight = $(document).height();
        var windowHeight = $(this).height();
        var nextPage = parseInt(page) + 1;
        var url = '/getMoreNews/' + nextPage + '/' + cid + '/' + limit;
        
        if (scrollTop + windowHeight > scrollHeight - 5) {
            $.get(url,function(result){
                if (result && result['status'] == 1) {
                    var data = result.data;
                    var lists = '';
                    var newslist = $('.newslist');
                    console.log(data);
                    for(var i=0;i<data.length;i++){
                        lists += '<li><span>[' + data[i]['updated'] + ']</span><a href="/show/' + data[i]['id'] + '.html">[' + data[i]['news_category'] + ']' + data[i]['title'] + '</a></li>';
                    }
                    newslist.append(lists);
                    page = parseInt(page) + 1;
                }
            },'json');
        }
    });

    function isWeiXin(){
        var ua = window.navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i) == 'micromessenger'){
            return true;
        }else{
            return false;
        }
    }

    $(function(){
        $('.pop').height($(document).height());
        if(isWeiXin()){
            $('#download').on("touchend",function(e){
                $('.pop').show();
                e.stopPropagation();
                return false;
            });
        }
        $('.pop').on("touchend",function(){
            $(this).hide();
        });
    });
    </script>
<?php require_once '_foot.ctp';?>
