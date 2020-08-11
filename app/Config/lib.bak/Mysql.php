<?php
/**
 * MySQL layer for DBO
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
 * @package       Cake.Model.Datasource.Database
 * @since         CakePHP(tm) v 0.10.5.1790
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */



/**
 * MySQL DBO driver object
 *
 * Provides connection and SQL generation for MySQL RDMS
 *
 * @package       Cake.Model.Datasource.Database
 */
class Mysql  {

	public $description = "MySQL DBO Driver";
    public $config = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => '10.50.10.12',
        "port"=>3307,
        'login' => 'website',
        'password' => 'website2012',
        'database' => 'dgc_act',
        'prefix' => '',
        'encoding' => 'utf8',
    );
    public $connected;
    public $_connection;

	public function connect() {
		$config = $this->config;
		$this->connected = false;
		try {
			$flags = array(
				PDO::ATTR_PERSISTENT => $config['persistent'],
				PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);
			if (!empty($config['encoding'])) {
				$flags[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES ' . $config['encoding'];
			}
			if (empty($config['unix_socket'])) {
				$dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['database']}";
			} else {
				$dsn = "mysql:unix_socket={$config['unix_socket']};dbname={$config['database']}";
			}
			$this->_connection = new PDO(
				$dsn,
				$config['login'],
				$config['password'],
				$flags
			);
			$this->connected = true;
		} catch (PDOException $e) {
			throw new MissingConnectionException(array(
				'class' => get_class($this),
				'message' => $e->getMessage()
			));
		}
		return $this->connected;
	}
    function insert($table,$data){
        if(empty($data)){
            return false;
        }
        $keys=array_keys($data);
        $value="`".implode('`,`',$keys)."`";
        try{
            $sql = sprintf("INSERT INTO %s ({$value}) VALUES (%s)", $table,"'".implode ("','" , $data)."'");
            $this->_connection->exec($sql);
        }
        catch(PDOException  $e)
        {
            //die($e->getMessage());
            return false;
        }
        return $this->_connection->lastInsertId();
    }

    function update($table,$update_data,$primary_key,$primary_value){
        if(empty($update_data)){
            return false;
        }
        $set ="";
        foreach($update_data as $key=>$value){
            $set.= $key ."='".$value."',";
        }
        try{
            $sql = "update {$table} set {$set} where {$primary_key}={$primary_value}";
            $this->_connection->exec($sql);
            return true;
        }catch(Exception  $e)
        {
            return false;
        }
    }

    function update_data($sql){
        try{
            $query = $this->_connection->prepare($sql);
            $query->execute();
            return true;
        }catch (Exception $e){
            return false;
        }
    }

    function query($sql){
        try{
            $query = $this->_connection->prepare($sql);
            $query->execute();
        $result=array();
        while($row = $query->fetch()){
           $result[]=$row;
        }
        unset($query);
        }catch (Exception $e){
          return false;
        }
        return $result;
    }






}
