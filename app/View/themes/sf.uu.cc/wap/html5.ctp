<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <title>撸了二十多年，还是右手值得信赖，敢和我比比手速？—《天降》</title>
    <style type="text/css">
        body, ul, ol, p, h1, h2, h3, p { margin: 0; padding: 0; font-size: 12px; }
        img { border: 0; display: block; }
        a, button, input { -webkit-tap-highlight-color: rgba(255,0,0,0); }
        ol, ul { list-style: none; }
        .hid { width: 0px; height: 0px; overflow: hidden; text-indent: -9999px; margin: 0px; padding: 0px; }
        /*背景延展区域; 并通过background-size缩放背景图 ;取页面主色调做背景色*/
        body { background: #d3e4e6; height: 100%; display: block; overflow-y: hidden; }
        .wrap { overflow: hidden; margin: 0 auto; height: 100%; width: 100%; overflow-x: hidden; font-family: "Microsoft YaHei"; }
        .sec { z-index: 1; position: absolute; left: 0; top: 0; width: 100%; height: 100%; -webkit-transition: all 0.3s linear; -webkit-transform: translateY(0px); transition: all 0.3s linear; transform: translateY(0px); -webkit-backface-visibility: hidden; }
        .sec section { overflow: hidden; margin: 0 auto; width: 100%; }
        .main1, .main2, .main3, .main4, .main5, .main6 { overflow: hidden; width: 320px; margin: 0 auto; position: relative; }
        .wrap { display: none; }
        .main1, .main2, .main3, .main4, .main5 { background: url(<?php echo $full_base_url ?>/images/html5/p2.jpg) no-repeat; background-size: 320px 459px; width: 320px; height: 459px; }
        .main1 { background: none; }
        .main3 { background: url(<?php echo $full_base_url ?>/images/html5/p3.jpg) no-repeat; background-size: 320px 459px; }
        .main4 { background: url(<?php echo $full_base_url ?>/images/html5/p4.jpg) no-repeat; background-size: 320px 459px; }
        .main5 { background: url(<?php echo $full_base_url ?>/images/html5/p5.jpg) no-repeat; background-size: 320px 459px; }
        .bg1, .bg6 { background-color: #d3e4e6; }
        .bg2, .bg3, .bg4, .bg5 { background-color: #d2d7d1; }
        .pa { position: absolute; }
        .index_logo { display: block; width: 342px; height: 226px; right: -28px; top: 78px; }
        .sec01_show .index_logo { -webkit-animation: bounceInDown 1s 0.2s ease both; }
        .tr01 { left: 0; top: 0; display: block; width: 71px; height: 75px; }
        .tr02 { display: block; width: 76px; height: 30px; top: 10px; right: 0; }
        .tr03 { display: block; width: 97px; height: 98px; left: 0; bottom: 21px; }
        .tr04 { display: block; width: 76px; height: 63px; right: 0; bottom: 89px; }
        .bottom { width: 129px; height: 64px; display: block; bottom: 0; left: 50%; margin-left: -65px; background: url(<?php echo $full_base_url ?>/images/html5/bottom.png); background-size: 129px 64px; color: #ffffff; font-size: 10px; }
        .bottom em { width: 129px; text-align: center; float: left; display: inline; margin-top: 48px; font-style: normal; }
        .top_icon { display: block; width: 30px; height: 17px; background: url(<?php echo $full_base_url ?>/images/html5/top.png); background-size: 30px 17px; position: absolute; bottom: 20px; left: 50%; margin-left: -15px; z-index: 99; }
        .page_title, .page_title2, .page_title3, .page_title4 { font-size: 14px; color: #00a588; font-weight: bold; line-height: 18px; float: left; margin-top: 6px; margin-left: 3px; }
        .page_title2 { color: #0f2131; }
        .page_title3 { color: #cb8600; }
        .page_title4 { color: #ad2020; }
        .p2_txt1, .p2_txt2, .p3_txt1, .p3_txt2, .p4_txt1, .p4_txt2, .p5_txt1, .p5_txt2, .p5_txt3 { display: block; text-indent: -9999px; position: absolute; }
        .p2_txt1 { width: 110px; height: 95px; background: url(<?php echo $full_base_url ?>/images/html5/p2_txt1.png); background-size: 110px 95px; position: absolute; top: 20px; right: 18px; }
        .sec02_show .p2_txt1 { -webkit-animation: fadeIn 1s .2s ease; display: block; }
        .p2_txt2 { width: 121px; height: 99px; background: url(<?php echo $full_base_url ?>/images/html5/p2_txt2.png); background-size: 121px 99px; top: 300px; left: 26px; }
        .sec02_show .p2_txt2 { -webkit-animation: fadeIn 1s .4s ease; display: block; }
        .hand { width: 117px; height: 193px; background: url(<?php echo $full_base_url ?>/images/html5/hand.png); background-size: 117px 193px; position: absolute; right: 20px; top: 260px; }
        .smog1, .smog2 { display: block; position: absolute; }
        .smog1 { width: 65px; height: 56px; background: url(<?php echo $full_base_url ?>/images/html5/smoke2.png); background-size: 65px 56px; right: 33px; top: 30px; }
        .smog2 { width: 51px; height: 51px; background: url(<?php echo $full_base_url ?>/images/html5/smoke3.png); background-size: 51px 51px; top: 48px; right: 38px; }
        .sec02_show .smog1 { -webkit-animation: fadeIn 0.5s .1s ease infinite; }
        .sec02_show .smog2 { -webkit-animation: fadeIn 0.9s .7s ease infinite; }
        .p3_txt1 { width: 191px; height: 43px; top: 170px; left: 65px; background: url(<?php echo $full_base_url ?>/images/html5/p3_txt1.png) no-repeat; background-size: 191px 43px; }
        .p3_txt2 { width: 125px; height: 83px; background: url(<?php echo $full_base_url ?>/images/html5/p3_txt2.png) no-repeat; background-size: 125px 83px; left: 30px; top: 320px; }
        .hill_b { width: 172px; height: 52px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/hill_b.png) no-repeat; background-size: 172px 52px; position: absolute; top: 50px; left: 62px; }
        .lighting1, .lighting2 { display: block; position: absolute; top: 0; }
        .lighting1 { width: 145px; height: 97px; background: url(<?php echo $full_base_url ?>/images/html5/lighting1.png); background-size: 145px 97px; left: 72px; }
        .lighting2 { width: 110px; height: 113px; background: url(<?php echo $full_base_url ?>/images/html5/lighting2.png); background-size: 110px 113px; right: 40px; }
        .sec03_show .lighting1, .sec03_show .lighting2 { -webkit-animation: fadeIn 0.6s .5s ease infinite; }
        .ov { width: 320px; height: 48px; overflow: hidden; display: block; position: absolute; left: 50%; margin-left: -160px; top: 19%; }
        .key_r { width: 52px; height: 48px; overflow: hidden; display: block; position: absolute; top: 109px; right: 47px; background: url(<?php echo $full_base_url ?>/images/html5/r_before.png); background-size: 52px 48px; }
        .sec03_show .key_r { -webkit-animation: keydown 0.6s .5s ease infinite; }
        .smoke_bear { width: 245px; height: 159px; position: absolute; right: 0; top: 290px; background: url(<?php echo $full_base_url ?>/images/html5/smoke_bear.png); background-size: 245px 159px; }
        .smoking { width: 150px; height: 30px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/smoking.png); background-size: 150px 30px; top: 0; left: 0; }
        .sec03_show .smoking { -webkit-animation: smokingUp 2s .2s ease infinite; }
        .bear_pop1 { width: 9px; height: 9px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/bear_pop1.png) no-repeat; background-size: 9px 9px; right: 30px; top: 40px; }
        .bear_pop2, .bear_pop3, .bear_pop4 { width: 13px; height: 13px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/bear_pop2.png) no-repeat; background-size: 13px 13px; right: 40px; top: 24px; }
        .bear_pop3 { top: 18px; right: 65px; }
        .bear_pop4 { top: 67px; right: 34px; }
        .sec03_show .bear_pop1 { -webkit-animation: bear_pop 2s .5s ease infinite; }
        .sec03_show .bear_pop2 { -webkit-animation: bear_pop 2s .5s ease infinite; }
        .sec03_show .bear_pop3 { -webkit-animation: bear_pop 1.2s 1.4s ease infinite; }
        .sec03_show .bear_pop4 { -webkit-animation: bear_pop 1.5s 1s ease infinite; }
        .cow_age { display: block; position: absolute; width: 58px; height: 52px; background: url(<?php echo $full_base_url ?>/images/html5/age18.png); text-indent: -9999px; left: 148px; top: 42px; background-size: 58px 52px; }
        .sec04_show .cow_age { -webkit-animation: fadeIn 1s .5s ease 1; }
        .p4_txt1 { width: 114px; height: 107px; background: url(<?php echo $full_base_url ?>/images/html5/p4_txt1.png); background-size: 114px 107px; right: 20px; top: 90px; }
        .p4_txt2 { width: 128px; height: 86px; background: url(<?php echo $full_base_url ?>/images/html5/p4_txt2.png); background-size: 128px 86px; left: 30px; top: 300px; }
        .child { position: absolute; width: 131px; height: 142px; background: url(<?php echo $full_base_url ?>/images/html5/child.png); background-size: 131px 142px; top: 290px; right: 10px; }
        .brain { width: 84px; height: 94px; position: absolute; display: block; background: url(<?php echo $full_base_url ?>/images/html5/brain.png); background-size: 84px 94px; top: -28px; left: 24px; }
        .sec04_show .brain { -webkit-animation: brainRoll 2s linear infinite; }
        .p5_txt1 { width: 263px; height: 54px; background: url(<?php echo $full_base_url ?>/images/html5/p5_txt1.png); background-size: 263px 54px; top: 40px; left: 28px; }
        .p5_txt2 { width: 221px; height: 39px; background: url(<?php echo $full_base_url ?>/images/html5/p5_txt2.png); background-size: 221px 39px; top: 290px; left: 62px; }
        .p5_txt3 { width: 264px; height: 51px; background: url(<?php echo $full_base_url ?>/images/html5/p5_txt3.png); background-size: 264px 51px; top: 350px; left: 28px; }
        .balance { width: 136px; height: 5px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/balance.png); background-size: 136px 5px; top: 108px; left: 92px; }
        .sec05_show .balance { -webkit-animation: balanceRoll 2s linear infinite; }
        .balance_base { width: 110px; height: 104px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/balance_base.png); background-size: 110px 104px; top: 106px; left: 105px; }
        .balance_left, .balance_right { width: 67px; height: 68px; display: block; position: absolute; top: 112px; }
        .balance_left { background: url(<?php echo $full_base_url ?>/images/html5/b_left.png); background-size: 67px 68px; left: 60px; }
        .balance_right { background: url(<?php echo $full_base_url ?>/images/html5/b_right.png); background-size: 67px 68px; right: 60px; }
        .sec05_show .balance_left { -webkit-animation: balanceLeft 2s linear infinite; }
        .sec05_show .balance_right { -webkit-animation: balanceRight 2s linear infinite; }
        .game_logo { width: 122px; height: 104px; display: block; position: absolute; top: 40px; left: 99px; background: url(<?php echo $full_base_url ?>/images/html5/game_logo.png); background-size: 122px 104px; }
        .page6_logo { display: block; width: 253px; height: 131px; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/page6_logo.png); background-size: 253px 131px; left: 34px; top: 162px; }
        .btn_test_speed { width: 180px; height: 60px; display: block; text-align: center; font-size: 24px; color: #ffffff; font-weight: bold; line-height: 60px; background: #ab2e26; position: absolute; top: 320px; left: 70px; text-decoration: none; border-radius: 5px; box-shadow: 0 5px 5px #73150f; }
        .tr05 { display: block; position: absolute; width: 320px; height: 178px; background: url(<?php echo $full_base_url ?>/images/html5/tr05.png); background-size: 320px 178px; left: 0; top: 180px; }
        .tr06 { display: block; position: absolute; width: 320px; height: 195px; background: url(<?php echo $full_base_url ?>/images/html5/tr06.png); background-size: 320px 195px; left: 0; bottom: 0; }
        .sec06_show .skill_panel { position: absolute; top: 0px; left: 0px; }
        .skill_none { display: none; }
        .skill_page { width: 320px; height: 425px; background: url(<?php echo $full_base_url ?>/images/html5/skill_bg.jpg) #e0eef5 no-repeat; background-size: 320px 425px; position: relative; }
        .queen { width: 160px; height: 201px; display: block; background: url(<?php echo $full_base_url ?>/images/html5/queen.png); background-size: 160px 201px; position: absolute; top: 24px; left: 80px; }
        .queen_speaking { width: 89px; height: 63px; position: absolute; display: none; background: url(<?php echo $full_base_url ?>/images/html5/queen_speaking.png); background-size: 89px 63px; top: 16px; left: -56px; }
        .skill_showing .queen_speaking { -webkit-animation: fadeIn 1s .5s ease 1; display: block; }
        .small_p, .small_p_without_hammer { display: block; position: absolute; top: 270px; height: 132px; }
        .small_p { width: 109px; background: url(<?php echo $full_base_url ?>/images/html5/small_p.png); background-size: 109px 132px; left: 50px; }
        .hammer_note { width: 103px; height: 72px; position: absolute; display: block; background: url(<?php echo $full_base_url ?>/images/html5/hammer_note.png); background-size: 103px 72px; top: 262px; right: 20px; }
        .hammer { width: 54px; height: 54px; position: absolute; display: block; background: url(<?php echo $full_base_url ?>/images/html5/hammer.png); background-size: 54px 54px; top: 340px; right: 40px; }
        .singing { height: 14px; width: 188px; line-height: 14px; font-size: 14px; color: #402a1a; display: block; position: absolute; top: 238px; left: 65px; }
        .singing span { float: left; display: inline; }
        .singing progress { width: 123px; height: 14px; background: #97a0a9; border-radius: 5px; float: left; display: inline; line-height: 14px; }
        .singing progress::-webkit-progress-value { background: #22548b; }
        .queen_dizzy { width: 195px; height: 214px; background: url(<?php echo $full_base_url ?>/images/html5/queen_dizzy.png); background-size: 195px 214px; position: absolute; top: 12px; left: 44px; }
        .small_p_without_hammer { width: 107px; background: url(<?php echo $full_base_url ?>/images/html5/small_p_without_hammer.png); background-size: 107px 132px; left: 49px; }
        .shoot { display: block; position: absolute; width: 123px; height: 242px; background: url(<?php echo $full_base_url ?>/images/html5/shoot.png); background-size: 123px 242px; top: 2px; right: 8px; z-index: 99; }
        .small_p_shoot { width: 149px; height: 162px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/small_shoot.png); background-size: 149px 162px; top: 246px; left: 22px; }


        .yb_brown, .yb_brown_f, .yb_red, .yb_red_f { display: block; position: absolute; }
        .yb_brown, .yb_brown_f { width: 83px; height: 124px; top: 40px; }
        .yb_brown { background: url(<?php echo $full_base_url ?>/images/html5/yb_brown.png); background-size: 83px 124px; left: 89px; }
        .yb_brown_f { background: url(<?php echo $full_base_url ?>/images/html5/yb_brown_f.png); background-size: 83px 124px; left: 20px; }
        .yb_red, .yb_red_f { width: 79px; height: 126px; top: 38px; }
        .yb_red { background: url(<?php echo $full_base_url ?>/images/html5/yb_red.png); background-size: 79px 126px; left: 21px; /*-webkit-animation: ybRed 1s .2s ease infinite;*/ }
        .yb_red_f { background: url(<?php echo $full_base_url ?>/images/html5/yb_red_f.png); background-size: 79px 126px; left: 90px; }
        .yb_arrow { width: 135px; height: 26px; display: block; position: absolute; background: url(<?php echo $full_base_url ?>/images/html5/arrow.png); background-size: 135px 26px; top: 100px; left: 20px; }
        .blue_press, .blue_press_down, .red_press_down, .red_press { display: block; position: absolute; }
        .blue_press { width: 51px; height: 25px; background: url(<?php echo $full_base_url ?>/images/html5/blue.png); background-size: 51px 25px; top: 142px; left: 152px; }
        .blue_press_down { width: 56px; height: 56px; background: url(<?php echo $full_base_url ?>/images/html5/blue_press.png); background-size: 56px 56px; top: 111px; left: 148px; }
        .red_press { width: 51px; height: 25px; top: 142px; background: url(<?php echo $full_base_url ?>/images/html5/red.png); background-size: 51px 25px; left: 212px; }
        .red_press_down { width: 56px; height: 56px; background: url(<?php echo $full_base_url ?>/images/html5/red_press.png); background-size: 56px 56px; top: 111px; left: 208px; }
        /*pop*/
        .pop_success { display: none; font-family: "Microsoft YaHei"; display: none; }
        .pop_failed { display: none; }
        .pop { background: #ffffff; width: 300px; border-radius: 5px; position: relative; padding: 10px 0 14px; font-family: "Microsoft YaHei"; }
        .pop_close_btn { display: block; position: absolute; width: 30px; height: 30px; background: url(<?php echo $full_base_url ?>/images/html5/btn_close.png); background-size: 30px 30px; top: -15px; right: -15px; }
        .pop_title { font-size: 22px; font-weight: bold; color: #00a470; text-align: center; line-height: 44px; margin-bottom: 10px; }
        .pop_label { text-align: center; color: #222222; font-size: 14px; line-height: 42px; }
        .pop_label span { color: #d32828; font-weight: bold; font-size: 34px; }
        .pop_label2 { text-align: center; color: #346193; font-size: 14px; }
        .pop_btn_list { height: 38px; width: 260px; margin: 10px auto 0; }
        .pop_btn_home, .pop_btn_again { float: left; display: inline; width: 113px; height: 38px; margin-left: 12px; text-indent: -9999px; }
        .pop_btn_home { background: url(<?php echo $full_base_url ?>/images/html5/btn_home.png); background-size: 113px 38px; }
        .pop_btn_again { background: url(<?php echo $full_base_url ?>/images/html5/btn_again.png); background-size: 113px 38px; }
        .pop_share { background: #ffffff; width: 300px; height: 64px; border-radius: 5px; position: absolute; top: 20px; z-index: 10000; display: none; left: 50%; margin-left: -150px; }
        .square { color: #ffffff; position: absolute; display: block; font-size: 40px; top: -20px; right: 8px; }
        .share_logo { width: 39px; height: 30px; float: left; display: inline; background: url(<?php echo $full_base_url ?>/images/html5/btn_share.png); background-size: 39px 30px; margin: 16px 0 0 26px; }
        .share_label { float: left; display: inline; width: 212px; color: #333333; font-size: 12px; margin: 18px 0 0 6px; }
        .share_label strong { color: #00a470; }

        @-webkit-keyframes ybRed {
            0% { -webkit-transform: rotate(0deg); }
            50% { -webkit-transform-origin: right bottom; -webkit-transform: rotate(45deg); }
            100% { -webkit-transform: rotate(0); }
        }

        @-webkit-keyframes fadeIn {
            0% { opacity: 0; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        @-webkit-keyframes keydown {
            0% { height: 48px; /*background: url(<?php echo $full_base_url ?>/images/html5/r_before.png); background-size: 52px 48px;*/ }
            50% { height: 37px; -webkit-transform: translateY(11px); /*background: url(<?php echo $full_base_url ?>/images/html5/r_press.png); background-size: 52px 37px; */ }
            100% { height: 48px; /*background: url(<?php echo $full_base_url ?>/images/html5/r_before.png);background-size: 52px 48px;*/ }
        }

        @-webkit-keyframes keydown2 {
            0% { top: 0px; /*background: url(<?php echo $full_base_url ?>/images/html5/r_before.png); background-size: 52px 48px;*/ }
            50% { top: 2px; -webkit-transform: translateY(11px); /*background: url(<?php echo $full_base_url ?>/images/html5/r_press.png); background-size: 52px 37px; */ }
            100% { top: 0px; /*background: url(<?php echo $full_base_url ?>/images/html5/r_before.png);background-size: 52px 48px;*/ }
        }

        @-webkit-keyframes smokingUp {
            0% { -webkit-transform: translateY(0); }
            40% { -webkit-transform: translateX(-10px); -webkit-transform: translateY(-10px); width: 155px; background-size: 155px 30px; }
            80% { -webkit-transform: translateX(-20px); -webkit-transform: translateY(-20px); width: 163px; background-size: 163px 30px; opacity: 0.5; }
            100% { opacity: 0; }
        }

        @-webkit-keyframes bear_pop {
            0% { -webkit-transform: scale(0.5); }
            50% { -webkit-transform: scale(1); }
            100% { -webkit-transform: scale(1.2); }
        }

        @-webkit-keyframes cowFadeIn {
            0% { height: 6px; }
            50% { height: 16px; }
            100% { height: 52px; }
        }

        @-webkit-keyframes brainRoll {
            0% { -webkit-transform: rotate(0deg); }
            25% { -webkit-transform-origin: center bottom; -webkit-transform: rotate(-15deg); }
            50% { -webkit-transform: rotate(0deg); }
            75% { -webkit-transform-origin: center bottom; -webkit-transform: rotate(15deg); }
            100% { -webkit-transform: rotate(0deg); }
        }

        @-webkit-keyframes balanceRoll {
            0% { -webkit-transform: rotate(0deg); }
            25% { -webkit-transform-origin: center center; -webkit-transform: rotate(-5deg); }
            50% { -webkit-transform: rotate(0deg); }
            75% { -webkit-transform-origin: center center; -webkit-transform: rotate(5deg); }
            100% { -webkit-transform: rotate(0deg); }
        }

        @-webkit-keyframes balanceLeft {
            0% { -webkit-transform: translateY(0); }
            25% { -webkit-transform: translateY(5px); }
            50% { -webkit-transform: translateY(0); }
            75% { -webkit-transform: translateY(-5px); }
            100% { -webkit-transform: translateY(0); }
        }

        @-webkit-keyframes balanceRight {
            0% { -webkit-transform: translateY(0); }
            25% { -webkit-transform: translateY(-5px); }
            50% { -webkit-transform: translateY(0); }
            75% { -webkit-transform: translateY(5px); }
            100% { -webkit-transform: translateY(0); }
        }

        @-webkit-keyframes rollOut {
            0% { opacity: 1; -webkit-transform: translateX(0px) rotate(0deg); }
            99% { opacity: 0.9; -webkit-transform: translateX(100%) rotate(120deg); opacity: 0; }
            100% { -webkit-transform: translateX(100%) rotate(0deg); opacity: 0; }
        }

        @-webkit-keyframes bounceInDown {
            0% { opacity: 0; -webkit-transform: translateY(-2000px); }
            60% { opacity: 1; -webkit-transform: translateY(30px); }
            80% { -webkit-transform: translateY(-10px); }
            100% { -webkit-transform: translateY(0); }
        }
        /*----------------*/
        .drag { -webkit-transition: none; transition: none; }

        @media screen and ( min-width: 360px) {
            .main1, .main6 { width: 360px; }
            .main2 { width: 360px; background-size: 360px 516px; }
            .main3 { width: 360px; background-size: 360px 516px; }
            .main4 { width: 360px; background-size: 360px 516px; }
            .main5 { width: 360px; background-size: 360px 516px; }
            .index_logo { display: block; width: 380px; height: 251px; right: -28px; top: 100px; }
            .page_title, .page_title2, .page_title3, .page_title4 { font-size: 16px; line-height: 20px; }
            .key_r { width: 58px; height: 53px; top: 122px; right: 53px; background-size: 58px 53px; }
            .p3_txt1 { width: 214px; height: 53px; top: 190px; left: 65px; background-size: 214px 53px; }
            .smoke_bear { width: 276px; height: 178px; top: 342px; background-size: 276px 178px; }
            .p3_txt2 { width: 141px; height: 94px; background-size: 141px 94px; top: 400px; }
            .p2_txt1 { width: 118px; height: 106px; background-size: 118px 106px; top: 20px; right: 20px; }
            .p2_txt2 { width: 135px; height: 107px; background-size: 135px 107px; top: 340px; left: 26px; }
            .hand { top: 316px; }
            .yb_brown, .yb_brown_f { width: 93px; height: 137px; top: 45px; }
            .yb_brown { background-size: 93px 137px; left: 104px; }
            .yb_brown_f { background-size: 93px 137px; left: 24px; }
            .yb_red, .yb_red_f { width: 88px; height: 140px; top: 44px; }
            .yb_red { background-size: 88px 140px; left: 26px; }
            .yb_red_f { background-size: 88px 140px; left: 100px; }
            .yb_arrow { width: 151px; height: 29px; background-size: 151px 29px; top: 110px; left: 24px; }
            .blue_press { width: 56px; height: 27px; background-size: 56px 27px; top: 162px; left: 180px; }
            .blue_press_down { width: 61px; height: 62px; background-size: 61px 62px; top: 127px; left: 176px; }
            .red_press { width: 56px; height: 27px; top: 162px; background-size: 56px 27px; left: 244px; }
            .red_press_down { width: 61px; height: 62px; background-size: 61px 62px; top: 127px; left: 238px; }
            .cow_age { width: 65px; height: 58px; left: 166px; top: 48px; background-size: 65px 58px; }
            .p4_txt1 { width: 127px; height: 119px; background-size: 127px 119px; right: 30px; top: 110px; }
            .p4_txt2 { width: 143px; height: 95px; background-size: 143px 95px; left: 24px; top: 340px; }
            .child { width: 145px; height: 158px; background-size: 145px 158px; top: 340px; right: 14px; }
            .brain { width: 93px; height: 104px; background-size: 93px 104px; top: -30px; left: 24px; }
            .p5_txt1 { width: 291px; height: 60px; background-size: 291px 60px; top: 50px; left: 32px; }
            .p5_txt2 { width: 246px; height: 44px; background-size: 246px 44px; top: 330px; left: 68px; }
            .p5_txt3 { width: 293px; height: 57px; background-size: 293px 57px; top: 400px; left: 33px; }
            .balance_base { width: 145px; height: 115px; background-size: 145px 115px; top: 120px; left: 107px; }
            .balance { width: 151px; height: 6px; background-size: 151px 6px; top: 120px; left: 104px; }
            .balance_left, .balance_right { width: 74px; height: 76px; top: 125px; }
            .balance_left { background-size: 74px 76px; left: 68px; }
            .balance_right { background-size: 74px 76px; right: 69px; }
            .game_logo { width: 136px; height: 116px; top: 60px; left: 122px; background-size: 136px 116px; }
            .page6_logo { width: 281px; height: 146px; background-size: 281px 146px; left: 40px; top: 190px; }
            .tr05 { width: 360px; height: 200px; background-size: 360px 200px; top: 200px; }
            .tr06 { width: 360px; height: 218px; background-size: 360px 218px; bottom: 0; }
            .btn_test_speed { width: 204px; height: 70px; line-height: 70px; background: #ab2e26; top: 370px; left: 78px; }
            .skill_page { width: 360px; height: 510px; background-size: 360px 510px; }
            .queen { width: 185px; height: 232px; background-size: 185px 232px; top: 30px; left: 90px; }
            .queen_speaking { width: 103px; height: 73px; background-size: 103px 73px; top: 20px; left: -54px; }
            .queen_dizzy { width: 225px; height: 247px; background-size: 225px 247px; top: 24px; left: 54px; }
            .small_p, .small_p_without_hammer { top: 310px; height: 153px; }
            .small_p { width: 126px; background-size: 126px 153px; left: 40px; }
            .small_p_without_hammer { width: 123px; background-size: 123px 153px; left: 39px; }
            .small_p_shoot { width: 173px; height: 188px; background-size: 173px 188px; top: 280px; left: 20px; }
            .hammer_note { width: 119px; height: 83px; background-size: 119px 83px; top: 305px; right: 24px; }
            .hammer { width: 63px; height: 63px; background-size: 63px 63px; top: 396px; right: 50px; }
            .shoot { width: 142px; height: 280px; background-size: 142px 280px; top: 2px; right: 8px; }
            .singing { height: 18px; width: 210px; line-height: 18px; font-size: 16px; top: 280px; left: 75px; }
            .singing span { float: left; display: inline; }
            .singing progress { width: 123px; height: 14px; background: #97a0a9; border-radius: 5px; float: left; display: inline; line-height: 14px; }
        }
    </style>
    <script src="//ossweb-img.qq.com/images/js/jquery/jquery-1.7.2.min.js"></script>
</head>
<body>
    <h1 class="hid">这张牌不一样 我是即时战斗卡牌手游</h1>
    <div class="wrap" id="wrap">
        <div class="sec" id="sec">
            <div class="bg1">
                <section class="main1">
                    <span id="tr01" class="tr01 pa">
                        <img src="<?php echo $full_base_url ?>/images/html5/tr01.png" width="71" height="75" alt=""></span>
                    <span id="logo" class="pa index_logo">
                        <img src="<?php echo $full_base_url ?>/images/html5/logo.png" width="100%" alt=""></span>
                    <span id="tr02" class="tr02 pa">
                        <img src="<?php echo $full_base_url ?>/images/html5/tr02.png" width="76" height="30" alt=""></span>
                    <span id="tr03" class="tr03 pa">
                        <img src="<?php echo $full_base_url ?>/images/html5/tr03.png" width="97" height="98" alt=""></span>
                    <span id="tr04" class="tr04 pa">
                        <img src="<?php echo $full_base_url ?>/images/html5/tr04.png" width="76" height="63" alt=""></span>
                    <span class="bottom pa"><em>萝卜青菜各有所爱自行挑选</em></span>
                </section>
            </div>
            <div class="bg2">
                <section class="main2">
                    <p class="page_title">"我"和MT</p>
                    <span class="p2_txt1">我是即时战斗 微操打断</span>
                    <span class="p2_txt2">你是单手自动战斗刷图打怪</span>
                    <span id="yb_b" class="yb_brown"></span>
                    <span id="yb_r" class="yb_red"></span>
                    <span class="yb_arrow"></span>
                    <span id="blue" class="blue_press"></span>
                    <span id="red" class="red_press_down"></span>
                    <div class="hand">
                        <span class="smog1"></span><span class="smog2"></span>
                    </div>
                </section>
            </div>
            <div class="bg3">
                <section class="main3">
                    <div id="center">
                        <p class="page_title2">"我"和炉石</p>
                        <span class="p3_txt1">我是思考战术 微操连招即时战斗</span>
                        <span class="p3_txt2">你是闲坐啤酒叼烟 打牌思考聊天</span>
                        <span class="lighting1"></span>
                        <span class="hill_b"></span>
                        <span class="lighting2"></span>
                        <span class="key_r"></span>
                    </div>
                    <div class="smoke_bear">
                        <span class="smoking"></span>
                        <span class="bear_pop1"></span>
                        <span class="bear_pop2"></span>
                        <span class="bear_pop3"></span>
                        <span class="bear_pop4"></span>
                    </div>
                </section>
            </div>
            <div class="bg4">
                <section class="main4">
                    <p class="page_title3">"我"和刀塔传奇</p>
                    <span class="cow_age">老牛今年18岁</span>
                    <span class="p4_txt1">我是dota技能高度还原 算蓝算cd 即时战斗</span>
                    <span class="p4_txt2">你是 你是技能cd一好就放 脸滚品目 操作不如自动战斗</span>
                    <div class="child">
                        <span class="brain"></span>
                    </div>
                </section>
            </div>
            <div class="bg5">
                <section class="main5">
                    <p class="page_title4">"我"和烧钱卡牌</p>
                    <span class="p5_txt1">我是拍卖行金币买卡 英雄多元化成长</span>
                    <span class="p5_txt2">你们是 烧钱十连抽 无脑强化对数据</span>
                    <span class="p5_txt3">300RMB=3000元宝or3000钻石 绿卡 蓝卡 紫卡 橙卡</span>
                    <span class="balance"></span>
                    <span class="balance_base"></span>
                    <span class="balance_left"></span>
                    <span class="balance_right"></span>
                </section>
            </div>
            <div class="bg6">
                <section>
                    <div class="main6" id="skill_panel">
                        <span class="tr01 pa">
                            <img src="<?php echo $full_base_url ?>/images/html5/tr01.png" width="71" height="75" alt=""></span>
                        <span class="tr02 pa">
                            <img src="<?php echo $full_base_url ?>/images/html5/tr02.png" width="76" height="30" alt=""></span>
                        <span class="tr05"></span>
                        <span class="tr06"></span>
                        <span class="game_logo"></span>
                        <span class="page6_logo"></span>
                        <a href="javascript:showSkill()" class="btn_test_speed">测测你的手速</a>
                    </div>
                    <div class="skill_page skill_none" id="skill_show">
                        <div class="queen" id="queen" ontouchstart="clickQueen();">
                            <span class="queen_speaking"></span>
                            <!-- <span class="shoot"></span> -->
                        </div>
                        <div class="singing"><span>吟唱中：</span><progress id="sing_progress" value="0" max="100"></progress></div>
                        <span class="small_p" id="small_p"></span>
                        <span class="hammer_note"></span>
                        <a href="javascript:;" ontouchstart="clickHammer();" id="hammer" class="hammer"></a>
                    </div>
                </section>
            </div>
            <div class="bg7">
                <section>
                    <div class="main6" id="Div1">
                        <div class="skill_page" id="skill_show2">
                            <div class="queen" id="queen2" ontouchstart="clickQueen(2);">
                                <span class="queen_speaking"></span>
                                <!-- <span class="shoot"></span> -->
                            </div>
                            <div class="singing"><span>吟唱中：</span><progress id="sing_progress2" value="0" max="100"></progress></div>
                            <span class="small_p" id="small_p2"></span>
                            <span class="hammer_note"></span>
                            <a href="javascript:;" ontouchstart="clickHammer(2);" id="hammer2" class="hammer"></a>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <span id="top_icon" class="top_icon"></span>
    </div>
    <div class="pop_share" id="pop_share">
        <span class="square">◆</span>
        <span class="share_logo"></span>
        <p class="share_label">
            <span>点击右上角菜单 选择<strong>“分享到朋友圈”</strong></span></br>
            <span>向小伙伴炫耀手速</span>
        </p>
    </div>
    <div class="pop_success" id="pop_success">

        <div class="pop">
            <a href="javascript:hidDiv();" class="pop_close_btn"></a>
            <h3 class="pop_title" id="pop_title"></h3>
            <p class="pop_label" id="pop_label"></p>
            <p class="pop_label2" id="pop_label2">你的手速超越了<span>200</span>%的高手！</p>
            <div class="pop_btn_list">
                <a href="//sf.uu.cc/" target="_blank" class="pop_btn_home">进入官网</a>
                <a href="javascript:playAgain()" class="pop_btn_again">再玩一次</a>
            </div>
        </div>
    </div>

    <div class="pop pop_failed" id="pop_failed">
        <a href="javascript:hidDiv();" class="pop_close_btn"></a>
        <h3 class="pop_title" id="pop_title_failed"></h3>
        <p class="pop_label" id="pop_label_failed"></p>
        <p class="pop_label2" id="pop_label2_failed"></p>
        <div class="pop_btn_list">
            <a href="//sf.uu.cc/" target="_blank" class="pop_btn_home">进入官网</a>
            <a href="javascript:playAgain()" class="pop_btn_again">再玩一次</a>
        </div>
    </div>


    <script>
        var hammerFlag = 0;
        var clickSeconds = 0;
        var queenFlag = 0;
        $("#wrap").show();
        var killQueenLabel = ['超神！人键合一！', '神速！快如猎豹', '很快！动若脱兔', '一般！常人速度', '较慢！说你龟速不要打我！', '击杀女王失败'];

        function checkHammer(id) {
            if (queenFlag == 1 && hammerFlag == 1 && clickSeconds >= 0 && clickSeconds < 2000) {
                $('#queen' + id).removeClass('queen').addClass('queen_dizzy').html(' ');
                if (clickSeconds <= 400) {
                    $('#pop_title').html(killQueenLabel[0]);
                }
                else if (clickSeconds > 400 && clickSeconds <= 800) {
                    $('#pop_title').html(killQueenLabel[1]);
                }
                else if (clickSeconds > 800 && clickSeconds <= 1200) {
                    $('#pop_title').html(killQueenLabel[2]);
                }
                else if (clickSeconds > 1200 && clickSeconds <= 1400) {
                    $('#pop_title').html(killQueenLabel[3]);
                }
                else {
                    $('#pop_title').html(killQueenLabel[4]);
                }
                $('#pop_label').html('你击杀美杜莎的时间是<span>' + clickSeconds / 1000 + '</span>秒');
                setTimeout(function () {
                    $("#pop_share").show();
                    showDia('pop_success');
                }, 800);
            }
            else {
                $('#queen' + id).html('<span class="shoot"></span>');
                $('#small_p' + id).removeClass('small_p').addClass('small_p_shoot');
                $('#pop_title_failed').html(killQueenLabel[5]);
                $('#pop_label_failed').html('你没有成功击杀女王');
                $('#pop_label2_failed').html('');
                setTimeout(function () {
                    $("#pop_share").show();
                    showDia('pop_failed');
                }, 1100);
            }
        }
        function hidDiv() {
            $("#pop_share").hide();
            showDialog.hide();
        }
        function playAgain() {
            showDialog.hide();
            $("#pop_share").hide();
            hammerFlag = 0;
            clickSeconds = 0;
            queenFlag = 0;
            $('#sing_progress').val(0);
            $('#sing_progress2').val(0)
            $('#queen').attr('class', 'queen').html('<span class="queen_speaking"></span>');
            $('#queen2').attr('class', 'queen').html('<span class="queen_speaking"></span>');
            $('#small_p').attr('class', 'small_p');
            $('#small_p2').attr('class', 'small_p');
            showSkill();

        }
        function startSinging(id) {
            if ($("#skill_show").hasClass("skill_showing")) {
                setTimeout(function () {
                    timer = setInterval(function () {
                        var val = $('#sing_progress').val();

                        if (val == 100 || queenFlag == 1) {
                            clearInterval(timer);
                            checkHammer(id);
                        }
                        else {
                            val++;
                            clickSeconds += 20;
                            $('#sing_progress').val(val);
                        }

                    }, 20)
                }, 1500)
            }
        }
        function clickQueen(id) {
            if (id == undefined) {
                id = "";
            }
            if (hammerFlag == 1) {
                queenFlag = 1;
                checkHammer(id);
            }
            else {
                queenFlag = 0;
            }
        }

        function clickHammer(id) {
            if (id == undefined) {
                id = "";
            }
            hammerFlag = 1;
            $('#small_p' + id).removeClass('small_p').addClass('small_p_without_hammer');
            timer = setInterval(function () {
                var val = $('#sing_progress' + id).val();

                if (val == 100 || queenFlag == 1) {
                    clearInterval(timer);
                    checkHammer(id);
                }
                else {
                    val++;
                    clickSeconds += 20;
                    $('#sing_progress' + id).val(val);
                }

            }, 20)

        }

        function showSkill() {
            $('#skill_panel').addClass('skill_panel');
            $('#skill_show').addClass('skill_showing');
            $('#skill_show').show();
            popflag = 0;
            //startSinging();
        }


        document.body.addEventListener('touchstart', function (e) {
            e = e.changedTouches[0];
            onStart(e);
        });

        document.body.addEventListener('touchmove', function (e) {
            onMove(e.changedTouches[0], e);
        });

        document.body.addEventListener('touchend', function (e) {
            onEnd(e.changedTouches[0]);
        });

        window.onorientationchange = orientationChange;
        function initPage() {
            pageWidth = $(window).width();
            //pageHeight = $(".wrap").height();
            pageHeight = window.innerHeight;
            pages = $("#wrap section");

            $("#wrap section").css({
                //"width": "320px",//"height":$(".wrap").height()+"px"
                "height": pageHeight + "px"
            });
            $(".main6").css("height", pageHeight + "px");
            $(".skill_page").css({ "height": pageHeight + "px", "background-size": "" + pageWidth + "px " + pageHeight + "px" });


            secHeight = pageHeight * $("#wrap section").length;
            lineHeight = 832 * secHeight / pageHeight;

            $("#sec").addClass("drag");

            animatePage(curPage);

            $("#sec").removeClass("drag");


        }
        $(document).ready(function () {
            initPage();
        });

        function orientationChange() {
            initPage();
        }

        // 以下是拖动效果
        var startX = 0,
            startY = 0;
        margin = 0;
        var pages = null;
        var curPage = 0;
        var pageWidth = 0,
            pageHeight = 0;
        var lineHeight = 0, secHeight = 0;
        var targetElement = null;
        var scrollPrevent = false, movePrevent = false, touchDown = false;
        var popflag = 1;
        var timer = null;
        var timer2 = null;
        function onStart(e) {

            if (movePrevent == true) {
                event.preventDefault();
                return false;
            }
            if ($(e.target).parents("#container").length == 1) {
                scrollPrevent = true;
            } else {
                scrollPrevent = false;
            }

            touchDown = true;

            // 起始点，页面位置
            startX = e.pageX;
            startY = e.pageY;
            $("#sec").addClass("drag");

            margin = $("#sec").css("-webkit-transform");
            margin = margin.replace("matrix(", "");
            margin = margin.replace(")", "");
            margin = margin.split(",");
            margin = parseInt(margin[5]);

        }

        function onMove(e, oe) {
            if (movePrevent == true || touchDown != true) {
                event.preventDefault();
                return false;
            }
            event.preventDefault();

            if (scrollPrevent == false && e.pageY != startY && popflag == 1) {
                var temp = margin + e.pageY - startY;
                $("#sec").css("-webkit-transform", "matrix(1, 0, 0, 1, 0, " + temp + ")");
            }
        }

        function onEnd(e) {
            if (movePrevent == true) {
                event.preventDefault();
                return false;
            }

            touchDown = false;
            if (scrollPrevent == false) {
                // 抬起点，页面位置
                endX = e.pageX;
                endY = e.pageY;
                // swip 事件默认大于50px才会触发，小于这个就将页面归回
                if (Math.abs(endY - startY) <= 50) {
                    animatePage(curPage);
                } else {
                    if (endY > startY) {

                        prevPage();
                    } else {
                        nextPage();
                    }
                }
            }
            $("#sec").removeClass("drag");
        }

        function prevPage() {
            var newPage = curPage - 1;
            if (popflag == 1) {
                animatePage(newPage);
            }

        }
        function nextPage() {
            var newPage = curPage + 1;
            if (popflag == 1) {
                animatePage(newPage);
            }
        }

        function animatePage(newPage) {

            if (newPage < 0) {
                newPage = 0;
            }
            if (newPage > $("#wrap section").length - 1) {
                newPage = $("#wrap section").length - 1;
            }

            curPage = newPage;
            if (curPage == 6) {
                $("#top_icon").css("display", "none");
            } else {
                $("#top_icon").css("display", "block");
            }
            var newMarginTop = newPage * (-pageHeight);

            $("#sec").css({
                "-webkit-transform": "matrix(1, 0, 0, 1, 0, " + newMarginTop + ")"
            });

            var newTop = -parseInt(curPage * pageHeight * (lineHeight / secHeight));

            movePrevent = true;
            setTimeout("movePrevent=false;", 300);
            // 每页动画
            if (curPage == 1) {
                timer2 = setInterval(function () {
                    var rBtn = GetId('red');
                    var bBtn = GetId('blue');
                    var ybR = GetId('yb_r');
                    var ybB = GetId('yb_b');
                    if (bBtn.className == 'blue_press') { bBtn.className = 'blue_press_down'; }
                    else { bBtn.className = 'blue_press'; }
                    if (rBtn.className == "red_press_down") { rBtn.className = "red_press"; }
                    else { rBtn.className = 'red_press_down'; }
                    if (ybR.className == 'yb_red') { ybR.className = 'yb_red_f'; }
                    else { ybR.className = 'yb_red'; }
                    if (ybB.className == 'yb_brown') { ybB.className = 'yb_brown_f'; }
                    else { ybB.className = 'yb_brown'; }
                }, 500);
            }
            else {
                clearInterval(timer2);
                //if (curPage == 5) {
                //    showSkill();

                //}
            }
            if (!$(pages[curPage]).hasClass("sec0" + (curPage + 1) + "_show")) {
                $(pages[curPage]).addClass("sec0" + (curPage + 1) + "_show");
            }
            $(pages[curPage - 1]).removeClass("sec0" + (curPage) + "_show");
            $(pages[curPage + 1]).removeClass("sec0" + (curPage + 2) + "_show");


        }

        function GetId(id) {
            return document.getElementById(id);
        }
j
    </script>
    <script src="//ossweb-img.qq.com/images/js/comm/showDialog.min.js"></script>
    <script type="text/javascript" src="//tajs.qq.com/stats?sId=31086772" charset="UTF-8"></script>
    <script>
        function showDia(e) {
            showDialog.show({
                id: e,      //需要弹出的id，如果是弹出页面上的div，则该选项为必选
                bgcolor: "#e3e3e3",//弹出“遮罩”的颜色，格式为"#FF6600"，可选，默认为"#fff"
                opacity: 50     //弹出“遮罩”的透明度，格式为｛10-100｝，可选
            });
        }
    </script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " //");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F5c43b0cc575d4557471660b261fec11c' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
