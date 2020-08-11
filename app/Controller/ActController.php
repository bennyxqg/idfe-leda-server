<?php
APP::uses('FrontController', 'Controller');

/**
 * @property mixed CodeCheck
 */
class ActController extends FrontController
{
    var $name = 'Act';
    //每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
    var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
    public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint','Stat','ActSds','ActCmzb');
    public $is_mobile;
    var $_upload_limit = array(
    		'extension' => array('jpg', 'gif', 'png')
    );

    function beforeFilter()
    {
        parent::beforeFilter();
        
        if ($this -> RequestHandler -> isMobile()) {
        	$this->directory_name = '/themes/'.$this->directory_name.DS.'act'.DS.'wap';
        } else {
        	$this->directory_name = '/themes/'.$this->directory_name.DS.'act';
        }
        
        $this->layout = '';
    }
    
    //圣斗士活动首页
    public function sds_index() {
    	$view = $this->directory_name.DS.'index';
    	$list = $this->ActSds->query('select score,icon,story,name from act_sds where score > 0 order by score desc limit 15');
    	$this->set('list',$list);
    	//print_r($list);
    	$this->render($view);
    }
    
    //圣斗士活动第二步
    public function sds_step2() {
    	if ($this->request->is('post')) {
    		$phone = $this->request->data['phone'];
    		$is_exists = $this->ActSds->find("first",array("conditions"=>array("phone"=>$phone)));
    		if ($is_exists) {
    			$this->Session->write('phone',$this->request->data['phone']);
    			exit(json_encode(array('ret' => 2,'msg' => '手机号已经存在，请更换手机号参与')));
    		}
    		//验证参数
    		$auth = array('icon' => '头像不能为空','name' => '姓名不能为空','phone' => '手机号码不能为空','qq' => 'qq不能为空','address' => '地址不能为空','story' => '故事不能为空');
    		foreach ($auth as $k => $v) {
    			if (!isset($this->request->data[$k]) || $this->request->data[$k] == '') {
    				exit(json_encode(array('ret' => 1,'msg' => $v)));
    			}
    		}
    		
    		$this->request->data['status_step2'] = 1;
    		$result = $this->ActSds->save($this->request->data);
    		if ($result) {
    			$this->Session->write('phone',$this->request->data['phone']);
    			exit(json_encode(array('ret' => 0,'msg' => '保存成功')));
    		} else {
    			exit(json_encode(array('ret' => 1,'msg' => '保存失败')));
    		}
    	} else {
	    	$view = $this->directory_name.DS.'step2';
	    	$this->render($view);
    	}
    }
    
    //圣斗士活动第三步
    public function sds_step3() {
    	if ($this->request->is('post')) {
    		$phone = intval($this->request->data['phone']);
    		$score = intval($this->request->data['score']);
    		$info = $this->ActSds->find("first",array("conditions"=>array("phone"=>$phone)));
    		if ($info['ActSds']['status_step3'] == 1) {
    			exit(json_encode(array('ret' => 2,'msg' => '请勿重复保存','share_url' => 'http://sds.uu.cc/act/show_qrcode/'.$info['ActSds']['id'])));
    		}
    		$sql = "update act_sds set `score` = '$score',`status_step3` = '1' where `phone` = '$phone'";
    		$result = $this->ActSds->query($sql);
    		//print_r($sql);
    		if ($this -> RequestHandler -> isMobile()) {
    			exit(json_encode(array('ret' => 0,'msg' => '保存成功','id' => $info['ActSds']['id'])));
    		} else {
    			exit(json_encode(array('ret' => 0,'msg' => '保存成功','share_url' => 'http://sds.uu.cc/act/show_qrcode/'.$info['ActSds']['id'])));
    		}
    	} else {
	    	$view = $this->directory_name.DS.'step3';
	    	$this->render($view);
    	}
    }
    
    //生成二维码
    public function qrcode() {
    	App::import('Vendor', 'phpqrcode');
    	if (!isset($this->request->params['id'])) {
    		$redirect_url = FULL_BASE_URL."/404mike.html";
            $this->redirect($redirect_url);
    	}
    	$id = $this->request->params['id'];
    	$url = "http://sds.uu.cc/act/share/$id";
    	QRcode::png($url,false,10,10);
    }
    
    //二维码页面
    public function show_qrcode() {
    	$id = $this->request->params['id'];
    	$this->set('id',$id);
    	$view = $this->directory_name.DS.'show_qrcode';
    	$this->render($view);
    }
    
    //查看分享页面
    public function sds_step4() {
    	$id = $this->request->params['id'];
    	$info = $this->ActSds->find("first",array("conditions"=>array("id"=>$id)));
    	if (!$info) {
    		$redirect_url = FULL_BASE_URL."/404mike.html";
            $this->redirect($redirect_url);;
    	} else {
    		//print_r($info['ActSds']['score']);
    		$this->set('score',$info['ActSds']['score']);
    		$view = '/themes/sds.uu.cc/act/wap/share';
    		$this->render($view);
    	}
    	//print_r($info);
    }
    
