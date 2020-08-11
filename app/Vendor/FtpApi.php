<?php

if (!defined('FTP_ERR_SERVER_DISABLED')) {
	define('FTP_ERR_SERVER_DISABLED', -100);	//服务器不可用
	define('FTP_ERR_CONFIG_OFF', -101);			//获取配置失败
	define('FTP_ERR_CONNECT_TO_SERVER', -102);	//连接失败
	define('FTP_ERR_USER_NO_LOGGIN', -103);		//登录失败
	define('FTP_ERR_CHDIR', -104);				//进入目录失败
	define('FTP_ERR_MKDIR', -105);				//新建文件夹失败
	define('FTP_ERR_SOURCE_READ', -106);		//资源读取失败
	define('FTP_ERR_TARGET_WRITE', -107);		//资源写入失败
}

class FtpApi {

	var $enabled = false;
	var $config = array();

	var $func;
	var $connectid;
	var $_error;

	/**
	 * FtpApi constructor.
	 * @param array $config
	 */
	function __construct($config = array()) {
		//加载配置
		$this->set_error(0);
		$this->config = $config ?: Configure::read('ftp_config');
		$this->enabled = false;
		if (empty($this->config['host'])) {
			$this->set_error(FTP_ERR_CONFIG_OFF);
		} else {
			$this->func = $this->config['ssl'] && function_exists('ftp_ssl_connect') ? 'ftp_ssl_connect' : 'ftp_connect';
			if ($this->func == 'ftp_connect' && !function_exists('ftp_connect')) {
				$this->set_error(FTP_ERR_SERVER_DISABLED);
			} else {
				$this->config['host'] = $this->clear($this->config['host']);
				$this->config['port'] = intval($this->config['port']);
				$this->config['ssl'] = intval($this->config['ssl']);
				$this->config['username'] = $this->clear($this->config['username']);
				$this->config['password'] = $this->config['password'];
				$this->config['timeout'] = intval($this->config['timeout']);
				$this->config['attachdir'] = $this->config['attachdir'];
				$this->config['pasv'] = intval($this->config['pasv']);
				$this->enabled = true;
			}
		}
		//返回ftp链接对象
		return $this->connect();
	}

	/**
	 * 上传文件
	 * @param $source	需要上传文件
	 * @param $target	string	上传目标文件地址
	 * @return int		返回状态 0=是吧 1=成功
	 */
	function upload($source, $target = '', $targetName) {
		if ($this->error()) {
			return 0;
		}
		if(empty($target)){
			$target = date('Ym', time()) . '/' . $targetName;
		}
		//记录当前ftp远程路径[方便上传成功之后返回初始目录]
		$old_dir = $this->ftp_pwd();
		$dirname = './'.dirname($target);    //需要上传的远程路径
		$filename = basename($target);	//保存在服务器上面的文件名
		//检查远程ftp是否存在需要上传的目录,不存在则新建
		if (!$this->ftp_chdir($dirname)) {
			if ($this->ftp_mkdir($dirname)) {
				$this->ftp_chmod($dirname);			//设置目录读写权限
				//通过重新进入目标目录的方式检查目录是否新建成功
				if (!$this->ftp_chdir($dirname)) {
					$this->set_error(FTP_ERR_CHDIR);
				}
			} else {
				$this->set_error(FTP_ERR_MKDIR);
			}
		}
		$res = 0;
		//上传文件到目标目录
		if (!$this->error()) {
			if ($fp = @fopen($source, 'rb')) {
				$res = $this->ftp_fput($filename, $fp, FTP_BINARY);
				@fclose($fp);
				!$res && $this->set_error(FTP_ERR_TARGET_WRITE);
			} else {
				$this->set_error(FTP_ERR_SOURCE_READ);
			}
		}
		$this->ftp_chdir($old_dir);
		if($res){
			return "//dl.gamdream.com/" . $this->config['attachdir'] . $target;
		}else{
			return 0;
		}
	}

	/**
	 * 建立ftp连接
	 * @return int
	 */
	function connect() {
		if (!$this->enabled || empty($this->config)) {
			return 0;
		} else {
			return $this->ftp_connect(
				$this->config['host'],
				$this->config['username'],
				$this->config['password'],
				$this->config['attachdir'],
				$this->config['port'],
				$this->config['timeout'],
				$this->config['ssl'],
				$this->config['pasv']
			);
		}

	}

	/**
	 * ftp链接
	 * @param $ftphost
	 * @param $username
	 * @param $password
	 * @param $ftppath
	 * @param int $ftpport
	 * @param int $timeout
	 * @param int $ftpssl
	 * @param int $ftppasv
	 * @return int
	 */
	function ftp_connect($ftphost, $username, $password, $ftppath, $ftpport = 21, $timeout = 30, $ftpssl = 0, $ftppasv = 0) {
		$res = 0;
		$fun = $this->func;
		if ($this->connectid = $fun($ftphost, $ftpport, 20)) {
			$timeout && $this->set_option(FTP_TIMEOUT_SEC, $timeout);
			if ($this->ftp_login($username, $password)) {
				$this->ftp_pasv($ftppasv);
				if ($this->ftp_chdir($ftppath)) {
					$res = $this->connectid;
				} else {
					$this->set_error(FTP_ERR_CHDIR);
				}
			} else {
				$this->set_error(FTP_ERR_USER_NO_LOGGIN);
			}
		} else {
			$this->set_error(FTP_ERR_CONNECT_TO_SERVER);
		}

		if ($res > 0) {
			$this->set_error();
			$this->enabled = 1;
		} else {
			$this->enabled = 0;
			$this->ftp_close();
		}
		return $res;
	}

