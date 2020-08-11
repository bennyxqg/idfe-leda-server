<?php
App::uses('AppModel', 'Model');

/**
 * NewsCategory Model
 *
 */
class NewsCategory extends AppModel
{

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';

    function getCategoryList($site_id = null, $condition = array())
    {
        $conditions = array();
        
        if ($condition) {
            $conditions['conditions'] = $condition;
        }
        if (!empty($site_id)) {
            $conditions["conditions"]["site_id"] = $site_id;
        }
        $result = $this->find('list', $conditions);
        if (!empty($result)) {
            return $result;
        }
    }
    
    function getNewsCategoryName($id,$site_id = null)
    {
    	$conditions = array();
    	$conditions["conditions"]["id"] = $id;
    	$result = $this->find('first', $conditions);
    	return $result['NewsCategory'];
    }

}
