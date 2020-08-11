<?php
APP::uses('FrontController', 'Controller');

class WebgameController extends FrontController
{
	//密钥
	private $_secrect_key;
	const KEY = "6673386a0b276f0841e64eeca29282d7";
	var $name = 'Webgame';
	//每增加一个网站 需要写一个控件 继承  BaseHelper 负责数据层
	var $helper = array("BaseHelper", "TemRunHelper","SFHelper","MrjHelper","LieYanHelper","HxHelper","YYHelper");
    public $uses = array('Website', 'Block', 'WebsiteImage', 'News', 'NewsCategory', "CodeDetail","Phone","Survey","CollectPhone","Vote","CodeCheck","YY",'ActMusic','ActShare','ClickLike','LikePoint','Stat','ActSds','ActCmzb');
    public $is_mobile;
	
	public $prefix='';
	
	function beforeFilter() {
		$this->_secrect_key = pack('H*', self::KEY);
		parent::beforeFilter();
		
		$this->directory_name = '/themes/'.$this->directory_name.DS;
		
		//$this->prefix=$this->prefix.$this->directory_name;
		

		$this->layout = '';
	}
	
	/**
	 * 加密方法
	 * @param string $str
	 * @return string
	 */
	public function encrypt($str){
		//AES, 128 ECB模式加密数据
		$screct_key = $this->_secrect_key;
		$str = $this->addPKCS7Padding($str);
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_ECB),MCRYPT_RAND);
		$encrypt_str =  mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $screct_key, $str, MCRYPT_MODE_ECB, $iv);
		return $encrypt_str;
	}
	
	/**
	 * 解密方法
	 * @param string $str
	 * @return string
	 */
	public function decrypt($str){
		//AES, 128 ECB模式加密数据
		$screct_key = $this->_secrect_key;
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_ECB),MCRYPT_RAND);
		$encrypt_str =  mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $screct_key, $str, MCRYPT_MODE_ECB, $iv);
		$encrypt_str = trim($encrypt_str);
		$encrypt_str = $this->stripPKSC7Padding($encrypt_str);
		return $encrypt_str;
	}
	
	/**
	 * 填充算法
	 * @param string $source
	 * @return string
	 */
	function addPKCS7Padding($source){
		$source = trim($source);
		$block = mcrypt_get_block_size('rijndael-128', 'ecb');
		$pad = $block - (strlen($source) % $block);
		if ($pad <= $block) {
			$char = chr($pad);
			$source .= str_repeat($char, $pad);
		}
		return $source;
	}
	/**
	 * 移去填充算法
	 * @param string $source
	 * @return string
	 */
	function stripPKSC7Padding($source){
		$source = trim($source);
		$char = substr($source, -1);
		$num = ord($char);
		if($num==62)return $source;
		$source = substr($source,0,-$num);
		return $source;
	}
	
	function randpw($len=8,$format='ALL'){
		$is_abc = $is_numer = 0;
		$password = $tmp ='';
		switch($format){
			case 'ALL':
				$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
				break;
			case 'CHAR':
				$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
				break;
			case 'NUMBER':
				$chars='0123456789';
				break;
			default :
				$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
				break;
		} // www.jb51.net
		mt_srand((double)microtime()*1000000*getmypid());
		while(strlen($password)<$len){
			$tmp =substr($chars,(mt_rand()%strlen($chars)),1);
			if(($is_numer <> 1 && is_numeric($tmp) && $tmp > 0 )|| $format == 'CHAR'){
				$is_numer = 1;
			}
			if(($is_abc <> 1 && preg_match('/[a-zA-Z]/',$tmp)) || $format == 'NUMBER'){
				$is_abc = 1;
			}
			$password.= $tmp;
		}
		if($is_numer <> 1 || $is_abc <> 1 || empty($password) ){
			$password = randpw($len,$format);
		}
		return $password;
	}
	
	//
	function show() {
		$str = 'user15372185a0b276e0842e64eec928172d8com.cn.pkg19599e53c100000';
		$aes_str = $this->encrypt($str);
		$aes_str = sha1($aes_str);
		
		//生成uid
		$rand = $this->randpw(8,'ALL');
		$uid = date('His').$rand;
		$u_token = $this->randpw(16,'ALL');
		$this->set("uid",$uid);
		$this->set("u_token",$u_token);
		$this->set("aes_str",$aes_str);
		
		
	}
	
	
}