    //上传图片
	/**
     * data[WebsiteImage][big_url]参数名字
     */
    public function up_img() {
    	$act = isset($_GET['act']) ? intval($_GET['act']) : '';
    	if ($act == 'delimg') {
    		$filename = $_POST['imagename'];
    		if (unlink(WWW_ROOT . 'uploads' . DS . 'sds.uu.cc'.DS.$filename)) {
    			exit("1");
    		} else {
    			exit("删除失败");
    		}
    	} else {
	    	$target = "sds.uu.cc";
	    	$file = $this->Image->uploadify('mypic', $target);
	    	//print_r($file);
	    	//print_r('uploads/'.$file);
	    	if ($file == '') {
	    		$this->export(array("ret"=>1,"msg"=>"上传失败",'data'=>array()));
	    		exit;
	    	}
	    	if ($file == 1) {
	    		$this->export(array("ret"=>2,"msg"=>"图片大小必须小于200k",'data'=>array()));
	    		exit;
	    	}
	    	if ($file == 3) {
	    		$this->export(array("ret"=>2,"msg"=>"图片只支持png,gjf,jpg格式",'data'=>array()));
	    		exit;
	    	}
	    	$image_info = getimagesize('uploads/'.$file);
	    	$image_size = filesize('uploads/'.$file);
	    	//print_r($image_info);
	    	$result = array(
	    			'file'=>'http://'.$_SERVER['HTTP_HOST'].'/uploads/'.$file,
	    			'width' => $image_info[0],
	    			'height' => $image_info[1],
	    			'size' => $image_size
	    			
	    	);
	    	exit(json_encode($file));
// 	    	$this->export(array("ret"=>0,"msg"=>"上传成功",'file'=>$file));
    	}
    }
    
    //获取排名
    public function sds_rank() {
    	if ($this->request->is('post')) {
    		$num = $this->request->data['num'] ? $this->request->data['num'] : 15;
    		$list = $this->ActSds->query("select score,icon,story,name from act_sds order by score limit $num");
    		if ($list) {
    			exit(json_encode(array('ret' => 0,'data' => $list,'msg' => 'OK')));
    		} else {
    			exit(json_encode(array('ret' => 1,'data' => array(),'msg' => 'NULL')));
    		}
    	} else {
    		exit(json_encode(array('ret' => 1,'msg' => '请使用post方式')));
    	}
    }
    
