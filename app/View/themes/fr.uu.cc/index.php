<?php 

class MyClass {
	
	const SECRET = 'wqwrt57opv7tgv7gb8h9h9u1231kllfmolkjfewhgjj59uesq';
	
	const MD5KEY = 'checksum';
	
	const SHARE_URL = '//qd.uu.cc/activity/qd/qd?open_id=%s&nickname=%s';
	
	const CLICK_URL = '//all-game-qddzz.gxpan.cn:6692/share/click';
	
	public function __construct(){
		
	}
	
	//获取sign
	private function get_sign($values) {
		ksort($values);
		$buff = "";
		foreach ($values as $k => $v)
		{
			if($k != self::MD5KEY && $v != '' && !is_array($v)){
				$buff .= $k . "=" . $v . "&";
			}
		}
		$buff .= self::SECRET;
		return md5($buff);
	}
	
	//设置签名
	private function set_sign($values) {
		ksort($values);
		$buff = "";
		foreach ($values as $k => $v)
		{
			if($k != self::MD5KEY && $v != '' && !is_array($v)){
				$buff .= $k . "=" . $v . "&";
			}
		}
		$buff .= self::SECRET;
		
		return md5($buff);
	}
	
	//检查签名
	private function check_sign($post_data) {
		$new_sign = $this->get_sign($post_data);
		$sign = $post_data[self::MD5KEY];
		if ($new_sign != $sign) {
			return false;
		}
		return true;
	}
	
	//获取链接
	public function get_link() {
		$post_data = $_POST;
		if (!$_POST) {
			exit(json_encode(array('ret' => 0,'msg' => '参数错误')));
		}
		//exit(json_encode($post_data));
		if (!$this->check_sign($post_data)) {
			exit(json_encode(array('ret' => 0,'msg' => '签名错误')));
		}
		$open_id = $post_data['open_id'];
		$nickname = $post_data['nickname'];
		
		$share_url = sprintf(self::SHARE_URL,$open_id,$nickname);
		
		exit(json_encode(array('ret' => 1,'url' => $share_url,'msg' => 'success')));
	}
	
	//发送点击请求
	public function click() {
		$get_data = $_GET;
		$data['open_id'] = $get_data['open_id'];
		$sign = $this->get_sign($data);
		
		$post_data['open_id'] = $get_data['open_data'];
		$post_data[self::MD5KEY] = $sign;
		
		$this->do_post(self::CLICK_URL,$data);		
	}
	
	function do_post($url,$data){ // 模拟提交数据函数
		$curl = curl_init(); // 启动一个CURL会话
		curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
		//curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
		curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
		curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
		curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
		
		$result = curl_exec($curl); // 执行操作
		
		curl_close($curl); // 关闭CURL会话
	}
	
	//模拟拉取
	public function moni1() {
		$data['open_id'] = '424242342353gfdsfsdfsf';
		$data['nickname'] = 'byuwang';
		$data[self::MD5KEY] = $this->get_sign($data);
		$url = '//sds.uu.cc/activity/qd/qd';
		$this->do_post($url,$data);
	}
}

$ob = new MyClass();

$ob->get_link();

//exit(json_encode(array('ret' => 1,'url' => $res)));