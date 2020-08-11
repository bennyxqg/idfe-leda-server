<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $this->Website->init();
    echo '<title>'.GET_BLOCK('web_title').'</title>';
    echo '<meta name="keywords" content="'.GET_BLOCK('web_keywords').'"/>';
    echo '<meta name="description" content="'.GET_BLOCK('web_description').'"/>';
    ?>
<link href="<?php BASE_URL() ?>css/index.css" rel="stylesheet" type="text/css" />
<link href="<?php BASE_URL() ?>css/swiper.min.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo GET_BLOCK('game_icon');?>" />
<script src="<?php BASE_URL() ?>js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="<?php BASE_URL() ?>js/swiper.min.js" type="text/javascript"></script>
</head>


<body class="loop---">
    <div class="loading">
        <div class="box">
            <span class="number">0%</span>
            <div class="rotate"></div>
        </div>
    </div>
    <div id="body"></div>
    <div id="container">
        <div class="loop_box r"><div></div></div>
        <div class="loop_box l"><div></div></div>
        <img class="game_logo" src="<?php BASE_URL() ?>images/game_logo.png" alt="">
        <div class="slogen"></div>
        <!--<div class="yuyue"></div>-->
        <a href="<?php echo GET_BLOCK('android_download_url');?>" class="download"></a>
        <div class="person_box">
            <div class="bg yundong"></div>
            <img class="p1" src="<?php BASE_URL() ?>images/person1.png" alt="person">
            <img class="p2" src="<?php BASE_URL() ?>images/person2.png" alt="person">
            <img class="p3" src="<?php BASE_URL() ?>images/person3.png" alt="person">
            <img class="p4" src="<?php BASE_URL() ?>images/person4.png" alt="person">
            <img class="p5" src="<?php BASE_URL() ?>images/person5.png" alt="person">
        </div>
        <img class="copyright" src="<?php BASE_URL() ?>images/copyright.png" alt="版权">
    </div>
    <div class="meun_box">
        <span href="javascript:;" class="share">
            <div class="pcShare">
                <a class="wb" href="javascript:;"></a>
                <a class="pc_share" href="javascript:;"></a>
            </div>
        </span>
        <a class="news_link" href="//mob100.uu.cc/news/1.html"></a>
    </div>
    <?php require_once 'left.ctp';?>
    <div class="pop_box">
        <div class="pop pop1 hide">
            <span class="close"></span>
            <div class="phoneType">
                <span>手机类型</span>
                <div class="types ios on"><img src="<?php BASE_URL() ?>images/ios.png" alt="">IOS</div>
                <div class="types"><img src="<?php BASE_URL() ?>images/an.png" alt="">Android</div>
            </div>
            <input type="text" class="phone" id="phoneNum" placeholder="请输入手机号">
            <div class="vcode">
                <input type="text" id="vcode" placeholder="请输入验证码">
                <span class="get_code">获取验证码</span>
                <!--<span class="get_code">重新发送(60)</span>-->
            </div>
            <p>该手机已经预约过啦~！</p>
            <a href="javascript:;" class="yuyue-go"></a>
        </div>
        <div class="pop pop2 hide">
            <span class="close"></span>
            <img class="icon" src="<?php BASE_URL() ?>images/pop_icon.png" alt="">
            <div class="success">
                <img width="125" height="125" src="<?php echo GET_BLOCK('weixin_qrcode');?>" alt="">
                <div class="text">
                    <p>扫码关注官方微信，领取专属福利!</p>
                    <p>微信公众号： <br><span>路人超能100手游</span></p>
                </div>
            </div>
        </div>
        <div class="pop pop3 hide">
            <span class="close"></span>
            <h3>扫一扫分享给好友</h3>
            <div class="success">
                <img width="125" height="125" src="<?php echo GET_BLOCK('qrCode_share');?>" alt="">
                <div class="text">
                    <p>用微信“扫一扫”左侧二维码，即可把网站分享给您的好友们哦。</p>
                    <!--<p>微信公众号： <br><span>路人超能100手游</span></p>-->
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.ctp';?>
    <div class="moneybox" id="leafContainer"></div>