	/**
	 * 设置错误码
	 * @param int $code
	 */
	function set_error($code = 0) {
		$this->_error = $code;
	}

	/**
	 * 获取错误码
	 * @return mixed
	 */
	function error() {
		return $this->_error;
	}

	/**
	 * 清除url中多余字符
	 * @param $str
	 * @return mixed
	 */
	function clear($str) {
		return str_replace(array("\n", "\r", '..'), '', $str);
	}

	/**
	 * 设置ftp相关参数
	 * @param $cmd
	 * @param $value
	 * @return bool
	 */
	function set_option($cmd, $value) {
		if (function_exists('ftp_set_option')) {
			return @ftp_set_option($this->connectid, $cmd, $value);
		}
	}

	/**
	 * ftp新建目录
	 * @param $directory
	 * @return string
	 */
	function ftp_mkdir($directory) {
		$directory = $this->clear($directory);
		$epath = explode('/', $directory);
		$dir = '';
		$comma = '';
		foreach ($epath as $path) {
			$dir .= $comma . $path;
			$comma = '/';
			$return = @ftp_mkdir($this->connectid, $dir);
			$this->ftp_chmod($dir);
		}
		return $return;
	}

	/**
	 * 删除目录
	 * @param $directory
	 * @return bool
	 */
	function ftp_rmdir($directory) {
		$directory = $this->clear($directory);
		return @ftp_rmdir($this->connectid, $directory);
	}

	/**
	 * 把文件上传到服务器
	 * @param $remote_file
	 * @param $local_file
	 * @param int $mode
	 * @return bool
	 */
	function ftp_put($remote_file, $local_file, $mode = FTP_BINARY) {
		$remote_file = $this->clear($remote_file);
		$local_file = $this->clear($local_file);
		$mode = intval($mode);
		return @ftp_put($this->connectid, $remote_file, $local_file, $mode);
	}

	/**
	 * 上传一个已打开的文件，并在 FTP 服务器上把它保存为一个文件
	 * @param $remote_file
	 * @param $sourcefp
	 * @param int $mode
	 * @return bool
	 */
	function ftp_fput($remote_file, $sourcefp, $mode = FTP_BINARY) {
		$remote_file = $this->clear($remote_file);
		$mode = intval($mode);
		return ftp_fput($this->connectid, $remote_file, $sourcefp, $mode);
	}

	/**
	 * 返回指定文件的大小
	 * @param $remote_file
	 * @return int
	 */
	function ftp_size($remote_file) {
		$remote_file = $this->clear($remote_file);
		return @ftp_size($this->connectid, $remote_file);
	}

	/**
	 * 关闭 FTP 连接
	 * @return bool
	 */
	function ftp_close() {
		return @ftp_close($this->connectid);
	}

	/**
	 * 删除 FTP 服务器上的文件
	 * @param $path
	 * @return bool
	 */
	function ftp_delete($path) {
		$path = $this->clear($path);
		return @ftp_delete($this->connectid, $path);
	}

	/**
	 * 从 FTP 服务器下载文件
	 * @param $local_file
	 * @param $remote_file
	 * @param $mode
	 * @param int $resumepos
	 * @return bool
	 */
	function ftp_get($local_file, $remote_file, $mode, $resumepos = 0) {
		$remote_file = $this->clear($remote_file);
		$local_file = $this->clear($local_file);
		$mode = intval($mode);
		$resumepos = intval($resumepos);
		return @ftp_get($this->connectid, $local_file, $remote_file, $mode, $resumepos);
	}

	/**
	 * 登录 FTP 服务器
	 * @param $username
	 * @param $password
	 * @return bool
	 */
	function ftp_login($username, $password) {
		$username = $this->clear($username);
		$password = str_replace(array("\n", "\r"), array('', ''), $password);
		return @ftp_login($this->connectid, $username, $password);
	}

	/**
	 * 返回当前 FTP 被动模式是否打开
	 * @param $pasv
	 * @return bool
	 */
	function ftp_pasv($pasv) {
		return @ftp_pasv($this->connectid, $pasv ? true : false);
	}

	/**
	 * 改变 FTP 服务器上的当前目录
	 * @param $directory
	 * @return bool
	 */
	function ftp_chdir($directory) {
		$directory = $this->clear($directory);
		return @ftp_chdir($this->connectid, $directory);
	}

	/**
	 * 向服务器发送 SITE 命令
	 * @param $cmd
	 * @return bool
	 */
	function ftp_site($cmd) {
		$cmd = $this->clear($cmd);
		return @ftp_site($this->connectid, $cmd);
	}

	/**
	 * 通过 FTP 设置文件上的权限
	 * @param $filename
	 * @param int $mod
	 * @return bool|int
	 */
	function ftp_chmod($filename, $mod = 0777) {
		$filename = $this->clear($filename);
		if (function_exists('ftp_chmod')) {
			return @ftp_chmod($this->connectid, $mod, $filename);
		} else {
			return @ftp_site($this->connectid, 'CHMOD ' . $mod . ' ' . $filename);
		}
	}

	/**
	 * 返回当前目录路径
	 * @return string
	 */
	function ftp_pwd() {
		return @ftp_pwd($this->connectid);
	}

}