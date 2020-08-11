<?php require_once '_header.ctp' ?>
<?php 
    /* 新闻页显示内容 */
    // 新闻分类是显示“新闻”和“攻略”两个分类的新闻
// //     $allCategories = $webHelper->categoriesWap; // 新闻分类
//     $specialId = 65; // “新闻”id 
//     $gonglv = 67; // “攻略”id  
    
//     if ((int)$category_id == $specialId) { // 需求：手机版在点击新闻时显示“新闻”和“攻略”两个分类的新闻
//         $cateId = array($specialId, $gonglv);
//         $news = $webHelper->getContentByAllBySiteId($site_id, $cateId, $offset, $limit = 5);
//     } else {
//         $cateId = FALSE;
//     }
$consulting = $webHelper->newsInitData($page,$category_id); // 新闻列表
?>
    <div class="page">
        <div class="header">
            <?php require_once '_top.ctp' ?>
        </div>
        <div class="content">
            <ul class="newslist">
                <?php if($consulting):?>
                    <?php foreach($consulting as $key=>$value):?>
                        <li>
                            <span>[<?php echo date("Y-n-j",$value["updated"])?>]</span>
                            <a href="<?php echo $this->Base->getShowUrl($value["id"])?>" target="_blank">
                                <?php echo $value["title"]?>
                            </a>
                        </li>
                    <?php endforeach;?>
                <?php else :?>
                    <li>
                        <a href="#">暂无信息</a>
                    </li>
                <?php endif;?>
            </ul>
        </div>
        <div class="footer">
            <img src="<?php echo $full_base_url ?>/images/logo.png" alt="">
            <img src="<?php echo $full_base_url ?>/images/logo2.png" alt="">
            <img src="<?php echo $full_base_url ?>/images/logo3.png" alt="">

            <p style="height:80px;">健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防上当受骗<br />适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活<br />粤网文〔2016〕6871-1632号 新广出审[2016]1965号<br />出版物号:ISBN 978-7-7979-1168-9 文网游备字〔2016〕Ｍ-RPG 0155 号</p>
        </div>
    </div>
    <div class="tip">
        <img src="<?php echo $full_base_url ?>/images/tip.png" alt="">
    </div>
    <script src="<?php echo $full_base_url ?>/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="<?php echo $full_base_url ?>/js/swipe.js" type="text/javascript"></script>
    <script type="text/javascript">
    var slider1 = Swipe(document.getElementById('slider1'), {
        auto: 3000,
        continuous: true,
        callback: function(pos) {
            var i = bullet1.length;
            while (i--) {
                bullet1[i].className = ' ';
            }
            bullet1[pos].className = 'on';
        }
    });
    var bullet1 = $('#dot1').find('li');

    $(function(){
        //判断android 和 ios
        var u = navigator.userAgent;
        if(!!u.match(/(i[^;]+\;(U;)? CPU.+Mac OS X)/g)){
            $("#d_ios").show();
            $("#d_and").hide();
        }else{
            $("#d_and").show();
            $("#d_ios").hide();
        }

        //提示
        $("#d_ios，#d_and").click(function(){
            if(isWx()){
                $(".tip").show();
                return false;
            }
        });
        $(".tip").height($(document).height());
        $(".tip").click(function(){
            $(".tip").hide();
        });

    });

    function isWx(){
       var ua = navigator.userAgent.toLowerCase();
       if(ua.match(/MicroMessenger/i) == "micromessenger"){
             return true;
       }else{
           return false;
       }
    }

    //加载新闻
    var page = 1;
    var cid = parseInt('<?php echo $category_id;?>');
    var limit = 5;

    $(window).scroll(function (){
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
                        lists += '<li><span>[' + data[i]['updated'] + ']</span><a href="/show/' + data[i]['id'] + '.html">' + data[i]['title'] + '</a></li>';
                    }
                    newslist.append(lists);
                    page = parseInt(page) + 1;
                }
            },'json');
        }
    });
    </script>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=40202270" charset="UTF-8"></script>
</body>
</html>