    public function uploadimg() {
    	$data = $_REQUEST;
    	$icon = $data['icon'];
    	//print_r($_REQUEST);
    	
    	if (preg_match("/^(data:\s*image\/(\w+);base64,)/", $icon, $result)){
    		//print_r($result);
    		$type = $result[2];
    		$name = time() .rand(1000,9999).".".$type;
    		$new_file = $targetFolder = WWW_ROOT . 'uploads' . DS . "sds.uu.cc/".$name;
     		if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $icon)))){
     			exit(json_encode(array('ret' => 0,'name' => $name,'msg' => '保存成功')));
     		} else {
     			exit(json_encode(array('ret' => 1,'msg' => '保存失败')));
     		}
    	
    	}
    	
    }
    
    //圣斗士活动首页
    public function sds_test() {
    	$view = $this->directory_name.DS.'upload';
    	$this->render($view);
    }
    
    private function send_phone($content,$phone){
    	//return true;
    	$code="ids_site_support";
    	$data=array(
    			"content"=>$content,
    			"mobile"=>$phone,
    			'code'=>$code,
    			'tid'=>$this->site_id
    			
    	);
    	$api="http://sagent3.uu.cc/SMS/sa/sms/send";
    	$result=$this->requestData($api,'post',$data);
    	$result=json_decode($result,true);
    	
    	if( isset($result["ret"]) && $result["error_code"] == 0 ){
    		return true;
    	}else{
    		return false;
    	}
    }
    
    public function send_msg12() {
    	$msg = "您已成功预约《坦克大战OL》，道具礼包码：%s。5月25日11：00安卓开测，战斗即将打响，打开官网下载：http://tanke.uu.cc/";
    	$path = WWW_ROOT.'phone_code.txt';
    	$data = file($path);
    	$log = WWW_ROOT.'phone_code_log.txt';
    	
    	foreach ($data as $k => $v) {
    		$phone = '';
    		$code = '';
    		list($phone,$code) = explode(",",$v);
    		$phone = trim($phone);
    		$code = trim($code);
    		//var_dump($phone,$code);
    		$msg = sprintf($msg,$code);
    		if($this->send_phone($msg, $phone)) {
    			$mmm = $phone."___".$code."：success\n";
    			echo $mmm;
    			file_put_contents($log,$mmm,FILE_APPEND);
    		} else {
    			$mmm = $phone."___".$code."：error\n";
    			file_put_contents($log,$mmm,FILE_APPEND);
    		}
    	}
    	echo 1;
    	//exit;
    	//sleep(3);
    	//print_r($data);
    	//$content ="teste这个是12";
    	//$phone = '13794474295';
    	//$this->send_phone($content, $phone);
    	
    }
    
    public function send_msg() {
    	$phone = $_GET['phone'];
    	$msg = $_GET['msg'];
    	$this->send_phone($msg, $phone);
    	exit;
    }
    
    public function send_msg20161122() {
    	$msg = "《坦克之战》全民不删档公测将于明日（6.23号）11:00火热开启，这是您的预约礼包码%s，明日点击官网http://tanke.uu.cc/下载，快来加入战斗吧！ ";
    	$path = WWW_ROOT.'phone2.txt';
    	$data = file($path);
    	$log = WWW_ROOT.'phone2_result.txt';
    	 
    	foreach ($data as $k => $v) {
    		$phone = '';
    		$code = '';
    		list($phone,$code) = explode(",",$v);
    		$phone = trim($phone);
    		$code = trim($code);
    		//var_dump($phone,$code);
    		//exit;
    		$msg = sprintf($msg,$code);
    		if($this->send_phone($msg, $phone)) {
    			$mmm = $phone."___".$code."：success\n";
    			file_put_contents($log,$mmm,FILE_APPEND);
    		} else {
    			$mmm = $phone."___".$code."：error\n";
    			file_put_contents($log,$mmm,FILE_APPEND);
    		}
    	}
    	echo 1;
    }
    
    public function send_msg1() {
    	$msg = "【创梦资本】尊敬的%s先生您好！
您已成功报名由创梦资本举办的前海聚正开业典礼，8月8日上海，欢迎您的莅临

时间：8月8日下午13：30-22：00
地点：上海诺莱仕游艇会 柏林厅
地址：上海市浦东新区滨江大道3510号
";
    	$phone = $_REQUEST['phone'];
    	$name = $_REQUEST['name'];
    	if (!isset($_REQUEST['auth']) || $_REQUEST['auth'] != 'ledou') {
    		echo 0;
    		exit;
    	}
    	$msg = sprintf($msg,$name);
    	$result = $this->send_phone($msg, $phone);
    	if ($result) {
    		echo 1;
    	} else {
    		echo 0;
    	}
    }
    
    public function bdpzdownload(){
    	if(preg_match('/(iPhone|iPad|iPod|iOS)/i', $_SERVER['HTTP_USER_AGENT']) == 1) {
    		$url = 'https://itunes.apple.com/cn/app/kuai-le-dian-dian-xiao-he/id1023663634?mt=8';
    	} else {
    		$url = 'http://dl.uu.cc/idreamsky/ToyBlast-20_v1.3.0.0_s2.4.9.8_p3.2.2.12_AllPay_360sec_LD0S0N50005.apk';
    	}
    	$this->redirect($url);
//     	header("Location:$url");
    }
    
    //下载统计
    public function statistics() {
    	$referer = isset($_GET['referer']) ? $_GET['referer'] : $_SETVER['HTTP_REFERER'];
    	$platform = $_GET['platform'];
    	$create_time = date('Y-m-d H:i:s');
    	try{
    		$this->ActSds->query("insert into act_download(referer,platform,create_time) values('$referer','$platform','$create_time')");
    	} catch(Exception $e) {
    		print_r($e);
    	}
    	echo "1";
    }
    
    public function cmzbapply() {
     	if (isset($_REQUEST["name"])) {
     		$data['name'] = $_REQUEST["name"];
     		$data['phone'] = $_REQUEST["phone"];
     		$data['company'] = $_REQUEST["company"];
     		$data['create_time'] = date('Y-m-d H:i:s');
     		$is_exists = $this->ActCmzb->find("first",array("conditions"=>array("phone"=>$data['phone'])));
     		if ($is_exists) {
     			echo json_encode(array('ret' => 1,'msg' => '您已经提交过资料啦，请查看你的短息收件箱的通知信息哦'));
     		} else {
	     		$result = $this->ActCmzb->save($data);
	    		if ($this->send_msg122($data['name'],$data['phone'])) {
	    			echo json_encode(array('ret' => 0,'msg' => '已登记成功，稍后会把具体的活动详情以短信的形式发送到您的手机'));
	    		} else {
	    			echo json_encode(array('ret' => 1,'msg' => '登记失败'));
	    		}
     		}
     	} else {
 	    	$view = '/themes/sds.uu.cc/act/wap/cmzbapply';
 	    	$this->render($view);
     	}
    }
    
    public function send_msg122($phone,$name) {
    	$msg = "尊敬的%s先生您好！
您已成功报名由创梦资本暨创梦二期基金发布会，8月8日上海，欢迎您的莅临
    
时间：8月8日下午13：30-22：00
地点：上海诺莱仕游艇会 柏林厅
地址：上海市浦东新区滨江大道3510号
";
    	$msg = sprintf($msg,$name);
    	$result = $this->send_phone($msg, $phone);
    	
    	return $result;
    }
}



?>