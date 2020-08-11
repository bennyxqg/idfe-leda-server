<?php
App::uses('AppModel', 'Model');
/**
 * CollectPhone Model
 *
 */
class InviteLog extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'invite_log';


	function findOne($data)
    {
        $conditions = array('conditions' => $data);
        $result = $this->find('first', $conditions);
        if (!empty($result)) {
            $result = $result[$this->name];
            return $result;
        }
        return false;
    }
}	
