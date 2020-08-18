<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//Router::connect(
//    '/a/news/:year/:md/:id_:bid',array('controller' => 'news', 'action' => 'detail' , 'defarctype'=>'news'),array(
//    'pass' => array('id','bid'),
//    'year'=>'[12][0-9]{3}',
//    'md'=>'[0-2]{1}[0-9]{1}[0-3]{1}[0-9]{1}',
//    'id' => '[0-9]+'
//);

    //匹配点点消首页
    Router::connect('/index/:id', array('controller' => 'Online', 'action' => 'index_num',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+"
            )));

    Router::connect('/act/cmzbapply', array('controller' => 'Act', 'action' => 'cmzbapply'));
    //Router::connect('/', array('controller' => 'Online', 'action' => 'index'));
    Router::connect('/', array('controller' => 'Index', 'action' => 'index'));
    Router::connect('/test111', array('controller' => 'Online', 'action' => 'test111'));
    Router::connect('/m', array('controller' => 'Online', 'action' => 'index'));
    Router::connect('/hd', array('controller' => 'Online', 'action' => 'hd'));
    Router::connect('/xts', array('controller' => 'Online', 'action' => 'xts'));
    Router::connect('/wtz', array('controller' => 'Online', 'action' => 'wtz'));
    //捕获分页的配置
    Router::connect('/news/:id_:page.html', array('controller' => 'Online', 'action' => 'news',array(
        'pass'=>array("id","page"),
        'id'=>"[0-9]+",
        'page'=>"[0-9]+"
    )));
    //捕获分页的配置
    Router::connect('/jnh_news/:page.html', array('controller' => 'Online', 'action' => 'jnh_news',array(
        'pass'=>array("page"),
        'page'=>"[0-9]+"
    )));
    Router::connect('/guide/:id_:page.html', array('controller' => 'Online', 'action' => 'guide',array(
    'pass'=>array("id","page"),
    'id'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));

    Router::connect('/news/:template/:id_:page.html', array('controller' => 'Online', 'action' => 'news',array(
        'pass'=>array("template","id","page"),
        'template'=>'[a-zA-Z0-9]+',
        'id'=>"[0-9]+",
        'page'=>"[0-9]+"
    )));

    //捕获某一个分类的列表页
    Router::connect('/news/:id', array('controller' => 'Online', 'action' => 'news',array(
        'pass'=>array("id"),
        'id'=>"[0-9]+"
    )));

    //捕获某一个分类的列表页
    Router::connect('/guide/:id', array('controller' => 'Online', 'action' => 'guide',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+"
            )));

    //游戏资料
    Router::connect('/game_data', array('controller' => 'Online', 'action' => 'game_data',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+"
            )));

    //路人官网悬念站页面
    Router::connect('/suspense', array('controller' => 'Online', 'action' => 'suspense',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+"
            )));

    //影音中心
    Router::connect('/vedio/:page.html', array('controller' => 'Online', 'action' => 'vedio',array(
    'pass'=>array("page"),
    'page'=>"[0-9]+"
            )));
    Router::connect('/video/:page.html', array('controller' => 'Online', 'action' => 'video_detail',array(
    'pass'=>array("page"),
    'page'=>"[0-9]+"
            )));
    Router::connect('/pic/:page.html', array('controller' => 'Online', 'action' => 'pic',array(
    'pass'=>array("page"),
    'page'=>"[0-9]+"
            )));
    Router::connect('/images/:type/:page.html', array('controller' => 'Online', 'action' => 'images',array(
    'pass'=>array("page"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));
    Router::connect('/vedios/:type/:page.html', array('controller' => 'Online', 'action' => 'vedios',array(
    'pass'=>array("page"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));
    Router::connect('/game_list', array('controller' => 'Online', 'action' => 'game_list'));
    //捕获某一个分类的列表页
    Router::connect('/game_data/:id', array('controller' => 'Online', 'action' => 'game_data',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+"
            )));


    //捕获某一个分类的列表页
    Router::connect('/datas/:type/:page', array('controller' => 'Online', 'action' => 'getDatas',array(
    'pass'=>array("type"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));

    Router::connect('/ajax_datas/:type/:page', array('controller' => 'Online', 'action' => 'ajaxGetDatas',array(
    'pass'=>array("type"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));

    Router::connect('/news/:template/:id', array('controller' => 'Online', 'action' => 'news',array(
        'pass'=>array("template","id"),
        'template'=>'[a-zA-Z0-9]+',
        'id'=>"[0-9]+"
    )));

    /* 上报彩虹数据中心 */
    Router::connect('/edata', array('controller' => 'Stat', 'action' => 'edata'));

    Router::connect('/stat/:key', array('controller' => 'Stat', 'action' => 'index',array(
        'pass'=>array("key"),
        'key'=>"[0-9]+"
    )));
    Router::connect('/stat/look/:key', array('controller' => 'Stat', 'action' => 'look',array(
    'pass'=>array("key"),
    'key'=>"[0-9]+"
            )));



    Router::connect('/url/:id', array('controller' => 'Router', 'action' => 'url',array(
        'pass'=>array("id"),
        'key'=>"[0-9]+"
    )));

    //图片
    Router::connect('/picture/:id', array('controller' => 'Online', 'action' => 'picture',array(
            'pass'=>array("id"),
            'id'=>"[0-9]+"
    )));

    Router::connect('/show/:id', array('controller' => 'Online', 'action' => 'show',array(
        'pass'=>array("id"),
        'id'=>"[0-9]+"
    )));

    Router::connect('/pokedex', array('controller' => 'Online', 'action' => 'pokedex',array()));

    Router::connect('/guide_show/:id', array('controller' => 'Online', 'action' => 'guide_show',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+"
            )));
     Router::connect('/guide_detail/:pid/:id', array('controller' => 'Online', 'action' => 'guide_detail',array(
        'pass'=>array("pid","id"),
        'pid'=>'[0-9]+',
        'id'=>"[0-9]+"
            )));
    Router::connect('/webgame', array('controller' => 'Webgame', 'action' => 'show'));

    Router::connect('/getMoreNews/:page/:categoryid/:limit', array('controller' => 'Online', 'action' => 'getMoreNews',array(
        'pass'=>array("page", 'categoryid', 'limit'),
        'page'=>"[0-9]+",
        'categoryid'=>"[,0-9]+",
        'limit'=>"[0-9]+"
    )));
    Router::connect('/getNewsCount/:categoryid', array('controller' => 'Online', 'action' => 'getNewsCount',array(
    'pass'=>array('categoryid'),
    'categoryid'=>"[,0-9]+",
    )));
    Router::connect('/getMoreUserScores', array('controller' => 'Online', 'action' => 'getMoreUserScores'));

    Router::connect('/game', array('controller' => 'Online', 'action' => 'games'));

    //发送手机 兑换码
    Router::connect('/send_phone_code', array('controller' => 'Online', 'action' => 'send_phone_code'));

    //搜集手机号，返回礼包码
    Router::connect('/collect_phone_return_code', array('controller' => 'Online', 'action' => 'collect_phone_return_code'));
    Router::connect('/collect_phone_num', array('controller' => 'Online', 'action' => 'collect_phone_num'));
    Router::connect('/get_collect_phone_num', array('controller' => 'Online', 'action' => 'get_collect_phone_num'));

    Router::connect('/collect_phone', array('controller' => 'Online', 'action' => 'collect_phone'));
    Router::connect('/collect_phone_luren', array('controller' => 'Online', 'action' => 'collect_phone_luren'));
    Router::connect('/check_phone', array('controller' => 'Online', 'action' => 'check_phone'));
    Router::connect('/collect_email', array('controller' => 'Online', 'action' => 'collect_email'));
    Router::connect('/collect_email2', array('controller' => 'Online', 'action' => 'collect_email2'));
    //新增圈地预约接口
    Router::connect('/qd_yuyue', array('controller' => 'Qd', 'action' => 'qd_yuyue'));
    //新增圈地获取验证码接口
    Router::connect('/qd_send_check_code', array('controller' => 'Qd', 'action' => 'qd_send_check_code'));
    //新增圈地验证验证码接口
    Router::connect('/qd_valid_check_code', array('controller' => 'Qd', 'action' => 'qd_valid_check_code'));
    //新增路人获取验证码接口
    Router::connect('/qd_send_check_code_luren', array('controller' => 'Qd', 'action' => 'qd_send_check_code_luren'));
    //新增圈地页面初始化接口
    Router::connect('/qd_init', array('controller' => 'Qd', 'action' => 'qd_init'));
    Router::connect('/qd_index', array('controller' => 'Qd', 'action' => 'index'));
    Router::connect('/wx_index1', array('controller' => 'Qd', 'action' => 'wx_index1'));
    Router::connect('/wx_index2', array('controller' => 'Qd', 'action' => 'wx_index2'));
    Router::connect('/wx_index3', array('controller' => 'Qd', 'action' => 'wx_index3'));
    Router::connect('/act_share', array('controller' => 'Online', 'action' => 'act_share'));

    Router::connect('/test', array('controller' => 'Test', 'action' => 'test'));

    Router::connect('/send_telephone', array('controller' => 'Online', 'action' => 'send_telephone'));

    //发送手机信息
    Router::connect('/send_msg', array('controller' => 'Online', 'action' => 'send_msg'));

    Router::connect('/add_yy_telephone', array('controller' => 'Online', 'action' => 'add_yy_tel'));
    Router::connect('/get_yy_count', array('controller' => 'Online', 'action' => 'get_yy_count'));

    Router::connect('/rand_gift', array('controller' => 'Online', 'action' => 'rand_gift'));

    Router::connect('/send_code', array('controller' => 'Online', 'action' => 'send_code'));

    Router::connect('/wenjuan', array('controller' => 'Online', 'action' => 'activity'));

    Router::connect('/survey', array('controller' => 'Online', 'action' => 'survey'));

    Router::connect('/baike', array('controller' => 'Online', 'action' => 'baike'));

    Router::connect('/home', array('controller' => 'Online', 'action' => 'home'));
    Router::connect('/more', array('controller' => 'Online', 'action' => 'more'));
    Router::connect('/share', array('controller' => 'Online', 'action' => 'share'));
    Router::connect('/admin', array('admin'=>true,'controller' => 'Users', 'action' => 'login', 'home'));

    Router::connect('/collect_cqb_plenilune_info', array('controller' => 'Process', 'action' => 'collect_cqb_plenilune_info'));
    Router::connect('/cqb_sociaty_activity', array('controller' => 'Process', 'action' => 'cqb_sociaty_activity'));
    Router::connect('/ld_collect_qq', array('controller' => 'Process', 'action' => 'ld_collect_qq'));

        Router::connect('/click_like', array('controller' => 'Online', 'action' => 'click_like'));
        Router::connect('/get_verify_code', array('controller' => 'Process', 'action' => 'get_verify_code'));
    Router::connect('/send_code_by_sm', array('controller' => 'Process', 'action' => 'send_code_by_sm'));

    //游戏截图页面
    Router::connect('/jietu', array('controller' => 'Online', 'action' => 'jietu'));
    Router::connect('/main', array('controller' => 'Online', 'action' => 'home'));

    Router::connect('/download', array('controller' => 'Online', 'action' => 'download'));
    Router::connect('/downloadLr', array('controller' => 'Online', 'action' => 'downloadLr'));
    Router::connect('/downloadLrpz', array('controller' => 'Online', 'action' => 'downloadLrpz'));
    Router::connect('/tg', array('controller' => 'Online', 'action' => 'tg'));
    Router::connect('/privacy', array('controller' => 'Online', 'action' => 'privacy'));
    Router::connect('/support', array('controller' => 'Online', 'action' => 'support'));
    Router::connect('/cdkey', array('controller' => 'Online', 'action' => 'cdkey'));

    Router::connect('/h5', array('controller' => 'Online', 'action' => 'html5'));

    Router::connect('/html5_info', array('controller' => 'Online', 'action' => 'html5_info'));
    Router::connect('/mobile', array('controller' => 'Online', 'action' => 'mobile'));
    Router::connect('/activity', array('controller' => 'Online', 'action' => 'activity'));
    Router::connect('/activity/:dir1', array('controller' => 'Activity', 'action' => 'one_level'));
    Router::connect('/activity/:dir1/:dir2', array('controller' => 'Activity', 'action' => 'two_level'));
    Router::connect('/activity/:dir1/:dir2/:dir3', array('controller' => 'Activity', 'action' => 'three_level'));
    Router::connect('/activity/:dir1/:dir2/:dir3/:dir4', array('controller' => 'Activity', 'action' => 'four_level'));
    Router::connect('/fsk', array('controller' => 'Online', 'action' => 'activity'));
    //烈焰遮天媒体投放
    Router::connect('/ppc', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/tyc', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/byc', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/jpc', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/lxca', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/lxcb', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/byc2', array('controller' => 'Online', 'action' => 'ppc'));
    Router::connect('/ryc', array('controller' => 'Online', 'action' => 'ppc'));
    // 乐舞 主题曲征名活动
    Router::connect('/saveMusic', array('controller' => 'Online', 'action' => 'saveMusic'));
   //数据监控加的路由
    Router::connect('/tuiguang', array('controller' => 'Online', 'action' => 'tuiguang'));
    Router::connect('/fab', array('controller' => 'Online', 'action' => 'fab'));
    Router::connect('/pz', array('controller' => 'Online', 'action' => 'pz'));
    Router::connect('/sem', array('controller' => 'Online', 'action' => 'sem'));
    Router::connect('/dsp', array('controller' => 'Online', 'action' => 'dsp'));
    // 奔跑吧兄弟h5小游戏shengdian
    Router::connect('/shengdian', array('controller' => 'Online', 'action' => 'shengdian'));
    Router::connect('/360h5', array('controller' => 'Online', 'action' => 'gameh5'));

    Router::connect('/tese', array('controller' => 'Online', 'action' => 'tese'));
    Router::connect('/shequ', array('controller' => 'Online', 'action' => 'shequ'));
    Router::connect('/gonglue', array('controller' => 'Online', 'action' => 'gonglue'));
    Router::connect('/video', array('controller' => 'Online', 'action' => 'video'));
    Router::connect('/w_share', array('controller' => 'Online', 'action' => 'get_share_api'));
    Router::connect('/up_img', array('controller' => 'Online', 'action' => 'up_img'));

    Router::connect('/bdpzdownload', array('controller' => 'Act', 'action' => 'bdpzdownload'));
    Router::connect('/act/statistics', array('controller' => 'Act', 'action' => 'statistics'));

    //圣斗士活动
    Router::connect('/act', array('controller' => 'Act', 'action' => 'sds_index'));
    Router::connect('/act/2', array('controller' => 'Act', 'action' => 'sds_step2'));
    Router::connect('/act/3', array('controller' => 'Act', 'action' => 'sds_step3'));
    Router::connect('/act/share/:id', array('controller' => 'Act', 'action' => 'sds_step4',array(
        'pass'=>array("id"),
        'id'=>"[0-9]+")
    ));
    Router::connect('/act/share', array('controller' => 'Act', 'action' => 'sds_step4'));
    //Router::connect('/act/rank', array('controller' => 'Act', 'action' => 'sds_rank'));
    Router::connect('/act/qrcode/:id', array('controller' => 'Act', 'action' => 'qrcode',array(
        'pass'=>array("id"),
        'id'=>"[0-9]+")
    ));
    Router::connect('/act/show_qrcode/:id', array('controller' => 'Act', 'action' => 'show_qrcode',array(
    'pass'=>array("id"),
    'id'=>"[0-9]+")
    ));

    Router::connect('/act/up_img', array('controller' => 'Act', 'action' => 'up_img'));

    Router::connect('/act/send_msg', array('controller' => 'Act', 'action' => 'send_msg'));
    Router::connect('/act/send_msg1', array('controller' => 'Act', 'action' => 'send_msg1'));
    //Router::connect('/act/uploadimg', array('controller' => 'Act', 'action' => 'uploadimg'));
    //Router::connect('/act/test', array('controller' => 'Act', 'action' => 'sds_test'));

    //家园新版官网
    Router::connect('/welfare', array('controller' => 'Online', 'action' => 'welfare'));
    Router::connect('/guide', array('controller' => 'Online', 'action' => 'guide'));
    Router::connect('/role_appreciate', array('controller' => 'Online', 'action' => 'role_appreciate'));
    Router::connect('/scene_appreciate', array('controller' => 'Online', 'action' => 'scene_appreciate'));
    Router::connect('/fab_wn', array('controller' => 'Online', 'action' => 'fab_wn'));
    Router::connect('/fab_gz', array('controller' => 'Online', 'action' => 'fab_gz'));
    Router::connect('/media_appreciate/:type_:page.html', array('controller' => 'Online', 'action' => 'media_appreciate',array(
    'pass'=>array("type","page"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]."
            )));
    Router::connect('/media_appreciate/:type.html', array('controller' => 'Online', 'action' => 'media_appreciate',array(
    'pass'=>array("type"),
    'type'=>"[0-9]+"
            )));
    Router::connect('/collect_phone_send_code', array('controller' => 'Online', 'action' => 'collect_phone_send_code'));
    Router::connect('/collect_phone_common', array('controller' => 'Online', 'action' => 'collect_phone_common'));
    Router::connect('/animal_question_user_result', array('controller' => 'Online', 'action' => 'animal_question_user_result'));
    Router::connect('/get_animal_question_answer', array('controller' => 'Online', 'action' => 'get_animal_question_answer'));
    require_once "static_routes.php";

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
    Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

    /**********************************************/

    Router::connect('/bdpz', array('controller' => 'Online', 'action' => 'bdpz'));
    Router::connect('/bdpz1', array('controller' => 'Online', 'action' => 'bdpz1'));
    Router::connect('/bdpz2', array('controller' => 'Online', 'action' => 'bdpz2'));
    Router::connect('/bdpz3', array('controller' => 'Online', 'action' => 'bdpz3'));

    /**********************************************/
    Router::connect('/vediocenter/:type.html', array('controller' => 'Online', 'action' => 'vediocenter',array(
    'pass'=>array("type"),
    'type'=>"[0-9]+"
            )));
    Router::connect('/vediocenter/:type_:page.html', array('controller' => 'Online', 'action' => 'vediocenter',array(
    'pass'=>array("type","page"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));
    Router::connect('/wx/share', array('controller' => 'Online', 'action' => 'getWxShareParam'));

    //20190916 add route
    Router::connect('/getData/:type/:page', array('controller' => 'Online', 'action' => 'ajaxGetData',array(
    'pass'=>array("type"),
    'type'=>"[0-9]+",
    'page'=>"[0-9]+"
            )));
    Router::connect('/getArticleCategory', array('controller' => 'Online', 'action' => 'getArticleCategory'));
    Router::connect('/getArticleList/:page/:categoryid/:limit', array('controller' => 'Online', 'action' => 'getArticleList',array(
        'pass'=>array("page", 'categoryid', 'limit'),
        'page'=>"[0-9]+",
        'categoryid'=>"[,0-9]+",
        'limit'=>"[0-9]+"
    )));
    Router::connect('/getArticleInfo', array('controller' => 'Online', 'action' => 'getArticleInfo'));
    Router::connect('/newslist', array('controller' => 'Online', 'action' => 'newslist'));
    Router::connect('/subscribe', array('controller' => 'Online', 'action' => 'subscribe'));
    Router::connect('/subscribe_news', array('controller' => 'Online', 'action' => 'subscribe_news'));
    Router::connect('/subscribe_news_detail', array('controller' => 'Online', 'action' => 'subscribe_news_detail'));
    Router::connect('/check_code', array('controller' => 'Online', 'action' => 'check_code'));
    Router::connect('/news_center', array('controller' => 'Online', 'action' => 'news_center'));
    Router::connect('/news_detail', array('controller' => 'Online', 'action' => 'news_detail'));
    Router::connect('/videos_center', array('controller' => 'Online', 'action' => 'videos_center'));
    Router::connect('/star_center', array('controller' => 'Online', 'action' => 'star_center'));
    Router::connect('/star_detail', array('controller' => 'Online', 'action' => 'star_detail'));
    Router::connect('/jnh', array('controller' => 'Online', 'action' => 'jnh'));
    Router::connect('/jnh_rule', array('controller' => 'Online', 'action' => 'jnh_rule'));
    Router::connect('/strategy_center', array('controller' => 'Online', 'action' => 'strategy_center'));
    Router::connect('/strategy_detail', array('controller' => 'Online', 'action' => 'strategy_detail'));
    Router::connect('/downApp', array('controller' => 'Online', 'action' => 'downApp'));
    Router::connect('/toApp', array('controller' => 'Online', 'action' => 'toApp'));

    //Router::connect('/jnh_news', array('controller' => 'Online', 'action' => 'jnh_news'));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
    CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
    require CAKE . 'Config' . DS . 'routes.php';