<script src="<?php BASE_URL() ?>/js/index.js" type="text/javascript"></script>
<script>
//功能： 手机号码验证
function checkPhoneNum(phoneNum) {
    return /^(13|14|15|16|17|18|19)\d{9}$/.test(phoneNum) ? !0 : !1
}
$(document).ready(function(){
    // console.log(sessionStorage.getItem("is_init"));
    var bOk = "<?php echo GET_BLOCK('bOk');?>";console.log(bOk);
    if(!sessionStorage.getItem("is_init")){
        test();
        sessionStorage.setItem("is_init", "1");
    }else{
        $('.loading').hide();
        motions(350);
    }
    
    function test(){
        var i = 0;
        var Carton = 5;
        var timer = setInterval(function() {
            $('.loading .number').html(i + '%');
            var skip = true;
            if (i == 80 || i == 60 || i == 30 || i == 15) {
                skip = false;
                setTimeout(function() {
                    i++;
                    skip = true;
                }, 50);
            } else {
                if (skip) {
                    i++;
                }
            }
            if (i > 100) {
                setTimeout(function() {
                    $('.loading .box').addClass('scale2');
                    $('.loading .number').hide();
                }, 200);
                // setTimeout(function() {
                //     $('.loading').css({top:'1200px',opacity:.6})
                // }, 1000);
                setTimeout(function() {
                    $('.loading').css({background:'transparent'})
                    $('.loading .box').addClass('scale3').removeClass('scale2');
                }, 650);
                setTimeout(function() {
                    $('.loading').hide();
                }, 1300);
                motions(0);
                clearInterval(timer);
            };
        }, Carton);
    }
    // loadImg();
    function loadImg(){
        var images = document.getElementsByTagName('img');
        var imgs = [];
        for(var i=0; i<images.length; i++){
            imgs.push(images[i].src);
        }
        var index = 0,
        len = imgs.length,
        count = 0,
        $progress = $('.loading .number');
        $.each(imgs,function(i, src){
            var imgObj = new Image();
            $(imgObj).on('load error', function(){
                $progress.html(Math.round((count + 1) / len * 100) + '%');
                //全部图片加载完毕，loading隐藏
                if (count >= len -1){
                    $('.loading').addClass('scale2');
                    $('.loading .number').hide();
                    setTimeout(function() {
                        $('.loading').hide();
                    }, 1000);
                    document.title = '1/'+len;
                }
                count++
            })
            imgObj.src = src;
        })
        // console.log(imgs);
    }
    share();
    // console.log(window.location.href)
    function share(){
        // 微博分享
        $('.wb').on('click',function(){
            var title = '<?php echo GET_BLOCK('wb_title');?>';
            var picurl = '<?php echo GET_BLOCK('wb_share_img');?>';
            var sharesinastring='http://v.t.sina.com.cn/share/share.php?title='+title+'&url='+window.location.href+'&content=utf-8&sourceUrl='+window.location.href+'&pic='+picurl;
            window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
        });
    }
    bg_loop();
    function bg_loop(){
        var sum = 0;
        var sumY = 0;
        setInterval(function(){
            sum-=1;
            sumY+=2;
            if(Math.abs(sum) >= 1080){
                sum = 0;
            }
            if(Math.abs(sumY) >= 1920){
                sumY = 0;
            }
            $('#body').css('background-position',sumY+'px '+sum+'px');
            //   $('body').animate({"background-positionY":sum},1);
        },20);
    }
    // 人物链式显示效果
    // motions();
    function motions(number){
        setTimeout(function(){
            $('.p1').css({ 'left':'-24px','opacity':'1' });
        },(350-number));
        setTimeout(function(){
            $('.p2').css({ 'left':'240px','opacity':'1' });
        },(500-number));
        setTimeout(function(){
            $('.p3').css({ 'left':'356px','opacity':'1' });
        },(900-number));
        setTimeout(function(){
            $('.p4').css({ 'left':'522px','opacity':'1' });
        },(1200-number));
        setTimeout(function(){
            $('.p5').css({ 'left':'571px','opacity':'1' });
        },(1700-number));
        setTimeout(function(){
            $('.bg').css('opacity','1');
        },(3000-number));
    }
    //   抖动效果
    shake();
    function shake(){
        var sum = 0;
        setInterval(function(){
            sum ++;
            $('.yuyue,.download').removeClass('shake-slow');
            if(sum%5 == 1){
                $('.yuyue,.download').addClass('shake-slow');
                sum = 1;
            }
        },800);
    }
    // 资讯
    $('.pc_share').on('click',function(){
        $('.pop_box').css({'background':'rgba(0,0,0,1)'});
        $('.pop_box').show();
        $('.pop_box .pop3').show();
    });
    //验证 验证码
    function checkValidCode(phoneNum, checkCode) {
        var codeState;
        $.ajax({
            type: "POST",
            url: "/qd_valid_check_code",
            data: {phone: phoneNum, site_id: "<?php echo $GLOBALS['site_id']; ?>", "code": checkCode},
            dataType: "json",
            async: false,
            success: function (res) {
                if (res.ret == 0) {
                    codeState = true;
                    return true;
                } else {

                    codeState = false;
                    return false;
                }
            }
        });
        return codeState;
    }
    // 
    var i = 60;
    $('.get_code').on('click',function(){
        if(i == 60 ){
            var phone = $("#phoneNum").val();
            if (phone == "" || phone == undefined) {
                alert("请输入手机号码！");
            } else if (!checkPhoneNum(phone)) {
                alert("请输入正确的手机号码！");
            }else{
                $.ajax({
                    type: "POST",
                    url: "/qd_send_check_code",
                    data: {phone: phone, site_id: "<?php echo $GLOBALS['site_id']; ?>"},
                    dataType: "json",
                    async: false,
                    success: function (res) {
                        
                    }
                });
                function getCode(){
                    i--;
                    $('.get_code').css({color:'#ccc'});
                    $('.get_code').html('重新发送('+i+')');
                    if( i == 0){
                        $('.get_code').css({color:'#000'});
                        $('.get_code').html('获取验证码');
                        clearInterval(timer);  
                        i = 60;
                    }
                }
                getCode();
                var timer = setInterval(getCode,1000);
            }
        }
    });
    // 预约函数
    yuyue();
    function yuyue(){
        // 预约
        $('.yuyue').on('click',function(){
            $('.pop_box').show();
            $('.pop_box .pop1').show();
        });
        // 关闭
        $('.pop_box .close').on('click',function(){
            $('.pop_box').hide();
            $('.pop_box').css({'background':'rgba(0,0,0,.5)'});
            $('.pop_box .pop1').hide();
            $('.pop_box .pop2').hide();
            $('.pop_box .pop3').hide();
            $("#phoneNum").val('');
            $("#vcode").val('');
            $('.pop_box .pop1 p').hide();
        });
        // 聚焦时去掉提示
        $('#phoneNum').on('focus',function(){
            $('.pop_box .pop1 p').hide();
        });
        // 机型选择
        $('.phoneType .types').on('click',function(){
            $('.phoneType .types').removeClass('on');
            $(this).addClass('on');
        });
        /*预约请求*/
        $(".yuyue-go").on("click", function () {
            var phone = $("#phoneNum").val();
            var code = $("#vcode").val();
            var code_id = 1;
            if ($('.phoneType .ios').is('.on')) {
                code_id = 1;
            } else {
                code_id = 2;
            }
            if (phone == "" || phone == undefined) {
                alert("请输入手机号码！");
            } else if (!checkPhoneNum(phone)) {
                alert("请输入正确的手机号码！");
            } else if (code == "" || code == undefined) {
                alert("请输入验证码！");
            } else if (!checkValidCode(phone, code)) {
                alert("验证码错误！");
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "/collect_phone",
                    data: {phone: phone, "type": code_id, collect_name:  '<?=$GLOBALS['site_id'];?>',label:'mob001'},
                    dataType: "json",
                    success: function (res) {
                        if (res.ret == 0) {
                            // if(+bOk){
                            //     $('#leafContainer').show();
                            //     init(+bOk);
                            //     setTimeout(function() {
                            //         $('#leafContainer').hide();
                            //     }, 9200);
                            // }
                            $('.pop_box .pop1').hide();
                            $('.pop_box .pop2').show();
                        } else if (res.ret == 2) {
                            // alert("您已经预约过了哦！");
                            $('.pop_box .pop1 p').show();
                        } else {
                            alert("预约失败！");
                        }
                    }
                });
            }
        });
    }
})
</script>
</body>
</html>






