<?php
App::uses('AppModel', 'Model');

/**
 * User Model
 *
 */
class User extends AppModel
{

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    function auth($name, $password)
    {
        $name = h($name);
        $conditions['conditions'] = array('name' => $name);
        $result = $this->find('first', $conditions);
        if (!empty ($result)) {
            $pw = $result ['User'] ['password'];
            //if (md5($password) == $pw) {
            if ($password == $pw) {
                return $result;
            }
        }
        return false;
    }

}
