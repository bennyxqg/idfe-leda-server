<div class="main3">
    <ul class="tags">
        <li>
            <a href="https://weibo.com/u/6453857190?topnav=1&wvr=6&topsug=1">
                <img src="<?php FILE_PATH(); ?>/wap/images/weibo.png" alt="微博">
            </a>
        </li>
        <li>
            <a href="https://tieba.baidu.com/f?fr=wwwt&kw=%E5%BA%9F%E5%9C%9F%E5%8D%B1%E8%A1%8C">
                <img src="<?php FILE_PATH(); ?>/wap/images/baidu.png" alt="百度">
            </a>
        </li>
        <li>
            <a href="javascript:alert('敬请期待！');">
                <img src="<?php FILE_PATH(); ?>/wap/images/forum.png" alt="论坛">
            </a>
        </li>
        <li>
            <a id="wechat" href="javascript:void(0);">
                <img src="<?php FILE_PATH(); ?>/wap/images/weixin.png" alt="微信">
            </a>
        </li>
        <li>
            <a href="https://jq.qq.com/?_wv=1027&k=5WDBWKI ">
                <img src="<?php FILE_PATH(); ?>/wap/images/qq.png" alt="qq">
            </a>
        </li>
        <li>
            <a href="javascript:alert('敬请期待！');">
                <img src="<?php FILE_PATH(); ?>/wap/images/kefu.png" alt="客服">
            </a>
        </li>
    </ul>
</div>
<footer>
    <p>Copyright©2009-<span class="copy-year">2018</span> 深圳市创梦天地科技有限公司 <br/>
                版权所有 粤ICP备11018438号
    </p>
    <p>抵制不良游戏，拒绝盗版游戏。注意自我保护，谨防上当受骗。</p>
    <p>湿度游戏益脑，沉迷游戏伤身。合理安排时间，享受健康生活。</p>
</footer>
<div class="pop" style="display:none;">
    <div class="qrcode">
        <img src="<?php FILE_PATH(); ?>/wap/images/qrcode.jpg" />
        <p>长按二维码关注公众号</p>
    </div>
</div>
<div class="phone_box">
    <div class="phone">
        <span class="close"></span>
        <h4>领取礼包</h4>
        <div class="input_box">
            <input type="text" id="phone" placeholder="请输入你的手机号">
            <div id="sumbit">确认领取</div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php FILE_PATH(); ?>/wap/js/jquery-1.9.1.js"></script>
<script>
$(function(){
    $("#wechat").on("click",function(){
        $(".pop").show();
    });
    $(".pop").on("click",function(){
        $(".pop").hide();
    });
    $('.libao').on('click',function(){
        $('.phone_box').show();
    });
    $('.close').on('click',function(){
        $('.phone_box').hide();
    });
    var phone;
    var myreg = /^1[34578]\d{9}$/;
    function os() {
        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
            return 1;
        } else if (/(Android)/i.test(navigator.userAgent)) {
            return 2;
        } else {
           return 2;
        };
    }

    $('#sumbit').click(function(){
        phone = $('#phone').val();
        if(phone == '输入手机号码' || phone == ''){
            alert('请输入手机号哦！');
            }else{
            if(!myreg.exec(phone)){
                alert('您输入的手机号码不对哦！');
                }else{
                 var type = os();
                 if(type == 1){
                     code_id = 107;
                 }else{
                     code_id = 107;
                 }
                 $.ajax({
                    type:"POST",
                    url:"/send_phone_code",
                    data:{phone:phone,code_id:code_id},
                    dataType:"json",
                    success:function(res){
                        if(res.ret == 8){
                            alert("您已经领取过礼包，去游戏里兑换吧！");
                            $('.phone_box').hide();
                        }else if(res.ret == 0){
                             alert("礼包兑换码已经通过手机短信下发给您，请注意查收，祝您游戏愉快~");
                             $('.phone_box').hide();
                        }else{
                           alert("礼包领取失败！");
                        }

                    }
                });

            }
        }


    })
    //版权自动年份
    var d = new Date();
    $('.copy-year').html(d.getFullYear());
})
</script>