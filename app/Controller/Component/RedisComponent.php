<?php
class RedisComponent extends Component
{
//	static public $config=array(
//		'host'=>'127.0.0.1',
//		'port'=>6379,
//		'timeout'=>300,
//	);
	static public $config;
	
	protected $redis=null;
	protected $isConnected=false;
	
	function getInstance()
	{
		$this->check_connect();
		return $this->redis;
	}
	
	function startup(Controller $controller)
	{
		$this->controller = $controller;
	}
	
	protected function do_connect($host, $port, $timeout)
	{
		if($this->isConnected)
			return true;
		$this->redis=new Redis();
		return $this->isConnected=$this->redis->connect($host,$port,$timeout);
	}
	
	protected function check_connect()
	{
//		if(!$this->isConnected)
//			$this->isConnected=$this->do_connect(self::$config['host'], self::$config['port'], self::$config['timeout']);
		if(!$this->isConnected){
			// 20171102 jerry.hua redis 配置从配置文件读取
			$config = Configure::read('redis_config_default');
			if ($config) {
				self::$config = $config;
			}
			$this->isConnected = $this->do_connect(self::$config['host'], self::$config['port'], self::$config['timeout']);
		}
	}
	
	public function expire($key,$timeout)
	{
		$this->check_connect();
		return $this->redis->setTimeout($key,$timeout);
	}
	
	public function dbsize()
	{
		$this->check_connect();
		return $this->redis->dbSize();
	}
	
	public function type($key)
	{
		$this->check_connect();
		return $this->redis->type($key);
	}
	
	public function flushDB()
	{
		$this->check_connect();
		return $this->redis->flushDB();
	}
	
	public function info($param)
	{
		$this->check_connect();
		if(strlen(trim($param)) == 0)
			return $this->redis->info();
		return $this->redis->info($param);
	}
	
	public function keys($pattern)
	{
		$this->check_connect();
		return $this->redis->keys($pattern);
	}
	
	public function set($key,$value,$lifetime)
	{
		$this->check_connect();
		if($lifetime > 0)
			return $this->redis->setex($key,$lifetime,$value);
		return $this->redis->set($key,$value);
	}
	
	public function get($key)
	{
		$this->check_connect();
		return $this->redis->get($key);
	}
	
	public function delete($key)
	{
		$this->check_connect();
		return $this->redis->delete($key);
	}
	
	public function setnx($key,$value)
	{
		$this->check_connect();
		return $this->redis->setnx($key,$value);
	}
	
	public function exists($key)
	{
		$this->check_connect();
		return $this->redis->exists($key);
	}
	
	public function ttl($key)
	{
		$this->check_connect();
		return $this->redis->ttl($key);
	}
	
	public function mset($data)
	{
		$this->check_connect();
		return $this->redis->mset($data);
	}
	
	public function msetnx($data)
	{
		$this->check_connect();
		return $this->redis->msetnx($data);
	}
	
	public function increase($key,$num)
	{
		$this->check_connect();
		if($num <= 1)
			return $this->redis->incr($key);
		return $this->redis->incrBy($key,$num);
	}
	
	public function decrease($key,$num)
	{
		$this->check_connect();
		if($num <= 1)
			return $this->redis->decr($key);
		return $this->redis->decrBy($key,$num);
	}
	
	public function rpush($key,$value)
	{
		$this->check_connect();
		return $this->redis->rPush($key,$value);
	}
	
	public function lpush($key,$value)
	{
		$this->check_connect();
		return $this->redis->lPush($key,$value);
	}
	
	public function lpushx($key,$value)
	{
		$this->check_connect();
		return $this->redis->lPushx($key,$value);
	}
	
	public function rpushx($key,$value)
	{
		$this->check_connect();
		return $this->redis->rPushx($key,$value);
	}
	
	public function lpop($key)
	{
		$this->check_connect();
		return $this->redis->lPop($key);
	}
	public function rpop($key)
	{
		$this->check_connect();
		return $this->redis->rPop($key);
	}
	public function blpop($key,$timeout)
	{
		$this->check_connect();
		return $this->redis->blPop($key,$timeout);
	}
	public function brpop($key,$timeout)
	{
		$this->check_connect();
		return $this->redis->brPop($key,$timeout);
	}
	public function rpoplpush($srckey,$destkey)
	{
		$this->check_connect();
		return $this->redis->rpoplpush($srckey,$destkey);
	}
	public function brpoplpush($srckey,$destkey,$timeout)
	{
		$this->check_connect();
		return $this->redis->brpoplpush($srckey,$destkey,$timeout);
	}
	public function lsize($key)
	{
		$this->check_connect();
		return $this->redis->lSize($key);
	}
	public function sadd($key,$value)
	{
		$this->check_connect();
		return $this->redis->sAdd($key,$value);
	}
	
	public function smembers($key)
	{
		$this->check_connect();
		return $this->redis->sMembers($key);
	}
	
	public function smove($srckey,$destkey,$value)
	{
		$this->check_connect();
		return $this->redis->sMove($srckey,$destkey,$value);
	}
	
