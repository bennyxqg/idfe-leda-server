<?php
/**
 * 帮助函数
 */

/**
 * 获取insert sql
 */
if (!function_exists('get_insert_sql')) {
	function get_insert_sql($table,$data) {
		$keys = array_keys($data);
		$field = implode(',',$keys);
		
		$value = array_values($data);
		$values = implode('\',\'',$value);
		
		$sql = 'insert into '.$table.' ('.$field.') values (\''.$values.'\')';
		return $sql;
	}
}

if (!function_exists('get_insert_ignore_sql')) {
	function get_insert_ignore_sql($table,$data) {
		$keys = array_keys($data);
		$field = implode(',',$keys);
		
		$value = array_values($data);
		$values = implode('\',\'',$value);
		
		$sql = 'insert ignore into '.$table.' ('.$field.') values (\''.$values.'\')';
		return $sql;
	}
}

/**
 * 获取查询sql
 */
if (!function_exists('get_select_sql')) {
	function get_select_sql() {
		
	}
}

/**
 * 获取更新sql
 */
if (!function_exists('get_update_sql')) {
	function get_update_sql($table, $data, $where) {
		$u_data = '';
		$u_where = array();
		foreach ($data as $k => $v) {
			$u_data[] = $k.' = \''.$v.'\'';
		}
		
		foreach ($where as $k => $v) {
			$u_where[] = $k.' = \''.$v.'\'';
		}
		$sql = 'update '.$table.' set '.implode(' , ',$u_data).' where '.implode(' and ',$u_where);
		return $sql;
	}
}