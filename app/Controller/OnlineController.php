<?php
APP::uses('FrontController', 'Controller');

/**
 * @property mixed CodeCheck
 */
class OnlineController extends FrontController
{
    var $name = 'Online';
    //每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
    var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
    public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint','Stat','CollectEmail','InviteLog','PcTemplateConfig','WapTemplateConfig','PcSkinConfig','WapSkinConfig','AnimalQuestion');
    public $is_mobile;
    var $_upload_limit = array(
            'extension' => array('jpg', 'gif', 'png')
    );

    /**
     * 兑换码错误参数
     * @var array
     *
     */
    public $code_message=array(
        0=>"成功",
        1=>"参数不全",
        2=>"手机号码不能为空",
        3=>"手机号码格式错误",
        4=>"兑换码已不足",
        5=>"发送短信失败",
        6=>"发送兑换码失败",
        7=>"兑换码领取失败",
        8=>"已经领取过兑换码",
        9=>"发送次数超过限制",
        10=>"验证码不正确",
        11=>"失败",
        12=>"操作太频繁,稍后再试",
        13=>"您已经预约过了",

    );

    function beforeFilter()
    {
        parent::beforeFilter();
        //手机页面路由到相应的wap 模板
        if ($this -> RequestHandler -> isMobile()) {
            $this->is_mobile=true;
            $GLOBALS['isMobile']=true;
            //手机端存在 访问手机端 否则访问web端
            $file_path=APP."View".DS."themes".DS.$this->directory_name.DS."wap".DS.$this->request->action.".ctp";
            if(file_exists($file_path)){
                $this->directory_name = $this->directory_name.DS."wap";
            }
        }else{
            $GLOBALS['isMobile']=false;
            //web 不存在访问手机端
            $file_path=APP."View".DS."themes".DS.$this->directory_name.DS.$this->request->action.".ctp";
            if(!file_exists($file_path)){
                $this->directory_name=$this->directory_name.DS."wap";
            }
            $this->is_mobile=false;
        }
        /* if($_SERVER['REMOTE_ADDR'] == '210.21.221.18')
        {
            var_dump($_SERVER);exit;
        } */
        if($this -> RequestHandler -> isMobile() && $_SERVER['HTTP_HOST'] == 'cqb.uu.cc' && $_SERVER['REQUEST_URI'] == '/ios'){
            $this->redirect('/activity/_cqb/aztg/index.html');
        }
        if($_SERVER['HTTP_HOST'] == 'justified.uu.cc')
        {
            $this->redirect('http://j.uu.cc');
        }
        if($_SERVER['HTTP_HOST'] == 'cqb.uu.cc' && ($_SERVER['REQUEST_URI'] == '/m' || $_SERVER['REQUEST_URI'] == '/m/')){
            $this->is_mobile=true;
            $GLOBALS['isMobile']=true;
            //手机端存在 访问手机端 否则访问web端
            $file_path=APP."View/themes/".$this->directory_name.DS."wap".DS.$this->request->action.".ctp";
            if(file_exists($file_path)){
                $this->directory_name=$this->directory_name.DS."wap";
            }
        }

        //过滤bd.uu.cc
        if ($_SERVER['HTTP_HOST'] == 'bd.uu.cc') {
            $this->directory_name = str_replace("/wap","",$this->directory_name);

        }

        if ($_SERVER['HTTP_HOST'] == 'mv.uu.cc') {
            header("X-Frame-Options:Deny");
            ini_set("session.cookie_httponly", true);
        }

        if ($_SERVER['HTTP_HOST'] == 'bs.uu.cc') {
            $wxSignPackage = $this->getWxSignPackage();
            if(!empty($wxSignPackage)){
                $this->set("wxSignPackage",$wxSignPackage);
            }
        }

        if ($_SERVER['HTTP_HOST'] == 'hy.uu.cc') {
            $wxSignPackage = $this->getWxSignPackage();
            if(!empty($wxSignPackage)){
                $this->set("wxSignPackage",$wxSignPackage);
            }
        }

        /*
        if($_SERVER['HTTP_HOST'] == 'cqb.uu.cc' && ($_SERVER['REQUEST_URI'] == '/m' || $_SERVER['REQUEST_URI'] == '/m/')){

            // for sepecial
            $this->redirect('/activity/_cqb/bd/');

            $this->is_mobile=true;
            $this->redirect('/activity/'.$this->request->params['router'].'/index.html');
            //手机端存在 访问手机端 否则访问web端
            $file_path=APP."View/themes/".$this->directory_name.DS."wap".DS.$this->request->action.".ctp";
            if(file_exists($file_path)){
                $this->directory_name=$this->directory_name.DS."wap";
            }
        }
        */
        $this->layout = '';
    }

    function special()
    {
        $this->redirect('/activity/'.$this->request->params['router'].'/index.html');
    }

        /**
     * 点赞处理
     */
    function click_like()
    {
        if($this->request->is("post"))
        {
            $site_id=$GLOBALS['site_id'];
            $label=trim($this->request->data['label']);
            $clientip=$this->getClientIp();

            $conditions = array();
            $conditions["conditions"]["site_id"] = $site_id;
            $conditions["conditions"]["label"]=$label;
            $point=$this->LikePoint->find("all",$conditions);
            $point = $point[0];
            if(!$point)
            {
                $this->export(array("ret"=>1));
            }

            $opt=intval($this->request->data['opt']);
            $response = array('ret'=>0);
            switch($opt)
            {
                // 获取点赞信息
                case 0:
                    $response['praise']=$point['LikePoint']['praise'];

                    if($point['LikePoint']['ip_check_mode'] == 0)
                    {
                        $response['clicked']=0;
                    }
                    else if($point['LikePoint']['ip_check_mode'] == 1)
                    {
                        $check=$this->ClickLike->find('first',array('conditions'=>array('site_id'=>$site_id,'ip'=>$clientip,'label'=>$label)));
                        if($check)
                            $response['clicked']=1;
                        else
                            $response['clicked']=0;
                    }
                    else if($point['LikePoint']['ip_check_mode'] == 2)
                    {
                        $check=$this->ClickLike->find('first',array('order'=>'update_time DESC','conditions'=>array('site_id'=>$site_id,'ip'=>$clientip,'label'=>$label)));
                        if(!$check)
                        {
                            $response['clicked']=0;
                        }
                        else
                        {
                            if(time() - strtotime($check['ClickLike']['update_time']) >= $point['LikePoint']['check_interval'])
                            {
                                $response['clicked']=0;
                            }
                            else
                            {
                                $response['clicked']=1;
                            }
                        }
                    }

                    break;
                // 点赞
                case 1:
                    // 不检查
                    $addflag=false;
                    if($point['LikePoint']['ip_check_mode'] == 0)
                    {
                        $addflag=true;
                    }
                    else if($point['LikePoint']['ip_check_mode'] == 1)
                    {
                        $check=$this->ClickLike->find('first',array('conditions'=>array('site_id'=>$site_id,'ip'=>$clientip,'label'=>$label)));
                        if(!$check)
                        {
                            $addflag=true;
                            $this->ClickLike->save(array('likeid'=>$point['LikePoint']['id'],'site_id'=>$site_id,'ip'=>$clientip,'label'=>$label,'agent'=>$_SERVER['HTTP_USER_AGENT'],'update_time'=>date("Y-m-d H:i:s")));
                        }
                        else
                        {
                            $this->export(array("ret"=>1,"clicked"=>1,"praise"=>$point['LikePoint']['praise']));
                        }
                    }
                    else if($point['LikePoint']['ip_check_mode'] == 2)
                    {
                        $check=$this->ClickLike->find('first',array('order'=>'update_time DESC','conditions'=>array('site_id'=>$site_id,'ip'=>$clientip,'label'=>$label)));
                        if(!$check)
                        {
                            $addflag=true;
                            $this->ClickLike->save(array('likeid'=>$point['LikePoint']['id'],'site_id'=>$site_id,'ip'=>$clientip,'label'=>$label,'agent'=>$_SERVER['HTTP_USER_AGENT'],'update_time'=>date("Y-m-d H:i:s")));
                        }
                        else
                        {
                            if(time() - strtotime($check['ClickLike']['update_time']) >= $point['LikePoint']['check_interval'])
                            {
                                $addflag=true;
                                $this->ClickLike->save(array('likeid'=>$point['LikePoint']['id'],'site_id'=>$site_id,'ip'=>$clientip,'label'=>$label,'agent'=>$_SERVER['HTTP_USER_AGENT'],'update_time'=>date("Y-m-d H:i:s")));
                            }
                            else
                            {
                                $this->export(array("ret"=>1,"clicked"=>1,"praise"=>$point['LikePoint']['praise']));
                            }
                        }
                    }
                    else
                    {
                        $this->export(array("ret"=>1));
                    }
                    $response['clicked']=1;

                    if($addflag)
                    {
                        if($point['LikePoint']['effect_mode'] == 0)
                            $addnum=1;
                        else if($point['LikePoint']['effect_mode'] == 1)
                        {
                            $maxnum=intval($point['LikePoint']['effect_value']);
                            if($maxnum < 1)
                                $maxnum=1;
                            $addnum=rand(1,$maxnum);
                        }
                        else if($point['LikePoint']['effect_mode'] == 2)
                        {
                            $addnum=intval($point['LikePoint']['effect_value']);
                        }
                        $point['LikePoint']['praise']+=$addnum;
                        $this->LikePoint->save($point['LikePoint']);
                    }


                    break;
                // 取消点赞
                case 2:
                    $check = $this->ClickLike->find('first',array('conditions'=>array('site_id'=>$site_id,'ip'=>$clientip,'label'=>$label)));
                    if(!empty($check)){
                        $this->ClickLike->deleteAll(array('site_id'=>$site_id,'ip'=>$clientip,'likeid'=>$point['LikePoint']['id']));
                        if($point['LikePoint']['praise'] > 0){
                            $point['LikePoint']['praise'] -= 1;
                            $this->LikePoint->save($point['LikePoint']);
                        }
                    }else{
                        $this->export(array("ret"=>1));
                    }

                    break;
            }

            $response['praise']=$point['LikePoint']['praise'];

            $this->export($response);
        }
        else
        {
            $this->export(array("ret"=>1));
        }

    }

    /**
     *当 引导页 占据首页的时候 当作网站主页
     */
    function home(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'home';
        $this->render($file_name);
    }
    function more(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'more';
        $this->render($file_name);
    }
    function share(){
        $wxSignPackage = $this->getWxSignPackage();
        if(!empty($wxSignPackage)){
            $this->set("wxSignPackage",$wxSignPackage);
        }
        $file_name = '/themes' . DS . $this->directory_name . DS . 'share';
        $this->render($file_name);
    }
    /**
     * 首页控制器 只负责路由 取数据的逻辑放到模板组件里面去
     * Enter description here ...
     *
     */
    function index()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'index';
        if($this->site_id == 82 || $this->site_id == 83 || $this->site_id == 72)
        {
            if(strcmp($_GET['lan'],'en') == 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . 'index_en';
            else if(strcmp($_GET['lan'],'cht') == 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . 'index_cht';

        }
        //泰拉瑞亚使用H5游戏作为首页
        if($this->site_id == 118){
            if($this->is_mobile){
                 $this->redirect('/activity/terraria/game/mobile.html');
            }else{
                $this->redirect('/activity/terraria/game/pc.html');
            }
        }
    //qd.uu.cc
//         if ($_SERVER['HTTP_HOST'] == 'qd.uu.cc') {
//         	$file_name = '/themes' . DS . $this->directory_name . DS . 'qd_index';
//         }
        //echo $file_name."mike";
        $this->render($file_name);
    }

    //text
    function test111() {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'test111';
        if($this->site_id == 82 || $this->site_id == 83 || $this->site_id == 72)
        {
            if(strcmp($_GET['lan'],'en') == 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . 'index_en';
            else if(strcmp($_GET['lan'],'cht') == 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . 'index_cht';

        }
        //echo $file_name."mike";
        $this->render($file_name);
    }

    function hd()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'hd';
        $this->render($file_name);
    }

    function xts()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'xts';
        $this->render($file_name);
    }

    function wtz()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'wtz';
        $this->render($file_name);
    }

    function tese(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'tese';
        if($this->site_id == 68 && !$this -> RequestHandler -> isMobile())
        {
            $this->redirect("/activity/ld_features/");
        }
        else
            $this->render($file_name);
    }

    function gonglue()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'gonglue';
        $this->render($file_name);
    }

    function video()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'video';
