<?php
/**
 * redis数据库
 * @author wangbingyu
 * date 2014-08-28
 */
class Redisdb {
	
	private $_connection = null;
	private $is_connect = false;
	
	public function __construct($ip,$port,$timeout) {
		$this->_connection = new Redis();
		$this->_connection->connect($ip,$port,$timeout);
		if (!$this->_connection) {
			throw new Exception('redis Could not connect');
		}
		$this->is_connect = true;
	}
	
	public function __call($name, $arguments) {
		if (!method_exists($this->_connection, $name)) {
			throw new Exception('redis Method (%s) does not exist.');
		}
		try {
			return call_user_func_array(array($this->_connection, $name), $arguments);
		} catch (RedisException $e) {
			throw new Exception($e->getMessage());//$e->getMessage()
		}
	}
	
	public function __destruct() {
		if ($this->is_connect) {
			$this->close();
		}
	}
	
	public function close() {
		if ($this->is_connect) {
			$this->_connection->close();
		}
		$this->_connection = null;
		return true;
	}
	
	
}