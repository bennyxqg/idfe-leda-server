<?php require_once '_header.ctp' ?>
<?php 
    /* 人物大全 */
    $roleCateId = $webHelper->roleCateId; // 人物分类id
    $propCateId = $webHelper->propCateId; // 道具分类id
    
    $rolesList = $webHelper->newsInitData(1,$roleCateId, 4); // 人物大全
    $propCateList = $webHelper->newsInitData(1,$propCateId, 5); // 道具大全
?>
    <div class="page">
        <div class="header">
            <?php require_once '_top.ctp' ?>
        </div>
        <div class="content">
            <div class="imglist">
                <h3>人物大全</h3>
                <ul id="people" class="people clearfix">
                    <?php if ($rolesList):?>
                        <?php foreach ($rolesList as $key => $value):?>
                            <li <?php if ($key == 0):?>class="noML"<?php endif;?>><a href="<?php echo $webHelper->getShowUrl($value['id'])?>"><img src="/uploads/<?php echo $value['small_url']; ?>" alt=""></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="more" id="people_more">查看更多</div>
            </div>
            <div class="imglist">
                <h3>道具大全</h3>
                <ul id="daoju" class="daoju clearfix">
                    <?php if ($propCateList):?>
                        <?php foreach ($propCateList as $key => $value):?>
                            <li <?php if ($key == 0):?>class="noML"<?php endif;?>><a href="<?php echo $webHelper->getShowUrl($value['id'])?>"><img src="/uploads<?php echo $value['small_url']; ?>" alt=""></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                </ul>
                <div class="more" id="daoju_more">查看更多</div>
            </div>
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

        var p_page = 1;
        var p_cid = parseInt('<?php echo $roleCateId ;?>');
        var p_limit = 4;
        var d_page = 1;
        var d_cid = parseInt('<?php echo $propCateId ;?>');
        var d_limit = 5;
        //加载图片
        $('#people_more').click(function(){
            var nextPage = parseInt(p_page) + 1;
            var url = '/getMoreNews/' + nextPage + '/' + p_cid + '/' + p_limit;

            console.log(url);
            $.ajax({
                type: 'post',
                url: url,
                dataType: 'json',
                data: {},
                success: function(res){
                    console.log(res);
                    if(res && res.status == 1){
                        console.log(res);
                        var data = res.data;
                        var lists = '';
                        var imglist = $('#people');
                        var p_c;
                        
                        $.each(data,function(index,value){
                            if (index == 0) {
                                p_c = ' class="noML"';
                            } else {
                                p_c = '';
                            }
                            lists += '<li'+ p_c +'><a href="/show/' + value['id'] + '.html"><img src="/uploads' + value['small_url'] + '" /></a></li>';
                        });
                        imglist.append(lists);
                        p_page = parseInt(p_page) + 1;
                    }
                }
            })
        });
        $('#daoju_more').click(function(){
            var nextPage = parseInt(d_page) + 1;
            var url = '/getMoreNews/' + nextPage + '/' + d_cid + '/' + d_limit;

            console.log(url);
            $.ajax({
                type: 'post',
                url: url,
                dataType: 'json',
                data: {},
                success: function(res){
                    console.log(res);
                    if(res && res.status == 1){
                        console.log(res);
                        var data = res.data;
                        var lists = '';
                        var imglist = $('#daoju');
                        var p_c;
                        
                        $.each(data,function(index,value){
                            if (index == 0) {
                                p_c = ' class="noML"';
                            } else {
                                p_c = '';
                            }
                            lists += '<li'+ p_c +'><a href="/show/' + value['id'] + '.html"><img src="/uploads' + value['small_url'] + '" /></a></li>';
                        });
                        imglist.append(lists);
                        d_page = parseInt(d_page) + 1;
                    }
                }
            })
        });

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
    };
    </script>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=40202270" charset="UTF-8"></script>
</body>
</html>
