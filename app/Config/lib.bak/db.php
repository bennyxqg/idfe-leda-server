<?php
/**
 * 数据库类
 */
include "function_db.php";
class db {
	
	/**
	 * 数据库连接对象
	 */
	public $conn;
	
	/**
	 * db 对象
	 * @var object
	 */
	public $db;
	
	/**
	 * 执行的sql
	 * Enter description here ...
	 * @var unknown_type $db_node
	 */
	public $sql;
	
	/**
	 * 执行结果
	 * Enter description here ...
	 * @var unknown_type $db_node
	 */
	public $result;
	
	/**
	 * 保存类实例的静态成员变量
	 * @var unknown
	 */
	private static $_instance;
	
	public function __construct($key = "") {
		if ($key == "") {
			$key = "comm";
		}
		$this->connect($key);
		
		$this->set_charset('utf8');
	}
	
	/**
	 * 连接数据库
	 */
	private function connect($key) {
		$config = include 'databases.php';
		print_r($config);
		echo "12";
		$config = $config[$key];
		$this->conn = new mysqli($config['hostname'],$config['username'],$config['password'],$config['database']);
		if (!$this->conn) {
			exit(json_encode(array('ret' => '1004','msg' => 'db not connect')));
		}
	}
	
	/**
	 * 设置编码
	 */
	private function set_charset($charset) {
		$this->conn->set_charset($charset);
	}
	
	/**
	 * 查询
	 */
	public function select($sql) {
		$result = $this->conn->query($sql);
		return $result;
	}
	
	/**
	 * 执行sql语句
	 */
	public function query($sql) {
		$this->sql = $sql;
		$this->result = $this->conn->query($sql);
		return $this;
	}
	
	/**
	 * 新增
	 * @param string $table
	 * @param array $data
	 */
	public function insert($table = '',$data = '') {
		//
		
		//验证参数
		if ($table == '' || $data == '') {
			exit(json_encode(array('ret' => '1004','msg' => 'table or data is empty')));
		}
		//载入db帮助文件
// 		$file = API_PATH.'function/db.php';
// 		if (!file_exists($file)) {
// 			exit(json_encode(array('ret' => '1004','msg' => 'the '.$file.' not exists')));
// 		}
	
		//require_once $file;
		
		//去掉签名
		unset($data['sign']);
		
		$this->sql = get_insert_sql($table,$data);
		$this->result = $this->query($this->sql);
		//echo $this->get_last_sql();
		return $this->get_affected_rows();
	}
	
	//忽略主键的新增
	public function insert_ignore($table = '',$data = '') {
		if ($table == '' || $data == '') {
			exit(json_encode(array('ret' => '1004','msg' => 'table or data is empty')));
		}
		$this->sql = get_insert_ignore_sql($table,$data);
		$this->result = $this->query($this->sql);
		//echo $this->get_last_sql();
		return $this->get_affected_rows();
	}
	
	//忽略主键的新增
	public function insert_ignore_update($table = '',$data = '') {
		if ($table == '' || $data == '') {
			exit(json_encode(array('ret' => '1004','msg' => 'table or data is empty')));
		}
		$this->sql = get_insert_ignore_sql($table,$data);
		//echo "dfdfdfdfdf";
		$this->sql = $this->sql.' ON DUPLICATE KEY UPDATE status = 1';
		$this->result = $this->query($this->sql);
		//echo $this->get_last_sql();
		return $this->get_affected_rows();
	}
	
	/**
	 * 更新数据
	 * @param string $table
	 * @param array $data
	 * @param array $where
	 */
	public function update($table = '', $data = '', $where = '') {
		if ($table == '' || $data == '' || $where == '') {
			exit(json_encode(array('ret' => '1004','msg' => 'table or data or where is empty')));
		}
		//载入db帮助文件
// 		$file = API_PATH.'function/db.php';
// 		if (!file_exists($file)) {
// 			exit(json_encode(array('ret' => '1004','msg' => 'the '.$file.' not exists')));
// 		}
	
// 		require_once $file;
		
		//去掉签名
		unset($data['sign']);
		
		$this->sql = get_update_sql($table, $data, $where);
		$this->result = $this->query($this->sql);
		return $this->get_affected_rows();
	}
	
	/**
	 * 获取并返回执行影响的行数
	 */
	public function get_affected_rows () {
		$res = mysqli_affected_rows($this->conn);
		if ($res == 1) {
			return true;
		} else if ($res == '-1') {
			return false;
		}
		return true;
	}
	
	/**
	 * 获取最后执行的sql
	 * Enter description here ...
	 */
	public function get_last_sql() {
		return $this->sql;
	}
	
	/**
	 * 返回错误
	 * Enter description here ...
	 */
	public function get_error() {
		return $this->conn->error();
	}
	
	/**
	 * 获取数组型结果数据
	 */
	public function result_array() {
		$data = array();
		if ($this->result->num_rows > 0) {
			$data = mysqli_fetch_all($this->result, MYSQLI_ASSOC);
		}
		return $data;
	}
	
	/**
	 * 判断是否有错误，有的话直接返回数据
	 */
	public function is_error() {
		$this->logs();
		if ($this->conn->errno) {
			return $this->conn->error;
		}
		return '';
	}
	
	/**
	 * 写日志
	 * @param string $type 1-sql类型 2-非sql类型   默认为1
	 */
	function logs($type = 1,$title = '',$msg = '') {
		//载入
		//require_once API_PATH.'function/logs.php';
		switch ($type) {
			case 1 :
				if ($this->conn->errno) {
				} else {
				}
				break;
			case 2 :
				break;
			default :
				break;
		} 
	}
	
	/**
	 * 获取新增数据产生的ID
	 */
	public function get_insert_id() {
		return $this->conn->insert_id;
	}
	
	/**
	 * 单例方法,用于访问实例的公共的静态方法
	 * @param string $node 数据库连接节点
	 */
	public static function getInstance($key) {
		if(!(self::$_instance instanceof self)) {
			self::$_instance = new self($key);
		}
		return self::$_instance;
	}
	
	public function __destruct(){
		$this->conn->close();
	}
	
}