	public function sdelete($key,$value)
	{
		$this->check_connect();
		return $this->redis->sRemove($key,$value);
	}
	
	public function ssize($key)
	{
		$this->check_connect();
		return $this->redis->sSize($key);
	}
	
	public function scontains($key,$value)
	{
		$this->check_connect();
		return $this->redis->sContains($key,$value);
	}
	
	public function spop($key)
	{
		$this->check_connect();
		return $this->redis->sPop($key);
	}
	
	public function srandmember($key)
	{
		$this->check_connect();
		return $this->redis->sRandMember($key);
	}
	
	public function sinter($keys)
	{
		$this->check_connect();
		$len=count($keys);
		for($i=0;$i<$len;$i++)
			$keys[$i]="'".$keys[$i]."'";
		$evalcode='return $this->redis->sInter('.implode(',', $keys).');';
		return eval($evalcode);
	}
	
	public function sunion($keys)
	{
		$this->check_connect();
		$len=count($keys);
		for($i=0;$i<$len;$i++)
			$keys[$i]="'".$keys[$i]."'";
		$evalcode='return $this->redis->sUnion('.implode(',', $keys).');';
		return eval($evalcode);
	}
	
	public function sdiff($keys)
	{
		$this->check_connect();
		$len=count($keys);
		for($i=0;$i<$len;$i++)
			$keys[$i]="'".$keys[$i]."'";
		$evalcode='return $this->redis->sDiff('.implode(',', $keys).');';
		return eval($evalcode);
	}
	
	public function zadd($key,$value,$score)
	{
		$this->check_connect();
		return $this->redis->zAdd($key,$score,$value);
	}
	
	public function zdelete($key,$value)
	{
		$this->check_connect();
		return $this->redis->zDelete($key,$value);
	}
	
	public function zrange($key,$start,$end,$withscore)
	{
		$this->check_connect();
		return $this->redis->zRange($key,$start,$end,$withscore);
	}
	
	public function zrevrange($key,$start,$end,$withscore)
	{
		$this->check_connect();
		return $this->redis->zRevRange($key,$start,$end,$withscore);
	}
	
	public function zrangebyscore($key,$start,$end,$option)
	{
		$this->check_connect();
		return $this->redis->zRangeByScore($key,$start,$end,$option);
	}
	
	public function zrevrangebyscore($key,$start,$end,$option)
	{
		$this->check_connect();
		return $this->redis->zRevRangeByScore($key,$end,$start,$option);
	}
	
	public function zcount($key,$start,$end)
	{
		$this->check_connect();
		return $this->redis->zCount($key,$start,$end);
	}
	
	public function zdeleterangebyscore($key,$start,$end)
	{
		$this->check_connect();
		return $this->redis->zDeleteRangeByScore($key,$start,$end);
	}
	public function zsize($key)
	{
		$this->check_connect();
		return $this->redis->zSize($key);
	}
	
	public function zscore($key,$value)
	{
		$this->check_connect();
		return $this->redis->zScore($key,$value);
	}
	
	public function zincrease($key,$value,$score)
	{
		$this->check_connect();
		return $this->redis->zIncrBy($key,$score,$value);
	}
	
	public function zunion($output,$keys,$weights,$aggregateFunction)
	{
		$this->check_connect();
		return $this->redis->zUnion($output,$keys,$weights,$aggregateFunction);
	}
	
	public function zinter($output,$keys,$weights,$aggregateFunction)
	{
		$this->check_connect();
		return $this->redis->zInter($output,$keys,$weights,$aggregateFunction);
	}
	
	public function hset($table,$key,$value)
	{
		$this->check_connect();
		return $this->redis->hSet($table,$key,$value);
	}
	
	public function hsetnx($table,$key,$value)
	{
		$this->check_connect();
		return $this->redis->hSetNx($table,$key,$value);
	}
	
	public function hget($table,$key)
	{
		$this->check_connect();
		return $this->redis->hGet($table,$key);
	}
	
	public function hlen($table)
	{
		$this->check_connect();
		return $this->redis->hLen($table);
	}
	
	public function hdel($table,$key)
	{
		$this->check_connect();
		return $this->redis->hDel($table,$key);
	}
	
	public function hkeys($table)
	{
		$this->check_connect();
		return $this->redis->hKeys($table);
	}
	
	public function hvals($table)
	{
		$this->check_connect();
		return $this->redis->hVals($table);
	}
	
	public function hgetall($table)
	{
		$this->check_connect();
		return $this->redis->hGetAll($table);
	}
	
	public function hexists($table,$key)
	{
		$this->check_connect();
		return $this->redis->hExists($table,$key);
	}
	
	public function hincrease($table,$key,$value)
	{
		$this->check_connect();
		return $this->redis->hIncrBy($table,$key,$value);
	}
	
	public function hmset($table,$attr)
	{
		$this->check_connect();
		return $this->redis->hMset($table,$attr);
	}
	
	public function hmget($table,$attr)
	{
		$this->check_connect();
		return $this->redis->hMget($table,$attr);
	}
}