//     	var_dump($file_name);exit;
        $this->render($file_name);
    }
    function video_detail() {
        $page = intval($this->request->params['page']);
        $file_name = '/themes' . DS . $this->directory_name . DS . 'video_detail';
        $this->set('page',$page);
        $this->render($file_name);
    }
    function shequ(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'shequ';
        $this->render($file_name);
    }

    function m()
    {
        echo 444443;exit;
    }
    /**
     * 共用头部控制器
     *
     * Enter description here ...
     */
    function top()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'top';
        $this->render($file_name);
    }
    /* 监控链接 */
    function ppc()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'ppc';
        $this->render($file_name);
    }
    function tuiguang()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'tuiguang';
        $this->render($file_name);
    }

    function fab()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'fab';
        $this->render($file_name);
    }
    function pz()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'pz';
        $this->render($file_name);
    }
    function sem()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'sem';
        $this->render($file_name);
    }
    function dsp()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'dsp';
        $this->render($file_name);
    }
    function downloadLr()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'downloadLr';
        $this->render($file_name);
    }

    function downloadLrpz()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'downloadLrpz';
        $this->render($file_name);
    }

    function privacy()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'privacy';
        $this->render($file_name);
    }

    function support()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'support';
        $this->render($file_name);
    }

    function baike()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'baike';

        try {
            $this->render($file_name);
        } catch (Exception $e) {
            $file_name = '/themes' . DS . 'public' . DS . 'baike';

            $this->render($file_name);
        }
    }
    /**
     * 游戏列表控制器
     *
     * Enter description here ...
     */
    public function game_list()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'game_list';
        $this->render($file_name);
    }
    //家园新版路由
    public function welfare()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'welfare';
        $this->render($file_name);
    }
    public function role_appreciate()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'role_appreciate';
        $this->render($file_name);
    }
    public function scene_appreciate()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'scene_appreciate';
        $this->render($file_name);
    }
    public function fab_wn()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'fab_wn';
        $this->render($file_name);
    }
    public function fab_gz()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'fab_gz';
        $this->render($file_name);
    }
    public function newslist()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'newslist';
        $this->render($file_name);
    }
    public function subscribe()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'subscribe';
        $this->render($file_name);
    }
    public function subscribe_news()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'subscribe_news';
        $this->render($file_name);
    }
    public function subscribe_news_detail()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'subscribe_news_detail';
        $this->render($file_name);
    }
    public function news_center()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'news_center';
        $this->render($file_name);
    }
    public function news_detail()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'news_detail';
        $this->render($file_name);
    }
    public function videos_center()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'videos_center';
        $this->render($file_name);
    }
    public function star_center()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'star_center';
        $this->render($file_name);
    }
    public function star_detail()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'star_detail';
        $this->render($file_name);
    }
    public function strategy_center()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'strategy_center';
        $this->render($file_name);
    }
    public function strategy_detail()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'strategy_detail';
        $this->render($file_name);
    }
    public function jnh()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'jnh';
        $this->render($file_name);
    }
    public function jnh_rule()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'jnh_rule';
        $this->render($file_name);
    }
    public function downApp()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'downApp';
        $this->render($file_name);
    }
    public function toApp()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'toApp';
        $this->render($file_name);
    }
    // public function jnh_news()
    // {
    //     $file_name = '/themes' . DS . $this->directory_name . DS . 'jnh_news';
    //     $this->render($file_name);
    // }
    //游戏资料
    function game_data() {
    $cid = intval($this->request->params['id']);


        if(preg_match('/all/', $cid)){
            $cid = $this->get_all_cid($this->site_id);
        }

        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;
        $this->set("category_id",$cid);
        $GLOBALS['current_category_id']=$cid;
        $this->set("page",$page);
        $GLOBALS['current_page']=$page;
        $template=$this->request->params['template'];


        try {
            if(strlen($template) > 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . $template;
            else
            {
                $file_name = '/themes' . DS . $this->directory_name . DS . 'game_data';
                // 玩具爆破, 攻略列表页
                if(!strstr($cid,'.') && !is_numeric($cid))
                    $file_name = '/themes' . DS . $this->directory_name . DS . $cid;
                if($this->site_id == 79 && $cid == 229 && $this -> RequestHandler -> isMobile())
                    $file_name = '/themes' . DS . $this->directory_name . DS . 'gonglue';

            }

            $this->render($file_name);
        } catch (Exception $e) {
            //查询数据失败跳转到首页
            $this->info('Access fail '.$e->getMessage());

            $this->redirect('/');
        }
    }

    /**
     * 影音中心【坦克用】
     */
    function vedio() {
        $page = intval($this->request->params['page']);

        $file_name = '/themes' . DS . $this->directory_name . DS . 'vedio';
        $this->set('page',$page);
        $this->render($file_name);
    }

    function pic() {
        $page = intval($this->request->params['page']);

        $file_name = '/themes' . DS . $this->directory_name . DS . 'pic';
        $this->set('page',$page);
        $this->render($file_name);
    }
    function images() {
        $type = intval($this->request->params['type']);
        $page = intval($this->request->params['page']);

        $file_name = '/themes' . DS . $this->directory_name . DS . 'images';
        $this->set('type',$type);
        $this->set('page',$page);
        $this->render($file_name);
    }

    function vedios() {
        $type = intval($this->request->params['type']);
        $page = intval($this->request->params['page']);

        $file_name = '/themes' . DS . $this->directory_name . DS . 'vedios';
        $this->set('type',$type);
        $this->set('page',$page);
        $this->render($file_name);
    }

    /**
     * 获取新闻分类
     * @param null $cid
     *
     */
    function news()
    {
        $cid = intval($this->request->params['id']);


        if(preg_match('/all/', $cid)){
            $cid = $this->get_all_cid($this->site_id);
        }

        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;
        $this->set("category_id",$cid);
        $GLOBALS['current_category_id']=$cid;
        $this->set("page",$page);
        $GLOBALS['current_page']=$page;
        $template=$this->request->params['template'];


        try {
            if(strlen($template) > 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . $template;
            else
            {
                $file_name = '/themes' . DS . $this->directory_name . DS . 'news';
                // 玩具爆破, 攻略列表页
                if(!strstr($cid,'.') && !is_numeric($cid))
                    $file_name = '/themes' . DS . $this->directory_name . DS . $cid;
                if($this->site_id == 79 && $cid == 229 && $this -> RequestHandler -> isMobile())
                    $file_name = '/themes' . DS . $this->directory_name . DS . 'gonglue';

            }
            $this->render($file_name);
        } catch (Exception $e) {
            //查询数据失败跳转到首页
            $this->info('Access fail '.$e->getMessage());
            $this->redirect('/');
        }
    }

    /**
     * 获取新闻分类
     * @param null $cid
     *
     */
    function jnh_news()
    {
        $cid = intval($this->request->params['id']);


        if(preg_match('/all/', $cid)){
            $cid = $this->get_all_cid($this->site_id);
        }

        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;
        $this->set("category_id",$cid);
        $GLOBALS['current_category_id']=$cid;
        $this->set("page",$page);
        $GLOBALS['current_page']=$page;
        $template=$this->request->params['template'];


        try {
            if(strlen($template) > 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . $template;
            else
            {
                $file_name = '/themes' . DS . $this->directory_name . DS . 'jnh_news';
                // 玩具爆破, 攻略列表页
                if(!strstr($cid,'.') && !is_numeric($cid))
                    $file_name = '/themes' . DS . $this->directory_name . DS . $cid;
                if($this->site_id == 79 && $cid == 229 && $this -> RequestHandler -> isMobile())
                    $file_name = '/themes' . DS . $this->directory_name . DS . 'gonglue';

            }
            $this->render($file_name);
        } catch (Exception $e) {
            //查询数据失败跳转到首页
            $this->info('Access fail '.$e->getMessage());
            $this->redirect('/');
        }
    }

    /**
     * 获取新闻分类
     * @param null $cid
     *
     */
    function guide()
    {
        $cid = intval($this->request->params['id']);


        if(preg_match('/all/', $cid)){
            $cid = $this->get_all_cid($this->site_id);
        }

        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;
        $this->set("category_id",$cid);
        $GLOBALS['current_category_id']=$cid;
        $this->set("page",$page);
        $GLOBALS['current_page']=$page;
        $template=$this->request->params['template'];


        try {
            if(strlen($template) > 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . $template;
            else
            {
                $file_name = '/themes' . DS . $this->directory_name . DS . 'guide';
                // 玩具爆破, 攻略列表页
                if(!strstr($cid,'.') && !is_numeric($cid))
                    $file_name = '/themes' . DS . $this->directory_name . DS . $cid;
                if($this->site_id == 79 && $cid == 229 && $this -> RequestHandler -> isMobile())
                    $file_name = '/themes' . DS . $this->directory_name . DS . 'gonglue';

            }

            $this->render($file_name);
        } catch (Exception $e) {
            //查询数据失败跳转到首页
            $this->info('Access fail '.$e->getMessage());

            $this->redirect('/');
        }
    }

    /**
     * 根据站点id 获取某一个 站点的 分类列表
     * @param $site_id
     * @return array
     *
     */
    function get_all_cid($site_id){
        $site_id = (int)$site_id;
        $categories = $this->NewsCategory->getCategoryList($site_id);
        return array_keys($categories);
    }
    /**
     * 获取新闻详细信息 只负责路由 取数据的逻辑放到模板组件里面去
     * @param $id
     *
     */
    function show()
    {
        $id = intval($this->request->params['id']);
        if(empty($id)){
            $this->redirect("/");
        }
        $result = $this -> News -> read(null, $id);

        if (!$result) {
            $this->redirect("/");
        }
        // 增加一次新闻点击数
        $this->News->click($id);
        $search = $_GET;
        if(!empty($search) && !empty($search["type"])){
            $this->set("type",$search["type"]);
        }
        $this->set("result",$result);
        $this->set("news_id",$id);
        $this->set("NEWS_TITLE",$result['News']['title']);
        $GLOBALS['current_news']=$result;
        $file_name = '/themes' . DS . $this->directory_name . DS . 'show';
        $this->render($file_name);
    }

    /**
     * 获取新闻详细信息 只负责路由 取数据的逻辑放到模板组件里面去
     * @param $id
     *
     */
    function guide_show()
    {
        $id = intval($this->request->params['id']);
        if(empty($id)){
            $this->redirect("/");
        }
        $result = $this -> News -> read(null, $id);

        if (!$result) {
            $this->redirect("/");
        }
        // 增加一次新闻点击数
        $this->News->click($id);

        $this->set("result",$result);
        $this->set("news_id",$id);
        $this->set("NEWS_TITLE",$result['News']['title']);
        $GLOBALS['current_news']=$result;
        $file_name = '/themes' . DS . $this->directory_name . DS . 'guide_show';
        $this->render($file_name);
    }
    function guide_detail()
    {
        $id = intval($this->request->params['id']);
        $pid = $this->request->params['pid'];

        if(empty($id)){
            $this->redirect("/");
        }
        $this->set("id",$id);
        $this->set("pid",$pid);
        $file_name = '/themes' . DS . $this->directory_name . DS . 'guide_detail';
        $this->render($file_name);
    }
    function pokedex() {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'pokedex';
        $this->render($file_name);
    }

    function picture()
    {
        $id = intval($this->request->params['id']);
        if(empty($id)){
            $this->redirect("/");
        }
        $result = $this -> News -> read(null, $id);
        $this->set("result",$result);
        $this->set("id",$id);
        $file_name = '/themes' . DS . $this->directory_name . DS . 'picture';
        $this->render($file_name);
    }

    function games(){
        $file_name = DS.'themes' . DS . $this->directory_name . DS . 'games';
        $this->render($file_name);
    }

    function  json_format($data){
        $message=$this->code_message[$data["ret"]];
        $data["message"]=$message;
        die(json_encode($data));
    }

    function jietu(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'jietu';
        $this->render($file_name);
    }

    /**
     * 奔跑吧兄弟 h5小游戏
     */
    function shengdian(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'shengdian';
        $this->render($file_name);
    }

    function gameh5(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'gameh5';
        $this->render($file_name);
    }

    /**
     *
     *发送兑换码 并且需要收集收集手机号的 接口  发送到手机里面 直接发送没有校验
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id
     *
     */
    function collect_phone_return_code(){
        $this->layout="";
        $this->autoRender=false;
        try{
            //             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
            $phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
            if(empty($phone)){
                $this->json_format(array("ret"=>2));
            }
            $tel_result=preg_match("/1[3,4,5,8]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $code_id=intval($code_id);
            //如果发送过 直接发送给用户
            $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
            if($result){
                $code=$result["Phone"]["code"];
                $this->json_format(array("ret"=>8,"code"=>$code));
            }
            //根据传入的site_id 与code_id 发送兑换码
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"];

            $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
            $this->Phone->saveData($data);
            $this->json_format(array("ret"=>0,"code"=>$code));

            //执行发送操作
            //$send_result=$this->send_message($site_id,$code_id,$phone,$code);
//     		if($send_result){
//     			$data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
//     			$this->Phone->saveData($data);
//     			$this->json_format(array("ret"=>0,"code"=>$code));
//     		}else{
//     			$this->json_format(array("ret"=>5));
//     		}
        }catch (Exception $e){
            $this->log("log_error",$e->getMessage());
            $this->json_format(array("ret"=>7));
        }

    }

    //查询预约人数 不写这个表，已作废2017-11-22 jun.huang
    public function collect_phone_num() {
        $site_id = $this->site_id;
        $code_id = intval($_GET['code_id']);
        $total_sql = "select count(*) cnt from phone where code_id in('{$code_id}') and site_id = ".$this->site_id;
        $total = $this->News->query($total_sql);
        $total = $total[0][0]['cnt'];
        $this->json_format(array("ret"=>0,'total' => $total+80000));
    }

    //查询收集的手机号的数量
    public function get_collect_phone_num() {
        $site_id = $this->site_id;
        $code_id = intval($_GET['code_id']);
        $total_sql = "select count(*) cnt from collect_phone where collect_name = ".$this->site_id;
        $total = $this->News->query($total_sql);
        $total = $total[0][0]['cnt'];
        if ($this->site_id == 117) {
            $total = 600000 + $total * 888;
        }
        $this->json_format(array("ret"=>0,'total' => $total));
    }

    /**
     *
     *发送兑换码 并且需要收集收集手机号的 接口  发送到手机里面 直接发送没有校验
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id
     *
     */
    function send_phone_code(){
        $this->layout="";
        $this->autoRender=false;
        try{
            //             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
            $union = isset($this->request->data["union"]) ? $this->request->data["union"] : null;
            $phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
            if(empty($phone)){
                $this->json_format(array("ret"=>2));
            }
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $code_id=intval($code_id);

            $union = intval($union);
            if ($union) {
                //如果发送过 直接发送给用户
                $result=$this->Phone->getCodeByPhone($site_id,$union,$phone );
                if($result){
                    $code=$result["Phone"]["code"];
                    $this->json_format(array("ret"=>8,"code"=>$code));
                }
            }

            //如果发送过 直接发送给用户
            $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
            if($result){
                $code=$result["Phone"]["code"];
                $this->json_format(array("ret"=>8,"code"=>$code));
            }
            //根据传入的site_id 与code_id 发送兑换码
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"];
            //执行发送操作
            $send_result=$this->send_message($site_id,$code_id,$phone,$code);
            if($send_result){
                $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
                $this->Phone->saveData($data);
                $this->json_format(array("ret"=>0,"code"=>$code));
            }else{
                $this->json_format(array("ret"=>5));
            }
        }catch (Exception $e){
            $this->log("log_error",$e->getMessage());
            $this->json_format(array("ret"=>7));
        }

    }

    /**
     *
     *发送信息 到手机里面 直接发送没有校验 只发送信息（不含验证码）
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id 默认为100000
     *
     */
    function send_msg(){
        $this->layout="";
        $this->autoRender=false;
        try{
            $site_id=$this->request->data["site_id"];
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:100000;
            $phone=isset($this->request->data["phone"])?$this->request->data["phone"]:"";
            if(empty($phone)){
                $this->json_format(array("ret"=>2));
            }
            $tel_result=preg_match("/1[3,4,5,8]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $code_id=intval($code_id);
            //如果发送过 直接发送给用户
            $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone );
            $content = $this->message_format($site_id,$code_id,$phone);
            if($result){ //echo 111;
//     			$code=$result["Phone"]["code"];
                $content = $this->message_format($site_id,$code_id,$phone);
                $this->json_format(array("ret"=>8,"code"=>$content));
            }
            /* //根据传入的site_id 与code_id 发送兑换码
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"]; */
            //执行发送操作
            $send_result=$this->send_message($site_id,$code_id,$phone,'');
            if($send_result){
                $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>'');
                $this->Phone->saveData($data);
                $this->json_format(array("ret"=>0));
            }else{
                $this->json_format(array("ret"=>5));
            }
        }catch (Exception $e){
            $this->log("log_error",$e->getMessage());
            $this->json_format(array("ret"=>7));
        }
    }

    /**
     *
     * 只是单纯的发送 兑换码的接口 提供json 或者 jsonp 数据 发送到页面
     */
    function send_code(){
        $this->layout="";
        $this->autoRender=false;
        try{
//             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id = isset($this->request->data["code_id"])?$this->request->data["code_id"]:"";

            if(empty($site_id) || empty($code_id)){
                $this->json_format(array("ret"=>1));
            }
            if ($code_id == 94 || $code_id == 95) {
                $site_id = 103;
            }
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                $this->json_format($result);
            }
            $code=$result["code"];
            $this->json_format(array("ret"=>0,"code"=>$code));
        }catch (Exception $e){
            $this->json_format(array("ret"=>7));
        }
    }

    function send_check_code(){
       if($this->request->is("post") && !empty($this->request->data)){
           if(empty($this->request->data["phone"])){
               $this->json_format(array("ret"=>1));
           }
           $site_id=$GLOBALS['site_id'];
           $phone=$this->request->data["phone"];
           $tel_result=preg_match('/^1[3456789]\d{9}$/', trim($phone));
           if($tel_result == 0){
               $this->json_format(array("ret"=>3));
           }
           //每人发送限制
           $conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"status"=>0));
           $count=$this->CodeCheck->find("count",$conditions);
           if($count > 10){
               $this->json_format(array("ret"=>9));
           }
           $code=rand(1000,9999);
           $content="你的校验码是:{$code}";
           $result=$this->send_phone($content,$phone);
           if($result){
               $data=array("site_id"=>$site_id,"phone"=>$phone,"code"=>$code);
               $this->CodeCheck->save($data);
               $this->json_format(array("ret"=>0));
           }else{
               $this->json_format(array("ret"=>5));
           }
        }
    }

    function check_code(){

        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["phone"]) || empty($this->request->data["code"])){
                $this->json_format(array("ret"=>1));
            }
            $site_id=$GLOBALS['site_id'];
            $phone=$this->request->data["phone"];
            $code=$this->request->data["code"];
            $tel_result=preg_match('/^1[3456789]\d{9}$/', trim($phone));
            if($tel_result == 0){
                $this->json_format(array("ret"=>3));
            }
            $conditions2=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"status"=>1));
            $result2=$this->CodeCheck->find("first",$conditions2);
            if(!empty($result2)){
                $this->json_format(array("ret"=>13));
            }
            $conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"code"=>$code,"status"=>0));
            $result=$this->CodeCheck->find("first",$conditions);
            if(empty($result)){
                $this->json_format(array("ret"=>10));
            }
            $id=$result["CodeCheck"]["id"];
            $this->CodeCheck->id=$id;
            if($this->CodeCheck->saveField("status",1)){
                $this->json_format(array("ret"=>0));
            }else{
                $this->json_format(array("ret"=>11));
            }
            //return $this->send_code();
        }
    }



    /**
     * 发送 短信信息
     * @param $site_id
     * @param $code_id
     * @param $phone
     * @param $code
     * @return bool
     *
     */
    function send_message($site_id,$code_id,$phone,$code){
        $content=$this->message_format($site_id,$code_id,$phone);
        if(!$content){
            return false;
        }
        $content=str_replace("\r\n","",$content);
        $content=sprintf($content,$code);

        return $this->send_phone($content,$phone);
    }

    function send_phone($content,$phone){
        $code="default";
        $data=array(
            "content"=>$content,
            "mobile"=>$phone,
            'code'=>$code,
            'tid'=>$this->site_id
            //"sign"=>md5(($content.$phone.$p_key) )
        );
        $api="http://sagent2.uu.cc/SMS/sa/sms/send";
        //$api="http://test.sms.uu.cc:8081/SMS/sa/sms/send";
        $result=$this->requestData($api,'post',$data);
        $result=json_decode($result,true);
        if( isset($result["ret"]) && $result["error_code"] == 0 ){
            return true;
        }else{
            return false;
        }
    }

   /*  function test(){
        $content ="teste这个是";
        $phone = '18614907129';
        $this->send_phone($content, $phone);
    } */

    private function create_code(){
        return rand(10000,99999);
    }
    /**
     * 返回短信文案内容
     * @param $site_id
     * @param $code_id 大于 100000 表示的发送验证码 code
     * @return mixed
     *
     */
    function message_format($site_id,$code_id,$phone){
        $message_format=array(
            '10'=>array(
                "69"=>"您的兑换码是：%s。复制后进入游戏激活使用。",
            ),
            "11"=>array(
                "40"=>"天降精英品鉴4月24号（周四）正式开启，激活码%s，下载地址http://sf.uu.cc/download，请下载安装后登录游戏输入",
                "100000"=>"你的验证码是%s,请输入此验证码"
            ),
            "18"=>array(
                "44"=>"恭喜您获得《美人记》内测大礼包，礼包兑换码：%s，游戏内点击更多选择礼品按钮兑换"
            ),
            '36'=>array(
                "54"=>"《幻想之心》20号删档封测礼包:%s"
            ),
            '26'=>array('46'=>'感谢您将和我们一起玩《烈焰遮天》，您抽中了{$str}，请携带工牌前往厂区银狐网吧领取奖品，需要出示本条短信，谢谢，第一PK手游《烈焰遮天》下载地址：sf.uu.cc，玩游戏送iPhone6！'
            ),
            '40'=>array(
                "50"=>"恭喜你获得《乐舞》心动首测限量激活码：%s，登录游戏论坛还能领取价值288元的超值大礼包，赶快行动起来吧！舞随心动，我们一起邂逅爱的味道~~"
            ),
            '46'=>array(
                "66"=>"您的兑换码是：%s。复制后进入游戏激活使用。",
                "68"=>"您的兑换码是：%s。复制后进入游戏激活使用。",
            ),
            '34'=>array(
                "64"=>"恭喜您获得《我爱台球》专属银票礼包，礼包兑换码：%s，游戏主界面点击精彩活动兑换！"
            ),
            '70'=>array(
                //"65"=>"少年我看你骨骼惊奇，面露红光，必是一颗修炼斗气的好苗子，只要勤加修炼迟早能够登顶斗帝，称霸斗气大陆，这里有我祖传多年的礼包：%s，请尽快下载游戏点击“领奖”使用，游戏下载：http://cqb.uu.cc"
                "65"=>"亲爱的小伙伴~！这里有我祖传多年的礼包：%s，请尽快下载游戏点击“领奖”使用，游戏下载：http://cqb.uu.cc",
                "67"=>"亲爱的小伙伴~！这里有我祖传多年的礼包：%s，请尽快下载游戏点击“领奖”使用，游戏下载：http://cqb.uu.cc"
            ),
            '82'=>array(
                "74"=>"亲爱的英雄，感谢您预约官网礼包，请记录您的礼包兑换码：%s；快来加入《HND英雄永不灭》，领取上线福利，一起杀怪闯关！下载地址：http://hnd.uu.cc/",
                "75"=>"亲爱的英雄，感谢您预约官网礼包，请记录您的礼包兑换码：%s；快来加入《HND英雄永不灭》，领取上线福利，一起杀怪闯关！下载地址：https://itunes.apple.com/app/id997242575"
            ),
            '79'=>array(
                "85"=>"亲爱的玩家：何炅代言，超人气消除手游《快乐点点消》火爆测试中，恭喜您获得礼包码【%s】，进入游戏后点击右下角更多→设置→兑换码，输入即可兑换，祝您游戏愉快。",
                "86"=>"亲爱的玩家：何炅代言，超人气消除手游《快乐点点消》火爆测试中，恭喜您获得礼包码【%s】，进入游戏后点击右下角更多→设置→兑换码，输入即可兑换，祝您游戏愉快。",
                "98"=>"亲爱的玩家：由何炅代言的超人气消除手游《快乐点点消》火爆测试中，恭喜您获得礼包码【%s】，进入游戏主界面后点击更多按钮→点击设置→输入兑换码，即可兑换，祝您游戏愉快！",
                "99"=>"亲爱的玩家：由何炅代言的超人气消除手游《快乐点点消》火爆测试中，恭喜您获得礼包码【%s】，进入游戏主界面后点击更多按钮→点击设置→输入兑换码，即可兑换，祝您游戏愉快！"
            ),
            '95'=>array(
                "88"=>"亲爱的圣迷！恭喜你获得《圣斗士星矢-集结》安卓限量礼包，礼包码【%s】，8月2日《圣斗士星矢-集结》全平台上线，敬请期待！",
                "89"=>"亲爱的圣迷！恭喜你获得《圣斗士星矢-集结》iOS限量礼包，礼包码【%s】，请进入游戏后点击右上角福利中心，选择左侧列表的兑换礼包并输入兑换码，点击领取~！《圣斗士星矢-集结》今日上线App Store，游戏下载：http://sds.uu.cc/download",
                "111"=>"亲爱的圣迷！恭喜你获得《圣斗士星矢-集结》iOS限量礼包，礼包码【%s】，请进入游戏后点击右上角福利中心，选择左侧列表的兑换礼包并输入兑换码，点击领取~！《圣斗士星矢-集结》两周年新版本已上线App Store，游戏下载：http://sds.uu.cc/download  ",
                "112"=>"亲爱的圣迷！恭喜你获得《圣斗士星矢-集结》安卓限量礼包，礼包码【%s】，8月15日《圣斗士星矢-集结》两周年版本已全新上线！快来体验吧！"
            ),
            '92'=>array(
                "92"=>"【冲吧航海王】感谢您的预约！您的预约码是：%s，立刻点击 https://op.uu.cc/download , 下载兑换安卓用户专属礼包吧，iOS用户稍安勿躁哦~我们的目标是，伟大航线的大秘宝！"
            ),
            '126'=>array(
                "103"=>"恭喜获得兑换码：%s 。加入官方Q群665625046领取更多福利",
                "104"=>"恭喜获得兑换码：%s 。加入官方Q群665625046领取更多福利"
            ),

            '130' => array(
                '108' => '亲爱的幸存者~恭喜你获得《废土行动》安卓限量礼包，礼包码%s，请进入游戏兑换，游戏下载：http://doomsday.uu.cc/download',
                '109' => '亲爱的幸存者~恭喜你获得《废土行动》IOS限量礼包，礼包码%s，请进入游戏兑换，游戏下载：http://doomsday.uu.cc/download'
            ),




        );
        if(!empty($site_id) && !empty($code_id)){
            return $message_format[$site_id][$code_id];
        }
        return false;
    }

    /**
     *下载页面
     */
    function download()
    {
        $file_name = '/themes' . DS . $this->directory_name . DS . 'download';


        try
        {
            $this->render($file_name);
        }
        catch (Exception $e)
        {

            $row=$this->Website->query("select `content` from `block` where `Abbr`='ios_download_url' and site_id=".$this->site_id);
            if(!$row)
                $ios_url='';
            else
                $ios_url=stripslashes(trim($row[0]['block']['content']));

            $row=$this->Website->query("select `content` from `block` where `Abbr`='android_download_url' and site_id=".$this->site_id);
            if(!$row)
                $android_url='';
            else
                $android_url=stripslashes(trim($row[0]['block']['content']));

            $wp_url='';
            $pc_url='';




            //如果是ios，直接跳转
            if(preg_match('/(iPhone|iPad|iPod|iOS)/i', $_SERVER['HTTP_USER_AGENT']) == 1 && $this->site_id == 98) {
                if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMesseng') == false) {
                //$download_url = str_replace(array('https','http'),'https',$ios_url);
                    header("Location:$ios_url");
                    exit;
                }

            }


            $agent=$_SERVER['HTTP_USER_AGENT'];
            $download_url1 = '';
            if(preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1)
            {
                $download_url1=$ios_url;
            }
            else if(preg_match('/Android/i', $agent) == 1)
            {
                $download_url1=$android_url;
            }
            else
            {

                $download_url1=$android_url;
            }


            //print_r($agent);
            $isTip=false;
            $isMobile=false;
            if(preg_match('/micromessenger/i', $agent) == 1 && $download_url1 != '')
                $isTip=true;
            if($this->site_id == 79)
                $isTip=false;



            if($isTip)
            {
                $tips_img = "//ld.uu.cc/ld.uu.cc/v2/images/tip.png";
                $margin = "30px";
                if ($this->site_id == 98) {
                    if (preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1) {
                        $tips_img = "//tanke.uu.cc/tanke.uu.cc/images/ios_tipsimg.jpg";
                    } else {
                        $tips_img = "//tanke.uu.cc/tanke.uu.cc/images/android_tipsimg.jpg";
                    }
                    $margin = "0px";
                }
                if ($this->site_id == 109) {
                    if (preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1) {
                        $tips_img = "//5.uu.cc/wxt.uu.cc/donwload_tips.jpg";
                    } else {
                        $tips_img = "//5.uu.cc/wxt.uu.cc/donwload_tips.jpg";
                    }
                    $margin = "0px";
                }

                if ($this->site_id == 95) {
                    $tips_img = "//sds.uu.cc/sds.uu.cc/images/tipsimg.jpg";
                }
                if($this->site_id == 79)
                    $bg='background-image:url("//ddx.uu.cc/manage/upload/image/ddx.uu.cc/2015-12-30/20151230_103616_793225.jpg");background-size:cover;background-position:center top;';
                else
                    $bg='background:rgba(0,0,0,.7)';
                echo <<<_HTML
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>
<style type="text/css">
*{margin:0;padding:0;}
h1{width:100%;height:100%;{$bg};position:absolute;top:0;right:0;left:0;bottom:0;display:none;}
h1 img{border:none;width:100%;margin:{$margin} auto;display:block;}
*{margin:0;padding:0;}
</style>
</head>
<body>
<h1><img src="{$tips_img}"/></h1>
<p></p>
</body>
</html>
<script type="text/javascript" src="//ld.uu.cc/ld.uu.cc/v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
window.onload = function(){
if(isWeiXin()){
var p = document.getElementsByTagName('p');
$('h1').show();
}
}
function isWeiXin(){
var ua = window.navigator.userAgent.toLowerCase();
if(ua.match(/MicroMessenger/i) == 'micromessenger'){

return true;
}else{

 var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            }


                if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
                    alert('敬请期待！');
                    //window.location.href ="//lnk8.cn/Y1Qdks";


                } else if (/(Android)/i.test(navigator.userAgent)) {
                    alert('敬请期待！');
                    //window.location.href ="//m.pt.cn/down/game/20012221110";

                }

return false;
}
}
</script>
_HTML;
                exit();

            }
            else if(preg_match('/(iPhone|iPad|iPod|iOS)/i', $agent) == 1)
            {
                $isMobile=true;
                $download_url=$ios_url;
                if(strlen(trim($download_url)) > 0 && !empty($this->server_info['android_stat_key']))
                    $this->do_stat($this->server_info['android_stat_key']);
            }
            else if(preg_match('/Android/i', $agent) == 1)
            {
                $isMobile=true;
                $download_url=$android_url;
                if(strlen(trim($download_url)) > 0 && !empty($this->server_info['ios_stat_key']))
                    $this->do_stat($this->server_info['ios_stat_key']);
            }
            else
            {

                $download_url=$android_url;
                if(strlen(trim($download_url)) > 0 && !empty($this->server_info['android_stat_key']))
                    $this->do_stat($this->server_info['android_stat_key']);
            }
            //var_dump($download_url);
            if(strlen(trim($download_url)) == 0)
            {
                echo <<<_HTML
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
</body>
</html>
<script type="text/javascript" src="//ld.uu.cc/ld.uu.cc/v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
$(function(){
    alert('敬请期待!');
});
</script>
_HTML;
                exit();
            }
            else if(strstr($download_url,'javascript'))
            {
                echo <<<_HTML
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
</body>
</html>
<script type="text/javascript" src="//ld.uu.cc/ld.uu.cc/v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
$(function(){
    {$download_url};
});
</script>
_HTML;
            }
            else
            {
                //$this->site_id != 79
                    //	LOG_INFO($download_url);
                    if($isMobile)
                    {
                        echo <<<_HTML
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
<div style="width:100%;font-size:4em;text-align:center;">正在努力跳转, 请稍候...</div>
</body>
</html>
<script type="text/javascript" src="//ld.uu.cc/ld.uu.cc/v2/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
$(function(){
    var url = "{$download_url}";
    setTimeout(function(){
        window.location.href=url;
      },2000);
});
</script>
_HTML;
                    }
                    else
                    {
                    $this->redirect($download_url);
                    }
            }
            $this->redirect('/404.html');
        }


    }


    function activity(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'activity';
        $this->render($file_name);
    }
    function cdkey(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'cdkey';
        $this->render($file_name);
    }
    function html5(){
        $wxSignPackage = $this->getWxSignPackage();
        if(!empty($wxSignPackage)){
            $this->set("wxSignPackage",$wxSignPackage);
        }
        $file_name = '/themes' . DS . $this->directory_name . DS . 'html5';
        $this->render($file_name);

    }

    function html5_info(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'html5_info';
        $this->render($file_name);
    }
    function mobile(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'mobile';
        $this->render($file_name);
    }
    function tg(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'tg';
        $this->render($file_name);
    }
    function static_game(){
        //var_dump($this->directory_name);
        $id = $this->request->params['id'];
        if(($first = strpos($this->directory_name,"wap")) != false){
            $this->directory_name =substr($this->directory_name,0,$first-1);
        }
        $view_path= "/themes".DS.$this->directory_name.DS."game".DS.$id;
        $this->render($view_path);

    }
    /**
     * 1111 表示调查 的code
     */
    public function survey(){
        $this->layout="";
        $this->autoRender=false;
        try{
            $phone=$this->request->data["phone"];
            $survey_list=$this->request->data["survey_list"];
            if(empty($phone) || empty($survey_list)){
                die(json_encode(array("ret"=>1,"msg"=>"必选条件不鞥为空")));
            }
            $isTrue=$this->Survey->findPhone($phone);
            if($isTrue){
                die(json_encode(array("ret"=>2,"msg"=>"你已经参加过调查")));
            }
            if(!preg_match("/^1[0-9]{1}[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$phone)){
                //验证不通过通过
                die(json_encode(array("ret"=>3,"msg"=>"手机号码格式不正确")));
            }
            $this->Survey->saveSurvey($phone,json_encode($survey_list));
            die(json_encode(array("ret"=>0,"msg"=>"成功参与")));
        }catch (Exception $e){
            die(json_encode(array("ret"=>4,"msg"=>"参加活动失败")));
        }
    }


    public function get_vote_count(){

       if($this->request->is("post")){
            $this->autoRender=false;
           if(empty($this->request->data["type"])){
              $this->export(array("ret"=>1,"msg"=>"参数为空"));
           }
           $type=$this->request->data["type"];
           $vote_list=$this->Vote->find("all",array("conditions"=>array("type"=>$type)));
           $vote_list=Set::classicExtract($vote_list,"{n}.Vote");
           $this->export(array("ret"=>0,"data"=>$vote_list));

       }
    }

    public function save_phone(){

        if($this->request->is("post")){
            $this->autoRender=false;
            if(empty($this->request->data["phone"]) || empty($this->request->data["type"]) || empty($this->request->data["id"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $phone = $this->request->data["phone"];
            $type = $this->request->data["type"];
            $id=$this->request->data["id"];
            unset($this->request->data["id"]);
            $collect_phone=$this->CollectPhone->find("first",array("conditions"=>array("phone"=>$phone,"type"=>$type)));
            if($collect_phone){
                $this->export(array("ret"=>2,"msg"=>"已经投过票了"));
            }
            $this->request->data['update_time']=null;
            if($this->CollectPhone->save($this->request->data)){
                $sql="update vote set count=count+1  where id=".intval($id);
                $this->Vote->query($sql);
                $this->export(array("ret"=>0,"msg"=>"投票成功"));
            }else{
                $this->export(array("ret"=>3,"msg"=>"已经投过票了"));
            }
        }
    }

    /**
     * 分享
     */
    public function act_share()
    {
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post")){
            $this->autoRender=false;
            if(empty($this->request->data["phone"]) || empty($this->request->data["gender"]) || empty($this->request->data["name"]) || empty($this->request->data["type"]) || empty($this->request->data["site"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $phone = $this->request->data["phone"];
            $type = $this->request->data["type"];
            $gender = $this->request->data['gender'];
            $site = $this->request->data['site'];
            $name = $this->request->data["name"];

            if($type == 'add'){
                $result = $this->add_act_share($this->request->data);
            }else if($type == 'update'){
                $result = $this->update_act_share($this->request->data);
            }
            $this->export(array("ret"=>$result['ret'],"msg"=>$result['msg']));
        }
    }

    private function add_act_share($data)
    {
        $result = array('ret'=>0,'msg'=>'命名成功！');
        $res = $this->ActShare->find("first",array("conditions"=>array("phone"=>$data['phone'],"site"=>$data['site'])));
        if($res){
            $result = array('ret'=>2,'msg'=>'手机号已经存在！');
            return $result;
        }
        $res = $this->ActShare->find("first",array("conditions"=>array("name"=>$data['name'],"site"=>$data['site'])));
        if($res){
            $result = array('ret'=>3,'msg'=>'mngming已经存在！');
            return $result;
        }
        $this->ActShare->save($data);
        return $result;
    }

    private function update_act_share($data)
    {
        $phone = $data['phone'];
        $sql = "update `act_share` set times = times+1 where `phone` = '{$phone}'";
        $this->ActShare->query($sql);
        $res = $this->ActShare->find("first",array("conditions"=>array("phone"=>$data['phone'],"site"=>$data['site'])));
        return array('ret'=>0,'msg'=>'更新成功！','times'=>$res['ActShare']['times']);
    }

    /**
     * 手机用户手机号
     */
    public function collect_phone(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if(empty($this->request->data["phone"])){
                    $this->export(array("ret"=>1,"msg"=>"参数为空"));
                }
                $phone = $this->request->data["phone"];
                $type = $this->request->data["type"];
                $collect_name = $this->request->data['collect_name'];
                $collect_phone=$this->CollectPhone->find("first",array("conditions"=>array("phone" => $phone, 'collect_name' => $collect_name, 'type' => $type)));
                if($collect_phone){
                    $this->export(array("ret"=>2,"msg"=>"已经预约过了"));
                }
                //$this->request->data['update_time']=null;
                if(!isset($this->request->data['type']) || strlen($this->request->data['type']) == 0)
                    $this->request->data['type']=2;
                if(isset($this->request->data['code_id']))
                $this->request->data['type']=$this->request->data['code_id'];
                //print_r($this->request->data);
                $input_data = $this->request->data;
                if (isset($input_data['code_id'])) {
                    unset($input_data['code_id']);
                }

                //路人sdk注册用户 2019-02-15 bowen.wan
                if ($this->site_id == 138) {
                    $api = "https://ul.uu.cc/sns/login";
                    if ($this->request->data['type']  == 1) {
                        $appsecret = Configure::read('mob100_sdk_ios_appsecret');
                        $appkey = Configure::read('mob100_sdk_ios_appkey');
                    } else {
                        $appsecret = Configure::read('mob100_sdk_android_appsecret');
                        $appkey = $appkey = Configure::read('mob100_sdk_android_appkey');
                    }

                    $data = array(
                        'login_name' => $phone,
                        'appkey'     => $appkey,
                        'code'       => $this->request->data['code'],
                        'grant_type' => 'authorization_code'
                    );
                    $data['sign'] = $this->genSdkSign($data, $appkey, $appsecret);
                    $result = json_decode($this->requestData($api, 'post', $data), true);
                    if ($result['code'] != 0) {
                        $this->export(array("ret" => $result['code'], "msg" => $result['desc']));
                    }
                    //获取用户信息
                    $api = "https://ul.uu.cc/sns/getUserinfo";
                    $data = array(
                        'token' => $result['result']['token_key'],
                        'appkey' => $appkey
                    );
                    $result = json_decode($this->requestData($api, 'post', $data), true);
                    if ($result['code'] == 0) {
                        $input_data['ext1'] = $result['result']['openid'];
                    } else {
                        $this->export(array("ret" => $result['code'], "msg" => $result['desc']));
                    }


                }

                if($this->CollectPhone->save($input_data)){
                    if($this->site_id==79)
                        $this->info('collect_phone='.print_r($this->request->data,true).print_r($_SERVER,true).print_r($_GET,true).print_r($_POST,true));
                    $this->export(array("ret"=>0,"msg"=>"预约成功"));
                }else{
                    $this->export(array("ret"=>3,"msg"=>"已经预约过了"));
                }
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }


    /**
     * 手机用户手机号
     */
    public function collect_phone_luren(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if(empty($this->request->data["collect_name"]) || empty($this->request->data["phone"]) || empty($this->request->data["code"]) || empty($this->request->data['type'])){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$this->request->data["collect_name"];
                $phone=$this->request->data["phone"];
                $code=$this->request->data["code"];
                $type = $this->request->data["type"];
                $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
                if($tel_result == 0){
                    $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
                }

                $collect_name = $site_id;
                $collect_phone=$this->CollectPhone->find("first",array("conditions"=>array("phone" => $phone, 'collect_name' => $collect_name)));
                if($collect_phone){
                    $this->export(array("ret"=>2,"msg"=>"已经预约过了"));
                }

                //$conditions=array("conditions"=>array("phone"=>$phone,"site_id"=>$site_id,"code"=>$code,"status"=>0));
                //$result=$this->CodeCheck->find("first",$conditions);
                //if(empty($result)){
                //    $this->export(array("ret"=>10, "msg"=>"验证码不合法"));
                //}

                //$id=$result["CodeCheck"]["id"];
                //$this->CodeCheck->id=$id;
                //if($this->CodeCheck->saveField("status",1)){
                
                //}else{
                //    $this->export(array("ret"=>11, "msg"=>"系统繁忙请重试"));
                //}
                //=============================================
                
                if(!isset($this->request->data['type']) || strlen($this->request->data['type']) == 0)
                    $this->request->data['type']=2;
                if(isset($this->request->data['code_id'])){
                    $this->request->data['type']=$this->request->data['code_id'];
                }
                
                $input_data = $this->request->data;
                if (isset($input_data['code_id'])) {
                    unset($input_data['code_id']);
                }

                //路人sdk注册用户 2019-02-15 bowen.wan
                //if ($this->site_id == 138) {
                    $api = "https://ul.uu.cc/sns/login";
                    if ($this->request->data['type']  == 1) {
                        $appsecret = Configure::read('mob100_sdk_ios_appsecret');
                        $appkey = Configure::read('mob100_sdk_ios_appkey');
                    } else {
                        $appsecret = Configure::read('mob100_sdk_android_appsecret');
                        $appkey = $appkey = Configure::read('mob100_sdk_android_appkey');
                    }

                    $data = array(
                        'login_name' => $phone,
                        'appkey'     => $appkey,
                        'code'       => $this->request->data['code'],
                        'grant_type' => 'authorization_code'
                    );
                    $data['sign'] = $this->genSdkSign($data, $appkey, $appsecret);
                    $result = json_decode($this->requestData($api, 'post', $data), true);
                    if ($result['code'] != 0) {
                        $this->export(array("ret" => $result['code'], "msg" => $result['desc']));
                    }
                    //获取用户信息
                    $api = "https://ul.uu.cc/sns/getUserinfo";
                    $data = array(
                        'token' => $result['result']['token_key'],
                        'appkey' => $appkey
                    );
                    $result = json_decode($this->requestData($api, 'post', $data), true);
                    if ($result['code'] == 0) {
                        $input_data['ext1'] = $result['result']['openid'];
                    } //else {
                    //    $this->export(array("ret" => $result['code'], "msg" => $result['desc']));
                    //}


                //}

                if($this->CollectPhone->save($input_data)){
                    if($this->site_id==79)
                        $this->info('collect_phone='.print_r($this->request->data,true).print_r($_SERVER,true).print_r($_GET,true).print_r($_POST,true));
                    $this->export(array("ret"=>0,"msg"=>"预约成功"));
                }else{
                    $this->export(array("ret"=>3,"msg"=>"已经预约过了"));
                }
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }

    public function check_phone()
    {
        try {
            $this->layout = "";
            $this->autoRender = false;
            if($this->request->is("post")) {
                $phone = $this->request->data['phone'];
                $collect_name = $this->site_id;
                $type = intval($this->request->data['type']);
                $label = $this->request->data['label'];
                $regex = '/^0?(13|14|15|16|17|18|19)[0-9]{9}$/';
                if(empty($phone) || !preg_match($regex, $phone)) $this->export(array("ret" => 1, "msg" => "参数错误"));
                $where['phone'] = $phone;
                $where['collect_name'] = $collect_name;
                if ($type) $where['type'] = $type;
                if ($label) $where['label'] = $label;
                //检查是否预约过
                $miniSign = $this->genMiniSign(array('miniPlayerId' => $phone));
                $result = $this->CollectPhone->find("first", array("conditions" => $where));
                if($result) $this->export(array("ret" => 4, "msg" => "该手机号码已预约", "data" => array('phone' => $phone, 'miniSign' => $miniSign)));
                $this->export(array("ret" => 5, "msg" => "该手机号码未预约", "data" => array('phone' => $phone, 'miniSign' => $miniSign)));
            }
        } catch ( Exception $e) {
            $this->export(array("ret" => 3, "msg" => "请求失败"));
        }
    }

    public function collect_email()
    {
        $this->layout="";
        $this->autoRender=false;

        if($this->request->is("post")){
        
            if(empty($this->request->data["email"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $email = trim($this->request->data["email"]);

            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if (!preg_match( $pattern, $email))
            {
                $this->export(array("ret"=>3,"msg"=>"邮件地址格式错误"));
            }

            $site_id=$this->site_id;

            $row=$this->CodeDetail->query("select `id` from collect_email where site_id=".$site_id." and email_address='".$email."'");
            if($row)
            {
                $this->export(array("ret"=>8,"msg"=>"已经报名"));
            }

            $this->CodeDetail->query("insert into collect_email values(NULL,".$site_id.",'".$email."',NULL)");
            $this->export(array("ret"=>0,"msg"=>"成功"));
        }

        $this->export(array("ret"=>1,"msg"=>"参数为空"));
    }

    public function collect_email2()
    {
        $this->layout="";
        $this->autoRender=false;

        if($this->request->is("post")){
            if(empty($this->request->data["email"])){
                $this->export(array("ret"=>1,"msg"=>"email参数为空"));
            }
            if(empty($this->request->data["user_name"])){
                $this->export(array("ret"=>1,"msg"=>"user_name参数为空"));
            }
            if(empty($this->request->data["content"])){
                $this->export(array("ret"=>1,"msg"=>"content参数为空"));
            }
            $email = trim($this->request->data["email"]);
            $userName = addslashes($this->request->data["user_name"]);
            $content = addslashes($this->request->data["content"]);
            if(strlen($content) > 200){
                $this->export(array("ret"=>2,"msg"=>"内容长度限制100字"));
            } 
            $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
            if (!preg_match( $pattern, $email))
            {
                $this->export(array("ret"=>3,"msg"=>"邮件地址格式错误"));
            }

            $site_id=$this->site_id;
            // $row=$this->CodeDetail->query("select * from collect_email where site_id=".$site_id." and email_address='".$email."'");
            // if($row)
            // {
            //     $this->export(array("ret"=>8,"msg"=>"已经委托了"));
            // }
            $data = array(
                'site_id'=>$site_id,
                'email_address'=>$email,
                'user_name'=>$userName,
                'content'=>$content
            );
            //"insert into collect_email values(NULL,".$site_id.",'".$email."','".$userName."','".$content."',NULL)"
            $row  = $this->CollectEmail->save($data);
            $row2 = $this->CollectEmail->query("select content from block where site_id=".$GLOBALS['site_id']." and Abbr = 'wt_img_switch'");
            $imgSwitch = $row2[0]['block']['content'];
            $this->export(array("ret"=>0,"msg"=>"成功",'img_switch'=>$imgSwitch));
        }

        $this->export(array("ret"=>1,"msg"=>"参数为空"));
    }

    /**
     * 悠悠树add手机号方法
     */
    public function add_yy_tel(){
        if($this->request->is("post")){
            if(empty($this->request->data["phone"]) || empty($this->request->data["site_id"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $telephone =$this->request->data["phone"];
            $site_id   =$this->request->data["site_id"];
            if($telephone and $site_id){
                $result=$this->YY->find('first',array('conditions'=>array('site_id'=>$site_id,'telephone'=>$telephone),'fields'=>array('id')));
                if($result){
                    $this->export(array('ret'=>1,'msg'=>'已经添加过手机号'));
                }else{
                    $result=$this->YY->save(array('site_id'=>$site_id,'telephone'=>$telephone));
                    if($result){
                        $this->export(array('ret'=>0,'msg'=>'成功参与'));
                     }else{
                        $this->export(array('ret'=>2,'msg'=>'添加失败'));
                    }
                }
            }
        }
    }

    public function get_yy_count(){
        if($this->request->is("post")){
            if(empty($this->request->data["site_id"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $site_id=$this->request->data["site_id"];
            if($site_id){
                $result=$this->YY->find('all',array('conditions'=>array('site_id'=>$site_id),'fields'=>array('id')));
                if($result){
                    $this->export(array('ret'=>0,'msg'=>'成功','data'=>count($result)+1));
                }else{
                    $this->export(array('ret'=>0,'msg'=>'第一个','data'=>0));
                }
            }
        }
    }
    //获取微信分享参数
    private function getWxSignPackage(){
        $host =  $this->server_info['directory_name'];
        //开发环境不用读取不同配置
        if(isset($_SERVER["PHP_ENV_MODE"]) && !empty($_SERVER["PHP_ENV_MODE"])){
            $ENV_MODE = $_SERVER["PHP_ENV_MODE"];
        }
        if(isset($ENV_MODE) && $ENV_MODE == "comm_dev"){//开发环境
            $config = Configure::read("WXSHARECONFIG_DEV");
        }else{
            $config = Configure::read("WXSHARECONFIG");
        }
        //如果用户有配置分享信息，则返回微信参数给前端
        if(!empty($config) && isset($config[$host])){
            APP::uses('WxApi', 'Vendor');
            $wxapi = new WxApi($config[$host]["appid"],$config[$host]["secret"]);
            $res = $wxapi->getSignPackage();
            return $res;
        }else{
            return false;
        }
    }
    //获取微信分享参数,html异步请求使用
    public function getWxShareParam(){
        $signPackage = $this->getWxSignPackage();
        if(empty($signPackage)){
            $result = array("ret"=>-1,"msg"=>"没有该站点配置信息！","data"=>array());
        }else{
            $result = array("ret"=>0,"msg"=>"success","data"=>$signPackage);
        }
        $this->export($result);
    }
    /**
    * 返回图片id。兑换码
    *
    *
    *
    */
    public function hx_gift_rand(){
        $this->layout="";
        $this->autoRender=false;
        try{
            //             $site_id=isset($this->request->data["site_id"])?$this->request->data["site_id"]:"";
            // 网站id不需要通过参数获得，直接从域名查询出来
            $site_id = $this->site_id;
            $code_id=isset($this->request->data["code_id"])?$this->request->data["code_id"]:"";
            if(empty($site_id) || empty($code_id)){
                $this->json_format(array("ret"=>1));
            }
            $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
            if(0 != $result["ret"]){
                if($result['ret']==4){
                    $this->json_format($result);
                }
            }
            $rand=array(array(2,7),array(6,9));
            $rand1=array_rand($rand);
            $rand2=array_rand($rand[$rand1]);
            $imgid=$rand[$rand1][$rand2];
            if($rand1==1 or $rand1==0){
                $code=$result["code"];
            }else{
                $code="false";
            }
            $this->json_format(array("ret"=>0,"code"=>$code,'imgid'=>$imgid));
        }catch (Exception $e){
            $this->json_format(array("ret"=>7));
        }

    }

    public function hx_send_tel(){
        $this->autoRender=false;
        if(!($this->request->data["phone"]) && $this->request->data['site_id'] && $this->request->data['code_id'] && $this->request->data['imgid']){
               echo json_encode(array('code'=>'-1','msg'=>'参数错误，不能为空手机号'));die;
        }
        $phone=$this->request->data["phone"];
        $this->loadModel('Gift');
        $imgid=$this->request->data['imgid'];
        $result=$this->Gift->save($this->request->data);
        $content="幻想之心11月20日心跳首测，您已成功获得幻想先遣团资格码{$this->request->data['code']}，关注微信公众号hxzx2014拿更多福利！";
        $res=$this->send_phone($content,$phone);
         if($result && $res){
            echo json_encode(array('code'=>0,'msg'=>'发送成功'));die;
        }


    }
    /**
    *
    *
    */

    public function send_telephone(){
        $this->autoRender=false;
        if(!($this->request->data["phone"]) && $this->request->data['site_id'] && $this->request->data['code_id'] && $this->request->data['imgid']){
               echo json_encode(array('code'=>'-1','msg'=>'参数错误，不能为空手机号'));die;
        }
        $phone=$this->request->data["phone"];
        if($phone){
            $this->loadModel('Gift');
            $imgid=$this->request->data['imgid'];
            $result=$this->Gift->save($this->request->data);//var_dump($result);die;
            if($imgid){
                switch($imgid){

                    case 4:
                        $str='50元话费卡X1';
                    break;

                    case 2:
                        $str='100元话费卡X1';
                    break;

                    case 8:
                        $str='移动电源X1';
                    break;

                }
            }
        }

        $content="感谢您将和我们一起玩《烈焰遮天》，您抽中了{$str}，请携带工牌前往厂区银狐网吧领取奖品，需要出示本条短信，谢谢，第一PK手游《烈焰遮天》下载地址：sf.uu.cc，玩游戏送iPhone6！";
        $res=$this->send_phone($content,$phone);
         if($result && $res){
            echo json_encode(array('code'=>0,'msg'=>'发送成功'));die;
        }
    }
    /**
    *
    * 抽奖活动返回中奖数据图片
    *
    */
    public function rand_gift(){
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["site_id"]) || empty($this->request->data["code_id"]) ){
                $this->json_format(array("ret"=>1));
            }
           // $site_id=$this->request->data["site_id"];
            $imgid=$this->_show_rand($rand_gift=array(4=>'gift_one',2=>'gift_two',8=>'gift_three'));
            $result=$this->_gifts(26,46,$imgid);//var_dump($this->Session->read('imgid'));die;
            //$this->Session->write('member',$imgid);
            echo json_encode($result);die;

        }
    }


    /**
     * 乐舞 歌曲名征名活动
     * 保存歌曲名和提交者手机号，对应表act_music
     * @author jerry.hua
     * @version 2015-03-06
     */
    public function saveMusic(){
        $this->layout="";
        $this->autoRender=false;
        $result = array(
            'status' => 0,
            'message' => '参数错误'
        );
//        var_dump($this->request->query);
        if( empty($this->site_id) || empty($this->data) ){ // 域名不正确或没有数据则跳转首页
            exit( json_encode($result) );
        }
        $data = $this->data;

        foreach ($data as &$value) {
            $value = trim($value);
        }

        $data['site_id'] = $this->site_id;
        $saveResult = $this->ActMusic->save( $data );

        $result['status'] = $saveResult ? 1 : 0;
        $result['message'] = $saveResult ? '提交成功' : '歌曲名或手机号的格式错误，请重新填写';
        exit(json_encode($result));
    }

    /**
    *  当礼品抽完时则不能抽这个$level礼品
    *	$id
    *   $code_id
    *	$imgid
    *	$level
    */
    private function _gifts($id=26,$code_id=46,$imgid){
        if($imgid ){
            $this->loadModel('Gift');
            $result=$this->Gift->find('all',array('conditions'=>array('site_id'=>$id,'code_id'=>$code_id,'imgid'=>$imgid)));
            $total=count($result);
            // 这个是小奖50元的 10张
            if($imgid==2){
                if($total<=10){
                    $data=array('site_id'=>26,'code_id'=>46,'imgid'=>$imgid);
                    $result=$this->Gift->save($data);
                    if($result){
                        return array('code'=>0,'msg'=>'抽中了奖','imgid'=>$imgid);
                    }else{
                        return array('code'=>-1,'msg'=>'保存失败');
                    }
                }else{
                    //$imgid=$this->_show_rand();
                    return array('code'=>-2,'msg'=>'奖品已经抽完','imgid'=>7);
                }
            }else if($imgid==8){// 这个是小奖100元的 5张
                if($total<=5){
                    $data=array('site_id'=>26,'code_id'=>46,'imgid'=>$imgid);
                    $result=$this->Gift->save($data);
                    if($result){
                        return array('code'=>0,'msg'=>'抽中了奖','imgid'=>$imgid);
                    }else{
                        return array('code'=>-1,'msg'=>'保存失败');
                    }
                }else{
                    return array('code'=>-2,'msg'=>'奖品已经抽完','imgid'=>7);
                }

            }else if($imgid==4){ // 这个是电源 5个
                if($total<=5){
                    $data=array('site_id'=>26,'code_id'=>46,'imgid'=>$imgid);
                    $result=$this->Gift->save($data);
                    if($result){
                        return array('code'=>0,'msg'=>'抽中了奖','imgid'=>$imgid);
                    }
                }else{
                    return array('code'=>-2,'msg'=>'奖品已经抽完','imgid'=>7);
                }
            }else{ //$imgid=1;

                return array('code'=>1,'msg'=>'没有抽中奖','imgid'=>$imgid);
            }

        }else{
            return array('code'=>1,'msg'=>'没有抽中奖','imgid'=>$imgid);
        }

    }

    private function _show_rand($rand_gift=array(4=>'gift_one',2=>'gift_two',8=>'gift_three')){
        //$rand_gift=array(4=>'gift_one',2=>'gift_two',8=>'gift_three');
        $level=array_rand($rand_gift,1);
        switch($level){
            case 4:// 4是移动电源
                $imgid=rand(1,3000);
                if( $imgid !==4 ){
                    $imgid=7;
                }
                //echo json_encode(array('imgid'=>$imgid,'msg'=>'50卡  1/1000'));
            break;
            case 2: // 2是50元充值卡
                $imgid=rand(1,1000);
                if($imgid !=2){
                    $imgid=7;
                }
                //echo json_encode(array('imgid'=>$imgid,'msg'=>'100卡  1/2000'));
            break;

            case 8: // 8是100元充值卡
                $imgid=rand(1,2000);
                if($imgid !==8 ){
                    $imgid=7;
                }
                //echo json_encode(array('imgid'=>$imgid,'msg'=>'充电宝 1/3000'));
            break;
        }
        return $imgid;
    }

    public function getNewsCount()
    {
        $categoryId = $this->request->params['categoryid'];
        if(strstr($categoryId,','))
        {
            $row=$this->News->query("select count(*) as c from news where news_categories_id in (".$categoryId.")");
            $response['count']=intval($row[0][0]['c']);
        }
        else
        {
            $row=$this->News->query("select count(*) as c from news where news_categories_id =".intval($categoryId));
            $response['count']=intval($row[0][0]['c']);
        }
        exit(json_encode($response));
    }

    //获取配置数据
    public function getDatas() {
        $type = $this->request->params['type'];
        $page = $this->request->params['page'];

        if ($page < 1) {
            $page = 1;
        }
        $num = 12;
        $start = ($page - 1) * $num;
        $sql = "select str1,str3 from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
        $total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
        $total = $this->News->query($total_sql);
        $total = $total[0][0]['cnt'];
        $list = $this->News->query($sql);
        $data = array();
        foreach ($list as $k => $v) {
            $data[] = '<li><img name="'.$v['datas']['str1'].'" src="'.$v['datas']['str3'].'"></li>';
        }
        $page_total = ceil($total/$num);
        exit(json_encode(array('ret' => 1,'data' => $data,'page_total' => $page_total,'current_page' => $page)));
    }

    public function ajaxGetDatas() {
        $type = $this->request->params['type'];
        $page = $this->request->params['page'];

        if ($page < 1) {
            $page = 1;
        }
        $num = 12;
        if (isset($_GET['num']) && $_GET['num'] > 0) {
            $num = $_GET['num'];
        }
        $start = ($page - 1) * $num;
        $sql = "select str1,str2,str3 from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
        $total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
        $total = $this->News->query($total_sql);
        $total = $total[0][0]['cnt'];
        $list = $this->News->query($sql);
        $data = array();
//     	foreach ($list as $k => $v) {
//     		$data[] = '<li><img name="'.$v['datas']['str1'].'" src="'.$v['datas']['str3'].'"></li>';
//     	}
        $page_total = ceil($total/$num);
        exit(json_encode(array('ret' => 1,'data' => $list,'page_total' => $page_total,'current_page' => $page)));
    }

    /**
     * 返回某一页新闻的信息，json格式
     * @param int $page
     * @param int $categoryid
     * @param int $limit
     * @return string
     */
    public function getMoreNews(){
        $result = array(
                'status' => 0,
                'data' => ''
        );

        $page = (int)$this->request->params['page'];
        $categoryId = $this->request->params['categoryid'];
        $limit = (int)$this->request->params['limit'];
        $offest = $page * $limit;

        if(strstr($categoryId,','))
        {
            $news = $this->News->getContentByCategoryIdsAndSiteId($this->site_id,$categoryId,$page, $limit);
        }
        else
        {
            $categoryId=intval($categoryId);
            $news = $this->News->getContentByCategoryIdAndSiteId($this->site_id, $categoryId, $offest, $limit);
        }

        $newsCategory = $this->NewsCategory->getCategoryList($this->site_id);

        foreach ($news as $key => $value) {
            $list[$key]['id'] = $news[$key]['id'];
            $list[$key]['title'] = $news[$key]['title'];
            $list[$key]['news_categories_id'] = $news[$key]['news_categories_id'];
            $list[$key]['news_category'] = $newsCategory[$news[$key]['news_categories_id']];
            $list[$key]['created'] = date("m/d", $news[$key]['created']);
            $list[$key]['updated'] = date("m/d", $news[$key]['updated']);
            $list[$key]['site_id'] = $news[$key]['site_id'];
            $list[$key]['small_url'] = $news[$key]['small_url'];
            $list[$key]['content'] = $news[$key]['content'];
        }

        if ($news) {
            $result = array(
                    'status' => 1,
                    'data' => $list
            );
        }
        exit(json_encode($result));
    }

    public function getMoreUserScores()
    {
        $site_id=intval($this->request->data["site_id"]);
        $location=mysql_escape_string($this->request->data["location"]);
        $actname=mysql_escape_string($this->request->data["actname"]);
        $page=intval($this->request->data["page"]);
        $count=intval($this->request->data["count"]);
        if($count == 0)
            $count=10;

        $rows=$this->News->query("select * from user_score where site_id=".$site_id." and location='".$location."' and act_name='".$actname."' order by --rank asc limit ".($page*$count).",".$count);
        $len=count($rows);
        $records=array();
        for($i=0;$i<$len;$i++)
        {
            array_push($records,array('rank'=>$rows[$i]['user_score']['rank'],'nickname'=>$rows[$i]['user_score']['nickname'],'score'=>$rows[$i]['user_score']['score']));
        }
        $this->export($records);
    }

    public function test()
    {
        $url = $this->get_complete_rul();
        var_dump($url);exit;
    }

    /**
     * 微信分享接口
     */
    public function get_share_api()
    {
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post")){
            $this->autoRender=false;
            $result = array();
            if(empty($this->request->data["app_name"])){
                $this->export(array("ret"=>1,"msg"=>"参数为空"));
            }
            $url = $this->request->data["url"];
            $app_name = $this->request->data["app_name"];//'gh_dd1784538b1e';//
            $app_info = $this->get_app_info($app_name);
            $result['appid'] = $app_info['appid'];
            $result['timestamp'] = time();
            $result['nonceStr']  = $this->getRandChar(16);//16wei;
            $result['signature'] = $this->get_signature($result['nonceStr'], $result['timestamp'],$app_info['appid'],$app_info['appsecret'],$url);
            //$this->info(print_r($result,true));
            $this->info('get_share_api,'.$app_name);
            $this->export(array("ret"=>0,"msg"=>"获取成功",'data'=>$result));
        }
    }

    /**
     * data[WebsiteImage][big_url]参数名字
     */
    public function up_img()
    {
        $target = "game";
        $file = $this->Image->upload('WebsiteImage', 'small_url', $target, $this->_upload_limit);
        $result = array('file'=>$file);
        $this->export(array("ret"=>0,"msg"=>"获取成功",'data'=>$result));
    }

    /**
     * 百度推广[ddx.uu.cc]使用
     * Enter description here ...
     *
     */
    function bdpz(){
        $file_name = '/themes' . DS . $this->directory_name . DS . 'bdpz';
        $this->render($file_name);
    }
    function bdpz1(){ $file_name = '/themes' . DS . $this->directory_name . DS . 'bdpz1'; $this->render($file_name);}
    function bdpz2(){ $file_name = '/themes' . DS . $this->directory_name . DS . 'bdpz2'; $this->render($file_name);}
    function bdpz3(){ $file_name = '/themes' . DS . $this->directory_name . DS . 'bdpz3'; $this->render($file_name);}

    function index_num() {
        $id = $this->request->params['id'];
        $name = "index".$id;

        if ($this -> RequestHandler -> isMobile()) {
             $this->directory_name =  $this->directory_name . DS . 'wap';
        }


        $file_name = '/themes' . DS . $this->directory_name . DS . $name;
        //echo $file_name;
        $this->render($file_name);
    }

    /**
     * 视频中心[用于快乐点点消]
     *
     */
    function vediocenter()
    {
        $type = intval($this->request->params['type']);
        //if (!in_array($type,array(0,5,2,3,4))) $type = 0;

        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;

        $this->set("type",$type);
        $this->set("page",$page);
         $file_name = '/themes' . DS . $this->directory_name . DS . 'vediocenter';
         //echo $file_name;exit;
         $this->render($file_name);

    }

    /**
     * 视频中心[用于快乐点点消]
     *
     */
    function media_appreciate()
    {
        $type = intval($this->request->params['type']);
        //if (!in_array($type,array(0,5,2,3,4))) $type = 0;
        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;
        $this->set("type",$type);
        $this->set("page",$page);
         $file_name = '/themes' . DS . $this->directory_name . DS . 'media_appreciate';
         //echo $file_name;exit;
         $this->render($file_name);

    }


    private function genMiniSign($data){
        foreach ($data as $k => $v) {
            if(!in_array($k, array('miniPlayerId'))){
                unset($data[$k]);
            }
        }
        ksort($data);
        $key = Configure::read('mini_game_choujiang_key');
        $str = http_build_query($data) . $key;

        return md5($str);
    }

    private function genSdkSign(array $data, $appkey, $appsecret)
    {
        $data['appkey'] = $appkey;
        ksort($data);
        $query = http_build_query($data) . '&' . $appsecret;
        return md5($query);
    }


    //游戏资料
    function suspense() {

        

        $cid = intval($this->request->params['id']);
        if(preg_match('/all/', $cid)){
            $cid = $this->get_all_cid($this->site_id);
        }

        $page = isset($this->request->params['page']) ? $this->request->params['page'] : 0;
        $this->set("category_id",$cid);
        $GLOBALS['current_category_id']=$cid;
        $this->set("page",$page);
        $GLOBALS['current_page']=$page;
        $template=$this->request->params['template'];
        try {
            if(strlen($template) > 0)
                $file_name = '/themes' . DS . $this->directory_name . DS . $template;
            else
            {
                $file_name = '/themes' . DS . $this->directory_name . DS . 'suspense';
            }

            $this->render($file_name);
        } catch (Exception $e) {
            //查询数据失败跳转到首页
            $this->info('Access fail '.$e->getMessage());

            $this->redirect('/');
        }
    }

    /**
     * 发送短信验证码
     */
    public function send_code_common(){
        $this->layout="";
        $this->autoRender=false;
        if($this->request->is("post") && !empty($this->request->data)){
            if(empty($this->request->data["phone"])){
                $this->export(array("ret"=>1,"msg"=>"缺少参数"));
            }
            $site_id=$GLOBALS['site_id'];
            $phone=$this->request->data["phone"];
            $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
            if($tel_result == 0){
                $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
            }
            // $collect_phone=$this->CollectPhone->find("first",array("conditions"=>array("phone" => $phone, 'collect_name' => $site_id)));
            // if($collect_phone){
            //     $this->export(array("ret"=>2,"msg"=>"已经预约过了"));
            // }
            $api = "http://ul.uu.cc/sns/getcode";
            $data = array(
                'type'   => 'login',
                'mobile' => $phone,
                'client_ip' => $this->getRealIp(),
            );
            $result = json_decode($this->requestData($api, 'post', $data), true);
            if (isset($result['code']) && $result['code'] == 0) {
                $this->export(array("ret" => 0, "msg"=>"发送成功"));
            } else {
                $this->export(array("ret" => $result['code'], "msg"=>$result['desc']));
            }
        }
    }

    public  function getRealIp()
    {
        $ip=FALSE;
        //客户端IP 或 NONE
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        //多重代理服务器下的客户端真实IP地址（可能伪造）,如果没有使用代理，此字段为空
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
            for ($i = 0; $i < count($ips); $i++) {
                if (!preg_match("/^(10│172.16│192.168)./", $ips[$i])) {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        //客户端IP 或 (最后一个)代理服务器 IP
        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

    public function getInviteCnt(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if( empty($this->request->data["phone"]) ){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$GLOBALS['site_id'];
                $phone=$this->request->data["phone"];
                $cnt = $this->InviteLog->find('count', array('inviter'=>$phone,'site_id'=>$site_id));
                $this->export(array("ret"=>0,"msg"=>"ok",'invite_count' => $cnt));
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }

    /**
     *
     *发送兑换码 并且需要收集收集手机号的 接口  发送到手机里面
     * post 请求 参数列表
     * site_id  站点id
     * code_id  兑换码 id
     *
     */
    function collect_phone_return_gift_common(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if( empty($this->request->data["phone"]) || empty($this->request->data["code"]) ){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$GLOBALS['site_id'];
                $phone=$this->request->data["phone"];
                $code=$this->request->data["code"];
                $tel_result=preg_match("/1[3,4,5,6,7,8,9]{1}[0-9]{1}[0-9]{8}|0[0-9]{2,3}-[0-9]{7,8}(-[0-9]{1,4})?/", $phone);
                //校验手机号
                if($tel_result == 0){
                    $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
                }
                //检验验证码
                $api = "https://ul.uu.cc/sns/login";
                $this->request->data['type'] = 1;
                if ($this->request->data['type']  == 1) {
                    $appsecret = Configure::read('mob100_sdk_ios_appsecret');
                    $appkey = Configure::read('mob100_sdk_ios_appkey');
                } else {
                    $appsecret = Configure::read('mob100_sdk_android_appsecret');
                    $appkey = $appkey = Configure::read('mob100_sdk_android_appkey');
                }

                $data = array(
                    'login_name' => $phone,
                    'appkey'     => $appkey,
                    'code'       => $this->request->data['code'],
                    'grant_type' => 'authorization_code'
                );
                $data['sign'] = $this->genSdkSign($data, $appkey, $appsecret);
                $result = json_decode($this->requestData($api, 'post', $data), true);
                if ($result['code'] != 0) {
                    $this->export(array("ret" => $result['code'], "msg" => $result['desc']));
                }
                $code_id=isset($this->request->data["act_id"]) ? $this->request->data["act_id"] : 117;
                //如果发送过 直接发送给用户
                $result=$this->Phone->getCodeByPhone($site_id,$code_id,$phone);
                if($result){
                    $code=$result["Phone"]["code"];
                    $this->export(array("ret"=>8,"code"=>$code,"msg"=>"已经领取过了"));
                }
                //根据传入的site_id 与code_id 发送兑换码
                $result=$this->CodeDetail->getCodeByAppIdAndCodeId($site_id,$code_id);
                if(0 != $result["ret"]){
                    $this->export($result);
                }
                $code=$result["code"];

                $data=array("site_id"=>$site_id,"code_id"=>$code_id,"phone"=>$phone,"code"=>$code);
                $this->Phone->saveData($data);
                $this->export(array("ret"=>0,"code"=>$code,"msg"=>"领取成功"));
            }else{
                $this->export(array("ret"=>101,"msg"=>"非法请求"));
            }    
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }

    public function ajaxGetData() {
        $type = $this->request->params['type'];
        $page = $this->request->params['page'];

        if ($page < 1) {
            $page = 1;
        }
        $num = 10;
        if (isset($_GET['num']) && $_GET['num'] > 0) {
            $num = $_GET['num'];
        }
        $start = ($page - 1) * $num;
        $sql = "select str1,str2,str3,str4,str5,str6,str7,str8,str9,str10,str11 from datas where type = '$type' and site_id = ".$this->site_id." limit $start,$num";
        $total_sql = "select count(*) cnt from datas where type = '$type' and site_id = ".$this->site_id;
        $total = $this->News->query($total_sql);
        $total = $total[0][0]['cnt'];
        $list = $this->News->query($sql);
        $data = array();
        if(!empty($list)){
            $res = array();
            foreach ($list as $value) {
		if($type == 99){
			$res['qq_qrcode'] = $value['datas']['str1'];
                $res['weixin_qrcode'] = $value['datas']['str2'];
                $res['weibo_url'] = $value['datas']['str3'];
                if(!empty($value['datas']['str4'])){
                    $res['qq_jump_url'] = $value['datas']['str4'];
                }
		$res['weibo_qrcode'] = $value['datas']['str5'];
		$res['luntan_url'] = $value['datas']['str6'];
		$res['download_qrcode'] = $value['datas']['str7'];
		$res['kefu_url'] = $value['datas']['str8'];
		$res['shequn_url'] = $value['datas']['str9'];
		$res['android_download_url'] = $value['datas']['str10'];
		$res['ios_download_url'] = $value['datas']['str11'];
		}else{
			$res['pic_url'] = $value['datas']['str1'];
                    $res['jump_url'] = $value['datas']['str2'];
                   $res['title'] = $value['datas']['str3'];
                 if(!empty($value['datas']['str4'])){
                    $res['desc'] = $value['datas']['str4'];
                 }

		}
                $data[] = $res;
            }
        }
        $page_total = ceil($total/$num);
        exit(json_encode(array('ret' => 0,'data' => $data,'page_total' => $page_total,'current_page' => $page)));
    }

    public function getArticleCategory() {
        $data = $this->NewsCategory->getCategoryList($this->site_id);
        exit(json_encode(array('ret' => 0,'data' => $data)));
    }

    /**
     * 返回某一页文章的信息，json格式
     * @param int $page
     * @param int $categoryid
     * @param int $limit
     * @return string
     */
    public function getArticleList(){
        $result = array(
                'status' => 0,
                'data' => '',
                'ret' => 0
        );

        $page = (int)$this->request->params['page'];
        $categoryId = $this->request->params['categoryid'];
        $limit = (int)$this->request->params['limit'];
        $offest = $page * $limit;

        if(strstr($categoryId,','))
        {
            $news = $this->News->getContentByCategoryIdsAndSiteId($this->site_id,$categoryId,$page, $limit);
        }
        else
        {
            $categoryId=intval($categoryId);
            $news = $this->News->getContentByCategoryIdAndSiteId($this->site_id, $categoryId, $offest, $limit);
        }

        $newsCategory = $this->NewsCategory->getCategoryList($this->site_id);

        foreach ($news as $key => $value) {
            $list[$key]['id'] = $news[$key]['id'];
            $list[$key]['title'] = $news[$key]['title'];
            $list[$key]['news_categories_id'] = $news[$key]['news_categories_id'];
            $list[$key]['news_category'] = $newsCategory[$news[$key]['news_categories_id']];
            $list[$key]['created'] = $news[$key]['created'];
            $list[$key]['updated'] = $news[$key]['updated'];
            //$list[$key]['small_url'] = $news[$key]['small_url'];
            //$list[$key]['jump_url'] = '/show/'.$news[$key]['id'].'.html'; 
            //$list[$key]['content'] = $news[$key]['content'];
        }
        $total_sql = "select count(*) cnt from news where news_categories_id = '$categoryId' and site_id = ".$this->site_id;
        $totalArr = $this->News->query($total_sql);
        $total = $totalArr[0][0]['cnt'];
        if ($news) {
            $page_total = ceil($total/$limit);
            $result = array(
                    'status' => 0,
                    'ret' => 0,
                    'data' => $list,
                    'page_total' => $page_total,
                    'current_page' => $page
            );
        }
        exit(json_encode($result));
    }

    /**
     * 返回某一条文章的信息，json格式
     * @param int $id
     * @return string
     */
    public function getArticleInfo(){
        $result = array(
                'ret' => 0,
                'data' => ''
        );
        $id = $this->request->query['id'];
        $conditions = array();
        $conditions['conditions']['id'] = $id;
        $news = $this->News->find("first",  $conditions);
        if(!empty($news)){
            $info  = array();
            $info['content'] = stripcslashes(str_replace("http://".$_SERVER['HTTP_HOST'].'/manage',"//game-resource.uu.cc/manage",$news['News']['content']));
            $info['title'] = $news['News']['title'];
            $info['created'] = $news['News']['created'];
            $info['updated'] = $news['News']['updated'];
            $result['data'] = $info;
        }
        exit(json_encode($result));
    }

     /**
     * 返回游戏导航信息
     */
    public function getNavigationInfo(){
        $result = array(
                'ret' => 0,
                'data' => ''
        );
        $conditions = array();
        $conditions['conditions']['is_show_navigation'] = 1;
        $conditions['order'] = 'sort';
        $games = $this->Website->find("all",  $conditions);
        if(!empty($games)){
            $ret = array();
            foreach($games as $game){
                $data['name'] = $game['Website']['name'];
                $data['icon'] = $game['Website']['icon'];
                $data['tag'] = $game['Website']['tag'];
                $data['url'] = $game['Website']['domain_name'];
                $ret[$game['Website']['type']][] = $data;
            }
            $result['data'] = $ret;
        }
        exit(json_encode($result));
    }

    /**
     * 返回游戏模板和皮肤信息
     */
    public function getConfig(){
        $result = array(
                'ret' => 0,
                'data' => ''
        );
        $type = $this->request->query['type'];
        $conditions = array();
        $conditions['conditions']['site_id'] = $GLOBALS['site_id'];
        $pre = $this->request->query['pre'];
        $conditions['conditions']['status'] = 1;
        if(isset($pre) && $pre == 1){
            $conditions['conditions']['status'] = 2;
        }
        if($type == 1){
            $templateConfigArr = $this->PcTemplateConfig->find("first",  $conditions);
            $templateConfig = $templateConfigArr['PcTemplateConfig'];
            $conditions['conditions']['template_id'] = $templateConfig['id'];
            unset($conditions['conditions']['site_id']);
            unset($conditions['conditions']['status']);
            $skinConfigArr = $this->PcSkinConfig->find("first",  $conditions);
            $skinConfig = $skinConfigArr['PcSkinConfig'];
        }elseif ($type == 2) {
            $templateConfigArr = $this->WapTemplateConfig->find("first",  $conditions);
            $templateConfig = $templateConfigArr['WapTemplateConfig'];
            $conditions['conditions']['template_id'] = $templateConfig['id'];
            unset($conditions['conditions']['site_id']);
            unset($conditions['conditions']['status']);
            $skinConfigArr = $this->WapSkinConfig->find("first",  $conditions);
            $skinConfig = $skinConfigArr['WapSkinConfig'];
        }
        $data = array();
        $data['templateConfig'] = $templateConfig;
        $data['skinConfig'] = $skinConfig;
        //新增打点配置
        $conditions = array();
        $conditions['conditions']['id'] = $GLOBALS['site_id'];
        $game = $this->Website->find("first",  $conditions);
        $data['reportConfig']['game_id'] = $game['Website']['game_id'];
        $data['reportConfig']['game_key'] = $game['Website']['game_key'];
        //新增网站基本配置
        $data['basicConfig']['game_ico'] = $game['Website']['game_ico'];
        $data['basicConfig']['website_name'] = $game['Website']['website_name'];
        $data['basicConfig']['website_seo'] = $game['Website']['website_seo'];
        $data['basicConfig']['website_desc'] = $game['Website']['website_desc'];
        $result['data'] = $data;
        exit(json_encode($result));
    }

    /**
     * 预约获取验证码接口(对接微服务预注册账号)
     */
    public function collect_phone_send_code(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if(empty($this->request->data["phone"]) || empty($this->request->data['type'])){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$GLOBALS['site_id'];
                $phone=$this->request->data["phone"];
                $type = $this->request->data["type"];
                if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                    $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
                }
                if($type == "android"){
                    $AppKey    = '6dOhZOfrZymdy8AF6pul';
                    $AppSecret = 'lLsBqxKX8PTtoeVVqUOi';
                }
                if($type == "ios"){
                    $AppKey    = 'X3JSUpag9AAdHvjVPjEL';
                    $AppSecret = 'UEDTQDuZqU6X1HjpuKP2';
                }
                $url        = "https://pub-gw.uu.cc/public-gateway/ms-usercenter/sdk_/messageSend/verifyCode?phone=".trim($phone);
                $Nonce      = self::createNonceStr(4);
                $Timestamp  = self::getMillisecond();
                $phone      = trim($phone);
                $SignatureArr = array(
                    'AppKey' => $AppKey,
                    'Nonce' => $Nonce,
                    'Timestamp' => $Timestamp,
                );
                $SignatureArr['phone'] = $phone;
                ksort($SignatureArr);
                $UserAgent  = "platform:CP;channel:CP;appVersion:1.0.0;package:com.cp.sdk;sdkVersion:1.0.0;sdkName:MSSDK;networkType:WiFi;deviceBrand:common;deviceId:00000000;localTime:2019-01-01 00:00:00";
                $Signature = urlencode(md5($AppSecret.'&'.http_build_query($SignatureArr).'&'.$AppSecret));
                $header     = array('Content-Type:application/json','User-Agent:'.$UserAgent,'Accept-Language:zh_CN','AppKey:'.$AppKey,'Nonce:'.$Nonce,'Timestamp:'.$Timestamp,'Signature:'.$Signature);
                $result   = self::tocurl($url,$header);
                if ($result) {
                    $this->export(array("ret"=>0,"msg"=>"验证码已发送成功"));
                } else {
                    $this->export(array("ret"=>-1,"msg"=>"验证码发送失败，请重新尝试！"));
                }
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }

    /**
     * 预约接口(对接微服务预注册账号)
     */
    public function collect_phone_common(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if(empty($this->request->data["phone"]) || empty($this->request->data['type']) || empty($this->request->data['code'])){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$GLOBALS['site_id'];
                $phone=$this->request->data["phone"];
                $type = $this->request->data["type"];
                $code = $this->request->data["code"];
                if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                    $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
                }
                $collect_name = $site_id;
                $collect_phone=$this->CollectPhone->find("first",array("conditions"=>array("phone" => $phone, 'collect_name' => $collect_name)));
                if($collect_phone){
                    $this->export(array("ret"=>1000,"msg"=>"已经预约过了"));
                }
                $checkCode = self::reserve_sms($phone,$code,$type);
                $last = json_decode($checkCode,true);
                if($last['code'] != 0){
                    $this->export(array("ret"=>4, "msg"=>$last['desc']));
                }  
                $data = array("phone" => $phone, 'type' => $type, 'collect_name' => $collect_name,'ext1'=>$last['result']['data']['openId']);
                $result = $this->CollectPhone->save($data);
                if ($result) {
                    $this->export(array("ret"=>0,"msg"=>"预约成功"));
                } else {
                    $this->export(array("ret"=>-1,"msg"=>"预约失败"));
                }
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>5,"msg"=>"请求失败"));
        }
    }

     /**
     * 时间戳 - 精确到毫秒
     * @return float
     */
    public static function getMillisecond() {
        list($t1, $t2) = explode(' ', microtime());
        return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
    }

    /**
     * 随机字符串
     */
    public static function createNonceStr($iength = 16) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $iength; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    /**
     * 发送数据
     * @param String $url     请求的地址
     * @param Array  $header  自定义的header数据
     * @param Array  $content POST的数据
     * @return String
     */
    public static function tocurl($url, $header, $content = null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        if($content != null){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        }
        $response = curl_exec($ch);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $response;
    }

    /*
     * 调用创梦公司接口验证短信验证码
     * */
    public static function reserve_sms($phone,$phoneCode,$phoneType){
        $UserAgent  = "platform:CP;channel:CP;appVersion:1.0.0;package:com.cp.sdk;sdkVersion:1.0.0;sdkName:MSSDK;networkType:WiFi;deviceBrand:common;deviceId:00000000;localTime:2019-01-01 00:00:00";
        if($phoneType == "android"){
            $AppKey    = '6dOhZOfrZymdy8AF6pul';
            $AppSecret = 'lLsBqxKX8PTtoeVVqUOi';
        }
        if($phoneType == "ios"){
            $AppKey    = 'X3JSUpag9AAdHvjVPjEL';
            $AppSecret = 'UEDTQDuZqU6X1HjpuKP2';
        }

        $url        = "https://pub-gw.uu.cc/public-gateway/ms-player/sdk_/player/pre/reservationRegister";
        $Nonce      = self::createNonceStr(4);
        $Timestamp  = self::getMillisecond();
        $phone      = trim($phone);
        $data = json_encode(array(
            'phone'=>$phone,
            'phoneCode'=>$phoneCode,
        ));
        $str = "{$AppSecret}&AppKey={$AppKey}&Nonce={$Nonce}&Timestamp={$Timestamp}&requestBody={$data}&{$AppSecret}";
        $Signature = urlencode(md5($str));
        $header    = array('Content-Type:application/json','User-Agent:'.$UserAgent,'Accept-Language:zh_CN','AppKey:'.$AppKey,'Nonce:'.$Nonce,'Timestamp:'.$Timestamp,'Signature:'.$Signature);
        $result   = self::tocurl($url,$header,$data);
        return $result;
    }

    /**
     * 获取小动物吃鸡回答的答案
    */
    public function animal_question_user_result(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if(empty($this->request->data["phone"])){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$GLOBALS['site_id'];
                $phone=$this->request->data["phone"];
                if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                    $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
                }
                $result=$this->AnimalQuestion->find("first",array("conditions"=>array("phone" => $phone)));
                $data = array();
                if(!empty($result)){
                    $data = $result['AnimalQuestion']['result'];
                }
                $this->export(array("ret"=>0,"msg"=>"success",'data'=>$data));
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }

    /**
     * 根据用户答案计算结果
    */
    public function get_animal_question_answer(){
        try{
            $this->layout="";
            $this->autoRender=false;
            if($this->request->is("post")){
                $this->autoRender=false;
                if(empty($this->request->data["phone"]) || empty($this->request->data["answer_1"]) || empty($this->request->data["answer_2"]) || empty($this->request->data["answer_3"]) || empty($this->request->data["answer_4"])){
                    $this->export(array("ret"=>1,"msg"=>"缺少参数"));
                }
                $site_id=$GLOBALS['site_id'];
                $phone=$this->request->data["phone"];
                if (!preg_match('/^1[3456789]\d{9}$/', trim($phone))) {
                    $this->export(array("ret"=>3, "msg"=>"手机号不合法"));
                }
                $result=$this->AnimalQuestion->find("first",array("conditions"=>array("phone" => $phone)));
                if(!empty($result)){
                    $this->export(array("ret"=>2,"msg"=>"已经领取过了"));
                }
                $config = array('a'=>array('a'=>1,'b'=>2,'c'=>3,'d'=>4),'b'=>array('a'=>5,'b'=>6,'c'=>7,'d'=>8),'c'=>array('a'=>9,'b'=>10,'c'=>11,'d'=>12),'d'=>array('a'=>13,'b'=>14,'c'=>15,'d'=>16));
                $ret = $config[$this->request->data["answer_1"]][$this->request->data["answer_2"]];
                $rand  = mt_rand(1,100);
                if($rand<=50){
                    $category = 1;
                }elseif($rand>50 && $rand<=75){
                    $category = 2;
                }elseif($rand>75 && $rand<=95){
                    $category = 3;
                }elseif($rand>95 && $rand<=100){
                    $category = 4;
                }
                $data = array("phone" => $phone, 'answer_1' => $this->request->data["answer_1"],'answer_2' => $this->request->data["answer_2"],'answer_3' => $this->request->data["answer_3"],'answer_4' => $this->request->data["answer_4"], 'result' => $ret.'_'.$category);
                $ret2 = $this->AnimalQuestion->save($data);
                if ($ret2) {
                    $this->export(array("ret"=>0,"msg"=>"success","data"=>$ret.'_'.$category));
                } else {
                    $this->export(array("ret"=>-1,"msg"=>"fail"));
                }
            }
        }catch(Exception $e) {
            $this->export(array("ret"=>3,"msg"=>"请求失败"));
        }
    }


}


?>
